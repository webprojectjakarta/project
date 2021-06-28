<div class="kt-grid kt-grid--hor kt-grid--root">
	<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
		<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper">
			<div class="kt-header kt-grid__item  kt-header--fixed ">
				<?php echo $_header;?>
			</div>
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
				<?php echo $_content;?>
			</div>
			<div class="kt-footer kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop">
				<?php echo $_footer;?>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('[data-toogle=offcanvas]').click(function(){
			$('.row-offcanvas').toogleClass('active');
		});
	});
</script>
</body>
</html>