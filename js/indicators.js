$(document).ready(function() {
    // get the total number of slides
    var totalSlides = $('.carousel-item').length;
    // set the current slide to the first one
    var currentSlide = 0;
    // animate the progress bar on page load
    animateProgressBar(currentSlide);
    // listen for slide change event
    $('#mycarousel').on('slide.bs.carousel', function (event) {
      // get the index of the new slide
      var newIndex = event.to;
      // animate the progress bar to the new slide
      animateProgressBar(newIndex);
    });
    
    // function to animate the progress bar
    function animateProgressBar(slideIndex) {
      // calculate the percentage of completion
      var percentComplete = ((slideIndex + 1) / totalSlides) * 100;
      // set the width of the progress bar to the percentage
      $('.carousel-indicators button').eq(slideIndex).find('::before').css('transform', 'scaleX(' + (percentComplete / 100) + ')');
    }
  });