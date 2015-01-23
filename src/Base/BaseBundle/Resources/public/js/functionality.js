$(function() {
    $( "#slider-range-min" ).slider({
      range: "min",
      value: 0,
      min: 1,
      max: 6000,
      slide: function( event, ui ) {
        $( "#amount" ).val( "R$:" + ui.value+",00" );
      }
    });
    $( "#amount" ).val( "R$:" + $( "#slider-range-min" ).slider( "value" ) );
  });