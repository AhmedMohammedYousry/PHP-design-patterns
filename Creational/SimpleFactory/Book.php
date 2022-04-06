<?php

namespace Creational\SimpleFactory;


class Book
{
    private string $bookName;
    private string $bookAuthor;

    public function __construct($bookName, $bookAuthor)
    {
        $this->bookName = $bookName;   
        $this->bookAuthor = $bookAuthor;   
    }

    /**
     * @return mixed
     */
    public function getBookName(): string
    {
        return $this->bookName;
    }

    /**
     * @return mixed
     */
    public function getBookAuthor(): string
    {
        return $this->bookAuthor;
    }
}