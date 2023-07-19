const downloadButton = document.getElementById('downloadButton');
const svgContainer = document.getElementById('svgContainer');

downloadButton.addEventListener('click', () => {

    const canvas = document.createElement('canvas');
    const ctx = canvas.getContext('2d');

    const width = 1920;
    const height = 1080;
    canvas.width = width;
    canvas.height = height;

    ctx.fillStyle = '#fff';
    ctx.fillRect(0, 0, width, height);

    const svgElement = svgContainer.querySelector('svg');
    const svgWidth = svgElement.clientWidth;
    const svgHeight = svgElement.clientHeight;
    const scaleFactor = Math.min(width / svgWidth, height / svgHeight);

    const scaledWidth = svgWidth * scaleFactor;
    const scaledHeight = svgHeight * scaleFactor;

    const offsetX = (width - scaledWidth) / 2;
    const offsetY = (height - scaledHeight) / 2;

    const svgData = new XMLSerializer().serializeToString(svgElement);
    const img = new Image();
    img.onload = () => {

        ctx.drawImage(img, offsetX, offsetY, scaledWidth, scaledHeight);

        const link = document.createElement('a');
        link.href = canvas.toDataURL('image/png');
        link.download = 'image.png';

        link.click();
    };
    img.src = 'data:image/svg+xml;base64,' + btoa(svgData);
});


