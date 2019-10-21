<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/style.css">
	<style>
	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }
	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	body{
    background: #3399ff;
    margin: 40px;
    font: 13px/20px normal Helvetica, Arial, sans-serif;
    color: #4F5155;
  }
  
  
  .circle{
    position: absolute;
    border-radius: 50%;
    background: white;
    animation: ripple 15s infinite;
    box-shadow: 0px 0px 1px 0px #508fb9;
  }
  
  .small{
    width: 200px;
    height: 200px;
    left: -100px;
    bottom: -100px;
  }
  
  .medium{
    width: 400px;
    height: 400px;
    left: -200px;
    bottom: -200px;
  }
  
  .large{
    width: 600px;
    height: 600px;
    left: -300px;
    bottom: -300px;
  }
  
  .xlarge{
    width: 800px;
    height: 800px;
    left: -400px;
    bottom: -400px;
  }
  
  .xxlarge{
    width: 1000px;
    height: 1000px;
    left: -500px;
    bottom: -500px;
  }
  
  .shade1{
    opacity: 0.2;
  }
  .shade2{
    opacity: 0.5;
  }
  
  .shade3{
    opacity: 0.7;
  }
  
  .shade4{
    opacity: 0.8;
  }
  
  .shade5{
    opacity: 0.9;
  }
  
  @keyframes ripple{
    0%{
      transform: scale(0.8);
    }
    
    50%{
      transform: scale(1.2);
    }
    
    100%{
      transform: scale(0.8);
    }
  }
  
	</style>
</head>
<body>
<div class = "ripple-background">
<div class = "circle xxlarge shade1"></div>
<div class = "circle xlarge shade2"> </div>
<div class = "circle large shade3"> </div>
<div class = "circle medium shade4"> </div>
<div class = "circle small shade5"></div>
</div>
<div id="body">
	<div id="container">
		<h1>JESSICA MAINA</h1>
	</div>
</div>
</body>
</html>
