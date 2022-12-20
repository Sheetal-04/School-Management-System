<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>School Management</title>
</head>
<style>
    * {
  margin: 0;
  padding: 0;
}

.navbar {
  background-color: rgb(118, 43, 126);
}

.navbar ul {
  overflow: auto;
}

.navbar li {
  float: left;
  list-style: none;
  margin: 34px 20px;
}

.navbar li a {
  padding: 5px 42px;
  padding-left: 30px;
  text-decoration: none;
}

.search {
  float: right;
  padding: 28px 62px;
}

input {
  border: 2px solid black;
  border-radius: 7px;
  padding: 7px;
}

nav ul li a {
  color: rgb(8, 1, 1);
  font-weight: bolder;
}

/* nav ul li a:hover {
  background-color: rosybrown;
} */

/* nav ul li{
            position: relative;
        }

        nav ul ul {
            position: absolute;
            top: 60px;
            display: none;
        }
        nav ul li:hover>ul{
            display: block;
        } */
nav ul ul li {
  display: list-item;
}
#home {
  display: flex;
  flex-direction: column;
  padding: 3px 200px;
  height: 550px;
  justify-content: center;
  align-items: center;
}
#home::before {
  content: "";
  position: absolute;
  background: url("bg6.jpg") no-repeat center center/cover;
  height: 642px;
  top: 0px;
  left: 0px;
  width: 100%;
  z-index: -1;
  opacity: 0.89;
}
.container {
  display: flex;
  margin: 50px;
  padding: 50px;
  /* border: 2px solid black; */
}
.btn {
  border: 2px solid black;
  padding: 10px;
  font-weight: bold;
  transition: all  ease-in-out 0.3s;
}
.btn:hover {
  cursor: pointer;
  background-color: red;
  border-radius: 10px;
}

.btn_main {
  padding: 10px;
  background-color: orange;
}
h3 {
  font-weight: bolder;
  font-size: larger;
}
.img-1 {
  flex-wrap: wrap;
}
p{
  font-weight: bold;
  font-size: x-large;
}
h1{
  font-size: xx-large;
}
    </style>

<body>
    <header>
        <nav class="navbar">
            <ul>
                <li><a href="#"><i class="fa fa-home"></i>&nbsp Home</a></li>
                <li><a href="#"><i class="fa fa-users"></i>&nbsp About Us</a></li>
                <li><a href="#"><i class="fa fa-wrench"></i>&nbsp Services</a></li>
                <li><a href="Enroll.php"><i class="fa fa-user-plus"></i>&nbsp Enrollment</a></li>
                <li><a href="Contact.php"><i class="fa fa-phone-square"></i>&nbsp Contact Us</a></li>
                <li><a href="Usertype.php"><i class="fa fa-user"></i>&nbsp Login</a></li>
                <div class="search">
                    <input type="text" placeholder="Search Here">
                </div>
            </ul>
        </nav>
    </header>
    <section id="home">
        <h1 class="h-primary">Welcome to S.A.K.P School</h1>
        <br>
        <p>Our misson is to educate the whole child.Because Every child deserves a little hope!! </p>
        <p>Giving a child an education is by far one of the most important invastments we can make!! </p>
        <br>
        <a href="Enroll.php"><button class="btn">Take Admisson</button></a>
    </section>
    <main>
        <div class="container">
            <div class="img-1">
                <img src="academic.png" alt="#">
                <h3>Academic Programming</h3>
                <br>
                <p>S.A.K.P offers a comprehensive curriculum aligned with Connecticut State Standards.</p>
                <br>
                <button class="btn_main">Learn More</button>
            </div>
            <div class="img-1">
                <img src="Therapeutic Approach.png" alt="#">
                <h3>Therapeutic Approach</h3>
                <br>
                <p>Our Therapeutic Approach is what makes S.A.K.P a truly unique school environment for our students.
                </p>
                <br>
                <button class="btn_main">Learn More</button>
            </div>
            <div class="img-1">
                <img src="School Engagement Services.png" alt="#">
                <h3>School Engagement Services</h3>
                <br>
                <p>We recognize that school is not easy for many students. For some students, it is simply overwhelming.
                </p>
                <br>
                <button class="btn_main">Learn More</button>
            </div>
            <div class="img-1">
                <img src="Transition Services.png" alt="#">
                <h3>Transition Services</h3>
                <br>
                <p>In working with even our youngest students, we have their long-term future in mind.</p>
                <br>
                <button class="btn_main">Learn More</button>
            </div>
        </div>
    </main>

</body>

</html>