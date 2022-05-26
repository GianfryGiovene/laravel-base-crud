<?php

use Illuminate\Database\Seeder;
use App\Comic;
class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // table cards seeder

        $comics = config('comics');

        foreach($comics as $comic){
            $newComic = new Comic();
            $newComic->fill($comic);
            $newComic->save();
        }
    }
}
