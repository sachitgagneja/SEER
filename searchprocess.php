<?php include 'functions.php';

$methodology = $_GET['methodology'];

$query = "CREATE TABLE IF NOT EXISTS seerArticles (doi varchar (255) PRIMARY KEY, author varchar (255),
journal varchar(255), year varchar(255), title varchar(255), methodology varchar(255), abstract varchar(255))";


if(mysqli_query ($connection, $query)){
    $query = "INSERT INTO seerArticles values ('doi:20.24643/43533553', 'Benjamin J. Balter', 'Journal', '2011', 'TOWARD A MORE AGILE GOVERNMENT: THE CASE FOR REBOOTING FEDERAL IT PROCUREMENT',
    'TDD', 'Discusses the impact of an agile software development process usability testing.
        Reports opinions about usability testing a company a change agile. Presents strategies incorporate usability testing agile product development')";
    mysqli_query($connection, $query);

    $query = "SELECT * from seerArticles where methodology = '$methodology'";
    $result = mysqli_query ($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        echo '
    <table class="table table-striped">
<thead>
<tr>
  <th scope="col">DOI</th>
  <th scope="col">Author</th>
  <th scope="col">Type</th>
  <th scope="col">Year</th>
  <th scope="col">Title</th>
  <th scope="col">Methodology</th>
  <th scope="col">Abstract</th>
</tr>
</thead>
<tbody>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '
  <tr>
  <td>' . $row["doi"] . '</td>
  <td>' . $row["author"] . '</td>
  <td>' . $row["journal"] . '</td>
  <td>' . $row["year"] . '</td>
  <td>' . $row["title"] . '</td>
  <td>' . $row["methodology"] . '</td>
  <td>' . $row["abstract"] . '</td>
</tr>';
        }
        echo ' </tbody></table>';
    } else {
        echo "There are no journals with the search criterias";
    }
}