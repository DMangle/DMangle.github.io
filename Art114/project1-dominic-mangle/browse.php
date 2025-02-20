<?php
    $title = "Browse";
    include 'inc/header.php';
?>
<?php include 'inc/footer.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #searchInput {
            width: 200px;
            padding: 10px;
            margin-top: 20px;
        }

        #results {
            margin-top: 20px;
        }

        .container {
            display: flex;
        }
        .container > div {
              width:40%;
              margin-top: 20px;
        }

        #box{
            width: 1280px;
            height: 25px;
        }

        * {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 20%;
  padding: 1%;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

    </style>
</head>
<body>

<div id="box">
    </div>

<div class="container">
<input type="text" id="searchInput" placeholder="Search...">
    <div id="results"></div>

    <div class="josefin-sans-test">
        <p align="right">Photography - Art - Graphics - More</p>
    </div>
</div>

<div id="box">
    </div>

    <div class="row">
    <div class="column" align="center">
      <img src="photos/record.jpg" width="180px" height="180px">
    </div>
    <div class="column" align="center">
      <img src="photos/Abstract.jpg" width="180px" height="180px">
    </div>
    <div class="column" align="center">
      <img src="photos/sun.jpg" width="180px" height="180px">
    </div>
    <div class="column"align="center" >
        <img src="photos/paris.jpg" width="180px" height="180px">
    </div>
    <div class="column" align="center">
      <img src="photos/calendar.jpg" width="180px" height="180px">
    </div>
    </div>

    <div id="box">
    </div>

    <div class="row">
    <div class="column" align="center">
      <img src="photos/poster.jpg" width="180px" height="180px">
    </div>
    <div class="column" align="center">
      <img src="photos/moon.jpg" width="180px" height="180px">
    </div>
    <div class="column"align="center" >
        <img src="photos/book2.jpg" width="180px" height="180px">
    </div>
    <div class="column" align="center">
      <img src="photos/comp.png" width="180px" height="180px">
    </div>
    <div class="column"align="center" >
        <img src="photos/family.jpg" width="180px" height="180px">
    </div>
  </div>
</div>

    <script>
        // Example data to search through
        const data = [
            "Jesus",
            "Art",
            "Photos",
            "Graphics",
        ];
    </script>
</body>
</html>