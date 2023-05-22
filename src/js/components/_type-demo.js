export function typeDemo() {
    const toggleBg = document.querySelector('.toggle-bg');
    const body = document.querySelector('body');

    toggleBg.addEventListener('click', function () {
        body.classList.toggle('bg-toggled');
    });
}
