<?php
session_start();

// Retrieve the stored results from session variables
$result1 = isset($_SESSION['result1']) ? $_SESSION['result1'] : array();
$result2 = isset($_SESSION['result2']) ? $_SESSION['result2'] : array();
$result3 = isset($_SESSION['result3']) ? $_SESSION['result3'] : array();

// Clear the session variables
unset($_SESSION['result1']);
unset($_SESSION['result2']);
unset($_SESSION['result3']);
?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Three Phase Short Circuit Fault Calculator</title>



    <!-- links -->
    <link rel="icon" type="image/x-icon" href="public/img/favicon.ico">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="dist/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="body min-h-screen font-['Poppins']">

    <!-- HEADER -->
    <header class="bg-white text-gray-600 sticky top-0 z-50 rounded-b-2xl shadow-xl">
        <section class="max-w-7xl mx-auto p-3 pt-4 flex justify-between items-center">
            <div class="flex">
                <a href="/" class="flex-shrink-0 flex items-center">
                    <img class="h-14 w-14 rounded-full" src="public/img/logo.png" alt="SLD-LOGO">
                    <span class="text-gray-600 sm:text-2xl ml-2 font-bold text-md">3 Phase Short Circuit Fault Calculator</span>
                </a>
            </div>
            <div>
                <button id="hamburger" class="text-3xl lg:hidden focus:outline-none">
                    ☰
                </button>
                <nav class="hidden lg:block space-x-8 text-normal" aria-label="main">
                    <a href="#" class="hover:opacity-90">Outputs</a>
                    <a href="#table" class="hover:opacity-90">Calculations</a>
                    <a href="#" class="hover:opacity-90">Contacts</a>
                    <a href="#" class="hover:opacity-90">About Us</a>
                </nav>
            </div>
        </section>
    </header>

    <!-- END HEADER -->

    <!-- MAIN START -->
    <main class="max-w-7xl mx-auto">

        <!-- START OF LANDING PAGE -->
        <section class="mt-10 px-4" id="first">
            <div>
                <h1 class="font-semibold text-gray-600 text-4xl mb-2"><span class="text-yellow-300">Th</span>ree Phase Short Circuit Fault Calculator</h1>
                <p class="text-base text-justify">
                    The Three Phase Short Circuit Fault Calculator is a convenient online tool for quickly and
                    accurately calculating short circuit faults in three-phase electrical systems. It helps engineers
                    and technicians input system parameters to obtain crucial information like fault current and
                    duration, aiding in system design and maintenance for enhanced safety and reliability.
                </p>
            </div>

            <form method="POST" action="include/function.php">
                <div class="mt-4 grid gap-4 sm:flex sm:justify-center">

                    <!-- Transformer 1 -->

                    <div class="bg-gray-100 sm:w-1/3 px-4 py-4 shadow-md w-full">
                        <h1 class="text-xl font-semibold">Transformer 1</h1>

                        <div class="mt-4">
                            <label for="volts" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                                an option</label>
                            <select id="volts1" name="voltage_T1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                <option value="" disabled selected>Choose a Voltage</option>
                                <option value="204">204</option>
                                <option value="240">240</option>
                                <option value="480">480</option>
                                <option value="600">600</option>
                            </select>
                        </div>

                        <div class="mt-4">
                            <label for="kva" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">kVA
                                (1-750)</label>
                            <input type="number" id="kva1" name="kva_T1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>

                        <div class="mt-4">
                            <label for="%z" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">%Z</label>
                            <input type="number" name="z_T1" step="0.0001" id="%z1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="0" readonly>
                        </div>

                        <div class="mt-4">
                            <label for="%z2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">FLA for Three Phase Motors</label>
                            <input type="number" name="hp1" step="0.0001" id="hp1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="0" readonly>
                        </div>
                    </div>

                    <!-- Transformer 2 -->

                    <div class="bg-gray-100 sm:w-1/3 px-4 py-4 shadow-md w-full">
                        <h1 class="text-xl font-semibold">Transformer 2</h1>

                        <div class="mt-4">
                            <label for="volts" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                                an option</label>
                            <select id="volts2" name="voltage_T2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                <option value="" disabled selected>Choose a Voltage</option>
                                <option value="204">204</option>
                                <option value="240">240</option>
                                <option value="480">480</option>
                                <option value="600">600</option>
                            </select>
                        </div>

                        <div class="mt-4">
                            <label for="kva2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">kVA
                                (1-750)</label>
                            <input type="number" id="kva2" name="kva_T2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>

                        <div class="mt-4">
                            <label for="%z2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">%Z</label>
                            <input type="number" name="z_T2" step="0.0001" id="%z2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="0" readonly>
                        </div>

                        <div class="mt-4">
                            <label for="%z2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">FLA for Three Phase Motors</label>
                            <input type="number" name="hp2" step="0.0001" id="hp2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="0" readonly>
                        </div>
                    </div>

                    <!-- Transformer 3 -->

                    <div class="bg-gray-100 sm:w-1/3 px-4 py-4 shadow-md w-full">
                        <h1 class="text-xl font-semibold">Transformer 3</h1>

                        <div class="mt-4">
                            <label for="volts" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                                an option</label>
                            <select id="volts3" name="voltage_T3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                <option value="" disabled selected>Choose a Voltage</option>
                                <option value="204">204</option>
                                <option value="240">240</option>
                                <option value="480">480</option>
                                <option value="600">600</option>
                            </select>
                        </div>

                        <div class="mt-4">
                            <label for="kva3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">kVA
                                (1-750)</label>
                            <input type="number" id="kva3" name="kva_T3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>

                        <div class="mt-4">
                            <label for="%z3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">%Z</label>
                            <input type="number" name="z_T3" step="0.0001" id="%z3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="0" readonly>
                        </div>

                        <div class="mt-4">
                            <label for="%z2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">FLA for Three Phase Motors</label>
                            <input type="number" name="hp3" step="0.0001" id="hp3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="0" readonly>
                        </div>
                    </div>
                </div>
                <div class="mx-auto w-1/2 flex justify-center items-center mt-6 sm:mt-20">
                    <button type="submit" onclick="event.preventDefault(); showValue()" class="py-2.5 px-5 mr-2 mb-2 text-md font-medium w-full sm:w-1/2 text-gray-50 focus:outline-none bg-yellow-300 rounded-lg border border-gray-200 hover:bg-yellow-500 focus:z-10 focus:ring-4 focus:ring-gray-200">Simulate</button>
                </div>
            </form>
        </section>


        <hr class="mx-auto border-transparent w-1/2 h-1" id="isca">
        <hr class="mx-auto border-transparent w-1/2 h-1">
        <hr class="mx-auto bg-gray-600 w-10/12 sm:1/2 h-1 mt-32">
        <section id="sld" class="px-4">

            <div class="items-center justify-center mx-auto w-full sm:mt-20 mt-5" id="svgContainer">
                <h1 class="text-2xl text-gray-600 font-semibold sm:-mb-20">Single-line Diagram</h1>
                <svg id="ePuBUMqD8wp1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1732 900" shape-rendering="geometricPrecision" text-rendering="geometricPrecision">
                    <g transform="translate(.000001 0.000001)">
                        <g transform="matrix(.183996 0 0-.221421-240.781026 1258.910721)">
                            <g>
                                <g clip-path="url(#ePuBUMqD8wp23)">
                                    <g>
                                        <path d="M4582,4897l144-289l144,289" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M4726,4608v-577h-1732v-577" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M2676.0488,3442.7109c1.5406-43.8796,38.3606-78.2024,82.2403-76.6621c43.8796,1.5406,78.2024,38.3606,76.6621,82.2403" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M2836.0488,3448.7109c1.5406-43.8796,38.3606-78.2024,82.2403-76.6621c43.8796,1.5406,78.2024,38.3606,76.6621,82.2403" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M2995.0488,3451.7109c1.5406-43.8796,38.3606-78.2024,82.2403-76.6621c43.8796,1.5406,78.2024,38.3606,76.6621,82.2403" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M3155.0488,3454.7109c1.5406-43.8796,38.3606-78.2024,82.2403-76.6621c43.8796,1.5406,78.2024,38.3606,76.6621,82.2403" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M2842,3264.5c0,43.9067-35.5933,79.5-79.5,79.5s-79.5-35.5933-79.5-79.5" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M3002,3264.5c0,43.9067-35.5933,79.5-79.5,79.5s-79.5-35.5933-79.5-79.5" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M3161,3267.5c0,43.9067-35.5933,79.5-79.5,79.5s-79.5-35.5933-79.5-79.5" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M3321,3269.5c0,43.9067-35.5933,79.5-79.5,79.5s-79.5-35.5933-79.5-79.5" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M3002,3264v-577h-578" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M3002,2687h1443" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M3579,2687v-578" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M4445,2687v-578" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M2713,2687v-578" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M2916,1907.5c0,111.8377-90.6623,202.5-202.5,202.5-111.8376,0-202.5-90.6623-202.5-202.5s90.6624-202.5,202.5-202.5c111.8377,0,202.5,90.6623,202.5,202.5" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                    </g>
                                    <clipPath id="ePuBUMqD8wp23">
                                        <path d="M273,0h9927v5493h-9927L273,0" />
                                    </clipPath>
                                </g>
                            </g>
                            <g>
                                <g clip-path="url(#ePuBUMqD8wp30)">
                                    <g>
                                        <text dx="0" dy="0" font-family="&quot;Arial&quot;" font-size="201.572" font-weight="400" transform="matrix(1 0 0-1 2587 1837)">
                                            <tspan x="0" y="0" font-family="&quot;Arial&quot;" font-size="201.572" font-weight="400" font-style="normal">
                                                <![CDATA[
M1
]]>
                                            </tspan>
                                        </text>
                                    </g>
                                    <clipPath id="ePuBUMqD8wp30">
                                        <path d="M273,0h9927v5493h-9927L273,0" />
                                    </clipPath>
                                </g>
                            </g>
                            <g>
                                <g clip-path="url(#ePuBUMqD8wp89)">
                                    <g>
                                        <path d="M4726,4031h3521" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M5592,4031v-577" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M5273.0488,3445.7109c1.5406-43.8796,38.3609-78.2024,82.2403-76.6621c43.8794,1.5406,78.2021,38.3606,76.6621,82.2403" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M5433.0488,3451.7109c1.5406-43.8796,38.3609-78.2024,82.2403-76.6621c43.8794,1.5406,78.2021,38.3606,76.6621,82.2403" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M5593.0488,3454.7109c1.5406-43.8796,38.3609-78.2024,82.2403-76.6621c43.8794,1.5406,78.2021,38.3606,76.6621,82.2403" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M5752.0488,3456.7109c1.5406-43.8796,38.3609-78.2024,82.2403-76.6621c43.8794,1.5406,78.2021,38.3606,76.6621,82.2403" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M5439,3267.5c0,43.9067-35.5933,79.5-79.5,79.5s-79.5-35.5933-79.5-79.5" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M5599,3267.5c0,43.9067-35.5933,79.5-79.5,79.5s-79.5-35.5933-79.5-79.5" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M5759,3269.5c0,43.9067-35.5933,79.5-79.5,79.5s-79.5-35.5933-79.5-79.5" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M5919,3272.5c0,43.9067-35.5933,79.5-79.5,79.5s-79.5-35.5933-79.5-79.5" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M5599,3267v-578h-289v-577" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M5599,2689h1443" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M6176,2689v-577" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M6379,1910.5c0,111.8377-90.6621,202.5-202.5,202.5s-202.5-90.6623-202.5-202.5s90.6621-202.5,202.5-202.5s202.5,90.6623,202.5,202.5" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <text dx="0" dy="0" font-family="&quot;Arial&quot;" font-size="201.572" font-weight="400" transform="matrix(1 0 0-1 6046 1832)">
                                            <tspan x="0" y="0" font-family="&quot;Arial&quot;" font-size="201.572" font-weight="400" font-style="normal">
                                                <![CDATA[
M2
]]>
                                            </tspan>
                                        </text>
                                        <path d="M7042,2689v-577" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M8247,4031v-577" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M7928.0488,3445.7109c1.5406-43.8796,38.3609-78.2024,82.2403-76.6621c43.8794,1.5406,78.2021,38.3606,76.6621,82.2403" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M8088.0488,3451.7109c1.5406-43.8796,38.3609-78.2024,82.2403-76.6621c43.8798,1.5406,78.2021,38.3606,76.6621,82.2403" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M8248.0488,3454.7109c1.5401-43.8796,38.3604-78.2024,82.2403-76.6621c43.8798,1.5406,78.2021,38.3606,76.6621,82.2403" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M8407.0488,3456.7109c1.5401-43.8796,38.3604-78.2024,82.2403-76.6621c43.8798,1.5406,78.2021,38.3606,76.6621,82.2403" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M8094,3267.5c0,43.9067-35.5933,79.5-79.5,79.5s-79.5-35.5933-79.5-79.5" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M8254,3267.5c0,43.9067-35.5937,79.5-79.5,79.5-43.9067,0-79.5-35.5933-79.5-79.5" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M8414,3269.5c0,43.9067-35.5937,79.5-79.5,79.5-43.9062,0-79.5-35.5933-79.5-79.5" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M8574,3272.5c0,43.9067-35.5937,79.5-79.5,79.5-43.9062,0-79.5-35.5933-79.5-79.5" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M8254,3267v-578h-346v-577" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M8254,2689h289" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M8773,2689v-577" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M8976,1910.5c0,111.8377-90.6621,202.5-202.5,202.5s-202.5-90.6623-202.5-202.5s90.6621-202.5,202.5-202.5s202.5,90.6623,202.5,202.5" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <text dx="0" dy="0" font-family="&quot;Arial&quot;" font-size="201.572" font-weight="400" transform="matrix(1 0 0-1 8643 1836)">
                                            <tspan x="0" y="0" font-family="&quot;Arial&quot;" font-size="201.572" font-weight="400" font-style="normal">
                                                <![CDATA[
M3
]]>
                                            </tspan>
                                        </text>
                                        <path d="M8543,2689h1096v-577" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <text dx="0" dy="0" font-family="&quot;Arial&quot;" font-size="0.201" font-weight="400" transform="matrix(1 0 0-1 2330 3458)">
                                            <tspan x="0" y="0" font-family="&quot;Arial&quot;" font-size="0.201" font-weight="400" font-style="normal">
                                                <![CDATA[
T1
]]>
                                            </tspan>
                                        </text>
                                        <text dx="0" dy="0" font-family="&quot;Arial&quot;" font-size="161.257" font-weight="400" transform="matrix(1 0 0-1 2460 3308)">
                                            <tspan x="0" y="0" font-family="&quot;Arial&quot;" font-size="161.257" font-weight="400" font-style="normal">
                                                <![CDATA[
T1
]]>
                                            </tspan>
                                        </text>
                                        <text dx="0" dy="0" font-family="&quot;Arial&quot;" font-size="161.257" font-weight="400" transform="matrix(1 0 0-1 5068 3311)">
                                            <tspan x="0" y="0" font-family="&quot;Arial&quot;" font-size="161.257" font-weight="400" font-style="normal">
                                                <![CDATA[
T2
]]>
                                            </tspan>
                                        </text>
                                        <text dx="0" dy="0" font-family="&quot;Arial&quot;" font-size="161.257" font-weight="400" transform="matrix(1 0 0-1 7722 3311)">
                                            <tspan x="0" y="0" font-family="&quot;Arial&quot;" font-size="161.257" font-weight="400" font-style="normal">
                                                <![CDATA[
T3
]]>
                                            </tspan>
                                        </text>
                                        <path d="M2424,2687h-577v-578" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M1963,1763l-231,346h231v-346h-231v346" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M3694,1763l-231,346h231v-346h-231v346" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M4560,1763l-231,346h231v-346h-231v346" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M5426,1766l-231,346h231v-346h-231v346" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M7157,1766l-230,346h230v-346h-230v346" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M8023,1763l-231,346h231v-346h-231v346" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <path d="M9755,1763l-231,346h231v-346h-231v346" fill="none" stroke="#000" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <text dx="0" dy="0" font-family="&quot;Arial&quot;" font-size="0.201" font-weight="400" transform="matrix(1 0 0-1 7877 4887)">
                                            <tspan x="0" y="0" font-family="&quot;Arial&quot;" font-size="0.201" font-weight="400" font-style="normal">
                                                <![CDATA[
LEGEND
]]>
                                            </tspan>
                                        </text>
                                        <path d="M7060,4502l-115,173h115v-173h-115v173" fill="none" stroke="#000" stroke-width="6" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" />
                                        <text dx="0" dy="0" font-family="&quot;Arial&quot;" font-size="112.88" font-weight="400" transform="matrix(1 0 0-1 7084 4548)">
                                            <tspan x="0" y="0" font-family="&quot;Arial&quot;" font-size="112.88" font-weight="400" font-style="normal">
                                                <![CDATA[
- NON-MOTOR LOADS
]]>
                                            </tspan>
                                        </text>
                                    </g>
                                    <clipPath id="ePuBUMqD8wp89">
                                        <path d="M273,0h9927v5493h-9927L273,0" />
                                    </clipPath>
                                </g>
                            </g>
                        </g>
                        <g id="x-mark" class="hidden">
                            <line x1="-10.213904" y1="-12.455495" x2="10.213904" y2="12.455495" transform="translate(311.574966 587.61704)" fill="none" stroke="#f00" stroke-width="3" />
                            <line x1="-10.213904" y1="12.455495" x2="10.213904" y2="-12.455495" transform="translate(311.574966 587.61704)" fill="none" stroke="#f00" stroke-width="3" />
                            <line x1="-10.213904" y1="-12.455495" x2="10.213904" y2="12.455495" transform="translate(789.596574 575.161545)" fill="none" stroke="#f00" stroke-width="3" />
                            <line x1="-10.213904" y1="12.455495" x2="10.213904" y2="-12.455495" transform="translate(789.596574 575.161545)" fill="none" stroke="#f00" stroke-width="3" />
                            <line x1="-10.213904" y1="-12.455495" x2="10.213904" y2="12.455495" transform="translate(1278.105954 575.161545)" fill="none" stroke="#f00" stroke-width="3" />
                            <line x1="-10.213904" y1="12.455495" x2="10.213904" y2="-12.455495" transform="translate(1278.105954 575.161545)" fill="none" stroke="#f00" stroke-width="3" />
                            <line x1="-10.213904" y1="-12.455495" x2="10.213904" y2="12.455495" transform="translate(99.151584 727.38961)" fill="none" stroke="#f00" stroke-width="3" />
                            <line x1="-10.213904" y1="12.455495" x2="10.213904" y2="-12.455495" transform="translate(99.151584 727.38961)" fill="none" stroke="#f00" stroke-width="3" />
                            <line x1="-10.213904" y1="-12.455495" x2="10.213904" y2="12.455495" transform="translate(258.49212 727.389611)" fill="none" stroke="#f00" stroke-width="3" />
                            <line x1="-10.213904" y1="-12.455495" x2="10.213904" y2="12.455495" transform="translate(417.64866 727.38961)" fill="none" stroke="#f00" stroke-width="3" />
                            <line x1="-10.213904" y1="-12.455495" x2="10.213904" y2="12.455495" transform="translate(576.989196 727.38961)" fill="none" stroke="#f00" stroke-width="3" />
                            <line x1="-10.213904" y1="-12.455495" x2="10.213904" y2="12.455495" transform="translate(736.329732 727.943163)" fill="none" stroke="#f00" stroke-width="3" />
                            <line x1="-10.213904" y1="-12.455495" x2="10.213904" y2="12.455495" transform="translate(895.670268 727.943163)" fill="none" stroke="#f00" stroke-width="3" />
                            <line x1="-10.213904" y1="-12.455495" x2="10.213904" y2="12.455495" transform="translate(1054.918806 727.38961)" fill="none" stroke="#f00" stroke-width="3" />
                            <line x1="-10.213904" y1="-12.455495" x2="10.213904" y2="12.455495" transform="translate(1214.167344 727.38961)" fill="none" stroke="#f00" stroke-width="3" />
                            <line x1="-10.213904" y1="-12.455495" x2="10.213904" y2="12.455495" transform="translate(1373.415882 727.38961)" fill="none" stroke="#f00" stroke-width="3" />
                            <line x1="-10.213904" y1="-12.455495" x2="10.213904" y2="12.455495" transform="translate(1532.756418 727.38961)" fill="none" stroke="#f00" stroke-width="3" />
                            <line x1="-10.213904" y1="12.455495" x2="10.213904" y2="-12.455495" transform="translate(1532.756418 727.38961)" fill="none" stroke="#f00" stroke-width="3" />
                            <line x1="-10.213904" y1="12.455495" x2="10.213904" y2="-12.455495" transform="translate(1373.415882 727.38961)" fill="none" stroke="#f00" stroke-width="3" />
                            <line x1="-10.213904" y1="12.455495" x2="10.213904" y2="-12.455495" transform="translate(1214.167344 727.38961)" fill="none" stroke="#f00" stroke-width="3" />
                            <line x1="-10.213904" y1="12.455495" x2="10.213904" y2="-12.455495" transform="translate(1054.918806 727.38961)" fill="none" stroke="#f00" stroke-width="3" />
                            <line x1="-10.213904" y1="12.455495" x2="10.213904" y2="-12.455495" transform="translate(895.670268 727.943163)" fill="none" stroke="#f00" stroke-width="3" />
                            <line x1="-10.213904" y1="12.455495" x2="10.213904" y2="-12.455495" transform="translate(736.329732 727.943163)" fill="none" stroke="#f00" stroke-width="3" />
                            <line x1="-10.213904" y1="12.455495" x2="10.213904" y2="-12.455495" transform="translate(576.989196 727.38961)" fill="none" stroke="#f00" stroke-width="3" />
                            <line x1="-10.213904" y1="12.455495" x2="10.213904" y2="-12.455495" transform="translate(417.64866 727.38961)" fill="none" stroke="#f00" stroke-width="3" />
                            <line x1="-10.213904" y1="12.455495" x2="10.213904" y2="-12.455495" transform="translate(258.49212 727.389611)" fill="none" stroke="#f00" stroke-width="3" />

                            <text dx="0" dy="0" font-family="&quot;ePuBUMqD8wp1:::Roboto&quot;" font-size="18" font-weight="700" transform="translate(321.78887 613.444747)" fill="#f00" stroke-width="0">
                                <tspan y="0" font-weight="700" stroke-width="0">
                                    <![CDATA[
Isca@F1 =
]]><?php echo isset($result1['FforTcable']) ? $result1['FforTcable'] . 'A' : '0A'; ?>
                                </tspan>
                            </text>
                            <text dx="0" dy="0" font-family="&quot;ePuBUMqD8wp1:::Roboto&quot;" font-size="18" font-weight="700" transform="translate(799.810478 600.701044)" fill="#f00" stroke-width="0">
                                <tspan y="0" font-weight="700" stroke-width="0">
                                    <![CDATA[
Isca@F6 =
]]><?php echo isset($result2['FforTcable']) ? $result2['FforTcable'] . 'A' : '0A'; ?>
                                </tspan>
                            </text>
                            <text dx="0" dy="0" font-family="&quot;ePuBUMqD8wp1:::Roboto&quot;" font-size="18" font-weight="700" transform="translate(1288.319858 600.675842)" fill="#f00" stroke-width="0">
                                <tspan y="0" font-weight="700" stroke-width="0">
                                    <![CDATA[
Isca@F10 =
]]><?php echo isset($result3['FforTcable']) ? $result3['FforTcable'] . 'A' : '0A'; ?>
                                </tspan>
                            </text>
                            <text dx="0" dy="0" font-family="&quot;ePuBUMqD8wp1:::Roboto&quot;" font-size="18" font-weight="700" transform="translate(1224.381248 753.45746)" fill="#f00" stroke-width="0">
                                <tspan y="0" font-weight="700" stroke-width="0">
                                    <![CDATA[
Isca@F11 =
]]><?php echo isset($result3['FforNMcable']) ? $result3['FforNMcable'] . 'A' : '0A'; ?>
                                </tspan>
                            </text>

                            <text dx="0" dy="0" font-family="&quot;ePuBUMqD8wp1:::Roboto&quot;" font-size="18" font-weight="700" transform="translate(1542.970322 753.855871)" fill="#f00" stroke-width="0">
                                <tspan y="0" font-weight="700" stroke-width="0">
                                    <![CDATA[
Isca@F13 =
]]><?php echo isset($result3['FforNMcable']) ? $result3['FforNMcable'] . 'A' : '0A'; ?>
                                </tspan>
                            </text>
                            <text dx="0" dy="0" font-family="&quot;ePuBUMqD8wp1:::Roboto&quot;" font-size="18" font-weight="700" transform="translate(1383.629786 753.745113)" fill="#f00" stroke-width="0">
                                <tspan y="0" font-weight="700" stroke-width="0">
                                    <![CDATA[
Isca@F12 =
]]><?php echo isset($result3['FforMcable']) ? $result3['FforMcable'] . 'A' : '0A'; ?>
                                </tspan>
                            </text>
                            <text dx="0" dy="0" font-family="&quot;ePuBUMqD8wp1:::Roboto&quot;" font-size="18" font-weight="700" transform="translate(109.365488 756.952685)" fill="#f00" stroke-width="0">
                                <tspan y="0" font-weight="700" stroke-width="0">
                                    <![CDATA[
Isca@F2 =
]]><?php echo isset($result1['FforNMcable']) ? $result1['FforNMcable'] . 'A' : '0A'; ?>
                                </tspan>
                            </text>
                            <text dx="0" dy="0" font-family="&quot;ePuBUMqD8wp1:::Roboto&quot;" font-size="18" font-weight="700" transform="translate(268.706024 753.966738)" fill="#f00" stroke-width="0">
                                <tspan y="0" font-weight="700" stroke-width="0">
                                    <![CDATA[
Isca@F3 =
]]><?php echo isset($result1['FforMcable']) ? $result1['FforMcable'] . 'A' : '0A'; ?>
                                </tspan>
                            </text>
                            <text dx="0" dy="0" font-family="&quot;ePuBUMqD8wp1:::Roboto&quot;" font-size="18" font-weight="700" transform="translate(427.862564 753.180532)" fill="#f00" stroke-width="0">
                                <tspan y="0" font-weight="700" stroke-width="0">
                                    <![CDATA[
Isca@F4 =
]]><?php echo isset($result1['FforNMcable']) ? $result1['FforNMcable'] . 'A' : '0A'; ?>
                                </tspan>
                            </text>
                            <text dx="0" dy="0" font-family="&quot;ePuBUMqD8wp1:::Roboto&quot;" font-size="18" font-weight="700" transform="translate(587.2031 753.734084)" fill="#f00" stroke-width="0">
                                <tspan y="0" font-weight="700" stroke-width="0">
                                    <![CDATA[
Isca@F5 =
]]><?php echo isset($result1['FforNMcable']) ? $result1['FforNMcable'] . 'A' : '0A'; ?>
                                </tspan>
                            </text>
                            <text dx="0" dy="0" font-family="&quot;ePuBUMqD8wp1:::Roboto&quot;" font-size="18" font-weight="700" transform="translate(746.543636 753.942451)" fill="#f00" stroke-width="0">
                                <tspan y="0" font-weight="700" stroke-width="0">
                                    <![CDATA[
Isca@F7 =
]]><?php echo isset($result2['FforNMcable']) ? $result2['FforNMcable'] . 'A' : '0A'; ?>
                                </tspan>
                            </text>
                            <text dx="0" dy="0" font-family="&quot;ePuBUMqD8wp1:::Roboto&quot;" font-size="18" font-weight="700" transform="translate(905.884172 753.942451)" fill="#f00" stroke-width="0">
                                <tspan y="0" font-weight="700" stroke-width="0">
                                    <![CDATA[
Isca@F8 =
]]><?php echo isset($result2['FforMcable']) ? $result2['FforMcable'] . 'A' : '0A'; ?>
                                </tspan>
                            </text>
                            <text dx="0" dy="0" font-family="&quot;ePuBUMqD8wp1:::Roboto&quot;" font-size="18" font-weight="700" transform="translate(1065.13271 753.942451)" fill="#f00" stroke-width="0">
                                <tspan y="0" font-weight="700" stroke-width="0">
                                    <![CDATA[
Isca@F9 =
]]><?php echo isset($result2['FforNMcable']) ? $result2['FforNMcable'] . 'A' : '0A'; ?>
                                </tspan>
                            </text>
                        </g>
                    </g>
                </svg>
            </div>

            <div class="flex justify-center items-center mt-20 w-1/2 mx-auto">
                <button id="downloadButton" class="hidden py-2.5 px-5 mr-2 mb-2 text-md font-medium w-full sm:w-1/2 text-gray-50 focus:outline-none bg-yellow-300 rounded-lg border border-gray-200 hover:bg-yellow-500 focus:z-10 focus:ring-4 focus:ring-gray-200"><i class="fa-solid fa-download"></i> Download as PNG</button>
            </div>
        </section>
        <hr class="mx-auto border-transparent w-1/2 h-1">
        <hr class="mx-auto border-transparent w-1/2 h-1">
        <hr class="mx-auto bg-gray-600 w-10/12 sm:1/2 h-1 mt-32">

        <section class="hidden mt-10" id="show-isca">
            <h1 class="font-semibold text-4xl text-gray-600 mb-10 px-10">ISCA Computed Results</h1>
            <div class="grid gap-32 text-center items-center justify-center sm:flex">

                <div>
                    <p class="text-xl font-semibold text-gray-600 mb-4">Transformer 1</p>
                    <label for="iscaT">Isca for F1</label>
                    <p class="font-serif text-2xl italic" id="iscaT">I<sub>sca@F1</sub> = <span id="check-value"><?php echo isset($result1['FforTcable']) ? $result1['FforTcable'] : 0; ?></span> </p>
                    <br>

                    <label for="iscaT">Isca for F2, F4, and F5</label>
                    <p class="font-serif text-2xl italic" id="iscaT">I<sub>sca@F2, F4 & F5</sub> = <?php echo isset($result1['FforNMcable']) ? $result1['FforNMcable'] : 0; ?></p>
                    <br>

                    <label for="iscaT">Isca for F3</label>
                    <p class="font-serif text-2xl italic" id="iscaT">I<sub>sca@F3</sub> = <?php echo isset($result1['FforMcable']) ? $result1['FforMcable'] : 0; ?></p>
                    <br>
                </div>

                <div>
                    <p class="text-xl font-semibold text-gray-600 mb-4">Transformer 2</p>
                    <label for="iscaT">Isca for F6</label>
                    <p class="font-serif text-2xl italic" id="iscaT">I<sub>sca@F6</sub> = <?php echo isset($result2['FforTcable']) ? $result2['FforTcable'] : 0; ?></p>
                    <br>

                    <label for="iscaT">Isca for F7 and F9</label>
                    <p class="font-serif text-2xl italic" id="iscaT">I<sub>sca@F7 & F9</sub> = <?php echo isset($result2['FforNMcable']) ? $result2['FforNMcable'] : 0; ?></p>
                    <br>

                    <label for="iscaT">Isca for F8</label>
                    <p class="font-serif text-2xl italic" id="iscaT">I<sub>sca@F8</sub> = <?php echo isset($result2['FforMcable']) ? $result2['FforMcable'] : 0; ?></p>
                    <br>
                </div>

                <div>
                    <p class="text-xl font-semibold text-gray-600 mb-4">Transformer 3</p>
                    <label for="iscaT">Isca for F10</label>
                    <p class="font-serif text-2xl italic" id="iscaT">I<sub>sca@F10</sub> = <?php echo isset($result3['FforTcable']) ? $result3['FforTcable'] : 0; ?></p>
                    <br>

                    <label for="iscaT">Isca for F11 and F13</label>
                    <p class="font-serif text-2xl italic" id="iscaT">I<sub>sca@F11 & F13</sub> = <?php echo isset($result3['FforNMcable']) ? $result3['FforNMcable'] : 0; ?></p>
                    <br>

                    <label for="iscaT">Isca for F12</label>
                    <p class="font-serif text-2xl italic" id="iscaT">I<sub>sca@F12</sub> = <?php echo isset($result3['FforMcable']) ? $result3['FforMcable'] : 0; ?></p>
                    <br>

                </div>
            </div>
            <hr class="mx-auto bg-gray-600 w-10/12 sm:1/2 h-1 mt-32">
        </section>


        <section class="px-4 mt-10" id="table">
            <div>
                <h1 class="text-2xl font-semibold text-gray-600">Output</h1>
            </div>

            <div class="mt-4">

                <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Systems
                    Recommendation</label>
                <textarea id="message" rows="10" class="block p-2.5 w-full text-normal text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="The system will automatically recommends..." readonly></textarea>
            </div>

            <div class="mt-4">
                <h1 class="text-2xl font-semibold text-gray-600">Tables</h1>
                <div class="relative overflow-x-auto mt-4 shadow-xl rounded-2xl">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Parameters
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Transformer 1
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Transformer 2
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Transformer 3
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    Ifla for T
                                </th>
                                <td class="px-6 py-4">
                                    <?php echo isset($result1['IflaforT']) ? $result1['IflaforT'] : 0; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo isset($result2['IflaforT']) ? $result2['IflaforT'] : 0; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo isset($result3['IflaforT']) ? $result3['IflaforT'] : 0; ?>
                                </td>
                            </tr>

                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    Multiplier for T
                                </th>
                                <td class="px-6 py-4">
                                    <?php echo isset($result1['MultiplierforT']) ? $result1['MultiplierforT'] : 0; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo isset($result2['MultiplierforT']) ? $result2['MultiplierforT'] : 0; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo isset($result3['MultiplierforT']) ? $result3['MultiplierforT'] : 0; ?>
                                </td>
                            </tr>


                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    Isca for T
                                </th>
                                <td class="px-6 py-4">
                                    <?php echo isset($result1['IflaforT']) ? $result1['IflaforT'] : 0; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo isset($result2['IflaforT']) ? $result2['IflaforT'] : 0; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo isset($result3['IflaforT']) ? $result3['IflaforT'] : 0; ?>
                                </td>
                            </tr>


                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    f for Tcable
                                </th>
                                <td class="px-6 py-4">
                                    <?php echo isset($result1['FforTcable']) ? $result1['FforTcable'] : 0; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo isset($result2['FforTcable']) ? $result2['FforTcable'] : 0; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo isset($result3['FforTcable']) ? $result3['FforTcable'] : 0; ?>
                                </td>
                            </tr>

                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    M for Tcable
                                </th>
                                <td class="px-6 py-4">
                                    <?php echo isset($result1['mforTcable']) ? $result1['mforTcable'] : 0; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo isset($result2['mforTcable']) ? $result2['mforTcable'] : 0; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo isset($result3['mforTcable']) ? $result3['mforTcable'] : 0; ?>
                                </td>
                            </tr>

                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    Isca for Tcable
                                </th>
                                <td class="px-6 py-4">
                                    <?php echo isset($result1['iscaforTcable']) ? $result1['iscaforTcable'] : 0; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo isset($result2['iscaforTcable']) ? $result2['iscaforTcable'] : 0; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo isset($result3['iscaforTcable']) ? $result3['iscaforTcable'] : 0; ?>
                                </td>
                            </tr>

                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    f for NMCable
                                </th>
                                <td class="px-6 py-4">
                                    <?php echo isset($result1['FforNMcable']) ? $result1['FforNMcable'] : 0; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo isset($result2['FforNMcable']) ? $result2['FforNMcable'] : 0; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo isset($result3['FforNMcable']) ? $result3['FforNMcable'] : 0; ?>
                                </td>
                            </tr>

                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    M for NMcable
                                </th>
                                <td class="px-6 py-4">
                                    <?php echo isset($result1['mforNMcable']) ? $result1['mforNMcable'] : 0; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo isset($result2['mforNMcable']) ? $result2['mforNMcable'] : 0; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo isset($result3['mforNMcable']) ? $result3['mforNMcable'] : 0; ?>
                                </td>
                            </tr>

                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    Isca for NM
                                </th>
                                <td class="px-6 py-4">
                                    <?php echo isset($result1['iscaforNM']) ? $result1['iscaforNM'] : 0; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo isset($result2['iscaforNM']) ? $result3['iscaforNM'] : 0; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo isset($result3['iscaforNM']) ? $result3['iscaforNM'] : 0; ?>
                                </td>
                            </tr>


                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    f for Mcable
                                </th>
                                <td class="px-6 py-4">
                                    <?php echo isset($result1['FforMcable']) ? $result1['FforMcable'] : 0; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo isset($result2['FforMcable']) ? $result2['FforMcable'] : 0; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo isset($result3['FforMcable']) ? $result3['FforMcable'] : 0; ?>
                                </td>
                            </tr>

                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    m for Mcable
                                </th>
                                <td class="px-6 py-4">
                                    <?php echo isset($result1['mforMcable']) ? $result1['mforMcable'] : 0; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo isset($result2['mforMcable']) ? $result2['mforMcable'] : 0; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo isset($result3['mforMcable']) ? $result3['mforMcable'] : 0; ?>
                                </td>
                            </tr>

                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    Imc
                                </th>
                                <td class="px-6 py-4">
                                    <?php echo isset($result1['imc']) ? $result1['imc'] : 0; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo isset($result2['imc']) ? $result2['imc'] : 0; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo isset($result3['imc']) ? $result3['imc'] : 0; ?>
                                </td>
                            </tr>

                            <tr class="bg-white">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    Isca for M
                                </th>
                                <td class="px-6 py-4">
                                    <?php echo isset($result1['iscaforM']) ? $result1['iscaforM'] : 0; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo isset($result2['iscaforM']) ? $result2['iscaforM'] : 0; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo isset($result3['iscaforM']) ? $result3['iscaforM'] : 0; ?>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- <section class="px-4 mt-10">
            <h1 class="text-2xl font-semibold text-gray-600">Calculations</h1>

        </section> -->
        <!-- END LANDING PAGE -->

        <button id="scroll-btn" onclick="scrollToBottom()" class="fixed bottom-4 right-4 rounded-full bg-yellow-300 text-white w-15 h-15 flex items-center justify-center mb-10 animate-bounce">
            <i class="fa-solid fa-angles-down w-16 h-10 mt-6"></i>
        </button>

        <script>
            function scrollToBottom() {
                window.scrollTo({
                    top: document.documentElement.scrollHeight,
                    behavior: "smooth"
                });
            }
        </script>

    </main>

    <footer class="bg-blue-500 rounded-lg shadow mt-20">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="/" class="flex items-center mb-4 sm:mb-0">
                    <img src="public/img/logo.png" class="h-8 mr-3" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Three Phase Short Circuit Fault Calculator</span>
                </a>
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-white sm:mb-0">
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6">Contact</a>
                    </li>
                    <li>
                        <a href="/" class="hover:underline">Home</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-white sm:mx-auto lg:my-8" />
            <span class="block text-sm text-white sm:text-center">© 2023 <a href="/" class="hover:underline">3 Phase Short Circuit Fault Calculator™</a>. All Rights Reserved.</span>
        </div>
    </footer>

    <!-- SCRIPT -->
    <script src="public/js/show-isca.js"></script>
    <script src="public/js/download-sld.js"></script>
    <script src="public/js/z-percentage.js"></script>
    <script src="public/js/hp-values.js"></script>
</body>

</html>