
const kvaInput = document.getElementById('kva1');
const zInput = document.getElementById('%z1');

const kvaInput2 = document.getElementById('kva2');
const zInput2 = document.getElementById('%z2');

const kvaInput3 = document.getElementById('kva3');
const zInput3 = document.getElementById('%z3');

kvaInput.addEventListener('input', function () {
    const kvaValue = parseFloat(this.value);
    if (!isNaN(kvaValue)) {

        let zValue = '';

        if (kvaValue >= 1 && kvaValue <= 3) {
            zValue = 3.8907;
        } else if (kvaValue >= 4 && kvaValue <= 6) {
            zValue = 3.2182;
        } else if (kvaValue >= 7 && kvaValue <= 9) {
            zValue = 2.5849;
        } else if (kvaValue >= 10 && kvaValue <= 15) {
            zValue = 2.7789;
        } else if (kvaValue >= 16 && kvaValue <= 30) {
            zValue = 1.6;
        } else if (kvaValue >= 31 && kvaValue <= 45) {
            zValue = 1.7;
        } else if (kvaValue >= 46 && kvaValue <= 75) {
            zValue = 1.6;
        } else if (kvaValue >= 76 && kvaValue <= 112.5) {
            zValue = 1;
        } else if (kvaValue >= 113 && kvaValue <= 150) {
            zValue = 1.2;
        } else if (kvaValue >= 156 && kvaValue <= 225) {
            zValue = 1.2;
        } else if (kvaValue >= 226 && kvaValue <= 300) {
            zValue = 1.2;
        } else if (kvaValue >= 301 && kvaValue <= 500) {
            zValue = 1.3;
        } else if (kvaValue >= 501 && kvaValue <= 750) {
            zValue = 3.5;
        }
        
        // Update the %z input value
        zInput.value = zValue.toString();
    } else {
        // Clear the %z input if the kva input is empty or invalid
        zInput.value = '';
    }
});

kvaInput2.addEventListener('input', function () {
    const kvaValue2 = parseFloat(this.value);
    if (!isNaN(kvaValue2)) {

        let zValue2 = '';

        if (kvaValue2 >= 1 && kvaValue2 <= 3) {
            zValue2 = 3.8907;
        } else if (kvaValue2 >= 4 && kvaValue2 <= 6) {
            zValue2 = 3.2182;
        } else if (kvaValue2 >= 7 && kvaValue2 <= 9) {
            zValue2 = 2.5849;
        } else if (kvaValue2 >= 10 && kvaValue2 <= 15) {
            zValue2 = 2.7789;
        } else if (kvaValue2 >= 16 && kvaValue2 <= 30) {
            zValue2 = 1.6;
        } else if (kvaValue2 >= 31 && kvaValue2 <= 45) {
            zValue2 = 1.7;
        } else if (kvaValue2 >= 46 && kvaValue2 <= 75) {
            zValue2 = 1.6;
        } else if (kvaValue2 >= 76 && kvaValue2 <= 112.5) {
            zValue2 = 1;
        } else if (kvaValue2 >= 113 && kvaValue2 <= 150) {
            zValue2 = 1.2;
        } else if (kvaValue2 >= 156 && kvaValue2 <= 225) {
            zValue2 = 1.2;
        } else if (kvaValue2 >= 226 && kvaValue2 <= 300) {
            zValue2 = 1.2;
        } else if (kvaValue2 >= 301 && kvaValue2 <= 500) {
            zValue2 = 1.3;
        } else if (kvaValue2 >= 501 && kvaValue2 <= 750) {
            zValue2 = 3.5;
        }

        // Update the %z input value
        zInput2.value = zValue2.toString();
    } else {
        // Clear the %z input if the kva input is empty or invalid
        zInput2.value = '';
    }
});


kvaInput3.addEventListener('input', function () {
    const kvaValue3 = parseFloat(this.value);
    if (!isNaN(kvaValue3)) {

        let zValue3 = '';

        if (kvaValue3 >= 1 && kvaValue3 <= 3) {
            zValue3 = 3.8907;
        } else if (kvaValue3 >= 4 && kvaValue3 <= 6) {
            zValue3 = 3.2182;
        } else if (kvaValue3 >= 7 && kvaValue3 <= 9) {
            zValue3 = 2.5849;
        } else if (kvaValue3 >= 10 && kvaValue3 <= 15) {
            zValue3 = 2.7789;
        } else if (kvaValue3 >= 16 && kvaValue3 <= 30) {
            zValue3 = 1.6;
        } else if (kvaValue3 >= 31 && kvaValue3 <= 45) {
            zValue3 = 1.7;
        } else if (kvaValue3 >= 46 && kvaValue3 <= 75) {
            zValue3 = 1.6;
        } else if (kvaValue3 >= 76 && kvaValue3 <= 112.5) {
            zValue3 = 1;
        } else if (kvaValue3 >= 113 && kvaValue3 <= 150) {
            zValue3 = 1.2;
        } else if (kvaValue3 >= 156 && kvaValue3 <= 225) {
            zValue3 = 1.2;
        } else if (kvaValue3 >= 226 && kvaValue3 <= 300) {
            zValue3 = 1.2;
        } else if (kvaValue3 >= 301 && kvaValue3 <= 500) {
            zValue3 = 1.3;
        } else if (kvaValue3 >= 501 && kvaValue3 <= 750) {
            zValue3 = 3.5;
        }

        // Update the %z input value
        zInput3.value = zValue3.toString();
    } else {
        // Clear the %z input if the kva input is empty or invalid
        zInput3.value = '';
    }
});