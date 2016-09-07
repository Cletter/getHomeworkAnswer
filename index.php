<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>与学霸对答案</title>
<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta http-equiv="Cache-Control" content="no-siteapp">
<link rel="stylesheet" href="http://www.lolhelper.cn/dist/css/ratchet3.min.css">
<link rel="stylesheet" href="http://www.lolhelper.cn/dist/css/style.css">
</head>
 <body>
<header class="bar bar-nav">
<h1 class="title"><strong>与学霸对答案</strong></h1>
</header>
<div class="content"> 
<div class="card" style="border:none">

第一步 登录你的校园网账号
<input class="btn btn-primary btn-block" value="前往登录" type=button onclick="window.open('http://ids.njmu.edu.cn/amserver/UI/Login?goto=http://elearning.njmu.edu.cn/Portal/SSO/JZ/sso.aspx')">
第二步 输入作业id
<form method="GET" action="getHomeworkAnswer.php">
<input type="text"  name="id" value="">
<button class="btn btn-primary btn-block">点击查询</button>
</form>

</body>
</html>