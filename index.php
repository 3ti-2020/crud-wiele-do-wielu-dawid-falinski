<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<div class="a1"> 
    <a href="https://github.com/3ti-2020/crud-wiele-do-wielu-dawid-falinski">     <img src="github.png" height="100px" width="100px">  </a> 
</div>
<div class="a2"> 
    <h1>Dawid Faliński nr.2 </h1>
   <p>  <a href="index.html"> <h1> Karta</h1>  </a>  </p>
</div>
<div class="a3"> 
<input type="submit" value="Włącz tryb ciemny" onclick="zmien()">  </div>
<div class="b"> 
<form action="insert.php" method="POST" class="formularz">
                    <input type="text" name="autor" id="autor" placeholder="nazwisko">
                    <input type="text" name="imie" id="imie" placeholder="imie">
                    <input type="text" name="tytul" id="tytul" placeholder="tytul">
                    <input type="submit" value="Dodaj">
                    </form>
</div>
<div class="c"> 
<?php
        $servername = "sql7.freemysqlhosting.net";
        $username = "sql7374242";
        $password = "zj3dgp4r5N";
        $dbname = "sql7374242";

        $conn = new mysqli($servername, $username, $password, $dbname);
        $result=$conn->query("SELECT id_book, autorzy.nazwisko, tytuly.tytul FROM books, autorzy, tytuly WHERE books.id_autor=autorzy.id_autor and books.id_tytul=tytuly.id_tytul");                    /*pozycje to nazwa widoku*/

        echo("<table class='tabelka' border=1>");
            echo("<tr>
            <th>ID</th>
            <th>Nazwisko</th>
            <th>Tytul</th>
            </tr>");

                while($row=$result->fetch_assoc() ){
                    echo("<tr>");
                    echo("<td>".$row['id_book']."</td>");
                    echo("<td>".$row['nazwisko']."</td>");
                    echo("<td>".$row['tytul']."</td>");
                    echo("</tr>");
                }

            echo("</table>");

?>
    
</div>


</div>
<script src="main.js">    </script>
</body>

</html>