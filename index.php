<?php include "assets/includes/connection.php"; 

$conn = OpenCon(); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Personal Bio - Chitegetse A Minanago</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/download.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

   <!-- Template Secondary CSS File -->
  <link rel="stylesheet" type="text/css" href="assets/css/secondary.css">


  



  <!-- =======================================================
  * Website Name: Personal Profile - v1.0.0
  
  * Author: ZUKAZUDO
  
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:cminanago@gmail.com">cminanago@gmail.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> +255 715 874 005
      </div>
      <div class="social-links d-none d-md-block">
        <!-- <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i> -->
        <a href="https://wa.link/ycj0cz" target="_blank" rel="noopener noreferrer" class="whatsapp"><i class="bi bi-whatsapp"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">Personal Profile</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Bio</a></li>
          <!-- <li><a title="Download My CV" class="nav-link scrollto" target="_blank" rel="noopener noreferrer" href="https://drive.google.com/drive/folders/1Pa9yy7Wq-nxwrG8p21tNp9ISHxJhSv8v?usp=share_link">CV</a></li> -->
         <!-- <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>-->
         <!-- <li><a class="nav-link scrollto" href="#team">Team</a></li> -->
          <li class="dropdown"><a href="#"><span>Sections</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="scrollto" href="#teaching">Teaching</a></li>
              <!--<li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li> -->
              <li><a class="scrollto" href="#Projects">Projects</a></li>
              <li><a class="scrollto" href="#research_n_scholarly_work">Research and Scholarly Work</a></li>
              <li><a class="scrollto" href="#Consultancy">Consultancy</a></li>
              <li><a class="scrollto" href="#Publications">Publications</a></li> 
              <li><a class="scrollto" href="#Innovation">Innovation</a></li>
              <li><a class="scrollto" href="#Membership">Membership</a></li>
              <li><a class="scrollto" href="#training_workshops_n_conferences">Training, Workshops and Conferences</a></li>
          </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
         <!--  <li><a class="getstarted scrollto" href="#about">Get Started</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <?php /*
  $qry="SELECT authors FROM books WHERE id=1";
  $result= mysqli_query($conn,$qry);
  while ($row = mysqli_fetch_array($result)){ 
    */
    ?> 
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Welcome to My Personal Profile</h2>
              <p class="animate__animated animate__fadeInUp"><?php /* echo $row["authors"] */ ?>
              Chitegetse Archangela Minanago is a Lecturer at the Department of Sociology and Social Work at the Open University of Tanzania.She is also the Director of Kigoma Regional Centre as one of the University’s centres in Tanzania Mainland. 
            </p><?php /* } */?>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">My Research</h2>
              <p class="animate__animated animate__fadeInUp">Minanago’s research focus is on Gender Based Violence and Violence against Children, specifically targeting on researching the effects of children’s exposure to inter-parental violence, childhood resilience and academic performance, child maltreatment, parenting in the midst of parental violence, and adversity experiences in childhood.</p>
              <a href="#research_n_scholarly_work" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Current Research</h2>
              <p class="animate__animated animate__fadeInUp">Minanago is currently developing a theory and evidence-based intervention using an intervention mapping approach, for children aged 9-12 years experiencing emotional difficulties from being exposed to inter-parental violence.</p>
              <a href="#research_n_scholarly_work" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  

  <main id="main">

    

    <!-- ======= About ME Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About Me</h2>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="assets/img/chitegetse_dp.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Chitegetse Archangela Minanago is the Director of the Open University of Tanzania - Kigoma Regional Centre, a Lecturer and a GBV & VAC Researcher.</h3>
            <p class="fst-italic">
              She is a results-oriented person, embracing self-development, service and transformation at the core of her career growth.
            </p>
            <!-- <ul>
              <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul> -->
                        <p>
                          Minanago is a Sociology Lecturer at the department of
            Sociology and Social Work of the Open University of Tanzania. She is
            currently a PhD candidate at the Department of Health Promotion, Care
            and Public Health Research Institute at Maastricht University, in the
            Netherlands. Her thesis is focused on exploring the dynamics of
            children's exposure to inter-parental violence and its effects on
            child development.
                        </p>
                        <p>Her main interest is uncovering children's own
            voices on their experiences and involvement in inter-parental violence
            and their coping strategies. She is currently working on developing a
            theory and evidence-based intervention for children aged 9-12 years
            experiencing emotional difficulties as an outcome of exposure to
            inter-parental violence.</p>
                      <p>Besides her scholarly domain, Minanago is
            intrigued by the origin of life and the universe, the laws of the
            universe, spirituality, mental health, personality psychology,
            vibrational learning, digital teaching and learning, agile management
            and social change. She enjoys spending time with mother nature and engaging in
            community service.</p>
          </div>
        </div>

      </div>
    </section><!-- End About ME Section -->

    <!-- ======= TEACHING Section ======= -->
    <section id="teaching" class="featured-services">
      <div class="container">
        <div class="section-title">
          <h2>Teaching</h2>
          <!-- <p>Here goes an introduction to this section</p> -->
        </div>

        <div class="row no-gutters">
          <div class="tabs">

  <input type="radio" id="tab1" name="tab-control" checked>
  <input type="radio" id="tab2" name="tab-control">
  <ul>
    <li title="Teaching Experience"><label for="tab1" role="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><circle cx="104" cy="144" r="32" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M72,144a32,32,0,1,1,32,32h88V80H64v64Z" opacity="0.2"/><path d="M53.4,208a56,56,0,0,1,101.2,0H216a8,8,0,0,0,8-8V56a8,8,0,0,0-8-8H40a8,8,0,0,0-8,8V200a8,8,0,0,0,8,8Z" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="176 176 192 176 192 80 64 80 64 96" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg><br><span>Teaching Experience</span></label></li>
         <li title="The Courses"><label for="tab2" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-text" viewBox="0 0 16 16"> <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/> <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/> </svg><br><span>The Courses</span></label></li>
  </ul>

  <div class="content">
    <section>
      <h2>Teaching Experience</h2>
      <div class="check-list">
        <li>Course planning, organization and facilitation</li>
        <li>Planning, evaluating and reviewing online courses</li>
        <li>Developing course materials and learning materials</li>
        <li>Designing quizzes, assignments, setting exams and generating exam question databank</li>
        <li>Grading learners’ formative and summative work</li>
        <li>Supervising learners’ fieldwork and research projects</li>
        <li>Facilitating online oral examinations</li>
        <li>Developing and reviewing curricula </li>
        <li>Designing and facilitating online face to face classes</li>
        <li>Facilitating effective online discussions</li>
        </div>
    </section>
    <section>
      <h2>The courses</h2>
      <div class="check-list">
        <li>2020- todate : OGS 600 - Gender Theories and Debates; Master Course</li>
        <li>2020- todate : SWT06211 - Quality Assurance and Improvement in Social Welfare Services; Certificate Course</li>
        <li>2019- todate : OSS 222 - Social Sciences Research Methods; Undergraduate Course</li>
        <li>2020- todate : OSS 123 - Classical Sociological Theories; Undergraduate Course</li>
        <li>2020- 2022 : SWT05208- Social Advocacy and Empowerment; Certificate Course</li>
        <li>2020- 2022 : OSS 321 - Sociology of Knowledge; Undergraduate Course</li>
        <li>2016-2019: OSS 124 - Social Psychology; Undergraduate Course</li>
        <li>2012- 2019: OSP 104 - Psychology for Social Workers; Undergraduate Course</li>
        <li>2009- 2019: OSS 205 - Youth, Crime and Deviance; Undergraduate Course</li>
      </div>
    </section>
  </div>
</div>
          
        </div>

      </div>
    </section><!-- End TEACHING Section -->

    <!-- ======= PROJECT Section ======= -->
    <section id="Projects" class="clients">
      <div class="container">

        <div class="section-title">
          <h2>Research Projects</h2>
          <!-- <p>Here goes an introduction to this section</p> -->
        </div>

        <div class="row no-gutters">
          <div class="tabs">

  <input type="radio" id="tab1111" name="tab-control" checked>
  <!-- <input type="radio" id="tab2222" name="tab-control" checked> -->
  <input type="radio" id="tab3333" name="tab-control">
  <ul>
    <li title="Translation and Cultural"><label for="tab1111" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-1-circle-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM9.283 4.002V12H7.971V5.338h-.065L6.072 6.656V5.385l1.899-1.383h1.312Z"/>
</svg><br>
<!-- <span>Research Competencies</span></label></li>
    <li title="Translation and Cultural Adaptation of Assessment Scales from English to Swahili (2017-2019)"><label for="tab2222" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-2-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM6.646 6.24c0-.691.493-1.306 1.336-1.306.756 0 1.313.492 1.313 1.236 0 .697-.469 1.23-.902 1.705l-2.971 3.293V12h5.344v-1.107H7.268v-.077l1.974-2.22.096-.107c.688-.763 1.287-1.428 1.287-2.43 0-1.266-1.031-2.215-2.613-2.215-1.758 0-2.637 1.19-2.637 2.402v.065h1.271v-.07Z"/>
</svg><br> -->
<span>Translation and Cultural</span></label></li>
    <li title="Association between children's exposure"><label for="tab3333" role="button">
    
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-2-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM6.646 6.24c0-.691.493-1.306 1.336-1.306.756 0 1.313.492 1.313 1.236 0 .697-.469 1.23-.902 1.705l-2.971 3.293V12h5.344v-1.107H7.268v-.077l1.974-2.22.096-.107c.688-.763 1.287-1.428 1.287-2.43 0-1.266-1.031-2.215-2.613-2.215-1.758 0-2.637 1.19-2.637 2.402v.065h1.271v-.07Z"/>
</svg>
    
    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-3-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-8.082.414c.92 0 1.535.54 1.541 1.318.012.791-.615 1.36-1.588 1.354-.861-.006-1.482-.469-1.54-1.066H5.104c.047 1.177 1.05 2.144 2.754 2.144 1.653 0 2.954-.937 2.93-2.396-.023-1.278-1.031-1.846-1.734-1.916v-.07c.597-.1 1.505-.739 1.482-1.876-.03-1.177-1.043-2.074-2.637-2.062-1.675.006-2.59.984-2.625 2.12h1.248c.036-.556.557-1.054 1.348-1.054.785 0 1.348.486 1.348 1.195.006.715-.563 1.237-1.342 1.237h-.838v1.072h.879Z"/>
</svg> -->
<br><span>Association between children's exposure</span></label></li>
  </ul>
  <div class="content">
    <!-- <section>
    <div class="check-list">
        <li>Translation and cultural adaptation of instruments</li>
        <li>Intervention development using the intervention mapping approach</li>
        <li>Interviewing</li>
        <li>Surveys</li>
        <li>Sociological analyses</li>
        <li>Systematic reviews</li>
        <li>Cognitive interviewing</li>
        <li>Mixed methods research</li>
        <li>Delphi study</li>
        <li>Participatory research</li>
  
    </div>
    -- <div>
        <h4 style="text-align: center;">Translation and cultural adaptation of instruments, intervention development using the intervention mapping approach, interviewing, surveys, Sociological analyses, systematic reviews, cognitive interviewing, validation of measurements, mixed methods research, Delphi study, and participatory research.</h4></div> --
    
    </section> -->
   <section class="why-us">
      <div class="container try">
        <h3 style="text-align: center;">Translation and Cultural Adaptation of Assessment Scales from English to Swahili (2017-2019)</h3>

        <div class="row no-gutters">

          <div class="col-lg-4 col-md-6 content-item">
            <span>01</span>
            <h4>CEDV</h4>
            <p>Children’s Exposure to Domestic Violence</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item">
            <span>02</span>
            <h4>PSI</h4>
            <p>Parenting Style Inventory</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item">
            <span>03</span>
            <h4>APRS</h4>
            <p>Academic Performance Rating Scale</p>
          </div>

          <div class="col-lg-6 col-md-6 content-item">
            <span>04</span>
            <h4>CGPQ</h4>
            <p>Comprehensive General Parenting Questionnaire</p>
          </div>

          <div class="col-lg-6 col-md-6 content-item">
            <span>05</span>
            <h4>CYRM</h4>
            <p>Child and Youth Resilience Measure</p>
          </div>

        </div>

      </div>
    </section>
    <section>
       <h3 style="text-align: center;">Association between children's exposure to interparental violence and children's academic performance and social-emotional adjustment</h3>
    
    </section>
  </div>
</div>
          
        </div>

      </div>
    </section><!-- End PROJECT Section -->

    <!-- ======= RESEARCH Section ======= -->
    <section id="research_n_scholarly_work" class="clients">
      <div class="container">

        <div class="section-title">
          <h2>Research and Scholarly Work</h2>
          <!-- <p>Ongoing PhD research project on the exploration of the effects of exposure to inter- parental violence on child development: Developing a theory and evidence- based intervention</p> -->
        </div>

        <div class="row no-gutters">
          <div class="tabs">

  <input type="radio" id="tab11" name="tab-control" checked>
  <input type="radio" id="tab22" name="tab-control">
  <input type="radio" id="tab33" name="tab-control">
  <input type="radio" id="tab44" name="tab-control">
  <ul>
    <li title="Research interests"><label for="tab11" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-activity" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 2a.5.5 0 0 1 .47.33L10 12.036l1.53-4.208A.5.5 0 0 1 12 7.5h3.5a.5.5 0 0 1 0 1h-3.15l-1.88 5.17a.5.5 0 0 1-.94 0L6 3.964 4.47 8.171A.5.5 0 0 1 4 8.5H.5a.5.5 0 0 1 0-1h3.15l1.88-5.17A.5.5 0 0 1 6 2Z"/>
</svg><br><span>Research interests</span></label></li>
    <li title="Research skills and competencies"><label for="tab22" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z"/>
</svg><br><span>Research skills</span></label></li>
    <li title="Reviewer"><label for="tab33" role="button"><svg viewBox="0 0 24 24">
          <path d="M18.125,15.804l-4.038-4.037c0.675-1.079,1.012-2.308,1.01-3.534C15.089,4.62,12.199,1.75,8.584,1.75C4.815,1.75,1.982,4.726,2,8.286c0.021,3.577,2.908,6.549,6.578,6.549c1.241,0,2.417-0.347,3.44-0.985l4.032,4.026c0.167,0.166,0.43,0.166,0.596,0l1.479-1.478C18.292,16.234,18.292,15.968,18.125,15.804 M8.578,13.99c-3.198,0-5.716-2.593-5.733-5.71c-0.017-3.084,2.438-5.686,5.74-5.686c3.197,0,5.625,2.493,5.64,5.624C14.242,11.548,11.621,13.99,8.578,13.99 M16.349,16.981l-3.637-3.635c0.131-0.11,0.721-0.695,0.876-0.884l3.642,3.639L16.349,16.981z" />
        </svg><br><span>Reviewer</span></label></li>
    <li title="Theses"><label for="tab44" role="button"><svg viewBox="0 0 24 24">
          <path d="M18.303,4.742l-1.454-1.455c-0.171-0.171-0.475-0.171-0.646,0l-3.061,3.064H2.019c-0.251,0-0.457,0.205-0.457,0.456v9.578c0,0.251,0.206,0.456,0.457,0.456h13.683c0.252,0,0.457-0.205,0.457-0.456V7.533l2.144-2.146C18.481,5.208,18.483,4.917,18.303,4.742 M15.258,15.929H2.476V7.263h9.754L9.695,9.792c-0.057,0.057-0.101,0.13-0.119,0.212L9.18,11.36h-3.98c-0.251,0-0.457,0.205-0.457,0.456c0,0.253,0.205,0.456,0.457,0.456h4.336c0.023,0,0.899,0.02,1.498-0.127c0.312-0.077,0.55-0.137,0.55-0.137c0.08-0.018,0.155-0.059,0.212-0.118l3.463-3.443V15.929z M11.241,11.156l-1.078,0.267l0.267-1.076l6.097-6.091l0.808,0.808L11.241,11.156z" />
        </svg><br><span>Theses</span></label></li>
  </ul>

  <div class="slider">
    <div class="indicator"></div>
  </div>
  <div class="content">
    <section>
      <h2>Research interests</h2>
      <div class="check-list">
        <li>Children’s Exposure to Inter-parental Violence</li>
        <li>Childhood Resilience</li>
        <li>Child Development</li>
        <li>Violence and Victimization</li>
        <li>Family Violence</li>
        <li>Child Maltreatment</li>
        <li>Intervention Development</li>
        <li>Violence Prevention</li>
        </div>
    </section>
    <section>
      <h2>Research skills and competencies</h2>
      <div class="parent_two_grid">
      <div class="check-list child_two_grid">
        <li>Intervention Mapping</li>
        <li>Delphi Study</li>
        <li>Cognitive interviewing</li>
        <li>Photo Voice</li>
        <li>Mixed methods research</li>
        <li>Systematic Reviewing</li>
    </div>
      <div class="check-list child_two_grid">
        <li>Sociological analyses</li>
        <li>In-depth interviews</li>
        <li>Focus Group Discussion</li>
        <li>Participatory Action Research</li>
        <li>NVivo & SPSS Software</li>
        <li>Translation and Cultural adaptation of measurements</li>
      </div></div>
    </section>
    <section>
      <h2>Reviewer</h2>
      British Journal of Social Work (BJSW)
    </section>
    <section>
      <h2>Theses</h2>
      Currently a PhD candidate registered with Maastricht University, Department of Health Promotion, Care and Public Health Research Institute (CAPHRI) in Maastricht, the Netherlands
      <div class="check-list">
        <li>The Exploration of the Effects of Exposure to Inter- parental Violence on Child Development: Developing a Theory and Evidence- based Intervention</li>
        <li>Minanago, C. (2010). Marital Dysfunction: Consequences on Children and Adolescents’ Wellbeing. Master’s Thesis, University of Dar es Salaam, Tanzania</li>
        <li>Minanago, C. (2007). Psychosocial Effects of Marital Conflicts on Children and Adolescents’ Wellbeing. Bachelor’s Thesis, University of Dar es Salaam, Tanzania</li>
      </div>
    </section>
  </div>
</div>
          
        </div>

      </div>
    </section><!-- End RESEARCH AND SCHOLARLY WORK Section -->

    <!-- ======= CONSULTANCY Section ======= -->
    <section id="Consultancy" class="clients">
      <div class="container">

        <div class="section-title">
          <h2>Consultancy</h2>
          <!-- <p>Research assistant for the Urban and peri urban agriculture as green infrastructure: implications on wellbeing and sustainability in the Global South. Research regions in Tanzania are Morogoro and Dar es Salaam</p> -->
        </div>

        <div class="row no-gutters">
          <p>Co-Research for the Urban and peri urban agriculture as green infrastructure: implications on wellbeing and sustainability in the Global South. Research regions in Tanzania are Morogoro and Dar es Salaam, from January 2020 to date</p>
        </div>

      </div>
    </section><!-- End CONSULTANCY Section -->


    <!-- ======= PUBLICATION Section ======= -->
    <section id="Publications" class="clients">
      <div class="container">

        <div class="section-title">
          <h2>Publications</h2>
          <!-- <p>Here goes an introduction to this section</p> -->
        </div>

        <div class="row no-gutters">
          <div class="tabs">

  <input type="radio" id="tab111" name="tab-control" checked>
  <input type="radio" id="tab222" name="tab-control">
  <input type="radio" id="tab333" name="tab-control">
  <ul>
    <li title="Books"><label for="tab111" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book-fill" viewBox="0 0 16 16">
  <path d="M8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
</svg><br><span>Books</span></label></li>
    <li title="Journal articles"><label for="tab222" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journals" viewBox="0 0 16 16">
  <path d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2 2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v9a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2z"/>
  <path d="M1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 2.5v.5H.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1H2v-.5a.5.5 0 0 0-1 0z"/>
</svg><br><span>Journal articles </span></label></li>
    <li title="Manuscripts in progress"><label for="tab333" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book-half" viewBox="0 0 16 16">
  <path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
</svg><br><span>Manuscripts in Progress</span></label></li>
  </ul>

  <div class="slider">
    <div class="indicator"></div>
  </div>
  <div class="content">
    <section>
      <h2>Books</h2>
      <div class="check-list">
        <li>Minanago, C. A. (2017). A Practical Experience to Academic Success, DAUD Publishing company, Dar es Salaam, Tanzania</li>
        <li>Minanago, C. A. (2017). Successful Field Practicum for Arts, Humanities and Social Sciences, DAUD Publishing Company, Dar es Salaam, Tanzania</li>
        <li>Sociology Teaching, <i>writing in Progress</i></li>
        </div>
    </section>
    <section>
      <h2>Journal articles</h2>
      <div class="check-list">
        <li>Kitula, M., Mntambo, B., & Minanago, C. (2012). Special and Vulnerable Groups on Access, Success and Equity on Open and Distance Education in Tanzania: The Case of the Open University of Tanzania, Huria Journal, Vol.13 (2), 432-445</li>
        
      </div>
    </section>
    <section>
      <h2>Manuscripts in Progress</h2>
      <div class="check-list">
        <li>Minanago, C. A., Crutzen, R., Van Den Borne, H and Kaaya, S. F: Translation And Cross-Cultural Adaptation Of The Children’s Exposure To Domestic Violence (CEDV) Scale To Swahili-Submitted for journal publication</li>
        <li>Minanago, C. A., Crutzen, R., Van Den Borne, H and Kaaya, S. F: Examining the association between Children’s Exposure to Inter-Parental Violence and Academic Perfromance and Socioemotional Adjustment In Iringa, Tanzania. Submitted for journal publication</li>
        <li>Minanago, C. A., Crutzen, R., Van Den Borne, H and Kaaya, S. F: Risk And Protective Factors for Child Harm in the Context of Inter-Parental Violence-Submitted for journal publication</li>
        <li>Minanago, C. A., Crutzen, R., Van Den Borne, H, Kaaya, S. F and Straton, F.Ruhinda: Children’s Experiences of Exposure to Inter-Parental Violence and Involvement In Violence- Submitted for journal publication</li>
        <li>Minanago, C. A., Crutzen, R., Van Den Borne, H, Kaaya, S. F and Straton, F.Ruhinda: Developing a Theory and Evidence Based Intervention to Remedy Emotional Difficulties to Children Exposed to Inter-parental Violence: An Intervention Mapping Approach- Work in Progres</li>
      </div>
    </section>
  </div>
</div>
          
        </div>

      </div>
    </section><!-- End PUBLICATION Section -->

    <!-- ======= INNOVATION Section ======= -->
    <section id="Innovation" class="clients">
      <div class="container">

        <div class="section-title">
          <h2>Innovation</h2>
          <!-- <p>Here goes an introduction to this section</p> -->
        </div>

        <div class="row no-gutters">
         <div class="check-list">
           <li>Initiated and content designed Kigoma Regional Centre’s Information System (KRIS) (2021)</li>
           <li>Content designing of digital marketing materials for the Open University of Tanzania, Kigoma Regional Centre (2021)</li>
         </div>
        </div>

      </div>

   <!-- ======= END INNOVATION Section ======= -->

     <!-- ======= MEMBERSHIP Section ======= -->
    <section id="Membership" class="clients">
      <div class="container">

        <div class="section-title">
          <h2>Membership</h2>
          <!-- <p>Here goes an introduction to this section</p> -->
        </div>

        <div class="row no-gutters">
         <div class="check-list">
           <li>Tanzania Violence Research Network (TVRN)</li>
           <li>Tanzania Psychological Association (TAPA)</li>
           <li>Tanzania Association for Social Workers (TASWO)</li>
           <li>Tanzanian Association of Sociologists (TAS)</li>
         </div>
        </div>

      </div>

   <!-- ======= END INNOVATION Section ======= -->

   <!-- ======= Training, Workshops and Conferences Section ======= -->
    <section id="training_workshops_n_conferences" class="clients">
      <div class="container">

        <div class="section-title">
          <h2>Training, Workshops and Conferences</h2>
          <!-- <p>Here goes an introduction to this section</p> -->
        </div>

        <div class="row no-gutters">
          <div class="tabs">

  <input type="radio" id="tab11111" name="tab-control" checked>
  <ul>
    <li title="Training, Workshops and Conferences"><label for="tab11111" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-workspace" viewBox="0 0 16 16">
  <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H4Zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
  <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2H2Z"/>
</svg><br><span>Training, Workshops and Conferences</span></label></li>
  </ul>


  <div class="content">
    <section class="training">
      <h2>Training, Workshops and Conferences</h2>
      <p>Digital Learning African Summit IBE Forum South Africa-Virtual- February 2022</p>
      <p>Workshop on grant proposals, policy briefs and peer reviewed publications Muhimbili University of Health and Allied Sciences (MUHAS), Dar es Salaam, Tanzania- July 2021</p>
      <p>Attendee at a workshop on grant proposals, policy briefs and peer reviewed publications at Muhimbili University of Health and Allied Sciences (MUHAS), from 27-29th July 2021</p>
      <p>Presentation: Risk and Protective Factors for Child Harm in the Context of Exposures to Inter-parental Violence at the conference on Utility of Research and Innovation in Ending Violence against Women and Children in Tanzania, at MUHAS, in July 2021</p>
      <p>Trainee at the British Academy GBV writing workshop organized by MUHAS in collaboration with the National Institute for Medical Research (NIMR -Mwanza) and London School of Hygiene and Tropical Medicine (LSHTM) from May to July 2021</p>
      <p>US funded Academy for Women Entrepreneurs (AWE) training in Iringa from September to December 2020</p>
      <p>UNESCO Cultivating Women Empowerment Workshop in April 8th, 2016 at British Council in Dar es Salaam.</p>
      <p>Child protection Workshop sponsored by the American International Health Alliance- AIHA and organized by the Institute of Social Work in November, 2015 at the Open University of Tanzania Headquarters in Dar es Salaam.</p>
      <p>Professional Symposium on Leveraging HIV/AIDS interventions to people with Albinism, Deafness and Blindness as a social justice and Human rights Approach organized by Tanzania Association of Social Workers (TASWO) in collaboration with John Snow Incorporation (JSI) under the initiatives of the USAID-supported Community Health and Social Welfare System Strengthening (CHSS) Program in Tanzania, in July, 2015, in Iringa.</p>
      <p>Ubiquitous Learning Conference in May 2014, at Shanghai Open University, in Shanghai, China.</p>
      <p>The 2014 Shanghai Open University International Staff Exchange Fellowship Program in May 26th to June 6th, in Shanghai, China</p>
      <p>The Fifth PCAF Pan-African Psycho trauma Conference (PCAF) in June 2012, at Mwalimu Nyerere Memorial Academy, Dar es Salaam.</p>
      <p>American International Health Alliance- AIHA, Addis Ababa University & Southern Adventist University, in Bagamoyo, July & December 2011.</p>
      <!-- <p><small>Source: <cite><a href="https://www.google.com">Here goes your sources</a></cite></small></p> -->
    </section>
  </div>
</div>  
        </div>

      </div>
    </section><!-- End Training, Workshops and Conferences Section -->

  
     <!-- ======= Cta Section ======= 
    <section id="cta" class="cta">
      <div class="container">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Open Science Framework (OSF)</h3>
            <p> Check out all of my public OSF projects. You can affiliate your projects for a collaboration.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" target="_blank" rel="noopener noreferrer" href="https://osf.io/2jzav/">My OSF</a>
          </div>
        </div>

      </div>
    </section>End Cta Section -->

    
    <!-- ======= Portfolio Section ======= 
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>  
    
    End Portfolio Section --> 

    <!-- ======= Team Section ======= 
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Team</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-1.jpg" alt="">
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <p>
                Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-2.jpg" alt="">
              <h4>Sarah Jhinson</h4>
              <span>Product Manager</span>
              <p>
                Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-3.jpg" alt="">
              <h4>William Anderson</h4>
              <span>CTO</span>
              <p>
                Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
    
    End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="phone">
                <a href="https://wa.link/ycj0cz" target="_blank" rel="noopener noreferrer"><i class="bi bi-whatsapp"></i></a>
                <h4>Whatsapp:</h4>
                <p>+255 715 874 005</p>
              </div>

              <div class="email">
                <a href="mailto:cminanago@gmail.com"><i class="bi bi-envelope"></i></a>
                <h4>Personal Email:</h4>
                <p>cminanago@gmail.com</p>
                
              </div>
              <div class="email">
                <a href="mailto:chitegetse.minanago@out.ac.tz"><i class="bi bi-envelope-paper"></i></a>
                <h4>Official Email:</h4>
                <p>chitegetse.minanago@out.ac.tz</p>
                
              </div>
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Tanzania, Kigoma</p>
              </div>

              <!-- <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+255 715 874 005</p>
              </div> -->

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.0920329558535!2d29.68286751418165!3d-4.924264551798729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19bf1dab42ca545b%3A0xb56e864d7c3cc6be!2sOPEN%20UNIVERSITY%20OF%20TANZANIA-KIGOMA!5e0!3m2!1sen!2sbg!4v1671356401683!5m2!1sen!2sbg" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/send.php" method="post" role="form" class="info">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group mt-3">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <!-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->
              <div class="text-center" style="padding: 20px"><button type="submit" name="send" class="btn btn-success">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <!-- <h3>Personal Bio</h3> -->
      <h4>Developer Accounts  </h4>
      <div class="social-links">
        <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
        <!-- <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a> -->
        <a href="https://wa.link/yjfkq7" target="_blank" rel="noopener noreferrer" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
        <a href="https://instagram.com/zukazudo?igshid=YmMyMTA2M2Y=" target="_blank" rel="noopener noreferrer" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="mailto: mhinalukurunge@gmail.com" target="_blank" rel="noopener noreferrer" class="google-plus"><i class="bx bxl-gmail"></i></a>
        <!-- <a href="https://www.linkedin.com/in/mhina-lukurunge-712171198" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Personal Bio</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/green-free-one-page-bootstrap-template/ -->
        Developed by <a href="Tel: +255656336356" target="_blank" rel="noopener noreferrer">zukazudo</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  


  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>


  <!-- Template Secondary JS File -->
  <script src="assets/js/secondary.js"></script>


</body>


</html>