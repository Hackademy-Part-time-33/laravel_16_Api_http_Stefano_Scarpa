<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AnimeController extends Controller
{
    public function welcome()
    {
        $response = Http::get('https://api.jikan.moe/v4/genres/anime')->json();

        return view('welcome', ['data' => $response['data']]);
    }

    public function genre($id)
    {
        $response = Http::get('https://api.jikan.moe/v4/anime?genres=' . $id)->json();
        return view('list-genre', ['data' => $response['data']]);
    }

    public function detail($id)
    {
        $response = Http::get('https://api.jikan.moe/v4/anime/' . $id)->json();
        return view('detail', ['data' => $response['data']]);
    }
}
