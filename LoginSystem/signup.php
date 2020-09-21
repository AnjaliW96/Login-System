<?php
    session_start();        // start the session
    $pagename = "Sign Up";
    echo "<title>$pagename</title>";
    echo "<body>";
    echo "<h4>$pagename</h4>";
    echo "<table style = 'border: 0px'>";
    echo "<form method ='POST' action = 'signup_process.php'>";   //sign up form
    echo "<tr>";
    echo "<td style = 'border: 0px'>*Name </td>";
    echo "<td style = 'border: 0px'><input type='text' name ='name'></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td style = 'border: 0px'>*Email Address </td>";
    echo "<td style = 'border: 0px'><input type='text' name ='email'></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td style = 'border: 0px'>*Username </td>";
    echo "<td style = 'border: 0px'><input type='text' name ='username'></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td style = 'border: 0px'>*Password </td>";
    echo "<td style = 'border: 0px'><input type='password' name ='password'></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td style = 'border: 0px'>*Confirm Password </td>";
    echo "<td style = 'border: 0px'><input type='password' name ='cpw'></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td style = 'border: 0px'><input type='submit' name='signup' value='Sign Up'></td>";
    echo "<td style = 'border: 0px'><input type='submit' name='clearform' value='ClearForm'></td>";
    echo "</tr>";
    echo "</form>";
    echo "</tabel>";
    echo"</body>";

?>