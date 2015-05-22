$(document).ready(function(){
    /*默认初始化*/
    var num;
    $('.plain_nav>li:first').addClass('li-hover');
    /*mouseover*/
    $('.plain_nav>li').mouseover(function(){
        var Oli = $(this).attr('id');
        num = Oli.substring(3, Oli.length);
        $('.plain_nav>li').removeClass('li-hover');
        $(this).addClass('li-hover');
        $('.hiddenBox').hide();
        $('#box_'+num).show();
    });

    function getScrollTop(){
        return document.documentElement.scrollTop + document.body.scrollTop; 
    }
    window.onscroll = function() {
        var ln = document.getElementById('leftNav');
        if(getScrollTop() - 168 > 0){
            
            ln.style.marginTop = (getScrollTop() - 148) + 'px';
            //alert(getScrollTop()+' '+ln.offsetTop);
            
        }
        else
            ln.style.marginTop = '0';

    }

});

