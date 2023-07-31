export function controls() {
    /* toggle primary nav
------------------------------------------------------------------------------------------------------------------ */
    const navicon = document.querySelector('.navicon');
    const nav = document.querySelector('.primary-nav');

    navicon.addEventListener('click', () => {
        nav.classList.toggle('show-nav');
        console.log('navicon clicked');
    });

    /* open and close modal
------------------------------------------------------------------------------------------------------------------ */

    const openModal = document.querySelector('.team-member-image');
    const modalOverlay = document.querySelector('.team-member__overlay');

    openModal.addEventListener('click', () => {
        modalOverlay.classList.add('show-modal');
        console.log('open modal clicked..');
    });

    const closeModal = document.querySelector('.close-modal');

    closeModal.addEventListener('click', () => {
        modalOverlay.classList.remove('show-modal');
    });
}
