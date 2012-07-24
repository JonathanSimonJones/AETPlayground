/* Website Playground.js */

$(document).ready(function()
{
	//alert("Foo");
});

$(function() {						
	$("#createStickyButton").click(function(){CreateNewSticky()});
	
	function CreateNewSticky(nameOfSticky)
	{
		var htmlData='<div class="sticky" contenteditable="true"><p>Drag me around</p></div>';
		$('#stickyList').append(htmlData);
		var ariaLabelledby = 0;
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
															$(this).html('<img src =' + nameOfSticky + ' width="100" height="100" style="position:absolute; top: 0px; left: 0px;">');
														}
														else
														{
															$(this).html('<p>Enter text here</p>');
														}
														$(this).dialog( "option", "width", 150 );
														$(this).dialog( "option", "height", 150 );
														//ariaLabelledby = $(this).attr('aria-labelledby');
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
   
});