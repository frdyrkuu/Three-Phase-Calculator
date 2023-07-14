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

    <link rel="stylesheet" href="dist/output.css">
</head>

<body class="body min-h-screen font-['Poppins']">

    <!-- HEADER -->
    <header class="bg-white text-gray-600 sticky top-0 z-50 rounded-b-2xl shadow-xl">
        <section class="max-w-7xl mx-auto p-4 pt-8 flex justify-between items-center">
            <h1 class="text-2xl font-semibold">
                <a href="index.php"><span class="text-yellow-300">Th</span>ree Phase Short Circuit Fault Calculator</a>
            </h1>
            <div>
                <button id="hamburger" class="text-3xl sm:hidden focus:outline-none">
                    ☰
                </button>
                <nav class="hidden sm:block space-x-8 text-normal" aria-label="main">
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
        <section class="mt-10 px-4">
            <div>
                <h1 class="font-semibold text-gray-600 text-xl mb-2">Three Phase Short Circuit Fault Calculator</h1>
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
                <div class="mx-auto w-1/2 flex justify-center items-center mt-6">
                    <button type="submit" class="py-2.5 px-5 mr-2 mb-2 text-md font-medium w-full sm:w-1/2 text-gray-50 focus:outline-none bg-yellow-300 rounded-lg border border-gray-200 hover:bg-yellow-500 focus:z-10 focus:ring-4 focus:ring-gray-200">Simulate</button>
                </div>
                <div class="items-center justify-center mx-auto">
                    <h1 class="text-2xl gray-600 font-semibold">Single-line Diagram</h1>
                    <!-- <img class="w-full sm:w-3/4 mx-auto shadow" src="public/img/sld.png" alt="sld"> -->
                    <svg id="eKNX9cSzmiV1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 651 456" shape-rendering="geometricPrecision" text-rendering="geometricPrecision">
                        <g transform="matrix(.1 0 0-.1 0 456)">
                            <path d="M2961,3607c-1-4,26-61,59-127l60-120v-250-250h-625-625l-2-266-3-267-26-20c-24-17-30-18-55-6-17,8-30,24-32,37-4,26-22,30-22,4s-31-52-62-52c-25,0-50,21-61,50-4,12-6,11-6-2-2-50,81-76,119-38l20,20l28-20c33-24,74-19,96,11c13,19,13,19,31-1c24-26,79-27,102-1c16,20,17,20,41,0c14-10,36-19,49-19c28,0,73,41,73,67-1,11-6,5-15-14-24-56-107-55-121,2l-6,25-17-32c-14-29-21-33-56-33-62,0-65,11-65,298v247h811h810l-3-261c-3-244-4-262-22-275-40-29-106-6-106,37c0,8-9,0-19-18-11-17-29-34-42-38-29-9-66,12-78,44-7,18-10,21-10,8-1-26,44-67,74-67c14,0,36,10,48,23c21,21,23,21,40,5c23-24,79-23,101,1c18,20,18,20,39,0c27-25,72-24,97,1l21,21l26-21c14-11,33-20,43-20c27,0,70,39,70,63-1,18-3,16-15-10-17-40-55-52-90-29-14,9-25,25-25,36s-4,20-10,20c-5,0-10-8-10-18c0-46-72-69-103-34-15,16-17,50-17,275v257h805h805v-253c0-286-3-297-66-297-28,0-38,6-54,33-13,21-20,26-20,15c0-25-36-58-61-58-12,0-34,14-51,32-27,29-28,29-17,6c11-26,46-48,75-48c8,0,26,11,39,24c23,23,24,23,41,5c23-25,76-25,99,1c17,19,18,19,43,0c31-25,62-25,93-1c24,19,25,19,48,0c43-35,101-15,116,41c6,22,4,21-14-7-35-55-92-55-116,0-9,19-14,25-15,15c0-26-36-58-65-58-14,0-34,9-45,20-19,19-20,33-20,283v262h-998-997l-3,242-2,243l60,120c33,66,60,125,59,132c0,7-27-40-60-104-32-65-61-118-64-118s-32,53-64,118c-33,64-60,114-60,109Z" />
                            <path d="M3642,2270c-12-5-25-16-28-24-5-12-9-11-25,5-25,25-80,25-103,0-17-19-18-19-37,0-24,24-70,24-99,1-23-18-24-18-42,0-36,36-119,9-117-39c0-14,2-15,6-3c11,30,37,50,63,50c27,0,60-27,60-48c0-7,5-12,10-12c6,0,10,6,10,13c0,21,34,47,62,47c49,0,58-24,58-161-1-113-2-122-15-99-19,34-19,19,1-23c15-31,15-36,0-65-20-38-21-56-1-22c13,23,14,16,15-82v-108h-125-125l-1-112c0-62,0-173,1-245l1-133h-50-51v-154-155l105-3l106-3-3,155-3,155-47,3-48,3v105c0,58,3,103,8,101c4-3,7,12,7,33s-3,36-7,33c-5-2-8,43-8,101v106h370h369v-244-243l-34-6c-112-18-171-158-111-261c35-61,92-89,166-84c157,11,222,188,111,299-21,21-51,41-67,44-16,4-35,8-41,11-9,2-13,33-13,109c0,59,3,104,8,102c4-3,7,12,7,33s-3,36-7,33c-5-2-8,43-8,101v106h245h245v-107c-1-99-2-106-15-83-18,32-19,17-1-18c9-18,14-67,15-149l2-123h-51-50v-154-155l105-3l106-3-3,155-3,155-47,3-48,3v107c1,101,2,105,16,80c8-16,19-28,24-28c6,0,10,12,9,28l-1,27-7-25c-7-24-7-24-20,8-7,17-11,43-9,57c3,13,1,22-3,19-5-3-9,46-9,108v113h-497-498l-2,110c-2,103-2,108,13,83c20-38,29-36,9,2-8,16-15,36-15,45s7,29,15,45c20,38,11,40-9,3-14-26-15-20-16,97c0,145,9,170,64,170c34,0,66-25,66-51c0-8,9,0,19,18c34,54,84,52,115-5c10-17,15-21,16-11c1,43-62,77-108,59ZM3310,1070c0-71-3-135-6-144-5-13-23-16-95-16h-89v129c0,71,3,136,6,144c4,12,24,16,95,16h89v-129Zm1250-6c0-74-2-134-4-134s-41,56-86,125c-46,69-85,123-87,121-3-2,31-58,74-123c44-65,83-124,87-130c5-10-14-13-83-13h-91v129c0,71,3,136,6,144c4,12,24,16,95,16h89v-135Zm-513,109c84-40,115-159,61-240-91-137-308-72-308,92c0,125,131,204,247,148Z" />
                            <path d="M3135,1170c16-29,148-225,158-235c16-16,0,9-76,125-63,95-104,150-82,110Z" />
                            <path d="M3872,1023c1-67,1-67,7-18l6,50l16-44c8-25,20-46,25-48c6-2,17,18,26,44l16,48l1-47c1-27,6-48,11-48c13,0,13,117,0,125-9,6-18-10-45-80-6-17-10-12-24,29-26,75-41,71-39-11Z" />
                            <path d="M4027,1079c-9-6-17-15-17-21c0-7,5-6,15,2c16,13,45,7,45-10c0-5-12-20-26-33-14-12-30-30-35-39-9-16-5-18,38-16c37,1,40,2,16,5-39,5-42,15-8,37c46,30,19,101-28,75Z" />
                            <path d="M5256,2259c-25-20-28-20-45-5-25,23-88,21-103-3-12-19-12-19-36,0-32,25-74,24-97-1-17-19-18-19-43,0-35,28-76,26-101-6-12-15-21-32-21-38c1-6,7,1,16,16c27,51,107,46,120-7l6-25l17,32c17,35,37,44,76,34c34-9,47-61,43-181-3-100-3-100-20-70-22,38-23,24-2-17c9-17,14-41,11-54-2-13,0-21,5-18s7-41,6-103l-3-108-122-3-122-3-3-112c-3-111-3-112-20-82-22,38-23,24-2-17c9-17,14-41,11-54-2-13,0-21,5-18s7-41,6-103l-3-108-47-3-48-3v-155-154h105h105v155v155h-50-50v107c0,98,1,105,15,87c15-17,15-16,1,11-10,21-14,69-15,158l-2,127h246h245v-107c-1-97-2-106-15-89-8,11-15,24-15,30c0,5-2,7-5,4s2-22,11-42c17-34,17-38,0-72-9-20-14-39-11-42s5-1,5,4c0,6,7,19,15,30c13,17,14,8,15-89c0-78-3-109-12-111-7-3-26-7-42-11-41-9-101-72-116-122-33-110,51-223,167-223c140,0,223,131,162,257-22,46-87,93-127,93-21,0-22,4-22,108c1,98,2,105,15,82c20-35,19-18-2,25-16,33-16,37,0,73c14,29,14,33,2,18-14-18-15-11-15,82v102h245h245v-107c-1-97-2-106-15-89-8,11-15,24-15,30c0,5-2,7-5,4s2-22,11-42c17-34,17-38,1-71-22-46-21-59,1-20c17,30,17,30,20-69c1-55,0-106-2-113-4-8-23-13-53-13h-48l3-155l3-155h104h105v155v155h-50-50v108c1,98,2,105,15,82c20-35,19-18-2,25-16,33-16,37,0,73c14,29,14,33,2,18-14-18-15-10-15,87v107h-375-375v108c1,98,2,105,15,82c19-32,19-17,1,18-10,19-15,69-15,171-1,122,1,147,15,162c31,35,104,16,104-27c0-8,5-14,10-14c6,0,10,9,10,20s11,27,25,36c35,23,73,11,90-29c12-26,14-28,15-10c0,24-43,63-70,63-10,0-29-9-44-21ZM4940,1055c0-74-2-135-4-135s-41,56-86,125c-46,69-85,123-87,121-3-2,31-58,74-123c44-65,83-124,87-130c5-10-14-13-83-13h-91v129c0,71,3,136,6,145c5,13,23,16,95,16h89v-135Zm490,113c58-40,75-72,75-142c0-53-4-68-28-99-15-20-42-44-59-53-45-23-134-15-177,16-36,25-70,89-71,132c0,49,31,109,73,139c53,38,136,41,187,7Zm510-113c0-74-2-135-4-135s-41,56-86,125c-46,69-85,123-87,121-3-2,31-58,74-123c44-65,83-124,87-130c5-10-14-13-83-13h-91v129c0,71,3,136,6,145c5,13,23,16,95,16h89v-135Z" />
                            <path d="M5240,1025c0-71,19-92,21-22l1,42l15-42c8-24,18-43,23-43s15,19,23,43l15,42l1-42c1-24,6-43,11-43c7,0,10,24,8,63-2,35-7,61-13,59-5-1-17-23-26-50-14-39-18-44-24-27-41,108-55,113-55,20Z" />
                            <path d="M5395,1074c-9-9-13-19-9-23c4-3,9,0,11,7c6,15,43,16,43,1c0-7-8-18-17-25-16-12-16-13-2-14c23,0,31-26,13-41-11-9-18-9-26-1-18,18-32,14-18-4c8-8,25-14,39-12c24,3,26,7,27,51c1,67-27,95-61,61Z" />
                            <path d="M1585,2245c-14-13-25-32-25-42c0-12,6-8,20,15c11,18,27,35,35,38c30,12,66-6,80-39c8-19,14-25,15-14c0,25,36,57,64,57c15,0,33-11,45-26c19-24,21-40,21-148-1-113-2-119-16-93-22,41-27,32-5-11c19-37,19-38,0-75-22-42-17-51,5-9c14,25,15,20,16-85v-113h-500-500v-111c0-77-3-108-11-103-8,4-8,0,0-15c9-17,8-29-9-61-23-45-19-56,4-12c14,25,15,20,16-85v-113h-50-50v-155-155h105h105v155v155h-50-51l2,128c1,87,6,136,15,154c18,35,17,50-1,18-13-23-14-16-15,83v107h245h246l-2-122c-1-99-5-130-20-160-22-43-17-52,5-10c14,25,15,20,16-85c0-107-1-113-20-113-32,0-96-37-118-67-11-16-25-47-31-71-34-125,90-247,218-212c113,30,167,159,109,261-24,43-89,89-127,89-21,0-22,2-20,128c1,87,6,136,15,154c18,35,17,50-1,18-13-23-14-16-15,83v107h496h495l-2-122c-1-97-6-131-21-160-21-44-16-52,6-10c14,25,15,20,16-85v-113h-50-50v-155-155h105h105v155v155h-50-51l2,128c1,87,6,136,15,154c18,35,17,50-1,18-13-23-14-16-15,83v107h245h245v-112c-1-106-2-111-16-85-22,41-27,32-5-11c19-37,19-38,0-75-22-42-17-51,5-9c14,25,15,20,16-85v-113h-50-50v-155-155h105h105v155v155h-50-50v108c1,98,2,105,15,82c19-34,19-19-1,23-15,31-15,36,0,65c20,38,21,56,1,22-13-23-14-15-15,88v112h-500-500v108c1,98,2,105,15,82c20-34,19-16-1,22-15,29-15,34,0,65c20,42,20,57,1,23-13-23-14-14-15,95c0,93,4,126,16,143c26,37,104,23,104-18c0-11,5-20,10-20c6,0,10,6,10,13c0,8,8,21,18,30c35,32,101,15,103-26c1-18,2-19,6-4c13,49-91,82-119,38-12-19-12-19-36,0-32,25-74,24-97-1-17-19-18-19-43,0-31,25-63,25-93,1-23-19-24-19-48,0-32,26-67,24-96-6ZM940,1061c0-71-3-136-6-145-5-13-23-16-95-16h-89v135c0,74,2,135,4,135s41-56,86-125c46-69,85-123,87-121c3,2-31,58-74,123-44,65-83,124-87,131-5,9,14,12,83,12h91v-129Zm498,102c71-53,93-143,53-222-51-98-185-116-266-36-80,80-62,203,39,267c41,25,134,21,174-9Zm1002-102c0-71-3-136-6-145-5-13-23-16-95-16h-89v129c0,71,3,136,6,145c5,13,23,16,95,16h89v-129Zm500,0c0-71-3-136-6-145-5-13-23-16-95-16h-89v129c0,71,3,136,6,145c5,13,23,16,95,16h89v-129Z" />
                            <path d="M1252,1023c1-67,1-67,7-18l6,50l16-44c8-25,20-46,25-48c6-2,17,18,26,44l16,48l1-47c1-27,6-48,11-48c13,0,13,117,0,125-9,6-18-10-45-80-6-17-10-12-24,29-26,75-41,71-39-11Z" />
                            <path d="M1412,1068c-16-16-15-29,2-22c11,4,16-6,19-43c3-44,4-43,5,15c2,62-3,73-26,50Z" />
                            <path d="M2265,1160c16-29,148-225,158-235c16-16,0,9-76,125-63,95-104,150-82,110Z" />
                            <path d="M2765,1160c16-29,148-225,158-235c16-16,0,9-76,125-63,95-104,150-82,110Z" />
                            <path d="M1392,1395c0-16,2-22,5-12c2,9,2,23,0,30-3,6-5-1-5-18Z" />
                            <path d="M3258,1395c-3-14-1-25,3-25c5,0,9,11,9,25s-2,25-4,25-6-11-8-25Z" />
                            <path d="M4060,1396c0-2,7-7,16-10c8-3,12-2,9,4-6,10-25,14-25,6Z" />
                        </g>
                        <line x1="-4.050237" y1="7.340222" x2="4.050237" y2="-7.340223" transform="translate(84.293521 311.659778)" fill="none" stroke="#f00" stroke-width="2" />
                        <line x1="-4.050237" y1="-7.340223" x2="4.050237" y2="7.340222" transform="translate(84.293521 311.659778)" fill="none" stroke="#f00" stroke-width="2" />
                        <line x1="-4.050237" y1="-7.340223" x2="4.050237" y2="7.340222" transform="translate(134.636378 311.179751)" fill="none" stroke="#f00" stroke-width="2" />
                        <line x1="-4.050237" y1="-7.340223" x2="4.050237" y2="7.340222" transform="translate(234.4 311.659778)" fill="none" stroke="#f00" stroke-width="2" />
                        <line x1="-4.050237" y1="7.340222" x2="4.050237" y2="-7.340223" transform="translate(234.4 311.659778)" fill="none" stroke="#f00" stroke-width="2" />
                        <line x1="-4.050237" y1="7.340222" x2="4.050237" y2="-7.340223" transform="translate(134.636378 311.179751)" fill="none" stroke="#f00" stroke-width="2" />
                        <line x1="-4.050237" y1="-7.340223" x2="4.050237" y2="7.340222" transform="translate(284.4 311.659794)" fill="none" stroke="#f00" stroke-width="2" />
                        <line x1="-4.050237" y1="-7.340223" x2="4.050237" y2="7.340222" transform="translate(184.5 261.07801)" fill="none" stroke="#f00" stroke-width="2" />
                        <line x1="-4.050237" y1="-7.340223" x2="4.050237" y2="7.340222" transform="translate(346.450177 261.07801)" fill="none" stroke="#f00" stroke-width="2" />
                        <line x1="-4.050237" y1="-7.340223" x2="4.050237" y2="7.340222" transform="translate(321.62032 311.659794)" fill="none" stroke="#f00" stroke-width="2" />
                        <line x1="-4.050237" y1="-7.340223" x2="4.050237" y2="7.340222" transform="translate(397.130279 311.659787)" fill="none" stroke="#f00" stroke-width="2" />
                        <line x1="-4.050237" y1="-7.340223" x2="4.050237" y2="7.340222" transform="translate(446.246409 310.697022)" fill="none" stroke="#f00" stroke-width="2" />
                        <line x1="-4.050237" y1="-7.340223" x2="4.050237" y2="7.340222" transform="translate(484.427094 311.659785)" fill="none" stroke="#f00" stroke-width="2" />
                        <line x1="-4.050237" y1="-7.340223" x2="4.050237" y2="7.340222" transform="translate(509.626346 261.07801)" fill="none" stroke="#f00" stroke-width="2" />
                        <line x1="-4.050237" y1="-7.340223" x2="4.050237" y2="7.340222" transform="translate(534.5 310.697022)" fill="none" stroke="#f00" stroke-width="2" />
                        <line x1="-4.050237" y1="-7.340223" x2="4.050237" y2="7.340222" transform="translate(584.187644 311.659794)" fill="none" stroke="#f00" stroke-width="2" />
                        <line x1="-4.050237" y1="7.340222" x2="4.050237" y2="-7.340223" transform="translate(584.187644 311.659794)" fill="none" stroke="#f00" stroke-width="2" />
                        <line x1="-4.050237" y1="7.340222" x2="4.050237" y2="-7.340223" transform="translate(534.5 310.697022)" fill="none" stroke="#f00" stroke-width="2" />
                        <line x1="-4.050237" y1="7.340222" x2="4.050237" y2="-7.340223" transform="translate(509.626346 261.07801)" fill="none" stroke="#f00" stroke-width="2" />
                        <line x1="-4.050237" y1="7.340222" x2="4.050237" y2="-7.340223" transform="translate(484.427094 311.659785)" fill="none" stroke="#f00" stroke-width="2" />
                        <line x1="-4.050237" y1="7.340222" x2="4.050237" y2="-7.340223" transform="translate(446.246409 310.697022)" fill="none" stroke="#f00" stroke-width="2" />
                        <line x1="-4.050237" y1="7.340222" x2="4.050237" y2="-7.340223" transform="translate(397.130279 311.659787)" fill="none" stroke="#f00" stroke-width="2" />
                        <line x1="-4.050237" y1="7.340222" x2="4.050237" y2="-7.340223" transform="translate(321.62032 311.659794)" fill="none" stroke="#f00" stroke-width="2" />
                        <line x1="-4.050237" y1="7.340222" x2="4.050237" y2="-7.340223" transform="translate(346.450177 261.07801)" fill="none" stroke="#f00" stroke-width="2" />
                        <line x1="-4.050237" y1="7.340222" x2="4.050237" y2="-7.340223" transform="translate(184.5 261.07801)" fill="none" stroke="#f00" stroke-width="2" />
                        <line x1="-4.050237" y1="7.340222" x2="4.050237" y2="-7.340223" transform="translate(284.4 311.659794)" fill="none" stroke="#f00" stroke-width="2" />
                        <text dx="0" dy="0" font-family="&quot;eKNX9cSzmiV1:::Roboto&quot;" font-size="8" font-weight="400" transform="translate(194.097184 263.943929)" fill="#f00" stroke-width="0">
                            <tspan y="0" font-weight="400" stroke-width="0">
                                <![CDATA[
F1=
]]><?php echo isset($result1['FforTcable']) ? $result1['FforTcable'] : 0; ?>
                            </tspan>
                        </text>
                        <text dx="0" dy="0" font-family="&quot;eKNX9cSzmiV1:::Roboto&quot;" font-size="8" font-weight="400" transform="matrix(1.092615 0 0 1 90.143777 321.823532)" fill="#f00" stroke-width="0">
                            <tspan y="0" font-weight="400" stroke-width="0">
                                <![CDATA[
F2=
]]><?php echo isset($result1['FforNMcable']) ? $result1['FforNMcable'] : 0; ?>
                            </tspan>
                        </text>
                        <text dx="0" dy="0" font-family="&quot;eKNX9cSzmiV1:::Roboto&quot;" font-size="8" font-weight="400" transform="matrix(1.092615 0 0 1 140.132336 325.577173)" fill="#f00" stroke-width="0">
                            <tspan y="0" font-weight="400" stroke-width="0">
                                <![CDATA[
F3=
]]><?php echo isset($result1['FforMcable']) ? $result1['FforMcable'] : 0; ?>

                            </tspan>
                        </text>
                        <text dx="0" dy="0" font-family="&quot;eKNX9cSzmiV1:::Roboto&quot;" font-size="8" font-weight="400" transform="matrix(1.092615 0 0 1 238.450237 325.001494)" fill="#f00" stroke-width="0">
                            <tspan y="0" font-weight="400" stroke-width="0">
                                <![CDATA[
F4=
]]><?php echo isset($result1['FforNMcable']) ? $result1['FforNMcable'] : 0; ?>
                            </tspan>
                        </text>
                        <text dx="0" dy="0" font-family="&quot;eKNX9cSzmiV1:::Roboto&quot;" font-size="8" font-weight="400" transform="matrix(1.092615 0 0 1 288.450237 326.685663)" fill="#f00" stroke-width="0">
                            <tspan y="0" font-weight="400" stroke-width="0">
                                <![CDATA[
F5=
]]><?php echo isset($result1['FforNMcable']) ? $result1['FforNMcable'] : 0; ?>
                            </tspan>
                        </text>
                        <text dx="0" dy="0" font-family="&quot;eKNX9cSzmiV1:::Roboto&quot;" font-size="8" font-weight="400" transform="matrix(1.092615 0 0 1 325.3 326.683211)" fill="#f00" stroke-width="0">
                            <tspan y="0" font-weight="400" stroke-width="0">
                                <![CDATA[
F7=
]]><?php echo isset($result2['FforNMcable']) ? $result2['FforNMcable'] : 0; ?>
                            </tspan>
                        </text>
                        <text dx="0" dy="0" font-family="&quot;eKNX9cSzmiV1:::Roboto&quot;" font-size="8" font-weight="400" transform="matrix(1.092615 0 0 1 350.500414 276.101427)" fill="#f00" stroke-width="0">
                            <tspan y="0" font-weight="400" stroke-width="0">
                                <![CDATA[
F6=
]]><?php echo isset($result2['FforTcable']) ? $result2['FforTcable'] : 0; ?>
                            </tspan>
                        </text>
                        <text dx="0" dy="0" font-family="&quot;eKNX9cSzmiV1:::Roboto&quot;" font-size="8" font-weight="400" transform="matrix(1.092615 0 0 1 401.180516 324.183195)" fill="#f00" stroke-width="0">
                            <tspan y="0" font-weight="400" stroke-width="0">
                                <![CDATA[
F8=
]]><?php echo isset($result2['FforMcable']) ? $result2['FforMcable'] : 0; ?>
                            </tspan>
                        </text>
                        <text dx="0" dy="0" font-family="&quot;eKNX9cSzmiV1:::Roboto&quot;" font-size="8" font-weight="400" transform="matrix(1.092615 0 0 1 450.296646 325.675949)" fill="#f00" stroke-width="0">
                            <tspan y="0" font-weight="400" stroke-width="0">
                                <![CDATA[
F9=
]]><?php echo isset($result2['FforNMcable']) ? $result2['FforNMcable'] : 0; ?>
                            </tspan>
                        </text>
                        <text dx="0" dy="0" font-family="&quot;eKNX9cSzmiV1:::Roboto&quot;" font-size="8" font-weight="400" transform="matrix(1.092615 0 0 1 486.712476 325.186691)" fill="#f00" stroke-width="0">
                            <tspan y="0" font-weight="400" stroke-width="0">
                                <![CDATA[
F11=
]]><?php echo isset($result3['FforNMcable']) ? $result3['FforNMcable'] : 0; ?>
                            </tspan>
                        </text>
                        <text dx="0" dy="0" font-family="&quot;eKNX9cSzmiV1:::Roboto&quot;" font-size="8" font-weight="400" transform="matrix(1.092615 0 0 1 538.550237 325.186691)" fill="#f00" stroke-width="0">
                            <tspan y="0" font-weight="400" stroke-width="0">
                                <![CDATA[
F12=
]]><?php echo isset($result3['FforMcable']) ? $result3['FforMcable'] : 0; ?>
                            </tspan>
                        </text>
                        <text dx="0" dy="0" font-family="&quot;eKNX9cSzmiV1:::Roboto&quot;" font-size="8" font-weight="400" transform="matrix(1.092615 0 0 1 514.568184 276.056937)" fill="#f00" stroke-width="0">
                            <tspan y="0" font-weight="400" stroke-width="0">
                                <![CDATA[
F10=
]]><?php echo isset($result3['FforTcable']) ? $result3['FforTcable'] : 0; ?>
                            </tspan>
                        </text>
                        <text dx="0" dy="0" font-family="&quot;eKNX9cSzmiV1:::Roboto&quot;" font-size="8" font-weight="400" transform="matrix(1.092615 0 0 1 588.237881 326.638721)" fill="#f00" stroke-width="0">
                            <tspan y="0" font-weight="400" stroke-width="0">
                                <![CDATA[
F13=
]]><?php echo isset($result3['FforNMcable']) ? $result3['FforNMcable'] : 0; ?>
                            </tspan>
                        </text>

                    </svg>
                </div>

            </form>
        </section>
        <hr id="isca" class="mx-auto border-transparent w-1/2 h-1">
        <hr class="mx-auto border-transparent w-1/2 h-1">
        <hr class="mx-auto bg-gray-600 w-10/12 sm:1/2 h-1 mt-32">

        <section class="hidden mt-10" id="show-isca">
            <h1 class="font-semibold text-4xl text-gray-600 mb-10 px-10">ISCA Computed Results</h1>
            <div class="flex gap-32 text-center items-center justify-center">

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

                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Systems
                    Recommendation</label>
                <textarea id="message" rows="10" class="block p-2.5 w-full text-normal text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="The system will automatically recommends..." readonly></textarea>
            </div>

            <div class="mt-4">
                <h1 class="text-2xl font-semibold text-gray-600">Tables</h1>
                <div class="relative overflow-x-auto mt-4">
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

        <hr class="mx-auto bg-gray-600 w-10/12 sm:1/2 h-1 mt-32">

        <!-- <section class="px-4 mt-10">
            <h1 class="text-2xl font-semibold text-gray-600">Calculations</h1>

        </section> -->
        <!-- END LANDING PAGE -->


    </main>
    <!-- END MAIN -->
    <script src="public/js/show-isca.js"></script>
    <script src="public/js/z-percentage.js"></script>
    <script src="public/js/hp-values.js"></script>
</body>

</html>