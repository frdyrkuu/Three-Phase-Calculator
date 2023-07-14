const show = document.getElementById('show-isca');
const iscaT = document.getElementById('check-value');
const textContent = iscaT.textContent;
const value = textContent.match(/\d+/)[0];


if (value == 0) {
    show.classList.add('hidden');
} else {
    show.classList.remove('hidden');
}

console.log(value);