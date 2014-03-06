<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<META http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <head>
        <style type="text/css">
            ul ul{
                visibility: hidden;
                position: absolute;
            }
            ul li:hover ul {
                visibility: visible;
            }
            .nonefloat {
                background-color: white;
                float: none!important ;
                line-height: 30px;
            }
        </style>
    </head>
    <body id="information">
        <div class="placeholder"></div>
    <div id="head">
        <div class="header clearfix">
            <img src="<?php echo Yii::app()->baseURL; ?>/xhtml/html/images/xiaohui.jpg" width="60" height="60px" />
        <ul class="left clearfix">
            <li><a href="<?php echo $this->createUrl('site/index',array()); ?>" id="featureLink">主页</a></li>
            <li><a href="<?php echo $this->createUrl('news/view',array()); ?>" id="informationLink">新 闻</a></li>
            <li><a href="<?php echo $this->createUrl('files/index',array()); ?>" id="downloadLink">资料下载</a></li>
            <li><a href="<?php echo $this->createUrl('site/contact',array()); ?>" id="about_usLink">关于我们</a></li>
            <li><a href="#">学生分会</a>
                <ul>
                    <?php 
                    $criteria=new CDbCriteria;
                    $criteria->order='id desc';
                    $stuunion=StuUnion::model()->findAll($criteria);
                    foreach ($stuunion as $links) {?>
                        <li class="nonefloat">
                            <a href="<?php echo $links->links;?>" target="_blank"><?php echo $links->name;?></a>
                        </li>
                    <?php };?>
                </ul>
            </li>
            <?php if(Yii::app()->user->name===ADMIN){ ?>
                <li><a href="<?php echo $this->createUrl('news/admin',array()); ?>" id="backLink">后台管理</a></li>
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

                        <?php echo $content; ?>

<div id="foot">
    <p class="lianjie">友情链接: <a href="http://www.uestc.edu.cn/">电子科大</a> <a href="http://bbs.stuhome.net/">清水河畔</a></p>
    <p class="copyright">Copyright 201工作室</p>
    <p class="copyright">地址： 电子科大清水河校区本科24栋201</p>
</div>
</body>
</html>