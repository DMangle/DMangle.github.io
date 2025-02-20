<?php
    $title = "Home";
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

        #box{
            width: 1280px;
            height: 25px;
        }

        * {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 25%;
  padding: 3%;
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
    <img src="photos/welcome.png" width="100%">
    <div id="box">
    </div>
    <div class="josefin-sans-test">
    <h1 align="center" >Creator Feed</h1>
    </div>

    <div class="josefin-sans-test">
    <div class="row">
    <div class="column" align="center">
      <img src="photos/record.jpg" width="149px" height="149px">
      <p align="center">Photography</p>
    </div>
    <div class="column" align="center">
      <img src="photos/Abstract.jpg" width="149px" height="149px">
      <p align="center">Art</p>
    </div>
    <div class="column" align="center">
      <img src="photos/comp.png" width="149px" height="149px">
      <p align="center" >Graphics</p>
    </div>
    <div class="column"align="center" >
        <img src="photos/family.jpg" width="149px" height="149px">
        <p align="center">And More!</p>
    </div>
  </div>
</div>
</div>

</body>
</html>