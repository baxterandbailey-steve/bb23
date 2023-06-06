//// AOS ////
import { AOS } from './components/_aos.js';

//// basic details ////
import { base } from './components/_base.js';

//// primary-nav hamburger ////
import { controls } from './components/_controls.js';

//// intersect observer controlling events in header ////
import { scroll } from './components/_scroll.js';

//// tabbable controls [for a11y] to hide-show team profiles ////
import { team } from './components/_team.js';

//// tabbable controls [for a11y] to hide-show team profiles ////
import { typeDemo } from './components/_type-demo.js';

document.addEventListener('DOMContentLoaded', function () {
    // AOS
    AOS.init({
        duration: 800,
        offset: 40
    });

    // base
    base();

    // controls
    controls();

    // scroll
    scroll();

    // team
    team();

    // team
    typeDemo();
});
