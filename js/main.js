document.addEventListener("DOMContentLoaded", function (e) {

  var simpleTextSlider = new Swiper(".simpleTextSlider", {
    slidesPerView: 1,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
  var aboutContentSlider = new Swiper("#aboutContentSlider", {
    slidesPerView: 1,
    speed: 1000,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,

    },
    navigation: {
      nextEl: "#onDemandWebinar-swiper-button-next",
      prevEl: "#onDemandWebinar-swiper-button-prev",
    },
    pagination: { el: '.swiper-pagination', clickable: true }
  });

  // Header fixed on scroll
  window.onscroll = getScrollPosition;
  const topHeader = document.querySelector('#topHeader');
  function getScrollPosition() {
    let y = window.pageYOffset;
    if (y > 150) topHeader.classList.add('fixed');
    else topHeader.classList.remove('fixed');
  }

  // Hamburger Menu
  const animationDelay = 1000;
  const hamburgerMenuButton = document.querySelector('.hamburgerMenuButton');
  const menuSection = document.querySelector('.menuSection');
  const animationWrapper = document.querySelector('.animationWrapper');
  hamburgerMenuButton.addEventListener('click', function (e) {
    const thisParent = this.closest('.hamburgerMenuButtonContainer');
    thisParent.classList.toggle('opened');
    this.classList.toggle('active');

    if (this.classList.contains('active')) {
      animationWrapper.classList.add('active');
      animationWrapper.style.width = '100%';
      setTimeout(() => {
        animationWrapper.style.right = 0;
        animationWrapper.style.left = 'initial';
      }, animationDelay);

      setTimeout(() => {
        animationWrapper.style.width = '0%';
      }, animationDelay + 600);
    } else {
      animationWrapper.classList.remove('active');
      animationWrapper.style.width = '100%';
      setTimeout(() => {
        animationWrapper.style.left = 0;
        animationWrapper.style.right = 'initial';
      }, animationDelay);
      setTimeout(() => {
        animationWrapper.style.width = '0%';
      }, animationDelay + 350);
    }

    setTimeout(() => {
      if (this.classList.contains('active')) {
        menuSection.style.width = '100%';
        setTimeout(() => {
          menuSection.classList.add('opened');
        }, animationDelay);
      } else {
        menuSection.style.width = '0';
        menuSection.classList.remove('opened');
      }
    }, animationDelay);

  });

  // Light / Dark Mode
  const lightModeButton = document.querySelector('.lightModeButton');
  // LocalStorage Accessing
  let lightMode = localStorage.getItem("lightMode");
  const enableLightMode = () => {
    document.body.classList.add('lightMode');
    localStorage.setItem('lightMode', 'enabled');
  };
  const diableLightMode = () => {
    document.body.classList.remove('lightMode');
    localStorage.setItem('lightMode', null);
  };
  if (lightMode === 'enabled') {
    enableLightMode();
    lightModeButton.classList.add('active');
  }
  lightModeButton.addEventListener('click', function () {
    lightMode = localStorage.getItem('lightMode');
    if (lightMode !== 'enabled') {
      setTimeout(() => {
        enableLightMode();
        this.classList.add('active');
      }, 500);
    } else {
      setTimeout(() => {
        diableLightMode();
        this.classList.remove('active');
      }, 500);
    }

    hamburgerMenuButton.classList.remove('active');

    animationWrapper.classList.remove('active');

    animationWrapper.style.width = '100%';
    setTimeout(() => {
      animationWrapper.style.left = 0;
      animationWrapper.style.right = 'initial';
    }, animationDelay);
    setTimeout(() => {
      animationWrapper.style.width = '0%';
    }, animationDelay + 350);

    setTimeout(() => {
      menuSection.style.width = '0%';
      menuSection.classList.remove('opened');
    }, animationDelay);

  });

  const closePopupButton = document.querySelector('.closePopup');
  const ctaButton = document.querySelectorAll('.ctaButton');
  const overlayContainer = document.querySelector('.overlaySec');
  ctaButton.forEach(button => {
    button.addEventListener('click', function () {
      setTimeout(() => {
        document.body.style.overflow = 'hidden';
        overlayContainer.style.display = 'block';
      }, 200);
      setTimeout(() => {
        overlayContainer.classList.add('active');
      }, 700);
    });
  });

  closePopupButton.addEventListener('click', function () {
    this.closest('.overlaySec').classList.remove('active');
    setTimeout(() => {
      document.body.style.overflow = 'initial';
      this.closest('.overlaySec').style.display = 'none';
    }, 1000);
  });

  if (window.innerWidth > 767) {
    const scrollContainer = document.querySelector(".horizontal__scroll__container");
    scrollContainer.addEventListener("wheel", (evt) => {
      evt.preventDefault();
      console.log(scrollContainer.scrollLeft += evt.deltaY);
      scrollContainer.scrollLeft += evt.deltaY;
    });
  }


});
