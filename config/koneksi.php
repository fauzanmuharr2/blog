<?php 
class Database
{
    public $host = "localhost", $user = "root", $pass = 123, $db = "blog_fauzan";
    public $koneksi;
    public function __construct()
    {
        $this->koneksi = mysqli_connect(
            $this->host,
            $this->user,
            $this->pass,
            $this->db
        );
        if ($this->koneksi) {
            // echo "berhasil";
        } else {
            echo "Koneksi Database Gagal";
        }
    }
}

$db = new Database();

include 'kategori.php';

include 'artikel.php';

include 'frontend.php';
?>