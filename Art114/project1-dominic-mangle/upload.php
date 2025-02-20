<?php
    $title = "Upload";
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

        #whiteBox {
            width: 600px;
            height: 400px;
            background-color: white;
            color: black;
            justify-content:center ;
            margin: 20px auto;
        }

        #greyBox{
            width: 500px;
            height: 100px;
            background-color: darkgray;
            color: black;
            justify-content:center ;
            margin: 20px auto;
        }

        .container {
            display: flex;
        }
        .container > div {
              width:40%;
              margin-top: 20px;
        }


</style>
</head>
<body>

<div class="container">
    <img src="photos/family.jpg" width="500" height="500" style="padding: 20px 100px;">

    <div id="whiteBox" class="josefin-sans-test">
        <h3 style="padding: 5px 10px" align="center">"God Bless This Family" - DMangle20</h3>

        <div id="greyBox">
        <p style="padding: 5px 20px">Description - - - - - - - - - - - - - - - - - - - - - - - -</p>
        </div>

        <p style="padding: 5px 50px">Like - Comment - Share</p>
      
    </div>
</div>
</body>
</html>