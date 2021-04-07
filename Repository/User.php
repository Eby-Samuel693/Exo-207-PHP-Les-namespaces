<?php

namespace App\Repository;

use function App\Entity\printR;

class User {

    public function __construct() {
        printR("comment va-tu ?");
    }

    public function save($user) {
        $this->user = $user;
    }
}
