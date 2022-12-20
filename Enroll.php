<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Enrollment</title>
</head>
<style>
  /* body {
  background-image: url(enrollbg.png);
  min-height: 100%;
  background-size: cover;
  background-repeat: no-repeat;
} */

  .part-1 {
    border: 2px solid black;
    text-align: center;
    background-color: rgb(148, 78, 217);


  }

  h2 {
    font-size: xx-large;
    text-decoration: underline;
  }

  .part-2 {
    display: flex;
    flex-wrap: wrap;
    margin: 15px;
    border: 2px solid black;
    margin-left: 0;
    margin-right: 0;
  }

  label {
    font-weight: bolder;

  }

  input[type="text"] {
    padding: 8px;
    margin: 5px;
  }

  input[type="date"] {
    padding: 8px;
    margin: 5px;
  }

  input[type="number"] {
    padding: 8px;
    margin: 5px;
  }

  input[type="email"] {
    padding: 8px;
    margin: 5px;
  }

  select {
    padding: 8px;
    margin: 5px;
  }

  #address {
    width: 50vw;
    height: 55px;
  }

  #category {
    width: 31vw;
  }

  #class {
    width: 31vw;
  }

  #mob {
    width: 30vw;
  }

  #mail {
    width: 30vw;
  }

  input[type="submit"] {
    padding: 12px;
    margin: 20px;
    width: 20vw;
    background-color: rebeccapurple;
  }

  #submit:hover {
    cursor: pointer;
  }

  #ideno {
    width: 32vw;
  }

  #propic {
    padding: 15px;
  }
</style>

<body>
  
  <div class="content">
    <div class="part-1">
      <h1>"Shri Akrur Ji Kanya Pathshala School , DELHI"</h1>
      <h2>Admission Form</h2>
      <span><img src="academic.png" alt="Logo"></span>
    </div>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $Student_first_Name = $_POST['st_first'];
      $Student_middle_Name = $_POST['st_middle'];
      $Student_last_Name = $_POST['st_last'];
      $Father_first_Name = $_POST['fa_last'];
      $Father_middle_Name = $_POST['fa_last'];
      $Father_last_Name = $_POST['fa_last'];
      $Mother_first_Name = $_POST['mo_last'];
      $Mother_middle_Name = $_POST['mo_last'];
      $Mother_last_Name = $_POST['mo_last'];
      $Date_of_Birth = $_POST['dob'];
      $Gender = $_POST['Gender'];
      $Mobile_No = $_POST['mobile'];
      $Email = $_POST['email'];
      $Cateogry = $_POST['cateogry'];
      $Class = $_POST['class'];
      $Identity_proof_name = $_POST['Identity_Proof'];
      $Identity_proof_number = $_POST['id_proof_no'];
      $Profile_picture = $_POST['avatar'];
      $Address = $_POST['add'];
      $Declaration = $_POST['check'];
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> Your details has been submitted successfully!
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>';




      // Submit these to a database
    }



    ?>

    <div class="part-2">
      <form action="/school/Enroll.php" method="post">
        <label for="student">Student Name:</label><br>
        <input type="text" placeholder="Enter First Name" name="st_first" required>
        <input type="text" placeholder="Enter Middle Name" name="st_middle">
        <input type="text" placeholder="Enter Last Name" name="st_last">
        <br>
        <label for="father">Father's Name:</label><br>
        <input type="text" placeholder="Enter First Name" name="fa_first" required>
        <input type="text" placeholder="Enter Middle Name" name="fa_middle">
        <input type="text" placeholder="Enter Last Name" name="fa_last">
        <br>
        <label for="mother">Mother's Name:</label><br>
        <input type="text" placeholder="Enter First Name" name="mo_first" required>
        <input type="text" placeholder="Enter Middle Name" name="mo_middle">
        <input type="text" placeholder="Enter Last Name" name="mo_last">
        <br>
        <label for="DOB">Date Of Birth:</label>
        <input type="date" name="dob">
        <label for="Gender">Gender:</label>
        <input type="radio" name="Gender" value="Male">
        <label for="male">M</label>
        <input type="radio" name="Gender" value="Female">
        <label for="Female">F</label><br>
        <label for="mobile">Mobile&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>&nbsp;&nbsp;
        <input id="mob" type="number" placeholder="Enter number" name="mobile" required><br>
        <label for="Email">E-mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>&nbsp;&nbsp;
        <input id="mail" type="email" placeholder="Enter email" name="email" required><br>

        <label for="Cateogry">Cateogry&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>&nbsp;&nbsp;
        <select id="category" name="cateogry">
          <option value="General">General</option>
          <option value="OBC">OBC</option>
          <option value="SC">SC</option>
          <option value="EWS">EWS</option>
        </select><br>
        <label for="class ">Class&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>&nbsp;
        <select id="class" name=" class">
          <option value="1st ">1st</option>
          <option value="2nd">2nd</option>
          <option value="3rd">3rd</option>
          <option value="4th">4th</option>
          <option value="5th">5th</option>
        </select><br>
        <label for="Identity Proof">Identity Proof:</label>
        <select name="Identity_Proof">
          <option value="Aadhar Card">Aadhar Card</option>
          <option value="Cast Certificate">Cast Certificate</option>
          <option value="Domicile Certificate">Domicile Certificate</option>
        </select><br>
        <label for="Identity number">Identity Card Number:</label>
        <input id="ideno" type="number" placeholder="Enter Number" name="id_proof_no" required><br>
        <label for="avatar">Choose a profile picture:</label>

        <input id="propic" type="file" name="avatar" accept="image/png, image/jpeg"><br>
        <label for="Address">Address:</label>
        <input id="address" type="text" placeholder="Write your Address" name="add" required><br>

        <input type="checkbox" name="check" required>
        <label for="Declaration">“I hereby declare that information furnished above is true and correct in every
          respect and in case any information is found incorrect even partially the candidature shall be
          liable to
          be rejected.”</label><br>
        <label for="Submit"></label>
        <input id="submit" type="Submit" name="submit">
    </div>


    </form>
  </div>
</body>

</html>