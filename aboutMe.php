<!--

File Name: *aboutMe.php*
Creator: Johnathan Estes
Purpose: Displays an About Me page to give information about the owner.

-->

<html>

<!-- Declares Webpage title in Browser --->
<title>
About Me
</title>

<!-- Include stylesheet and Google fonts-->
<head>
  <link rel="stylesheet" type="text/css" href="about.css">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Ubuntu">
  <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Include Navigation bar-->
        <?php
include 'nav.php';

?>
</head>

<!-- Main Page Content -->
<body>

<!-- Create Body Header-->
<div class="abouthead">
  <h1>Johnathan Estes</h1>
</div>

<!-- Create Section Content-->
<div class="section">
<p>My name is Johnathan Estes. I have recently graduated from Winthrop University
  located in Rock Hill, South Carolina, with a Bacehlor's Degree in Computer science.
  Currently, I am seeking a career withing Software and Web Development utilizing
  front-end and back-end languages and technologies I have learned throughout my career.
</p>

<p>My journey began when I was only four years old. I remember how incredible
  Windows 98 appeared, and back then, I never understoof how much went
  into developing the Operating System or the hardware to make it run. I was always
  tech savvy growing up; I was normally the individual others would seek to get
  technical help with software and hardware. When I entered High School, I started
  with Web Development courses using HTML, CSS, and Adobe programs such as Photoshop
  and Dreamweaver. Once I entered college, I decided to fully become a Software Developer.</p>

  <p>My college career consisted of taking a variety of classes that would allow me
  to get my feet wet ina  variety of different architectures and designs. I started
  out learning the basics of C++, followed by Object Oriented Programming. Next,
  I was taught how to apply my knowledge to develop high-level data structures,
  including Trees, Hash Tables, and Maps. In addition, I also delved into different
  programming languages including WebGL using JavaScript, C#, PHP, and database
  structures using MySQL and MongoDB.</p>

  <p>My Capstone Project involved developing an application using any structure
  we chose, and my team decided to use Javascript using Node.JS, React.Js, and
  Google Firebase using a NoSQL database. It was a struggle at first since I was
  nervous using frameworks I never used before. But as I continued, I learned
  the inner workings and was able to deliver my portions with ease. It taught me
  how to adapt to enviroments you are not familiar with. It was what got me into
  learning Java, which I was able to pick up relatively quickly after college,
  becomming more fluent with it day by day.</p>

  <p>I am proud of the journey I have been on, and I hope to continue growing in
    the years to come. I want to learn as much as I can, and become exposed to a
    variety of new structures, new ways to do things. I look forward to the journey.
  </p>
  </div>

  <div class="profpic">
    <img src="/images/myself.jpg" class="myimg">
  </div>

<!-- Create Second Section Content for external links-->
<div class="section2">
<button class="btn"onclick="window.open('Resume_CV.Jae.docx')">
  <i class="fa fa-download"></i> Download CV/Resume</button>
<br><br><br><br><br>

<!-- Create LinkedIn redirect-->
<div class ="column">
<a href="https://www.linkedin.com/in/johnathan-estes-260341149/" target="_blank">
<img src="/images/linkedin.png" style="width: 128px; height: 128px"></a>
</div>

<!-- Create GitHub redirect-->
<div class ="column">
<div class="img2">
<a href="https://github.com/jestes0?tab=repositories" target="_blank">
<img src="/images/GitHub_Logo_White.png" class="img2">
</a>
</div>
</div>
</div>
<br><br>
</body>
</html>
