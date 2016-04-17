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
  .load_ten_trade p{ text-align: center;}
</style>
</head>
<body class="bga">
<!--header begin-->
<div class="header_prompt"><marquee behavior="alternate" scrollamount="7">为了能使网站达到更好的浏览效果，请您使用谷歌、火狐、IE8+等高级浏览器！</marquee></div>
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
            <div class="account_apage">
                <p><a> <img src="{{asset("/image/common/default_head.jpg")}}"/> </a></p>
                <ul>
                    <li class="account_apage_l1">亲爱的<span>{{session('real_name')}}</span>，您好！</li>
                    <li class="account_apage_l2"> 
                        <!-- 邮箱 -->
                    		<span class="account_em_b"><a href="./auth/user/securityCenter">已验证</a></span>
                    	<!-- 手机 -->
                    		<span class="account_ph_b"><a href="./auth/user/securityCenter">已验证</a></span>     	
                    	<!-- 身份证 -->
                 		<span class="account_us_b"><a href="./auth/user/securityCenter">已验证</a></span>   	
                    	<span class="account_apage_l2sd">安全等级：<font>
                    	
                    		<span style="color: #55A1DD;">高</span>
                    	</font></span> 
                   	</li>
                </ul>
            </div>
            <div class="account_bpage">
                <div style="float: left;">
                	<p style="display: inline-block; float: left; height: 30px;clear:both;">
                	可用余额 :
                	<span>0.00</span>元
                	</p>
                	<p style="display: inline-block; float: left;height: 30px;clear:both;">
                	我的体验金:
                	<span>0.00</span>元   <i id="receiveCheck" style="display:none;"><a href="javascript:void(0)" onclick="experience_info()">领取</a></i> <i id="seeCheck" style="display:none;"><a href="javascript:void(0);" onclick="expOnclick()">查看</a></i>
                	</p>
                	
                </div>
                <div style="float: right;">
                	<ul>
	                    <li class="account_bpage_l1"><a href="./tender/borrowList">投资</a></li>
	                    <li class="account_bpage_l2"><a href="./auth/payment/show">充值</a></li>
	                    <li class="account_bpage_l3"><a href="./auth/payment/show?tabType=2">提现</a></li>
	                </ul>
	                <a class="zdtb" href="./auth/tender/selectBidAutoByUserId">智能抢标</a> 
                	
                </div>
            </div>
                
                
                
            <div class="account_cpage" id="mark_dd_id">
                <h3><span>账户总览</span></h3>
                <ul>
                    <li class="account_cpage_l1">
                        <dl>                        
                        	       	
                            <dt>账户净资产(元)</dt>
                            <dd><span>0.00</span></dd>
                        </dl>
                    </li>
                    <li class="account_cpage_l6">=</li>
                    <li class="account_cpage_l2">
                        <dl>
                            <dt>可用余额(元)</dt>
                            <dd><span>0.00</span></dd>
                        </dl>
                    </li>
                    <li class="account_cpage_l6">+</li>
                    <li class="account_cpage_l3">
                        <dl>
                            <dt>冻结资金(元)</dt>
                            <dd ><span style="float:left;" id="span_wh_mark">0.00</span>
                            <i style=" margin-top: 6px;" class="fa fa-info-circle tooltipsy" title="投资冻结：0.00,提现冻结：0.00"></i> </dd>
                        </dl>
                    </li>
                    <li class="account_cpage_l6">+</li>
                    <li class="account_cpage_l4">
                        <dl>
                            <dt style=" font-size: 14px;">待收本金(元)</dt>
                            <dd><span id="account_rece_amount">0.00</span></dd>
                        </dl>
                    </li>
                    <li class="account_cpage_l7">-</li>
                    <li class="account_cpage_l5">
                        <dl>
                            <dt style=" font-size: 14px;">负债总额(元)</dt>
                            <dd><span style="float:left;" id="total_indebtedness">0.00</span></dd>
                        </dl>
                    </li>
                </ul>
            </div>
           	 
	            <div class="account_dpage">
	                <h3 class="clearfix">
	                	<span>投资收益</span>
	                	<i class="fa fa-chevron-down img_r" id="investment_income_btn"></i>
	                </h3>
	                <ul id="investment_income" style=" display:none;">
	                    <li class="account_dpage_l1">
	                        <dl>
	                            <dt>总收益(元)</dt>
	                            <dd><span id="bidTotalIncome">0.00</span></dd>
	                        </dl>
	                    </li>
	                    <li class="account_dpage_l2">
	                        <dl>
	                            <dt>已收收益(元)</dt>
	                            <dd><span id="bidReceivedIncome">0.00</span></dd>
	                        </dl>
	                    </li>
	                    <li class="account_dpage_l3">
	                        <dl>
	                            <dt>待收收益(元)</dt>
	                            <dd><span id="bidReceivableIncome">0.00</span></dd>
	                        </dl>
	                    </li>
	                    <li class="account_dpage_l4">
	                        <dl>
	                            <dt>本月应收本息：<font id="monthReceivable">0.00</font>元</dt>
	                            <dt>本月已收本息：<font id="monthReceived">0.00</font>元</dt>
	                        </dl>
	                    </li>
	                    <li class="account_dpage_l5">
	                        <dl>
	                            <dt></dt>
	                            <dd><a href="auth/bid/accountReceivableList">查看收益</a></dd>
	                        </dl>
	                    </li>
	                </ul>
	            </div>
           	
           	
	            <div class="account_dpage">
	                <h3>
		                <span>借款负债</span>
		                <a href="./auth/loan/intoApplyBorrow" >申请借款</a>
		                <i class="fa fa-chevron-down img_r" id="debt_btn"></i>
	                </h3>
	                <ul id="debt" style=" display:none;">
	                    <li class="account_dpage_l1 w110">
	                        <dl>
	                            <dt>待还本金(元)</dt>
	                            <dd><span id="principalPayable">0.00</span></dd>
	                        </dl>
	                    </li>
	                    <li class="account_dpage_l2 w110">
	                        <dl>
	                            <dt>待还利息(元)</dt>
	                            <dd><span id="interestPayable">0.00</span></dd>
	                        </dl>
	                    </li>
	                    <li class="account_dpage_l2 w110">
	                        <dl>
	                            <dt>罚息(元)</dt>
	                            <dd><span id="penalty">0.00</span></dd>
	                        </dl>
	                    </li>
	                    <li class="account_dpage_l2 w110">
	                        <dl>
	                            <dt>逾期费(元)</dt>
	                            <dd><span id="penaltyFee">0.00</span></dd>
	                        </dl>
	                    </li>
	                    <li class="account_dpage_l3 w70">
	                        <dl>
	                            <dt>逾期笔数</dt>
	                            <dd>
	                                <p id="overdueTimes">0</p>笔
	                            </dd>
	                        </dl>
	                    </li>
	                    <li class="account_dpage_l4 w210">
	                        <dl>
	                            <dt>本月应还金额：<font id="monthPrincipalPayable">0.00</font>元</dt>
	                            <dd><font>下个还款日：</font><font id="nextDeadline">0.00</font></dd>
	                        </dl>
	                    </li>
	                    <li class="account_dpage_l5 w70">
	                        <dl>
	                            <dt></dt>
	                            <dd><a href="./auth/loan/intoBorrowrecord">立即还款</a></dd>
	                        </dl>
	                    </li>
	                </ul>
	            </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>
