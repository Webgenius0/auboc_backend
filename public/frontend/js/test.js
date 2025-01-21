const heroHorizontalScroll = () => {
  if (window.innerWidth > 768) { // Only run on screens larger than 768px
    let wrappers = document.querySelectorAll(".vertical--scroll--wrapper");

    if (wrappers) {
      gsap.registerPlugin(ScrollTrigger);

      wrappers.forEach(wrapper => {
        let sections = gsap.utils.toArray(wrapper.querySelectorAll(".verti--scroll"));

        gsap.to(sections, {
          xPercent: -100 * (sections.length - 1),
          ease: "power1.out",

          scrollTrigger: {
            trigger: wrapper,
            pin: true,
            scrub: 1,
            start: "2% top",
            end: () => "+=" + wrapper.offsetWidth,
          },
        });
      });
    }
  }
};

window.addEventListener("resize", heroHorizontalScroll);
heroHorizontalScroll();
