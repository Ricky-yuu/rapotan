<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Raportku</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('frontend/assets/img/fav_icon.png')}}" rel="icon">
  <link href="{{ asset('frontend/assets/img/icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('frontend/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor - v2.2.1
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">Raportku</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->


      <a href="{{ route('login') }}" class="get-started-btn">Log in</a>

    </div>
  </header><!-- End Header -->


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
      <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
        <h1>Learn For<br>The Future</h1>
        <h2>Dapatkan aplikasi Raportku dan lihat hasil belajarmu di sini</h2>
        <a href="courses.html" class="btn-get-started">Download Here</a>
      </div>
    </section><!-- End Hero -->

    <main id="main">

      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <p>Raportku</p>
          </div>

          <div class="row">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
              <img src="{{ asset('frontend/assets/img/abouts.png')}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
              <h3>Sistem Informasi Berbasis Webside dan Android.</h3>
              <p class="font-italic">
                Rapotku adalah Sistem Informasi yang bertujuan untuk memudahkan dalam pengarsipan Nilai sekolah SD .
              </p>
              <ul>
                <li><i class="icofont-check-circled"></i> Aplikasi yang mudah dipahamai.</li>
                <li><i class="icofont-check-circled"></i> Aplikasi yang memudahkan dalam pengarsipan Nilai.</li>
                <li><i class="icofont-check-circled"></i> Terdapat Informasi Sekolah </li>
              </ul>
              <p>
                Semoga Aplikasi Raportku bisa bermanfaat untuk sekolah SD yang menggunakan
              </p>
            </div>
          </div>

        </div>
      </section><!-- End About Section -->

      <!-- ======= Counts Section ======= -->
      <section id="counts" class="counts section-bg">
        <div class="container">

          <div class="row counters">

            <div class="col-lg-3 col-6 text-center">
              <span data-toggle="counter-up">256</span>
              <p>Students</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span data-toggle="counter-up">24</span>
              <p>Teacher</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span data-toggle="counter-up">7</span>
              <p>Courses</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span data-toggle="counter-up">2</span>
              <p>Administration</p>
            </div>

          </div>

        </div>
      </section><!-- End Counts Section -->

      <!-- ======= Features Section ======= -->
      <section id="features" class="features">
        <div class="container" data-aos="fade-up">

          <div class="row" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-lg-3 col-md-4">
              <div class="icon-box">
                  <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
                  <h3><a href="">Bahasa Indonesia</a></h3>

              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
              <div class="icon-box">
                <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
                <h3><a href="">Matematika</a></h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
              <div class="icon-box">
                <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
                <h3><a href="">Pendidikan IPA</a></h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
              <div class="icon-box">
                  <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
                  <h3><a href="">Pendidikan Kewarganegaraan</a></h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
              <div class="icon-box">
                  <i class="ri-base-station-line" style="color: #ff5828;"></i>
                  <h3><a href="">Pendidikan IPS</a></h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
              <div class="icon-box">
                  <i class="ri-disc-line" style="color: #b20969;"></i>
                  <h3><a href="">Seni Budaya dan Prakarya</a></h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
              <div class="icon-box">
                  <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
                  <h3><a href="">Pendidikan Jasmani, Olahraga dan Kesehatan</a></h3>
              </div>
            </div>
        </div>
      </section><!-- End Features Section -->


      <!-- ======= Trainers Section ======= -->
      <section id="trainers" class="trainers">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Trainers</h2>
            <p>Our Professional Trainers</p>
          </div>

          <div class="row" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="member">
                <img src="{{ asset('frontend/assets/img/trainers/ricky.jpg')}}" class="img-fluid" alt="">
                <div class="member-content">
                  <h4>Ricky Aditya Wardana</h4>
                  <span>Web Development</span>
                  <p>
                    Ricky Aditya Wardana Mahasiswa dari Politeknik Negeri Jember Semester 4 yang bekerja di bagian Webside 
                  </p>
                  <div class="social">
                    <a href=""><i class="icofont-twitter"></i></a>
                    <a href=""><i class="icofont-facebook"></i></a>
                    <a href=""><i class="icofont-instagram"></i></a>
                    <a href=""><i class="icofont-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="member">
                <img src="{{ asset('frontend/assets/img/trainers/sulis.jpeg')}}" width="260px" class="img-fluid" alt="">
                <div class="member-content">
                  <h4>Sulistyawati</h4>
                  <span>Frontend Web Development</span>
                  <p>
                    Sulistyawati Mahasiswa dari Politeknik Negeri Jember Semester 4 yang bekerja di bagian Frontend Webside 
                  </p>
                  <div class="social">
                    <a href=""><i class="icofont-twitter"></i></a>
                    <a href=""><i class="icofont-facebook"></i></a>
                    <a href=""><i class="icofont-instagram"></i></a>
                    <a href=""><i class="icofont-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="member">
                  <img src="{{ asset('frontend/assets/img/trainers/trainer-1.jpg')}}" width="260px" class="img-fluid" alt="">
                  <div class="member-content">
                    <h4>Raihan Dinul Haq</h4>
                    <span>Android Development</span>
                    <p>
                      Raihan Dinul Haq Mahasiswa dari Politeknik Negeri Jember Semester 4 yang bekerja di bagian Android Development 
                    </p>
                    <div class="social">
                      <a href=""><i class="icofont-twitter"></i></a>
                      <a href=""><i class="icofont-facebook"></i></a>
                      <a href=""><i class="icofont-instagram"></i></a>
                      <a href=""><i class="icofont-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <img src="{{ asset('frontend/assets/img/trainers/trainer-3.jpg')}}" class="img-fluid" alt="">
                    <div class="member-content">
                      <h4>Aditya Setya Nugraha</h4>
                      <span>Android Development</span>
                      <p>
                        Aditya Setya Nugraha Mahasiswa dari Politeknik Negeri Jember Semester 4 yang bekerja di bagian Android Development 
                      </p>
                      <div class="social">
                        <a href=""><i class="icofont-twitter"></i></a>
                        <a href=""><i class="icofont-facebook"></i></a>
                        <a href=""><i class="icofont-instagram"></i></a>
                        <a href=""><i class="icofont-linkedin"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
  


          </div>

        </div>
      </section><!-- End Trainers Section -->

    </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="pull-right hidden-xs">

          <div class="mr-md-auto text-center text-md-right">
            <h3>SD Negeri 58 Payakumbuh</h3>
            <p>
              Jalan Tanjung Pinang <br>
              Daya Bangun, Payakumbuh Barat<br>
              Payakumbuh, Sumatera Barat 26221<br><br>
              <strong>Phone:</strong> +6275290530<br>
              <strong>Email:</strong> yulvirayaya@yahoo.com<br>
            </p>
          </div>


        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Raportku 2021</span></strong>. kel2 Tif-Inter'19
        </div>
      </div>
      <div class="pull-right hidden-xs">
        <b>Version</b> 1.0.0
    </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('frontend/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('frontend/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{ asset('frontend/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{ asset('frontend/assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{ asset('frontend/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('frontend/assets/vendor/aos/aos.js' )}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('frontend/assets/js/main.js')}}"></script>

</body>

</html>
