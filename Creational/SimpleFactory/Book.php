<?php

namespace Creational\SimpleFactory;


class Book
{
    private $bookName;
    private $bookAuthor;

    public function __construct($bookName, $bookAuthor)
    {
        $this->bookName = $bookName;   
        $this->bookAuthor = $bookAuthor;   
    }
}