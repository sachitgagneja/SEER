<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Status Posting App</title>
    <!-- Bootstrap Core CSS -->
    <link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic"
          rel="stylesheet" type="text/css">
    <!-- Custom CSS -->
    <link href="style.css" rel="stylesheet">

</head>

<body id="page-top">

<header class="masthead2 d-flex">
    <div class="container text-center my-auto">
        <h1 class="mb-1 white-title">Submit Evidence Source</h1>
    </div>
</header>
<div class="container text-center my-auto">
    <?php include 'functions.php';
    $title = $_POST['title'];
    $author = $_POST['author'];
    $year = $_POST['year'];
    $source = $_POST['source'];
    $doi = $_POST['doi'];
    $volume = $_POST['volume'];
    $pages = $_POST['pages'];

    function dataAdd()
    {
        global $connection, $title, $author, $year, $source, $doi, $volume, $pages;

//        Status code & Status input validation.
        if (empty($title) || empty($author)) {
            echo "Title and Author are required fields";
        } else {
            if ($connection) {
//                    SQL table to be created if not already exist
                $sql = "CREATE TABLE IF NOT EXISTS moderation (article_id int AUTO_INCREMENT PRIMARY KEY, 
                                title VARCHAR(255), author VARCHAR(255), year VARCHAR(255), source VARCHAR(255), 
                                    doi VARCHAR(255), volume VARCHAR(255), pages VARCHAR(255))";

                mysqli_query($connection, $sql);

                $sql = "INSERT INTO moderation (title, author, year, source, doi, volume, pages) 
                                VALUES('$title', '$author', '$year', '$source', '$doi', '$volume', '$pages')";

                if (mysqli_query($connection, $sql)) {
                    echo 'Thank you for submitting evidence source. Your entry is pending moderation.<br>
                                You will be soon notified about the outcome of the moderation.';
                } else {
                    echo 'There was an error while submitting your evidence source. Please contact our support team.';
                }
            } else {
                die('Unfortunately, connection to the database failed.');
            }
        }
    }

    ?>
    <div class="card">
        <div class="card-body">
            <?php dataAdd() ?>
        </div>
    </div>
    <br><br>
    <div>
        <a class="btn btn-primary" href="index.html" role="button">Home</a>
        <a class="btn btn-primary" href="moderator.php" role="button">Moderator</a>
        <a class="btn btn-primary" href="analyst.php" role="button">Analyst</a>

    </div>

</div>
</body>
</html>