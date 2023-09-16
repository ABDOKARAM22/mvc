<?php
include VIEW ."inc/header.php";
include VIEW ."inc/nav.php";

?>



<main>
    <br>
    <div class="container mt-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Users List</h5>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php  foreach ($data as $item) {     
                                          ?>
                                            <tr>
                                                <td><?php echo $item->id ?></td>
                                                <td><?php echo $item->name ?></td>
                                                <td><?php echo $item->email ?></td>
                                            </tr> 
                                        </tbody>
                                <?php  } ?>
                                    </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</main>




<?php include VIEW."inc/footer.php"; ?>