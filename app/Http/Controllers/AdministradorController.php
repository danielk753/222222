<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    public function principal() {
        return view('administrador.principal');
    }
}
