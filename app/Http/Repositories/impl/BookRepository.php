<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 28/06/19
 * Time: 17:12
 */

namespace App\Http\Repositories\impl;


use App\Book;
use App\Http\Repositories\BookRepositoryInterface;

class BookRepository extends Repository implements BookRepositoryInterface
{

    public function getModel()
    {
        return Book::class;
    }
}