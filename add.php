<?php

// GET AND POST ARE MOETHODS TO SEND/RECEIVE DATA
// GET IS NOT SECURE
if (isset($_GET)){
$moviesId = $GET_["movies-id"];
$moviesYear = $GET_["movies-year"];
$moviesGenre = $GET_["movies-genre"];
$moviesRating = $GET_["movies-rating"];
}

echo "$moviesId, $moviesYear, $moviesGenre, $moviesRating";

require ("connection.php");

try {
  $conn = new PDO($dsn, $username, $password); //CONNECT
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //ERRORS

} catch (PDOException $e) {
    echo "error connectiong..." . $e->getMessage(); //OUTPUT ERROR
}

$sql = "insert into movies(Id, Year, Genre, Rating) values ('$moviesId', '$moviesYear', '$moviesGenre', '$moviesRating')";

try {
  $rows = $conn->query($sql);

  foreach($rows as $row){
    if ($rows){
      echo "Record saved";
    } else {
      echo "Error adding record";
    }
  }
} catch (PDOException $e) {
  echo "database query failed..." . $e->getMessage(); //OUTPUT ERROR
}

$conn = null; //CLOSE CONNECTION

?>
