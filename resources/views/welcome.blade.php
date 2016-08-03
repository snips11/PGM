@extends('layouts.app')

@section('content')
    <div class="row" style="height: 100vh; width:100%; overflow:hidden; margin: 0px;" id="first">
        <!--<div class="col-md-4" id="left" style=" height: 100%;">
            <img src="/images/ParsonsGreenDev.jpg" width="auto" height="100%">
        </div>-->
        <div class="col-md-4" id="center" style=" height: 100%; width: 100%; margin:0px;">
            <img src="/images/WebDesign.jpg" width="100%" height="100%" style="object-fit:cover;">
                <div id="logo">
                    <img src="/images/PGM_logo.png" width="18%" height="auto">
                        <div class="chev_box" id="down">
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </div> 
                
                </div>
        </div>
        <!--<div class="col-md-4" id="right" style=" height: 100%;">
            <img src="/images/ParsonsGreenPrint.jpg" width="auto" height="100%">
        </div>-->
    </div>
    <nav class="navbar navbar-default navbar-static-top" id="nav_home">
        <div class="container">
           
           <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                     <img src="/images/PGM_logo.png" width="120px" height="auto" id="logo_head">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Web</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/web') }}">Web Development</a></li>
                            <li><a href="{{ url('/app-development') }}">App Development</a></li>
                            <li><a href="{{ url('/digital-marketing') }}">Digital Marketing</a></li>
                            <li><a href="{{ url('/hosting') }}">Hosting</a></li>
                        </ul>
       	            </li>
                    <li><a href="{{ url('/management') }}">Project Management</a></li>
                    <li><a href="{{ url('/print') }}">Print &amp; Design</a></li>
                    <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <!--<ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links 
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>-->
            </div>
        </div>
    </nav>
    <div class="hero">
    <div class="container" id="hero_con">
        <div class="hero_text">
            
            <h1>Parsons Green Media</h1></br>
            <h2>Experts in code, digital management, print and project management</h2>
            </div>
        </div>
    </div>
    <div class="row" id="text_row">
        <div class="col-md-6 col-md-offset-3 ">
            <h2 id="text_row_text">We are full stack media<span style="color:#2e3c54">.</span></h2></br>
            <h3 style="color: #2e3c54;" id="text_row_text2">We can develop your website, manage your print, create a custom application or design your brochure...</h3></br>
            <!--<h4>Business and marketing agencies love workign with us.</h4>-->

        </div>
    </div>
    
        <div class="row" id="image-options">
            <div class="col-md-3 " id="image-panel1">
                <div id="image_overlay">
                    <h3>App Development</h3>
                </div>
            </div>
            <div class="col-md-3 " id="image-panel2">
                <div id="image_overlay">
                    <h3>Project Management</h3>
                </div>
            </div>
            <div class="col-md-3 " id="image-panel3">
                <div id="image_overlay">
                    <h3>Web Development</h3>
                </div>
            </div>
            <a href="/print">
            <div class="col-md-3 " id="image-panel4">
                <div id="image_overlay">
                    <h3>Print &amp; Design</h3>
                </div>
            </div>
            </a>
        </div>
    
        <div class="background color" style="background-color: #38a3f4;">
            <div class="container">
                <div class="row" id="our_work">
                    <div class="col-md-12 ">
                        <h3 id="our_work_head">Our Work...</h4>
                    </div>
                </div>
                 
                <div class="row" id="our_work_body">  
                @foreach ($clients as $client)
                <a href="{{ route ('client.show', $client->id)}}">   
                    <div class="col-md-4 ">
                        <div class="panel panel-default" id="client_whole_panel">
                            <div class="panel-heading" id="client_heading"><h4>{{$client->name}}<h4></div>
                            <div class="panel-body" id="client_panel">
                                <img src= "/images/9jpg.jpg" id="client_image">
                            </div></a>
                            <div class="panel-footer" id="client_footer"><i class="fa fa-tags" aria-hidden="true"></i> {{$client->tag1}} {{$client->tag2}} {{$client->tag3}}</div>
                            </div>
                        </div>
                        @endforeach  
                     </div>
                </div>
            </div>    
        </div>
        <div class="container">
                <div class="row" id="our_clients">
                    <div class="col-md-8 ">
                        <h5 id="our_clients_head">We work directly with businesses and agencies to create and implement companies futures</h5></br>
                        <a href="/contact">
                            <button type="button" class="btn btn-default">GET IN TOUCH</button>
                        </a>
                    </div>
            
       
                    <div class="col-md-4 ">
                        <img src="/images/iPhone-6.png" height="250px" width="auto" id="iphone">
                    </div>
                    
                </div>
                </div>
            </div>
            <div class="fixed_bottom">
                <h4>Get in touch...</h4>
                <a href="tel:02036933769">
                            <button type="button" class="btn btn-default">CALL NOW</button>
                        </a>
            </div> 

                    

@endsection
