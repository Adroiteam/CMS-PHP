<?php /* @var $this Controller */ ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/5grid/core.css" media="screen, projection"/>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/5grid/core-desktop.css" media="screen, projection"/>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/5grid/core-1200px.css" media="screen, projection"/>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/5grid/core-noscript.css" media="screen, projection"/>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style-desktop.css" media="screen, projection"/>
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />

	<title>HRDP</title>
	<div id="header-wrapper">
	<header id="header">
		<div class="5grid-layout">
			<div class="row">
				<div class="12u" id="logo"> <!-- Logo -->
					<h1><a href="#" class="mobileUI-site-name">Human Research And Development Programee</a></h1>
					<p></p>
				</div>
			</div>
		</div>
		<div id="menu-wrapper">
			<div class="5grid-layout">
				<div class="row">
					<div class="12u" id="menu">
						<nav class="mobileUI-site-nav">
						<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'Projects', 'url'=>array('/site/page', 'view'=>'projects')),
				array('label'=>'Profile', 'url'=>array('/site/page', 'view'=>'profile')),
				array('label'=>'Surveys', 'url'=>array('/site/page', 'view'=>'surveys')),
				array('label'=>'Publications', 'url'=>array('/site/page', 'view'=>'publications')),
				array('label'=>'Careers', 'url'=>array('/site/page', 'view'=>'careers')),
				array('label'=>'Team', 'url'=>array('/site/page', 'view'=>'team')),
				array('label'=>'Gallery', 'url'=>array('/site/page', 'view'=>'gallery')),
				array('label'=>'News', 'url'=>array('/site/page', 'view'=>'news')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>				
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>
</div>
<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?>
<body>
		
		<div id="page-content-wrapper">
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="copyright" class="5grid-layout">
	<section>
		<p>&copy; Human Resource Development Program 2013</p>
	</section>
</div>
</body>
</html>
