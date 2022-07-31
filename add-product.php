<?php include('resources/views/layouts/header.php'); ?>

<body class="font-Poppins overflow-x-hidden">
    <?php include('resources/views/layouts/navigation.php'); ?>
    <div class="relative page-body mx-auto w-full h-full">
        <div class="px-11 flex relative py-[30px] font-Poppins">
            <div class="relative w-1/4 text-left pl-20 mx-auto">
                <h3 class="text-2xl">Add products<br>
                    <small class="text-slate-700 ml-7 text-sm">Reservoir 2022</small>
                </h3>
            </div>
        </div>
    </div>

    <!-- Product Form -->
    <div class="card py-0 px-[12px] h-auto w-[45%] bg-slate-100 rounded-lg drop-shadow-lg mx-auto">
        <div class="card-header w-[45%] py-3 pl-5">
            <div class="card-header-content mt-5">
                <h3 class="font-Poppins text-xl font-bold">General</h3>
            </div>
        </div>
        <div class="card-body p-[30px] w-full h-[750px] bg-slate-100">
            <style>
                .required:before {
                    content: " *";
                    color: red;
                }
            </style>
            <div class="form block">
                <form action="#">
                    <div class="form-group block bottom-1 mt-0 mx-0 mb-5 rounded-lg">
                        <label class="required block ml-3 bottom-11" for="Title">Title</label>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" required>
                    </div>
                    <div class="form-group block bottom-1 mt-0 mx-0 mb-5 rounded-lg">
                        <label for="type" class="required block ml-3 bottom-11">Select an option</label>
                        <select id="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Choose type</option>
                            <option value="alkalane">Alkaline</option>
                            <option value="mineral">Mineral</option>
                            <option value="purified">Purified</option>
                            <option value="distilled">Distilled</option>
                        </select>
                    </div>
                    <div class="form-group block bottom-1 mt-0 mx-0 mb-5 rounded-lg">
                        <label class="block ml-3 bottom-11" for="summary">Short Summary</label>
                        </style>
                        <textarea rows="1" cols="50" wrap="physical" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                    </div>
                    <div class="form-group block bottom-1 mt-0 mx-0 mb-5 rounded-lg">
                        <label class="required block ml-3 bottom-11" for="categories">Product Price</label>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" required>
                    </div>
                    <div class="form-group block bottom-1 mt-0 mx-0 mb-5 rounded-lg">
                        <label class="required block ml-3 bottom-11" for="categories">Status</label>
                        <div class="flex">
                            <div class="flex items-center mr-4">
                                <input id="inline-radio" type="radio" value="" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="inline-radio" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Enable</label>
                            </div>
                            <div class="flex items-center mr-4">
                                <input id="inline-2-radio" type="radio" value="" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="inline-2-radio" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Disable</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group block bottom-1 mt-0 mx-0 mb-5 rounded-lg">
                        <label class="block ml-3 bottom-11" for="categories">Product Upload</label>
                        <div class="flex justify-center items-center w-full">
                            <label for="dropzone-file" class="flex flex-col justify-center items-center w-full h-64 bg-gray-50 rounded-lg border-2 border-gray-300 border-dashed cursor-pointer dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div class="flex flex-col justify-center items-center pt-5 pb-6">
                                    <svg aria-hidden="true" class="mb-3 w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                                </div>
                                <input id="dropzone-file" type="file" class="hidden" />
                            </label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <footer class="bg-reservoir-blue py-4">
        <div class="container flex flex-col md:flex-row items-center">
            <div class="flex flex-1  flex-wrap  items-center justify-center md:justify-start  gap-12">
                <img class="w-8 h-8" src="resources/img/index-icon.png" alt="">
                <ul class="flex text-white uppercase gap-12 text-xs">
                    <li class="cursor-pointer">Copyright 2022 &copy; Reservoir all rights reserved.</li>
            </div>
            <div class="flex gap-10 mt-12 md:mt-0">
                <li class="list-none inline-block"><i class=" text-white text-2xl fa-brands fa-square-facebook"></i></li>
                <li class="list-none inline-block"><i class="text-white text-2xl fa-brands fa-twitter"></i></li>
            </div>
        </div>
    </footer>
</body>

</html>