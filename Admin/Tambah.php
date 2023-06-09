<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        table {
            width: 400px;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 5px;
            font-size: 16px;
        }

        button[type="submit"] {
            padding: 8px 16px;
            font-size: 16px;
            text-decoration: none;
            color: #333;
            background-color: #f2f2f2;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #e6e6e6;
        }
    </style>
</head>

<body>
    <form action="TambahData.php" method="post">
        <table border="1">
            <tr>
                <th>Judul Film</th>
                <td><input type="text" name="judul"></td>
            </tr>
            <tr>
                <th>Detail</th>
                <td><input type="text" name="detail"></td>
            </tr>
            <tr>
                <th>Genre</th>
                <td>
                    <label><input type="checkbox" name="genre[]" value="Action"> Action</label><br>
                    <label><input type="checkbox" name="genre[]" value="Romance"> Romance</label><br>
                    <label><input type="checkbox" name="genre[]" value="Comedy"> Comedy</label><br>
                    <label><input type="checkbox" name="genre[]" value="Horor"> Horor</label><br>

                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <button type="submit" name="submit">Submit</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>