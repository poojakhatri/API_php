<?php

    class DB {
      private $pdo;
      public function __construct($host,$dbname,$username,$password) {
        $pdo = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8', '$usename', '$password');
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo=$pdo;
        return $pdo;
      }
      public  function query($query, $params = array()) {
        $statement =$this->pdo->prepare($query);
        $statement->execute($params);

        if(explode(' ',$query)[0] == 'SELECT'){
          $data = $statement->fetchAll();
          return $data;
        }
      }
    }