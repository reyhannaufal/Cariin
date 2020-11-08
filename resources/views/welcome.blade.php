<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;800&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/main.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script>
        var cont = 0;

        function loopSlider() {
            var xx = setInterval(function() {
                switch (cont) {
                    case 0: {
                        $("#slider-1").fadeOut(400);
                        $("#slider-2").delay(400).fadeIn(400);
                        $("#sButton1").removeClass("bg-purple-800");
                        $("#sButton2").addClass("bg-purple-800");
                        cont = 1;

                        break;
                    }
                    case 1: {

                        $("#slider-2").fadeOut(400);
                        $("#slider-1").delay(400).fadeIn(400);
                        $("#sButton2").removeClass("bg-purple-800");
                        $("#sButton1").addClass("bg-purple-800");

                        cont = 0;

                        break;
                    }


                }
            }, 8000);

        }

        function reinitLoop(time) {
            clearInterval(xx);
            setTimeout(loopSlider(), time);
        }



        function sliderButton1() {

            $("#slider-2").fadeOut(400);
            $("#slider-1").delay(400).fadeIn(400);
            $("#sButton2").removeClass("bg-purple-800");
            $("#sButton1").addClass("bg-purple-800");
            reinitLoop(4000);
            cont = 0

        }

        function sliderButton2() {
            $("#slider-1").fadeOut(400);
            $("#slider-2").delay(400).fadeIn(400);
            $("#sButton1").removeClass("bg-purple-800");
            $("#sButton2").addClass("bg-purple-800");
            reinitLoop(4000);
            cont = 1

        }

        $(window).ready(function() {
            $("#slider-2").hide();
            $("#sButton1").addClass("bg-purple-800");


            loopSlider();






        });
    </script>

    <style>
        body {
            background-color: #ffff;
            font-family: 'Montserrat';
            font-weight: 600;
        }

        .title {
            font-family: 'Montserrat';
            font-size: 2rem;
            font-weight: 800;
        }
    </style>
</head>

<body class="text-black">
    <!-- header -->
    <nav>
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href="#">
                        <h1 class="title">Cariin</h1>
                    </a>
                </li>
                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="#" class="hover:text-gray-300">Lomba</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="#" class="hover:text-gray-300">Tentang Kami</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="#" class="hover:text-gray-300">Hubungi Kami</a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center">
                <div class="relative mt-3 md:mt-0">
                    <input type="text" class="bg-gray-300 text-sm rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline" placeholder="Search">
                    <div class="absolute top-0">
                        <svg class="fill-current w-4 text-gray-500 mt-2 ml-2" viewBox="0 0 24 24">
                            <path class="heroicon-ui" d="M16.32 14.9l5.39 5.4a1 1 0 01-1.42 1.4l-5.38-5.38a8 8 0 111.41-1.41zM10 16a6 6 0 100-12 6 6 0 000 12z" /></svg>
                    </div>
                </div>
                <div class="md:ml-4 mt-3 md:mt-0">
                    <a href="#">
                        <!-- Profile Account -->
                        <!-- <img src="/img/avatar.jpg" alt="avatar" class="rounded-full w-8 h-8"> -->
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- slider -->
    <div class="sliderAx h-auto">
        <div id="slider-1" class="container mx-auto">
            <div class="bg-cover bg-center  h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://images.unsplash.com/photo-1544427920-c49ccfb85579?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1422&q=80)">
                <div class="md:w-1/2">
                    <p class="font-bold text-sm uppercase">Lomba Terpopuler</p>
                    <p class="text-3xl font-bold">Quadrathlon 2020</p>
                    <p class="mb-10 leading-none">Quadrathlon merupakan lomba yang khusus di TC</p>
                    <a href="#" class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Hubungi Kami</a>
                </div>
            </div> <!-- container -->
            <br>
        </div>

        <div id="slider-2" class="container mx-auto">
            <div class="bg-cover bg-center  h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://images.unsplash.com/photo-1544427920-c49ccfb85579?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1422&q=80)">
                <div class="md:w-1/2">
                    <p class="font-bold text-sm uppercase">Lomba Terpopuler</p>
                    <p class="text-3xl font-bold">Quadrathlon 2020</p>
                    <p class="mb-10 leading-none">Quadrathlon merupakan lomba yang khusus di TC</p>
                    <a href="#" class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Hubungi Kami</a>
                </div>
            </div> <!-- container -->
            <br>
        </div>
    </div>
    <!-- slider-button -->
    <div class="flex justify-between w-12 mx-auto pb-2">
        <button id="sButton1" onclick="sliderButton1()" class="bg-purple-400 rounded-full w-4 pb-2 "></button>
        <button id="sButton2" onclick="sliderButton2() " class="bg-purple-400 rounded-full w-4 p-2"></button>
    </div>

    <section class="py-10 mb-0">
        <div class="container mx-auto">
            <div>
                <h1 class="text-2xl bg-grey ont-black text-gray-900 pb-6 px-6 md:px-12 text-center">
                    <mark>Lomba Terkini</mark>
                </h1>
            </div>
            <div class="flex flex-wrap px-6">
                <div class="w-full lg:w-1/2   md:px-4 lg:px-6 py-5">
                    <div class="bg-white hover:shadow-xl">
                        <div class="">
                            <img src="https://images.pexels.com/photos/956999/milky-way-starry-sky-night-sky-star-956999.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" class="h-56 w-full border-white border-8 hover:opacity-25">
                        </div>
                        <div class="px-4 py-4 md:px-10">
                            <h1 class="font-bold text-lg">
                                Quadrathlon
                            </h1>
                            <p class="py-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi quas sapiente
                                voluptate
                                earum natus facilis dolor deserunt dolorum tempora obcaecati consequatur rem, vel
                                distinctio
                                perferendis tempore nemo sequi eos accusantium.
                            </p>
                            <div class="flex flex-wrap pt-8">
                                <div class="w-full md:w-1/3 text-sm font-medium">
                                    NOVEMBER 1,2019
                                </div>
                                <div class="2/3">
                                    <div class="text-sm font-medium">
                                        SHARE:
                                        <a href="" class="text-blue-700 px-1 ">
                                            FACEBOOk
                                        </a>
                                        <a href="" class="text-blue-500 px-1 ">
                                            TWITTER
                                        </a>
                                        <a href="" class="text-red-600 px-1 ">
                                            GOOGLE+
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2  md:px-4 lg:px-6 py-5">
                    <div class="bg-white hover:shadow-xl">
                        <div class="">
                            <img src="https://images.pexels.com/photos/952670/pexels-photo-952670.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="h-56 w-full border-white border-8 hover:opacity-25">
                        </div>
                        <div class="px-4 py-4 md:px-10">
                            <h1 class="font-bold text-lg">
                                Quadrathlon
                            </h1>
                            <p class="py-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi quas sapiente
                                voluptate
                                earum natus facilis dolor deserunt dolorum tempora obcaecati consequatur rem, vel
                                distinctio
                                perferendis tempore nemo sequi eos accusantium.
                            </p>
                            <div class="flex flex-wrap pt-8">
                                <div class="w-full md:w-1/3 text-sm font-medium">
                                    NOVEMBER 1,2019
                                </div>
                                <div class="md:2/3">
                                    <div class="text-sm font-medium">
                                        SHARE:
                                        <a href="" class="text-blue-700 px-1 ">
                                            FACEBOOk
                                        </a>
                                        <a href="" class="text-blue-500 px-1 ">
                                            TWITTER
                                        </a>
                                        <a href="" class="text-red-600 px-1 ">
                                            GOOGLE+
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    @yield('content')
</body>

</html>

<!-- component -->