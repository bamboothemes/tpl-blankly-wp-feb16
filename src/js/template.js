// Smoothscroll for one page
(function(e){function s(e){return e.replace(/(:|\.)/g,"\\$1")}var t="1.4.11",n={exclude:[],excludeWithin:[],offset:0,direction:"top",scrollElement:null,scrollTarget:null,beforeScroll:function(){},afterScroll:function(){},easing:"swing",speed:400,autoCoefficent:2,preventDefault:!0},r=function(t){var n=[],r=!1,i=t.dir&&t.dir=="left"?"scrollLeft":"scrollTop";this.each(function(){if(this==document||this==window)return;var t=e(this);if(t[i]()>0)n.push(this);else{t[i](1);r=t[i]()>0;r&&n.push(this);t[i](0)}});n.length||this.each(function(e){this.nodeName==="BODY"&&(n=[this])});t.el==="first"&&n.length>1&&(n=[n[0]]);return n},i="ontouchend"in document;e.fn.extend({scrollable:function(e){var t=r.call(this,{dir:e});return this.pushStack(t)},firstScrollable:function(e){var t=r.call(this,{el:"first",dir:e});return this.pushStack(t)},smoothScroll:function(t){t=t||{};var n=e.extend({},e.fn.smoothScroll.defaults,t),r=e.smoothScroll.filterPath(location.pathname);this.unbind("click.smoothscroll").bind("click.smoothscroll",function(t){var i=this,o=e(this),u=n.exclude,a=n.excludeWithin,f=0,l=0,c=!0,h={},p=location.hostname===i.hostname||!i.hostname,d=n.scrollTarget||(e.smoothScroll.filterPath(i.pathname)||r)===r,v=s(i.hash);if(!n.scrollTarget&&(!p||!d||!v))c=!1;else{while(c&&f<u.length)o.is(s(u[f++]))&&(c=!1);while(c&&l<a.length)o.closest(a[l++]).length&&(c=!1)}if(c){n.preventDefault&&t.preventDefault();e.extend(h,n,{scrollTarget:n.scrollTarget||v,link:i});e.smoothScroll(h)}});return this}});e.smoothScroll=function(t,n){var r,i,s,o,u=0,a="offset",f="scrollTop",l={},c={},h=[];if(typeof t=="number"){r=e.fn.smoothScroll.defaults;s=t}else{r=e.extend({},e.fn.smoothScroll.defaults,t||{});if(r.scrollElement){a="position";r.scrollElement.css("position")=="static"&&r.scrollElement.css("position","relative")}}r=e.extend({link:null},r);f=r.direction=="left"?"scrollLeft":f;if(r.scrollElement){i=r.scrollElement;u=i[f]()}else i=e("html, body").firstScrollable();r.beforeScroll.call(i,r);s=typeof t=="number"?t:n||e(r.scrollTarget)[a]()&&e(r.scrollTarget)[a]()[r.direction]||0;l[f]=s+u+r.offset;o=r.speed;if(o==="auto"){o=l[f]||i.scrollTop();o/=r.autoCoefficent}c={duration:o,easing:r.easing,complete:function(){r.afterScroll.call(r.link,r)}};r.step&&(c.step=r.step);i.length?i.stop().animate(l,c):r.afterScroll.call(r.link,r)};e.smoothScroll.version=t;e.smoothScroll.filterPath=function(e){return e.replace(/^\//,"").replace(/(index|default).[a-zA-Z]{3,4}$/,"").replace(/\/$/,"")};e.fn.smoothScroll.defaults=n})(jQuery);
(function ($) {
    $.fn.zenaccordion = function (options) {
    
    		// Accordion options
            var settings = $.extend({
                    openfirst: false,
                    showactive: false,
                    selector: '.sidebar',
                    type: 'panel',
                    target: '.sidebar',
                    openicon: 'chevron-right',
                    closeicon: 'chevron-up',
                    submenu: 'hide'
            }, options);
            

            // Hide all sub menu items on load
            // Set some variables
            var allPanels = $('.accordion ul ul').hide();
            var toggler = settings.selector + ' .accordion ul li.parent > a,';
            	toggler += settings.selector + ' .accordion ul li.parent > .zen-menu-heading';
            var open_icon = 'fa-' + settings.openicon + ' zen-icon zen-icon-' + settings.openicon;
            var close_icon = 'fa-' + settings.closeicon + ' zen-icon zen-icon-' + settings.closeicon;
			var expand = '.expand';
			var accordion_first = settings.selector + ' .accordion li.parent:first-child';
            var accordion_active = settings.selector + ' .accordion li.parent.active';
            
            // Append the toggle symbol. We can use this to hide and close items too.
            // Position outside of the link so we can detangle them later
			
	
			
			
            if(!$(toggler).hasClass('expand')) {
            	$(toggler).parent().prepend('<span class="expand zen-icon zen-icon-' + settings.openicon + ' fa fa-' + settings.openicon + '"></span>');
            	
            	toggler += ',';
            	toggler += settings.selector + ' .expand';
            }
            
            if (settings.openfirst) {
                    $(accordion_first + ' ul').slideDown();
                    $(accordion_first + ' .expand').removeClass(open_icon).addClass(close_icon); 
                    $(accordion_first + ' span.zen-menu-heading,' + accordion_active + ' a').addClass('open'); 
            }
            
            
            if (settings.showactive) {
                    $(accordion_active + ' ul').slideDown();
                 	$(accordion_active + ' .expand').removeClass(open_icon).addClass(close_icon); 
                    $(accordion_active + ' span.zen-menu-heading,' + accordion_active + ' a').addClass('open');  
            }
           
            
               
            // What happens when the toggler is clicked
            $(toggler).on('click', function(e) {
            	
            	// Prevent click action
            	if($(this).hasClass('open')) {
            		// Follow the link
            	} else {
            		e.preventDefault();
            	}
            	
            	
            	if($(this).hasClass('expand')) {
            		var target = $(this).parent().children('a,.zen-menu-heading');
            	} else {
            		var target = $(this);
            	}
        		
        		// Slide Open all panels
        		if(settings.type === "accordion") {
        			allPanels.slideUp();
        			$(toggler).find(expand).removeClass(close_icon).addClass(open_icon);	
        		}
        		
        		
        		// If the link that was clicked is already open
          		if($(target).hasClass('open')) {
          		
          			// This item is already open so lets close it
          			$(target).removeClass('open').parent().find('ul').slideUp().find('.open').removeClass('open');
          			
          			// Remove the open icon
          			$(target).parent().find(expand).removeClass(close_icon).addClass(open_icon);
          		
          			// Remove open from all items
      				if(settings.type === "accordion") {
      					$(toggler).removeClass('open');
      					$(toggler).parent().find(expand).removeClass(close_icon).addClass(open_icon);
      				}
          		
          		} else {
          			
          			// Close all panels
          			// Remove open class if using accordion
          			if(settings.type === "accordion") {
          			
          				allPanels.slideUp();
          				$(toggler).removeClass('open');
          				$(toggler).parent().find(expand).removeClass(close_icon).addClass(open_icon);
          			}
          			
          			// Open current item
          			// Toggle expand class
          			if(settings.type === "accordion") {
          				$(target).addClass('open').parent().find('ul').slideDown();
          			
          			} else {
          				if($(target).parent().find('ul:first').hasClass('cols-1')) {
          					$(target).addClass('open').parent().find('ul:first').slideDown();          		
          				}
          				else {
          					$(target).addClass('open').parent().find('ul').slideDown();	
          					$(target).parent().find(expand).addClass(close_icon).removeClass(open_icon).addClass('zen-icon fa');
          				}
          			}          			
          			$(target).parent().find(expand + ':first').addClass(close_icon).removeClass(open_icon).addClass('zen-icon fa');
          			
          		}

            });
      };
})(jQuery);
/*! Lazy Load 1.9.4 - MIT license - Copyright 2010-2013 Mika Tuupola */
!function(a,b,c,d){var e=a(b);a.fn.lazyload=function(f){function g(){var b=0;i.each(function(){var c=a(this);if(!j.skip_invisible||c.is(":visible"))if(a.abovethetop(this,j)||a.leftofbegin(this,j));else if(a.belowthefold(this,j)||a.rightoffold(this,j)){if(++b>j.failure_limit)return!1}else c.trigger("appear"),b=0})}var h,i=this,j={threshold:0,failure_limit:0,event:"scroll",effect:"show",container:b,data_attribute:"original",skip_invisible:!0,appear:null,load:null,placeholder:"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"};return f&&(d!==f.failurelimit&&(f.failure_limit=f.failurelimit,delete f.failurelimit),d!==f.effectspeed&&(f.effect_speed=f.effectspeed,delete f.effectspeed),a.extend(j,f)),h=j.container===d||j.container===b?e:a(j.container),0===j.event.indexOf("scroll")&&h.bind(j.event,function(){return g()}),this.each(function(){var b=this,c=a(b);b.loaded=!1,(c.attr("src")===d||c.attr("src")===!1)&&c.is("img")&&c.attr("src",j.placeholder),c.one("appear",function(){if(!this.loaded){if(j.appear){var d=i.length;j.appear.call(b,d,j)}a("<img />").bind("load",function(){var d=c.attr("data-"+j.data_attribute);c.hide(),c.is("img")?c.attr("src",d):c.css("background-image","url('"+d+"')"),c[j.effect](j.effect_speed),b.loaded=!0;var e=a.grep(i,function(a){return!a.loaded});if(i=a(e),j.load){var f=i.length;j.load.call(b,f,j)}}).attr("src",c.attr("data-"+j.data_attribute))}}),0!==j.event.indexOf("scroll")&&c.bind(j.event,function(){b.loaded||c.trigger("appear")})}),e.bind("resize",function(){g()}),/(?:iphone|ipod|ipad).*os 5/gi.test(navigator.appVersion)&&e.bind("pageshow",function(b){b.originalEvent&&b.originalEvent.persisted&&i.each(function(){a(this).trigger("appear")})}),a(c).ready(function(){g()}),this},a.belowthefold=function(c,f){var g;return g=f.container===d||f.container===b?(b.innerHeight?b.innerHeight:e.height())+e.scrollTop():a(f.container).offset().top+a(f.container).height(),g<=a(c).offset().top-f.threshold},a.rightoffold=function(c,f){var g;return g=f.container===d||f.container===b?e.width()+e.scrollLeft():a(f.container).offset().left+a(f.container).width(),g<=a(c).offset().left-f.threshold},a.abovethetop=function(c,f){var g;return g=f.container===d||f.container===b?e.scrollTop():a(f.container).offset().top,g>=a(c).offset().top+f.threshold+a(c).height()},a.leftofbegin=function(c,f){var g;return g=f.container===d||f.container===b?e.scrollLeft():a(f.container).offset().left,g>=a(c).offset().left+f.threshold+a(c).width()},a.inviewport=function(b,c){return!(a.rightoffold(b,c)||a.leftofbegin(b,c)||a.belowthefold(b,c)||a.abovethetop(b,c))},a.extend(a.expr[":"],{"below-the-fold":function(b){return a.belowthefold(b,{threshold:0})},"above-the-top":function(b){return!a.belowthefold(b,{threshold:0})},"right-of-screen":function(b){return a.rightoffold(b,{threshold:0})},"left-of-screen":function(b){return!a.rightoffold(b,{threshold:0})},"in-viewport":function(b){return a.inviewport(b,{threshold:0})},"above-the-fold":function(b){return!a.belowthefold(b,{threshold:0})},"right-of-fold":function(b){return a.rightoffold(b,{threshold:0})},"left-of-fold":function(b){return!a.rightoffold(b,{threshold:0})}})}(jQuery,window,document);
/*!
* jQuery meanMenu v2.0.8
* @Copyright (C) 2012-2014 Chris Wharton @ MeanThemes (https://github.com/meanthemes/meanMenu)
*
*/
/*
* This program is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
*
* THIS SOFTWARE AND DOCUMENTATION IS PROVIDED "AS IS," AND COPYRIGHT
* HOLDERS MAKE NO REPRESENTATIONS OR WARRANTIES, EXPRESS OR IMPLIED,
* INCLUDING BUT NOT LIMITED TO, WARRANTIES OF MERCHANTABILITY OR
* FITNESS FOR ANY PARTICULAR PURPOSE OR THAT THE USE OF THE SOFTWARE
* OR DOCUMENTATION WILL NOT INFRINGE ANY THIRD PARTY PATENTS,
* COPYRIGHTS, TRADEMARKS OR OTHER RIGHTS.COPYRIGHT HOLDERS WILL NOT
* BE LIABLE FOR ANY DIRECT, INDIRECT, SPECIAL OR CONSEQUENTIAL
* DAMAGES ARISING OUT OF ANY USE OF THE SOFTWARE OR DOCUMENTATION.
*
* You should have received a copy of the GNU General Public License
* along with this program. If not, see <http://gnu.org/licenses/>.
*
* Find more information at http://www.meanthemes.com/plugins/meanmenu/
*
*/
(function ($) {
	"use strict";
		$.fn.meanmenu = function (options) {
				var defaults = {
						meanMenuTarget: jQuery(this), // Target the current HTML markup you wish to replace
						meanMenuContainer: 'body', // Choose where meanmenu will be placed within the HTML
						meanMenuClose: "<span class='zen-icon-remove zen-icon fa fa-remove'></span>", // single character you want to represent the close menu button
						meanMenuCloseSize: "18px", // set font size of close button
						meanMenuOpen: "<span /><span /><span />", // text/markup you want when menu is closed
						meanRevealPosition: "right", // left right or center positions
						meanRevealPositionDistance: "0", // Tweak the position of the menu
						meanRevealColour: "", // override CSS colours for the reveal background
						meanScreenWidth: "480", // set the screen width you want meanmenu to kick in at
						meanNavPush: "", // set a height here in px, em or % if you want to budge your layout now the navigation is missing.
						meanShowChildren: true, // true to show children in the menu, false to hide them
						meanExpandableChildren: true, // true to allow expand/collapse children
						meanExpand: "<span class='expand fa fa-chevron-down zen-icon-chevron-down zen-icon'></span>", // single character you want to represent the expand for ULs
						meanContract: "<span class='expand fa fa-chevron-down zen-icon-chevron-down zen-icon'></span>", // single character you want to represent the contract for ULs
						meanRemoveAttrs: false, // true to remove classes and IDs, false to keep them
						onePage: false, // set to true for one page sites
						meanDisplay: "block", // override display method for table cell based layouts e.g. table-cell
						removeElements: "" // set to hide page elements
				};
				options = $.extend(defaults, options);

				// get browser width
				var currentWidth = window.innerWidth || document.documentElement.clientWidth;

				return this.each(function () {
						var meanMenu = options.meanMenuTarget;
						var meanContainer = options.meanMenuContainer;
						var meanMenuClose = options.meanMenuClose;
						var meanMenuCloseSize = options.meanMenuCloseSize;
						var meanMenuOpen = options.meanMenuOpen;
						var meanRevealPosition = options.meanRevealPosition;
						var meanRevealPositionDistance = options.meanRevealPositionDistance;
						var meanRevealColour = options.meanRevealColour;
						var meanScreenWidth = options.meanScreenWidth;
						var meanNavPush = options.meanNavPush;
						var meanRevealClass = ".meanmenu-reveal";
						var meanShowChildren = options.meanShowChildren;
						var meanExpandableChildren = options.meanExpandableChildren;
						var meanExpand = options.meanExpand;
						var meanContract = options.meanContract;
						var meanRemoveAttrs = options.meanRemoveAttrs;
						var onePage = options.onePage;
						var meanDisplay = options.meanDisplay;
						var removeElements = options.removeElements;

						//detect known mobile/tablet usage
						var isMobile = false;
						if ( (navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)) || (navigator.userAgent.match(/iPad/i)) || (navigator.userAgent.match(/Android/i)) || (navigator.userAgent.match(/Blackberry/i)) || (navigator.userAgent.match(/Windows Phone/i)) ) {
								isMobile = true;
						}

						if ( (navigator.userAgent.match(/MSIE 8/i)) || (navigator.userAgent.match(/MSIE 7/i)) ) {
							// add scrollbar for IE7 & 8 to stop breaking resize function on small content sites
								jQuery('html').css("overflow-y" , "scroll");
						}

						var meanRevealPos = "";
						var meanCentered = function() {
							if (meanRevealPosition === "center") {
								var newWidth = window.innerWidth || document.documentElement.clientWidth;
								var meanCenter = ( (newWidth/2)-22 )+"px";
								meanRevealPos = "left:" + meanCenter + ";right:auto;";

								if (!isMobile) {
									jQuery('.meanmenu-reveal').css("left",meanCenter);
								} else {
									jQuery('.meanmenu-reveal').animate({
											left: meanCenter
									});
								}
							}
						};

						var menuOn = false;
						var meanMenuExist = false;


						if (meanRevealPosition === "right") {
								meanRevealPos = "right:" + meanRevealPositionDistance + ";left:auto;";
						}
						if (meanRevealPosition === "left") {
								meanRevealPos = "left:" + meanRevealPositionDistance + ";right:auto;";
						}
						// run center function
						meanCentered();

						// set all styles for mean-reveal
						var $navreveal = "";

						var meanInner = function() {
								// get last class name
								if (jQuery($navreveal).is(".meanmenu-reveal.meanclose")) {
										$navreveal.html(meanMenuClose);
										$('.mean-menu .offcanvas-heading,.off-canvas-body').slideDown();
								} else {
										$navreveal.html(meanMenuOpen);
										$('.mean-menu .offcanvas-heading,.off-canvas-body').slideUp();
								}
						};

						// re-instate original nav (and call this on window.width functions)
						var meanOriginal = function() {
							jQuery('.mean-bar,.mean-push').remove();
							jQuery(meanContainer).removeClass("mean-container");
							jQuery(meanMenu).css('display', meanDisplay);
							menuOn = false;
							meanMenuExist = false;
							jQuery(removeElements).removeClass('mean-remove');
						};

						// navigation reveal
						var showMeanMenu = function() {
								var meanStyles = "background:"+meanRevealColour+";color:"+meanRevealColour+";"+meanRevealPos;
								if (currentWidth <= meanScreenWidth) {
								jQuery(removeElements).addClass('mean-remove');
									meanMenuExist = true;
									// add class to body so we don't need to worry about media queries here, all CSS is wrapped in '.mean-container'
									jQuery(meanContainer).addClass("mean-container");
									jQuery('.mean-container').prepend('<div class="mean-bar"><a href="#nav" class="meanmenu-reveal" style="'+meanStyles+'">Show Navigation</a><nav class="mean-nav"></nav></div>');

									//push meanMenu navigation into .mean-nav
									var meanMenuContents = jQuery(meanMenu).html();
									jQuery('.mean-nav').html(meanMenuContents);
									
								

									// remove all classes from EVERYTHING inside meanmenu nav
									if(meanRemoveAttrs) {
										jQuery('nav.mean-nav ul, nav.mean-nav ul *').each(function() {
											// First check if this has mean-remove class
											if (jQuery(this).is('.mean-remove')) {
												jQuery(this).attr('class', 'mean-remove');
											} else {
												jQuery(this).removeAttr("class");
											}
											jQuery(this).removeAttr("id");
										});
										
										$('html').toggleClass('mean-menu-open');
									}

									// push in a holder div (this can be used if removal of nav is causing layout issues)
									jQuery(meanMenu).before('<div class="mean-push" />');
									jQuery('.mean-push').css("margin-top",meanNavPush);

									// hide current navigation and reveal mean nav link
									jQuery(meanMenu).hide();
									jQuery(".meanmenu-reveal").show();

									// turn 'X' on or off
									jQuery(meanRevealClass).html(meanMenuOpen);
									$navreveal = jQuery(meanRevealClass);

									//hide mean-nav ul
									jQuery('.mean-nav ul').hide();

									// hide sub nav
									if(meanShowChildren) {
											// allow expandable sub nav(s)
											if(meanExpandableChildren){
												
												$('.mean-nav li.parent > a,.mean-nav li.parent > .zen-menu-heading').append('<span class="expand fa fa-chevron-right zen-icon-chevron-right zen-icon"></span>')
												
												jQuery('.mean-nav .expand').on("click",function(e){
													e.preventDefault();
												});
												
												jQuery('.mean-nav li.parent > a,.mean-nav li.parent > .zen-menu-heading').on("click",function(e){
														
														if (jQuery(this).hasClass("mean-clicked")) {
																jQuery(this).next('ul').slideUp(300, function(){});
																$(this).find('.expand').attr('class','').addClass('expand fa fa-chevron-right zen-icon-chevron-right zen-icon');
																
														} else {
																jQuery(this).next('ul').slideDown(300, function(){});
																$(this).find('.expand').attr('class','').addClass('expand fa fa-chevron-down zen-icon-chevron-down zen-icon');
																																e.preventDefault();
														}
														
														jQuery(this).toggleClass("mean-clicked");
												});
												
											} else {
													jQuery('.mean-nav ul ul').show();
											}
									} else {
											jQuery('.mean-nav ul ul').hide();
									}

									// add last class to tidy up borders
									jQuery('.mean-nav ul li').last().addClass('mean-last');
									$navreveal.removeClass("meanclose");
									jQuery($navreveal).click(function(e){
										
										var offcanvas_content = '.off-canvas-inner';
										
										
										// Set html class
										$('html').toggleClass('mean-menu-open');
										
										// If the offcanvas panel exists
										if($(offcanvas_content).length > 0) {
											
											// If it hasnt already been added
											if(!$('.mean-bar .off-canvas-body').length > 0) {
												var content = $(offcanvas_content).html();
												$('.mean-bar').append(content);
											}
										}	
										
										e.preventDefault();
								if( menuOn === false ) {
												$navreveal.css("text-align", "center");
												$navreveal.css("text-indent", "0");
												$navreveal.css("font-size", meanMenuCloseSize);
												jQuery('.mean-nav ul:first').slideDown();
												menuOn = true;
										} else {
											jQuery('.mean-nav ul:first').slideUp();
											menuOn = false;
										}
											$navreveal.toggleClass("meanclose");
											meanInner();
											jQuery(removeElements).addClass('mean-remove');
									});

									// for one page websites, reset all variables...
									if ( onePage ) {
										jQuery('.mean-nav ul > li > a:first-child').on( "click" , function () {
											jQuery('.mean-nav ul:first').slideUp();
											menuOn = false;
											jQuery($navreveal).toggleClass("meanclose").html(meanMenuOpen);
										});
									}
							} else {
								meanOriginal();
							}
						};

						if (!isMobile) {
								// reset menu on resize above meanScreenWidth
								jQuery(window).resize(function () {
										currentWidth = window.innerWidth || document.documentElement.clientWidth;
										if (currentWidth > meanScreenWidth) {
												meanOriginal();
										} else {
											meanOriginal();
										}
										if (currentWidth <= meanScreenWidth) {
												showMeanMenu();
												meanCentered();
										} else {
											meanOriginal();
										}
								});
						}

					jQuery(window).resize(function () {
								// get browser width
								currentWidth = window.innerWidth || document.documentElement.clientWidth;

								
								
								if (!isMobile) {
									// ReSet html class on resize
									$('html').removeClass('mean-menu-open');
									
									meanOriginal();
									if (currentWidth <= meanScreenWidth) {
												showMeanMenu();
												meanCentered();
										}
								} else {
										meanCentered();
										if (currentWidth <= meanScreenWidth) {
												if (meanMenuExist === false) {
														showMeanMenu();
												}
										} else {
												meanOriginal();
										}
								}
						});

					// run main menuMenu function on load
					showMeanMenu();
				});
		};
})(jQuery);

/*! ReSmenu v0.1.1 by Alessandro Benoit */
(function ($, window, i) {

    'use strict';

    $.fn.ReSmenu = function (options) {

        // Settings
        var s = $.extend({
            menuClass: 'responsive_menu', // Responsive menu class
            selectId: 'resmenu',
            textBefore: false, // Text to add before the mobile menu
            selectOption: false, // First select option
            activeClass: 'active', // Active menu li class
            maxWidth: 480 // Size to which the menu is responsive
        }, options);

        // Convert the menu to select
        function build_menu(element, select, add) {

            add = add || '';

            $(element).children('li').each(function () {

                var url = $(this).children('a').attr('href');
                
                // Remove captions
                var html = $(this).children('a').clone()    //clone the element
                        .children() //select all the children
                        .remove()   //remove all the children
                        .end()  //again go back to selected element
                        .text();    //get the text of element;
                	
                	html += $(this).children('span').clone()    //clone the element
                	        .children() //select all the children
                	        .remove()   //remove all the children
                	        .end()  //again go back to selected element
                	        .text();    //get the text of element;
                // Remove Caption from output
               // $(this).find('.zen-menu-caption').empty();
				
                if (url === undefined || url === false || url === '#' || url.length === 0) {
                   url = '';
                }

                $('<option/>', {
                    value: url,
                    html: add + html,
                   disabled: (!url) ? true : false,
                    selected: ($(this).hasClass(s.activeClass) && !s.selectOption) ? true : false
                }).appendTo(select);

                // Submenu
                if ($(this).children('ul').length > 0) {
                    build_menu($(this).children('ul'), select, add + "- ");
                }

            });

        }

        // Build the responsive menu container and fill it with build_menu()
        function create_responsive_menus(element, i) {

            var responsive_menu = $('<div/>', {
                class: s.menuClass
            }).appendTo($(element).parent()),
                select = $('<select/>', {
                    id: s.selectId + i
                }).appendTo(responsive_menu);

            // Bind change to select
            $(select).bind('change', function () {
                if ($(this).val().length > 0) {
                    window.location.href = $(this).val();
                }
            });

            // Label
            if (s.textBefore) {
                $('<label/>', {
                    html: s.textBefore,
                    for: s.selectId + i
                }).prependTo(responsive_menu);
            }

            // First option
            if (s.selectOption) {
                $('<option/>', {
                    text: s.selectOption,
                    value: ''
                }).appendTo(select);
            }

            // Build select the menu
            build_menu($(element), select);

            return responsive_menu;

        }

        // Let's do it
        this.each(function () {

            var element = $(this),
                responsive_menu;

            i += 1;

            // The responsive menu is built if the page size is or goes under maxWidth
            function handle_menu() {

                if ($(window).width() > parseInt(s.maxWidth, 10)) {

                    $(element).show();
 
					// Need to hide the #menu ul ul after the 1.4+ refactor of zgf menu
					$('#menu ul ul').hide();
                    
                    if (responsive_menu) {
                        $(responsive_menu).hide();
                    }

                } else {

                    $(element).hide();

                    if (responsive_menu) {
                        $(responsive_menu).show();
                    } else {
                        responsive_menu = create_responsive_menus(element, i);
                    }

                }

            }

            // At first
            handle_menu();

            // Then at the resizing of the page
            $(window).resize(function () {
                handle_menu();
            });

        });

    };
})(jQuery, this, 0);
/* Modernizr 2.8.3 (Custom Build) | MIT & BSD
 * Build: http://modernizr.com/download/#-touch-cssclasses-teststyles-prefixes-load
 */
;window.Modernizr=function(a,b,c){function w(a){j.cssText=a}function x(a,b){return w(m.join(a+";")+(b||""))}function y(a,b){return typeof a===b}function z(a,b){return!!~(""+a).indexOf(b)}function A(a,b,d){for(var e in a){var f=b[a[e]];if(f!==c)return d===!1?a[e]:y(f,"function")?f.bind(d||b):f}return!1}var d="2.8.3",e={},f=!0,g=b.documentElement,h="modernizr",i=b.createElement(h),j=i.style,k,l={}.toString,m=" -webkit- -moz- -o- -ms- ".split(" "),n={},o={},p={},q=[],r=q.slice,s,t=function(a,c,d,e){var f,i,j,k,l=b.createElement("div"),m=b.body,n=m||b.createElement("body");if(parseInt(d,10))while(d--)j=b.createElement("div"),j.id=e?e[d]:h+(d+1),l.appendChild(j);return f=["&#173;",'<style id="s',h,'">',a,"</style>"].join(""),l.id=h,(m?l:n).innerHTML+=f,n.appendChild(l),m||(n.style.background="",n.style.overflow="hidden",k=g.style.overflow,g.style.overflow="hidden",g.appendChild(n)),i=c(l,a),m?l.parentNode.removeChild(l):(n.parentNode.removeChild(n),g.style.overflow=k),!!i},u={}.hasOwnProperty,v;!y(u,"undefined")&&!y(u.call,"undefined")?v=function(a,b){return u.call(a,b)}:v=function(a,b){return b in a&&y(a.constructor.prototype[b],"undefined")},Function.prototype.bind||(Function.prototype.bind=function(b){var c=this;if(typeof c!="function")throw new TypeError;var d=r.call(arguments,1),e=function(){if(this instanceof e){var a=function(){};a.prototype=c.prototype;var f=new a,g=c.apply(f,d.concat(r.call(arguments)));return Object(g)===g?g:f}return c.apply(b,d.concat(r.call(arguments)))};return e}),n.touch=function(){var c;return"ontouchstart"in a||a.DocumentTouch&&b instanceof DocumentTouch?c=!0:t(["@media (",m.join("touch-enabled),("),h,")","{#modernizr{top:9px;position:absolute}}"].join(""),function(a){c=a.offsetTop===9}),c};for(var B in n)v(n,B)&&(s=B.toLowerCase(),e[s]=n[B](),q.push((e[s]?"":"no-")+s));return e.addTest=function(a,b){if(typeof a=="object")for(var d in a)v(a,d)&&e.addTest(d,a[d]);else{a=a.toLowerCase();if(e[a]!==c)return e;b=typeof b=="function"?b():b,typeof f!="undefined"&&f&&(g.className+=" "+(b?"":"no-")+a),e[a]=b}return e},w(""),i=k=null,e._version=d,e._prefixes=m,e.testStyles=t,g.className=g.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(f?" js "+q.join(" "):""),e}(this,this.document),function(a,b,c){function d(a){return"[object Function]"==o.call(a)}function e(a){return"string"==typeof a}function f(){}function g(a){return!a||"loaded"==a||"complete"==a||"uninitialized"==a}function h(){var a=p.shift();q=1,a?a.t?m(function(){("c"==a.t?B.injectCss:B.injectJs)(a.s,0,a.a,a.x,a.e,1)},0):(a(),h()):q=0}function i(a,c,d,e,f,i,j){function k(b){if(!o&&g(l.readyState)&&(u.r=o=1,!q&&h(),l.onload=l.onreadystatechange=null,b)){"img"!=a&&m(function(){t.removeChild(l)},50);for(var d in y[c])y[c].hasOwnProperty(d)&&y[c][d].onload()}}var j=j||B.errorTimeout,l=b.createElement(a),o=0,r=0,u={t:d,s:c,e:f,a:i,x:j};1===y[c]&&(r=1,y[c]=[]),"object"==a?l.data=c:(l.src=c,l.type=a),l.width=l.height="0",l.onerror=l.onload=l.onreadystatechange=function(){k.call(this,r)},p.splice(e,0,u),"img"!=a&&(r||2===y[c]?(t.insertBefore(l,s?null:n),m(k,j)):y[c].push(l))}function j(a,b,c,d,f){return q=0,b=b||"j",e(a)?i("c"==b?v:u,a,b,this.i++,c,d,f):(p.splice(this.i++,0,a),1==p.length&&h()),this}function k(){var a=B;return a.loader={load:j,i:0},a}var l=b.documentElement,m=a.setTimeout,n=b.getElementsByTagName("script")[0],o={}.toString,p=[],q=0,r="MozAppearance"in l.style,s=r&&!!b.createRange().compareNode,t=s?l:n.parentNode,l=a.opera&&"[object Opera]"==o.call(a.opera),l=!!b.attachEvent&&!l,u=r?"object":l?"script":"img",v=l?"script":u,w=Array.isArray||function(a){return"[object Array]"==o.call(a)},x=[],y={},z={timeout:function(a,b){return b.length&&(a.timeout=b[0]),a}},A,B;B=function(a){function b(a){var a=a.split("!"),b=x.length,c=a.pop(),d=a.length,c={url:c,origUrl:c,prefixes:a},e,f,g;for(f=0;f<d;f++)g=a[f].split("="),(e=z[g.shift()])&&(c=e(c,g));for(f=0;f<b;f++)c=x[f](c);return c}function g(a,e,f,g,h){var i=b(a),j=i.autoCallback;i.url.split(".").pop().split("?").shift(),i.bypass||(e&&(e=d(e)?e:e[a]||e[g]||e[a.split("/").pop().split("?")[0]]),i.instead?i.instead(a,e,f,g,h):(y[i.url]?i.noexec=!0:y[i.url]=1,f.load(i.url,i.forceCSS||!i.forceJS&&"css"==i.url.split(".").pop().split("?").shift()?"c":c,i.noexec,i.attrs,i.timeout),(d(e)||d(j))&&f.load(function(){k(),e&&e(i.origUrl,h,g),j&&j(i.origUrl,h,g),y[i.url]=2})))}function h(a,b){function c(a,c){if(a){if(e(a))c||(j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}),g(a,j,b,0,h);else if(Object(a)===a)for(n in m=function(){var b=0,c;for(c in a)a.hasOwnProperty(c)&&b++;return b}(),a)a.hasOwnProperty(n)&&(!c&&!--m&&(d(j)?j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}:j[n]=function(a){return function(){var b=[].slice.call(arguments);a&&a.apply(this,b),l()}}(k[n])),g(a[n],j,b,n,h))}else!c&&l()}var h=!!a.test,i=a.load||a.both,j=a.callback||f,k=j,l=a.complete||f,m,n;c(h?a.yep:a.nope,!!i),i&&c(i)}var i,j,l=this.yepnope.loader;if(e(a))g(a,0,l,0);else if(w(a))for(i=0;i<a.length;i++)j=a[i],e(j)?g(j,0,l,0):w(j)?B(j):Object(j)===j&&h(j,l);else Object(a)===a&&h(a,l)},B.addPrefix=function(a,b){z[a]=b},B.addFilter=function(a){x.push(a)},B.errorTimeout=1e4,null==b.readyState&&b.addEventListener&&(b.readyState="loading",b.addEventListener("DOMContentLoaded",A=function(){b.removeEventListener("DOMContentLoaded",A,0),b.readyState="complete"},0)),a.yepnope=k(),a.yepnope.executeStack=h,a.yepnope.injectJs=function(a,c,d,e,i,j){var k=b.createElement("script"),l,o,e=e||B.errorTimeout;k.src=a;for(o in d)k.setAttribute(o,d[o]);c=j?h:c||f,k.onreadystatechange=k.onload=function(){!l&&g(k.readyState)&&(l=1,c(),k.onload=k.onreadystatechange=null)},m(function(){l||(l=1,c(1))},e),i?k.onload():n.parentNode.insertBefore(k,n)},a.yepnope.injectCss=function(a,c,d,e,g,i){var e=b.createElement("link"),j,c=i?h:c||f;e.href=a,e.rel="stylesheet",e.type="text/css";for(j in d)e.setAttribute(j,d[j]);g||(n.parentNode.insertBefore(e,n),m(c,0))}}(this,document),Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))};
// -----------------------------------
// Slidebars
// Version 0.10.2
// http://plugins.adchsm.me/slidebars/
//
// Written by Adam Smith
// http://www.adchsm.me/
//
// Released under MIT License
// http://plugins.adchsm.me/slidebars/license.txt
//
// ---------------------
// Index of Slidebars.js
//
// 001 - Default Settings
// 002 - Feature Detection
// 003 - User Agents
// 004 - Setup
// 005 - Animation
// 006 - Operations
// 007 - API
// 008 - User Input

;(function($) {

	$.slidebars = function(options) {

		// ----------------------
		// 001 - Default Settings

		var settings = $.extend({
			siteClose: true, // true or false - Enable closing of Slidebars by clicking on #sb-site.
			scrollLock: false, // true or false - Prevent scrolling of site when a Slidebar is open.
			disableOver: false, // integer or false - Hide Slidebars over a specific width.
			hideControlClasses: false // true or false - Hide controls at same width as disableOver.
		}, options);

		// -----------------------
		// 002 - Feature Detection

		var test = document.createElement('div').style, // Create element to test on.
		supportTransition = false, // Variable for testing transitions.
		supportTransform = false; // variable for testing transforms.

		// Test for CSS Transitions
		if (test.MozTransition === '' || test.WebkitTransition === '' || test.OTransition === '' || test.transition === '') supportTransition = true;

		// Test for CSS Transforms
		if (test.MozTransform === '' || test.WebkitTransform === '' || test.OTransform === '' || test.transform === '') supportTransform = true;

		// -----------------
		// 003 - User Agents

		var ua = navigator.userAgent, // Get user agent string.
		android = false, // Variable for storing android version.
		iOS = false; // Variable for storing iOS version.
		
		if (/Android/.test(ua)) { // Detect Android in user agent string.
			android = ua.substr(ua.indexOf('Android')+8, 3); // Set version of Android.
		} else if (/(iPhone|iPod|iPad)/.test(ua)) { // Detect iOS in user agent string.
			iOS = ua.substr(ua.indexOf('OS ')+3, 3).replace('_', '.'); // Set version of iOS.
		}
		
		if (android && android < 3 || iOS && iOS < 5) $('html').addClass('sb-static'); // Add helper class for older versions of Android & iOS.

		// -----------
		// 004 - Setup

		// Site container
		var $site = $('#zen-wrap, .sb-site-container'); // Cache the selector.

		// Left Slidebar	
		if ($('.off-canvas-left').length) { // Check if the left Slidebar exists.
			var $left = $('.off-canvas-left'), // Cache the selector.
			leftActive = false; // Used to check whether the left Slidebar is open or closed.
		}

		// Right Slidebar
		if ($('.off-canvas-right').length) { // Check if the right Slidebar exists.
			var $right = $('.off-canvas-right'), // Cache the selector.
			rightActive = false; // Used to check whether the right Slidebar is open or closed.
		}
				
		var init = false, // Initialisation variable.
		windowWidth = $(window).width(), // Get width of window.
		$controls = $('.sb-toggle-left, .sb-toggle-right, .sb-open-left, .sb-open-right, .sb-close'), // Cache the control classes.
		$slide = $('.sb-slide'); // Cache users elements to animate.
		
		// Initailise Slidebars
		function initialise() {
			if (!settings.disableOver || (typeof settings.disableOver === 'number' && settings.disableOver >= windowWidth)) { // False or larger than window size. 
				init = true; // true enabled Slidebars to open.
				$('html').addClass('sb-init'); // Add helper class.
				if (settings.hideControlClasses) $controls.removeClass('sb-hide'); // Remove class just incase Slidebars was originally disabled.
				css('0'); // Set required inline styles.
			} else if (typeof settings.disableOver === 'number' && settings.disableOver < windowWidth) { // Less than window size.
				init = false; // false stop Slidebars from opening.
				$('html').removeClass('sb-init'); // Remove helper class.
				if (settings.hideControlClasses) $controls.addClass('sb-hide'); // Hide controls
				$site.css('minHeight', ''); // Remove minimum height.
				if (leftActive || rightActive) close(); // Close Slidebars if open.
			}
		}
		initialise();
		
		$('a, span, h3').click(function() {
			css('400');
		});
		
		$('#onepage a,#off-canvas-menu a').not('#off-canvas-menu li.parent a').click(function() {
			close();
		});
				

		
		// Inline CSS
		function css(delay) {
			// Set minimum height.
			$site.css('minHeight', '0'); // Reset minimum height.
			
			
			// Set a slight delay when triggering function by tabs etc
			setTimeout(
				function() {
					$site.css('minHeight', ($('html').height() - 10) + 'px');
				}, 
			delay);
			
			
			// Custom Slidebar widths.
			if ($left && $left.hasClass('sb-width-custom')) $left.css('width', $left.attr('data-sb-width')); // Set user custom width.
			if ($right && $right.hasClass('sb-width-custom')) $right.css('width', $right.attr('data-sb-width')); // Set user custom width.
			
			// Set off-canvas margins for Slidebars with push and overlay animations.
			if ($left && ($left.hasClass('sb-style-push') || $left.hasClass('sb-style-overlay'))) $left.css('marginLeft', '-' + $left.css('width'));
			if ($right && ($right.hasClass('sb-style-push') || $right.hasClass('sb-style-overlay'))) $right.css('marginRight', '-' + $right.css('width'));
			
			// Site scroll locking.
			if (settings.scrollLock) $('html').addClass('sb-scroll-lock');
		}
		
		// Resize Functions
		$(window).resize(function() {
			var resizedWindowWidth = $(window).width(); // Get resized window width.
			if (windowWidth !== resizedWindowWidth) { // Slidebars is running and window was actually resized.
				windowWidth = resizedWindowWidth; // Set the new window width.
				initialise(); // Call initalise to see if Slidebars should still be running.
				if (leftActive) open('left'); // If left Slidebar is open, calling open will ensure it is the correct size.
				if (rightActive) open('right'); // If right Slidebar is open, calling open will ensure it is the correct size.
			}
			
			// Adds to comepnsate for other equal heights scripts
			setTimeout(function() {
				initialise(); 
			}, 1000)
		});
		// I may include a height check along side a width check here in future.

		// ---------------
		// 005 - Animation

		var animation; // Animation type.

		// Set animation type.
		if (supportTransition && supportTransform) { // Browser supports css transitions and transforms.
			animation = 'translate'; // Translate for browsers that support it.
			if (android && android < 4.4) animation = 'side'; // Android supports both, but can't translate any fixed positions, so use left instead.
		} else {
			animation = 'jQuery'; // Browsers that don't support css transitions and transitions.
		}

		// Animate mixin.
		function animate(object, amount, side) {
			// Choose selectors depending on animation style.
			var selector;
			
			if (object.hasClass('sb-style-push')) {
				selector = $site.add(object).add($slide); // Push - Animate site, Slidebar and user elements.
			} else if (object.hasClass('sb-style-overlay')) {
				selector = object; // Overlay - Animate Slidebar only.
			} else {
				selector = $site.add($slide); // Reveal - Animate site and user elements.
			}
			
			// Apply animation
			if (animation === 'translate') {
				selector.css('transform', 'translate(' + amount + ')'); // Apply the animation.

			} else if (animation === 'side') {		
				if (amount[0] === '-') amount = amount.substr(1); // Remove the '-' from the passed amount for side animations.
				if (amount !== '0px') selector.css(side, '0px'); // Add a 0 value so css transition works.
				setTimeout(function() { // Set a timeout to allow the 0 value to be applied above.
					selector.css(side, amount); // Apply the animation.
				}, 1);

			} else if (animation === 'jQuery') {
				if (amount[0] === '-') amount = amount.substr(1); // Remove the '-' from the passed amount for jQuery animations.
				var properties = {};
				properties[side] = amount;
				selector.stop().animate(properties, 400); // Stop any current jQuery animation before starting another.
			}
			
			// If closed, remove the inline styling on completion of the animation.
			setTimeout(function() {
				if (amount === '0px') {
					selector.removeAttr('style');
					css('0');
				}
			}, 400);
		}

		// ----------------
		// 006 - Operations

		// Open a Slidebar
		function open(side) {
			// Check to see if opposite Slidebar is open.
			if (side === 'left' && $left && rightActive || side === 'right' && $right && leftActive) { // It's open, close it, then continue.
				close();
				setTimeout(proceed, 400);
			} else { // Its not open, continue.
				proceed();
				// Need to check it's not hidden as sometimes mean menu closes it.
				$('.off-canvas-body').show();
			}

			// Open
			function proceed() {
				if (init && side === 'left' && $left) { // Slidebars is initiated, left is in use and called to open.
					$('html').addClass('sb-active sb-active-left'); // Add active classes.
					$left.addClass('sb-active');
					animate($left, $left.css('width'), 'left'); // Animation
					setTimeout(function() { leftActive = true; }, 400); // Set active variables.
				} else if (init && side === 'right' && $right) { // Slidebars is initiated, right is in use and called to open.
					$('html').addClass('sb-active sb-active-right'); // Add active classes.
					$right.addClass('sb-active');
					animate($right, '-' + $right.css('width'), 'right'); // Animation
					setTimeout(function() { rightActive = true; }, 400); // Set active variables.
				}
			}
		}
			
		// Close either Slidebar
		function close(link) {
			if (leftActive || rightActive) { // If a Slidebar is open.
				if (leftActive) {
					animate($left, '0px', 'left'); // Animation
					leftActive = false;
				}
				if (rightActive) {
					animate($right, '0px', 'right'); // Animation
					rightActive = false;
				}
			
				setTimeout(function() { // Wait for closing animation to finish.
					$('html').removeClass('sb-active sb-active-left sb-active-right'); // Remove active classes.
					if ($left) $left.removeClass('sb-active');
					if ($right) $right.removeClass('sb-active');
					if (typeof link !== 'undefined') window.location = link; // If a link has been passed to the function, go to it.
				}, 400);
			}
		}
		
		// Toggle either Slidebar
		function toggle(side) {
			if (side === 'left' && $left) { // If left Slidebar is called and in use.
				if (!leftActive) {
					open('left'); // Slidebar is closed, open it.
				} else {
					close(); // Slidebar is open, close it.
				}
			}
			if (side === 'right' && $right) { // If right Slidebar is called and in use.
				if (!rightActive) {
					open('right'); // Slidebar is closed, open it.
				} else {
					close(); // Slidebar is open, close it.
				}
			}
		}

		// ---------
		// 007 - API
		
		this.slidebars = {
			open: open, // Maps user variable name to the open method.
			close: close, // Maps user variable name to the close method.
			toggle: toggle, // Maps user variable name to the toggle method.
			init: function() { // Returns true or false whether Slidebars are running or not.
				return init; // Returns true or false whether Slidebars are running.
			},
			active: function(side) { // Returns true or false whether Slidebar is open or closed.
				if (side === 'left' && $left) return leftActive;
				if (side === 'right' && $right) return rightActive;
			},
			destroy: function(side) { // Removes the Slidebar from the DOM.
				if (side === 'left' && $left) {
					if (leftActive) close(); // Close if its open.
					setTimeout(function() {
						$left.remove(); // Remove it.
						$left = false; // Set variable to false so it cannot be opened again.
					}, 400);
				}
				if (side === 'right' && $right) {
					if (rightActive) close(); // Close if its open.
					setTimeout(function() {
						$right.remove(); // Remove it.
						$right = false; // Set variable to false so it cannot be opened again.
					}, 400);
				}
			}
		};

		// ----------------
		// 008 - User Input
		
		function eventHandler(event, selector) {
			event.stopPropagation(); // Stop event bubbling.
			event.preventDefault(); // Prevent default behaviour.
			if (event.type === 'touchend') selector.off('click'); // If event type was touch, turn off clicks to prevent phantom clicks.
		}
		
		// Toggle left Slidebar
		$('.sb-toggle-left').on('touchend click', function(event) {
			eventHandler(event, $(this)); // Handle the event.
			toggle('left'); // Toggle the left Slidbar.
		});
		
		// Toggle right Slidebar
		$('.sb-toggle-right').on('touchend click', function(event) {
			eventHandler(event, $(this)); // Handle the event.
			toggle('right'); // Toggle the right Slidbar.
		});
		
		// Open left Slidebar
		$('.sb-open-left').on('touchend click', function(event) {
			eventHandler(event, $(this)); // Handle the event.
			open('left'); // Open the left Slidebar.
		});
		
		// Open right Slidebar
		$('.sb-open-right').on('touchend click', function(event) {
			eventHandler(event, $(this)); // Handle the event.
			open('right'); // Open the right Slidebar.
		});
		
		// Close Slidebar
		$('.sb-close').on('touchend click', function(event) {
			if ( $(this).is('a') || $(this).children().is('a') ) { // Is a link or contains a link.
				if ( event.type === 'click' ) { // Make sure the user wanted to follow the link.
					event.preventDefault(); // Stop default behaviour.
					var href = ( $(this).is('a') ? $(this).attr('href') : $(this).find('a').attr('href') ); // Get the href.
					close( href ); // Close Slidebar and pass link.
				}
			} else { // Just a normal control class.
				eventHandler(event, $(this)); // Handle the event.
				close(); // Close Slidebar.
			}
		});
		
		// Close Slidebar via site
		$site.on('touchend click', function(event) {
			if (settings.siteClose && (leftActive || rightActive)) { // If settings permit closing by site and left or right Slidebar is open.
				eventHandler(event, $(this)); // Handle the event.
				close(); // Close it.
			}
		});
		
	}; // End Slidebars function.

}) (jQuery);
jQuery(document).ready(function($) {
	
	
	// Wordpress fucntion to add framework classes for dropdown
	
	$('.menu-item-has-children').addClass('deeper parent');
	
	// Dropdown Menu
	$("#menu.zen-menu-fading ul li.parent").hover(function(){
		 $(this).children("ul").fadeIn("fast");
	},
	  	function(){
		     $(this).children("ul").fadeOut("fast");   
	});
	
	// Check if dropdown is offscreen
		// Check if dropdown is offscreen
	$(".zen-menu-horizontal li.parent").not('.justify').on('mouseenter mouseleave', function () {
		var item = $(this).index();
		$('.zen-menu-horizontal li').removeClass('zen-menu-offscreen');
	    
	    if(!$('html').hasClass('touch')) {
	   	 	$('body').offscreen_check(item);
	   	}
	});
	
	
	// Touch devices
	if (Modernizr.touch) {   
		jQuery('li.parent > a').click(function(e){
		
			//If a menu item is a parent and a link then prevent default if sub is hidden
			if (!jQuery(this).closest('li.parent').hasClass('open')){
				e.preventDefault();
				jQuery(this).closest('li.parent').addClass('open');
			}
		});
		
		jQuery('body').click(function(e){
			//If there is a click elsewhere then remove the open class from parents
			if ( !jQuery(e.target).is('li.parent > a') ) {
				jQuery('.zen-menu li.parent').removeClass('open');
			}
		});
	}
	
	

	// Append link to next prev / pagination if no link exists
	$('.pager li').each(function(index, value) {
		if($(this).find('a').length == 0) {
			var html = $(this).html();
			$(this).html('<a href="#" class="btn disabled">'+html+'</a>');
		}	
	});
	
	$(document).on('click','.pager a.disabled', function() {
		return false;
	});
	
	

	
});



(function ($) {
	
	$.fn.offscreen_check = function (item) {
		var item = item + 1;
		var elm = $('.zen-menu-horizontal li:nth-child(' + item + ') ul:first', this);
		var off = elm.offset();
		var l = off.left;
		var w = elm.width() + 50;
		var docH = $(window).height();
		var docW = $(window).width();
		var isEntirelyVisible = (l+ w <= docW);
			        
		if ( ! isEntirelyVisible ) {
		    $('.zen-menu-horizontal li:nth-child(' + item + ')').addClass('zen-menu-offscreen');
		} else {
		    $(this).parent().removeClass('zen-menu-offscreen');
		}
	};
	
	// Checks to see if menu is offscreen and attaches zen-menu-offscreen class
	$.fn.append_nav = function (collapse) {
		
		var offcanvastarget = '#off-canvas-menu';	
		var window_width = $(window).width();		
		
		if(window_width < collapse) {
			if(!$(offcanvastarget + ' ul').hasClass('simple-list')) {
				var nav = $('#menu ul').html();
				$(offcanvastarget + ' ul').append(nav).addClass('simple-list').parent().addClass('accordion');
			}
		}	
	};
})(jQuery);


jQuery(document).ready(function($) {
	 	
	 		 	 	
});
/*! WOW - v1.0.2 - 2014-10-28
* Copyright (c) 2014 Matthieu Aussaguel; Licensed MIT */(function(){var a,b,c,d,e,f=function(a,b){return function(){return a.apply(b,arguments)}},g=[].indexOf||function(a){for(var b=0,c=this.length;c>b;b++)if(b in this&&this[b]===a)return b;return-1};b=function(){function a(){}return a.prototype.extend=function(a,b){var c,d;for(c in b)d=b[c],null==a[c]&&(a[c]=d);return a},a.prototype.isMobile=function(a){return/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(a)},a.prototype.addEvent=function(a,b,c){return null!=a.addEventListener?a.addEventListener(b,c,!1):null!=a.attachEvent?a.attachEvent("on"+b,c):a[b]=c},a.prototype.removeEvent=function(a,b,c){return null!=a.removeEventListener?a.removeEventListener(b,c,!1):null!=a.detachEvent?a.detachEvent("on"+b,c):delete a[b]},a.prototype.innerHeight=function(){return"innerHeight"in window?window.innerHeight:document.documentElement.clientHeight},a}(),c=this.WeakMap||this.MozWeakMap||(c=function(){function a(){this.keys=[],this.values=[]}return a.prototype.get=function(a){var b,c,d,e,f;for(f=this.keys,b=d=0,e=f.length;e>d;b=++d)if(c=f[b],c===a)return this.values[b]},a.prototype.set=function(a,b){var c,d,e,f,g;for(g=this.keys,c=e=0,f=g.length;f>e;c=++e)if(d=g[c],d===a)return void(this.values[c]=b);return this.keys.push(a),this.values.push(b)},a}()),a=this.MutationObserver||this.WebkitMutationObserver||this.MozMutationObserver||(a=function(){function a(){"undefined"!=typeof console&&null!==console&&console.warn("MutationObserver is not supported by your browser."),"undefined"!=typeof console&&null!==console&&console.warn("WOW.js cannot detect dom mutations, please call .sync() after loading new content.")}return a.notSupported=!0,a.prototype.observe=function(){},a}()),d=this.getComputedStyle||function(a){return this.getPropertyValue=function(b){var c;return"float"===b&&(b="styleFloat"),e.test(b)&&b.replace(e,function(a,b){return b.toUpperCase()}),(null!=(c=a.currentStyle)?c[b]:void 0)||null},this},e=/(\-([a-z]){1})/g,this.WOW=function(){function e(a){null==a&&(a={}),this.scrollCallback=f(this.scrollCallback,this),this.scrollHandler=f(this.scrollHandler,this),this.start=f(this.start,this),this.scrolled=!0,this.config=this.util().extend(a,this.defaults),this.animationNameCache=new c}return e.prototype.defaults={boxClass:"zen-animate",animateClass:"animated",offset:0,mobile:!0,live:!0},e.prototype.init=function(){var a;return this.element=window.document.documentElement,"interactive"===(a=document.readyState)||"complete"===a?this.start():this.util().addEvent(document,"DOMContentLoaded",this.start),this.finished=[]},e.prototype.start=function(){var b,c,d,e;if(this.stopped=!1,this.boxes=function(){var a,c,d,e;for(d=this.element.querySelectorAll("."+this.config.boxClass),e=[],a=0,c=d.length;c>a;a++)b=d[a],e.push(b);return e}.call(this),this.all=function(){var a,c,d,e;for(d=this.boxes,e=[],a=0,c=d.length;c>a;a++)b=d[a],e.push(b);return e}.call(this),this.boxes.length)if(this.disabled())this.resetStyle();else for(e=this.boxes,c=0,d=e.length;d>c;c++)b=e[c],this.applyStyle(b,!0);return this.disabled()||(this.util().addEvent(window,"scroll",this.scrollHandler),this.util().addEvent(window,"resize",this.scrollHandler),this.interval=setInterval(this.scrollCallback,50)),this.config.live?new a(function(a){return function(b){var c,d,e,f,g;for(g=[],e=0,f=b.length;f>e;e++)d=b[e],g.push(function(){var a,b,e,f;for(e=d.addedNodes||[],f=[],a=0,b=e.length;b>a;a++)c=e[a],f.push(this.doSync(c));return f}.call(a));return g}}(this)).observe(document.body,{childList:!0,subtree:!0}):void 0},e.prototype.stop=function(){return this.stopped=!0,this.util().removeEvent(window,"scroll",this.scrollHandler),this.util().removeEvent(window,"resize",this.scrollHandler),null!=this.interval?clearInterval(this.interval):void 0},e.prototype.sync=function(){return a.notSupported?this.doSync(this.element):void 0},e.prototype.doSync=function(a){var b,c,d,e,f;if(null==a&&(a=this.element),1===a.nodeType){for(a=a.parentNode||a,e=a.querySelectorAll("."+this.config.boxClass),f=[],c=0,d=e.length;d>c;c++)b=e[c],g.call(this.all,b)<0?(this.boxes.push(b),this.all.push(b),this.stopped||this.disabled()?this.resetStyle():this.applyStyle(b,!0),f.push(this.scrolled=!0)):f.push(void 0);return f}},e.prototype.show=function(a){return this.applyStyle(a),a.className=""+a.className+" "+this.config.animateClass},e.prototype.applyStyle=function(a,b){var c,d,e;return d=a.getAttribute("data-wow-duration"),c=a.getAttribute("data-wow-delay"),e=a.getAttribute("data-wow-iteration"),this.animate(function(f){return function(){return f.customStyle(a,b,d,c,e)}}(this))},e.prototype.animate=function(){return"requestAnimationFrame"in window?function(a){return window.requestAnimationFrame(a)}:function(a){return a()}}(),e.prototype.resetStyle=function(){var a,b,c,d,e;for(d=this.boxes,e=[],b=0,c=d.length;c>b;b++)a=d[b],e.push(a.style.visibility="visible");return e},e.prototype.customStyle=function(a,b,c,d,e){return b&&this.cacheAnimationName(a),a.style.visibility=b?"hidden":"visible",c&&this.vendorSet(a.style,{animationDuration:c}),d&&this.vendorSet(a.style,{animationDelay:d}),e&&this.vendorSet(a.style,{animationIterationCount:e}),this.vendorSet(a.style,{animationName:b?"none":this.cachedAnimationName(a)}),a},e.prototype.vendors=["moz","webkit"],e.prototype.vendorSet=function(a,b){var c,d,e,f;f=[];for(c in b)d=b[c],a[""+c]=d,f.push(function(){var b,f,g,h;for(g=this.vendors,h=[],b=0,f=g.length;f>b;b++)e=g[b],h.push(a[""+e+c.charAt(0).toUpperCase()+c.substr(1)]=d);return h}.call(this));return f},e.prototype.vendorCSS=function(a,b){var c,e,f,g,h,i;for(e=d(a),c=e.getPropertyCSSValue(b),i=this.vendors,g=0,h=i.length;h>g;g++)f=i[g],c=c||e.getPropertyCSSValue("-"+f+"-"+b);return c},e.prototype.animationName=function(a){var b;try{b=this.vendorCSS(a,"animation-name").cssText}catch(c){b=d(a).getPropertyValue("animation-name")}return"none"===b?"":b},e.prototype.cacheAnimationName=function(a){return this.animationNameCache.set(a,this.animationName(a))},e.prototype.cachedAnimationName=function(a){return this.animationNameCache.get(a)},e.prototype.scrollHandler=function(){return this.scrolled=!0},e.prototype.scrollCallback=function(){var a;return!this.scrolled||(this.scrolled=!1,this.boxes=function(){var b,c,d,e;for(d=this.boxes,e=[],b=0,c=d.length;c>b;b++)a=d[b],a&&(this.isVisible(a)?this.show(a):e.push(a));return e}.call(this),this.boxes.length||this.config.live)?void 0:this.stop()},e.prototype.offsetTop=function(a){for(var b;void 0===a.offsetTop;)a=a.parentNode;for(b=a.offsetTop;a=a.offsetParent;)b+=a.offsetTop;return b},e.prototype.isVisible=function(a){var b,c,d,e,f;return c=a.getAttribute("data-wow-offset")||this.config.offset,f=window.pageYOffset,e=f+Math.min(this.element.clientHeight,this.util().innerHeight())-c,d=this.offsetTop(a),b=d+a.clientHeight,e>=d&&b>=f},e.prototype.util=function(){return null!=this._util?this._util:this._util=new b},e.prototype.disabled=function(){return!this.config.mobile&&this.util().isMobile(navigator.userAgent)},e}()}).call(this);
