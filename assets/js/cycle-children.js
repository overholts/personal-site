// TODO - support arbitrary number of usages on single page
$(document).ready(function() {
    var elements = $('.cycle-children').children();
    var i = 0;

    function cycle() {
        elements.eq(i).toggleClass("active");
        i = ++i % elements.length;
        elements.eq(i).toggleClass("active");
    };

    elements.eq(i).toggleClass("active");
    setInterval(cycle, 2000);
});