<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    private $viaggi = [
        [
            'titolo' => 'Viaggio a Parigi',
            'slug' => 'parigi',
            'durata' => '5 giorni',
            'prezzo' => 899,
            'descrizione' => 'Scopri la città dell’amore'
        ],
        [
            'titolo' => 'Viaggio a Tokyo',
            'slug' => 'tokyo',
            'durata' => '7 giorni',
            'prezzo' => 1499,
            'descrizione' => 'Tradizione e tecnologia'
        ],
        [
            'titolo' => 'Viaggio a New York',
            'slug' => 'new-york',
            'durata' => '6 giorni',
            'prezzo' => 1299,
            'descrizione' => 'La città che non dorme mai'
        ]
    ];

    public function homepage()
    {
        return view('Homepage');
    }
    public function about()
    {
        return view('Chisiamo');
    }



    //--------------------project-5---------------------------------------
    public function contacts()
    {
        return view('Contatti');
    }

    public function send(Request $request)
    {
        $request->validate([
            'email' => ['email', 'required'],
            'message' => ['string', 'min:5'],
        ]);
        $data = [
            'email' => $request->input('email'),
            'message' => $request->input('message')
        ];

        Mail::to('admin@mail.com')->send(new SendMail($data));
        return redirect()->back()->with('success', 'Messaggio inviato con successo!'); // effettua il redirect sulla rotta specificata
    
        
    }
}
