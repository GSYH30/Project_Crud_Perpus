<?php
    require 'koneksi.php';

    if (isset($_POST['aksi'])) {
        if ($_POST['aksi'] == "add") {

            $no_buku = $_POST['no_buku'];
            $judul_buku = $_POST['judul_buku'];
            $type_buku = $_POST['type_buku'];
            $genre_buku = $_POST['genre_buku'];

            $query = "INSERT INTO tb_buku VALUES(null, '$no_buku', '$judul_buku', '$type_buku', '$genre_buku')";
            $sql = mysqli_query($conn, $query);

            if($sql){
                // Redirect ke halaman baru setelah berhasil memasukkan data ke database
                header("Location: ../Notif-Crud/notif-create.php");
            } else {
                echo $query;
            }

        } else if ($_POST['aksi'] == "edit") {

            $id_buku = $_POST['id_buku'];
            $no_buku = $_POST['no_buku'];
            $judul_buku = $_POST['judul_buku'];
            $type_buku = $_POST['type_buku'];
            $genre_buku = $_POST['genre_buku'];

            $query = "UPDATE tb_buku SET no_buku='$no_buku', judul_buku='$judul_buku', type_buku='$type_buku', genre_buku='$genre_buku' WHERE id_buku ='$id_buku';";
            $sql = mysqli_query($conn, $query);

            if($sql){
                header("Location: ../Notif-Crud/notif-edit.php");
            } else {
                echo $query;
            }
        }
    } 

    if(isset($_GET['delete'])){
        $id_buku = $_GET['delete'];
        $query = "DELETE FROM tb_buku WHERE id_buku = '$id_buku';";
        $sql = mysqli_query($conn , $query);
        
        if($sql){
            header("Location: ../Notif-Crud/notif-delete.php");
        } else {
            echo $query;
        }
    }
?>