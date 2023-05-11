<?php
    require 'koneksi.php';

    if (isset($_POST['aksi'])) {
        if ($_POST['aksi'] == "add") {

            $no_buku = $_POST['no_buku'];
            $no_member = $_POST['no_member'];
            $tanggal_peminjaman= $_POST['tanggal_peminjaman'];
            $tanggal_pengembalian= $_POST['tanggal_pengembalian'];

            $query_cek_buku = "SELECT * FROM tb_buku WHERE no_buku = '$no_buku'";
            $sql_cek_buku = mysqli_query($conn, $query_cek_buku);
    
            if(mysqli_num_rows($sql_cek_buku) > 0){
            
            $query = "INSERT INTO tb_peminjaman VALUES(null, '$no_buku', '$no_member', '$tanggal_peminjaman', '$tanggal_pengembalian')";
            $sql = mysqli_query($conn, $query);

            if($sql){
                // Redirect ke halaman baru setelah berhasil memasukkan data ke database
                header("Location: ../Notif-Crud/notif-pinjam.php");
           } else {
                echo "Gagal memasukkan data";
            }
        } else {
            // data buku tidak ditemukan, tampilkan notifikasi
            header("Location: ../Notif-Crud/notif-data-tidak-ditemukan.php");
        }
    }

    } else if ($_POST['aksi'] == "edit") {
        $no_buku = $_POST['no_buku'];

        $query = "UPDATE tb_peminjaman SET no_buku='$no_buku', no_member='$no_member', tanggal_peminjaman='$tanggal_peminjaman', 'tanggal_pengembalian' WHERE id_buku ='$id_buku';";
        $sql = mysqli_query($conn, $query);

        if($sql){
            header("Location: ../Notif-Crud/notif-edit.php");
        } else {
            echo $query;
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
?>
