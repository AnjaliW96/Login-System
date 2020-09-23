<?php
    session_start();
    $pageName = "Login";
    echo '<title>'.$pageName.'</title>
          <body>';
    include ("header.php");
        echo '
        <br><br><br><br><br>
        <div class="container">
          <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <form class="text-center border border-light p-5" action="login_process.php" method="POST">
                    <p class="h4 mb-4">'.$pageName.'</p>
                    <!-- Email -->
                    <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail" name="email">
                    <!-- Password -->
                    <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password" name="password">
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
        include ('footer.php');
        echo'</body>';
?>