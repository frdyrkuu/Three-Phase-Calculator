// Get references to the input elements
const voltsDropdown1 = document.getElementById('volts1');
const hpInput1 = document.getElementById('hp1');

const voltsDropdown2 = document.getElementById('volts2');
const hpInput2 = document.getElementById('hp2');

const voltsDropdown3 = document.getElementById('volts3');
const hpInput3 = document.getElementById('hp3');


voltsDropdown1.addEventListener('change', function () {
    const selectedVoltage1 = parseInt(this.value);
    let hpValue1 = 0;

 
    if (selectedVoltage1 === 204) {
        hpValue1 = 4.4;
    } else if (selectedVoltage1 === 240) {
        hpValue1 = 2.5;
    } else if (selectedVoltage1 === 480) {
        hpValue1 = 1.3;
    } else if (selectedVoltage1 === 600) {
        hpValue1 = 0.9;
    }

    hpInput1.value = hpValue1.toFixed(1);
});


voltsDropdown2.addEventListener('change', function () {
    const selectedVoltage2 = parseInt(this.value);
    let hpValue2 = 0;

 
    if (selectedVoltage2 === 204) {
        hpValue2 = 6.4;
    } else if (selectedVoltage2 === 240) {
        hpValue2 = 3.7;
    } else if (selectedVoltage2 === 480) {
        hpValue2 = 1.8;
    } else if (selectedVoltage2 === 600) {
        hpValue2 = 1.3;
    }

    hpInput2.value = hpValue2.toFixed(1);
});



voltsDropdown3.addEventListener('change', function () {
    const selectedVoltage3 = parseInt(this.value);
    let hpValue3 = 0;

 
    if (selectedVoltage3 === 204) {
        hpValue3 = 8.4;
    } else if (selectedVoltage3 === 240) {
        hpValue3 = 4.8;
    } else if (selectedVoltage3 === 480) {
        hpValue3 = 2.3;
    } else if (selectedVoltage3 === 600) {
        hpValue3 = 1.7;
    }

    hpInput3.value = hpValue3.toFixed(1);
});