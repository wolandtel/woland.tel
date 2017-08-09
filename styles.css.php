<?php
	require('lib/Tools.php');

	header('Content-Type: text/css');
?>
@import url('https://fonts.googleapis.com/css?family=Anonymous+Pro|PT+Mono');

body
{
	background-color: #555;
	margin: 0;
	padding: 0;
	color: #fff;
	/*
	font-family: 'PT Mono', monospace;
	*/
	font-family: 'Anonymous Pro', monospace;
}

h1
{
	font-size: 48px;
}

h3
{
	font-size: 30px;
}

h1, h2
{
	margin-bottom: 20px
}

h4
{
	font-size: 24px;
	margin-left: 10px;
}

a, a:link, a:hover, a:active, a:visited
{
	color: #fff;
	text-decoration: none;
}

a:link[href^="http"], a:active[href^="http"], a:visited[href^="http"]
{
	color: #f5ac2b;
}

a:hover[href^="http"]
{
	color: #fff;
}

#block1
{
	background: url(<?=Tools::res('img/bg1.png')?>) no-repeat;
}

#face
{
	width: 200px;
	height: 200px;
	border-radius: 100px;
	background: url(<?=Tools::res('img/face.jpg')?>);
	background-size: 100%;
	margin: 20px;
}

.block
{
	width: 100%;
	background-size: 100% auto !important;
	background-position: center !important;
	padding: 20px 0 10px;
	position: relative;
}

.block *
{
	z-index: 2;
	position: relative;
}

.block > :first-child
{
	margin-top: 0;
}

.block .nav
{
	position: fixed;
	left: 55px;
	top: 240px;
	padding-top: 40px;
	font-size: 24px;
	visibility: hidden;
}

.nav > li > a
{
	padding: 0 15px;
}

.nav > li > a:focus, .nav > li > a:hover
{
	background-color: rgba(0, 0, 0, 0.5);
}

.mask
{
	position: absolute;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	min-height: 100%;
	z-index: 1;
	background: #000;
	opacity: 0.3;
}

.group
{
	width: auto;
	max-width: 500px;
	min-width: 340px;
	font-size: 16px;
	border-top: 1px solid;
	border-radius: 10px 10px 0 0;
	background: rgba(0, 0, 0, 0.3);
	margin: 10px 0 40px;
}

.group > .entry
{
	border-bottom: 1px dotted;
	padding: 5px 0;
}

.group > .entry > div
{
	padding-left: 10px;
	float: left;
}

.group > .entry > div:first-child
{
	width: 40%;
	word-wrap: break-word;
	text-indent: -10px;
	padding-left: 30px;
}

.group > .entry > div:last-child
{
	width: 60%;
}

@media (max-width: 370px)
{
	[class^="col-"]
	{
		padding: 0;
	}
}
@media (min-width: 768px)
{
	.block .nav
	{
		visibility: visible;
	}
}

@media (min-width: 992px)
{
}

@media (min-width: 1200px)
{
}

/*
	vim: syntax=css
*/
