<?php
//artikel
 class Artikel extends Database
 {
     // menampilkan semua data
     public function index()
     {
         $data_atrikel = mysqli_query(
             $this->koneksi,
             "SELECT artikel.id, artikel.judul, artikel.foto,
             artikel.tgl, artikel.slug, kategori.nama as nama_kategori,
             users.nama FROM ((artikel JOIN kategori ON kategori.id = 
             artikel.id_kategori)
             JOIN users ON users.id = artikel.id_user)"
         );
         // var_dump($data_atrikel);
         return $data_atrikel;
     }
     public function get_kategori()
     {
            $kategori = mysqli_query($this->koneksi, "SELECT * FROM  kategori");
            // var_dump($kategori);
            return $kategori;
     }
     // menambah data
     public function create($judul, $slug, $konten, $foto, $tgl, $id_user, $id_kategori){
         mysqli_query(
             "insert into artikel values(null,'$judul','$slug','$konten','$foto','$tgl','$id_user','$id_kategori')"
         );
     }
     // menampilkan data berdasarkan ID 
     public function show($id)
     {
       $data_atrikel = mysqli_query(
           $this->koneksi,
           "select * from artikel where id='$id'"
       );
       return $data_atrikel;
     }
     // menampilkan data berdasarkan id
     public function edit($id)
     {
         $data_atrikel = mysqli_query(
             $this->koneksi,
             "select * from artikel where id='$id'"
         );
         return $data_atrikel;
     }
     // mengapdate data berdasarkan id
     public function update($id, $judul, $slug, $konten, $foto, $tgl, $id_user, $id_kategori)
     {
         mysqli_query(
             $this->koneksi,
             "update artikel set judul='$judul',slug='$slug', konten='$konten', foto='$foto', tgl='$tgl',
              id_user='$id_user', id_kategori='$id_kategori' where id='$id'"
         );
     }
     // menghapus data berdasarkan id 
     public function delete($id)
     {
         mysqli_query($this->koneksi,"delete from artikel where id='$id'");
     }
 }
?>