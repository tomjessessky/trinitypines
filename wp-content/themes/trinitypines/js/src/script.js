$(document).ready(function(){
    
    $('.nav-tabs a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    });
    
    $("#accordion").accordion({
        activate: function(event, ui) {
            ui.newHeader.find('span').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
            ui.oldHeader.find('span').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
        }
    });
    
    $("#accordion").accordion("option", "icons", null);
});