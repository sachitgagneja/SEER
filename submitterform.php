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

<header class="masthead1 d-flex">
    <div class="container text-center my-auto">
        <h1 class="mb-1">Submit Evidence Source</h1>
    </div>
</header>
<div class="container text-center my-auto">
    <!--    Post Status form with Post method-->
    <form action="submitterprocess.php" method="post">
        <div class="form-group row">
            <label for="exampleInputPassword1" class="col-4 col-form-label">Title (required):</label>
            <input type="text" class="form-control col-6" id="exampleInputPassword1" name="title" required>
        </div>
        <div class="form-group row">
            <label for="exampleInputPassword1" class="col-4 col-form-label">Author (required):</label>
            <input type="text" class="form-control col-6" id="exampleInputPassword1" name="author" required>
        </div>
        <div class="form-group row">
            <label for="exampleInputPassword1" class="col-4 col-form-label">Year:</label>
            <input type="text" class="form-control col-6" id="exampleInputPassword1" name="year">
        </div>
        <div class="form-group row">
            <label for="exampleInputPassword1" class="col-4 col-form-label">Source/Publisher:</label>
            <input type="text" class="form-control col-6" id="exampleInputPassword1" name="source">
        </div>
        <div class="form-group row">
            <label for="exampleInputPassword1" class="col-4 col-form-label">DOI:</label>
            <input type="text" class="form-control col-6" id="exampleInputPassword1" name="doi">
        </div>
        <div class="form-group row">
            <label for="exampleInputPassword1" class="col-4 col-form-label">Volume:</label>
            <input type="text" class="form-control col-6" id="exampleInputPassword1" name="volume">
        </div>
        <div class="form-group row">
            <label for="exampleInputPassword1" class="col-4 col-form-label">Page Numbers:
                <small id="emailHelp" class="form-text text-muted">Separate page numbers with comma</small>
            </label>
            <input type="text" class="form-control col-6" id="exampleInputPassword1" name="pages">
        </div>

        <br>
        <div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
            <a class="btn btn-primary" href="index.html">Home</a>
        </div>
    </form>
</div>
</div>
</body>
</html>
