function showValue() {
    const show = document.getElementById('show-isca');
    // const iscaT = document.getElementById('check-value');
    // const textContent = iscaT.textContent;
    // const value = parseInt(textContent.match(/\d+/)[0]);
    const xMarkGroup = document.getElementById('x-mark');
    const showDLBtn = document.getElementById('downloadButton');


    show.classList.remove('hidden');
    xMarkGroup.classList.remove('hidden');
    showDLBtn.classList.remove('hidden');

    window.location.href = '/index.php#isca';
    console.log("Clicked");
}

