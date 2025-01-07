<?php
// ==========================================================================
// templates/contact-us.php
// ==========================================================================
?>

        <div class="breadcrumb hidden-xs">
            <div class="container">
                <ul class="breadcrumb__path">
                    <li class="breadcrumb__item"><a href="index.php" class="breadcrumb__previous">Home</a></li>
                    <li class="breadcrumb__item"><span class="breadcrumb__current">Our Offices</span></li>
                </ul>
            </div>
        </div>
        <div class="offices">
            <div class="section top">
                <div class="offices__heading-wrapper">
                    <div class="container">
                        <h1 class="offices__heading">Our Offices</h1>
                    </div>
                </div>
            </div>
            <div class="offices__outer-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="offices__item-wrapper col-md-4">
                            <div class="offices__item card">
                                <a href="#"><img src="assets/img/offices/cambridge.jpg" class="offices__image" alt="Cambridge Office"></a>
                                <div class="offices__content">
                                    <h2 class="offices__title-wrapper"><a href="#" class="offices__title">Cambridge Office</a></h2>
                                    <p class="offices__address">
                                        Unit 1.31,<br>St John's Innovation Centre,<br>Cowley Road,Milton,<br>Cambridge,<br>CB4 0WS
                                    </p>
                                    <a href="#" class="offices__tel-wrapper offices__tel-wrapper--web"><span class="offices__tel">01223 37 57 72</span></a>
                                    <a href="#" class="offices__btn btn btn--web"><span>View More</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="offices__item-wrapper col-md-4">
                            <div class="offices__item card">
                                <a href="#"><img src="assets/img/offices/wymondham.jpg" class="offices__image" alt="Wymonham Office"></a>
                                <div class="offices__content">
                                    <h2 class="offices__title-wrapper"><a href="#" class="offices__title">Wymondham Office</a></h2>
                                    <p class="offices__address">
                                        Unit 15,<br>Penfold Drive,<br>Gateway 11 Business Park,<br>Wymondham, Norfolk,<br>NR18 0WZ
                                    </p>
                                    <a href="#" class="offices__tel-wrapper offices__tel-wrapper--web"><span class="offices__tel">01603 70 40 20</span></a>
                                    <a href="#" class="offices__btn btn btn--web"><span>View More</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="offices__item-wrapper col-md-4">
                            <div class="offices__item card">
                                <a href="#"><img src="assets/img/offices/yarmouth-2.jpg" class="offices__image" alt="Great Yarmouth Office"></a>
                                <div class="offices__content">
                                    <h2 class="offices__title-wrapper"><a href="#" class="offices__title">Great Yarmouth Office</a></h2>
                                    <p class="offices__address">
                                        Suite F23,<br>Beacon Innovation Centre,<br>Beacon Park, Gorleston,<br>Great Yarmouth, Norfolk,<br>NR31 7RA
                                    </p>
                                    <a href="#" class="offices__tel-wrapper offices__tel-wrapper--web"><span class="offices__tel">01493 60 32 04</span></a>
                                    <a href="#" class="offices__btn btn btn--web"><span>View More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section bottom container">
            <div class="row row-reverse">
                <div class="col-lg-4">
                    <div class="contact">
                        <p><strong>Email us on:</strong><br></p>
                        <p><a href="#" class="contact__email contact__email--web">sales@netmatters.com</a></p>
                        <p><strong>Business hours:</strong></p>
                        <p><strong>Monday - Friday 07:00 - 18:00&nbsp;</strong></p>
                        <div class="contact__accordion-wrapper">
                            <a href="#" class="contact__accordion">
                                <p>Out of Hours IT Support <span class="fa fa-chevron-down rotate down"></span></p>
                            </a>
                            <div class="contact__accordion-panel">
                                <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
                                <p>
                                    <strong>Monday - Friday 18:00 - 22:00</strong>
                                    <strong>Saturday 08:00 - 16:00</strong><br>
                                    <strong>Sunday 10:00 - 18:00</strong>
                                </p>
                                <p>
                                    To log a critical task, you will need to call our main line number and select Option 2 to 
                                    leave an Out of Hours&nbsp; voicemail. A technician will contact you on the number provided 
                                    within 45 minutes of your call.&nbsp;
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <form class="form" method="POST" action="#form" accept-charset="UTF-8" id="form" novalidate="novalidate">
                        <?php if ($isPost) { echo '<div>'; insertFormStatus($errors); echo '</div>'; } ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form__group">
                                    <label for="name" class="required-after">Your Name</label>
                                    <input class="textfield" name="name" type="text" value="<?= htmlspecialchars($name) ?>" id="name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form__group">
                                    <label for="company">Company Name</label>
                                    <input class="textfield" name="company" type="text" value="<?= htmlspecialchars($company) ?>" id="company">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form__group">
                                    <label for="email" class="required-after">Your Email</label>
                                    <input class="textfield" name="email" type="email" value="<?= htmlspecialchars($email) ?>" id="email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form__group">
                                    <label for="telephone" class="required-after">Your Telephone Number</label>
                                    <input class="textfield" name="telephone" type="text" value="<?= htmlspecialchars($telephone) ?>" id="telephone">
                                </div>
                            </div>
                        </div>
                        <div class="form__group">
                            <label for="message" class="required-after">Message</label>
                            <textarea class="form__textarea textfield" name="message" cols="50" rows="10" id="message"><?= $isPost ? htmlspecialchars($message) : "Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?"; ?></textarea>
                        </div>
                        <div class="form__group">
                            <label class="form__marketing-wrapper">
                                <span class="form__marketing">
                                    <span>
                                        <input class="form__checkbox-hidden" name="marketing" type="checkbox" <?= $marketing == "on" ? "checked" : ""?>>
                                        <span class="form__checkbox-custom"></span>
                                    </span>
                                    <span>
                                        Please tick this box if you wish to receive marketing information from us.
                                        Please see our <a href="#"><u>Privacy Policy</u></a> for more information 
                                        on how we keep your data safe.
                                    </span>
                                </span>
                            </label>
                        </div>
                        <div class="form__recaptcha">
                            <span>
                                This site is protected by reCAPTCHA and the Google <a href="#"><u>Privacy Policy</u></a>
                                and <a href="#"><u>Terms of Service</u></a> apply.
                            </span>
                        </div>
                        <div class="form__action">
                            <button class="btn btn--primary">
                                Send Enquiry
                            </button>
                            <span class="form__helper required-before">Fields Required</span>
                        </div>
                    </form>
                </div>
            </div>
        </div>