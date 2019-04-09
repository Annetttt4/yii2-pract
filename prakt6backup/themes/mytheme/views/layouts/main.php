
<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE HTML>
<!--
	Fractal by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Fractal by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<?php $this->head() ?>
	</head>
	<body id="top">
	<?php $this->beginBody() ?>
		<!-- Header -->
			<header id="header">
			<?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['site/index'], 'linkOptions' => ['target'=>'_blank']],
            ['label' => 'About', 'url' => ['site/about'], 'linkOptions' => ['target'=>'_blank']],
            ['label' => 'Contact', 'url' => ['site/contact'], 'linkOptions' => ['target'=>'_blank']],
            ['label' => 'Skills-layout', 'url' => ['site/skills'], 'linkOptions' => ['target'=>'_blank']],
            ['label' => 'Skills', 'url' => ['/skills'], 'linkOptions' => ['target'=>'_blank']],
			['label' => 'Workers', 'url' => ['/workers'], 'linkOptions' => ['target'=>'_blank']],
			Yii::$app->user->isGuest ? (
                ['label' => 'Registration', 'url' => ['site/registration'], 'linkOptions' => ['target'=>'_blank']]
            ) : '',
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['site/login'], 'linkOptions' => ['target'=>'_blank']]
            ) : (
                '<li>'
                . Html::beginForm(['site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->login . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
				)
			
        ],
    ]);
    NavBar::end();
    ?>
				<div class="content">
					<h1><a href="#">Fractal</a></h1>
					<p>Just a simple, single page responsive<br />
					template brought to you by <a href="http://html5up.net">HTML5 UP</a></p>
					<ul class="actions">
						<li><a href="#" class="button special icon fa-download">Download</a></li>
						<li><a href="#one" class="button icon fa-chevron-down scrolly">Learn More</a></li>
					</ul>
				</div>
				<div class="image phone"><div class="inner"><img src="images/screen.jpg" alt="" /></div></div>
			</header>

		<!-- One -->
			<section id="one" class="wrapper style2 special">
				<header class="major">
				<?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
				<?= $content ?>

				</header>
				

		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
				</ul>
				<p class="copyright">&copy; Untitled. Credits: <a href="http://html5up.net">HTML5 UP</a></p>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<?php $this->endBody() ?>
	</body>
</html>
<?php $this->endPage() ?>