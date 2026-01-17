<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

/**
 * @group Países
 *
 * Controlador para gestionar los países.
 */
class CountryController extends Controller
{
    /**
     * Listar
     *
     * Obtener una lista de países
     *
     * @queryParam nroPagina int Página a mostrar. Example: 1
     * @queryParam sinPaginar boolean Para evitar la paginación y devolver todos los registros. Example: 1
     * @queryParam paginadoSimple boolean Para realizar un paginado simple con anterior/siguiente, eficiente cuando se manejan muchos datos. Example: 1
     * @queryParam ordenFechaCreado string Ordenar por fecha de creación. Valores posibles: ASC, DESC. Example: DESC
     */
    public function index(Request $request)
    {
        $valRules = [
            'nroPagina' => 'numeric|sometimes|nullable',
            'sinPaginar' => 'boolean|sometimes|nullable',
            'paginadoSimple' => 'boolean|sometimes|nullable',
            'ordenFechaCreado' => ['string', 'sometimes', 'nullable', Rule::in(['ASC', 'DESC'])],
        ];

        //Validar parametros de consulta
        $validator = Validator::make($request->all(), $valRules);
        if ($validator->fails()) {
            return response()->json(["message" => $validator->errors()], 422);
        }

        //Parametros
        $nroPagina = $request->has('nroPagina') ? $request->query('nroPagina') : 1;
        $filtroSinPaginar = $request->query('sinPaginar');
        $filtroPaginadoSimple = $request->query('paginadoSimple');
        $ordenFechaCreado = $request->query('ordenFechaCreado') ?? 'DESC';
        $cantidadPorPagina = 15;

        $query = Country::when($ordenFechaCreado, function ($query) use ($ordenFechaCreado) {
            $query->orderBy('created_at', $ordenFechaCreado);
        });

        if ($filtroSinPaginar == 1) {
            $listaBD = $query->get();
        } else if ($filtroPaginadoSimple == 1) {
            $listaBD = $query->simplePaginate($cantidadPorPagina, ['*'], 'page', $nroPagina);
        } else {
            $listaBD = $query->paginate($cantidadPorPagina, ['*'], 'page', $nroPagina);
        }

        // Datos de paginado
        $pagTotalItems = $pagTotal = $pagActual = 0;
        if ($filtroSinPaginar == 1) {
            $pagTotalItems = $listaBD->count();
            $pagTotal = 1;
        } else {
            $pagTotalItems = $filtroPaginadoSimple == 1 ? 0 : $listaBD->total();
            $pagTotal = $filtroPaginadoSimple == 1 ? 1 : ceil($pagTotalItems / $cantidadPorPagina);
            $pagActual = $nroPagina;
        }

        $listaDevolver = collect();
        if ($listaBD) {
            foreach ($listaBD as $item) {
                $listaDevolver->push($item->obtenerDatos());
            }
        }

        return response()->json([
            'data' => $listaDevolver,
            'current_page' => (int) $pagActual,
            'last_page' => $pagTotal,
            'total' => $pagTotalItems
        ], 200);
    }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Mostrar
     * 
     * Obtener los detalles de un país específico
     *
     * @urlParam country integer required ID del país. Example: 1
     */
    public function show(Country $country)
    {
        return response()->json($country->obtenerDatos(), 200);
    }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, Country $country)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(Country $country)
    // {
    //     //
    // }
}
