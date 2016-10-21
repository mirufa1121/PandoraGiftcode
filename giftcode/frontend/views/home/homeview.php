<?php
use frontend\models\Homeitem;

if($data);
foreach($data as $item)
{
?>
<li id="home_item_47" orderdata="00" class="col-xs-6 col-sm-3 col-md-3 col-lg-3 " style="">
	<p class="pic">
		<span class="lb"></span>
		<a href="<?=$item["url"]?>"><img src="<?=$item["image"]?>"></a>
	</p>
	<div class="desc clearfix">
		<p class="avatar">
			<img src="<?=$item["thumbnail"]?>" width="60px" height="60px">
		</p>
		<div class="info">
			<h2><a href="<?=$item["url"]?>"><?=$item["title"]?></a></h2>
			<p class="txt"><?=($item["icon_type"]==Homeitem::CODE_VIP?"Code Vip":"Code Tân Thủ");?></p>	    
		</div>
	</div>
</li>
<?php
}
?>
