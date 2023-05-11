<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gsyh X Pplg - Create Book</title>
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
                <div class="isi_box">
                    <h1>Create Book</h1>
                    <div class="input_login">
                        <input type="number" required name="no_buku" placeholder="No Buku" >
                        <ion-icon name="key-outline"></ion-icon>
                    </div>
                    <div class="input_login">
                        <input type="text" required name="judul_buku" placeholder="Judul Buku">
                        <ion-icon name="text-outline"></ion-icon>
                    </div>
                    <div class="input_login">
                        <select name="type_buku" required style="color: white;" >
                            <option value="">- Type Buku -</option>
                            <option value="Semua Umur">Semua Umur</option>
                            <option value="Anak-anak">Anak-anak</option>
                            <option value="Remaja">Remaja</option>
                            <option value="Dewasa">Dewasa</option>
                            <option value="Orang Tua">Orang Tua</option>
                        </select>
                        <ion-icon name="list-outline"></ion-icon>
                    </div>
                    <div class="input_login">
                        <select name="genre_buku" required style="color: white;" >
                            <option value="">- Genre Buku -</option>
                            <option value="Pendidikan">Pendidikan</option>
                            <option value="Tutorial">Tutorial</option>
                            <option value="Comedy">Comedy</option>
                            <option value="Horor">Horor</option>
                            <option value="Motivasi">Motivasi</option>
                            <option value="Dongeng">Dongeng</option>
                        </select>
                        <ion-icon name="list-outline"></ion-icon>
                    </div>
                    <button type="submit" name="aksi" value="add"><a href="#"></a>Create</button>
                </div>
            </form>
        </div>
    </section>
</body>

</html>