    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=Utf-8">
    <title>新建分会</title>
    <style type="text/css">
        label{
            font-size: 15px;
        }
    </style>
    <link href="<?php echo Yii::app()->baseURL; ?>/xhtml/html/download.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<? echo Yii::app()->baseURL; ?>/xhtml/html/login.css">
    </head>
    <div class="holder"></div>
    <center>
        <br>
        <br>
        <br>
        <h3 style="color:#e74b3c">请 填 写 真 实 信 息</h3>
        <br>
        <br>
        <form action="" method="post" name="zuche">  
            <table>
                <tr>
                    <td><label>用户名称</label></td>
                    <td><input type="text" id="user" name="User[user_name]" /></td>
                </tr>
                <tr>
                    <td><label>密&nbsp&nbsp&nbsp&nbsp码</label></td>
                    <td><input type="password" id="passwd" name="User[passwd]" /></td>
                </tr>
                <tr>
                    <td><label>确认密码</label></td>
                    <td><input type="password" id="passwd1" name="User[passwd_repeat]" /></td>
                </tr>
                <tr>
                    <td><label>姓&nbsp&nbsp&nbsp&nbsp名</label></td>
                        <td><input type="text" id="name" name="User[name]" /></td>
                </tr>
                <tr>
                    <td><label>学&nbsp&nbsp&nbsp&nbsp校</label></td>
                    <td><input type="text" id="school" name="User[school]" /></td>
                </tr>
                <tr>
                    <td><label>电话号码</label></td>
                    <td><input type="text" id="phone_num" name="User[phone]" /></td>
                </tr>
                <tr>
                    <td><label>acm&nbsp_&nbspid</label></td>
                    <td><input type="text" id="acm_id" name="User[acmid]" /></td>
                </tr>
                <tr>
                    <td><label>电子邮箱</label></td>
                    <td><input type="text" id="email" name="User[email]" /></td>
                </tr>
                <tr>
                    <td>&nbsp&nbsp</td>
                    <td>&nbsp<input type="submit" value="注册" style="width:80px;height: 25px"/></td>
                </tr>
            </table>
        </form>

    </center>