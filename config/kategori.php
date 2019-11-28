<?php
//kategori
 class Kategori extends Database
 {
     // menampilkan semua data
     public function index(){
         $datakategori = mysqli_query($this->koneksi, "select * from kategori");
         // var_dump($datakategori);
         return $datakategori;
     }
     // menambah data
     public function create($nama, $slug)
     {
         mysqli_query(
             $this->koneksi,
             "insert into kategori values(null,'$nama','$slug')"
         );
     }
     // menampilkan data berdasarkan ID
     public function show($id){
         $datakategori = mysqli_query
         (
             $this->koneksi,
             "select * from kategori where id='$id'"
         );
         return $datakategori;
     }
     // menampilkan data berdasarkan ID
     public function edit($id)
     {
        $datakategori = mysqli_query(
            $this->koneksi,
            "select * from kategori where id='$id'"
        );
        return $datakategori;
     }
     // mengapdate data berdasarkan id
     public function update($id, $nama, $slug)
     {
         mysqli_query(
             $this->koneksi,
             "update kategori set nama='$nama',slug='$slug' where id='$id'"
         );
     }
     // menghapus data berdasarkan id 
     public function delete($id)
     {
         mysqli_query($this->koneksi,"delete from kategori where id='$id'");
     }
 }
?>