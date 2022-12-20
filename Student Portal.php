<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    
</head>
<style>
    .content {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
}

.part {
  border: 3px solid black;
  border-radius: 20px;
  text-align: center;
  margin: 15px;
  padding: 55px;
  width: 20vw;
  font-size: xx-large;
  font-weight: bold;
}

.part:hover {
  cursor: pointer;
  opacity: 0.8;
}

#part-1 {
  background-color: crimson;
}

#part-2 {
  background-color: green;
}

#part-3 {
  background-color: blue;
}

#part-4 {
  background-color: blueviolet;
}

#part-5 {
  background-color: salmon;
}

#part-6 {
  background-color: gray;
}

.logo {
  text-align: center;
}

    </style>

<body>
    <div class="logo">
        <img src="studentavtar.png" alt="logo" class="logo">
    </div>
    <div class="content">
        <div class="part" id="part-1">Profile</div>
        <div class="part" id="part-2">Fees</div>
        <div class="part" id="part-3">Attendance</div>
        <div class="part" id="part-4">Results</div>
        <div class="part" id="part-5">Assignments</div>
        <div class="part" id="part-6">Schedule</div>
    </div>
</body>

</html>