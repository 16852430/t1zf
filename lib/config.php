<?php
	/*
		这里是全局变量配置文件
		网站相关设置都做在这个文件里面，如果不懂，别乱改。
		修改之前最好先备份一遍
		不会安装配置的话可以联系QQ:1615958039(不免费)
	*/
	

	$loca = '127.0.0.1';
	$user = 'root';
	$pass = '';
	$name = '';
	//mysql的ip账号密码和数据库名称，注意修改之前请先手动导入数据库文件( mysql.sql )


	$t1zf = 'http://t1zf.com/';
	//当前网站的url需要填写协议和/ 例如 -> $t1zf = 'http://t1zf.com/';

	$serverip = '';
	//当前服务器的真实IP

	$sms_key = "";
	$sms_ts = "【杰哥接口】您的验证码是";
	$sms_te = "。如非本人操作，请忽略本短信";
	//云片网申请的接口key和短信模板验证码模板，随机验证码前后的文本内容


	$reg_money = "2.0000";
	//后台注册赠送余额数量

	$sup_admin = "";
	//超级管理员的ID,用于其他用户使用后台在线充值余额
	//接口配置与其他用户相同
	//这个保存后勿随意修改，否则会出现错误！

	$pay_need = "0.02";
	//支付接口平台手续费费率2%=>0.02


	$p_type=['png','jpg','jpeg','iapp','zip','rar','gif','apk','txt','3gp','avi','mp4'];
	//网盘系统可以接收用户上传的文件格式



	$date = date("Y-m-d H:i:s"); 
	$time = time();
	$admin = $_SESSION["admin"];