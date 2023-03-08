<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Użytkownicy</title>
</head>
<body>
    <h1>Użytkownicy z bd</h1>
    <?php
        require_once "../skrypty/connect.php";
        $sql = "SELECT * FROM `users`";
        $result = $conn->query($sql);
        
        //echo $user["firstName"];

        while($user = $result->fetch_assoc())
        {
            echo <<< USER
            Imię i nazwisko: $user[firstName] $user[lastName]
            <br>
            Data urodzenia: $user[birthday]
            <hr>
            USER;
        }
    ?>
    
</body>
</html>