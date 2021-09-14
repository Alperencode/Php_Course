<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Flex</title>
	
<style type="text/css">
	
	.panel{
		max-width: 1000px;
		height: 500px;
		border: 5px #333 solid;
		display: flex;
	}
	.solpanel{
		background-color: blue;
		flex: 1;
	}
	.sagpanel{
		background-color: red;
		flex: 4;
		display: flex;
		flex-direction: column;
	}
	.sagpanelust{
		background-color: turquoise;
		flex: 2;
	}
	.sagpanelalt{
		background-color: yellow;
		flex: 3;

	}
</style>
	
</head>
<body>
	
	<div class="panel">
		
		<div class="solpanel"></div>
		<div class="sagpanel">
			<div class="sagpanelust"></div>
			<div class="sagpanelalt"></div>
		</div>
		
	</div>
	
</body>
</html>