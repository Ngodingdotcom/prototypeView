<?php
  include 'includes/autoloader.inc.php';
  $user_prop = new Users();
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
            <a class="mr-7 transition duration-400 ease-out btnn" href="aboutus.php">About</a>
          </nav>

          <button class="inline-flex mr-3 items-center bg-green-400  border-0 py-1 px-3 focus:outline-none text-white hover:bg-green-600 rounded text-base mt-4 md:mt-0 transition duration-500 ease-out"><a href="login.php">Switch</a>
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </button>
          <button class="inline-flex items-center bg-green-500  border-0 py-1 px-3 focus:outline-none text-white hover:bg-green-600 rounded text-base mt-4 md:mt-0 transition duration-500 ease-out"><a href="signup.php">Dark Mode</a>
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </button>
        </div>
    </header>

    <section class="text-gray-100 body-font bgup">

        <div>.</div>

    </section>

    <?php
        $data = $user_prop->getAll("identity");
    ?>
    
    <!-- Account  -->
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Firstname
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Lastname
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Nickname
                    </th>
                    <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                    </tr>
                </thead>
                <?php foreach($data as $row):?>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                            <div class="ml-4">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    <?php echo $row['id'];?>
                                </span>
                            </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900"><?php echo $row['first_name'];?></div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">
                                <?php echo $row['last_name'];?>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <?php echo $row['nickname'];?>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                        </td>
                    </tr>

                    <!-- More items... -->
                </tbody>
                <?php endforeach;?>
                </table>
            </div>
            </div>
        </div>
    </div>

        

        <footer class="text-gray-600 body-font">
          <div class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
            <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
              <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900 hover:text-green-500" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-green-500 rounded-full" viewBox="0 0 24 24">
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
