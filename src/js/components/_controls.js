export function controls() {
    /* toggle primary nav
------------------------------------------------------------------------------------------------------------------ */
    const navicon = document.querySelector('.navicon');
    const nav = document.querySelector('.primary-nav');

    navicon.addEventListener('click', () => {
        nav.classList.toggle('show-nav');
        console.log('navicon clicked');
    });

    /* open and close team modal
------------------------------------------------------------------------------------------------------------------ */

    const team = document.querySelectorAll('.team-member');

    team.forEach((teamMember) => {
        const overlay = teamMember.nextElementSibling;
        teamMember.addEventListener('click', () => {
            overlay.classList.add('show-modal');
        });
    });

    //const closeModal = document.querySelector('.close-modal');

    //closeModal.addEventListener('click', () => {
    //  modalOverlay.classList.remove('show-modal');
    //});

    /* toggle filters
------------------------------------------------------------------------------------------------------------------ */
    const toggleFilter = document.querySelector('.toggle-filters');
    const sectors = document.querySelector('.sectors-filter');
    const services = document.querySelector('.services-filter');

    toggleFilter.addEventListener('click', () => {
        sectors.classList.toggle('show-filter');
        services.classList.toggle('show-filter');
        console.log('toggle-filters clicked..');
    });
}
