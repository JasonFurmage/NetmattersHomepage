<?php
// ==========================================================================
// components/header.php
// ==========================================================================
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <title><?php echo $pageTitle ?? 'Full Service Digital Agency | Cambridgeshire & Norfolk | Netmatters'; ?></title>
    <script src="assets/js/main.js" type="module"></script>
    <script src="https://kit.fontawesome.com/8736d823db.js" crossorigin="anonymous"></script>
</head>
<body data-page="<?php echo $dataPage ?? 'home'; ?>">
    <div class="content">
        <header id="header">
            <div class="header">
                <div class="container">
                    <div class="header__contents row">
                        <div class="header__logo-wrapper col-xs-6 col-sm-6 col-md-5 col-lg-4">
                            <a href="index.php"><img src="assets/img/logos/f-logo.png" class="header__logo"></a>
                        </div>
                        <div class="header__phone-wrapper hidden-sm-up">
                            <span class="header__phone icon-phone_in_talk"></span>
                        </div>
                        <div class="header__actions-wrapper col-xs-3 col-sm-6 col-md-7 col-lg-8">
                            <div class="header__actions">
                                <a href="#" class="header__btn btn btn--it hidden-sm-down"">
                                    <span class="header__btn-icon icon-mouse"></span>
                                    Support
                                </a>
                                <a href="contact-us.php" class="header__btn btn btn--default hidden-sm-down">
                                    <span class="header__btn-icon icon-paperplane"></span>
                                    Contact
                                </a>
                                <form class="header__form hidden-xs">
                                    <input type="text" placeholder="Search..." class="header__search textfield">
                                    <button type="submit" class="header__search-btn btn btn--default-alt"><span class="icon-search"></span></button>
                                </form>
                                <span class="header__hamburger btn btn--primary">
                                    <span class="header__hamburger-line"></span>
                                    <span class="header__hamburger-line"></span>
                                    <span class="header__hamburger-line"></span>
                                </span> 
                            </div>
                        </div>
                    </div>
                    <form class="header__form hidden-sm-up">
                        <input type="text" placeholder="Search..." class="header__search-xs textfield">
                        <button type="submit" class="header__search-icon"><span class="icon-search"></span></button>
                    </form>
                </div>
            </div>
            <div class="navigation hidden-sm-down">
                <div class="container">
                    <ul class="navigation__menu">
                        <li class="navigation__item-wrapper navigation__item-wrapper--bespoke">
                            <a href="#" class="navigation__item navigation__item--bespoke">
                                <span class="navigation__item-icon navigation__item-icon--bespoke icon-laptop"></span>
                                <small class="navigation__item-heading">Bespoke</small>
                                Software
                            </a>
                            <div class="navigation__banner navigation__banner--bespoke section">
                                <ul class="navigation__sub-menu container">
                                    <h2 class="navigation__heading">Our Bespoke Software Services</h2>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-folder-open"></span>
                                            <span class="navigation__link-text">Bespoke CRM</span>
                                        </a>
                                    </li>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-briefcase"></span>
                                            <span class="navigation__link-text">Business Automation</span>
                                        </a>
                                    </li>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-shuffle"></span>
                                            <span class="navigation__link-text">Software Integrations</span>
                                        </a>
                                    </li>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-phone_iphone"></span>
                                            <span class="navigation__link-text">Mobile App Development</span>
                                        </a>
                                    </li>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon fa-solid fa-cogs"></span>
                                            <span class="navigation__link-text">Bespoke Databases</span>
                                        </a>
                                    </li>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-transfer"></span>
                                            <span class="navigation__link-text">Sharepoint Development</span>
                                        </a>
                                    </li>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-download3"></span>
                                            <span class="navigation__link-text">Operational Systems</span>
                                        </a>
                                    </li>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-group"></span>
                                            <span class="navigation__link-text">Business Central Implementation</span>
                                        </a>
                                    </li>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-folder-open"></span>
                                            <span class="navigation__link-text">Internet of Things (IoT) Software</span>
                                        </a>
                                    </li>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-cloud1"></span>
                                            <span class="navigation__link-text">Intranet Development</span>
                                        </a>
                                    </li>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-cloud-download"></span>
                                            <span class="navigation__link-text">Customer Portal Development</span>
                                        </a>
                                    </li>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-globe"></span>
                                            <span class="navigation__link-text">Reporting Hub</span>
                                        </a>
                                    </li>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-handshake-o"></span>
                                            <span class="navigation__link-text">SAP S/4HANA Management</span>
                                        </a>
                                    </li>                                    
                                </ul>
                            </div>
                        </li>
                        <li class="navigation__item-wrapper navigation__item-wrapper--it">
                            <a href="#" class="navigation__item navigation__item--it">
                                <span class="navigation__item-icon navigation__item-icon--it icon-display"></span>
                                <small class="navigation__item-heading">IT</small>
                                Support
                            </a>
                            <div class="navigation__banner navigation__banner--it section">
                                <ul class="navigation__sub-menu container">
                                    <h2 class="navigation__heading">Our IT Support Services</h2>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-headphones"></span>
                                            <span class="navigation__link-text">Managed IT Support</span>
                                        </a>
                                    </li>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-briefcase"></span>
                                            <span class="navigation__link-text">Business IT Support</span>
                                        </a>
                                    </li>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-laptop"></span>
                                            <span class="navigation__link-text">Office 365 for Business</span>
                                        </a>
                                    </li>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-school"></span>
                                            <span class="navigation__link-text">IT Consultancy</span>
                                        </a>
                                    </li>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-cloud1"></span>
                                            <span class="navigation__link-text">Cloud Service Provider</span>
                                        </a>
                                    </li>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-hdd-o"></span>
                                            <span class="navigation__link-text">Data Backup & Disaster Recovery</span>
                                        </a>
                                    </li>                                    
                                </ul>
                            </div>
                        </li>
                        <li class="navigation__item-wrapper navigation__item-wrapper--digital">
                            <a href="#" class="navigation__item navigation__item--digital">
                                <span class="navigation__item-icon navigation__item-icon--digital icon-bar-graph"></span>
                                <small class="navigation__item-heading">Digital</small>
                                Marketing
                            </a>
                            <div class="navigation__banner navigation__banner--digital section">
                                <ul class="navigation__sub-menu container">
                                    <h2 class="navigation__heading">Our Digital Marketing Services</h2>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-search"></span>
                                            <span class="navigation__link-text">Search Engine Optimisation (SEO)</span>
                                        </a>
                                    </li>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-money"></span>
                                            <span class="navigation__link-text">Pay Per Click Advertising (PPC)</span>
                                        </a>
                                    </li>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-trending_up"></span>
                                            <span class="navigation__link-text">Conversion Rate Optimisation (CRO)</span>
                                        </a>
                                    </li>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-envelope"></span>
                                            <span class="navigation__link-text">Email Marketing</span>
                                        </a>
                                    </li>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-group"></span>
                                            <span class="navigation__link-text">Social Media Marketing</span>
                                        </a>
                                    </li>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-pencil"></span>
                                            <span class="navigation__link-text">Content Marketing</span>
                                        </a>
                                    </li>                                    
                                </ul>
                            </div>
                        </li>
                        <li class="navigation__item-wrapper navigation__item-wrapper--telecoms">
                            <a href="#" class="navigation__item navigation__item--telecoms">
                                <span class="navigation__item-icon navigation__item-icon--telecoms icon-phone_in_talk"></span>
                                <small class="navigation__item-heading">Telecoms</small>
                                Services
                            </a>
                            <div class="navigation__banner navigation__banner--telecoms section">
                                <ul class="navigation__sub-menu container">
                                    <h2 class="navigation__heading">Our Telecoms Services</h2>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-ticket"></span>
                                            <span class="navigation__link-text">Business Mobile</span>
                                        </a>
                                    </li>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-phone"></span>
                                            <span class="navigation__link-text">Hosted VoIP Provider</span>
                                        </a>
                                    </li>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-phone-square"></span>
                                            <span class="navigation__link-text">Business VoIP Systems</span>
                                        </a>
                                    </li>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-dashboard"></span>
                                            <span class="navigation__link-text">Business Broadband</span>
                                        </a>
                                    </li>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-handshake-o"></span>
                                            <span class="navigation__link-text">Leased Lines Provider</span>
                                        </a>
                                    </li>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-phone_in_talk"></span>
                                            <span class="navigation__link-text">3CX Systems</span>
                                        </a>
                                    </li>                                    
                                </ul>
                            </div>
                        </li>
                        <li class="navigation__item-wrapper navigation__item-wrapper--web">
                            <a href="#" class="navigation__item navigation__item--web">
                                <span class="navigation__item-icon navigation__item-icon--web icon-code"></span>
                                <small class="navigation__item-heading">Web</small>
                                Design
                            </a>
                            <div class="navigation__banner navigation__banner--web section">
                                <ul class="navigation__sub-menu container">
                                    <h2 class="navigation__heading">Our Web Design Services</h2>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-pencil"></span>
                                            <span class="navigation__link-text">Bespoke Website Design</span>
                                        </a>
                                    </li>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-shopping-cart"></span>
                                            <span class="navigation__link-text">eCommerce Website Design</span>
                                        </a>
                                    </li>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-computer-desktop"></span>
                                            <span class="navigation__link-text">Pay Monthly Websites</span>
                                        </a>
                                    </li>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-bullhorn"></span>
                                            <span class="navigation__link-text">Branding & Design</span>
                                        </a>
                                    </li>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-phone_iphone"></span>
                                            <span class="navigation__link-text">Mobile App Development</span>
                                        </a>
                                    </li>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-cloud1"></span>
                                            <span class="navigation__link-text">Web Hosting</span>
                                        </a>
                                    </li>                                    
                                </ul>
                            </div>
                        </li>
                        <li class="navigation__item-wrapper navigation__item-wrapper--cyber">
                            <a href="#" class="navigation__item navigation__item--cyber">
                                <span class="navigation__item-icon navigation__item-icon--cyber icon-security"></span>
                                <small class="navigation__item-heading">Cyber</small>
                                Security
                            </a>
                            <div class="navigation__banner navigation__banner--cyber section">
                                <ul class="navigation__sub-menu container">
                                    <h2 class="navigation__heading">Our Cyber Security Services</h2>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-clipboard"></span>
                                            <span class="navigation__link-text">Cyber Security Assessment</span>
                                        </a>
                                    </li>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-clock-o"></span>
                                            <span class="navigation__link-text">Cyber Security Management</span>
                                        </a>
                                    </li>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-flask"></span>
                                            <span class="navigation__link-text">Cyber Penetration Testing</span>
                                        </a>
                                    </li>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-school"></span>
                                            <span class="navigation__link-text">Cyber Essentials Certification</span>
                                        </a>
                                    </li>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-security"></span>
                                            <span class="navigation__link-text">PCI Compliance</span>
                                        </a>
                                    </li>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-lock"></span>
                                            <span class="navigation__link-text">Hacking Prevention</span>
                                        </a>
                                    </li>                                    
                                </ul>
                            </div>
                        </li>
                        <li class="navigation__item-wrapper navigation__item-wrapper--developer">
                            <a href="#" class="navigation__item navigation__item--developer">
                                <span class="navigation__item-icon navigation__item-icon--developer icon-school"></span>
                                <small class="navigation__item-heading">Developer</small>
                                Course
                            </a>
                            <div class="navigation__banner navigation__banner--developer section">
                                <ul class="navigation__sub-menu container">
                                    <h2 class="navigation__heading">Our Developer Course Services</h2>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-laptop"></span>
                                            <span class="navigation__link-text">Train For A Career In Tech</span>
                                        </a>
                                    </li>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-code"></span>
                                            <span class="navigation__link-text">Skills Bootcamp</span>
                                        </a>
                                    </li>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-question-circle"></span>
                                            <span class="navigation__link-text">Scion Scheme Frequently Asked Questions</span>
                                        </a>
                                    </li>
                                    <li class="navigation__link-wrapper">
                                        <a href="#" class="navigation__link">
                                            <span class="navigation__link-icon icon-handshake-o"></span>
                                            <span class="navigation__link-text">Scion Collaborators</span>
                                        </a>
                                    </li>                                    
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </header>