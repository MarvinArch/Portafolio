<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="img/ImgPorta.png">
    <title>Portafolio Marvin Archila</title>
    <link href="view/css/normalize.min.css" rel="stylesheet">
    <link href="view/css/bootstrap.min.css" rel="stylesheet">
    <link href="view/css/main.css" rel="stylesheet">
    <!--All Link tags -->
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-144x144-precomposed.png">
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet'>
    
</head>

<body class="bg-fixed bg-1">
<script src="view/js/Transitions.js"></script>

  <div class="main-container">
    <div class="main wrapper clearfix">
      <!-- Header Start -->
      <header id="header">
        <div id="logo">
          <h6>
            Marvin Archila
          </h6>
          <h4>
            Tag1 / Tag2
          </h4>
        </div>
      </header>

      <!-- Text "hello world" -->
      <header id="header">
        <div id="helloworld">
          <h1>
            Hola Mundo
          </h1>
        </div>
      </header>

      <!-- Main Tab Container -->
      <div id="tab-container" class="tab-container">

        
            <?php
                require "control/UpNavigation.php";
                $barNavigation = new UpNavigation();
                $barNavigation-> UploadNavigation();
            ?>
        

        <!-- ----------------------------------------------------------------------------------- -->
        <!-- Code for differents Tabs strat from here. -->
        <div id="tab-data-wrap">

          <!-- About Tab Data -->
          <div id="about" >
            <?php $barNavigation-> AboutMe();?>
          </div>
          <!-- End About Tab Data -->
          <!-- ----------------------------------------------------------------------------------- -->
          <!-- skills Tab Data -->
          <div id="resume" style="display: none">
              <!-- llamar apartado de skills -->
              <?php $barNavigation-> skills(); ?> 
          </div>

          <!-- End skills Tab Data -->
          <!-- ----------------------------------------------------------------------------------- -->
          <!-- Projects Tab Data -->
          <div id="portfolio" style="display: none">
            <section class="clearfix">
              <div class="project-section">
                <div class="project-container">
                  <div class="project-img-container" onclick="document.getElementById('modal-wrapper').style.display='block'">
                    <img src="img/floor.jpg" alt="project image">
                  </div>
                  <p class="project-title">Project Title</p>
                </div>
                <div class="project-container">
                  <div class="project-img-container" onclick="document.getElementById('modal-wrapper').style.display='block'">
                    <img src="img//floor.jpg" alt="project image">
                  </div>
                  <p class="project-title">Project Title</p>
                </div>
                <div class="project-container">
                  <div class="project-img-container" onclick="document.getElementById('modal-wrapper').style.display='block'">
                    <img src="img/floor.jpg" alt="project image">
                  </div>
                  <p class="project-title">Project Title</p>
                </div>
                <div class="project-container">
                  <div class="project-img-container" onclick="document.getElementById('modal-wrapper').style.display='block'">
                    <img src="img/floor.jpg" alt="project image">
                  </div>
                  <p class="project-title">Project Title</p>
                </div>
                <div class="project-container">
                  <div class="project-img-container" onclick="document.getElementById('modal-wrapper').style.display='block'">
                    <img src="img/floor.jpg" alt="project image">
                  </div>
                  <p class="project-title">Project Title</p>
                </div>
                <div class="project-container">
                  <div class="project-img-container" onclick="document.getElementById('modal-wrapper').style.display='block'">
                    <img src="img/floor.jpg" alt="project image">
                  </div>
                  <p class="project-title">Project Title</p>
                </div>
                <div class="project-container">
                  <div class="project-img-container"onclick="document.getElementById('modal-wrapper').style.display='block'">
                    <img src="img/floor.jpg" alt="project image">
                  </div>
                  <p class="project-title">Project Title</p>
                </div>
                <div class="project-container">
                  <div class="project-img-container" onclick="document.getElementById('modal-wrapper').style.display='block'">
                    <img src="img/floor.jpg" alt="project image">
                  </div>
                  <p class="project-title">Project Title</p>
                </div>
                <div class="project-container">
                  <div class="project-img-container" onclick="document.getElementById('modal-wrapper').style.display='block'">
                    <img src="img/floor.jpg" alt="project image">
                  </div>
                  <p class="project-title">Project Title</p>
                </div>
              </div>
              <div id="modal-wrapper" class="modal">

                <form class="modal-content animate">

                  <div class="imgcontainer">
                    <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
                    <img src="img/floor.jpg" alt="project" class="avatar">
                    <h1 class="project_details" style="text-align:center">Project Details</h1>
                  </div>

                  <div class="container">
                    <input type="text" placeholder="Project Name" name="uname" readonly>
                    <textarea class="project_description" rows="3" placeholder="Project Description" readonly></textarea>
                    <input type="url" placeholder="Project Link"readonly>
                    <input type="text" placeholder="Languages used" readonly>
                    <button class="project_submit" type="submit">Submit</button>
                  </div>

                </form>

              </div>
            </section>
          </div>
          <!-- End Projects tab -->
          <!-- ----------------------------------------------------------------------------------- -->
          <!-- Contact Tab Data -->
          <div id="contacto" style="display: none">
            <?php $barNavigation-> contact();?>
          </div>
          <!-- End Contact Data -->
          <!-- ----------------------------------------------------------------------------------- -->
       </div>
      </div>
      
</body>
</html> 