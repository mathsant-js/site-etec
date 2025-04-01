<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory as FactoryView;
use Illuminate\Contracts\View\View as ContractView;

class DepartamentoController extends Controller
{
    public function index(): FactoryView|ContractView
    {
        return view('departamento');
    }
}
