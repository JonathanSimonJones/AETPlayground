<!doctype html>
<!-- Mouse Test-->

<html>
	<head>
		<meta 
				http-equiv="Content-Type"
				content="text/html; charset=utf-8"
		/>
		
		<link type="text/css" href="css/ui-lightness/jquery-ui-1.8.21.custom.css" rel="stylesheet" />
		<link type="text/css" href="css/websitePlayground.css" rel="stylesheet" />
		<script src="jQuery.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.21.custom.min.js"></script>
		<script type="text/javascript" src="js/websitePlayground.js"></script>
	</head>

	<body>
		<!--
		<div class="demo">
			
			<section id="stickyList" contenteditable="true">
					<div class="ui-widget-content draggable">
						<p>Drag me to my target</p>
					</div>
			</section>
			<div class="ui-widget-content test" contenteditable="true">
				<p>This text should change on click</p>
			</div>
		
			<div id="droppable" class="ui-widget-header">
				<p>Drop here</p>
			</div>
			
			
			<button id="turnOnDrag">Turn on drag</button>
			<button id="turnOffDrag">Turn off drag</button>
			
			<h2 id="status">
				0, 0
			</h2>
		</div> End demo -->
		
		<h1>Brainstorming stage</h1>
		
		<button id="createStickyButton">Create sticky</button>	
		
		<div id="sidebox">
			<div class="tab"></div>
			<div class="content">
				<div id="greenTileList">
					<ul>
						<li><img src='GreenTile.png' title='Contribute Tile' 		width="100" height="100" class='GreenTileIcon' id='CreateContribute' ></img></li>
						<li><img src='GreenTile.png' title='Beta Test Tile' 		width="100" height="100" class='GreenTileIcon' id='CreateBetaTest'></img></li>
						<li><img src='GreenTile.png' title='Show Loyalty Tile' 		width="100" height="100" class='GreenTileIcon' id='CreateLoyalty'></img></li>
						<li><img src='GreenTile.png' title='Create Tile' 			width="100" height="100" class='GreenTileIcon' id='CreateCreation'></img></li>
						<li><img src='GreenTile.png' title='Consumption tile' 		width="100" height="100" class='GreenTileIcon' id='CreateConsumption'></img></li>
						<li><img src='GreenTile.png' title='Experience Tile' 		width="100" height="100" class='GreenTileIcon' id='CreateExperience'></img></li>
						<li><img src='GreenTile.png' title='Unique Tile'	 		width="100" height="100" class='GreenTileIcon' id='CreateUnique'></img></li>
						<li><img src='GreenTile.png' title='Extra Content Tile' 	width="100" height="100" class='GreenTileIcon' id='CreateExtraContent'></img></li>
						<li><img src='GreenTile.png' title='Talk to others Tile' 	width="100" height="100" class='GreenTileIcon' id='CreateTalkToOthers'></img></li>
						<li><img src='GreenTile.png' title='Talk to you Tile' 		width="100" height="100" class='GreenTileIcon' id='CreateTalkToYou'></img></li>
						<li><img src='GreenTile.png' title='Share Tile' 			width="100" height="100" class='GreenTileIcon' id='CreateShare'></img></li>
					</ul>
				</div>
			</div>
		</div>
		
		<section id="stickyList"/>
	</body>
</html>
