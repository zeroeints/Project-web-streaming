<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styletambah.css">

    <title>Create</title>

</head>

<body>
    <div class="background">


        <form action="TambahData.php" method="post" enctype="multipart/form-data">
            <table border="1">
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
                    <td><input type="text" name="detail"></td>
                </tr>
                <tr>
                    <th>Genre</th>
                    <td>
                        <label><input type="checkbox" name="genre[]" value="Action"> Action</label><br>
                        <label><input type="checkbox" name="genre[]" value="Romance"> Romance</label><br>
                        <label><input type="checkbox" name="genre[]" value="Comedy"> Comedy</label><br>
                        <label><input type="checkbox" name="genre[]" value="Horor"> Horror</label><br>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <button type="submit" name="submit">Submit</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>