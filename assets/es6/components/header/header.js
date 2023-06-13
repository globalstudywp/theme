"use strict";

(function ($) {

	$(document).ready(function () {
		stm_nav_toggle();
	});
	$(window).on('load', function(){
		$('.ms_lms_loader_bg_globalstudy').delay(1200).fadeToggle();
	});
	let stm_nav_toggle = function stm_nav_toggle() {
		$('.mobile-switcher').on('click', function (e) {
			e.preventDefault();
			e.stopPropagation();

			$(this).toggleClass('active');
			$(this).parent().toggleClass('active').find('.navigation-menu').toggleClass('active');
		});

		$(".globalstudy-menu li.menu-item-has-children > a").after('<span class="arrow"></span>');
		$('.globalstudy-menu > li.menu-item-has-children .arrow').on('click', function () {
			let $this = $(this);
			if ($this.hasClass('active')) {
				$this.toggleClass('active');
				$this.parent().toggleClass('active');
			} else {
				$this.addClass('active');
				$this.parent().addClass('active');
			}
		});
	};

})(jQuery);
