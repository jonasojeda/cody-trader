<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

/**
 * @group Reservas
 *
 * API para gestionar reservas
 */
class ReservationController extends Controller
{
    // /**
    //  * Display a listing of the resource.
    //  */
    // public function index()
    // {
    //     //
    // }


    /**
     * Crear
     *
     * Crear un nuevo registro de reserva
     *
     * @bodyParam name string required Nombre del cliente. Example: Juan
     * @bodyParam last_name string required Apellido del cliente. Example: Perez
     * @bodyParam email string required Email del cliente. Example: juan@example.com
     * @bodyParam phone string required Teléfono del cliente. Example: 123456789
     * @bodyParam telegram_user string Usuario de Telegram del cliente. Example: @juanperez
     * @bodyParam reservation_date date required Fecha de la reserva. Example: 2024-01-20
     * @bodyParam confirmed boolean Confirmado (0 o 1). Example: 0
     * @bodyParam paid boolean Pagado (0 o 1). Example: 0
     * @bodyParam ticket file Comprobante de pago (imagen o PDF).
     * @bodyParam country_id integer ID del país asociado. Example: 1
     */
    public function store(Request $request)
    {
        $valRules = [
            'name' => 'string|max:50|required',
            'last_name' => 'string|max:50|required',
            'email' => 'string|email|max:100|required',
            'phone' => 'string|max:20|required',
            'telegram_user' => 'string|max:100|nullable',
            'reservation_date' => 'date|required',
            'confirmed' => ['boolean', Rule::in([0, 1])],
            'paid' => ['boolean', Rule::in([0, 1])],
            'ticket' => 'nullable|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'country_id' => 'nullable|exists:countries,id',
        ];

        //Validar parametros de consulta
        $validator = Validator::make($request->all(), $valRules);
        if ($validator->fails()) {
            return response()->json(["message" => $validator->errors()], 422);
        }

        $name = $request->input('name');
        $last_name = $request->input('last_name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $telegram_user = $request->input('telegram_user');
        $reservation_date = $request->input('reservation_date');
        $confirmed = $request->input('confirmed', 0);
        $paid = $request->input('paid', 0);
        $country_id = $request->input('country_id');

        //Verificar que el email no exista ya
        $existingReservation = Reservation::where('email', $email)->first();
        if ($existingReservation) {
            return response()->json(["message" => "Ya existe una reserva con este email."], 409);
        }
        
        $ticketPath = null;
        if ($request->hasFile('ticket')) {
            $ticketPath = $request->file('ticket')->store('tickets', 'public');
        }

        $reservation = Reservation::create([
            'name' => $name,
            'last_name' => $last_name,
            'email' => $email,
            'phone' => $phone,
            'telegram_user' => $telegram_user,
            'reservation_date' => $reservation_date,
            'confirmed' => $confirmed,
            'paid' => $paid,
            'ticket' => $ticketPath,
            'country_id' => $country_id,
        ]);

        return response()->json($reservation->obtenerDatos(), 201);
    }

    // /**
    //  * Display the specified resource.
    //  */
    /**
     * Mostrar
     *
     * Obtener los detalles de una reserva específica
     * 
     * @urlParam reservation integer required ID de la reserva. Example: 1
     */
    public function show(Reservation $reservation)
    {
        return response()->json($reservation->obtenerDatos(), 200);
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(Reservation $reservation)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, Reservation $reservation)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(Reservation $reservation)
    // {
    //     //
    // }
}
