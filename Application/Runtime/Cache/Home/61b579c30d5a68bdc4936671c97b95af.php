<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="ch">

    <head>

        <meta charset="utf-8">
        <title>SCNU 智慧实验室微信预约系统</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
		
        <!-- CSS -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Oleo+Script:400,700'>
        <link rel="stylesheet" href="/labscnu/1/Public/home/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/labscnu/1/Public/home/assets/css/style.css">
		<!--<link rel="stylesheet" type="text/css" href="/labscnu/1/Public/home/css/admin_default_color.css" />-->


		<script src="/labscnu/1/Public/org/wind.js"></script>
		<script src="/labscnu/1/Public/org/jquery.js"></script>
		
		<!-- JS -->
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
		
    </head>
    <body id="login-page">
	
		<div class="header">
            <div class="container">
                <div class="row">
                    <div class="logo span4">
                        <h2><a href="">SCNU<span class="red">.</span>智慧实验室</a></h2>
                    </div>
					<div class="user">
						<p>欢迎<?php echo ($auth); ?>: <?php echo ($username); ?></p>
					</div>
                    <!--<div class="links span8">
                        <a class="home" href="" rel="tooltip" data-placement="bottom" data-original-title="Home"></a>
                        <a class="blog" href="" rel="tooltip" data-placement="bottom" data-original-title="Blog"></a>
                    </div>-->
                </div>
            </div>
        </div>
            <!-- 主体 -->
		<div class="register-container container">
            <div class="row">
				<div class="iphone span5">
						<img src="/labscnu/1/Public/home/assets/img/iphone.png" alt="">
				</div>
				<div class="register span6">
					<!--<div class="login-body">-->
						<div class="login-main pr">
                            <form action="<?php echo U('reLab');?>" method="post" class="login-form">
								<h2>我要 <span class="red"><strong>预约</strong></span></h2>
								<div id="itemBox" class="item-box">
                                    <label for="laboratory">实验室</label>
                                    <input type="text" list="lab_list" name="laboratory" placeholder="请选择实验室"/>
                                    <datalist id="lab_list">
                                        <option  value="6-417" />
                                        <option  value="6-420" />
                                        <option  value="6-422" />
                                    </datalist>
									<label for="starttime">开始时间</label>
									<input type="datetime-local" id="starttime" name="starttime" placeholder="开始时间... ">
									<label for="endtime">结束时间</label>
									<input type="time" id="endtime" name="endtime" placeholder="结束时间...">
									<!--<div class="item verifycode showcode"  style="display:none">
										<i class="icon-login-verifycode"></i>
										<input type="text" name="code" placeholder="请填写验证码" autocomplete="off">
										<a class="reloadverify" title="换一张" href="javascript:void(0)">换一张？</a>
									</div>
								 
									<div class="showcode">
										<img class="verifyimg reloadverify" alt="点击切换" src="<?php echo U('verify',array('fontSize'=>25));?>" >
									</div>-->
								</div>
								<div class="login_btn_panel">
									<button class="login-btn" type="submit">预  约</button>
								<div class="check-tips"></div>
								</div>
							</form>
						</div>
					<!--</div>-->
				</div>
			</div>
		</div>
    <script type="text/javascript">
    var ajaxShowCodeUrl = "<?php echo U('ajax_show_code');?>";
    </script>
    <script type="text/javascript" src='/labscnu/1/Public/home/js/mod.login.js'></script>
    <style> 
    .showcode{
        display: none;
        }
	</style> 	
</body>
</html>