<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Ha Website</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">



    <link rel="stylesheet" href="./css.css"/>
    <link rel="stylesheet" type="text/css" href="font-awesome/css/fontawesome-all.css">
  
  </head>
  <body>
    <header>
      <div> <p>Dang Ha</p></div>
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About Me</a></li>
          <li><a href="#">Travel</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
    </header>
    
    <section class="titles">
      <h2>It's time for a new adventure</h2> </section>
    <section class="container-boxes">
      <div class="box">
        <div class="text">
          <a href="">
            <h3>Reading</h3>
            <p>Explore Many Amazing Worlds From Books</p>
          </a>
        </div>
      </div>
      <div class="box">    
        <div class="text">
          <a href="">
            <h3>Traveling</h3>
            <p>Travel And Change Of Place Impart New Vigor To The Mind.</p>
          </a>
        </div>
      </div>
      <div class="box">
        <div class="text">
          <a href="">
            <h3>Listening</h3>
            <p>Music Is A Piece Of Art That Goes In The Ears Straight To The Heart</p>
          </a>
        </div>
      </div>
    </section>


    <!--BLOCK-->
    <section id="about">
      <div class="container">
        <div class="heading">
        <h4>About me</h4>
        <a>*move mouse to see</a>
      </div>
              <div class="row">
                  <div class="col-md-4">
                  
            <div class="khoi3">
              <i class="fas fa-address-book"></i>
              <div class="layer2">
                <i class="fas fa-user"></i>
                <p>My name is Ha</p>
              </div> <!-- end khoi2 -->
              
            </div>
            </div>
            
    
            
            <div class="col-md-4">
              <div class="khoi3">
                <i class="fas fa-address-book"></i>
                <div class="layer2">
                  <i class="fas fa-user"></i>
                  <p>My student ID: 1801040070</p>
                </div> <!-- end khoi2 -->
              </div>
              </div>
          
  
        <div class="col-md-4">
        <div class="khoi3">
          <i class="fas fa-address-book"></i>
          <div class="layer2">
            <i class="fas fa-user"></i>
            <p>Student of Hanoi University</p>
          </div> <!-- end khoi2 -->
        </div>
        </div>
    
      </section> <!--END BLOCK-->




    <!--CONTACT-->
    <section id="contact">        
      <div class="container">
          <div class="row">    

              <div class="col-md-8">
                <?php

                define('API_KEY','FCW6YJClZGll5vuG1Q7GH1qt2vGb0wFE');
    
    
                $apikey = API_KEY;
    
                $user_ip = '183.80.18.26';
    
                $location = json_decode(file_get_contents("http://dataservice.accuweather.com/locations/v1/cities/ipaddress?apikey={$apikey}&q={$user_ip}"), true);
    
                $loc_key = '425226';
    
                $weather = json_decode(file_get_contents("http://dataservice.accuweather.com/currentconditions/v1/{$loc_key}?apikey={$apikey}"), true);
    
    
    
                $city = $location['EnglishName'];
                $country = $location['Country']['EnglishName'];
                $dt = $weather[0]['LocalObservationDateTime'];
                $temp = $weather[0]['Temperature']['Metric']['Value'];
                $img = $weather[0]['WeatherIcon'];
                if($img<10) {
                  $img = "0{$img}";
                }
    
                echo '<p><br />Welcome, guest!</p><p>';
                echo $city . ', ' . $country . "<br />";
                echo substr($dt,0,10) . " " . substr($dt,11,8);
                echo "</p><p>Temperature: {$temp} C<br />";
                echo "<img src='https://developer.accuweather.com/sites/default/files/{$img}-s.png'>";
    
    
                ?>
              </div>

              <div class="col-md-4">
                  <div class="icons">
                      <h3>Stay Connected</h3>
                          <div>
                              <a href="#"><img src="./fb.png" alt="Facebook">&nbsp;Facebook</a>
                          </div>

                          <div>
                              <a href="#"><img src="./twitter.png" alt="Twitter">&nbsp;Twitter</a>
                          </div>
                          
                          <div>
                              <a href="#"><img src="./g+.png" alt="Google+">&nbsp;Google+</a>
                          </div>
                  </div>
              </div>

          </div>
      </div> 
          
  </section>


  <footer>
      <h3>Copyright (c) 2021. All rights reserved Ha Web Design</h3>
  </footer>

  
  <!--END COP1-->
     
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>
