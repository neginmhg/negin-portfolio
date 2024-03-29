<!-- ......... -->
<!-- php -->
<?php

$message_sent=false;

if(isset($_POST['email']) && $_POST['email'] !=''){
if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){

  // submit the form
  $userName = $_POST['name'];
$userEmail = $_POST['email'];
$messageSubject="New";
$userMessage = $_POST['message'];

$to="negin_mahrang@yahoo.com";
$body="";

$body .= "From: ".$userName. "\r\n";
$body .= "Email: ".$userEmail. "\r\n";
$body .= "Message: ".$userMessage. "\r\n";

mail($to,$messageSubject,$body);
$message_sent=true;

}

}


?>
<!-- end php -->
<!-- ......... -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <!-- font awsome link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <!-- link to boottrap -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
    <title>Negin Mahrang</title>
  </head>

  <body>
    <!-- Header -->
    <section id="header">
      <div class="header container">
        <div class="nav-bar">
          <div class="brand">
            <a href="#hero">
              <!-- <h1><span>N</span>eign <span>M</span>ahrang</h1> -->
              <h1>Negin Mahrang</h1>
            </a>
          </div>
          <div class="nav-list">
            <div class="hamburger">
              <div class="bar"></div>
            </div>
            <ul>
              <li><a href="#hero" data-after="Home">Home</a></li>
              <li><a href="#Resume" data-after="Resume">Resume</a></li>
              <li><a href="#projects" data-after="Projects">Projects</a></li>
              <li><a href="#about" data-after="About">About</a></li>
              <li><a href="#Contact" data-after="Contact">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- End Header -->

    <!-- My Section  -->
    <section id="hero">
      <div class="hero container">
        <div>
          <h1>Hi , <span></span></h1>
          <h1>I'm <span></span></h1>
          <h1>Negin<span></span></h1>

          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />

          <div class="box-2">
            <a
              href="#projects"
              type="button"
              class="btn btn-two"
             style="font-size: 2.5rem;"
            >


              <span>View My Projects&nbsp; &nbsp; </span>
            </a>
          </div>
        </div>
        <div class="star star1"></div>
        <div class="star star2"></div>
        <div class="star star3"></div>
        <div class="star star4"></div>
        <div class="star star5"></div>
        <div class="star star6"></div>
        <div class="star star7"></div>
        <div class="star star8"></div>
      </div>
    </section>
    <!-- About Section -->
    <br>
    <section id="about">
      <h1 class="section-title" style="margin:40px 0 0 0px; padding: 0px;">About<span> me</span></h1>
      <div class="row ">
        <div class="col-xs-12 col-sm-12 col-md-6">
           <center>
            <div class="about-img">
            <img src="./img/negin.jpg" alt="me" style="border-radius: 15%; justify-content: center;" />
           </div>
           </center>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
          <p>
            Negin is a senior computer science student from California State University, Sacramento with professional experience as both software developer and software engineer.
            <br>
            As a skilled leader Negin has experience motivating, supervising, and managing a team of professionals to build
            software programs in Agile framework and manage our time effectively.
            <br>
            Academically, Negin's outstanding performance in computer science and mathematics, has proved strong technical
            and analytical aptitude.
            <br>
            As a self-learner, She enjoy being challenged and engaged with projects that require her to work outside her
            comfort and knowledge set.
            <br>
            Should you have any other questions about employment oppourutnities, please do not hesitate to contact.
          <br>
            <a class="cta" href="#qr" data-after="qr" rel="nofollow noopener">LinkedIn
            </a>
          </p>

        </div>
        <!-- </div> -->
      </div>
    </section>
    
    <!-- End About Section -->
    <!-- End Hero Section  -->

    <!-- skill Section -->
    <!-- <section id="Skills"class="team-area"> -->
        <!-- <h1 class="section-title">Sk<span>i</span>lls</h1>
      <div class="container"> 
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-6 ">
            <div class="team-single">
              <div class="content-area">
                <div class="side-one">
                  <div class="card">
                    <div class="card-body text-center bg1 " 
                    >
                    <h1 class="skill-element">Web Development</h1>                      
                    </div>
                  </div>
                </div>
    
                <div class="side-two">
                  <div class="card ">
                    <div class="card-body text-center bgb1" style="height: 10px;">
                      <p>
                        HTLM,CSS,JavaScript,
                         <br>   
                        JavaScript Frameeworks:<br>
                        ReactJS, NodeJs,
                      <br>    
                  
             <br>
             PHP,
          <br>
                  Python,
                <br>
                  Git and GitHub,
              <br>
                  HTTP and REST,
                    <br>
Database (SQL,NoSQL),
 <br>
npm,

</P>
<p class="skill-element" style="color: transparent; ">
  -------------------------------</p>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 ">
            <div class="team-single">
              <div class="content-area">
                <div class="side-one" >
                  <div class="card" >
                    <div class="card-body text-center bg2"
                   >
                    <h1 class="skill-element">App Development</h1>
                    </div>
                  </div>
                </div>
    
                <div class="side-two">
                  <div class="card">
                    <div class="card-body text-center bgb2">
                      
                      <p>Swift,
                          <br>Xcode IDE,
                            <br>UI and UX design,
                              <br>JSON,
                                <br>Core Data</P>
                        <p class="skill-element" style="color: transparent;">
                          -------------------------------</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 ">
            <div class="team-single">
              <div class="content-area">
                <div class="side-one">
                  <div class="card">
                    <div class="card-body text-center bg3 ">
                      <h1 class="skill-element"> Cloud Computing</h1>                        
                    </div>
                  </div>
                </div>   
                <div class="side-two">
                  <div class="card">
                    <div class="card-body text-center bgb3">
                      <p>Implementing Cloud Solutions using various AWS Services including EC2, VPC, S3, Glacier,
                      EFS, AWS Kinesis, Lambda, Directory Services, Cloud Formation, Ops works, Code Pipeline, Code Build, Code Deploy,
                      Elastic Beanstalk, RDS, Data Pipeline, DynamoDB, Redshift.</p>
                    <p>Architecting and securing the Infrastructure on AWS using IAM, KMS, Cognito, API
                    Gateway, Cloud Trail, Cloud Watch, Config, Trusted Advisor, Security Groups, NACL.</p>  
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 ">
            <div class="team-single">
              <div class="content-area">
                <div class="side-one">
                  <div class="card">
                    <div class="card-body text-center bg4">
                      <h1 class="skill-element">Software Development</h1>
                      
                    </div>
                  </div>
                </div>
    
                <div class="side-two">
                  <div class="card">
                    <div class="card-body text-center bgb4">
                      <p >
                
                        Data Structures and Algorithms
                        <br>
                        Object-oriented design
                          <br>
                        JavaScript,Java,Python,Bash/shell,C,HTML,CSS,SQL
                        ,MongoDB
                          <br>
                        SDLC (Software development life cycle)
                          <br>
                        Unit Testing,Integration Testing,System Testing
                          <br>
                        IDEs ( Eclipse, IntelliJ)
                          <br>
                        Agile Framework
                      </p>                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div> -->
    <!-- </section> -->
    <!-- End Service Section -->


    <!-- Projects Section -->
    <section id="projects">
      <div class="projects container">
        <div class="projects-header">
          <h1 class="section-title">Recent <span>Projects</span></h1>
        </div>
        <div class="all-projects">

          <div class="project-item">
            <div class="project-info">
              <h1>MLO Support</h1>
              <ul>
                <li>
                  An all-in-one platform for a mortgage company developed by Python, Django, ReactJs, SQLite.
                </li>
                <li>
                  REST APIs via python and tested the endpoints using POSTMAN.
                </li>
                <li>
                  UI via Figma and container-based deployment using Docker and Docker images.
                </li>
                <li>
                  Automating, configuring, and deploying instance using AWS, familiar with EC2, S3.
                </li>
                <li>
                  Unit testing and collaborated in an Agile team of 8 developers practicing SCRUM using JIRA.
                </li>
              </ul>
              <a target="_blank" href="https://github.com/WeByteCSC190/Liberty-Wholesale-Mortgage/tree/alpha">
                <button class="codeBtn"><i class="fa fa-solid fa-code"> </i> View </button>
              </a>
            </div>
            <div class="project-img">
              <img src="./img/projects/MLO.png" alt="img" />
            </div>
          </div>

          <div class="project-item">
            <div class="project-info">
              <h1>Oscar Movie Search</h1>
              <ul>
                <li>A search engine and web app using Python, Flask, HTML5, CSS3, and JavaScript that offers a wide directory of movies (Academy of Movies and Picture Arts and Sciences), searchable through award nominations, genre, actors, and keywords.
                </li>
                <li>
                  Backend endpoints developed by Python to feed client apps with movie information.
                </li>
                <li>
                  IMDB REST API in Python to map movies and show available streaming and watching options for Hulu, Netflix,
                  etc.
                </li>
                <li>
                  Collaboration with a team of 5 in an Agile methodology using SCRUM.
                </li>
                <li>
                  The main version control system was GIT on GitHub
                </li>
              </ul>
              <a target="_blank" href="https://github.com/neginmhg/Oscar-Movies-API">
                <button class="codeBtn"><i class="fa fa-solid fa-code"> </i> View </button>
              </a>
            </div>
            <div class="project-img">
              <img src="./img/projects/oscar-project.png" alt="img" />
            </div>
          </div>

          <div class="project-item">
            <div class="project-info">
              <br>
              <h1>Strangers</h1>
              <ul>
                <li>
                  With Strangers, you can post content, your ideas,and opinions anonymously on social media.
                </li>
                <li>A full stack social media app developed by NodeJs, Express.js, Passport.js and implemented RESTful APIs for Gmail authentication.
                </li>
                <li>
                  Front-end via HTML5, CSS3, JavaScript, jQuery, EJS, Bootstrap.
                </li>
                <li>
                  MongoDB, Mongoose, Object Data Mapping (ODM) for the database.
                </li>
                <li>
                  Cookies and sessions specifically express-session npm.
                </li>
                <li>
                  The app is examined for security issues and handles vulnerability remediation of app.
                </li>
              </ul>
              <a target="_blank" href="https://github.com/neginmhg/Social-Media-App">
                <button class="codeBtn"><i class="fa fa-solid fa-code"> </i> View </button>
              </a>
            </div>
            <div class="project-img">
              <img src="./img/projects/sicial-media.png" alt="img" />
            </div>
          </div>
          <div class="project-item">
            <div class="project-info">
              <h1>Star Schedule Builder</h1>
              <ul>
                <li>
                  Scheduling your day gives you an action plan. With Star Builder, you can move forward with the right amount of energy,time, and availability to match what you have for the day.
                </li>
                <li>
                  Developed via React.js, Javascript ES6 Map,Filter,Reduce
                </li>
                <li>
                  Utilizing React conditional rendering with the ternary operator & AND operator, React hooks,event handling, and component tree management.
                </li>
              </ul>
            </div>
            <div class="project-img">
              <img src="./img/projects/schedule-builder.png" alt="img" />
            </div>
          </div>
          <div class="project-item">
            <div class="project-info">
              <h1>Quizly</h1>
              <ul>
                <li>
                  Customize your own a quiz IOS application for your business with Quizly.
                </li>
                <li>
                  Developed by wift in a MVC architecture.
                </li>
                <li>
                  Figma and InVision as UI design tools for Mockups, prototyping and wireframes.
                </li>
              </ul>
              <a target="_blank" href="https://github.com/neginmhg/IOS-Quiz-App-">
                <button class="codeBtn"><i class="fa fa-solid fa-code"> </i> View </button>
              </a>
            </div>
            <div class="project-img">
              <img src="./img/projects/quiz.png" alt="img" />
            </div>
          </div>
          <div class="project-item">
            <div class="project-info">
              <h1>Cloud projects</h1>
              <h2>AWS Solution Architect</h2>
              <ul>
                <li>
                  Ranked a real estate on google search engine organically.
                </li>
                <li>
                  Deployed end to end website on AWS.
                </li>
                <li>
                  EC2, VPC, S3, Glacier,
                  EFS, AWS Kinesis, Lambda, Directory Services, Cloud Formation, Ops works, Code Pipeline, Code Build, Code Deploy,
                  Elastic Beanstalk, RDS, Data Pipeline, DynamoDB, Redshift,
                  IAM, KMS, Cognito, API
                  Gateway, Cloud Trail, Cloud Watch, Config, Trusted Advisor, Security Groups, NACL.
                </li>
              </ul>       
            </div>
            <div class="project-img">
              <img src="./img/projects/cloud.png" alt="img" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Projects Section -->


<!-- contact section -->

<!-- php -->
<?php
if($message_sent):
?>

<h3>Thanks! I wil get back to you.</h3>

<?php
else:
?>
<section id="Contact" class="contact"
 >
  <div class="contactForm">
    <form action="index.php" method="POST" class="form">
<h2>SEND ME A MESSAGE</h2>
<!-- name -->
<div class="inputBox">
  <input type="text" name="name" required="required">
  <span>Full Name</span>
</div>
<!-- Email -->
<div class="inputBox">
  <input 
  type="text" name="email" required="required">
  <span>Email </span>
</div>
<!-- Message -->
<div class="inputBox">
  <textarea required="required"name="message" id="" cols="30" rows="10"></textarea>
  <span>Type Your Message.... </span>
</div>
<!-- Submit Button -->
<div class="inputBox">
  <input type="submit" name="submit" value="Send" >
  <!-- href="mailto:negin_mahrang@yahoo.com" -->
</div>
    </form>
  </div>
 
  
</section>

<?php
endif;
?>
<!-- end of contact -->

<!-- QR Section -->
<section class="qr" id="qr">
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6 qr-img">
    <img src="./img/QR.png" alt="qr-img" />
    </div>

    <div class="col-xs-12 col-sm-6 col-md-6 qr-text">
    <h1 class="section-title">Let's <span>Connect</span>!</h1>
    <br>
    <h2>Add me on LinkedIn</h2>
    <br>

    <h2>&nbsp; &nbsp;Let's get to know each other</h3>
     
<br>
      <p>(Scan the QR code with your iPhone or a QR code reader.)</p>
    </div>
  </div>
   
</section>
<!-- End QR Section -->

<!-- resume Section -->
<section id="Resume" style="padding:10% 0;" class="resume">
  <div class="contactForm" style="background-color:transparent">
    <h2>Click to View Resume</h2>
    <div style="text-align:center"class="inputBox">
    <a target="_blank" href="https://bit.ly/neginmhg">
      <input type="submit" name="submit" value="Resume">
    </a>
    </div>
  </div>
</section>
<!-- End resume Section -->

<!-- Footer -->
<section id="footer">
  <div class="footer container">
    <div class="brand">
      <h1><span>N</span>egin <span>M</span>ahrang</h1>
    </div>
    <div class="social-icon">
      <div class="social-item">
        <a href="https://www.linkedin.com/in/negin-mahrang"
          ><img       
            src="https://img.icons8.com/doodle/128/000000/linkedin--v2.png"
            
        /></a>
      </div>
      <div class="social-item">
        <a href="https://github.com/neginmhg"
          ><img
            src="https://img.icons8.com/cute-clipart/128/000000/github.png"
        /></a>
      </div>
        <div class="social-item">
        <a href="https://www.facebook.com/negin.mahrang"
          >
          
          <img src="https://img.icons8.com/doodle/192/000000/facebook-new.png"/>
        </a>
      </div>
      <div class="social-item">
        <a href="mailto:negin_mahrang@yahoo.com"
          >
          
          <img src="https://img.icons8.com/clouds/200/000000/email.png"/>
        </a>
      </div>   
    </div>
  <p style="font-weight:700">Made with ❤️  by Negin Mahrang</p>
    <p style="font-weight:700">California</p>
    <br>
    <br>
    <br>
    <br>
    <p > Copyright © 2020 . All rights reserved.</p>
    <p style="color:gray;">App icon by <a style="color:gray;"href="https://icons8.com/">Icons8</a></p>
  </div>
</section>
<!-- End Footer -->
<script src="./app.js"></script>
</body>
</html>
