<?php
    $servername = "sql7.freemysqlhosting.net";
    $username = "sql7374242";
    $password = "zj3dgp4r5N";
    $dbname = "sql7374242";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }    
  
  $imie = $_POST['imie'];
  $nazwisko=$_POST['nazwisko'];
  
  $sql="INSERT INTO `autorzy`(`imie`, `nazwisko`) VALUES ('$imie', '$nazwisko')";
  
  $tytul=$_POST['tytul'];
  
  $sql2="INSERT INTO `tytuly`(`tytul`) VALUES ('$tytul')";
  
  
        mysqli_query($conn, $sql);
        mysqli_query($conn, $sql2);
  
        $result = $conn->query("SELECT id_autor FROM autorzy order by id_autor desc limit 1");
        $result2 = $conn->query("SELECT id_tytul FROM tytuly order by id_tytul desc limit 1");
  
  
        while($wiersz = $result->fetch_assoc()){
               $zmienna= $wiersz['id_autor'];
        }
  
        while($wiersz2 = $result2->fetch_assoc()){
              $zmienna2= $wiersz2['id_tytul'];
        } 
  
        $sql3  = "INSERT INTO books(`id_tytul`, `id_autor`) VALUES ('$zmienna', '$zmienna2')";
  
        if ($conn->query($sql3) === TRUE) {
              $zmienna = $conn->insert_id;
              echo "New record created successfully. Last inserted ID is: " . $zmienna;
            } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
            };
  
        mysqli_query($conn, $sql3);
  
        $conn->close();
  
        header('Location: http://127.0.0.1/D/index.php');
  
  ?>