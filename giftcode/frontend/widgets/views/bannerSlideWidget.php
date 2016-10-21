<section id="banner_container" class="banner-slider">
	<div class="jcarousel" data-jcarousel="true">
		<ul id="home_banner_container">          
			<?php
			foreach($data as $item)
			{
			?>
			<li><a id="banner_a_<?=$item["id"]?>" href="<?=$item["link"]?>"><img id="banner_img_<?=$item["id"]?>" src="<?=$item["img"]?>" alt="<?=$item["appname"]?>" style="width:635px;height:420px"></a></li>
			<?php
			}
			?>
		</ul>
	</div>
	<p class="jcarousel-pagination" data-jcarouselpagination="true"></p>
	
</section><!-- /banner-slider -->