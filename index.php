<?php defined('_JEXEC') or die; JHtml::_('behavior.framework', true); $app = JFactory::getApplication();
unset(
$this->_scripts[$this->baseurl.'/media/system/js/mootools-core.js'], 
$this->_scripts[$this->baseurl.'/media/system/js/mootools-more.js'],
$this->_scripts[$this->baseurl.'/media/system/js/core.js'],
$this->_scripts[$this->baseurl.'/media/system/js/caption.js']
);
 ?>
<?php echo '<?'; ?>xml version="1.0" encoding="<?php echo $this->_charset ?>"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
<jdoc:include type="head" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/bootstrap-theme.min.css" type="text/css" />
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery-1.11.0.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>

<link rel="icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/favicon.ico" type="image/x-icon">
<?php 
if($this->countModules('left and right') == 0) $contentwidth = "12";
if($this->countModules('left or right') == 1) $contentwidth = "9";
if($this->countModules('left and right') == 1) $contentwidth = "6";
?>
<?php $this->setGenerator('mysite'); ?>
</head>
<body>
<div id="toTop"><i class="glyphicon glyphicon-arrow-up"></i></div>
<div id="page">
<hr>
<header>
<div class="container">
	<div class="row">
		<div class="col-md-4">
		<jdoc:include type="modules" name="logo" style="xhtml" />
		</div>
		<div class="col-md-4">
		<jdoc:include type="modules" name="search" style="xhtml" />
		</div>
		<div class="col-md-4">
		<jdoc:include type="modules" name="time_work" style="xhtml" />
		</div>
	</div>
</div>
</header>
<?php if($this->countModules('header')) : ?>
<div id="header">
 <jdoc:include type="modules" name="header" style="xhtml" /> 
 </div> 
 <?php endif; ?>

<?php if($this->countModules('user3')) : ?>
		<nav class="navbar navbar-inverse" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Меню</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/"><i class="glyphicon glyphicon-home"></i></a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<jdoc:include type="modules" name="user3" style="xhtml" />
				</div>
			</div>
		</nav>
 <?php endif; ?>
	
<div id="sheat">
<?php if($this->countModules('slider')) : ?>
	<jdoc:include type="modules" name="slider" style="xhtml" />
<?php endif; ?>
 
 
<div class="container main">
<div class="row">
<?php if($this->countModules('left')) : ?>
 <div class="col-md-3">
 <jdoc:include type="modules" name="left" style="xhtml" />
 </div>
 <?php endif; ?>
<div class="col-md-<?php echo $contentwidth; ?> content_block">
	<?php if($this->countModules('breadcrumb')) : ?>
	<jdoc:include type="modules" name="breadcrumb" style="xhtml" />
	<div class="clearfix"></div>
	<?php endif; ?>
	
	<?php if($this->countModules('user2')) : ?>
	<div id="user2 ">
		<jdoc:include type="modules" name="user2" style="xhtml" /> 
	</div> 
	<?php endif; ?>
<jdoc:include type="message" /> 
<jdoc:include type="component" style="xhtml" />
</div> <!--конец блока контента-->

<?php if($this->countModules('right')) : ?>
<div class="col-md-3">
<jdoc:include type="modules" name="right" style="xhtml" />
</div>
<?php endif; ?> 
</div>
</div>


<footer>
<div class="container copyright">
	<?php if($this->countModules('footer')) : ?>
		<jdoc:include type="modules" name="footer" style="xhtml" />
	<?php endif; ?>
<hr />
<div class="clearfix"></div> 


	<?php if($this->countModules('copyright')) : ?>
		<jdoc:include type="modules" name="copyright" style="xhtml" />
	<?php endif; ?> 
</div> 
</footer>

</div>
</div>


	
	

</body>
</html>