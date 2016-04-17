<!DOCTYPE html>
<html>
<head>
  <meta name="apple-itunes-app" content="app-id=584748522">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=10" />
  <link rel="shortcut icon" href="{{asset("/image/favicon.png")}}" />
<!--  <meta name="csrf-param" content="authenticity_token"/>
<meta name="csrf-token" content="hf4hk9bjWFE3ob3zfxE1wDxntk6CoHrzYzlWPr80rqQ="/>-->
  <title>注册</title>
<meta content="" name="description" />
<meta content="" name="keywords" />
  <link href="{{asset("/css/common/base.css")}}" media="screen" rel="stylesheet" type="text/css" />
<link href="{{asset("/css/common/default.css")}}" media="screen" rel="stylesheet" type="text/css" />
<link href="{{asset("/css/common/bar.css")}}" media="screen" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="{{asset("/css/common/footer.css")}}">
  <style type="text/css">
.header .nav_main ul li .sub_nav{
  box-shadow:none;
}
  .hero_wrap{
    /* background: url(/images/bgs/home/bg_pattern_gray.png) 0 0; */
    height:auto;
    border-top: 1px solid #C4D0E3;
  }
  .hero{
    height:auto;
    margin:0 auto;
    width:843px;
    padding:50px 0 150px;
    position:relative;
  }

  .hero .left {
    position:absolute;
    min-width:530px;
    z-index: 1;
  }



  .weibo {
    position: absolute;
    top: 124px;
    left: 95px;
    width: 85px;
    height: 24px;
    background: transparent;
    opacity: 0;
    filter: alpha(opacity = 0);
  }
  .success {
    color: #3CC457;
  }
  input[type="text"],.input,input[type="password"] {
  margin: 5px;
  border: 1px solid #B4B4B4;
  border-radius:2px;
  height: 28px;
  line-height: 28px;
  padding: 0px 10px;
  width:210px;
  }
  .register_content_center table td{
    padding-bottom:10px;
  }
  .register_content_center table td{
    font-size:14px;
  }


  .loginbtn {
    float: left;
    display: inline-block;
    width: 120px;
    height: 42px;
    line-height: 42px;
    text-align: center;
    font-size: 13px;
    color: #1999ed;
    border-radius: 2px;
    border: 1px solid #1999ed;
    margin-left: 15px;
    background: #fff;
    cursor:pointer;
  }

    div.error .head{
    background:url(/images/bgs/home/error_bg.png) no-repeat 0 0px;
    width:17px;
    height:27px;
    display:inline-block;
    float:left;
  }

  div.error .errorcontent{
    height:27px;
    display:inline-block;
    color: #FFF;
    background-color: #f14c3f;
    float:left;
    vertical-align: middle;
    line-height: 27px;
    padding-left:5px;
  }
  div.error .tail{
    width:17px;
    height:27px;
    background:url(/images/bgs/home/error_bg.png) no-repeat -4px -28px;
    display:inline-block;
    float:left;
  }
  label.error {color: #fff;margin-top:3px;}
  .validelabel {
    width:30px;
    height:30px;
    background:url(../../image/common/right_bg.png) no-repeat 0px 0px;
  }
</style>
</head>
<body id="sign_up" class="portal">
  <!-- header start -->
  <div class="header">
  	<div class="nav">
	<div class="nav_main clearfix">
    <div class="fr">
    	<div class="useinfo">
          <a href="/login.html">登录</a>
          <a href="/register.html">注册</a>
      </div>
    </div>
		<div class="logo">
    </div>
    <div class="menu">
      <ul class="clearfix">
        <li>
          <a href="/">首页</a>
        </li>
        <li>
          <a>产品</a>
          <div class="panel clearfix panel-pd">
            <dl>
              <dt>统计</dt>
              <dd><a href="/analytics" onclick="_gaq.push(['_trackEvent', '上方导航', '查看产品', '应用统计分析'])"><span class="icon i1"></span>应用统计</a></dd>
              <dd><a href="/analytics_games" onclick="_gaq.push(['_trackEvent', '上方导航', '查看产品', '游戏统计分析'])"><span class="icon i2"></span>游戏统计</a></dd>
            </dl>
            <dl>
              <dt>推送</dt>
              <dd><a href="/push" onclick="_gaq.push(['_trackEvent', '上方导航', '查看产品', '消息推送'])"><span class="icon i5"></span>消息推送</a></dd>
              <dd><a href="/im" onclick="_gaq.push(['_trackEvent', '上方导航', '查看产品', '即时通讯'])"><span class="icon i7"></span>即时通讯</a></dd>
            </dl>
            <dl>
              <dt>社交</dt>
              <dd><a href="/social" onclick="_gaq.push(['_trackEvent', '上方导航', '查看产品', '社会化分享'])"><span class="icon i8"></span>社会化分享</a></dd>
              <dd><a href="/wsq" onclick="_gaq.push(['_trackEvent', '上方导航', '查看产品', '微社区'])"><span class="icon i9"></span>微社区</a></dd>
            </dl>
            <dl>
              <dt>工具推荐</dt>
              <dd><a href="/baichuan_info" onclick="_gaq.push(['_trackEvent', '上方导航', '查看产品', '多媒体服务'])"><span class="icon i10"></span>多媒体服务</a></dd>
              <dd><a href="/update" onclick="_gaq.push(['_trackEvent', '上方导航', '查看产品', '自动更新'])"><span class="icon i16"></span>自动更新</a></dd>
              <dd><a href="/apptools" onclick="_gaq.push(['_trackEvent', '上方导航', '查看产品', '工具推荐'])"><span class="icon i11"></span>更多</a></dd>
            </dl>
          </div>
        </li>
        <li>
          <a href="http://www.umindex.com/" onclick="_gaq.push(['_trackEvent', '上方导航', '查看产品', '指数'])">指数</a>
        </li>
        <li>
          <a href="/reports" onclick="_gaq.push(['_trackEvent', '上方导航', '查看产品', '报告'])">报告</a>
        </li>
        <li>
          <a>开发者中心</a>
          <div class="panel panel-left-2">
            <ul class="list">
              <li><a href="http://dev.umeng.com/" onclick="_gaq.push(['_trackEvent', '上方导航', '查看产品', 'SDK下载及文档'])">SDK下载及文档</a></li>
              <li><a href="http://www.umeng.com/health" onclick="_gaq.push(['_trackEvent', '上方导航', '查看产品', '服务健康状态'])">服务健康状态</a></li>
            </ul>
          </div>
        </li>
        <li>
          <a href="http://bbs.umeng.com/" onclick="_gaq.push(['_trackEvent', '上方导航', '查看产品', '论坛'])">论坛</a>
        </li>
        <li>
          <a href="http://huodong.umeng.com" onclick="_gaq.push(['_trackEvent', '上方导航', '查看产品', '活动'])">活动</a>
        </li>
      </ul>
    </div>
	</div>
</div>

    
    
  </div>
  <!-- header end -->
  <div class="hero_wrap">
  <div class="hero">
    <div id="center">
      <div class="register_content">
        <div class="register_content_top"></div>
        <div class="register_content_center clearfix">
          <form accept-charset="UTF-8" action="user/signup" class="validate" id="signupform" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="hf4hk9bjWFE3ob3zfxE1wDxntk6CoHrzYzlWPr80rqQ=" /></div>
          <table border="0" cellspacing="0" cellpadding="0" align="center" class="left">

            <tr>
              <td width="135px"></td>
              <td colspan="2">
                <h3 class="login_error" style="color:red;"></h3>
              </td>
            </tr>

            <tr>
              <td width="80" align="right" valign="middle">邮箱<span class="req">*</span>&nbsp;</td>
              <td width="232">
                <input class="input_205 input_txt" id="email" name="user[email]" placeholder="" size="30" type="text" value="" />

              </td>
              <td class="status"></td>
            </tr>
            <tr>
              <td align="right" valign="middle">密码<span class="req">*</span>&nbsp;</td>
              <td>
                <input class="input_205 input_txt" id="user_password" maxlength="32" minlength="6" name="user[password]" size="32" type="password" />
              </td>
              <td class="status"></td>
            </tr>
            <tr>
              <td align="right" valign="middle">确认密码<span class="req">*</span>&nbsp;</td>
              <td>
                <input class="input_205 input_txt" id="user_password_confirmation" maxlength="32" minlength="6" name="user[password_confirmation]" size="32" type="password" />
              </td>
              <td class="status"></td>
            </tr>
            <tr>
              <td align="right" valign="middle">联系人&nbsp;</td>
              <td>
                <input class="input_205 input_txt" id="user_real_name" name="user[real_name]" size="30" type="text" />
              </td>
              <td class="status"></td>
            </tr>
            <tr>
              <td align="right" valign="middle">电话&nbsp;</td>
              <td>
                <input class="input_205 input_txt" id="user_phone" name="user[phone]" size="30" type="text" />
              </td>
              <td class="status cus_error">
                
              </td>
            </tr>
            <tr>
              <td align="right" valign="middle">QQ&nbsp;</td>
              <td>
                <input class="input_205 input_txt" id="user_qq" name="user[qq]" size="30" type="text" />
              </td>
              <td class="status"></td>
            </tr>
			<tr>
              <td align="right" valign="middle">微信&nbsp;</td>
              <td>
                <input class="input_205 input_txt" id="user_weixin" name="user[weixin]" size="30" type="text" />
              </td>
              <td class="status"></td>
            </tr>
            <!--
			<tr>
              <td align="right" valign="middle">公司名&nbsp;</td>
              <td>
                <input class="input_205 input_txt" id="user_company" name="user[company]" size="30" type="text" />
              </td>
              <td class="status"></td>
            </tr>
            <tr>
              <td align="right" valign="middle">验证码<span class="req">*</span>&nbsp;</td>
              <td>
                <input type="hidden" id="captcha_i" name="captcha_i" value="1c469fc43b601460094382" />
                <input type="text" class="input" name="captcha" id="captcha" placeholder="验证码" style="width:60px;"/>
                <img title="点击更换" style="cursor: pointer;height:35px;width:120px;float:right;" id="img_captcha" url="http://pin.aliyun.com/get_img?sessionid=1c469fc43b601460094382&identity=umeng_sso.umeng.com&type=150_40" src="http://pin.aliyun.com/get_img?sessionid=1c469fc43b601460094382&identity=umeng_sso.umeng.com&type=150_40"/>
              </td>
              <td class="status">
              </td>
            </tr>

            <tr class="agree">
              <td align="right" valign="middle"></td>
              <td>
                <input type="checkbox" name="agree" id="agree" class="checkbox" checked='checked'/>
                我已阅读并同意<a href="/privacypolicy" target="_blank">隐私政策</a>,&nbsp;<a href="/termsofservice" target="_blank">服务条款</a>
              </td>
              <td class="status"></td>
            </tr>
            <tr>
              <td align="right" valign="middle"></td>
              <td colspan="2">
                <input type="checkbox" name="subscribe" id="subscribe" class="checkbox" checked='checked'/>
                <span>订阅友盟数据报告及新闻</span>
              </td>
            </tr>-->
            <tr class="act">
              <td></td>
              <td colspan="2">
			    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <input type="submit" class="loginbtn" id="imageField" value="注册">
                <!--  <input type="image" name="imageField" id=""
                  src="/images/new_ui/register/register_button.png"/> -->
                  <!--span>已经注册？
                    <a href="https://www.umeng.com/sso/login?service=http://www.umeng.com/users/login_redirect" class="login">登录</a>
                  </span-->
                </td>
              </tr>
            </table>
            <div class="right">
              <!--div style="margin-top:10px;"><iframe width="230" height="24" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0" scrolling="no" border="0" src="http://widget.weibo.com/relationship/followbutton.php?language=zh_cn&width=230&height=24&uid=1775959991&style=3&btn=red&dpc=1"></iframe></div>
              <div>微信账号:umengcom</div-->
              <a class="weibo" href="http://weibo.com/umengcom" target="_blank">Umeng</a>
              <div class="followus"></div>

            </div>
</form>
          </div>
          <div class="register_content_bottom"></div>
        </div>
      </div>
    </div>
  </div>
</div>


  
<!--footer -->
  <input type="hidden" name="umengAds" id="pos" value="0"/>
</body>
<script type="text/javascript" src="{{asset("/javascript/common/jquery.min.js")}}"></script>
<script type="text/javascript" src="{{asset("/javascript/common/bar.js")}}"></script>
<script type="text/javascript" src="{{asset("/javascript/common/jquery.validate.1.8.0.js")}}"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('.header .nav_main .menu li').hover(
    function(){
      $(this).find('div.panel').show();
    },
    function(){
      $(this).find('div.panel').hide();
    }
  )
})

</script>
<script type="text/javascript">
  $(document).ready(function() {
    $("#error_explanation li").each(function(i){
      $(this).text($(this).text().replace(/Name/, "用户名"));
    });

    $.validator.addMethod("QQValidate", function(value, element) {
      return this.optional(element) || /^[0-9]{5,45}$/.test(value) || /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value);
    }, "QQ必须为最少5数字或者邮箱");

    $.validator.addMethod("PhoneValidate", function(value, element) {
      return this.optional(element) || /^(\+|\d)(\d+-{0,1}\d+)*$/.test($.trim(value));
    }, "电话号码不正确");

    var validator = $("#signupform").validate({
      rules: {
        "user[password]": {
          required: true,
          minlength: 6
        },
        "user[password_confirmation]": {
          required: true,
          minlength: 6,
          equalTo: "#user_password"
        },
        "user[qq]": {
          required: true,
          maxlength: 60,
          QQValidate: true
        },
        "user[phone]": {
          required: true,
          minlength: 11,
          maxlength: 20,
          PhoneValidate: true
        },
        "user[email]": {
          required: true,
          email: true,
          maxlength: 60
        },
        "user[real_name]": {
          required: true,
          minlength: 2,
          maxlength: 20
        },

        "user[company]":{
          minlength:4,
          maxlength:40,
        },
        "agree": {
          required: false
        }
      },
      messages: {
        "user[real_name]": {
          required: "联系人为必填",
          minlength: jQuery.format("请输入至少 {0} 字符"),
          maxlength: jQuery.format("请输入最多 {0} 字符")
        },
        "user[password]": {
          required: "请输入密码",
          minlength: jQuery.format("请输入至少 {0} 字符")
        },
        "user[password_confirmation]": {
          required: "请再输入密码",
          minlength: jQuery.format("请输入至少 {0} 字符"),
          equalTo: "两次输入不一致"
        },
        "user[email]": {
          required: "Email 为必填项",
          maxlength: jQuery.format("请输入最多 {0} 字符"),
          email: "Email 格式不正确"
        },
        "user[phone]": {
          required: "电话为必填",
          minlength: jQuery.format("请输入至少 {0} 字符"),
          maxlength: jQuery.format("请输入最多 {0} 字符")
        },
        "user[qq]": {
          required: "QQ为必填",
          maxlength: jQuery.format("请输入最多 {0} 字符")
        },
        "user[company]":{
          minlength: jQuery.format("请输入至少 {0} 字符"),
          maxlength: jQuery.format("请输入最多 {0} 字符")
        },

        //"agree": {required: "您需要同意这些政策"}
      },
      // the errorPlacement has to take the table layout into account
      errorPlacement: function(error, element) {
        if (element.is(":radio")) {
          error.appendTo(element.parent().next().next());
        } else {
          var container = $('<div class="error clearfix"><div class="head"></div><div class="errorcontent"></div><div class="tail"></div></div>');
          error.appendTo($('.errorcontent', container));
          container.appendTo(element.parent().next().html(''));
        }
      },

      // specifying a submitHandler prevents the default submit, good for the demo
      submitHandler: function(form) {
        var result = false;
        result = result || $.trim($('#user_phone').val()) != '';
        result = result || $.trim($('#user_qq').val()) != '';

        form.elements.user_phone.value = $.trim(form.elements.user_phone.value);

        if (result) {
          $('.contact-required').removeClass('error');
          form.submit();
        } else {
          $('.contact-required').addClass('error');
          return false;
        }
      },
      // set this class to error-labels to indicate valid fields
      success: function(label) {

        // username & email unique check
        if ( label.attr('for') == "email" ) {
          label.parents("div.error").parent().html('<div class="validelabel"></div>');
        } else {
          // set &nbsp; as text for IE
          label.html("&nbsp;").addClass("checked");
          label.parents(".error").remove();
        }
      }
    });

    $("#img_captcha").bind('click', function(){
      $("#img_captcha").attr('src', $("#img_captcha").attr('url')+'&ts='+((new Date()).getTime()));
    });

  });
</script>
</html>
