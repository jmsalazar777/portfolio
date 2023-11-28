/**
 * File scripts.js.
 *
 * The code for your theme JavaScript source should reside in this file.
 */

(function ($) {
  "use strict";
  var wind = $(window);
  $(document).ready(function () {
    $(".skill-progress .progres").each(function () {
      var bottom_of_object = $(this).offset().top + $(this).outerHeight();
      var bottom_of_window = $(window).scrollTop() + $(window).height();
      var myVal = $(this).attr("data-value");
      if (bottom_of_window > bottom_of_object) {
        $(this).css({
          width: myVal,
        });
      }
    });
  });
})(jQuery);
