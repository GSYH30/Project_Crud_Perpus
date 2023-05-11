<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gsyh X Pplg - Pinjam Buku</title>
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
                <div class="isi_box">
                    <h1>Pinjam Buku</h1>
                    <div class="input_login">
                        <input type="number" required name="no_buku" placeholder="No Buku" >
                        <ion-icon name="key-outline"></ion-icon>
                    </div>
                    <div class="input_login">
                        <input type="number" required name="no_member" placeholder="No Member">
                        <ion-icon name="person-outline"></ion-icon>
                    </div>
                    <div class="input_login">
                        <input type="date" required name="tanggal_peminjaman">
                        <ion-icon name="time-outline"></ion-icon>
                    </div>
                    <div class="input_login">
                        <input type="date" required name="tanggal_pengembalian">
                        <ion-icon name="hourglass-outline"></ion-icon>
                    </div>
                    <button type="submit" name="aksi" value="add"><a href="#"></a>Pinjam</button>
                </div>
                </div>
            </form>
        </div>
    </section>
</body>

</html>