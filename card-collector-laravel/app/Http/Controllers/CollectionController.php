<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Card;

class CollectionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //
    public function index()
    {
        $user_cards = Auth::user()->cards()->get();

        // foreach(Auth::user()->cards() as $card)
        // {
        //     var_dump($card);
        // }

        // dd($user_cards);

        // dd(\App\User::find(1)->cards()->get()->first()->name);

        $cards = Card::all();

        return view('collection.index', compact('cards'), compact('user_cards'));
    }

    public function show($id)
    {
        $card = Card::find($id);

        return view('collection.show', compact('card'));
    }

    public function addCard()
    {
        $name = $_POST["name"];
        $value = $_POST["value"];
        $description = $_POST["description"];
        Card::create(array(
            'name'     => $name,
            'value'     => $value,
            'description'     => $description
        ));

        $cards = Card::all();

        return view('collection.index', compact('cards'));
    }
}
