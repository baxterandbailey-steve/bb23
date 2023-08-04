export function controls() {
    /* toggle primary nav
------------------------------------------------------------------------------------------------------------------ */
    const navicon = document.querySelector('.navicon');
    const nav = document.querySelector('.primary-nav');

    navicon.addEventListener('click', () => {
        nav.classList.toggle('show-nav');
    });

    /* open and close team modal
------------------------------------------------------------------------------------------------------------------ */

    const team = document.querySelectorAll('.team-member');
    const closeModal = document.querySelectorAll('.close-modal');

    team.forEach((teamMember) => {
        const teamOverlay = teamMember.nextElementSibling;
        teamMember.addEventListener('click', () => {
            teamOverlay.classList.add('show-modal');
        });
    });

    closeModal.forEach((close) => {
        const teamOverlay = close.parentElement.parentElement.parentElement;
        close.addEventListener('click', () => {
            teamOverlay.classList.remove('show-modal');
        });
    });

    /* open and close awards modal
------------------------------------------------------------------------------------------------------------------ */

    /* toggle filters
------------------------------------------------------------------------------------------------------------------ */
    const toggleFilters = document.querySelector('.toggle-filters');
    const sectors = document.querySelector('.sectors-filter');
    const services = document.querySelector('.services-filter');

    toggleFilters.addEventListener('click', () => {
        sectors.classList.toggle('show-filter');
        services.classList.toggle('show-filter');
        console.log('toggle-filters clicked..');
    });

    // const showAwards = document.querySelector('.awards-toggle');
    // const awardsOverlay = document.querySelector('.awards-overlay');
    // const closeAwards = document.querySelector('.awards-close');

    // showAwards.addEventListener('click', () => {
    //     awardsOverlay.classList.add('show-awards');
    // });

    // closeAwards.addEventListener('click', () => {
    //     awardsOverlay.classList.remove('show-awards');
    // });
}
