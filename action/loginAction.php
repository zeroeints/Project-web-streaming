<?php
    include '../koneksi.php';

    global $koneksi;

    $getUser = $_POST['nama'];
    $getPass = $_POST['password'];


    $data = mysqli_query($koneksi, "SELECT * FROM user WHERE nama ='$getUser' AND password ='$getPass'");
    $check = mysqli_num_rows($data);

    $row = mysqli_fetch_array($data);

    //untuk masuk admin
    session_start();
    if ($getUser == 'admin' && $getPass == 'admin') {
        $_SESSION['nama'] = $getUser;
        header("location:../Admin/index.php");
    }else if ($check > 0) {
        $_SESSION['nama'] = $getUser;
        header('location:../Login/signIn.php?pesan=auth');
    }else {
        header('location:../Login/signIn.php?pesan=fail');
    }
?>

