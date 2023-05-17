/* check js running and where from..
------------------------------------------------------------------------------------------------------------------ */
var dateTime = new Date();
console.log('loading from main.js in Baxter and Bailey 2023 on :  ' + dateTime);

/* toggle primary nav
------------------------------------------------------------------------------------------------------------------ */
const burger = document.querySelector('.burger');
const nav = document.querySelector('.primary-nav');

burger.addEventListener('click', () => {
    nav.classList.toggle('show-nav');
});

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

/* tabbable team bios
------------------------------------------------------------------------------------------------------------------ */
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
