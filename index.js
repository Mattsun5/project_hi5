$(document).ready(function(){
    
    let scrollLink = $('.scroll, .scroll1');
    // smooth scroll
    // alert('out');
    scrollLink.click(function(e){
        // alert('in');
        e.preventDefault();
        $('body,html').animate({
            scrollTop: $(this.hash).offset().top
        }, 1000);
    })

    // nav
    $('.menuIcon').click(function(){
        $('.nav').toggleClass('nav-open',300);
    });
    //scroll
    $(window).scroll(function(){
        let scrollbarLocation = $(this).scrollTop();
        $('.scroll').each(function() {
            // alert(this);
            let sectionOffset = $(this.hash).offset().top - 50;
            // alert(sectionOffset);
            if (sectionOffset <= scrollbarLocation){
                // alert('here');
                $(this).parent().addClass('focus');
                $(this).parent().siblings().removeClass('focus');
            }
        })
    })
    // alert('clicked');
    $('.cancel, svg').click(function(){ 
        // alert('seen');
        $('.alert').css('display', 'none');
    });
})