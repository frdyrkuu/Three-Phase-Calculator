const show = document.getElementById('show-isca');
const iscaT = document.getElementById('check-value');
const textContent = iscaT.textContent;
const value = parseInt(textContent.match(/\d+/)[0]);
const xMarkGroup = document.getElementById('x-mark');
const showDLBtn = document.getElementById('downloadButton');


if (value === 0) {
    show.classList.add('hidden');
    xMarkGroup.classList.add('hidden');
    showDLBtn.classList.add('hidden');
} else {
    show.classList.remove('hidden');
    xMarkGroup.classList.remove('hidden');
    showDLBtn.classList.remove('hidden');
}

console.log(value);
