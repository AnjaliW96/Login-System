<?php
    session_start();
	$pageName = "Dashboard";
    echo "<title>$pageName</title>
          <body>";
          include ('header.php');
          if (isset($_SESSION['email'])) {	//check whether the session is set
              echo '
                <br><br><br>
                <div class="container">
                  <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                        <div class="card">
                          <!-- card image -->
                          <img class="card-img-top" src="https://images.unsplash.com/photo-1453928582365-b6ad33cbcf64?ixlib=rb-1.2.1&auto=format&fit=crop&w=1052&q=80">   
                          <!-- card content -->
                          <div class="card-body">
                          <!-- card title -->
                            <h4 class="card-title">Welcome, '.$_SESSION['name'].'!!</h4>
                            <p class="card-text">Your email is '.$_SESSION['email'].'.</p>
                            <p class="card-text">Your gender is '.$_SESSION['gender'].'.</p>
                            <!-- logout button -->
                            <a href="logout.php" class="btn btn-primary">Logout</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-4"></div>
                  </div>
                </div>';
		  }else{
              echo "<script>window.location.href='login.php';alert('To access this page you have login first!');</script>";
          }
    include ('footer.php');
	echo"</body>";	
?>