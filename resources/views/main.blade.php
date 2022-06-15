  <!DOCTYPE html>
  <html lang="zxx" class="no-js">
  <head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('assets/img/fav.png') }}">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Education</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
      <!--
      CSS
      ============================================= -->
      <link rel="stylesheet" href="{{ asset('assets/css/linearicons.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">              
      <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">     
      <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">      
      <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    </head>
    <body>  
      <header id="header" id="home">
        <div class="container main-menu">
          <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
              <a href="#"><img src="{{ asset('assets/img/logo.png') }}" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container">
              <ul class="nav-menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">Informasi</a></li>
                <li><a href="courses.html">Jadwal Kegiatan Pendaftaran</a></li>
                <li><a href="events.html">Struktur Organisasi</a></li>
                <li><a href="gallery.html">Gallery SDN 02 Cililin</a></li>
                <li class="menu-has-children"><a href="#">Login</a>
                  <ul>
                      <li><a href="{{ route('LOGINADMIN') }}">Admin</a></li>   
                      <li><a href="event-details.html">Panitia Penerimaan Peserta Didik</a></li>   
                      <li><a href="{{ route('LOGINPENDAFTAR') }}">Pendaftar</a></li>
                      <li><a href="elements.html">Guru</a></li>
                      <li><a href="elements.html">Wali Kelas</a></li>
                      <li><a href="elements.html">Siswa</a></li>
                  </ul>
                </li>                                                     
                <li><a href="contact.html">Contact</a></li>
              </ul>
            </nav><!-- #nav-menu-container -->            
          </div>
        </div>
      </header><!-- #header -->

      <!-- start banner Area -->
      <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>  
        <div class="container">
          <div class="row fullscreen d-flex align-items-center justify-content-between">
            <div class="banner-content col-lg-9 col-md-12">
              <h1 class="text-uppercase">
                SD NEGERI 02 CILILIN    
              </h1>
              <p class="pt-10 pb-10">
                Sekolah Dasar dengan berbasis Tenega Pembelajaran yang kompeten dan Berpengalaman, serta Menerpakan Akhlak yang mulia bagi Setiap Siswa Siswi.
              </p>
              <a href="{{ route('DAFTARSISWA') }}" class="primary-btn text-uppercase">Daftar</a>
            </div>                    
          </div>
        </div>          
      </section>
      <!-- End banner Area -->

      <!-- Start feature Area -->
      <section class="feature-area">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="single-feature">
                <div class="title">
                  <h4>Pembelajaran online </h4>
                </div>
                <div class="desc-wrap">
                  <p>
                    Pembelajaran Online antara Guru dangan siswa beserta Orang Tua yang sangat interaktif untuk menjalankan kelas online.
                  </p>
                  <a href="{{ route('DAFTARSISWA') }}">Join Now</a>                  
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="single-feature">
                <div class="title">
                  <h4>No.1 Sekolah Dasar Berbasisi Pembelajaran Online</h4>
                </div>
                <div class="desc-wrap">
                  <p>
                    Sekolah Dasar yang memiliki Pembelajaran Berbasis Web dengan Tujuan Memperlancarnya jalan jalur Pendidikan Siswa Siswi, Menumbuhkan Bakat Siswa dan Siswi.
                  </p>
                  <a href="{{ route('DAFTARSISWA') }}">Join Now</a>                  
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="single-feature">
                <div class="title">
                  <h4>Banyaknya Masuk SMP Negeri</h4>
                </div>
                <div class="desc-wrap">
                  <p>
                    Banyak alumni yang telah masuk SMP Negeri dengan sangat Memuaskan, karena Pembelajaran yang menumbukan Intelektual Bagi Siswa dan Siswi.
                  </p>
                  <a href="{{ route('DAFTARSISWA') }}">Join Now</a>                  
                </div>
              </div>
            </div>                        
          </div>
        </div>  
      </section>
      <!-- End feature Area -->
          
      <!-- Start popular-course Area -->
      <section class="popular-course-area section-gap">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
              <div class="title text-center">
                <h1 class="mb-10">WE ARE THE BEST STUDENT</h1>
                <p>KEGIATAN KITA DALAM PEMBELAJARAN</p>
              </div>
            </div>
          </div>            
          <div class="row">
            <div class="active-popular-carusel">
              <div class="single-popular-carusel">
                <div class="thumb-wrap relative">
                  <div class="thumb relative">
                    <div class="overlay overlay-bg"></div> 
                    <img class="img-fluid" src="{{ asset('assets/img/s5.jpeg') }}" alt="">
                  </div>               
                </div>
                <div class="details">
                  <a href="https://www.youtube.com/watch?v=sifNyPFHYtA">
                    <h4>
                      UJI BAKAT KESENIAN
                    </h4>
                  </a>
                  <p>
                    Kami disini terlatih untuk memperbudayakan kesenian Indonesia Mulai dari alat Musik maupun Beladiri khas Jawa Barat                  
                  </p>
                </div>
              </div>  
              <div class="single-popular-carusel">
                <div class="thumb-wrap relative">
                  <div class="thumb relative">
                    <div class="overlay overlay-bg"></div>  
                    <img class="img-fluid" src="{{ asset('assets/img/s8.jpeg') }}" alt="">
                  </div>                  
                </div>
                <div class="details">
                  <a href="https://www.youtube.com/watch?v=UBHpc-l672g">
                    <h4>
                      Pembelajaran Yang Menyenangkan
                    </h4>
                  </a>
                  <p>
                      Tak hanya dalam Bakat Luar, Tetapi Kami dapat Berkembang Intelektual demi Kemajuan Bangsa, dan Membanggakan Orang Tua.              
                  </p>
                </div>
              </div>  
              <div class="single-popular-carusel">
                <div class="thumb-wrap relative">
                  <div class="thumb relative">
                    <div class="overlay overlay-bg"></div>  
                    <img class="img-fluid" src="{{ asset('assets/img/s7.jpeg') }}" alt="">
                  </div>                
                </div>
                <div class="details">
                  <a href="https://www.youtube.com/watch?v=xfZyWQPAsNU">
                    <h4>
                      Menjadi Anggota Pramuka
                    </h4>
                  </a>
                  <p>
                    Kami disini Menjadi Anggota Pramuka yang sangat senang karena disini kami Melatih bakat, dari mulai bakat panca indra sampai bakat lainya.                   
                  </p>
                </div>
              </div>  
              <div class="single-popular-carusel">
                <div class="thumb-wrap relative">
                  <div class="thumb relative">
                    <div class="overlay overlay-bg"></div>  
                    <img class="img-fluid" src="{{ asset('assets/img/s6.jpeg') }}" alt="">
                  </div>                  
                </div>
                <div class="details">
                  <a href="https://www.youtube.com/watch?v=vy8rFAJqt1M">
                    <h4>
                      Menjadi Pelopor PMR 
                    </h4>
                  </a>
                  <p>
                    Dalam Segala Kegiatan Sehari hari pasti ada dengan namanya gejala alam dan kecelakaan maka dari itu kami di didik untuk Menjadi Pelopor Tim Kesehatan Serta Menjadi Palang Merah Remaja untuk Menumbukan Generasi Yang Berpendidikan dan sehat Jasmani.       
                  </p>
                </div>
              </div>
              <div class="single-popular-carusel">
                <div class="thumb-wrap relative">
                  <div class="thumb relative">
                    <div class="overlay overlay-bg"></div>  
                    <img class="img-fluid" src="{{ asset('assets/img/s3.jpeg') }}" alt="">
                  </div>                  
                </div>
                <div class="details">
                  <a href="https://www.youtube.com/watch?v=ok7lcaD2u80">
                    <h4>
                      Kegiatan Olahraga
                    </h4>
                  </a>
                  <p>
                     Wow kami sangat Suka dalam berolahraga di SD Negeri 02 Cililin ini karena pembelajaran yang begitu Interaktif serta Emnsehatkan Tubuh kami.               
                  </p>
                </div>
              </div>  
              <div class="single-popular-carusel">
                <div class="thumb-wrap relative">
                  <div class="thumb relative">
                    <div class="overlay overlay-bg"></div>  
                    <img class="img-fluid" src="{{ asset('assets/img/s7.jpeg') }}" alt="">
                  </div>                  
                </div>
                <div class="details">
                  <a href="https://www.youtube.com/watch?v=xfZyWQPAsNU">
                    <h4>
                      Kegiatan Perkemahan 
                    </h4>
                  </a>
                  <p>
                    Salah Satu Kegiatan yang sangat menyenagkan antara Lain Perkemahan disini kami Mendapatkan hal hal menarik, mulai dari bertambah Teman, ilmu Baru, serta Peka Terhadap emisional Kami.               
                  </p>
                </div>
              </div>  
              <div class="single-popular-carusel">
                <div class="thumb-wrap relative">
                  <div class="thumb relative">
                    <div class="overlay overlay-bg"></div>  
                    <img class="img-fluid" src="{{ asset('assets/img/s2.jpeg') }}" alt="">
                  </div>                  
                </div>
                <div class="details">
                  <a href="https://www.youtube.com/watch?v=NYrWjLQ5AOI">
                    <h4>
                      Kegiatan Uji Mental
                    </h4>
                  </a>
                  <p>
                    Ets Jangan Salah, Disini Uji Mental Maksudnya kami menumbuhkan Bakat Keberanian Contohnya Menyanyi dan Uji bakat didepan kelas. Karena Ini kami menjadi Pemberani dalam PUblic Speaking.                      
                  </p>
                </div>
              </div>  
              <div class="single-popular-carusel">
                <div class="thumb-wrap relative">
                  <div class="thumb relative">
                    <div class="overlay overlay-bg"></div>  
                    <img class="img-fluid" src="{{ asset('assets/img/s1.jpeg') }}" alt="">
                  </div>                  
                </div>
                <div class="details">
                  <a href="https://www.youtube.com/watch?v=7G7hUZ_wEYM">
                    <h4>
                      Kegiatan Islami
                    </h4>
                  </a>
                  <p>
                    Disini kami Tidak hanya Menumbukan Ilmu Duniawi, tetapi disini juga menumbuhkan Sifat yang mulia Serta MEndidiknya Senyum,Sapa,Salam,Sopan,Santun. Serta Mendapatkan Kegiatan Mengaji, Pesantren Kilat, Marawisan, Praktek Sholat, dan Lain-Lain               
                  </p>
                </div>
              </div>              
            </div>
          </div>
        </div>  
      </section>
      <!-- End popular-course Area -->
      

  
      <!-- start footer Area -->    
      <footer class="footer-area section-gap">
        <div class="container">
                                           
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> SD NEGERI 02 CILILIN
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p> 
          </div>            
        </div>
      </footer> 
      <!-- End footer Area -->  


      <script src="{{ asset('assets/js/vendor/jquery-2.2.4.min.js') }}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous'"></script>
      <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>      
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
        <script src="{{ asset('assets/js/easing.min.js') }}"></script>      
      <script src="{{ asset('assets/js/hoverIntent.js') }}"></script>
      <script src="{{ asset('assets/js/superfish.min.js') }}"></script> 
      <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
      <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script> 
        <script src="{{  asset('assets/js/jquery.tabs.min.js') }}"></script>           
      <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>  
      <script src="{{  asset('assets/js/owl.carousel.min.js') }}"></script>                  
      <script src="{{  asset('assets/js/mail-script.js') }}"></script> 
      <script src="{{  asset('assets/js/main.js') }}"></script>  
    </body>
  </html>