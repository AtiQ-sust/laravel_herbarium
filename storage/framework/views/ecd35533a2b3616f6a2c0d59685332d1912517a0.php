    </body>
    
		<foot>
            <script src="/js/jquery.min.js" type="text/javascript"></script>
            <script src="/theme/chiefstrap/js/bootstrap.min.js" type="text/javascript"></script>
             <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.6.8-fix/jquery.nicescroll.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $("#sidebar").niceScroll({
                     cursorcolor: '#53619d',
                     cursorwidth: 4,
                     cursorborder: 'none'
                 });

                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar, #content').toggleClass('active');
                     $('.collapse.in').toggleClass('in');
                     $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                 });
             });
         </script>

         
        </foot>

        <footer id="myFooter">
            
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Downloads</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Legal</h5>
                    <ul>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <!-- Here we use the Google Embed API to show Google Maps. -->
            <!-- In order for this to work in your project you will need to generate a unique API key.  -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3161.01307692992!2d91.82588745820962!3d22.374390309241235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sbangladesh+forest+research+institute!5e1!3m2!1sen!2s!4v1506261870848" width="1200" height="300" frameborder="0" style="border:0" allowfullscreen=""></iframe>
        </div>
        <div class="social-networks">
            <a href="#" class="twitter"><i class="glyphicon glyphicon-twitter"></i></a>
            <a href="#" class="facebook"><i class="glyphicon glyphicon-facebook"></i></a>
            <a href="#" class="google"><i class="glyphicon glyphicon-google-plus"></i></a>
        </div>
        <div class="footer-copyright">
            <p>© Chief ERP </p>
        </div>
    </footer>

    <script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>


<script type="text/javascript">
                        
                        $(document).ready(function () {
                            $('#carousel-example-generic,#special-carasoul').bind('slid.bs.carousel', function (e) {
                                govtJobDoted();
                            });
                            function govtJobDoted() {
                                $(".sidebar-common .item.active a>span,.fixedgovJobs a>span").each(function () {
                                    $(this).attr("title", "");
                                    $(this).find("span").remove();
                                    if (this.offsetWidth < this.scrollWidth) {
                                        $(this).attr("title", this.innerHTML);
                                        $(this).css("position", "relative").append("<span class='" + this.className + " dots' >...</span>");
                                    }
                                });
                            }
                            govtJobDoted();
                        });
                    </script>
		
</html>