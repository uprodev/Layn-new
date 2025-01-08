jQuery(document).ready(function ($) {
  const textsToSplit = document.querySelectorAll(".block-banner h1, .block-banner p, .block-intro h2, .block-text-headline h2, .block-text-headline p, .block-steps p, .block-services h2, .block-services h4, .block-services li, .cp-tabs .nav-link, .tab-pane p, .tab-pane li, .block-contact-form .block-header h2, .block-members h2");

  !(function () {
    const blocks = document.querySelectorAll(".block-banner h1, .block-banner p, .block-intro h2, .block-text-headline h2, .block-text-headline p, .block-steps p, .block-services h2, .block-services h4, .block-services li, .cp-tabs .nav-link, .tab-pane p, .tab-pane li, .block-contact-form .block-header h2, .buttons, .block-map .block-header .subheadline, .block-members .block-header .subheadline, .block-members h2, .block-offer .block-header .subheadline, .block-services .block-header .subheadline, .block-text-headline .subheadline, .subheadline-animated, .counter");
    [].forEach.call(blocks, ($item) => {
      if ($item) {
        function onScroll() {
          let delta = $item.getBoundingClientRect().top - window.innerHeight <= ($item.offsetHeight * -1) / 4 && !$item.classList.contains("in-view");
          if (delta) {
            setTimeout(() => {
              $item.classList.remove("in-view-detect");
              $item.classList.add("in-view");
            }, 300);
          }
        }
        onScroll();
        window.addEventListener("scroll", (e) => {
          onScroll();
        });
      }
    });
  })();

  function preloader() {
    const tl = gsap.timeline({
      delay: 0.5,
    });

    tl.set(".global-wrapper.page-landing", {
      opacity: 1,
    })
      .to(".preloader-logo", {
        opacity: 1,
        ease: "none",
        duration: 1.5,
      })
      .to(".preloader-logo", {
        opacity: 0,
        ease: "none",
        duration: 1.5,
      })
      .to(
        ".preloader",
        {
          opacity: 0,
          ease: "none",
          duration: 1,
          onComplete: function () {
            $(".preloader").hide();
          },
        },
        "-=0.2"
      );
  }

  textsToSplit.forEach((text) => {
    const txt = new SplitType(text);
    const container = document.querySelector(".global-wrapper");
    let previousContainerWidth = null;

    const resizeObserver = new ResizeObserver((entries) => {
      for (const entry of entries) {
        if (entry.contentBoxSize) {
          const contentBoxSize = entry.contentBoxSize[0];
          txt.split();
        }
      }
    });

    resizeObserver.observe(container);
  });

  if ($("#preloader").length) {
    preloader();
  }

  $(".btn-play").on("click", function (e) {
    e.preventDefault();
    $(this).hide();
    var video = $(this).prev("video");
    video.attr("controls", true);
    video.get(0).play();
  });

  document.querySelectorAll(".subtitle").forEach((subtitle) => {
    gsap.to(subtitle, {
      scrollTrigger: {
        trigger: subtitle,
        start: "top 70%",
      },
      "--scale": 1,
    });
  });

  document.querySelectorAll(".block-intro").forEach((intro) => {
    gsap.to(intro.querySelector("hr"), {
      scrollTrigger: {
        trigger: intro,
        start: "top center",
      },
      scaleX: 1,
      duration: 0.5,
    });
    gsap.to(intro.querySelector("h2"), {
      scrollTrigger: {
        trigger: intro,
        start: "top center",
      },
      opacity: 1,
      duration: 1.5,
      delay: 0.6,
    });
    gsap.to(intro.querySelector(".buttons"), {
      scrollTrigger: {
        trigger: intro,
        start: "top center",
      },
      opacity: 1,
      duration: 1.5,
      delay: 0.6,
    });
  });

  $(".btn-to-top").on("click", function (e) {
    e.preventDefault();
    $("html, body").animate({ scrollTop: 0 }, 1000);
  });

  $(".btn-anchor").on("click", function (e) {
    e.preventDefault();
    const dest = $($(this).attr("href"));
    $("html, body").animate({ scrollTop: dest.offset().top }, 1000);
  });

  if (document.querySelector(".slider-image")) {
    const swiper1 = new Swiper(".slider-image", {
      loop: true,
      autoplay: {
        delay: 3000,
      },
    });
  }

  if (document.querySelector(".block-media-slider")) {
    document.querySelectorAll(".block-media-slider .swiper-slide").forEach((slide, index) => {
      if (index % 2 === 0) {
        slide.classList.add("slide-even");
      } else {
        slide.classList.add("slide-odd");
      }
    });

    const swiper2 = new Swiper(".block-media-slider .swiper", {
      loop: true,
      slidesPerView: "auto",
      spaceBetween: 0,
      autoplay: {
        delay: 5000,
      },
      pagination: {
        el: ".block-media-slider .swiper-pagination",
        type: "fraction",
        renderFraction: function (currentClass, totalClass) {
          return '<span class="' + currentClass + '"></span>' + " | " + '<span class="' + totalClass + '"></span>';
        },
      },

      breakpoints: {
        768: {
          slidesPerView: "auto",
          spaceBetween: 0,
          // slidesPerGroup: 2,
        },
      },
    });
  }
});

function initMap() {
  var stylers = [
    {
      featureType: "administrative",
      elementType: "geometry.fill",
      stylers: [
        {
          visibility: "on",
        },
      ],
    },
    {
      featureType: "administrative",
      elementType: "labels.text.fill",
      stylers: [
        {
          color: "#2e2e2e ",
        },
      ],
    },
    {
      featureType: "landscape",
      elementType: "all",
      stylers: [
        {
          color: "#F2F2F2 ",
        },
      ],
    },
    {
      featureType: "landscape",
      elementType: "geometry.fill",
      stylers: [
        {
          color: "#FFFFFF ",
        },
      ],
    },
    {
      featureType: "landscape",
      elementType: "labels.text",
      stylers: [
        {
          color: "#0098DB ",
        },
      ],
    },
    {
      featureType: "landscape",
      elementType: "labels.text.fill",
      stylers: [
        {
          visibility: "simplified",
        },
      ],
    },
    {
      featureType: "landscape.natural",
      elementType: "labels.text.fill",
      stylers: [
        {
          color: "#FF0000 ",
        },
      ],
    },
    {
      featureType: "poi",
      elementType: "all",
      stylers: [
        {
          visibility: "off",
        },
      ],
    },
    {
      featureType: "road",
      elementType: "all",
      stylers: [
        {
          saturation: -100,
        },
        {
          lightness: 45,
        },
      ],
    },
    {
      featureType: "road.highway",
      elementType: "all",
      stylers: [
        {
          visibility: "simplified",
        },
      ],
    },
    {
      featureType: "road.local",
      elementType: "geometry.fill",
      stylers: [
        {
          color: "#F4F4F4 ",
        },
      ],
    },
    {
      featureType: "road.local",
      elementType: "geometry.stroke",
      stylers: [
        {
          color: "#F4F4F4 ",
        },
      ],
    },
    {
      featureType: "transit",
      elementType: "all",
      stylers: [
        {
          visibility: "off",
        },
      ],
    },
    {
      featureType: "water",
      elementType: "all",
      stylers: [
        {
          color: "#F5F8FA ",
        },
        {
          visibility: "on",
        },
      ],
    },
  ];

  if (document.querySelector("#map")) {
    let map,
      mapContainer = document.getElementById("map");
    let markers = [];
    let mapZoom = 15;

    var mapImage = {
      url: mapContainer.getAttribute("data-icon"),
    };

    map = new google.maps.Map(mapContainer, {
      center: { lat: 0, lng: 0 },
      zoom: mapZoom,
      styles: stylers,
    });

    let locations = [];

    document.querySelectorAll(".block-map .nav-tabs .nav-link").forEach((el) => {
      let location = {
        lat: parseFloat(el.dataset.lat),
        lng: parseFloat(el.dataset.lng),
        img: el.dataset.img,
      };
      locations.push(location);

      el.addEventListener("shown.bs.tab", (event) => {
        centerMap(el.dataset.index);
      });
    });

    locations.forEach((location, i) => {
      let coords = { lat: location.lat, lng: location.lng };

      let marker = new google.maps.Marker({
        map: map,
        position: coords,
        icon: mapImage,
      });

      markers.push(marker);
    });

    function centerMap(i) {
      i = parseInt(i);

      map.setCenter({
        lat: locations[i].lat,
        lng: locations[i].lng,
      });

      document.getElementById("mapImage").setAttribute("src", locations[i].img);
    }

    centerMap(0);
  }
}
