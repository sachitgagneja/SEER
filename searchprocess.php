<?php include 'functions.php';
$input = '';
$result = '';
$title = '';
$author = '';
$year = '';
$source = '';
$doi = '';
$volume = '';
$pages = '';
$article_id = $_POST['submit'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <title>SEER Reference App</title>
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
        <h1 class="mb-1">Moderator Panel</h1>
    </div>
</header>
<div class="container text-center my-auto">
    <div class="card">
        <div class="card-body">
            <?php
            if ($connection) {
                populateSource();
                echo '<br>Title: ' . $title;
                echo '<br>Author: ' . $author;
                echo '<br>Year: ' . $year;
                echo '<br>Source: ' . $source;
                echo '<br>DOI: ' . $doi;
                echo '<br>Volume: ' . $volume;
                echo '<br>Pages: ' . $pages . '<br><br>';
                ?>


                <form action="moderatoroutcome.php" method="post">
                    <input type="hidden" name="article_id" value="<?php echo $article_id?>">
                    <a class="btn btn-primary btn-sm js-scroll-trigger"
                       data-toggle="modal" data-target="#updateModal" style="color: white">Edit</a>
                    <button class="btn btn-success btn-sm js-scroll-trigger" type="submit" name="accept" value="accept">Accept</button>
                    <button class="btn btn-danger btn-sm js-scroll-trigger" type="submit" name="reject" value="reject">Reject</button>
                </form>

                <hr>
            <?php }
            else {
                echo 'Connection to the database failed. Please try after sometime. 
                        If issue persist, please contact our support team.';
            }
            ?>
            <br><br>
            <div>
                <a class="btn btn-primary" href="index.html" role="button">Home</a>
                <a class="btn btn-primary" href="moderator.php" role="button">Back</a>

            </div>
        </div>
    </div>

    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Update Status</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php populateSource();?>
                    <form action="moderatoroutcome.php" method="post">
                        <!--Article Id Hidden-->
                        <div class="form-group row">
                            <div class="col-sm-8">
                                <input type="hidden" class="form-control" id="id" name="article_id"
                                       value="<?php echo $article_id ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="title" class="col-sm-4">Title (required):</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="title"
                                       placeholder="<?php echo $title ?>" name="title"
                                       value="<?php echo $title ?>">
                            </div>
                        </div>

                        <!--Radio Field-->
                        <div class="form-group row">
                            <label for="author" class="col-sm-4">Author (required):</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="author"
                                       placeholder="<?php echo $author ?>"
                                       name="author" value="<?php echo $author ?>">
                                <small id="emailHelp" class="form-text text-muted">Enter author to update</small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="year" class="col-sm-4">Year:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="year"
                                       placeholder="<?php echo $year ?>"
                                       name="year" value="<?php echo $year ?>">
                                <small id="emailHelp" class="form-text text-muted">Enter year to update</small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="year" class="col-sm-4">Source:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="source"
                                       placeholder="<?php echo $source ?>"
                                       name="source" value="<?php echo $source ?>">
                                <small id="emailHelp" class="form-text text-muted">Enter source to update</small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="year" class="col-sm-4">DOI:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="doi" placeholder="<?php echo $doi ?>"
                                       name="doi" value="<?php echo $doi ?>">
                                <small id="emailHelp" class="form-text text-muted">Enter DOI to update</small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="year" class="col-sm-4">Volume:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="volume"
                                       placeholder="<?php echo $volume ?>"
                                       name="volume" value="<?php echo $volume ?>">
                                <small id="emailHelp" class="form-text text-muted">Enter Volume to update</small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="year" class="col-sm-4">Pages:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="pages"
                                       placeholder="<?php echo $pages ?>"
                                       name="pages" value="<?php echo $pages ?>">
                                <small id="emailHelp" class="form-text text-muted">Enter pages to update</small>
                            </div>
                        </div>

                        <hr>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" name="update" value="update">Update</button>
                    </form>
                    <br>
                </div>
            </div>
        </div>


    </div>
</div>
<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
