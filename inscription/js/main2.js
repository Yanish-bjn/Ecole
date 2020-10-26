$('#ville').keyup(function (e) {
  if(e.keyCode == 13) {
    var $ville = $(this);
    $.vicopo($ville.val(), function (input, cities) {
      if(input == $ville.val() && cities[0]) {
        $ville.val(cities[0].city).vicopoTargets().vicopoClean();
      }
    });
    e.preventDefault();
    e.stopPropagation();
  }
});
