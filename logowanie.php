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
<a href="https://github.com/3ti-2020/crud-wiele-do-wielu-dawid-falinski"> <div class="git">   <h2> GitHub <h2>     </div> </a>
<a href="index.html"> <div class="karta">   <h2> Karta <h2>     </div> </a>
  
  </div>
<div class="a2"> 
    <h1>Dawid Faliński nr.2 </h1>
   
</div>
<div class="a3"> 
<div class="guzik"> <input type="submit" value="Włącz tryb ciemny" onclick="zmien()">   </div>  
<div class="guzik1"> <input type="submit" value="Włącz standardowy tryb" onclick="zmien1()"> </div>
</div>
<div class="b"> 
<div class="insert"> <h2> INSERT <h2> </div>

<form action="insert.php" method="POST">
    <input type="text" name="imie" placeholder="imie">
   <p> <input type="text" name="nazwisko" placeholder="nazwisko"> </p> 
    <input type="text" name="tytul" placeholder="tytul">
    <input type="submit" value="kliknij" method="POST">
    </form>
</div>
<div class="c"> 
<?php
        
        
        
        
        $servername = "sql7.freemysqlhosting.net";
        $username = "sql7374242";
        $password = "zj3dgp4r5N";
        $dbname = "sql7374242";

        $conn = new mysqli($servername, $username, $password, $dbname);
        
        $result = $conn->query("SELECT tytul, imie, nazwisko FROM autorzy, ksiazki, wypozyczenia WHERE wypozyczenia.id_ks = ksiazki.id_ks AND wypozyczenia.id_a = autorzy.id_a");

        echo("<table>");
        echo("<tr>
        <td>Imie</td>
        <td>Nazwisko</td>
        <td>Tytul</td>
        </tr>");

        while($wiersz = $result->fetch_assoc()){
            echo("<tr>");
            echo("<td>".$wiersz['imie']."<td>".$wiersz['nazwisko']."<td>".$wiersz['tytul']);
            echo("</tr>");
        }
        echo("</table>");

?>
 <a href="index.php">  <div class="wyloguj"> <h3> WYLOGUJ </H3> </div> </a>


    
</div>


</div>
<script src="main.js">    </script>
</body>

</html>