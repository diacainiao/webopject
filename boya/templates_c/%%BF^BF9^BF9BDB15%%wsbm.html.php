<?php /* Smarty version 2.6.26, created on 2012-06-08 14:40:53
         compiled from wsbm.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>���Ž����� - ��������ְҵ��������������������ţ�</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <script language="javascript" type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
</head>
<body>
    <div id="wrapper">
		<div id="header">
	    	<a class="logo" href="#"><img src="images/logo.gif" /></a>
            <img class="ad" src="images/ad.gif" />
            <ul class="hlink">
            	<li class="favorite"><a href="javascript:window.external.addFavorite(document.location.href,document.title)">�����ղ�</a></li>
                <li class="home"><a href="#" onclick="this.style.behavior='url(#default#homepage)';this.setHomePage(document.location.href);event.returnValue=false;">��Ϊ��ҳ</a></li>
            </ul>
            <div id="menu">
            	<ul>
                	<li class="index"><a href="index.html">��ҳ</a></li>
                    <li class="train">
                    	<a href="pxzx.html">��ѵ����</a>
                        <div class="nav_one">
                        	<ul>
                        		<li><a href="pxzx.html">��������</a></li>
                            	<li><a href="#">ְҵ��֤</a></li>
                            	<li><a href="#">��ѧ����</a></li>
                            	<li><a href="#">ѧ������</a></li>
                            	<li><a href="#">�����ѵ</a></li>
                        	</ul>
                        </div>
                    </li>
                    <li class="register">
                    	<a href="wsbm.html">���ϱ���</a>
                        <div class="nav_one">
                    		<ul>
                        		<li><a href="#">���߱���</a></li>
                            	<li><a href="wsbm.html">���籨��</a></li>
                        	</ul>
                        </div>
                    </li>
                    <li class="contact"><a href="#">��ϵ����</a></li>
                </ul>
            </div>
		</div>
        <div id="content">
        	<div class="main">
                <div id="left">
                    <div id="categories">
                        <div class="left_tt">��Ŀ����</div>
                        <div class="cate">
                            <ul>
                                <li><a href="#">���߱���</a></li>
                                <li class="current_li"><a href="wsbm.html">���ϱ���</a></li>
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
                        <div class="left_tt">��ϵ����</div>
                        <ul>
                            <li>��ַ������ʡ�����й�¥��***·***��***¥</li>
                            <li>�绰��13788889999</li>
                            <li>QQ��77777777</li>
                            <li>Email��77777777@qq.com</li>
                        </ul>
                        <div id="left_bttm"></div>
                    </div>
                </div>
                <div id="right">
                   <div id="path">
                       <h2>��������</h2>
                       <div class="path">
                           <a href="index.html">��ҳ&nbsp;&gt;&nbsp;</a>
                           <a href="wsbm.html">���ϱ���&nbsp;&gt;&nbsp;</a>
                           ���ϱ���
                       </div>
                   </div>
                   <form id="registerForm" method="get" name="online-register" action="/onlineRegister.aspx">
                   	   <div class="register_form">
                       	   <ol>
                               <li><i class="fixed_red">*</i>&nbsp;<span>��&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;����</span></li>
                               <li><i class="fixed_red">*</i>&nbsp;<span>��&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��</span></li>
                               <li><span>ѧ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;����</span></li>
                               <li><span>������λ��</span></li>
                               <li><i class="fixed_red">*</i>&nbsp;<span>�ֻ����룺</span></li>
                               <li><span>��ϵ�绰��</span></li>
                               <li><span>Q&nbsp;Q���룺</span></li>
                               <li><span>E-mail��</span></li>
                               <li><i class="fixed_red">*</i>&nbsp;<span>�����γ̣�</span></li>
                               <li><i class="fixed_red">*</i>&nbsp;<span>����������</span></li>
                               <li class="leave_message"><span>��&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�ԣ�</span></li>
                       	   </ol>
                           <ul>
                           	   <li><input id="username" class="input-text" name="username" type="text" value="" maxlength="40" /></li>
                               <li>
                               	   <input id="male" class="input-radio" type="radio" checked="checked" name="sex" value="" /><label for="sex">��</label>
                               	   <input id="female" class="input-radio" type="radio" name="sex" value="" /><label for="sex">Ů</label>
                               </li>
                               <li>
                               	   <select id="certi">
                                   	   <option value="��ר">��ר</option>
                                       <option value="����">����</option>
                                       <option value="˶ʿ">˶ʿ</option>
                                       <option value="��ʿ">��ʿ</option>
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
                                   	   <option value="java��Ʒ�γ�">java��Ʒ�γ�</option>
                                       <option value="C/C++��Ʒ�γ�">C/C++��Ʒ�γ�</option>
                                       <option value="iphone��Ʒ�γ�">iphone��Ʒ�γ�</option>
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
        	<p style="padding-top:15px;">���Ž���********************************************************</p>
        	<p>copyright@2012 <a href="#">boya.com</a> ��ICP��xxxxxxx</p>
    	</div>
    </div>
</body>
</html>