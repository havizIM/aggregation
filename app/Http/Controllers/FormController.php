<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoice;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function add()
    {
        return view('pages.add');
    }

    public function store(Request $request)
    {

    }
}
