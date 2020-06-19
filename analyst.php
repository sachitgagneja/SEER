<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
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

<header class="masthead3 d-flex">
    <div class="container text-center my-auto">
        <h1 class="mb-1">Analyst Panel</h1>
    </div>
</header>
<div class="container text-center my-auto">

    <?php include 'functions.php';
    //Table existence check
    if (mysqli_query($connection, 'DESCRIBE analysis')) {

    $sql = "SELECT * FROM analysis";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) == 0) {
        echo "No result found";
        echo '<br>';
    } else {
    $total = mysqli_num_rows($result);
    ?>
    <div class="card text-center">
        <div class="card-header">
            <?php
            if(mysqli_num_rows($result) > 1){
                echo mysqli_num_rows($result) . ' Submissions are pending for Analysis';
            }
            elseif (mysqli_num_rows($result) == 1){
                echo mysqli_num_rows($result) . ' Submission is pending for Analysis';
            }
            ?>
        </div>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <?php
                echo '<br>Article ID: ' . $row['article_id'];
                echo '<br>Title: ' . $row['title'];
                echo '<br>Author: ' . $row['author'];
                echo '<br>Year: ' . $row['year'];
                echo '<br>Source: ' . $row['source'];
                echo '<br>DOI: ' . $row['doi'];
                echo '<br>Volume: ' . $row['volume'];
                echo '<br>Pages: ' . $row['pages'].'<br><hr>';
                ?>
                <form action="moderatorprocess.php" method="post">
                    <button class="btn btn-info" type="submit" name="submit" value="<?php echo $row['article_id']?>">More Info</button>
                </form>
            </li>
            <?php
            }
            echo '
                        </ul>
                    </div>';
            }
            } else {
                echo 'Sorry table doesnt exit';
            }
            ?>
            <br>
            <div>
                <a class="btn btn-primary" href="index.html" role="button">Home</a>
                <br>
            </div>


    </div>
</body>
</html>

