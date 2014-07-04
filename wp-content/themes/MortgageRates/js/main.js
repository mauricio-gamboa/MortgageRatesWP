var myFunctions = {
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
  },

  xsSidebar: function() {
    var $sidebar = jQuery('.accordion.xs');
    var $triggers = $sidebar.find('.widget-title');

    // Sets the first widget as active
    var $firstWidget = jQuery($triggers[0]);
    $firstWidget.addClass('active');
    $firstWidget.next().show();

    $triggers.on('click', function() {
      var $this = jQuery(this);
      if ($this.hasClass('active')) return;
      
      $triggers.removeClass('active');
      $triggers.next().hide();
      
      $this.addClass('active');
      $this.next().slideDown('slow');
    });

  }
};

jQuery(document).ready(function() {
  myFunctions.init();
  myFunctions.hiddenHandler();
  myFunctions.xsSidebar();
});