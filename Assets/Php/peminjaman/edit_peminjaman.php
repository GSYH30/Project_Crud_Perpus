<!DOCTYPE html>

<?php
    require '../koneksi/koneksi.php';

        $id_buku = '';
        $no_buku = '';
        $no_member = '';
        $tanggal_peminjaman = '';
        $tanggal_pengembalian = '';

    if(isset($_GET['edit'])){
        $id_peminjaman = $_GET['edit'];
        
        $query = "SELECT * FROM tb_peminjaman WHERE id_peminjaman = '$id_peminjaman';";
        $sql = mysqli_query($conn, $query);

        $result = mysqli_fetch_assoc($sql);

        $no_buku = $result['no_buku'];
        $no_member = $result['no_member'];
        $tanggal_peminjaman = $result['tanggal_peminjaman'];
        $tanggal_pengembalian = $result['tanggal_pengembalian'];
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gsyh X Pplg - Edit Pinjam</title>
    <link rel="icon" href="../../Image/web_ico_diamond.png">
    <link rel="stylesheet" href="../../Css/stylecrud.css">
    <!-- Fonts -->
    <div>
        <!-- Roboto Regular 400 -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <!-- Roboto Regular 400 -->
    </div>
    <!-- Fonts --> 
    <!-- Ionicons -->
    <div>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </div>
    <!-- Ionicons -->
</head>
<body>
    <section>
        <div class="container">
            <form method="POST" action="../koneksi/proses_member.php">
                <input type="hidden" value="<?php echo $id_peminjaman; ?>" name="id_buku" >
                <div class="isi_box">
                    <h1>Edit Pinjam</h1>
                    <div class="input_login">
                        <input type="number" required placeholder="No Buku" value="<?php echo $no_buku;?>" name="no_buku">
                        <ion-icon name="key-outline"></ion-icon>
                    </div>
                    <div class="input_login">
                        <input type="text" required placeholder="No Member" value="<?php echo $no_member;?>" name="no_member">
                        <ion-icon name="text-outline"></ion-icon>
                    </div>
                    <div class="input_login">
                        <input type="date" required value="<?php echo $tanggal_peminjaman;?>" name="tanggal_peminjaman">
                        <ion-icon name="list-outline"></ion-icon>
                    </div>
                    <div class="input_login">
                    <input type="date" required value="<?php echo $tanggal_pengembalian;?>" name="tanggal_pengembalian">
                        <ion-icon name="list-outline"></ion-icon>
                    </div>
                    <button type="submit" name="aksi" value="edit" onclick="return confirm('Data akan di edit, anda ingin mengubah data ini?')"><a href="#"></a>Edit</button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>