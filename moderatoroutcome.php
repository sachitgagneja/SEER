<?php include 'functions.php';
if (isset($_POST['update'])) {
    $article_id = $_POST['article_id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $year = $_POST['year'];
    $source = $_POST['source'];
    $doi = $_POST['doi'];
    $volume = $_POST['volume'];
    $pages = $_POST['pages'];
} else {
    $article_id = $_POST['article_id'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Status Posting App</title>
    <!-- Bootstrap Core CSS -->
    <link crossorigin="anonymous"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic"
          rel="stylesheet" type="text/css">
    <!-- Custom CSS -->
    <link href="style.css" rel="stylesheet">

</head>

<body id="page-top">

<header class="masthead2 d-flex">
    <div class="container text-center my-auto">
        <h1 class="mb-1 white-title">Moderation Result</h1>
    </div>
</header>
<div class="container text-center my-auto">
    <div class="card">
        <div class="card-body">
            <?php
            if (isset($_POST['update'])) {
                updateData();
            } elseif (isset($_POST['accept'])) {

                acceptSource();
            } elseif (isset($_POST['reject'])) {
                rejectSource();
            } ?>
        </div>
    </div>
    <br><br>
    <div>
        <a class="btn btn-primary" href="index.html" role="button">Home</a>
        <a class="btn btn-primary" href="moderator.php" role="button">Moderator Panel</a>
    </div>
</div>

</body>
</html>
