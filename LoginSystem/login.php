<?php
    session_start();
    $pageName = "Login";
    echo '<title>'.$pageName.'</title>
          <body>';
    include("Common/header.php");
        echo '
        <br><br><br><br><br>
        <div class="container">
          <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <form class="text-center border border-light p-5" action="login_process.php" method="POST">
                    <p class="h4 mb-4">'.$pageName.'</p>
                    <!-- Email -->
                    <input type="email" class="form-control mb-4" placeholder="E-mail" name="email" required>
                    <!-- Password -->
                    <input type="password" class="form-control mb-4" placeholder="Password" name="password" required>
                    <!-- Login in button -->
                    <button class="btn btn-info btn-block my-4" type="submit">Login</button>
                    <!-- SignUp -->
                    <p>Have not signed-up yet?
                        <a href="signup.php">Sign-Up</a>
                    </p>
                </form>
            </div>
            <div class="col-lg-2"></div>
          </div>
        </div>';
        include('Common/footer.php');
        echo'</body>';
?>