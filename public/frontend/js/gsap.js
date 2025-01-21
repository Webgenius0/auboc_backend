gsap.registerPlugin(ScrollTrigger);

// scroll snap

const heroHorizontalScroll = () => {
  let wrappers = document.querySelectorAll(".vertical--scroll--wrapper");

  if (wrappers.length > 0) {
    gsap.registerPlugin(ScrollTrigger);

    const setupScrollTrigger = (wrapper) => {
      let sections = gsap.utils.toArray(
        wrapper.querySelectorAll(".verti--scroll")
      );

      // Check if sections exist
      if (sections.length > 0) {
        gsap.to(sections, {
          xPercent: -100 * (sections.length - 1),
          ease: "power1.out",
          scrollTrigger: {
            trigger: wrapper,
            pin: true,
            scrub: 1,
            start: "2% top",
            // Uncomment to enable snapping
            // snap: 1 / (sections.length - 1),
            end: () => "+=" + wrapper.offsetWidth,
          },
        });
      }
    };

    // Function to initialize or kill scroll trigger based on window width
    const handleResize = () => {
      wrappers.forEach((wrapper) => {
        if (window.innerWidth >= 992) {
          setupScrollTrigger(wrapper); // Setup scroll if width is 768px or more
        } else {
          // Kill existing scroll triggers if width is less than 768px
          ScrollTrigger.getAll().forEach(trigger => trigger.kill());
        }
      });
    };

    // Initial setup
    handleResize();
    
    // Add resize event listener
    window.addEventListener('resize', handleResize);
  }
};

heroHorizontalScroll();

// new section scroll snap

const newScrollSnap = () => {
  // gsap
  gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

  // selector
  const panels = gsap.utils.toArray(".smooth--section");

  // snap to section
  function goToSection(panel, index) {
    gsap.to(window, {
      scrollTo: { y: panel, autoKill: false },
      duration: 0.2,
      ease: "power2.out",
    });
  }
  // snap on scroll
  function snapIn(index) {
    const tlSnapIn = gsap.timeline();
    panels.forEach((panel, i) => {
      tlSnapIn.to(panel, {
        duration: 0.2,
        scrollTrigger: {
          trigger: panel,
          onEnter: () => goToSection(panel),
          onEnterBack: () => goToSection(panel),
        },
      });
    });
    return tlSnapIn;
  }
  // main timeline
  function initPanelTl(index) {
    const tl = gsap.timeline();
    const snap = snapIn(index);
    tl.add(snap);
    return tl;
  }
  // run timeline
  initPanelTl();
};

newScrollSnap();

//  previous section scroll snap
const sectionScrollSnap = () => {
  let wrappers = document.querySelectorAll(".smooth--section");

  if (wrappers) {
    gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

    // selector
    const sections = gsap.utils.toArray(".smooth--section");

    console.log(sections);

    // snap to section
    function goToSection(section, index) {
      gsap.to(window, {
        scrollTo: { y: section, autoKill: false },
        duration: 1,
        ease: "power2.out",
      });
    }

    // snap on scroll
    function snapIn(index) {
      const tlSnapIn = gsap.timeline();

      sections.forEach((section, i) => {
        tlSnapIn.to(section, {
          duration: 1,
          scrollTrigger: {
            trigger: section,
            onEnter: () => goToSection(section),
            onEnterBack: () => goToSection(section),
          },
        });
      });
      return tlSnapIn;
    }

    // main timeline
    function initPanelTl(index) {
      const tl = gsap.timeline();
      const snap = snapIn(index);
      tl.add(snap);
      return tl;
    }

    // run timeline
    initPanelTl();
  }
};
// sectionScrollSnap();

//  page transition effects
function setupPageTransitions() {
  const links = document.querySelectorAll(".transition-link");
  if (links.length > 0) {
    links.forEach((link) => {
      link.addEventListener("click", (e) => {
        e.preventDefault(); // Prevent default link behavior
        const targetUrl = link.href; // Get the target URL from the link
        console.log(targetUrl);

        // Call the desired animation function
        // Uncomment the desired animation
        fadeOut(targetUrl);
        // slideOut(targetUrl);
        // scaleOut(targetUrl);
        // rotateOut(targetUrl);
      });
    });
  }
}

// Fade out effect
function fadeOut(targetUrl) {
  gsap.to(".smooth--section", {
    duration: 0.75, // Increased duration for smoother transition
    opacity: 0,
    ease: "power2.out", // Easing function for smoothness
    onComplete: () => {
      window.location.href = targetUrl; // Redirect after animation
    },
  });
}

// Slide out effect
function slideOut(targetUrl) {
  gsap.to(".smooth--section", {
    duration: 0.75, // Increased duration
    x: "-100%", // Move to the left
    opacity: 0,
    ease: "power2.out", // Easing function for smoothness
    onComplete: () => {
      window.location.href = targetUrl;
    },
  });
}

// Scale out effect
function scaleOut(targetUrl) {
  gsap.to(".smooth--section", {
    duration: 0.75, // Increased duration
    scale: 0, // Scale down to zero
    opacity: 0,
    ease: "power2.out", // Easing function for smoothness
    onComplete: () => {
      window.location.href = targetUrl;
    },
  });
}

// Rotate out effect
function rotateOut(targetUrl) {
  gsap.to(".smooth--section", {
    duration: 0.75, // Increased duration
    rotation: 360, // Rotate to a full circle
    opacity: 0,
    ease: "power2.out", // Easing function for smoothness
    onComplete: () => {
      window.location.href = targetUrl;
    },
  });
}
// Function to set up transitions

// setupPageTransitions();
