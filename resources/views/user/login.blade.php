<!DOCTYPE HTML>
<html>
<head>
  <title>1号订单</title>
  <link rel="stylesheet" type="text/css" href="{{asset("/css/common/base.css")}}" />
  <link rel="stylesheet" type="text/css" href="{{asset("/css/common/cas.css")}}" />
  <link rel="icon" type="image/png" href="{{asset("/image/favicon.png")}}" />
</head>
<body>
  <div class="panel">
  <div style="min-height:100%;">
    <div style="min-height:50px"></div>
    <div class="contentpanel">
      <div class="formpanel">
        

<form class="login" id="login-form">
  
  
  <p><span class="input-bg"><input type="text" name="email" id="email" placeholder="邮箱"  autocomplete="on" /></span></p>
  <p><span class="input-bg"><input type="password" name="password" id="passWord" placeholder="密码" /></span></p>
  <p class="btnpanel">
    <input type="hidden" name="_token" id="csrf_token" value="{{csrf_token()}}"/>
    <input type="submit" value="登&nbsp;录" class="submit" id="login-submit" accesskey="l"/>
    <span>
      <a href="/forgetPwd.html" class="forget">忘记密码?</a>
      <a href="/register.html" class="reg">注册</a>
    </span>
  </p>
</form>

      </div>
    </div>
  </div>
</div>

</body>
<script type="text/javascript" src="{{asset("/javascript/common/jquery.min.js")}}"></script>
<script type="text/javascript" src="{{asset("/javascript/common/jquery.validate.1.8.0.js")}}"></script>
<script type="text/javascript">
$().ready(function(){
  $('.input-bg input').focus(function(){
    $(this).parent().addClass('input-bg-active');
  })
  $('.input-bg input').blur(function(){
    $(this).parent().removeClass('input-bg-active');
  })
  $('.input-bg input').keyup(function(){
    if($(this).val().length > 1){
      $('.messagebox').hide("fast");
    }
  })
  $('.login').validate({
    rules:{
      "email":{
        required:true
      },
      "password":{
        required:true
      }
    },
    errorPlacement: function(error,element) {
      $(element).after(error);
      $(error).prepend('<b class="corner"></b>');
    },
    wrapper:'h4',
    errorContainer:'div.error',
    messages:{
      "email":{
        required:"Email不能为空!"
      },
      "password":{
        required:"密码不能为空!"
      }
    },

    submitHandler:function(){
      var url = "user/login";
      var data = {"email":$("#email").val(),"password":$("#passWord").val()};
      var header = {"X-CSRF-Token":$("#csrf_token").val()};
      $.ajax({url:url,
        type:"post",
        dataType:"json",
        data:data,
        headers:header,
        success:function(ret){
          if(ret.status == '1'){
            window.location.href = "/userCenter/index";
          }else{
            
          }
          
        },
        error:function(){

        }
      })
    }
  });
  $("#img_captcha").bind('click', function(){
     $("#img_captcha").attr('src', $("#img_captcha").attr('url')+'&ts='+((new Date()).getTime()));
  });
})
</script>
</html>
