<?php

if(isset($_POST['addCar'])) {
    require_once("db_config.php");
    $make = $_POST['make'];
    $model = $_POST['model'];

    $stmt = $db_connection->prepare("INSERT INTO auto(merkki, malli) VALUES(?,?)");
    $stmt->execute([$make, $model]);
    
    header("Location: list-cars.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <h1>Lisää uusi auto</h1>
        <form action="add-car.php" method="POST">
            <div class="mb-3 mt-3">
                <label for="make" class="form-label">Auton merkki:</label>
                <input type="text" class="form-control" id="make" name="make" placeholder="Auton merkki">
            </div>
            <div class="mb-3">
                <label for="model" class="form-label">Auton malli:</label>
                <input type="text" class="form-control" id="model" name="model" placeholder="Auton malli">
            </div>
            <button type="submit" class="btn btn-primary" name="addCar">Lisää</button>
        </form>
    </div>
</body>
</html>