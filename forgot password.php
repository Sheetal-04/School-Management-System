<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>

</head>
<style>
    .part1 {
  text-align: center;
}

.part2 {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
}

.footer {
  text-align: center;
  font-size: x-large;
}

input {
  margin: 5px;
}

.btn {
  position: relative;
  background-color: rebeccapurple;
  top: 4px;
  height: 43px;
}

.btn:hover {
  cursor: pointer;
}

    </style>

<body>
    <div class="content">
        <div class="part1">
            <h1>Forgot Password</h1>
            <h3 class="information-text">Enter your registered email to reset your password.</h3>
        </div>
        <div class="part2">
            <p><label for="username">Email</label></p>
            <input type="email" name="user_email" id="user_email" >
            <br>
            <button class="btn">Reset Password</button>
        </div>
        <div class="footer">
            <h5 id="new">New here? <a href="Enroll.php">Sign Up.</a></h5>
            <h5>Already have an account? <a href="login.php">Sign In.</a></h5>
        </div>
    </div>
</body>

</body>

</html>