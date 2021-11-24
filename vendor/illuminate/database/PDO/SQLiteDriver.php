<?php

namespace IlluminateNew\Database\PDO;

use Doctrine\DBAL\Driver\AbstractSQLiteDriver;
use IlluminateNew\Database\PDO\Concerns\ConnectsToDatabase;

class SQLiteDriver extends AbstractSQLiteDriver
{
    use ConnectsToDatabase;
}
