/* require jQuery.js ,jQueryUI, storage for ie6,7
 * Dom:
 *  <div id="hellobar" class="hellobar" style="display:none">
 *    <span>
 *    </span>
 *    <a class="close-notify"><img class="hellobar-up-arrow" src="/images/icons/hellobar-up-arrow.png"></a>
 *  </div>
 *  <div class="hellobar-stub" style="display:none">
 *    <a class="show-notify"><img class="hellobar-down-arrow" src="/images/icons/hellobar-down-arrow.png"></a>
 *  </div>
 *  <input type="hidden" name="umengAds" id="pos" value="">
 *  value = 0 ==>portal
 *  value = 1 ==>report
 *  value = 2 ==>docs
 */
var umengAdsBar = function(){
  var t = this;
  this.time = 86400000; // 1day
  this.doajax = function(pos,id,callback){
    $.ajax({
      type:'get',
      dataType:'jsonp',
      url:'http://op.umeng.us/ads/get?pos='+pos,
      success:function(data){
        if(data.status == '1'){
          callback(data,id);
        }
        t.setCookie(pos,data);
      }
    })
  };
  this.showbar = function(params,adsId){
    $('#hellobar span').html('');
    if(params.link){
      $('#hellobar span').text(params.content);
      $('#hellobar span').append('<a href="' + params.link + '" target="_blank">了解更多</a>');
    }else{
      $('#hellobar span').text(params.content);
    }
    if(params.id != adsId){
      hellobar_show();
    }else{
      t.setUserAg();
    }
    
  };
  this.getAds = function(posid,id){
    //t.doajax(posid,id,t.showbar);
  };
  this.getCookie = function(id){
    var ls = localStorage[id];
    if(ls != "undefined"){
      return JSON.parse(ls);
    }else{
      return undefined;
    }
  };
  this.setCookie = function(id,data,isClear){
    if(isClear != undefined){
      t.clearCookie(id);
    }
    var H = new Date().getDate();
    data["expireTime"] = H;
    var string = JSON.stringify(data);
    localStorage[id] = string;
  };
  this.clearCookie = function(s){
    if(s){
      localStorage.removeItem(s);
    }
  };
  this.setUserAg = function(){
    if(localStorage.getItem('userAg'+$('body').attr('class')) == "hide"){
      hellobar_hide();
    }else{
      hellobar_show();
    }
  };
  return{
    setExpireTime: function(time){ //time = sec/1000
      if(time != undefined && typeof time == number){
        return t.time = time;
      }else{
        return t.time = 86400;
      }
    },
    init: function(){
      var pos = $('#pos').val();
      var ls = localStorage.getItem(pos);
      if(ls == null){
        //no ads
        t.getAds(pos,'');
      }else{
        //get cache
        var data = t.getCookie(pos);
        var currentDate = new Date().getDate();
        //expired
        if(currentDate != data.expireTime){
          t.clearCookie(pos);
          t.getAds(pos,data.id);
        }else{
          //has ads
          if(data.status == '1'){
            t.showbar(data,data.id);
          }else{
            return false;
          }
          
        }
      }
    }
  }
};
// var uab = new umengAdsBar();
// uab.init();

// ads show and hide
var stub_showing = false;
(function(){
  $('.show-notify').bind('click',function(){
    localStorage.setItem('userAg'+$('body').attr('class'),'show');
    hellobar_show();
  });
  $('.close-notify').bind('click',function(){
    localStorage.setItem('userAg'+$('body').attr('class'),'hide');
    hellobar_hide();
  });
})();
function hellobar_show(){
  if(stub_showing){
    $('.hellobar-stub').slideUp('fast', function() {
      $('.hellobar').show('bounce', { times:3, distance:15 }, 100); 
      $('body').animate({"marginTop": "35px"}, 250);
    }); 
  }else{
    $('.hellobar').show('bounce', { times:3, distance:15 }, 100); 
    $('body').animate({"marginTop": "35px"}, 250);
  }
};
function hellobar_hide(){ 
    $('.hellobar').slideUp('fast', function() {
      $('.hellobar-stub').show('bounce', { times:3, distance:15 }, 100);
      stub_showing = true;
    }); 
    if( $(window).width() > 1024 ) {
      $('body').animate({"marginTop": "0px"}, 250);
    }
};
