<?php

namespace App\Http\Controllers;

use App\Mail\ContactMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactanoController extends Controller
{
    public function index() {
        return view('contactanos.index');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'correo' => 'required|email',
            'mensaje' => 'required',
        ]);

        $correo = new ContactMailable($request->all());

        Mail::to('wilxoncastillo@gmail.com')->send($correo);

        return redirect()->route('contactanos.index')->with('info', 'Mensaje enviado');
    }
}
