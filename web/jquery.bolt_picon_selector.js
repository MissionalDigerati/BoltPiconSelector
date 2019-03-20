jQuery(document).ready(function($) {
  $('div#picon-selector-items .picon-select-item').click(function(event) {
    event.preventDefault();
    var piconField = $(this).attr('data-picon');
    $('#picon-selected-item-field').val(piconField);
    $('div#picon-selector-items .picon-select-item').removeClass('selected');
    $(this).addClass('selected');
  });
});