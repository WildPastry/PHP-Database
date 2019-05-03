<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>PHP Database</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="container-fluid">

    <!-- PHP -->

    <?php
   
// require ("connection.php");

// try {
//   $conn = new PDO($dsn, $username, $password); //CONNECT
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //ERRORS
//   echo "connected" . "<br>" .  "<br>";
  
// } catch (PDOException $e) {
//     echo "error connectiong..." . $e->getMessage(); //OUTPUT ERROR
// }

// $sql = "SELECT * FROM movies"; //QUERY DB
// // $sql = "SELECT * FROM movies WHERE Rating='7'";
// echo "<ul class='myList'>"; //UL

// try {
//   $rows = $conn->query($sql);
//   foreach($rows as $row){
//     echo "<li>" . $row["Id"] . "&nbsp;" . $row["Title"]. "&nbsp;" .$row["Year"]. "&nbsp;" .$row["Genre"]. "&nbsp;". "&nbsp;" .$row["Rating"] . "<li>"; //LOOP DB
//   }
// } catch (PDOException $e) {
//   echo "database query failed..." . $e->getMessage(); //OUTPUT ERROR
// }

// echo "</ul>"; //UL
// $conn = null; //CLOSE CONNECTION

?>

    <!-- FORM -->
    <form method="POST" action="add.php">
      <div class="form-group">
        <label for="movies-id">ID</label>
        <input type="text" class="form-control" name="movies-id" id="movies-id" aria-describedby="emailHelp"
          placeholder="ID">
      </div>
      <div class="form-group">
        <label for="movies-title">Title</label>
        <input type="text" class="form-control" name="movies-title" id="movies-title" aria-describedby="emailHelp"
          placeholder="Title">
      </div>
      <div class="form-group">
        <label for="movies-year">Year</label>
        <input type="text" class="form-control" name="movies-year" id="movies-year" placeholder="Year">
      </div>
      <div class="form-group">
        <label for="movies-genre">Genre</label>
        <input type="text" class="form-control" name="movies-genre" id="movies-genre" placeholder="Genre">
      </div>
      <div class="form-group">
        <label for="movies-rating">Rating</label>
        <input type="text" class="form-control" name="movies-rating" id="movies-rating" placeholder="Rating">
      </div>
      <input type="submit" value="Add Movie" class="btn btn-warning"/>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>