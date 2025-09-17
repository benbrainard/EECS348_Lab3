document.getElementById('apply').addEventListener('click', function() {
    const rgb = document.getElementById('rgb').value.split(',').map(Number);
    const borderWidth = document.getElementById('border-width').value;
    const textBlock = document.getElementById('text-block');

    textBlock.style.color = `rgb(${rgb[0]}, ${rgb[1]}, ${rgb[2]})`;
    textBlock.style.border = `${borderWidth}px solid rgb(${rgb[0]}, ${rgb[1]}, ${rgb[2]})`;
});