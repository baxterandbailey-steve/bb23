export function scroll() {
    /* swap logos and change header styling on scroll
------------------------------------------------------------------------------------------------------------------ */
    const header = document.querySelector('header');
    const statement = document.querySelector('.statement');
    const statementOptions = {
        //rootMargin: "-400px 0px 0px 0px"
    };
    const statementObserver = new IntersectionObserver(function (entries, statementObserver) {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) {
                header.classList.add('swap-logo');
            } else {
                header.classList.remove('swap-logo');
            }
        });
    }, statementOptions);
    statementObserver.observe(statement);
}
