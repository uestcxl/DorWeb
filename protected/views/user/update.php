    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=Utf-8">
        <title>Change Password</title>
        <style type="text/css"></style>
        <link href="<? echo Yii::app()->baseURL; ?>/xhtml/html/download.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="<? echo Yii::app()->baseURL; ?>/xhtml/html/login.css">
    </head>
<div class="holder"></div>
<center>
    <form name="login" method="post" action="../user/PwChange">
        <table width="545" border="0" align="center" cellpadding="0" cellspacing="0">
            <tbody><tr><td colspan="3"><img src="<? echo Yii::app()->baseURL; ?>/xhtml/html/images/login_1-password.png" width="545" height="94" alt=""></td>
                <td><img src="<?php echo Yii::app()->baseURL; ?>/xhtml/html/images/spacer.gif" width="1" height="94" alt=""></td></tr>
                <tr><td><img src="<? echo Yii::app()->baseURL; ?>/xhtml/html/images/login_2.gif" width="91" height="14" alt=""></td>
                    <td rowspan="2" bgcolor="#FFFFFF">
                        <table width="50%" border="0" align="center" cellpadding="0" cellspacing="0" style="font-size:12px ">
                            <tbody>
                                <tr><td width="41%" height="15">&nbsp;用户名:</td><td width="59%"><o><?php echo Yii::app()->user->name; ?></o></td></tr>
                                <tr><td height="15">&nbsp;密码:</td><td><input name="User[password]" type="password" size="20"></td></tr>
                                <tr><td height="15">&nbsp;confirm：</td><td><input name="User[password_repeat]" type="password" size="20"></td></tr>

                                <tr>
                                    <td height="20" colspan="2" align="center">
                                    <input name="yt0" type="submit" class="login" value="Change" ></td></tr></tbody></table></td>
                                    <td>
                                        <img src="<? echo Yii::app()->baseURL; ?>/xhtml/html/images/login_4.gif" width="146" height="14" alt=""></td>
                                    <td><img src="<? echo Yii::app()->baseURL; ?>/xhtml/html/images/spacer.gif" width="1" height="14" alt=""></td>
                                </tr>
                                <tr>
                                    <td rowspan="2"><img src="<? echo Yii::app()->baseURL; ?>/xhtml/html/images/login_5.gif" width="91" height="209" alt=""></td>
                                    <td rowspan="2"><img src="<? echo Yii::app()->baseURL; ?>/xhtml/html/images/login_6.gif" width="146" height="209" alt=""></td>
                                    <td><img src="<? echo Yii::app()->baseURL; ?>/xhtml/html/images/spacer.gif" width="1" height="147" alt=""></td></tr>
                                    <tr><td><img src="<? echo Yii::app()->baseURL; ?>/xhtml/html/images/login_7.gif" width="308" height="62" alt=""></td>
                                        <td><img src="<? echo Yii::app()->baseURL; ?>/xhtml/html/images/spacer.gif" width="1" height="62" alt=""></td></tr>
                                        <input type="hidden" name="timeout" size="10" value="20" put="0"></tbody></table>
            </form>
</center>
