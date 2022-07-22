<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RADA LOGISTICS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="<?php echo base_url() ?>/css/rada_style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/vue@next"></script>
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.0.0-alpha.1/axios.min.js" integrity="sha512-xIPqqrfvUAc/Cspuj7Bq0UtHNo/5qkdyngx6Vwt+tmbvTLDszzXM0G6c91LXmGrRx8KEPulT+AfOOez+TeVylg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="importmap">
      {
        "imports": {
          "vue": "https://unpkg.com/vue@3/dist/vue.esm-browser.js"
        }
      }
    </script>
</head>

<body>
    <div id="app">
        <nav id="header" class="relative w-full z-30 top-0 text-white bg-white shadow">

            <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">

                <div class="pl-4 flex items-center">
                    <a class="toggleColour no-underline hover:no-underline font-bold text-2xl lg:text-4xl text-gray-800" :href="url+'/home/'+default_language">
                        <!--Icon from: http://www.potlabicons.com/ -->

                        <img class="h-24 fill-current inline" src="<?php echo base_url() ?>/img/logos/rada.png">

                    </a>
                </div>

                <div class="block lg:hidden pr-4">
                    <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-white rounded-lg md:hidden bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                      <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                      <svg class="hidden w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>

                    </button>
                </div>

                <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 lg:bg-transparent text-black p-4 lg:p-0 z-20 bg-white" id="mobile-menu-2">
                    <ul class="list-reset lg:flex justify-end flex-1 items-center bebas-font">
                        <li class="mr-3" v-for="option in info.menu">
                            <a class="inline-block py-2 px-4 text-black font-bold no-underline" :href="url+'/'+option.link+'/'+default_language">{{option.name}}</a>
                        </li>

                        <li class="mr-3">
                            <a v-on:click="change_lang(default_language)" class="inline-block no-underline hover:text-gray-800 hover:text-underline py-2 px-4 text-red-rada" href="#"><i class="fa-solid fa-globe"></i> {{default_language}}</a>
                        </li>
                    </ul>

                </div>
            </div>

            <hr class="border-b border-gray-100 opacity-25 my-0 py-0">
        </nav>
