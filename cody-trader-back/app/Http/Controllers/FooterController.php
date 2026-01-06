<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

/**
 * @group
 * Footer
 *
 * Controlador para gestionar la información del pie de página.
 */
class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
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

        $query = Footer::when($ordenFechaCreado, function ($query) use ($ordenFechaCreado) {
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
                $listaDevolver->push($item);
            }
        }

        return response()->json([
            'data' => $listaDevolver,
            'current_page' => (int) $pagActual,
            'last_page' => $pagTotal,
            'total' => $pagTotalItems
        ], 200);
    }

    /**
     * Obtener datos
     *
     * Obtener datos de un registro
     *
     * @urlParam id int required ID del registro. Example: 1
     */
    public function show(Footer $footer)
    {
        return response()->json($footer, 200);
    }
}
