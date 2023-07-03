<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styletambah.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <title>Create</title>
</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION['nama'])) {
        header('location:../Login/signIn.php');
    } else {
    ?>
        <div class="background">
            <form action="TambahData.php" method="post" enctype="multipart/form-data">
                <table border="1">
                    <tr>
                        <th>Masukkan judul film</th>
                        <td><input type="text" name="name" placeholder="Masukkan Judul"></td>
                    </tr>
                    <tr>
                        <th>Masukkan video film</th>
                        <td><input type="file" name="video"></td>
                    </tr>
                    <tr>
                        <th>Masukkan poster film</th>
                        <td><input type="file" name="poster"></td>
                    </tr>
                    <tr>
                        <th>Detail</th>
                        <td><input type="text" name="detail" placeholder="Masukkan Detail"></td>
                    </tr>
                    <tr>
                        <th>Genre</th>
                        <td>
                            <select name="genre">
                                <option value="Action">Action</option>
                                <option value="Romance">Romance</option>
                                <option value="Comedy">Comedy</option>
                                <option value="Horor">Horror</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="2" class="center-table">
                            <button type="submit" class="btn btn-outline-danger">Submit</button>
                            <a href="index.php"><button type="button" class="btn btn-outline-danger"><i class="bi bi-box-arrow-in-right"></i> kembali</button></a>
                        </th>
                    </tr>
                </table>
            </form>
        </div>
    <?php
    }
    ?>
</body>

</html>