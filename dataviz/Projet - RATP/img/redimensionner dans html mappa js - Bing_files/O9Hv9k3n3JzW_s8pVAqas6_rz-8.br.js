var __spreadArrays=this&&this.__spreadArrays||function(){for(var i=0,n=0,r=arguments.length;n<r;n++)i+=arguments[n].length;for(var u=Array(i),f=0,n=0;n<r;n++)for(var e=arguments[n],t=0,o=e.length;t<o;t++,f++)u[f]=e[t];return u},ModernRewards;(function(n){var i="redDotDisplay",u="redDotDisplayFill",f="rewards_header_icon serp",e="rewards_header_icon hp",r="//az15297.vo.msecnd.net/images/rewards/membercenter/missions/redotAnimation@3.gif",t=!0,s=function(){function n(n){this.reportActivityModel=n;this.rewardsReadyEventArgs={isAuthenticated:n&&n.IsAuthenticated,isRebatesUser:n&&n.RewardsSessionData&&n.RewardsSessionData.IsRebatesUser,isRewardsUser:n&&n.RewardsSessionData&&n.RewardsSessionData.IsRewardUser,isTrialUser:n&&n.RewardsSessionData&&!n.RewardsSessionData.IsRewardUser&&n.RewardsSessionData.IsTrialUser}}return n.prototype.initialize=function(){var i=this,r,u;if(this.reportActivityModel&&(this.updateDashboardHeader(),this.updateMobileHeader(),((r=this.reportActivityModel.RewardsSessionData)===null||r===void 0?void 0:r.IsGiveModeOn)&&this.updateIdentityHeader(),_ge("rh_meter_leaf")||_ge("rh_meter_leaf_homepage"))){u=_ge("id_r");u&&(u.style.display="block");var n=this.reportActivityModel.RewardsSessionData,f=n.Balance>0||n.IsRewardUser,e=f?n.Balance.toString():this.reportActivityModel.RewardsHeader,o=_ge("id_rc");o&&e&&(o.innerHTML=e,this.reportActivityModel.AnimateHeader&&f&&(this.reportActivityModel.IsMobileClient?RewardsCreditRefresh.RewardsHeaderAnim(n.PreviousBalance,n.Balance,n.GoalTrackBalance,this.reportActivityModel.RewardsIncrement):sj_evt.bind("identityHeaderShown",function(){return RewardsCreditRefresh.RewardsHeaderAnim(n.PreviousBalance,n.Balance,n.GoalTrackBalance,i.reportActivityModel.RewardsIncrement)},1)))}sj_evt.fire("RewardsCookieUpdated");sj_evt.fire("rewready",this.rewardsReadyEventArgs);sj_evt.bind("redDotControl",function(){i.hideRedDot()});sj_evt.bind("rewardsRedDot",function(){return t=!1,i.updateIdentityHeader(),t},1);sj_evt.bind("redDotAnimation",function(){return t=!0,i.updateIdentityHeader(),t},1)},n.prototype.updateIdentityHeader=function(){var p=this,c,s;if(this.reportActivityModel){if(!this.reportActivityModel.RewardsSessionData)return;var n=this.reportActivityModel.RewardsSessionData,h=this.reportActivityModel.AnimationAltText,l=_ge("id_r");l&&(l.style.display="block");this.reportActivityModel.RewardsSessionData.IsGiveModeOn?(s=_ge(e),s&&(s.innerHTML=""+(n.ShowAnimation?'<img id = "'+i+'" src="'+r+'" alt="'+h+'" class = "" width = "8px" height = "8px" style="float:right;margin-right:-1px;margin-top:-1px" />':"")+('<svg width="30" height="30" style="'+(n.ShowAnimation?"margin-left: 1px":"")+'" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">')+'<rect width="30" height="30" fill="none"><\/rect><circle cx="15" cy="15" r="14" stroke="white" stroke-opacity="0.8" stroke-width="2"><\/circle><path d="M15 11.412L15.9463 11.7354C15.808 12.1401 15.4276 12.412 15 12.412C14.5723 12.412 14.192 12.1401 14.0537 11.7354L15 11.412ZM21.9309 12.3022L21.8452 13.2985C21.3557 13.2564 20.9693 12.865 20.9335 12.375L21.9309 12.3022ZM21.9411 12.303L22.0268 11.3067C22.4831 11.346 22.8545 11.6903 22.9281 12.1424L21.9411 12.303ZM17.6248 19.5469L17.0304 18.7427L17.0304 18.7427L17.6248 19.5469ZM15 20.6418L14.8739 19.6498C14.9576 19.6391 15.0423 19.6391 15.1261 19.6498L15 20.6418ZM12.3752 19.5469L12.9696 18.7427L12.9696 18.7427L12.3752 19.5469ZM8.05891 12.303L7.0719 12.1424C7.1455 11.6903 7.51684 11.346 7.9732 11.3067L8.05891 12.303ZM8.06909 12.3022L9.06643 12.375C9.03065 12.865 8.64426 13.2564 8.1548 13.2985L8.06909 12.3022ZM14.0537 11.0886C14.6673 9.29326 16.3687 8 18.3749 8V10C17.25 10 16.2917 10.7246 15.9463 11.7354L14.0537 11.0886ZM18.3749 8C20.7834 8 22.7555 9.86433 22.9282 12.2293L20.9335 12.375C20.8366 11.0476 19.7276 10 18.3749 10V8ZM22.0166 11.3058L22.0268 11.3067L21.8554 13.2994L21.8452 13.2985L22.0166 11.3058ZM22.9281 12.1424C23.252 14.132 22.44 15.8965 21.4296 17.2539C20.4155 18.6163 19.1155 19.6885 18.2192 20.3511L17.0304 18.7427C17.8606 18.1291 18.9815 17.1933 19.8253 16.0597C20.6727 14.9212 21.1556 13.7019 20.9541 12.4637L22.9281 12.1424ZM18.2192 20.3511C16.7902 21.4072 15.5844 21.7241 14.8739 21.6338L15.1261 19.6498C15.1153 19.6484 15.8058 19.6478 17.0304 18.7427L18.2192 20.3511ZM12.9696 18.7427C14.1942 19.6478 14.8846 19.6484 14.8739 19.6498L15.1261 21.6338C14.4156 21.7241 13.2098 21.4072 11.7808 20.3511L12.9696 18.7427ZM9.04591 12.4637C8.84434 13.7019 9.32726 14.9212 10.1747 16.0597C11.0185 17.1933 12.1394 18.1291 12.9696 18.7427L11.7808 20.3511C10.8844 19.6885 9.58447 18.6163 8.57039 17.2539C7.55998 15.8965 6.74801 14.132 7.0719 12.1424L9.04591 12.4637ZM8.1548 13.2985L8.14462 13.2994L7.9732 11.3067L7.98338 11.3058L8.1548 13.2985ZM11.6251 10C10.2724 10 9.16338 11.0476 9.06643 12.375L7.07175 12.2293C7.24447 9.86433 9.21662 8 11.6251 8V10ZM14.0537 11.7354C13.7083 10.7246 12.75 10 11.6251 10V8C13.6312 8 15.3327 9.29326 15.9463 11.0886L14.0537 11.7354Z" fill="white"><\/path> <\/svg>'),c=_ge(f),c&&(c.innerHTML=""+(n.ShowAnimation?'<img id = "'+i+'" src="'+r+'" alt="'+h+'" class = "" width = "8px" height = "8px" style="float: right;margin-right:-1px;margin-top:-1px;" />':"")+'<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" '+('style="'+(n.ShowAnimation?"margin-bottom: -2px; margin-left: 4px;":"margin-bottom: -2px; margin-left: 4px;")+'">')+'<rect width = "30" height = "30" fill = "none" /><\/rect><circle cx="15" cy="15" r="14" stroke="#00809d" stroke-opacity="0.8" stroke-width="2" /><path id="rh_animpath" class="serp anim" d="M15 11.412L15.9463 11.7354C15.808 12.1401 15.4276 12.412 15 12.412C14.5723 12.412 14.192 12.1401 14.0537 11.7354L15 11.412ZM21.9309 12.3022L21.8452 13.2985C21.3557 13.2564 20.9693 12.865 20.9335 12.375L21.9309 12.3022ZM21.9411 12.303L22.0268 11.3067C22.4831 11.346 22.8545 11.6903 22.9281 12.1424L21.9411 12.303ZM17.6248 19.5469L17.0304 18.7427L17.0304 18.7427L17.6248 19.5469ZM15 20.6418L14.8739 19.6498C14.9576 19.6391 15.0423 19.6391 15.1261 19.6498L15 20.6418ZM12.3752 19.5469L12.9696 18.7427L12.9696 18.7427L12.3752 19.5469ZM8.05891 12.303L7.0719 12.1424C7.1455 11.6903 7.51684 11.346 7.9732 11.3067L8.05891 12.303ZM8.06909 12.3022L9.06643 12.375C9.03065 12.865 8.64426 13.2564 8.1548 13.2985L8.06909 12.3022ZM14.0537 11.0886C14.6673 9.29326 16.3687 8 18.3749 8V10C17.25 10 16.2917 10.7246 15.9463 11.7354L14.0537 11.0886ZM18.3749 8C20.7834 8 22.7555 9.86433 22.9282 12.2293L20.9335 12.375C20.8366 11.0476 19.7276 10 18.3749 10V8ZM22.0166 11.3058L22.0268 11.3067L21.8554 13.2994L21.8452 13.2985L22.0166 11.3058ZM22.9281 12.1424C23.252 14.132 22.44 15.8965 21.4296 17.2539C20.4155 18.6163 19.1155 19.6885 18.2192 20.3511L17.0304 18.7427C17.8606 18.1291 18.9815 17.1933 19.8253 16.0597C20.6727 14.9212 21.1556 13.7019 20.9541 12.4637L22.9281 12.1424ZM18.2192 20.3511C16.7902 21.4072 15.5844 21.7241 14.8739 21.6338L15.1261 19.6498C15.1153 19.6484 15.8058 19.6478 17.0304 18.7427L18.2192 20.3511ZM12.9696 18.7427C14.1942 19.6478 14.8846 19.6484 14.8739 19.6498L15.1261 21.6338C14.4156 21.7241 13.2098 21.4072 11.7808 20.3511L12.9696 18.7427ZM9.04591 12.4637C8.84434 13.7019 9.32726 14.9212 10.1747 16.0597C11.0185 17.1933 12.1394 18.1291 12.9696 18.7427L11.7808 20.3511C10.8844 19.6885 9.58447 18.6163 8.57039 17.2539C7.55998 15.8965 6.74801 14.132 7.0719 12.1424L9.04591 12.4637ZM8.1548 13.2985L8.14462 13.2994L7.9732 11.3067L7.98338 11.3058L8.1548 13.2985ZM11.6251 10C10.2724 10 9.16338 11.0476 9.06643 12.375L7.07175 12.2293C7.24447 9.86433 9.21662 8 11.6251 8V10ZM14.0537 11.7354C13.7083 10.7246 12.75 10 11.6251 10V8C13.6312 8 15.3327 9.29326 15.9463 11.0886L14.0537 11.7354Z" /><\/svg>')):(s=_ge(e),s&&(s.innerHTML='<span class="rhlined hp">'+(n.ShowAnimation?t?'<img id = "'+i+'" src="'+r+'" alt="'+h+'" width = "8px" height = "8px" style="float:right;margin-right:-3px;margin-top:-4px" />':'<svg id = "'+i+'" class = "" width = "6px" height = "6px" style="float:right;margin-right:-3px;margin-top:-1px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 6" enable-background="new 0 0 6 6"><circle cx="3" cy="3" r="3" fill="#C80000"><\/circle><\/svg>':"")+('<svg style="'+(n.ShowAnimation?"margin-top:-4px;":"")+'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" enable-background="new 0 0 32 32">')+'<path class="medal" d="M23 9h-14c-.552 0-1 .448-1 1v3.71c0 .538.288 1.034.756 1.303l4.877 2.778c-1.206.891-1.905 2.43-1.532 4.115.323 1.461 1.501 2.655 2.96 2.987 2.617.596 4.939-1.378 4.939-3.893 0-1.32-.647-2.481-1.633-3.209l4.877-2.779-.002.001c.471-.268.758-.767.758-1.303v-3.71c0-.552-.448-1-1-1zm-12 4.991l-1-.571v-2.42h1v2.991zm5 9.009c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2zm3-7.866l-2.472 1.537c-.323.201-.733.201-1.056 0l-2.472-1.537v-4.134h6v4.134zm3-1.714l-1 .571v-2.991h1v2.42z"><\/path><path d="M.018 0h32v32h-32v-32z" fill="none"><\/path><circle class="meter" stroke="#000" stroke-width="2" stroke-miterlimit="10" cx="16" cy="16" r="14" fill="none"><\/circle><\/svg><\/span>'+('<span class="rhfill hp">'+(n.ShowAnimation?t?'<img id = "'+u+'" src="'+r+'" alt="'+h+'" width = "8px" height = "8px" style="float:right;margin-right:-3px;margin-top:-5px" />':'<svg id = "'+u+'" class = "" width = "6px" height = "6px" style="float:right;margin-right:-3px;margin-top:-3px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 6" enable-background="new 0 0 6 6"><circle cx="3" cy="3" r="3" fill="#C80000"><\/circle><\/svg>':""))+('<svg style="'+(n.ShowAnimation?"margin-top:-3px;":"")+'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" enable-background="new 0 0 32 32">')+'<path class="medal" d="M12 16.006l2.554 1.28c-1.492.581-2.554 2.023-2.554 3.72 0 2.209 1.791 4 4 4s4-1.791 4-4c0-1.696-1.06-3.138-2.551-3.719l2.551-1.281v-7h-8v7zm-4-6.5v4.183c0 .189.106.362.275.447l1.725.87v-6h-1.5c-.276 0-.5.224-.5.5zm15.5-.5h-1.5v6l1.725-.87c.169-.085.275-.258.275-.447v-4.183c0-.276-.224-.5-.5-.5z"><\/path><path d="M.018 0h32v32h-32v-32z" fill="none"><\/path><circle class="meter" stroke="#000" stroke-width="2" stroke-miterlimit="10" cx="16" cy="16" r="14" fill="none"><\/circle><\/svg><\/span><svg xmlns="http://www.w3.org/2000/svg" id="rh_meter"><circle cx="20" cy="20" r="14" id="rh_animcrcl" class="hp" stroke-dasharray="88, 88" transform="rotate(-90,20,20)"><\/circle><\/svg>'),s=_ge(f),s&&(s.innerHTML='<span class="rhlined serp">'+(n.ShowAnimation?t?'<img id = "'+i+'" src="'+r+'" alt="'+h+'" width = "8px" height = "8px" style="float:right;margin-right:-3px;margin-top:-5px;"/>':'<svg id = "'+i+'" class = "" width = "6px" height = "6px" style="float:right;margin-right:-3px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 6" enable-background="new 0 0 6 6"><circle cx="3" cy="3" r="3" fill="#C80000"><\/circle><\/svg>':"")+('<svg  style="'+(n.ShowAnimation?"margin-top:-4px;":"")+'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" enable-background="new 0 0 32 32">')+'<path class="medal" d="M23 9h-14c-.552 0-1 .448-1 1v3.71c0 .538.288 1.034.756 1.303l4.877 2.778c-1.206.891-1.905 2.43-1.532 4.115.323 1.461 1.501 2.655 2.96 2.987 2.617.596 4.939-1.378 4.939-3.893 0-1.32-.647-2.481-1.633-3.209l4.877-2.779-.002.001c.471-.268.758-.767.758-1.303v-3.71c0-.552-.448-1-1-1zm-12 4.991l-1-.571v-2.42h1v2.991zm5 9.009c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2zm3-7.866l-2.472 1.537c-.323.201-.733.201-1.056 0l-2.472-1.537v-4.134h6v4.134zm3-1.714l-1 .571v-2.991h1v2.42z"><\/path><path d="M.018 0h32v32h-32v-32z" fill="none"><\/path><circle class="meter" stroke="#000" stroke-width="2" stroke-miterlimit="10" cx="16" cy="16" r="14" fill="none"><\/circle><\/svg><\/span>'+('<span class="rhfill serp"> '+(n.ShowAnimation?t?'<img id = "'+u+'" src="'+r+'" alt="'+h+'" width = "8px" height = "8px" style="float:right;margin-right:-3px;margin-top:-5px"/>':'<svg id = "'+u+'" class = "" width = "6px" height = "6px" style="float:right;margin-right:-3px;margin-top:-2px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 6" enable-background="new 0 0 6 6"><circle cx="3" cy="3" r="3" fill="#C80000"><\/circle><\/svg>':""))+('<svg id = "serp_medal_svg" style="'+(n.ShowAnimation?"margin-top:-6px;":"")+'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" enable-background="new 0 0 32 32">')+'<path class="medal" d="M12 16.006l2.554 1.28c-1.492.581-2.554 2.023-2.554 3.72 0 2.209 1.791 4 4 4s4-1.791 4-4c0-1.696-1.06-3.138-2.551-3.719l2.551-1.281v-7h-8v7zm-4-6.5v4.183c0 .189.106.362.275.447l1.725.87v-6h-1.5c-.276 0-.5.224-.5.5zm15.5-.5h-1.5v6l1.725-.87c.169-.085.275-.258.275-.447v-4.183c0-.276-.224-.5-.5-.5z"><\/path><path d="M.018 0h32v32h-32v-32z" fill="none"><\/path><circle class="meter" stroke="#000" stroke-width="2" stroke-miterlimit="10" cx="16" cy="16" r="14" fill="none"><\/circle><\/svg><\/span><svg xmlns="http://www.w3.org/2000/svg" id = "rh_meter">'+('<circle cx="20" cy="20" r="14" id="rh_animcrcl" class="serp anim" stroke-dasharray="'+(this.reportActivityModel.IsMobileClient?"88,88":"0,88")+'" transform="rotate(-90,20,20)"><\/circle>')+"<\/svg>"));this.logInstrumentation(null,o.Load,"AnimationLoad",!0,{ShowAnimation:n.ShowAnimation,RedDotAnimation:t});var a=n.Balance>0||n.IsRewardUser,v=a?n.Balance.toString():this.reportActivityModel.RewardsHeader,y=_ge("id_rc");y&&v&&(y.innerHTML=v,this.reportActivityModel.AnimateHeader&&a&&(this.reportActivityModel.IsMobileClient?RewardsCreditRefresh.RewardsHeaderAnim(n.PreviousBalance,n.Balance,n.GoalTrackBalance,this.reportActivityModel.RewardsIncrement):sj_evt.bind("identityHeaderShown",function(){return RewardsCreditRefresh.RewardsHeaderAnim(n.PreviousBalance,n.Balance,n.GoalTrackBalance,p.reportActivityModel.RewardsIncrement)},1)))}},n.prototype.updateMobileHeader=function(){var t,n;!this.reportActivityModel.IsMobileClient||this.reportActivityModel.RewardsSessionData.Balance<0||(t=_ge("id_rwds_r"),t&&(t.style.display="inline"),n=_ge("id_rwds_b"),n||(n=_ge("fly_id_rwds_b")),n&&(n.href=this.reportActivityModel.DashboardUrl))},n.prototype.updateDashboardHeader=function(){if(this.reportActivityModel.NeedUpdateRewardsHeaderLink){var n=_ge("id_rh");n&&(n.href=this.reportActivityModel.DashboardUrl,typeof bepns!="undefined"&&bepns.ubc())}},n.prototype.hideRedDot=function(){var n=_ge(i),t=_ge(u);n&&Lib.CssClass.add(n,"rd_hide");t&&Lib.CssClass.add(t,"rd_hide")},n.prototype.logInstrumentation=function(n,t,i,r,u){var e,f;if(u=u||{},u.FID="ModernRewardsFlyout",u.EventName=i,_w&&_w.Log2&&Log2.LogEvent&&_G.XLS)Log2.LogEvent("ClientInst",u,t),Log2.ForceFlush&&r&&Log2.ForceFlush(!0);else if(_w&&_w.Log&&Log.Log){if(e=["Fallback","1"],u&&u.hasOwnProperty)for(f in u)u.hasOwnProperty(f)&&(e.push(f?f.toString():""),e.push(u[f]?u[f].toString():""));Log.Log.apply(Log,__spreadArrays([t,"ModernRewardsFlyout",i,r],e))}},n}(),o;n.ReportActivity=s,function(n){n.Click="Click";n.Init="Init";n.Load="Load";n.Success="Success";n.Error="Error"}(o=n.InstrumentationEventType||(n.InstrumentationEventType={}))})(ModernRewards||(ModernRewards={})),function(){sj_evt&&sj_evt.fire("onRALoad")}()