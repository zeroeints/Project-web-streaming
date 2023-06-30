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
    <!-- <div class="container"> -->
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
                                <i class="bi bi-plus-square"></i>Tambah</button></a>
                    </th>
                    <th class="out">
                        <a href="Tambah.php"><button type="submit" class="btn btn-outline-light">
                                <i class="bi bi-box-arrow-right"></i>Out</a>
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
                        <td><?php echo $result['judul']; ?></td>
                        <td><?php echo $result['detail']; ?></td>
                        <td><?php echo $result['genre']; ?></td>
                        <td>
                            <a href="Edit.php?id=<?= $result['id']; ?>"><button type="button" class="btn btn-outline-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                    </svg> Edit</button></a>
                            <a href="Delete.php?id=<?= $result['id']; ?>"><button type="button" class="btn btn-outline-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"></path>
                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"></path>
                                    </svg>
                                    Hapus
                                </button></button></a>


                        </td>

                    </tr>
                <?php
                }
                ?>
            </table>
            
        </div>
    </div>
    <!-- </div> -->
</body>

</html>