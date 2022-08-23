

<?php include 'mail.php'?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
    <!-- -------Scroll Reveal Library -->
    <script src="https://unpkg.com/scrollreveal"></script>
<!-- bootstrp -->
<link rel="stylesheet" href="./CSS/bootstrap.min.css">
<link rel="stylesheet" href="./CSS/all.min.css">
 <!--Style  -->
  <link rel="stylesheet" href="./CSS/style.css">
  
<!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;1,100;1,200;1,400;1,600&display=swap" rel="stylesheet">
</head>
<body>
<img class="big-img" src="./Image/logo-noBackNoName.png" alt="">
  <nav class="navbar navbar-expand-lg ">
  <div class="container">
    <div class="logo-nav"><img src="./Image/logo-nav-WithName.png" alt=""></div>
    <a class="navbar-brand" href="#">AKWAD <span>ELEVATORS</span></a>
      
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 ms-5 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link activeM" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="custom-links nav-link" href="#about">About Us</a>
        </li>
        <li class="nav-item">
          <a href="#services" class="custom-links nav-link">Our Services</a>
        </li>
        <li class="nav-item">
          <a href="#gallery" class="custom-links nav-link">Photo Gallery</a>
        </li>
        <li class="nav-item">
          <a href="#contact" class="custom-links nav-link">Contact</a>
        </li>
      </ul>
      <div class="change-lang">
        <a href="arabic.html"><i class="fa-solid fa-earth-africa"></i>AR</a>
        <a class="active" href="index.html"><i class="fa-solid fa-earth-africa"></i>EN</a>
      </div>
    </div>
  </div>
</nav>
<!-- Landing page -->
    <div  class="landing">
    
    <div class="container">
      <div class="row">
        <div class="col cl1">
            <p class="text"> 
                         <span class="main-heading">Akwad Elevators <br></span> Company offers the finest and best types of Italian elevators to its valued customers, according to the possibility of locations, and in several sizes and specifications, and to meet the desire of our customers, as we are happy to provide the best service for them.
            </p>
        </div>
        <div class="col cl2">
                <img src="./Image/logo-withname.png" alt="">
            </div>
        </div>
      </div>
    </div>
<!-- About page -->

    <div id="about" class="section">
      <div class="about">
        <div class="container">
          <h1 class="main-heading">About Us</h1>
          <div class="content">
   <div class="box-text">
            <p class="text"> <span>Akwad Elevators</span> It is a leading Saudi company in the field of supplying, installing and maintaining elevators. We look forward to developing everything related to elevators and escalators. The company’s management was also keen on the continuous development of its services over the past years, with attention to services and product quality in line with the needs of the markets in the region.</p>
                <div class="exper-wrap">
          <div class="exper">
            <div class="exper-progress">
                 <svg>
                 <circle cx="50" cy="50" r="48" />
              </svg>
              <h2 class="counter">
                       <span data-goal="14">0</span>+
              </h2>
            </div>
            <div class="exper-title">
               <h3>Years</h3>
            </div>
          </div>
          <div class="exper">
            <div class="exper-progress">
              <svg>
                  <circle cx="50" cy="50" r="48" />
              </svg>
              <h2 class="counter">

                  <span data-goal="16">0</span>+
              </h2>         
             </div>
            <div class="exper-title">
             <h3>company</h3>
            </div>
          </div>
          <div class="exper">
            <div class="exper-progress" >
                 <svg>
                <circle cx="50" cy="50" r="48" />
              </svg>
              <h2 class="counter">
                 <span data-goal="30">0</span>+
              </h2>      </div>
            <div class="exper-title">
             <h3>Establishment</h3>
            </div>
          </div>
        </div>
          </div>
      
       <div class="video about-video">
 <video id="myVideo" width="380" height="380" loop>
  <source src="./Video-about-section.mp4" type="video/mp4">
Your browser does not support the video tag.
</video>
      </div>
          </div>
       
        </div>
      </div>
    </div>
<!-- Services page -->
  
    <div id="services" class="section">
      <div class="service">
       <div class="container">
        <h1 class="main-heading">
             Our Services
        </h1>
       <div class="servisec-content">
         
          <div class="title-services">
            <h5 class="main-heading">SUPPLY</h5>
            <h5 class="main-heading">INSTALLATION</h5>
            <h5 class="main-heading">MAINTENANCE</h5>
    
        </div>
  
                <div class="box">
                  <div class="contant">
                <h3>ELEVATOR MAINTENANCE</h3>
                <p>We have an integrated maintenance team that performs the periodic<span class="dots1">...</span> <span class="more1">maintenance of elevators with one visit per month. External doors are cleaned, lubricated and weighed if the weight varies, and this service is for all customers.</span></p>
               </div>
            <div class="info">
                <button onclick="myFunction1()" class="read-more1">Read More</button>
                <i id="icon1" class="fas fa-long-arrow-alt-right"></i>
            </div>
                </div>
                 <div class="box">
                  <div class="contant">
                <h3>EMERGENCY DEPARTMENT</h3>
                <p>Emergency malfunctions is dealt with an immediate response upon receipt of<span class="dots2">...</span> <span class="more2">notification and elevator number around 24/7.</span></p>
               </div>
            <div class="info" >
                                <button onclick="myFunction2()" class="read-more2">Read More</button>

                <i id="icon2" class="fas fa-long-arrow-alt-right"></i>
            </div>
                 </div>
                <div class="box">
                  <div class="contant">
                <h3>TROUBLESHOOTING</h3>
                <p>The natural faults of our elevators are met within (24 hours), provided that the<span class="dots3">...</span> <span class="more3">elevator is repaired and operated after making sure that it is operating normally, taking into account safety standards.</span></p>
               </div>
            <div class="info">
                           <button onclick="myFunction3()" class="read-more3" >Read More</button>

                         <i id="icon3"  class="fas fa-long-arrow-alt-right"></i>
            </div>
                </div>

       </div>
      
       </div>
      </div>
    </div>

<!-- Gallery page -->
<div class="slide-image section" id="gallery">
  <div class="container">
    <h1 class="main-heading">Photo Gallery</h1>
    <input type="radio" name="dot" id="one">
    <input type="radio" name="dot" id="two">
    <input type="radio" name="dot" id="three">
    <div class="main-container">
     
   
<div class="image-container" >
                <div class="box-image">
                 <img src="./Image/img2.jpg" alt="">
                </div>
                <div class="box-image">
                 <img src="./Image/img5.jpg" alt="">
                </div>
                <div class="box-image">
                 <img src="./Image/img6.jpg" alt="">
                </div>
    </div>
      <div class="image-container">
                <div class="box-image">
                 <img src="./Image/img1.jpg" alt="">
                </div>
                <div class="box-image">
                 <img src="./Image/img4.jpg" alt="">
                </div>
                <div class="box-image">
                 <img src="./Image/img3.jpg" alt="">
                </div>
          
    </div>
     <div class="image-container">
                <div class="box-image">
                 <img src="./Image/img7.jpg" alt="">
                </div>
                <div class="box-image">
                 <img src="./Image/img8.jpg" alt="">
                </div>
                <div class="box-image">
                 <img src="./Image/img9.jpg" alt="">
                </div>
             
    </div>
   


    </div>
    <div class="button">
      <label for="three" class="three"></label>
      <label for="one" class="one active"></label>
      <label for="two" class="two"></label>
    </div>
  </div>
</div>


<!-- Contact Us -->
<div class="contact section" id="contact">
     <div class="container">
      <h1 class="main-heading">Contact Us</h1>
        <div class="form-header">
                <ul>
                  <li class="active">Contact</li>
                  <li>For jop</li>
                  <li>our branches</li>
              
                </ul>
        </div>
      <div class="main-form">
 

   
        <form action="" method="POST">
        <div class="content">


  <div class="left">
  <div class="input-group">
<input class="username form-control" type="text" name="username" placeholder="Your Name" value="<?php if(isset($name)) {echo $name;} ?>">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>
<span class="asterisx">*</span>


</div>
  <div class="input-group">
<input class=" form-control" type="email" name="email"placeholder="Your Email" value="<?php if(isset($mail)) {echo $mail;} ?>" requ>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
</svg>
<span class="asterisx">*</span>
  </div>

  <div class="input-group">
 <input class="form-control" 
        type="text" name="phone"
        placeholder="Your Phone Number" 
        value="<?php if(isset($phone)) {echo $phone;} ?>">
 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone-fill" viewBox="0 0 16 16">
  <path d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0z"/>
 </svg>
 <span class="asterisx">*</span>
 
  </div>

</div>

          <div class="right">
            <div class="input-group">
              <textarea placeholder="Your Message!" name="message"><?php if(isset($msg)) {echo $msg;} ?></textarea>
              <span class="asterisx">*</span>
            </div>

          </div>
</div>

<div>
  <p><?php echo $success ?></p>
  <p><?php echo $No ?></p>
</div>
        
          <input name="submit"  class="btn" type="submit" value="Send Message">
        </form>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill send-icon" viewBox="0 0 16 16">
       <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"/>
       </svg>
      </div>
     </div>
</div>








    <!-- JavaScript -->
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/all.min.js"></script>
    <script src="../Akwad-php/main.js"></script>
</body>
</html>