/*  General JavaScript Functions */

/* Print function */
function printWindow(){
	bV = parseInt(navigator.appVersion)
	if (bV >= 4) window.print()
}

/* MM DW IMG swap and pre-fetch functions */
function MM_swapImgRestore() { //v3.0
	var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
	
function MM_preloadImages() { //v3.0
	var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
	var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
	if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
		
function MM_findObj(n, d) { //v4.01
	var p,i,x;  
	if(!d) d=document; 
	if( (p=n.indexOf("?"))> 0 && parent.frames.length ){
		d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);
	}
	if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
	for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
	if(!x && d.getElementById) x=d.getElementById(n); return x;
}
		
function MM_swapImage() { //v3.0
	var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
	if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}

/* emailPage Function for Send to Colleague */
function emailPage(){
	var sCurrentLink = window.location.href;
	var sSubject = "From Your Colleague: Information on Giva Service Management Suite"
	var sBody = "I thought you might interest in the following information about the Giva Service Management Suite.\n\n"
	          + sCurrentLink
	          + "\n\n\n\nTo learn how Giva helps reduce costs, speed issue resolution, and increase customer satisfaction,\n"
						+ "view Giva customer case studies at:"
	          + "\nhttp://www.givainc.com/customers-case-studies.htm"
	          + "\n\nFor more information, visit http://www.givainc.com or call Giva at +1.408.260.9000."
	          + "\n\n";
	var sMailLink = "mailto:?subject=" + escape(sSubject) + "&body=" + escape(sBody);

	trackit(sCurrentLink);

	location.href = sMailLink;
}

function trackit(sLink){
	var dt = new Date();
	var i = new Image();
	i.src = "http://www.givainc.com/CGI-BIN/trackit.cfm?type=emailLink&link=" + escape(sLink) + "&" + dt.getTime();
	return true;
}

// pop up a new window
function openWindow(u, _w, _h, _n, _r, _s, _m, _t, _l){
	var w = (typeof _w == "string" || typeof _w == "number") ? parseInt(_w) : 600;
	var h = (typeof _h == "string" || typeof _h == "number") ? parseInt(_h) : 400;

	var n = (typeof _n == "string") ? _n : "wndPopup";
	var r = (_r) ? "yes" : "no";
	var s = (_s) ? "yes" : "no";
	var m = (_m) ? "yes" : "no";
	var t = (_t) ? "yes" : "no";
	var l = (_l) ? "yes" : "no";

	// calculate the center of the screen for positioning window there
	var x = Math.round( (screen.width/2) - (w/2) );
	var y = Math.round( (screen.height/2) - (h/2) );

	// create a new window that should appear centered in the screen
	var w = window.open(u, n, "status=yes,location=" + l + ",menubar=" + m + ",toolbar=" + t + ",resizable=" + r + ",scrollbars=" + s + ",width=" + w + ",height=" + h + ",left=" + x + ",top=" + y + ",screenX=" + x + ",screenY=" + y, true);
	if( !!w && !!w.focus ) w.focus();
	return w;
}

// legacy GoLive function for any old links that may happen to use this function
function CSOpenWindow(action) {
	var wf = "";	
	wf = wf + "width=" + action[3];
	wf = wf + ",height=" + action[4];
	wf = wf + ",resizable=" + (action[5] ? "yes" : "no");
	wf = wf + ",scrollbars=" + (action[6] ? "yes" : "no");
	wf = wf + ",menubar=" + (action[7] ? "yes" : "no");
	wf = wf + ",toolbar=" + (action[8] ? "yes" : "no");
	wf = wf + ",directories=" + (action[9] ? "yes" : "no");
	wf = wf + ",location=" + (action[10] ? "yes" : "no");
	wf = wf + ",status=" + (action[11] ? "yes" : "no");		
	window.open(action[1],action[2],wf);
}

// 
function setSearchText(oField, sEvent){
	var sDefaultText = "Secure search";
	var sCurrentText = oField.value.toLowerCase(); // make text lower case

	switch( sEvent.toLowerCase() ){
		case "focus":
			if( sCurrentText == sDefaultText.toLowerCase() ) oField.value = "";
			break;
		case "blur":
			if( sCurrentText == "" ) oField.value = sDefaultText;
			break;
	}
}

// Code to set the top level menu to active based on the page you are on
function setActive() {
  	var thePath = new String(document.URL);
	if( ! typeof document.getElementById('bc')){
		var breadCrumb = new String(document.getElementById('bc').textContent);
	
		if(breadCrumb.indexOf("Customers") >=0) {
			aObj = document.getElementById('customerNav');
			aObj.className='mainmenuactive';
		}
		else if (breadCrumb.indexOf("The Giva Difference") >=0) {
			aObj = document.getElementById('givaNav');
			aObj.className='mainmenuactive';
		}
		else if (breadCrumb.indexOf("Products") >=0) {
			aObj = document.getElementById('productsNav');
			aObj.className='mainmenuactive';
		}
		else if (breadCrumb.indexOf("Learn") >=0) {
			aObj = document.getElementById('learnNav');
			aObj.className='mainmenuactive';
		}
		else if (breadCrumb.indexOf("Company") >=0) {
			aObj = document.getElementById('companyNav');
			aObj.className='mainmenuactive';
		}
	  
	  /*if(thePath.indexOf("case-study") >=0 || thePath.indexOf("customers") >=0 || thePath.indexOf("services-support") >=0) {
		  aObj = document.getElementById('customerNav');
		  aObj.className='mainmenuactive';
	  }
	  else if (thePath.indexOf("test") >=0) {
		  
	  }*/
	}
}

/* generic DOM helpers for when jQuery isn't available */
window.DOM = (function (DOM){
	DOM.findParentByTagName = function (node, tagName){
		if( node.tagName.toUpperCase() == tagName.toUpperCase() ) return node;
		else if( node == null ) return;
		else return DOM.findParentByTagName(node.parentNode, tagName);
	}
	
	function getClassTokenRegEx(className){
		return new RegExp("(?:^|\\s)" + className + "(?!\\S)", "gi");
	}

	DOM.hasClass = function (node, className){
		if( !node ) return false;
		return node.className.match(getClassTokenRegEx(className));
	}

	DOM.addClass = function (node, className){
		if( !node ) return;
		if( !DOM.hasClass(node, className) ){
			node.className += " " + className;
		}
	}

	DOM.removeClass = function (node, className){
		if( !node ) return;
		node.className = node.className.replace(getClassTokenRegEx(className), '');
	}
	
	return DOM;
})(window.DOM || {});


/* for touchbased devices, we need to manually add event handling to emulate the :hover effect */
(function (){
	// we only need to run on touch based deviced
	if( "ontouchstart" in document.documentElement ){
		// when the DOM is ready, attach the menu touch behavior
		document.addEventListener("DOMContentLoaded", function (e){
			// we trigger on touchend, so the user has not removed their finger
			document.getElementById("menuh").addEventListener("click", function (e){
				// we do nothing, but by registering the click event we can emulate the :hover
			});

			// iOS 6.x is not responding to "click" events on the main document/body, so we need to attach to header/content
			document.getElementById("MainBodyContainer").addEventListener("click", function (e){
				// we do nothing, but this causes menu to lose :hover state
			});
			document.getElementById("header").addEventListener("click", function (e){
				// we do nothing, but this causes menu to lose :hover state
			});
		});
	}
})();

