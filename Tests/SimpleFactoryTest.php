<?php

namespace Tests;

use Creational\SimpleFactory\Book;
use Creational\SimpleFactory\BookFactory;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{
    public function testCreateBook()
    {
        $factory = new BookFactory();
        $myBook = $factory->createBook('book name', 'book author');
        self::assertInstanceOf(Book::class, $myBook);
    }
}