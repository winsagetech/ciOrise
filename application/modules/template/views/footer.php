<script type="text/javascript">

function add_subscriber() {
    var url = "<?php echo site_url('subscribers/subscriber_add')?>";
    
    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#subscriber_form').serialize(),
        dataType: "JSON",
        success: function(data) {
            $('#subscriber_form')[0].reset();
            document.getElementById('subscription_status').style.visibility='visible';
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
            alert('Sorry! Your subscription failed. Please Retry.');
        }
    });
}
</script>

<script type="text/javascript">
    $("form").submit(function(event) {

   var recaptcha = $("#g-recaptcha-response").val();
   if (recaptcha === "") {
      event.preventDefault();
      alert("Please check the recaptcha");
   }
});
</script>

    <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT}, 'google_translate_element');
    }

    function triggerHtmlEvent(element, eventName) {
      var event;
      if (document.createEvent) {
        event = document.createEvent('HTMLEvents');
        event.initEvent(eventName, true, true);
        element.dispatchEvent(event);
      } else {
        event = document.createEventObject();
        event.eventType = eventName;
        element.fireEvent('on' + event.eventType, event);
      }
    }

    jQuery('.lang-select').click(function() {
      var theLang = jQuery(this).attr('data-lang');
      jQuery('.goog-te-combo').val(theLang);

      //alert(jQuery(this).attr('href'));
      window.location = jQuery(this).attr('href');
      location.reload();

    });
    
    </script>
    
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        
        
        <!-- ================== Footer  ================== -->

        <footer>
            <div class="container">

                <!--footer showroom-->
                <div class="footer-showroom footer-showroom-single">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Visit Us</h2>
                            <p>Orise International Enterprise <br><br>Rm 607, Block East, Tianan Development Building,<br>Hi-Tech Ecological Park, No.555 North Pan Yu Acenue,<br>Pan Yu District, Guangzhou, China.<br>Zip code: 511400</p>
                            <p><a href="mailto:info@orisechina.com" title="send an email to info@orisechina.com">info@orisechina.com</a></p>
                            
                        </div>
                        <div class="col-sm-6">
                            <!--footer links-->
                            <div class="footer-links">
                                <h5>Sign up for our newsletter</h5>
                                <p><i>Add your email address to sign up for our monthly emails and to receive promotional offers.</i></p>
                                <form id="subscriber_form" action="#">
                                    <div class="form-group form-newsletter">
                                        <input class="form-control" type="text" name="email" placeholder="Email address" style="padding-left: 20px;" />                                        
                                    </div>
                                        <button type="button" class="btn btn-clean btn-sm pull-right" onclick="add_subscriber()">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!--footer social-->

                <div class="footer-social">
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="<?php echo base_url();  ?>privacy">Privacy policy</a>  &nbsp; |&nbsp; <a href="<?php echo base_url();  ?>tnc">Terms and Conditions</a>  &nbsp; | &nbsp; <a href="https://winsagetech.com" target="_blank"></i> Powered by Winsage Technologies</a> 
                        </div>
                        <div class="col-sm-6 links">
                            <ul>
                                <li><a href="https://www.facebook.com/orisechina/"><i class="fa fa-facebook"></i></a></li>
                                <!--  
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                 -->
                                <li><a href="https://www.instagram.com/oriseinternational/"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                        <script type="text/javascript" src="https://free-hit-counters.net/count/1plg"></script><br>
                        <a href='http://www.freevisitorcounters.com'>.</a> <script type='text/javascript' src='https://www.whomania.com/ctr?id=7340829aaf578aacf32988e0d25b4d60a3bedb13'></script>
                    </div>
                    </div>
                </div>
            </div>
        </footer>

    </div> <!--/wrapper-->
    <!--JS files-->
    <script src="<?php echo base_url();  ?>assets/mobel/js/jquery.min.js"></script>
    <script src="<?php echo base_url();  ?>assets/mobel/js/jquery.bootstrap.js"></script>
    <script src="<?php echo base_url();  ?>assets/mobel/js/jquery.magnific-popup.js"></script>
    <script src="<?php echo base_url();  ?>assets/mobel/js/jquery.owl.carousel.js"></script>
    <script src="<?php echo base_url();  ?>assets/mobel/js/jquery.ion.rangeSlider.js"></script>
    <script src="<?php echo base_url();  ?>assets/mobel/js/jquery.isotope.pkgd.js"></script>
    <script src="<?php echo base_url();  ?>assets/mobel/js/main.js"></script>
    <script src="https://afarkas.github.io/lazysizes/plugins/bgset/ls.bgset.min.js"></script>
    <script src="https://unpkg.com/lazysizes@4.0.1/lazysizes.js"></script>

    <script>
        function initMap() {
            var contentString =
            '<div class="map-info-window">' +
            '<p><img src="assets/images/logo-dark.png" alt=""></p>' +
            '<p><strong>Mobel - Furniture factory</strong></p>' +
            '<p><i class="fa fa-map-marker"></i> 200 12th Ave, New York, NY 10001, USA</p>' +
            '<p><i class="fa fa-phone"></i> +12 33 444 555</p>' +
            '<p><i class="fa fa-clock-o"></i> 10am - 6pm</p>' +
            '</div>';

            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });
            //set default pposition
            var myLatLng = { lat: 40.7459772, lng: -74.0545504 };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: myLatLng,
                styles: [{ "featureType": "administrative", "elementType": "all", "stylers": [{ "visibility": "on" }, { "saturation": -100 }, { "lightness": 20 }] }, { "featureType": "road", "elementType": "all", "stylers": [{ "visibility": "on" }, { "saturation": -100 }, { "lightness": 40 }] }, { "featureType": "water", "elementType": "all", "stylers": [{ "visibility": "on" }, { "saturation": -10 }, { "lightness": 30 }] }, { "featureType": "landscape.man_made", "elementType": "all", "stylers": [{ "visibility": "simplified" }, { "saturation": -60 }, { "lightness": 10 }] }, { "featureType": "landscape.natural", "elementType": "all", "stylers": [{ "visibility": "simplified" }, { "saturation": -60 }, { "lightness": 60 }] }, { "featureType": "poi", "elementType": "all", "stylers": [{ "visibility": "off" }, { "saturation": -100 }, { "lightness": 60 }] }, { "featureType": "transit", "elementType": "all", "stylers": [{ "visibility": "off" }, { "saturation": -100 }, { "lightness": 60 }] }]
            });
            //set marker
            var image = 'assets/images/map-icon.png';
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: "Hello World!",
                icon: image
            });
            marker.addListener('click', function () {
                infowindow.open(map, marker);
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_UQuWHzqyOqHbp4IeFE7-Fa8m41uMTRg&callback=initMap"></script>

</body>

</html>
