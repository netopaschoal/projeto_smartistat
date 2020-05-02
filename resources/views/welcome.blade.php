<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ asset('css/home_danilo.css') }}" rel="stylesheet">

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap"
          rel="stylesheet">
<script src="https://kit.fontawesome.com/4a572188cf.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" href="favicon.ico">
    <title>SmartiStat</title>

    </div>
  </head>
  <body>
  <section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"> <img src="{{asset("storage/imagens/logo.png")}}">SmartiStat</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse"
  data-target="#navbarNav" aria-controls="navbarNav"
  aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">SERVICES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ABOUT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">CONTACT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">REGISTER</a> 
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">LOG IN</a> 
      </li>
    </ul>
  </div>
</nav>
  </section>

  <!---anner section -------------------->
  <section id=banner>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p class="promo-title" >SYSTEM SOLUTION</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna
            aliqua. Ut enim ad minim veniam, quis nostrud exercitation
            ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit
            esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
            occaecat cupidatat non proident, sunt in culpa qui officia
            deserunt mollit anim id est laborum.</p>
          <a href="#"> <img src="" alt=""></a>
        </div>
        <div class="col-md-6 text-center">
          <img class="img-fluid" src="{{asset("storage/imagens/img1.png")}}" alt="Responsive image">
        </div>
      </div>
    </div>
      <img src="{{asset("storage/imagens/wave.svg")}}" alt="bottom-img">
  </section>

<!-------------Service Section------------------>

      <section id="services">
        <div class="container text-center">
          <h1 class="title"> WHAT WE DO?</h1>
          <div class="row text-center">
            <div class="col-md-4 services">
              <img src="{{asset("storage/imagens/logo.png")}}" class="service-img">
              <h4>Growth Marketing</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna
                </p>
            </div>
            <div class="col-md-4 services">
              <img src="{{asset("storage/imagens/logo.png")}}" class="service-img">
            <h4>Online Brading</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
              sed do eiusmod tempor incididunt ut labore et dolore magna
              </p>
          </div>
          <div class="col-md-4 services">
            <img src="{{asset("storage/imagens/logo.png")}}" class="service-img">
          <h4>COVID-19</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna
            </p>
        </div>
        </div>
        <button type="button"class="btn btn-primary">All Services</button>
        </div>
        </section>

        <!-----------------About Us---------------->

        <section id="about-us">
        <div class="container">
        <h1 class="title text-center">WHY CHOOSE US</h1>
        <div class="row">
          <div class="col-md-6 about-us">
            <p class="about-title">Why we're different</p>
            <ul>
              <li>Understand our client's business goal first</li>
              <li>Belileve in doing business with honesty</li>
              <li>We delivery on time</li>
              <li>We protect your online reputation</li>
            </ul>
          </div>
          <div class="col-md-6">
          <img src="{{asset("storage/imagens/dash.png")}}" class="img-flui" alt="Responsive image">
          </div>
        </div>
        </div>
        </section>
    <!-------------------Brand Area---------------->
        <section id="brand">
          <div class="container">
            <h1 class="title text-center">OUR CLEINTES</h1>
            <div class="row offset-1">
              <div class="col-md-5 brand">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                  sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit ame ceeqeecer.</p>
                  <img src="https://pbs.twimg.com/profile_images/378800000580667822/ff281c79330c7950d4011791f623ef33_400x400.jpeg">
                  <p class="user-details" ><b>Danilo Santana</b><br> Presidente at CMH</p>
              </div>
              <div class="col-md-5 brand">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                  sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, cons.</p>
                  <img src="https://yt3.ggpht.com/a/AGF-l79w0AaBQnfXbi_7Q8SiMHFxbvLIEKBiLuZp1Q=s900-c-k-c0xffffffff-no-rj-mo">
                  <p class="user-details" ><b>Danilo Santana</b><br> Presidente at CMH</p>
              </div>
              <div class="col-md-5 brand">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                  sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consec.</p>
                  <img src="https://upload.wikimedia.org/wikipedia/en/thumb/f/f4/Kansas_Jayhawks_logo.svg/1200px-Kansas_Jayhawks_logo.svg.png">
                  <p class="user-details" ><b>Danilo Santana</b><br> Presidente at CMH</p>
              </div>
              <div class="col-md-5 brand">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                  sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, cons.</p>
                  <img src="https://www.gannett-cdn.com/presto/2019/06/21/PSIF/dde3eb3a-8ab6-4e54-a152-f134051542c2-UMKC_logo.png?width=540&height=&fit=bounds&auto=webp">
                  <p class="user-details" ><b>Danilo Santana</b><br> Presidente at CMH</p>
              </div>
              <div class="col-md-5 brand">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                  sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit ame ceeqeecer.</p>
                  <img src="{{asset("storage/imagens/logo.png")}}">
                  <p class="user-details" ><b>Danilo Santana</b><br> Presidente at CMH</p>
              </div>
              <div class="col-md-5 brand">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                  sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, cons.</p>
                  <img src="{{asset("storage/imagens/logo.png")}}">
                  <p class="user-details" ><b>Danilo Santana</b><br> Presidente at CMH</p>
              </div>
            </div>
          </div>
        </section>

        <!-------------------Social Media---------------->
        <section id="social-media" >
          <div class="container text-center">
            <p>FIND US ON SOCIAL MEDIA</p>
            <div class="social-icons">
              <i class="social-icon fab fa-instagram"></i>
              <i class="social-icon fab fa-facebook-f"></i>
              <i class="social-icon fab fa-twitter"></i>
              <i class="social-icon fas fa-envelope-square"></i>
            </div>
          </div>
        </section>
        <!-------------------Footer Media---------------->
          <section id="footer">
            <div class="container">
             <div class="row">
              <div class="col-md-4 footer-box">
              <p><b>SmartiStat</b></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                  sed do eiusmod tempor incididunt ut labore et dolore magna
                  Lorem ipsum dolor sit amet, cons.</p>
              </div>
              <div class="col-md-4 footer-box">
                <p><b>CONTAC US</b></p>
                <p><i class="fa fa-map-marker"></i> SmartiStat, United State</p>
                <p><i class="fa fa-phone"></i> +1 888-888-8888</p>
                <p><i class="fa fa-envelope-o"></i> smartistat@gmail.com</p>
            </div>

            <div class="col-md-4 footer-box">
            <p><b>Subscribe Newsletter</b></p>
            <input type="email" class="form-control" placeholder="Your Email">
            <button type="button" class="btn btn-primary">Subcribe</button>
            </div>
            </div>
            </div>
          </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
