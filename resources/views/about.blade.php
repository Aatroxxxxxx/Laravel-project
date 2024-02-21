<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Project</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/vendor/bootstrap1/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link href="{{ asset('assets/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style2.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.css') }}" rel="stylesheet">
  </head>

  <body>

    
    <!-- Header -->
    

    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="/clientdashboard"><h2>Event <em> Website</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="/clientdashboard">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/events">Event</a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" href="/about">About Us</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/team">Authors</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contact">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>About Us</h1>
            
          </div>
        </div>
      </div>
    </div>

    <div class="more-info about-info">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="more-info-content">
              <div class="row">
                <div class="col-md-6 align-self-center">
                  <div class="right-content">
                    <span>Meet our tight-knit group of full-stack developers</span>
                    <h2>Get to know about <em>our Team</em></h2>
                    <p>a tech-savvy squad with a flair for turning ideas into digital masterpieces. We excel in both front-end finesse and back-end prowess, crafting seamless and innovative solutions.
                    <br><br>Together, we bring a blend of creativity and technical acumen to every project, ensuring a holistic approach to web development. With a passion for staying ahead in the tech game, 
                    our team is ready to transform your concepts into cutting-edge digital experiences.</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="left-image">
                    <img src="{{ asset ('assets/img/about-1-570x350.jpg') }}">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="fun-facts">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="left-content">
            Our dynamic <em>Group </em>of full-stack developers represents a collective powerhouse of technical 
            expertise and creativity. With a passion for crafting seamless and innovative solutions, 
            we thrive on the challenges of both front-end and back-end development. From building 
            intuitive user interfaces that captivate audiences to architecting robust server-side 
            applications, our team excels in the entire web development stack. Collaborative and driven, 
            we leverage our diverse skill set to turn ideas into functional and aesthetically 
            pleasing digital experiences. With a commitment to staying at the forefront of technology, 
            our group is poised to tackle any project, turning visions into reality through the art and 
            science of full-stack development.
            </div>
          </div>
          <div class="col-md-6 align-self-center">
            <div class="row">
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">2 years</div>
                  <div class="count-title">Working together</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">Different </div>
                  <div class="count-title">Subjects</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer Starts Here -->
    @extends('layouts.footer')

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset ('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset ('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Additional Scripts -->
    <script src="{{ asset ('assets/js/custom.js') }}"></script>
    <script src="{{ asset ('assets/js/owl.js') }}"></script>
    <script src="{{ asset ('assets/js/slick.js') }}"></script>
    <script src="{{ asset ('assets/js/accordions.js') }}"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>