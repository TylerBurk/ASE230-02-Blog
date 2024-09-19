<?php 
require_once('data.php');
?>


<!doctype html>
<html lang="en" data-bs-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <nav class="navbar bg-body-tertiary">
            <div class="container">
                <span class="navbar-brand mb-0 h1">Blog</span>
            </div>
        </nav> 
        <div class="container">
            <?php for($i=0;$i<count($data);$i++) {?>
            <br />
            <div class="card">
                <h5 class="card-header"><?= $data[$i]['firstName'].' '.$data[$i]['lastName']; ?></h5>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-body-secondary"><?= $data[$i]['creationDate']; ?></h6>
                    <h5 class="card-title"><?= $data[$i]['title']; ?></h5>
                    <a href="detail.php?post_id=<?php echo $i; ?>" class="btn btn-primary">See Blog</a>
                </div>
            </div>
            <?php } ?>
        </div>   
    </body>
</html>
