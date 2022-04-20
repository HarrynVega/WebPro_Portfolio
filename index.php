<!DOCTYPE html>
<html>
  <!-- Contenido de mi pagina -->
  <head>
      <title>
          Hi, I'm Harryn Vega
      </title>
      <link rel="stylesheet" href="libs/css/main.css">
      <link rel="stylesheet" href="libs/css/carousel.css">
      <link rel="stylesheet" href="libs/css/carousel.rtl.css">
      <link rel="stylesheet" href="libs/css/features.css">
      <link rel="stylesheet" href="libs/css/heroes.css">
      <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.css">
      <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
      <script type="text/javascript" src="libs/js/jquery-3.6.0.min.js"></script>

  </head>

  <!-- Body -->

    <body>
        <div class="header-area">
            <div class="main-menu">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href=""><img src="libs/img/HV logo.png" alt="Logo" width="60" height="60"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <div class="me-auto"></div>
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="#" onclick="showview('home')">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" onclick="showview('portfolio')">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" onclick="showview('skillset')">Skillset</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" onclick="showview('experience')">Experience</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" onclick="showview('contact')">Contact</a>
                            </li>
                        </ul>
                    </div>
                    </nav>
            </div>
        </div>
        
    </div>
    </nav>
    <section>
        <div id="pageView">
            <?php include "php/home/home.php"; ?>
        </div>
    </section>

    <!-- Footer -->
    
    <footer class="footer">
        <div class="right">
            <p>
                <img src="https://cdn.icon-icons.com/icons2/936/PNG/512/github-logo_icon-icons.com_73546.png" alt="" width="30" height="30"><a style="color:white; text-decoration:none;" href="https://github.com/HarrynVega" target="_blank">⠀HarrynVega⠀</a> 
                <img src="https://cdn.icon-icons.com/icons2/2428/PNG/512/linkedin_black_logo_icon_147114.png" alt="" width="30" height="30"><a style="color:white; text-decoration:none;" href="https://www.linkedin.com/in/harryn-vega-miranda-527032228/" target="_blank">⠀Harryn Vega Miranda⠀</a>
                <img src="https://cdn.icon-icons.com/icons2/1/PNG/256/social_facebook_fb_35.png" alt="" width="30" height="30"><a style="color:white; text-decoration:none;" href="https://www.facebook.com/harryn.vega" target="_blank">⠀Harryn.vega⠀</a>
                <img src="https://cdn.icon-icons.com/icons2/2428/PNG/512/instagram_black_logo_icon_147122.png" alt="" width="30" height="30"><a style="color:white; text-decoration:none;" href="https://www.instagram.com/lemandarinabb/" target="_blank">⠀@lemandarinabb</a> 

            </p>
        </div>    
        <div class="left">Harryn Vega © 2022 ⠀⠀ All rights reserved</div>
    </footer>
    <script type="text/javascript" src="libs/js/main.js"></script>
    <script type="text/javascript" src="libs/bootstrap/js/bootstrap.js"></script>
</body>  
</html>

 