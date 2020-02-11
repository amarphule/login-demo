<?php
  include "dbConn.php";

  // Check User already available. 
  if(isset($_SESSION["user_name"])) {
    // Redirect to Home Page.
    header("location: home.php");
    die();

  }
  if (isset($_POST["submit"])) {
    $uname = $_POST["uname"];
    $pass = md5($_POST["pass"]);
    $rememberme = $_POST["rememberme"];
  
    //  Empty fields validaiton
    if (!empty($uname) && !empty($pass)) {
  
      // Get data from database
      $sql = "SELECT * FROM users WHERE uname = '". $uname ."' AND pass = '". $pass ."'";

      $result = mysqli_query($conn, $sql);
      $user = mysqli_fetch_array($result);
  
      if ($user) {

        // check if true Setcookies
        if (!empty($rememberme)) {
          setcookie("uname", $uname, time() + 12 * 60 * 60);
          setcookie("pass", $pass, time() + 12 * 60 * 60);
          session_start();
          $_SESSION["user_name"] = $uname;
        }
        else {
          if (isset($_COOKIE["uname"])) {
            setcookie("uname", "");
          }
          if (isset($_COOKIE["pass"])) {
            setcookie("pass", "");
          }
        }
        // Redirect to Home Page.
        header("location: home.php");
      }
      else {
        $message = "Enter Correct Username And Password";
      }
    }
    else {
      $message = "Both Fields are Required.";
    }
  }
  
  include "header.php";
?>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="home.php"><strong>Login Demo</strong></a>
    </nav>
    <div class="container p-5 bg-light">
      <div class="text-center text-danger">
        <!-- Error message -->
        <?php
          if (isset($message)){
             echo $message; 
            }
         ?>
      </div>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="text-center ">
                    <h1 class="font-weight-bold">Login Form</h1>
                </div>
                <form action="index.php" method="POST">
                    <div class="form-group">
                        <label for="uname">Username:</label>
                        <input type="text" class="form-control" placeholder="Enter username" name="uname" value = "<?php 
                          if (isset($_COOKIE["uname"])) {
                            echo $_COOKIE["uname"];
                          } ?>" >
                    </div>
                    <div class="form-group">
                      <label for="pwd">Password:</label>
                      <input type="password" class="form-control" placeholder="Enter password" name="pass" value="<?php 
                          if (isset($_COOKIE["pass"])) {
                            echo $_COOKIE["pass"];
                          } ?>" >
                    </div>
                    <div class="form-group form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="rememberme" <?php if (isset($_COOKIE["uname"])) { ?>checked<?php } ?>> Remember me
                      </label>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                  </form>
            </div>
        </div>
    </div>
<?php include "footer.php"; ?>