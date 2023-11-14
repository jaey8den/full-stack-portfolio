$(document).ready(function(){
    var maxLength = 300;
    $("#content-3").each(function(){
        var myStr3 = $(this).text();
        if($.trim(myStr3).length > maxLength){
            var newStr3 = myStr3.substring(0, maxLength);
            $(this).empty().html(newStr3);
            $(this).append(" " + '<a href="articles/showerthoughts/growingup.html">... read more</a>');
        }
    });

    $("#content-2").each(function(){
        var myStr2 = $(this).text();
        if($.trim(myStr2).length > maxLength){
            var newStr2 = myStr2.substring(0, maxLength);
            $(this).empty().html(newStr2);
            $(this).append(" " + '<a href="articles/food/pepcorn.html">... read more</a>');
        }
    });

    $("#content-1").each(function(){
        var myStr = $(this).text();
        if($.trim(myStr).length > maxLength){
            var newStr = myStr.substring(0, maxLength);
            $(this).empty().html(newStr);
            $(this).append(" " + '<a href="articles/notetoself/procrastinate.html">... read more</a>');
        }
    });
});