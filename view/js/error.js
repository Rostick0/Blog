const errorBlock = document.querySelector('.error');

if (errorBlock) {
    setTimeout(() => {
        window.location.replace('/');
    }, 2000)
}