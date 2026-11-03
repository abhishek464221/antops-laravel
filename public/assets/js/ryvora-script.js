let i = 2;
const screenWidth = $(window).width();
function getAccordion(element_id, content_class, accordion_id, screen) {
  if ($(window).width() < screen) {
    var concat = "";
    var obj_tabs = $(element_id + " li").toArray();
    var obj_cont = $(content_class + " .tab-pane").toArray();

    jQuery.each(obj_tabs, function (n, val) {
      concat +=
        '<div id="' +
        accordion_id +
        "-panel-" +
        n +
        '" class="panel panel-default">';
      concat +=
        '<div class="panel-heading" role="tab" id="heading' +
        accordion_id +
        "-" +
        n +
        '">';
      concat += '<h4 class="panel-title">';
      concat +=
        '<a class="collapsed" role="button" data-bs-toggle="collapse" data-parent="#' +
        accordion_id +
        '" data-bs-target="#collapse' +
        accordion_id +
        "-" +
        n +
        '" aria-expanded="false" aria-controls="collapse' +
        accordion_id +
        "-" +
        n +
        '">';
      concat += val.innerText;
      concat += "</a></h4>";
      concat += "</div>";
      concat +=
        '<div id="collapse' +
        accordion_id +
        "-" +
        n +
        '" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading' +
        accordion_id +
        "-" +
        n +
        '">';
      concat += '<div class="panel-body">' + obj_cont[n].innerHTML + "</div>";
      concat += "</div>";
      concat += "</div>";
    });

    $("#" + accordion_id).html(concat);
    $("#" + accordion_id)
      .find(".panel-collapse:first")
      .addClass("in");
    $("#" + accordion_id)
      .find(".panel-title a:first")
      .attr("aria-expanded", "true");
    $(element_id).remove();
    $(content_class).remove();
  }
}

$(document).ready(function () {
  checkViewportWidth();
  InitiateSlider();
  var header = $(".header");
  var headerHeight = header.outerHeight();

  var agileRadius = 200;
  var agileItemDot = $(".itemDot");
  var agileDotCircle = $(".dotCircle");
  var agileWidth = agileDotCircle.width();
  agileRadius = agileWidth / 2.5;

  var agileHeight = agileDotCircle.height();
  var angle = 0,
    step = (2 * Math.PI) / agileItemDot.length;
  agileItemDot.each(function () {
    var x = Math.round(
      agileWidth / 2 + agileRadius * Math.cos(angle) - $(this).width() / 2
    );
    var y = Math.round(
      agileHeight / 2 + agileRadius * Math.sin(angle) - $(this).height() / 2
    );

    $(this).css({
      left: x + "px",
      top: y + "px",
    });
    angle += step;
  });

  $(document.body).on("click", ".panel-default .panel-title a", function (e) {
    e.preventDefault();
    var ele = $(this);
    var parentGroup = ele.parent().parent().parent().parent();
    var parentSubGroup = ele.parent().parent().parent();
    parentGroup.find(".panel-collapse").removeClass("show");
    parentGroup.find(".panel-collapse").removeClass("showActive");

    if (parentSubGroup.hasClass("showActive")) {
      parentSubGroup.removeClass("showActive");
    } else {
      parentSubGroup.find(".panel-collapse").addClass("show");
      parentSubGroup.addClass("showActive");
      ele.removeClass("collapsed");
    }
  });

  if ($(".hire-process-slider").length > 0) {
    hireProcessSlider();
  }
  // Check on window resize
  $(window).resize(function () {
    var headerHeight = header.outerHeight();
    checkViewportWidth();
    if (
      $(window).width() > 1200 &&
      stackCards.length > 0 &&
      intersectionObserverSupported
    ) {
      for (var i = 0; i < stackCards.length; i++) {
        new StackCards(stackCards[i]);
      }
    }

    if (hireProcessSlider && screenWidth > 767) {
      if ($(".hire-process-slider").length > 0) {
        hireProcessSlider.destroy(true, true); // Destroy the instance
        hireProcessSlider = null;
      }
    }
    //if (clientLogoHomeStripe && screenWidth > 992) {
    //    clientLogoHomeStripe.destroy(true, true); // Destroy the instance
    //    clientLogoHomeStripe = null;
    //}
  });

  // getAccordion("#service-tab", 1199);
  // getAccordion("#hire-developer-tab", 1199);

  getAccordion("#service-tab", "#service-tabContent", "accordion-1", 1199);
  getAccordion(
    "#hire-developer-tab",
    "#hire-developer-tabContent",
    "accordion-2",
    1199
  );

  $(document.body).on("click", ".mobile-menu-toggle", function () {
    $(this).toggleClass("open");
    $(".header .main-menu").toggleClass("open");
  });

  $(document.body).on("click", ".close-menu", function () {
    $(this).toggleClass("open");
    $(".header .main-menu").toggleClass("open");
  });

  jQuery(".disc-card .toggle-content").click(function () {
    jQuery(this).parent().find(".more-text").slideToggle();
    // jQuery(this).toggleT
    $(this).text() === "Read More"
      ? $(this).text("Read Less")
      : $(this).text("Read More");
  });

  jQuery(".header.for-mobile ul li.has-children > a").click(function (e) {
    e.preventDefault();
    if (jQuery(this).hasClass("active")) {
      jQuery(this).removeClass("active");
      jQuery(this).next(".mega-menu").slideUp();
    } else {
      jQuery(this).toggleClass("active");
      jQuery(this)
        .parents()
        .siblings()
        .find("a.active")
        .removeClass("active")
        .next()
        .slideUp();
      jQuery(this).next().slideToggle();
    }
  });

  const selectedText = $(".custom-tab-list > div > ul li.active").text();
  $(".tab-dropdown-selected-text").text(selectedText);

  $(window).scroll(function () {
    if ($(this).scrollTop() > headerHeight) {
      $(".header").addClass("sticky");
    } else {
      $(".header").removeClass("sticky");
    }
  });

  if ($(window).width() < 991) {
    $(".tab-dropdown-selected-text").click(function () {
      $(".custom-tab-list > div > ul").slideToggle();
    });

    $(".custom-tab-list > div > ul > li").click(function () {
      var selectedText = $(this).text();
      $(".tab-dropdown-selected-text").text(selectedText);
      $(".custom-tab-list > div > ul").hide();
    });
  }

  var StackCards = function (element) {
    this.element = element;
    this.items = this.element.getElementsByClassName("service-box");
    this.scrollingListener = false;
    this.scrolling = false;
    initStackCardsEffect(this);
  };

  var stackCards = document.getElementsByClassName("card-deck-js");
  var intersectionObserverSupported =
    "IntersectionObserver" in window && "IntersectionObserverEntry" in window;

  if (
    $(window).width() > 1200 &&
    stackCards.length > 0 &&
    intersectionObserverSupported
  ) {
    for (var i = 0; i < stackCards.length; i++) {
      new StackCards(stackCards[i]);
    }
  }

  // Input Upload
  const uploadButton = {
    button: $(".uploadButton-input"),
    $nameField: $(".file-input-group").find(".uploadButton-file-name"),
  };
  uploadButton.button.on("change", function () {
    _populateFileField($(this));
  });

  //   $(".tech-expert-card .technology-tech-stack-list li").each(function () {
  //     $(this).hover(function () {
  //       const itemPosition = $(this).offset();
  //       const itemWidth = $(this).outerWidth();
  //       const cardContainerWidth = $(this)
  //         .find(".tech-hover-content")
  //         .outerWidth();
  //       if (
  //         itemPosition.left + itemWidth + cardContainerWidth >
  //         $(window).width()
  //       ) {
  //         $(this).find(".tech-hover-content").css({
  //           right: "0",
  //           left: "auto",
  //         });
  //       } else {
  //         $(this).find(".card-container").css({
  //           left: "0",
  //           right: "auto",
  //         });
  //       }
  //       if (
  //         $(".tech-expert-card .technology-tech-stack-list li").hasClass("active")
  //       ) {
  //         $(".tech-expert-card .technology-tech-stack-list li").removeClass(
  //           "active"
  //         );
  //       }
  //       $(this).addClass("active");
  //     });
  //   });

  $(document).on("click", function (event) {
    if (
      !$(event.target).closest(".tech-hover-content").length &&
      !$(event.target).hasClass("tech-hover-content")
    ) {
      $(".tech-expert-card .technology-tech-stack-list li").removeClass(
        "active"
      );
    }
  });

  $(".itemDot").click(function () {
    var dataTab = $(this).data("tab");
    $(".itemDot").removeClass("active");
    $(this).addClass("active");
    $(".CirItem").removeClass("active");
    $(".CirItem" + dataTab).addClass("active");
    i = dataTab;

    $(".dotCircle").css({
      transform: "rotate(" + (360 - (i - 1) * 36) + "deg)",
      transition: "2s",
    });
    $(".itemDot").css({
      transform: "rotate(" + (i - 1) * 36 + "deg)",
      transition: "1s",
    });
  });

  setInterval(function () {
    var dataTab = $(".itemDot.active").data("tab");
    if (dataTab > 6 || i > 6) {
      dataTab = 1;
      i = 1;
    }
    $(".itemDot").removeClass("active");
    $('[data-tab="' + i + '"]').addClass("active");
    $(".CirItem").removeClass("active");
    $(".CirItem" + i).addClass("active");
    i++;

    $(".dotCircle").css({
      transform: "rotate(" + (360 - (i - 2) * 36) + "deg)",
      transition: "2s",
    });
    $(".itemDot").css({
      transform: "rotate(" + (i - 2) * 36 + "deg)",
      transition: "1s",
    });
  }, 5000);

  $(".testimonial-card").each(function () {
    var ele = $(this);

    var LengthOfWord = 60;
    if (ele.hasClass("testimonial-card-home")) {
      LengthOfWord = 70;
    }

    var container = $(this);
    var paragraph = container.find(".testimonial-para");
    var button = container.find(".read-more");

    var fullText = paragraph.text();
    var words = fullText.split(" ");

    if (words.length > LengthOfWord) {
      var truncatedText = words.slice(0, LengthOfWord).join(" ") + "...";
      paragraph
        .data({
          "full-text": fullText,
          "truncated-text": truncatedText,
        })
        .text(truncatedText);
      button.show();
    } else {
      button.hide();
    }

    button.on("click", function () {
      var isExpanded = paragraph.text() === paragraph.data("full-text");
      paragraph.text(
        isExpanded
          ? paragraph.data("truncated-text")
          : paragraph.data("full-text")
      );
      button.text(isExpanded ? "Read More" : "Read Less");
    });
  });

  // if (jQuery(document).find(".home-counter-wrapper").length > 0 && jQuery(window).width() < 768) {
  //     var items = jQuery(document).find(".home-counter-wrapper .home-counter-wrap");
  //     var activeIndex = 0;
  //     function toggleBoxActiveClass() {
  //         items.eq(activeIndex).removeClass("active");
  //         activeIndex = (activeIndex + 1) % items.length;
  //         setTimeout(function () {
  //             items.eq(activeIndex).addClass("active");
  //         }, 500);
  //     }
  //     items.eq(activeIndex).addClass("active");
  //     setInterval(toggleBoxActiveClass, 3500);
  // }
});

function initStackCardsEffect(element) {
  // use Intersection Observer to trigger animation
  var observer = new IntersectionObserver(stackCardsCallback.bind(element));
  observer.observe(element.element);
}

function stackCardsCallback(entries) {
  // Intersection Observer callback
  if (entries[0].isIntersecting) {
    // cards inside viewport - add scroll listener
    if (this.scrollingListener) return; // listener for scroll event already added
    stackCardsInitEvent(this);
  } else {
    // cards not inside viewport - remove scroll listener
    if (!this.scrollingListener) return; // listener for scroll event already removed
    window.removeEventListener("scroll", this.scrollingListener);
    this.scrollingListener = false;
  }
}

function stackCardsInitEvent(element) {
  element.scrollingListener = stackCardsScrolling.bind(element);
  window.addEventListener("scroll", element.scrollingListener);
}

function stackCardsScrolling() {
  if (this.scrolling) return;
  this.scrolling = true;
  window.requestAnimationFrame(animateStackCards.bind(this));
}

function animateStackCards() {
  var top = this.element.getBoundingClientRect().top;
  var offsetTop = 100,
    cardHeight = 500,
    marginY = 15;
  for (var i = 0; i < this.items.length; i++) {
    // cardTop/cardHeight/marginY are the css values for the card top position/height/Y offset
    var scrolling = offsetTop - top - i * (cardHeight + marginY);
    // debugger;
    if ($(window).width() > 1200 && scrolling > 0) {
      // card is fixed - we can scale it down
      this.items[i].setAttribute(
        "style",
        "transform: scale(" +
          (cardHeight - scrolling * 0.01) / cardHeight +
          ");"
      );
    }
  }

  this.scrolling = false;
}
function _populateFileField(button) {
  const selectedFile = [];
  for (let i = 0; i < button.get(0).files.length; ++i) {
    selectedFile.push(button.get(0).files[i].name + "<br>");
  }
  button.parent().find(".uploadButton-file-name").html(selectedFile);
}
function InitiateSlider() {
  var portfolioSlider = new Swiper(".portfolio-slider", {
    slidesPerView: "auto",
    spaceBetween: 30,
    navigation: {
      nextEl: ".portfolio-slider .swiper-button-next",
      prevEl: ".portfolio-slider .swiper-button-prev",
    },
  });
    var homeSolutionsSlider = new Swiper(".solutions-slider", {
    slidesPerView: 1.1,
    spaceBetween: 30,
    loop: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    navigation: {
      nextEl: ".solutions-new .swiper-button-next",
      prevEl: ".solutions-new .swiper-button-prev",
    },
    breakpoints: {
      640: {
        slidesPerView: 1.3,
        spaceBetween: 24,
      },
      992: {
        slidesPerView: 1.6,
        spaceBetween: 30,
      },
      1440: {
        slidesPerView: 2.1,
        spaceBetween: 30,
      },
    },
  });
    var dynamicServicePortfolioSlider = new Swiper(".dynamic-service-portfolio-slider", {
    slidesPerView: 1.1,
        spaceBetween: 16,
        loop: true,
    navigation: {
        nextEl: ".service-portfolio-slider .swiper-button-next",
        prevEl: ".service-portfolio-slider .swiper-button-prev",
        },
        breakpoints: {
            640: {
                slidesPerView: 1.1,
                spaceBetween: 16,
            },
            768: {
                slidesPerView: 1.1,
                spaceBetween: 10,
            },
            992: {
                slidesPerView: 1.1,
                spaceBetween: 30,
            },
            1200: {
                slidesPerView: 1.1,
                spaceBetween: 30,
            },
        },
  });


    var dynamicServiceTestimonialSlider = new Swiper(".dynamic-service-testimonial-slider", {
        slidesPerView: "auto",
        spaceBetween: 30,
        loop: true,
        navigation: {
            nextEl: ".dynamic-service-testimonial-slider-wrap .swiper-button-next",
            prevEl: ".dynamic-service-testimonial-slider-wrap .swiper-button-prev",
        },
    });

  var awardSlider = new Swiper(".award-slider", {
    spaceBetween: 30,
    navigation: {
      nextEl: ".award-slider .swiper-button-next",
      prevEl: ".award-slider .swiper-button-prev",
    },
    breakpoints: {
      0: {
        slidesPerView: 4,
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
        },
      },
      640: {
        slidesPerView: 5,
      },
      768: {
        slidesPerView: 5,
      },
      992: {
        slidesPerView: 5,
      },
      1200: {
        slidesPerView: 5,
        navigation: {
          enabled: false,
        },
      },
    },
  });

  var awardSlider = new Swiper(".award-slider-home", {
    spaceBetween: 30,
    navigation: {
      nextEl: ".award-slider-home .swiper-button-next",
      prevEl: ".award-slider-home .swiper-button-prev",
    },
    breakpoints: {
      0: {
        slidesPerView: 2,
      },
      640: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
      992: {
        slidesPerView: 3,
      },
      1200: {
        slidesPerView: 3,
        navigation: {
          enabled: false,
        },
      },
    },
  });

  var hireDeveloperSlider = new Swiper(".hire-developer-slider", {
    slidesPerView: 3,
    spaceBetween: 20,
    loop: true,
    navigation: {
      nextEl: ".hire-developer-swiper-btn .swiper-button-next",
      prevEl: ".hire-developer-swiper-btn .swiper-button-prev",
    },
    breakpoints: {
      640: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      992: {
        slidesPerView: 2,
      },
      1200: {
        slidesPerView: 3,
      },
      1400: {
        slidesPerView: 4,
      },
    },
  });

  var hireCaseStudySlider = new Swiper(".hire-case-study", {
    slidesPerView: 3,
    spaceBetween: 20,
    loop: true,
    pagination: {
      el: ".hire-case-study .swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      100: {
        slidesPerView: 1,
      },
      767: {
        slidesPerView: 2,
      },
      992: {
        slidesPerView: 2,
      },
      1200: {
        slidesPerView: 2,
      },
      1400: {
        slidesPerView: 2,
      },
    },
  });

  document.querySelectorAll('.service-box').forEach(function(box) {
    var sliderEl = box.querySelector('.swiper');
    if (sliderEl) {
      new Swiper(sliderEl, {
        spaceBetween: 20,
        navigation: {
          nextEl: box.querySelector('.swiper-button-next'),
          prevEl: box.querySelector('.swiper-button-prev'),
        },
        breakpoints: {
          0: { slidesPerView: 1.2 },
          640: { slidesPerView: 1.2 },
          768: { slidesPerView: 2.2 },
          992: { slidesPerView: 3 },
          1200: { slidesPerView: 3 },
          1400: { slidesPerView: 4 },
        },
      });
    }
  });

  const engagementSlider = new Swiper(".engagement-slider", {
    spaceBetween: 20,
    navigation: {
      nextEl: ".engagement-slider .swiper-button-next",
      prevEl: ".engagement-slider .swiper-button-prev",
    },
    breakpoints: {
      0: {
        slidesPerView: 1.2,
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
        },
        loop: true,
      },
      575: {
        slidesPerView: 1.2,
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
        },
        loop: true,
      },
      640: {
        slidesPerView: 2.2,
      },
      768: {
        slidesPerView: 2.2,
      },
      992: {
        slidesPerView: 3,
      },
      1200: {
        slidesPerView: 3,
      },
    },
  });

  const solutionStorySlider = new Swiper(".solution-story-slider", {
    spaceBetween: 20,
    slidesPerView: 1,
    navigation: {
      nextEl: ".solution-story-slider-btns .swiper-button-next",
      prevEl: ".solution-story-slider-btns .swiper-button-prev",
    },
  });

  const cultureSlider = new Swiper(".culture-slider", {
    spaceBetween: 30,
    slidesPerView: 1.5,
    centeredSlides: true,
    speed: 10000,
    loop: true,
    allowTouchMove: false,
    disableOnInteraction: true,
    autoplay: {
      delay: 0,
    },
    breakpoints: {
      1920: {
        slidesPerView: 4,
      },
      1366: {
        slidesPerView: 4,
      },
      1200: {
        slidesPerView: 4,
      },
      992: {
        slidesPerView: 3,
      },
      767: {
        slidesPerView: 3,
      },
      576: {
        slidesPerView: 2,
      },
      0: {
        slidesPerView: 2,
      },
    },
  });

  var CaseStudySlider = new Swiper(".case-study-slider", {
    // slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    navigation: {
      nextEl: ".our-case-study .swiper-button-next",
      prevEl: ".our-case-study .swiper-button-prev",
    },
    breakpoints: {
      640: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      992: {
        slidesPerView: 2,
      },
      1200: {
        slidesPerView: 3,
      },
    },
  });

  var testimonialSlider2 = new Swiper(".testimonial-slider-2", {
    // slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    navigation: {
      nextEl: ".testimonial-slider-2 .swiper-button-next",
      prevEl: ".testimonial-slider-2 .swiper-button-prev",
    },
    breakpoints: {
      0: {
        slidesPerView: 1.2,
        spaceBetween: 12,
      },
      576: {
        slidesPerView: 1.5,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 2,
      },
      992: {
        slidesPerView: 3,
      },
      1200: {
        slidesPerView: 3,
      },
    },
  });

  var swiper = new Swiper(".our-work-slider", {
    slidesPerView: "auto",
    spaceBetween: 20,
    // centeredSlides: true
    // pagination: {
    //   el: ".swiper-pagination",
    //   clickable: true,
    // },
  });

  var swiper = new Swiper(".swiper-developer", {
    slidesPerView: "auto",
    spaceBetween: 20,
    navigation: {
      nextEl: ".top-developers .swiper-button-next",
      prevEl: ".top-developers .swiper-button-prev",
    },
  });

  var techSliderLeft = new Swiper(".tech-slider .slide-left", {
    loop: true,
    spaceBetween: 20,
    freeMode: true,
    spaceBetween: 0,
    grabCursor: true,
    slidesPerView: "auto",
    loop: true,
    autoplay: {
      delay: 1,
      disableOnInteraction: true,
    },
    freeMode: true,
    speed: 5000,
    freeModeMomentum: false,
  });
  var clientStripe = new Swiper(".testimonial-type-2-slider", {
    loop: true,
    spaceBetween: 20,
    freeMode: true,
    spaceBetween: 0,
    grabCursor: true,
    slidesPerView: "auto",
    loop: true,
    autoplay: {
      delay: 1,
      disableOnInteraction: true,
    },
    freeMode: true,
    speed: 5000,
    freeModeMomentum: false,
  });

  var clientSliderLeft = new Swiper(".client-slider", {
    slidesPerView: 7,
    spaceBetween: 10,
    loop: true,
    navigation: {
      nextEl: ".client-slider-section .swiper-button-next",
      prevEl: ".client-slider-section .swiper-button-prev",
    },
  });
  var techComboSlider = new Swiper(".tech-combo-slider", {
    slidesPerView: "auto",
    spaceBetween: 30,
    loop: false,
    navigation: {
      nextEl: ".tech-combo-section .swiper-button-next",
      prevEl: ".tech-combo-section .swiper-button-prev",
    },
  });
  var techComboSlider = new Swiper(".portfolio-2-slider", {
    slidesPerView: "auto",
    spaceBetween: 30,
    navigation: {
      nextEl: ".portfolio-type-2 .swiper-button-next",
      prevEl: ".portfolio-type-2 .swiper-button-prev",
    },
  });
  var techSliderRight = new Swiper(".tech-slider .slide-right", {
    loop: true,
    spaceBetween: 20,
    freeMode: true,
    spaceBetween: 0,
    grabCursor: true,
    slidesPerView: "auto",
    loop: true,
    autoplay: {
      delay: 1,
      disableOnInteraction: true,
    },
    freeMode: true,
    speed: 5000,
    freeModeMomentum: false,
  });

  //New Code
  var clientStripe = new Swiper(".testimonial-slider", {
    spaceBetween: 30,
    navigation: {
      nextEl: ".about-solution .swiper-button-next",
      prevEl: ".about-solution .swiper-button-prev",
    },
    breakpoints: {
      0: {
        slidesPerView: 1.2,
      },
      640: {
        slidesPerView: 2.2,
      },
      768: {
        slidesPerView: 3,
      },
      992: {
        slidesPerView: 3,
      },
      1200: {
        slidesPerView: 3,
      },
    },
  });

  var solutionCaseStudy = new Swiper(".solution-case-study", {
    spaceBetween: 30,
    pagination: {
      el: ".solution-case-study .swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      0: {
        slidesPerView: 1.2,
      },
      640: {
        slidesPerView: 2.2,
      },
      768: {
        slidesPerView: 3,
      },
      992: {
        slidesPerView: 2,
      },
      1200: {
        slidesPerView: 3,
      },
    },
  });

  var clientLogoStripe = new Swiper(".client-logo-stripe", {
    spaceBetween: 20,
    slidesPerView: 1.5,
    centeredSlides: true,
    speed: 5500,
    loop: true,
    allowTouchMove: false,
    disableOnInteraction: true,
    autoplay: {
      delay: 0,
    },
    breakpoints: {
      1920: {
        slidesPerView: 7,
      },
      1366: {
        slidesPerView: 7,
      },
      1200: {
        slidesPerView: 7,
      },
      992: {
        slidesPerView: 5,
      },
      767: {
        slidesPerView: 5,
        spaceBetween: 10,
      },
      576: {
        slidesPerView: 4,
      },
      0: {
        slidesPerView: 2,
      },
    },
  });

  var clientStripe = new Swiper(".travel-testimonial-slider", {
    spaceBetween: 30,
    loop: true,
    navigation: {
      nextEl: ".travel-testimonial .swiper-button-next",
      prevEl: ".travel-testimonial .swiper-button-prev",
    },
    breakpoints: {
      0: {
        slidesPerView: 1.2,
      },
      640: {
        slidesPerView: 1.8,
      },
      768: {
        slidesPerView: 2.5,
      },
      992: {
        slidesPerView: 3,
      },
      1200: {
        slidesPerView: 4,
      },
      1400: {
        slidesPerView: 4,
      },
    },
  });
  var clientStripe = new Swiper(".ra-testimonial-slider", {
    spaceBetween: 30,
    loop: true,
    navigation: {
      nextEl: ".ra-testimonial .swiper-button-next",
      prevEl: ".ra-testimonial .swiper-button-prev",
    },
    breakpoints: {
      0: {
        slidesPerView: 1.2,
      },
      640: {
        slidesPerView: 1.8,
      },
      768: {
        slidesPerView: 2.5,
      },
      992: {
        slidesPerView: 3,
      },
      1200: {
        slidesPerView: 4,
      },
      1400: {
        slidesPerView: 4,
      },
    },
  });

  //New Code
  const featureSlider = new Swiper(".feature-slider", {
    spaceBetween: 20,
    slidesPerView: 1,
    navigation: {
      nextEl: ".feature-slider .swiper-button-next",
      prevEl: ".feature-slider .swiper-button-prev",
    },
  });

  var swiper = new Swiper(".hero-slider", {
    pagination: {
      el: ".hero-slider .swiper-pagination",
      clickable: true,
    },
    // autoplay: {
    //   delay: 5000,
    //   disableOnInteraction: false,
    // },
    // loop: true,
  });

  if (document.querySelector(".recent-portfolio-slider")) {
    var recentPortfolioSlider = new Swiper(".recent-portfolio-slider", {
      spaceBetween: 24,
      loop: true,
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: ".recent-portfolio-section .portfolio-nav-arrows .portfolio-next",
        prevEl: ".recent-portfolio-section .portfolio-nav-arrows .portfolio-prev",
      },
      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        576: {
          slidesPerView: 1.5,
        },
        768: {
          slidesPerView: 2,
        },
        992: {
          slidesPerView: 3,
        },
        1200: {
          slidesPerView: 3,
        },
        1400: {
          slidesPerView: 3.2,
        },
      },
    });
  }

  //if ($(".home-client-logos") && screenWidth <= 991) {
  //    var clientLogoHomeStripe = new Swiper(".home-client-logos", {
  //        spaceBetween: 5,
  //        slidesPerView: 1.5,
  //        centeredSlides: true,
  //        speed: 5500,
  //        loop: true,
  //        allowTouchMove: false,
  //        disableOnInteraction: true,
  //        autoplay: {
  //            delay: 0,
  //        },
  //        breakpoints: {
  //            1920: {
  //                slidesPerView: 7,
  //            },
  //            1366: {
  //                slidesPerView: 7,
  //            },
  //            1200: {
  //                slidesPerView: 7,
  //            },
  //            992: {
  //                slidesPerView: 3,
  //            },
  //            767: {
  //                slidesPerView: 3,
  //            },
  //            576: {
  //                slidesPerView: 3,
  //            },
  //            0: {
  //                slidesPerView: 2,
  //            },
  //        },
  //    });
  //}
}

function hireProcessSlider() {
  if (screenWidth <= 767) {
    var hireProcessSlider = new Swiper(".hire-process-slider", {
      spaceBetween: 20,
      // navigation: {
      //   nextEl: ".hire-process-slider .swiper-button-next",
      //   prevEl: ".hire-process-slider .swiper-button-prev"
      // },
      breakpoints: {
        0: {
          slidesPerView: 1.2,
        },
        575: {
          slidesPerView: 1.2,
        },
        640: {
          slidesPerView: 2.2,
        },
        768: {
          slidesPerView: 2,
        },
        992: {
          slidesPerView: 4,
        },
        1200: {
          slidesPerView: 4,
        },
      },
    });
  }
}

function checkViewportWidth() {
  if ($(window).width() < 1200) {
    $(".header").removeClass("for-desktop");
    $(".header").addClass("for-mobile");
  } else {
    $(".header").removeClass("for-mobile");
    $(".header").addClass("for-desktop");
    //$(".header .main-menu").css("display", "");
  }
}

//Is element in Viewport
function isElementInViewport(elem) {
  var $elem = jQuery(elem);
  var scrollPos = jQuery(window).scrollTop();
  var windowHeight = jQuery(window).height();
  var elemTop = $elem.offset().top + 400;
  var elemHeight = $elem.outerHeight();
  return (
    elemTop <= scrollPos + windowHeight && elemTop + elemHeight > scrollPos
  );
}

//update navlink
function updateActiveLink() {
  var sections = jQuery("body section");
  var navLinks = jQuery(".portfolio-detail-nav li a");
  if (sections.length > 0 && navLinks.length > 0) {
    sections.each(function () {
      var sectionId = jQuery(this).attr("id");
      if (isElementInViewport(this)) {
        navLinks.removeClass("active");
        jQuery('a[href="#' + sectionId + '"]').addClass("active");
      }
    });
  }
}

// Check on document ready
