<?php

namespace App\Repository;

use function App\Entity\printR;

class Article {

    public function __construct() {
        printR("Bonjour");
    }
}
