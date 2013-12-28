
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<META http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<head>
        <title>首页</title>
        <link href="<? echo Yii::app()->baseURL; ?>/xhtml/html/docWeb.css" rel="stylesheet" type="text/css" />
</head>
    <body id="feature">
        <div class="placeholder"></div>
    <div id="head">
        <div class="header clearfix">
            <img src="<? echo Yii::app()->baseURL; ?>/xhtml/html/images/xiaohui.jpg" width="60" height="60px" />
        <ul class="left clearfix">
            <li><a href="<?php echo $this->createUrl('site/index',array()); ?>" id="featureLink">主页</a></li>
            <li><a href="<?php echo $this->createUrl('news/view',array()); ?>" id="informationLink">学院新闻</a></li>
            <li><a href="<?php echo $this->createUrl('files/index',array()); ?>" id="downloadLink">资料下载</a></li>
            <li><a href="<?php echo $this->createUrl('site/contact',array()); ?>" id="about_usLink">关于我们</a></li>
            <?php if(Yii::app()->user->name===ADMIN){ ?>
                <li><a href="<?php echo $this->createUrl('files/admin',array()); ?>" id="backLink">后台管理</a></li>
            <?php }?>
        </ul>
        <ul class="right clearfix">
            <?php if(Yii::app()->user->name!=='Guest'){ ?>
                <li><a class="denglu" href="<?php echo $this->createUrl('site/logout',array()); ?>">退出</a></li>
                <li><a class="denglu" href="<?php echo $this->createUrl('user/PwChange',array()); ?>">修改密码</a></li>
             <?php }else{ ?>   
                    <li><a class="denglu" href="<?php echo $this->createUrl('site/login',array()); ?>">登录</a></li>
                    <li><a class="zuce" href="<?php echo $this->createUrl('user/create',array()); ?>">注册</a></li>
            <?php }?>
        </ul>
    </div>
</div>
<div class="hey">
<div class="shape">
    <div id="mainContent" class="clearfix">
        <!--
        <div class="info">
            <table>
                <caption>相思</caption>
                <tr>
                    <td>红豆生南国</td>
                    <td>春来发几枝</td>
                </tr>
                <tr>
                    <td>愿君多采撷</td>
                    <td>此物最相思</td>
                </tr>
            </table>
        </div>
    -->
    <img class="dushu" src="<? echo Yii::app()->baseURL; ?>/xhtml/html/images/dushu3.png" />
<div class="one first">
    <div class="left-hosting"></div>
    <div class="border">
    <h2>教学资料下载</h2>
    <p>
    <ul>
        <li>终身免费，翻版不究</li>
        <li><a href="">数据结构习题解答</a></li>
        <li><a href="">模拟电路</a></li>
        <li><a href="">大学物理</a></li>
        <li><a href="">概率统计</a></li>
    </ul>
    <p class="front"><a href="">下载</a></p>
</div>
</div>
<div class="one mid">
    <div class="hosting"></div>
    <div class="border">
    <h2>学院新闻</h2>
    <p>
    <ul>
        <li><a href="">加强心育功能 促进学生全面发展</a></li>
        <li><a href=""> 校友王东升获评中国证券“金紫荆”奖最</a></li>
        <li><a href="">英国格拉斯哥大学代表来校</a></li>
        <li><a href=""> 政管学院赴湖北开展招生宣传</a></li>
        <li><a href="">后勤集团开展师生满意度调查</a></li>
    </ul>
    <p class="front"><a href="">查看</p>
</div>
</div>
<div class="one third">
    <div class="hosting"></div>
    <div class="border">
    <h2>教学资料下载</h2>
    <ul>
        <li>终身免费，翻版不究</li>
        <li><a href="">数据结构习题解答</a></li>
        <li><a href="">模拟电路</a></li>
        <li><a href="">大学物理</a></li>
        <li><a href="">概率统计</a></li>
    </ul>
    <p class="front"><a href="">下载</a></p>
</div>
</div>
</div>
</div>
<div id="foot">
    <p class="lianjie">友情链接: <a href="http://www.uestc.edu.cn/">电子科大</a> <a href="http://bbs.stuhome.net/">清水河畔</a></p>
    <p class="copyright">Copyright 201工作室</p>
    <p class="copyright">地址： 电子科大清水河校区本科24栋201</p>
</div>
</body>
</html>
