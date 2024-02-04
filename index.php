<?php
	require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project</title>

    <!-- Bootstrap 5 cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- fontawesome icons cdn -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.gif" type="image/x-icon">

    <!-- custom css -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

    <!-- navbar section -->
   <nav class="navbar navbar-expand-lg p-2">
     <div class="container-fluid  ms-5 me-5">
       <a class="navbar-brand" href="#">HK<span> 2002</span></a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
           <li class="nav-item me-5">
             <a class="nav-link active" aria-current="page" href="#">Home</a>
           </li>
           <li class="nav-item me-5">
             <a class="nav-link" href="#about">About</a>
           </li>
           <li class="nav-item me-5">
            <a class="nav-link" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
       </div>
     </div>
   </nav>

   <!-- carousel section -->
   <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
     <ol class="carousel-indicators" style="list-style-type: none;">
       <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
       <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
       <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
       <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"></li>
     </ol>
     <div class="carousel-inner">
       <div class="carousel-item active">
         <img src="assets/images/carousel1.jpg" class="carousel-img d-block w-100" alt="...">
       </div>
       <div class="carousel-item">
         <img src="assets/images/carousel2.jpg" class="carousel-img d-block w-100" alt="...">
       </div>
       <div class="carousel-item">
         <img src="assets/images/carousel3.jpg" class="carousel-img d-block w-100" alt="...">
       </div>
       <div class="carousel-item">
        <img src="assets/images/carousel4.jpg" class="carousel-img d-block w-100" alt="...">
      </div>
     </div>
     <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
       <span class="visually-hidden">Previous</span>
     </a>
     <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
       <span class="carousel-control-next-icon" aria-hidden="true"></span>
       <span class="visually-hidden">Next</span>
     </a>
   </div>


   <!-- about section -->
   <div class="container about-container" id="about">
        <div class="row">
            <div class="col-md-4 who-we-are p-5">
                <h4 class="pb-2">Who we are ?</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto totam voluptatum non ad illo sint minima nulla illum dolore! Veritatis molestias quisquam, iusto maxime dicta quo deserunt distinctio deleniti ullam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur odio, repellendus adipisci suscipit fugiat labore perspiciatis, fuga dignissimos repellat aperiam excepturi illo porro vel voluptas velit, dolor a iusto amet? Lorem ipsum dolor sit amet consectetur adipisicing eli</p>
            </div>
            <div class="col-md-8 tech-we-use p-2">
                <h4>Tech we use</h4>
                <img src="assets/images/html.png" alt="html" class="tech-img">
                <img src="assets/images/CSS.png" alt="css" class="tech-img">
                <img src="assets/images/JS.png" alt="js" class="tech-img">
                <img src="assets/images/bootstrap.png" alt="bootstrap" class="tech-img">
                <img src="assets/images/jquery.png" alt="jquery" class="tech-img">
                <img src="assets/images/tailwindcss.png" alt="tailwindcss" class="tech-img">
                <img src="assets/images/sass.png" alt="sass" class="tech-img">
                <img src="assets/images/nodejs.png" alt="nodejs" class="tech-img">
                <img src="assets/images/ExpressJS.png" alt="expressjs" class="tech-img">
                <img src="assets/images/Java.png" alt="java" class="tech-img">
                <img src="assets/images/springboot.png" alt="springboot" class="tech-img">
                <img src="assets/images/php.png" alt="php" class="tech-img">
                <img src="assets/images/laravel.png" alt="laravel" class="tech-img">
                <img src="assets/images/python.png" alt="python" class="tech-img">
                <img src="assets/images/flask.png" alt="flask" class="tech-img">
                <img src="assets/images/django.png" alt="django" class="tech-img">
                <img src="assets/images/c.png" alt="c" class="tech-img">
                <img src="assets/images/c++.png" alt="c++" class="tech-img">
                <img src="assets/images/chash.png" alt="c#" class="tech-img">
                <img src="assets/images/asp.net.png" alt="Asp.net" class="tech-img">
                <img src="assets/images/wordpress.png" alt="wordpress" class="tech-img">
                <img src="assets/images/drupal.png" alt="drupal" class="tech-img">
                <img src="assets/images/sql.png" alt="sql" class="tech-img">
                <img src="assets/images/mysql.png" alt="mysql" class="tech-img">
                <img src="assets/images/Oracle.png" alt="oracle" class="tech-img">
                <img src="assets/images/MongoDB.png" alt="mongo-db" class="tech-img">
            </div>
        </div>
   </div>

   <!-- services section -->
   <div class="container services-container" id="services">
    <div class="row">
        <div class="col-md-4">
            <div class="web-design p-4">
                <i class="fa-solid fa-desktop"></i>
                <h5>Website Designing</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga dolores ipsum cumque, doloremque officiis ab, facere quibusdam mollitia neque, perspiciatis ipsam explicabo temporibus qui nesciunt repellendus architecto culpa non tempore.</p>
                <a href="#contact" class="services-link btn btn-primary">Contact us</a> 
            </div>
        </div>
        <div class="col-md-4">
            <div class="web-devlope p-4">
                <i class="fa-solid fa-globe"></i>
                <h5>Website Development</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga dolores ipsum cumque, doloremque officiis ab, facere quibusdam mollitia neque, perspiciatis ipsam explicabo temporibus qui nesciunt repellendus architecto culpa non tempore.</p>
                <a href="#contact" class="services-link btn btn-primary">Contact us</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="web-maintain p-4">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <h5>Website Maintenance</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga dolores ipsum cumque, doloremque officiis ab, facere quibusdam mollitia neque, perspiciatis ipsam explicabo temporibus qui nesciunt repellendus architecto culpa non tempore.</p>
                <a href="#contact" class="services-link btn btn-primary">Contact us</a>
            </div>
        </div>
    </div>
   </div>


   <!-- contact section -->
   <div class="container contact-container" id="contact">
    <div class="row form-row">
        <div class="col-md-8 contact-form p-5">
            <form action="index.php" method="post">
              <div class="mb-3">
                <label for="name" class="form-label">Name *</label>
                <input type="text" class="form-control" id="name" required>
                <div id="error-message" class="text-danger"></div>
              </div>  
              <div class="mb-3">
                <label for="email" class="form-label">Email *</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-3">
                <label for="subject" class="form-label">Subject *</label>
                <select class="form-select" id="subject" required>
                  <option selected>Website Designing</option>
                  <option value="1">Website Development</option>
                  <option value="2">Website Maintenance</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="message">Message *</label>
                <textarea class="form-control" id="message" required></textarea>
              </div>
              <button type="button" class="btn btn-primary" id="form-submit">Submit</button>
            </form>
        </div>
        <div class="col-md-4 form-image d-flex justify-content-center align-items-center  p-5">
            <img src="assets/images/contact-us.png" alt="contact-us" class="contact-img">
        </div>
    </div>
   </div>


   <!-- address section -->
   <div class="address-container container">
      <div class="row address-row">
        <div class="col-md-8 map p-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125322.51346881245!2d76.88483323968686!3d11.013957788070371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba859af2f971cb5%3A0x2fc1c81e183ed282!2sCoimbatore%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1706947718194!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-md-4 address d-flex justify-content-center align-items-center">
            <div class="p-5  d-flex flex-column justify-content-center align-items-center">
                <h5>Contact Details</h5>
                <ul>
                    <li>5, North street,</li>
                    <li>Coimbatore</li>
                    <li>641601</li>
                </ul>
                <p><i class="fa-solid fa-phone"></i>+91-9874563210</p>
            </div>
        </div>
      </div>
   </div>
      
  
   <!-- footer section -->
   <footer>
    <div class="container-fluid pt-3 pb-3">
        BY HK2002
    </div>
   </footer>


   
   <!-- jquery cdn -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

   <!-- sweetalert cdn -->
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

   <script>
        $(function(){
          $('#form-submit').click(function(e){
              let name = $("#name").val();
              let email = $("#email").val();
              let subject = $("#subject").val();
              let message = $("#message").val();

              let namePattern = /^[a-zA-Z]+$/;

              if (!namePattern.test(name)) {
                  $("#error-message").text("Characters only allowed");
              } else if (name.length === 0 || name.length > 20) {
                  $("#error-message").text("20 characters only allowed");
              } else {  
                  $.ajax({
                      type:'POST',
                      url:'process.php',
                      data:{name:name, email:email, subject:subject, message:message},
                      success:function(data){
                          Swal.fire({
                              'title':'Thank you',
                              'text':'We will call you',
                              'type':'success',
                              'icon':'success'
                          })
                      },
                      error:function(data){
                          Swal.fire({
                              'title':'Sorry',
                              'text':'Try after sometime',
                              'type':'error',
                              'icon':'error'
                          })
                      }
                  });
              }   
          });
    });

   </script>

</body>
</html>