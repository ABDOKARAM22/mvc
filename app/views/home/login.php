<?php

use mvc\core\session;

include VIEW ."inc/header.php";
include VIEW ."inc/nav.php";
?>
<section class="vh-100" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Sign in</h3>
          <form action="../user/login" method="POST">

            <div class="form-outline mb-4">
              <input type="email" name="email" id="typeEmailX-2" class="form-control form-control-lg" />
              <label class="form-label"  for="typeEmailX-2">Email</label>
            </div>
            
            <div class="form-outline mb-4">
              <input type="password" name="password" id="typePasswordX-2" class="form-control form-control-lg" />
              <label class="form-label" for="typePasswordX-2">Password</label>
              <?php
              if(isset($error)){
                echo $error;
                session::stop();
              }
              ?>
            </div>

            
            <input class="btn btn-primary btn-lg btn-block" type="submit" name="Login" value="Login" />
            
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include VIEW ."inc/footer.php"; ?>
