<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

        $cards = Card::all();

        return view('collection.index', compact('cards'), compact('user_cards'));
    }

    public function show($id)
    {
        $card = Card::find($id);

        return view('collection.show', compact('card'));
    }

    public function addToDeck($id)
    {
        if (DB::table('card_user')->where('user_id', Auth::id())->where('card_id', $id)->exists())
        {
            //card already in deck
        }
        else
        {
            DB::table('card_user')->insert([
                'user_id' => Auth::id(),
                'card_id' => $id
            ]);
        }

        return $this->index();
    }
    public function removeFromDeck($id)
    {
        DB::table('card_user')->where('user_id', Auth::id())->where('card_id', $id)->delete();

        return $this->index();
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

        return $this->index();
    }
}
