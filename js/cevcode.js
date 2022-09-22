(function($) {

	// Rolagem suave usando o jQuery easing
	// aplicar a classe js-scroll-trigger em todos os nav-link
	$('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
	    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	      if (target.length) {
	        $('html, body').animate({
	          scrollTop: (target.offset().top - 54)
	        }, 1000, "easeInOutExpo");
	        return false;
	      }
	    }
	});

	// Fecha o menu responsivo quando clicado
  	$('.js-scroll-trigger').click(function() {
    	$('.navbar-collapse').collapse('hide');
  	});

	// Ative scrollspy para adicionar classe ativa 
	// aos itens da barra de navegação na rolagem
	$('body').scrollspy({
	    target: '#menu-principal',
	    offset: 56
	});

})(jQuery); 
