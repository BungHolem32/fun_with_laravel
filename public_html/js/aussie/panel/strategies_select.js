/**
 * Strategies switch select boxses
 */
$(function(){
	var $strategyBtn = $('.strategy-btn');
	$strategyBtn.on('mouseenter', function(){
		var infoEl = $(this).data('info');

		$('#' + infoEl).fadeIn(200);
	});

	$strategyBtn.on('mouseleave', function(){
		var infoEl = $(this).data('info');

		$('#' + infoEl).hide()
	});

	var progress = false;
	$strategyBtn.on('click', function(){
		var $this = $(this);
		if (progress) return;
		$('#step4').css('opacity', '0.5');

		progress = true;
		$.ajax({
			url: '/change_strategy',
			data: {
				strategy_id: $(this).data('strategy')
			},
			success: function() {
				progress = false;
				$('#step4').find('.strategy-btn').removeClass('btn-success');
				$this.addClass('btn-success');
				$('#step4').css('opacity', '1');
			}
		});
	})

});