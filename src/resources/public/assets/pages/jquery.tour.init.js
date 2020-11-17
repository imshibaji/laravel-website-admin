/**
 * Theme: Metrica - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Tour Js
 */

(function(){

  var tour = {
    id: "welcome_tour",
    steps: [
      {
        title: "Jumbotron",
        content: "This is the Jumbotron",
        target: "#tourJumbotron",
        placement: "top"
      },
      {
        title: "Color Card",
        content: "This is the color cards.",
        target: document.querySelector("#bg_colorCard"),
        placement: "bottom"
      }
    ],
    showPrevButton: true,
    scrollTopMargin: 100
  };

  // Start the tour!
  hopscotch.startTour(tour);
})();

  