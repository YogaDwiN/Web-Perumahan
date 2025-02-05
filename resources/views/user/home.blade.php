@extends('layouts.user')

@section('header')
    <style>
        .full-img {
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 180px;
        }
        #hero{
            background: url('{{asset('user/images/hero-bg.jpg')}}') top center;
        }
        .image-center{
          display: block;
          margin-left: 6.5px;
          margin-right: 6.5px;
          width: 100%;
        } 
    </style>    
@endsection

@section('hero')
    <h1>BERINOVASI DALAM SETIAP PEMBANGUNAN</h1>
    <h2>Kami Menyediakan Layanan Properti Terbaik Untuk Membantu Anda Menemukan Rumah Impian</h2>
    <div class="flex flex-row justify-center">
      <a href="/about" class="btn-get-started">Get Started</a>
      <a href="https://wa.me/6285616734443" target="_blank" class="btn-get-started">Hubungi Kami</a>
    </div>
@endsection


@section('content')
  
      <!--========================== Services Section ============================-->
      <section id="services">
        <div class="container wow fadeIn">
          <div class="section-header">
            <h3 class="section-title">Mengapa Memilih Kami?</h3>
            <p class="section-description">Nikmati hunian nyaman dan berkualitas bersama kami</p>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
              <div class="box">
                <div class="icon"><i class="fa fa-shield"></i></div>
                <h4 class="title">Keamanan Terjamin</h4>
                <p class="description">Lingkungan dengan sistem keamanan 24/7 untuk melindungi Anda dan keluarga</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
              <div class="box">
                <div class="icon"><i class="fa fa-money"></i></div>
                <h4 class="title">Harga Kompetitif</h4>
                <p class="description">Hunian impian dengan harga yang sesuai tanpa mengorbankan kualitas</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
              <div class="box">
                <div class="icon"><i class="fa fa-thumbs-up"></i></div>
                <h4 class="title">Kenyamanan Penghuni</h4>
                <p class="description">Desain modern dan fasilitas lengkap untuk menunjang gaya hidup Anda</p>
              </div>
            </div>
          </div>
  
        </div>
      </section><!-- #services -->
  
      <!--========================== Call To Action Section ============================-->
      <section id="call-to-action">
        <div class="container wow fadeIn">
          <div class="row">
            <div class="col-lg-9 text-center text-lg-left">
              <h3 class="cta-title">Hubungi Kami Jika Anda Tertarik</h3>
              <p class="cta-text">Mari kita menikmati suasana yang baru dengan nyaman</p>
            </div>
            <div class="col-lg-3 cta-btn-container text-center">
              <a class="cta-btn align-middle" href="{{url('contact')}}">Contact</a>
            </div>
          </div>
  
        </div>
      </section>
  
      <!--========================== category Section ============================-->
      <section id="category">
        <div class="container wow fadeInUp">
          <div class="section-header">
            <h3 class="section-title">Blog</h3>
            <p class="section-description">Selamat datang di blog kami, tempat Anda menemukan berbagai informasi menarik seputar hunian dan gaya hidup modern. Kami menghadirkan artikel yang informatif dan inspiratif untuk membantu Anda memahami lebih banyak tentang dunia properti dan menciptakan rumah impian.</p>
          </div>
          <div class="row">
  
          <div class="row" id="category-wrapper">
            @foreach ($categories as $category)
                <div class="col-md-4 col-sm-12 category-item filter-app" >
                      <a href="">
                        <img src="{{asset('category_image/'.$category->image)}}" class="image-center">
                        <div class="details">
                          <h4>{{$category->name}}</h4>
                          <span>{{$category->description}}</span>
                        </div>
                      </a>
                </div>
            @endforeach  
          </div>
  
        </div>
      </section>
  
      <!--========================== Gallery Section ============================-->
      <section id="contact" style="padding-bottom:85px">
        <div class="container wow fadeInUp">
          <div class="section-header">
            <h3 class="section-title">Galeri</h3>
            <p class="section-description">Pusat Kota Pontianak
            </p>
          </div>
        </div>
  
        <div class="container wow fadeInUp">
          <div class="row justify-content-center">
  
            <div class="col-lg-12 col-md-4">
              <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 full-img" style="background-image: url({{asset('user/images/gallery/1.png')}})">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 full-img" style="background-image: url({{asset('user/images/gallery/wisata2.png')}})">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 full-img" style="background-image: url({{asset('user/images/gallery/wisata3.png')}})">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 full-img" style="background-image: url({{asset('user/images/gallery/wisata4.png')}})">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 full-img" style="background-image: url({{asset('user/images/gallery/wisata5.png')}})">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 full-img" style="background-image: url({{asset('user/images/gallery/wisata6.png')}})">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 full-img" style="background-image: url({{asset('user/images/gallery/wisata7.png')}})">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 full-img" style="background-image: url({{asset('user/images/gallery/wisata8.png')}})">
                </div>
              </div>
            </div>
  
          </div>
  
        </div>
      </section>
@endsection