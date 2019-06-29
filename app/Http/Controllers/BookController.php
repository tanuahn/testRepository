<?php

namespace App\Http\Controllers;

use App\Http\Repositories\BookRepositoryInterface;
use Illuminate\Http\Request;

class BookController extends Controller
{
    protected $bookRepository;
    public function __construct(BookRepositoryInterface $bookRepository)
    {
        $this->bookRepository=$bookRepository;
    }
    public function index(){
        $books = $this->bookRepository->getAll();
        return view('list', compact('books'));
    }
}