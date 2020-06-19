<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
<header class="masthead1 d-flex">
    <div class="container text-center my-auto">
        <h1 class="mb-1">Search Evidence</h1>
    </div>
</header>
<div class="container text-center my-auto">
    <!--    Post Status form with Post method-->
    <form action="searchprocess.php" method="post">
        <div class="form-group row">
            <label for="description" class="col-4 col-form-label">Description (required):</label>
            <input type="text" class="form-control col-6" id="description" name="description"
                   placeholder="Description of the search" required>
        </div>
        <div class="form-group row">
            <label for="datefrom" class="col-4 col-form-label">Date Range:</label>
            <input type="date" class="form-control col-3" id="dateFrom"
                   name="dateFrom" min="2010-06-05" max="2020-06-05">
            <input type="date" class="form-control col-3" id="dateTo"
                   name="dateTo" min="2010-06-05" max="2020-06-05">
        </div>
        <div class="form-group row">
            <label for="field1" class="col-4 col-form-label">If</label>
            <select class="col-2"name="field1" id="field1">
                <option value="">Name of field</option>
                <option value="title">Methodology</option>
            </select>
            <select class="col-2"name="operator" id="operator">
                <option value="contains">contains</option>
                <option value="notContain">does not contain</option>
                <option value="beginsWith">begins with</option>
                <option value="endsWith">ends with</option>
            </select>
            <select class="col-2"name="operator" id="operator">
                <option value="contains">TDD</option>
            </select>
        </div>
        <br>
        <div>
            <button type="submit" class="btn btn-primary" name="submit">Run Search</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
    </form>
</div>
</div>
</body>
</html>
