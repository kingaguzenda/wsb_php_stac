<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listy</h1>
    <ol>   
        <li>Wielkopolski</li>
        <ul>
            <li>Poznań</li>
            <li>Gniezno</li>
        </ul>
        <li>Dolnosląski</li>
        <ul>
            <li>Wrocław</li>
        
        <?php
            $city = "<li>Legnica</li>";
            echo $city;
            echo "<li>Bolesławiec</li>";
        ?>
        </ul>
        <li>kujawsko-pomorski</li>
        
    </ol>
    <?php
        include "./skrypty/city.php";
        require "./skrypty/city.php";
    ?> 
</body>

</html>