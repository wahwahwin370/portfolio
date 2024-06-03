
$(document).ready(function() {
    $("#go-top").hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('#go-top').fadeIn();
        } else {
            $('#go-top').fadeOut();
        }
    });


        $('#go-top').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
});


$(window).scroll(function() {
    var scrollDistance = $(window).scrollTop();
    $('section').each(function(i) {
        if ($(this).position().top <= scrollDistance) {
            $('.navbar .nav-item.active').removeClass('active');
            $('.navbar .nav-item').eq(i).addClass('active');
        }
    });
}).scroll();

    
// ----------------------proload image in service icon---------------
function preloadImage(url){
    const img = new Image();
    img.src = url;
    return img
}

function preloadImages() {
    const images = []
    for (var i = 0; i < arguments.length; i++) {
    images[i] = preloadImage(arguments[i])
    }
    return images
}

    //-- usage --//
const images = preloadImages(
    "/images/projects/mon-buddish-foundation.png",
    "/images/projects/smartmyanmargroup.png",
    "/images/projects/thet_me.png",
    "/images/projects/siamglobalimpex.png",
    "/images/projects/rotarycentralyangon.png",
    "/images/projects/unicoholding.png",
    "/images/projects/infinity-energy.png",
    "/images/projects/ako_mm_.png",
    "/images/projects/mandalayparagoneng.png",
    "/images/projects/yoursdesignteam.png",
    "/images/projects/lseamyanmar.png",
    "/images/projects/bestfund.png",
    "/images/projects/littlestarsmm.png",
    "/images/projects/7starship.png",
    "/images/projects/mpbischool.png",
    "/images/projects/natureartmyanmar.png",
    "/images/projects/goodwillmarineservices.png",
    "/images/projects/nobleoceanshipping.png",
    "/images/projects/oceaneliteshippingmm.png",
    "/images/projects/thefirstjam.png",
    "/images/www.png",
    
)



// ------------change image in service-----------

const pro_img = document.getElementById("project-img");
pro_img.transition = "src .7s";
const pro_img_background = document.getElementById("project-image-wrapper");
pro_img_background.style.transition = "background .5s";
pro_img_background.style.background = "#ffdd99";

document.getElementById("mon-buddish").onmouseover = function() {
    pro_img.src = "/images/projects/mon-buddish-foundation.png";
    pro_img_background.style.background = "#ffdd99";
}
document.getElementById("smart-group").onmouseover = function() {
    pro_img.src = "/images/projects/smartmyanmargroup.png";
    pro_img_background.style.background = "#d7edff";
}
document.getElementById("thet-dot-me").onmouseover = function() {
    pro_img.src = "/images/projects/thet_me.png";
    pro_img_background.style.background = "#c5fafa";
}
document.getElementById("saim-global").onmouseover = function() {
    pro_img.src = "/images/projects/siamglobalimpex.png";
    pro_img_background.style.background = "#bbfaa7";
}
document.getElementById("rotary-central").onmouseover = function() {
    pro_img.src = "/images/projects/rotarycentralyangon.png";
    pro_img_background.style.background = "#bde3fc";
}
document.getElementById("unico").onmouseover = function() {
    pro_img.src = "/images/projects/unicoholding.png";
    pro_img_background.style.background = "#e0ffb3";
}
document.getElementById("little-star").onmouseover = function() {
    pro_img.src = "/images/projects/littlestarsmm.png";
    pro_img_background.style.background = "#9cdaf7";
}
document.getElementById("infinity-energy").onmouseover = function() {
    pro_img.src = "/images/projects/infinity-energy.png";
    pro_img_background.style.background = "#85ff89";
}
document.getElementById("ako").onmouseover = function() {
    pro_img.src = "/images/projects/ako_mm_.png";
    pro_img_background.style.background = "#ecedaf";
}
document.getElementById("mandalay-paragon").onmouseover = function() {
    pro_img.src = "/images/projects/mandalayparagoneng.png";
    pro_img_background.style.background = "#e8e6e6";
}
document.getElementById("yours-design").onmouseover = function() {
    pro_img.src = "/images/projects/yoursdesignteam.png";
    pro_img_background.style.background = "#ffe6ab";
}
document.getElementById("lsea-myanmar").onmouseover = function() {
    pro_img.src = "/images/projects/lseamyanmar.png";
    pro_img_background.style.background = "#e0f5ff";
}
document.getElementById("bestfund").onmouseover = function() {
    pro_img.src = "/images/projects/bestfund.png";
    pro_img_background.style.background = "#e0e8ff";
}
document.getElementById("seven-star").onmouseover = function() {
    pro_img.src = "/images/projects/7starship.png";
    pro_img_background.style.background = "#c9fdff";
}
document.getElementById("nature-art").onmouseover = function() {
    pro_img.src = "/images/projects/natureartmyanmar.png";
    pro_img_background.style.background = "#d3ffc9";
}
document.getElementById("mpbi-school").onmouseover = function() {
    pro_img.src = "/images/projects/mpbischool.png";
    pro_img_background.style.background = "#f7edeb";
}
document.getElementById("good-will").onmouseover = function() {
    pro_img.src = "/images/projects/goodwillmarineservices.png";
    pro_img_background.style.background = "#d7f7f4";
}
document.getElementById("noble-ocean").onmouseover = function() {
    pro_img.src = "/images/projects/nobleoceanshipping.png";
    pro_img_background.style.background = "#cdd4f7";
}
document.getElementById("ocean-elite").onmouseover = function() {
    pro_img.src = "/images/projects/oceaneliteshippingmm.png";
    pro_img_background.style.background = "#a7d2fc";
}
document.getElementById("the-first-jam").onmouseover = function() {
    pro_img.src = "/images/projects/thefirstjam.png";
    pro_img_background.style.background = "#e2fabe";
}



