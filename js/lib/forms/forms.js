(function( $ ) {
  'use strict';

  $(function() {
    var inputClickHandler = function() {
      $(this).closest('.hidden-checkbox')[$(this).is(':checked') ? 'addClass' : 'removeClass']('selected');
    };

    $('.gfield_checkbox li').addClass('hidden-checkbox');

    $('.hidden-checkbox').addClass('hidden')
                         .find('input').on('click', inputClickHandler)
                         .on('focusin', function(e) {
                           $(this).closest('.hidden-checkbox').addClass('focus');
                         }).on('focusout', function() {
                           $(this).closest('.hidden-checkbox').removeClass('focus');
                         });
    $('.newsletter-signup input').removeAttr('tabindex');
    $('.gfield_checkbox li input:checkbox').attr('role', 'checkbox');
    $('.gfield_checkbox li input:checkbox').attr('aria-checked', 'false');
    $('.gfield_checkbox label').attr('role', 'presentation');
    $('input[role=checkbox]').click(function(){
       if ($(this).attr('aria-checked')==='true') {
           $(this).attr('aria-checked', 'false');
       } else {
           $(this).attr('aria-checked', 'true');                       
       }
    });
  });
  

})( jQuery );