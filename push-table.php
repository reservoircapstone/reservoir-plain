<?php include('resources/views/layouts/header.php'); ?>

<title>Reservoir | Push Table</title>

<body class="bg-white font-Poppins">

    <?php include('resources/views/layouts/navigation-copy.php'); ?>
    <!-- table -->
    <button type="button" class="mt-11 ml-96 btn btn-blue hover:bg-reservoir-white hover:text-black"> Add Customer</button>
    <div class="ml-auto mr-auto mt-3 w-3/6 overflow-x-auto justify-center relative shadow-md sm:rounded-lg">
        <table class="w-3/6 text-sm text-center text-gray-500 dark:text-gray-400">
            <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                Push Customers
                <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Browse a list of Customers that ordered through push.</p>
            </caption>
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="p-4">
                        <div class="flex items-center">
                            <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-all-search" class="sr-only">checkbox</label>
                        </div>
                    </th>
                    <th scope="col" class="py-3 px-6 align-middle whitespace-nowrap">
                        Order No
                    </th>
                    <th scope="col" class="py-3 px-6 align-middle whitespace-nowrap">
                        Customer ID
                    </th>
                    <th scope="col" class="py-3 px-6 align-middle whitespace-nowrap">
                        Product
                    </th>
                    <th scope="col" class="py-3 px-6 align-middle whitespace-nowrap">
                        Quantity
                    </th>
                    <th scope="col" class="py-3 px-6 align-middle whitespace-nowrap">
                        Price
                    </th>
                    <th scope="col" class="py-3 px-6 align-middle whitespace-nowrap">
                        Mode of Payment
                    </th>
                    <th scope="col" class="py-3 px-6 align-middle whitespace-nowrap">
                        Date
                    </th>
                    <th scope="col" class="py-3 px-6 align-middle whitespace-nowrap">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="p-4 w-4">
                        <div class="flex items-center">
                            <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                        </div>
                    </td>
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        1
                    </th>
                    <td class="py-4 px-6">
                        1
                    </td>
                    <td class="py-4 px-6">
                        Alkaline
                    </td>
                    <td class="py-4 px-6">
                        2
                    </td>
                    <td class="py-4 px-6">
                        40PHP
                    </td>
                    <td class="py-4 px-6">
                        COD
                    </td>
                    <td class="py-4 px-6">
                        06/21/2022
                    </td>
                    <td class="flex items-center py-4 px-6 space-x-3">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</a>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="p-4 w-4">
                        <div class="flex items-center">
                            <input id="checkbox-table-search-2" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-table-search-2" class="sr-only">checkbox</label>
                        </div>
                    </td>
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        2
                    </th>
                    <td class="py-4 px-6">
                        2
                    </td>
                    <td class="py-4 px-6">
                        Purified
                    </td>
                    <td class="py-4 px-6">
                        3
                    </td>
                    <td class="py-4 px-6">
                        60PHP
                    </td>
                    <td class="py-4 px-6">
                        GCASH
                    </td>
                    <td class="py-4 px-6">
                        06/23/2022
                    </td>
                    <td class="flex items-center py-4 px-6 space-x-3">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</a>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="p-4 w-4">
                        <div class="flex items-center">
                            <input id="checkbox-table-search-3" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                        </div>
                    </td>
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        3
                    </th>
                    <td class="py-4 px-6">
                        3
                    </td>
                    <td class="py-4 px-6">
                        Mineral
                    </td>
                    <td class="py-4 px-6">
                        4
                    </td>
                    <td class="py-4 px-6">
                        100PHP
                    </td>
                    <td class="py-4 px-6">
                        Wallet
                    </td>
                    <td class="py-4 px-6">
                        06/24/2022
                    </td>
                    <td class="flex items-center py-4 px-6 space-x-3">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</a>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="p-4 w-4">
                        <div class="flex items-center">
                            <input id="checkbox-table-search-3" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                        </div>
                    </td>
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        4
                    </th>
                    <td class="py-4 px-6">
                        4
                    </td>
                    <td class="py-4 px-6">
                        Distilled
                    </td>
                    <td class="py-4 px-6">
                        2
                    </td>
                    <td class="py-4 px-6">
                        50PHP
                    </td>
                    <td class="py-4 px-6">
                        GCASH
                    </td>
                    <td class="py-4 px-6">
                        06/25/2022
                    </td>
                    <td class="flex items-center py-4 px-6 space-x-3">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php include('resources/views/layouts/footer.php'); ?>

</body>