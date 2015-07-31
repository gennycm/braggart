
			<div id="containerSvg">
				<svg class="loader" width="300px" height="200px" viewBox="0 0 187.3 93.7" preserveAspectRatio="xMidYMid meet">
					<path style="-webkit-filter:url(#f2)" stroke="#000000" id="outline" fill="none" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M93.062,12.128v68.741
	 M93.181,12.372l34.758,49.907 M93.062,12.128L58.69,63.682 M58.692,63.684l34.371,17.186 M93.062,80.869l35.246-17.82
	 M58.692,63.684V30.322 M58.692,30.322l34.371,11.754 M93.062,42.076l34.875-12.382 M93.062,42.076L58.69,63.684 M58.692,30.322
	l34.371,50.547 M127.938,30.322L93.063,80.869 M93.062,42.076l33.992,20.203 M128.308,29.694v32.585" />

					<path id="outline-bg" opacity="0.5" fill="none" stroke="#000000" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"   d="M93.062,12.128v68.741
	 M93.181,12.372l34.758,49.907 M93.062,12.128L58.69,63.682 M58.692,63.684l34.371,17.186 M93.062,80.869l35.246-17.82
	 M58.692,63.684V30.322 M58.692,30.322l34.371,11.754 M93.062,42.076l34.875-12.382 M93.062,42.076L58.69,63.684 M58.692,30.322
	l34.371,50.547 M127.938,30.322L93.063,80.869 M93.062,42.076l33.992,20.203 M128.308,29.694v32.585" />
				</svg>
			</div>
	<!-- /containerSvg -->
	<script>
	(function() {
		var containerSvg = document.getElementById('containerSvg');

		TweenMax.set(['svg'], {
			position: 'absolute',
			top: '50%',
			left: '50%',
			xPercent: -50,
			yPercent: -50
		})

		TweenMax.set([containerSvg], {
			position: 'absolute',
			top: '50%',
			left: '50%',
			xPercent: -50,
			yPercent: -50
		})

		var tl = new TimelineMax({
			repeat: -1
		});

		tl.set('#outline', {
			drawSVG: '0% 0%'
		})
		.to('#outline', 0.5, {
			drawSVG: '11% 25%',
			ease: Linear.easeNone
		})
		.to('#outline', 0.5, {
			drawSVG: '35% 70%',
			ease: Linear.easeNone
		})
		.to('#outline', 0.5, {
			drawSVG: '99% 100%',
			ease: Linear.easeNone
		})
	})();
	</script>
