$(function() {
	$('h2').each(function() {
		var texte = this.innerHTML;
		var premiere_espace = texte.indexOf(" ");
		if (premiere_espace > 0) {
			var apres = texte.substring(0,premiere_espace);
			var avant = texte.substring(premiere_espace, texte.length)
			var newtexte = '<span class="premier_mot">' + apres + '</span>' + avant;
			this.innerHTML = newtexte;
		} else {
			this.innerHTML = '<span class="premier_mot">' + texte + '</span>';
		}
	});

	$('.popup').click(function(event) {
		var width  = 575,
			height = 400,
			left   = ($(window).width()  - width)  / 2,
			top    = ($(window).height() - height) / 2,
			url    = this.href,
			opts   = 'status=1' +
					 ',width='  + width  +
					 ',height=' + height +
					 ',top='    + top    +
					 ',left='   + left;
		
		window.open(url, 'button_partage', opts);
	 
		return false;
	});
});
