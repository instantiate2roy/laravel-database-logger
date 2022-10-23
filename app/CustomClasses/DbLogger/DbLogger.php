<?php

namespace App\CustomClasses\DbLogger;

use Monolog\Logger;

class DbLogger
{

    public function __invoke(array $config)
    {

        return new Logger('Database', [new DbHandler()]);
    }

}
