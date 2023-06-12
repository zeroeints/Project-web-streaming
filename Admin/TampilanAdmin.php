<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            border: 1px solid #ccc;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #e6e6e6;
        }

        a {
            text-decoration: none;
            color: #333;
            margin-right: 5px;
        }
    </style>
</head>

<body>
    <h2>Admin</h2>
    
    <table>
        <tr>
            <th>ID</th>
            <th>Judul film</th>
            <th>Detail</th>
            <th>Genre</th>
            <th>Action</th>
        </tr>
        <?php
        include '../koneksi.php';

        $data = mysqli_query($koneksi, "SELECT * FROM listfilm");
        while ($result = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $result['id']; ?></td>
                <td><?php echo $result['poster']; ?></td>
                <td><?php echo $result['detail']; ?></td>
                <td><?php echo $result['genre']; ?></td>
                <td>
                    <a href="Edit.php?id=<?= $result['id']; ?>">Edit</a>
                    <a href="Delete.php?id=<?= $result['id']; ?>">Hapus</a>
                    <a href="Tambah.php?id=<?= $result['id']; ?>">Tambah</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>
