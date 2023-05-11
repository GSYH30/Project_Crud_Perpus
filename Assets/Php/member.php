<?php
    require 'koneksi/koneksi.php';

    $query = "SELECT * FROM tb_member";
    $sql = mysqli_query($conn, $query);
    $no = 0; 

    $hapus_data = "SELECT * FROM tb_member";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gsyh X Pplg - Member</title>
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
                    <h1 class="title">Daftar Member</h1>
                </div>
                <p class="description">Ini adalah list member yang terdaftar</p>
                    <span>_ Crud <i>Read Delete</i></span>
                <div class="list_buku">
                    <button class="btn_home"><a href="index.php"><i class="fa-solid fa-house icon_plus"></i></i>Home</a></button>
                    <button class="btn_home"><a href="list.php"><i class="fa-solid fa-circle-left icon_plus"></i></i>Back</a></button>
                </div>
                <br>
                <div class="list_table_container">
                    <table class="list_table">
                        <thead>
                            <tr>
                                <th style="width: 50px;">Id</th>
                                <th style="width: 200px;">No Member</th>
                                <th style="width: 200px;">Nama</th>
                                <th style="width: 100px;">Kelas</th>
                                <th style="width: 200px;">Jurusan</th>
                                <th style="width: 200px;">Password</th>
                                <th style="width: 200px;">Option</th>
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
                                <td><?php echo $result['no_member'] ;?></td>
                                <td><?php echo $result['nama'] ;?></td>
                                <td><?php echo $result['kelas'] ;?></td>
                                <td><?php echo $result['jurusan'] ;?></td>
                                <td><?php echo $result['password'] ;?></td>
                                <td style="width: 4%;">
                                    <a href="koneksi/proses_member.php?delete=<?php echo $result['id_member']; ?>">
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