<!--Contact 
                =============================-->
<div id="contact" class="item">
    <div class="content">
        <div id="map_canvas" class="fullBg"></div>
        <div class="content_overlay"></div>
        <div class="content_inner">
            <div class="row contentscroll">
                <div class="container">
                    <div class="col-md-6 empty">&nbsp;</div>
                    <div class="col-md-6 content_text">
                        <h1><?php echo CONTACT_H1; ?></h1>
                        <div class="tags"><?php echo CONTACT_INFO; ?></div>
                        <div class="clearfix pad_top40">

                            <h2 class="pad_top20 clearfix address">
                                <span class="left"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;</span>
                                <span class="left"> Saraví #588,<br/> Asunción, Paraguay</span>					
                            </h2>

                            <div class="phone"><i class="fa fa-phone"></i>&nbsp;&nbsp;+ 595 976 921-801</div>

                            <a href="mailto:hablemos@raulramirez.info" class="mail-text">
                                <i class="fa fa-envelope"></i>hablemos@raulramirez.info
                            </a>

                            <div class="clearfix">
                                <div class="header_icons accura-header-block accura-hidden-2xs social_top">
                                    <ul class="accura-social-icons accura-stacked accura-jump accura-full-height accura-bordered accura-small accura-colored-bg clearFix">
                                        <!--Social Icon 1-->
                                        <li>
                                            <a href="https://www.facebook.com/raul.chuky" target="_blank" class="accura-social-icon-facebook circle">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <!-- // Social Icon 1-->

                                        <!--Social Icon 2-->
                                        <li>
                                            <a href="https://twitter.com/raul_chuky" target="_blank" class="accura-social-icon-twitter circle">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <!-- // Social Icon 2-->

                                        <!--Social Icon 3-->
                                        <li>
                                            <a href="https://plus.google.com/111739183703289176503/posts?hl=es_419" target="_blank" class="accura-social-icon-gplus circle">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <!-- // Social Icon 3-->

                                        <!--Social Icon4-->
                                        <li>
                                            <a href="https://instagram.com/raul_chuky" target="_blank" class="accura-social-icon-instagram circle">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                        <!-- // Social Icon 4-->

                                        <!--Social Icon 5-->
                                        <li>
                                            <a href="http://www.linkedin.com/pub/ra%C3%BAl-ram%C3%ADrez/5b/66a/b41" target="_blank" class="accura-social-icon-linkedin circle">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <!-- // Social Icon 5-->
                                    </ul>
                                </div>
                            </div>
                            <!--Button-->
                            <div class="pad_top30">
                                <a class="btn btn-3 btn-3e nav-link" href="#contactform"><?php echo CONTACT_BUDGET; ?></a>
                            </div>
                            <!-- // Button-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- // Contact 
=============================-->
<!-- Contact Form
=============================-->
<div id="contactform" class="item">
    <div class="content">
        <div class="content_overlay"></div>
        <div class="content_inner" >
            <div class="row contentscroll">
                <div class="container col-md-12">
                    <div class="col-md-6 empty">&nbsp;</div>
                    <div class="col-md-6 content_text">
                        <div id="contactforms">
                            <h1><?php echo BUDGET_H1; ?></h1>
                            <div class="tags"><?php echo BUDGET_DESC; ?></div>
                            <!--Form Starts-->
                            <form id="contact_form" class="cont_form pad_top13" action="#" method="post">

                                <div class="clearfix cont_form pad_top30"> 

                                    <div class="subtitle"><?php echo BUDGET_SUBTITLE; ?></div>
                                    <!--Input 1-->
                                    <input type="text" name="name" class="validate['required'] textbox1" placeholder="* <?php echo BUDGET_PLACENAME; ?> : "
                                           onfocus="this.placeholder = ''" onBlur="this.placeholder = '* <?php echo BUDGET_PLACENAME; ?> :'" />
                                    <!--Input 1-->

                                    <!--Input 2-->
                                    <input type="text" name="email"  class="validate['required','email']  textbox1"
                                           placeholder="* <?php echo BUDGET_PLACEEMAIL; ?> : " onFocus="this.placeholder = ''" onBlur="this.placeholder = '* <?php echo BUDGET_PLACEEMAIL; ?> :'" />
                                    <!-- // Input 2-->

                                    <!--Input 3-->
                                    <input type="text" name="phone" class="validate['required','phone']  textbox1"
                                           placeholder="* <?php echo BUDGET_PLACETELEFONO; ?> : " onFocus="this.placeholder = ''" onBlur="this.placeholder = '* <?php echo BUDGET_PLACETELEFONO; ?> :'" />
                                    <!-- // Input 3-->

                                    <!--Input 4-->
                                    <textarea name="message" class="validate['required'] messagebox1"
                                              placeholder="* <?php echo BUDGET_PLACEMESSAGE; ?> : " onFocus="this.placeholder = ''" onBlur="this.placeholder = '* <?php echo BUDGET_PLACEMESSAGE; ?> :'"></textarea>
                                    <!-- // Input 4-->

                                    <!--Button-->
                                    <?php /*<button id="contactsubmitBtn" type="submit" class="btn btn-3 btn-3e"><?php echo BUDGET_BTN; ?></button>*/ ?>
                                    <!-- // Button-->
                                </div>
                            </form>
                            <!--Form Ends-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- // Contact Form
=============================-->