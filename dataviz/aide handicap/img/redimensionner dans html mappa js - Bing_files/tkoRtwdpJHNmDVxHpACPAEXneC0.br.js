(function(){function o(n){var e=fab_config&&fab_config.fabSbActionHover,u,r,f,i;if(_w.sj_log&&sj_log("CI.Fab","hover","1"),e==="Expand")if(t||fab_config.fabSbActionData!=="AutoSuggest"){if(t||fab_config.fabSbActionData!=="RelatedSearch")t.style.transform==="scaleX(0)"&&document.getElementsByClassName("b_fabHide").length===0&&(t.style.display="flex",sb_st(function(){t.style.transform="scaleX(1)"},50));else if(_w.sj_log&&sj_log("CI.FabRS","hover","1"),u=_d.getElementsByClassName("b_rs"),u.length>0){for(r=u[0].getElementsByTagName("a"),f=[],i=0;i<r.length;i++)f.push({html:r[i].innerHTML,url:r[i].getAttribute("href"),src:"RS"});v(f)}}else{_w.sj_log&&sj_log("CI.FabAS","hover","1");var o=typeof URLSearchParams=="undefined"?k("q"):new URLSearchParams(_w.location.search).get("q"),s="&mkt="+_G.Mkt,h="&query="+o,c="as/api/osjson?".concat(s,h);sj_ajax(c,{callback:function(n,t){var o,i,e,u,r,f,s;if(n&&t&&(o=t.request.responseText,i=JSON.parse(o),i[0]&&i[1])){for(e=[],u=i[0],r=0;r<i[1].length;r++)i[1][r]!==u&&(f=i[1][r].indexOf(u),s=f===0?u+"<strong>"+i[1][r].substring(f+u.length)+"<\/strong>":"<strong>"+i[1][r].substring(0,f)+"<\/strong>"+u+"<strong>"+i[1][r].substring(f+u.length)+"<\/strong>",e.push({html:s,url:"/search?q="+i[1][r].replace(/  +/g,"+")+"&FORM=QBRE",src:"AS"}));v(e)}}})}sj_pd(n);sj_sp(n)}function s(){t&&(t.style.transform="scaleX(0)",sb_st(function(){t.style.display="none"},b))}function v(n){var u,r;if(!t&&i&&n.length>0){for(t=sj_ce("div","fabstrip","b_fabstrip"),i.insertBefore(t,i.firstChild),u=function(i){var r=sj_ce("li","fabas_"+i,"b_fabli");if(n[i].html.length===0)return"continue";r.innerHTML=n[i].html;t.appendChild(r);sj_be(r,f,function(){si_ct(_ge("FABStripLink"));_w.open(n[i].url,"_self");_w.sj_log&&sj_log("CI.Fab"+n[i].src,"click",n[i].html)})},r=0;r<Math.min(3,n.length);r++)u(r);t.style.display="flex";sb_st(function(){t.style.transform="scaleX(1)"},1)}}function k(n){var t=new RegExp("[?&]"+n+"=([^&#]*)").exec(window.location.href);return t==null?null:decodeURI(t[1])||0}function y(t){var u=fab_config&&fab_config.fabSbAction,i;_w.sj_log&&sj_log("CI.Fab","click","dist_"+_w.pageYOffset+"_"+_d.documentElement.offsetHeight);sj_evt.fire("fab_vis",!1);u&&u=="OpenPinHeader"?d():(n.scrollIntoView({behavior:"smooth"}),r.focus(),r.click(),i=r.value,r.setSelectionRange(i.length,i.length));sj_sp(t);sj_pd(t)}function d(){function a(){o();i(sj_b,t);sj_evt.fire("fab_vis",!0)}function v(){sj_be(_ge("b_content"),f,a);sj_evt.bind(e,l,!1)}function y(){sj_evt.unbind(e,l)}function o(){_w.sj_log&&sj_log("CI.FabPinHead","unpinned","1");i(sj_b,t);i(n,"b_pinele");n.style.top="auto"}function p(){if(n&&!h){h=!0;i(sj_b,t);v();var r=sj_ce("div","pinHead");n.parentElement.insertBefore(r,n);n.parentElement.removeChild(n);r.appendChild(n);r.style.height=n.offsetHeight+"px"}}function l(){o();h=!1;y();w()}function w(){var t=n.parentElement;t.outerHTML=n.outerHTML}var t="b_pinhead",s=Lib.CssClass.add,i=Lib.CssClass.remove,c,u;p();c=Lib.CssClass.contains(sj_b,t);c?(o(),i(sj_b,t),sj_evt.fire("fab_vis",!0)):(_w.sj_log&&sj_log("CI.FabPinHead","pinned","1"),s(sj_b,t),n.style.top=-n.offsetHeight+"px",s(n,"b_pinele"),sb_st(function(){n.style.top="0px"},0),r.focus(),r.click(),u=r.value,r.setSelectionRange(u.length,u.length))}function p(){n=_ge("b_header");i=_ge("mfa_root");u=_ge("mfa_srch");r=_ge("sb_form_q");n&&i&&u&&r&&(fab_config&&fab_config.fabStyle===2&&(Lib.CssClass.add(i,"b_fabexp"),i.setAttribute("data-sbtip",fab_config.fabTooltip)),g())}function g(){sj_be(i,c,o,!1);sj_be(i,l,s,!1);sj_be(i,a,o,!1);sj_evt.bind("fab_hide",s);sj_be(u,f,y,!1);sj_evt.bind(e,w)}function w(){sj_ue(i,c,o);sj_ue(i,l,s);sj_ue(i,a,o);sj_evt.unbind("fab_hide",s);sj_ue(u,f,y);sj_evt.unbind(e,w);sj_evt.unbind("onP1",p)}var n,i,u,r,t,h=!1,f="click",c="mouseenter",l="mouseleave",a="mousemove",e="ajax.unload",b=400;sj_evt.bind("onP1",p,!0)})()