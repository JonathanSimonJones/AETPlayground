<!doctype html>
<html>
	<head>
		<meta 
				http-equiv="Content-Type"
				content="text/html; charset=utf-8"
		/>
		
		<title>Brainstorming Space</title>
		
		<link type="text/css" href="css/ui-lightness/jquery-ui-1.8.21.custom.css" rel="stylesheet" />
		<link type="text/css" href="css/websitePlayground.css" rel="stylesheet" />
		<script src="jQuery.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.21.custom.min.js"></script>
		<script type="text/javascript" src="js/websitePlayground.js"></script>
	</head>

	<body>
		<header>
			<h1>Brainstorming space</h1>
		</header>
		
		<section id='BrownTileArea'>
			<div class="BrownTile">
				<h4>Concept</h4>
			</div>
			<div class="BrownTile">
				<h4>Development</h4>
			</div>
		</section>
		
		<div id="sidebox">
			<div class="tab"></div>
			<div class="content">
				<p>How can you involve you potential audiences?</p>
				<div id="greenTileList">
					<ul>
						<li><img src='Icons2/beta.png' 				title='Beta Test Tile' 		width="100" height="100" class='GreenTileIcon' id='CreateBetaTest'></li>
						<li><img src='Icons2/Codesign.png' 			title='Co design Tile' 		width="100" height="100" class='GreenTileIcon' id='CreateCoDesign'></li>
						<li><img src='Icons2/contribute.png' 		title='Contribute Tile' 	width="100" height="100" class='GreenTileIcon' id='CreateContribute' ></li>
						<li><img src='Icons2/create.png' 			title='Create Tile' 		width="100" height="100" class='GreenTileIcon' id='CreateCreation'></li>
						<li><img src='Icons2/evaluate.png' 			title='Evaluate Tile' 		width="100" height="100" class='GreenTileIcon' id='CreateEvaluate'></li>
						<li><img src='Icons2/extra%20content.png'	title='Extra Content Tile' 	width="100" height="100" class='GreenTileIcon' id='CreateExtraContent'></li>
						<li><img src='Icons2/loyalty.png' 			title='Show Loyalty Tile' 	width="100" height="100" class='GreenTileIcon' id='CreateLoyalty'></li>
						<li><img src='Icons2/see%20process.png' 	title='See process Tile' 	width="100" height="100" class='GreenTileIcon' id='CreateSeeProcess'></li>
						<li><img src='Icons2/Share.png' 			title='Share Tile' 			width="100" height="100" class='GreenTileIcon' id='CreateShare'></li>
						<li><img src='Icons2/talk%20to%20others.png'title='Talk to others Tile' width="100" height="100" class='GreenTileIcon' id='CreateTalkToOthers'></li>
						<li><img src='Icons2/talk%20to%20you.png' 	title='Talk to you Tile' 	width="100" height="100" class='GreenTileIcon' id='CreateTalkToYou'></li>
						<li><img src='Icons2/unique.png' 			title='Unique Tile'	 		width="100" height="100" class='GreenTileIcon' id='CreateUnique'></li>
					</ul>
				</div>
			</div>
		</div>
		
		<button id="createStickyButton">Create sticky</button>
		
		<section id="challengeCard">
			<h4> Challenge Card </h5>
			<div id="ChallegeCardContent">
				<a href="#" id="PickRandomQuestion">Pick random related question</a>
				<p class="RandomQuestion">This is where a question a random related question would be</p>
				<a href="#" id="DisplayQuestions">Display a selection of questions</a>
				<p class="ChallengeCardQuestion">So here is a question</p>
				<p class="ChallengeCardQuestion">And another</p>
				<p class="ChallengeCardQuestion">And another</p>
			</div>
		</section>
		
		<section id="stickyList"> </section>
	</body>
</html>
