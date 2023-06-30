<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit</title>
    <link rel="stylesheet" href="styleedit.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body>
    <div class="background">

        <h2 class="center-header">Form Edit</h2>

        <br>
        <?php
        include '../koneksi.php';

        $id = $_GET['id'];

        $data = mysqli_query($koneksi, "SELECT * FROM listfilm WHERE id='$id'");

        while ($result = mysqli_fetch_array($data)) {
            $genre = $result['genre'];
        ?>
            <form action="update.php" method="post" enctype="multipart/form-data">
                <table class="center-table" border="1">
                    <tr>
                        <td>Id</td>
                        <td><input type="hidden" name="id" value="<?php echo $result['id']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Judul Film</td>
                        <td><input type="text" name="name" value="<?php echo $result['name']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Video Film</td>
                        <td><input type="file" name="video"></td>
                    </tr>
                    <tr>
                        <td>Poster Film</td>
                        <td><input type="file" name="poster"></td>
                    </tr>
                    <tr>
                        <td>Detail Film</td>
                        <td><input type="text" name="detail" value="<?php echo $result['detail']; ?>"></td>
                    </tr>
                    <tr>
                        <th>Genre</th>
                        <td>
                            <select name="genre">
                                <option value="Action" <?php if ($genre == 'Action') echo 'selected'; ?>>Action</option>
                                <option value="Romance" <?php if ($genre == 'Romance') echo 'selected'; ?>>Romance</option>
                                <option value="Comedy" <?php if ($genre == 'Comedy') echo 'selected'; ?>>Comedy</option>
                                <option value="Horror" <?php if ($genre == 'Horror') echo 'selected'; ?>>Horror</option>
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
        <?php
        }
        ?>
    </div>
</body>

</html>
