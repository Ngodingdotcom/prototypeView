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
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" 
                 stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-white p-2 bg-green-600 rounded-full" viewBox="0 0 24 24">
            </svg>
            <span class="ml-3 text-xl">Ngoding.com</span>
          </a>

          <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
            <a class="mr-7 transition duration-400 ease-out btnn" href="index.php">Home</a>
            <a class="mr-7 transition duration-400 ease-out btnn" href="study.php">Study</a>
            <a class="mr-7 transition duration-400 ease-out btnn" href="exercises.php">Exercises</a>
            <a class="mr-7 transition duration-400 ease-out btnn activee" href="#">Road Map</a>
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
    </header>

    <section class="text-gray-100 body-font bgup">

        <div>.</div>


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

    </section>





    <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
          <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" src="../prototype/assets/full-stack.jpg">
          <div class="text-center lg:w-2/3 w-full">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">FULL STACK DEVELOPER</h1>
            <p class="mb-8 leading-relaxed">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero voluptas soluta, aliquid accusamus fugiat, eligendi quis nobis aliquam temporibus deleniti, nam rerum sunt ratione debitis! Cum earum beatae possimus numquam.
          </div>
        </div>
      </section>





    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
          <div class="flex relative pt-10 pb-20 sm:items-center md:w-2/3 mx-auto">
            <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
              <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
            </div>
            <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-green-500 text-white relative z-10 title-font font-medium text-sm">1</div>
            <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
              <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">HTML</h2>
                <p class="leading-relaxed">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero voluptas soluta, aliquid accusamus fugiat.</p>
              </div>
            </div>
          </div>
          <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto">
            <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
              <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
            </div>
            <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-green-500 text-white relative z-10 title-font font-medium text-sm">2</div>
            <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
              <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">CSS</h2>
                <p class="leading-relaxed">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero voluptas soluta, aliquid accusamus fugiat.</p>
              </div>
            </div>
          </div>
          <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto">
            <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
              <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
            </div>
            <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-green-500 text-white relative z-10 title-font font-medium text-sm">3</div>
            <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
              <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">JAVASCRIPT</h2>
                <p class="leading-relaxed">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero voluptas soluta, aliquid accusamus fugiat.</p>
              </div>
            </div>
          </div>
          <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto">
            <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
              <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
            </div>
            <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-green-500 text-white relative z-10 title-font font-medium text-sm">4</div>
            <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
              <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">MYSQL</h2>
                <p class="leading-relaxed">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero voluptas soluta, aliquid accusamus fugiat.</p>
              </div>
            </div>
          </div>
          <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto">
            <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
              <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
            </div>
            <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-green-500 text-white relative z-10 title-font font-medium text-sm">5</div>
            <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
              <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">PHP</h2>
                <p class="leading-relaxed">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero voluptas soluta, aliquid accusamus fugiat.</p>
              </div>
            </div>
          </div>
          <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto">
            <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
              <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
            </div>
            <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-green-500 text-white relative z-10 title-font font-medium text-sm">6</div>
            <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
              <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">REACT</h2>
                <p class="leading-relaxed">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero voluptas soluta, aliquid accusamus fugiat.</p>
              </div>
            </div>
          </div>
          <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto">
            <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
              <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
            </div>
            <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-green-500 text-white relative z-10 title-font font-medium text-sm">7</div>
            <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
              <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">RUBY</h2>
                <p class="leading-relaxed">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero voluptas soluta, aliquid accusamus fugiat.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
  




      


    <section class="text-gray-600 body-font bgpi">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
          <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">FRONT END DEVELOPER
            </h1>
            <p class="mb-8 leading-relaxed">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci maiores quibusdam quis numquam. Ab enim praesentium ea natus, id a quibusdam voluptatum omnis vel necessitatibus deserunt fugit ipsa mollitia quae!</p>
          </div>
          <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
            <img class="object-cover object-center rounded" alt="hero" src="../prototype/assets/front-end.jpg">
          </div>
        </div>
      </section>




      

    <section class="text-gray-600 body-font bgpa">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
          <div class="flex relative pt-10 pb-20 sm:items-center md:w-2/3 mx-auto">
            <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
              <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
            </div>
            <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-green-500 text-white relative z-10 title-font font-medium text-sm">1</div>
            <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
              <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">HTML</h2>
                <p class="leading-relaxed">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero voluptas soluta, aliquid accusamus fugiat.</p>
              </div>
            </div>
          </div>
          <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto">
            <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
              <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
            </div>
            <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-green-500 text-white relative z-10 title-font font-medium text-sm">2</div>
            <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
              <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">CSS</h2>
                <p class="leading-relaxed">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero voluptas soluta, aliquid accusamus fugiat.</p>
              </div>
            </div>
          </div>
          <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto">
            <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
              <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
            </div>
            <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-green-500 text-white relative z-10 title-font font-medium text-sm">3</div>
            <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
              <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">SASS CSS</h2>
                <p class="leading-relaxed">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero voluptas soluta, aliquid accusamus fugiat.</p>
              </div>
            </div>
          </div>
          <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto">
            <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
              <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
            </div>
            <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-green-500 text-white relative z-10 title-font font-medium text-sm">4</div>
            <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
              <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">JAVASCRIPT</h2>
                <p class="leading-relaxed">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero voluptas soluta, aliquid accusamus fugiat.</p>
              </div>
            </div>
          </div>
          <div class="flex relative pb-10 sm:items-center md:w-2/3 mx-auto">
            <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
              <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
            </div>
            <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-green-500 text-white relative z-10 title-font font-medium text-sm">5</div>
            <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
              <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">BOOTSTRAP</h2>
                <p class="leading-relaxed">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero voluptas soluta, aliquid accusamus fugiat.</p>
              </div>
            </div>
          </div>
        </div>
      </section>





      <section class="text-gray-600 body-font bgpa">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
          <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
            <img class="object-cover object-center rounded" alt="hero" src="../prototype/assets/back-end.jpg">
          </div>
          <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">BACK END DEVELOPER
            </h1>
            <p class="mb-8 leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias doloremque enim officia voluptas tempore dolorum dignissimos quas debitis ad laborum quasi consectetur, molestiae aspernatur laboriosam, eaque accusamus alias? Est, adipisci..</p>
          </div>
        </div>
      </section>


      

      

    <section class="text-gray-600 body-font bgpii">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
          <div class="flex relative pt-10 pb-20 sm:items-center md:w-2/3 mx-auto">
            <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
              <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
            </div>
            <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-green-500 text-white relative z-10 title-font font-medium text-sm">1</div>
            <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
              <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">PHP</h2>
                <p class="leading-relaxed">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero voluptas soluta, aliquid accusamus fugiat.</p>
              </div>
            </div>
          </div>
          <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto">
            <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
              <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
            </div>
            <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-green-500 text-white relative z-10 title-font font-medium text-sm">2</div>
            <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
              <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">MYSQL</h2>
                <p class="leading-relaxed">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero voluptas soluta, aliquid accusamus fugiat.</p>
              </div>
            </div>
          </div>
          <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto">
            <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
              <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
            </div>
            <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-green-500 text-white relative z-10 title-font font-medium text-sm">3</div>
            <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
              <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">REACT</h2>
                <p class="leading-relaxed">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero voluptas soluta, aliquid accusamus fugiat.</p>
              </div>
            </div>
          </div>
          <div class="flex relative pb-10 sm:items-center md:w-2/3 mx-auto">
            <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
              <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
            </div>
            <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-green-500 text-white relative z-10 title-font font-medium text-sm">4</div>
            <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
              <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">ANGULAR</h2>
                <p class="leading-relaxed">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero voluptas soluta, aliquid accusamus fugiat.</p>
              </div>
            </div>
          </div>
          <div class="flex relative pb-10 sm:items-center md:w-2/3 mx-auto">
            <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
              <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
            </div>
            <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-green-500 text-white relative z-10 title-font font-medium text-sm">5</div>
            <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
              <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">RUBY</h2>
                <p class="leading-relaxed">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero voluptas soluta, aliquid accusamus fugiat.</p>
              </div>
            </div>
          </div>
        </div>
      </section>



      <section class="text-gray-600 body-font font-serif bgup">
        <div class="container px-5 py-24 mx-auto">
          <div class="lg:w-2/3 flex flex-col sm:flex-row sm:items-center items-start mx-auto">
            <h1 class="flex-grow sm:pr-16 text-2xl font-medium title-font text-gray-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, ea impedit illo dolorem..</h1> <button class="flex-shrink-0 text-white bg-green-700 border-0 py-2 px-8 focus:outline-none transition duration-500 ease-linear hover:bg-green-900 rounded text-lg mt-10 sm:mt-0"><a href="contact.php">Contact Us</a></button>
          </div>
        </div>
      </section>



        <footer class="text-gray-600 body-font">
          <div class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
            <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
              <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900 hover:text-green-500" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" 
                     stroke-width="2" class="w-10 h-10 text-white p-2 bg-green-600 rounded-full" viewBox="0 0 24 24">
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
