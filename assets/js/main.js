$(document).ready(function () {
	/*========== Toggle ==========*/
	$(document).on("click", ".toggle", function () {
		$(".toggle").toggleClass("active");
		$("html").toggleClass("flow");
		$("[nav]").toggleClass("active");
	});
	$(document).on("click", "nav ul > li:not(.btnLi) > a", function () {
		$(".toggle").removeClass("active");
		$("html").removeClass("flow");
		$("[nav]").removeClass("active");
	});
	w = $(window).width();
	if (w <= 992) {
		$(document).on("click", ".shop_page .colL h3", function (e) {
			e.preventDefault();
			$(this).parents(".colL").children(".inBlk").slideToggle();
		});
	}

	// This button will increment the value
	$(".qtyplus").click(function (e) {
		e.preventDefault();
		var parnt = $(this).parent().children(".qty");
		var currentVal = parnt.val();
		if (!isNaN(currentVal)) {
			parnt.val(parseInt(currentVal) + 1);
		} else {
			parnt.val(0);
		}
	});
	// This button will decrement the value till 0
	$(".qtyminus").click(function (e) {
		e.preventDefault();
		var parnt = $(this).parent().children(".qty");
		var currentVal = parnt.val();
		if (!isNaN(currentVal) && currentVal > 0) {
			parnt.val(parseInt(currentVal) - 1);
		} else {
			parnt.val(0);
		}
	});

	// ========faq's===========
	$(".acc h4").click(function () {
		$(this).next(".content").slideToggle();
		$(this).parent().toggleClass("active");
		$(this).parent().siblings().children(".content").slideUp();
		$(this).parent().siblings().removeClass("active");
	});

	$(document).on("focus", ".txtGrp .txtBox:not(select)", function () {
		$(this).parents(".txtGrp:first").find("label:first").addClass("move");
	});

	$(document).on("blur", ".txtGrp .txtBox:not(select)", function () {
		if (this.value == "")
			$(this).parents(".txtGrp:first").find("label:first").removeClass("move");
	});

	$(".txtGrp .txtBox:not(select)").each(function (e) {
		if (this.value != "")
			$(this).parents(".txtGrp:first").find("label:first").addClass("move");
	});

	$("#price").ionRangeSlider({
		hide_min_max: true,
		hide_from_to: true,
		min: 0,
		max: 500,
		from: 40,
		to: 480,
		type: "double",
		prettify: function (num) {
			return "$" + num;
		},
		// prefix: "$",
		grid: true,
	});
	$(".faqLst > .faqBlk:nth-child(1)").addClass("active");
	/*----- Card Sec Bar -----*/
	$(document).on("click", ".cardSecBar .lblBtn", function () {
		var checkbox = $(this).parents(".lblBtn").find("input[type=radio]");
		checkbox.prop("checked", !checkbox.prop("checked"));
		$(".cardSec").slideDown("3000");
		$(".paypalSec").slideUp("3000");
	});
	$(document).on("click", ".paypalSecBar .lblBtn", function () {
		var checkbox = $(this).parents(".lblBtn").find("input[type=radio]");
		checkbox.prop("checked", !checkbox.prop("checked"));
		$(".paypalSec").slideDown("3000");
		$(".cardSec").slideUp("3000");
	});
	/*========== File Upload ==========*/
	var imgFile;
	$(document).on("click", "#uploadDp", function () {
		imgFile = $(this).attr("data-file");
		$(this).parents("form").children(".uploadFile").trigger("click");
	});
	$(document).on("change", ".uploadFile", function () {
		// alert(imgFile);
		var file = $(this).val();
		$(".uploadImg").html(file);
	});

	/*========== Dropdown ==========*/
	$(document).on("click", ".dropBtn", function (e) {
		e.stopPropagation();
		var $this = $(this).parent().children(".dropCnt");
		$(".dropCnt").not($this).removeClass("active");
		var $parent = $(this).parent(".dropDown");
		$parent.children(".dropCnt").toggleClass("active");
	});
	$(document).on("click", ".dropCnt", function (e) {
		e.stopPropagation();
	});
	$(document).on("click", function () {
		$(".dropCnt").removeClass("active");
	});
	/*----- video button -----*/

	var vid = $("video");
	// var vid = document.getElementById("bannerVid");
	$(document).on("click", ".fa-play", function () {
		$(this).parents().children(vid).trigger("play");

		$(this).removeClass("fa-play").addClass("fa-pause");
	});
	$(document).on("click", ".fa-pause", function () {
		$(this).parents().children(vid).trigger("pause");

		$(this).removeClass("fa-pause").addClass("fa-play");
	});

	/*========== Popup ==========*/
	$(document).on("click", ".popBtn", function () {
		var popUp = $(this).data("popup");
		$("body").addClass("flow");
		$(".popup[data-popup= " + popUp + "]").fadeIn();
	});
	$(document).on("click", ".crosBtn", function () {
		var popUp = $(this).parents(".popup").data("popup");
		$("body").removeClass("flow");
		$(".popup[data-popup= " + popUp + "]").fadeOut();
	});

	$(".datepicker").datepicker({
		dateFormat: "MM dd, yy",
		changeMonth: true,
		changeYear: true,
		yearRange: "1900:2060",
		minDate: new Date(),
	});

	// Timepicker Js
	$(".timepicker").timepicki({
		reset: true,
	});

	// Select Js
	$(document).ready(function () {
		$(".selectpicker").selectpicker();
	});

	// Data Table Js
	var sortOrder = $("th.sortBy").index() > -1 ? $("th.sortBy").index() : 0;
	$(".dataTable").DataTable({
		order: [[sortOrder, "asc"]],
		pageLength: 25,
		columnDefs: [
			{
				orderable: false,
				targets: "no-sort",
			},
		],
		responsive: true,
	});
	// rateYo
	$(".ratestars").rateYo({
		rating: 4.0,
		fullStar: true,
		// readOnly: true,
		normalFill: "#ddd",
		ratedFill: "#f6a623",
		starWidth: "14px",
		spacing: "2px",
	});

	// ===============fieldset============
	$(document).on("click", ".nextBtn", function () {
		var curntField = $(this).parents("fieldset");
		var nextField = curntField.next("fieldset");
		curntField.hide();
		nextField.show();
	});

	$(document).on("click", ".backBtn", function () {
		var curntField = $(this).parents("fieldset");
		var prevField = curntField.prev("fieldset");
		curntField.hide();
		prevField.show();
	});

	$("#owl-folio").owlCarousel({
		autoplay: true,
		nav: true,
		navText: [
			'<i class="fi-arrow-left"></i>',
			'<i class="fi-arrow-right"></i>',
		],
		loop: true,
		margin: 20,
		smartSpeed: 1000,
		autoplayTimeout: 8000,
		autoplayHoverPause: true,
		items: 1,
	});
	$(".listing").owlCarousel({
		autoplay: true,
		nav: true,
		navText: [
			'<i class="fi-arrow-left"></i>',
			'<i class="fi-arrow-right"></i>',
		],
		dots: false,
		loop: true,
		autoHeight: true,
		animateOut: "fadeOut",
		smartSpeed: 1000,
		margin: 15,
		autoplayTimeout: 8000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1,
				// autoplay: false,
				autoHeight: true,
				// dots: true,
				// nav:false
			},
			600: {
				items: 3,
			},
			1000: {
				items: 4,
			},
		},
	});
	$("#clientLogo").owlCarousel({
		autoplay: true,
		nav: true,
		navText: [
			'<i class="fi-chevron-left"></i>',
			'<i class="fi-chevron-right"></i>',
		],
		// navText: [ 'prev', 'next' ],
		dots: false,
		loop: true,
		center: true,
		autoWidth: true,
		autoHeight: true,
		smartSpeed: 1000,
		autoplayTimeout: 10000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1,
				autoplay: false,
				autoHeight: true,
				dots: true,
				nav: false,
			},
			600: {
				items: 2,
			},
			1000: {
				items: 3,
			},
		},
	});

	$(".listing").owlCarousel({
		autoplay: true,
		nav: true,
		navText: [
			'<i class="fi-arrow-left"></i>',
			'<i class="fi-arrow-right"></i>',
		],
		dots: false,
		loop: true,
		autoHeight: true,
		animateOut: "fadeOut",
		smartSpeed: 1000,
		margin: 15,
		autoplayTimeout: 8000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1,
				// autoplay: false,
				autoHeight: true,
				// dots: true,
				// nav:false
			},
			600: {
				items: 3,
			},
			1000: {
				items: 4,
			},
		},
	});

	$("#owl-testi").owlCarousel({
		autoplay: true,
		nav: false,
		navText: [
			'<i class="fi-chevron-left"></i>',
			'<i class="fi-chevron-right"></i>',
		],
		// navText: [ 'prev', 'next' ],
		dots: true,
		loop: true,
		margin: 5,
		center: true,
		autoWidth: false,
		autoHeight: false,
		smartSpeed: 1000,
		animateOut: "fadeOut",
		autoplayTimeout: 10000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1,
				autoplay: false,
				autoHeight: true,
				dots: true,
				nav: false,
			},
			600: {
				items: 2,
			},
			1000: {
				items: 3,
			},
		},
	});

	$(".event_slider").owlCarousel({
		autoplay: true,
		nav: true,
		navText: [
			'<i class="fi-chevron-left"></i>',
			'<i class="fi-chevron-right"></i>',
		],
		// navText: [ 'prev', 'next' ],
		dots: false,
		loop: true,
		center: true,
		autoWidth: true,
		autoHeight: false,
		smartSpeed: 1000,
		autoplayTimeout: 10000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1,
				autoplay: false,
				autoHeight: true,
				dots: true,
				nav: false,
			},
			600: {
				items: 2,
			},
			1000: {
				items: 3,
			},
		},
	});

	var offSet = $("body").offset().top;
	var offSet = offSet + 250;
	$(window).scroll(function () {
		var scrollPos = $(window).scrollTop();
		if (scrollPos >= offSet) {
			$(".bannerDots a").addClass("allbannerDots");
		} else {
			$(".bannerDots a").removeClass("allbannerDots");
		}
	});

	var counted = 0;
	$(window).scroll(function () {
		var oTop = $("#counter").offset().top - window.innerHeight;
		if (counted == 0 && $(window).scrollTop() > oTop) {
			$(".count").each(function () {
				var $this = $(this),
					countTo = $this.attr("data-count");
				$({
					countNum: $this.text(),
				}).animate(
					{
						countNum: countTo,
					},

					{
						duration: 2000,
						easing: "swing",
						step: function () {
							$this.text(Math.floor(this.countNum));
						},
						complete: function () {
							$this.text(this.countNum);
							//alert('finished');
						},
					}
				);
			});
			counted = 1;
		}
	});
});

function textAreaAdjust(o) {
	o.style.height = "1px";
	o.style.height = 25 + o.scrollHeight + "px";
}

// smooth scroling effect================
// $("html").easeScroll();

/*========== Page Loader ==========*/
$(window).on("load", function () {
	$(".loader").delay(700).fadeOut();
	$("#pageloader").delay(1200).fadeOut("slow");
});
