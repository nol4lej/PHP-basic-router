<?php

    // ORM (Object-Relational Mapping) es una herramienta que permite mapear y manipular objetos de programación directamente en una base de datos relacional.
    // facilita la interacción entre el código orientado a objetos y las tablas de una base de datos, 
    // permitiendo que los objetos de la aplicación se manipulen y consulten como si fueran entidades directamente relacionadas con 
    // la base de datos, en lugar de tener que escribir consultas SQL manuales.

    class Orm{

        protected $id; // id de la tabla
        protected $table; // nombre de la tabla
        protected $db; // conexion a db

        public function __construct($id, $table, PDO $connection){
            $this->id = $id;
            $this->table = $table;
            $this->db = $connection;
        }

        public function getAll(){
            $stm = $this->db->prepare("SELECT * FROM {$this->table}");
            $stm->execute();
            return $stm->fetchAll();
        }

        public function getById($nameTable, $id){
            $stm = $this->db->prepare("SELECT * FROM {$this->table} WHERE {$nameTable}_id = {$id}");
            $stm->execute();
            return $stm->fetch();
        }

        public function deleteById($nameTable, $id){
            $stm = $this->db->prepare("DELETE FROM {$this->table} WHERE {$nameTable}_id = {$id}");
            $stm->execute();
        }

        public function updateById($nameTable, $id, $data){
            // ---- PREPARAR QUERY CON PARAMETROS ENLAZADOS (:param) ----
            $sql = "UPDATE {$this->table} SET "; // 1.- Inicio de query

            // tecnica implode with keys
            $setClauses = array_map(function($key) { // 2.- Creo un arreglo que crea las clausulas (user_name = :username)
                return "$key = :$key";
            }, array_keys($data));

            // La función implode toma un arreglo y concatena los valores del arreglo en una sola cadena utilizando un delimitador (un separador) que tú especificas.
            $sql .= implode(", ", $setClauses); // 3.- concateno cada clausula del array con comas y espacios

            $sql .= " WHERE {$nameTable}_id = {$id}"; // 4.- concatenar (.=) el id
            // ejemplo: "UPDATE Usuarios SET user_name = :newName, user_email = :newEmail WHERE user_id = 1"
            echo $sql;
            // ---------------------------------------------------------
            //------------
            $stm = $this->db->prepare($sql);
            //------------
            // ---- PREPARAR LOS ENLAZAS DE LOS PARAMETROS EN LA QUERY ----
            foreach ($data as $key => $value){
                $stm->bindValue(":{$key}", $value); // :newName
            }
            // ---------------------------------------------------------
            //------------
            $stm->execute();
            //------------
        }

        public function insert($data){
            
        }

    }