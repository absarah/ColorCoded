
var activeList = [];
var color;

$(document).ready(function(){

    var currentId;

    $('.radioButton').each(function(){
        $(this).click(function(){
            $('.act').each(function(){
                $(this).addClass("inact").removeClass("act");
            });
            $(this).addClass("act").removeClass("inact");
        });
    });

    $('.colorCell').each(function() {
        var idNum;
        //console.log(this);
        $(this).click(function(){
            //Remove current classes
            $(this).removeAttr("class");
            //Query for .act .get id substring #
            $(".act").each(function(){
                idNum = $(this).attr("id").substring(11);
            });
            //Query color_picker+#
            // $('#color_picker' + idNum).change(function(){
            //     color = $("#color_picker" + idNum).find("option:selected").attr('id');
            // });
            color = $("#color_picker" + idNum).find("option:selected").attr('id');
            //console.log(color);
            $(this).attr('class', "colorCell");
            $(this).toggleClass(color);
            //Set curr class = color_picks 
            $("."+color).each(function(){
                console.log(this);
                // if(jQuery.inArray($(this).attr('id').substring(4), activeList)){

                // }
                // else{
                //     activeList.push($(this).attr('id').substring(4) + ",");
                // }
                activeList.push($(this).attr('id').substring(4) + ",");
            });
            $('#activeList'+idNum).html(activeList);
        });
    });
    
});