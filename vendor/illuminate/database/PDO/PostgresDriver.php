<?php

namespace IlluminateNew\Database\PDO;

use Doctrine\DBAL\Driver\AbstractPostgreSQLDriver;
use IlluminateNew\Database\PDO\Concerns\ConnectsToDatabase;

class PostgresDriver extends AbstractPostgreSQLDriver
{
    use ConnectsToDatabase;
}
