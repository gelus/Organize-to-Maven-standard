//@prepros-prepend ../js/jquery-1.7.2.js
//@prepros-prepend ../js/plugins/jquery.iecors.js
//@prepros-prepend ../js/plugins/jquery.animate-colors-min.js
//@prepros-prepend ../js/video.js
//@prepros-prepend ../js/func.js
//@prepros-append ../js/form.js 
$(document).ready(function(){
	//Video Preloading -- Image click event
	var iframes = {}
	$('.youtubeVideo').bind('click', function(){
				this.appendChild(iframes[this.vid]);
				this.removeChild(this.childNodes[1]);
	}).each(function(){
		this.vid = this.childNodes[1].alt;
		iframes[this.vid] = document.createElement('iframe');
			iframes[this.vid].setAttribute("width", "378");
			iframes[this.vid].setAttribute("height", "213");
			iframes[this.vid].setAttribute("src", this.vid);
	});
});