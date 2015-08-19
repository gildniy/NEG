


<!DOCTYPE html>
<!--[if IE 9]> <html class="ie9" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <!--<![endif]-->
<!--[if gt IE 9]><!--> <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <!--<![endif]-->

<head>

    <meta name="theme-color" content="#f08f00">
    <link rel="icon" sizes="192x192" href="/favicon-hi-res.png">

    <title>Online investing, equity crowdfunding, business finance : Crowdcube</title>
    <meta name="description" content="Online investing via crowdfunding platform, raise business finance through Crowdcube, the world&#039;s first equity crowdfunding platform, online investing just got easier " />
    <meta name="keywords" content="Crowdfunding Crowdcube, investment, business, start-up, start up, entrepreneur, small business, equity, crowdfunding, angel investors, business finance" />

    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1">
    <meta charset="utf-8"><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"UwcEV1JQGwUBUlRaBwY="};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o?o:e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({QJf3ax:[function(t,e){function n(t){function e(e,n,a){t&&t(e,n,a),a||(a={});for(var c=s(e),f=c.length,u=i(a,o,r),d=0;f>d;d++)c[d].apply(u,n);return u}function a(t,e){f[t]=s(t).concat(e)}function s(t){return f[t]||[]}function c(){return n(e)}var f={};return{on:a,emit:e,create:c,listeners:s,_events:f}}function r(){return{}}var o="nr@context",i=t("gos");e.exports=n()},{gos:"7eSDFh"}],ee:[function(t,e){e.exports=t("QJf3ax")},{}],3:[function(t){function e(t){try{i.console&&console.log(t)}catch(e){}}var n,r=t("ee"),o=t(1),i={};try{n=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(i.console=!0,-1!==n.indexOf("dev")&&(i.dev=!0),-1!==n.indexOf("nr_dev")&&(i.nrDev=!0))}catch(a){}i.nrDev&&r.on("internal-error",function(t){e(t.stack)}),i.dev&&r.on("fn-err",function(t,n,r){e(r.stack)}),i.dev&&(e("NR AGENT IN DEVELOPMENT MODE"),e("flags: "+o(i,function(t){return t}).join(", ")))},{1:23,ee:"QJf3ax"}],4:[function(t){function e(t,e,n,i,s){try{c?c-=1:r("err",[s||new UncaughtException(t,e,n)])}catch(f){try{r("ierr",[f,(new Date).getTime(),!0])}catch(u){}}return"function"==typeof a?a.apply(this,o(arguments)):!1}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function n(t){r("err",[t,(new Date).getTime()])}var r=t("handle"),o=t(6),i=t("ee"),a=window.onerror,s=!1,c=0;t("loader").features.err=!0,t(5),window.onerror=e;try{throw new Error}catch(f){"stack"in f&&(t(1),t(2),"addEventListener"in window&&t(3),window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&!/CriOS/.test(navigator.userAgent)&&t(4),s=!0)}i.on("fn-start",function(){s&&(c+=1)}),i.on("fn-err",function(t,e,r){s&&(this.thrown=!0,n(r))}),i.on("fn-end",function(){s&&!this.thrown&&c>0&&(c-=1)}),i.on("internal-error",function(t){r("ierr",[t,(new Date).getTime(),!0])})},{1:10,2:9,3:7,4:11,5:3,6:24,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],5:[function(t){t("loader").features.ins=!0},{loader:"G9z0Bl"}],6:[function(t){function e(){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var n=t("ee"),r=t("handle"),o=t(1),i=t(2);t("loader").features.stn=!0,t(3),n.on("fn-start",function(t){var e=t[0];e instanceof Event&&(this.bstStart=Date.now())}),n.on("fn-end",function(t,e){var n=t[0];n instanceof Event&&r("bst",[n,e,this.bstStart,Date.now()])}),o.on("fn-start",function(t,e,n){this.bstStart=Date.now(),this.bstType=n}),o.on("fn-end",function(t,e){r("bstTimer",[e,this.bstStart,Date.now(),this.bstType])}),i.on("fn-start",function(){this.bstStart=Date.now()}),i.on("fn-end",function(t,e){r("bstTimer",[e,this.bstStart,Date.now(),"requestAnimationFrame"])}),n.on("pushState-start",function(){this.time=Date.now(),this.startPath=location.pathname+location.hash}),n.on("pushState-end",function(){r("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),"addEventListener"in window.performance&&(window.performance.addEventListener("webkitresourcetimingbufferfull",function(){r("bstResource",[window.performance.getEntriesByType("resource")]),window.performance.webkitClearResourceTimings()},!1),window.performance.addEventListener("resourcetimingbufferfull",function(){r("bstResource",[window.performance.getEntriesByType("resource")]),window.performance.clearResourceTimings()},!1)),document.addEventListener("scroll",e,!1),document.addEventListener("keypress",e,!1),document.addEventListener("click",e,!1)}},{1:10,2:9,3:8,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],7:[function(t,e){function n(t){i.inPlace(t,["addEventListener","removeEventListener"],"-",r)}function r(t){return t[1]}var o=(t(1),t("ee").create()),i=t(2)(o),a=t("gos");if(e.exports=o,n(window),"getPrototypeOf"in Object){for(var s=document;s&&!s.hasOwnProperty("addEventListener");)s=Object.getPrototypeOf(s);s&&n(s);for(var c=XMLHttpRequest.prototype;c&&!c.hasOwnProperty("addEventListener");)c=Object.getPrototypeOf(c);c&&n(c)}else XMLHttpRequest.prototype.hasOwnProperty("addEventListener")&&n(XMLHttpRequest.prototype);o.on("addEventListener-start",function(t){if(t[1]){var e=t[1];"function"==typeof e?this.wrapped=t[1]=a(e,"nr@wrapped",function(){return i(e,"fn-",null,e.name||"anonymous")}):"function"==typeof e.handleEvent&&i.inPlace(e,["handleEvent"],"fn-")}}),o.on("removeEventListener-start",function(t){var e=this.wrapped;e&&(t[1]=e)})},{1:24,2:25,ee:"QJf3ax",gos:"7eSDFh"}],8:[function(t,e){var n=(t(2),t("ee").create()),r=t(1)(n);e.exports=n,r.inPlace(window.history,["pushState"],"-")},{1:25,2:24,ee:"QJf3ax"}],9:[function(t,e){var n=(t(2),t("ee").create()),r=t(1)(n);e.exports=n,r.inPlace(window,["requestAnimationFrame","mozRequestAnimationFrame","webkitRequestAnimationFrame","msRequestAnimationFrame"],"raf-"),n.on("raf-start",function(t){t[0]=r(t[0],"fn-")})},{1:25,2:24,ee:"QJf3ax"}],10:[function(t,e){function n(t,e,n){t[0]=o(t[0],"fn-",null,n)}var r=(t(2),t("ee").create()),o=t(1)(r);e.exports=r,o.inPlace(window,["setTimeout","setInterval","setImmediate"],"setTimer-"),r.on("setTimer-start",n)},{1:25,2:24,ee:"QJf3ax"}],11:[function(t,e){function n(){f.inPlace(this,p,"fn-")}function r(t,e){f.inPlace(e,["onreadystatechange"],"fn-")}function o(t,e){return e}function i(t,e){for(var n in t)e[n]=t[n];return e}var a=t("ee").create(),s=t(1),c=t(2),f=c(a),u=c(s),d=window.XMLHttpRequest,p=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"];e.exports=a,window.XMLHttpRequest=function(t){var e=new d(t);try{a.emit("new-xhr",[],e),u.inPlace(e,["addEventListener","removeEventListener"],"-",o),e.addEventListener("readystatechange",n,!1)}catch(r){try{a.emit("internal-error",[r])}catch(i){}}return e},i(d,XMLHttpRequest),XMLHttpRequest.prototype=d.prototype,f.inPlace(XMLHttpRequest.prototype,["open","send"],"-xhr-",o),a.on("send-xhr-start",r),a.on("open-xhr-start",r)},{1:7,2:25,ee:"QJf3ax"}],12:[function(t){function e(t){var e=this.params,r=this.metrics;if(!this.ended){this.ended=!0;for(var i=0;c>i;i++)t.removeEventListener(s[i],this.listener,!1);if(!e.aborted){if(r.duration=(new Date).getTime()-this.startTime,4===t.readyState){e.status=t.status;var a=t.responseType,f="arraybuffer"===a||"blob"===a||"json"===a?t.response:t.responseText,u=n(f);if(u&&(r.rxSize=u),this.sameOrigin){var d=t.getResponseHeader("X-NewRelic-App-Data");d&&(e.cat=d.split(", ").pop())}}else e.status=0;r.cbTime=this.cbTime,o("xhr",[e,r,this.startTime])}}}function n(t){if("string"==typeof t&&t.length)return t.length;if("object"!=typeof t)return void 0;if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if("undefined"!=typeof FormData&&t instanceof FormData)return void 0;try{return JSON.stringify(t).length}catch(e){return void 0}}function r(t,e){var n=i(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.sameOrigin=n.sameOrigin}if(window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&!/CriOS/.test(navigator.userAgent)){t("loader").features.xhr=!0;var o=t("handle"),i=t(2),a=t("ee"),s=["load","error","abort","timeout"],c=s.length,f=t(1);t(4),t(3),a.on("new-xhr",function(){this.totalCbs=0,this.called=0,this.cbTime=0,this.end=e,this.ended=!1,this.xhrGuids={}}),a.on("open-xhr-start",function(t){this.params={method:t[0]},r(this,t[1]),this.metrics={}}),a.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),a.on("send-xhr-start",function(t,e){var r=this.metrics,o=t[0],i=this;if(r&&o){var f=n(o);f&&(r.txSize=f)}this.startTime=(new Date).getTime(),this.listener=function(t){try{"abort"===t.type&&(i.params.aborted=!0),("load"!==t.type||i.called===i.totalCbs&&(i.onloadCalled||"function"!=typeof e.onload))&&i.end(e)}catch(n){try{a.emit("internal-error",[n])}catch(r){}}};for(var u=0;c>u;u++)e.addEventListener(s[u],this.listener,!1)}),a.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),a.on("xhr-load-added",function(t,e){var n=""+f(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),a.on("xhr-load-removed",function(t,e){var n=""+f(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),a.on("addEventListener-end",function(t,e){e instanceof XMLHttpRequest&&"load"===t[0]&&a.emit("xhr-load-added",[t[1],t[2]],e)}),a.on("removeEventListener-end",function(t,e){e instanceof XMLHttpRequest&&"load"===t[0]&&a.emit("xhr-load-removed",[t[1],t[2]],e)}),a.on("fn-start",function(t,e,n){e instanceof XMLHttpRequest&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=(new Date).getTime()))}),a.on("fn-end",function(t,e){this.xhrCbStart&&a.emit("xhr-cb-time",[(new Date).getTime()-this.xhrCbStart,this.onload,e],e)})}},{1:"XL7HBI",2:13,3:11,4:7,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],13:[function(t,e){e.exports=function(t){var e=document.createElement("a"),n=window.location,r={};e.href=t,r.port=e.port;var o=e.href.split("://");return!r.port&&o[1]&&(r.port=o[1].split("/")[0].split("@").pop().split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=e.hostname||n.hostname,r.pathname=e.pathname,r.protocol=o[0],"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname),r.sameOrigin=!e.hostname||e.hostname===document.domain&&e.port===n.port&&e.protocol===n.protocol,r}},{}],14:[function(t,e){function n(t){return function(){r(t,[(new Date).getTime()].concat(i(arguments)))}}var r=t("handle"),o=t(1),i=t(2);"undefined"==typeof window.newrelic&&(newrelic=window.NREUM);var a=["setPageViewName","addPageAction","setCustomAttribute","finished","addToTrace","inlineHit","noticeError"];o(a,function(t,e){window.NREUM[e]=n("api-"+e)}),e.exports=window.NREUM},{1:23,2:24,handle:"D5DuLP"}],"7eSDFh":[function(t,e){function n(t,e,n){if(r.call(t,e))return t[e];var o=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:o,writable:!0,enumerable:!1}),o}catch(i){}return t[e]=o,o}var r=Object.prototype.hasOwnProperty;e.exports=n},{}],gos:[function(t,e){e.exports=t("7eSDFh")},{}],handle:[function(t,e){e.exports=t("D5DuLP")},{}],D5DuLP:[function(t,e){function n(t,e,n){return r.listeners(t).length?r.emit(t,e,n):(o[t]||(o[t]=[]),void o[t].push(e))}var r=t("ee").create(),o={};e.exports=n,n.ee=r,r.q=o},{ee:"QJf3ax"}],id:[function(t,e){e.exports=t("XL7HBI")},{}],XL7HBI:[function(t,e){function n(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:i(t,o,function(){return r++})}var r=1,o="nr@id",i=t("gos");e.exports=n},{gos:"7eSDFh"}],G9z0Bl:[function(t,e){function n(){var t=p.info=NREUM.info,e=f.getElementsByTagName("script")[0];if(t&&t.licenseKey&&t.applicationID&&e){s(d,function(e,n){e in t||(t[e]=n)});var n="https"===u.split(":")[0]||t.sslForHttp;p.proto=n?"https://":"http://",a("mark",["onload",i()]);var r=f.createElement("script");r.src=p.proto+t.agent,e.parentNode.insertBefore(r,e)}}function r(){"complete"===f.readyState&&o()}function o(){a("mark",["domContent",i()])}function i(){return(new Date).getTime()}var a=t("handle"),s=t(1),c=(t(2),window),f=c.document,u=(""+location).split("?")[0],d={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-632.min.js"},p=e.exports={offset:i(),origin:u,features:{}};f.addEventListener?(f.addEventListener("DOMContentLoaded",o,!1),c.addEventListener("load",n,!1)):(f.attachEvent("onreadystatechange",r),c.attachEvent("onload",n)),a("mark",["firstbyte",i()])},{1:23,2:14,handle:"D5DuLP"}],loader:[function(t,e){e.exports=t("G9z0Bl")},{}],23:[function(t,e){function n(t,e){var n=[],o="",i=0;for(o in t)r.call(t,o)&&(n[i]=e(o,t[o]),i+=1);return n}var r=Object.prototype.hasOwnProperty;e.exports=n},{}],24:[function(t,e){function n(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(0>o?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=n},{}],25:[function(t,e){function n(t){return!(t&&"function"==typeof t&&t.apply&&!t[i])}var r=t("ee"),o=t(1),i="nr@wrapper",a=Object.prototype.hasOwnProperty;e.exports=function(t){function e(t,e,r,a){function nrWrapper(){var n,i,s,f;try{i=this,n=o(arguments),s=r&&r(n,i)||{}}catch(d){u([d,"",[n,i,a],s])}c(e+"start",[n,i,a],s);try{return f=t.apply(i,n)}catch(p){throw c(e+"err",[n,i,p],s),p}finally{c(e+"end",[n,i,f],s)}}return n(t)?t:(e||(e=""),nrWrapper[i]=!0,f(t,nrWrapper),nrWrapper)}function s(t,r,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<r.length;c++)s=r[c],a=t[s],n(a)||(t[s]=e(a,f?s+o:o,i,s))}function c(e,n,r){try{t.emit(e,n,r)}catch(o){u([o,e,n,r])}}function f(t,e){if(Object.defineProperty&&Object.keys)try{var n=Object.keys(t);return n.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(r){u([r])}for(var o in t)a.call(t,o)&&(e[o]=t[o]);return e}function u(e){try{t.emit("internal-error",e)}catch(n){}}return t||(t=r),e.inPlace=s,e.flag=i,e}},{1:24,ee:"QJf3ax"}]},{},["G9z0Bl",4,12,6,5]);</script>

    <meta name="robots" content="index,follow" />

    <link rel="alternate" type="application/rss+xml" title="The Crowdcube Blog" href="http://feeds.feedburner.com/TheCrowdcubeBlog" />


    <script src="https://www.crowdcube.com/dist/js/crowdcube.mobile-e8bb825f.js"></script>

    <script type="text/javascript">
        <!--

        var JS_LANG_INPUT_ENTER_AMOUNT = 'Enter Amount';
        var JS_LANG_INPUT_INTEREST_AMOUNT = 'Interest Amount';
        var JS_LANG_INPUT_ENTER_KEYWORDS = 'Enter Keywords';

        var JS_LANG_PITCH_FORM_QTIP_REFERRAL_CODE = 'If you have been referred to Crowdcube by a third party Crowdcube Affiliate please enter their unique Referrer Code here.';
        var JS_LANG_PITCH_FORM_QTIP_COM_NUMBER = 'This can also be called the Company Registration Number (CRN) and is allocated by Companies House on registration of a company. It is an eight-digit number. Leading zeros are required. Scotland and Northern Ireland have an additional prefix of SC and NI respectively.';
        var JS_LANG_PITCH_FORM_QTIP_INV_SECURED = 'Please tell us about any investment that you have already secured in this round of fund raising so we can add it to your progress. Businesses that can show early investment and momentum are more likely to be successful.';
        var JS_LANG_PITCH_FORM_QTIP_DESCRIPTION = 'Please give a summary of your business investment opportunity.';
        var JS_LANG_PITCH_FORM_QTIP_LINKEDIN = 'If you have a Linkedin profile please enter your profile URL here.';
        var JS_LANG_PITCH_FORM_QTIP_INV_REQUEST = 'This minimum investment required is £10,000';
        var JS_LANG_PITCH_FORM_QTIP_EQUITY = 'The is the amount of equity ownership in your business, in percentage terms, that you\'re offering in exchange for investment.';
        var JS_LANG_PITCH_FORM_QTIP_EIS = 'Investors can get 30% tax relief in EIS qualifying businesses.  Speak to one of our advisors to find out more about EIS.';
        var JS_LANG_PITCH_FORM_QTIP_SEIS = 'Investors can get 50% tax relief in SEIS qualifying businesses.  Speak to one of our advisors to find out more about SEIS.';
        var JS_LANG_PITCH_FORM_QTIP_BUS_PLAN = 'Please upload a business plan detailing your business and its investment opportunity. You should consider what makes your business investable and how an investor will get a return on their investment.';
        var JS_LANG_PITCH_FORM_QTIP_FIN_PLAN = 'Please upload three years\' financial forecasts, including cash flow, profit and loss and balance sheet.';
        var JS_LANG_PITCH_FORM_QTIP_EMP_LATER = 'This is so that we can estimate Crowdcube\'s impact on job creation if you reach your target.';
        var JS_LANG_PITCH_FORM_QTIP_FUNDING = 'Please tell us how you have funded your business so far.';
        var JS_LANG_PITCH_FORM_QTIP_PRESS = 'We regularly get enquiries from the press and we would like to involve your business, where appropriate, to raise the profile of your business.';
        var JS_LANG_PITCH_FORM_QTIP_A_SHARES = 'Set the investment amount, above which, your investors will receive A-shares';
        var JS_LANG_PITCH_FORM_QTIP_EXIT = 'Please outline your exit strategy including the timing and forecast company valuation';

        var JS_LANG_DASHBOARD_LESS_INV = 'show less investments';
        var JS_LANG_DASHBOARD_MORE_INV = 'show more investments';
        var JS_LANG_DASHBOARD_LESS_UPDATES = 'show less updates';
        var JS_LANG_DASHBOARD_MORE_UPDATES = 'show more updates';
        var JS_LANG_DASHBOARD_LESS_POSTS = 'show less posts';
        var JS_LANG_DASHBOARD_MORE_POSTS = 'show more posts';
        var JS_LANG_DASHBOARD_WRITE_COMMENT = 'write a comment';

        var JS_LANG_ERROR_0 = 'Error';
        var JS_LANG_ERROR_1 = 'An error has occured. Please refresh the page';
        var JS_LANG_ERROR_2 = 'Errors occured';
        var JS_LANG_ERROR_3 = 'Please correct the errors and try again';
        var JS_LANG_FORM_ERROR_EMPTY_TITLE = 'Empty field: Title';

        var JS_LANG_ERROR_REWARD_THRESHOLD = 'Please enter a threshold for this reward (numbers only, no symbols or punctuation)';
        var JS_LANG_ERROR_REWARD_DESC = 'Please enter a description for this reward';
        var JS_LANG_ERROR_REWARD_ADD = 'Error Adding Reward';
        var JS_LANG_ERROR_REWARD_DELETE = 'Error Deleting Reward';
        var JS_LANG_ERROR_NO_REWARDS = 'You do not have any rewards for your pitch yet';

        var JS_LANG_CONFIRM_REWARD_DELETE = 'Are you sure you want to delete this reward?';

        var JS_LANG_REDIRECTING = 'Redirecting';
        var JS_LANG_GENERAL_DELETE = 'delete';
        var JS_LANG_GENERAL_EDIT = 'edit';
        var JS_LANG_GENERAL_APPROXIMATE = 'approximate';

        var JS_LANG_VIEW_COOKIE_POLICY = 'View Cookie Policy';

        var JS_LANG_THANKS = 'Thanks';
        var JS_LANG_FORUM_REPORT_1 = 'Thank you for your report.';
        var JS_LANG_FORUM_REPORT_2 = 'We will review the post and take action if required.';
        var JS_LANG_CLOSE_WINDOW = 'Close Window';

        var JS_LANG_ENTER_EMAIL = 'Please enter your email address';
        var JS_LANG_ENTER_MESSAGE = 'Please enter a message';
        var JS_LANG_ENTER_PHONE_NUMBER = 'Please enter a telephone number';
        var JS_LANG_ENTER_VALID_PHONE_NUMBER = 'Please enter a valid telephone number';

        //-->
    </script>


    <!-- Favicon -->
    <link href="/favicon.ico?v=3" rel="SHORTCUT ICON" />

    <script>

        !function(){var analytics=window.analytics=window.analytics||[];if(analytics.invoked)window.console&&console.error&&console.error("Segment snippet included twice.");else{analytics.invoked=!0;analytics.methods=["trackSubmit","trackClick","trackLink","trackForm","pageview","identify","group","track","ready","alias","page","once","off","on"];analytics.factory=function(t){return function(){var e=Array.prototype.slice.call(arguments);e.unshift(t);analytics.push(e);return analytics}};for(var t=0;t<analytics.methods.length;t++){var e=analytics.methods[t];analytics[e]=analytics.factory(e)}analytics.load=function(t){var e=document.createElement("script");e.type="text/javascript";e.async=!0;e.src=("https:"===document.location.protocol?"https://":"http://")+"cdn.segment.com/analytics.js/v1/"+t+"/analytics.min.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(e,n)};analytics.SNIPPET_VERSION="3.0.0";

            analytics.load('havvrhpoum');
            analytics.page();
        }}();
    </script>

    <link media="all" type="text/css" rel="stylesheet" href="https://www.crowdcube.com/dist/css/cubekit.styles.min-dcd17c05.css">
    <link media="all" type="text/css" rel="stylesheet" href="https://www.crowdcube.com/dist/css/bootstrap-02162023.css">
    <link media="all" type="text/css" rel="stylesheet" href="https://www.crowdcube.com/dist/css/crowdcube-new-8c3c0bfd.css">
    <link media="all" type="text/css" rel="stylesheet" href="https://www.crowdcube.com/dist/css/crowdcube.mobile-db4d3c3c.css">



    <link rel="image_src" type="image/jpeg" href="/files/no_image/296x197_no_image.jpg" />

    <script type="text/javascript">
        function recordOutboundLink(link, category, action) {
            try {
                analytics.track(action, {
                    category: category
                });
                setTimeout('document.location = "' + link.href + '"', 100);
            }
            catch (err) {
            }
        }
        var siteID = 1;
        var module = 'home_page';
    </script>
    <script>
        var _prum = [['id', '539eb376abe53db66ae7f16a'],
            ['mark', 'firstbyte', (new Date()).getTime()]];
        (function() {
            var s = document.getElementsByTagName('script')[0]
                    , p = document.createElement('script');
            p.async = 'async';
            p.src = '//rum-static.pingdom.net/prum.min.js';
            s.parentNode.insertBefore(p, s);
        })();
    </script>



    <!--[if lte IE 8]>
    <link media="all" type="text/css" rel="stylesheet" href="https://www.crowdcube.com/dist/css/ie-lte8-1c4cceb4.css">
    <script src="/js/html5shiv.js"></script>
    <![endif]-->
</head>

<body >



<a id="page-top"></a>

<div class="ck-panels cc-pagewrap" data-ck-panels>

    <!--[if lt IE 9]>
    <div class="cc-browser">
        <p><strong>Your browser is out-of-date and may not display our site correctly.</strong></p>
        <p><a href="http://browsehappy.com/" target="_blank">Find out how to update your browser.</a></p>
    </div>
    <![endif]-->


    <header class="cc-main-header">

        <div class="ck-container">

            <div class="ck-grid">

                <div class="ck-grid__column ck-grid__column--4 ck-hidden-large-up">

                    <a href="#" class="cc-main-header__icon--menu" data-ck-panels-toggle="main-menu">
                        <span class="cc-main-header__icon_bar"></span>
                        <span class="cc-main-header__icon_bar"></span>
                        <span class="cc-main-header__icon_bar"></span>
                    </a>

                </div>

                <div class="ck-grid__column ck-grid__column--4 ck-grid__column--large-3">

                    <a href="/" class="cc-logo cc-brand" title="Crowdcube">Crowdcube</a>

                </div>

                <div class="ck-grid__column ck-grid__column--1 ck-grid__column--large-7">

                    <div class="ck-panels__panel ck-panels__panel--left ck-panels__panel--fixed ck-panels__panel--xsmall ck-panels__panel--small ck-panels__panel--medium cc-panel--header" data-ck-panels-id="main-menu">

                        <a href="#main-menu" class="ck-panels__close" data-ck-panels-toggle="main-menu"><i class="fa fa-close"></i></a>

                        <div class="ck-panels__content">

                            <nav class="ck-menu ck-menu--horizontal cc-menu--header" data-ck-menu>

                                <ul class="ck-menu__parent">
                                    <li class="ck-menu__item"><a class="ck-menu__link" href="https://www.crowdcube.com/investments" title="Investment Opportunities">Investment Opportunities</a></li>
                                    <li class="ck-menu__item"><a class="ck-menu__link" href="https://www.crowdcube.com/pg/businessfinance-3" title="Raise Finance">Raise Finance</a></li>
                                    <li class="ck-menu__item"><a class="ck-menu__link" href="https://www.crowdcube.com/pg/investing-your-money-1513" title="Investing Your Money">Investing Your Money</a></li>
                                    <li class="ck-menu__item ck-menu__item--has-child">
                                        <span class="ck-menu__title ck-menu__title--child cc-menu__title--more">More</span>

                                        <ul class="ck-menu__child">
                                            <li class="ck-menu__item" ><a class="ck-menu__link" href="https://www.crowdcube.com/pg/equity-crowdfunding-entrepreneur-resources-1510" title="Entrepreneur Resources">Entrepreneur Resources</a></li>
                                            <li class="ck-menu__item" ><a class="ck-menu__link" href="https://www.crowdcube.com/pg/eis-seis-tax-relief-overview-43" title="Tax Relief - EIS &amp; SEIS">Tax Relief - EIS & SEIS</a></li>
                                            <li class="ck-menu__item" ><a class="ck-menu__link" href="/case-studies" title="Case Studies">Case Studies</a></li>
                                            <li class="ck-menu__item" ><a class="ck-menu__link" href="https://www.crowdcube.com/pg/crowdcube-inc-about-us-1" title="About Us">About Us</a></li>
                                            <li class="ck-menu__item" ><a class="ck-menu__link" href="http://blog.crowdcube.com/" title="Blog &amp; Events">Blog & Events</a></li>
                                            <li class="ck-menu__item" ><a class="ck-menu__link" href="https://www.crowdcube.com/pg/press-54" title="Press Centre">Press Centre</a></li>
                                            <li class="ck-menu__item" ><a class="ck-menu__link" href="/faqs/" title="FAQs">FAQs</a></li>
                                            <li class="ck-menu__item" ><a class="ck-menu__link" href="https://www.crowdcube.com/contact" title="Contact Us">Contact Us</a></li>
                                        </ul>

                                    </li>

                                </ul>

                            </nav>

                        </div>

                    </div>

                </div>


                <div class="ck-grid__column ck-grid__column--4 ck-grid__column--large-2">

                    <nav class="ck-menu ck-menu--horizontal ck-hidden-xsmall ck-hidden-small ck-hidden-medium cc-menu--user" data-ck-menu>

                        <ul class="ck-menu__parent">

                            <li class="ck-menu__item ck-menu__item--has-child cc-menu__item--avatar">

                                <figure class="cc-main-header__icon cc-main-header__icon--user">
                                    <img src="/images/user-profile/investor-img.png" class="user-img" width="40" height="40" />
                                </figure>

                                <ul class="ck-menu__child">
                                    <li class="ck-menu__item"><a href="https://www.crowdcube.com/portfolio-summary" class="ck-menu__link">Portfolio</a></li>
                                    <li class="ck-menu__item"><a href="https://www.crowdcube.com/portfolio-profile" class="ck-menu__link">Profile</a></li>
                                    <li class="ck-menu__item"><a href="https://www.crowdcube.com/my-account-settings" class="ck-menu__link">Settings</a></li>
                                    <li class="ck-menu__item"><a href="/my-pitch" class="ck-menu__link">My Pitch</a></li>
                                    <li class="ck-menu__item"><a href="https://www.crowdcube.com/login?logout" class="ck-menu__link">Logout</a></li>
                                </ul>
                            </li>

                        </ul>

                    </nav>

                    <a href="#" class="cc-main-header__icon cc-main-header__icon--user ck-hidden-large-up" data-ck-panels-toggle="user-menu">
                        <img src="/images/user-profile/investor-img.png" class="user-img" width="38" height="38" />
                    </a>


                    <div class="ck-panels__panel ck-panels__panel--right ck-panels__panel--fixed ck-panels__panel--xsmall ck-panels__panel--small ck-panels__panel--medium ck-hidden-large-up" data-ck-panels-id="user-menu">

                        <a href="#" class="ck-panels__close" data-ck-panels-toggle="user-menu"><i class="fa fa-close"></i></a>

                        <div class="ck-panels__content">

                            <nav class="ck-menu" data-ck-menu>

                                <ul class="ck-menu__parent">

                                    <li class="ck-menu__item"><a href="https://www.crowdcube.com/portfolio-summary" class="ck-menu__link">Portfolio</a></li>
                                    <li class="ck-menu__item"><a href="https://www.crowdcube.com/portfolio-profile" class="ck-menu__link">Profile</a></li>
                                    <li class="ck-menu__item"><a href="https://www.crowdcube.com/my-account-settings" class="ck-menu__link">Settings</a></li>
                                    <li class="ck-menu__item"><a href="/my-pitch" class="ck-menu__link">My Pitch</a></li>
                                    <li class="ck-menu__item"><a href="https://www.crowdcube.com/login?logout" class="ck-menu__link">Logout</a></li>

                                </ul>

                            </nav>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </header>

    <article id="cookieBar" class="cc-cookiebar">

        <div class="ck-container cc-cookiebar__info">

            <div class="cc-cookiebar__notice">

                <a href="#" class="cc-cookiebar__close"><i class="fa fa-close"></i></a>

                <p>
                    <b>Welcome to Crowdcube, the world&rsquo;s leading investment crowdfunding platform.</b>
                    Join to view complete pitches and videos, learn more about the businesses,
                    and invest. Joining is free and quick, with no obligation to invest. We use
                    cookies to provide you with the best possible experience. By using this site
                    we&rsquo;ll assume that you&rsquo;re happy to receive cookies.
                    <a href="/pg/privacy-policy-17">View Cookie Policy</a>.
                </p>

            </div>

        </div>

    </article>




    <main>
        <div id="carousel" class="carousel theme">

            <div class="cc_carousel__item" style="background-image: url(https://d1w6h2li91r9zb.cloudfront.net/unsafe/fit-in/1140x240/https://files-crowdcube-com.s3.amazonaws.com/banners/Banner-S5ERYoJQGx.jpg);background-color:#e63f42;background-size: auto;">
                <div class="cc_carousel__item__content">
                    <a href="https://www.crowdcube.com/investment/innovation-makers-19504" onClick="analytics.track('Banner', {category: 'Homepage', label: 'Innovation Makers have raised over £255,000 so far'});" >
                        <h2 class="cc_carousel__item__title" style="color: #ffffff;;width: 68%">Innovation Makers have raised over £255,000 so far</h2>
                        <h3 class="cc_carousel__item__title2" style="color: #ffffff; ">Your capital is at risk Please #investaware</h3>
                        <button href class="btn btn-primary ">Read more</button>
                    </a>
                </div>
            </div>
            <div class="cc_carousel__item" style="background-image: url(https://d1w6h2li91r9zb.cloudfront.net/unsafe/fit-in/1140x240/https://files-crowdcube-com.s3.amazonaws.com/banners/Powered%20Now%20Banner%20Faded.jpg);background-color:#ffffff;background-size: auto;">
                <div class="cc_carousel__item__content">
                    <a href="https://www.crowdcube.com/investment/powered-now-19756" onClick="analytics.track('Banner', {category: 'Homepage', label: 'Powered now: more than £260,000 raised so far.'});" >
                        <h2 class="cc_carousel__item__title" style="color: #000000;;width: 61%">Powered now: more than £260,000 raised so far.</h2>
                        <h3 class="cc_carousel__item__title2" style="color: #000000; ">Your capital is at risk Please #investaware</h3>
                        <button href class="btn btn-primary ">Read more</button>
                    </a>
                </div>
            </div>
            <div class="cc_carousel__item" style="background-image: url(https://d1w6h2li91r9zb.cloudfront.net/unsafe/fit-in/1140x240/https://files-crowdcube-com.s3.amazonaws.com/banners/squarepie-banner_fixed%5B1%5D.jpg);background-color:#a71e38;background-size: auto;">
                <div class="cc_carousel__item__content">
                    <a href="https://www.crowdcube.com/investment/square-pie-bond-19666" onClick="analytics.track('Banner', {category: 'Homepage', label: 'get a slice of the pie with the latest mini-bond'});" >
                        <h2 class="cc_carousel__item__title" style="color: #ffffff;;width: 52%">get a slice of the pie with the latest mini-bond<span class="cc_highlight">.</span></h2>
                        <h3 class="cc_carousel__item__title2" style="color: #ffffff; ">earn 8% interest p.a. Your capital is at risk.</h3>
                        <button href class="btn btn-primary ">Read more</button>
                    </a>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                $("#carousel").owlCarousel({
                    navigation : true,
                    navigationText: ["<",">"],
                    slideSpeed : 300,
                    paginationSpeed : 400,
                    singleItem: true,
                    autoPlay: 7000,
                    rewindNav: true,
                    rewindSpeed: 800,
                    stopOnHover: true
                });
            });
        </script>
        <div class="banner-container">
            <div class="home-intro fullwidth">
                <h2>Invest in innovative British businesses</h2>
                <p class="home-intro__description">Crowdcube is the world’s leading investment crowdfunding platform. We enable anyone to invest alongside professional investors in start-up, early stage and growth businesses through equity, debt and investment fund options.<br>Join the 190,000-strong crowd looking for more interesting investments - it’s free, quick and has no obligations.   </p>
                <a href="/pg/jobs-37" class="hiring" title="Job Opportunities"></a>
            </div>
        </div>

        <div class="stats-bar clearfix">
            <div class="fullwidth">
                <ul>
                    <li class="funded-success thirdwidth">
                        <a href="https://www.crowdcube.com/infographic" title="Successfully funded">
                            <span class="animate"></span>
                            <h4 class="animate">£97,705,290</h4>
                            <small class="animate">successfully funded</small>
                        </a>
                    </li>
                    <li class="users thirdwidth">
                        <a href="https://www.crowdcube.com/infographic" title="Registered investors">
                            <span class="animate"></span>
                            <h4 class="animate">195,812 </h4>
                            <small class="animate">registered investors</small>
                        </a>
                    </li>
                    <li class="business thirdwidth">
                        <a  href="https://www.crowdcube.com/infographic" title="Successfully funded businesses">
                            <span class="animate"></span>
                            <h4 class="animate">279 businesses</h4>
                            <small class="animate">successfully funded</small>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="cc-mobile"><div class="banner banner--risk-warning cc-mobile">
                <div class="ck-container">
                    <h2 class="ck-heading--branded"><i class="fa fa-exclamation-circle"></i> Risk Warning</h2>
                    <p>Please #investaware. Investments of this nature carry risks to your capital as well as potential rewards. Please read our <a href="#riskWarningModal" data-toggle="modal" data-keyboard="true" data-target="#riskWarningModal">risk warning</a> and <a href="#disclaimerModal" data-toggle="modal" data-keyboard="true" data-target="#disclaimerModal">disclaimer</a> before deciding to invest.</p>
                </div>
            </div></div>

        <div class="home-container clearfix">
            <div class="fullwidth">
                <section>

                    <header class="investments__header">

                        <h3 class="investments__title">Investment Opportunities</h3>

                        <a href="/investments" class="btn btn-primary pull-right investments__button">View All 28 Pitches</a>

                    </header>

                    <div class="bonds">
                        <h4><a href="/investments" title="Mini Bonds">Mini Bonds</a></h4>

                        <article class="clearfix pitch animate bond" onclick="pitchList(pitch19665);">
                            <hr class="cc-nomobile" />
                            <div class="left-col" onclick="window.location.href='https://www.crowdcube.com/investment/hotcha-bond-19665'">
                                <figure>
                                    <img src="https://d1w6h2li91r9zb.cloudfront.net/unsafe/fit-in/200x150/https://files-crowdcube-com.s3.amazonaws.com/files/pitch_pics/original/201507/9117ca88bf25405d2413afb5301c3c04_3204.png" title="Hotcha Bond" alt="Hotcha Bond"/>
                                    <figcaption>
                                        <small class="location cc-nomobile">Bristol, City of Bristol</small>
                                    </figcaption>
                                </figure>

                                <ul class="tax cc-nomobile">
                                </ul>
                            </div>
                            <h2>
                                <a href="https://www.crowdcube.com/investment/hotcha-bond-19665" title="Hotcha Bond">Hotcha Bond</a>
                            </h2>
                            <div class="cc-pitchCard__details clearfix">
                                <small class="location cc-mobile">Bristol, City of Bristol</small>
                                <ul class="tax cc-mobile">
                                </ul>
                            </div>

                            <p onclick="window.location.href='https://www.crowdcube.com/investment/hotcha-bond-19665'">Hotcha, is a branded Chinese takeaway chain with big ambitions based upon being fast, friendly and fresh. We are a fast growing company operating 10 stores across the South West of England with the aim of becoming a national chain over the next 5 years. Founded in 2011, we achieved c. £4 million turnover and earnings before interest, taxes, depreciation and amortisation of c. £265,000 in the financial year ending 31 March 2015. <a href="https://www.crowdcube.com/investment/hotcha-bond-19665" title="Read full pitch" class="itemReadMore">Read full pitch</a></p>

                            <div class="right-col">
                                <div class="details" onclick="window.location.href='https://www.crowdcube.com/investment/hotcha-bond-19665'">
                                    <ul class="pitch-stats clearfix">
                                        <li>
                                            55%
                                            <small>funded</small>
                                        </li>
                                        <li>
                                            £556,250
                                            <small>invested</small>
                                        </li>
                                        <li>
                                            £1,000,000 <small>target</small>
                                        </li>
                                        <li class="investor-detail">
                                            60
                                            <small>Investors</small>
                                        </li>
                                        <li>
                                            8%
                                            <small>interest rate</small>
                                        </li>
                                        <li class="end">
                                            13
                                            <small>days left</small>
                                        </li>
                                    </ul>

                                    <div class="progress">
                                        <div class="bar" style="width: 55%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="what-bond bubbl-it bottom">
            <span>
                Mini-bonds are a way for you to get a regular return on your savings by lending money to more established brands over a set period. #investaware
            </span>
                            </div>


                            <script>
                                var pitch19665 = { pitch_id: 19665, pitch_type: "bond", pitch_name: "Hotcha Bond",
                                    pitch_target: "1000000", location: "Bristol, City of Bristol", days_remaining:13, progress: 55, investors:60, current_amount:556250, equity_offered:100.00,
                                    eis:0, seis:0, list_position:0
                                };
                            </script>
                        </article>
                    </div>

                    <div class="popular">
                        <h4><a href="/investments" title="Popular">Popular Equity Pitches</a></h4>
                        <article class="clearfix pitch animate" onclick="pitchList(pitch14552);" >
                            <hr class="cc-nomobile" />
                            <div class="left-col" onclick="window.location.href = 'https://www.crowdcube.com/investment/savvy-foods-14552'">
                                <figure>
                                    <img src="https://d1w6h2li91r9zb.cloudfront.net/unsafe/fit-in/200x150/https://files-crowdcube-com.s3.amazonaws.com/files/pitch_pics/original/201507/053dc6fc67d5d212d198ab1076c06cd3_7988.png" title="Savvy Foods " alt=""/>
                                    <figcaption>
                                        <small class="location">Sheffield, South Yorkshire</small>
                                    </figcaption>
                                </figure>
                                <ul class="tax cc-nomobile">
                                    <li>SEIS</li>
                                </ul>

                                <div class="pitch-partners cc-nomobile">
                                    <ul>
                                        <li>
                                            <h5>Investor &amp; Partner:</h5>
                                        </li>
                                        <li class="bubbl-it bottom">
                                            <img src="https://d1w6h2li91r9zb.cloudfront.net/unsafe/fit-in/100x30/https://files-crowdcube-com.s3.amazonaws.com/files/pitch_tags_pics/original/201507/b40f26b4224177cc75c9111262e4449a_8218.png" alt="Taste Awards"/>	        <span>
	        	<p>The Yorkshire Post & Deliciouslyorkshire Taste Awards in association with Asda</p>
	        </span>
                                        </li>
                                        <li class="bubbl-it bottom">
                                            <img src="https://d1w6h2li91r9zb.cloudfront.net/unsafe/fit-in/100x30/https://files-crowdcube-com.s3.amazonaws.com/files/pitch_tags_pics/original/201503/f41b3812821af3480a62d39a34c478d8_3819.png" alt="Sprint Programme"/>	        <span>
	        	<p>It’s estimated by Beauhurst that half of all seed-stage equity deals will involve crowdfunding platforms. And with Crowdcube being the leading platform for seed-stage investment by a factor of three, you have a far greater choice with us.</p>
	        </span>
                                        </li>

                                </div>
                            </div>
                            <h2>
                                <a href="https://www.crowdcube.com/investment/savvy-foods-14552" title="Savvy Foods ">Savvy Foods </a>
                            </h2>
                            <div class="cc-pitchCard__details clearfix">
                                <small class="location cc-mobile">Sheffield, South Yorkshire</small>
                                <ul class="tax cc-mobile">
                                    <li>SEIS</li>
                                </ul>
                                <div class="pitch-partners">
                                    <ul>
                                        <li>
                                            <h5>Investor &amp; Partner:</h5>
                                        </li>
                                        <li class="bubbl-it bottom">
                                            <img src="https://d1w6h2li91r9zb.cloudfront.net/unsafe/fit-in/100x30/https://files-crowdcube-com.s3.amazonaws.com/files/pitch_tags_pics/original/201507/b40f26b4224177cc75c9111262e4449a_8218.png" alt="Taste Awards"/>	        <span>
	        	<p>The Yorkshire Post & Deliciouslyorkshire Taste Awards in association with Asda</p>
	        </span>
                                        </li>
                                        <li class="bubbl-it bottom">
                                            <img src="https://d1w6h2li91r9zb.cloudfront.net/unsafe/fit-in/100x30/https://files-crowdcube-com.s3.amazonaws.com/files/pitch_tags_pics/original/201503/f41b3812821af3480a62d39a34c478d8_3819.png" alt="Sprint Programme"/>	        <span>
	        	<p>It’s estimated by Beauhurst that half of all seed-stage equity deals will involve crowdfunding platforms. And with Crowdcube being the leading platform for seed-stage investment by a factor of three, you have a far greater choice with us.</p>
	        </span>
                                        </li>

                                </div>
                            </div>
                            <p onclick="window.location.href = 'https://www.crowdcube.com/investment/savvy-foods-14552'">Savvy is an innovative sweet spread and dip range created from tahini and carob syrup. Savvy is stocked in independent stores across the UK and abroad. The range has won a taste-award and has proven appeal to the specialist food sectors including diabetics, free-from and the aged population. <a href="https://www.crowdcube.com/investment/savvy-foods-14552" title="Read full pitch" class="itemReadMore">Read full pitch</a></p>

                            <div class="right-col clearfix">

                                <div class="details" onclick="window.location.href = 'https://www.crowdcube.com/investment/savvy-foods-14552'">
                                    <ul class="pitch-stats clearfix">
                                        <li>
                                            164%
                                            <small>funded</small>
                                        </li>
                                        <li>

                                            £82,380
                                            <small>invested</small>
                                        </li>
                                        <li>
                                            £50,000 <small>target</small>
                                        </li>
                                        <li class="investor-detail">
                                            122
                                            <small>Investors</small>
                                        </li>
                                        <li>
                                            10.00%
                                            <small>equity</small>
                                        </li>
                                        <li class="end">
                                            1
                                            <small>day left</small>
                                        </li>
                                    </ul>

                                    <div class="progress ">
                                        <div class="bar" style="width: 100%;"></div>


                                    </div>
                                </div>

                            </div>

                            <div class="overfunding"></div>




                            <script>
                                var pitch14552 = {
                                    pitch_id: 14552,
                                    pitch_name: "Savvy Foods ",
                                    pitch_type: "equity",
                                    pitch_target: "50000",
                                    location: "Sheffield, South Yorkshire",
                                    days_remaining:1,
                                    progress: 164,
                                    investors:122,
                                    current_amount:82380,
                                    equity_offered:10.00,
                                    eis:0,
                                    seis:1,
                                    list_position:null                };
                            </script>
                        </article>

                        <article class="clearfix pitch animate" onclick="pitchList(pitch19320);" >
                            <hr class="cc-nomobile" />
                            <div class="left-col" onclick="window.location.href = 'https://www.crowdcube.com/investment/stockflare-19320'">
                                <figure>
                                    <img src="https://d1w6h2li91r9zb.cloudfront.net/unsafe/fit-in/200x150/https://files-crowdcube-com.s3.amazonaws.com/files/pitch_pics/original/201506/323632e5983a5b9b7004efc34fa4dbe1_748.png" title="Stockflare" alt=""/>
                                    <figcaption>
                                        <small class="location">Royal Borough of Kensington and Chelsea, London</small>
                                    </figcaption>
                                </figure>
                                <ul class="tax cc-nomobile">
                                    <li>EIS</li>
                                </ul>

                                <div class="pitch-partners cc-nomobile">
                                    <ul>
                                        <li>
                                            <h5>Investor:</h5>
                                        </li>
                                        <li class="bubbl-it bottom">
                                            <img src="https://d1w6h2li91r9zb.cloudfront.net/unsafe/fit-in/100x30/https://files-crowdcube-com.s3.amazonaws.com/files/pitch_tags_pics/original/201504/9c6a141e657352a108133dcaae636560_2133.png" alt="LCIF"/>	        <span>
	        	<p>The London Co-Investment Fund (LCIF) proposes to invest, subject to contract and a minimum fund raise.</p>
	        </span>
                                        </li>

                                </div>
                            </div>
                            <h2>
                                <a href="https://www.crowdcube.com/investment/stockflare-19320" title="Stockflare">Stockflare</a>
                            </h2>
                            <div class="cc-pitchCard__details clearfix">
                                <small class="location cc-mobile">Royal Borough of Kensington and Chelsea, London</small>
                                <ul class="tax cc-mobile">
                                    <li>EIS</li>
                                </ul>
                                <div class="pitch-partners">
                                    <ul>
                                        <li>
                                            <h5>Investor:</h5>
                                        </li>
                                        <li class="bubbl-it bottom">
                                            <img src="https://d1w6h2li91r9zb.cloudfront.net/unsafe/fit-in/100x30/https://files-crowdcube-com.s3.amazonaws.com/files/pitch_tags_pics/original/201504/9c6a141e657352a108133dcaae636560_2133.png" alt="LCIF"/>	        <span>
	        	<p>The London Co-Investment Fund (LCIF) proposes to invest, subject to contract and a minimum fund raise.</p>
	        </span>
                                        </li>

                                </div>
                            </div>
                            <p onclick="window.location.href = 'https://www.crowdcube.com/investment/stockflare-19320'">Stockflare's aim is to give everyone the tools they need to be a better investor through innovative tools and analysis. In less than 8 months with virtually no marketing, there are over 10,000 monthly active users across the world. The Team includes Shane Leonard (Citigroup), Jonathan & David Kelley (Just-Eat), Kate Simon (Marketing Director, Transferwise), Martin Campbell (Virgin Money) and Richard Ireland (Egg, Zopa). <a href="https://www.crowdcube.com/investment/stockflare-19320" title="Read full pitch" class="itemReadMore">Read full pitch</a></p>

                            <div class="right-col clearfix">

                                <div class="details" onclick="window.location.href = 'https://www.crowdcube.com/investment/stockflare-19320'">
                                    <ul class="pitch-stats clearfix">
                                        <li>
                                            76%
                                            <small>funded</small>
                                        </li>
                                        <li>

                                            £228,520
                                            <small>invested</small>
                                        </li>
                                        <li>
                                            £300,000 <small>target</small>
                                        </li>
                                        <li class="investor-detail">
                                            92
                                            <small>Investors</small>
                                        </li>
                                        <li>
                                            20.00%
                                            <small>equity</small>
                                        </li>
                                        <li class="end">
                                            29
                                            <small>days left</small>
                                        </li>
                                    </ul>

                                    <div class="progress ">
                                        <div class="bar" style="width: 76%;"></div>


                                    </div>
                                </div>

                            </div>





                            <script>
                                var pitch19320 = {
                                    pitch_id: 19320,
                                    pitch_name: "Stockflare",
                                    pitch_type: "equity",
                                    pitch_target: "300000",
                                    location: "Royal Borough of Kensington and Chelsea, London",
                                    days_remaining:29,
                                    progress: 76,
                                    investors:92,
                                    current_amount:228520,
                                    equity_offered:20.00,
                                    eis:1,
                                    seis:0,
                                    list_position:1                };
                            </script>
                        </article>

                        <article class="clearfix pitch animate" onclick="pitchList(pitch19504);" >
                            <hr class="cc-nomobile" />
                            <div class="left-col" onclick="window.location.href = 'https://www.crowdcube.com/investment/innovation-makers-19504'">
                                <figure>
                                    <img src="https://d1w6h2li91r9zb.cloudfront.net/unsafe/fit-in/200x150/https://files-crowdcube-com.s3.amazonaws.com/files/pitch_pics/original/201507/e32c3c353f1da6a8c406482252f33902_6064.jpg" title="Innovation Makers" alt=""/>
                                    <figcaption>
                                        <small class="location">Ebbw Vale, Blaenau Gwent</small>
                                    </figcaption>
                                </figure>
                                <ul class="tax cc-nomobile">
                                    <li>EIS</li>
                                </ul>

                                <div class="pitch-partners cc-nomobile">
                                    <ul>
                                        <li>
                                            <h5>Partner:</h5>
                                        </li>
                                        <li class="bubbl-it bottom">
                                            <img src="https://d1w6h2li91r9zb.cloudfront.net/unsafe/fit-in/100x30/https://files-crowdcube-com.s3.amazonaws.com/files/pitch_tags_pics/original/1/8f8c1f18fa471cfed473f1e83843310a700.jpg" alt="Pilot Cottage"/>	        <span>
	        	<p>Pilot Cottage is an independent consultancy providing critical business navigation and investment readiness advice and inspiring entrepreneurs to connect with potential investors and raise capital to realize their dreams .</p>
	        </span>
                                        </li>

                                </div>
                            </div>
                            <h2>
                                <a href="https://www.crowdcube.com/investment/innovation-makers-19504" title="Innovation Makers">Innovation Makers</a>
                            </h2>
                            <div class="cc-pitchCard__details clearfix">
                                <small class="location cc-mobile">Ebbw Vale, Blaenau Gwent</small>
                                <ul class="tax cc-mobile">
                                    <li>EIS</li>
                                </ul>
                                <div class="pitch-partners">
                                    <ul>
                                        <li>
                                            <h5>Partner:</h5>
                                        </li>
                                        <li class="bubbl-it bottom">
                                            <img src="https://d1w6h2li91r9zb.cloudfront.net/unsafe/fit-in/100x30/https://files-crowdcube-com.s3.amazonaws.com/files/pitch_tags_pics/original/1/8f8c1f18fa471cfed473f1e83843310a700.jpg" alt="Pilot Cottage"/>	        <span>
	        	<p>Pilot Cottage is an independent consultancy providing critical business navigation and investment readiness advice and inspiring entrepreneurs to connect with potential investors and raise capital to realize their dreams .</p>
	        </span>
                                        </li>

                                </div>
                            </div>
                            <p onclick="window.location.href = 'https://www.crowdcube.com/investment/innovation-makers-19504'">Innovation Makers’ bridgehead product, OmniO Rider, is a lightweight, innovative, wearable stroller. Since raising funds on Crowdcube in 2014, this patent-pending business has secured interest from over 20 countries, won 5 awards, now primed to take the nursery sector by storm.(market worth £900 million in the UK alone). Multiple USPs, including its highly agile omni-wheels, with a planned product launch for spring 2016. <a href="https://www.crowdcube.com/investment/innovation-makers-19504" title="Read full pitch" class="itemReadMore">Read full pitch</a></p>

                            <div class="right-col clearfix">

                                <div class="details" onclick="window.location.href = 'https://www.crowdcube.com/investment/innovation-makers-19504'">
                                    <ul class="pitch-stats clearfix">
                                        <li>
                                            66%
                                            <small>funded</small>
                                        </li>
                                        <li>

                                            £265,990
                                            <small>invested</small>
                                        </li>
                                        <li>
                                            £400,000 <small>target</small>
                                        </li>
                                        <li class="investor-detail">
                                            113
                                            <small>Investors</small>
                                        </li>
                                        <li>
                                            20.00%
                                            <small>equity</small>
                                        </li>
                                        <li class="end">
                                            13
                                            <small>days left</small>
                                        </li>
                                    </ul>

                                    <div class="progress ">
                                        <div class="bar" style="width: 66%;"></div>


                                    </div>
                                </div>

                            </div>





                            <script>
                                var pitch19504 = {
                                    pitch_id: 19504,
                                    pitch_name: "Innovation Makers",
                                    pitch_type: "equity",
                                    pitch_target: "400000",
                                    location: "Ebbw Vale, Blaenau Gwent",
                                    days_remaining:13,
                                    progress: 66,
                                    investors:113,
                                    current_amount:265990,
                                    equity_offered:20.00,
                                    eis:1,
                                    seis:0,
                                    list_position:2                };
                            </script>
                        </article>

                        <article class="clearfix pitch animate" onclick="pitchList(pitch18392);" >
                            <hr class="cc-nomobile" />
                            <div class="left-col" onclick="window.location.href = 'https://www.crowdcube.com/investment/earwig-academic-timelines-18392'">
                                <figure>
                                    <img src="https://d1w6h2li91r9zb.cloudfront.net/unsafe/fit-in/200x150/https://files-crowdcube-com.s3.amazonaws.com/files/pitch_pics/original/201507/8b7a54b901e97b578138d40c8d067b2d_7208.jpg" title="Earwig Academic Timelines" alt=""/>
                                    <figcaption>
                                        <small class="location">Ripley, Surrey</small>
                                    </figcaption>
                                </figure>
                                <ul class="tax cc-nomobile">
                                    <li>EIS</li>
                                </ul>

                                <div class="pitch-partners cc-nomobile">

                                </div>
                            </div>
                            <h2>
                                <a href="https://www.crowdcube.com/investment/earwig-academic-timelines-18392" title="Earwig Academic Timelines">Earwig Academic Timelines</a>
                            </h2>
                            <div class="cc-pitchCard__details clearfix">
                                <small class="location cc-mobile">Ripley, Surrey</small>
                                <ul class="tax cc-mobile">
                                    <li>EIS</li>
                                </ul>
                                <div class="pitch-partners">

                                </div>
                            </div>
                            <p onclick="window.location.href = 'https://www.crowdcube.com/investment/earwig-academic-timelines-18392'">Earwig is a software business that brings school technology into the 21st century, enabling teachers to create vivid, image-based timelines showing the progress of each pupil and allowing parents to track the progress of their children. Earwig has a strong recurring revenue model with over 80 schools signed up so far with 10 new schools signing up every month. <a href="https://www.crowdcube.com/investment/earwig-academic-timelines-18392" title="Read full pitch" class="itemReadMore">Read full pitch</a></p>

                            <div class="right-col clearfix">

                                <div class="details" onclick="window.location.href = 'https://www.crowdcube.com/investment/earwig-academic-timelines-18392'">
                                    <ul class="pitch-stats clearfix">
                                        <li>
                                            119%
                                            <small>funded</small>
                                        </li>
                                        <li>

                                            £180,890
                                            <small>invested</small>
                                        </li>
                                        <li>
                                            £152,000 <small>target</small>
                                        </li>
                                        <li class="investor-detail">
                                            84
                                            <small>Investors</small>
                                        </li>
                                        <li>
                                            8.00%
                                            <small>equity</small>
                                        </li>
                                        <li class="end">
                                            11
                                            <small>days left</small>
                                        </li>
                                    </ul>

                                    <div class="progress ">
                                        <div class="bar" style="width: 100%;"></div>


                                    </div>
                                </div>

                            </div>

                            <div class="overfunding"></div>




                            <script>
                                var pitch18392 = {
                                    pitch_id: 18392,
                                    pitch_name: "Earwig Academic Timelines",
                                    pitch_type: "equity",
                                    pitch_target: "152000",
                                    location: "Ripley, Surrey",
                                    days_remaining:11,
                                    progress: 119,
                                    investors:84,
                                    current_amount:180890,
                                    equity_offered:8.00,
                                    eis:1,
                                    seis:0,
                                    list_position:3                };
                            </script>
                        </article>

                    </div>

                    <div class="new-pitches">
                        <h4><a href="/investments?joined=2" title="Newest pitches">New</a></h4>
                        <article class="clearfix pitch animate" onclick="pitchList(pitch19756);" >
                            <hr class="cc-nomobile" />
                            <div class="left-col" onclick="window.location.href = 'https://www.crowdcube.com/investment/powered-now-19756'">
                                <figure>
                                    <img src="https://d1w6h2li91r9zb.cloudfront.net/unsafe/fit-in/200x150/https://files-crowdcube-com.s3.amazonaws.com/files/pitch_pics/original/201506/86c33bd254a63564e09ec77bb74adc2e_5400.jpg" title="Powered Now" alt=""/>
                                    <figcaption>
                                        <small class="location">Bishopsteignton, Devon</small>
                                    </figcaption>
                                </figure>
                                <ul class="tax cc-nomobile">
                                    <li>EIS</li>
                                </ul>

                                <div class="pitch-partners cc-nomobile">

                                </div>
                            </div>
                            <h2>
                                <a href="https://www.crowdcube.com/investment/powered-now-19756" title="Powered Now">Powered Now</a>
                            </h2>
                            <div class="cc-pitchCard__details clearfix">
                                <small class="location cc-mobile">Bishopsteignton, Devon</small>
                                <ul class="tax cc-mobile">
                                    <li>EIS</li>
                                </ul>
                                <div class="pitch-partners">

                                </div>
                            </div>
                            <p onclick="window.location.href = 'https://www.crowdcube.com/investment/powered-now-19756'">Powered Now aims to revolutionise the field trade industry (plumbers, gas engineers, builders, electricians, roofers, joiners and many more), and is introducing mass computerisation of administration in this field. Powered Now is a software application, aimed at making the working lives of this industry easier, currently available for iPhone, iPad and Android. There are over 30k registered users (latest numbers). <a href="https://www.crowdcube.com/investment/powered-now-19756" title="Read full pitch" class="itemReadMore">Read full pitch</a></p>

                            <div class="right-col clearfix">

                                <div class="details" onclick="window.location.href = 'https://www.crowdcube.com/investment/powered-now-19756'">
                                    <ul class="pitch-stats clearfix">
                                        <li>
                                            74%
                                            <small>funded</small>
                                        </li>
                                        <li>

                                            £260,320
                                            <small>invested</small>
                                        </li>
                                        <li>
                                            £350,000 <small>target</small>
                                        </li>
                                        <li class="investor-detail">
                                            88
                                            <small>Investors</small>
                                        </li>
                                        <li>
                                            10.77%
                                            <small>equity</small>
                                        </li>
                                        <li class="end">
                                            31
                                            <small>days left</small>
                                        </li>
                                    </ul>

                                    <div class="progress ">
                                        <div class="bar" style="width: 74%;"></div>


                                    </div>
                                </div>

                            </div>





                            <script>
                                var pitch19756 = {
                                    pitch_id: 19756,
                                    pitch_name: "Powered Now",
                                    pitch_type: "equity",
                                    pitch_target: "350000",
                                    location: "Bishopsteignton, Devon",
                                    days_remaining:31,
                                    progress: 74,
                                    investors:88,
                                    current_amount:260320,
                                    equity_offered:10.77,
                                    eis:1,
                                    seis:0,
                                    list_position:null                };
                            </script>
                        </article>


                        <a href="/investments?joined=2" class="btn btn-primary pull-right investments__button">View Our New Investment Opportunities</a>
                    </div>
                </section>
                <aside id="cc-home__aside">
                    <!-- <div class="venture-fund">
            <a href="/pg/businessfinance-3#mini-bonds-raise" class="vf-logo animate" title="Crowdcube Mini Bonds" onClick="analytics.track('Sidebar', {category: 'Homepage', label: 'Mini-Bonds'});"   >
                <figure>
                    <img src="images/mini-bonds/mini-bonds-logo.png" title="Crowdcube Venture Fund" alt="Crowdcube Mini-Bonds">
                </figure>
            </a>
            <a href="/pg/businessfinance-3#mini-bonds-raise" onClick="analytics.track('Sidebar', {category: 'Homepage', label: 'Mini-Bonds'});"   title="Crowdcube Mini-Bonds" class="uc arrow right">Find out more</a>
            <hr>
        </div> -->

                    <div class="risk-warning-home">
                        <h4><a href="#riskWarningModal" data-toggle="modal" data-keyboard="true" data-target="#riskWarningModal">Risk Warning</a></h4>
                        <p>
                            Please #investaware. Investments of this nature carry risks to your capital as well as potential rewards. Please read our <a href="#riskWarningModal" data-toggle="modal" data-keyboard="true" data-target="#riskWarningModal">risk warning</a> and <a href="#disclaimerModal" data-toggle="modal" data-keyboard="true" data-target="#disclaimerModal">disclaimer</a> before deciding to invest.
                        </p>
                    </div>
                    <div class="last-investment">
                        <h4>Last Investment<span></span></h4>

                        <div class="invest-notification animate">
                            <div class="investment">
                                <b>£500</b>
                                <hr>
                                <span><time datetime="2015-08-06 22:13:42" data-moment-fromnow>2015-08-06 22:13:42</time></span>
                            </div>
                            <figure>
                                <a href="https://www.crowdcube.com/investment/savvy-foods-14552" style="background-image: url('https://d1w6h2li91r9zb.cloudfront.net/unsafe/fit-in/140x105/https://files-crowdcube-com.s3.amazonaws.com/files/pitch_pics/original/201507/053dc6fc67d5d212d198ab1076c06cd3_7988.png');" class="animate">Savvy Foods </a>
                            </figure>
                        </div>
                        </a>
                    </div>

                    <hr>
                    <div class="side clearfix">
                        <div class="funded clearfix">
                            <h4><a href="/investments?sort_by=7&sort_by=0&q=&i1=0&i2=0&i3=0&i4=0&hof=1" title="Funded pitches">Just Funded</a></h4>
                            <article>
                                <a class="animate" href="https://www.crowdcube.com/investment/holly-and-beau-colour-changing-rainwear-19488">
                                    <figure>
                                        <img src="https://d1w6h2li91r9zb.cloudfront.net/unsafe/fit-in/140x106/filters:fill(FFF, true)/https://files-crowdcube-com.s3.amazonaws.com/files/pitch_pics/original/201507/328ac31fa1089be9bf43f455f39e956e_3412.jpg" alt="Holly and Beau - colour changing rainwear" title="Holly and Beau - colour changing rainwear" />
                                    </figure>
                                    <ul class="clearfix">
                                        <li>
                                            <b>£75,000</b>
                                            <small>invested</small>
                                        </li>
                                        <li>
                                            <b>150%</b>
                                            <small>funded</small>
                                        </li>
                                    </ul>
                                </a>
                            </article>
                            <article>
                                <a class="animate" href="https://www.crowdcube.com/investment/pavegen-19189">
                                    <figure>
                                        <img src="https://d1w6h2li91r9zb.cloudfront.net/unsafe/fit-in/140x106/filters:fill(FFF, true)/https://files-crowdcube-com.s3.amazonaws.com/files/pitch_pics/original/201505/14412c280fe692352721f5288a73b3e2_8884.jpg" alt="Pavegen" title="Pavegen" />
                                    </figure>
                                    <ul class="clearfix">
                                        <li>
                                            <b>£2,045,310</b>
                                            <small>invested</small>
                                        </li>
                                        <li>
                                            <b>273%</b>
                                            <small>funded</small>
                                        </li>
                                    </ul>
                                </a>
                            </article>
                            <article>
                                <a class="animate" href="https://www.crowdcube.com/investment/cornerstone-19235">
                                    <figure>
                                        <img src="https://d1w6h2li91r9zb.cloudfront.net/unsafe/fit-in/140x106/filters:fill(FFF, true)/https://files-crowdcube-com.s3.amazonaws.com/files/pitch_pics/original/201506/c293c98542218209dd1ce43a203427fc_4381.jpg" alt="Cornerstone" title="Cornerstone" />
                                    </figure>
                                    <ul class="clearfix">
                                        <li>
                                            <b>£898,210</b>
                                            <small>invested</small>
                                        </li>
                                        <li>
                                            <b>180%</b>
                                            <small>funded</small>
                                        </li>
                                    </ul>
                                </a>
                            </article>
                            <a href="/investments?hof=1" class="btn-text pull-right arrow right" title="View More">View More</a>
                        </div>
                        <div class="side-quotes clearfix">
                            <h4>Quotes</h4>
                            <ul id="investorquote">
                                <li>
                                    <blockquote>
                                        <p>
                                            “Crowdcube's far more entertaining and tangible than any other savings method I am aware of.”
                                        </p>
                                        <small>David Cooksey</small>
                                        <hr>
                                        <p>
                                            “Crowdcube present interesting opportunities for investing ”
                                        </p>
                                        <small>Andrew Ayres</small>
                                    </blockquote>
                                </li>
                                <li>
                                    <blockquote>
                                        <p>
                                            “We can now build a sustainable, profitable business together with our members”
                                        </p>
                                        <small>Rob Symington, founder of Escape the City </small>
                                        <hr>
                                        <p>
                                            “Crowdcube has revolutionised the investment sector”
                                        </p>
                                        <small>Matthew Phelan</small>
                                    </blockquote>
                                </li>
                                <li>
                                    <blockquote>
                                        <p>
                                            “A great, efficient way to share equity in start-up companies”
                                        </p>
                                        <small>JJ Bahk</small>
                                        <hr>
                                        <p>
                                            “I got the finance and a group of investors who are evangelists for my brand.”
                                        </p>
                                        <small>Gem Misa, founder of Righteous </small>
                                    </blockquote>
                                </li>
                            </ul>
                        </div>


                    </div>
                </aside>
            </div>
        </div>




        <div class="modal hide fade" tabindex='-1' id="disclaimerModal" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">DISCLAIMER</h4>
                    </div>
                    <div class="modal-body">
                        <div>THE MATERIALS YOU ARE SEEKING TO ACCESS ARE BEING MADE AVAILABLE BY THE COMPANY RAISING FINANCE AS IDENTIFIED ABOVE (THE &quot;COMPANY&quot;) IN GOOD FAITH AND FOR INFORMATION PURPOSES ONLY AND SUBJECT TO THESE TERMS AND CONDITIONS. &nbsp;</div>
                        <div>&nbsp;</div>
                        <div>This investment opportunity is not an offer to the public and is only available to registered members of Crowdcube.com who have qualified and categorised themselves as able to invest. &nbsp;The investment opportunity is not directed at persons located in the United States, Canada or Japan. Any person resident outside the United Kingdom who wishes to view these materials must first satisfy themselves that they are not subject to any local requirements that prohibit or restrict access.</div>
                        <div>In particular, unless otherwise determined by the Company and permitted by applicable law and regulation, it is not intended, subject to certain exceptions, that any offering of the securities mentioned in such materials (the &quot;Securities&quot;) by the Company would be made, or any documentation be sent in or into, the United States, Canada or Japan. &nbsp;There will be no public offering of the Securities in the United States.</div>
                        <div>&nbsp;</div>
                        <div>In order to access the pitch you must first become a qualifying member of Crowdcube on the basis of your status as either (i) self-certified &lsquo;high net worth investor&rsquo;, (ii) certified &lsquo;sophisticated investor&rsquo;, (iii) self-certified as a &lsquo;sophisticated investor&rsquo; or (iv) certified as a &lsquo;restricted investor&rsquo;, in each case in accordance with the FCA&rsquo;s Conduct of Business Sourcebook Chapter 4.7. &nbsp;Potential investors are encouraged to &quot;cross examine&quot; the Company by interactive due diligence and use of the available online forums to bring the &quot;wisdom of the crowd&quot; to bear. &nbsp;Access the pitch also means you agree to Crowdcube&rsquo;s most recent website terms and conditions available below and investor terms and conditions, <a href="/pg/terms-16">available here</a></div>
                        <div>&nbsp;</div>
                        <div>If you are not permitted to view materials on this webpage or are in any doubt as to whether you are permitted to view these materials, please exit this webpage. &nbsp;Crowdcube&rsquo;s or the Issuer&rsquo;s press announcements and this information page do not constitute an offer to sell securities of the Company. &nbsp;Further, it does not constitute a recommendation by the Company, Crowdcube or any other party to sell or buy securities in the Company.</div>
                        <div>&nbsp;</div>
                        <div>By registering or logging into Crowdcube.com to view the investment opportunity, you certify that you are legally entitled to view the investment opportunities, are an authorised investor and you agree to all applicable terms and conditions on this website, including this disclaimer.</div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Criteo Homepage Campaign Tag 2/2/15 -->
        <script type="text/javascript" src="//static.criteo.net/js/ld/ld.js" async="true"></script>
        <script type="text/javascript">
            window.criteo_q = window.criteo_q || [];
            window.criteo_q.push(
                    { event: "setAccount", account: 18215 },
                    { event: "setSiteType", type: "d" },
                    { event: "setEmail", email: "9f0d25018eaa8346873d1f3ff41e7558" },
                    { event: "viewHome", user_segment: 2 }
            );
        </script>
        <!-- -->

        <script>
            analytics.track('RF_LP_CCSP_Brand_Campaign');
        </script>

        <div class="featured-in fullwidth clearfix">
            <h3>Featured in</h3>
            <a href="/pg/press-29" title="View all" class="btn-text pull-right arrow right">View all</a>
            <ul id="featuredIn">
                <li>
                    <a href="/pg/press-29" title="">
                        <img src="/images/featured-in/independent.jpg" width="110">
                        <blockquote>
                            “Crowd power can carry<br> us to recovery”
                        </blockquote>
                    </a>
                    <a href="/pg/press-29" title="">
                        <img src="/images/featured-in/express.jpg" width="110">
                        <blockquote>
                            “Crowdcube, a leader in equity-based funding”
                        </blockquote>
                    </a>
                </li>
                <li>
                    <a href="/pg/press-29" title="">
                        <img src="/images/featured-in/sunday-times.jpg" width="110">
                        <blockquote>
                            “Investors think small to reap handsome returns”
                        </blockquote>
                    </a>
                    <a href="/pg/press-29" title="">
                        <img src="/images/featured-in/wallstreetjournal.jpg" width="110">
                        <blockquote>
                            “Crowdfunding: the new way to invest in start-up companies”
                        </blockquote>
                    </a>
                </li>
                <li>
                    <a href="/pg/press-29" title="">
                        <img src="/images/featured-in/investorsChronicle.jpg" width="110">
                        <blockquote>
                            “Crowd power can carry us to recovery”
                        </blockquote>
                    </a>
                    <a href="/pg/press-29" title="">
                        <img src="/images/featured-in/telegraph.jpg" width="110">
                        <blockquote>
                            “Crowdcube, the leading UK example of a crowdfunding site”
                        </blockquote>
                    </a>
                </li>
            </ul>
        </div>

        <div class="risk-warning">
            <p>Investing in start-ups and early stage businesses involves risks, including
                <strong>illiquidity</strong>,
                <strong>lack of dividends</strong>,
                <strong>loss of investment</strong>
                and
                <strong>dilution</strong>,
                and it should be done only as part of a
                <strong>diversified portfolio</strong>.
                Crowdcube is targeted exclusively at investors who are sufficiently sophisticated to understand these risks and make their own investment decisions. You will only be able to invest via Crowdcube once you are registered as sufficiently sophisticated.</p>
            <p><a href="#riskWarningModal" data-toggle="modal" data-keyboard="true" data-target="#riskWarningModal">Please click here to read the full Risk Warning.</a></p>
            <p>
                This page is approved as a financial promotion by Crowdcube Capital Limited, which is authorised and regulated by the Financial Conduct Authority. Pitches for investment are not offers to the public and investments can only be made by members of crowdcube.com on the basis of information provided in the pitches by the companies concerned. Crowdcube takes no responsibility for this information or for any recommendations or opinions made by the companies.
            </p>

            <div class="modal hide fade" tabindex='-1' id="riskWarningModal" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Risk Warning</h4>
                        </div>
                        <div class="modal-body">
                            <p>To help you understand the risks involved when investing in shares and mini-bonds on Crowdcube, please read the following risk summary. &nbsp;Please #investaware and diversify your investments.&nbsp;</p>

                            <p><strong>The need for diversification when you invest</strong></p>

                            <p>Diversification involves spreading your money across different types of investments with different risks to reduce your overall risk. However, it will not lessen all types of risk. &nbsp;Diversification is an essential part of investing. Investors should only invest a proportion of their available investment funds via Crowdcube and should balance this with safer, more liquid investments. &nbsp;</p>

                            <p>&nbsp;</p>

                            <p><strong>Risks when investing in equity</strong></p>

                            <p>Investing in shares (also known as equity) on Crowdcube does not involve a regular return on your investment unlike mini-bonds which offer interest paid regularly. &nbsp;Please bear in mind the following particular risks for equity investments:</p>

                            <p><strong>Loss of investment</strong></p>

                            <p>The majority of start-up businesses fail or do not scale as planned and therefore investing in these businesses may involve significant risk. &nbsp;It is likely that you may lose all, or part, of your investment. &nbsp;You should only invest an amount that you are willing to lose and should build a diversified portfolio to spread risk and increase the chance of an overall return on your investment capital. If a business you invest in fails, neither the company &ndash; nor Crowdcube &ndash; will pay you back your investment. &nbsp;</p>

                            <p><strong>Lack of liquidity</strong></p>

                            <p>Liquidity is the ease with which you can sell your shares after you have purchased them. Buying shares in businesses pitching through Crowdcube cannot be sold easily and they are unlikely to be listed on a secondary trading market, such as AIM, Plus or the London Stock Exchange. &nbsp;Even successful companies rarely list shares on such an exchange. In addition, if you purchase B Investment Shares, these are non-voting shares and may not be attractive to potential buyers.&nbsp;</p>

                            <p><strong>Rarity of dividends</strong></p>

                            <p>Dividends are payments made by a business to its shareholders from the company&rsquo;s profits. &nbsp;Most of the companies pitching for equity on the Crowdcube website are start-ups or early stage companies, and these companies will rarely pay dividends to their investors. This means that you are unlikely to see a return on your investment until you are able to sell your shares. &nbsp;Profits are typically re-invested into the business to fuel growth and build shareholder value. Businesses have no obligation to pay shareholder dividends.</p>

                            <p><strong>Dilution</strong></p>

                            <p>Any investment in shares made through Crowdcube may be subject to dilution in the future. Dilution occurs when a company issues more shares. Dilution affects every existing shareholder who does not buy any of the new shares being issued. As a result an existing shareholder&#39;s proportionate shareholding of the company is reduced, or &lsquo;diluted&rsquo;-this has an effect on a number of things, including voting, dividends and value.</p>

                            <p>Some businesses who pitch for equity investment through Crowdcube offer A-Ordinary Shares, which may include pre-emption rights that protect an investor from dilution. &nbsp;In this situation the business must give shareholders with A-Ordinary Shares the opportunity to buy additional shares during a subsequent fundraising round so that they can maintain or preserve their shareholding. Please check a pitch, and the Articles of the company to see if the shares you are buying will have these pre-emption rights. Most companies do not offer pre-emption rights for B Investment Shares.</p>

                            <p><strong>Risks when investing in Mini-bonds</strong></p>

                            <p>Mini-bonds are a very different kind of investment to equity and you do not own a stake in the business issuing the mini-bond. &nbsp;Instead you receive regular interest payments from the issuing company (the &ldquo;Issuer&rdquo;) and then return your initial investment back at the end of the mini-bonds term (the maturity). &nbsp; Before investing, you must read and agree to the Bond Instrument for each mini-bond as these contain the exact terms and conditions, including the interest payments and final repayment time between investors and the company raising the money. &nbsp;It is important to understand that Issuers are solely responsible for their financial status and consequently their ability to pay interest and return investors&rsquo; capital when the mini-bonds mature. Crowdcube does not issue the mini-bonds listed on the Crowdcube platform and is not responsible for their performance.&nbsp; Mini-bonds represent a high degree of risk and you should be aware of some of the specific risks involved in investing in them.</p>

                            <p><strong>Loss of investment and interest payments</strong></p>

                            <p>Issuers, like all businesses, are vulnerable to financial difficultly and investing in mini-bonds may involve significant risk of default. In the event of an Issuer being unable or unwilling to meet payments of interest and capital, it is likely that you may lose all, or part, of your initial investment and receive no outstanding or future interest payments.&nbsp;</p>

                            <p>If a business you invest in fails, neither the company you invest in &ndash; nor Crowdcube &ndash; will pay you back you investment. You should only invest an amount that you are willing to lose and should build a diversified portfolio to spread risk.</p>

                            <p>Mini-bonds are not insured by a third party nor are they protected by any governmental authority such as the Financial Services Compensation Scheme. This means that if the Issuer becomes insolvent, investors could lose some or all of their money.</p>

                            <p><strong>Lack of liquidity</strong></p>

                            <p>Liquidity is the ease with which you can sell your investments to a third party after you have purchased them. Mini-bonds purchased from Issuers pitching through Crowdcube may be transferrable if specified in the Bond Instrument, however they will not be listed on any formal investment exchange or secondary trading market such as the LSE ORB and so it may be difficult or impossible to find a buyer to purchase them. &nbsp; Please refer to the individual mini-bond documentation for full details of transferability. &nbsp;Investments in mini-bonds through Crowdcube should be viewed as a long term and illiquid investment.</p>

                            <p><strong>Restricted redemption rights</strong></p>

                            <p>Issuers of the mini-bonds set the terms for redeeming your capital. Investors should be aware that they will not be able to redeem their initial investment under any circumstances other than those set out in the terms and conditions of the documentation of an individual mini-bond, meaning their capital will be locked up for the entire term of the mini-bond, typically 3-5 years and should therefore be viewed as a long term and illiquid investment.</p>

                            <p><strong>Unsecured investment</strong></p>

                            <p>Unless otherwise set out in the Bond Instrument, mini-bonds are typically an unsecured obligation of the Issuer, meaning there is no security over the property or assets of the Issuer supporting the repayment of your &nbsp;interest or capital. &nbsp;This means that if an Issuer fails, it is unlikely that an investor will have their initial investment or outstanding interest payments returned to them because there is no security over any remaining assets.&nbsp;</p>

                            <p><strong>Early Call Risk</strong></p>

                            <p>The Issuer has the right to repay you your money at any time prior to the formal repayment date. Your investment may be materially curtailed because of this.</p>

                            <p><strong>Lower in the pecking order on winding up</strong></p>

                            <p>If an Issuer falls into financial difficulty and goes out of business, other creditors and debt holders with seniority &ndash; including fixed charge holders, administrators, employees who are owed wages, banks, and secured debtors - will be compensated first. This means it is unlikely mini-bond investors, whose unsecured investment sits below all of the previously mentioned in the pecking order, will have their initial investment or outstanding interest payments returned to them after higher ranked creditors are compensated.&nbsp;</p>

                            <p><strong>Interest rate and inflation risks</strong></p>

                            <p>Mini-bonds pay interest at a fixed rate rather than by reference to an underlying index. Accordingly you should note that a rise in interest rates may adversely affect the relative returns that mini-bonds offer. Further, inflation may reduce the real value of the returns over time.</p>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cc-mobile"><div class="banner banner--risk-warning cc-mobile">
                <div class="ck-container">
                    <h2 class="ck-heading--branded"><i class="fa fa-exclamation-circle"></i> Risk Warning</h2>
                    <p>Investing in start-ups and early stage businesses involves risks, including
                        <strong>illiquidity</strong>,
                        <strong>lack of dividends</strong>,
                        <strong>loss of investment</strong>
                        and
                        <strong>dilution</strong>,
                        and it should be done only as part of a
                        <strong>diversified portfolio</strong>.
                        Crowdcube is targeted exclusively at investors who are sufficiently sophisticated to understand these risks and make their own investment decisions. You will only be able to invest via Crowdcube once you are registered as sufficiently sophisticated.</p>
                    <p><a href="#riskWarningModal" data-toggle="modal" data-keyboard="true" data-target="#riskWarningModal">Please click here to read the full Risk Warning.</a></p>
                    <p>
                        This page is approved as a financial promotion by Crowdcube Capital Limited, which is authorised and regulated by the Financial Conduct Authority. Pitches for investment are not offers to the public and investments can only be made by members of crowdcube.com on the basis of information provided in the pitches by the companies concerned. Crowdcube takes no responsibility for this information or for any recommendations or opinions made by the companies.
                    </p>
                </div>
            </div></div>
    </main>

    <footer class="cc-main-footer">

        <div class="ck-container">

            <div class="ck-grid">

                <div class="ck-grid__column ck-grid__column--large-8">

                    <nav class="cc-footer__links">

                        <ul class="cc-footer__link-items">

                            <li><a href="/pg/crowdcube-inc-about-us-1">About Us</a></li>
                            <li><a href="/pg/terms-16">Terms of Use</a></li>
                            <li><a href="/pg/privacy-and-cookie-policy-17">Privacy Policy</a></li>
                            <li><a href="/pg/risk-36">Risk Warning</a></li>

                        </ul>

                        <ul class="cc-footer__link-items">

                            <li><a href="/pg/businessfinance-3">Raise Finance</a></li>
                            <li><a href="/pg/investor-resources-1615">Help</a></li>
                            <li><a href="/pg/jobs-37">Jobs</a></li>
                            <li><a href="http://blog.crowdcube.com/">Blog</a></li>

                        </ul>

                    </nav>

                    <article class="cc-footer__notices">

                        <p>
                            Crowdcube Capital Ltd is authorised and regulated by the Financial Conduct Authority (No. 650205).
                        </p>

                    </article>

                </div>

                <div class="ck-grid__column ck-grid__column--large-4">

                    <div class="cc-social">

                        <ul class="cc-social__links">

                            <li class="cc-social__link">
                                <a href="https://www.facebook.com/crowdcube" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>

                            <li class="cc-social__link">
                                <a href="https://twitter.com/Crowdcube" target="_blank"><i class="fa fa-twitter"></i></a>
                            </li>

                            <li class="cc-social__link">
                                <a href="http://www.linkedin.com/company/crowdcube-limited" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </li>

                            <li class="cc-social__link">
                                <a href="https://plus.google.com/+crowdcube" target="_blank"><i class="fa fa-google-plus"></i></a>
                            </li>

                        </ul>

                    </div>

                    <a href="/" class="cc-logo cc-logo-grey cc-logo--footer" title="Crowdcube">Crowdcube</a>

                </div>

            </div>

        </div>

    </footer>

</div>


<script type="text/javascript">
    /* <![CDATA[ */
    var random_question_id = 0;
    /* ]]> */
</script>



























<script>
    ;(function($) {
        $(function() {
            var cookie = $.cookie('cc_cookie_accept'),
                    cookie_bar = $('#cookieBar'),
                    cookie_bar_close = $(cookie_bar).find('.cc-cookiebar__close');

            if(!cookie) {
                $.cookie('cc_cookie_accept', true, { expires: 3650, path: '/' });
                $(cookie_bar).addClass('cc-cookiebar--active');

                $(cookie_bar_close).on('click', function() {
                    $(cookie_bar).removeClass('cc-cookiebar--active');
                });
            }
        });
    })(jQuery);
</script>

<!-- Bootstrap -->
<script src="https://www.crowdcube.com/js/bootstrap.min.js"></script>

<!-- LinkedIn -->







<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 1003913586;
    var google_conversion_language = "en";
    var google_conversion_format = "3";
    var google_conversion_color = "ffffff";
    var google_conversion_label = "-MbxCM6tqAMQ8oLa3gM";
    var google_conversion_value = 0;
    /* ]]> */
</script>
<script type="text/javascript" src="https://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
    <div class="pull-left" style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="https://www.googleadservices.com/pagead/conversion/1003913586/?label=-MbxCM6tqAMQ8oLa3gM&amp;guid=ON&amp;script=0"/>
    </div>
</noscript>






<script type="text/javascript">
    var focusFlag = true;
</script>


<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=946257002062826";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>


<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 1003913586;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>


<script>
    // Set the moment locale
    moment.locale('en_US');
</script>

<!-- Rocketfuel tracking script -->
<script src="/js/rocketfuel/homepage-crowdcube.js"></script>

<script>
    analytics.identify("Ld58J", {
        $first_name:"Jane",
        $last_name:"Smith",
        $email:"jane.smith11@example.com",
        $username:"JaneS11",
        keep_updated: 0,
        "Post Code":"",
        dob:""
    });
</script>

<noscript>
    <div class="pull-left" style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1003913586/?value=0&amp;guid=ON&amp;script=0"/>
    </div>
</noscript>
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"f19a6c9069","applicationID":"6165807","transactionName":"NQZSYxYHXkRZVkQIDgxMc0IXEl9aFw==","queueTime":0,"applicationTime":643,"atts":"GUFRFV4dTUo=","errorBeacon":"bam.nr-data.net","agent":"js-agent.newrelic.com\/nr-632.min.js"}</script></body>

</html>

