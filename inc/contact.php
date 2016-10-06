<style type="text/css">

#contactTitle {
	margin-top: 190px;
	text-align: center;
    font-size: 125px;
    font-family: "bebas_neueregular", Arial;
    letter-spacing: 30px;
    position: absolute;
    width: 100%;
}
</style>

<div id="contactHolder">
	<h1 id="headerContact">Contact - Katarzyna Konkowska</h1>
	<div id="contactName">DIGITAL ENSOURCE</div>
	<div id="contactT1"><span id="contactF1">M: </span><span id="contactF1_2">... ... ...</span><div class="clear"></div></div>
	<div id="contactT2"><div id="contactF2">E:&nbsp;</div><div id="contactF2_1"><div id="contactF2_2">... ... ...</div><div id="contactF2_3">... ... ...</div><div id="contactF2_4">... ... ...</div><div id="btnContact"></div></div><div class="clear"></div></div>
	<div id="contactLine"></div>
	<div class="clear"></div>
</div>
<div id="stageHolder">
	<div id="contactTitle" class="title-page" style="display: block;">Contact</div>
	<div id="projectsStageHolder"></div>
	<div id="navigationProjects"></div>
	<div id="navigationPhotos"></div>
</div>
<script type="text/javascript">
$( document ).ready(function() {
    $("#contactTitle").css('display', 'block');
			var $all_msg = $('#contactTitle');
			  //get a list of letters from the welcome text
			  var $wordList = $('#contactTitle').text().split("");
			  //clear the welcome text msg
			  $('#contactTitle').text("");
			  //loop through the letters in the $wordList array
			  $.each($wordList, function(idx, elem) {
			    //create a span for the letter and set opacity to 0
			    var newEL = $("<span/>").text(elem).css({
			      opacity: 0
			    });
			    //append it to the welcome message
			    newEL.appendTo($all_msg);
			    //set the delay on the animation for this element
			    newEL.delay(idx * 70);
			    //animate the opacity back to full 1
			    newEL.animate({
			      opacity: 1
			    }, 1100);
			  });
});
</script>