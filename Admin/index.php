<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <?php
session_start();
if (!isset($_SESSION['nama'])) {
	header('location:../Login/signIn.php');
}else{
 ?>
    <div class="background ">


        <h2>Admin</h2>
        <div class="d-flex justify-content-center">
            <div class="container text-center">

                <table>
                    <tr>
                        <th>ID</th>
                        <th></th>
                        <th>Judul film</th>
                        <th>Detail</th>
                        <th>Genre</th>
                        <th>Action</th>
                        <th class="tambah">
                            <a href="Tambah.php"><button type="tambah" class="btn btn-outline-light">
                                    <i class="bi bi-plus-square"></i> Tambah</button></a>
                        </th>
                        <th class="out">
                            <a href="../Login/signIn.php"><button type="submit" class="btn btn-outline-light">
                                    <i class="bi bi-box-arrow-right"></i> Out</a>
                            </button>
                        </th>
                    </tr>
                    <?php
                    include '../koneksi.php';

                    $data = mysqli_query($koneksi, "SELECT * FROM listfilm");
                    while ($result = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td><?php echo $result['id']; ?></td>
                            <td>
                                <div class="card" style="width: 9rem;">
                                    <img src="../Apps/Poster/<?php echo $result['poster']; ?>" class="card-img-top" alt="...">
                                </div>
                            </td>
                            <td><?php echo $result['name']; ?></td>
                            <td><?php echo $result['detail']; ?></td>
                            <td><?php echo $result['genre']; ?></td>
                            <td>
                                <a href="Edit.php?id=<?= $result['id']; ?>"><button type="button" class="btn btn-outline-danger"><i class="bi bi-pencil-square"></i> Edit</button></a>
                                <a href="Delete.php?id=<?= $result['id']; ?>"><button type="button" class="btn btn-outline-danger"><i class="bi bi-trash"></i></i> Hapus</button></button></a>


                            </td>

                        </tr>
                    <?php
                    }
                    ?>
                </table>

            </div>
        </div> 
        <?php 
        } 
        ?>

</body>

</html>