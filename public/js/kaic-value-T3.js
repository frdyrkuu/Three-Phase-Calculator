// transformer 3
const f10 = document.getElementById('f10');
const f11 = document.getElementById('f11');
const f12 = document.getElementById('f12');
const f13 = document.getElementById('f13');

const iscaF10 = document.getElementById('f10-isca');
const textContentf10 = iscaF10.textContent.trim();
const Valuef10 = parseFloat(textContentf10);

const iscaF11 = document.getElementById('f11-isca');
const textContentf11 = iscaF11.textContent.trim();
const Valuef11 = parseFloat(textContentf11);

const iscaF12 = document.getElementById('f12-isca');
const textContentf12 = iscaF12.textContent.trim();
const Valuef12 = parseFloat(textContentf12);

const iscaF13 = document.getElementById('f13-isca');
const textContentf13 = iscaF13.textContent.trim();
const Valuef13 = parseFloat(textContentf13);

let kaicf10 = '';
// transformer 1 functions for the kaic values
if (Valuef10 >= 0.01 && Valuef10 <= 999) {
    kaicf10 = 10;
} else if (Valuef10 >= 1000 && Valuef10 <= 1999) {
    kaicf10 = 10;
} else if (Valuef10 >= 2000 && Valuef10 <= 2999) {
    kaicf10 = 10;
} else if (Valuef10 >= 3000 && Valuef10 <= 3999) {
    kaicf10 = 10;
} else {
    kaicf10 = 0;
}

let kaicf11 = '';
// transformer 1 functions for the kaic values
if (Valuef11 >= 0.01 && Valuef11 <= 999) {
    kaicf11 = 10;
} else if (Valuef11 >= 1000 && Valuef11 <= 1999) {
    kaicf11 = 10;
} else if (Valuef11 >= 2000 && Valuef11 <= 2999) {
    kaicf11 = 10;
} else if (Valuef11 >= 3000 && Valuef11 <= 3999) {
    kaicf11 = 10;
} else {
    kaicf11 = 0;
}

let kaicf12 = '';
// transformer 1 functions for the kaic values
if (Valuef12 >= 0.01 && Valuef12 <= 999) {
    kaicf12 = 10;
} else if (Valuef12 >= 1000 && Valuef12 <= 1999) {
    kaicf12 = 10;
} else if (Valuef12 >= 2000 && Valuef12 <= 2999) {
    kaicf12 = 10;
} else if (Valuef12 >= 3000 && Valuef12 <= 3999) {
    kaicf12 = 10;
} else {
    kaicf12 = 0;
}

let kaicf13 = '';
// transformer 1 functions for the kaic values
if (Valuef13 >= 0.01 && Valuef13 <= 999) {
    kaicf13 = 10;
} else if (Valuef13 >= 1000 && Valuef13 <= 1999) {
    kaicf13 = 10;
} else if (Valuef13 >= 2000 && Valuef13 <= 2999) {
    kaicf13 = 10;
} else if (Valuef13 >= 3000 && Valuef13 <= 3999) {
    kaicf13 = 10;
} else {
    kaicf13 = 0;
}

f10.textContent = kaicf10.toString();
f11.textContent = kaicf11.toString();
f12.textContent = kaicf12.toString();
f13.textContent = kaicf13.toString();