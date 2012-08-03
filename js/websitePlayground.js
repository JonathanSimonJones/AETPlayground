/* Website Playground.js */

$(document).ready(function()
{
	$("#OverLay").css("height", $(document).height());

	$("#AddGreenCard").click(function(){
		CreateNewSticky();
		return false;
	});
	
	$("#LearnMoreButton").click(function(){
		$("#OverLay").fadeIn();
		return false;
	});
	
	$("#OverLay").click(function(){
		$("#OverLay").fadeOut();
		return false;
	});
	
	$('.sticky').draggable({ 	stack: ".sticky",
							helper: "clone",
							containment: '#Surface',
							stop:function(event, ui)
								{
									 $(ui.helper).clone(true).removeClass('box ui-draggable-dragging GreyOverlay RightBarIcon').addClass('sticky-clone shadow').appendTo('#stickyList');
								}
							});
							
	
	$(window).bind("resize", function(){
		$("#Window").css("height", $(window).height());
	});
});

$(function() {						
	$(".sticky-clone").live('mouseover', function() {
		$(this).draggable({ 
			containment: '#Surface',
			stack: ".sticky-clone",
			open:function()
			{
				$('#createStickyButton').click(function()
				{
					$(this).draggable("destroy");
					$(this).remove();
				});
			}
		}).bind('click', function()
								{
									$(this).focus();
								});
	});

	// Used to animate the header
	$('#HeaderSlidingBar #HeaderTab').toggle(function(){
		$('#HeaderSlidingBar').animate({'top':0 + "px"});
		$('#MovingTargetsTab').attr("src", "Icons2/Header/topBarArrowUp.png");
	}, function(){
		$('#HeaderSlidingBar').animate({'top':-150 + "px"});
		$('#MovingTargetsTab').attr("src", "Icons2/Header/topBarArrowDown.png");
	});

	$(".GreenTileIcon").click(function()
	{
		var imageTitle = $(this).attr('src');
		CreateNewSticky(imageTitle);
	});
   
   /*
   $("#challengeCard").toggle(
   function()
   {
		$("#challengeCard").animate({ 	width: 400+"px",
										height: 400+"px",
										marginRight:"30%",
										marginTop:0+"px"}, 1500);
		$("#ChallegeCardContent").css({'visibility': 'visible'});
   },
   function()
   {
		$("#challengeCard").animate({ 	width: 100+"px",
										height: 100+"px",
										marginRight:"0%",
										marginTop:-50+"px"}, 1500);
		$("#ChallegeCardContent").css({'visibility': 'collapse'});
   });
   
   $("#PickRandomQuestion").dblclick(function()
   {
		$("RandomQuestion").css({'visibility': 'visible'});
   });
   */
   $('.sticky_editable').attr('contenteditable', 'true');
   
   $('.CreateBetaTest').click(function()
	{
		alert('Foo');
	});
   
});

function tabSwitch(new_tab, new_content) {  
	  
	document.getElementById('content_1').style.display = 'none';  
	document.getElementById('content_2').style.display = 'none';  
	document.getElementById('content_3').style.display = 'none';          
	document.getElementById(new_content).style.display = 'inline';     
	  
  
	document.getElementById('tab_1').className = '';
	document.getElementById('tab_2').className = '';
	document.getElementById('tab_3').className = '';
	document.getElementById(new_tab).className = 'active';     
  
};  

function CreateNewSticky(nameOfSticky)
{
	var htmlData='<div class="sticky-clone ui-draggable user-created-sticky"><p>Drag me around</p></div>';
	$('#stickyList').append(htmlData);
	$('.sticky-clone').draggable({stack: ".sticky-clone"});
}