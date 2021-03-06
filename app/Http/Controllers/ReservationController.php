<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Reservation;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    /**
     * Display
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('reservation');
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     */
    public function sendReservationMail(Request $request)
    {
        $attributes = $request->validate([
            'email' => 'required|min:2|max:100|string',
            'firstname' => 'required|min:2|max:100',
            'lastname' => 'required|min:2|max:100',
            'telephone' => 'required|min:2|max:100',
            'numberOfPersons' => 'required|min:1|max:100',
            'roomType' => 'required|min:2|max:150',
            'datefilter' => 'required|min:2|max:100',
            'reservationNotes' => 'max:1000',
            'agreement' => 'required',
            'variant' => 'required',
            'variant_route_prefix' => '',
        ]);

        if (Mail::to(config('mail.to_reservation.address'))->send(new Reservation($attributes, 'emails.reservation')) === null) {
            if (Mail::to($attributes['email'])->send(new Reservation($attributes, 'emails.reservation-customer')) === null) {
                session()->flash('flash_message_success', '<i class="fas fa-check"></i>');
            } else {
                session()->flash('flash_message_danger', '<i class="fas fa-times"></i>');
            }
        } else {
            session()->flash('flash_message_danger', '<i class="fas fa-times"></i>');
        }

        return redirect($request['variant_route_prefix'] . '/');
    }
}
