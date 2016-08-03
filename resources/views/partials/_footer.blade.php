<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 " id="footer1">
                <h4>Where you can find us</h4>
                <p>
                    Parsons Green Media</br>
                    Third Floor, 1 Old Market Avenue</br>
                    Chichester</br>
                    West Sussex</br>
                    PO19 1SP</br>
                    </br>
                    <a href="tel:02036933769"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp; 020 3693 3769</a></br>
                    <a href="mailto:info@parsonsgreenmedia.com"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp; info@parsonsgreenmedia.com</a>
                    </br>
                    </br>
                    <a href="http://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="http://www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </p>
            </div>
            <div class="col-md-4 ">
                <h3></h3>
            </div>
            <div class="col-md-4 ">
                <h3></h3>
            </div>
        </div>
        &copy; Parsons Green Media
    </div>
    <!--<div class="row">
        <div class="col-md-12 " id="sub-footer">
            
        </div>
    </div>
 
 <!-- JavaScripts -->
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="{{ ('js/map.js') }}"></script>
    <script src="{{ ('js/dropdown.js') }}"></script>
    {{--  --}}

<!--<script>
var fixmeTop = $('#nav').offset().top;
$(window).scroll(function() {
    var currentScroll = $(window).scrollTop();
    if (currentScroll >= fixmeTop) {
        $('.fixed_bottom').css({
            $(".fixed_bottom").fadeIn(1000);
        });
    };

});
</script>-->






<script>
	$(function() {
		$(".preload").fadeOut(2000, function() {
			$("#first").fadeIn(1000);
		});
	});
</script> 

    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBfuqu9gxT60lG3BRwA4D_GkUi6JGgrrQE&callback=initMap">
    </script>
<script>
    $(document).ready(function () {

    $('#memberModal').modal('show');

});
  </script>
<script>
   $(document).ready(function(){
            $("#down").click(function(){
                $('html, body').animate({
                    scrollTop: $('#nav_home').position().top+'px'
                }, 800)
            });
        });
    </script>
<script>
    $(window).one("scroll",function() {
                                        var currentScroll = $(window).scrollTop();
    if (currentScroll >= 1) 
        {$('html, body').animate(
            {scrollTop: $('#nav_home').position().top+'px'}, 800)
            
            }
             });
                
                </script>



    
    <script>
$("#logo").hide(0).delay(200).fadeIn(2000)
    </script>
    
</div> 