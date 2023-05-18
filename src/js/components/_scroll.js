export function scroll() {
    /* swap logos and change header styling on scroll
    --------------------------------------------------------------------------------------------------------- */
    // get banner height
    let banner = document.querySelector('.banner');
    let bannerHeight = banner.offsetHeight;
    console.log(bannerHeight);

    // insert banner height margin-top on main
    const main = document.querySelector('main');
    main.style.marginTop = bannerHeight + 'px';

    // object intersect attaching scrolled class to header
    const header = document.querySelector('header');
    const statement = document.querySelector('.statement');
    const statementOptions = {
        //rootMargin: "-400px 0px 0px 0px"
    };
    const statementObserver = new IntersectionObserver(function (entries) {
        // note:  statementObserver removed from const [above]
        entries.forEach((entry) => {
            if (!entry.isIntersecting) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    }, statementOptions);
    statementObserver.observe(statement);
}
