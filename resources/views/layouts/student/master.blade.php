<html>
<head>
    <title>App Name - @yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .nunito {
            font-family: 'nunito', font-sans;
        }

        .border-b-1 {
            border-bottom-width: 1px;
        }

        .border-l-1 {
            border-left-width: 1px;
        }

        hover\:border-none:hover {
            border-style: none;
        }

        #sidebar {
            transition: ease-in-out all .3s;
            z-index: 9999;
        }

        #sidebar span {
            opacity: 0;
            position: absolute;
            transition: ease-in-out all .1s;
        }

        #sidebar:hover {
            width: 150px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            /*shadow-2xl*/
        }

        #sidebar:hover span {
            opacity: 1;
        }
    </style>
</head>
<body class="flex h-screen bg-gray-100 font-sans">
<!-- start sidebar navigation menu -->
<div id="sidebar" class="h-screen w-16 menu bg-white text-white px-4 flex items-center nunito static fixed shadow">
    <ul class="list-reset ">
        <li class="my-2 md:my-0">
            <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
                <i class="fas fa-home fa-fw mr-3"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">Home</span>
            </a>
        </li>
        <li class="my-2 md:my-0 ">
            <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
                <i class="fas fa-tasks fa-fw mr-3"></i><span
                        class="w-full inline-block pb-1 md:pb-0 text-sm">Tasks</span>
            </a>
        </li>
        <li class="my-2 md:my-0">
            <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
                <i class="fa fa-envelope fa-fw mr-3"></i><span
                        class="w-full inline-block pb-1 md:pb-0 text-sm">Messages</span>
            </a>
        </li>
        <li class="my-2 md:my-0">
            <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
                <i class="fas fa-chart-area fa-fw mr-3 text-indigo-400"></i><span
                        class="w-full inline-block pb-1 md:pb-0 text-sm">Analytics</span>
            </a>
        </li>
        <li class="my-2 md:my-0">
            <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
                <i class="fa fa-wallet fa-fw mr-3"></i><span
                        class="w-full inline-block pb-1 md:pb-0 text-sm">Payments</span>
            </a>
        </li>
    </ul>
</div>
<!-- end sidebar navigation menu -->
<!-- start content -->
<div class="flex flex-row flex-wrap flex-1 flex-grow content-start pl-16">
    <div class="h-40 lg:h-20 w-full flex flex-wrap">
        <nav id="header" class="bg-gray-200 w-full lg:max-w-sm flex items-center border-b-1 border-gray-300 order-2 lg:order-1">
            <div class="px-2 w-full">
                @section('sidebar_header')
                @show
            </div>
        </nav>
        <nav id="header1" class="bg-gray-100 w-auto flex-1 border-b-1 border-gray-300 order-1 lg:order-2">
            <div class="flex h-full justify-between items-center">
                <!-- start global search control -->
                <div class="relative w-full max-w-3xl px-6">
                    <div class="absolute h-10 mt-1 left-0 top-0 flex items-center pl-10">
                        <svg class="h-4 w-4 fill-current text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
                        </svg>
                    </div>
                    <input id="search-toggle" type="search" placeholder="search" class="block w-full bg-gray-200 focus:outline-none focus:bg-white focus:shadow-md text-gray-700 font-bold rounded-full pl-12 pr-4 py-3" onkeyup="updateSearchResults(this.value);">
                </div>
                <!-- end global search control -->
                <!-- start user profile menu -->
                <div class="flex relative inline-block pr-6">
                    <div class="relative text-sm">
                        <button id="userButton" class="flex items-center focus:outline-none mr-3">
                            <img class="w-8 h-8 rounded-full mr-4" src="http://i.pravatar.cc/300" alt="Avatar of User"> <span class="hidden md:inline-block">Hi, User </span>
                            <svg class="pl-2 h-2" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129">
                                <g>
                                    <path d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z"></path>
                                </g>
                            </svg>
                        </button>
                        <div id="userMenu" class="bg-white nunito rounded shadow-md mt-2 absolute mt-12 top-0 right-0 min-w-full overflow-auto z-30 invisible">
                            <ul class="list-reset">
                                <li><a href="#" class="px-4 py-2 block text-gray-900 hover:bg-indigo-400 hover:text-white no-underline hover:no-underline">My account</a></li>
                                <li><a href="#" class="px-4 py-2 block text-gray-900 hover:bg-indigo-400 hover:text-white no-underline hover:no-underline">Notifications</a></li>
                                <li>
                                    <hr class="border-t mx-2 border-gray-400">
                                </li>
                                <li><a href="#" class="px-4 py-2 block text-gray-900 hover:bg-indigo-400 hover:text-white no-underline hover:no-underline">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end user profile menu -->
            </div>
        </nav>
    </div>
    <!-- start the specific route content -->
    <div id="dash-content" class="bg-gray-200 py-6 lg:py-0 w-full lg:max-w-sm flex flex-wrap content-start">
        @section('sidebar')
        <div class="w-1/2 lg:w-full h-screen px-2">
            @show
        </div>
    </div>
    <div id="main-content" class="w-full flex-1">
        <div class="flex flex-1 flex-wrap">
            <div class="w-full xl:w-2/3 p-6 xl:max-w-6xl">
                @yield('content')
            </div>
        </div>
    </div>
</div>
<!-- end content -->
<!-- start script for toggle user menu -->
<script>
  var userMenuDiv = document.getElementById("userMenu");
  var userMenu = document.getElementById("userButton");
  document.onclick = check;
  function check(e) {
    var target = (e && e.target) || (event && event.srcElement);
    //User Menu
    if (!checkParent(target, userMenuDiv)) {
      // click NOT on the menu
      if (checkParent(target, userMenu)) {
        // click on the link
        if (userMenuDiv.classList.contains("invisible")) {
          userMenuDiv.classList.remove("invisible");
        } else {
          userMenuDiv.classList.add("invisible");
        }
      } else {
        // click both outside link and outside menu, hide menu
        userMenuDiv.classList.add("invisible");
      }
    }
  }
  function checkParent(t, elm) {
    while (t.parentNode) {
      if (t == elm) {
        return true;
      }
      t = t.parentNode;
    }
    return false;
  }
</script>
<!-- end script for toggle user menu -->
</body>
</html>