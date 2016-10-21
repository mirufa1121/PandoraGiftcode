<?php
/* @var $this yii\web\View */
use yii\widgets\Breadcrumbs;
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\widgets\canyoulikeWidget;
$this->title="Thông tin về Gunny";
//Khởi tạo breadcrumbs

$this->params['breadcrumbs'][]=[
	'label' =>"Code Vip",
	'url' => Url::to(['codetype/view', 'type' => "vip"]),
	'class' => 'active',
];

$this->params['breadcrumbs'][] = [
	'label' =>$model["title"],
	'url' => Url::to(['giftcode/index', 'id' =>$model["id"],'type'=>$model["icon_type"]]),
	'class' => 'active',
];
?>
<h1 id="fb-welcome"></h1>
		<section class="breadcrumb" style="padding:0px;">
			<div class="container">
				<?= Breadcrumbs::widget([
					'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
				]) ?>
			</div>
		</section>
		<section class="wrapper">
			<div class="container">
				<div class="detail-wrap">
					<div class="game-info clearfix">
						<div class="lside col-xs-12 col-sm-5 col-md-5 col-lg-5">
							<div class="big-img-view ">				
								<p class="pic">
									<a target="_blank" href="http://me.zing.vn/apps/gunny?_src=megift" onclick="meGift.trackPlayApp()" touchstart="meGift.trackPlayApp()">
										<img width="265px" height="265px" src="<?=$model["image"]?>">
									</a>
								</p>
							</div>
							
							<div class="gm-info mt15">
								<h3 class="gm-title"><?=$model["title"]?></h3>
								<div id="gm-txt-container" class="gm-txt-container">
									<div class="gm-txt">
										Gunny là game bắn súng tọa độ cực hay, đông người chơi nhất Việt Nam. Giải trí ngay tại Zing Appstore. Miễn phí 100%!
									</div>
									<a href="javascript:void(0)" class="seemore"><span>+</span> xem thêm</a>
								</div>				
							</div>
						</div>
						<div class="rside col-xs-12 col-sm-7 col-md-7 col-lg-7">
							<div class="dt-title-block">
								<h2 class="dt-title"><a href="http://me.zing.vn/apps/gunny?_src=megift" target="_blank" onclick="meGift.trackPlayApp()" touchstart="meGift.trackPlayApp()"><?=$model["title"]?></a></h2>
								<ul class="share-block clearfix">
									<li id="btn_feed" class="share"><a href="javascript:void(0)">Chia sẻ</a></li>	
									<li class="invite inactive"><a href="javascript:void(0)" onclick="meGift.showMessageBox('Tính năng sắp ra mắt. Vui lòng quay lại sau.')">Mời bạn bè</a></li>
									<li class="follow inactive"><a href="javascript:void(0)" onclick="meGift.showMessageBox('Tính năng sắp ra mắt. Vui lòng quay lại sau.')">Theo dõi</a></li>				    
								</ul>
							</div>
							<div class="rs-block1 clearfix">
								
								<div class="amount-gift">
									<p class="txt2">còn lại <span id="remain_lbl"><?=$count?></span></p>
								</div>
								
								
								
								
								<div class="kind-code general-style">
									<p class="txt kcode clearfix"><strong>Loại code:</strong><?=($model["icon_type"]=="code-vip"?'<span class="vip-ico"></span>':'<span class="tanthu-ico"></span>')?>  <!--<span class="pc-mb-ico"></span>--></p>
									<p class="txt"><strong>Trong kho:</strong> <?=$count?> code</p>
									<p class="txt"><strong>Thời hạn:</strong> Từ 22/09/2016 đến 28/09/2016</p>
									<div class="txt server-choose clearfix">
										<strong>Server:</strong> 
										<div class="uiselector">
											<p class="select-click list-server-choose" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gà Tủ Thuốc</p>
											
											<ul class="select-option" aria-labelledby="list-server-choose">
												
												<li>
													<a href="/megift/d/code/51/617">Gà Tủ Thuốc</a>
												</li>
												
												<li>
													<a href="/megift/d/code/51/621">Gà Pháo Binh</a>
												</li>
												
											</ul>
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="conditions-block">
								
								<div id="condition_no_recieve" class="code-conditions clearfix">
									<div id="check_panel" class="check-box">
										<div class="cbox">
											<div id="btn_check" class="btn-row
												 
												 ">
												<a href="javascript:void(0)">Kiểm tra</a>
											</div>
											<div id="label_finish" class="finish-percent" style="display: none">
												<p class="txt">Hoàn thành</p>
												<p class="num" id="label_finish_num"><span>0</span>/0</p>
											</div>
											<div id="label_percent" class="side-bar" style="display: none">
												<span id="label_percent_num" class="percent" style="width: 0%"></span>
											</div>
										</div>
									</div>
									<div class="lbox">				    
										<div class="cc-title">
											<h2>Để nhận code bạn phải có đủ các điều kiện sau :</h2>
										</div>
										
										<div id="quest_like_fanpage" class="lnk"><a href="http://me.zing.vn/b/gunny" target="_blank">Like Fanpage http://me.zing.vn/b/gunny. <i class="fa fa-thumbs-o-up"></i></a></div>
										
										
										
										
										
										
										
									</div>
								</div>
								
								<div id="panel_ready" class="complete-conditions clearfix"  style="display: none">
									 <div id="btn_recieve_container" class="check-box">
										<div class="cbox">
											<div class="btn-row">
												<a id="btn_recieve" href="javascript:void(0)">Nhận code</a>
											</div>
											<div class="finish-percent">
												<p class="txt">Hoàn thành</p>
												<p class="num">100%</p>
											</div>
											<div class="side-bar">
												<span class="percent" style="width: 100%"></span>
											</div>
										</div>
									</div>
									<div class="lbox">
										<p class="avatar"></p>
										<div class="notify">
											<p class="txt1">Chúc mừng bạn đã đủ điều kiện để nhận code</p>
											<p class="txt2"><span>Lưu ý:</span> Mỗi tài khoản chỉ nhận và nạp được 1 lần/đợt</p>
										</div>
									</div>
								</div>				
								<div id="condition_received" class="your-code" style="display: none">
									<h3>Code của bạn</h3>
									<div class="clearfix">
										<div class="code">
											<p id="received_code" class="cd"></p>
											<div class="btns clearfix">
												<a id="btn_copy" class="btn" href="javascript:void(0)">Chơi game</a>
												<a class="btn grey" onclick="meGift.showCodeHistoryBox();" href="javascript:void(0)">lịch sử nhận code</a>
											</div>
										</div>
										<div class="links">
											<a class="ico1" href="http://me.zing.vn/apps/gunny?_src=megift" target="_blank" onclick="meGift.trackPlayApp()" touchstart="meGift.trackPlayApp()">Sử dụng code <span>(ngày hết hạn <span id="expired_lbl">28/09/2016</span>)</span></a>
											<a class="ico2 inactive" href="javascript:void(0)" onclick="meGift.showMessageBox('Tính năng sắp ra mắt.')">Trao đổi với bạn bè <span>(tính năng sắp ra mắt)</span></a>
											<a class="ico3" onclick="meGift.showCodeHistoryBox();" href="javascript:void(0)">Xem kho code của bạn</a>
										</div>
									</div>
									<p class="note"><span>Lưu ý:</span> Mỗi tài khoản chỉ nhận và nạp được 1 lần/đợt</p>
								</div>
							</div>
								    
							<div class="gift-tabs">
								<ul role="tablist" class="tab-menu clearfix">
									<li id="btn_tab_info" role="presentation" class="info active">
										<a data-toggle="tab" role="tab" aria-controls="info" href="#box_tab_info" aria-expanded="false">
											Thông tin
										</a>
									</li>
									<li id="btn_tab_guild" role="presentation" class="guide">
										<a data-toggle="tab" role="tab" aria-controls="box_tab_guide" href="#box_tab_guide" aria-expanded="true">
											Hướng dẫn
										</a>
									</li>				    
								</ul>
								<ul class="tab-content clearfix">
									<li id="box_tab_info" class="info active" role="tabpanel">
										<div class="tab-content-detail">
											<div class="general-style">
												
											</div>
											<p class="tc_btn"><a href="javascript:void(0)" class="seemore"><span>+</span> xem thêm</a></p>
										</div>					
									</li>
									<li id="box_tab_guide" class="guide" role="tabpanel">
										<div class="tab-content-detail">
											<div class="general-style">
												
											</div>
											<p class="tc_btn"><a href="javascript:void(0)" class="seemore"><span>+</span> xem thêm</a></p>
										</div>
									</li>
									<script type="text/javascript">
										
										$('#btn_tab_info').attr('class', 'info');
												$('#btn_tab_guild').attr('class', 'guide');
												$('#box_tab_info').attr('class', 'info');
												$('#box_tab_guide').attr('class', 'guide');
										
									</script>
								</ul>
							</div>
							<div class="fb-comment">
								<h2>Bình luận</h2>
								<div class="content">
									<div class="fb-comments" data-href="http://me.zing.vn/megift/d/code/51/617/" target="_top"  data-width="630px" data-numposts="5"></div>
								</div>
							</div>
						</div>
					</div>
					<?=canyoulikeWidget::widget();?>
				</div>
			</div>
		</section>