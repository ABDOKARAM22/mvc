<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <div class="container-fluid">
    <img class="navbar-brand" src= <?php

use mvc\core\session;

  echo VIEW."inc/image/logo.png" ?> alt="Logo">
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="../home/index">Home</a>
       <?php 
        if(!session::get("user")){
        echo   '<a class="nav-link" href="../home/register" >Registration</a>';
        echo   '<a class="nav-link" href="../home/login" >Login</a>';
        }
        ?>
        <?php if(session::get('user')){
        echo  '<a class="nav-link" href="../user/profile">Profile</a>';
        } ?>
    </div>
    </div>

        <?php if(session::get('user')){ ?>
        <div class="navbar-nav" >
          <a class="nav-link" href="../user/logout">Logout</a>
        </div>
  <?php  } ?>
  </div>
</nav>