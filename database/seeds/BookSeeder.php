<?php

use Illuminate\Database\Seeder;
use App\Author;
use App\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //sample penulis
        $author1 = Author::create(['name'=>'moh fauzil adhim']);
        $author2 = Author::create(['name'=>'salim a. fillah']);
        $author3 = Author::create(['name'=>'aam amirudin']);

        //sample buku
        $book1 =Book::create(['title'=>'kupinang engkau dengan bismillah','amount'=>3,'author_id'=>$author1->id]);
        $book2 =Book::create(['title'=>'jalan cinta para pejuang','amount'=>2,'author_id'=>$author2->id]);
        $book3 =Book::create(['title'=>'membingkai surga dalam rumah tangga','amount'=>4,'author_id'=>$author3->id]);
        $book4 =Book::create(['title'=>'cinta dan seks rumah tangga muslim','amount'=>3,'author_id'=>$author3->id]);
    }
}
