<?php
use yii\helpers\Html;
?>
<div class="mainhead">
	<div class="container">
		<h1 class="logo"><a href="index.php"><img src="images/logo_beta-1.00.png"></a></h1>

		<div class="mainmenu clearfix">
			<button type="button" class="mainmenu-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<ul class="menu" aria-labelledby="mainmenu-btn">
				<!--Menu 2 c?p-->
				<!--<li class="sub ">
					<a href="/megift"><span>Menu Code</span></a>
					<ul>
						<li><a href="/megift?type=new">Code t�n th?</a></li>
						<li><a href="/megift?type=vip">Code VIP</a></li>
					</ul>
				</li>-->
				<!--Menu 1 c?p-->
				<li id="vip" class="">
					<a href="index.html?type=vip"><span>Code VIP</span></a>
				</li>
				<li id="new" class="active">
					<a href="index.html?type=new"><span>Code tân thủ</span></a>
				</li>
				<!--<li class="">
					<a href="/megift/card"><span>Th? di?n tho?i</span></a>
				</li>-->
				<!--<li class="">
					<a href="/megift/zingxu"><span>Zing xu</span></a>
				</li>
				<li class="">
					<a href="/megift/gift"><span>Qu� t?ng</span></a>
				</li>-->
				<li class="">
					<a href="promotion.html"><span>Sự kiện game</span></a>
				</li>
			</ul><!-- /menu -->
			<?php
			if(Yii::$app->user->isGuest)
			{
			?>
				<!-- login-regis -->
				<ul class="login-regis">
					<li class="regis"><?=Html::a('Đăng ký',['site/signup'])?></li>
					<li class="login"><?=Html::a('Đăng nhập',['site/login'])?></li>
				</ul>
				<!-- /login-regis -->	
			<?php
			}
			else
			{
			?>
				<div class="account">
				<a href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="http://s120.avatar.zdn.vn/5/8/2/a/mirufa15_120_4.jpg"></a>
				<div id="userinfo_popup" class="nickname" aria-labelledby="account-btn">
					<h2><a href="http://me.zing.vn/u/mirufa15" target="_blank">Nguyễn Ngọc Lân</a></h2>
					<div class="level">
						<div class="userzm">
							<strong>49</strong><span class="zmcoin_icn_16"></span>
						</div>
						<p class="lv">CẤP ĐỘ 2</p>
					</div>		    
					<ul>
						<li class="info"><a id="a_user_profile" href="javascript:void(0)">Thông tin cá nhân</a></li>
						<li class="history"><a id="a_code_history" href="javascript:void(0)">Lịch sử đổi quà/code</a></li>
						<li class="list-follow inactive"><a href="javascript:void(0)" onclick="meGift.showMessageBox('Tính năng sắp ra mắt. Vui lòng quay lại sau.')">Danh sách theo dõi</a></li>			
						<li class="sign-out"><a href="http://login.me.zing.vn/login/logout?key=1d848b3e5831bdd&ref=http%3A%2F%2Fme.zing.vn%2Fmegift%3F_src%3Dme.logout">Đăng xuất</a></li>
					</ul>		    
				</div>	
				<script type="text/javascript">
					$('#a_code_history').on('click', function () {
						$('#userinfo_popup').removeClass('account');
						meGift.showCodeHistoryBox();
						$('#userinfo_popup').addClass('account');
					});
					$('#a_user_profile').on('click', function () {
						$('#userinfo_popup').removeClass('account');
						meGift.showPersonalInfoBox();
						$('#userinfo_popup').addClass('account');
					});
				</script>
			</div><!-- /account -->
			<?php
			}
			?>		
		</div><!-- /mainmenu -->
	</div>
</div><!-- /mainhead -->