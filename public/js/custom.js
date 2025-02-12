  $(document).ready(function(){
    $(window).scroll(function(){
        if($(window).scrollTop() > $(window).height()){
            $(".header-fixed").css({"background-color":"#fff"});   
        }
        else{
            $(".header-fixed").css({"background-color":"#fff"});
        }

    })
})


$(document).ready(function(){
    var highestBox = 0;
        $('.rcnt-list-box').each(function(){  
                if($(this).height() > highestBox){  
                highestBox = $(this).height();  
        }
    });    
    $('.rcnt-list-box').height(highestBox);

});

$(document).ready(function(){
    var highestBox = 0;
        $('.new-list-box').each(function(){  
                if($(this).height() > highestBox){  
                highestBox = $(this).height();  
        }
    });    
    $('.new-list-box').height(highestBox);

});


$(document).ready(function(){
    var highestBox = 0;
        $('.service-box').each(function(){  
                if($(this).height() > highestBox){  
                highestBox = $(this).height();  
        }
    });    
    $('.service-box').height(highestBox);

});


// For Filters
document.addEventListener("DOMContentLoaded", function() {
var filterBtn = document.getElementById('filter-btn');
var btnTxt = document.getElementById('btn-txt');
var filterAngle = document.getElementById('filter-angle');

$('#filterbar').collapse(false);
var count = 0, count2 = 0;
function changeBtnTxt() {
$('#filterbar').collapse(true);
count++;
if (count % 2 != 0) {
filterAngle.classList.add("fa-angle-right");
btnTxt.innerText = "show filters"
filterBtn.style.backgroundColor = "#f18020";
}
else {
filterAngle.classList.remove("fa-angle-right")
btnTxt.innerText = "hide filters"
filterBtn.style.backgroundColor = "#f18020";
}

}

// For Applying Filters
$('#inner-box').collapse(false);
$('#inner-box2').collapse(false);

// For changing NavBar-Toggler-Icon
var icon = document.getElementById('icon');

function chnageIcon() {
count2++;
if (count2 % 2 != 0) {
icon.innerText = "";
icon.innerHTML = '<span class="far fa-times-circle" style="width:100%"></span>';
icon.style.paddingTop = "5px";
icon.style.paddingBottom = "5px";
icon.style.fontSize = "1.8rem";


}
else {
icon.innerText = "";
icon.innerHTML = '<span class="navbar-toggler-icon"></span>';
icon.style.paddingTop = "5px";
icon.style.paddingBottom = "5px";
icon.style.fontSize = "1.2rem";
}
}

// Showing tooltip for AVAILABLE COLORS
$(function () {
$('[data-tooltip="tooltip"]').tooltip()
})

// For Range Sliders
var inputLeft = document.getElementById("input-left");
var inputRight = document.getElementById("input-right");

var thumbLeft = document.querySelector(".slider > .thumb.left");
var thumbRight = document.querySelector(".slider > .thumb.right");
var range = document.querySelector(".slider > .range");

var amountLeft = document.getElementById('amount-left')
var amountRight = document.getElementById('amount-right')

function setLeftValue() {
var _this = inputLeft,
min = parseInt(_this.min),
max = parseInt(_this.max);

_this.value = Math.min(parseInt(_this.value), parseInt(inputRight.value) - 1);

var percent = ((_this.value - min) / (max - min)) * 100;

thumbLeft.style.left = percent + "%";
range.style.left = percent + "%";
amountLeft.innerText = parseInt(percent * 100);
}
setLeftValue();

function setRightValue() {
var _this = inputRight,
min = parseInt(_this.min),
max = parseInt(_this.max);

_this.value = Math.max(parseInt(_this.value), parseInt(inputLeft.value) + 1);

var percent = ((_this.value - min) / (max - min)) * 100;

amountRight.innerText = parseInt(percent * 100);
thumbRight.style.right = (100 - percent) + "%";
range.style.right = (100 - percent) + "%";
}
setRightValue();

inputLeft.addEventListener("input", setLeftValue);
inputRight.addEventListener("input", setRightValue);

inputLeft.addEventListener("mouseover", function () {
thumbLeft.classList.add("hover");
});
inputLeft.addEventListener("mouseout", function () {
thumbLeft.classList.remove("hover");
});
inputLeft.addEventListener("mousedown", function () {
thumbLeft.classList.add("active");
});
inputLeft.addEventListener("mouseup", function () {
thumbLeft.classList.remove("active");
});

inputRight.addEventListener("mouseover", function () {
thumbRight.classList.add("hover");
});
inputRight.addEventListener("mouseout", function () {
thumbRight.classList.remove("hover");
});
inputRight.addEventListener("mousedown", function () {
thumbRight.classList.add("active");
});
inputRight.addEventListener("mouseup", function () {
thumbRight.classList.remove("active");
});
});


$(document).ready(function(){
$('.listng').slick({
infinite: true,
slidesToShow: 4,
slidesToScroll: 4,
responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
      },
    },
    {
      breakpoint: 990,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      },
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});
});


var chat = document.getElementById("chat_btn");
chat.addEventListener("click", function(event) {
  event.preventDefault();
  if ($(".chatBox").hasClass("hide")) {
    $(".chatBox").removeClass("hide").addClass("showBox");
    chat.text("Click to Exit").removeClass("round_cor");
  } else if (!$(".chatBox").hasClass("hideBox")) {

    $(".chatBox").addClass("hideBox");
    $(".chatBox").removeClass("showBox");
    chat.removeClass("round_cor");
  } else {
    $(".chatBox").addClass("showBox");
    $(".chatBox").removeClass("hideBox");
    chat.addClass("round_cor");
  }

});


$(document).ready(function(){
$('ul.tabs li').click(function(){
var tab_id = $(this).attr('data-tab');
$('ul.tabs li').removeClass('current');
$('.tab-content').removeClass('current');
$(this).addClass('current');
$("#"+tab_id).addClass('current');
})
})


$(document).ready(function(){
$('.web').slick({
infinite: true,
speed: 2000,
slidesToShow: 6,
slidesToScroll: 6,
responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4,
      },
    },
    {
      breakpoint: 990,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
      },
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      },
    },
  ],
});
});
