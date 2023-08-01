export function controls() {
    /* toggle primary nav
------------------------------------------------------------------------------------------------------------------ */
    const navicon = document.querySelector('.navicon');
    const nav = document.querySelector('.primary-nav');

    navicon.addEventListener('click', () => {
        nav.lassList.toggle('show-nav');
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
}
