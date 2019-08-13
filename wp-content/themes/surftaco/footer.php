<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer" role="contentinfo">


    <div class="row">
        <div class="col-lg-2 col-md-12 logo" id="p1">
        <?php dynamic_sidebar('footer-1');?>
        	
        </div>

        <div class="col-lg-3 col-md-4 col-12 join col-half-offset" id="p2">
        	<?php dynamic_sidebar('footer-2');?>
		</div>

        <div class="col-lg-2 col-md-4 col-5 social col-half-offset" id="p3">
        	<?php dynamic_sidebar('footer-3');?>
        </div>

        <div class="col-lg-2 col-md-3 col-5 talk-to col-half-offset" id="p4">
        	<?php dynamic_sidebar('footer-4');?>
        </div>

        <div class="col-lg-3 col-md-5 col-7 lolcation col-half-offset" id="p5">
        	
        	<?php dynamic_sidebar('footer-5');?>
        </div>

    </div>




			<div class="site-info">
				<?php
					/**
					 * Fires before the twentysixteen footer text for footer customization.
					 *
					 * @since Twenty Sixteen 1.0
					 */
					do_action( 'twentysixteen_credits' );
				?>
				<span class="site-title">
				<?php printf( __( 'Copyright 2018 @ Surf Taco', 'twentysixteen' ), '' ); ?>
				</span>
			</div><!-- .site-info -->
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->


<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>

<script language="javascript">
    $(document).ready(function () {
        $(".wpcf7-date").datepicker({
            showOn: 'button',
        buttonText: 'Show Date',
        buttonImageOnly: true,
        buttonImage: 'http://demosrvr.com/wp/surftaco/wp-content/uploads/2018/03/calendar.png'
        });
    });
</script>



<script type="text/javascript">
    
(function($) {
var allPanels = $('.accordion > dd').hide();
$('.accordion > dt > a').click(function() {
allPanels.slideUp();
$(this).parent().next().slideDown();
return false;
});
$('.accordion > dt > a').eq(0).click()
})(jQuery);

</script>


<script>
var acc = document.getElementsByClassName("accordion-toggle");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>

<!-- <script>
$(document).ready(function(){
    $(".expand-anchor").click(function(){
        $(".accordion-toggle").addClass("active");
    });
});
</script> -->


<!-- <script type="text/javascript">
    
    $(".play_video_button").click(function () {
     $(".video_section_image").hide();
    $("#yt")[0].src += "?autoplay=1";
    setTimeout(function(){ $("#yt").show(); }, 200);
    });
</script> -->


<script type="text/javascript">
  
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>






<style type="text/css">
    .accordion-container h3{
color: #ee1c31;
font-weight: 600;
padding-bottom: 5px;
}

#yt {
    display: none;
}
iframe {
    height: 500px;
    width: 100%;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 100%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

/*.st_cares_inquiry_form{display: none;}

.sunil .st_cares_inquiry_form {
  background: #ffffff none repeat scroll 0 0;
  display: block;
  height: 100%;
  left: 0;
  overflow-y: scroll;
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 99;
}*/


</style>

<script type="text/javascript">
    $(document).ready(function () {
    size_li = $("#myList li").size();
    x=6;
    $('#myList li:lt('+x+')').show();
    $('#loadMore').click(function () {
        x= (x+5 <= size_li) ? x+5 : size_li;
        $('#myList li:lt('+x+')').show();
    });
    $('#showLess').click(function () {
        x=(x-5<0) ? 3 : x-5;
        $('#myList li').not(':lt('+x+')').hide();
    });
});
</script>



<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $(".header-sign-up a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});

</script>


<!--
<script type="text/javascript">
    $(document).ready(function () {
  $(".tnp-firstname").attr("placeholder", "First Name");
    $(".tnp-lastname").attr("placeholder", "Last Name");
	  $(".tnp-email").attr("placeholder", "Email");
});
</script>
-->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
<script src="<?php echo site_url();?>/wp-content/themes/surftaco-child/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).on('click' ,'.expand-anchor a', function(e){
   $class= $(this).attr('data-class');
    if($class == 'expand'){
        $(this).attr('data-class' ,'collapse');     
        $(this).html('Collapse ALL -');
        $('.accordion-body').collapse('show');
        $('.accordion-toggle').addClass('active');
    }else{     
        $(this).attr('data-class' ,'expand');   
        $(this).html('Expand ALL +');
        $('.accordion-body').collapse('hide');
        $('.accordion-toggle').removeClass('active');
    }
});

</script>

<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script type="text/javascript">
    var grid = document.querySelector('.grid2');
var msnry = new Masonry( grid, {
  // options...
  itemSelector: '.grid-item',
  columnWidth: 200
});

// init with selector
var msnry = new Masonry( '.grid2', {
  // options...
});
</script>



<script type="text/javascript">

$(document).ready(function(){
    $("#menu-toggle").click(function(){
        $("body").addClass("sunil");
    });
});
</script>

<script type="text/javascript">

$(document).ready(function(){
    $(".remove_menu").click(function(){
        $("body").removeClass("sunil");
    });
});

</script>



<script type="text/javascript">

$(document).ready(function(){
    $("#myBtn").click(function(){
        $("body").addClass("open_video");
		
    });
});

</script>

<script type="text/javascript">

$(document).ready(function(){
    $("#CloseVideo").click(function(){
        $("body").removeClass("open_video");
		
    });
});

</script>


<script>

$(document).ready(function(){
    $("#give_back_now").click(function(){
        $("body").addClass("open-form");
    });
});



$(document).ready(function(){
    $("#CloseForm").click(function(){
        $("body").removeClass("open-form");
    });
});


</script>




<?php wp_footer(); ?>
</body>
</html>
