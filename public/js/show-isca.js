const show = document.getElementById('show-isca');
const iscaT = document.getElementById('check-value');
const textContent = iscaT.textContent;
const value = parseInt(textContent.match(/\d+/)[0]);
const xMarkGroup = document.getElementById('x-mark');

if (value === 0) {
    show.classList.add('hidden');
    xMarkGroup.classList.add('hidden');
} else {
    show.classList.remove('hidden');
    xMarkGroup.classList.remove('hidden');
}

console.log(value);
