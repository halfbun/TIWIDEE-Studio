document.addEventListener("DOMContentLoaded", function () {
    el_autohide = document.querySelector(".autohide");

    if (el_autohide) {
        var last_scroll_top = 0;
        window.addEventListener("scroll", function () {
            let scroll_top = window.scrollY;
            if (scroll_top < last_scroll_top) {
                el_autohide.classList.remove("scrolled-down");
                el_autohide.classList.add("scrolled-up");
            } else {
                el_autohide.classList.remove("scrolled-up");
                el_autohide.classList.add("scrolled-down");
            }
            last_scroll_top = scroll_top;
        });
        // window.addEventListener
    }
    // if
});
// DOMContentLoaded  end

$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() < $("#home").height()) {
            $(".navbar").removeClass("bg-light");
            $(".navbar").removeClass("navbar-light");
            $(".navbar").removeClass("scrolled-up");
            $(".navbar").addClass("navbar-dark");
        } else {
            $(".navbar").addClass("bg-light");
            $(".navbar").addClass("navbar-light");
            $(".navbar").removeClass("navbar-dark");
        }
    });
});

$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() < $("#home").height()) {
            $(".nav-logo").removeClass("nav-logo-green");
            $(".nav-logo").addClass("nav-logo-white");
        } else {
            $(".nav-logo").addClass("nav-logo-green");
            $(".nav-logo").removeClass("nav-logo-white");
        }
    });
});

// animasi AOS
$(document).ready(function () {
    const photoAni = document.querySelectorAll(".photo-card");
    const envelopeAni = document.querySelectorAll(".envelope-square");
    const serviceAni = document.querySelectorAll(".card-service");
    const cardOneAni = document.querySelectorAll(".card-1");
    const cardOneContentAni = document.querySelectorAll(".card-1-contain");
    const cardTwoAni = document.querySelectorAll(".card-2");
    const cardTwoContentAni = document.querySelectorAll(".card-2-contain");

    photoAni.forEach((div, i) => {
        div.dataset.aos = "fade-left";
        div.dataset.aosDelay = i * 500;
        div.dataset.aosDuration = 2000;
    });

    envelopeAni.forEach((div) => {
        div.dataset.aos = "fade-up";
        div.dataset.aosDuration = 2000;
    });

    serviceAni.forEach((div) => {
        div.dataset.aos = "fade-up";
        div.dataset.aosDuration = 2000;
    });

    cardOneAni.forEach((div) => {
        div.dataset.aos = "fade-left";
        div.dataset.aosDuration = 2000;
    });

    cardTwoAni.forEach((div) => {
        div.dataset.aos = "fade-right";
        div.dataset.aosDuration = 2000;
    });

    cardOneContentAni.forEach((div) => {
        div.dataset.aos = "fade-right";
        div.dataset.aosDuration = 2000;
    });

    cardTwoContentAni.forEach((div) => {
        div.dataset.aos = "fade-left";
        div.dataset.aosDuration = 2000;
    });

    AOS.init({});
    // Animasi GSAP
});

// preloader

window.onload = () => {
    const anchors = document.querySelectorAll("a");
    const transition_el = document.querySelector(".transition");

    setTimeout(() => {
        transition_el.classList.remove("is-active");
    }, 500);

    for (let i = 0; i < anchors.length; i++) {
        const anchor = anchors[i];

        anchor.addEventListener("click", (e) => {
            e.preventDefault();
            let target = e.target.href;

            console.log(transition_el);

            transition_el.classList.add("is-active");

            console.log(transition_el);

            setInterval(() => {
                window.location.href = target;
            }, 500);
        });
    }
};

// faq collapse
$(".head").click(function () {
    $(this).toggleClass("active");
    $(this).parent().find(".arrow").toggleClass("arrow-animate");
    $(this).parent().find(".content").slideToggle(280);
});

// icon from Font Awesome was used in accordion-1

// expand cards
const panels = document.querySelectorAll(".panel");

panels.forEach((panel) => {
    panel.addEventListener("click", () => {
        removeActiveClasses();
        panel.classList.add("active");
    });
});

const removeActiveClasses = () => {
    panels.forEach((panel) => {
        panel.classList.remove("active");
    });
};
