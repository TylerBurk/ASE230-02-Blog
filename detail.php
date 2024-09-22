
<?php
$i=$_GET['post_id'];
if(file_exists('data/posts.json')){
    $posts_array=json_decode(file_get_contents('data/posts.json'), true);
} else {
    echo 'File does not exist';
}


//this took too long to figure out 0_0...
$fp=fopen('data/visitors.csv','r+');
while(($content=fgetcsv($fp)) !== false) {
    if($content[1] == $posts_array[$i]['id']) {
        $content[0] = $content[0] += 1;
        //https://www.php.net/manual/en/function.fseek.php
        fseek($fp, -7, SEEK_CUR);
        fputcsv($fp, $content);
        break;
    }
}
$visitors=$content[0];
fclose($fp);

?>

<!doctype html>
<html lang="en" data-bs-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog - <?= $posts_array[$i]['author']; ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <nav class="navbar bg-body-tertiary">
            <div class="container">
                <span class="navbar-brand mb-0 h1">Blog - <?= $posts_array[$i]['author']; ?></span>
            </div>
        </nav> 
        <div class="container">
            <br />
            <div class="card text-center">
                <div class="card-header"><?= $posts_array[$i]['author']; ?></div>
                <div class="card-body">
                    <h5 class="card-title"><?= $posts_array[$i]['title']; ?></h5>
                    <p class="card-text"><?= $posts_array[$i]['content']; ?></p>
                    <a href="index.php" class="btn btn-primary">Return to Posts</a>
                </div>
                <div class="card-footer text-body-secondary"><?= $posts_array[$i]['date'].' - Visitors ('.$visitors.')'; ?></div>
            </div>
        </div>   
    </body>
</html>
