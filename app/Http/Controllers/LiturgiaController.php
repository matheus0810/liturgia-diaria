<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class LiturgiaController extends Controller
{
    public function index()
    {
        $response = Http::get('https://liturgia.up.railway.app/');

        if ($response->ok()) {
            $liturgia = $response->json(); // This should return an array
        } else {
            $liturgia = null; // Handle API failure gracefully
        }

        return view('liturgia.index', compact('liturgia'));
    }
}
