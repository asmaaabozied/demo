
$(document).ready(function() {
	$("a.navbar-brand").css({
	  'width': ($("#sidebar-collapse").width() + 'px')
	});
  });
  $(window).resize(function(){
	$("a.navbar-brand").css({
		'width': ($("#sidebar-collapse").width() + 'px')
	  });
	$('li.parent a').click(function(){
		// $(this).parent().toggleClass('collapsed');
	})
  });

$('#calendar').datepicker({
		});

!function ($) {
    $(document).on("click","ul.nav li.parent > a ", function(){          
        $(this).find('em').toggleClass("fa-plus");      
    }); 
    $(".sidebar span.icon").find('em:first').addClass("fa-minus");
}

(window.jQuery);
	$(window).on('resize', function () {
  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
})
$(window).on('resize', function () {
  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
})

$(document).on('click', '.panel-heading span.clickable', function(e){
    var $this = $(this);
	if(!$this.hasClass('panel-collapsed')) {
		$this.parents('.panel').find('.panel-body').slideUp();
		$this.addClass('panel-collapsed');
		$this.find('em').removeClass('fa-toggle-up').addClass('fa-toggle-down');
	} else {
		$this.parents('.panel').find('.panel-body').slideDown();
		$this.removeClass('panel-collapsed');
		$this.find('em').removeClass('fa-toggle-down').addClass('fa-toggle-up');
	}
})
$(document).ready(function() {
    $('#example').DataTable( {
        "pagingType": "full_numbers"
    } );
// single pro
    // add row
    $("#addRow").click(function () {
      var $self = $(this).parent();
      var x= $self.next().clone();
      $('#newRow').append(x);
    });
    // remove row
    $(document).on('click', '#removeRow', function () {
        $(this).closest('#inputFormRow').remove();
    });
	$("#addRow1").click(function () {
      var $self = $(this).parent();
      var x= $self.next().clone();
      $('#newRow1').append(x);
    });
    // remove row
    $(document).on('click', '#removeRow1', function () {
        $(this).closest('#inputFormRow1').remove();
    });

	$("#addRow11").click(function () {
    var $self = $(this).parent();
    var x= $self.next().clone();
    $('#newRow11').append(x);

    });
    // remove row
    $(document).on('click', '#removeRow11', function () {
        $(this).closest('#inputFormRow11').remove();
    });

    // add city in add country
    $(".addCont2 #addRowC").click(function () {
      var $self = $(this);
      var x= $self.parent().parent().parent().clone();
      $('#newRowC').append(x);
    });
  // add customer in add country
    $(".addCont2 #addRowCust").click(function () {
      var $self = $(this);
      var x= $self.parent().parent().parent().clone();
      $('#newRowCust').append(x);
  });

  // add currency in add country2
    $("#addcurrency").click(function () {
      var $self = $(this);
      var x= $self.parent().parent().parent().clone();
      $('#newRowCurrency').append(x);
    });
//ckeditor
	initSample();
});