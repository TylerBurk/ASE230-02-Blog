
<?php 
$i=$_GET['post_id'];
require_once('data.php');
?>

<!doctype html>
<html lang="en" data-bs-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog - <?= $data[$i]['firstName'].' '.$data[$i]['lastName']; ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <nav class="navbar bg-body-tertiary">
            <div class="container">
                <span class="navbar-brand mb-0 h1">Blog - <?= $data[$i]['firstName'].' '.$data[$i]['lastName']; ?></span>
            </div>
        </nav> 
        <div class="container">
            <br />
            <div class="card text-center">
                <div class="card-header"><?= $data[$i]['firstName'].' '.$data[$i]['lastName']; ?></div>
                <div class="card-body">
                    <h5 class="card-title"><?= $data[$i]['title']; ?></h5>
                    <p class="card-text"><?= $data[$i]['content']; ?></p>
                    <a href="index.php" class="btn btn-primary">Return to Posts</a>
                </div>
                <div class="card-footer text-body-secondary"><?= $data[$i]['creationDate']; ?></div>
            </div>
        </div>   
    </body>
</html>
