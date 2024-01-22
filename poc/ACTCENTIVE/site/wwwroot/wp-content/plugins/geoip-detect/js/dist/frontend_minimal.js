!function(){function e(e,t,n,r,o,i,a){try{var u=e[i](a),s=u.value}catch(e){n(e);return}u.done?t(s):Promise.resolve(s).then(r,o)}function t(t){return function(){var n=this,r=arguments;return new Promise(function(o,i){var a=t.apply(n,r);function u(t){e(a,o,i,u,s,"next",t)}function s(t){e(a,o,i,u,s,"throw",t)}u(void 0)})}}function n(e,t){var n,r,o,i,a=function(e){return function(t){return u([e,t])}},u=function(i){if(n)throw TypeError("Generator is already executing.");for(;s;)try{if(n=1,r&&(o=2&i[0]?r.return:i[0]?r.throw||((o=r.return)&&o.call(r),0):r.next)&&!(o=o.call(r,i[1])).done)return o;switch(r=0,o&&(i=[2&i[0],o.value]),i[0]){case 0:case 1:o=i;break;case 4:return s.label++,{value:i[1],done:!1};case 5:s.label++,r=i[1],i=[0];continue;case 7:i=s.ops.pop(),s.trys.pop();continue;default:if(!(o=(o=s.trys).length>0&&o[o.length-1])&&(6===i[0]||2===i[0])){s=0;continue}if(3===i[0]&&(!o||i[1]>o[0]&&i[1]<o[3])){s.label=i[1];break}if(6===i[0]&&s.label<o[1]){s.label=o[1],o=i;break}if(o&&s.label<o[2]){s.label=o[2],s.ops.push(i);break}o[2]&&s.ops.pop(),s.trys.pop();continue}i=t.call(e,s)}catch(e){i=[6,e],r=0}finally{n=o=0}if(5&i[0])throw i[1];return{value:i[0]?i[1]:void 0,done:!0}},s={label:0,sent:function(){if(1&o[0])throw o[1];return o[1]},trys:[],ops:[]};return i={next:a(0),throw:a(1),return:a(2)},"function"==typeof Symbol&&(i[Symbol.iterator]=function(){return this}),i}var r,o,i=function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"GET",n=new XMLHttpRequest;return new Promise(function(r,o){n.onreadystatechange=function(){4===n.readyState&&(n.status>=200&&n.status<300?r(n):o({status:n.status,statusText:n.statusText,request:n}))},n.open(t||"GET",e,!0),n.send()})},a=function(e){try{return JSON.parse(e)}catch(t){return u("Invalid JSON: "+e)}};function u(e){return{is_empty:!0,extra:{error:e}}}var s=(r=t(function(e){var t,r,o=arguments;return n(this,function(n){switch(n.label){case 0:t=o.length>1&&void 0!==o[1]?o[1]:"GET",n.label=1;case 1:return n.trys.push([1,3,,4]),[4,i(e,t)];case 2:if(!(r=n.sent()).responseText||"0"===r.responseText)return[2,u("Got an empty response from server. Did you enable AJAX in the options?")];return[2,a(r.responseText)];case 3:return[2,a(n.sent().request.responseText)];case 4:return[2]}})}),function(e){return r.apply(this,arguments)}),c=function(e,t,n){var r={value:t,expires_at:new Date().getTime()+1e3*n/1};localStorage.setItem(e.toString(),JSON.stringify(r))},l=function(e){var t=null;try{t=JSON.parse(localStorage.getItem(e.toString()))}catch(e){return null}if(null!==t){if(!(null!==t.expires_at&&t.expires_at<new Date().getTime()))return t.value;localStorage.removeItem(e.toString())}return null},f=function(){return l(d.cookie_name)},p=function(e,t){c(d.cookie_name,e,t)},d=(null===(o=window.geoip_detect)||void 0===o?void 0:o.options)||{ajaxurl:"/wp-admin/admin-ajax.php",default_locales:["en"],cookie_duration_in_days:7,cookie_name:"geoip-detect-result",do_body_classes:!1},v=null;function h(){return(h=t(function(){var e,t,r,o,i,a;return n(this,function(n){switch(n.label){case 0:if(e=!1,t=!1,d.cookie_name&&(null==(t=f())?void 0:t.extra))return!0===t.extra.override?console.info("Geolocation IP Detection: Using cached response (override)"):console.info("Geolocation IP Detection: Using cached response"),[2,t];n.label=1;case 1:return n.trys.push([1,3,,4]),[4,(v||(v=s(d.ajaxurl+"?action=geoip_detect2_get_info_from_current_ip")).then(function(e){var t;(null==e?void 0:null===(t=e.extra)||void 0===t?void 0:t.error)&&console.error("Geolocation IP Detection Error: Server returned an error: "+e.extra.error)}),v)];case 2:return e=n.sent(),[3,4];case 3:return console.log("Weird: Uncaught error...",r=n.sent()),e=r.responseJSON||r,[3,4];case 4:if(d.cookie_name){if((null==(t=f())?void 0:null===(o=t.extra)||void 0===o?void 0:o.override)===!0)return console.info("Geolocation IP Detection: Using cached response (override)"),[2,t];a=86400*d.cookie_duration_in_days,(null==e?void 0:null===(i=e.extra)||void 0===i?void 0:i.error)&&(a=60),p(e,a)}return[2,e]}})})).apply(this,arguments)}function y(){return(y=t(function(){return n(this,function(e){switch(e.label){case 0:return[4,function(){return h.apply(this,arguments)}()];case 1:return[2,e.sent()]}})})).apply(this,arguments)}window.geoip_detect.get_info=function(){return y.apply(this,arguments)}}();
//# sourceMappingURL=frontend_minimal.js.map
