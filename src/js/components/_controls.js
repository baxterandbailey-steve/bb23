export function controls() {
    /* toggle primary nav
------------------------------------------------------------------------------------------------------------------ */
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.primary-nav');

    burger.addEventListener('click', () => {
        nav.classList.toggle('show-nav');
    });
}
