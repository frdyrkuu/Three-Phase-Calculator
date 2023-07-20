// transformer 2 const
const f6 = document.getElementById('f6');
const f7 = document.getElementById('f7');
const f8 = document.getElementById('f8');
const f9 = document.getElementById('f9');

const iscaF6 = document.getElementById('f6-isca');
const textContentf6 = iscaF6.textContent.trim();
const Valuef6 = parseFloat(textContentf6);

const iscaF7 = document.getElementById('f7-isca');
const textContentf7 = iscaF7.textContent.trim();
const Valuef7 = parseFloat(textContentf7);

const iscaF8 = document.getElementById('f8-isca');
const textContentf8 = iscaF8.textContent.trim();
const Valuef8 = parseFloat(textContentf8);

const iscaF9 = document.getElementById('f9-isca');
const textContentf9 = iscaF9.textContent.trim();
const Valuef9 = parseFloat(textContentf9);



let kaicf6 = '';
// transformer 1 functions for the kaic values
if (Valuef6 >= 0.01 && Valuef6 <= 999) {
    kaicf6 = 10;
} else if (Valuef6 >= 1000 && Valuef6 <= 1999) {
    kaicf6 = 10;
} else if (Valuef6 >= 2000 && Valuef6 <= 2999) {
    kaicf6 = 10;
} else if (Valuef6 >= 3000 && Valuef6 <= 3999) {
    kaicf6 = 10;
} else {
    kaicf6 = 0;
}


let kaicf7 = '';
// transformer 1 functions for the kaic values
if (Valuef7 >= 0.01 && Valuef7 <= 999) {
    kaicf7 = 10;
} else if (Valuef7 >= 1000 && Valuef7 <= 1999) {
    kaicf7 = 10;
} else if (Valuef7 >= 2000 && Valuef7 <= 2999) {
    kaicf7 = 10;
} else if (Valuef7 >= 3000 && Valuef7 <= 3999) {
    kaicf7 = 10;
} else {
    kaicf7 = 0;
}


let kaicf8 = '';
// transformer 1 functions for the kaic values
if (Valuef8 >= 0.01 && Valuef8 <= 999) {
    kaicf8 = 10;
} else if (Valuef8 >= 1000 && Valuef8 <= 1999) {
    kaicf8 = 10;
} else if (Valuef8 >= 2000 && Valuef8 <= 2999) {
    kaicf8 = 10;
} else if (Valuef8 >= 3000 && Valuef8 <= 3999) {
    kaicf8 = 10;
} else {
    kaicf8 = 0;
}


let kaicf9 = '';
// transformer 1 functions for the kaic values
if (Valuef9 >= 0.01 && Valuef9 <= 999) {
    kaicf9 = 10;
} else if (Valuef9 >= 1000 && Valuef9 <= 1999) {
    kaicf9 = 10;
} else if (Valuef9 >= 2000 && Valuef9 <= 2999) {
    kaicf9 = 10;
} else if (Valuef9 >= 3000 && Valuef9 <= 3999) {
    kaicf9 = 10;
} else {
    kaicf9 = 0;
}

f6.textContent = kaicf6.toString();
f7.textContent = kaicf7.toString();
f8.textContent = kaicf8.toString();
f9.textContent = kaicf9.toString();

