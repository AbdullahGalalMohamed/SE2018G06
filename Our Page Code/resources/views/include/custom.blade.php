<!DOCTYPE html>
<html lang="en">
<head>
  <title>{{ config('app.name', 'Study') }}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="{{ asset('css/about.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<style>
.contact-us{
	min-height:300px;
	background-color:gray;
	
}
.contact-us .fields{
	min-height:300px;
	color:#DDD;
	padding:40px;
	
}
i{
	padding:15px;
}
</style>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
        </button>
        <div class="navbar-header">
            <span class="glyphicon glyphicon-plane btn-lg navbar-brand" aria-hidden="true"></span>
            <a class=" navbar-brand">Study Abroad</a>
        </div>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-left">
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/country">countries</a></li>
            
        </ul>
        
        <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right orange" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest

            </ul>
            
        </div>
    
        
    </div>
    </nav>

    <div class="container-fluid">
            @yield('content')
    </div>
    <section class="contact-us text-center">
        <div class="fields">
        <div class="container">
        <i class="fa fa-headphones fa-5x"></i>
        <i class="fab fa-facebook-f fa-5x"></i>
        <i class="	fab fa-github fa-5x"></i>
        <h1>tell us what you feel</h1>
        <p class="lead">feel free to contact us</p>
        <div>
                {{ Form::open(['mothod'=>'POST']) }}
                
                <div class="form-group">
                        
                        {{Form::textarea('body','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Share your experiance'])}}
                    </div>
                  
              
                   {{ Form::submit('Send',['class'=>'btn btn-primary'])}} 
            {{ Form::close() }}
            
            

        </div>
        
    </section>



</body>
</html>