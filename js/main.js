document.addEventListener("DOMContentLoaded", function (e) {

  // var simpleTextSlider = new Swiper(".simpleTextSlider", {
  //   slidesPerView: 1,
  //   loop: true,
  //   autoplay: {
  //     delay: 5000,
  //     disableOnInteraction: false,
  //   },
  //   pagination: {
  //     el: ".swiper-pagination",
  //     clickable: true,
  //   },
  // });
  // var aboutContentSlider = new Swiper("#aboutContentSlider", {
  //   slidesPerView: 1,
  //   speed: 1000,
  //   autoplay: {
  //     delay: 4000,
  //     disableOnInteraction: false,

  //   },
  //   navigation: {
  //     nextEl: "#onDemandWebinar-swiper-button-next",
  //     prevEl: "#onDemandWebinar-swiper-button-prev",
  //   },
  //   pagination: { el: '.swiper-pagination', clickable: true }
  // });

  $('.simpleTextSlider').slick({
    infinite: true,
    arrows: false,
    slidesToShow: 1,
    slidesToScroll: 1
  });
  $('#aboutContentSlider').slick({
    infinite: true,
    arrows: false,
    slidesToShow: 1,
    slidesToScroll: 1
  });
  $('.homProtfolioWorks').slick({
    infinite: true,
    arrows: false,
    slidesToShow: 1,
    slidesToScroll: 1
  });
  $('.testimonialSlider').slick({
    infinite: true,
    arrows: false,
    slidesToShow: 1,
    slidesToScroll: 1
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


  // tabs
  const tabMainParent = document?.querySelector('.tabMainContainer');
  const tabButtons = document?.querySelectorAll('.tabMainContainer .tab');
  const tabData = document?.querySelectorAll('.tabMainContainer .tabData');
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
    const scrollContainerAll = document?.querySelectorAll(".horizontal__scroll__container");
    scrollContainerAll.forEach(scoller => {
      scoller.addEventListener('wheel', function (evt) {
        evt.preventDefault();
        scoller.scrollLeft += evt.deltaY;
      });
    });
  }
  if (window.innerWidth < 768) {
    $('.close__button').on('click', function () {
      $(this).closest('.card__body').slideUp();
    });
  }

  const accordionMainContainer = $('.accordion');
  const accordionButton = accordionMainContainer.find('.accordion__block');
  accordionButton.on('click', '.accordion__header', function () {
    $(".accordion__body").slideUp(300);
    $(this).next().slideToggle(300);

    $(".accordion__block").not($(this).closest(".accordion__block")).removeClass("active");
    $(this).closest(".accordion__block").toggleClass("active");
  });

  const currentOpenings = $('.currentOpenings');
  const viewDetailButton = currentOpenings.find('.viewDetail');
  viewDetailButton.on('click', function () {
    $(this).closest('.currentOpenings').find(".card__body").slideUp(300).removeClass('active');
    $(this).closest('.currentOpenings').find(".currentOpeningCard").removeClass('active');

    $(this).closest('.currentOpeningCard').find('.card__body').slideToggle(300);
    $(this).closest('.currentOpeningCard').toggleClass('active');

  });

  $(".cvFormButton").click(function () {
    $('html,body').animate({
      scrollTop: $(".careerFormSection").offset().top
    }, '250');
  });

});


// Quotation Form Validation
function quotationForm() {
  err = false;
  var name = $(".form_name").val();
  var email = $(".form_email").val();
  var contact = $(".form_number").val();
  var organization = $(".form_organization").val();
  var service = $(".form_service").val();
  var message = $(".form_message").val();
  $(".inptBox").removeClass("error");
  var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}/igm;

  if (!name) {
    // $(".input_name").addClass("error");
    $('.form_name').addClass("error");
    err = true;
  }
  if (!organization) {
    $('.form_organization').addClass("error");
    err = true;
  }
  if (!service) {
    $('.form_service').addClass("error");
    err = true;
  }
  if (!email) {
    $('.form_email').addClass("error");
    err = true;
  } else if (!validateEmail(email)) {
    $('.form_email').addClass("error");
    err = true;
  }

  if (!contact) {
    $('.form_number').addClass("error");
    err = true;
  } else if (!validateContact(contact)) {
    $('form_number').addClass("error");
    err = true;
  }

  if (!message) {
    $('.form_message').addClass("error");
    err = true;
  }

  if (err == false) {
    $.ajax({
      type: 'POST',
      data: $('#quotationForm').serialize(),
      url: 'get-quotation.php',
      success: function (data) {
        if (data == 'success') {
          alert('data submitted');
          // $('.successMessage').show(500);
          $('#quotationForm').hide();
        } else {
          alert('data not-submitted');
          // $('#submition_msg').text('Something Went Wrong');
          $('.quotationForm').show(500);
        }
      }
    });
  }
}

function validateEmail(email) {
  var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

function validateContact(contact) {
  var phoneno = /^\d{10}$/;
  return contact.match(phoneno);
}