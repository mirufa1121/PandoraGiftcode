<?php

/* @var $this yii\web\View */

$this->title = 'Nhận giftcode Game Online';

use frontend\widgets\bannerSlideWidget;
?>
<?=bannerSlideWidget::widget();?>
<section class="wrapper">
	<div class="container">
		<div class="tabs-block clearfix">
			<div class="search">
				<form action="/megift" method="get">		    
					<input id="query" type="text" name="query" value="" 
						   placeholder="Nhập tên game bạn muốn nhận code">
				</form>
			</div>
			<ul class="tabs-menu" <?=($type=="all"?'class="active"':"")?>>
				<li id="tabs-menu-all" 
					>
					<a href="javascript:void(0)" onclick="reloadHome('all');">
						Tất cả
					</a>
				</li>
				<li id="tabs-menu-vip" <?=($type=="code-vip"?'class="active"':"")?>>
					<a href="javascript:void(0)" onclick="reloadHome('code-vip');">
						Code VIP
					</a>
				</li>
				<li id="tabs-menu-new" 
					<?=($type=="code-tan-thu"?'class="active"':"")?>>
					<a href="javascript:void(0)" onclick="reloadHome('code-tan-thu');">
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
			
			</ul>
		</div><!-- /item-list -->
	</div>
</section>

<script type="text/javascript">
	$(document).ready(function () {
		reloadHome('<?=empty($type)?"code-tan-thu":$type?>');
	});
	reloadHome = function(a) {
        $("#tabs-menu-vip").attr("class", "");
        $("#tabs-menu-new").attr("class", "");
        $("#tabs-menu-all").attr("class", "");
        switch (a) {
            case "code-vip":
                $("#tabs-menu-vip").attr("class", "active");
                $('#vip').attr("class","active");
                $("#new").attr("class", "");
                break;
            case "code-tan-thu":
                $("#tabs-menu-new").attr("class", "active");
                $('#new').attr("class","active");
                 $("#vip").attr("class", "");
                break;
            default:
                $("#tabs-menu-all").attr("class", "active")
        }
        $.get("?r=home/gettab", {
            'type': a
        }, function(a) {
            $("#home_item_container").html("");
			$("#home_item_container").append(a);
        })
    };
</script>
<!--/Request server lấy về dữ liệu dạng Json các Slider-->