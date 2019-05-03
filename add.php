<?php

// GET AND POST ARE MOETHODS TO SEND/RECEIVE DATA
// GET IS NOT SECURE
if (isset($_POST)){
$moviesId = $_POST["movies-id"];
$moviesTitle = $_POST["movies-title"];
$moviesYear = $_POST["movies-year"];
$moviesGenre = $_POST["movies-genre"];
$moviesRating = $_POST["movies-rating"];
}

echo $moviesId, $moviesTitle, $moviesYear, $moviesGenre, $moviesRating;

require ("connection.php");

try {
  $conn = new PDO($dsn, $username, $password); //CONNECT
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //ERRORS
  echo "connected" . "<br>" .  "<br>";
  
} catch (PDOException $e) {
    echo "error connectiong..." . $e->getMessage(); //OUTPUT ERROR
}

$sql = "insert into movies(Id, Title, Year, Genre, Rating) values ('$moviesId', '$moviesTitle', '$moviesYear', '$moviesGenre', '$moviesRating')";

try {
  $rows = $conn->query($sql);

    if ($rows){
      echo "Record saved";
    } else {
      echo "Error adding record";
    }
    
} catch (PDOException $e) {
  echo "database query failed..." . $e->getMessage(); //OUTPUT ERROR
}

$conn = null; //CLOSE CONNECTION

?>
