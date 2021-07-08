$(document).ready(function(){
    $(".MenuRow").click(function(){
        $(".MenuRow").removeClass('active');
        $(this).addClass('active');
    });
    var ww = $(window).width();
    $(".mobNav").css("left", -ww);

    $("button.navbar-toggler").click(function(){
        $(".mobNav").animate({left: '0px'});
    });
    $(".mobNav .btn").click(function(){
        $(".mobNav").animate({left: '-'+ww});
    });
    var wH = $(window).height();
    $('.rWbg').css('height',wH);
    $('.scrolItems').css('height',wH);
    $('.chkFinl').css('height',wH);
    $('.menuBigDiv').css('max-height',wH);
    $('.scrollDiv').css('height',wH);
    $('.proDetailInner').css('height',wH);
    $('.cartBigDiv').css('height',wH);
    $('.chkOt').css('height',wH);
    $('.myRow').css('height',wH-130);
    $('.newAdPage .chRow2').css('height',wH-150);
    $('.homeGrid .gridViewMode .card-body').css('height',wH-130);
    $('.wilShow').css('max-height',wH/2);


    // home menue
    // $('.card-header').click(function(){
    //     $('.wilShow').fadeToggle();
    // })
    // $('.card-close').click(function(){
    //     $('.wilShow').fadeOut();
    // })
})
// ------------------------- cart quantity counter --------------
$('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }
        } else if(type == 'plus') {
            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }
        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        // alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        // alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }   
});
$(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
// ------------------------- side nav --------------
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}
    
function closeNav() {
document.getElementById("mySidenav").style.width = "0";
}
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");
// Declare a loop variable
var i;
// List View
function listView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "100%";
  }
  $(".listView").addClass("active");
  $(".gridView").removeClass("active");
  $(".card .collapse").addClass("listViewMode").removeClass("gridViewMode");
}
// Grid View
function gridView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "32.8%";
  }
  $(".gridView").addClass("active");
  $(".listView").removeClass("active");
  $(".card .collapse").addClass("gridViewMode").removeClass("listViewMode");
}

// ------ popover-----
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();
  });