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
                <div class="items-center justify-center mx-auto mt-10">
                    <img class="w-full sm:w-3/4 mx-auto shadow" src="public/img/sld.png" alt="sld">
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
                    <label for="iscaT">Isca for T</label>
                    <p class="font-serif text-2xl italic" id="iscaT">I<sub>sca</sub> = <?php echo isset($result1['IflaforT']) ? $result1['IflaforT'] : 0; ?></p>
                    <br>
                    <label for="iscatcable">Isca for Tcable</label>
                    <p class="font-serif text-2xl italic" id="iscatcable">I<sub>sca@Fault</sub> = <?php echo isset($result1['iscaforTcable']) ? $result1['iscaforTcable'] : 0; ?></p>
                    <br>
                    <label for="iscanm">Isca for NM</label>
                    <p class="font-serif text-2xl italic" id="iscanm">I<sub>sca@Fault</sub> = <?php echo isset($result1['iscaforNM']) ? $result1['iscaforNM'] : 0; ?></p>
                    <br>
                    <label for="iscam">Isca for M</label>
                    <p class="font-serif text-2xl italic" id="iscam">I<sub>sc4</sub> = <?php echo isset($result1['iscaforM']) ? $result1['iscaforM'] : 0; ?></p>
                    <br>
                    <label for="ampere">KAIC rating (minimum)</label>
                    <p class="font-serif text-2xl italic" id="ampere">10 KAIC</p>
                </div>

                <div>
                    <p class="text-xl font-semibold text-gray-600 mb-4">Transformer 2</p>
                    <label for="iscaT">Isca for T</label>
                    <p class="font-serif text-2xl italic" id="iscaT">I<sub>sca</sub> = <?php echo isset($result2['IflaforT']) ? $result2['IflaforT'] : 0; ?></p>
                    <br>
                    <label for="iscatcable">Isca for Tcable</label>
                    <p class="font-serif text-2xl italic" id="iscatcable">I<sub>sca@Fault</sub> = <?php echo isset($result2['iscaforTcable']) ? $result2['iscaforTcable'] : 0; ?></p>
                    <br>
                    <label for="iscanm">Isca for NM</label>
                    <p class="font-serif text-2xl italic" id="iscanm">I<sub>sca@Fault</sub> = <?php echo isset($result2['iscaforNM']) ? $result2['iscaforNM'] : 0; ?></p>
                    <br>
                    <label for="iscam">Isca for M</label>
                    <p class="font-serif text-2xl italic" id="iscam">I<sub>sc4</sub> = <?php echo isset($result2['iscaforM']) ? $result2['iscaforM'] : 0; ?></p>
                    <br>
                    <label for="ampere">KAIC rating (minimum)</label>
                    <p class="font-serif text-2xl italic" id="ampere">10 KAIC</p>
                </div>

                <div>
                    <p class="text-xl font-semibold text-gray-600 mb-4">Transformer 3</p>
                    <label for="iscaT">Isca for T</label>
                    <p class="font-serif text-2xl italic" id="iscaT">I<sub>sca</sub> = <?php echo isset($result3['IflaforT']) ? $result3['IflaforT'] : 0; ?></p>
                    <br>
                    <label for="iscatcable">Isca for Tcable</label>
                    <p class="font-serif text-2xl italic" id="iscatcable">I<sub>sca@Fault</sub> = <?php echo isset($result3['iscaforTcable']) ? $result3['iscaforTcable'] : 0; ?></p>
                    <br>
                    <label for="iscanm">Isca for NM</label>
                    <p class="font-serif text-2xl italic" id="iscanm">I<sub>sca@Fault</sub> = <?php echo isset($result3['iscaforNM']) ? $result3['iscaforNM'] : 0; ?></p>
                    <br>
                    <label for="iscam">Isca for M</label>
                    <p class="font-serif text-2xl italic" id="iscam">I<sub>sc4</sub> = <?php echo isset($result3['iscaforM']) ? $result3['iscaforM'] : 0; ?></p>
                    <br>
                    <label for="ampere">KAIC rating (minimum)</label>
                    <p class="font-serif text-2xl italic" id="ampere">10 KAIC</p>
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