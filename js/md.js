$(document).ready(function() {
  
    $(".animsition").animsition({

    inClass               :   'fade-in',
    outClass              :   'fade-out',
    inDuration            :    200,
    outDuration           :    200,
    linkElement           :   '.animsition-link',
    // e.g. linkElement   :   'a:not([target="_blank"]):not([href^=#])'
    loading               :    false,
    loadingParentElement  :   'body', //animsition wrapper element
    loadingClass          :   'animsition-loading',
    unSupportCss          : [ 'animation-duration',
                              '-webkit-animation-duration',
                              '-o-animation-duration'
                            ],
    //"unSupportCss" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
    //The default setting is to disable the "animsition" in a browser that does not support "animation-duration".

    overlay               :   false,

    overlayClass          :   'animsition-overlay-slide',
    overlayParentElement  :   'body'
    });

    //adds class for external links
    $('a[rel="external"]').attr('target', '_blank');

    //gives link active style on image hover
    $("figure.image-frame.grey").hover(function() {
        $(this).next().toggleClass("porfolio-title a:hover");
    });

    //gives nav active style
    var url = window.location.href;
    var page = url.substr(url.lastIndexOf('/')+1);
    console.log(page);
    if (page !== "") {
       $('.menu a').removeClass('active');
       $('.menu a[href*="'+page+'"]').addClass('active');
    }
    
    $(".phone-number").click(function() {
        this.innerHTML = "4487";
    });
    

});