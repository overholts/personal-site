// TODO - support arbitrary number of usages on single page
$(document).ready(function() {
    var elements = $('.cycle-children').children();
    console.log(elements);
    var i = 0;

    function cycle() {
        console.log("Cycling!");
        elements.eq(i).toggleClass("active"); 
        i = ++i % elements.length;
        elements.eq(i).toggleClass("active");
    };

    elements.eq(i).toggleClass("active");
    setInterval(cycle, 2000);
});