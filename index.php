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
<div class="insert">  </div>


</div>
<div class="c"> 

        
        
        <form action="logowanie.php" method="post">
        <p>Nazwa użytkownika</p>
        <input type="text" class="login" placeholder="a">
        <p>Hasło</p>
        <input type="text" class="haslo" placeholder="a">  <br>
        <input type="submit" value="ZALOGUJ">
        <p> login: a </p>
        <p> haslo: a </p>
        
        </form> 
        
        
        
        <?php

session_start();
    
if(isset($_GET['akcja']) && $_GET['akcja'] == 'wyloguj' ){ 
    unset($_SESSION['zalogowany']);                         
    unset($_SESSION['admin']); 
}
if(isset($_POST['haslo']) && isset($_POST['login'])){
  while($wiersz = $result->fetch_assoc()){
      if($wiersz['nazwa']==$_POST['login'] && $wiersz['haslo']==$_POST['haslo'] && $wiersz['admin'] == 1){
          $_SESSION['zalogowany'] = 1;
          $_SESSION['admin'] = 1;
      }else if($wiersz['nazwa']==$_POST['login'] && $wiersz['haslo']==$_POST['haslo']){
          $_SESSION['zalogowany'] = 1;
      }
  }
}

if(isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] == 1)
        ?>
        
    
</div>


</div>
<script src="main.js">    </script>
</body>

</html>