<?php
    require 'koneksi/koneksi.php';

    $query = "SELECT * FROM tb_buku";
    $sql = mysqli_query($conn, $query);
    $no = 0;

    $hapus_data = "SELECT * FROM tb_buku";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gsyh X Pplg - List</title>
    <link rel="icon" href="../Image/web_ico_diamond.png">
    <link rel="stylesheet" href="../Css/stylelist.css">
    <!-- Fonts -->
    <div>
        <!-- Roboto Regular 400 -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <!-- Roboto Regular 400 -->
    </div>
    <!-- Fonts --> 
   <!-- Start Icon -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!-- End Icon -->
</head>
<body>
    <section>
        <div class="container">
            <div class="isi_box">
                <div class=".title">
                    <h1 class="title">List Buku</h1>
                    <p class="description">Ini adalah list daftar buku yang dimasukan</p>
                    <span>_ Crud <i>Create Read Update Delete</i></span>
                </div>
                <div class="list_buku">
                    <button class="btn_home"><a href="../php/index.php"><i class="fa-solid fa-house icon_plus"></i></i>Home</a></button>
                    <button class="btn_tambah_data"><a href="../php/crud.php"><i class="fa-solid fa-plus icon_plus"></i>Create Book</a></button>
                </div>
                <br>
                <div class="list_table_container">
                    <table class="list_table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>No Buku</th>
                                <th>Judul</th>
                                <th>Type</th>
                                <th>Genre</th>
                                <th style="width: 4%;">Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while($result = mysqli_fetch_assoc($sql)){
                            ?>
                            <tr>
                                <td>
                                    <?php echo ++$no; ?>.
                                </td>
                                <td><?php echo $result['no_buku']; ?></td>
                                <td><?php echo $result['judul_buku']; ?></td>
                                <td><?php echo $result['type_buku']; ?></td>
                                <td><?php echo $result['genre_buku']; ?></td>
                                <td style="width: 4%;">
                                    <a href="edit.php?edit=<?php echo $result['id_buku']; ?>">
                                        <i class="fa-solid fa-pen-to-square icon_edit"></i></a>
                                    <a href="koneksi/proses.php?delete=<?php echo $result['id_buku']; ?>">
                                        <i class="fa-solid fa-trash icon_remove" id="hapus_data" onclick="return confirm('Apakah anda ingin menghapus data tersebut?')"></i></a>
                                </td>                            
                            </tr>
                            <?php
                                }  
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body>
</html>