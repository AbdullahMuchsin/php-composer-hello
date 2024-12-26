<?php

namespace AbdullahMuchsin\Belajar;

class Customer
{

    public function __construct(private string $name) {}

    public function sayHello(string $name): string
    {
        return "Hai, $name My Name Is $this->name";
    }
}
