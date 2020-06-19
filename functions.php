<?php

$db_name = 'heroku_de43dbe6e6514ee';
$host = 'us-cdbr-east-05.cleardb.net';
$username = 'becc28865607af';
$password = '3f0f3cd2';

 $connection = mysqli_connect($host, $username, $password, $db_name);
//$connection = mysqli_connect('localhost', 'root', '', 'seer');


function rejectSource()
{
    global $connection, $article_id;
    $query = "DELETE FROM moderation WHERE article_id = '$article_id'";
    if (mysqli_query($connection, $query)) {
        echo 'Evidence Source has been successfully rejected.';
    }
}

function acceptSource()
{
    global $connection, $title, $author, $year, $source, $doi, $volume, $pages, $article_id;
    populateSource();

    $sql = "CREATE TABLE IF NOT EXISTS analysis (count int AUTO_INCREMENT PRIMARY KEY, article_id int, title VARCHAR(255), author VARCHAR(255), year VARCHAR(255), source VARCHAR(255), 
                                    doi VARCHAR(255), volume VARCHAR(255), pages VARCHAR(255))";
    mysqli_query($connection, $sql);

    $sql = "INSERT INTO analysis (article_id, title, author, year, source, doi, volume, pages) SELECT * FROM moderation WHERE article_id = '$article_id'";

    if (mysqli_query($connection, $sql)) {
        $query = "DELETE FROM moderation WHERE article_id = '$article_id'";

        if (mysqli_query($connection, $query)) {
            echo 'Evidence Source has been successfully accepted for analysis.';
        }
        else{
            echo 'Removal of record from the moderation table failed.';
        }
    }
    else{
        echo 'Data migration to analysis table failed. Please contact the support team.';
    }
}

function updateData()
{

    global $connection, $result, $input, $title, $author, $year, $source, $doi, $volume, $pages, $article_id;
    $query = "UPDATE moderation SET title='$title', author='$author', year='$year', source='$source', doi='$doi', volume='$volume', pages='$pages' where article_id='$article_id' ";
    if ($connection) {
        if (mysqli_query($connection, $query)) {
            echo 'Evidence source has been updated.';
        } else {
            echo 'Failed to update evidence in the database. Please contact the technical team.';
        }
    } else {
        echo 'Connection to the database failed. Please contact the technical team.';
    }
}