<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gsyh X Pplg - Edit Member</title>
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
            <input type="hidden" name="id_member" >
                <div class="isi_box">
                    <h1>Edit Member</h1>
                    <div class="input_login">
                        <input type="number" required name="no_member" placeholder="No Buku" >
                        <ion-icon name="key-outline"></ion-icon>
                    </div>
                    <div class="input_login">
                        <input type="number" required name="nama" placeholder="Nama" > 
                        <ion-icon name="person-outline"></ion-icon>
                    </div>
                    <div class="input_login">
                        <input type="text" requiredname="kelas" placeholder="Kelas"  >
                        <ion-icon name="time-outline"></ion-icon>
                    </div>
                    <div class="input_login">
                        <input type="text" required name="jurusan" placeholder="Jurusan"  >
                        <ion-icon name="hourglass-outline"></ion-icon>
                    </div>
                    <div class="input_login">
                        <input type="password" required name="password" placeholder="Password" >
                        <ion-icon name="hourglass-outline"></ion-icon>
                    </div>
                    <button type="submit" name="aksi" value="edit"><a href="#"></a>Pinjam</button>
                </div>
                </div>
            </form>
        </div>
    </section>
</body>

</html>