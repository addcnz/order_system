<div class="side">
    <ul>
        <li><a style=" background:#55A1DD; color:#fff;" href="/userCenter/index" class="menu_left_index" >账户首页</a></li>
        <li >
            <a href="javascript:;" class="menu_extra" ><span>+</span>客户管理</a>
            <ul>
                <li><a href="/customer/add" >新增客户</a></li>
                <li><a href="/customer/list" >客户列表</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="menu_extra"><span>+</span>产品管理</a>
            <ul>
                <li><a href="/product/add" >新增产品</a></li>
                <li><a href="/product/list" >产品列表</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="menu_extra"><span>+</span>订单管理</a>
            <ul>
                <li><a href="/order/add/" 新增订单</a></li>
                <li><a href="/order/list/" >产品列表</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="menu_extra"><span>+</span>订单管理</a>
            <ul>
                <li><a href="./user/getPassword/" >找回密码</a></li>
                <li><a href="./user/detail/" >账号详情</a></li>
            </ul>
        </li>
        
    </ul>
</div>
<script type="text/javascript" src="{{asset('/javascript/common/jquery.min.js')}}"></script>
<script type="text/javascript">
$(".menu_extra").click(function(){
    var span_sign = $(this).find("span");
    var sub_menu = $(this).parent().find("ul");
    if("+" == span_sign.html()){
        span_sign.html("-");
        sub_menu.show();
    }else{
        span_sign.html("+");
        sub_menu.hide();
    }
})
</script>