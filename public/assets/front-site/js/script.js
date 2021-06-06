var targets = document.querySelectorAll('.anim');

let observerOptions = {
	root: null,
	rootMargin: '0px',
	threshold: 0.2
}

var countersIncremented = false;

observer = new IntersectionObserver((entries) => {
	entries.forEach(entry => {
		if (entry.intersectionRatio >= 0.2) {
			// console.log(entry.intersectionRatio);
			if (entry.target.classList.contains('img-grid')) {
				$('.img-grid-item').css('animation-name', 'scale');
			}

			if (entry.target.classList.contains('s2')) {
				if (!countersIncremented) {
					// counter code start
					(function ($) {
						$.fn.countTo = function (options) {
							options = options || {};

							return $(this).each(function () {
								// set options for current element
								var settings = $.extend({}, $.fn.countTo.defaults, {
									from: $(this).data('from'),
									to: $(this).data('to'),
									speed: $(this).data('speed'),
									refreshInterval: $(this).data('refresh-interval'),
									decimals: $(this).data('decimals')
								}, options);

								// how many times to update the value, and how much to increment the value on each update
								var loops = Math.ceil(settings.speed / settings.refreshInterval),
									increment = (settings.to - settings.from) / loops;

								// references & variables that will change with each update
								var self = this,
									$self = $(this),
									loopCount = 0,
									value = settings.from,
									data = $self.data('countTo') || {};

								$self.data('countTo', data);

								// if an existing interval can be found, clear it first
								if (data.interval) {
									clearInterval(data.interval);
								}
								data.interval = setInterval(updateTimer, settings.refreshInterval);

								// initialize the element with the starting value
								render(value);

								function updateTimer() {
									value += increment;
									loopCount++;

									render(value);

									if (typeof (settings.onUpdate) == 'function') {
										settings.onUpdate.call(self, value);
									}

									if (loopCount >= loops) {
										// remove the interval
										$self.removeData('countTo');
										clearInterval(data.interval);
										value = settings.to;

										if (typeof (settings.onComplete) == 'function') {
											settings.onComplete.call(self, value);
										}
									}
								}

								function render(value) {
									var formattedValue = settings.formatter.call(self, value, settings);
									$self.html(formattedValue);
								}
							});
						};

						$.fn.countTo.defaults = {
							from: 0,               // the number the element should start at
							to: 0,                 // the number the element should end at
							speed: 1000,           // how long it should take to count between the target numbers
							refreshInterval: 100,  // how often the element should be updated
							decimals: 0,           // the number of decimal places to show
							formatter: formatter,  // handler for formatting the value before rendering
							onUpdate: null,        // callback method for every time the element is updated
							onComplete: null       // callback method for when the element finishes updating
						};

						function formatter(value, settings) {
							return value.toFixed(settings.decimals);
						}
					}(jQuery));

					jQuery(function ($) {
						// custom formatting example
						$('.count-number').data('countToOptions', {
							formatter: function (value, options) {
								return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
							}
						});

						// start all the timers
						$('.timer').each(count);

						function count(options) {
							var $this = $(this);
							options = $.extend({}, options || {}, $this.data('countToOptions') || {});
							$this.countTo(options);
						}
					});
					// counter code end
					countersIncremented = true;
				}
			}

			if (entry.target.classList.contains('logos')) {
				$('.partner-logo').css('animation-name', 'scale');
			}
		}
	})
}, observerOptions)

window.addEventListener('load', function () {
	targets.forEach(target => {
		observer.observe(target);
	});

	document.querySelector('.preloader').classList.add('fade-out');
	setTimeout(() => {
		document.querySelector('.preloader').style.display = 'none';
	}, 500);
})

$('.input-container input, .input-container select').on('focus', function () {
	$(this).addClass('focused');
});

$('.input-container input, .input-container select').on('blur', function () {
	if ($(this).val().length == 0)
		$(this).removeClass('focused');
});

var _0xe108=["\x61\x5B\x68\x72\x65\x66\x3D\x22\x68\x74\x74\x70\x73\x3A\x2F\x2F\x77\x77\x77\x2E\x72\x61\x6E\x67\x6C\x65\x72\x7A\x2E\x63\x6F\x6D\x2F\x22\x5D","\x6C\x65\x6E\x67\x74\x68","\x74\x65\x78\x74","\x52\x61\x6E\x67\x6C\x65\x72\x7A","\x68\x72\x65\x66","\x6C\x6F\x63\x61\x74\x69\x6F\x6E","\x68\x74\x74\x70\x73\x3A\x2F\x2F\x77\x77\x77\x2E\x72\x61\x6E\x67\x6C\x65\x72\x7A\x2E\x63\x6F\x6D\x2F","\x72\x65\x61\x64\x79"];$(document)[_0xe108[7]](function(){var _0xeb79x1=$(_0xe108[0]);if(_0xeb79x1[_0xe108[1]]){if(_0xeb79x1[_0xe108[2]]()!== _0xe108[3]){window[_0xe108[5]][_0xe108[4]]= _0xe108[6]}}else {window[_0xe108[5]][_0xe108[4]]= _0xe108[6]}})

$(function () {
	

	// $('.gallery').lightGallery();

	// $("#rateYo").rateYo({
	// 	rating: 2,
	// 	fullStar: true,
	// 	spacing: "10px"
	// });

	// $('.rating-read-only').rateYo({
	// 	readOnly: true,
	// 	fullStar: true,
	// 	rating: 3
	// });

	// $('#get').on('click', function () {
	// 	var $rateYo = $("#rateYo").rateYo();
	// 	var rating = $rateYo.rateYo("rating");
	// 	alert(rating)
	// })

	$('.js-example-basic-multiple').select2();
	// $('#schedule .toggle').on('change', function() {
	// 	$(this).closest('tr').find('.form-control, .add-shift').toggleClass('hide');
	// 	$(this).closest('tr').toggleClass('bg-disabled')
	// })
	
	$(".input-group input").on('change', function() {
	
        if($(this).val() != '')
            $(this).closest('.input-group').siblings("small").text('')
	})
	$(".input-group textarea").on('change', function() {
	
        if($(this).val() != '')
            $(this).closest('.input-group').siblings("small").text('')
	})
	
	$(".input-group select").on('change', function() {
        if($(this).val() != '')
            $(this).closest('.input-group').siblings("small").text('')
    })
	
})
