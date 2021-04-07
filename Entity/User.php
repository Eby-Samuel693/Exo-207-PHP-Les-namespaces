<?php

namespace App\Entity;

class User {

    private string $name;

    public function __construct(string $name) {
        $this->name = $name;
        printR("Salut");
    }
}


function printR($data) {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
