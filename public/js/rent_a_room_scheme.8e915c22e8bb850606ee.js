!function(){var e={"92zt":function(){class e extends HTMLElement{connectedCallback(){this.videoId=this.getAttribute("videoid");let t=this.querySelector(".lty-playbtn");if(this.playLabel=t&&t.textContent.trim()||this.getAttribute("playlabel")||"Play",this.style.backgroundImage||(this.style.backgroundImage=`url("https://i.ytimg.com/vi/${this.videoId}/hqdefault.jpg")`),t||(t=document.createElement("button"),t.type="button",t.classList.add("lty-playbtn"),this.append(t)),!t.textContent){const e=document.createElement("span");e.className="lyt-visually-hidden",e.textContent=this.playLabel,t.append(e)}t.removeAttribute("href"),this.addEventListener("pointerover",e.warmConnections,{once:!0}),this.addEventListener("click",this.addIframe),this.needsYTApiForAutoplay=navigator.vendor.includes("Apple")||navigator.userAgent.includes("Mobi")}static addPrefetch(e,t,n){const i=document.createElement("link");i.rel=e,i.href=t,n&&(i.as=n),document.head.append(i)}static warmConnections(){e.preconnected||(e.addPrefetch("preconnect","https://www.youtube-nocookie.com"),e.addPrefetch("preconnect","https://www.google.com"),e.addPrefetch("preconnect","https://googleads.g.doubleclick.net"),e.addPrefetch("preconnect","https://static.doubleclick.net"),e.preconnected=!0)}fetchYTPlayerApi(){window.YT||window.YT&&window.YT.Player||(this.ytApiPromise=new Promise(((e,t)=>{var n=document.createElement("script");n.src="https://www.youtube.com/iframe_api",n.async=!0,n.onload=t=>{YT.ready(e)},n.onerror=t,this.append(n)})))}async addYTPlayerIframe(e){this.fetchYTPlayerApi(),await this.ytApiPromise;const t=document.createElement("div");this.append(t);const n=Object.fromEntries(e.entries());new YT.Player(t,{width:"100%",videoId:this.videoId,playerVars:n,events:{onReady:e=>{e.target.playVideo()}}})}async addIframe(){if(this.classList.contains("lyt-activated"))return;this.classList.add("lyt-activated");const e=new URLSearchParams(this.getAttribute("params")||[]);if(e.append("autoplay","1"),e.append("playsinline","1"),this.needsYTApiForAutoplay)return this.addYTPlayerIframe(e);const t=document.createElement("iframe");t.width=560,t.height=315,t.title=this.playLabel,t.allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture",t.allowFullscreen=!0,t.src=`https://www.youtube-nocookie.com/embed/${encodeURIComponent(this.videoId)}?${e.toString()}`,this.append(t),t.focus()}}customElements.define("lite-youtube",e)},CiB1:function(){},"85sd":function(){}},t={};function n(i){if(t[i])return t[i].exports;var o=t[i]={exports:{}};return e[i](o,o.exports,n),o.exports}n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,{a:t}),t},n.d=function(e,t){for(var i in t)n.o(t,i)&&!n.o(e,i)&&Object.defineProperty(e,i,{enumerable:!0,get:t[i]})},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},function(){"use strict";n("CiB1"),n("85sd"),n("92zt")}()}();
//# sourceMappingURL=rent_a_room_scheme.8e915c22e8bb850606ee.js.map