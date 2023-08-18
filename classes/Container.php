<?php

class Container{

    private static $instance;

    public static function getInstance(){
        if(!self::$instance){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public static function getDatabaseConnection(){
        require_once(__DIR__ . "/database.php");
        $database = new Database();
        return $database->getConnection();
    }

    public static function getUserModel($connection){
        require_once(__DIR__ . "/Users.php");
        return new User($connection);
    }

    public static function getProductsModel($connection){
        require_once(__DIR__ . "/Products.php");
        return new Products($connection);
    }

}

// $container = Container::getInstance();
