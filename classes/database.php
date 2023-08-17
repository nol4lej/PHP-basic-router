<?php

    class Database{

        private $connection;

        public function __construct(){

            try {

                $this->connection = new PDO("sqlsrv:server=WHISPERS\SQLSERVER;database=MiDB");
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // opcion que nos devuelve un array asociativo

            } catch (PDOException $error) {
                throw new Exception("Error en la conexion a la base de datos " . $error->getMessage());
            }
        }

        public function getConnection(){
            return $this->connection;
        }

        public function closeConnection(){
            $this->connection = null;
        }

    }

