<?php


$container['events'] = function (){
    return new Zend\EventManager\EventManager;
};

$container['settings'] = function (){
    $dsn = 'mysql:host=localhost;';
    $database = 'pp_project_manager';
    $username = 'root';
    $password = 'laryssa';
    $options = [
        \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    ];

    return [
            'db' => [
                'dsn' => $dsn,
                'database' => $database,
                'username' => $username,
                'password' => $password,
                'options' => $options
            ]
        ];
};

$container['db'] = function ($c){
    $dsn = $c['settings']['db']['dsn'] . 'dbname=' . $c['settings']['db']['database'];
    $username = $c['settings']['db']['username'];
    $password = $c['settings']['db']['password'];
    $options =$c['settings']['db']['options'];
    
    $pdo = new \PDO($dsn, $username, $password, $options);
    $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    return $pdo;
};

$container['users_model'] = function ($c) {
    return new \App\Models\Users($c);
};

return $container;