<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory as FactoryView;
use Illuminate\Contracts\View\View as ContractView;

class CursosController extends Controller
{
    public function index(): FactoryView|ContractView
    {
        return view('cursos');
    }
}
