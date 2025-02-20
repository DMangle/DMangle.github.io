<?php
    $title = "Profile";
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

#box1{
            width: 1280px;
            height: 25px;
        }

        #box2{
            width: 200px;
            height: 20px;
            background-color: white;
            color: black;
            justify-content: center;
            align-items: center;
        }

        .top{
            display: flex;
            justify-content: center;
            align-items: center;
        }

</style>
</head>
<body>

<div id="box1">
</div>

<div class="top">
<img src="photos/IMG_5727.jpg" width="149px" height="149px">
</div>

<div class="top" align="center" >
<div class="josefin-sans-test">
   <div>
    <h2>DMangle20</h2>
    <p>Posts - Followers - Following</p>
    <div id="box2">
        <p align="center" style="padding-top: 3px;">Edit</p>
    </div>
    <p>Bio - - - - - - - - - - - - - - - - -</p>
    </div>
</div>
</div>
    
<div id="box1">
</div>

<div class="row">
    <div class="column" align="center">
      <img src="photos/record.jpg" width="180px" height="180px">
    </div>
    <div class="column" align="center">
      <img src="photos/Abstract.jpg" width="180px" height="180px">
    </div>
    <div class="column" align="center">
      <img src="photos/comp.png" width="180px" height="180px">
    </div>
    <div class="column"align="center" >
        <img src="photos/family.jpg" width="180px" height="180px">
    </div>
  </div>
</div>

</body>
</html>