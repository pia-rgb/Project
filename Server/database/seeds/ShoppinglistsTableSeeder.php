<?php

use Illuminate\Database\Seeder;

class ShoppinglistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        $shoppinglist = new App\Shoppinglist;
        $shoppinglist->title = 'Lebensmittel';
        $shoppinglist->items = 'Lebensmittel';
        $shoppinglist->done_until = '19.05.2020';


        $user = App\User::all()->first();
        $shoppinglist->user()->associate($user);
        $shoppinglist->save();

       /* $itmes = App\Items::all()->php;
        $shoppinglist->items()->sync($itmes);
        $shoppinglist->save();*/
    }
}
