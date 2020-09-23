<?php
    session_start();
    $pageName = "Sign Up";
    echo '<title>'.$pageName.'</title>
          <body>';
    include("Common/header.php");
    echo '<br><br><div class="container">
              <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <form class="border border-light p-5" action="signup_process.php" method="POST">
                        <p class="text-center h4 mb-4">'.$pageName.'</p>
                        <!-- Name -->
                        <input type="text" class="form-control mb-4" placeholder="Enter Name" name="name" required>
                        <!-- Email -->
                        <input type="text"class="form-control mb-4" placeholder="Enter E-mail" name="email" required>
                        <!-- Gender-->
                        <p style="text-align: left">Select Gender: </p>
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" class="custom-control-input" id="male" value="male" name="gender" required>
                          <label class="custom-control-label" for="male">Male</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" class="custom-control-input" id="female" value="female" name="gender" required>
                          <label class="custom-control-label" for="female">Female</label>
                        </div>
                        <br><br>
                        <!-- Password -->
                        <input type="password" class="form-control mb-4" placeholder="Enter Password" name="password" required>
                        <!-- Confirm  Password -->
                        <input type="password"  class="form-control mb-4" placeholder="Re-enter Password" name="cpw" required>
                        <!-- Sign-up button -->
                        <button class="btn btn-info btn-block my-4" type="submit">Sign-Up</button>
                        <!-- SignUp -->
                        <p class="text-center ">Already registered?
                            <a href="login.php">Login</a>
                        </p>
                    </form>
                </div>
                <div class="col-lg-2"></div>
              </div>
            </div>';
        include('Common/footer.php');
        echo'</body>';
?>
