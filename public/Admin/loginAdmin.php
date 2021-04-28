<?php
session_start();

include_once '../Headers/header.php';
?>

<div class="container">
    <br>  <p class="text-center">This is where LHBS Admins should login, Users please go to the user log in page at: <a href="../Volunteer/loginUser.php"> User Login</a></p>
    <hr>

    <div class="row">
        <aside class="col-sm-4">
            <div class="card">
                <article class="card-body">
                    <h4 class="card-title mb-4 mt-1">Admin- Sign in</h4>
                    <form method="POST" action="../../src/Model/adminAuthentication.php">
                        <div class="form-group">
                            <label>Your Username</label>
                            <input type="text" class="form-control" placeholder="Username" name="adminName">
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <label>Your Password</label>
                            <input type="password" class="form-control" placeholder="********" name="adminPass">
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" name="adminSignin" value="Login">
                        </div> <!-- form-group// -->
                    </form>
                </article>
            </div> <!-- card.// -->
        </aside> <!-- col.// -->
    </div>
</div>

<?php
include_once '../Headers/footer.php';
?>