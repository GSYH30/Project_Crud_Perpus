<?php
    require 'koneksi.php';

    if (isset($_POST['aksi'])) {
        if ($_POST['aksi'] == "add") {

            $no_buku = $_POST['no_buku'];
            $no_member = $_POST['no_member'];
            $tanggal_peminjaman= $_POST['tanggal_peminjaman'];
            $tanggal_pengembalian= $_POST['tanggal_pengembalian'];

            // Cek no buku
            $query_cek_member = "SELECT * FROM tb_member WHERE no_member = '$no_member'";
            $sql_cek_member = mysqli_query($conn, $query_cek_member);
    
            // query untuk mengecek apakah data buku ditemukan
            $query_cek_buku = "SELECT * FROM tb_buku WHERE no_buku = '$no_buku'";
            $sql_cek_buku = mysqli_query($conn, $query_cek_buku);
    
            if(mysqli_num_rows($sql_cek_member) > 0 && mysqli_num_rows($sql_cek_buku) > 0){
                // data member dan buku ditemukan, maka lakukan proses peminjaman
                $query = "INSERT INTO tb_peminjaman VALUES(null, '$no_buku', '$no_member', '$tanggal_peminjaman', '$tanggal_pengembalian')";
                $sql = mysqli_query($conn, $query);
    
                if($sql){
                    // Redirect ke halaman baru setelah berhasil memasukkan data ke database
                    header("Location: ../Notif-Crud/notif-pinjam.php");
                } else {
                    echo "Gagal memasukkan data";
                }
            } else if(mysqli_num_rows($sql_cek_member) == 0) {
                // data member tidak ditemukan, tampilkan notifikasi
                header("Location: ../Notif-Crud/notif-check-no-member.php");
            } else {
                // data buku tidak ditemukan, tampilkan notifikasi
                header("Location: ../Notif-Crud/notif-check-no-buku.php");
        }
    }
}
    // Create Member

    if (isset($_POST['aksi'])) {
        if ($_POST['aksi'] == "add_member") {

            $no_member = $_POST['no_member'];
            $nama = $_POST['nama'];
            $kelas= $_POST['kelas'];
            $jurusan= $_POST['jurusan'];
            $password= $_POST['password'];

            $query = "INSERT INTO tb_member VALUES(null, '$no_member', '$nama', '$kelas', '$jurusan', '$password')";
            $sql = mysqli_query($conn, $query);

            if($sql){
                // Redirect ke halaman baru setelah berhasil memasukkan data ke database
                header("Location: ../Notif-Crud/notif-create-member.php");
            } else {
                echo $query;
            }
        }
    } 
 
     if(isset($_GET['delete'])){
        $id_member = $_GET['delete'];
        $query = "DELETE FROM tb_member WHERE id_member = '$id_member';";
        $sql = mysqli_query($conn , $query);
        
        if($sql){
            header("Location: ../Notif-Crud/notif-delete.php");
        } else {
            echo $query;
        }
    }

    if(isset($_GET['delete'])){
        $id_peminjaman = $_GET['delete'];
        $query = "DELETE FROM tb_peminjaman WHERE id_peminjaman = '$id_peminjaman';";
        $sql = mysqli_query($conn , $query);
        
        if($sql){
            header("Location: ../Notif-Crud/notif-delete.php");
        } else {
            echo $query;
        }
    }
    
?>