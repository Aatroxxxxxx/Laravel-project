<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Event Manager</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/vendor/bootstrap1/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
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
                <a class="nav-link" href="/about">About Us</a>
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
                    <h1>{{ $client->fname }} {{ $client->lname }}'s Profile</h1>
                    <p style="color:beige">Email: {{ $client->email }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h2>Events Hosted by {{ $client->fname }} {{ $client->lname }}</h2>

        @if ($client && $client->hostedEvents && $client->hostedEvents->count() > 0)
        <ul>
          @foreach($client->hostedEvents as $event)
          <article id='tabs-1'>
              <img src="{{ asset('assets/img/' . $event->image . '.jpg') }}" alt="">
                <h4><a href="/event-details">{{$event->title}}</a></h4>
                <div style="margin-bottom:10px;">
                  <span>{{$event->host->lname}} &nbsp;|&nbsp; {{$event->start_datetime}} &nbsp;|&nbsp;</span>
                </div>
                <p>{{$event->location}}</p>
                <br>
                <div>
                <a href="{{ route('events.show', ['id' => $event->id]) }}" class="filled-button">Continue Reading</a>
                </div>
              </article>
              <br>
            @endforeach
        </ul>
        @else
        <p>{{ $user->fname }} {{ $user->lname }} has not hosted any events yet.</p>
        @endif
    </div>

    <!-- Footer Starts Here -->
    @extends('layouts.footer')

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Additional Scripts -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/owl.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/accordions.js') }}"></script>

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