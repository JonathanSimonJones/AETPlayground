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
		<div id="Surface">
			<img src='Icons2/Header/beta.png' title='Beta' width="100" height="200" id="BetaLogo">
			<header id="HeaderSlidingBar">
				<div id="HeaderContent">
					<img src='Icons2/Header/MovingTargetsLogo.jpg' title='MovingTargetsLogo' width="300" height="150">
				</div>
				<div id="HeaderClickableBar">
					<div id="HeaderTitle">
						<h1><b>BRAINSTORMING SPACE</b><small> How can you involve your <i>potential</i> audiences?</small></h1>
					</div>
					<div id="HeaderTab">
						<img src='Icons2/Header/topBarArrowDown.png' width="35" height="25" id="MovingTargetsTab" alt="">
					</div>
				</div>
			</header>
			
			<div id="StickySpace">
				<section id="RightHandBar">
					<section id="StickyNoteIcon" class="sticky sticky_editable RightBarIcon">
						<p>Sticky Note</p>
					</section>
				
					<section id="challengeCard" class="RightBarIcon">
						<h4> Challenge Card </h4>
						<div id="ChallegeCardContent">
							<a href="#" id="PickRandomQuestion">Pick random related question</a>
							<p class="RandomQuestion">This is where a question a random related question would be</p>
							<a href="#" id="DisplayQuestions">Display a selection of questions</a>
							<p class="ChallengeCardQuestion">So here is a question</p>
							<p class="ChallengeCardQuestion">And another</p>
							<p class="ChallengeCardQuestion">And another</p>
						</div>
					</section>
				</section>
				
				<section id="stickyList"> </section>
			</div>
			
			<footer id="tabbed_box_1" class="tabbed_box">
				<div class="tabbed_area">  
				  
					<ul class="tabs">  
						<li>
							<a href="javascript:tabSwitch('tab_1', 'content_1');" id="tab_1" class="active footerTab">
								<img src="Icons2/BottomBarIcons/Concept&#38;Implem.png" title="Concept & Design"	width='20' height='20' class="bottomBarIcon">
								During Concept & Implementation
							</a>
						</li>  
						<li>
							<a href="javascript:tabSwitch('tab_2', 'content_2');" id="tab_2" class="footerTab">
								<img src="Icons2/BottomBarIcons/promotion.png" title="Promotion"	width='20' height='20' class="bottomBarIcon">
								During Marketing & Promotion
							</a>
						</li>  
						<li>
							<a href="javascript:tabSwitch('tab_3', 'content_3');" id="tab_3" class="footerTab">
								<img src="Icons2/BottomBarIcons/SustainEngagement.png" title="Sustain the Engagement"	width='20' height='20' class="bottomBarIcon">
								Sustain the engagement
							</a>
						</li>
					</ul>  
					  
					<div id="content_1" class="footerTabContent">
						<ul>
							<li><img src='Icons2/GreenCards/test.png' 					title='Beta Test Tile' 		width="100" height="100" class='GreenTileIcon CreateBetaTest sticky'></li>
							<li><img src='Icons2/GreenCards/Codesign.png' 				title='Co design Tile' 		width="100" height="100" class='GreenTileIcon CreateCoDesign sticky'></li>
							<li><img src='Icons2/GreenCards/contribute.png' 			title='Contribute Tile' 	width="100" height="100" class='GreenTileIcon CreateContribute sticky' ></li>
							<li><img src='Icons2/GreenCards/create.png' 				title='Create Tile' 		width="100" height="100" class='GreenTileIcon CreateCreation sticky'></li>
							<li><img src='Icons2/GreenCards/evaluate.png' 				title='Evaluate Tile' 		width="100" height="100" class='GreenTileIcon CreateEvaluate sticky'></li>
							<li><img src='Icons2/GreenCards/extra%20content.png'		title='Extra Content Tile' 	width="100" height="100" class='GreenTileIcon CreateExtraContent sticky'></li>
							<li><img src='Icons2/GreenCards/show%20loyalty.png' 		title='Show Loyalty Tile' 	width="100" height="100" class='GreenTileIcon CreateLoyalty GreyOverlay sticky'></li>
							<li><img src='Icons2/GreenCards/see%20the%20process.png' 	title='See process Tile' 	width="100" height="100" class='GreenTileIcon CreateSeeProcess sticky'></li>
							<li><img src='Icons2/GreenCards/Share.png' 					title='Share Tile' 			width="100" height="100" class='GreenTileIcon CreateShare sticky'></li>
							<li><img src='Icons2/GreenCards/talk%20to%20others.png'		title='Talk to others Tile' width="100" height="100" class='GreenTileIcon CreateTalkToOthers sticky'></li>
							<li><img src='Icons2/GreenCards/talk%20to%20you.png' 		title='Talk to you Tile' 	width="100" height="100" class='GreenTileIcon CreateTalkToYou sticky'></li>
							<li><img src='Icons2/GreenCards/unique.png' 				title='Unique Tile'	 		width="100" height="100" class='GreenTileIcon CreateUnique GreyOverlay sticky'></li>
						</ul>
					</div>  
					<div id="content_2" class="footerTabContent">
						<ul>
							<li><img src='Icons2/GreenCards/test.png' 					title='Beta Test Tile' 		width="100" height="100" class='GreenTileIcon CreateBetaTest GreyOverlay sticky'></li>
							<li><img src='Icons2/GreenCards/Codesign.png' 				title='Co design Tile' 		width="100" height="100" class='GreenTileIcon CreateCoDesign GreyOverlay sticky'></li>
							<li><img src='Icons2/GreenCards/contribute.png' 			title='Contribute Tile' 	width="100" height="100" class='GreenTileIcon CreateContribute sticky' ></li>
							<li><img src='Icons2/GreenCards/create.png' 				title='Create Tile' 		width="100" height="100" class='GreenTileIcon CreateCreation sticky'></li>
							<li><img src='Icons2/GreenCards/evaluate.png' 				title='Evaluate Tile' 		width="100" height="100" class='GreenTileIcon CreateEvaluate sticky'></li>
							<li><img src='Icons2/GreenCards/extra%20content.png'		title='Extra Content Tile' 	width="100" height="100" class='GreenTileIcon CreateExtraContent sticky'></li>
							<li><img src='Icons2/GreenCards/show%20loyalty.png' 		title='Show Loyalty Tile' 	width="100" height="100" class='GreenTileIcon CreateLoyalty GreyOverlay sticky'></li>
							<li><img src='Icons2/GreenCards/see%20the%20process.png' 	title='See process Tile' 	width="100" height="100" class='GreenTileIcon CreateSeeProcess sticky'></li>
							<li><img src='Icons2/GreenCards/Share.png' 					title='Share Tile' 			width="100" height="100" class='GreenTileIcon CreateShare sticky'></li>
							<li><img src='Icons2/GreenCards/talk%20to%20others.png'		title='Talk to others Tile' width="100" height="100" class='GreenTileIcon CreateTalkToOthers sticky'></li>
							<li><img src='Icons2/GreenCards/talk%20to%20you.png' 		title='Talk to you Tile' 	width="100" height="100" class='GreenTileIcon CreateTalkToYou sticky'></li>
							<li><img src='Icons2/GreenCards/unique.png' 				title='Unique Tile'	 		width="100" height="100" class='GreenTileIcon CreateUnique sticky'></li>
						</ul>
					</div>  
					<div id="content_3" class="footerTabContent">
						<ul>
							<li><img src='Icons2/GreenCards/test.png' 					title='Beta Test Tile' 		width="100" height="100" class='GreenTileIcon CreateBetaTest GreyOverlay sticky'></li>
							<li><img src='Icons2/GreenCards/Codesign.png' 				title='Co design Tile' 		width="100" height="100" class='GreenTileIcon CreateCoDesign GreyOverlay sticky'></li>
							<li><img src='Icons2/GreenCards/contribute.png' 			title='Contribute Tile' 	width="100" height="100" class='GreenTileIcon CreateContribute GreyOverlay sticky' ></li>
							<li><img src='Icons2/GreenCards/create.png' 				title='Create Tile' 		width="100" height="100" class='GreenTileIcon CreateCreation sticky'></li>
							<li><img src='Icons2/GreenCards/evaluate.png' 				title='Evaluate Tile' 		width="100" height="100" class='GreenTileIcon CreateEvaluate sticky'></li>
							<li><img src='Icons2/GreenCards/extra%20content.png'		title='Extra Content Tile' 	width="100" height="100" class='GreenTileIcon CreateExtraContent sticky'></li>
							<li><img src='Icons2/GreenCards/show%20loyalty.png' 		title='Show Loyalty Tile' 	width="100" height="100" class='GreenTileIcon CreateLoyalty sticky'></li>
							<li><img src='Icons2/GreenCards/see%20the%20process.png' 	title='See process Tile' 	width="100" height="100" class='GreenTileIcon CreateSeeProcess sticky'></li>
							<li><img src='Icons2/GreenCards/Share.png' 					title='Share Tile' 			width="100" height="100" class='GreenTileIcon CreateShare sticky'></li>
							<li><img src='Icons2/GreenCards/talk%20to%20others.png'		title='Talk to others Tile' width="100" height="100" class='GreenTileIcon CreateTalkToOthers sticky'></li>
							<li><img src='Icons2/GreenCards/talk%20to%20you.png' 		title='Talk to you Tile' 	width="100" height="100" class='GreenTileIcon CreateTalkToYou sticky'></li>
							<li><img src='Icons2/GreenCards/unique.png' 				title='Unique Tile'	 		width="100" height="100" class='GreenTileIcon CreateUnique sticky'></li>
						</ul>
					</div>
					<div>
						<ul id="footerHelpAndAddIcons">
							<li><a href="#" id="AddGreenCard">+</a></li>
							<li><a href="#" id="LearnMoreButton">?</a></li>
						</ul>
					</div>
				</div>  <!-- end tabbed_area -->	
			</footer>
		</div> <!-- End surface -->
		
						
		<div id="OverLay">
			<div class="Window">
				<div class="GreenCardExplained">
					<ul class="GreenCardList">
						<li><img src='Icons2/GreenCards/test.png' 					title='Beta Test Tile' 		width="100" height="100" class='HelpIcon CreateBetaTest'></li>
						<li><img src='Icons2/GreenCards/Codesign.png' 				title='Co design Tile' 		width="100" height="100" class='HelpIcon CreateCoDesign'></li>
						<li><img src='Icons2/GreenCards/contribute.png' 			title='Contribute Tile' 	width="100" height="100" class='HelpIcon CreateContribute'></li>
						<li><img src='Icons2/GreenCards/create.png' 				title='Create Tile' 		width="100" height="100" class='HelpIcon CreateCreation'></li>
						<li><img src='Icons2/GreenCards/evaluate.png' 				title='Evaluate Tile' 		width="100" height="100" class='HelpIcon CreateEvaluate'></li>
						<li><img src='Icons2/GreenCards/extra%20content.png'		title='Extra Content Tile' 	width="100" height="100" class='HelpIcon CreateExtraContent'></li>
						<li><img src='Icons2/GreenCards/show%20loyalty.png' 		title='Show Loyalty Tile' 	width="100" height="100" class='HelpIcon CreateLoyalty'></li>
						<li><img src='Icons2/GreenCards/see%20the%20process.png' 	title='See process Tile' 	width="100" height="100" class='HelpIcon CreateSeeProcess'></li>
						<li><img src='Icons2/GreenCards/Share.png' 					title='Share Tile' 			width="100" height="100" class='HelpIcon CreateShare'></li>
						<li><img src='Icons2/GreenCards/talk%20to%20others.png'		title='Talk to others Tile' width="100" height="100" class='HelpIcon CreateTalkToOthers'></li>
						<li><img src='Icons2/GreenCards/talk%20to%20you.png' 		title='Talk to you Tile' 	width="100" height="100" class='HelpIcon CreateTalkToYou'></li>
						<li><img src='Icons2/GreenCards/unique.png' 				title='Unique Tile'	 		width="100" height="100" class='HelpIcon CreateUnique'></li>
					</ul><!-- End GreenCardList -->
				</div><!-- End GreenCardExplained -->
			</div><!-- End Window-->
		</div><!-- End overlay-->
	</body>
</html>
