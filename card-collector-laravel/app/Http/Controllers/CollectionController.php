<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $cards = Card::all();

        return view('collection.index', compact('cards'));
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
