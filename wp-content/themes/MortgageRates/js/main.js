var myFunction = {
  init: function() {
    jQuery('.tool-tip').popover({
      trigger: 'hover'
    });
  },
  
  hiddenHandler: function() {
    var $hidden = jQuery('.hidden-element'), $showHidden = jQuery('.show-hidden');
    $showHidden.on('click', function(e) {
      jQuery(this).parent().next().slideToggle('slow');
      jQuery(this).toggleClass('active');
      e.preventDefault();
    });
  }
};

jQuery(document).ready(function() {
  myFunction.init();
  myFunction.hiddenHandler();
});