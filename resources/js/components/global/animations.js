
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

/**
 * Public methodes
 */

function startAnimations() {
    sectionToSection();
};

export default startAnimations;