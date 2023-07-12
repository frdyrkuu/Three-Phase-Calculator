<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kva1 = $_POST['kva_T1'];
    $z1 = $_POST['z_T1'];
    $volt1 = $_POST['voltage_T1'];
    $fla1 = $_POST['hp1'];

    $kva2 = $_POST['kva_T2'];
    $z2 = $_POST['z_T2'];
    $volt2 = $_POST['voltage_T2'];
    $fla2 = $_POST['hp2'];

    $kva3 = $_POST['kva_T3'];
    $z3 = $_POST['z_T3'];
    $volt3 = $_POST['voltage_T3'];
    $fla3 = $_POST['hp3'];


    $_SESSION['result1'] = transformer1($kva1, $z1, $volt1, $fla1);
    $_SESSION['result2'] = transformer2($kva2, $z2, $volt2, $fla2);
    $_SESSION['result3'] = transformer3($kva3, $z3, $volt3, $fla3);

    // Redirect back to index.php
    header("Location: ../index.php#isca");
    exit;
}

// Function for Transformer 1
function transformer1($kva, $z, $volt, $fla)
{
    // Ifla for T
    $IflaforT = $kva * 1000 / ($volt * sqrt(3));

    // Multiplier for T
    $multiplierforT = 100 / $z;

    // Isca for T
    $iscaforT = $IflaforT * $multiplierforT;

    // f for Tcable
    $FforTcable = (65.574 * $iscaforT * sqrt(3)) / (1557 * $volt);

    // M for Tcable
    $mforTcable = (1 / (1 + $FforTcable));

    // Isca for Tcable 
    $iscaforTcable = $iscaforT * $mforTcable;

    // f for NMcable 
    $FforNMcable = (sqrt(3) * 98.4252 * $iscaforTcable) / (1557 * $volt);

    // M for NMcable
    $mforNMcable = (1 / (1 + $FforNMcable));

    // Isca for NM
    $iscaforNM = $iscaforTcable * $mforNMcable;

    // f for Mcable
    $FforMcable = (sqrt(3) * 98.4252 * $iscaforTcable) / (389 * $volt);

    // m for Mcable
    $mforMcable = 1 / (1 + $FforMcable);

    // Imc
    $imc = 4 * $fla;

    // Isca for M
    $iscaforM = ($iscaforTcable * $mforMcable) + $imc;

    $outputs = array(
        'IflaforT' => $IflaforT,
        'MultiplierforT' => $multiplierforT,
        'iscaforT' => $iscaforT,
        'FforTcable' => $FforTcable,
        'mforTcable' =>  $mforTcable,
        'iscaforTcable' => $iscaforTcable,
        'FforNMcable' => $FforNMcable,
        'mforNMcable' => $mforNMcable,
        'iscaforNM' =>  $iscaforNM,
        'FforMcable' =>  $FforMcable,
        'mforMcable' =>  $mforMcable,
        'imc' =>  $imc,
        'iscaforM' => $iscaforM
    );
    // Return the result
    return $outputs;
}

// Function for Transformer 2
function transformer2($kva, $z, $volt, $fla)
{
    // Ifla for T
    $IflaforT = $kva * 1000 / ($volt * sqrt(3));

    // Multiplier for T
    $multiplierforT = 100 / $z;

    // Isca for T
    $iscaforT = $IflaforT * $multiplierforT;

    // f for Tcable
    $FforTcable = (65.574 * $iscaforT * sqrt(3)) / (1557 * $volt);

    // M for Tcable
    $mforTcable = (1 / (1 + $FforTcable));

    // Isca for Tcable 
    $iscaforTcable = $iscaforT * $mforTcable;

    // f for NMcable 
    $FforNMcable = (sqrt(3) * 98.4252 * $iscaforTcable) / (1557 * $volt);

    // M for NMcable
    $mforNMcable = (1 / (1 + $FforNMcable));

    // Isca for NM
    $iscaforNM = $iscaforTcable * $mforNMcable;

    // f for Mcable
    $FforMcable = (sqrt(3) * 98.4252 * $iscaforTcable) / (389 * $volt);

    // m for Mcable
    $mforMcable = 1 / (1 + $FforMcable);

    // Imc
    $imc = 4 * $fla;

    // Isca for M
    $iscaforM = ($iscaforTcable * $mforMcable) + $imc;

    $outputs = array(
        'IflaforT' => $IflaforT,
        'MultiplierforT' => $multiplierforT,
        'iscaforT' => $iscaforT,
        'FforTcable' => $FforTcable,
        'mforTcable' =>  $mforTcable,
        'iscaforTcable' => $iscaforTcable,
        'FforNMcable' => $FforNMcable,
        'mforNMcable' => $mforNMcable,
        'iscaforNM' =>  $iscaforNM,
        'FforMcable' =>  $FforMcable,
        'mforMcable' =>  $mforMcable,
        'imc' =>  $imc,
        'iscaforM' => $iscaforM
    );
    // Return the result
    return $outputs;
}

// Function for Transformer 3
function transformer3($kva, $z, $volt, $fla)
{
    // Ifla for T
    $IflaforT = $kva * 1000 / ($volt * sqrt(3));

    // Multiplier for T
    $multiplierforT = 100 / $z;

    // Isca for T
    $iscaforT = $IflaforT * $multiplierforT;

    // f for Tcable
    $FforTcable = (65.574 * $iscaforT * sqrt(3)) / (1557 * $volt);

    // M for Tcable
    $mforTcable = (1 / (1 + $FforTcable));

    // Isca for Tcable 
    $iscaforTcable = $iscaforT * $mforTcable;

    // f for NMcable 
    $FforNMcable = (sqrt(3) * 98.4252 * $iscaforTcable) / (1557 * $volt);

    // M for NMcable
    $mforNMcable = (1 / (1 + $FforNMcable));

    // Isca for NM
    $iscaforNM = $iscaforTcable * $mforNMcable;

    // f for Mcable
    $FforMcable = (sqrt(3) * 98.4252 * $iscaforTcable) / (389 * $volt);

    // m for Mcable
    $mforMcable = 1 / (1 + $FforMcable);

    // Imc
    $imc = 4 * $fla;

    // Isca for M
    $iscaforM = ($iscaforTcable * $mforMcable) + $imc;

    $outputs = array(
        'IflaforT' => $IflaforT,
        'MultiplierforT' => $multiplierforT,
        'iscaforT' => $iscaforT,
        'FforTcable' => $FforTcable,
        'mforTcable' =>  $mforTcable,
        'iscaforTcable' => $iscaforTcable,
        'FforNMcable' => $FforNMcable,
        'mforNMcable' => $mforNMcable,
        'iscaforNM' =>  $iscaforNM,
        'FforMcable' =>  $FforMcable,
        'mforMcable' =>  $mforMcable,
        'imc' =>  $imc,
        'iscaforM' => $iscaforM
    );
    // Return the result
    return $outputs;
}
