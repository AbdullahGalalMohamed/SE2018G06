@extends('include.custom')
@section('content')

<?php
//$mysqli = new mysqli("localhost", "root", "", "study");

    $link=mysqli_connect("localhost","root","","study");
    $id=$_GET['id'];
    $query1="SELECT * FROM country WHERE id=$id";
    $country_name = mysqli_query($link,$query1);
    $row= mysqli_fetch_array($country_name);


    $query2="SELECT * FROM university WHERE country_id = $id ";
    $university = mysqli_query($link,$query2);
    while($result = mysqli_fetch_assoc( $university )){
      
      $uni[]=$result['university_name'];
      $overvi[]=$result['Overview'];
      
    }

    $query3="SELECT * FROM places WHERE country_id = $id ";
    $place = mysqli_query($link,$query3);
    while($result1 = mysqli_fetch_assoc( $place )){
      $emad=0;
      $place_n[]=$result1['place_name'];
      $place_inf[]=$result1['info'];
      $place_img[]=$result1['place_img'];
    }
   
    //echo $place_inf[0];
    
 
   //print_r($overvi[3]);

    /*for($i=0;$i<count($overvi);$i++)
    echo $overvi[$i];*/

    /*foreach($uni as $r){
      echo $r->university_name ;
    }*/
    
?>


<div class="jumbotron text-center">
  
        <h1>{{$row['name']}}</h1>  
      </div>
<!-- Container (About Section) -->
<div id="about" >
  <div class="row">
    <div class="col-sm-8">
      <h2>About country</h2><br>
    <h4>{{$row['info']}}</h4><br>
      <a href="/country" class="btn btn-success btn-lg " style="background: #f4511e;" >Go back</a>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
  </div>
</div>

<div id="services" class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-education logo slideanim"></span>
    </div>
    <div class="col-sm-8">
        <h2>UNIVERSITY 1: {{$uni[0]}} </h2><br>
        <p class="lead"> <?php echo $overvi[0]; ?> </p>
        </div>
  </div>
</div>

<div  class="container-fluid">
  <div class="row">
      <div class="col-sm-4">
          <span class="glyphicon glyphicon-education logo slideanim"></span>
        </div>
    <div class="col-sm-8">
      <h2>UNIVERSITY 2: {{$uni[1]}}</h2><br>
      <p class="lead"><?php echo $overvi[1]; ?></p>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-education logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>UNIVERSITY 3: {{$uni[2]}}</h2><br>
      <p class="lead"><?php echo $overvi[2]; ?></p>
        </div>
  </div>
</div>


<div id="good" class="container-fluid" >
    <h2 style="text-align : center; font-style:italic;">Our favourite destinations in {{$row['name']}}</h2>
    <div class="row row">
        <div class="col-lg-3 cont ">
          <div class="gallery">
            <a target="_blank" href="canada.jpg">
              <img src="/storage/images/{{$place_img[0]}}" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc text-center lead">
                <h4><?php echo $place_n[0]; ?></h4>
                <?php echo $place_inf[0]; ?>
            </div>
          </div>
          
        </div>
        <div class="col-lg-3 cont ">
          <div class="gallery">
            <a target="_blank" href="UK.jpg">
              <img src="/storage/images/{{$place_img[1]}}" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc text-center lead" >
                <h4><?php echo $place_n[1] ; ?></h4>
                <?php echo $place_inf[1]; ?>
            </div>
          </div>
          
        </div>
    
        <div class="col-lg-3 cont ">
          <div class="gallery">
            <a target="_blank" href="aus.jpg">
              <img src="/storage/images/{{$place_img[2]}}" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc text-center lead"> 
                <h4><?php echo $place_n[2] ; ?></h4>
                <?php echo $place_inf[2]; ?>
            </div>
          </div>
          
        </div>
    </div>
    
           
    </div>
    

<!-- Container (Services Section) -->
<div id="fast" class="container-fluid text-center" style="background :#f6f6f6">
  <h2>Fast Facts</h2>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo-small"></span>
      <h4>Languages Spoken</h4>
      <p>{{$row['lang']}}</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-usd logo-small"></span>
      <h4>Currency</h4>
      <p>{{$row['the_currency']}}</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-time logo-small"></span>
      <h4>Time Zone</h4>
      <p>{{$row['time']}}</p>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->

<!-- Container (Pricing Section) -->


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