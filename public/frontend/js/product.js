var galleryThumbs = new Swiper('.gallery-thumbs', {
	spaceBetween: 5,
	slidesPerView: 20,
	freeMode: true,
	lazy: true,
	watchSlidesVisibility: true,
	watchSlidesProgress: true,
	hashNavigation: true,
	slideToClickedSlide: true,
	breakpoints: {
		300: {
			slidesPerView: 4,
			spaceBetween: 10,
		},
		500: {
			slidesPerView: 4,
			spaceBetween: 10,
		},
		640: {
			slidesPerView: 4,
			spaceBetween: 15,
		},
		768: {
			slidesPerView: 5,
			spaceBetween: 15,
		},
		1024: {
			slidesPerView: 5,
			spaceBetween: 20,
		},
		1199: {
			slidesPerView: 5,
			spaceBetween: 20,
		},
	},
	navigation: {
		nextEl: '.gallery_pro .swiper-button-next',
		prevEl: '.gallery_pro .swiper-button-prev',
	},
});
var galleryTop = new Swiper('.gallery-top', {
	spaceBetween: 0,
	lazy: true,
	hashNavigation: true,
	thumbs: {
		swiper: galleryThumbs
	}
});



$(document).ready(function() {
	$("#lightgallery").lightGallery({
		thumbnail: false
	}); 
});
var swiper = new Swiper('.nd-similar-product-swiper', {
	slidesPerView: 4,
	spaceBetween: 20,
	slidesPerGroup: 2,
	slideToClickedSlide: false,
	navigation: {
		nextEl: '.nd-similar-product .swiper-button-next',
		prevEl: '.nd-similar-product .swiper-button-prev',
	},
	breakpoints: {
		300: {
			slidesPerView: 2,
			spaceBetween: 10
		},
		500: {
			slidesPerView: 2,
			spaceBetween: 10
		},
		640: {
			slidesPerView: 2,
			spaceBetween: 10
		},
		768: {
			slidesPerView: 3,
			spaceBetween: 20
		},
		1024: {
			slidesPerView: 4,
			spaceBetween: 20
		},
		1200: {
			slidesPerView: 4,
			spaceBetween: 20
		}
	}
});
var mySwiper;
if ($(window).width() < 992){
	mySwiper = new Swiper('.nd-product-slide-image', {
		slidesPerView: 1,
		spaceBetween: 0,
		slidesPerGroup: 1,
		autoHeight: true,
		scrollbar: {
			el: ".swiper-scrollbar",
			hide: true,
		},
		breakpoints: {
			300: {
				slidesPerView: 1,
				spaceBetween: 0
			},
			500: {
				slidesPerView: 1,
				spaceBetween: 0
			},
			640: {
				slidesPerView: 1,
				spaceBetween: 0
			},
			768: {
				slidesPerView: 2,
				spaceBetween: 0
			}
		}
	});
};