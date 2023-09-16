<?php include VIEW ."inc/header.php"; ?>
<?php include VIEW ."inc/nav.php"; ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body text-center">
                    <h1>
                        <?php 
                            echo isset($name) ? $message. $name : $message ."Dear" ;
                        ?>
                    </h1>
                    <hr class="my-4">
                    <div class="jumbotron text-center mt-5">
                      <h2 class="display-4">PHP MVC</h2>
                      <p class="lead">This is a simple user registration system with a profile page by php mvc</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include VIEW."inc/footer.php"; ?>
