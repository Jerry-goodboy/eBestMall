/**
 * Created by Shadow on 2017/1/8.
 */

/*
 * MainMenu JS
 */

var jq = jQuery.noConflict();

jQuery(function(){
    jq(".leftNav ul li").hover(
        function(){
            jq(this).find(".fj").addClass("nuw");
            jq(this).find(".zj").show();
        }
        ,
        function(){
            jq(this).find(".fj").removeClass("nuw");
            jq(this).find(".zj").hide();
        }
    )
});

jQuery(document).ready(function(){
    jq(".nav").hover(function(){
        jq(this).find(".leftNav").show();
    },function(){
        jq(this).find(".leftNav").hide();
    });
});
