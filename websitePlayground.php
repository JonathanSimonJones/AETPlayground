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
			
			<section id="StickySpace">
				<ul id="RightHandBar">
					<li>
						<div id="StickyNoteIcon" class="sticky sticky_editable RightBarIcon">
							<p>Sticky Note</p>
						</div>
					</li>
				
					<li>
						<div id="challengeCardArea">
							<img src='Icons2/RightBar/Random%20Challenge.png' title='Random Challenge' width="100" height="100" id='ChallengeCard'>
							<p id="SeeAllButton">See all</p>
						</div>
					</li>
					
					<li>
						<a href="#" id='NextStep'><img src='Icons2/RightBar/NextStep.png' title='Next Step Button' width="100" height="100"></a>
					</li>
				</ul>
				
				<div id="stickyList"> </div>
			</section>
			
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
							<li><img src='Icons2/GreenCards/test.png' 					title='Test Tile' 			width="100" height="100" class='GreenTileIcon CreateBetaTest sticky'></li>
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
							<li><img src='Icons2/GreenCards/test.png' 					title='Test Tile' 			width="100" height="100" class='GreenTileIcon CreateBetaTest GreyOverlay sticky'></li>
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
							<li><img src='Icons2/GreenCards/test.png' 					title='Test Tile' 			width="100" height="100" class='GreenTileIcon CreateBetaTest GreyOverlay sticky'></li>
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
							<!--<li><a href="#" id="AddGreenCard">+</a></li>
							<li><a href="#" id="LearnMoreButton">?</a></li>-->
							<li><img src='Icons2/BottomBarIcons/add%20green.png' title='Add green card' width=45 height=45 id="AddGreenCard"></li>
							<li><img src='Icons2/BottomBarIcons/info%20green.png' title='Information for green cards' width=45 height=45 id="LearnMoreButton"></li>
						</ul>
					</div>
				</div>  <!-- end tabbed_area -->	
				<div class="tabbed_area2">  
				  
					<ul class="tabs">
						<li>
							<a href="javascript:tabSwitch('tab_1', 'content_1');" id="tab_1" class="active footerTab">
								Initative1
							</a>
						</li>  
					</ul>  
					
					<div class="footerTabContent">
						<ul id="DroppableList">
							<li>
								<div class="Droppable">Droppable area</div>
							</li>
						</ul>
					</div>
				</div>
			</footer>
		</div> <!-- End surface -->
		
				
		<div id="OverLay">
			<div id="Window">
				<div id="GreenCardExplained">
					<ul id="GreenCardList">
						<li><img src='Icons2/GreenCards/test.png' 					title='Test Tile' 			width="100" height="100" class='HelpIcon CreateBetaTest'></li>
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
				<div id="Feedback">
					<img src='Icons2/Header/beta.png' title='Beta' width="100" height="200" id="BetaLogoForm">
					<form id="FeedBackForm">
						<ul>
							<li><div class="FormListElement">Topic: </br><input type="text" name="Topic" id="Topic" value="" /></div></li>
							<li><div class="FormListElement" style="float:right;">Category: </br><input type="text" name="Category" id="Category" value="" /></div></li>
							<li><div class="FormListElement">Description: </br><textarea name="comments" id="comments" cols="50" rows="5"></textarea></div></li>
							<li><div class="FormListElement">Your Media Sector: </br><input type="text" name="media" id="media" value="" /></div></li>
							<li><div class="FormListElement" style="float:right;">Email: </br><input type="text" name="email" id="email" value="" /></div></li>
							<li></br><input type="submit" value="submit" style="float:right;"/></li>
						 </ul>
					</form>
				</div>
			</div><!-- End Window-->
			<div id="GreenCardDescriber">
				<ul>
					<li class="greenCardDescription" id="TestDesc"><p>Techniue used with interactive media with the aim of testing the technology and interface.</p><p> However it can also be understood as shadowing or role-playing a prototyped experience to gather users' responses and feedback.</p></li>
					<li class="greenCardDescription" id="CoDesignDesc"><p>Involvment of potential audience-users at concept stage with the aims of inspiration, idea generation and/or research.</p><p> It can be either done through open call to the public or the recruitment of focus groups.</p></li>
					<li class="greenCardDescription" id="ContributeDesc"><p>Enabling audience-users to contribute to the out-come.</p><p> Generally it is understood as contribution when audience-users generate content (or bits of content) under the general vision (concept) of the creator.</p></li>
					<li class="greenCardDescription" id="CreateDesc"><p>Enabling audience-users to contribute to the outcome.</p><p>Generally it is understood as creation when audience-users generate content - connected to the main content - but under their own creative vision.</p></li>
					<li class="greenCardDescription" id="EvaluateDesc"><p>Not only making available unfinished bits of content to the audience/users but allowing them to interact with the creators by providing feedback and suggestions.</p><p> This can either happen at concept or implementation stage.</p></li>
					<li class="greenCardDescription" id="ExtraContentDesc"><p>It is understood as extra content any content that initially would not belong to the main content.</p><p> Cut scenes, bits of the process (sketches, trashed ideas), getting to know the creators, interviews.</p></li>
					<li class="greenCardDescription" id="ShowLoyaltyDesc"><p>When the audience-users identify with the content they may want to display thay engagement.</p><p> That demonstration can take many forms, from merchandising to belonging to fan-communities.</p></li>
					<li class="greenCardDescription" id="SeeTheProcessDesc"><p>Audience-users will to learn more about the creators & their processes.</p><p> Unfinished pieces of content that acquite value for the audience-users and could be exploited as a promotion tool or even monetised.</p></li>
					<li class="greenCardDescription" id="ShareDesc"><p>Enabling the audience-users to share their experience - and with it your content - with others.</p><p> Providing the framework and tools for it can increase visibility of your content and rise awareness.</p></li>
					<li class="greenCardDescription" id="TalkToOthersDesc"><p>If people engage with the content they will talk about whether you are involve or not in those conversations.</p><p> Providing the framework for those discussion can give you great insight into how they understand and engage with your content.</p></li>
					<li class="greenCardDescription" id="TalkToYouDesc"><p>Audience-users interest in learning more about the creators or even the fictional characters.</p><p> Similarly, opening a channel for direct communication can provide you with great insight into your audiences and their engagement.</p></li>
					<li class="greenCardDescription" id="UniqueDesc"><p>The feeling of having a unique exerience usually comes from a high degree of customisation or the access to exclusive content.</p></li>
				</ul>
			</div>
			<div
		</div><!-- End overlay-->
	</body>
</html>
