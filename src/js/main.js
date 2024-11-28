jQuery(document).ready(function ($) {
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
