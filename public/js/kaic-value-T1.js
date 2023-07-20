// transformer 1
const f1 = document.getElementById('f1');
const f2 = document.getElementById('f2');
const f3 = document.getElementById('f3');
const f4 = document.getElementById('f4');
const f5 = document.getElementById('f5');

const iscaF1 = document.getElementById('f1-isca');
const textContentf1 = iscaF1.textContent.trim();
const Valuef1 = parseFloat(textContentf1);

const iscaF2 = document.getElementById('f2-isca');
const textContentf2 = iscaF2.textContent.trim();
const Valuef2 = parseFloat(textContentf2);

const iscaF3 = document.getElementById('f3-isca');
const textContentf3 = iscaF3.textContent.trim();
const Valuef3 = parseFloat(textContentf3);

const iscaF4 = document.getElementById('f4-isca');
const textContentf4 = iscaF4.textContent.trim();
const Valuef4 = parseFloat(textContentf4);

const iscaF5 = document.getElementById('f5-isca');
const textContentf5 = iscaF5.textContent.trim();
const Valuef5 = parseFloat(textContentf5);


let kaicf1 = '';
// transformer 1 functions for the kaic values
if (Valuef1 >= 0.01 && Valuef1 <= 999) {
    kaicf1 = 10;
} else if (Valuef1 >= 1000 && Valuef1 <= 1999) {
    kaicf1 = 10;
} else if (Valuef1 >= 2000 && Valuef1 <= 2999) {
    kaicf1 = 10;
} else if (Valuef1 >= 3000 && Valuef1 <= 3999) {
    kaicf1 = 10;
} else {
    kaicf1 = 0;
}


let kaicf2 = '';
// transformer 1 functions for the kaic values
if (Valuef2 >= 0.01 && Valuef2 <= 999) {
    kaicf2 = 10;
} else if (Valuef2 >= 1000 && Valuef2 <= 1999) {
    kaicf2 = 10;
} else if (Valuef2 >= 2000 && Valuef2 <= 2999) {
    kaicf2 = 10;
} else if (Valuef2 >= 3000 && Valuef2 <= 3999) {
    kaicf2 = 10;
} else {
    kaicf2 = 0;
}



let kaicf3 = '';
// transformer 1 functions for the kaic values
if (Valuef3 >= 0.01 && Valuef3 <= 999) {
    kaicf3 = 10;
} else if (Valuef3 >= 1000 && Valuef3 <= 1999) {
    kaicf3 = 10;
} else if (Valuef3 >= 2000 && Valuef3 <= 2999) {
    kaicf3 = 10;
} else if (Valuef3 >= 3000 && Valuef3 <= 3999) {
    kaicf3 = 10;
} else {
    kaicf3 = 0;
}


let kaicf4 = '';
// transformer 1 functions for the kaic values
if (Valuef4 >= 0.01 && Valuef4 <= 999) {
    kaicf4 = 10;
} else if (Valuef4 >= 1000 && Valuef4 <= 1999) {
    kaicf4 = 10;
} else if (Valuef4 >= 2000 && Valuef4 <= 2999) {
    kaicf4 = 10;
} else if (Valuef4 >= 3000 && Valuef4 <= 3999) {
    kaicf4 = 10;
} else {
    kaicf4 = 0;
}


let kaicf5 = '';
// transformer 1 functions for the kaic values
if (Valuef5 >= 0.01 && Valuef5 <= 999) {
    kaicf5 = 10;
} else if (Valuef5 >= 1000 && Valuef5 <= 1999) {
    kaicf5 = 10;
} else if (Valuef5 >= 2000 && Valuef5 <= 2999) {
    kaicf5 = 10;
} else if (Valuef5 >= 3000 && Valuef5 <= 3999) {
    kaicf5 = 10;
} else {
    kaicf5 = 0;
}


f1.textContent = kaicf1.toString();
f2.textContent = kaicf2.toString();
f3.textContent = kaicf3.toString();
f4.textContent = kaicf4.toString();
f5.textContent = kaicf5.toString();


