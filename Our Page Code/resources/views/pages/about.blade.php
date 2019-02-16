@extends('include.custom')
@section('content')
    
  <!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Studing Abroud Page</h2><br>
      <h4>Traveling Abroad is an online website offering service to anyone who wants to
        study abroad, our website shows the users the papers they need before traveling,
        the best colleges and the scholarships available, the best hostels they can stay at,
        the best restaurants in the country, the jobs available and the tips they need to
        know when traveling to any country.
        In our website students can make an account and it help them to communicate
        with others student.</h4><br>
      <br>
    </div>
    <div class="col-sm-4">
        <img src="/storage/images/study.jpg" alt="world">
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Benefits Of Using Our Website</h2><br>
      <h4>The users would be able to know about the countries they can travel to,
        the papers they need, the scholarships available, the students hostels,
        the jobs available for students and the tips they need to know when
        traveling to any country.
        </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-search logo-small"></span>
      <h4>Search</h4>
      <p>The visitor searches for what he or she wants to know..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-user logo-small"></span>
      <h4>Create an account</h4>
      <p>For the visitor to become a member of the site..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-book logo-small"></span>
      <h4>Scholarship</h4>
      <p>Displays the grants available in the selected country...</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>Outings</h4>
      <p>Displays the outings that we recommend..</p>
    </div>
    
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-pencil logo-small"></span>
      <h4 style="color:#303030;">Comment</h4>
      <p>Write your comment and click Submit..</p>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->

<!-- Container (Pricing Section) -->

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Cairo, Egypt</p>
      <p><span class="glyphicon glyphicon-phone"></span> +02 01111111111</p>
      <p><span class="glyphicon glyphicon-envelope"></span> styding_abroad@yahoo.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Image of location/map -->

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  </footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();
      // Store hash
      var hash = this.hash;
      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;
      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>




@endsection