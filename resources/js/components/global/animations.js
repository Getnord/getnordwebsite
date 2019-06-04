import { TimelineMax, TweenMax, Linear } from 'gsap';
import ScrollMagic from 'scrollmagic';
/**
 * private methodes
 */

// responsible for smooth scrolling from section to section
function sectionToSection() {

    $(document).on('click', 'a[href^="#"]', function(event) {

        event.preventDefault();

        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 800);

    });

};

// scroll revealing certain elements
function scrollReveal() {
    /**
     * Currently we only these animations to trigger on the home page
     * for that we can check if the element we are trying to animate exists in the first place
     * $('#ram_section').length != 0 
     */
    if ( true ) {
        let sm_controller = new ScrollMagic.Controller();

        $('.anim').bind('enterviewport', function(e) {
            $(this).addClass('viewport');
        }).bullseye();

        let scene1 = new ScrollMagic.Scene({
            triggerElement: '#ram_section',
            duration: 600,
            offset: -100
        }).setTween('#ram_section_bg', {
            top: '-75px',
            ease: Linear.easeNone
        }).addTo(sm_controller);

        let scene2 = new ScrollMagic.Scene({
            triggerElement: '#battery_section',
            duration: 600,
            offset: -100
        }).setTween('#battery_section_bg', {
            top: '-75px',
            ease: Linear.easeNone
        }).addTo(sm_controller);
    };

};
/**
 * Public methodes
 */

function startAnimations() {
    sectionToSection();
    scrollReveal();
};

export default startAnimations;