$(document).ready(function() {
    $('#autoWidth').lightSlider({
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#autoWidth').removeClass('cS-hidden');
        } 
    });  
  });
  
  $(document).ready(function(){
    $('#icon').click(function(){
        $('ul').toggleClass('shows');
    });
});