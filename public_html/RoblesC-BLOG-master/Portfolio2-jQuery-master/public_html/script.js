
"Script";
//this is what we use to code for the jquery page  

$("document").ready(function() {
    $(".TR").css("background-color", "darkred");
    $('p:last').css({"background-color": "Red", "color": "black"});
    $('p:first').css({"background-color": "Green", "color": "white"});

    $('#Adidas').accordion({header: "h3"});

    $("h1").bind('mouseover', mouseOverMe).bind('mouseout', mouseOutMe);
    //these are all code for the special things jquery offers 
    $('div').bind('moseover', mouseOverMe());

    $('h1').bind('click', mouseClick);

    $('#replaceWText').bind('click', replaceWText);
    $('#randPara').bind('click', addAPara);
    $('#removePara').bind('click', removeAPara);
    $('#show').css('visibility', 'hidden');

$(document).ready(function() {
	$(".fancybox").fancybox({
		openEffect	: 'data-fancybox-type',
		closeEffect	: 'data-fancybox-type'
	});
});
});
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function removeAPara() {
    $('#randPara p:last').remove();
}
//this is what we use to code for the jquery page 
function addAPara() {
    $('#randPara').append('<p>ADDED</p>');
}
//
function replaceWText() {
    $('#replaceWText').text('Replaced!');
}
                              
//this is pretty much the same thing as all the other comments


function mouseOverMe() {
    $("h1").html("hello");
}

function mouseOutMe() {
    $('h1').html('Hi');
}

function mouseClick() {
    $('p').html("Hello once again!!!!!!!!!!");
}


