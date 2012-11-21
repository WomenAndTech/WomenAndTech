// place any jQuery/helper plugins in here, instead of separate, slower script files.

/*!
* Bootstrap.js by @fat & @mdo
* Copyright 2012 Twitter, Inc.
* http://www.apache.org/licenses/LICENSE-2.0.txt
*/
!function(e){e(function(){"use strict";e.support.transition=function(){var e=function(){var e=document.createElement("bootstrap"),t={WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",OTransition:"oTransitionEnd otransitionend",transition:"transitionend"},n;for(n in t)if(e.style[n]!==undefined)return t[n]}();return e&&{end:e}}()})}(window.jQuery),!function(e){"use strict";var t='[data-dismiss="alert"]',n=function(n){e(n).on("click",t,this.close)};n.prototype.close=function(t){function s(){i.trigger("closed").remove()}var n=e(this),r=n.attr("data-target"),i;r||(r=n.attr("href"),r=r&&r.replace(/.*(?=#[^\s]*$)/,"")),i=e(r),t&&t.preventDefault(),i.length||(i=n.hasClass("alert")?n:n.parent()),i.trigger(t=e.Event("close"));if(t.isDefaultPrevented())return;i.removeClass("in"),e.support.transition&&i.hasClass("fade")?i.on(e.support.transition.end,s):s()},e.fn.alert=function(t){return this.each(function(){var r=e(this),i=r.data("alert");i||r.data("alert",i=new n(this)),typeof t=="string"&&i[t].call(r)})},e.fn.alert.Constructor=n,e(function(){e("body").on("click.alert.data-api",t,n.prototype.close)})}(window.jQuery),!function(e){"use strict";var t=function(t,n){this.$element=e(t),this.options=e.extend({},e.fn.button.defaults,n)};t.prototype.setState=function(e){var t="disabled",n=this.$element,r=n.data(),i=n.is("input")?"val":"html";e+="Text",r.resetText||n.data("resetText",n[i]()),n[i](r[e]||this.options[e]),setTimeout(function(){e=="loadingText"?n.addClass(t).attr(t,t):n.removeClass(t).removeAttr(t)},0)},t.prototype.toggle=function(){var e=this.$element.closest('[data-toggle="buttons-radio"]');e&&e.find(".active").removeClass("active"),this.$element.toggleClass("active")},e.fn.button=function(n){return this.each(function(){var r=e(this),i=r.data("button"),s=typeof n=="object"&&n;i||r.data("button",i=new t(this,s)),n=="toggle"?i.toggle():n&&i.setState(n)})},e.fn.button.defaults={loadingText:"loading..."},e.fn.button.Constructor=t,e(function(){e("body").on("click.button.data-api","[data-toggle^=button]",function(t){var n=e(t.target);n.hasClass("btn")||(n=n.closest(".btn")),n.button("toggle")})})}(window.jQuery),!function(e){"use strict";var t=function(t,n){this.$element=e(t),this.options=n,this.options.slide&&this.slide(this.options.slide),this.options.pause=="hover"&&this.$element.on("mouseenter",e.proxy(this.pause,this)).on("mouseleave",e.proxy(this.cycle,this))};t.prototype={cycle:function(t){return t||(this.paused=!1),this.options.interval&&!this.paused&&(this.interval=setInterval(e.proxy(this.next,this),this.options.interval)),this},to:function(t){var n=this.$element.find(".item.active"),r=n.parent().children(),i=r.index(n),s=this;if(t>r.length-1||t<0)return;return this.sliding?this.$element.one("slid",function(){s.to(t)}):i==t?this.pause().cycle():this.slide(t>i?"next":"prev",e(r[t]))},pause:function(t){return t||(this.paused=!0),this.$element.find(".next, .prev").length&&e.support.transition.end&&(this.$element.trigger(e.support.transition.end),this.cycle()),clearInterval(this.interval),this.interval=null,this},next:function(){if(this.sliding)return;return this.slide("next")},prev:function(){if(this.sliding)return;return this.slide("prev")},slide:function(t,n){var r=this.$element.find(".item.active"),i=n||r[t](),s=this.interval,o=t=="next"?"left":"right",u=t=="next"?"first":"last",a=this,f=e.Event("slide",{relatedTarget:i[0]});this.sliding=!0,s&&this.pause(),i=i.length?i:this.$element.find(".item")[u]();if(i.hasClass("active"))return;if(e.support.transition&&this.$element.hasClass("slide")){this.$element.trigger(f);if(f.isDefaultPrevented())return;i.addClass(t),i[0].offsetWidth,r.addClass(o),i.addClass(o),this.$element.one(e.support.transition.end,function(){i.removeClass([t,o].join(" ")).addClass("active"),r.removeClass(["active",o].join(" ")),a.sliding=!1,setTimeout(function(){a.$element.trigger("slid")},0)})}else{this.$element.trigger(f);if(f.isDefaultPrevented())return;r.removeClass("active"),i.addClass("active"),this.sliding=!1,this.$element.trigger("slid")}return s&&this.cycle(),this}},e.fn.carousel=function(n){return this.each(function(){var r=e(this),i=r.data("carousel"),s=e.extend({},e.fn.carousel.defaults,typeof n=="object"&&n),o=typeof n=="string"?n:s.slide;i||r.data("carousel",i=new t(this,s)),typeof n=="number"?i.to(n):o?i[o]():s.interval&&i.cycle()})},e.fn.carousel.defaults={interval:5e3,pause:"hover"},e.fn.carousel.Constructor=t,e(function(){e("body").on("click.carousel.data-api","[data-slide]",function(t){var n=e(this),r,i=e(n.attr("data-target")||(r=n.attr("href"))&&r.replace(/.*(?=#[^\s]+$)/,"")),s=!i.data("modal")&&e.extend({},i.data(),n.data());i.carousel(s),t.preventDefault()})})}(window.jQuery),!function(e){"use strict";var t=function(t,n){this.$element=e(t),this.options=e.extend({},e.fn.collapse.defaults,n),this.options.parent&&(this.$parent=e(this.options.parent)),this.options.toggle&&this.toggle()};t.prototype={constructor:t,dimension:function(){var e=this.$element.hasClass("width");return e?"width":"height"},show:function(){var t,n,r,i;if(this.transitioning)return;t=this.dimension(),n=e.camelCase(["scroll",t].join("-")),r=this.$parent&&this.$parent.find("> .accordion-group > .in");if(r&&r.length){i=r.data("collapse");if(i&&i.transitioning)return;r.collapse("hide"),i||r.data("collapse",null)}this.$element[t](0),this.transition("addClass",e.Event("show"),"shown"),e.support.transition&&this.$element[t](this.$element[0][n])},hide:function(){var t;if(this.transitioning)return;t=this.dimension(),this.reset(this.$element[t]()),this.transition("removeClass",e.Event("hide"),"hidden"),this.$element[t](0)},reset:function(e){var t=this.dimension();return this.$element.removeClass("collapse")[t](e||"auto")[0].offsetWidth,this.$element[e!==null?"addClass":"removeClass"]("collapse"),this},transition:function(t,n,r){var i=this,s=function(){n.type=="show"&&i.reset(),i.transitioning=0,i.$element.trigger(r)};this.$element.trigger(n);if(n.isDefaultPrevented())return;this.transitioning=1,this.$element[t]("in"),e.support.transition&&this.$element.hasClass("collapse")?this.$element.one(e.support.transition.end,s):s()},toggle:function(){this[this.$element.hasClass("in")?"hide":"show"]()}},e.fn.collapse=function(n){return this.each(function(){var r=e(this),i=r.data("collapse"),s=typeof n=="object"&&n;i||r.data("collapse",i=new t(this,s)),typeof n=="string"&&i[n]()})},e.fn.collapse.defaults={toggle:!0},e.fn.collapse.Constructor=t,e(function(){e("body").on("click.collapse.data-api","[data-toggle=collapse]",function(t){var n=e(this),r,i=n.attr("data-target")||t.preventDefault()||(r=n.attr("href"))&&r.replace(/.*(?=#[^\s]+$)/,""),s=e(i).data("collapse")?"toggle":n.data();n[e(i).hasClass("in")?"addClass":"removeClass"]("collapsed"),e(i).collapse(s)})})}(window.jQuery),!function(e){"use strict";function r(){i(e(t)).removeClass("open")}function i(t){var n=t.attr("data-target"),r;return n||(n=t.attr("href"),n=n&&/#/.test(n)&&n.replace(/.*(?=#[^\s]*$)/,"")),r=e(n),r.length||(r=t.parent()),r}var t="[data-toggle=dropdown]",n=function(t){var n=e(t).on("click.dropdown.data-api",this.toggle);e("html").on("click.dropdown.data-api",function(){n.parent().removeClass("open")})};n.prototype={constructor:n,toggle:function(t){var n=e(this),s,o;if(n.is(".disabled, :disabled"))return;return s=i(n),o=s.hasClass("open"),r(),o||(s.toggleClass("open"),n.focus()),!1},keydown:function(t){var n,r,s,o,u,a;if(!/(38|40|27)/.test(t.keyCode))return;n=e(this),t.preventDefault(),t.stopPropagation();if(n.is(".disabled, :disabled"))return;o=i(n),u=o.hasClass("open");if(!u||u&&t.keyCode==27)return n.click();r=e("[role=menu] li:not(.divider) a",o);if(!r.length)return;a=r.index(r.filter(":focus")),t.keyCode==38&&a>0&&a--,t.keyCode==40&&a<r.length-1&&a++,~a||(a=0),r.eq(a).focus()}},e.fn.dropdown=function(t){return this.each(function(){var r=e(this),i=r.data("dropdown");i||r.data("dropdown",i=new n(this)),typeof t=="string"&&i[t].call(r)})},e.fn.dropdown.Constructor=n,e(function(){e("html").on("click.dropdown.data-api touchstart.dropdown.data-api",r),e("body").on("click.dropdown touchstart.dropdown.data-api",".dropdown form",function(e){e.stopPropagation()}).on("click.dropdown.data-api touchstart.dropdown.data-api",t,n.prototype.toggle).on("keydown.dropdown.data-api touchstart.dropdown.data-api",t+", [role=menu]",n.prototype.keydown)})}(window.jQuery),!function(e){"use strict";var t=function(t,n){this.options=n,this.$element=e(t).delegate('[data-dismiss="modal"]',"click.dismiss.modal",e.proxy(this.hide,this)),this.options.remote&&this.$element.find(".modal-body").load(this.options.remote)};t.prototype={constructor:t,toggle:function(){return this[this.isShown?"hide":"show"]()},show:function(){var t=this,n=e.Event("show");this.$element.trigger(n);if(this.isShown||n.isDefaultPrevented())return;e("body").addClass("modal-open"),this.isShown=!0,this.escape(),this.backdrop(function(){var n=e.support.transition&&t.$element.hasClass("fade");t.$element.parent().length||t.$element.appendTo(document.body),t.$element.show(),n&&t.$element[0].offsetWidth,t.$element.addClass("in").attr("aria-hidden",!1).focus(),t.enforceFocus(),n?t.$element.one(e.support.transition.end,function(){t.$element.trigger("shown")}):t.$element.trigger("shown")})},hide:function(t){t&&t.preventDefault();var n=this;t=e.Event("hide"),this.$element.trigger(t);if(!this.isShown||t.isDefaultPrevented())return;this.isShown=!1,e("body").removeClass("modal-open"),this.escape(),e(document).off("focusin.modal"),this.$element.removeClass("in").attr("aria-hidden",!0),e.support.transition&&this.$element.hasClass("fade")?this.hideWithTransition():this.hideModal()},enforceFocus:function(){var t=this;e(document).on("focusin.modal",function(e){t.$element[0]!==e.target&&!t.$element.has(e.target).length&&t.$element.focus()})},escape:function(){var e=this;this.isShown&&this.options.keyboard?this.$element.on("keyup.dismiss.modal",function(t){t.which==27&&e.hide()}):this.isShown||this.$element.off("keyup.dismiss.modal")},hideWithTransition:function(){var t=this,n=setTimeout(function(){t.$element.off(e.support.transition.end),t.hideModal()},500);this.$element.one(e.support.transition.end,function(){clearTimeout(n),t.hideModal()})},hideModal:function(e){this.$element.hide().trigger("hidden"),this.backdrop()},removeBackdrop:function(){this.$backdrop.remove(),this.$backdrop=null},backdrop:function(t){var n=this,r=this.$element.hasClass("fade")?"fade":"";if(this.isShown&&this.options.backdrop){var i=e.support.transition&&r;this.$backdrop=e('<div class="modal-backdrop '+r+'" />').appendTo(document.body),this.options.backdrop!="static"&&this.$backdrop.click(e.proxy(this.hide,this)),i&&this.$backdrop[0].offsetWidth,this.$backdrop.addClass("in"),i?this.$backdrop.one(e.support.transition.end,t):t()}else!this.isShown&&this.$backdrop?(this.$backdrop.removeClass("in"),e.support.transition&&this.$element.hasClass("fade")?this.$backdrop.one(e.support.transition.end,e.proxy(this.removeBackdrop,this)):this.removeBackdrop()):t&&t()}},e.fn.modal=function(n){return this.each(function(){var r=e(this),i=r.data("modal"),s=e.extend({},e.fn.modal.defaults,r.data(),typeof n=="object"&&n);i||r.data("modal",i=new t(this,s)),typeof n=="string"?i[n]():s.show&&i.show()})},e.fn.modal.defaults={backdrop:!0,keyboard:!0,show:!0},e.fn.modal.Constructor=t,e(function(){e("body").on("click.modal.data-api",'[data-toggle="modal"]',function(t){var n=e(this),r=n.attr("href"),i=e(n.attr("data-target")||r&&r.replace(/.*(?=#[^\s]+$)/,"")),s=i.data("modal")?"toggle":e.extend({remote:!/#/.test(r)&&r},i.data(),n.data());t.preventDefault(),i.modal(s).one("hide",function(){n.focus()})})})}(window.jQuery),!function(e){"use strict";var t=function(e,t){this.init("tooltip",e,t)};t.prototype={constructor:t,init:function(t,n,r){var i,s;this.type=t,this.$element=e(n),this.options=this.getOptions(r),this.enabled=!0,this.options.trigger=="click"?this.$element.on("click."+this.type,this.options.selector,e.proxy(this.toggle,this)):this.options.trigger!="manual"&&(i=this.options.trigger=="hover"?"mouseenter":"focus",s=this.options.trigger=="hover"?"mouseleave":"blur",this.$element.on(i+"."+this.type,this.options.selector,e.proxy(this.enter,this)),this.$element.on(s+"."+this.type,this.options.selector,e.proxy(this.leave,this))),this.options.selector?this._options=e.extend({},this.options,{trigger:"manual",selector:""}):this.fixTitle()},getOptions:function(t){return t=e.extend({},e.fn[this.type].defaults,t,this.$element.data()),t.delay&&typeof t.delay=="number"&&(t.delay={show:t.delay,hide:t.delay}),t},enter:function(t){var n=e(t.currentTarget)[this.type](this._options).data(this.type);if(!n.options.delay||!n.options.delay.show)return n.show();clearTimeout(this.timeout),n.hoverState="in",this.timeout=setTimeout(function(){n.hoverState=="in"&&n.show()},n.options.delay.show)},leave:function(t){var n=e(t.currentTarget)[this.type](this._options).data(this.type);this.timeout&&clearTimeout(this.timeout);if(!n.options.delay||!n.options.delay.hide)return n.hide();n.hoverState="out",this.timeout=setTimeout(function(){n.hoverState=="out"&&n.hide()},n.options.delay.hide)},show:function(){var e,t,n,r,i,s,o;if(this.hasContent()&&this.enabled){e=this.tip(),this.setContent(),this.options.animation&&e.addClass("fade"),s=typeof this.options.placement=="function"?this.options.placement.call(this,e[0],this.$element[0]):this.options.placement,t=/in/.test(s),e.remove().css({top:0,left:0,display:"block"}).appendTo(t?this.$element:document.body),n=this.getPosition(t),r=e[0].offsetWidth,i=e[0].offsetHeight;switch(t?s.split(" ")[1]:s){case"bottom":o={top:n.top+n.height,left:n.left+n.width/2-r/2};break;case"top":o={top:n.top-i,left:n.left+n.width/2-r/2};break;case"left":o={top:n.top+n.height/2-i/2,left:n.left-r};break;case"right":o={top:n.top+n.height/2-i/2,left:n.left+n.width}}e.css(o).addClass(s).addClass("in")}},setContent:function(){var e=this.tip(),t=this.getTitle();e.find(".tooltip-inner")[this.options.html?"html":"text"](t),e.removeClass("fade in top bottom left right")},hide:function(){function r(){var t=setTimeout(function(){n.off(e.support.transition.end).remove()},500);n.one(e.support.transition.end,function(){clearTimeout(t),n.remove()})}var t=this,n=this.tip();return n.removeClass("in"),e.support.transition&&this.$tip.hasClass("fade")?r():n.remove(),this},fixTitle:function(){var e=this.$element;(e.attr("title")||typeof e.attr("data-original-title")!="string")&&e.attr("data-original-title",e.attr("title")||"").removeAttr("title")},hasContent:function(){return this.getTitle()},getPosition:function(t){return e.extend({},t?{top:0,left:0}:this.$element.offset(),{width:this.$element[0].offsetWidth,height:this.$element[0].offsetHeight})},getTitle:function(){var e,t=this.$element,n=this.options;return e=t.attr("data-original-title")||(typeof n.title=="function"?n.title.call(t[0]):n.title),e},tip:function(){return this.$tip=this.$tip||e(this.options.template)},validate:function(){this.$element[0].parentNode||(this.hide(),this.$element=null,this.options=null)},enable:function(){this.enabled=!0},disable:function(){this.enabled=!1},toggleEnabled:function(){this.enabled=!this.enabled},toggle:function(){this[this.tip().hasClass("in")?"hide":"show"]()},destroy:function(){this.hide().$element.off("."+this.type).removeData(this.type)}},e.fn.tooltip=function(n){return this.each(function(){var r=e(this),i=r.data("tooltip"),s=typeof n=="object"&&n;i||r.data("tooltip",i=new t(this,s)),typeof n=="string"&&i[n]()})},e.fn.tooltip.Constructor=t,e.fn.tooltip.defaults={animation:!0,placement:"top",selector:!1,template:'<div class="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',trigger:"hover",title:"",delay:0,html:!0}}(window.jQuery),!function(e){"use strict";var t=function(e,t){this.init("popover",e,t)};t.prototype=e.extend({},e.fn.tooltip.Constructor.prototype,{constructor:t,setContent:function(){var e=this.tip(),t=this.getTitle(),n=this.getContent();e.find(".popover-title")[this.options.html?"html":"text"](t),e.find(".popover-content > *")[this.options.html?"html":"text"](n),e.removeClass("fade top bottom left right in")},hasContent:function(){return this.getTitle()||this.getContent()},getContent:function(){var e,t=this.$element,n=this.options;return e=t.attr("data-content")||(typeof n.content=="function"?n.content.call(t[0]):n.content),e},tip:function(){return this.$tip||(this.$tip=e(this.options.template)),this.$tip},destroy:function(){this.hide().$element.off("."+this.type).removeData(this.type)}}),e.fn.popover=function(n){return this.each(function(){var r=e(this),i=r.data("popover"),s=typeof n=="object"&&n;i||r.data("popover",i=new t(this,s)),typeof n=="string"&&i[n]()})},e.fn.popover.Constructor=t,e.fn.popover.defaults=e.extend({},e.fn.tooltip.defaults,{placement:"right",trigger:"click",content:"",template:'<div class="popover"><div class="arrow"></div><div class="popover-inner"><h3 class="popover-title"></h3><div class="popover-content"><p></p></div></div></div>'})}(window.jQuery),!function(e){"use strict";function t(t,n){var r=e.proxy(this.process,this),i=e(t).is("body")?e(window):e(t),s;this.options=e.extend({},e.fn.scrollspy.defaults,n),this.$scrollElement=i.on("scroll.scroll-spy.data-api",r),this.selector=(this.options.target||(s=e(t).attr("href"))&&s.replace(/.*(?=#[^\s]+$)/,"")||"")+" .nav li > a",this.$body=e("body"),this.refresh(),this.process()}t.prototype={constructor:t,refresh:function(){var t=this,n;this.offsets=e([]),this.targets=e([]),n=this.$body.find(this.selector).map(function(){var t=e(this),n=t.data("target")||t.attr("href"),r=/^#\w/.test(n)&&e(n);return r&&r.length&&[[r.position().top,n]]||null}).sort(function(e,t){return e[0]-t[0]}).each(function(){t.offsets.push(this[0]),t.targets.push(this[1])})},process:function(){var e=this.$scrollElement.scrollTop()+this.options.offset,t=this.$scrollElement[0].scrollHeight||this.$body[0].scrollHeight,n=t-this.$scrollElement.height(),r=this.offsets,i=this.targets,s=this.activeTarget,o;if(e>=n)return s!=(o=i.last()[0])&&this.activate(o);for(o=r.length;o--;)s!=i[o]&&e>=r[o]&&(!r[o+1]||e<=r[o+1])&&this.activate(i[o])},activate:function(t){var n,r;this.activeTarget=t,e(this.selector).parent(".active").removeClass("active"),r=this.selector+'[data-target="'+t+'"],'+this.selector+'[href="'+t+'"]',n=e(r).parent("li").addClass("active"),n.parent(".dropdown-menu").length&&(n=n.closest("li.dropdown").addClass("active")),n.trigger("activate")}},e.fn.scrollspy=function(n){return this.each(function(){var r=e(this),i=r.data("scrollspy"),s=typeof n=="object"&&n;i||r.data("scrollspy",i=new t(this,s)),typeof n=="string"&&i[n]()})},e.fn.scrollspy.Constructor=t,e.fn.scrollspy.defaults={offset:10},e(window).on("load",function(){e('[data-spy="scroll"]').each(function(){var t=e(this);t.scrollspy(t.data())})})}(window.jQuery),!function(e){"use strict";var t=function(t){this.element=e(t)};t.prototype={constructor:t,show:function(){var t=this.element,n=t.closest("ul:not(.dropdown-menu)"),r=t.attr("data-target"),i,s,o;r||(r=t.attr("href"),r=r&&r.replace(/.*(?=#[^\s]*$)/,""));if(t.parent("li").hasClass("active"))return;i=n.find(".active a").last()[0],o=e.Event("show",{relatedTarget:i}),t.trigger(o);if(o.isDefaultPrevented())return;s=e(r),this.activate(t.parent("li"),n),this.activate(s,s.parent(),function(){t.trigger({type:"shown",relatedTarget:i})})},activate:function(t,n,r){function o(){i.removeClass("active").find("> .dropdown-menu > .active").removeClass("active"),t.addClass("active"),s?(t[0].offsetWidth,t.addClass("in")):t.removeClass("fade"),t.parent(".dropdown-menu")&&t.closest("li.dropdown").addClass("active"),r&&r()}var i=n.find("> .active"),s=r&&e.support.transition&&i.hasClass("fade");s?i.one(e.support.transition.end,o):o(),i.removeClass("in")}},e.fn.tab=function(n){return this.each(function(){var r=e(this),i=r.data("tab");i||r.data("tab",i=new t(this)),typeof n=="string"&&i[n]()})},e.fn.tab.Constructor=t,e(function(){e("body").on("click.tab.data-api",'[data-toggle="tab"], [data-toggle="pill"]',function(t){t.preventDefault(),e(this).tab("show")})})}(window.jQuery),!function(e){"use strict";var t=function(t,n){this.$element=e(t),this.options=e.extend({},e.fn.typeahead.defaults,n),this.matcher=this.options.matcher||this.matcher,this.sorter=this.options.sorter||this.sorter,this.highlighter=this.options.highlighter||this.highlighter,this.updater=this.options.updater||this.updater,this.$menu=e(this.options.menu).appendTo("body"),this.source=this.options.source,this.shown=!1,this.listen()};t.prototype={constructor:t,select:function(){var e=this.$menu.find(".active").attr("data-value");return this.$element.val(this.updater(e)).change(),this.hide()},updater:function(e){return e},show:function(){var t=e.extend({},this.$element.offset(),{height:this.$element[0].offsetHeight});return this.$menu.css({top:t.top+t.height,left:t.left}),this.$menu.show(),this.shown=!0,this},hide:function(){return this.$menu.hide(),this.shown=!1,this},lookup:function(t){var n;return this.query=this.$element.val(),!this.query||this.query.length<this.options.minLength?this.shown?this.hide():this:(n=e.isFunction(this.source)?this.source(this.query,e.proxy(this.process,this)):this.source,n?this.process(n):this)},process:function(t){var n=this;return t=e.grep(t,function(e){return n.matcher(e)}),t=this.sorter(t),t.length?this.render(t.slice(0,this.options.items)).show():this.shown?this.hide():this},matcher:function(e){return~e.toLowerCase().indexOf(this.query.toLowerCase())},sorter:function(e){var t=[],n=[],r=[],i;while(i=e.shift())i.toLowerCase().indexOf(this.query.toLowerCase())?~i.indexOf(this.query)?n.push(i):r.push(i):t.push(i);return t.concat(n,r)},highlighter:function(e){var t=this.query.replace(/[\-\[\]{}()*+?.,\\\^$|#\s]/g,"\\$&");return e.replace(new RegExp("("+t+")","ig"),function(e,t){return"<strong>"+t+"</strong>"})},render:function(t){var n=this;return t=e(t).map(function(t,r){return t=e(n.options.item).attr("data-value",r),t.find("a").html(n.highlighter(r)),t[0]}),t.first().addClass("active"),this.$menu.html(t),this},next:function(t){var n=this.$menu.find(".active").removeClass("active"),r=n.next();r.length||(r=e(this.$menu.find("li")[0])),r.addClass("active")},prev:function(e){var t=this.$menu.find(".active").removeClass("active"),n=t.prev();n.length||(n=this.$menu.find("li").last()),n.addClass("active")},listen:function(){this.$element.on("blur",e.proxy(this.blur,this)).on("keypress",e.proxy(this.keypress,this)).on("keyup",e.proxy(this.keyup,this)),(e.browser.chrome||e.browser.webkit||e.browser.msie)&&this.$element.on("keydown",e.proxy(this.keydown,this)),this.$menu.on("click",e.proxy(this.click,this)).on("mouseenter","li",e.proxy(this.mouseenter,this))},move:function(e){if(!this.shown)return;switch(e.keyCode){case 9:case 13:case 27:e.preventDefault();break;case 38:e.preventDefault(),this.prev();break;case 40:e.preventDefault(),this.next()}e.stopPropagation()},keydown:function(t){this.suppressKeyPressRepeat=!~e.inArray(t.keyCode,[40,38,9,13,27]),this.move(t)},keypress:function(e){if(this.suppressKeyPressRepeat)return;this.move(e)},keyup:function(e){switch(e.keyCode){case 40:case 38:break;case 9:case 13:if(!this.shown)return;this.select();break;case 27:if(!this.shown)return;this.hide();break;default:this.lookup()}e.stopPropagation(),e.preventDefault()},blur:function(e){var t=this;setTimeout(function(){t.hide()},150)},click:function(e){e.stopPropagation(),e.preventDefault(),this.select()},mouseenter:function(t){this.$menu.find(".active").removeClass("active"),e(t.currentTarget).addClass("active")}},e.fn.typeahead=function(n){return this.each(function(){var r=e(this),i=r.data("typeahead"),s=typeof n=="object"&&n;i||r.data("typeahead",i=new t(this,s)),typeof n=="string"&&i[n]()})},e.fn.typeahead.defaults={source:[],items:8,menu:'<ul class="typeahead dropdown-menu"></ul>',item:'<li><a href="#"></a></li>',minLength:1},e.fn.typeahead.Constructor=t,e(function(){e("body").on("focus.typeahead.data-api",'[data-provide="typeahead"]',function(t){var n=e(this);if(n.data("typeahead"))return;t.preventDefault(),n.typeahead(n.data())})})}(window.jQuery),!function(e){"use strict";var t=function(t,n){this.options=e.extend({},e.fn.affix.defaults,n),this.$window=e(window).on("scroll.affix.data-api",e.proxy(this.checkPosition,this)),this.$element=e(t),this.checkPosition()};t.prototype.checkPosition=function(){if(!this.$element.is(":visible"))return;var t=e(document).height(),n=this.$window.scrollTop(),r=this.$element.offset(),i=this.options.offset,s=i.bottom,o=i.top,u="affix affix-top affix-bottom",a;typeof i!="object"&&(s=o=i),typeof o=="function"&&(o=i.top()),typeof s=="function"&&(s=i.bottom()),a=this.unpin!=null&&n+this.unpin<=r.top?!1:s!=null&&r.top+this.$element.height()>=t-s?"bottom":o!=null&&n<=o?"top":!1;if(this.affixed===a)return;this.affixed=a,this.unpin=a=="bottom"?r.top-n:null,this.$element.removeClass(u).addClass("affix"+(a?"-"+a:""))},e.fn.affix=function(n){return this.each(function(){var r=e(this),i=r.data("affix"),s=typeof n=="object"&&n;i||r.data("affix",i=new t(this,s)),typeof n=="string"&&i[n]()})},e.fn.affix.Constructor=t,e.fn.affix.defaults={offset:0},e(window).on("load",function(){e('[data-spy="affix"]').each(function(){var t=e(this),n=t.data();n.offset=n.offset||{},n.offsetBottom&&(n.offset.bottom=n.offsetBottom),n.offsetTop&&(n.offset.top=n.offsetTop),t.affix(n)})})}(window.jQuery);

/*!
 * VERSION: beta 1.5
 * DATE: 2012-09-04
 * JavaScript
 * UPDATES AND DOCS AT: http://www.greensock.com
 *
 * Copyright (c) 2008-2012, GreenSock. All rights reserved. 
 * This work is subject to the terms in http://www.greensock.com/terms_of_use.html or for 
 * Club GreenSock members, the software agreement that was issued with your membership.
 * 
 * @author: Jack Doyle, jack@greensock.com
 */
(function(m){var F=function(a){var a=a.split("."),c=m,b;for(b=0;b<a.length;b++)c[a[b]]=c=c[a[b]]||{};return c},n=F("com.greensock"),o,k,d,z,G,v={},C=function(a,c,b,j){this.sc=v[a]?v[a].sc:[];v[a]=this;this.gsClass=null;this.def=b;var e=c||[],d=[];this.check=function(c){for(var f=e.length,g=0,l;-1<--f;)(l=v[e[f]]||new C(e[f])).gsClass?d[f]=l.gsClass:(g++,c&&l.sc.push(this));if(0===g&&b){var c=("com.greensock."+a).split("."),f=c.pop(),k=F(c.join("."))[f]=this.gsClass=b.apply(b,d);j&&((m.GreenSockGlobals|| m)[f]=k,"function"===typeof define&&define.amd?define((m.GreenSockAMDPath?m.GreenSockAMDPath+"/":"")+a.split(".").join("/"),[],function(){return k}):"undefined"!==typeof module&&module.exports&&(module.exports=k));for(f=0;f<this.sc.length;f++)this.sc[f].check(!1)}};this.check(!0)},q=n._class=function(a,c,b){new C(a,[],function(){return c},b);return c};m._gsDefine=function(a,c,b,j){return new C(a,c,b,j)};var H=[0,0,1,1],D=[],s=q("easing.Ease",function(a,c,b,j){this._func=a;this._type=b||0;this._power= j||0;this._params=c?H.concat(c):H},!0);d=s.prototype;d._calcEnd=!1;d.getRatio=function(a){if(this._func)return this._params[0]=a,this._func.apply(null,this._params);var c=this._type,b=this._power,j=1===c?1-a:2===c?a:0.5>a?2*a:2*(1-a);1===b?j*=j:2===b?j*=j*j:3===b?j*=j*j*j:4===b&&(j*=j*j*j*j);return 1===c?1-j:2===c?j:0.5>a?j/2:1-j/2};o=["Linear","Quad","Cubic","Quart","Quint"];for(k=o.length;-1<--k;)d=q("easing."+o[k],function(){},!0),z=q("easing.Power"+k,function(){},!0),d.easeOut=z.easeOut=new s(null, null,1,k),d.easeIn=z.easeIn=new s(null,null,2,k),d.easeInOut=z.easeInOut=new s(null,null,3,k);q("easing.Strong",n.easing.Power4,!0);n.easing.Linear.easeNone=n.easing.Linear.easeIn;d=q("events.EventDispatcher",function(a){this._listeners={};this._eventTarget=a||this}).prototype;d.addEventListener=function(a,c,b,j,e){var e=e||0,d=this._listeners[a],h=0,f;null==d&&(this._listeners[a]=d=[]);for(f=d.length;-1<--f;)a=d[f],a.c===c?d.splice(f,1):0===h&&a.pr<e&&(h=f+1);d.splice(h,0,{c:c,s:b,up:j,pr:e})};d.removeEventListener= function(a,c){var b=this._listeners[a];if(b)for(var j=b.length;-1<--j;)if(b[j].c===c){b.splice(j,1);break}};d.dispatchEvent=function(a){var c=this._listeners[a];if(c)for(var b=c.length,j,d=this._eventTarget;-1<--b;)j=c[b],j.up?j.c.call(j.s||d,{type:a,target:d}):j.c.call(j.s||d)};var A=m.requestAnimationFrame,B=m.cancelAnimationFrame,I=Date.now||function(){return(new Date).getTime()};o=["ms","moz","webkit","o"];for(k=o.length;-1<--k&&!A;)A=m[o[k]+"RequestAnimationFrame"],B=m[o[k]+"CancelAnimationFrame"]|| m[o[k]+"CancelRequestAnimationFrame"];B||(B=function(a){m.clearTimeout(a)});q("Ticker",function(a,c){this.frame=this.time=0;var b=this,j=I(),d=!1!==c,i,h,f,g,l;this.tick=function(){b.time=(I()-j)/1E3;if(!i||b.time>=l)b.frame++,l=b.time+g-(b.time-l)-5E-4,l<=b.time&&(l=b.time+0.001),b.dispatchEvent("tick");f=h(b.tick)};this.fps=function(a){if(!arguments.length)return i;i=a;g=1/(i||60);l=this.time+g;h=0===i?function(){}:!d||!A?function(a){return m.setTimeout(a,1E3*(l-b.time)+1>>0||1)}:A;B(f);f=h(b.tick)}; this.useRAF=function(a){if(!arguments.length)return d;d=a;this.fps(i)};this.fps(a)});d=n.Ticker.prototype=new n.events.EventDispatcher;d.constructor=n.Ticker;var p=q("core.Animation",function(a,c){this.vars=c||{};this._duration=this._totalDuration=a||0;this._delay=Number(this.vars.delay)||0;this._timeScale=1;this._active=!0==this.vars.immediateRender;this.data=this.vars.data;this._reversed=!0==this.vars.reversed;if(t){G||(r.tick(),G=!0);var b=this.vars.useFrames?w:t;b.insert(this,b._time);this.vars.paused&& this.paused(!0)}}),r=p.ticker=new n.Ticker;d=p.prototype;d._dirty=d._gc=d._initted=d._paused=!1;d._totalTime=d._time=0;d._rawPrevTime=-1;d._next=d._last=d._onUpdate=d._timeline=d.timeline=null;d._paused=!1;d.play=function(a,c){arguments.length&&this.seek(a,c);this.reversed(!1);return this.paused(!1)};d.pause=function(a,c){arguments.length&&this.seek(a,c);return this.paused(!0)};d.resume=function(a,c){arguments.length&&this.seek(a,c);return this.paused(!1)};d.seek=function(a,c){return this.totalTime(Number(a), !1!=c)};d.restart=function(a,c){this.reversed(!1);this.paused(!1);return this.totalTime(a?-this._delay:0,!1!=c)};d.reverse=function(a,c){arguments.length&&this.seek(a||this.totalDuration(),c);this.reversed(!0);return this.paused(!1)};d.render=function(){};d.invalidate=function(){return this};d._enabled=function(a,c){this._gc=!a;this._active=a&&!this._paused&&0<this._totalTime&&this._totalTime<this._totalDuration;!0!=c&&(a&&null==this.timeline?this._timeline.insert(this,this._startTime-this._delay): !a&&null!=this.timeline&&this._timeline._remove(this,!0));return!1};d._kill=function(){return this._enabled(!1,!1)};d.kill=function(a,c){this._kill(a,c);return this};d._uncache=function(a){for(a=a?this:this.timeline;a;)a._dirty=!0,a=a.timeline;return this};d.eventCallback=function(a,c,b,j){if(null==a)return null;if("on"===a.substr(0,2)){if(1===arguments.length)return this.vars[a];if(null==c)delete this.vars[a];else if(this.vars[a]=c,this.vars[a+"Params"]=b,this.vars[a+"Scope"]=j,b)for(var d=b.length;-1< --d;)"{self}"===b[d]&&(b=this.vars[a+"Params"]=b.concat(),b[d]=this);"onUpdate"===a&&(this._onUpdate=c)}return this};d.delay=function(a){if(!arguments.length)return this._delay;this._timeline.smoothChildTiming&&this.startTime(this._startTime+a-this._delay);this._delay=a;return this};d.duration=function(a){if(!arguments.length)return this._dirty=!1,this._duration;this._duration=this._totalDuration=a;this._uncache(!0);this._timeline.smoothChildTiming&&this._active&&0!=a&&this.totalTime(this._totalTime* (a/this._duration),!0);return this};d.totalDuration=function(a){this._dirty=!1;return!arguments.length?this._totalDuration:this.duration(a)};d.time=function(a,c){if(!arguments.length)return this._time;this._dirty&&this.totalDuration();a>this._duration&&(a=this._duration);return this.totalTime(a,c)};d.totalTime=function(a,c){if(!arguments.length)return this._totalTime;if(this._timeline){0>a&&(a+=this.totalDuration());if(this._timeline.smoothChildTiming&&(this._dirty&&this.totalDuration(),a>this._totalDuration&& (a=this._totalDuration),this._startTime=(this._paused?this._pauseTime:this._timeline._time)-(!this._reversed?a:this._totalDuration-a)/this._timeScale,this._timeline._dirty||this._uncache(!1),!this._timeline._active))for(var b=this._timeline;b._timeline;)b.totalTime(b._totalTime,!0),b=b._timeline;this._gc&&this._enabled(!0,!1);this._totalTime!=a&&this.render(a,c,!1)}return this};d.startTime=function(a){if(!arguments.length)return this._startTime;a!=this._startTime&&(this._startTime=a,this.timeline&& this.timeline._sortChildren&&this.timeline.insert(this,a-this._delay));return this};d.timeScale=function(a){if(!arguments.length)return this._timeScale;a=a||1E-6;if(this._timeline&&this._timeline.smoothChildTiming){var c=this._pauseTime||0==this._pauseTime?this._pauseTime:this._timeline._totalTime;this._startTime=c-(c-this._startTime)*this._timeScale/a}this._timeScale=a;return this._uncache(!1)};d.reversed=function(a){if(!arguments.length)return this._reversed;a!=this._reversed&&(this._reversed=a, this.totalTime(this._totalTime,!0));return this};d.paused=function(a){if(!arguments.length)return this._paused;a!=this._paused&&this._timeline&&(!a&&this._timeline.smoothChildTiming&&(this._startTime+=this._timeline.rawTime()-this._pauseTime,this._uncache(!1)),this._pauseTime=a?this._timeline.rawTime():null,this._paused=a,this._active=!this._paused&&0<this._totalTime&&this._totalTime<this._totalDuration);this._gc&&(a||this._enabled(!0,!1));return this};n=q("core.SimpleTimeline",function(a){p.call(this, 0,a);this.autoRemoveChildren=this.smoothChildTiming=!0});d=n.prototype=new p;d.constructor=n;d.kill()._gc=!1;d._first=d._last=null;d._sortChildren=!1;d.insert=function(a,c){a._startTime=Number(c||0)+a._delay;a._paused&&this!==a._timeline&&(a._pauseTime=a._startTime+(this.rawTime()-a._startTime)/a._timeScale);a.timeline&&a.timeline._remove(a,!0);a.timeline=a._timeline=this;a._gc&&a._enabled(!0,!0);var b=this._last;if(this._sortChildren)for(var d=a._startTime;b&&b._startTime>d;)b=b._prev;b?(a._next= b._next,b._next=a):(a._next=this._first,this._first=a);a._next?a._next._prev=a:this._last=a;a._prev=b;this._timeline&&this._uncache(!0);return this};d._remove=function(a,c){a.timeline===this&&(c||a._enabled(!1,!0),a.timeline=null,a._prev?a._prev._next=a._next:this._first===a&&(this._first=a._next),a._next?a._next._prev=a._prev:this._last===a&&(this._last=a._prev),this._timeline&&this._uncache(!0));return this};d.render=function(a,c){var b=this._first,d;for(this._totalTime=this._time=this._rawPrevTime= a;b;){d=b._next;if(b._active||a>=b._startTime&&!b._paused)b._reversed?b.render((!b._dirty?b._totalDuration:b.totalDuration())-(a-b._startTime)*b._timeScale,c,!1):b.render((a-b._startTime)*b._timeScale,c,!1);b=d}};d.rawTime=function(){return this._totalTime};var g=q("TweenLite",function(a,c,b){p.call(this,c,b);if(null==a)throw"Cannot tween an undefined reference.";this.target=a;this._overwrite=null==this.vars.overwrite?J[g.defaultOverwrite]:"number"===typeof this.vars.overwrite?this.vars.overwrite>> 0:J[this.vars.overwrite];if((a instanceof Array||a.jquery)&&"object"===typeof a[0]){this._targets=a.slice(0);this._propLookup=[];this._siblings=[];for(a=0;a<this._targets.length;a++)b=this._targets[a],b.jquery?(this._targets.splice(a--,1),this._targets=this._targets.concat(b.constructor.makeArray(b))):(this._siblings[a]=x(b,this,!1),1===this._overwrite&&1<this._siblings[a].length&&E(b,this,null,1,this._siblings[a]))}else this._propLookup={},this._siblings=x(a,this,!1),1===this._overwrite&&1<this._siblings.length&& E(a,this,null,1,this._siblings);(this.vars.immediateRender||0===c&&0===this._delay&&!1!=this.vars.immediateRender)&&this.render(-this._delay,!1,!0)},!0);d=g.prototype=new p;d.constructor=g;d.kill()._gc=!1;d.ratio=0;d._firstPT=d._targets=d._overwrittenProps=null;d._notifyPluginsOfEnabled=!1;g.version=12;g.defaultEase=d._ease=new s(null,null,1,1);g.defaultOverwrite="auto";g.ticker=r;var K=g._plugins={},u=g._tweenLookup={},M=0,N={ease:1,delay:1,overwrite:1,onComplete:1,onCompleteParams:1,onCompleteScope:1, useFrames:1,runBackwards:1,startAt:1,onUpdate:1,onUpdateParams:1,onUpdateScope:1,onStart:1,onStartParams:1,onStartScope:1,onReverseComplete:1,onReverseCompleteParams:1,onReverseCompleteScope:1,onRepeat:1,onRepeatParams:1,onRepeatScope:1,easeParams:1,yoyo:1,orientToBezier:1,immediateRender:1,repeat:1,repeatDelay:1,data:1,paused:1,reversed:1},J={none:0,all:1,auto:2,concurrent:3,allOnStart:4,preexisting:5,"true":1,"false":0},w=p._rootFramesTimeline=new n,t=p._rootTimeline=new n;t._startTime=r.time;w._startTime= r.frame;t._active=w._active=!0;p._updateRoot=function(){t.render((r.time-t._startTime)*t._timeScale,!1,!1);w.render((r.frame-w._startTime)*w._timeScale,!1,!1);if(!(r.frame%120)){var a,c,b;for(b in u){c=u[b].tweens;for(a=c.length;-1<--a;)c[a]._gc&&c.splice(a,1);0===c.length&&delete u[b]}}};r.addEventListener("tick",p._updateRoot);var x=function(a,c,b){var d=a._gsTweenID,e;if(!u[d||(a._gsTweenID=d="t"+M++)])u[d]={target:a,tweens:[]};if(c&&(a=u[d].tweens,a[e=a.length]=c,b))for(;-1<--e;)a[e]===c&&a.splice(e, 1);return u[d].tweens},E=function(a,c,b,d,e){var i,h,f;if(1===d||4<=d){a=e.length;for(i=0;i<a;i++)if((f=e[i])!==c)f._gc||f._enabled(!1,!1)&&(h=!0);else if(5===d)break;return h}var g=c._startTime+1E-10,l=[],k=0,m;for(i=e.length;-1<--i;)if(!((f=e[i])===c||f._gc||f._paused))f._timeline!==c._timeline?(m=m||L(c,0),0===L(f,m)&&(l[k++]=f)):f._startTime<=g&&f._startTime+f.totalDuration()/f._timeScale+1E-10>g&&((0===c._duration||!f._initted)&&2E-10>=g-f._startTime||(l[k++]=f));for(i=k;-1<--i;)if(f=l[i],2=== d&&f._kill(b,a)&&(h=!0),2!==d||!f._firstPT&&f._initted)f._enabled(!1,!1)&&(h=!0);return h},L=function(a,c){for(var b=a._timeline,d=b._timeScale,e=a._startTime;b._timeline;){e+=b._startTime;d*=b._timeScale;if(b._paused)return-100;b=b._timeline}e/=d;return e>c?e-c:!a._initted&&2E-10>e-c?1E-10:(e+=a.totalDuration()/a._timeScale/d)>c?0:e-c-1E-10};d._init=function(){this.vars.startAt&&(this.vars.startAt.overwrite=0,this.vars.startAt.immediateRender=!0,g.to(this.target,0,this.vars.startAt));var a,c;this._ease= this.vars.ease instanceof s?this.vars.easeParams instanceof Array?this.vars.ease.config.apply(this.vars.ease,this.vars.easeParams):this.vars.ease:"function"===typeof this.vars.ease?new s(this.vars.ease,this.vars.easeParams):g.defaultEase;this._easeType=this._ease._type;this._easePower=this._ease._power;this._firstPT=null;if(this._targets)for(a=this._targets.length;-1<--a;){if(this._initProps(this._targets[a],this._propLookup[a]={},this._siblings[a],this._overwrittenProps?this._overwrittenProps[a]: null))c=!0}else c=this._initProps(this.target,this._propLookup,this._siblings,this._overwrittenProps);c&&g._onPluginEvent("_onInitAllProps",this);this._overwrittenProps&&null==this._firstPT&&"function"!==typeof this.target&&this._enabled(!1,!1);if(this.vars.runBackwards)for(a=this._firstPT;a;)a.s+=a.c,a.c=-a.c,a=a._next;this._onUpdate=this.vars.onUpdate;this._initted=!0};d._initProps=function(a,c,b,d){var e,i,h,f,g,l;if(null==a)return!1;for(e in this.vars){if(N[e]){if("onStartParams"===e||"onUpdateParams"=== e||"onCompleteParams"===e||"onReverseCompleteParams"===e||"onRepeatParams"===e)if(g=this.vars[e])for(i=g.length;-1<--i;)"{self}"===g[i]&&(g=this.vars[e]=g.concat(),g[i]=this)}else if(K[e]&&(f=new K[e])._onInitTween(a,this.vars[e],this)){this._firstPT=l={_next:this._firstPT,t:f,p:"setRatio",s:0,c:1,f:!0,n:e,pg:!0,pr:f._priority};for(i=f._overwriteProps.length;-1<--i;)c[f._overwriteProps[i]]=this._firstPT;if(f._priority||f._onInitAllProps)h=!0;if(f._onDisable||f._onEnable)this._notifyPluginsOfEnabled= !0}else this._firstPT=c[e]=l={_next:this._firstPT,t:a,p:e,f:"function"===typeof a[e],n:e,pg:!1,pr:0},l.s=!l.f?parseFloat(a[e]):a[e.indexOf("set")||"function"!==typeof a["get"+e.substr(3)]?e:"get"+e.substr(3)](),i=this.vars[e],l.c="number"===typeof i?i-l.s:"string"===typeof i&&"="===i.charAt(1)?parseInt(i.charAt(0)+"1")*Number(i.substr(2)):Number(i)||0;l&&l._next&&(l._next._prev=l)}return d&&this._kill(d,a)?this._initProps(a,c,b,d):1<this._overwrite&&this._firstPT&&1<b.length&&E(a,this,c,this._overwrite, b)?(this._kill(c,a),this._initProps(a,c,b,d)):h};d.render=function(a,c,b){var d=this._time,e,i;if(a>=this._duration){if(this._totalTime=this._time=this._duration,this.ratio=this._ease._calcEnd?this._ease.getRatio(1):1,this._reversed||(e=!0,i="onComplete"),0===this._duration){if(0===a||0>this._rawPrevTime)this._rawPrevTime!==a&&(b=!0);this._rawPrevTime=a}}else if(0>=a){this._totalTime=this._time=0;this.ratio=this._ease._calcEnd?this._ease.getRatio(0):0;if(0!==d||0===this._duration&&0<this._rawPrevTime)i= "onReverseComplete",e=this._reversed;0>a?(this._active=!1,0===this._duration&&(0<=this._rawPrevTime&&(b=!0),this._rawPrevTime=a)):this._initted||(b=!0)}else if(this._totalTime=this._time=a,this._easeType){var h=a/this._duration,f=this._easeType,g=this._easePower;if(1===f||3===f&&0.5<=h)h=1-h;3===f&&(h*=2);1===g?h*=h:2===g?h*=h*h:3===g?h*=h*h*h:4===g&&(h*=h*h*h*h);this.ratio=1===f?1-h:2===f?h:0.5>a/this._duration?h/2:1-h/2}else this.ratio=this._ease.getRatio(a/this._duration);if(this._time!==d||b){this._initted|| (this._init(),!e&&this._time&&(this.ratio=this._ease.getRatio(this._time/this._duration)));!this._active&&!this._paused&&(this._active=!0);if(0===d&&this.vars.onStart&&(0!==this._time||0===this._duration))c||this.vars.onStart.apply(this.vars.onStartScope||this,this.vars.onStartParams||D);for(a=this._firstPT;a;){if(a.f)a.t[a.p](a.c*this.ratio+a.s);else a.t[a.p]=a.c*this.ratio+a.s;a=a._next}this._onUpdate&&(c||this._onUpdate.apply(this.vars.onUpdateScope||this,this.vars.onUpdateParams||D));i&&!this._gc&& (e&&(this._timeline.autoRemoveChildren&&this._enabled(!1,!1),this._active=!1),c||this.vars[i]&&this.vars[i].apply(this.vars[i+"Scope"]||this,this.vars[i+"Params"]||D))}};d._kill=function(a,c){"all"===a&&(a=null);if(null==a&&(null==c||c==this.target))return this._enabled(!1,!1);var c=c||this._targets||this.target,b,d,e,i,g,f,k;if((c instanceof Array||c.jquery)&&"object"===typeof c[0])for(b=c.length;-1<--b;)this._kill(a,c[b])&&(g=!0);else{if(this._targets)for(b=this._targets.length;-1<--b;){if(c=== this._targets[b]){i=this._propLookup[b]||{};this._overwrittenProps=this._overwrittenProps||[];d=this._overwrittenProps[b]=a?this._overwrittenProps[b]||{}:"all";break}}else{if(c!==this.target)return!1;i=this._propLookup;d=this._overwrittenProps=a?this._overwrittenProps||{}:"all"}if(i)for(e in f=a||i,k=a!=d&&"all"!=d&&a!=i&&(null==a||!0!=a._tempKill),f){if(b=i[e]){b.pg&&b.t._kill(f)&&(g=!0);if(!b.pg||0===b.t._overwriteProps.length)b._prev?b._prev._next=b._next:b===this._firstPT&&(this._firstPT=b._next), b._next&&(b._next._prev=b._prev),b._next=b._prev=null;delete i[e]}k&&(d[e]=1)}}return g};d.invalidate=function(){this._notifyPluginsOfEnabled&&g._onPluginEvent("_onDisable",this);this._onUpdate=this._overwrittenProps=this._firstPT=null;this._initted=this._active=this._notifyPluginsOfEnabled=!1;this._propLookup=this._targets?{}:[];return this};d._enabled=function(a,c){if(a&&this._gc)if(this._targets)for(var b=this._targets.length;-1<--b;)this._siblings[b]=x(this._targets[b],this,!0);else this._siblings= x(this.target,this,!0);p.prototype._enabled.call(this,a,c);return this._notifyPluginsOfEnabled&&this._firstPT?g._onPluginEvent(a?"_onEnable":"_onDisable",this):!1};g.to=function(a,c,b){return new g(a,c,b)};g.from=function(a,c,b){b.runBackwards=!0;!1!=b.immediateRender&&(b.immediateRender=!0);return new g(a,c,b)};g.fromTo=function(a,c,b,d){d.startAt=b;b.immediateRender&&(d.immediateRender=!0);return new g(a,c,d)};g.delayedCall=function(a,c,b,d,e){return new g(c,0,{delay:a,onComplete:c,onCompleteParams:b, onCompleteScope:d,onReverseComplete:c,onReverseCompleteParams:b,onReverseCompleteScope:d,immediateRender:!1,useFrames:e,overwrite:0})};g.set=function(a,c){return new g(a,0,c)};g.killTweensOf=g.killDelayedCallsTo=function(a,c){for(var b=g.getTweensOf(a),d=b.length;-1<--d;)b[d]._kill(c,a)};g.getTweensOf=function(a){if(null!=a){var c,b,d;if((a instanceof Array||a.jquery)&&"object"===typeof a[0]){c=a.length;for(b=[];-1<--c;)b=b.concat(g.getTweensOf(a[c]));for(c=b.length;-1<--c;){d=b[c];for(a=c;-1<--a;)d=== b[a]&&b.splice(c,1)}}else{b=x(a).concat();for(c=b.length;-1<--c;)b[c]._gc&&b.splice(c,1)}return b}};var y=q("plugins.TweenPlugin",function(a,c){this._overwriteProps=(a||"").split(",");this._propName=this._overwriteProps[0];this._priority=c||0},!0);d=y.prototype;y.version=12;y.API=2;d._firstPT=null;d._addTween=function(a,c,b,d,e,g){var h;if(null!=d&&(h="number"===typeof d||"="!==d.charAt(1)?Number(d)-b:parseInt(d.charAt(0)+"1")*Number(d.substr(2))))this._firstPT=a={_next:this._firstPT,t:a,p:c,s:b, c:h,f:"function"===typeof a[c],n:e||c,r:g},a._next&&(a._next._prev=a)};d.setRatio=function(a){for(var c=this._firstPT,b;c;){b=c.c*a+c.s;c.r&&(b=b+(0<b?0.5:-0.5)>>0);if(c.f)c.t[c.p](b);else c.t[c.p]=b;c=c._next}};d._kill=function(a){if(null!=a[this._propName])this._overwriteProps=[];else for(var c=this._overwriteProps.length;-1<--c;)null!=a[this._overwriteProps[c]]&&this._overwriteProps.splice(c,1);for(c=this._firstPT;c;)null!=a[c.n]&&((c._next&&(c._next._prev=c._prev),c._prev)?(c._prev._next=c._next, c._prev=null):this._firstPT===c&&(this._firstPT=c._next)),c=c._next;return!1};d._roundProps=function(a,c){for(var b=this._firstPT;b;){if(a[this._propName]||null!=b.n&&a[b.n.split(this._propName+"_").join("")])b.r=c;b=b._next}};g._onPluginEvent=function(a,c){var b=c._firstPT,d;if("_onInitAllProps"===a){for(var e,g,h,f;b;){f=b._next;for(e=g;e&&e.pr>b.pr;)e=e._next;(b._prev=e?e._prev:h)?b._prev._next=b:g=b;(b._next=e)?e._prev=b:h=b;b=f}b=c._firstPT=g}for(;b;)b.pg&&"function"===typeof b.t[a]&&b.t[a]()&& (d=!0),b=b._next;return d};y.activate=function(a){for(var c=a.length;-1<--c;)a[c].API===y.API&&(g._plugins[(new a[c])._propName]=a[c]);return!0};if(o=m._gsQueue){for(k=0;k<o.length;k++)o[k]();for(d in v)v[d].def||console.log("Warning: TweenLite encountered missing dependency: com.greensock."+d)}})(window);

/*!
 * VERSION: beta 1.542
 * DATE: 2012-10-01
 * JavaScript 
 * UPDATES AND DOCS AT: http://www.greensock.com
 *
 * Copyright (c) 2008-2012, GreenSock. All rights reserved. 
 * This work is subject to the terms in http://www.greensock.com/terms_of_use.html or for 
 * Club GreenSock members, the software agreement that was issued with your membership.
 * 
 * @author: Jack Doyle, jack@greensock.com
 */
(window._gsQueue||(window._gsQueue=[])).push(function(){_gsDefine("plugins.CSSPlugin",["plugins.TweenPlugin","TweenLite"],function(C){var m=function(){C.call(this,"css");this._overwriteProps.pop()},u=m.prototype=new C("css");u.constructor=m;m.API=2;m.suffixMap={top:"px",right:"px",bottom:"px",left:"px",width:"px",height:"px",fontSize:"px",padding:"px",margin:"px"};var w=/[^\d\-\.]/g,K=/(\d|\-|\+|=|#|\.)*/g,ca=/(\d|\.)+/g,L=/opacity *= *([^)]*)/,da=/opacity:([^;]*)/,ea=/([A-Z])/g,P=/-([a-z])/gi,Q=
function(b,a){return a.toUpperCase()},fa=/(Left|Right|Width)/i,ga=/(M11|M12|M21|M22)=[\d\-\.e]+/gi,ha=/progid\:DXImageTransform\.Microsoft\.Matrix\(.+?\)/i,z=Math.PI/180,R=180/Math.PI,D={},A=document,B=A.createElement("div"),v=navigator.userAgent,S,T,U,V,x,W=v.indexOf("Android"),X=A.createElement("div");U=-1!==v.indexOf("Safari")&&-1===v.indexOf("Chrome")&&(-1===W||3<Number(v.substr(W+8,1)));/MSIE ([0-9]{1,}[\.0-9]{0,})/.exec(v);V=parseFloat(RegExp.$1);X.innerHTML="<a style='top:1px;opacity:.55;'>a</a>";
x=(v=X.getElementsByTagName("a")[0])?/^0.55/.test(v.style.opacity):!1;var Y=function(b){if(!b||""===b)return E.black;if(E[b])return E[b];if("number"===typeof b)return[b>>16,b>>8&255,b&255];if("#"===b.charAt(0)){if(4===b.length)var a=b.charAt(1),g=b.charAt(2),b=b.charAt(3),b="#"+a+a+g+g+b+b;b=parseInt(b.substr(1),16);return[b>>16,b>>8&255,b&255]}return b.match(ca)||E.transparent},Z=function(b){return L.test("string"===typeof b?b:(b.currentStyle?b.currentStyle.filter:b.style.filter)||"")?parseFloat(RegExp.$1)/
100:1},F=A.defaultView?A.defaultView.getComputedStyle:function(){},p=function(b,a,g,c){return!x&&"opacity"===a?Z(b):!c&&b.style[a]?b.style[a]:(g=g||F(b,null))?(b=g.getPropertyValue(a.replace(ea,"-$1").toLowerCase()))||g.length?b:g[a]:b.currentStyle?(g=b.currentStyle,c=g[a],!c&&"backgroundPosition"===a?g[a+"X"]+" "+g[a+"Y"]:c):null},H=function(b,a){var g={},c;if(a=a||F(b,null))if(c=a.length)for(;-1<--c;)g[a[c].replace(P,Q)]=a.getPropertyValue(a[c]);else for(c in a)g[c]=a[c];else if(a=b.currentStyle||
b.style)for(c in a)g[c.replace(P,Q)]=a[c];x||(g.opacity=Z(b));c=G(b,a,!1);g.rotation=c.rotation*R;g.skewX=c.skewX*R;g.scaleX=c.scaleX;g.scaleY=c.scaleY;g.x=c.x;g.y=c.y;null!=g.filters&&delete g.filters;return g},$=function(b,a,g,c){var h={},f,d;for(d in a)if("cssText"!==d&&"length"!==d&&isNaN(d)&&b[d]!=(f=a[d]))if(f!==q&&("number"===typeof f||"string"===typeof f))h[d]=(""===f||"auto"===f)&&"string"===typeof b[d]&&""!==b[d].replace(w,"")?0:f,c&&c.props.push(d);if(g)for(d in g)"className"!==d&&(h[d]=
g[d]);return h},aa={scaleX:1,scaleY:1,x:1,y:1,rotation:1,shortRotation:1,skewX:1,skewY:1,scale:1},ba="",M="",q=function(b,a){var a=a||B,g=a.style,c,h;if(void 0!==g[b])return b;b=b.substr(0,1).toUpperCase()+b.substr(1);c=["O","Moz","ms","Ms","Webkit"];for(h=5;-1<--h&&void 0===g[c[h]+b];);return 0<=h?(M=3===h?"ms":c[h],ba="-"+M.toLowerCase()+"-",M+b):null}("transform"),ia=ba+"transform",G=function(b,a,g){var c=b._gsTransform,h;q?h=p(b,ia,a,!0):b.currentStyle&&(h=(h=b.currentStyle.filter.match(ga))&&
4===h.length?h[0].substr(4)+","+Number(h[2].substr(4))+","+Number(h[1].substr(4))+","+h[3].substr(4)+","+(c?c.x:0)+","+(c?c.y:0):null);var a=(h||"").replace(/[^\d\-\.e,]/g,"").split(","),f=(h=6<=a.length)?Number(a[0]):1,d=h?Number(a[1]):0,e=h?Number(a[2]):0,i=h?Number(a[3]):1,c=g?c||{skewY:0}:{skewY:0},l=0>c.scaleX;c.x=h?Number(a[4]):0;c.y=h?Number(a[5]):0;c.scaleX=Math.sqrt(f*f+d*d);c.scaleY=Math.sqrt(i*i+e*e);c.rotation=f||d?Math.atan2(d,f):c.rotation||0;c.skewX=e||i?Math.atan2(e,i)+c.rotation:
c.skewX||0;Math.abs(c.skewX)>Math.PI/2&&(l?(c.scaleX*=-1,c.skewX+=0>=c.rotation?Math.PI:-Math.PI,c.rotation+=0>=c.rotation?Math.PI:-Math.PI):(c.scaleY*=-1,c.skewX+=0>=c.skewX?Math.PI:-Math.PI));if(1E-6>c.rotation&&-1E-6<c.rotation&&(f||d))c.rotation=0;if(1E-6>c.skewX&&-1E-6<c.skewX&&(d||e))c.skewX=0;g&&(b._gsTransform=c);return c},ja={width:["Left","Right"],height:["Top","Bottom"]},ka=["marginLeft","marginRight","marginTop","marginBottom"],y=function(b,a,g,c,h){if("px"===c||!c)return g;if("auto"===
c||!g)return 0;var f=fa.test(a),d=b,e=B.style,i=0>g;i&&(g=-g);e.cssText="border-style:solid; border-width:0; position:absolute; line-height:0;";"%"===c||"em"===c||!d.appendChild?(d=b.parentNode||A.body,e[f?"width":"height"]=g+c):e[f?"borderLeftWidth":"borderTopWidth"]=g+c;d.appendChild(B);f=parseFloat(B[f?"offsetWidth":"offsetHeight"]);d.removeChild(B);0===f&&!h&&(f=y(b,a,g,c,!0));return i?-f:f},N=function(b,a){if(null==b||""===b||"auto"===b||"auto auto"===b)b="0 0";var a=a||{},g=-1!==b.indexOf("left")?
"0%":-1!==b.indexOf("right")?"100%":b.split(" ")[0],c=-1!==b.indexOf("top")?"0%":-1!==b.indexOf("bottom")?"100%":b.split(" ")[1];null==c?c="0":"center"===c&&(c="50%");"center"===g&&(g="50%");a.oxp=-1!==g.indexOf("%");a.oyp=-1!==c.indexOf("%");a.oxr="="===g.charAt(1);a.oyr="="===c.charAt(1);a.ox=parseFloat(g.replace(w,""));a.oy=parseFloat(c.replace(w,""));return a},I=function(b,a){return null==b?a:"string"===typeof b&&1===b.indexOf("=")?Number(b.split("=").join(""))+a:Number(b)},J=function(b,a){var g=
-1===b.indexOf("rad")?z:1,c=1===b.indexOf("="),b=Number(b.replace(w,""))*g;return c?b+a:b},E={aqua:[0,255,255],lime:[0,255,0],silver:[192,192,192],black:[0,0,0],maroon:[128,0,0],teal:[0,128,128],blue:[0,0,255],navy:[0,0,128],white:[255,255,255],fuchsia:[255,0,255],olive:[128,128,0],yellow:[255,255,0],orange:[255,165,0],gray:[128,128,128],purple:[128,0,128],green:[0,128,0],red:[255,0,0],pink:[255,192,203],cyan:[0,255,255],transparent:[255,255,255,0]};u._onInitTween=function(b,a,g){if(!b.nodeType)return!1;
this._target=b;this._tween=g;this._classData=this._transform=null;S=a.autoRound;var c=this._style=b.style,h=F(b,""),f,d;if(T&&""===c.zIndex&&(d=p(b,"zIndex",h),"auto"===d||""===d))c.zIndex=0;"string"===typeof a?(f=c.cssText,g=H(b,h),c.cssText=f+";"+a,d=$(g,H(b)),!x&&da.test(a)&&(d.opacity=parseFloat(RegExp.$1)),a=d,c.cssText=f):a.className&&(f=b.className,this._classData={b:f,e:"="!==a.className.charAt(1)?a.className:"+"===a.className.charAt(0)?b.className+" "+a.className.substr(2):b.className.split(a.className.substr(2)).join(""),
props:[]},g._duration?(g=H(b,h),b.className=this._classData.e,a=$(g,H(b),a,this._classData),b.className=f):a={});this._parseVars(a,b,h,a.suffixMap||m.suffixMap);return!0};u._parseVars=function(b,a,g,c){var h=this._style,f,d,e,i,l,s,k;for(f in b)if(d=b[f],"transform"===f||f===q)this._parseTransform(a,d,g,c);else if(aa[f]||"transformOrigin"===f)this._parseTransform(a,b,g,c);else{if("alpha"===f||"autoAlpha"===f)f="opacity";else if("margin"===f||"padding"===f){d=(d+"").split(" ");l=d.length;e={};e[f+
"Top"]=d[0];e[f+"Right"]=1<l?d[1]:d[0];e[f+"Bottom"]=4===l?d[2]:d[0];e[f+"Left"]=4===l?d[3]:2===l?d[1]:d[0];this._parseVars(e,a,g,c);continue}else if("backgroundPosition"===f||"backgroundSize"===f){e=N(d);k=N(i=p(a,f,g));this._firstPT=e={_next:this._firstPT,t:h,p:f,b:i,f:!1,n:"css_"+f,type:3,s:k.ox,c:e.oxr?e.ox:e.ox-k.ox,ys:k.oy,yc:e.oyr?e.oy:e.oy-k.oy,sfx:e.oxp?"%":"px",ysfx:e.oyp?"%":"px",r:!e.oxp&&!1!==b.autoRound};e.e=e.s+e.c+e.sfx+" "+(e.ys+e.yc)+e.ysfx;continue}else if("border"===f){d=(d+"").split(" ");
this._parseVars({borderWidth:d[0],borderStyle:d[1]||"none",borderColor:d[2]||"#000000"},a,g,c);continue}else if("bezier"===f){this._parseBezier(d,a,g,c);continue}else if("autoRound"===f)continue;i=p(a,f,g);i=null!=i?i+"":"";this._firstPT=e={_next:this._firstPT,t:h,p:f,b:i,f:!1,n:"css_"+f,sfx:"",r:!1,type:0};"opacity"===f&&null!=b.autoAlpha&&("1"===i&&"hidden"===p(a,"visibility",g)&&(i=e.b="0"),this._firstPT=e._prev={_next:e,t:h,p:"visibility",f:!1,n:"css_visibility",r:!1,type:-1,b:0!==Number(i)?"visible":
"hidden",i:"visible",e:0===Number(d)?"hidden":"visible"},this._overwriteProps.push("css_visibility"));l="string"===typeof d;if("color"===f||"fill"===f||"stroke"===f||-1!==f.indexOf("Color")||l&&!d.indexOf("rgb(")){if(l=Y(i),d=Y(d),e.e=e.i=(3<d.length?"rgba(":"rgb(")+d.join(",")+")",e.b=(3<l.length?"rgba(":"rgb(")+l.join(",")+")",e.s=Number(l[0]),e.c=Number(d[0])-e.s,e.gs=Number(l[1]),e.gc=Number(d[1])-e.gs,e.bs=Number(l[2]),e.bc=Number(d[2])-e.bs,e.type=1,3<l.length||3<d.length)x?(e.as=4>l.length?
1:Number(l[3]),e.ac=(4>d.length?1:Number(d[3]))-e.as,e.type=2):(0==d[3]&&(e.e=e.i="transparent",e.type=-1),0==l[3]&&(e.b="transparent"))}else{s=i.replace(K,"");if(""===i||"auto"===i)if("width"===f||"height"===f){var r=f;s=a;k=g;i=parseFloat("width"===r?s.offsetWidth:s.offsetHeight);var r=ja[r],O=r.length;for(k=k||F(s,null);-1<--O;)i-=parseFloat(p(s,"padding"+r[O],k,!0))||0,i-=parseFloat(p(s,"border"+r[O]+"Width",k,!0))||0;k=i;s="px"}else k="opacity"!==f?0:1,s="";else k=-1===i.indexOf(" ")?parseFloat(i.replace(w,
"")):NaN;l?(l="="===d.charAt(1),i=d.replace(K,""),d=-1===d.indexOf(" ")?parseFloat(d.replace(w,"")):NaN):(l=!1,i="");""===i&&(i=c[f]||s);e.e=d||0===d?(l?d+k:d)+i:b[f];if(s!==i&&""!==i&&(d||0===d))if(k||0===k)if(k=y(a,f,k,s),"%"===i?(k/=y(a,f,100,"%")/100,100<k&&(k=100)):"em"===i?k/=y(a,f,1,"em"):(d=y(a,f,d,i),i="px"),l&&(d||0===d))e.e=d+k+i;if((k||0===k)&&(d||0===d)&&(e.c=l?d:d-k))if(e.s=k,e.sfx=i,"opacity"===f)x||(e.type=4,e.p="filter",e.b="alpha(opacity="+100*e.s+")",e.e="alpha(opacity="+100*(e.s+
e.c)+")",e.dup=null!=b.autoAlpha,this._style.zoom=1);else{if(!1!==S&&("px"===i||"zIndex"===f))e.r=!0}else e.type=-1,e.i="display"===f&&"none"===e.e?e.b:e.e,e.s=e.c=0}this._overwriteProps.push("css_"+f);e._next&&(e._next._prev=e)}};u._parseTransform=function(b,a,g){if(!this._transform){var c=this._transform=G(b,g,!0),h=this._style,f,d,e;if("object"===typeof a){f={scaleX:I(null!=a.scaleX?a.scaleX:a.scale,c.scaleX),scaleY:I(null!=a.scaleY?a.scaleY:a.scale,c.scaleY),x:I(a.x,c.x),y:I(a.y,c.y)};null!=a.shortRotation?
(f.rotation="number"===typeof a.shortRotation?a.shortRotation*z:J(a.shortRotation,c.rotation),d=(f.rotation-c.rotation)%(2*Math.PI),d!==d%Math.PI&&(d+=Math.PI*(0>d?2:-2)),f.rotation=c.rotation+d):f.rotation=null==a.rotation?c.rotation:"number"===typeof a.rotation?a.rotation*z:J(a.rotation,c.rotation);f.skewX=null==a.skewX?c.skewX:"number"===typeof a.skewX?a.skewX*z:J(a.skewX,c.skewX);f.skewY=null==a.skewY?c.skewY:"number"===typeof a.skewY?a.skewY*z:J(a.skewY,c.skewY);if(d=f.skewY-c.skewY)f.skewX+=
d,f.rotation+=d;1E-6>f.skewY&&-1E-6<f.skewY&&(f.skewY=0);1E-6>f.skewX&&-1E-6<f.skewX&&(f.skewX=0);1E-6>f.rotation&&-1E-6<f.rotation&&(f.rotation=0);if(null!=(a=a.transformOrigin))q?(e=q+"Origin",this._firstPT=a={_next:this._firstPT,t:h,p:e,s:0,c:0,n:e,f:!1,r:!1,b:h[e],e:a,i:a,type:-1,sfx:""},a._next&&(a._next._prev=a)):N(a,c)}else if("string"===typeof a&&q)d=h[q],h[q]=a,f=G(b,null,!1),h[q]=d;else return;if(q){if(U&&(T=!0,""===h.WebkitBackfaceVisibility&&(h.WebkitBackfaceVisibility="hidden"),""===
h.zIndex&&(d=p(b,"zIndex",g),"auto"===d||""===d)))h.zIndex=0}else h.zoom=1;for(e in aa)if((c[e]!==f[e]||null!=D[e])&&"shortRotation"!==e&&"scale"!==e)this._firstPT=a={_next:this._firstPT,t:c,p:e,s:c[e],c:f[e]-c[e],n:e,f:!1,r:!1,b:c[e],e:f[e],type:0,sfx:0},a._next&&(a._next._prev=a),this._overwriteProps.push("css_"+e)}};u._parseBezier=function(b,a,g,c){if(window.com.greensock.plugins.BezierPlugin){b instanceof Array&&(b={values:b});var h=b.values||[],f=h.length,d=[],e=this._bezier={_pt:[]},i=e._proxy=
{},l=0,s=0,k={},r=f-1,q=D,t=e._plugin=new window.com.greensock.plugins.BezierPlugin,n,j,p,m,u;for(n=0;n<f;n++){m={};this._transform=null;p=this._firstPT;this._parseVars(D=h[n],a,g,c);j=this._firstPT;if(0===n){for(u=this._transform;j!==p;)i[j.p]=j.s,e._pt[s++]=k[j.p]=j,1===j.type||2===j.type?(i[j.p+"_g"]=j.gs,i[j.p+"_b"]=j.bs,2===j.type&&(i[j.p+"_a"]=j.as)):3===j.type&&(i[j.p+"_y"]=j.ys),j=j._next;j=this._firstPT}else this._firstPT=p,p._prev&&(p._prev._next=null),p=p._prev=null;for(;j!==p;)k[j.p]&&
(m[j.p]=j.s+j.c,n===r&&(k[j.p].e=j.e),1===j.type||2===j.type?(m[j.p+"_g"]=j.gs+j.gc,m[j.p+"_b"]=j.bs+j.bc,2===j.type&&(m[j.p+"_a"]=j.as+j.ac)):3===j.type&&(m[j.p+"_y"]=j.ys+j.yc),0===n&&(j.c=j.ac=j.gc=j.bc=j.yc=0)),j=j._next;d[l++]=m}this._transform=u;D=q;b.values=d;0===b.autoRotate&&(b.autoRotate=!0);b.autoRotate&&!(b.autoRotate instanceof Array)&&(n=!0==b.autoRotate?0:Number(b.autoRotate)*Math.PI/180,b.autoRotate=null!=d[0].left?[["left","top","rotation",n,!0]]:null!=d[0].x?[["x","y","rotation",
n,!0]]:!1);if((e._autoRotate=b.autoRotate)&&!u)this._transform=G(a,g,!0);t._onInitTween(i,b,this._tween);b.values=h}else console.log("Error: BezierPlugin not loaded.")};u.setRatio=function(b){var a=this._firstPT,g=this._bezier,c=1E-6,h,f;if(g){g._plugin.setRatio(b);var d=g._pt,e=g._proxy;for(f=d.length;-1<--f;)a=d[f],a.s=e[a.p],1===a.type||2===a.type?(a.gs=e[a.p+"_g"],a.bs=e[a.p+"_b"],2===a.type&&(a.as=e[a.p+"_a"])):3===a.type&&(a.ys=e[a.p+"_y"]);g._autoRotate&&(this._transform.rotation=e.rotation)}if(1===
b&&(this._tween._time===this._tween._duration||0===this._tween._time))for(;a;)a.t[a.p]=a.e,4===a.type&&1===a.s+a.c&&(this._style.removeAttribute("filter"),p(this._target,"filter")&&(a.t[a.p]=a.e)),a=a._next;else if(b||!(this._tween._time===this._tween._duration||0===this._tween._time))for(;a;)h=a.c*b+a.s,a.r?h=0<h?h+0.5>>0:h-0.5>>0:h<c&&h>-c&&(h=0),a.type?1===a.type?a.t[a.p]="rgb("+(h>>0)+", "+(a.gs+b*a.gc>>0)+", "+(a.bs+b*a.bc>>0)+")":2===a.type?a.t[a.p]="rgba("+(h>>0)+", "+(a.gs+b*a.gc>>0)+", "+
(a.bs+b*a.bc>>0)+", "+(a.as+b*a.ac)+")":-1===a.type?a.t[a.p]=a.i:3===a.type?(g=a.ys+b*a.yc,a.r&&(g=0<g?g+0.5>>0:g-0.5>>0),a.t[a.p]=h+a.sfx+" "+g+a.ysfx):(a.dup&&(a.t.filter=a.t.filter||"alpha(opacity=100)"),a.t.filter=-1===a.t.filter.indexOf("opacity")?a.t.filter+(" alpha(opacity="+(100*h>>0)+")"):a.t.filter.replace(L,"opacity="+(100*h>>0))):a.t[a.p]=h+a.sfx,a=a._next;else for(;a;)a.t[a.p]=a.b,4===a.type&&1===a.s&&(this._style.removeAttribute("filter"),p(this._target,"filter")&&(a.t[a.p]=a.b)),a=
a._next;if(this._transform)if(a=this._transform,q&&!a.rotation&&!a.skewX)this._style[q]=(a.x||a.y?"translate("+a.x+"px,"+a.y+"px) ":"")+(1!==a.scaleX||1!==a.scaleY?"scale("+a.scaleX+","+a.scaleY+")":"")||"translate(0px,0px)";else{var d=q?a.rotation:-a.rotation,i=q?d-a.skewX:d+a.skewX,g=Math.cos(d)*a.scaleX,d=Math.sin(d)*a.scaleX,e=Math.sin(i)*-a.scaleY,i=Math.cos(i)*a.scaleY,l;g<c&&g>-c&&(g=0);d<c&&d>-c&&(d=0);e<c&&e>-c&&(e=0);i<c&&i>-c&&(i=0);if(q)this._style[q]="matrix("+g+","+d+","+e+","+i+","+
a.x+","+a.y+")";else if(l=this._target.currentStyle){c=d;d=-e;e=-c;c=l.filter;this._style.filter="";f=this._target.offsetWidth;h=this._target.offsetHeight;var s="absolute"!==l.position,k="progid:DXImageTransform.Microsoft.Matrix(M11="+g+", M12="+d+", M21="+e+", M22="+i,r=a.x,m=a.y,t,n;null!=a.ox&&(t=(a.oxp?0.01*f*a.ox:a.ox)-f/2,n=(a.oyp?0.01*h*a.oy:a.oy)-h/2,r=t-(t*g+n*d)+a.x,m=n-(t*e+n*i)+a.y);if(s)t=f/2,n=h/2,k+=", Dx="+(t-(t*g+n*d)+r)+", Dy="+(n-(t*e+n*i)+m)+")";else{var j=8>V?1:-1;t=a.ieOffsetX||
0;n=a.ieOffsetY||0;a.ieOffsetX=Math.round((f-((0>g?-g:g)*f+(0>d?-d:d)*h))/2+r);a.ieOffsetY=Math.round((h-((0>i?-i:i)*h+(0>e?-e:e)*f))/2+m);for(f=0;4>f;f++)r=ka[f],h=l[r],h=-1!==h.indexOf("px")?parseFloat(h):y(this._target,r,parseFloat(h),h.replace(K,""))||0,m=h!==a[r]?2>f?-a.ieOffsetX:-a.ieOffsetY:2>f?t-a.ieOffsetX:n-a.ieOffsetY,this._style[r]=(a[r]=Math.round(h-m*(0===f||2===f?1:j)))+"px";k+=", sizingMethod='auto expand')"}this._style.filter=-1!==c.indexOf("DXImageTransform.Microsoft.Matrix(")?c.replace(ha,
k):k+" "+c;if(0===b||1===b)if(1===g&&0===d&&0===e&&1===i&&(!s||-1!==k.indexOf("Dx=0, Dy=0")))(!L.test(c)||100===parseFloat(RegExp.$1))&&this._style.removeAttribute("filter")}}if(this._classData)if(a=this._classData,1===b&&(this._tween._time===this._tween._duration||0===this._tween._time)){for(f=a.props.length;-1<--f;)this._style[a.props[f]]="";this._target.className=a.e}else this._target.className!==a.b&&(this._target.className=a.b)};u._kill=function(b){var a=b,g;if(b.autoAlpha||b.alpha){a={};for(g in b)a[g]=
b[g];a.opacity=1;a.autoAlpha&&(a.visibility=1)}return C.prototype._kill.call(this,a)};C.activate([m]);return m},!0)});window._gsDefine&&_gsQueue.pop()();

/*
 * jquery.inview
*/
(function(d){var p={},e,a,h=document,i=window,f=h.documentElement,j=d.expando;d.event.special.inview={add:function(a){p[a.guid+"-"+this[j]]={data:a,$element:d(this)}},remove:function(a){try{delete p[a.guid+"-"+this[j]]}catch(d){}}};d(i).bind("scroll resize",function(){e=a=null});!f.addEventListener&&f.attachEvent&&f.attachEvent("onfocusin",function(){a=null});setInterval(function(){var k=d(),j,n=0;d.each(p,function(a,b){var c=b.data.selector,d=b.$element;k=k.add(c?d.find(c):d)});if(j=k.length){var b;
    if(!(b=e)){var g={height:i.innerHeight,width:i.innerWidth};if(!g.height&&((b=h.compatMode)||!d.support.boxModel))b="CSS1Compat"===b?f:h.body,g={height:b.clientHeight,width:b.clientWidth};b=g}e=b;for(a=a||{top:i.pageYOffset||f.scrollTop||h.body.scrollTop,left:i.pageXOffset||f.scrollLeft||h.body.scrollLeft};n<j;n++)if(d.contains(f,k[n])){b=d(k[n]);var l=b.height(),m=b.width(),c=b.offset(),g=b.data("inview");if(!a||!e)break;c.top+l>a.top&&c.top<a.top+e.height&&c.left+m>a.left&&c.left<a.left+e.width?
        (m=a.left>c.left?"right":a.left+e.width<c.left+m?"left":"both",l=a.top>c.top?"bottom":a.top+e.height<c.top+l?"top":"both",c=m+"-"+l,(!g||g!==c)&&b.data("inview",c).trigger("inview",[!0,m,l])):g&&b.data("inview",!1).trigger("inview",[!1])}}},250)})(jQuery);



(function($) {

    $.fn.fitSwiffy = function() {

        var div = document.createElement('div'),
            ref = document.getElementsByTagName('base')[0] || document.getElementsByTagName('script')[0];

        div.className = 'fit-swiffy-style';
        div.innerHTML = '­<style> \
        .fluid-width-swiffy-wrapper { \
        width: 100%; \
        position: relative; \
        padding: 0; \
        } \
        \
        .fluid-width-swiffy-wrapper > div { \
            position: absolute; \
            top: 0; \
            left: 0; \
            width: 100%; \
            height: 100%; \
            } \
        </style>';

        ref.parentNode.insertBefore(div, ref);

        return this.each(function() {

            var selectors = [".swiffy"];

            var $allSwiffys = $(this)
                .find(selectors.join(','));

            $allSwiffys.each(function() {
                var $this = $(this),
                    height = $this.height(),
                    aspectRatio = height / $this.width();
                $this.wrap('<div class="fluid-width-swiffy-wrapper" />')
                    .parent('.fluid-width-swiffy-wrapper')
                    .css('padding-top', (aspectRatio * 100) + "%");
                $this.removeAttr('height')
                    .removeAttr('width')
                .css({
                        width: '',
                        height: ''
                    });;
            });
        });

    }
})(jQuery);


(function(c,n){var l="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==";c.fn.imagesLoaded=function(f){function m(){var b=c(i),a=c(h);d&&(h.length?d.reject(e,b,a):d.resolve(e));c.isFunction(f)&&f.call(g,e,b,a)}function j(b,a){b.src===l||-1!==c.inArray(b,k)||(k.push(b),a?h.push(b):i.push(b),c.data(b,"imagesLoaded",{isBroken:a,src:b.src}),o&&d.notifyWith(c(b),[a,e,c(i),c(h)]),e.length===k.length&&(setTimeout(m),e.unbind(".imagesLoaded")))}var g=this,d=c.isFunction(c.Deferred)?c.Deferred():
    0,o=c.isFunction(d.notify),e=g.find("img").add(g.filter("img")),k=[],i=[],h=[];c.isPlainObject(f)&&c.each(f,function(b,a){if("callback"===b)f=a;else if(d)d[b](a)});e.length?e.bind("load.imagesLoaded error.imagesLoaded",function(b){j(b.target,"error"===b.type)}).each(function(b,a){var d=a.src,e=c.data(a,"imagesLoaded");if(e&&e.src===d)j(a,e.isBroken);else if(a.complete&&a.naturalWidth!==n)j(a,0===a.naturalWidth||0===a.naturalHeight);else if(a.readyState||a.complete)a.src=l,a.src=d}):m();return d?d.promise(g):
    g}})(jQuery);


/*
 * Curtain.js - Create an unique page transitioning system
 * ---
 * Version: 2
 * Copyright 2011, Victor Coulon (http://victorcoulon.fr)
 * Released under the MIT Licence
 */

(function ( $, window, document, undefined ) {

    var pluginName = 'curtain',
        defaults = {
            scrollSpeed: 400,
            bodyHeight: 0,
            linksArray: [],
            mobile: false,
            scrollButtons: {},
            controls: null,
            curtainLinks: null,
            enableKeys: true,
            subscribeButton: true,
            easing: 'swing',
            disabled: false,
            nextSlide: function() {},
            prevSlide: function() {}
        };

    // The actual plugin constructor
    function Plugin( element, options ) {
        var self = this;

        // Public attributes
        this.element = element;
        this.options = $.extend( {}, defaults, options) ;

        this._defaults = defaults;
        this._name = pluginName;
        this._ignoreHashChange = false;

        this.init();
    }

    Plugin.prototype = {
        init: function () {
            var self = this;
            // Cache element
            this.$element = $(this.element);
            this.$li = $(this.element).find('>li');
            this.$liLength = this.$li.length;
            self.$windowHeight = $(window).height();
            self.$elDatas = {};
            self.$document = $(document);
            self.$window = $(window);


            self.webkit = (navigator.userAgent.indexOf('Chrome') > -1 || navigator.userAgent.indexOf("Safari") > -1);
            $.Android = (navigator.userAgent.match(/Android/i));
            $.iPhone = ((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)));
            $.iPad = ((navigator.userAgent.match(/iPad/i)));
            $.iOs4 = (/OS [1-4]_[0-9_]+ like Mac OS X/i.test(navigator.userAgent));

            if($.iPhone || $.iPad || $.Android || self.options.disabled){
                this.options.mobile = true;
                this.$li.css({position:'relative'});
                this.$element.find('.fixed').css({position:'absolute'});
            }

            if(this.options.mobile){
                this.scrollEl =  this.$element;
            } else if($.browser.mozilla || $.browser.msie) {
                this.scrollEl = $('html');
            } else {
                this.scrollEl = $('body');
            }

            if(self.options.controls){
                self.options.scrollButtons['up'] =  $(self.options.controls).find('[href="#up"]');
                self.options.scrollButtons['down'] =  $(self.options.controls).find('[href="#down"]');

                if(!$.iOs4 && ($.iPhone || $.iPad)){
                    self.$element.css({
                        position:'fixed',
                        top:0,
                        left:0,
                        right:0,
                        bottom:0,
                        '-webkit-overflow-scrolling':'touch',
                        overflow:'auto'
                    });
                    $(self.options.controls).css({position:'absolute'});
                }
            }

            // When all image is loaded
            var callbackImageLoaded = function(){
                $("html,body").animate({ scrollTop: 0 }, "fast");
                self.setDimensions();
                self.$li.eq(0).addClass('current');

                self.setCache();

                if(!self.options.mobile){
                    if(self.$li.eq(1).length)
                        self.$li.eq(1).nextAll().addClass('curtain-hidden');
                }

                self.setEvents();
                self.setDimensions();
                self.scrollEvent();
                self.setLinks();
                self.isHashIsOnList(location.hash.substring(1));
            };

            if(self.$element.find('img').length)
                self.imageLoaded(callbackImageLoaded);
            else
                callbackImageLoaded();

        },
        // Events
        scrollToPosition: function (direction){
            var position = null,
                self = this;

            if(self.scrollEl.is(':animated')){
                return false;
            }

            if(direction === 'up' || direction == 'down'){
                // Keyboard event
                var $next = (direction === 'up') ? self.$current.prev() : self.$current.next();

                // Step in the current panel ?
                if(self.$step){

                    if(!self.$current.find('.current-step').length){
                        self.$step.eq(0).addClass('current-step');
                    }

                    var $nextStep = (direction === 'up') ? self.$current.find('.current-step').prev('.step') : self.$current.find('.current-step').next('.step');

                    if($nextStep.length) {
                        position = (self.options.mobile) ? $nextStep.position().top + self.$elDatas[self.$current.index()]['data-position'] : $nextStep.position().top + self.$elDatas[self.$current.index()]['data-position'];
                    }
                }

                position = position || ((self.$elDatas[$next.index()] === undefined) ? null : self.$elDatas[$next.index()]['data-position']);

                if(position !== null){
                    self.scrollEl.animate({
                        scrollTop: position
                    }, self.options.scrollSpeed, self.options.easing);
                }

            } else if(direction === 'top'){
                self.scrollEl.animate({
                    scrollTop:0
                }, self.options.scrollSpeed, self.options.easing);
            } else if(direction === 'bottom'){
                self.scrollEl.animate({
                    scrollTop:self.options.bodyHeight
                }, self.options.scrollSpeed, self.options.easing);
            } else {
                var index = $("#"+direction).index(),
                    speed = Math.abs(self.currentIndex-index) * (this.options.scrollSpeed*4) / self.$liLength;

                self.scrollEl.animate({
                    scrollTop:self.$elDatas[index]['data-position'] || null
                }, (speed <= self.options.scrollSpeed) ? self.options.scrollSpeed : speed, this.options.easing);
            }

        },
        scrollEvent: function() {
            var self = this,
                docTop = self.$document.scrollTop();

             self.setCache();

            if(docTop < self.currentP && self.currentIndex > 0){
                // Scroll to top
                self._ignoreHashChange = true;

                if(self.$current.prev().attr('id'))
                    self.setHash(self.$current.prev().attr('id'));

                self.$current
                    .removeClass('current')
                    .css( (self.webkit) ? {'-webkit-transform': 'translateY(0px) translateZ(0)'} : {marginTop: 0} )
                    .nextAll().addClass('curtain-hidden').end()
                    .prev().addClass('current').removeClass('curtain-hidden');

                self.setCache();
                self.options.prevSlide();

            } else if(docTop < (self.currentP + self.currentHeight)){

                // Animate the current pannel during the scroll
                if(self.webkit)
                    self.$current.css({'-webkit-transform': 'translateY('+(-(docTop-self.currentP))+'px) translateZ(0)' });
                else
                    self.$current.css({marginTop: -(docTop-self.currentP) });

                // If there is a fixed element in the current panel
                if(self.$fixedLength){
                    var dataTop = parseInt(self.$fixed.attr('data-top'), 10);

                    if(docTop + self.$windowHeight >= self.currentP + self.currentHeight){
                        self.$fixed.css({
                            position: 'fixed'
                        });
                    } else {
                        self.$fixed.css({
                            position: 'absolute',
                            marginTop: Math.abs(docTop-self.currentP)
                        });
                    }
                }

                // If there is a step element in the current panel
                if(self.$stepLength){
                    $.each(self.$step, function(i,el){
                        if(($(el).position().top+self.currentP) <= docTop+5 && $(el).position().top + self.currentP + $(el).height() >= docTop+5){
                            if(!$(el).hasClass('current-step')){
                                self.$step.removeClass('current-step');
                                $(el).addClass('current-step');
                                return false;
                            }
                        }
                    });
                }


                if(self.parallaxBg){
                    self.$current.css({
                        'background-position-y': docTop * self.parallaxBg
                    });
                }

                if(self.$fade.length){
                    self.$fade.css({
                        'opacity': 1-(docTop/ self.$fade.attr('data-fade'))
                    });
                }

                if(self.$slowScroll.length){
                    self.$slowScroll.css({
                        'margin-top' : (docTop / self.$slowScroll.attr('data-slow-scroll'))
                    });
                }

            } else {
                // Scroll bottom
                self._ignoreHashChange = true;
                if(self.$current.next().attr('id'))
                    self.setHash(self.$current.next().attr('id'));

                self.$current.removeClass('current')
                    .addClass('curtain-hidden')
                    .next('li').addClass('current').next('li').removeClass('curtain-hidden');

                self.setCache();
                self.options.nextSlide();
            }

        },
        scrollMobileEvent: function() {
            var self = this,
                docTop = self.$element.scrollTop();

            if(docTop+10 < self.currentP && self.currentIndex > 0){

                // Scroll to top
                self._ignoreHashChange = true;

                if(self.$current.prev().attr('id'))
                    self.setHash(self.$current.prev().attr('id'));

                self.$current.removeClass('current').prev().addClass('current');
                self.setCache();
                self.options.prevSlide();
            } else if(docTop+10 < (self.currentP + self.currentHeight)){

                // If there is a step element in the current panel
                if(self.$stepLength){
                    $.each(self.$step, function(i,el){
                        if(($(el).position().top+self.currentP) <= docTop && (($(el).position().top+self.currentP) + $(el).outerHeight()) >= docTop){
                            if(!$(el).hasClass('current-step')){
                                self.$step.removeClass('current-step');
                                $(el).addClass('current-step');
                            }
                        }
                    });
                }

            } else {
                // Scroll bottom
                self._ignoreHashChange = true;
                if(self.$current.next().attr('id'))
                    self.setHash(self.$current.next().attr('id'));

                self.$current.removeClass('current').next().addClass('current');
                self.setCache();
                self.options.nextSlide();
            }


        },
        // Setters
        setDimensions: function(){
            var self = this,
                levelHeight = 0,
                cover = false,
                height = null;

            self.$windowHeight = self.$window.height();

            this.$li.each(function(index) {
                var $self = $(this);
                cover = $self.hasClass('cover');

                $self.css({height:"auto"});

                if(cover){
                    $self.css({height: self.$windowHeight, zIndex: 999-index})
                        .attr('data-height',self.$windowHeight)
                        .attr('data-position',levelHeight);

                    self.$elDatas[$self.index()] = {
                        'data-height': parseInt(self.$windowHeight,10),
                        'data-position': parseInt(levelHeight, 10)
                    };

                    levelHeight += self.$windowHeight;

                } else{

                    //height = ($self.outerHeight() <= self.$windowHeight) ? self.$windowHeight : $self.outerHeight();

                    if ($self.outerHeight() <= self.$windowHeight) {
                        height = self.$windowHeight;
                        $self.css({minHeight: height, height:"auto"});
                    } else {
                        height = $self.outerHeight();
                        $self.css({height: height});
                    }

                    $self.css({zIndex: 999-index})
                        .attr('data-height',height)
                        .attr('data-position',levelHeight);


                    self.$elDatas[$self.index()] = {
                        'data-height': parseInt(height, 10),
                        'data-position': parseInt(levelHeight, 10)
                    };

                    levelHeight += height;
                }

                if($self.find('.fixed').length){
                    var top = $self.find('.fixed').css('top');
                    $self.find('.fixed').attr('data-top', top);
                }
            });
            if(!this.options.mobile)
                this.setBodyHeight();
        },
        setEvents: function() {
            var self = this;

            $(window).on('resize', function(){
                self.setDimensions();
                self.scrollEvent();
            });

            if(self.options.mobile) {
                self.$element.on('scroll', function(){
                    self.scrollMobileEvent();
                });
            } else {
                self.$window.on('scroll', function(){
                    self.scrollEvent();
                });
            }

            if(self.options.enableKeys) {
                self.$document.on('keydown', function(e){
                    if(e.keyCode === 38 || e.keyCode === 37) {
                        self.scrollToPosition('up');
                        e.preventDefault();
                        return false;
                    }
                    if(e.keyCode === 40 || e.keyCode === 39){
                        self.scrollToPosition('down');
                        e.preventDefault();
                        return false;
                    }
                    // Home button
                    if(e.keyCode === 36){
                        self.scrollToPosition('top');
                        e.preventDefault();
                        return false;
                    }
                    // End button
                    if(e.keyCode === 35){
                        self.scrollToPosition('bottom');
                        e.preventDefault();
                        return false;
                    }
                });
            }
            if(self.options.subscribeButton) {
                $("a[href=#subscribe]").unbind().on('click', function(e){
                    self.scrollToPosition('bottom');
                });
            }

            if(self.options.scrollButtons){
                if(self.options.scrollButtons.up){
                    self.options.scrollButtons.up.on('click', function(e){
                        e.preventDefault();
                        self.scrollToPosition('up');
                    });
                }
                if(self.options.scrollButtons.down){
                    self.options.scrollButtons.down.on('click', function(e){
                        e.preventDefault();
                        self.scrollToPosition('down');
                    });
                }
            }

            if(self.options.curtainLinks){
                $(self.options.curtainLinks).on('click', function(e){
                    e.preventDefault();
                    var href = $(this).attr('href');

                    if(!self.isHashIsOnList(href.substring(1)) && position)
                        return false;
                    var position = self.$elDatas[$(href).index()]['data-position'] || null;

                    if(position){
                        self.scrollEl.animate({
                            scrollTop:position
                        }, self.options.scrollSpeed, self.options.easing);
                    }
                    return false;
                });
            }

            self.$window.on("hashchange", function(event){

                if(self._ignoreHashChange === false){
                    self.isHashIsOnList(location.hash.substring(1));
                }
                self._ignoreHashChange = false;
            });
        },
        setBodyHeight: function(){
            var h = 0;
            for (var key in this.$elDatas) {
                var obj = this.$elDatas[key];
                h += obj['data-height'];
            }

            this.options.bodyHeight = h;
            $('body').height(h);
        },
        setLinks: function(){
            var self = this;
            this.$li.each(function() {
                var id = $(this).attr('id') || 0;
                self.options.linksArray.push(id);
            });
        },
        setHash: function(hash){
            // "HARD FIX"
            el = $('[href=#'+hash+']');
            el.parent().siblings('li').removeClass('active');
            el.parent().addClass('active');

            if(history.pushState) {
                history.pushState(null, null, '#'+hash);
            }
            else {
                location.hash = hash;
            }
        },
        setCache: function(){
            var self = this;
            self.$current = self.$element.find('.current');
            self.$fixed = self.$current.find('.fixed');
            self.$fixedLength = self.$fixed.length;
            self.$step = self.$current.find('.step');
            self.$stepLength = self.$step.length;
            self.currentIndex = self.$current.index();
            self.currentP = self.$elDatas[self.currentIndex]['data-position'];
            self.currentHeight = self.$elDatas[self.currentIndex]['data-height'];

            self.parallaxBg = self.$current.attr('data-parallax-background');
            self.$fade = self.$current.find('[data-fade]');
            self.$slowScroll = self.$current.find('[data-slow-scroll]');

        },
        // Utils
        isHashIsOnList: function(hash){
            var self = this;
            $.each(self.options.linksArray, function(i,val){
                if(val === hash){
                    self.scrollToPosition(hash);
                    return false;
                }
            });
        },
        readyElement: function(el,callback){
            var interval = setInterval(function(){
                if(el.length){
                    callback(el.length);
                    clearInterval(interval);
                }
            },60);
        },
        imageLoaded: function(callback){
            var self = this;
            var elems = self.$element.find('img');

            var dfd = $(self.$element).imagesLoaded();
            dfd.always(function(){
                callback.call(elems,self);
            });

        }
    };



    $.fn[pluginName] = function ( options ) {
        return this.each(function () {
            if (!$.data(this, 'plugin_' + pluginName)) {
                $.data(this, 'plugin_' + pluginName, new Plugin( this, options ));
            }
        });
    };


})( jQuery, window, document );