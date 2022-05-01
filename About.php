

  <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="frontpage.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/bb6de713fe.js" crossorigin="anonymous"></script>
    <title>Job Karlo</title>
	
  </head>
  <body>
   <div class="container-fluid sticky-top" style="">
  <div class="row">
  <nav class="navbar navbar-expand-lg navbar-light bg-light " style="" >
  <div class="container">
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <img src="JK-1.png" width=60 height=45 style=""/>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	</br>
	<form class="d-flex" action="search_engine.php" method="post">
       <input class="form-control me-2" type="search" style="" placeholder="Search" aria-label="Search" id="search" name="search">
        <button class="btn btn-outline-success" type="submit" style="">Search</button>
      </form>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" style="padding-right:200px" href="howitworks.php" >How it Works</a>
        </li>
		<li class="nav-item">
          <a class="nav-link fas fa-home" aria-current="page" style="font-size:30px;color:red" href="main.php" ></a>
        </li>
		</ul> 
    </div>
		<?php 
	session_start();
	if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
	{
	?>
	 <a class="nav-link" href="logout.php">Log Out</a>
	<?php 
	}
	else
	{
	?>
	 	 <a class="nav-link" data-bs-toggle="modal" data-bs-target="#loginModal">Log In</a>
	<?php
	}
	?>
	
	
	 <button class="navbar-brand btn btn-outline-success" style="border-radius:20px;" data-bs-toggle="modal" data-bs-target="#signupModal">Sign Up</button>
	
  </div>
</nav>
 </div>
<div class="row" style="">
<nav class="navbar-expand-lg navbar-light   col-lg-12 " style="background-color:rgb(22,30,44);">
<div class="container">
  
    
   
    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
         <li class="nav-item dropdown">
          <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"  aria-expanded="true" style="color:white;padding:20px">
            Graphics & Design
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="graphics.php/#LogoDesign"  style="">Logo Design</a></li>
            <li><a class="dropdown-item" href="graphics.php/#Photoshop"  style="">Photoshop</a></li>
            <li><a class="dropdown-item" href="graphics.php/#AddsDesign" style="">Adds Design</a></li>
			<li><a class="dropdown-item" href="graphics.php/#SocialMediaDesign" style="">Social Media Design</a></li>
          </ul>
        </li>
		
        <li class="nav-item dropdown">
          <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true" style="color:white;padding:20px">
            Video & Animation
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="video.php/#LogoAnimation"	>Logo Animation</a></li>
            <li><a class="dropdown-item" href="video.php/#VideoEditing"		>Video Editing</a></li>
            <li><a class="dropdown-item" href="video.php/#AnimatedGIF"		>Animated GIF's</a></li>
          </ul>
        </li>
		<li class="nav-item dropdown">
          <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true" style="color:white;padding:20px">
            Writing & Translation
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="writing.php/#ContentWriting"	>Content Writing</a></li>
            <li><a class="dropdown-item" href="writing.php/#Translation"	>Translation</a></li>
           
          </ul>
        </li>
		<li class="nav-item dropdown">
          <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true" style="color:white;padding:20px">
            Tech & Programming
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="tech.php/#WebDevelopment"	>Web Development</a></li>
            <li><a class="dropdown-item" href="tech.php/#GameDevelopment"	>Game Development</a></li>
            <li><a class="dropdown-item" href="tech.php/#WordPress"			>Wordpress</a></li>
			<li><a class="dropdown-item" href="tech.php/#AppDevelopment"	>App Development</a></li>
          </ul>
        </li>
		<li class="nav-item dropdown">
          <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true" style="color:white;padding:20px">
            Music & Audio
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
             <li><a class="dropdown-item" href="music.php/#Voiceover"	>Voice Over</a></li>
            <li><a class="dropdown-item" href="music.php/#Remix_Mashup"	>Remix & Mashup</a></li>
            
          </ul>
        </li>
		<li class="nav-item dropdown">
          <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true" style="color:white;padding:20px">
            Business & Marketing
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="Business.php/#SocialMediaMarketing"	>Social Media Marketing</a></li>
            <li><a class="dropdown-item" href="Business.php/#Sales_Marketing"		>Sales & Marketing</a></li>
           
          </ul>
        </li>
      </ul>
      
    </div>
  </div>
</nav>
</div>
</div>
    <!-- login  Modal -->
    <div class="modal fade" id="loginModal" style="margin-top:100px" tabindex="-1" aria-labelledby="loginModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="login.php" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="email">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember it</label>
                        </div>
                        <button type="submit" class="btn btn-success">Login</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--hire talent modal-->
    <div class="modal fade" id="HireTalentModal" style="margin-top:50px" tabindex="-1" aria-labelledby="loginModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel"><img src="JK-1.png" height=90 width=120 /></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="post_the_project.php" method="post">
                        <div class="mb-3">
                            <label for="Project Name" class="form-label">
                                <h1>Choose a name for your project</h1>
                            </label>
                            <input type="text" class="form-control" value="e.g.Build me a website" id="ProjectName"
                                aria-describedby="PROJECT" name="ProjectName">
                            </input>
                        </div>
                        <div class="mb-3">
                            <label for="Project Name" class="form-label">
                                <h1>Tell us more about your project</h1></br>
                                <p style="font-size:20px;margin-top:-20px">Start with a bit about yourself or your
                                    business, and include an overview of what you need done.</p>
                            </label>
                            <input type="text" class="form-control" style="padding-bottom:100px"
                                value="Describe Your Project here..." id="ProjectDescription" aria-describedby="PROJECT"
                                name="ProjectDescription">

                        </div>

                        <div class="mb-3 col-md-10 col-sm-10">
                            <label for="Project Name" class="form-label">
                                <h1>Required Skills</h1>
                            </label>
                            </br>
                            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">

                                <input type="checkbox" class="btn-check" id="LogoDesign" autocomplete="off"
                                    name="LogoDesign" value="1">
                                <label class="btn btn-outline-primary" name="LogoDesign" for="LogoDesign">Logo
                                    Design</label>

                                <input type="checkbox" class="btn-check" id="Photoshop" autocomplete="off"
                                    name="Photoshop" value="1">
                                <label class="btn btn-outline-primary" for="Photoshop">Photoshop</label>

                                <input type="checkbox" class="btn-check" id="Adds Design" autocomplete="off"
                                    name="AddsDesign">
                                <label class="btn btn-outline-primary" for="Adds Design">Adds Design</label>
                                <input type="checkbox" class="btn-check" id="Social Media Design" autocomplete="off"
                                    name="SocialMediaDesign">
                                <label class="btn btn-outline-primary" for="Social Media Design">Social Media
                                    Design</label>
                                <input type="checkbox" class="btn-check" id="Logo Animation" autocomplete="off"
                                    name="LogoAnimation">
                                <label class="btn btn-outline-primary" for="Logo Animation">Logo Animation</label>
                                <input type="checkbox" class="btn-check" id="Video Editing" autocomplete="off"
                                    name="VideoEditing">
                                <label class="btn btn-outline-primary" for="Video Editing">Video Editing</label>
                                <input type="checkbox" class="btn-check" id="Animated GIF's" autocomplete="off"
                                    name="AnimatedGIF">
                                <label class="btn btn-outline-primary" for="Animated GIF's">Animated GIF's</label>
                                <input type="checkbox" class="btn-check" id="Content Writing" autocomplete="off"
                                    name="ContentWriting">
                                <label class="btn btn-outline-primary" for="Content Writing">Content Writing</label>
                                <input type="checkbox" class="btn-check" id="Translation" autocomplete="off"
                                    name="Translation">
                                <label class="btn btn-outline-primary" for="Translation">Translation</label>
                                <input type="checkbox" class="btn-check" id="Web Development" autocomplete="off"
                                    name="WebDevelopment">
                                <label class="btn btn-outline-primary" for="Web Development">Web Development</label>
                            </div>

                            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group"
                                style="margin-top:25px">
                                <input type="checkbox" class="btn-check" id="Game Development" autocomplete="off"
                                    name="GameDevelopment">
                                <label class="btn btn-outline-warning" for="Game Development">Game Development</label>
                                <input type="checkbox" class="btn-check" id="Wordpress" autocomplete="off"
                                    name="WordPress">
                                <label class="btn btn-outline-warning" for="Wordpress">Wordpress</label>
                                <input type="checkbox" class="btn-check" id="App Development" autocomplete="off"
                                    name="AppDevelopment">
                                <label class="btn btn-outline-warning" for="App Development">App Development</label>
                                <input type="checkbox" class="btn-check" id="Voiceover" autocomplete="off"
                                    name="Voiceover">
                                <label class="btn btn-outline-warning" for="Voiceover">Voiceover</label>
                                <input type="checkbox" class="btn-check" id="Remix & Mashup" autocomplete="off"
                                    name="Remix_Mashup">
                                <label class="btn btn-outline-warning" for="Remix & Mashup">Remix & Mashup</label>
                                <input type="checkbox" class="btn-check" id="Social Media Marketing" autocomplete="off"
                                    name="SocialMediaMarketing">
                                <label class="btn btn-outline-warning" for="Social Media Marketing">Social Media
                                    Marketing</label>
                                <input type="checkbox" class="btn-check" id="Sales & Marketing" autocomplete="off"
                                    name="Sales_Marketing">
                                <label class="btn btn-outline-warning" for="Sales & Marketing">Sales & Marketing</label>


                            </div>
                            <hr>
                        </div>
                        <button type="submit" value="submit" class="btn btn-danger">Post The Project</button>
                    </form>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
    <!-- find work modal -->
    <div class="modal fade" id="findWorkModal" style="margin-top:50px" tabindex="-1" aria-labelledby="loginModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Job Karlo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <!-- <div class="mb-3">
           <label for="Project Name" class="form-label">
             <h1>Name of your project</h1>
           </label>
           <input type="text" class="form-control" name="project_name" value="e.g.Build me a website"
             id="input Project Name" aria-describedby="PROJECT">
         </div> -->
                        <!-- <div class="mb-3">
           <label for="Project Name" class="form-label">
             <h1>Tell us more about your project</h1></br>
             <p style="font-size:20px;margin-top:-20px">Start with a bit about yourself or your business, and include
               an overview of what you need done.</p>
           </label>
           <input type="text" class="form-control" style="padding-bottom:100px" name="description"
             value="Describe Your Project here..." id="input Project Name" aria-describedby="PROJECT">
         </div> -->
                        <!-- <div class="mb-3">
           <label for="Project Name" class="form-label">
             <h1>Upload a File</h1></br>
           </label>
           <form action="upload.php" method="post" enctype="multipart/form-data">
             <input type="file" name="fileToUpload" id="fileToUpload" style="margin-left:-225px;margin-top:20px">
             </input>
           </form>
           <hr>
         </div> -->
                        <div class="mb-3">
                            <label for="Project Name" class="form-label">
                                <h1>Field Of Interest</h1>
                            </label>
                            </br>
                            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                <input type="radio" class="btn-check" id="LogoDesign" autocomplete="off">
                                <label class="btn btn-outline-primary" for="LogoDesign"><a class=" "
                                        href="graphics.php/#LogoDesign" style="text-decoration:none">Logo
                                        Design</a></label>

                                <input type="radio" class="btn-check" id="Photoshop" autocomplete="off">
                                <label class="btn btn-outline-primary" for="Photoshop"><a class=""
                                        href="graphics.php/#Photoshop"
                                        style="text-decoration:none">Photoshop</a></label>

                                <input type="radio" class="btn-check" id="Adds Design" autocomplete="off">
                                <label class="btn btn-outline-primary" for="Adds Design"><a class=""
                                        href="graphics.php/#AddsDesign" style="text-decoration:none">Adds
                                        Design</a></label>
                                <input type="radio" class="btn-check" id="Social Media Design" autocomplete="off">
                                <label class="btn btn-outline-primary" for="Social Media Design"><a class=""
                                        href="graphics.php/#SocialMediaDesign" style="text-decoration:none">Social Media
                                        Design</a></label>
                                <input type="radio" class="btn-check" id="Logo Animation" autocomplete="off">
                                <label class="btn btn-outline-primary" for="Logo Animation"><a class=""
                                        href="video.php/#LogoAnimation" style="text-decoration:none">Logo
                                        Animation</a></label>
                                <input type="radio" class="btn-check" id="Video Editing" autocomplete="off">
                                <label class="btn btn-outline-primary" for="Video Editing"><a class=""
                                        href="video.php/#VideoEditing" style="text-decoration:none">Video
                                        Editing</a></label>
                                <input type="radio" class="btn-check" id="Animated GIF's" autocomplete="off">
                                <label class="btn btn-outline-primary" for="Animated GIF's"><a class=""
                                        href="video.php/#AnimatedGIF" style="text-decoration:none">Animated
                                        GIF's</a></label>
                                <input type="radio" class="btn-check" id="Content Writing" autocomplete="off">
                                <label class="btn btn-outline-primary" for="Content Writing"><a class=""
                                        href="writing.php/#ContentWriting" style="text-decoration:none">Content
                                        Writing</a></label>
                                <input type="radio" class="btn-check" id="Translation" autocomplete="off">
                                <label class="btn btn-outline-primary" for="Translation"><a class=""
                                        href="writing.php/#Translation"
                                        style="text-decoration:none">Translation</a></label>
                                <input type="radio" class="btn-check" id="Web Development" autocomplete="off">
                                <label class="btn btn-outline-primary" for="Web Development"><a class=""
                                        href="tech.php/#WebDevelopment" style="text-decoration:none">Web
                                        Development</a></label>
                            </div>

                            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group"
                                style="margin-top:25px">
                                <input type="radio" class="btn-check" id="Game Development" autocomplete="off">
                                <label class="btn btn-outline-warning" for="Game Development"><a class=""
                                        href="tech.php/#GameDevelopment"
                                        style="text-decoration:none;color:rgb(255,207,64);">Game Development</a></label>
                                <input type="radio" class="btn-check" id="Wordpress" autocomplete="off">
                                <label class="btn btn-outline-warning" for="Wordpress"><a class=""
                                        href="tech.php/#Wordpress"
                                        style="text-decoration:none;color:rgb(255,207,64);">Wordpress</a></label>
                                <input type="radio" class="btn-check" id="App Development" autocomplete="off">
                                <label class="btn btn-outline-warning" for="App Development"><a class=""
                                        href="tech.php/#AppDevelopment"
                                        style="text-decoration:none;color:rgb(255,207,64);">App Development</a></label>
                                <input type="radio" class="btn-check" id="Voiceover" autocomplete="off">
                                <label class="btn btn-outline-warning" for="Voiceover"><a class=""
                                        href="music.php/#Voiceover"
                                        style="text-decoration:none;color:rgb(255,207,64);">Voiceover</a></label>
                                <input type="radio" class="btn-check" id="Remix & Mashup" autocomplete="off">
                                <label class="btn btn-outline-warning" for="Remix & Mashup"><a class=""
                                        href="music.php/#Remix_Mashup"
                                        style="text-decoration:none;color:rgb(255,207,64);">Remix & Mashup</a></label>
                                <input type="radio" class="btn-check" id="Social Media Marketing" autocomplete="off">
                                <label class="btn btn-outline-warning" for="Social Media Marketing"><a class=""
                                        href="Business.php/#SocialMediaMarketing"
                                        style="text-decoration:none;color:rgb(255,207,64);">Social Media
                                        Marketing</a></label>
                                <input type="radio" class="btn-check" id="Sales & Marketing" autocomplete="off">
                                <label class="btn btn-outline-warning" for="Sales & Marketing"><a class=""
                                        href="Business.php/#Sales_Marketing"
                                        style="text-decoration:none;color:rgb(255,207,64);">Social_Marketing</a></label>


                            </div>
                            <hr>
                        </div>
                        <!-- <button type="submit" class="btn btn-danger">Post The Project</button> -->
                    </form>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>

    <!-- end of find work modal -->

    <!-- SIgn up Modal -->
    <div class="modal fade" style="margin-top:100px" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signupModalLabel">Register</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="signup.php" method="post">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="your_name" name="your_name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">User Name</label>
                            <input type="text" class="form-control" id="username" name="username">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                name="email">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <!-- <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div> -->
                        <button type="submit" class="btn btn-success" data-bs-target="#signing">Register</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    <!-- ABout Content -->
    <!--big div tag-->

    <div id="carouselExampleSlidesOnly carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
        <div class="carousel-inner ">
            <div class="carousel-item active ">
                <img src="about2.jfif" class="d-block w-100 " alt="">

                <div class="carousel-caption ">
                    <p class="caption text-light"> Explore the online freelance community
                        Turn ideas into Reality</p>
                    <!-- <a class="btn btn-outline-warning col-6 col-md-4" style="border-radius:10px" data-bs-target="#findWorkModal" data-bs-toggle="modal" href="">Find work</a>
            <a class="btn btn-secondary col-6 col-md-4" data-bs-toggle="modal" data-bs-target="#HireTalentModal" style="border-radius:10px" href="">Hire Talent</a> -->
                </div>

            </div>
            <div class="carousel-item">
                <img src="about1.jfif" class="d-block w-100" alt="">

                <div class="carousel-caption ">
                    <p class="caption text-light">Explore the online freelance community
                        Turn ideas into Reality</p>
                    <!-- <a class="btn btn-outline-danger col-6 col-md-4" href="" data-bs-target="#findWorkModal" data-bs-toggle="modal" style="border-radius:10px" >Find work</a>
            <a class="btn btn-warning col-6 col-md-4 " data-bs-toggle="modal" data-bs-target="#HireTalentModal" style="border-radius:10px" href="">Hire Talent</a> -->
                </div>
            </div>

        </div>

    </div>


    <!-- procedure of working -->
    <div class="container">
        
        <div class="row featurette d-flex justify-content-center align-items-center">
            <hr class="featurette-divider">
            <div class="col-md-7 order-md-2">
                
                <h2 class="featurette-heading">Company Overview</h2>
                <p class="lead">JK.com is the emerging freelancing and crowdsourcing marketplace by
                    number of users and projects. We connect over 55,77 employers and freelancers globally from
                    over 247 countries, regions and territories. Through our marketplace, employers can hire freelancers
                    to do work in areas such as software development, writing, data entry and design right through to
                    engineering, the sciences, sales and marketing, accounting and legal services.</p>    
            </div>
            <div class="col-md-5 order-md-1">
                <img src="globe.jfif"
                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="400"
                    height="300" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em"></text>

            </div>
        </div>

        <hr class="featurette-divider">
        
    </div>

<!--footer-->


    <div style="background-color:rgb(22,30,44);padding-top:100px">
        <div class="row container" style="margin-left:50px">
            <div class="col-xxl-4 col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <img src="JK-1.png" height="50" width="67" style="" /></br></br></br></br></br>
            </div>
            <div class="col-xxl-2 col-lg-3 col-md-6 col-sm-6 col-xs-12 ">
                <h1 style="font-size:30px;margin-bottom:25px;color:white">Categories</h1>
                <p>
                    <a style="text-decoration:none;color:white" href="graphics.php/#LogoDesign">Logo Design</a></br>
                    <a style="text-decoration:none;color:white" href="graphics.php/#Photoshop">Photoshop</a></br>
                    <a style="text-decoration:none;color:white" href="graphics.php/#AddsDesign">Adds
                        Design</a></br>
                    <a style="text-decoration:none;color:white" href="graphics.php/#SocialMediaDesign">Social Media
                        Design</a></br>
                    <a style="text-decoration:none;color:white" href="video.php/#LogoAnimation">Logo Animation</a></br>
                    <a style="text-decoration:none;color:white" href="video.php/#VideoEditing">Video Editing</a></br>
                    <a style="text-decoration:none;color:white" href="video.php/#AnimatedGIF">Animated GIFs</a></br>
                    <a style="text-decoration:none;color:white" href="writing.php/#ContentWriting">Content
                        Writing</a></br>
                    <a style="text-decoration:none;color:white" href="writing.php/#Translation">Translation</a></br>
                    <a style="text-decoration:none;color:white" href="tech.php/#WebDevelopment">Web
                        Development</a></br>
                    <a style="text-decoration:none;color:white" href="tech.php/#GameDevelopment">GameDevelopment</a></br>
                    <a style="text-decoration:none;color:white" href="tech.php/#WordPress">Wordpress</a></br>
                    <a style="text-decoration:none;color:white" href="tech.php/#AppDevelopment">App Development</a></br>
                    <a style="text-decoration:none;color:white" href="music.php/#Voiceover">Voiceover</a></br>
                    <a style="text-decoration:none;color:white" href="music.php/#Remix_Mashup">Remix & Mashup</a></br>
                    <a style="text-decoration:none;color:white" href="Business.php/#SocialMediaMarketing">Social Media Marketing</a></br>
                    <a style="text-decoration:none;color:white" href="Business.php/#Sales_Marketing">Sales &   Marketing</a></br></br></br></br>
            </div>

            <div class="col-xxl-2 col-lg-3 col-md-6 col-sm-6 col-xs-12 ">
                <h1 style="font-size:30px;margin-bottom:25px;color:white">About</h1>
                <a style="text-decoration:none;color:white" href="About.php">About Us</a></br>
                <a style="text-decoration:none;color:white" href="leadership.php">Leadership</a></br></br></br></br>
            </div>

            <div class="col-xxl-2 col-lg-3  col-md-6 col-sm-6 col-xs-12 ">
                <h1 style="font-size:30px;margin-bottom:25px;color:white">Community</h1>
                <a style="text-decoration:none;color:white" href="blogs.php">Blogs</a></br>
                <a style="text-decoration:none;color:white" href="videos.php">Videos</a></br></br></br></br>
            </div>

            <div class="col-xxl-2 col-lg-3  col-md-6 col-sm-6 col-xs-12 ">
                <h1 style="font-size:30px;margin-bottom:25px;color:white">Contact Us</h1>
                <a style="text-decoration:none" href="https://www.facebook.com"><i class="fab fa-facebook"
                        style="font-size:50px;margin-left:50px"></i></a></br></br>
                <a style="text-decoration:none" href="https://www.linkedin.com"><i class="fab fa-linkedin"
                        style="font-size:50px;margin-left:50px;color:rgb(2,116,182)"></i></a></br></br>
                <a style="text-decoration:none" href="https://www.youtube.com"><i class="fab fa-youtube"
                        style="font-size:50px;margin-left:50px;color:red"></i></a></br></br></br></br></br>
            </div>

        </div>
        <hr style="color:white">
        <div class="row container">
            <div class="col-xxl-2 col-lg-3  col-md-6 col-sm-6 col-xs-12 ">
                <h1 style="color:white;font-size:30px;padding-left:50px;"><?php
$link = mysqli_connect('localhost', 'root', '', 'jk');
 if(!$link){ 
die('Failed to connect to server'); 
} 
$query="SELECT count(*) as total from users";
$results = mysqli_query($link,$query); 
$log=mysqli_fetch_assoc($results);
echo $log['total'];?>
</h1>
<p style="color:white">
                
                    Registered Users
              </p>
</div>
<div class="col-xxl-2 col-lg-3  col-md-6 col-sm-6 col-xs-12 ">
<h1 style="color:white;font-size:30px;padding-left:40px;"><?php
$link = mysqli_connect('localhost', 'root', '', 'jk');
 if(!$link){ 
die('Failed to connect to server'); 
} 
$query="SELECT count(*) as total from project";
$results = mysqli_query($link,$query); 
$log=mysqli_fetch_assoc($results);
echo $log['total'];?>
</h1>
<p style="color:white">
Total Jobs Posted
</p>
</div>
<div class="col-xxl-6 col-lg-3  col-md-6 col-sm-6 col-xs-12 ">

<p style="color:white">
Job Karlo ® is a registered Trademark of Job Karlo Technology International Pvt Limited (UT74832B7)  & Job Karlo Online India Pvt Limited (CO78789HGH2)
Copyright © 2021 registered Trademark of Job Karlo Technology International Pvt Limited (UT74832B7)
</p>
</div>
</div>
</div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
        -->
</body>

</html>