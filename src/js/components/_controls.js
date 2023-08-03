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
    const closeModal = document.querySelector('.close-modal');

    team.forEach((teamMember) => {
        const overlay = teamMember.nextElementSibling;
        teamMember.addEventListener('click', () => {
            overlay.classList.add('show-modal');
        });
    });

    closeModal.addEventListener('click', () => {
        // overlay.classList.remove('show-modal');
        console.log('yep-nope?');
    });

    /* open and close awards modal
------------------------------------------------------------------------------------------------------------------ */

    const awardsBtn = document.querySelector('.awards-control');
    const awardsOverlay = document.querySelector('.awards-overlay');
    const closeAwards = document.querySelector('.awards-close');
    // const closeModal = document.querySelector('.close-modal');

    awardsBtn.addEventListener('click', () => {
        awardsOverlay.classList.add('show-awards');
        console.log('yup?');
    });

    closeAwards.addEventListener('click', () => {
        awardsOverlay.classList.remove('show-awards');
        console.log('yup?');
    });

    /* toggle filters
------------------------------------------------------------------------------------------------------------------ */
    // const toggleFilter = document.querySelector('.toggle-filters');
    // const sectors = document.querySelector('.sectors-filter');
    // const services = document.querySelector('.services-filter');

    // toggleFilter.addEventListener('click', () => {
    //     sectors.classList.toggle('show-filter');
    //     services.classList.toggle('show-filter');
    //     console.log('toggle-filters clicked..');
    // });
}
