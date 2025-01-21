$(document).ready(function () {
  // counter
  // $(".counter").countMe(40,65);

  // AOS animation
  AOS.init({
    once: true, // Animations will happen only once
    offset: 0, // Offset for triggering animations is set to 0
    duration: 1000, // Duration of animations in milliseconds (1.5 seconds)
    easing: "ease", // Easing function for animations
  });

  // lenis smooth scrolling
  function bodySmoothScroll() {
    const lenis = new Lenis();

    function raf(time) {
      lenis.raf(time);
      requestAnimationFrame(raf);
    }

    requestAnimationFrame(raf);
  }

  // bodySmoothScroll();

  // scroll snap using jquery
  const jqueryScrollSnapping = () => {
    var selector = ".smooth--section";

    var $slides = $(selector);

    var currentSlide = 0;
    var isAnimating = false;

    var stopAnimation = function () {
      setTimeout(function () {
        isAnimating = false;
      }, 300);
    };

    var bottomIsReached = function ($elem) {
      var rect = $elem[0].getBoundingClientRect();
      return rect.bottom <= $(window).height();
    };

    var topIsReached = function ($elem) {
      var rect = $elem[0].getBoundingClientRect();
      return rect.top >= 0;
    };

    document.addEventListener(
      "wheel",
      function (event) {
        var $currentSlide = $($slides[currentSlide]);

        if (isAnimating) {
          event.preventDefault();
          return;
        }

        var direction = -event.deltaY;

        if (direction < 0) {
          // next
          if (currentSlide + 1 >= $slides.length) return;
          if (!bottomIsReached($currentSlide)) return;
          event.preventDefault();
          currentSlide++;
          var $slide = $($slides[currentSlide]);
          var offsetTop = $slide.offset().top;
          isAnimating = true;
          $("html, body").animate(
            {
              scrollTop: offsetTop,
            },
            300,
            stopAnimation
          );
        } else {
          // back
          if (currentSlide - 1 < 0) return;
          if (!topIsReached($currentSlide)) return;
          event.preventDefault();
          currentSlide--;
          var $slide = $($slides[currentSlide]);
          var offsetTop = $slide.offset().top;
          isAnimating = true;
          $("html, body").animate(
            {
              scrollTop: offsetTop,
            },
            300,
            stopAnimation
          );
        }
      },
      { passive: false }
    );
  };

  // jqueryScrollSnapping();

  // captcha selection
  // captcha selection
  function captcha() {
    const options = document.querySelectorAll(".captcha-option");
    let selectedCount = 0;

    options.forEach((option) => {
      option.addEventListener("click", () => {
        option.classList.toggle("active");

        // Update the selected count
        selectedCount = document.querySelectorAll(
          ".captcha-option.active"
        ).length;

        // Check if 2 captchas are selected, and open the modal if true
        if (selectedCount === 2) {
          $("#custom-modal").modal("show");
        }
      });
    });

    // Reset captcha when modal is closed
    $("#custom-modal").on("hidden.bs.modal", function () {
      options.forEach((option) => {
        option.classList.remove("active"); // Remove active class from all options
      });
      selectedCount = 0; // Reset count
    });
  }

  // Initialize the captcha function
  captcha();

  // prevent form submission default behavior
  function preventDefaultSubmit() {
    document.querySelector("#submit").addEventListener("click", (e) => {
      e.preventDefault();
    });
  }
  // preventDefaultSubmit()

  // Custom tab with active class management
  function setupTabs(buttonSelector, contentSelector, activeClass = "active") {
    const tabButtons = document.querySelectorAll(buttonSelector);
    const tabContents = document.querySelectorAll(contentSelector);

    // Ensure there are buttons and contents available
    if (tabButtons.length === 0 || tabContents.length === 0) {
      console.warn("No tab buttons or contents found.");
      return;
    }

    // Ensure the first tab and content are visible by default
    const firstContent = tabContents[0];
    if (firstContent) {
      firstContent.classList.add(activeClass); // Add the active class
    }

    // Handle click event for each button
    tabButtons.forEach((button, index) => {
      button.addEventListener("click", () => {
        // Ensure there's a corresponding tab content for the button clicked
        const activeContent = tabContents[index];
        if (!activeContent) {
          console.warn(`No content found for button at index ${index}`);
          return;
        }

        // Remove active class from all buttons and contents
        tabButtons.forEach((btn) => btn.classList.remove(activeClass));
        tabContents.forEach((content) => content.classList.remove(activeClass));

        // Add active class to the clicked button and its corresponding content
        button.classList.add(activeClass);
        activeContent.classList.add(activeClass);
      });
    });
  }
  // Example usage:
  setupTabs(".bi-common-tab-btn", ".bi-common-tab-content");

  setupTabs(".bi-common-tab-btn", ".event-common-tab");

  // solaiman

  // download buttons
  function tabLogoDownload() {
    let slLogoTabWrapper = document.querySelector(".sl-logo-inner-container");
    if (slLogoTabWrapper) {
      slLogoTabWrapper
        .querySelectorAll(".download-link")
        .forEach(function (link) {
          link.addEventListener("click", function (e) {
            e.preventDefault(); // Prevent default anchor behavior
            const imageUrl = link.getAttribute("data-image");

            const a = document.createElement("a");
            a.href = imageUrl;
            a.download = imageUrl.split("/").pop(); // Use the image file name for download
            a.click(); // Trigger download
          });
        });
    }
  }

  tabLogoDownload();

  function mobileMenu() {
    // Toggle phone menu and icon on menu button click
    $(".menu-button").on("click", function (event) {
      $(this, "ul li span").toggleClass(".menu-btn-icon-rotate");
      $(".phone-menu").slideToggle(500);
      event.stopPropagation(); // Prevent the event from bubbling up
    });

    // Close the phone menu when clicking outside of the menu and button
    $(window).on("click", function (event) {
      if (!$(event.target).closest(".phone-menu, .menu-button").length) {
        if ($(".phone-menu").is(":visible")) {
          // Slide up the phone menu if it's visible
          $(".phone-menu").slideUp(500);
          $(".menu-button").removeClass(".menu-btn-icon-rotate");
        }
      }
    });

    // Prevent clicks inside the phone menu from closing it
    $(".phone-menu").on("click", function (event) {
      event.stopPropagation(); // Prevent closing the menu when clicking inside it
    });
  }

  mobileMenu();

  // counter

  function startCountingWhenVisible() {
    const counters = document.querySelectorAll(".counter");

    // Options for the observer (which part of the element is visible)
    const options = {
      root: null, // Relative to the viewport
      threshold: 0.5, // 50% of the element needs to be visible
    };

    // Create the IntersectionObserver
    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          // Start counting when the element is visible
          const counterElement = entry.target;
          const targetValue = parseInt(
            counterElement.getAttribute("data-count")
          );
          animateCounter(counterElement, targetValue);

          // Stop observing this element since it's already triggered
          observer.unobserve(counterElement);
        }
      });
    }, options);

    // Observe each counter element
    counters.forEach((counter) => observer.observe(counter));
  }

  // Function to animate the counter from 0 to the target value
  function animateCounter(counterElement, targetValue) {
    let startValue = 0;
    const duration = 500; // Duration of the animation in milliseconds
    const stepTime = Math.abs(Math.floor(duration / targetValue));

    const increment = () => {
      startValue += 1;
      counterElement.textContent = startValue;

      if (startValue < targetValue) {
        setTimeout(increment, stepTime);
      } else {
        counterElement.textContent = targetValue;
      }
    };

    increment();
  }
  startCountingWhenVisible();


  //  function to why zally page tab

  const whyZallyTab = () => {
    const tabsItems = document.querySelectorAll('.tab-box');
    const tabButtons = document.querySelectorAll('.why-zally-tab-btn');
    
    tabButtons.forEach((tabButton) => {
      tabButton.addEventListener('click', () => {
        const tabType = tabButton.getAttribute('data-tab-type');
  
        // Remove 'active' class from all tab items and buttons
        tabsItems.forEach((tabItem) => {
          tabItem.classList.remove('active');
        });
        tabButtons.forEach((button) => {
          button.classList.remove('active');
        });
  
        // Add 'active' class to the clicked button
        tabButton.classList.add('active');
  
        // Add 'active' class to the tab item that matches the clicked button's tab type
        tabsItems.forEach((tabItem) => {
          if (tabItem.getAttribute('data-tab-type') === tabType) {
            tabItem.classList.add('active');
          }
        });
      });
    });
  };
  
  whyZallyTab();
  
  




});
