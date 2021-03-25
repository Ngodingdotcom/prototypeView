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
  <!-- Icon -->
  <link rel="shortcut icon" href="../prototype/assets/logo.jpeg">  
</head>
<body>
    <header class="text-gray-600 body-font bg-gray-100">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" 
                 stroke-width="2" class="w-7 h-7 text-white p-2 bg-green-600 rounded-full" viewBox="0 0 24 24">
            </svg>
            <span class="ml-3 text-xl">Ngoding.com</span>
          </a>

          <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
            <a class="mr-7 transition duration-400 ease-out btnn" href="index.php">Home</a>
            <a class="mr-7 transition duration-400 ease-out btnn activee" href="study.php">Study</a>
            <a class="mr-7 transition duration-400 ease-out btnn" href="exercises.php">Exercises</a>
            <a class="mr-7 transition duration-400 ease-out btnn" href="learningpath.php">Learning Path</a>
            <a class="mr-7 transition duration-400 ease-out btnn" href="aboutus.php">About</a>
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




        <section class="text-gray-100 body-font bgup">
          <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap w-full mb-20">
              <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-100">Programming Language Study</h1>
                <div class="h-1 w-20 bg-yellow-300 rounded"></div>
              </div>
              <p class="lg:w-1/2 w-full leading-relaxed text-gray-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint sapiente nam voluptatum eveniet magnam eius accusamus unde enim, non molestias impedit tenetur. Magnam ut at totam? Rem, doloribus? Ex, veniam?.</p>
            </div>
      
            <div class="flex flex-wrap -m-4">
              <div class="xl:w-1/5 md:w-1/2 p-4">
                <div class="bg-gray-100 p-6 rounded-lg">
                  <img id="myImg" class="h-40 rounded w-full object-cover object-center mb-6 MyImg" src="../prototype/assets/html.png" alt="content">
                  <!-- The Modal -->
                  <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img01">
                    <div id="caption"></div>
                  </div>
      
                  <h3 class="tracking-widest text-green-500 text-xs font-medium title-font">
                    <div id="divlink" class="fa"></div>
                    <a href="#">HTML</a></h3>
                  <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Lorem ipsum dolor </h2>
                </div>
              </div>
              <div class="xl:w-1/5 md:w-1/2 p-4">
                <div class="bg-gray-100 p-6 rounded-lg">    
                  <img id="myImg" class="h-40 rounded w-full object-cover object-center mb-6 MyImg" src="../prototype/assets/css.png"  alt="content">
                  <!-- The Modal -->
                  <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img01">
                    <div id="caption"></div>
                  </div>
      
                  <h3 class="tracking-widest text-green-500 text-xs font-medium title-font"><a href="#">CSS</a></h3>
                  <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Lorem ipsum dolor</h2>
                </div>
              </div>
              <div class="xl:w-1/5 md:w-1/2 p-4">
                <div class="bg-gray-100 p-6 rounded-lg">  
                  <img id="myImg" class="h-40 rounded w-full object-cover object-center mb-6 MyImg" src="../prototype/assets/JS.png"  alt="content">
                  <!-- The Modal -->
                  <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img01">
                    <div id="caption"></div>
                  </div>
      
                  <h3 class="tracking-widest text-green-500 text-xs font-medium title-font"><a href="#">JAVASCRIPT</a></h3>
                  <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Lorem ipsum dolor </h2>
                </div>
              </div>
              <div class="xl:w-1/5 md:w-1/2 p-4">
                <div class="bg-gray-100 p-6 rounded-lg">  
                  <img id="myImg" class="h-40 rounded w-full object-cover object-center mb-6 MyImg" src="../prototype/assets/php.png"  alt="content">
                  <!-- The Modal -->
                  <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img01">
                    <div id="caption"></div>
                  </div>
                  
                  <h3 class="tracking-widest text-green-500 text-xs font-medium title-font"><a href="#">PHP</a></h3>
                  <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Lorem ipsum dolor</h2>
                </div>
              </div>

              <div class="xl:w-1/5 md:w-1/2 p-4">
                <div class="bg-gray-100 p-6 rounded-lg">
                  <img id="myImg" class="h-40 rounded w-full object-cover object-center mb-6 MyImg" src="../prototype/assets/bootstrap.png" alt="content">
                  <!-- The Modal -->
                  <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img01">
                    <div id="caption"></div>
                  </div>
      
                  <h3 class="tracking-widest text-green-500 text-xs font-medium title-font"><a href="#">BOOTSTRAP</a></h3>
                  <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Lorem ipsum dolor</h2>
                </div>
              </div>

              <div class="xl:w-1/5 md:w-1/2 p-4">
                <div class="bg-gray-100 p-6 rounded-lg">
                  <img id="myImg" class="h-40 rounded w-full object-cover object-center mb-6 MyImg" src="../prototype/assets/mysql.png"  alt="content">
                  <!-- The Modal -->
                  <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img01">
                    <div id="caption"></div>
                  </div>
      
                  <h3 class="tracking-widest text-green-500 text-xs font-medium title-font"><a href="">MY SQL</a></h3>
                  <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Lorem ipsum dolor </h2>
                </div>
              </div>
              <div class="xl:w-1/5 md:w-1/2 p-4">
                <div class="bg-gray-100 p-6 rounded-lg">
                  <img id="myImg" class="h-40 rounded w-full object-cover object-center mb-6 MyImg" src="../prototype/assets/react.png" alt="content">
                  <!-- The Modal -->
                  <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img01">
                    <div id="caption"></div>
                  </div>
      
                  <h3 class="tracking-widest text-green-500 text-xs font-medium title-font"><a href="#">REACT</a></h3>
                  <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Lorem ipsum dolor</h2>
                </div>
              </div>
              <div class="xl:w-1/5 md:w-1/2 p-4">
                <div class="bg-gray-100 p-6 rounded-lg">
                  <img id="myImg" class="h-40 rounded w-full object-cover object-center mb-6 MyImg" src="../prototype/assets/Angular.png"  alt="content">
                  <!-- The Modal -->
                  <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img01">
                    <div id="caption"></div>
                  </div>
      
                  <h3 class="tracking-widest text-green-500 text-xs font-medium title-font"><a href="#">ANGULAR</a></h3>
                  <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Lorem ipsum dolor </h2>
                </div>
              </div>
              <div class="xl:w-1/5 md:w-1/2 p-4">
                <div class="bg-gray-100 p-6 rounded-lg">
                  <img id="myImg" class="h-40 rounded w-full object-cover object-center mb-6 MyImg" src="../prototype/assets/sass.png"  alt="content">
                  <!-- The Modal -->
                  <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img01">
                    <div id="caption"></div>
                  </div>
      
                  <h3 class="tracking-widest text-green-500 text-xs font-medium title-font"><a href="#">SASS CSS</a></h3>
                  <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Lorem ipsum dolor </h2>
                </div>
              </div>
              <div class="xl:w-1/5 md:w-1/2 p-4">
                <div class="bg-gray-100 p-6 rounded-lg">
                  <img id="myImg" class="h-40 rounded w-full object-cover object-center mb-6 MyImg" src="../prototype/assets/ruby.png"  alt="content">
                  <!-- The Modal -->
                  <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img01">
                    <div id="caption"></div>
                  </div>
      
                  <h3 class="tracking-widest text-green-500 text-xs font-medium title-font"><a href="#">RUBY</a></h3>
                  <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Lorem ipsum dolor </h2>
                </div>
              </div>


            <!-- Floating Button Menu -->
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a class="mr-5 transition duration-400 ease-out font-serif cursor-pointer" href="index.php">Home</a>
                <a class="mr-5 transition duration-400 ease-out font-serif cursor-pointer" href="aboutus.php">About</a>
                <a class="mr-5 transition duration-400 ease-out font-serif cursor-pointer" href="study.php">Study</a>
                <a class="mr-5 transition duration-400 ease-out font-serif cursor-pointer" href="exercises.php">Exercises</a>
                <a class="mr-5 transition duration-400 ease-out font-serif cursor-pointer" href="learningpath.php">Learning Path</a>
                <a class="mr-5 transition duration-400 ease-out font-serif cursor-pointer" href="contact.php">Contact</a>
                <a class="mr-5 transition duration-400 ease-out font-serif cursor-pointer" href="#">Top</a>
              </div>
              <a class="float">
                <span style="font-size:20px;cursor:pointer" onclick="openNav()"><i class="fa fa-plus my-float"></i></span>
              </a>
            </a>
           </div>
          </div>
        </section>





        <footer class="text-gray-600 body-font">
          <div class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
            <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
              <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900 hover:text-green-500" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" 
                     stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-green-600 rounded-full" viewBox="0 0 24 24">
                </svg>
                <span class="ml-3 text-xl">NGODING.COM</span>
              </a>
              <p class="mt-2 text-sm text-gray-500">"Great Computing Starts With Coding"</p>
            </div>
            <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
              <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                <nav class="list-none mb-10">
                  <li>
                    <a class="text-gray-600 hover:text-gray-800">First Link</a>
                  </li>
                  <li>
                    <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                  </li>
                  <li>
                    <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                  </li>
                  <li>
                    <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                  </li>
                </nav>
              </div>
              <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                <nav class="list-none mb-10">
                  <li>
                    <a class="text-gray-600 hover:text-gray-800">First Link</a>
                  </li>
                  <li>
                    <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                  </li>
                  <li>
                    <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                  </li>
                  <li>
                    <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                  </li>
                </nav>
              </div>
              <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                <nav class="list-none mb-10">
                  <li>
                    <a class="text-gray-600 hover:text-gray-800">First Link</a>
                  </li>
                  <li>
                    <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                  </li>
                  <li>
                    <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                  </li>
                  <li>
                    <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                  </li>
                </nav>
              </div>
              <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                <nav class="list-none mb-10">
                  <li>
                    <a class="text-gray-600 hover:text-gray-800">First Link</a>
                  </li>
                  <li>
                    <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                  </li>
                  <li>
                    <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                  </li>
                  <li>
                    <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                  </li>
                </nav>
              </div>
            </div>
          </div>
          <div class="bg-gray-100">
            <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
              <p class="text-gray-500 text-sm text-center sm:text-left">© 2021 Ngoding.com —
                <a href="https://www.instagram.com/anddianaa/" rel="noopener noreferrer" class="text-gray-600 ml-1" target="_blank">@ngoding.com</a>
              </p>
              <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
                <a class="text-gray-500 hover:text-green-500">
                  <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                  </svg>
                </a>
                <a class="ml-3 text-gray-500 hover:text-green-500">
                  <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                  </svg>
                </a>
                <a class="ml-3 text-gray-500 hover:text-green-500">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                    <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                  </svg>
                </a>
                <a class="ml-3 text-gray-500 hover:text-green-500">
                  <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                    <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                    <circle cx="4" cy="4" r="2" stroke="none"></circle>
                  </svg>
                </a>
              </span>
            </div>
          </div>
        </footer>


  <!-- Javascript -->
  <script src="../prototype/js/script.js"></script>
      
  <!-- <a href="https://www.freepik.com/vectors/background">Background vector created by freepik - www.freepik.com</a> -->
</body>
</html>
