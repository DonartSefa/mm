<?php
include_once 'config.php';

if (isset($_POST['submit'])) {
    $movie_name = $_POST['movie_name'];
    $movie_desc = $_POST['movie_desc'];
    $movie_rating = $_POST['movie_rating'];
    $movie_year = $_POST['movie_year'];
    $movie_length = $_POST['movie_length'];
    $movie_genre = $_POST['movie_genre'];
    $movie_trailer = $_POST['movie_trailer'];
    $movie_readmore = $_POST['movie_readmore'];
    $movie_image = $_POST['movie_image'];

    if (empty($movie_name) || empty($movie_desc) || empty($movie_rating) || empty($movie_year) || empty($movie_length) || empty($movie_genre) || empty($movie_trailer) || empty($movie_readmore) || empty($movie_image) ) {
        echo "Please fill all the fields";
    } else {
        $sql = "INSERT INTO movies(movie_name, movie_desc, movie_rating, movie_year, movie_length, movie_genre, movie_trailer, movie_readmore, movie_image) VALUES (:movie_name, :movie_desc, :movie_rating, :movie_year, :movie_length, :movie_genre, :movie_trailer, :movie_readmore, :movie_image)";
        $insertSql = $conn->prepare($sql);


        $insertSql->bindParam(":movie_name", $movie_name);
        $insertSql->bindParam(":movie_desc", $movie_desc);
        $insertSql->bindParam(":movie_rating", $movie_rating);
        $insertSql->bindParam(":movie_year", $movie_year);
        $insertSql->bindParam(":movie_length", $movie_length);
        $insertSql->bindParam(":movie_genre",$movie_genre);
        $insertSql->bindParam(":movie_trailer", $movie_trailer);
        $insertSql->bindParam(":movie_readmore", $movie_readmore);
        $insertSql->bindParam(":movie_image", $movie_image);


        $insertSql->execute();

        header("Location: movies.php");
    }
}

