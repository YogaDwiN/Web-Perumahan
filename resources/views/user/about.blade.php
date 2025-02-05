      <!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="utf-8">
  <title>Borneo Khatulistiwa</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{asset('user/images/favicon.png')}}" rel="icon">
  <link href="{{asset('user/images/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('user/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('user/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('user/lib/animate/animate.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('user/css/style.css')}}" rel="stylesheet">

  @yield('header')
      </head>
      <body>

    @php
        $url = request()->segment(1);
  @endphp

<!--========================== Header ============================-->
<header id="header">
    <div class="container">
        
      <div id="logo" class="pull-left">
        <a href="#hero">
          <img src="{{asset('user/images/logo1.png')}}" style="margin-right:5px"/></img>
          <h2 class="d-inline text-dark">RESIDANCE BORNEO KHATULISTIWA</h2>
        </a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="{{$url=='home'?'menu-active':''}}"><a href="{{url('home')}}"><span class="text-dark">Home</span></a></li>
          <li class="{{$url=='about'?'menu-active':''}}"><a href="{{url('about')}}"><span class="text-dark">about</span></a></li>
          <li class="{{$url=='blog'?'menu-active':''}}"><a href="{{url('blog')}}"><span class="text-dark">Blog</span></a></li>
          <li class="{{$url=='destination'?'menu-active':''}}"><a href="{{url('destination')}}"><span class="text-dark">Properties</span></a></li>
          <li class="{{$url=='contact'?'menu-active':''}}"><a href="{{url('contact')}}"><span class="text-dark">Contact</span> </a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

        
        <!--========================== About Us Section ============================-->
      <section id="about">
        <div class="container">
          <div class="row about-container">
  
            <div class="col-lg-7 content order-lg-1 order-2">
              <h2 class="title">Tentang Kami</h2>
              <p> {!!$about[0]->caption!!}</p>
            </div>
  
            <div class="col-lg-5 background order-lg-2 order-1 wow fadeInRight" 
                style="background: url('{{asset('about_image/'.$about[0]->image)}}') center top no-repeat; background-size: cover;"></div>
          </div>
  
        </div>
      </section>
      </body>
      </html>