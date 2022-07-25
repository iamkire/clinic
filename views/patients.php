<?php
include '../bootstrap.php';
Secure::session();
?>
<header>
    <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-12 sm:px-6 lg:px-8 bg-gray-100">
        <div class="sm:justify-between sm:items-center sm:flex">
            <div class="text-center sm:text-left">
                <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl">
                    Welcome Back!
                </h1>
                <p class="mt-1.5 text-sm text-gray-500">
                    Dashboard
                </p>
            </div>

            <div class="flex flex-col gap-4 mt-4 sm:flex-row sm:mt-0 sm:items-center">


                <button
                    class="block px-5 py-3 text-sm font-medium text-white transition bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring"
                    type="button"
                >
                    Create Post
                </button>
            </div>
        </div>
    </div>
</header>
<div class="overflow-x-auto">
    <table class="min-w-full text-sm border border-gray-100 divide-y-2 divide-gray-200">
        <thead>
        <tr class="divide-x divide-gray-100">
            <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Name</th>
            <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Date of Birth</th>
            <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Role</th>
            <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Salary</th>
        </tr>
        </thead>

        <tbody class="divide-y divide-gray-200">
        <tr class="divide-x divide-gray-100">
            <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">John Doe</td>
            <td class="px-4 py-2 text-gray-700 whitespace-nowrap">24/05/1995</td>
            <td class="px-4 py-2 text-gray-700 whitespace-nowrap">Web Developer</td>
            <td class="px-4 py-2 text-gray-700 whitespace-nowrap">$120,000</td>
        </tr>

        <tr class="divide-x divide-gray-100">
            <td class="px-4 py-2 font-medium whitespace-nowrap">Jane Doe</td>
            <td class="px-4 py-2 text-gray-700 whitespace-nowrap">04/11/1980</td>
            <td class="px-4 py-2 text-gray-700 whitespace-nowrap">Web Designer</td>
            <td class="px-4 py-2 text-gray-700 whitespace-nowrap">$100,000</td>
        </tr>

        <tr class="divide-x divide-gray-100">
            <td class="px-4 py-2 font-medium whitespace-nowrap">Gary Barlow</td>
            <td class="px-4 py-2 text-gray-700 whitespace-nowrap">24/05/1995</td>
            <td class="px-4 py-2 text-gray-700 whitespace-nowrap">Singer</td>
            <td class="px-4 py-2 text-gray-700 whitespace-nowrap">$20,000</td>
        </tr>
        </tbody>
    </table>
</div>