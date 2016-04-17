<!DOCTYPE html>
<html>
<head>
<base href="./">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title></title>
<meta name="description" content="" />
<meta name="keywords" content=""/>
<link href="{{asset('/css/uc/public/header.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('/css/uc/public/common.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('/css/uc/index_top.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('/css/uc/index_main.css')}}" rel="stylesheet" type="text/css"/>
<style type="text/css">
	input[type="text"],.input,select {
		margin: 5px;
		border: 1px solid #B4B4B4;
		border-radius:2px;
		height: 28px;
		line-height: 25px;
		padding: 0px 10px;
		width:210px;
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
	.req,.error{
		color:#ff0400;
	}
</style>
</head>
<body class="bga">
<!--header begin-->
<div class="header_prompt"><marquee behavior="alternate" scrollamount="7">为了能使网站达到更好的浏览效果，请您使用谷歌、火狐、IE8+等高级浏览器！</marquee>
</div>
<div id="topBar">
     <div class="siteWidth">	  
        	<div class="user_login"> 
        		<a href="/user/logout" onclick="exit()">退出</a> 
       		 	<a href="/user/toNoticeList">消息(<span id="message_count" class="color_blue">0</span>)</a> 
        		<a href="./auth/user/accountIndex">{{session('real_name')}}</a>
        	</div>
     </div>
 </div>
<!--header end-->
<!--container begin-->
<div class="container">
    <P class="current_position">您现在的位置：<a href="/">首页</a><span>></span>我的账户</P>
    <div class="account">
	@include("public.left")
    <div class="main">
        <table border="0" cellspacing="0" cellpadding="0" align="center" class="left">

            <tbody><tr>
              <td width="135px"></td>
              <td colspan="2">
                <h3 class="login_error" style="color:red;"></h3>
              </td>
            </tr>

            <tr>
              <td width="80" align="right" valign="middle">产品编号&nbsp;</td>
              <td width="232">
                <input class="input_205 input_txt" id="custom_id" name="custom_id" placeholder="" size="30" type="text" value="">

              </td>
              <td class="status"></td>
            </tr>
            <tr>
              <td align="right" valign="middle">生产商<span class="req">*</span>&nbsp;</td>
              <td>
                <select><option value="1">苹果</option></select>
              </td>
              <td class="status"></td>
            </tr>
            <tr>
              <td align="right" valign="middle">型号<span class="req">*</span>&nbsp;</td>
              <td>
                <select><option value="1">iphone6</option></select>
              </td>
              <td class="status"></td>
            </tr>
            <tr>
              <td align="right" valign="middle">名称&nbsp;</td>
              <td>
                <input class="input_205 input_txt" id="user_real_name" name="user[real_name]" size="30" type="text">
              </td>
              <td class="status"></td>
            </tr>
            <tr>
              <td align="right" valign="middle">上传图片&nbsp;</td>
              <td>
                <input class="input_205 input_txt" id="user_phone" name="user[phone]" size="30" type="text">
              </td>
              <td class="status cus_error">
                
              </td>
            </tr>
            <tr class="act">
              <td></td>
              <td colspan="2">
			    <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="submit" class="loginbtn" id="imageField" value="增加">
                </td>
              </tr>
            </tbody></table>
    </div>
    </div>
</div>
</body>
</html>
