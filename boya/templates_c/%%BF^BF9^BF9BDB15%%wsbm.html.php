<?php /* Smarty version 2.6.26, created on 2012-06-08 14:40:53
         compiled from wsbm.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>博雅教育网 - 提升个人职业能力，人生因教育而博雅！</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <script language="javascript" type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
</head>
<body>
    <div id="wrapper">
		<div id="header">
	    	<a class="logo" href="#"><img src="images/logo.gif" /></a>
            <img class="ad" src="images/ad.gif" />
            <ul class="hlink">
            	<li class="favorite"><a href="javascript:window.external.addFavorite(document.location.href,document.title)">加入收藏</a></li>
                <li class="home"><a href="#" onclick="this.style.behavior='url(#default#homepage)';this.setHomePage(document.location.href);event.returnValue=false;">设为首页</a></li>
            </ul>
            <div id="menu">
            	<ul>
                	<li class="index"><a href="index.html">首页</a></li>
                    <li class="train">
                    	<a href="pxzx.html">培训中心</a>
                        <div class="nav_one">
                        	<ul>
                        		<li><a href="pxzx.html">能力提升</a></li>
                            	<li><a href="#">职业认证</a></li>
                            	<li><a href="#">国学讲堂</a></li>
                            	<li><a href="#">学历教育</a></li>
                            	<li><a href="#">免费培训</a></li>
                        	</ul>
                        </div>
                    </li>
                    <li class="register">
                    	<a href="wsbm.html">网上报名</a>
                        <div class="nav_one">
                    		<ul>
                        		<li><a href="#">在线报名</a></li>
                            	<li><a href="wsbm.html">网络报名</a></li>
                        	</ul>
                        </div>
                    </li>
                    <li class="contact"><a href="#">联系我们</a></li>
                </ul>
            </div>
		</div>
        <div id="content">
        	<div class="main">
                <div id="left">
                    <div id="categories">
                        <div class="left_tt">栏目类型</div>
                        <div class="cate">
                            <ul>
                                <li><a href="#">在线报名</a></li>
                                <li class="current_li"><a href="wsbm.html">网上报名</a></li>
                            </ul>
                        </div>
                    </div>
                    <div id="onlineRegister">
                        <a href="wsbm.html" class="online_register"></a>
                    </div>
                    <div id="map">
                        <img src="images/map.jpg" />
                    </div>
                    <div id="contact">
                        <div class="left_tt">联系我们</div>
                        <ul>
                            <li>地址：福建省福州市鼓楼区***路***号***楼</li>
                            <li>电话：13788889999</li>
                            <li>QQ：77777777</li>
                            <li>Email：77777777@qq.com</li>
                        </ul>
                        <div id="left_bttm"></div>
                    </div>
                </div>
                <div id="right">
                   <div id="path">
                       <h2>能力提升</h2>
                       <div class="path">
                           <a href="index.html">首页&nbsp;&gt;&nbsp;</a>
                           <a href="wsbm.html">网上报名&nbsp;&gt;&nbsp;</a>
                           网上报名
                       </div>
                   </div>
                   <form id="registerForm" method="get" name="online-register" action="/onlineRegister.aspx">
                   	   <div class="register_form">
                       	   <ol>
                               <li><i class="fixed_red">*</i>&nbsp;<span>姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：</span></li>
                               <li><i class="fixed_red">*</i>&nbsp;<span>性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别：</span></li>
                               <li><span>学&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;历：</span></li>
                               <li><span>工作单位：</span></li>
                               <li><i class="fixed_red">*</i>&nbsp;<span>手机号码：</span></li>
                               <li><span>联系电话：</span></li>
                               <li><span>Q&nbsp;Q号码：</span></li>
                               <li><span>E-mail：</span></li>
                               <li><i class="fixed_red">*</i>&nbsp;<span>报名课程：</span></li>
                               <li><i class="fixed_red">*</i>&nbsp;<span>报名人数：</span></li>
                               <li class="leave_message"><span>留&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;言：</span></li>
                       	   </ol>
                           <ul>
                           	   <li><input id="username" class="input-text" name="username" type="text" value="" maxlength="40" /></li>
                               <li>
                               	   <input id="male" class="input-radio" type="radio" checked="checked" name="sex" value="" /><label for="sex">男</label>
                               	   <input id="female" class="input-radio" type="radio" name="sex" value="" /><label for="sex">女</label>
                               </li>
                               <li>
                               	   <select id="certi">
                                   	   <option value="大专">大专</option>
                                       <option value="本科">本科</option>
                                       <option value="硕士">硕士</option>
                                       <option value="博士">博士</option>
                                   </select>
                               </li>
                               <li>
                               	   <input id="address" class="input-text" name="address" type="text" value="" maxlength="150"  />
                               </li>
                               <li>
                               	   <input id="telephone" class="input-text" name="telephone" type="text" value="" maxlength="40"  />
                               </li>
                               <li>
                               	   <input id="phone" class="input-text" name="phone" type="text" value="" maxlength="40"  />
                               </li>
                               <li>
                               	   <input id="qqcode" class="input-text" name="qqcode" type="text" value="" maxlength="40"  />
                               </li>
                               <li>
                               	   <input id="email" class="input-text" name="email" type="text" value="" maxlength="40"  />
                               </li>
                               <li>
                               	   <select id="course">
                                   	   <option value="java精品课程">java精品课程</option>
                                       <option value="C/C++精品课程">C/C++精品课程</option>
                                       <option value="iphone精品课程">iphone精品课程</option>
                                   </select>
                               </li>
                               <li>
                               	   <select id="amount">
                                   	   <option value="5">5</option>
                                       <option value="10">10</option>
                                       <option value="15">15</option>
                                   </select>
                               </li>
                               <li class="leave_message">
                               	   <textarea id="leaveMessage" class="textarea-text" name="leaveMessage" value="" maxlength="40" cols="60" rows="7"></textarea>
                               </li>
                           </ul>
                       </div>
                       <div class="registerBtn">
                       	    <input id="submit" name="submit" type="submit" value=""  />
                            <input id="reset" name="reset" type="submit" value=""  />
                       </div>
                   </form>
                </div>
            </div>
    	</div> 
        <script language="javascript" type="text/javascript" src="js/navshow.js"></script>
    	<div id="footer">
        	<p style="padding-top:15px;">博雅教育********************************************************</p>
        	<p>copyright@2012 <a href="#">boya.com</a> 闽ICP备xxxxxxx</p>
    	</div>
    </div>
</body>
</html>