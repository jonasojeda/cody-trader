<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FooterResource\Pages;
use App\Filament\Resources\FooterResource\RelationManagers;
use App\Http\Clases\App;
use App\Models\Footer;
use Filament\Forms;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FooterResource extends Resource
{
    protected static ?string $model = Footer::class;

    protected static ?string $navigationIcon = 'heroicon-o-bars-3-bottom-left';
    protected static ?string $modelLabel = 'Pie de página';
    protected static ?string $pluralModelLabel = 'Pies de página';
    protected static ?string $navigationGroup = App::FILAMENT_GROUP_LANDING;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Información General')
                    ->schema([
                        Forms\Components\TextInput::make('brand_name')
                            ->label('Nombre de la marca')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Textarea::make('brand_description')
                            ->label('Descripción')
                            ->required()
                            ->columnSpanFull(),
                        Forms\Components\TextInput::make('contact_email')
                            ->label('Email de contacto')
                            ->email()
                            ->required()
                            ->maxLength(255),
                    ]),
                // Forms\Components\Section::make('Navegación')
                //     ->schema([
                //         Forms\Components\Repeater::make('navigation_links')
                //             ->label('Enlaces de navegación')
                //             ->schema([
                //                 Forms\Components\TextInput::make('label')
                //                     ->label('Etiqueta')
                //                     ->required(),
                //                 Forms\Components\TextInput::make('url')
                //                     ->label('URL')
                //                     ->required(),
                //             ])
                //             ->deletable(false)
                //             ->columns(2),
                //     ]),
                Forms\Components\Section::make('Redes Sociales')
                    ->schema([
                        Forms\Components\Repeater::make('social_links')
                            ->label('Enlaces sociales')
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->label('Nombre')
                                    ->readOnly()
                                    ->required(),
                                Forms\Components\TextInput::make('url')
                                    ->label('URL')
                                    ->required(),
                                // Forms\Components\ColorPicker::make('color')
                                //     ->label('Color'),
                                // Forms\Components\TextInput::make('icon')
                                //     ->label('Ícono')
                                //     ->readOnly()
                                // ->helperText('Nombre del ícono en Lucide.dev')
                                // ->suffixAction(
                                //     Action::make('browse_icons')
                                //         ->icon('heroicon-o-arrow-top-right-on-square')
                                //         ->url('https://lucide.dev/icons/', shouldOpenInNewTab: true)
                                // )
                                // ->required(),
                                Forms\Components\Toggle::make('active')
                                    ->label('Activo')
                                    ->default(true),
                            ])
                            ->addable(false)
                            ->deletable(false)
                            ->columns(2)
                            ->grid(2),
                    ]),
                Forms\Components\Section::make('Legal')
                    ->schema([
                        Forms\Components\Textarea::make('risk_disclaimer')
                            ->label('Aviso de riesgo')
                            ->required()
                            ->columnSpanFull(),
                        Forms\Components\TextInput::make('copyright_text')
                            ->label('Copyright')
                            ->required()
                            ->maxLength(255),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('brand_name')
                    ->label('Marca')
                    ->searchable(),
                Tables\Columns\TextColumn::make('contact_email')
                    ->label('Email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListFooters::route('/'),
            // 'create' => Pages\CreateFooter::route('/create'),
            'edit' => Pages\EditFooter::route('/{record}/edit'),
        ];
    }
}
