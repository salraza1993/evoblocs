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

  // tabs
  const tabMainParent = document.querySelector('.tabMainContainer');
  const tabButtons = tabMainParent.querySelectorAll('.tab');
  const tabData = tabMainParent.querySelectorAll('.tabData');
  tabButtons.forEach(tab => {
    tab.addEventListener('click', function () {
      tabButtons.forEach(item => item.classList.remove('active'));
      tabData.forEach(item => item.classList.remove('active'));

      let thisId = this.getAttribute('id');
      this.classList.add('active');
      let currentTabData = document.querySelector(`#data-${thisId}`);
      currentTabData.classList.add('active');
    });
  });


  // Hamburger Menu
  const hamburgerMenuButton = document.querySelector('.hamburgerMenuButton');
  const menuSection = document.querySelector('.menuSection');
  const animationWrapper = document.querySelector('.animationWrapper');
  hamburgerMenuButton.addEventListener('click', function (e) {
    const thisParent = this.closest('.hamburgerMenuButtonContainer');
    thisParent.classList.toggle('opened');
    this.classList.toggle('active');
    const animationDelay = 1000;

    if (this.classList.contains('active')) {
      animationWrapper.classList.add('active');
      setTimeout(() => {
        animationWrapper.classList.add('removeActive');
      }, animationDelay);
    } else {
      animationWrapper.classList.remove('active');
      animationWrapper.classList.remove('removeActive');
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
  }

  lightModeButton.addEventListener('click', function () {
    lightMode = localStorage.getItem('lightMode');

    if (lightMode !== 'enabled') {
      console.log(lightMode);
      enableLightMode();
    } else {
      diableLightMode();
    }

  });

});
