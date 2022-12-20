<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
    <title>Login</title>
</head>

<body>
    <style>
        * {
            /* margin: 0;
    padding: 0; */
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            box-sizing: border-box;

        }

        h1 {
            text-align: center;
            font-size: xx-large;
        }

        p {
            text-align: center;
            font-weight: bolder;
            font-size: x-large;
        }

        input {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: rebeccapurple;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            font-size: x-large;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
            border-radius: 5px;
            border: 2px solid black;
        }

        button:hover {
            opacity: 0.8;
            border: 2px solid black;
        }

        form {
            border: 3px solid #f1f1f1;
        }

        .imgcontainer {
            text-align: center;
        }

        .container {
            padding: 16px;
        }

        .psw {
            float: right;
        }
    </style>

    <body>


        <div class="content">
            <h1>Shri.A.K.P.SCHOOL ,DELHI</h1>
            <br>
            <p>" You just Don't know it yet But school is one of the Best places in this planet to exist peacefully!! "
            </p>
            <br>
        </div>
        <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['uname'];
        $password = $_POST['pass'];
           
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
             <strong>Success!</strong> Your email ' . $username . ' and password ' . $password . ' has been submitted successfully!
            
           </div>';
        // Submit these to a database
    }


    ?>
        <div class="box">
            <form action="/school/login.php" method="post">
                <div class="imgcontainer">
                    <img src="academic.png" class="school Logo">
                </div>
                <label for="uname"><b>Username :</b></label>
                <br><input type="text" placeholder="Enter username" name="uname" required>
                <br>
                <label for="password"><b>Password :</b></label>
                <br> <input type="password" placeholder="Enter password" name="pass" required>
                <br>
                <button class=" btn" type="submit">Login</button>
                <div class="container">
                    <button type="button" class="cancelbtn">Cancel</button>
                    <span class="psw">Forgot <a href="forgot password.html">password?</a></span>
                </div>
            </form>
        </div>

    </body>

</html>