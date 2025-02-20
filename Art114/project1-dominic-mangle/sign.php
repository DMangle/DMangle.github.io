<?php
    $title = "Sign Up/Log In";
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
            width: 400px;
            background-color:rgb(255, 255, 255);
            margin: 20px auto;
             padding: 30px 30px;
  
        }

        form {
            max-width: 300px;
            margin: auto;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 8px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        </style>
</head>
<body>
    
<div class="box">
    
                <div id="box">
                <h1 class="josefin-sans-test" style="color: black;" align="center">Sign In</h1>
                <p class="josefin-sans-test" style="color: gray;" align="center">Stay Connected with Christian Creations!</p>

                <form id="loginForm">
        <label for="email" class="josefin-sans-test" style="color: black">Email:</label><br>
        <input type="text" id="email" name="email" required><br>
        <label for="password" class="josefin-sans-test" style="color: black">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" class="josefin-sans-test" value="Sign In">
    </form>

    <p class="josefin-sans-test" style="color: gray;" align="center">Don't have an account? Sign up for free today!</p>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(event){
            event.preventDefault();
            
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;

            if(email && password) {
                console.log("Email:", email);
                console.log("Password:", password);
                alert("Form submitted!");
            } else {
                alert("Please fill in all fields.");
            }
        });
    </script>

</body>
</html>