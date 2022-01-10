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

});
