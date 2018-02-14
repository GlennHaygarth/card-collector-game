<?php

use Illuminate\Database\Seeder;

class CardTableSeeder extends Seeder
{

public function run()
{
    DB::table('cards')->delete();
    App\Card::create(array(
        'name'     => 'King',
        'value'     => 10,
        'description'     => 'The most important card in your deck. Make sure to always safeguard this guy.'
    ));
    App\Card::create(array(
        'name'     => 'Queen',
        'value'     => 9,
        'description'     => 'The second most important card in your deck and probably the strongest fighter.'
    ));
    App\Card::create(array(
        'name'     => 'Rook',
        'value'     => 5,
        'description'     => 'A solid card that will do well at any stage of the game.'
    ));
    App\Card::create(array(
        'name'     => 'Pawn',
        'value'     => 1,
        'description'     => 'A weak card that can be disposed of. Only useful when promoted.'
    ));
}

}