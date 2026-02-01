<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CourseResource\Pages;
use App\Filament\Resources\CourseResource\RelationManagers;
use App\Http\Clases\App;
use App\Models\Course;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CourseResource extends Resource
{
    protected static ?string $model = Course::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    protected static ?string $modelLabel = 'Curso';
    protected static ?string $pluralModelLabel = 'Cursos';
    protected static ?string $navigationGroup = App::FILAMENT_GROUP_CURSO;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Información del Curso')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Título')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Textarea::make('description')
                            ->label('Descripción')
                            ->required()
                            ->columnSpanFull(),
                        Forms\Components\FileUpload::make('thumbnail')
                            ->label('Miniatura')
                            ->directory('courses')
                            ->image()
                            ->columnSpanFull(),
                    ]),

                Forms\Components\Section::make('Contenido del Curso')
                    ->schema([
                        Forms\Components\Repeater::make('sectionCourses')
                            ->label('Secciones')
                            ->relationship()
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->label('Título de la Sección')
                                    ->required(),

                                Forms\Components\Repeater::make('lessonCourses')
                                    ->label('Lecciones')
                                    ->relationship('lessonCourses')
                                    ->schema([
                                        Forms\Components\TextInput::make('title')
                                            ->label('Título de la Lección')
                                            ->required(),
                                        Forms\Components\Textarea::make('description')
                                            ->label('Descripción')
                                            ->rows(2),
                                        Forms\Components\TextInput::make('video_url')
                                            ->label('URL del Video')
                                            ->url(),
                                        Forms\Components\Repeater::make('resources')
                                            ->label('Recursos')
                                            ->schema([
                                                Forms\Components\TextInput::make('name')
                                                    ->label('Nombre')
                                                    ->required(),
                                                Forms\Components\TextInput::make('url')
                                                    ->label('URL')
                                                    ->url()
                                                    ->required(),
                                            ])
                                            ->columns(2)
                                    ])
                                    ->itemLabel(fn(array $state): ?string => $state['title'] ?? null),
                            ])
                            ->itemLabel(fn(array $state): ?string => $state['title'] ?? null)
                            ->collapsed()
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail')
                    ->label('Miniatura'),
                Tables\Columns\TextColumn::make('title')
                    ->label('Título')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sectionCourses_count')
                    ->label('Secciones')
                    ->counts('sectionCourses'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Creado')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Actualizado')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ForceDeleteAction::make(),
                Tables\Actions\RestoreAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCourses::route('/'),
            'create' => Pages\CreateCourse::route('/create'),
            'edit' => Pages\EditCourse::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
