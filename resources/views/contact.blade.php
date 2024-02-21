@extends('layouts.layout')

@section('content')
<div class="page-heading header-text">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Contact Us</h1>
        <span>Feel free to reach out to us anytime!</span>
      </div>
    </div>
  </div>
</div>

<div class="contact-information">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="contact-item">
          <i class="fa fa-phone"></i>
          <h4>Phone</h4>
          <p>If you have any questions, don't hesitate to call us.</p>
          <a href="#">+1 333 4040 5566</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="contact-item">
          <i class="fa fa-envelope"></i>
          <h4>Email</h4>
          <p>Send us an email and we'll get back to you promptly.</p>
          <a href="mailto:contact@company.com">contact@company.com</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="contact-item">
          <i class="fa fa-map-marker"></i>
          <h4>Location</h4>
          <p>Visit us at our office .</p>
          <a href="#">21 Centre Philips
             <br>Casablanca CP 20250</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="callback-form contact-us">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Send us a <em>message</em></h2>
          <span>Get in touch with us</span>
        </div>
      </div>
      <div class="col-md-12">
        <div class="contact-form">
          <form id="contact" action="" method="get">
            <div class="row">
              <div class="col-lg-4 col-md-12 col-sm-12">
                <fieldset>
                  <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                </fieldset>
              </div>
              <div class="col-lg-4 col-md-12 col-sm-12">
                <fieldset>
                  <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                </fieldset>
              </div>
              <div class="col-lg-4 col-md-12 col-sm-12">
                <fieldset>
                  <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="map">
  <!-- You can embed your Google Maps location here -->
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.4244539060282!2d-7.603894724944682!3d33.5942898417737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7cd65706e85d7%3A0x327a13462f2a3fc9!2sCentre%20Philips!5e0!3m2!1sen!2sma!4v1704654173712!5m2!1sen!2sma" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
@endsection
