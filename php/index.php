<?php 
include __DIR__ . '/./discs.php';
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">


</head>

<body>

    <header>

    </header>

    <div class="container-fluid">
        <div class="row">
<?php foreach ($discs as $disc) : ?>
            <div class="col-2 text-white">
                <img class='img-fluid' src="<? echo($disc)['poster'] ?>" alt="">
                <h2><? echo($disc)['title'] ?></h2>
                <h3><? echo($disc)['author'] ?></h3>
                <h4><? echo($disc)['year'] ?></h4>
            </div>
<?php endforeach; ?>
        </div>
    </div>



</body>

</html>