<?php

    class Products extends Orm{

        public function __construct(PDO $connection){
            parent::__construct("prod_id", "Productos", $connection);
        }

    }