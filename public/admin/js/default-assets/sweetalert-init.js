!function(t){"use strict";var e=function(){};e.prototype.init=function(){t("#sa-basic").on("click",function(){Swal.fire({title:"لورم ایپسوم متن ساختگی با تولید سادگی ",confirmButtonClass:"btn btn-confirm mt-2"})}),t("#sa-title").click(function(){Swal.fire({title:"لورم ایپسوم متن ساختگی  ?",text:"لورم ایپسوم متن ساختگی با تولید سادگی ",type:"question",confirmButtonClass:"btn btn-confirm mt-2"})}),t("#sa-success").click(function(){Swal.fire({title:"بسیار خوب",text:"لورم ایپسوم متن ساختگی با تولید سادگی ",type:"success",confirmButtonClass:"btn btn-confirm mt-2"})}),t("#sa-error").click(function(){Swal.fire({type:"error",title:"اوه ...",text:"لورم ایپسوم متن ساختگی با تولید سادگی !",confirmButtonClass:"btn btn-confirm mt-2",footer:'<a href="">لورم ایپسوم متن ساختگی با تولید سادگی ?</a>'})}),t("#sa-long-content").click(function(){Swal.fire({imageUrl:"https://placeholder.pics/svg/300x1500",imageHeight:1500,imageAlt:"A tall image",confirmButtonClass:"btn btn-confirm mt-2"})}),t("#sa-custom-position").click(function(){Swal.fire({position:"top-end",type:"موفقیت",title:"لورم ایپسوم متن ساختگی با تولید سادگی ",showConfirmButton:!1,timer:1500})}),t("#sa-warning").click(function(){Swal.fire({title:"آیا شما مطمئن هستید؟",text:"لورم ایپسوم متن ساختگی با تولید سادگی !",type:"اخطار",showCancelButton:!0,confirmButtonColor:"#3085d6",cancelButtonColor:"#d33",confirmButtonText:"بله مطمئن هستم!"}).then(function(t){t.value&&Swal.fire("حذف!","لورم ایپسوم متن ساختگی با تولید سادگی .","موفقیت")})}),t("#sa-params").click(function(){Swal.fire({title:"مطمئن هستید؟",text:"لورم ایپسوم متن ساختگی با تولید سادگی !",type:"اخطار",showCancelButton:!0,confirmButtonText:"بله, حذف!",cancelButtonText:"نه, لغو!",confirmButtonClass:"btn btn-success mt-2",cancelButtonClass:"btn btn-danger ml-2 mt-2",buttonsStyling:!1}).then(function(t){t.value?Swal.fire({title:"حذف شد!",text:"لورم ایپسوم متن ساختگی با تولید سادگی ",type:"موفقیت"}):t.dismiss===Swal.DismissReason.cancel&&Swal.fire({title:"لغو",text:"لورم ایپسوم متن ساختگی با تولید سادگی ",type:"error"})})}),t("#sa-image").click(function(){Swal.fire({title:"عنوان",text:"لورم ایپسوم متن ساختگی با تولید سادگی ",imageUrl:"img/core-img/small-logo.png",imageHeight:50,animation:!1,confirmButtonClass:"btn btn-confirm mt-2"})}),t("#sa-close").click(function(){var t;Swal.fire({title:"لورم ایپسوم متن ساختگی  ",html:"زمان باقیمانده <strong></strong> ثانبه.",timer:2e3,onBeforeOpen:function(){Swal.showLoading(),t=setInterval(function(){Swal.getContent().querySelector("strong").textContent=Swal.getTimerLeft()},100)},onClose:function(){clearInterval(t)}}).then(function(t){t.dismiss===Swal.DismissReason.timer&&console.log("لورم ایپسوم متن ساختگی  ")})}),t("#custom-html-alert").click(function(){Swal.fire({title:"لورم ایپسوم متن ساختگی  ",type:"info",html:'لورم ایپسوم متن ساختگی با تولید سادگی </b>, <a href="//coderthemes.com/">لینک</a> ',showCloseButton:!0,showCancelButton:!0,confirmButtonClass:"btn btn-confirm mt-2",cancelButtonClass:"btn btn-cancel ml-2 mt-2",confirmButtonText:'<i class="fa fa-thumbs-o-up" aria-hidden="true"></i> عالی !',cancelButtonText:'<i class="fa fa-thumbs-o-down" aria-hidden="true"></i>'})}),t("#custom-padding-width-alert").click(function(){Swal.fire({title:"لورم ایپسوم متن ساختگی با تولید سادگی ",width:600,padding:100,confirmButtonClass:"btn btn-confirm mt-2",background:"#fff url(//subtlepatterns2015.subtlepatterns.netdna-cdn.com/patterns/geometry.png)"})}),t("#ajax-alert").click(function(){Swal.fire({title:"نام کاربر را وارد کنید.",input:"text",inputAttributes:{autocapitalize:"off"},showCancelButton:!0,confirmButtonText:"ارسال",showLoaderOnConfirm:!0,preConfirm:function(t){return fetch("//api.github.com/users/"+t).then(function(t){if(!t.ok)throw new Error(t.statusText);return t.json()}).catch(function(t){Swal.showValidationMessage("فیلد مورد نظر: "+t)})},allowOutsideClick:function(){Swal.isLoading()}}).then(function(t){t.value&&Swal.fire({title:t.value.login+"'s avatar",imageUrl:t.value.avatar_url})})}),t("#chaining-alert").click(function(){Swal.mixin({input:"text",confirmButtonText:"بعدی ",showCancelButton:!0,progressSteps:["1","2","3"]}).queue([{title:"سوال 1",text:"لورم ایپسوم متن ساختگی با تولید سادگی "},"سوال 2","سوال 3"]).then(function(t){t.value&&Swal.fire({title:"انجام شد!",html:"جواب شما: <pre><code>"+JSON.stringify(t.value)+"</code></pre>",confirmButtonText:"دوست داشتنی!"})})}),t("#dynamic-alert").click(function(){swal.queue([{title:"آی پی شما",confirmButtonText:"نمایش آی پی",confirmButtonClass:"btn btn-confirm mt-2",text:"لورم ایپسوم متن ساختگی با تولید سادگی ",showLoaderOnConfirm:!0,preConfirm:function(){return new Promise(function(e){t.get("https://api.ipify.org?format=json").done(function(t){swal.insertQueueStep(t.ip),e()})})}}])})},t.SweetAlert=new e,t.SweetAlert.Constructor=e}(window.jQuery),function(t){"use strict";window.jQuery.SweetAlert.init()}();