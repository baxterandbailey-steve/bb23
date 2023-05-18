export function scroll() {
    /* swap logos and change header styling on scroll
    --------------------------------------------------------------------------------------------------------- */
    // get banner height
    let banner = document.querySelector('.banner');

    const bannerHeight = banner.offsetHeight;
    console.log('banner height is ' + bannerHeight + 'px');

    // insert banner height margin-top on main
    const main = document.querySelector('main');
    main.style.marginTop = bannerHeight + 'px';

    //object intersect attaching scrolled class to header
    const header = document.querySelector('h1');
    const statement = document.querySelector('.trigger-intersect');
    const statementOptions = {
        //rootMargin: '-10700px 0px 0px 0px'
    };
    const statementObserver = new IntersectionObserver(function (entries) {
        // note:  statementObserver removed from const [above]
        entries.forEach((entry) => {
            if (!entry.isIntersecting) {
                header.classList.add('h1-scrolled');
            } else {
                header.classList.remove('h1-scrolled');
            }
        });
    }, statementOptions);
    statementObserver.observe(statement);
}
