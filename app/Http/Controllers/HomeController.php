<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        $request->file('profile_image')->store('/', 'public');
    }

    public function storeS3(Request $request)
    {
        $request->file('profile_image')->store('/', 's3');
    }

    public function showS3(string $filename)
    {
        return redirect(
            Storage::disk('s3')
                ->temporaryUrl($filename, now()->addMinutes(5))
        );
    }
}
