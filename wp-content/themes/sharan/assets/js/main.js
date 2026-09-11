(() => {
  "use strict";

  const quoteStatus = document.querySelector("#quote-status");
  const quoteResult = new URLSearchParams(window.location.search).get("quote");

  if (quoteStatus && quoteResult) {
    const sent = quoteResult === "sent";
    quoteStatus.textContent = sent
      ? "Thank you. Your quote request has been sent successfully."
      : "Sorry, your quote request could not be sent. Please try again or contact us directly.";
    quoteStatus.className = `alert ${sent ? "alert-success" : "alert-danger"}`;
  }

  document.querySelectorAll(".needs-validation").forEach((form) => {
    form.addEventListener("submit", (event) => {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add("was-validated");
    });
  });
  document.querySelectorAll("#primaryNav .nav-link").forEach((link) => {
    link.addEventListener("click", () => {
      const nav = document.querySelector("#primaryNav");
      if (nav?.classList.contains("show"))
        bootstrap.Collapse.getOrCreateInstance(nav).hide();
    });
  });
})();

const masthead = document.getElementById("masthead");

if (masthead) {
  let lastScrollY = window.scrollY;
  let ticking = false;
  const scrollThreshold = 80;
  const scrollDelta = 6;

  const updateMasthead = () => {
    const currentScrollY = window.scrollY;
    const isNavOpen = document.body.classList.contains("scni-nav-open");

    if (currentScrollY <= scrollThreshold || isNavOpen) {
      masthead.classList.remove("is-hidden", "is-scrolled");
      lastScrollY = currentScrollY;
      ticking = false;
      return;
    }

    masthead.classList.add("is-scrolled");

    if (currentScrollY > lastScrollY + scrollDelta) {
      masthead.classList.add("is-hidden");
    } else if (currentScrollY < lastScrollY - scrollDelta) {
      masthead.classList.remove("is-hidden");
    }

    lastScrollY = currentScrollY;
    ticking = false;
  };

  updateMasthead();

  window.addEventListener(
    "scroll",
    () => {
      if (!ticking) {
        window.requestAnimationFrame(updateMasthead);
        ticking = true;
      }
    },
    { passive: true },
  );
}

const backToTopButton = document.querySelector(".back-to-top");

if (backToTopButton) {
  const toggleBackToTopButton = () => {
    backToTopButton.classList.toggle("show", window.scrollY > 300);
  };

  toggleBackToTopButton();
  window.addEventListener("scroll", toggleBackToTopButton, { passive: true });
}

const prefersReducedMotion = window.matchMedia(
  "(prefers-reduced-motion: reduce)",
).matches;

const hasGsapScrollTrigger = window.gsap && window.ScrollTrigger;

if (hasGsapScrollTrigger) {
  gsap.registerPlugin(ScrollTrigger);
}

if (!prefersReducedMotion && window.Lenis && hasGsapScrollTrigger) {
  const lenis = new Lenis({
    anchors: true,
  });

  lenis.on("scroll", ScrollTrigger.update);

  gsap.ticker.add((time) => {
    lenis.raf(time * 1000);
  });

  gsap.ticker.lagSmoothing(0);
}

if (!prefersReducedMotion && hasGsapScrollTrigger) {
  gsap.utils.toArray("h1, h2, h3, h4, h5, h6").forEach((heading) => {
    gsap.from(heading, {
      opacity: 0,
      duration: 0.8,
      ease: "power2.out",
      scrollTrigger: {
        trigger: heading,
        start: "top 88%",
        once: true,
      },
    });
  });

  gsap.utils.toArray("img:not(.service-gallery-slide-image)").forEach((image) => {
    gsap.from(image, {
      opacity: 0,
      duration: 1,
      ease: "power2.out",
      scrollTrigger: {
        trigger: image,
        start: "top 88%",
        once: true,
      },
    });
  });
}

if (window.Swiper) {
  document.querySelectorAll(".service-gallery").forEach((slider) => {
    const hasMultipleSlides = slider.querySelectorAll(".swiper-slide").length > 1;
    let serviceGallerySwiper;

    const initialiseServiceGallery = () => {
      if (!serviceGallerySwiper) {
        serviceGallerySwiper = new Swiper(slider, {
          slidesPerView: 1,
          spaceBetween: 24,
          loop: hasMultipleSlides,
          keyboard: {
            enabled: true,
            onlyInViewport: true,
          },
          navigation: hasMultipleSlides
            ? {
                nextEl: slider.querySelector(".service-gallery-button-next"),
                prevEl: slider.querySelector(".service-gallery-button-prev"),
              }
            : false,
          pagination: hasMultipleSlides
            ? {
                el: slider.querySelector(".service-gallery-pagination"),
                clickable: true,
              }
            : false,
          speed: prefersReducedMotion ? 0 : 600,
        });
      } else {
        serviceGallerySwiper.update();
      }
    };

    slider.closest(".service-gallery-modal")?.addEventListener(
      "shown.bs.modal",
      initialiseServiceGallery,
    );
  });
}

if (window.Swiper && document.querySelector(".review-grid")) {
  new Swiper(".review-grid", {
    // autoHeight: true,
    slidesPerView: 1,
    slidesPerGroup: 1,
    spaceBetween: 24,
    loop: true,
    autoplay: {
      delay: 5000,
      pauseOnMouseEnter: true,
    },
    keyboard: {
      enabled: true,
    },
    navigation: {
      nextEl: ".review-button-next",
      prevEl: ".review-button-prev",
    },
    pagination: {
      el: ".review-pagination",
      clickable: true,
    },
    rewind: true,
    speed: prefersReducedMotion ? 0 : 600,
    breakpoints: {
      768: {
        slidesPerView: 3,
        slidesPerGroup: 3,
        spaceBetween: 48,
      },
    },
  });
}
