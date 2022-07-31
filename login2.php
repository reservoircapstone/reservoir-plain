<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/app.css" rel="stylesheet">
    <!-- flowbite -->
    <script src="./node_modules/flowbite/dist/flowbite.js"></script>

    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body class="bg-white font-Poppins">


    <div class="2xl:container h-screen m-auto">
        <div hidden class="fixed inset-0 w-7/12 lg:block">
            <video class="w-screen h-full object-cover" autoplay="autoplay" loop="true" muted defaultmuted playsinline>
                <source src="./resources/videos/video.mp4" type="video/mp4" />
            </video>
        </div>
        <div hidden role="hidden" class="fixed inset-0 w-6/12 ml-auto bg-white bg-opacity-70 backdrop-blur-xl lg:block"></div>
        <div class="relative h-full ml-auto lg:w-6/12">
            <div class="m-auto content-center py-12 px-6 sm:p-20 xl:w-10/12">
                <div class="mt-4">
                    <a href="">
                        <span class="font-sans text-5xl">Reservoir</span>
                        <img src="./resources/img/logo.png" class="w-14 float-left" alt="Reservoir logo">
                    </a><br><br><br>
                    <p class="font-medium text-lg text-gray-600">Welcome to Reservoir ! Login first</p>
                </div>

                <div class="mt-12 grid gap-6 sm:grid-cols-2">
                    <button class="py-3 px-6 rounded-xl bg-blue-50 hover:bg-blue-100 focus:bg-blue-100 active:bg-blue-200">
                        <div class="flex gap-4 justify-center">
                            <img src="./resources/icons/google.svg" class="w-5" alt="">
                            <span class="block w-max font-medium tracking-wide text-sm text-blue-700">with Google</span>
                        </div>
                    </button>
                    <button class="py-3 px-6 rounded-xl bg-gray-900 transition hover:bg-gray-800 active:bg-gray-600 focus:bg-gray-700">
                        <div class="flex gap-4 items-center justify-center text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5" viewBox="0 0 16 16">
                                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                            </svg>
                            <span class="block w-max font-medium tracking-wide text-sm text-white">with Github</span>
                        </div>
                    </button>
                </div>

                <div role="hidden" class="mt-12 border-t">
                    <span class="block w-max mx-auto -mt-3 px-4 text-center text-gray-500 bg-white">Or</span>
                </div>

                <form action="" class="space-y-6 py-6">
                    <div>
                        <input type="email" placeholder="Your Email" class="w-full py-3 px-6 ring-1 ring-gray-300 rounded-xl placeholder-gray-600 bg-transparent transition disabled:ring-gray-200 disabled:bg-gray-100 disabled:placeholder-gray-400 invalid:ring-red-400 focus:invalid:outline-none">
                    </div>

                    <div class="flex flex-col items-end">
                        <input type="password" placeholder="Your Password" class="w-full py-3 px-6 ring-1 ring-gray-300 rounded-xl placeholder-gray-600 bg-transparent transition disabled:ring-gray-200 disabled:bg-gray-100 disabled:placeholder-gray-400 invalid:ring-red-400 focus:invalid:outline-none">
                        <button type="reset" class="w-max p-3 -mr-3">
                            <span class="text-sm tracking-wide text-blue-600">Forgot password ?</span>
                        </button>
                    </div>

                    <div>
                        <button class="w-full px-6 py-3 rounded-xl bg-sky-500 transition hover:bg-sky-600 focus:bg-sky-600 active:bg-sky-800">
                            <span class="font-semibold text-white text-lg">Login</span>
                        </button>
                        <a href="#" type="reset" class="w-max p-3 -ml-3">
                            <span class="text-sm tracking-wide text-blue-600">Create new account</span>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>