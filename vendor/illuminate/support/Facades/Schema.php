<?php

namespace IlluminateNew\Support\Facades;

/**
 * @method static \IlluminateNew\Database\Schema\Builder create(string $table, \Closure $callback)
 * @method static \IlluminateNew\Database\Schema\Builder createDatabase(string $name)
 * @method static \IlluminateNew\Database\Schema\Builder disableForeignKeyConstraints()
 * @method static \IlluminateNew\Database\Schema\Builder drop(string $table)
 * @method static \IlluminateNew\Database\Schema\Builder dropDatabaseIfExists(string $name)
 * @method static \IlluminateNew\Database\Schema\Builder dropIfExists(string $table)
 * @method static \IlluminateNew\Database\Schema\Builder enableForeignKeyConstraints()
 * @method static \IlluminateNew\Database\Schema\Builder rename(string $from, string $to)
 * @method static \IlluminateNew\Database\Schema\Builder table(string $table, \Closure $callback)
 * @method static bool hasColumn(string $table, string $column)
 * @method static bool hasColumns(string $table, array $columns)
 * @method static bool dropColumns(string $table, array $columns)
 * @method static bool hasTable(string $table)
 * @method static void defaultStringLength(int $length)
 * @method static void registerCustomDoctrineType(string $class, string $name, string $type)
 * @method static array getColumnListing(string $table)
 *
 * @see \IlluminateNew\Database\Schema\Builder
 */
class Schema extends Facade
{
    /**
     * Get a schema builder instance for a connection.
     *
     * @param  string|null  $name
     * @return \IlluminateNew\Database\Schema\Builder
     */
    public static function connection($name)
    {
        return static::$app['db']->connection($name)->getSchemaBuilder();
    }

    /**
     * Get a schema builder instance for the default connection.
     *
     * @return \IlluminateNew\Database\Schema\Builder
     */
    protected static function getFacadeAccessor()
    {
        return static::$app['db']->connection()->getSchemaBuilder();
    }
}
