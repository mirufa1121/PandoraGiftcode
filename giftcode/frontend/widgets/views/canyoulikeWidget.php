<?php
use yii\helpers\Url;
?>

<div class="item-list">
	<h2>Có thể bạn cũng thích</h2>
	<ul class="clearfix">
		<?php
		foreach($data as $item)
		{
		?>
		<li id="home_item_<?=$item["id"]?>" orderdata="<?=$item["orderdata"]?>" class="col-xs-6 col-sm-3 col-md-3 col-lg-3 " >
		    <p class="pic">
			<span class="lb"></span>
			<?php
			if($item["icon_type"]=="code-vip")
				echo '<span class="vip-ico"></span>';
			?>
			<!--<a class="link-hover" href="/megift/d/code/10/615"><span class="get-code"></span></a>-->
			<a href="<?=Url::to(['giftcode/index', 'id' => $item["id"],'type'=>$item["icon_type"]])?>"><img src="<?=$item["image"]?>"></a>
		    </p>
		    <div class="desc clearfix">
			<p class="avatar">
			    <img src="<?=$item["thumbnail"]?>" width="60px" height="60px">
			</p>
			<div class="info">
			    <h2><a href="<?=Url::to(['giftcode/index', 'id' => $item["id"],'type'=>$item["icon_type"]])?>"><?=$item["title"]?></a></h2>
			    <p class="txt"><?=($item["icon_type"]=="code-vip"?'Code vip':'Code tân thủ')?></p>	    
			</div>
		    </div>
		</li>
		<?php
		}
		?>
	</ul>
</div><!-- /item-list -->