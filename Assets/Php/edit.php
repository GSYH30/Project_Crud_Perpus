<!DOCTYPE html>

<?php
    require 'koneksi/koneksi.php';

        $id_buku = '';
        $no_buku = '';
        $judul_buku = '';
        $type_buku = '';
        $genre_buku = '';

    if(isset($_GET['edit'])){
        $id_buku = $_GET['edit'];
        
        $query = "SELECT * FROM tb_buku WHERE id_buku = '$id_buku';";
        $sql = mysqli_query($conn, $query);

        $result = mysqli_fetch_assoc($sql);

        $no_buku = $result['no_buku'];
        $judul_buku = $result['judul_buku'];
        $type_buku = $result['type_buku'];
        $genre_buku = $result['genre_buku'];
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gsyh X Pplg - Edit</title>
    <link rel="icon" href="../Image/web_ico_diamond.png">
    <link rel="stylesheet" href="../Css/stylecrud.css">
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
            <form method="POST" action="koneksi/proses.php">
                <input type="hidden" value="<?php echo $id_buku; ?>" name="id_buku" >
                <div class="isi_box">
                    <h1>Edit Data</h1>
                    <div class="input_login">
                        <input type="number" required placeholder="No Buku"  value="<?php echo $no_buku;?>" name="no_buku">
                        <ion-icon name="key-outline"></ion-icon>
                    </div>
                    <div class="input_login">
                        <input type="text" required placeholder="Judul Buku" value="<?php echo $judul_buku;?>" name="judul_buku">
                        <ion-icon name="text-outline"></ion-icon>
                    </div>
                    <div class="input_login">
                        <select name="type_buku" style="color: white;">
                            <option value="<?= $type_buku?>"><?= $type_buku?></option>
                            <option value="Semua Umur">Semua Umur</option>
                            <option value="Anak-anak">Anak-anak</option>
                            <option value="Remaja">Remaja</option>
                            <option value="Dewasa">Dewasa</option>
                            <option value="Orang Tua" >Orang Tua</option>
                        </select>
                        <ion-icon name="list-outline"></ion-icon>
                    </div>
                    <div class="input_login">
                        <select name="genre_buku" style="color: white;">
                            <option value="<?= $genre_buku?>"><?= $genre_buku?></option>
                            <option value="Pendidikan">Pendidikan</option>
                            <option value="Tutorial">Tutorial</option>
                            <option value="Comedy">Comedy</option>
                            <option value="Horor">Horor</option>
                            <option value="Motivasi">Motivasi</option>
                            <option value="Dongeng">Dongeng</option>
                        </select>
                        <ion-icon name="list-outline"></ion-icon>
                    </div>
                    <button type="submit" name="aksi" value="edit" onclick="return confirm('Data akan di edit, anda ingin mengubah data ini?')"><a href="#"></a>Edit</button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>