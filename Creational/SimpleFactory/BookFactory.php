<?php

namespace Creational\SimpleFactory;


class BookFactory
{
    public function createBook($name, $author)
    {
        return new Book($name, $author);
    }
}