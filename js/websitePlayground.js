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
});

$(function() {						
	$("#createStickyButton").click(function(){CreateNewSticky()});
	
	function CreateNewSticky(nameOfSticky)
	{
		var htmlData='<div class="sticky"></div>';
		$('#stickyList').append(htmlData);
		$('.sticky:not(.ui-draggable)').dialog({
													close: function()
													{
														$(this).dialog("destroy");
														$(this).remove();
													},
													open: function()
													{
														if(nameOfSticky)
														{
															$(this).html('<img src =' + nameOfSticky + ' style="position:absolute; top: 0px; left: 0px;">');
														}
														else
														{
															$(this).html('<p>Enter text here</p>');
														}
														$(this).dialog( "option", "width", 300 );
														$(this).dialog( "option", "height", 300 );
													}
													/*
													drag: function()
													{
														resetTab();
													}*/
													});
		if(	nameOfSticky )
		{		
			$("div").filter(".ui-widget-content")
					.removeClass('ui-widget-content')
					.addClass('greenSticky');
		}
		$('.ui-dialog-titlebar-close').css({'top':'15px', 'float':'right'});
		$("span").remove('#ui-dialog-title-1');
		$("div").filter(".ui-widget-header")
				.filter(".ui-corner-all")
				.filter(".ui-helper-clearfix")
				.removeClass('ui-widget-header ui-corner-all ui-helper-clearfix');
	}

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
	document.getElementById(new_content).style.display = 'block';     
	  
  
	document.getElementById('tab_1').className = '';
	document.getElementById('tab_2').className = '';
	document.getElementById('tab_3').className = '';
	document.getElementById(new_tab).className = 'active';     
  
};  

$(window).bind("resize", function(){
	$("#Window").css("height", $(window).height());
});