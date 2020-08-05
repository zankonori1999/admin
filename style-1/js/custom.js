/* =========================================================
Featured news slider
============================================================ */
jQuery(window).load(function() {
	jQuery('.feature-news').carouFredSel({
		responsive: true,
		prev: '#prev-1',
		next: '#next-1',
		width: 160,
		scroll: 1,
		auto: false,
		items: {
			width: 160,
			visible: {
				min: 1,
				max: 3
			}
		}
	});
	jQuery('.related-news').carouFredSel({
		responsive: true,
		prev: '#prev-1',
		next: '#next-1',
		width: 176,
		scroll: 1,
		auto: false,
		items: {
			width: 176,
			visible: {
				min: 1,
				max: 4
			}
		}
	});
});
/* =========================================================
Home page slider
============================================================ */
jQuery(window).load(function() {
	jQuery('#slider').nivoSlider({
		 effect: 'boxRainGrow', // Specify sets like: 'fold,fade,sliceDown'
        slices: 15, // For slice animations
        boxCols: 8, // For box animations
        boxRows: 4, // For box animations
        animSpeed: 500, // Slide transition speed
        pauseTime: 5000, // How long each slide will show
        startSlide: 0, // Set starting Slide (0 index)
        directionNav: true, // Next & Prev navigation
        controlNav: true, // 1,2,3... navigation
        controlNavThumbs: false, // Use thumbnails for Control Nav
        pauseOnHover: true, // Stop animation while hovering
        manualAdvance: false, // Force manual transitions
        prevText: 'Prev', // Prev directionNav text
        nextText: 'Next', // Next directionNav text
        randomStart: false, // Start on a random slide
        beforeChange: function(){}, // Triggers before a slide transition
        afterChange: function(){}, // Triggers after a slide transition
        slideshowEnd: function(){}, // Triggers after all slides have been shown
        lastSlide: function(){}, // Triggers when last slide is shown
        afterLoad: function(){} // Triggers when slider has loaded
		});
});
/* =========================================================
Home page slider
============================================================ */
jQuery(document).ready(function(){
	var view_port_w;
		if(self.innerWidth!=undefined) view_port_w= self.innerWidth;
		else{
			var D= document.documentElement;
			if(D) view_port_w= D.clientWidth;
		}
	if(view_port_w > 1000){
		jQuery.backstretch([
			  "placeholders/01.jpg",
			  "placeholders/02.jpg",
			   "placeholders/03.jpg"
			], {
				fade: 750,
				duration: 4000
		});
	}
})
/* =========================================================
Menu
============================================================ */
jQuery(document).ready(function(){
	jQuery("#top-menu li").has('ul').addClass('has-child');
	jQuery("#top-menu li").hover(function() {
		jQuery(this).find("ul").first().slideDown(300);
			}, function() {
		jQuery(this).find("ul").first().hide();
	});

})
/* =========================================================
Create mobile menu
============================================================ */
function createMobileMenu(menu_id, mobile_menu_id){
    // Create the dropdown base
    jQuery("<select />").appendTo(menu_id);
    jQuery(menu_id).find('select').first().attr("id",mobile_menu_id);
    
    // Populate dropdown with menu items
    jQuery(menu_id).find('a').each(function() {        
        var el = jQuery(this);       
        
        var selected = '';
        if (el.parent().hasClass('current-menu-item') == true){
            selected = "selected='selected'";
        }        
        
        var depth = el.parents("ul").size();
        var space = '';
        if(depth > 1){
            for(i=1; i<depth; i++){
                space += '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
            }
        }        
        
        jQuery("<option "+selected+" value='"+el.attr("href")+"'>"+space+el.text()+"</option>").appendTo(jQuery(menu_id).find('select').first());
    });
    jQuery(menu_id).find('select').first().change(function() {
        window.location = jQuery(this).find("option:selected").val();
    });    
}

jQuery(document).ready(function(){
    if(jQuery('#top-nav').length > 0){
        createMobileMenu('#top-nav','responsive-menu');	
    }
});
/* =========================================================
Search box
============================================================ */
jQuery(document).ready(function(){
	jQuery(".search-icon").click(function() {
		jQuery(this).toggleClass("close-icon");
		jQuery(".search-box").toggle(300);
		jQuery(".search-icon").toggleClass("search-active");
	});

})
/* =========================================================
Fix CSS
============================================================ */
jQuery(document).ready(function(){	
	jQuery(".primary .tab-content ul li:last-child").css({"border-bottom": "none", "padding-bottom":0});
	jQuery("#widget-list-a > li:last-child").css({"margin-bottom":0});
	jQuery("#widget-list-b > li:last-child").css({"margin-bottom":0});
	jQuery(".tweet_list li:last-child").css({"border-bottom": "none","margin-bottom":0, "padding-bottom":0});	
	jQuery(".right-col ul li:last-child").css({"border-bottom": "none", "padding-bottom":0});
	jQuery("#bottom-menu ul li:first-child").css({"margin-right":0});
	
})
/* =========================================================
Hover effect
============================================================ */
jQuery(document).ready(function(){   
   
	//video thumbnails hover
	 jQuery(".black-overlay").mouseenter(function(){
        jQuery(this).fadeTo(300, 0);
    }).mouseleave(function(){
        jQuery(this).fadeTo(300, 0.3);
    });	
	 jQuery(".hover-effect").mouseenter(function(){
        jQuery(this).find('img').fadeTo(500, 0.5);
    }).mouseleave(function(){
         jQuery(this).find('img').fadeTo(300, 1);
    });	
	/*---------social links------------*/
	if (jQuery.browser.msie) {		
		}else
		{
		 	jQuery(".social-links li").mouseenter(function(){
				jQuery(this).find('a').fadeTo(300, 1);
				jQuery(this).find('img').fadeTo(300, 0);
			
			}).mouseleave(function(){
				jQuery(this).find('a').fadeTo(300, 0);
				jQuery(this).find('img').fadeTo(300, 1);
				
			});	
	 }
	
});
/* =========================================================
prettyPhoto
============================================================ */
jQuery(document).ready(function(){
    jQuery("a[rel^='prettyPhoto']").prettyPhoto();
});
/* =========================================================
Tabs
============================================================ */
jQuery(document).ready(function() {    
    if( jQuery(".tab-content").length > 0){   
        //Default Action Product Tab
        jQuery(".tab-content").hide(); //Hide all content
        jQuery("ul.tabs li:first").addClass("active").show(); //Activate first tab
        jQuery(".tab-content:first").show(); //Show first tab content
        //On Click Event Product Tab
        jQuery("ul.tabs li").click(function() {
            jQuery("ul.tabs li").removeClass("active"); //Remove any "active" class
            jQuery(this).addClass("active"); //Add "active" class to selected tab
            jQuery(".tab-content").hide(); //Hide all tab content
            var activeTab = jQuery(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
            jQuery(activeTab).fadeIn(); //Fade in the active content
            return false;
		
        });
    }
});
/* =========================================================
Sticky
============================================================ */
jQuery(window).load(function() {
	//jQuery(".sidebar ul li:last-child").addClass("sticky-article");
	var view_port_w;
		if(self.innerWidth!=undefined) view_port_w= self.innerWidth;
		else{
			var D= document.documentElement;
			if(D) view_port_w= D.clientWidth;
		}
	if(view_port_w > 1110){
		jQuery(".tab-container").sticky({ topSpacing: 0, bottomSpacing: 271, className: 'sticky', wrapperClassName: 'sticky-wrapper'});
		jQuery(".sidebar #widget-list-b").sticky({ topSpacing: 0, bottomSpacing: 271, className: 'sticky', wrapperClassName: 'sticky-wrapper'});
		jQuery(".sidebar #widget-list-a").sticky({ topSpacing: 0, bottomSpacing: 271, className: 'sticky', wrapperClassName: 'sticky-wrapper'});
		
	}
});
/*+++++++++resize+++++++++*/
jQuery(window).resize(function() {	
    clearTimeout(this.id);
    this.id = setTimeout(doneResizing, 500);
});
function doneResizing(){
	var view_port_w;
		if(self.innerWidth!=undefined) view_port_w= self.innerWidth;
		else{
		var D= document.documentElement;
		if(D) view_port_w= D.clientWidth;
		}
	if(view_port_w >= 980 ){	
		find_sticky = jQuery(".primary .article-tabs .tab-container").parent();
		if (jQuery(find_sticky).hasClass("sticky-wrapper") == false){
			jQuery(".tab-container").sticky({ topSpacing: 0, bottomSpacing: 271, className: 'sticky', wrapperClassName: 'sticky-wrapper'});
		}
		
		find_sticky = jQuery("#sidebar-a #widget-list-a").parent();
		if (jQuery(find_sticky).hasClass("sticky-wrapper") == false){
			jQuery(".sidebar #widget-list-a").sticky({ topSpacing: 0, bottomSpacing: 271, className: 'sticky', wrapperClassName: 'sticky-wrapper'});
		}
		find_sticky = jQuery("#sidebar-b #widget-list-b").parent();
		if (jQuery(find_sticky).hasClass("sticky-wrapper") == false){
			jQuery(".sidebar #widget-list-b").sticky({ topSpacing: 0, bottomSpacing: 271, className: 'sticky', wrapperClassName: 'sticky-wrapper'});
		}
	
	}
	else if(view_port_w < 980 && view_port_w >= 768){
		find_sticky = jQuery(".primary .article-tabs .tab-container").parent();
		if (jQuery(find_sticky).hasClass("sticky-wrapper") == false){
			jQuery(".tab-container").sticky({ topSpacing: 0, bottomSpacing: 271, className: 'sticky', wrapperClassName: 'sticky-wrapper'});
		}
		
		find_sticky = jQuery("#sidebar-a #widget-list-a").parent();
		if(jQuery(find_sticky).hasClass("sticky-wrapper")){
			jQuery("#sidebar-a #widget-list-a").removeClass("sticky");
			jQuery("#sidebar-a #widget-list-a").css("position","static");
			m_temp = jQuery("#sidebar-a .sticky-wrapper").html();
			jQuery("#sidebar-a .sticky-wrapper").remove();
			jQuery("#sidebar-a").append(m_temp);
		}
		find_sticky = jQuery("#sidebar-b #widget-list-b").parent();
		if (jQuery(find_sticky).hasClass("sticky-wrapper") == false){
			jQuery(".sidebar #widget-list-b").sticky({ topSpacing: 0, bottomSpacing: 271, className: 'sticky', wrapperClassName: 'sticky-wrapper'});
		}
	}
	else if(view_port_w < 768){
		//Remove sticky all
		find_sticky = jQuery(".primary .article-tabs .tab-container").parent();
		if(jQuery(find_sticky).hasClass("sticky-wrapper")){
			jQuery(".primary .article-tabs .tab-container").removeClass("sticky");
			jQuery(".primary .article-tabs .tab-container").css("position","static");
			m_temp = jQuery(".primary .article-tabs .sticky-wrapper").html();
			jQuery(".primary .article-tabs .sticky-wrapper").remove();
			jQuery(".primary .article-tabs").append(m_temp);
		}
		find_sticky = jQuery("#sidebar-a #widget-list-a").parent();
		if(jQuery(find_sticky).hasClass("sticky-wrapper")){
			jQuery("#sidebar-a #widget-list-a").removeClass("sticky");
			jQuery("#sidebar-a #widget-list-a").css("position","static");
			m_temp = jQuery("#sidebar-a .sticky-wrapper").html();
			jQuery("#sidebar-a .sticky-wrapper").remove();
			jQuery("#sidebar-a").append(m_temp);
		}
		find_sticky = jQuery("#sidebar-b #widget-list-b").parent();
		if(jQuery(find_sticky).hasClass("sticky-wrapper")){
			jQuery("#sidebar-b #widget-list-b").removeClass("sticky");
			jQuery("#sidebar-b #widget-list-b").css("position","static");
			m_temp = jQuery("#sidebar-b .sticky-wrapper").html();
			jQuery("#sidebar-b .sticky-wrapper").remove();
			jQuery("#sidebar-b").append(m_temp);
		}
	}
	/*	
	if(view_port_w <= 767 ){	
		var find_m_sticky = jQuery("#main-section .last-item").parent();	
		if(jQuery(find_m_sticky).hasClass("sticky-wrapper")){
			jQuery("#main-section .last-item").removeClass("sticky");
			jQuery("#main-section .last-item").css("position","static");
			m_temp=jQuery("#main-section .sticky-wrapper").html();
			jQuery("#main-section .sticky-wrapper").remove();
			jQuery("#main-section").append(m_temp);
		}
	}
	else if(view_port_w > 767 ){
		var find_m_sticky = jQuery("#main-section .last-item").parent();	
		if (jQuery(find_m_sticky).hasClass("sticky-wrapper") == false){
			jQuery("#main-section .last-item").sticky({ topSpacing: 0, bottomSpacing: 188, className: 'sticky', wrapperClassName: 'sticky-wrapper'});
		}
	}
	//sidebar
	if(view_port_w >=940){
		var find_sticky_a = jQuery("#sidebar-a .a-last-widget").parent();
		if (jQuery(find_sticky_a).hasClass("sticky-wrapper") == false){
			jQuery("#sidebar-a .a-last-widget").sticky({ topSpacing: 0, bottomSpacing: 188, className: 'sticky', wrapperClassName: 'sticky-wrapper'});		
		}
	}
	else if((view_port_w <=939) && (view_port_w >=768)){
		var find_sticky_a = jQuery("#sidebar-a .a-last-widget").parent();
		if(jQuery(find_sticky_a).hasClass("sticky-wrapper")){
			jQuery("#sidebar-a .a-last-widget").removeClass("sticky");
			jQuery("#sidebar-a .a-last-widget").css("position","static");
			temp=jQuery("#sidebar-a .sticky-wrapper").html();
			jQuery("#sidebar-a .sticky-wrapper").remove();
			jQuery("#sidebar-a").append(temp);
		}
	}
	else if((view_port_w <=767) &&(view_port_w >=480)){
		var find_sticky_a = jQuery("#sidebar-a .a-last-widget").parent();
		if (jQuery(find_sticky_a).hasClass("sticky-wrapper") == false){
			jQuery("#sidebar-a .a-last-widget").sticky({ topSpacing: 0, bottomSpacing: 188, className: 'sticky', wrapperClassName: 'sticky-wrapper'});		
		}
	}
	else if(view_port_w <= 479){
		var find_sticky_a = jQuery("#sidebar-a .a-last-widget").parent();
		if(jQuery(find_sticky_a).hasClass("sticky-wrapper")){
			jQuery("#sidebar-a .a-last-widget").removeClass("sticky");
			jQuery("#sidebar-a .a-last-widget").css("position","static");
			temp=jQuery("#sidebar-a .sticky-wrapper").html();
			jQuery("#sidebar-a .sticky-wrapper").remove();
			jQuery("#sidebar-a").append(temp);
		}
	}
	*/
	
}
/* =========================================================
Twitter
============================================================ */
 jQuery(function(jQuery){
	jQuery("#custom").tweet({
	  avatar_size: 32,
	  count: 2,
	  username: "envato",
	  template: "{text} » {retweet_action}"
	});
  }).bind("loaded", function(){
	jQuery(this).find("a.tweet_action").click(function(ev) {
	  window.open(this.href, "Retweet",
				  'menubar=0,resizable=0,width=550,height=420,top=200,right=400');
	  ev.preventDefault();
	});
  });
/* =========================================================
Scroll to top
============================================================ */
jQuery(document).ready(function(){

	// hide #scroll-to-top first
	jQuery("#scroll-to-top").hide();
	
	// fade in #back-top
	jQuery(function () {
		jQuery(window).scroll(function () {
			if (jQuery(this).scrollTop() > 300) {
				jQuery('#scroll-to-top').fadeIn();
			} else {
				jQuery('#scroll-to-top').fadeOut();
			}
		});

		// scroll body to 0px on click
		jQuery('#scroll-to-top').click(function () {
			jQuery('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});

});
    
