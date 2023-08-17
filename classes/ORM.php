<?php

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

        public function getById($id){

        }

        public function deleteById($id){
            
        }

        public function updateById($id, $data){
            
        }

        public function insert($data){
            
        }

    }