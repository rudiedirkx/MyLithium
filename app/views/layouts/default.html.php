<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2010, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */
?>
<!doctype html>
<html>

<head>
	<?php echo $this->html->charset()."\n" ?>
	<title>Application > <?php echo $this->title(); ?></title>
	<?php echo $this->html->style(array('debug', 'lithium')) ?>
	<?php echo $this->scripts() ?>
	<?php echo $this->html->link('Icon', null, array('type' => 'icon')) ?>
</head>

<body class="app">

	<div id="container">
		<div id="header">
			<h1>Application > <?=$this->title()?></h1>
		</div>
		<div id="content">
			<?php echo $this->content()."\n" ?>
		</div>
	</div>

<pre><?=get_class($this)?></pre>

</body>

</html>