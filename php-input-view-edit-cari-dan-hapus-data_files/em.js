function _EMeasure(e){e=typeof(e)=="undefined"?"":e;var f=document;var h=navigator;var a=window;var g=function(){var j;if(h.plugins["Shockwave Flash"]||h.plugins["Shockwave Flash 2.0"]){var l=h.plugins["Shockwave Flash 2.0"]?" 2.0":"";var o=h.plugins["Shockwave Flash"+l].description;var k=o.split(" ");var d=parseInt(k[2]);return d>=6?1:0}else{var n=0;try{j=new ActiveXObject("ShockwaveFlash.ShockwaveFlash.7");n=1}catch(m){}if(n==0){try{j=new ActiveXObject("ShockwaveFlash.ShockwaveFlash.6");j.AllowScriptAccess="always";n=1}catch(m){}}return n}};var b=typeof(a.innerWidth)=="number"?a:(f.documentElement&&(f.documentElement.clientWidth||f.documentElement.clientHeight)?f.documentElement:(f.body&&(f.body.clientWidth||f.body.clientHeight)?f.body:null));this.encode64=function(k){var m="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";var q,p,o,n,l,j=0,d="";while(j<k.length){q=k.charCodeAt(j++);if(q>127){q=88}p=k.charCodeAt(j++);if(p>127){p=88}o=k.charCodeAt(j++);if(o>127){o=88}if(isNaN(o)){l=64;o=0}else{l=o&63}if(isNaN(p)){n=64;p=0}else{n=((p<<2)|(o>>6))&63}d+=m.charAt((q>>2)&63)+m.charAt(((q<<4)|(p>>4))&63)+m.charAt(n)+m.charAt(l)}return encodeURIComponent(d)};var c=function(){if(f.referrer){return f.referrer}return""};this.minSvWidth=600;this.minSvHeight=200;this.maxSvWidth=700;this.maxSvHeight=620;this.surveyPos=window._em_survey_inv_pos?window._em_survey_inv_pos.split("-"):"";this.yPos=this.surveyPos?this.surveyPos[0]:"bottom";this.xPos=this.surveyPos?this.surveyPos[1]:"right";this.surveyOffset=window._em_survey_inv_offset?window._em_survey_inv_offset.split("-"):"";this.surveyDir=window._em_survey_inv_dir?window._em_survey_inv_dir:"bottom";this.yOffset=this.surveyOffset?(isNaN(this.surveyOffset[0])?"0":this.surveyOffset[0]):"0";this.xOffset=this.surveyOffset?(isNaN(this.surveyOffset[1])?"0":this.surveyOffset[1]):"0";if(this.xOffset=="0"&&this.xPos=="right"){this.xOffset="10"}this.loadScript=function(d,m){var p=document.getElementsByTagName("script")[0];var o=p.parentNode;var q=/ded|co/;var j="onload";var n="onreadystatechange";var k="readyState";var l=document.createElement("script");l[j]=l[n]=function(){if(!this[k]||q.test(this[k])){l[j]=l[n]=null;m&&m(l);l=null}};l.async=true;l.src=d;o.insertBefore(l,p)};this.setCookie=function(d,l,j){var k=arguments[3];var m=new Date();m.setTime(m.getTime()+j*1000);f.cookie=d+"="+escape(l)+((j==0)?"":";expires="+m.toGMTString())+";domain=."+this._domain+";path=/";return this};this.getCookie=function(j){if(f.cookie.length>0){var k=f.cookie.indexOf(j+"=");if(k!=-1){k=k+j.length+1;var d=f.cookie.indexOf(";",k);if(d==-1){d=f.cookie.length}return unescape(f.cookie.substring(k,d))}}return typeof(arguments[1])=="undefined"?"":arguments[1]};this.scroll=function(){return typeof(a.pageYOffset)=="number"?a:(f.body&&(f.body.scrollLeft||f.body.scrollTop)?f.body:(f.documentElement&&(f.documentElement.scrollLeft||f.documentElement.scrollTop)?f.documentElement:null))};this.width=function(){return b==null?0:b==a?b.innerWidth:b.clientWidth};this.height=function(){return b==null?0:b==a?b.innerHeight:b.clientHeight};this.scrollY=function(){var d=this.scroll();return d==null?0:d==a?d.pageYOffset:d.scrollTop};this.scrollX=function(){var d=this.scroll();return d==null?0:d==a?d.pageXOffset:d.scrollLeft};this._hasFlash=g();this._isIE=h.appVersion.indexOf("MSIE")>-1;this._isIE11=Object.hasOwnProperty.call(window,"ActiveXObject")&&!window.ActiveXObject;this._isWin=h.appVersion.toLowerCase().indexOf("win")>-1;this._isOpera=h.userAgent.indexOf("Opera")>-1;this._isFF=h.userAgent.indexOf("Firefox")>-1;this._isChrome=h.userAgent.indexOf("Chrome")>-1;this._isOpera=h.userAgent.indexOf("Opera")>-1;this._emVersion="v4";this._emsvVersion="v5";this._emNS=e;this._emIsSecure=location.protocol.indexOf("https")==0;this._emSchema=this._emIsSecure?"https://":"http://";this._emHost=window._em_host?window._em_host:this._emSchema+"www"+(this._emIsSecure?"9":"9")+".effectivemeasure.net";this._emCdnHost=window._em_cdn_host?window._em_cdn_host:this._emIsSecure?this._emHost:this._emSchema+"www9.effectivemeasure.net";this._emsvHost=window._em_sv_host?window._em_sv_host:this._emSchema+"survey-b.effectivemeasure.net";this._emsvCdnHost=window._em_sv_cdn_host?window._em_sv_cdn_host:(this._emIsSecure?this._emsvHost:this._emSchema+"survey-cdn.effectivemeasure.net");this._emsvParams="";this._page=this.encode64(location.href);this._domain=location.hostname;this._lastPage=this.encode64(c());this._optedOut=this.getCookie("_em_opt_out",0);this._stageLoaded=0;this._jsLoaded=0;this._hlLoaded=0;this.setCkOp=function(){this.setCookie("_em_sv",0,0);this.setCookie("_em_pv",0,0);this.setCookie("_em_hl",0,0);this.setCookie("_em_vt",0,0);this.setCookie("_em_v",0,0);this.setCookie("_em_opt_out",1,86400*365*5)};this.setCkSv=function(d){this.setCookie("_em_sv",d,(d==-1?1800:86400));if(d==-2){this.set3rdCk("sv",-2)}};this.setCkV=function(d){this.setCookie("_em_v",d,1800)};this.setCkVt=function(d){this.setCookie("_em_vt",d,360*86400)};this.setCkHl=function(d){this.setCookie("_em_hl",1,2592000);if(d==1){this.set3rdCk("hl",1)}};this.setCkPn=function(d){this.setCookie("_em_pn",1,2592000);if(d==1){this.set3rdCk("pn",1)}};this.setCkPv=function(d){this.setCookie("_em_pv",1,2592000);if(d==1){this.set3rdCk("pv",1)}};this.getGlobalVarObj=function(){var d;var k=new Object();for(var j=0;j<arguments.length;j++){d=arguments[j];if((typeof a["_em_"+d])!="undefined"){k[d]=a["_em_"+d]}}return k};this.getEnvVars=function(k,j){if(_EMeasure.prototype.env&&typeof(j)=="undefined"){n=_EMeasure.prototype.env}else{var n=new Object();n.flag=typeof(k)=="undefined"?0:(k.toString().indexOf("#")==0?1:k);n.v=this.getCookie("_em_v");n.vt=this.getCookie("_em_vt");n.hl=this.getCookie("_em_hl");n.sv=this.getCookie("_em_sv",0);n.pv=this.getCookie("_em_pv");n.pn=this.getCookie("_em_pn");_EMeasure.prototype.env=n}if(typeof(k)=="undefined"||k.toString().indexOf("#")<0){n.p=this._page}else{var o=location.href.toString();if(o.indexOf("#")<0){n.p=this.encode64(o+k)}else{n.p=this.encode64(o.substr(0,o.indexOf("#"))+k)}}n.r=this._lastPage;n.f=this._hasFlash&&!(window._em_chrome_compat==1&&this._isChrome)?1:0;n.ns=e;n.rnd=Math.random();var p=this.getGlobalVarObj("panel_pn","plugin_v","partner_id","direct_mode","cat1_id","cat2_id","survey_rate","survey_countries","survey_language","rm_ssid","rm_device_type","env_computername","env_userdnsdomain","env_username","users","cuser","panel_id","section_id");var l="",d;for(d in p){l+=d+"="+p[d]+"&"}n.u=escape(l);n.sf=this.width()>=this.minSvWidth&&this.height()>=this.minSvHeight?1:0;n.tzos=new Date().getTimezoneOffset()/60;var m="";for(d in n){m+=d+"="+n[d]+"&"}return m};this.getVtId=function(){return this.getCookie("_em_vt").substr(19,32)};this.setVtInPlugin=function(){if(true){if(f.getElementById("_em_chrome_messenger")){f.getElementById("_em_chrome_messenger").innerText=this.getVtId()}var d=f.createEvent("Event");d.initEvent("_EM_SET_VT",true,false);f.documentElement.dispatchEvent(d)}};this.setPnInPlugin=function(){if(true){var d=f.createEvent("Event");d.initEvent("_EM_SET_PN",true,false);f.documentElement.dispatchEvent(d)}};this.voidme=function(){};this.getStage=function(){return f.getElementById("_em_stage_"+e)};this.loadStage=function(){if(!this._optedOut&&!this._stageLoaded){var d=f.createElement("div");d.setAttribute("id","_em_stage_"+e);d.setAttribute("style","display:none");var j=f.body.getElementsByTagName("script");j=j.length>0?j[j.length-1]:false;while(j&&typeof(j.parentNode)!=="undefined"&&j.parentNode!=f.body){j=j.parentNode}if(!j||typeof j.parentNode==="undefined"){f.body.appendChild(d)}else{j.parentNode.insertBefore(d,j)}this._stageLoaded=1}return this};this.loadJs=function(d){if(location.protocol.indexOf("http")==0&&!this._optedOut&&(!this._jsLoaded||d.toString().indexOf("#")==0)){var j=f.createElement("script");j.type="text/javascript";j.async=true;j.src=this._emHost+"/"+this._emVersion+"/em_js?"+this.getEnvVars(d);var k=f.getElementsByTagName("head")[0];if(k){k.appendChild(j)}else{var l=f.getElementsByTagName("script")[0];l.parentNode.insertBefore(j,l)}this._jsLoaded=1}return this};this.loadComponents=function(d){if(location.protocol.indexOf("http")==0&&!this._optedOut&&(this._jsLoaded)){if(window._em_stream_tracking){var j=f.createElement("script");j.type="text/javascript";j.async=true;j.src=this._emHost+"/em_stream.js?"+this.getEnvVars(d);var k=f.getElementsByTagName("head")[0];if(k){k.appendChild(j)}else{var l=f.getElementsByTagName("script")[0];l.parentNode.insertBefore(j,l)}this._StreamTrackingComponentLoaded=1}}return this};this.trackAjaxPageview=function(d){d=typeof(d)=="undefined"?"#":"#"+d.toString().replace(/\W/g,"_");this.loadJs(d)};this.loadHl=function(k){if(!this._optedOut&&!this._hlLoaded&&this._hasFlash){var d=this._emCdnHost+"/"+this._emVersion+"/em4.swf";k=k+"&ns="+e;var j=this.getStage();j.setAttribute("style","display:block;position:fixed;width: 1px; height: 1px;");j.innerHTML=this.getSwfHtml("src",d,"width","1","height","1","id","_em_hilex"+e,"quality","low","name","_em_hilex"+e,"flashVars",k);if(this._isIE){j.style.top=(this.scrollY()+this.height()/2)+"px";j.style.left=(this.scrollX()+this.width()/2)+"px"}this._hlLoaded=1}return this};this.hideStage=function(){var d=this.getStage();d.innerHTML='<img src="'+this._emHost+'/img.gif" />';d.style.display="none";var j=f.getElementById("_em_bg_"+e);if(j){j.setAttribute("style","display: none;")}};this.hlCallback=function(d){if(d>0&&f.images){f._em_dimg=new Image();f._em_dimg.src=this._emHost+"/"+this._emVersion+"/em_dimg?"+this.getEnvVars(d,1)}};this.set3rdCk=function(j,d){f._em_ck_img=new Image();f._em_ck_img.src=this._emHost+"/"+this._emVersion+"/em_ck_img?"+j+"="+d+"&r="+Math.random()};this.users="";this.user="";this.setUser=function(d,n){var j,s,r,q;s=[];for(q in d){r=[];for(var l in d[q]){if(l=="id"||l=="name"){r.push('"'+l+'":"'+d[q][l]+'"')}}s.push("{"+r.join(",")+"}")}j="["+s.join(",")+"]";this.users=j;if(typeof(n)=="undefined"){this.set3rdCk("users",this.users)}var o=this.getStage();var p="<p>Who are you ? </p>";for(q in d){if(typeof(d[q]["id"])!="undefined"){p+="<input type='button' onclick='"+e+'.submitUser("'+d[q]["id"]+":"+d[q]["name"]+"\");' ";p+=" name='u' id='"+d[q]["id"]+"' value='"+d[q]["name"]+"'><br>"}}var m=f.getElementById("_em_bg_"+e)?f.getElementById("_em_bg_"+e):f.createElement("div");m.setAttribute("id","_em_bg_"+e);m.setAttribute("style","display: block; position: absolute; top: -100%; left: -100%; width: 300%; height: 300%; background-color: black; z-index:2147483646; -moz-opacity: 0.8; opacity:.80; filter: alpha(opacity=80);");f.body.appendChild(m);o.innerHTML=p;o.setAttribute("style","display: block; position: absolute; top: 25%; left: 25%; width: 50%;  height: 50%; padding: 16px; border: 16px solid orange; background-color: white; z-index:2147483647; overflow: auto")};this.submitUser=function(d){if(typeof(d)!="undefined"){this.user=d;this.set3rdCk("users",this.users);this.set3rdCk("cuser",this.user);this.hideStage()}else{alert("Please select who you are.")}};this.optout=function(){this.setCkOp();this.set3rdCk("_em_opt_out",1)};this.getSwfHtml=function(){var k=0;var j=arguments;var d=new Object();var o=new Object();var n=new Object();for(k=0;k<j.length;k=k+2){var l=j[k].toLowerCase();switch(l){case"src":d.src=j[k+1];o.movie=j[k+1];break;case"id":case"width":case"height":case"class":case"name":d[j[k]]=n[j[k]]=j[k+1];break;default:d[j[k]]=o[j[k]]=j[k+1]}}n.classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000";n.type=d.type="application/x-shockwave-flash";d.allowScriptAccess=o.allowScriptAccess="always";d.quality=o.quality="high";d.align=n.align="middle";var m="";m+="<object ";for(k in n){m+=k+'="'+n[k]+'" '}m+=">";for(k in o){m+='<param name="'+k+'" value="'+o[k]+'" /> '}m+="<embed ";for(k in d){m+=k+'="'+d[k]+'" '}m+="> </embed>";m+="</object>";return m};this.loadInvitation=function(m){var j=this.getStage();j.setAttribute("style","display:block;width:300px;height:200px;padding:0px;margin:0px;right:10px;clear:both");j.style.backgroundColor="transparent";j.style.zIndex=2147483647;if(this._isIE){this.setPosInvIE()}else{j.style.position="fixed";if(this.xPos=="left"){j.style.left=this.xOffset+"px"}else{j.style.right=this.xOffset+"px"}if(this.yPos=="top"){j.style.top=this.yOffset+"px"}else{j.style.bottom=this.yOffset+"px"}}var l=this._emsvCdnHost+"/"+this._emsvVersion+"/eminv.swf";m.domain=this._domain;m.ns=e;m.version=this._emsvVersion;m.host=this._emsvHost;m.cdnHost=this._emsvCdnHost;m.visitor=this.getCookie("_em_vt");m.slideFrom=this.surveyDir;var k="",d;for(d in m){k+=d+"="+m[d]+"&"}this._emsvParams=k;j.innerHTML=this.getSwfHtml("src",l,"width","100%","height","100%","wmode","transparent","id","_em_inv"+e,"name","_em_inv"+e,"flashVars",this._emsvParams);if(this._isIE){this.posInv4IE()}};this._timeoutFlagPosInv4IE=1;this.posInv4IE=function(){if(this._timeoutFlagPosInv4IE==1){var d=this.getStage();var j=0,k=0;if(d){this.setPosInvIE()}setTimeout(this._emNS+".posInv4IE()",200)}};this.setPosInvIE=function(){var d=300,k=200;var j=this.getStage();j.style.position="absolute";j.style.width=d+"px";j.style.height=k+"px";j.style.backgroundColor="transparent";svTop=parseInt(this.height()-k+this.scrollY());svLeft=parseInt(this.width()+this.scrollX()-d-10);if(this.xPos=="left"){j.style.left=this.xOffset+"px"}else{j.style.left=svLeft>0?svLeft-this.xOffset+"px":"0px"}if(this.yPos=="top"){j.style.top=this.yOffset+"px"}else{j.style.top=svTop>0?svTop-this.yOffset+"px":"200px"}};this.hideInvitation=function(){if(this._isIE){this._timeoutFlagPosInv4IE=0}this.hideStage()};this.unloadSurvey=function(){this._timeoutFlagPosMain=0;this.hideStage();if(this._isIE){var d=f.getElementsByTagName("select");if(d!=null){for(var j=0;j<d.length;j++){d[j].style.visibility="visible"}}}};this._timeoutFlagPosMain=1;this.posMain=function(){if(this._timeoutFlagPosMain==1){var k=this.getStage();var m=this.width()-20;var o=this.height()-20;var d=m<this.minSvWidth?this.minSvWidth:(m>this.maxSvWidth?this.maxSvWidth:m);var j=o<this.minSvHeight?this.minSvHeight:(o>this.maxSvWidth?this.maxSvWidth:o);var l=0,n=0;k.style.width=d+"px";k.style.height=j+"px";n=parseInt((this.height()-j)/2+this.scrollY());l=parseInt((this.width()-d)/2);if(this._isIE){k.style.position="absolute";k.style.top=n>0?n+"px":"0px"}else{k.style.position="fixed";k.style.bottom=parseInt((this.height()-j)/2)+"px"}k.style.left=l>0?l+"px":"0px";setTimeout(this._emNS+".posMain()",200)}};this.loadSurvey=function(o,k,n,l){if(!this._isOpera&&!this._isIE11){this.setStageVisible(0)}var d=this.getStage();var m="themeColor="+o+"&themeTextColor="+k+"&headerText="+n+"&rgId="+l+"&";if(this._emsvParams!=""){m=m+this._emsvParams;var j=this._emsvCdnHost+"/"+this._emsvVersion+"/emsv.swf";d.innerHTML=this.getSwfHtml("src",j,"width","100%","height","100%","id","_em_survey"+e,"name","_em_survey"+e,"wmode","opaque","flashVars",m)}};this.setStageVisible=function(d){if(!this._isIE){var j=this.getStage();j.style.visibility=d==1?"visible":"hidden"}};this.showSurvey=function(){this.setStageVisible(1);this._timeoutFlagPosInv4IE=0;if(this._isIE){var d=f.getElementsByTagName("select");if(d){for(i=0;i<d.length;i++){d[i].style.visibility="hidden"}}}this.posMain()};this.showFFArrow=function(k){var d=f.createElement("div");d.setAttribute("id","_em_ff_arrow_"+e);d.setAttribute("style","display:block;position:fixed;top:0px;right:0px;width:200px;padding:0px;margin:0;border:1px solid #bf8a01;border-top:0px;-moz-border-radius-bottomleft: 10px;-moz-border-radius-bottomright: 10px; background-color:#ffc703; background-image: -moz-linear-gradient(top, #ffc703, #ffe970, #ffd016, #ffc703 ); height:100px;");d.style.zIndex=2147483647;var j='<div style="width:100%;height:100%;background:transparent url('+this._emsvCdnHost+"/"+this._emsvVersion+'/images/plugin_arrow_bg_sm.gif) no-repeat 50px;2px;"><p style="padding:5px;width:100px;">'+k+"</p></div>";d.innerHTML=j;f.body.insertBefore(d,f.body.firstChild)}}if(document._em_is_panel){window._em_is_panel=document._em_is_panel}if(window._em_is_panel&&!window._emp){var _emp=new _EMeasure("_emp");_emp.loadStage().loadJs().voidme()}else{if(!window._em){var _em=new _EMeasure("_em");if(!_em._hasFlash){var v6=_em._emSchema+"s.effectivemeasure.net/js/em.js";_em.loadScript(v6,function(){})}else{_em.loadStage().loadJs().loadComponents().voidme()}}};