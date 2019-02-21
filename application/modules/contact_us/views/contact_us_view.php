 <div class="page-loader"></div>        <!-- ========================  Main header ======================== -->

        <section class="main-header" style="background-image:url(assets/mobel/assets/images/ourstory_image4.jpg)">
            <header>
                <div class="container text-center">
                    <h2 class="h2 title">Contact</h2>
                </div>
            </header>
        </section>

        <!-- ========================  Contact ======================== -->

        <section class="contact">

            <!-- === Goolge map === -->

            <div id="map"></div>

            <div class="container">

                <div class="row">

                    <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">

                        <div class="contact-block">

                            <div class="contact-info">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <figure class="text-center">
                                            <span class="icon icon-map-marker"></span>
                                            <figcaption>
                                                <strong>Where are we?</strong>
                                                <span>38,39 Kumudvihar Opp. Flora Park,<br> Harni Mahadev Road,<br> Bhilwara, Rajasthan ,311001</span>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-sm-4">
                                        <figure class="text-center">
                                            <span class="icon icon-phone"></span>
                                            <figcaption>
                                                <strong>Call us</strong>
                                                <span>
                                                    <strong>T</strong> +91 12345 67890 <br />
                                                    <strong>F</strong> +91 12345 67890
                                                </span>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-sm-4">
                                        <figure class="text-center">
                                            <span class="icon icon-clock"></span>
                                            <figcaption>
                                                <strong>Working hours</strong>
                                                <span>
                                                    <strong>Mon</strong> - Sat: 10 am - 6 pm <br />
                                                    <strong>Sun</strong> 12pm - 2 pm
                                                </span>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>

                            <div class="banner">
                                <div class="row">
                                    <div class="col-md-offset-1 col-md-10 text-center">
                                        <h2 class="title">Send an email</h2>
                                        <p>
                                            Thanks for your interest in Mobel Theme. We believe in creativity as one of the major forces of progress.
                                            Please use this form if you have any questions about our products and we'll get back with you very soon.
                                        </p>

                                        <div class="contact-form-wrapper">

                                            <a class="btn btn-clean open-form" data-text-open="Contact us via form" data-text-close="Close form">Contact us via form</a>

                                            <div class="contact-form clearfix">
                                                <form id="contact_form" name="contact_form" method="post">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input id="Name" name="Name" type="text" value="" class="form-control" placeholder="Your name" >
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input id="Email" name="Email" type="email" value="" class="form-control" placeholder="Your email" >
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <input id="Subject" name="Subject" type="text" value="" class="form-control" placeholder="Subject" >
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <textarea id="Comment" name="Comment" class="form-control" placeholder="Your message" rows="10"></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12 text-center">
                                                            <input type="button" class="btn btn-clean" value="Send message" onclick="mailMessage()" />
                                                        </div>
                                                        <div class="alert alert-success alert-dismissible" style="visibility: hidden;" id="contact_status">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h4><i class="icon fa fa-check"></i> Success!</h4>
                            Your message received. We will revert back at the earliest.
                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div><!--col-sm-8-->
                </div> <!--/row-->
            </div><!--/container-->
        </section>
<script type="text/javascript">

function mailMessage() {
    var url = "<?php echo site_url('contact_us/send_mail')?>";
    
    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#contact_form').serialize(),
        dataType: "JSON",
        success: function(data) {
            $('#contact_form')[0].reset();
            document.getElementById('contact_status').style.visibility='visible';
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
            alert('Sorry! Your message was not sent. Please Retry.');
        }
    });
}


</script>
