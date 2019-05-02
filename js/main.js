// Cameron Spear's script is highlighted on CSS-Tricks.com. 
// It requires the jQuery library. css-tricks.com/snippets/jquery/highlight-all-links-to-current-page/
$(document).ready(function() {
    $('a').each(function() {
        if ($(this).prop('href') == window.location.href) {
            $(this).addClass('current');
        }
    });
});


/* Bookmark site script- © Dynamic Drive DHTML code library (www.dynamicdrive.com)
/* This notice MUST stay intact for legal use
/* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code

/* Modified to support Opera */
function bookmarksite(title,url){
if (window.sidebar) // firefox
	window.sidebar.addPanel(title, url, "");
else if(window.opera && window.print){ // opera
	var elem = document.createElement('a');
	elem.setAttribute('href',url);
	elem.setAttribute('title',title);
	elem.setAttribute('rel','sidebar');
	elem.click();
} 
else if(window.chrome){
	if (navigator.appVersion.indexOf("Mac")!=-1){
		alert("Please close this popup and press Cmd-D to bookmark.");
	}else{
		alert("Please close this popup and press Ctrl-D to bookmark.");
	}
}
else if(document.all)// ie
	window.external.AddFavorite(url, title);
}

// SVG sprite file loading solution provided by Legomushroom at gist.github.com/sol0mka/7689480 
$(document.body).prepend($('<div>').load('http://people.oregonstate.edu/~yeja/prototype/img/sprite.svg'));
