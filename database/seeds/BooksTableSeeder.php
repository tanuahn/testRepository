<?php

use App\Book;
use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = new Book();
        $book->id = 1;
        $book->name = 'Harry Potter';
        $book->author = 'Thieu La Tuan Anh';
        $book->price = '2000000';
        $book->save();

        $book = new Book();
        $book->id = 2;
        $book->name = 'Harry Potter 2';
        $book->author = 'Thieu La Tuan Anh';
        $book->price = '2500000';
        $book->save();
    }
}
