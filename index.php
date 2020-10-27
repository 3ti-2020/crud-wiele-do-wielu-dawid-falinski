<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stronka</title>
</head>
<body>

    <?php
    $conn=new mysqli('127.0.0.1','root','','koks');
    $conn->set_charset('utf8');
    $result=$conn->query("SELECT * FROM ksiazki");
    echo("<table><tr>
        <th>autor</th>
        <th>tytul</th>
    </tr>");
    while($row=$result->fetch_assoc()){
        $str = <<<HTML
        <tr>
            <td>$row[autor]</td>
            <td>$row[tytul]</td>
        </tr>
        echo $str;
    }
    echo("</table>");
    ?>
    

    </div>
</body>
</html>