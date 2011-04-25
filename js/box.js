
(function($) {
$('span.view-large').hide();
myOp = 1;
$(window).load(function(){
$('#sort').masonry({
columnWidth: 9,
animate: true,
itemSelector: '.box'
},
function() { $(this).css({
margin: '10px'
});
});
});
})(jQuery);
