<body style="color: orange;">
<nav class="navbar navbar-expand-lg navbar-light topbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="libs/images/HV logo.png" alt="" width="60" height="60"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" onclick="showPortafolio()">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#" onclick="showSkillset()">Skillset</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#" onclick="showExperience()">Experience</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#" onclick="showContact()">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<section>
    <div id="pageView">
        <?php include "php/Home/Home.php"; ?>
    </div>
</section>