<?php

/* @var $this yii\web\View */

$this->title = 'Nhận giftcode Game Online';
?>
<section id="banner_container" class="banner-slider">
	<div class="jcarousel" data-jcarousel="true">
		<ul>                    
			<li><a id="banner_a_0"><img id="banner_img_0"></a></li>
			<li><a id="banner_a_1"><img id="banner_img_1"></a></li>
			<li><a id="banner_a_2"><img id="banner_img_2"></a></li>
			<li><a id="banner_a_3"><img id="banner_img_3"></a></li>
			<li><a id="banner_a_4"><img id="banner_img_4"></a></li>
			<li><a id="banner_a_5"><img id="banner_img_5"></a></li>
		</ul>
	</div>
	<p class="jcarousel-pagination" data-jcarouselpagination="true"></p>
	
</section><!-- /banner-slider -->
<section class="wrapper">
	<div class="container">
		<div class="tabs-block clearfix">
			<div class="search">
				<form action="/megift" method="get">		    
					<input id="query" type="text" name="query" value="" 
						   placeholder="Nhập tên game bạn muốn nhận code">
				</form>
			</div>
			<ul class="tabs-menu">
				<li id="tabs-menu-all" 
					>
					<a href="javascript:void(0)" onclick="meGift.reloadHome('all');">
						Tất cả
					</a>
				</li>
				<li id="tabs-menu-vip" >
					<a href="javascript:void(0)" onclick="meGift.reloadHome('vip');">
						Code VIP
					</a>
				</li>
				<li id="tabs-menu-new" 
					class="active">
					<a href="javascript:void(0)" onclick="meGift.reloadHome('new');">
						Code tân thủ
					</a>
				</li>
			</ul>                    
		</div><!-- /tabs-block -->
		<!--Lọc dữ liệu-->
		<div class="filter-block clearfix" style="display: none;">
			<h2>lọc theo:</h2>
			<div class="uiselector">
				<p class="select-click">Loại game</p>
				<ul class="select-option">
					<li>
						<input type="checkbox" id="check1" name="checkboxlist">
						<label for="check1">
							<span class="checkbox"></span>
							Chiến thuật (SLG)
						</label>
					</li>
					<li>
						<input type="checkbox" id="check2" name="checkboxlist">
						<label for="check2">
							<span class="checkbox"></span>
							Giải trí (Casual)
						</label>
					</li>
					<li>
						<input type="checkbox" id="check3" name="checkboxlist">
						<label for="check3">
							<span class="checkbox"></span>
							Nhập vai (RGP)
						</label>
					</li>
					<li>
						<input type="checkbox" id="check4" name="checkboxlist">
						<label for="check4">
							<span class="checkbox"></span>
							Mạng xã hội (SNS)
						</label>
					</li>
					<li>
						<input type="checkbox" id="check5" name="checkboxlist">
						<label for="check5">
							<span class="checkbox"></span>
							Khác
						</label>
					</li>
				</ul>
			</div>
			<div class="uiselector">
				<p class="select-click">Trạng thái</p>
				<ul class="select-option">
					<li>
						<input type="checkbox" id="check01" name="checkboxlist">
						<label for="check01">
							<span class="checkbox"></span>
							Đang mở
						</label>
					</li>
					<li>
						<input type="checkbox" id="check02" name="checkboxlist">
						<label for="check02">
							<span class="checkbox"></span>
							Sắp mở
						</label>
					</li>
					<li>
						<input type="checkbox" id="check03" name="checkboxlist">
						<label for="check03">
							<span class="checkbox"></span>
							Đã hết
						</label>
					</li>
				</ul>
			</div>
		</div><!-- /filter-block -->
		<div class="item-list">
			<ul id="home_item_container" class="clearfix">
			<li id="home_item_47" orderdata="00" class="col-xs-6 col-sm-3 col-md-3 col-lg-3 " style="">
				<p class="pic">
					<span class="lb"></span>
					<a href="/megift/d/code/47/604"><img src="fp/f/80187.png"></a>
				</p>
				<div class="desc clearfix">
					<p class="avatar">
						<img src="fp/game/congthanhchien-110-1.jpg" width="60px" height="60px">
					</p>
					<div class="info">
						<h2><a href="/megift/d/code/47/604">Công Thành Chiến</a></h2>
						<p class="txt">Code Tân Thủ</p>	    
					</div>
				</div>
			</li>
			<li id="home_item_51" orderdata="00" class="col-xs-6 col-sm-3 col-md-3 col-lg-3 " style="">
				<p class="pic">
					<span class="lb"></span>
					<a href="/megift/d/code/51/617"><img src="fp/f/81295.jpg"></a>
				</p>
				<div class="desc clearfix">
					<p class="avatar">
						<img src="fp/game/gunny-110-1.jpg" width="60px" height="60px">
					</p>
					<div class="info">
						<h2><a href="/megift/d/code/51/617">Gunny</a></h2>
						<p class="txt">Code Tân Thủ</p>	    
					</div>
				</div>
			</li>
			<li id="home_item_220" orderdata="00" class="col-xs-6 col-sm-3 col-md-3 col-lg-3 " style="">
				<p class="pic">
					<span class="lb"></span>
					<a href="/megift/d/code/220/600"><img src="fp/f/77933.jpg"></a>
				</p>
				<div class="desc clearfix">
					<p class="avatar">
						<img src="fp/game/tttd-110-1.jpg" width="60px" height="60px">
					</p>
					<div class="info">
						<h2><a href="/megift/d/code/220/600">Thông Thiên Tây Du</a></h2>
						<p class="txt">Code Tân Thủ</p>	    
					</div>
				</div>
			</li>
			<li id="home_item_229" orderdata="00" class="col-xs-6 col-sm-3 col-md-3 col-lg-3 " style="">
				<p class="pic">
					<span class="lb"></span>
					<a href="/megift/d/code/229/619"><img src="fp/f/81694.png"></a>
				</p>
				<div class="desc clearfix">
					<p class="avatar">
						<img src="fp/game/81691.jpg" width="60px" height="60px">
					</p>
					<div class="info">
						<h2><a href="/megift/d/code/229/619">Phong Thần Chi Nộ</a></h2>
						<p class="txt">Code Tân Thủ</p>	    
					</div>
				</div>
			</li>
			<li id="home_item_200" orderdata="023" class="col-xs-6 col-sm-3 col-md-3 col-lg-3 " style="">
				<p class="pic">
					<span class="lb"></span>
					<a href="/megift/d/code/200/492"><img src="fp/f/63400.jpg"></a>
				</p>
				<div class="desc clearfix">
					<p class="avatar">
						<img src="fp/game/mudts-110-1.jpg" width="60px" height="60px">
					</p>
					<div class="info">
						<h2><a href="/megift/d/code/200/492">MU ĐTS</a></h2>
						<p class="txt">Code Tân Thủ</p>	    
					</div>
				</div>
			</li>
			<li id="home_item_205" orderdata="027" class="col-xs-6 col-sm-3 col-md-3 col-lg-3 " style="">
				<p class="pic">
					<span class="lb"></span>
					<a href="/megift/d/code/205/592"><img src="fp/f/69745.jpg"></a>
				</p>
				<div class="desc clearfix">
					<p class="avatar">
						<img src="fp/game/kiemvu-110-1.jpg" width="60px" height="60px">
					</p>
					<div class="info">
						<h2><a href="/megift/d/code/205/592">Kiếm Vũ</a></h2>
						<p class="txt">Code Tân Thủ</p>	    
					</div>
				</div>
			</li>
			<li id="home_item_36" orderdata="032" class="col-xs-6 col-sm-3 col-md-3 col-lg-3 " style="">
				<p class="pic">
					<span class="lb"></span>
					<a href="/megift/d/code/36/368"><img src="fp/f/48883.jpg"></a>
				</p>
				<div class="desc clearfix">
					<p class="avatar">
						<img src="fp/game/38181.jpg" width="60px" height="60px">
					</p>
					<div class="info">
						<h2><a href="/megift/d/code/36/368">Cánh Cụt Vui Vẻ</a></h2>
						<p class="txt">Code Tân Thủ</p>	    
					</div>
				</div>
			</li>
			<li id="home_item_190" orderdata="041" class="col-xs-6 col-sm-3 col-md-3 col-lg-3 " style="">
				<p class="pic">
					<span class="lb"></span>
					<a href="/megift/d/code/190/563"><img src="fp/f/57033.jpg"></a>
				</p>
				<div class="desc clearfix">
					<p class="avatar">
						<img src="fp/game/ngaokiemkythu-110-1.jpg" width="60px" height="60px">
					</p>
					<div class="info">
						<h2><a href="/megift/d/code/190/563">Ngạo Kiếm Kỳ Thư</a></h2>
						<p class="txt">Code Tân Thủ</p>	    
					</div>
				</div>
			</li>
			<li id="home_item_138" orderdata="071" class="col-xs-6 col-sm-3 col-md-3 col-lg-3 " style="">
				<p class="pic">
					<span class="lb"></span>
					<a href="/megift/d/code/138/244"><img src="fp/f/42093.jpg"></a>
				</p>
				<div class="desc clearfix">
					<p class="avatar">
						<img src="fp/game/trumbanca-110-1.jpg" width="60px" height="60px">
					</p>
					<div class="info">
						<h2><a href="/megift/d/code/138/244">Trùm Bắn Cá</a></h2>
						<p class="txt">Code Tân Thủ</p>	    
					</div>
				</div>
			</li>
			<li id="home_item_40" orderdata="079" class="col-xs-6 col-sm-3 col-md-3 col-lg-3 " style="">
				<p class="pic">
					<span class="lb"></span>
					<a href="/megift/d/code/40/40"><img src="fp/f/34907.jpg"></a>
				</p>
				<div class="desc clearfix">
					<p class="avatar">
						<img src="fp/game/33424.png" width="60px" height="60px">
					</p>
					<div class="info">
						<h2><a href="/megift/d/code/40/40">Thiên Long Bát Bộ</a></h2>
						<p class="txt">Code Tân Thủ</p>	    
					</div>
				</div>
			</li></ul>
		</div><!-- /item-list -->
	</div>
</section>

<script type="text/javascript">
	$(document).ready(function () {
		var posData = '50,51,52,53,54,55';

		var data = {};
		data.action = 'get';
		data.pos = posData;
		// Dữ liệu có thể load từ file mẫu tại dtb/ajax.json
		$.ajax({
			url: 'http://me.zing.vn/dtb/ajax',
			jsonp: 'callback',
			dataType: 'jsonp',
			data: data,
			success: function (resp) {
			//alert(resp);
			// Dữ liệu mảng objec mỗi object có thông tin sau 
			// appname,desc,id,img,link,pos,tmpl,type
			console.log(JSON.stringify(resp));
				if (resp.error >= 0)
				{
					for (var i in resp.data)
					{
						var banner = resp.data[i];
						$('#banner_a_' + i).attr('href', banner.link);
						$('#banner_img_' + i).attr('src', banner.img);
						$('#banner_img_' + i).attr('alt', banner.appname);
					}
				}
			}
		});
	});
</script>
<!--/Request server lấy về dữ liệu dạng Json các Slider-->