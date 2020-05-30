<?php

namespace App\Http\Controllers;

use App\Http\Requests\Registers\StoreRequest;
use App\Register;

class RegistersController extends Controller
{
    public function index()
    {
        $registers = Register::all();

        return view('registers.index', compact('registers'));
    }

    public function create()
    {
        return view('registers.form');
    }

    public function store(StoreRequest $request)
    {
        Register::query()->create($request->all());

        return redirect()->route('registers.index');
    }
}
