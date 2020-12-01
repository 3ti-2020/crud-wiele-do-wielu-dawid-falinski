<?php
    $conn = new mysqli("sql7.freemysqlhosting.net", "sql7374242", "zj3dgp4r5N", "sql7374242");
    $id = $_POST['id'];
    $sql = "DELETE from ksiazki WHERE id='$id'";
    mysqli_query($conn, $sql);
    header("Location: 127.0.0.1/d/logowanie.php");
?>