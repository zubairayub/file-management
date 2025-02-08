(function(d){if(document.querySelectorAll("#myChart").length){const o=IQUtils.getVariableColor(),s=[o.primary,o.info],l={series:[55,75],chart:{height:230,type:"radialBar"},colors:s,plotOptions:{radialBar:{hollow:{margin:10,size:"50%"},track:{margin:10,strokeWidth:"50%"},dataLabels:{show:!1}}},labels:["Apples","Oranges"]},r=new ApexCharts(document.querySelector("#myChart"),l);r.render(),document.addEventListener("theme_color",i=>{const e=IQUtils.getVariableColor(),t=[e.primary,e.info],a={colors:t,fill:{type:"gradient",gradient:{shade:"dark",type:"vertical",gradientToColors:t,opacityFrom:1,opacityTo:1,colors:t}}};r.updateOptions(a)}),document.addEventListener("body_font_family",i=>{let e=getComputedStyle(document.body).getPropertyValue("--prefix")||"bs-";e&&(e=e.trim());const n={chart:{fontFamily:[getComputedStyle(document.body).getPropertyValue(`--${e}body-font-family`).trim()]}};r.updateOptions(n)})}if(document.querySelectorAll("#d-activity").length){const o=IQUtils.getVariableColor(),s=[o.primary,o.info],l={series:[{name:"Successful deals",data:[30,50,35,60,40,60,60,30,50,35]},{name:"Failed deals",data:[40,50,55,50,30,80,30,40,50,55]}],chart:{type:"bar",height:230,stacked:!0,toolbar:{show:!1}},colors:s,plotOptions:{bar:{horizontal:!1,columnWidth:"28%",endingShape:"rounded",borderRadius:5}},legend:{show:!1},dataLabels:{enabled:!1},stroke:{show:!0,width:2,colors:["transparent"]},xaxis:{categories:["S","M","T","W","T","F","S","M","T","W"],labels:{minHeight:20,maxHeight:20,style:{colors:"#8A92A6"}}},yaxis:{title:{text:""},labels:{minWidth:19,maxWidth:19,style:{colors:"#8A92A6"}}},fill:{opacity:1},tooltip:{y:{formatter:function(i){return"$ "+i+" thousands"}}}},r=new ApexCharts(document.querySelector("#d-activity"),l);r.render(),document.addEventListener("theme_color",i=>{const e=IQUtils.getVariableColor(),t=[e.primary,e.info],a={colors:t,fill:{type:"gradient",gradient:{shade:"dark",type:"vertical",gradientToColors:t,opacityFrom:1,opacityTo:1,colors:t}}};r.updateOptions(a)}),document.addEventListener("body_font_family",i=>{let e=getComputedStyle(document.body).getPropertyValue("--prefix")||"bs-";e&&(e=e.trim());const n={chart:{fontFamily:[getComputedStyle(document.body).getPropertyValue(`--${e}body-font-family`).trim()]}};r.updateOptions(n)})}if(document.querySelectorAll("#d-main").length){const o=IQUtils.getVariableColor(),s=[o.primary,o.info],l={series:[{name:"total",data:[94,80,94,80,94,80,94]},{name:"pipline",data:[72,60,84,60,74,60,78]}],chart:{fontFamily:'"Inter", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"',height:245,type:"area",toolbar:{show:!1},sparkline:{enabled:!1}},colors:s,dataLabels:{enabled:!1},stroke:{curve:"smooth",width:3},yaxis:{show:!0,labels:{show:!0,minWidth:19,maxWidth:19,style:{colors:"#8A92A6"},offsetX:-5}},legend:{show:!1},xaxis:{labels:{minHeight:22,maxHeight:22,show:!0,style:{colors:"#8A92A6"}},lines:{show:!1},categories:["Jan","Feb","Mar","Apr","Jun","Jul","Aug"]},grid:{show:!1},fill:{type:"gradient",gradient:{shade:"dark",type:"vertical",shadeIntensity:0,gradientToColors:void 0,inverseColors:!0,opacityFrom:.4,opacityTo:.1,stops:[0,50,80],colors:["#00276e","#4bc7d2"]}},tooltip:{enabled:!0}},r=new ApexCharts(document.querySelector("#d-main"),l);r.render(),document.addEventListener("theme_color",i=>{const e=IQUtils.getVariableColor(),t=[e.primary,e.info],a={colors:t,fill:{type:"gradient",gradient:{shade:"dark",type:"vertical",shadeIntensity:0,gradientToColors:t,inverseColors:!0,opacityFrom:.4,opacityTo:.1,stops:[0,50,60],colors:t}}};r.updateOptions(a)}),document.addEventListener("body_font_family",i=>{let e=getComputedStyle(document.body).getPropertyValue("--prefix")||"bs-";e&&(e=e.trim());const n={chart:{fontFamily:[getComputedStyle(document.body).getPropertyValue(`--${e}body-font-family`).trim()]}};r.updateOptions(n)})}if($(".d-slider1").length>0){const o={centeredSlides:!1,loop:!1,slidesPerView:4,autoplay:!1,spaceBetween:32,breakpoints:{320:{slidesPerView:1},450:{slidesPerView:2},991:{slidesPerView:2},1400:{slidesPerView:4},1500:{slidesPerView:4},1920:{slidesPerView:4},2040:{slidesPerView:4},2440:{slidesPerView:4}},pagination:{el:".swiper-pagination"},navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},scrollbar:{el:".swiper-scrollbar"}};let s=new Swiper(".d-slider1",o);document.addEventListener("theme_scheme_direction",l=>{s.destroy(!0,!0),setTimeout(()=>{s=new Swiper(".d-slider1",o)},500)})}})(jQuery);
