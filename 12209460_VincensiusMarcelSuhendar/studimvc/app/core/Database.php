<?php

class Database{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbnm = DB_NAME;

    private $dbh; 
    // Database Handle
    private $stmt;
    // Statement

    public function __construct(){
        $dsn = 'mysql:host=' . $this->host .';dbname=' . $this->dbnm;
        // Database connection nyari host, Database name
        $option = [
            PDO::ATTR_PERSISTENT => true,
            // Membuat database kita terjaga kondisinya / Agar koneksi tidak hangus
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            // Setvalue exception => menghindari jika ada error muncul, membuat web kita crash.
        ];
        // Konigurasi driver dan konfigurasi kesalahan dalam PDO
        try{
            $this->dbh = new PDO($dsn,$this->user,$this->pass,$option);
        }catch(PDOException $e){
            die($e->getMessage());
        }
        // mengecek suatu proses berhasil atau tidak
        // PDO harus dibungkus dalam try-catch
    }
    public function query($query){
        $this->stmt = $this->dbh->prepare($query);
    }
    public function bind($param, $value){
        $this->stmt->bindValue($param, $value);
    }
    public function execute(){
        $this->stmt->execute();
    }
    public function resultSet(){
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        // mengembalikan sebuah array assoc yang diindex dengan nama kolom
    }
    public function single(){
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
        // agar menampilkan 1 row saja
    }
    public function rowCount(){
        return $this->stmt->rowCount();
    }
    // menghitung banyaknya jumlah data dari hasil query yang dipanggil

}

?>