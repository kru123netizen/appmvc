<?php

class Mahasiswa_model {
    private $dbh; //ini database handler
    private $stmt;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=appmvc';

        try{
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }


    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM matakuliah');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}