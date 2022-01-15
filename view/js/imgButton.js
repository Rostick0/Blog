const imgButton = document.querySelector('.imgButton');
const imgValue = document.querySelector('.inputFile');
const inputFileText = document.querySelector('.inputFileText');

if (imgButton) { 
    imgButton.addEventListener('mouseout', () => {     
        if (imgValue.value) {
            inputFileText.textContent = 'Ваша картинка загружена';
        }
    })
}