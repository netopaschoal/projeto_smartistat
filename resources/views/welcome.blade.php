<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>H-Temp</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            html, body {
                font-family:'Poppins', sans-serif;
                font-size: 16px;
                margin: 0;
                margin-bottom: 250px;
                background-color: #fff;
            }
 

            .full-height {
                height: 30vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 3px;
            }
            /* codigo danilo */
            #navbar ul{
  padding: 20px;
  list-style-type: none;
  text-align: center;
  background-color: #288dc0;
  margin: 10px;
  height: 70px;
  border-radius: 5px;

}
#navbar ul li{
    display: inline;
}

#navbar ul li a{
  text-decoration: none;
  padding: 5px 40px;
  border-radius: 15px;
  color: white;
  background-color: blue;
  letter-spacing: 4px;
  transition: all 0.7s ease-in-out;
  border: 1px solid white;
  margin: 10px;
  font-family: arial;
}
#navbar ul li a:hover{
color: black;
background-color: white;
}
img {
  background-color: white;
  margin: 20px;
  height: 200px;
  margin-top: 20px;

}
main{
  padding: 150px;
  width: 80%;
  margin: auto;
  min-width: 460px;

}
h2 {
  font-size: 120%;
  color: blue;
}
/* Meu CSS */
.Navbar_2 {
    margin-bottom: 20px;
}
        </style>
    </head>
    <body>
            <div>
                <img src="{{asset("storage/logo_2.png")}}">
                @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/lista_categorias') }}">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>
            
            <div id="navbar">
                <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="clients.html">Clients</a></li>
                  <li><a href="#">News</a></li>
                </ul>
              </div>
              <main>
                <h2>Should Medication Be Kept in the Fridge?</h2>
                <h2>Should Medication Be Kept in the Fridge?</h2>
                  <p>​
              The Rastrix® monitoring system is one of the most advanced
              temperature monitoring and sensing solution available.
              The wireless temperature monitoring solution offers the
              widest ranges of temperature sensor, humidity sensor,
              pressure sensor, and data recording. Keeping it simple and
              empowered by the advanced technology, The Rastrix®
              monitoring system offers a practical solution specifically
              designed to meet strict regulatory compliance requirements
              for hospitals, and other industries where environmental
              monitoring is critical.</p>
              
              
                  <img src="nurses.jpeg" height="2px">
                
              
              <h2>Should Medication Be Kept in the Fridge?</h2>
              <p>​
              The Rastrix® monitoring system is one of the most advanced
              temperature monitoring and sensing solution available.
              The wireless temperature monitoring solution offers the
              widest ranges of temperature sensor, humidity sensor,
              pressure sensor, and data recording. Keeping it simple and
              empowered by the advanced technology, The Rastrix®
              monitoring system offers a practical solution specifically
              designed to meet strict regulatory compliance requirements
              for hospitals, and other industries where environmental
              monitoring is critical.</p>
              </main>
    </body>
</html>
