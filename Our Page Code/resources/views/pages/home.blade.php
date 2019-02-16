@extends('include.custom')
@section('content')
    {{-- page photos scrollings --}}
    <div class="container-fluid background">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                    <img src="/storage/images/pic1.jpeg" alt="Los Angeles" class="imgcarousel" >
                        <div class="carousel-caption">
    
                            <div class="card">
                                <div class="card-body">
                                    Time to start your dream ! 
                                </div>
                              </div>
                        </div>
                    </div>
                    <div class="item">
                    <img src="/storage/images/pic2.jpeg" alt="Chicago" class="imgcarousel" >
                  
                        <div class="carousel-caption">
                            <p>pic2 </p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/storage/images/pic3.jpeg" alt="New york" class="imgcarousel"  >
                        <div class="carousel-caption">
                            <p>pic3 </p>
                        </div>
                    </div>
                </div>
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
            </div>
            </div>
                
        <!--start section about-->
        <section class="text-center">
        <div id="about" class="container">
        <h1><span id="sectionabout" class="text-center" ><strong class="hady"> Study Abroad</strong></span> </h1>
        <p class="lead">Adventure Must Start With Runing from Your Comfurt Zone </p>
        </div>
        </section>
        <!--end section about-->
        
        
        <!--start section features-->
        <section class="features text-center container-fluid">
            <div class="container text-center">
                <h1>Our features</h1>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="feat">
                            <span class="glyphicon glyphicon-ok"></span>
                            <h3>100% Resposive</h3>
                            <p>this is our paragragh</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="feat">
                            <span class="glyphicon glyphicon-ok"></span>
                            <h3>100% Resposive</h3>
                            <p>this is our paragragh</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="feat">
                            <span class="glyphicon glyphicon-ok"></span>
                            <h3>100% Resposive</h3>
                            <p>this is our paragragh</p>
                        </div>
                    </div>
                </div>
            </div>
        
        </section>

@endsection

