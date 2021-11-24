<?php

namespace IlluminateNew\Database\PDO;

use Doctrine\DBAL\Driver\AbstractMySQLDriver;
use IlluminateNew\Database\PDO\Concerns\ConnectsToDatabase;

class MySqlDriver extends AbstractMySQLDriver
{
    use ConnectsToDatabase;
}
