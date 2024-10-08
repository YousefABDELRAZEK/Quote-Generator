<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function index(){
        $quotes = ["The only way to do great work is to love what you do. - Steve Jobs",
            "Life is what happens when you're busy making other plans. - John Lennon",
            "The purpose of our lives is to be happy. - Dalai Lama",
            "Get busy living or get busy dying. - Stephen King",
            "You have within you right now, everything you need to deal with whatever the world can throw at you. - Brian Tracy",
            "Believe you can and you're halfway there. - Theodore Roosevelt",];

            $random= $quotes[array_rand($quotes)];
            return view('quote',['quote' => $random]);
    }
}
