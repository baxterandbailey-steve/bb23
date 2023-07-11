export function controls() {
    /* toggle primary nav
------------------------------------------------------------------------------------------------------------------ */
    const navicon = document.querySelector('.navicon');
    const nav = document.querySelector('.primary-nav');

    navicon.addEventListener('click', () => {
        nav.classList.toggle('show-nav');
    });
}
