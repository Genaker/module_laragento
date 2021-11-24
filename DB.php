<?php

namespace Genaker\Laragento;

use IlluminateNew\Database\Capsule\Manager as Capsule;

class DB {

    public $params;

    public $connection = null;

    protected static $baseParams = [
        'driver' => 'mysql',
        'host' => 'localhost',
        'charset' => 'utf8',
        'global' => true,
        'collation' => 'utf8_unicode_ci',
        'prefix' => '',
    ];

    public function __construct(){

    $conf = include(BP . "/app/etc/env.php");
	$db = $conf["db"]["connection"]["default"]; 
	$host = $db["host"];
	$user = $db["username"];
	$password = $db["password"];
	$dbname = $db["dbname"];

	$this->params = [
		'host' => $db["host"],
		'database' => $dbname,
		'username' => $user,
		'password' => $password,
		'prefix' => '',
        'options' => [
         //   \PDO::ATTR_PERSISTENT => true
        ]
    ];

    }
   
    public function connect($PDO = null, $params = []){
        $timeStart = microtime(true);
        if ($this->connection === null){
            $capsule = new Capsule();

            $params = array_merge(static::$baseParams, $this->params, $params);
            if($PDO !== null) {
            $capsule->setPdo($PDO);
            } else {
            $capsule->addConnection($params);
            }
            $capsule->bootEloquent();
            
             $capsule->bootEloquent();
    
                if(isset($params['events'])) $capsule->setEventDispatcher(new \IlluminateNew\Events\Dispatcher);
    
                if(isset($params['global'])) $capsule->setAsGlobal();
    
                if(isset($params['log'])) $capsule->getConnection()->enableQueryLog();
    
                $this->connection =  $capsule;
        }
        $timeEnd = microtime(true);
        echo "Connection time : " . ($timeStart - $timeEnd);
        return $this->connection;
    }

}