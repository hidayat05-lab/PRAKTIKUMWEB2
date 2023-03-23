<?php 
require_once 'dbkoneksi.php';
?>
<?php 
   $_kode = $_POST['kode'];
   $_nama = $_POST['nama'];
   $_jenis_kelamin = $_POST['jk'];
   $_tempat_lahir = $_POST['tmp_lahir'];
   $_tanggal_lahir= $_POST['tgl_lahir'];
   $_Email= $_POST['email'];
   $_kartu = $_POST['kartu_id'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_kode; // ? 1
   $ar_data[]=$_nama; // ? 2
   $ar_data[]=$_jenis_kelamin;// 3
   $ar_data[]=$_tempat_lahir;
   $ar_data[]=$_tanggal_lahir ;
   $ar_data[]=$_Email;
   $ar_data[]=$_kartu; // ? 7

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO pelanggan (kode,nama,jk,tmp_lahir,tgl_lahir,email,
   ,kartu_id) VALUES (?,?,?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE pelanggan SET kode=?,nama=?,jk=?,tmp_lahir=?,
    tgl_lahir=?,email=?,kartu_id=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:list_pelanggan.php');
?>