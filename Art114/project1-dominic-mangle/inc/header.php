<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;?> | Christian Creations</title>
    <link rel="icon" type="image/x-icon" href="logo1.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

    <style>
        body{
            background-color: black;
            color: white;
        }

        .josefin-sans-test {
            font-family: "Josefin Sans", serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
        }

        #bar{
            background-color:rgb(255, 255, 255);
        }


        .topnav{
            background-color:rgb(255, 255, 255);
            height: 50px;
            width: 1280px;
            margin: 0px auto;
            display: flex;
 
        }
        
        .topnav a {
            display: block;
            float: left;
            color: rgb(0, 0, 0);
            text-decoration: none;
            padding: 16px 20px;
            text-align: center;
            font-size: 15px;
            margin: 0px auto;
        }

        .center {
            display: block;
             margin-left: auto;
             margin-right: auto;
             margin-top: 25px;
             margin-bottom: 25px;
            }

    </style>
</head>
<body>
    <main>

    <img src="logo2.png" width="200px" class="center">
        <div>
            <div id="bar">
                <div class="topnav josefin-sans-test" id="nav">
                    <a href="/project1-dominic-mangle/index.php">Home</a></li>
                    <a href="/project1-dominic-mangle/profile.php">Profile</a></li>
                    <a href="/project1-dominic-mangle/browse.php">Browse</a></li>
                    <a href="/project1-dominic-mangle/upload.php">Upload</a></li>
                    ><a href="/project1-dominic-mangle/sign.php">Sign Up/Log In</a></li>
                </div>
            </div>
    
            
    
        </div>
       
    </main>
</body>
</html>