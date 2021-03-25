<?php
  include 'includes/autoloader.inc.php';
  if(isset($_POST["submit"]))
  {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $nickname = $_POST["nickname"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];

    $insert = new control();
    $result = $insert->register(8, $username, $password);
    $result2 = $insert->register2(8, $firstname, $lastname, $nickname);

    var_dump($result);
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/ca602dea7a.js" crossorigin="anonymous"></script>
  <title>E-Learning Project</title>
  <!-- Tailwind CSS -->
  <link rel="stylesheet" href="../prototype/css/style.css">
  <!-- Style Css -->
  <link rel="stylesheet" type="text/css" href="../prototype/css/style2.css">
  <link rel="stylesheet" type="text/css" href="../prototype/css/styleform.css">
  <!-- Icon -->
  <link rel="shortcut icon" href="../prototype/assets/logo.jpeg">  
</head>
<body>
    <header class="text-gray-600 body-font bg-gray-100">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-white p-2 bg-green-500 rounded-full" viewBox="0 0 24 24">
            </svg>
            <span class="ml-3 text-xl">Ngoding.com</span>
          </a>

          <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
            <a class="mr-7 transition duration-400 ease-out btnn" href="index.php">Home</a>
            <a class="mr-7 transition duration-400 ease-out btnn" href="study.php">Study</a>
            <a class="mr-7 transition duration-400 ease-out btnn" href="exercises.php">Exercises</a>
            <a class="mr-7 transition duration-400 ease-out btnn" href="learningpath.php">Road Map</a>
            <a class="mr-7 transition duration-400 ease-out btnn" href="aboutus.html">About</a>
          </nav>

          <button class="inline-flex mr-3 items-center bg-green-400  border-0 py-1 px-3 focus:outline-none text-white hover:bg-green-600 rounded text-base mt-4 md:mt-0 transition duration-500 ease-out"><a href="login.php">Log in</a>
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </button>
          <button class="inline-flex items-center bg-green-500  border-0 py-1 px-3 focus:outline-none text-white hover:bg-green-600 rounded text-base mt-4 md:mt-0 transition duration-500 ease-out"><a href="signup.php">Sign Up</a>
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </button>
        </div>
    </header>

    <section class="text-gray-100 body-font bgup">

        <div>.</div>

    </section>


    
    <!-- Login Form -->
    <section class="text-gray-600 body-font font-serif exlg">
        <div class="container px-75 py-24 mx-auto flex flex-wrap items-center">
            <form action="" method="post">
                <div class="flex flex-col text-center w-full mb-10"><br><br>
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">SIGN-UP FORM:</h1>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever Lorem ipsum dolor sit, amet consectetur adipisicini, sit error. Non illo ipsa cumque.</p>
                </div>
                <div class="container"> <hr>
            
                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Input Username" name="username" id="username" required >
            
                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Input Password" name="password" id="password" required>
            
                <label for="repeatPass"><b>Repeat Password</b></label>
                <input type="password" placeholder="Repeat Password" name="repeatPass" id="repeatPass" required>

                <div class="grid grid-cols-2 gap-6">
                  <label for="firstname"><b>First Name</b></label>
                  <label for="lastname"><b>Last Name</b></label>

                  <input type="text" placeholder="Input First Name" name="firstname" id="firstname" required>
                  <input type="text" placeholder="Input Last Name" name="lastname" id="lastname" required>

                </div>
                <label for="nickname"><b>Nickname</b></label>
                <input type="text" placeholder="Input Nickname" name="nickname" id="nickname" required>
                
                <label>
                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                </label>
                
                <p>By creating an account you agree to our <a href="#" style="color:rgb(137, 138, 139)">Terms & Privacy</a>.</p>
            
                <div class="clearfix">
                    <button type="button" class="cancelbtn" name="cancel">Cancel</button>
                    <button type="submit" class="signupbtn" name="submit"><a href="/admin.php">Sign Up</a></button>
                </div>
                </div>
            </form>
        </div>
    </section>
    
  <!-- Javascript -->
  <script src="../prototype/js/script.js"></script>
      
  <!-- <a href="https://www.freepik.com/vectors/background">Background vector created by freepik - www.freepik.com</a> -->
</body>
</html>
