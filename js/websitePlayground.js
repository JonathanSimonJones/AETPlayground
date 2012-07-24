/* Website Playground.js */

var dragOn = true;

$(document).ready(function()
{
	//alert("Foo");
});

$(function() {						
	$("#createStickyButton").click(function(){CreateNewSticky()});
	
	function CreateNewSticky(nameOfSticky)
	{
		var htmlData='<div class="sticky" contenteditable="true"><p>Drag me around</p></div>';
		$('#stickyList').prepend(htmlData);
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
															$(this).html('<p>' + nameOfSticky + '</p>');
														}
														else
														{
															$(this).html('<p>Enter text here</p>');
														}
													}
													/*
													drag: function()
													{
														resetTab();
													}*/
													});
		$("div").removeClass("ui-dialog-titlebar").removeClass('ui-widget-content').removeClass('ui-dialog');
		$('.ui-dialog-titlebar-close').css({'top':'15px', 'float':'right'});
		$("span").remove('#ui-dialog-title-1');
		$("div").filter(".ui-widget-header").filter(".ui-corner-all").filter(".ui-helper-clearfix").removeClass('ui-widget-header ui-corner-all ui-helper-clearfix');
	}
	
	function resetTab()
	{
		$('#sidebox').css({'right':-150 + "px"});
	}
	
	$('#sidebox .tab').toggle(function(){
			$('#sidebox').animate({'right':0 + "px"});
		}, function(){
			$('#sidebox').animate({'right':-225 + "px"});
		});
	
	$(".GreenTileIcon").click(function()
	{
		var imageTitle = $(this).attr('id');
		CreateNewSticky(imageTitle);
	});
   
});