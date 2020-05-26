<?php
declare(strict_types=1)

namespace App\Kernel;

final class Bootstrap {

    public function __construct(){
        $this->prepare();
    }

    public function prepare()
    {
        echo 'Welcome to StormWriter v.0.0.1';
    }
}
