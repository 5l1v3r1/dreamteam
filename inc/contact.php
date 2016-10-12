<style type="text/css">

	#contactTitle {
		margin-top: 30px;
		text-align: center;
	    font-size: 125px;
	    font-family: "bebas_neueregular", Arial;
	    letter-spacing: 30px;
	    width: 100%;
	}
	.contact-form{
	    margin-top: 165px;
	}

	.input-contact{
		height: 30px;
		border: 3px solid #fff; 
		margin-top: 15px;
		color: white;  
		background-color: rgba(255, 255, 255, 0); 
		width: 350px; 
		display: block; 
		margin: 15px auto;
		font-family: 'bebas_neuebold';
	    padding-left: 10px;
	}
	::-webkit-input-placeholder { /* WebKit, Blink, Edge */
    color:    white;
	}
	:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
	   color:    white;
	   opacity:  1;
	}
	::-moz-placeholder { /* Mozilla Firefox 19+ */
	   color:    white;
	   opacity:  1;
	}
	:-ms-input-placeholder { /* Internet Explorer 10-11 */
	   color:    white;
	}
	#submit{
		color: black;
    	background: white;
    	font-family: "GT-Walsheim-Medium";
    	font-size: 14px;
    	width: 100px;
	    border: 2px solid white;
	    border-radius: 5px;
	    margin-top: -20px;
    	position: absolute;
    	margin-left: 350px;
    	cursor: pointer;
	}
</style>

<div id="contactHolder">
	<h1 id="headerContact">Contact - Katarzyna Konkowska</h1>
	<div id="contactName">DIGITAL ENSOURCE</div>
	<div id="contactT1"><span id="contactF1">M: </span><span id="contactF1_2">... ... ...</span><div class="clear"></div></div>
	<div id="contactT2"><div id="contactF2">E:&nbsp;</div><div id="contactF2_1"><div id="contactF2_2">... ... ...</div><div id="contactF2_3">... ... ...</div><div id="contactF2_4">... ... ...</div><div id="btnContact"></div></div>
	<div class="clear"></div></div>
	<div id="contactLine"></div>

	<div class="clear"></div>

</div>
<style type="text/css">
</style>
<div id="stageHolder">
	
	<div id="contactTitle" class="title-page" style="display: block;">Contact</div>
	<div id="projectsStageHolder"></div>
	<div id="navigationProjects"></div>
	<div id="navigationPhotos"></div>
	<form class="contact-form" method="post">
		<input type="text" name="name" class="input-contact" align="center" placeholder="Full Name"/>
		<input type="text" name="email" class="input-contact" align="center" placeholder="Email" />
		<textarea class="input-contact" name="message" type="text" placeholder="Message" style="height:80px; width: 350px; display: block; margin: 0 auto;"></textarea>
		<button id="submit" type="submit" >Submit</button>
	</form>
</div>

<script type="text/javascript">
$( "form.contact-form" ).submit(function( event ) {
	form = $(this).serialize();
	$.ajax({
        url : "mailer.php",
        type : "post",
        dataType:"text",
        data : {
            'form' : form,
        },
        success: function (result){
        	if(result == 1){
        		alert('sent');
        	}
        }
    });
	event.preventDefault();
});

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