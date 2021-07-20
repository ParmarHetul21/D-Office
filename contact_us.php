<?php
    include("./designs/header.php");
?>
<!-- Main Body Contain -->
<div class="main-container teal lighten-5">
<div class="row"></div>
<div class="row"></div>

<!-- visit us card -->

<!--Map card -->
<div class="row">
        <div class="col l5 offset-l1 m6 s6">
        <div class="card white" style="margin:0%; padding:1%;" id="card-hover">
            <div class="card-content teal darken-3 white-text">
            <span class="card-title"><strong>Visit Us</strong></span>            
            </div>
            <div class="card-content">
            <div id="Container" style="padding-bottom:56.25%; position:relative; display:block; width: 100%">
                <iframe id="ViostreamIframe"
                width="100%" height="100%"
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3686.8676997434345!2d70.04648596294733!3d22.471605441712075!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3957154d816a83f7%3A0xac1c6e94acf27856!2sAadinath%20Consultancy!5e0!3m2!1sen!2sin!4v1568622883257!5m2!1sen!2sin"
                frameborder="0" allowfullscreen=""
                style="position:absolute; top:0; left: 0"></iframe>
                </div>
            </div>
            <div class="card-content">
            <p style="color : #00695c;">
            <a href="https://goo.gl/maps/tkH8zEoGTUsuzW9d7" style="font-size:18px; color:#00695c;"><i class="material-icons prefix" style="color : #00695c;">business</i><b>Aadinath Business Consultancy Pvt. Ltd.</b></a>
            <br>Vijay Complex, Office No 208/09/10,
            <br>Aerodrome Rd, Opp Icici Bank,
            <br>Kamdar Colony,
            <br>Jamnagar - 361006
            <br>
            <br><b>Phone</b> : +919727415118, +919722185114
            <br><b>Helpline</b> : (0288) 2712210
            <br><a href="mailto:vdeveloperhelp@gmail.com" style="font-size:16px; color:#00695c;"><b>Email</b> : vdeveloperhelp@gmail.com </a>
            </p>
            </div>

        </div>
            
    <!-- card close -->
        </div>

    <!-- card -->
    <div class="row">
        <div class="col l4 offset-l1 m6 s6">
        <div class="card white" style="margin:0%; padding:1%;" id="card-hover">
            <div class="card-content teal darken-3 white-text">
            <span class="card-title"><strong>Email Us</strong></span>            
            </div>
            <div class="card-content">
            <!-- form -->
                <div class="row">
                <form class="col s12" action="mail.php" method="post">
                <div class="row">
                    <div class="input-field col s12">
                    <i class="material-icons prefix" style="color : #00695c;">local_post_office</i>
                    <input id="email" type="email"  name="senderName" class="validate" required>
                    <label for="Email" style="color : #00695c;"> Your Email</label>
                    <span class="helper-text" data-error="wrong" data-success="right"></span>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                    <i class="material-icons prefix" style="color : #00695c;">label</i>
                    <input id="subject" type="text" name="subject" class="validate" required>
                    <label for="Subject" style="color : #00695c;">Subject</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                    <i class="material-icons prefix" style="color:#00695c;">chat_bubble</i>
                    <textarea id="message" name="message" class="materialize-textarea" required></textarea>
                    <label for="Message" style="color : #00695c;">Message</label>
                    <span class="helper-text" data-error="wrong" data-success="right"></span>
                    </div>
                </div>

                <div class="row">
                    <div class="col l4 m3 s3"></div>
                    <div class="col l4 m3 s3"></div>
                    <div class="col l4 m6 s6">
                    <button class="waves-effect waves-light btn-small" style="background-color : #00695c;" type="submit" name="action">Submit</button>
                    </div>
                </div>

                </form>
                </div>

            </div>
            
    <!-- card close -->
        </div>
        <div class="row"></div>
        <div class="col l12">
        <div class="card white" id="card-hover">
            <div class="card-content white center-align teal-text text-darken-3">
            <span class="card-title"><strong>Opening Hours</strong></span>
            <p>
            Monday - Friday
            09:00am - 09:00pm
            <br>
            Saturday
            09:00am - 07:00pm
            <br>
            Sunday
            09:00am - 01:00pm
            </p>            
            </div>
        </div>
        </div>
    </div>

</div>
<!-- body close -->
</div>
<?php
    include("./designs/footer.php");
?>