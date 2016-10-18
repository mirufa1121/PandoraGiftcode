<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\widgets\topheadWidget;
use frontend\widgets\mainheadWidget;
use frontend\widgets\footerWidget;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<?php $this->endBody() ?>
	<header id="header" class="header">
	<!-- tophead  Các thông tin ở trên cùng chính sửa ở đây-->
    <?=topheadWidget::widget();?>
	<!-- /tophead -->
    <?=mainheadWidget::widget();?>
</header><!-- /header -->
        <?=$content?>
<?=footerWidget::widget();?>
<!--Request server lấy về dữ liệu dạng Json các Slider-->
</body>
</html>
<?php $this->endPage() ?>
