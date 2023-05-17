export function team() {
    /* tabbable [for] a11y team bios ------------------------------------------------------------------------------------------------------------ */
    const alldetails = document.querySelectorAll('.details');

    alldetails.forEach((detail) => {
        let btn = detail.querySelector('button');
        let target = detail.nextElementSibling;
        btn.addEventListener('click', () => {
            let expanded = btn.getAttribute('aria-expanded') === 'true';
            btn.setAttribute('aria-expanded', !expanded);
            target.hidden = expanded;
        });
    });
}
