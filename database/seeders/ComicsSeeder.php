<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics = config('comics');

        foreach ($comics as $my_comic) {
            $new_comic = new Comic();
            $new_comic->title = $my_comic['title'];
            $new_comic->description = $my_comic['description'];
            $new_comic->price = $my_comic['price'];
            $new_comic->series = $my_comic['series'];

            $new_comic->save();
        }
    }
}
