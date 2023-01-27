
<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

 <link rel="stylesheet" href="style2.css">
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
<style>
/* ===== Google Font Import - Poppins ===== */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

* {
  box-sizing: border-box;
}

/* Style the body */
body{
    height: 100vh;
    background-color: var(--body-color);
}

/* Header/logo Title */
.header {
  padding: 80px;
  text-align: center;
  background-image: url("2.jpg");
  background-color: #cccccc;
   background-repeat: no-repeat;
   background-size: cover;
  color: white;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
}

/* Style the top navigation bar */


/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 50%;
  padding: 20px;
  }
  
  .fakeimg1 {
  background-color: #aaa;
  width: 25%;
  padding: 20px;

}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="header">
  <h1>Welcome to Java</h1>
  <p>Computer software </p>
</div>
<nav>
<div class="navbar">
  <a href="Research.php">Home</a>
  <a href="#">Contact</a>
  <a href="#">About</a>
  <a href="lesson.php" class="right">C++</a>
</div>
  <div class="darkLight-searchBox">
                <div class="dark-light">
                    <i class='bx bx-moon moon'></i>
                    <i class='bx bx-sun sun'></i>
                </div>

                <div class="searchBox">
                   <div class="searchToggle">
                    <i class='bx bx-x cancel'></i>
                    <i class='bx bx-search search'></i>
                   </div>

                    <div class="search-field">
                        <input type="text" placeholder="Search...">
                        <i class='bx bx-search'></i>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</nav>

  <div class="main">
    <h2>What is Java</h2>
    <h5>Computer software </h5>
    <div class="fakeimg1" style="height:210px;"><img src="download.jpg" alt="C++">
</div>
    <p>Definition..</p>
    <p>Java is a set of computer software and specifications developed by James Gosling at Sun Microsystems, which was later acquired by the Oracle Corporation, that provides a system for developing application software and deploying it in a cross-platform computing environment. 

</p>
<center>
                 <video width="500" height="350" controls autoplay>
  <source src="code.mp4" type="video/mp4">
  <source src="code.ogg" type="video/ogg">
  
</video>
</center>
    <br>
    <h2>History of java</h2>
    <h5>Title description, December 3, 2022</h5>
    <div class="fakeimg">
	<iframe width="560" height="315" src="https://www.youtube.com/embed/67VP6FsgZyo?autoplay=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
    <p>here is the history of java</p>
    <p>Java was originally developed by James Gosling at Sun Microsystems. It was released in May 1995 as a core component of Sun Microsystems' Java platform. The original and reference implementation Java compilers, virtual machines, and class libraries were originally released by Sun under proprietary licenses. As of May 2007, in compliance with the specifications of the Java Community Process, Sun had relicensed most of its Java technologies under the GPL-2.0-only license. Oracle offers its own HotSpot Java Virtual Machine, however the official reference implementation is the OpenJDK JVM which is free open-source software and used by most developers and is the default JVM for almost all Linux distributions.</p>
  </div>
</div>


<div class="footer">
  <h2>Footer</h2>
</div>
<script src="script.js"></script>
</body>
</html>
