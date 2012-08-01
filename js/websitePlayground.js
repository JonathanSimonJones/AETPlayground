/* Website Playground.js */

$(document).ready(function()
{
	$("#OverLay").css("height", $(document).height());
	
	$(".BrownTile").click(function(){
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
									 $(ui.helper).clone(true).removeClass('box ui-draggable-dragging GreyOverlay').addClass('sticky-clone shadow').appendTo('#stickyList');
								}
							});
});

$(function() {						
	$("#createStickyButton").click(function(){CreateNewSticky()});
	
	function CreateNewSticky(nameOfSticky)
	{
		var htmlData='<div contenteditable="true"><div class="sticky-clone" ><p>Drag me around</p></div></div>';
		$('#stickyList').append(htmlData);
		$('.sticky-clone').draggable({stack: ".sticky-clone"});
	}
	
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
		});
	});

	

	
	function resetTab()
	{
		$('#sidebox').css({'right':-150 + "px"});
	}
	
	$('#sidebox .tab').toggle(function(){
			$('#sidebox').animate({'left':0 + "px"});
		}, function(){
			$('#sidebox').animate({'left':-225 + "px"});
		});

	$(".GreenTileIcon").click(function()
	{
		var imageTitle = $(this).attr('src');
		CreateNewSticky(imageTitle);
	});
   
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

$(window).bind("resize", function(){
	$("#Window").css("height", $(window).height());
});