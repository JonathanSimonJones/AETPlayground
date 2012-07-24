/* Website Playground.js */

var dragOn = true;

$(document).ready(function()
{
	//alert("Foo");
});

$(function() {
	$( "#droppable" ).droppable({
									drop: function( event, ui ) 
									{
										$( this )
											.addClass( "ui-state-highlight" )
											.find( "p" )
												.html( "Dropped!" );
									}
								});
							
	$("#createStickyButton").click(function(){CreateNewSticky()});
	
	function CreateNewSticky(nameOfSticky)
	{
		var htmlData='<div class="sticky" contenteditable="true"><p>Drag me around</p></div>';
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
		//$( ".draggable" ).dialog( "option", "width", "auto" );
		$("div").removeClass("ui-dialog-titlebar");
		$('.ui-dialog-titlebar-close').css({'top':'15px', 'float':'right'});
		$("span").remove('#ui-dialog-title-1');
		$("div").filter(".ui-widget-header").filter(".ui-corner-all").filter(".ui-helper-clearfix").removeClass('ui-widget-header ui-corner-all ui-helper-clearfix');
		//$("div").filter(".draggable").css('width', 'auto');
	}
	
	/*
	$( "#createStickyButton").click(function()
									{
										var htmlData='<div  class="draggable ui-widget-content"><p>Drag me around</p></div>';
										$('.demo').append(htmlData);
										$('.draggable:not(.ui-draggable)').draggable();
										
									}
									);
	*/
	$( ".draggable" ).draggable({
									drag: function( event, ui ) 
									{
										$( this )
											.find( "p" )
												.html( "Dragging!" );
									}
								});
								
	$("#turnOnDrag").click(function()
							{
								dragOn = true;
								turnDragOnOrOff();
							});
							
	$("#turnOffDrag").click(function()
						{
							dragOn = false;
							turnDragOnOrOff();
						});
	
	function turnDragOnOrOff()
	{
		if(dragOn === false)
		{
			$('.draggable').draggable('disable');
		}
		else
		{
			$('.draggable').draggable('enable');
		}
	}
	
	/*
	$('#sidebox .tab').toggle(function(){
		$('#sidebox').animate({'right':0});
	}, function(){
		$('#sidebox').animate({'right':-150+"px"});
	});
	*/
	
	function resetTab()
	{
		$('#sidebox').css({'right':-150 + "px"});
	}
	
	$('#sidebox .tab').toggle(function(){
			$('#sidebox').animate({'right':0 + "px"});
		}, function(){
			$('#sidebox').animate({'right':-225 + "px"});
		});
		
	$(document).mousemove(function(e){
	  $('#status').html( e.pageX +', '+ e.pageY);
	}); 
	
	$(".GreenTileIcon").click(function()
	{
		var imageTitle = $(this).attr('id');
		CreateNewSticky(imageTitle);
	});
   
});