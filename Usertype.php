<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>User</title>
</head>
<style>
    .user {
  display: flex;
  justify-content: center;
  align-items: center;
  /* border: 2px solid black; */
  flex-wrap: wrap;
}

.img {
  margin: 100px;
  text-align: center;
}

.content {
  text-align: center;
  border: 2px solid black;
  margin: 15px;
  background-color: rgb(162, 105, 105);
}
p {
  font-weight: bolder;
  font-size: x-large;
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
  border-radius: 15px;
}

    </style>

<body>
    <div class="content">
        <h1>SELECT USER TYPE</h1>
        <br>
        <P>" Education is the manifestation of perfection already existing in man "</P>
    </div>
    <div class="user">

        <div class="img" id="img-1">
            <img src="adminavtar.png"  alt="Admin">
           <a href="/school/login.php"> <button>Admin</button></a>
        </div>
        <div class="img" id="img-2">
            <img src="teacheravtar.png" alt="Teacher">
            <a href="/school/login.php"> <button>Teacher</button></a>
            

        </div>
        <div class="img" id="img-3">
            <img src="studentavtar.png" alt="student">
            <a href="/school/login.php"> <button>Student</button></a>
        </div>
    </div>

</body>

</html>