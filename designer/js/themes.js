function stickyHeader() {
    if ($('.mid-bar').length) {
        var strickyScrollPos = 100;
        if ($(window).scrollTop() > strickyScrollPos) {
            $('.mid-bar').addClass('stricky-fixed');
        } else if ($(this).scrollTop() <= strickyScrollPos) {
            $('.mid-bar').removeClass('stricky-fixed');
        }
    };
}

jQuery(window).on('scroll', function () {
    (function ($) {
        stickyHeader();
    })(jQuery);
});

if ($(".navigation").length) {
    $(".navigation .navbar button").on("click", function () {
        $(".navigation .menu").slideToggle();
        $(this).toggleClass('open');
        return false;
    });
    $(".navigation .ls-submenu").children("a").append(function () {
        return '<button class="dropdown-expander"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g  stroke-width="1"></g><g stroke-linecap="round" stroke-linejoin="round"></g><g > <path fill-rule="evenodd" clip-rule="evenodd" d="M4.29289 8.29289C4.68342 7.90237 5.31658 7.90237 5.70711 8.29289L12 14.5858L18.2929 8.29289C18.6834 7.90237 19.3166 7.90237 19.7071 8.29289C20.0976 8.68342 20.0976 9.31658 19.7071 9.70711L12.7071 16.7071C12.3166 17.0976 11.6834 17.0976 11.2929 16.7071L4.29289 9.70711C3.90237 9.31658 3.90237 8.68342 4.29289 8.29289Z" fill="currentColor"></path> </g></svg></button>';
    });
}

if (document.documentElement.clientWidth < 1023) {
    $(".navigation .menu .dropdown-expander").on("click", function () {
        $(this).parent().parent().children(".ls-dropdown").slideToggle();
        console.log($(this).parents("li"));
        console.log($(this).parents().children(".dropdown-expander").toggleClass("rotated"));
        return false
    })
    $(document).click(function (e) {
        if (!$(e.target).closest('.navigation .navbar button').length) {
            $('.navigation .menu').stop(true).slideUp();
            $(".navigation .navbar button").removeClass('open');

        }
    });
}

wow = new WOW({
    animateClass: 'animated',
    offset: 100,
    mobile: false
});

wow.init();


        // **************************faq section code*********************************************
  document.addEventListener('DOMContentLoaded', function() {
            const leftSection = document.getElementById('leftSection');
            const faqItems = document.querySelectorAll('.faq-item');
            const faqQuestions = document.querySelectorAll('.faq-question');
            
            let openCount = 0;
            const baseHeight = 400;
            const expansionHeight = 80;
             

            function updateLeftSectionHeight() {
                const newHeight = baseHeight + (openCount * expansionHeight);
                leftSection.style.minHeight = newHeight + 'px';
            }

            faqQuestions.forEach((question, index) => {
                question.addEventListener('click', function() {
                    const faqItem = this.parentNode;
                    const isActive = faqItem.classList.contains('active');

                    // Close all other FAQ items first
                    faqItems.forEach(item => {
                        if (item !== faqItem && item.classList.contains('active')) {
                            item.classList.remove('active');
                            openCount--;
                        }
                    });

                    // Toggle current item
                    if (isActive) {
                        faqItem.classList.remove('active');
                        openCount--;
                    } else {
                        faqItem.classList.add('active');
                        openCount++;
                    }

                    updateLeftSectionHeight();
                });
            });

            // Set initial height
            updateLeftSectionHeight();
        });




// *******************what we achived section code************************************************
  document.addEventListener('DOMContentLoaded', () => {

            // --- Function to animate the number counter ---
            const startCounter = (counterElement) => {
                const target = +counterElement.dataset.target;
                let current = 0;
                // Calculate increment to complete animation in approx 2 seconds
                const increment = target / 100;

                const updateCounter = () => {
                    current += increment;
                    if (current < target) {
                        counterElement.innerText = Math.ceil(current);
                        requestAnimationFrame(updateCounter);
                    } else {
                        // Ensure it finishes on the exact target number
                        counterElement.innerText = target;
                    }
                };
                requestAnimationFrame(updateCounter);
            };

            // --- Intersection Observer Setup ---
            const sectionToObserve = document.getElementById('achieved-section');

            if (!sectionToObserve) return;

            const options = {
                root: null, // observes intersections relative to the viewport
                threshold: 0.4 // Trigger when 40% of the element is visible
            };

            const observerCallback = (entries, observer) => {
                entries.forEach(entry => {
                    // When the element is intersecting (visible)
                    if (entry.isIntersecting) {
                        const section = entry.target;
                        
                        // 1. Add 'in-view' class to trigger bar CSS animations
                        section.classList.add('in-view');

                        // 2. Start the number counter
                        const counter = section.querySelector('.counter-number');
                        if (counter) {
                            startCounter(counter);
                        }
                        
                        // 3. Stop observing to prevent re-animation
                        observer.unobserve(section);
                    }
                });
            };

            // Create and start the observer
            const observer = new IntersectionObserver(observerCallback, options);
            observer.observe(sectionToObserve);
        });




       // ****************************matrix section code*******************







 

  // Function to animate number increase

  function animateNumber() {

    const numbers = document.querySelectorAll('.matrix-number');

    

    numbers.forEach((number) => {

      const targetValue = parseInt(number.getAttribute('data-target'));

       const suffix = number.getAttribute('data-suffix') || ""; // fallback if no suffix

      let currentValue = 0;

      

      // Set the interval for incrementing the numbers

      const interval = setInterval(() => {

        if (currentValue < targetValue) {

          currentValue++;

          number.textContent = currentValue + suffix;

        } else {

          clearInterval(interval);

        }

      }, 20); // speed of the animation

    });

  }



  // Run the animation once the page is loaded

  window.addEventListener('load', () => {

    animateNumber();

  });



         // *********************************************new faq section code page********************************

 document.addEventListener('DOMContentLoaded', function () {
            const customAccordions = document.querySelectorAll('.custom-accordion');

            customAccordions.forEach(accordion => {
                const questions = accordion.querySelectorAll('.custom-accordion-question');
                
                questions.forEach(question => {
                    question.addEventListener('click', function () {
                        const parentItem = this.closest('.custom-accordion-item');

                        // This is your logic: close others in the same accordion
                        accordion.querySelectorAll('.custom-accordion-item').forEach(item => {
                            if (item !== parentItem) {
                                item.classList.remove('active');
                            }
                        });
                        
                        // Toggle the clicked item
                        parentItem.classList.toggle('active');
                    });
                });
            });
        });

        // ************************swiper section code of ur partners********************************

         var swiper = new Swiper(".mySwiper", {
            slidesPerView: 2, 
            spaceBetween: 20,
            loop: true, 
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 6,
                    spaceBetween: 20,
                },
            },
        });


    // ******************************progress bar scroll top js*****************************

      const scrollTopBtn = document.getElementById("scrollTopBtn");

    // Show button when user scrolls down 200px
    window.onscroll = function() {
      if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        scrollTopBtn.style.display = "block";
      } else {
        scrollTopBtn.style.display = "none";
      }
    };

    // Scroll to top smoothly
    scrollTopBtn.onclick = function() {
      window.scrollTo({
        top: 0,
        behavior: "smooth"
      });
    };



      function imgMulti(id, url, elm) {
      document.getElementById(`mainImage${id}`).src = url;
      $(elm).addClass('active').siblings().removeClass('active');
    }
