// Get references to the button and SVG container
const downloadButton = document.getElementById('downloadButton');
const svgContainer = document.getElementById('svgContainer');

downloadButton.addEventListener('click', () => {
    // Create a new canvas element
    const canvas = document.createElement('canvas');
    const ctx = canvas.getContext('2d');

    // Set the canvas dimensions to match the SVG dimensions
    const svgElement = svgContainer.querySelector('svg');
    const width = svgElement.clientWidth;
    const height = svgElement.clientHeight;
    canvas.width = width;
    canvas.height = height;

    // Set a white background on the canvas
    ctx.fillStyle = '#fff';
    ctx.fillRect(0, 0, width, height);

    // Create a new Image object and load the SVG as data URL
    const svgData = new XMLSerializer().serializeToString(svgElement);
    const img = new Image();
    img.onload = () => {
        // Draw the white background
        ctx.drawImage(img, 0, 0);

        // Create a temporary link element
        const link = document.createElement('a');
        link.href = canvas.toDataURL('image/png');
        link.download = 'image.png';

        // Simulate a click on the link to trigger the download
        link.click();
    };
    img.src = 'data:image/svg+xml;base64,' + btoa(svgData);
});

