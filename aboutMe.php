<!--

File Name: aboutMe.php
Creator: Johnathan Estes
Purpose: Displays information about the website owner.

-->


<html>
    <title>
        Codemans Hub
    </title>
    <head>
        <!-- Imports the about.css stylesheet. -->
        <link rel="stylesheet" type="text/css" href="about.css">
    </head>
    <body>
        <!-- Include the navigation bar from nav.php.-->
        <?php
            include 'nav.php';
            ?>
        <!-- Creates the website header. -->
        <div class="header">
            <h1>About Me</h1>
        </div>
        <div class="section">
            <div class="leftcol">
                <h1>Johnathan Estes</h1>
                <p> My name is Johnathan. I recently graduate college at Winthrop University
                    in Rock Hill, South Carolina. I have recieved my bachelor's degree in
                    Computer Science and a Minor in Computer Information Systems. I am seeking
                    a career in Software Development or Web development utilizing a variety of
                    front and back-end technologies that I have learned inside and outside of college.
                </p>
                <p> Part of my professional experience within the technology field involved working
                    on my college campus in the Information Technology department dubbed User
                    Support Services, which I worked from September 2018 to May 2020.
                    The job consisted of assisting students and faculty with hardware
                    and software support. I was able to get hands on and learn a small amount of
                    shell and bash scripting to assist with support issues. I also oversaw a
                    project to document every single computer owned by Winthrop in order for the
                    department to make a plan to convert all Windows 7 users to Windows 10.
                </p>
                <p> My programming knowledge started in High School when I was first introduced
                    to HTML and CSS and learning how to use JavaScript to create web pages. In College,
                    I started with C++, learning all of the data structures needed for any major
                    programming language. I learned a little bit of assembly language using Mars and
                    a Java interface. In addition, I also picked up C#, PHP, WebGL using Javascript,
                    and databasing using MySQL and MongoDB.
                </p>
                <p>I also learned how to use frameworks. I used Node.Js and React to design an
                    auction witha  team of people for All Things Possible. Also, I was able to pick up
                    and learn how to code in Java after College. I created this website to show off
                    my knowledge in programming using PHP, HTML, and CSS. I hope to obtain my first job as a
                    Junior Software Developer.
                </p>
                <h2>Thank you for taking the time to read about me. If you have any questions, please
                    use the Contact section to send me an email. You can also reach me using
                    my media links below. Thank you so much!
                </h2>
            </div>
            <div class="rightcol">
                <div class = "placeholder">
                    <img src="myself.jpeg">
                </div>
            </div>
            <div class="leftcol">
                <a href="https://www.linkedin.com/in/johnathan-estes-260341149/" >
                <img src="linkedin.png" style="width:100px; height:100px">
                </a>
            </div>
        </div>
        <br>
    </body>
</html>
