<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .center-table {
            margin-left: auto;
            margin-right: auto;
        }

        .center-header {
            text-align: center;
        }

        .form-group {
            margin-bottom: 10px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
        }

        .form-group select,
        .form-group input[type="text"] {
            width: 100%;
            padding: 5px;
            font-size: 16px;
        }

        .form-group .center-table {
            text-align: center;
        }

        .form-group .center-table button,
        .form-group .center-table a {
            display: inline-block;
            padding: 8px 16px;
            font-size: 16px;
            text-decoration: none;
            color: #333;
            background-color: #f2f2f2;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-group .center-table button {
            margin-right: 10px;
        }

        .form-group .center-table button:hover,
        .form-group .center-table a:hover {
            background-color: #e6e6e6;
        }
    </style>
</head>

<body>
    <h2 class="center-header">Form Edit</h2>

    <br>
    <?php
    include '../koneksi.php';

    $id = $_GET['id'];

    $data = mysqli_query($koneksi, "SELECT * FROM listfilm WHERE id='$id'");

    while ($result = mysqli_fetch_array($data)) {
    ?>
        <form action="update.php" method="post" enctype="multipart/form-data">
            <table class="center-table" border="1">
                <tr>
                    <td>Id</td>
                    <td><input type="hidden" name="id" value="<?php echo $result['id']; ?>"></td>
                </tr>
                <tr>
                    <td>Video film</td>
                    <td><input type="file" name="video"></td>
                </tr>
                <tr>
                    <td>Poster film</td>
                    <td><input type="file" name="poster"></td>
                </tr>
                <tr>
                    <td>Detail Film</td>
                    <td><input type="text" name="detail" value="<?php echo $result['detail']; ?>"></td>
                </tr>
                <tr>
                    <td>Genre</td>
                    <td>
                        <label><input type="checkbox" name="genre[]" value="Action" <?php if (in_array('Action', explode(',', $result['genre']))) echo 'checked'; ?>> Action</label><br>
                        <label><input type="checkbox" name="genre[]" value="Romance" <?php if (in_array('Romance', explode(',', $result['genre']))) echo 'checked'; ?>> Romance</label><br>
                        <label><input type="checkbox" name="genre[]" value="Comedy" <?php if (in_array('Comedy', explode(',', $result['genre']))) echo 'checked'; ?>> Comedy</label><br>
                        <label><input type="checkbox" name="genre[]" value="Horor" <?php if (in_array('Horor', explode(',', $result['genre']))) echo 'checked'; ?>> Horor</label><br>

                    </td>
                </tr>
                <tr>
                    <th colspan="2" class="center-table">
                        <button type="submit" name="submit">Submit</button>
                        <a href="TampilanAdmin.php">Kembali</a>
                    </th>
                </tr>
            </table>
        </form>

    <?php
    }
    ?>
</body>

</html>
