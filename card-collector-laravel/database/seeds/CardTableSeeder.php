<?php

use Illuminate\Database\Seeder;

class CardTableSeeder extends Seeder
{

public function run()
{
    DB::table('cards')->delete();
    App\Card::create(array(
        'name'     => 'cardname1',
        'value'     => 10,
        'description'     => 'card description 1'
    ));
    App\Card::create(array(
        'name'     => 'cardname2',
        'value'     => 5,
        'description'     => 'card description 2'
    ));
    App\Card::create(array(
        'name'     => 'cardname3',
        'value'     => 2,
        'description'     => 'card description 3'
    ));
}

}