<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/E-Cshop/Public/Admin/Styles/general.css" rel="stylesheet" type="text/css" />
<link href="/E-Cshop/Public/Admin/Styles/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/E-Cshop/Public/Admin/Js/jquery.min.js"></script>
</head>
<body style="background: #278296;color:white">
<form method="post" action="/E-Cshop/Admin/Login/login" onsubmit="return validate()">
    <table cellspacing="0" cellpadding="0" style="margin-top:100px" align="center">
        <tr>
            <td>
                <img src="/E-Cshop/Public/Admin/Images/login.png" width="178" height="256" border="0" alt="ECSHOP" />
            </td>
            <td style="padding-left: 50px">
                <table>
                    <tr>
                        <td>管理员姓名：</td>
                        <td>
                            <input type="text" name="username" />
                        </td>
                    </tr>
                    <tr>
                        <td>管理员密码：</td>
                        <td>
                            <input type="password" name="password" />
                        </td>
                    </tr>
                    <tr>
                        <td>验证码：</td>
                        <td>
                            <input type="text" name="captcha"/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="right">
                        <img src="<?php echo U('chkcode');?>" style="cursor:pointer"
                        onclick="this.src='<?php echo U('chkcode')?>#'+Math.random()"/>
                        <a onclick="$(this).prev().trigger('click')" style="cursor:pointer">看不清?换一张</a>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="checkbox" value="1" name="remember" id="remember" 
                            style="position:relative;top:3px" />
                            <label for="remember">保存我这次的登录信息</label>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <input type="submit" value="进入管理中心" class="button" />
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
  <input type="hidden" name="act" value="signin" />
</form>
</body>