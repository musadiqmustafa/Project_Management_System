<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=9">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="MS.LOCALE" content="en-us">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://benthamscience.com/scripts/css/animate.min.css" rel="stylesheet">
    <link href="https://benthamscience.com/scripts/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://benthamscience.com/scripts/css/bootstrap.css" rel="stylesheet">
    <link href="https://benthamscience.com/scripts/css/bentham-new.css" rel="stylesheet" type="text/css">
    <style>
        #myBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: #085b9d;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 4px;
        }

        #myBtn:hover {
            background-color: #555;
        }

        #sticky {
            padding: 1.2ex;
            width: 100%;
            background-color: #333;
            color: #fff;
            font-size: 16px;
            border-radius: 0.5ex;
            text-align: center;
            padding-top: 15px;
            padding-bottom: 15px;
        }

        #sticky.stick {
            position: fixed;
            top: 50px;
            z-index: 10000;
            border-radius: 0 0 0.5em 0.5em;
        }

        html {
            scroll-behavior: smooth;
        }

        /* Style the tab */
        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
            padding: 0px 1px;
        }

        /* Style the buttons that are used to open the tab content */
        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 14px;
            transition: 0.3s;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: #ccc;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
        }
    </style>
    <script type="text/javascript">
        function sticky_relocate() {
            var window_top = $(window).scrollTop();
            var div_top = $('#sticky-anchor').offset().top;
            if (window_top > div_top) {
                $('#sticky').addClass('stick');
            } else {
                $('#sticky').removeClass('stick');
            }
        }

        $(function() {
            $(window).scroll(sticky_relocate);
            sticky_relocate();
        });
    </script>
    <script src="https://benthamscience.com/scripts/js/bootstrap.min.js"></script>
    <script src="https://benthamscience.com/scripts/js/jquery.min.js"></script>
    <script src="https://benthamscience.com/scripts/js/bootstrap-dropdownhover.min.js"></script>
    <script>
        (function($) {
            $(document).ready(function() {
                $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
                    event.preventDefault();
                    event.stopPropagation();
                    $(this).parent().siblings().removeClass('open');
                    $(this).parent().toggleClass('open');
                });
            });
        })(jQuery);
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Institutional Membership ::: Bentham Science Publishers</title>
    <style>
        .effect a {
            text-decoration: none !important;
            color: #fff;
            width: 30px;
            height: 30px;
            display: -webkit-box;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            border-radius: 10px;
            margin-right: 5px;
            font-size: 25px;
            overflow: hidden;
            position: relative;
        }

        .effect a i {
            position: relative;
            z-index: 3;
        }

        .effect a.fb {
            background-color: #3b5998;
        }

        .effect a.yt {
            background-color: red;
        }

        .effect a.tw {
            background-color: #00aced;
        }

        .effect a.g-plus {
            background-color: #21759b;
        }

        .effect a.dribbble {
            background-color: #ea4c89;
        }

        .effect a.pinterest {
            background-color: #cb2027;
        }

        .effect a.insta {
            background-color: #bc2a8d;
        }

        .effect a.in {
            background-color: #007bb6;
        }

        .effect a.vimeo {
            background-color: #1ab7ea;
        }

        /* jaques effect */
        .effect.jaques a {
            -webkit-transition: border-top-left-radius 0.1s linear 0s, border-top-right-radius 0.1s linear 0.1s, border-bottom-right-radius 0.1s linear 0.2s, border-bottom-left-radius 0.1s linear 0.3s;
            transition: border-top-left-radius 0.1s linear 0s, border-top-right-radius 0.1s linear 0.1s, border-bottom-right-radius 0.1s linear 0.2s, border-bottom-left-radius 0.1s linear 0.3s;
        }

        .effect.jaques a:hover {
            border-radius: 50%;
        }
    </style>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="col-xs-6"><img src="https://benthamscience.com/../../../img/index_02.jpg" alt="Bentham Science Logo"></div>
                <div class="col-xs-6 hidden-md hidden-lg">
                    <div style="padding-top:20px; text-align:right;"></div>
                    <div style="text-align: center;">
                        <div class="effect jaques">
                            <div class="buttons" style="display: inline-flex;">
                                <a href="https://www.linkedin.com/company/benthamscience" target="_blank" class="in" title="Join us on Linked In"><i style="font-size: 15px;" class="fa fa-linkedin" aria-hidden="true"></i></a><a href="http://www.facebook.com/BenthamSciencePublishers" target="_blank" class="fb" title="Join us on Facebook"><i style="font-size: 15px;" class="fa fa-facebook" aria-hidden="true"></i></a><a href="https://www.youtube.com/c/benthamsciencepublisher" target="_blank" class="yt" title="Join us on Youtube"><i style="font-size: 17px;" class="fa fa-youtube" aria-hidden="true"></i></a><a href="https://twitter.com/BenthamScienceP" target="_blank" class="tw" title="Join us on Twitter"><i style="font-size: 15px;" class="fa fa-twitter" aria-hidden="true"></i></a><a href="http://benthamsciencepublishers.wordpress.com/" target="_blank" class="g-plus" title="Join us on Wordpress"><i style="font-size: 17px;" class="fa fa-wordpress" aria-hidden="true"></i></a><a href="https://benthamscience.com/kudos.php" target="_blank" title="Join us on Kudos"><img src="images/kudos.png"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="vertical-align:bottom; text-align: right; padding-top:70px;">
                <form action="/journal/render-search-results.php" id="cse-search-box" style="vertical-align:bottom" method="get">
                    <div class="input-group">
                        <input class="form-control" aria-label="..." name="q">
                        <div class="input-group-btn">
                            <input type="hidden" name="cx" value="partner-pub-2685163628273835:7983360493"><input type="hidden" name="cof" value="FORID:10"><input type="hidden" name="ie" value="UTF-8"><button type="submit" class="btn btn-default" name="sa" value="Search">Search</button><a href="http://eurekaselect.com/search/apachesolr_search" target="_blank" class="btn btn-default">Advanced Search</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="hidden-xs hidden-sm col-md-3">
                <div style="padding-top:70px; text-align:right;"></div>
                <div style="text-align: center;">
                    <div class="effect jaques">
                        <div class="buttons" style="display: inline-flex;">
                            <a href="https://www.linkedin.com/company/benthamscience" target="_blank" class="in" title="Join us on Linked In"><i style="font-size: 15px;" class="fa fa-linkedin" aria-hidden="true"></i></a><a href="http://www.facebook.com/BenthamSciencePublishers" target="_blank" class="fb" title="Join us on Facebook"><i style="font-size: 15px;" class="fa fa-facebook" aria-hidden="true"></i></a><a href="https://www.youtube.com/c/benthamsciencepublisher" target="_blank" class="yt" title="Join us on Youtube"><i style="font-size: 17px;" class="fa fa-youtube" aria-hidden="true"></i></a><a href="https://twitter.com/BenthamScienceP" target="_blank" class="tw" title="Join us on Twitter"><i style="font-size: 15px;" class="fa fa-twitter" aria-hidden="true"></i></a><a href="http://benthamsciencepublishers.wordpress.com/" target="_blank" class="g-plus" title="Join us on Wordpress"><i style="font-size: 17px;" class="fa fa-wordpress" aria-hidden="true"></i></a><a href="https://benthamscience.com/kudos.php" target="_blank" title="Join us on Kudos"><img src="images/kudos.png"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-default">
            <div class="container-fluid" style="padding-left:0px;padding-right:0px;">
                <div class="navbar-header"><button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"><span class="sr-only">Toggle
                            navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="padding: 0px 14px;">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="https://benthamscience.com/../../../index.php">Home</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="">Journals &amp; eBooks<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="https://benthamscience.com/../../../browse-by-subject/business-and-economics-and-finance-and-accounting/">Browse
                                        Journals by Subject</a></li>
                                <li><a href="https://benthamscience.com/../../../journals-by-title/A/1/">Browse Journals
                                        by Title</a></li>
                                <li><a href="https://benthamscience.com/../../../browse-patent-journals/1/">Browse
                                        Patent Journals</a></li>
                                <li><a href="https://benthamscience.com/../../../journal/free-online-samples.php">Free
                                        Online Samples</a></li>
                                <li><a href="https://benthamscience.com/../../../journal/journals-impacting-science.php">Journals
                                        Impacting Science</a></li>
                                <li><a href="https://benthamscience.com/../../../new-journals/2022/">New Titles 2022</a>
                                </li>
                                <li><a href="https://benthamscience.com/../../../new-journals/2021/">New Titles 2021</a>
                                </li>
                                <li><a href="https://benthamscience.com/../../../journal/price-order.php">Price and
                                        Ordering Information</a></li>
                                <li><a href="https://benthamscience.com/../../../journal-subscriptions/2022/">Subscription
                                        Rates 2022</a></li>
                                <li><a href="http://benthambooks.com/">eBooks Website</a></li>
                                <li><a href="http://benthambooks.com/browse-by-subject/business-and-economics-and-finance-and-accounting/">Browse
                                        eBooks by Subject</a></li>
                                <li><a href="http://benthambooks.com/bookshelf-by-title/A/">Browse eBooks by Title</a>
                                </li>
                                <li><a href="https://benthambooks.com/bookshelf/video-books.php">Browse Video Books</a>
                                </li>
                                <li class="divider">
                                <li><a href="https://benthamscience.com/../../../catalogs-main.php">Journals and eBooks
                                        Catalog</a></li>
                                <li><a href="https://www.eurekaselect.com/trial-requests">Free Online Trials</a></li>
                                <li><a href="https://benthamscience.com/../../../endorsements-main.php">Endorsements</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="http://www.eurekaselect.net/alldiseases">Articles by Disease</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="">Marketing Opportunities<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="https://benthamscience.com/../../../institutional-members.php">Institutional
                                        Membership</a></li>
                                <li><a href="https://benthamscience.com/../../../advertise-main.php">Advertise With
                                        Us</a></li>
                                <li><a href="https://benthamscience.com/../../../advertising-policy.php">Advertising
                                        Policy</a></li>
                                <li><a href="https://benthamscience.com/../../../catalogs-main.php">Journals and eBooks
                                        Catalog</a></li>
                                <li><a href="http://benthamscience.com/journal-files/Media-Pack-2020.pdf">Media-Pack-2020</a>
                                </li>
                                <li><a href="https://benthamscience.com/../../../journal-files/AUTHORS-BENEFITS-GUIDE-BSP.pdf">Author's
                                        Benefits Guide</a></li>
                                <li><a href="https://benthamscience.com/../../../partnering-events/region/north-america/">Events
                                        by Region</a></li>
                                <li><a href="https://benthamscience.com/../../../partnering-events/subject/business-and-economics-and-finance-and-accounting/">Events
                                        by Subject Areas</a></li>
                                <li><a href="https://benthamscience.com/../../../exhibit-schedule.php">Exhibit
                                        Schedule</a></li>
                                <li><a href="https://benthamscience.com/../../../corporate-sales.php">Healthcare
                                        Industry Resources</a></li>
                                <li><a href="https://benthamscience.com/../../../media-partners-main.php">Media
                                        Partners</a></li>
                                <li><a href="https://benthamscience.com/../../../partnering-events/">Partnering
                                        Events</a></li>
                                <li><a href="https://benthamscience.com/../../../promotional-services.php">Promotional
                                        Services</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="">For Authors, Editors &amp; Librarians<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="https://benthamscience.com/../../../author-benefits.php">Author
                                        Benefits</a></li>
                                <li><a href="https://benthamscience.com/../../../journal-files/AUTHORS-BENEFITS-GUIDE-BSP.pdf">Author's
                                        Benefits Guide</a></li>
                                <li><a href="https://benthamscience.com/../../../author-reprints.php">Author
                                        Reprints</a></li>
                                <li><a href="https://benthamscience.com/../../../authorship.php">Authorship</a></li>
                                <li><a href="https://benthamscience.com/../../../language-editing.php">Copyediting
                                        Services</a></li>
                                <li><a href="https://benthamscience.com/../../../editorial-policies-main.php">Editorial
                                        Policies</a></li>
                                <li><a href="https://benthamscience.com/Fabricating-and-stating-falsein-formation.php">Fabricating
                                        and Stating False Information</a></li>
                                <li><a href="https://benthamscience.com/../../../faqs-reprints.php">FAQs for
                                        e-prints/reprints</a></li>
                                <li><a href="https://benthamscience.com/../../../increase-visibility-of-article.php">Increase
                                        Visibility of your Article</a></li>
                                <li><a href="https://benthamscience.com/../../../faqs-general.php">General FAQs</a></li>
                                <li><a href="https://benthamscience.com/../../../guest-editors-guidelines.php">Guidelines
                                        for Guest Editors</a></li>
                                <li><a href="https://benthamscience.com/../../../short-guide.php">Short Guide</a></li>
                                <li><a href="https://benthamscience.com/../../../catalog/catalog-files/JournalCatalog2021.pdf">Journal
                                        Catalog 2021</a></li>
                                <li><a href="https://benthamscience.com/../../../catalog/catalog-files/JournalCatalog2022.pdf">Journal
                                        Catalog 2022</a></li>
                                <li><a href="https://benthamscience.com/../../../kudos.php">Kudos</a></li>
                                <li><a href="http://www.eurekaselect.com/library-recommendation">Library
                                        Recommendations</a></li>
                                <li><a href="https://benthamscience.com/../../../manuscript-transfer-facility.php">Manuscript
                                        Transfer Facility</a></li>
                                <li><a href="https://benthamscience.com/../../../instructions.php">Online Manuscript
                                        Submission</a></li>
                                <li><a href="https://www.eurekaselect.net/order/eprint">Order Bulk ePrints</a></li>
                                <li><a href="https://www.eurekaselect.net/order/reprint">Order Bulk Reprints</a></li>
                                <li><a href="https://benthamscience.com/../../../process-flowchart-main.php">Publication
                                        Cycle - Process Flowchart</a></li>
                                <li><a href="https://benthamscience.com/../../../publishing-ethics-main.php">Publishing
                                        Ethics</a></li>
                                <li><a href="https://benthamscience.com/../../../peer-review.php">Peer Review</a></li>
                                <li><a href="https://benthamscience.com/../../../research-misconduct.php">Research
                                        Misconduct</a></li>
                                <li><a href="https://benthamscience.com/../../../self-archiving-policies-main.php">Self-Archiving
                                        Policies</a></li>
                                <li><a href="http://benthamalerts.com/">Table of Contents Alert</a></li>
                                <li><a href="https://www.eurekaselect.com/trial-requests">Trial Requests</a></li>
                                <li><a href="https://benthamscience.com/../../../webinars.php">Webinars</a></li>
                            </ul>
                        </li>
                        <li><a href="https://benthamscience.com/../../../contacts.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row" style="    border: solid;                                       border-color: #CCC;                                       border-width: thin;                                       -webkit-border-radius: 3px;                                       -moz-border-radius: 3px;                                       border-radius: 3px;                                       box-shadow: 0px 2px 10px #cccccc;                                       padding: 10px;                                       padding-top: 0px;                                       font-size: 16px;margin-bottom: 20px;">
            <div class="col-xs-12">
                <span class="tl-main-part">
                    <h3 style="color:white;">BENTHAM SCIENCE INSTITUTIONAL MEMBERS</h3>
                </span>
                <p style="font-size:17px;text-align: justify;"><img style="width:100%;" src="https://benthamscience.com/journal-images/institutional-members/banner2.jpg">
                </p>
                <div class="tab">
                    <button class="tablinks" id="defaultOpen" onclick="openCity(event, 'one')">Member Institutions</button>
                    <button class="tablinks" id="defaultOpen" onclick="openCity(event, 'ten')">Affiliated Societies</button>
                    <!-- <button class="tablinks" onclick="openCity(event, 'six')">Affiliated Societies</button> -->
                    <button class="tablinks" onclick="openCity(event, 'two')">Become a Member</button>
                    <!-- <button class="tablinks" onclick="openCity(event, 'three')">Read and Publish Program</button> -->
                    <button class="tablinks" onclick="openCity(event, 'four')">Benefits for Partners</button><button class="tablinks" onclick="openCity(event, 'five')">News Room</button>
                </div>

                <!-- ////////////////////////////////////////////// -->

                <div id="one" class="tabcontent" style="padding:20px;">
                    <b>Bentham Science</b> welcomes institutions and organizations, who have joined us as Institutional
                    Members, and the scientific societies who have affiliated with our peer-reviewed journals. The
                    library, researchers, authors, faculty and students associated with the following institutions and
                    societies can avail a host of benefits including:

                    <ol>

                    </ol>

                    <ul style="font-size:16px;">

                        <li>Discounts on Open Access charges.</li>

                        <li>Discount on Institutional / Academic subscriptions for Bentham Science journals.</li>

                    </ul>View all the benefits for Members in the <b>‘Benefits for Partners’</b> Section.<br><br>
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <!-- <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="tab" aria-expanded="true"
                                        href="#collapse1">Member Institutions</a></h4>
                            </div> -->
                            <div id="collapse1" class="panel-collapse tab" style="background-color: #ffffff;">
                                <div class="panel-body">

                                    <?php

                                    $institut_data = simplexml_load_file("https://benthamscience.com/common-xml/institutional-data.xml") or die("Error: Cannot create object");
                                    $i = 0;
                                    foreach ($institut_data->{'sec'}->{'institutional-members-list'}->{'institutional-members-entry'} as $value) {
                                        $i++;

                                        $im_id = $value->{'institutional-members-id'};

                                        $im_logo = $value->{'institutional-members-logo'};

                                        $im_title = $value->{'institutional-members-title'};

                                        $im_type = $value->{'institutional-members-type'};

                                        $web_link = $value->{'web-link'};

                                        $im_description = $value->{'institutional-description'}->{'p'};


                                        $manuscript =  $value->{'manuscript'};


                                        if ($i % 3 == 0) {
                                            echo "<div class='container'>";
                                            echo "<div class='row align-items-center'>";
                                        }


                                        echo "<div class='col-lg-4 box'>";

                                        echo "<center><img data-toggle='modal' data-target='#$im_id' src='https://benthamscience.com/journal-images/institutional-members/$im_logo' style='cursor: pointer;'></center>";
                                        echo "<center><h5><a href='$web_link' target='_blank'>$im_title</a></h5></center>";
                                        echo "<center><a href='https://bentham.manuscriptpoint.com/' class='btn btn-primary' target='_blank'>Submit Manuscript</a></center>";
                                        echo  "<br/>";
                                        echo  "<br/>";
                                        echo  "<br/>";
                                        echo  "<br/>";

                                        echo "<div class='modal fade' id='$im_id' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
              <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                    <div class='modal-header'>
                      <h5 class='modal-title' id='exampleModalLabel'><a href='$web_link' target='_blank'>$im_title</a></h5>
					  <p><i>$im_type</i></p>
                    </div>
                    <div class='modal-body'>
                      <center><img data-toggle='modal' data-target='#$im_id' src='https://benthamscience.com/journal-images/institutional-members/$im_logo'></center>
                   <br/>
                   <br/>
                   $im_description
                  </div>
                  <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                  </div>
                  
                </div>
              </div>
            </div>";
                                        echo "</div>";

                                        if ($i % 3 == 0) {
                                            echo "</div>";
                                            echo "</div>";
                                        }
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- ///////////////////////////////////////////////////// -->
                <div id="ten" class="tabcontent" style="padding:20px;">

                    <div class="panel-group">
                        <div class="panel panel-default">
                            <!-- <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="tab" aria-expanded="true"
                                        href="#collapse1">Member Institutions</a></h4>
                            </div> -->
                            <div id="collapse1" class="panel-collapse tab" style="background-color: #ffffff;">
                                <div class="panel-body">

                                    <?php

                                    $institut_data = simplexml_load_file("https://benthamscience.com/common-xml/institutional-data.xml") or die("Error: Cannot create object");
                                    $i = 0;

                                    echo "<div class='container col-lg-12'>";
                                    echo "<div class='row align-items-center'>";

                                    ///////////// modal 1 /////////////////////
                                    $im_id = 'amsc1';
                                    $im_logo = 'american_society.jpg';
                                    $im_title = 'The American Society for Adolescent Psychiatry (ASAP)';
                                    $web_link = 'https://www.adolescentpsychiatry.org/asap-mission';
                                    $im_type = '<i style="margin-bottom:10px;">Affiliated Journal: <b><a
                                                target="xrefwindow"
                                                href="https://benthamscience.com/journals/adolescent-psychiatry/">Adolescent
                                                Psychiatry</a></b></i>';
                                    $im_description = '<p style="text-align: justify;">The <b><a
                                                        target="xrefwindow"
                                                        href="https://www.adolescentpsychiatry.org/asap-mission">American
                                                        Society for Adolescent Psychiatry</a></b> is dedicated to
                                                        the prevention and treatment of mental health disorders of
                                                        adolescents and young adults and to the provision of optimal health
                                                        care of patients. To achieve these goals, ASAP provides continuing
                                                        medical education (CME) program for physicians, primarily
                                                        psychiatrists, and other mental health professionals. CME programs
                                                        must meet the standards of the Accreditation Council for Continuing
                                                        Medical Education, improve the ability of psychiatrists and other
                                                        physicians to recognize, diagnose and manage psychiatric conditions
                                                        in adolescents and young adults, and disseminate new scientific
                                                        knowledge and innovative clinical techniques and programs.</p>
                                                        <br>';

                                    echo "<div class='col-lg-4 box'>";

                                    echo "<center><img data-toggle='modal' data-target='#$im_id' src='https://benthamscience.com/journal-images/institutional-members/$im_logo' style='cursor: pointer;'></center>";
                                    echo "<center><h5><a href='$web_link' target='_blank'>$im_title</a></h5></center>";
                                    echo "<center><a href='https://bentham.manuscriptpoint.com/' class='btn btn-primary' target='_blank'>Submit Manuscript</a></center>";
                                    echo  "<br/>";
                                    echo  "<br/>";
                                    echo  "<br/>";
                                    echo  "<br/>";

                                    echo "<div class='modal fade' id='$im_id' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
          <div class='modal-dialog' role='document'>
            <div class='modal-content'>
                <div class='modal-header'>
                  <h5 class='modal-title' id='exampleModalLabel'><a href='$web_link' target='_blank'>$im_title</a></h5>
                  <p><i>$im_type</i></p>
                </div>
                <div class='modal-body'>
                  <center><img data-toggle='modal' data-target='#$im_id' src='https://benthamscience.com/journal-images/institutional-members/$im_logo'></center>
               <br/>
               <br/>
               $im_description
              </div>
              <div class='modal-footer'>
                <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
              </div>
              
            </div>
          </div>
        </div>";
                                    echo "</div>";

                                    ///////////// modal 2 /////////////////////

                                    $im_id = 'ame1';
                                    $im_logo = 'associazione_medici.jpg';
                                    $im_title = 'Associazione Medic Endocrinologi';
                                    $web_link = 'https://www.associazionemediciendocrinologi.it/index.php';
                                    $im_type = '<i style="margin-bottom:10px;"> Affiliated Journal: <b>
                                                <a target="xrefwindow" href="https://benthamscience.com/journals/endocrine-metabolic-and-immune-disorders-drug-targets/">Endocrine,
                                                    Metabolic &amp; Immune Disorders - Drug
                                                    Targets</a></b></i>';
                                    $im_description = '<p style="text-align: justify;">The <b> <a target="xrefwindow" href="https://www.associazionemediciendocrinologi.it/index.php">AME
                                                                Associazione Medici Endocrinologi</a></b> stems from the
                                                        need to aggregate those who work daily in the Clinical Endocrinology
                                                        sector in our country and promotes initiatives aimed at a constant
                                                        growth of the same having as main objectives the improvement of
                                                        assistance and the defense of Endocrinology as a discipline.</p>
                                                        <br>';
                                    


                                    echo "<div class='col-lg-4 box'>";

                                    echo "<center><img data-toggle='modal' data-target='#$im_id' src='https://benthamscience.com/journal-images/institutional-members/$im_logo' style='cursor: pointer;'></center>";
                                    echo "<center><h5><a href='$web_link' target='_blank'>$im_title</a></h5></center>";
                                    echo "<center><a href='https://bentham.manuscriptpoint.com/' class='btn btn-primary' target='_blank'>Submit Manuscript</a></center>";
                                    echo  "<br/>";
                                    echo  "<br/>";
                                    echo  "<br/>";
                                    echo  "<br/>";

                                    echo "<div class='modal fade' id='$im_id' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
          <div class='modal-dialog' role='document'>
            <div class='modal-content'>
                <div class='modal-header'>
                  <h5 class='modal-title' id='exampleModalLabel'><a href='$web_link' target='_blank'>$im_title</a></h5>
                  <p><i>$im_type</i></p>
                </div>
                <div class='modal-body'>
                  <center><img data-toggle='modal' data-target='#$im_id' src='https://benthamscience.com/journal-images/institutional-members/$im_logo'></center>
               <br/>
               <br/>
               $im_description
              </div>
              <div class='modal-footer'>
                <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
              </div>
              
            </div>
          </div>
        </div>";
                                    echo "</div>";


                                    ///////////// modal 3 /////////////////////

                                    $im_id = 'Xenobiotics';
                                        $im_logo = 'Xenobiotics.jpg';
                                        $im_title = 'International Society for
                                        the Study of Xenobiotics';
                                        $web_link = 'https://www.issx.org/';
                                        $im_type = '<i style="margin-bottom:10px;">Affiliated Journal: <b><a target="xrefwindow" href="https://benthamscience.com/journals/current-drug-metabolism/">Current
                                        Drug Metabolism</a></b></i>';
                                        $im_description = '<p style="text-align: justify;">The <b><a target="xrefwindow" href="https://www.issx.org/">International Society for the
                                            Study of Xenobiotics (ISSX)</a></b> is the premier
                                    scientific organization for researchers interested in the metabolism
                                    and disposition of xenobiotics. ISSX was formed in 1981 when a small
                                    group of scientists, brought together during the 1970\'s under the
                                    aegis of the Gordon Research Conferences on Drug Metabolism, created
                                    an international society to promote the interaction of scientists
                                    dedicated to the study of xenobiotics in living systems.</p>
                                                            <br>';

                                    echo "<div class='col-lg-4 box'>";

                                    echo "<center><img data-toggle='modal' data-target='#$im_id' src='https://benthamscience.com/journal-images/institutional-members/$im_logo' style='cursor: pointer;'></center>";
                                    echo "<center><h5><a href='$web_link' target='_blank'>$im_title</a></h5></center>";
                                    echo "<center><a href='https://bentham.manuscriptpoint.com/' class='btn btn-primary' target='_blank'>Submit Manuscript</a></center>";
                                    echo  "<br/>";
                                    echo  "<br/>";
                                    echo  "<br/>";
                                    echo  "<br/>";

                                    echo "<div class='modal fade' id='$im_id' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
          <div class='modal-dialog' role='document'>
            <div class='modal-content'>
                <div class='modal-header'>
                  <h5 class='modal-title' id='exampleModalLabel'><a href='$web_link' target='_blank'>$im_title</a></h5>
                  <p><i>$im_type</i></p>
                </div>
                <div class='modal-body'>
                  <center><img data-toggle='modal' data-target='#$im_id' src='https://benthamscience.com/journal-images/institutional-members/$im_logo'></center>
               <br/>
               <br/>
               $im_description
              </div>
              <div class='modal-footer'>
                <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
              </div>
              
            </div>
          </div>
        </div>";
                                    echo "</div>";


                                    echo "</div>";
                                    echo "</div>";

                                    ////////////////////////////////////////////////////////// second row////////////////////////////////////////////////////////

                                    echo "<div class='container col-lg-12'>";
                                    echo "<div class='row align-items-center'>";

                                    ///////////// modal 4 /////////////////////
                                    $im_id = 'ALACF';
                                    $im_logo = 'latin_american.jpg';
                                    $img2= '<img src="https://benthamscience.com/journal-images/institutional-members/latin_american_1.gif">';
                                    $im_title = 'Latin American Association
                                    of Physiological Sciences (ALACF) and Sociedad Chilena de Ciencias
                                    Fisiológicas (SCHCF)';
                                    $web_link = 'https://www.cienciasfisiologicas.cl/schcf-is-member-of-alacf/';
                                    $im_type = '<i style="margin-bottom:10px;">Affiliated Journal: <b><a target="xrefwindow" href="https://benthamscience.com/journals/current-vascular-pharmacology/">Current
                                    Vascular Pharmacology</a></b></i>';
                                    $im_description = '<p style="text-align: justify;"><b><a target="xrefwindow" href="https://www.cienciasfisiologicas.cl/">SCHCF</a></b> is
                                        a member of <b><a target="xrefwindow" href="https://www.cienciasfisiologicas.cl/schcf-is-member-of-alacf/">ALACF</a></b>
                                        In 1920 Dr. Bernardo Houssay created the Society for Biology. In
                                        1950 he began the publication of the Acta Physiologica
                                        Latinoamericana and in 1956 created the Latin American Association
                                        of Physiological Sciences (ALACF). ALACF functioned as such for many
                                        years, bringing together Latin American physiologists in Latin
                                        American Congresses. In 2006, the Ibero-American Congress of
                                        Physiological Sciences and the XXII ALACF Congress were held in
                                        Buenos Aires. In this framework, the ALACF Assemblies was held. The
                                        Minutes that we were able to recover from the ALACF meeting that
                                        took place in that Congress are in the full text in Mattiazzi
                                        (2020).</p>
                                                        <br>';

                                    echo "<div class='col-lg-4 box'>";

                                    echo "<center><img data-toggle='modal' data-target='#$im_id' src='https://benthamscience.com/journal-images/institutional-members/$im_logo' style='cursor: pointer;'>$img2</center>";
                                    echo "<center><h5><a href='$web_link' target='_blank'>$im_title</a></h5></center>";
                                    echo "<center><a href='https://bentham.manuscriptpoint.com/' class='btn btn-primary' target='_blank'>Submit Manuscript</a></center>";
                                    echo  "<br/>";
                                    echo  "<br/>";
                                    echo  "<br/>";
                                    echo  "<br/>";

                                    echo "<div class='modal fade' id='$im_id' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
          <div class='modal-dialog' role='document'>
            <div class='modal-content'>
                <div class='modal-header'>
                  <h5 class='modal-title' id='exampleModalLabel'><a href='$web_link' target='_blank'>$im_title</a></h5>
                  <p><i>$im_type</i></p>
                </div>
                <div class='modal-body'>
                  <center><img data-toggle='modal' data-target='#$im_id' src='https://benthamscience.com/journal-images/institutional-members/$im_logo'></center>
               <br/>
               <br/>
               $im_description
              </div>
              <div class='modal-footer'>
                <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
              </div>
              
            </div>
          </div>
        </div>";
                                    echo "</div>";

                                    ///////////// modal 5 /////////////////////

                                    $im_id = 'Emirates';
                                        $im_logo = 'Emirates.png';
                                        //$img2= '<img src="https://benthamscience.com/journal-images/institutional-members/latin_american_1.gif">';
                                        $im_title = 'Emirates Medical
                                        Association (EMA)';
                                        $web_link = 'https://www.ema.ae/index_v2.php?pages=Home';
                                        $im_type = '<i style="margin-bottom:10px;">Affiliated Journal: <b><a target="xrefwindow" href="https://benthamscience.com/journal/ema.php?journalID=nemj">New
                                        Emirates Medical Journal</a></b></i>';
                                        $im_description = '<p style="text-align: justify;">In 1981, <b><a target="xrefwindow" href="https://www.ema.ae/index_v2.php?pages=Home">Emirates
                                                            Medical Association (EMA)</a></b> was established as a
                                                    non-profit organization composed of health practitioners that are
                                                    members of the EMA as defined by its bylaws. EMA is responsible for
                                                    supervising and conducting scientific training, events and
                                                    conferences as well as collaborating with health organizations. EMA
                                                    launched its work through its competent supervisory, executive and
                                                    specialist boards and committees. EMA is a scientific organization
                                                    which has legal personality, and it’s Headquarter in Dubai.</p>
                                                            <br>';
                                    


                                    echo "<div class='col-lg-4 box'>";

                                    echo "<center><img data-toggle='modal' data-target='#$im_id' src='https://benthamscience.com/journal-images/institutional-members/$im_logo' style='cursor: pointer;'></center>";
                                    echo "<center><h5><a href='$web_link' target='_blank'>$im_title</a></h5></center>";
                                    echo "<center><a href='https://bentham.manuscriptpoint.com/' class='btn btn-primary' target='_blank'>Submit Manuscript</a></center>";
                                    echo  "<br/>";
                                    echo  "<br/>";
                                    echo  "<br/>";
                                    echo  "<br/>";

                                    echo "<div class='modal fade' id='$im_id' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
          <div class='modal-dialog' role='document'>
            <div class='modal-content'>
                <div class='modal-header'>
                  <h5 class='modal-title' id='exampleModalLabel'><a href='$web_link' target='_blank'>$im_title</a></h5>
                  <p><i>$im_type</i></p>
                </div>
                <div class='modal-body'>
                  <center><img data-toggle='modal' data-target='#$im_id' src='https://benthamscience.com/journal-images/institutional-members/$im_logo'></center>
               <br/>
               <br/>
               $im_description
              </div>
              <div class='modal-footer'>
                <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
              </div>
              
            </div>
          </div>
        </div>";
                                    echo "</div>";


                                    ///////////// modal 6 /////////////////////

                                    $im_id = 'socesfar';
                                        $im_logo = 'logo-socesfar.png';
                                        
                                        $im_title = 'Spanish Society of
                                        Pharmacology (SEF)';
                                        $web_link = 'https://www.socesfar.es/';
                                         $im_type = '';
                                        $im_description = '<p style="text-align: justify;">The <b><a target="xrefwindow" href="https://www.socesfar.es/">Spanish
                                            Society of Pharmacology (SEF)</a></b> was founded in 1972 to
                                    bring together all Spanish pharmacologists, in order to facilitate
                                    organizing scientific meetings (an annual meeting at the national
                                    level) with the aim of promoting scientific and social exchange
                                    among Spanish pharmacologists as well as joint meetings with other
                                    Pharmacology Societies within the framework of the International
                                    Pharmacology Association and the European Pharmacology Association
                                    (IUPHAR and EPHAR). The Society represents researchers in national
                                    and international organizations, helps networking at scientific and
                                    technical meetings, awards scholarships and prizes to stimulate
                                    pharmacological research in Spain. In addition, it manages the
                                    operation of different working committees reviewing specific issues
                                    in pharmacology and allied research. </p>
                                                            <br>';

                                    echo "<div class='col-lg-4 box'>";

                                    echo "<center><img data-toggle='modal' data-target='#$im_id' src='https://benthamscience.com/journal-images/institutional-members/$im_logo' style='cursor: pointer; width:90%;'></center>";
                                    echo "<center><h5><a href='$web_link' target='_blank'>$im_title</a></h5></center>";
                                    echo "<center><a href='https://bentham.manuscriptpoint.com/' class='btn btn-primary' target='_blank'>Submit Manuscript</a></center>";
                                    echo  "<br/>";
                                    echo  "<br/>";
                                    echo  "<br/>";
                                    echo  "<br/>";

                                    echo "<div class='modal fade' id='$im_id' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
          <div class='modal-dialog' role='document'>
            <div class='modal-content'>
                <div class='modal-header'>
                  <h5 class='modal-title' id='exampleModalLabel'><a href='$web_link' target='_blank'>$im_title</a></h5>
                  <p><i>$im_type</i></p>
                </div>
                <div class='modal-body'>
                  <center><img data-toggle='modal' data-target='#$im_id' src='https://benthamscience.com/journal-images/institutional-members/$im_logo'></center>
               <br/>
               <br/>
               $im_description
              </div>
              <div class='modal-footer'>
                <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
              </div>
              
            </div>
          </div>
        </div>";
                                    echo "</div>";


                                    echo "</div>";
                                    echo "</div>";


                                    ////////////////////////////////////////////////////////// third row////////////////////////////////////////////////////////

                                    echo "<div class='container col-lg-12'>";
                                    echo "<div class='row align-items-center'>";

                                    ///////////// modal 7 /////////////////////
                                        $im_id = 'UTIAI_logo';
                                        $im_logo = 'UTIAI_logo.gif';
                                        
                                        $im_title = 'Ukrainian Society of
                                        Specialists for Immunology, Allergology and Immunorehabilitation';
                                        $web_link = 'http://utiai.org.ua/statut';
                                         $im_type = '<i style="margin-bottom:10px;">Affiliated Journal: Endocrine,
                                        Metabolic &amp; Immune Disorders - Drug Targets</i>';
                                        $im_description = '<p style="text-align: justify;"><b><a target="xrefwindow" href="http://utiai.org.ua/statut"> Ukrainian Society of
                                            Specialists for Immunology, Allergology and Immunorehabilitation
                                            (UTIAI)</a> </b> is an association of clinicians, scientists and
                                        health professionals, which was founded to improve the health of
                                        people suffering from allergies and immune disorders. The history of
                                        the Society dates back to 1987, which heralded the new era of
                                        clinical immunology as a new medical specialty in Ukraine. At
                                        present, UTIAI is a member of the European Academy of Allergy and
                                        Clinical Immunology (EAACI), American College of Allergy Asthma and
                                        Immunology (ACAAI), Federation of Clinical Immunology Societies
                                        (FOCIS) and other renowned international organizations. Enrolling
                                        almost 600 professionals from all regions of Ukraine, the Society is
                                        the main source of expertise for all aspects of allergies and
                                        diseases of the immune system. The Society’s members are engaged in
                                        developing and updating standards and guidelines for the care of
                                        patients with allergies and immune system disorders.</p>
                                                            <br>';

                                    echo "<div class='col-lg-4 box'>";

                                    echo "<center><img data-toggle='modal' data-target='#$im_id' src='https://benthamscience.com/journal-images/institutional-members/$im_logo' style='cursor: pointer;'></center>";
                                    echo "<center><h5><a href='$web_link' target='_blank'>$im_title</a></h5></center>";
                                    echo "<center><a href='https://bentham.manuscriptpoint.com/' class='btn btn-primary' target='_blank'>Submit Manuscript</a></center>";
                                    echo  "<br/>";
                                    echo  "<br/>";
                                    echo  "<br/>";
                                    echo  "<br/>";

                                    echo "<div class='modal fade' id='$im_id' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
          <div class='modal-dialog' role='document'>
            <div class='modal-content'>
                <div class='modal-header'>
                  <h5 class='modal-title' id='exampleModalLabel'><a href='$web_link' target='_blank'>$im_title</a></h5>
                  <p><i>$im_type</i></p>
                </div>
                <div class='modal-body'>
                  <center><img data-toggle='modal' data-target='#$im_id' src='https://benthamscience.com/journal-images/institutional-members/$im_logo'></center>
               <br/>
               <br/>
               $im_description
              </div>
              <div class='modal-footer'>
                <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
              </div>
              
            </div>
          </div>
        </div>";
                                    echo "</div>";

                                    ///////////// modal 8 /////////////////////

                                    $im_id = 'cyprus';
                                    $im_logo = 'cyprus-biological-society.jpg';
                                    
                                    $im_title = 'Cyprus Biological Society';
                                    $web_link = 'https://www.cbs.cy/';
                                     $im_type = '<i style="margin-bottom:10px;">Affiliated Journal: Current
                                     Medicinal Chemistry</i>';
                                    $im_description = '      <p style=" text-align: justify;"><a target="xrefwindow" href="https://www.cbs.cy/">CBS </a> is the Cyprus Biological
                                        Society and its history goes back a long way, a history of forty
                                        (40) years. It was set up in 1978 which makes it one of the oldest
                                        science societies in Cyprus. Over the years CBS has been run by more
                                        than 20 Governing Bodies. CBS represents all Biologists in Cyprus.
                                        CBS represents Cyprus Biologists in scientific networks abroad.</p>
                                    <p style=" text-align: justify;">Distinguished and
                                        prominent members of the social, scientific and financial life of
                                        Cyprus have served CBS.</p>
                                    <p style=" text-align: justify;">These people served the
                                        country from top state positions, as Ministers, Members of
                                        Parliament, Commissioners, Members of the Education Services
                                        Committee, Department Directors of various Ministries, Directors of
                                        Research Organization, Institute Directors, Presidents of Community
                                        Councils, Directors of Environment Centers for Education and
                                        Research and other important positions.</p>
                                    <p style=" text-align: justify;">For better and more
                                        efficient work in the various fields of biological applications, the
                                        Biological Society of Cyprus (CBS) has decided to establish and
                                        activate the following Working Groups – CBS Committees:</p>
                                    <p style=" text-align: justify;"><b>(a)</b> Health
                                        Committee</p>
                                    <p style=" text-align: justify;"><b>(b)</b> Environment
                                        Committee</p>
                                    <p style=" text-align: justify;"><b>(c)</b> Committee for
                                        Tertiary Education and Research</p>
                                    <p style=" text-align: justify;"><b>(d)</b> Committee for
                                        Secondary Education and Olympiads</p>
                                    <p style=" text-align: justify;">CBS’s mission and vision
                                        are to support and promote the science of Biology in Cyprus.</p>
                                    <p style=" text-align: justify;">Specifically, it aims at
                                        the following:</p>


                                    <ul style="font-size:16px;">

                                        <li> Support of research, teaching and learning in all aspects of
                                        </li>

                                        <li> The science of Biology in Cyprus, like
                                        </li>

                                        <li> Creation and support of professional contacts and information
                                            exchanges, including the organisation of scientific meetings,
                                            workshops and seminars, between biologists in Cyprus as well as
                                            biologists outside Cyprus
                                        </li>

                                        <li> Provision for assistance and support as well as rewards for
                                            Cypriot scientists, lecturers and students in Cyprus and Cypriot
                                            biologists abroad
                                        </li>

                                        <li> Broadening the interaction and networking between scientific
                                            events in Cyprus in all aspects of biology and their application
                                            in health, medicine, environment and industry
                                        </li>

                                        <li>Participation of CBS in economic and social aspects relating to
                                            biological sciences.
                                        </li>

                                    </ul>
                                                        <br>';
                                    


                                    echo "<div class='col-lg-4 box'>";

                                    echo "<center><img data-toggle='modal' data-target='#$im_id' src='https://benthamscience.com/journal-images/institutional-members/$im_logo' style='cursor: pointer;'></center>";
                                    echo "<center><h5><a href='$web_link' target='_blank'>$im_title</a></h5></center>";
                                    echo "<center><a href='https://bentham.manuscriptpoint.com/' class='btn btn-primary' target='_blank'>Submit Manuscript</a></center>";
                                    echo  "<br/>";
                                    echo  "<br/>";
                                    echo  "<br/>";
                                    echo  "<br/>";

                                    echo "<div class='modal fade' id='$im_id' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
          <div class='modal-dialog' role='document'>
            <div class='modal-content'>
                <div class='modal-header'>
                  <h5 class='modal-title' id='exampleModalLabel'><a href='$web_link' target='_blank'>$im_title</a></h5>
                  <p><i>$im_type</i></p>
                </div>
                <div class='modal-body'>
                  <center><img data-toggle='modal' data-target='#$im_id' src='https://benthamscience.com/journal-images/institutional-members/$im_logo'></center>
               <br/>
               <br/>
               $im_description
              </div>
              <div class='modal-footer'>
                <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
              </div>
              
            </div>
          </div>
        </div>";
                                    echo "</div>";



                                    echo "</div>";
                                    echo "</div>";

                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- ///////////////////////////////////////////////////// -->
                <div id="two" class="tabcontent" style="padding:20px;">
                    <span class="tl-lowest-section">
                        <h4>Become An Institutional Member</h4>
                    </span>
                    <p style="font-size:17px;text-align: justify;">Bentham Science invites consortia, universities,
                        research centers, organizations and scientific societies to join as Institutional Member. As a
                        Member you will be entitled to avail all the benefits listed in the section of <b>‘Benefits for
                            Partners’</b>.</p>
                    <p style="font-size:17px;text-align: justify;">Let us know about your interest by filling the form
                        below.</p>
                    <div class="modal-header">
                        <h4 class="modal-title">Membership Form</h4>
                    </div>
                    <div class="modal-body">
                        <p>Please provide the following information about yourself and your institution. The sections
                            marked with asterisk (*) are mandatory to fill.</p>
                        <form enctype="multipart/form-data" method="post" action="https://benthamscience.com/../../scripts/email-script-institutional-members.php" id="rlForm" name="rlForm">
                            <table width="100%" style="border-spacing:0 15px;">
                                <tr>
                                    <td><label for="title">Title: <span class="form-required" title="This field is required.">*</span></label></td>
                                    <td>
                                        <input name="title" type="hidden" id="title" value="Mr."><select name="salutation" id="salutation" onChange="document.rlForm.title.value = this.value">
                                            <option value="Mr.">Mr. </option>
                                            <option value="Mrs.">Mrs.</option>
                                            <option value="Ms">Ms</option>
                                            <option value="Prof.">Prof.</option>
                                            <option value="Dr.">Dr.</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="edit-first-name">Full Name: <span class="form-required" title="This field is required.">*</span></label></td>
                                    <td><input type="text" maxlength="50" name="full_name" id="edit-first-name" size="60" value="" class="form-text required form-control" required="required"></td>
                                </tr>
                                <tr>
                                    <td><label for="edit-email">Email Address (Institutional): <span class="form-required" title="This field is required.">*</span></label>
                                    </td>
                                    <td><input type="text" maxlength="100" name="email" id="email" size="60" value="" class="form-text required form-control" required="required"></td>
                                </tr>
                                <tr>
                                    <td><label for="edit-email">Name of Institution / Organization / Society: <span class="form-required" title="This field is required.">*</span></label>
                                    </td>
                                    <td><input type="text" maxlength="100" name="institution" id="institution" size="60" value="" class="form-text required form-control" required="required"></td>
                                </tr>
                                <tr>
                                    <td><label for="edit-email">Website of Institution / Organization / Society: <span class="form-required" title="This field is required.">*</span></label>
                                    </td>
                                    <td><input type="text" maxlength="100" name="web_institution" id="web_institution" size="60" value="" class="form-text required form-control" required="required"></td>
                                </tr>
                                <tr>
                                    <td><label for="edit-email">Name of Librarian / Head of Institution or Society:
                                            <span class="form-required" title="This field is required.">*</span></label>
                                    </td>
                                    <td><input type="text" maxlength="100" name="institution" id="name_librarian" size="60" value="" class="form-text required form-control" required="required"></td>
                                </tr>
                                <tr>
                                    <td><label for="edit-email">Email Address of Librarian / Head of Institution or
                                            Society: <span class="form-required" title="This field is required.">*</span></label></td>
                                    <td><input type="text" maxlength="100" name="email_librarian" id="email_librarian" size="60" value="" class="form-text required form-control" required="required"></td>
                                </tr>
                                <tr>
                                    <td><label for="edit-city">City: <span class="form-required" title="This field is required.">*</span></label></td>
                                    <td><input type="text" maxlength="50" name="city" id="city" size="60" value="" class="form-text required form-control" required="required"></td>
                                </tr>
                                <tr>
                                    <td><label for="edit-country">Country: <span class="form-required" title="This field is required.">*</span></label></td>
                                    <td><select name="country" class="form-select required form-control select2" id="edit-country" required="required">
                                            <option title="Select country" value="0">Select country</option>
                                            <option title="AFGHANISTAN" value="AFGHANISTAN">AFGHANISTAN</option>
                                            <option title="ALBANIA" value="ALBANIA">ALBANIA</option>
                                            <option title="ALGERIA" value="ALGERIA">ALGERIA</option>
                                            <option title="AMERICAN SAMOA" value="AMERICAN SAMOA">AMERICAN SAMOA
                                            </option>
                                            <option title="ANDORRA" value="ANDORRA">ANDORRA</option>
                                            <option title="ANGOLA" value="ANGOLA">ANGOLA</option>
                                            <option title="ANGUILLA" value="ANGUILLA">ANGUILLA</option>
                                            <option title="ANTARCTICA" value="ANTARCTICA">ANTARCTICA</option>
                                            <option title="ANTIGUA AND BARBUDA" value="ANTIGUA AND BARBUDA">ANTIGUA AND
                                                BARBUDA</option>
                                            <option title="ARGENTINA" value="ARGENTINA">ARGENTINA</option>
                                            <option title="ARMENIA" value="ARMENIA">ARMENIA</option>
                                            <option title="ARUBA" value="ARUBA">ARUBA</option>
                                            <option title="ASCENSION" value="ASCENSION">ASCENSION</option>
                                            <option title="AUSTRALIA" value="AUSTRALIA">AUSTRALIA</option>
                                            <option title="AUSTRIA" value="AUSTRIA">AUSTRIA</option>
                                            <option title="AZERBAIJAN" value="AZERBAIJAN">AZERBAIJAN</option>
                                            <option title="BAHAMAS" value="BAHAMAS">BAHAMAS</option>
                                            <option title="BAHRAIN" value="BAHRAIN">BAHRAIN</option>
                                            <option title="BANGLADESH" value="BANGLADESH">BANGLADESH</option>
                                            <option title="BARBADOS" value="BARBADOS">BARBADOS</option>
                                            <option title="BELARUS" value="BELARUS">BELARUS</option>
                                            <option title="BELGIUM" value="BELGIUM">BELGIUM</option>
                                            <option title="BELIZE" value="BELIZE">BELIZE</option>
                                            <option title="BENIN" value="BENIN">BENIN</option>
                                            <option title="BERMUDA" value="BERMUDA">BERMUDA</option>
                                            <option title="BHUTAN" value="BHUTAN">BHUTAN</option>
                                            <option title="BOLIVIA" value="BOLIVIA">BOLIVIA</option>
                                            <option title="BOSNIA AND HERZEGOVINA" value="BOSNIA AND HERZEGOVINA">BOSNIA
                                                AND HERZEGOVINA</option>
                                            <option title="BOTSWANA" value="BOTSWANA">BOTSWANA</option>
                                            <option title="BOUVET ISLAND" value="BOUVET ISLAND">BOUVET ISLAND</option>
                                            <option title="BRAZIL" value="BRAZIL">BRAZIL</option>
                                            <option title="BRITISH INDIAN OCEAN TERRITORY" value="BRITISH INDIAN OCEAN TERRITORY">BRITISH INDIAN OCEAN TERRITORY
                                            </option>
                                            <option title="BRUNEI DARUSSALAM" value="BRUNEI DARUSSALAM">BRUNEI
                                                DARUSSALAM</option>
                                            <option title="BULGARIA" value="BULGARIA">BULGARIA</option>
                                            <option title="BURKINA FASO" value="BURKINA FASO">BURKINA FASO</option>
                                            <option title="BURUNDI" value="BURUNDI">BURUNDI</option>
                                            <option title="CAMBODIA" value="CAMBODIA">CAMBODIA</option>
                                            <option title="CAMEROON" value="CAMEROON">CAMEROON</option>
                                            <option title="CANADA" value="CANADA">CANADA</option>
                                            <option title="CAPE VERDE" value="CAPE VERDE">CAPE VERDE</option>
                                            <option title="CAYMAN ISLANDS" value="CAYMAN ISLANDS">CAYMAN ISLANDS
                                            </option>
                                            <option title="CENTRAL AFRICAN REPUBLIC" value="CENTRAL AFRICAN REPUBLIC">
                                                CENTRAL AFRICAN REPUBLIC</option>
                                            <option title="CHAD" value="CHAD">CHAD</option>
                                            <option title="CHILE" value="CHILE">CHILE</option>
                                            <option title="CHINA" value="CHINA">CHINA</option>
                                            <option title="CHRISTMAS ISLAND" value="CHRISTMAS ISLAND">CHRISTMAS ISLAND
                                            </option>
                                            <option title="COCOS (KEELING) ISLANDS" value="COCOS (KEELING) ISLANDS">
                                                COCOS (KEELING) ISLANDS</option>
                                            <option title="COLOMBIA" value="COLOMBIA">COLOMBIA</option>
                                            <option title="COMOROS" value="COMOROS">COMOROS</option>
                                            <option title="CONGO" value="CONGO">CONGO</option>
                                            <option title="CONGO, THE DEMOCRATIC REPUBLIC OF THE" value="CONGO, THE DEMOCRATIC REPUBLIC OF THE">CONGO, THE DEMOCRATIC
                                                REPUBLIC OF THE</option>
                                            <option title="COOK ISLANDS" value="COOK ISLANDS">COOK ISLANDS</option>
                                            <option title="COSTA RICA" value="COSTA RICA">COSTA RICA</option>
                                            <option title="COTE D IVOIRE" value="COTE D IVOIRE">COTE D IVOIRE</option>
                                            <option title="CROATIA" value="CROATIA">CROATIA</option>
                                            <option title="CUBA" value="CUBA">CUBA</option>
                                            <option title="CYPRUS" value="CYPRUS">CYPRUS</option>
                                            <option title="CZECH REPUBLIC" value="CZECH REPUBLIC">CZECH REPUBLIC
                                            </option>
                                            <option title="DENMARK" value="DENMARK">DENMARK</option>
                                            <option title="DJIBOUTI" value="DJIBOUTI">DJIBOUTI</option>
                                            <option title="DOMINICA" value="DOMINICA">DOMINICA</option>
                                            <option title="DOMINICAN REPUBLIC" value="DOMINICAN REPUBLIC">DOMINICAN
                                                REPUBLIC</option>
                                            <option title="ECUADOR" value="ECUADOR">ECUADOR</option>
                                            <option title="EGYPT" value="EGYPT">EGYPT</option>
                                            <option title="EL SALVADOR" value="EL SALVADOR">EL SALVADOR</option>
                                            <option title="EQUATORIAL GUINEA" value="EQUATORIAL GUINEA">EQUATORIAL
                                                GUINEA</option>
                                            <option title="ERITREA" value="ERITREA">ERITREA</option>
                                            <option title="ESTONIA" value="ESTONIA">ESTONIA</option>
                                            <option title="ETHIOPIA" value="ETHIOPIA">ETHIOPIA</option>
                                            <option title="FALKLAND ISLANDS (MALVINAS)" value="FALKLAND ISLANDS (MALVINAS)">FALKLAND ISLANDS (MALVINAS)</option>
                                            <option title="FAROE ISLANDS" value="FAROE ISLANDS">FAROE ISLANDS</option>
                                            <option title="FIJI" value="FIJI">FIJI</option>
                                            <option title="FINLAND" value="FINLAND">FINLAND</option>
                                            <option title="FRANCE" value="FRANCE">FRANCE</option>
                                            <option title="FRENCH GUIANA" value="FRENCH GUIANA">FRENCH GUIANA</option>
                                            <option title="FRENCH POLYNESIA" value="FRENCH POLYNESIA">FRENCH POLYNESIA
                                            </option>
                                            <option title="FRENCH SOUTHERN TERRITORIES" value="FRENCH SOUTHERN TERRITORIES">FRENCH SOUTHERN TERRITORIES</option>
                                            <option title="GABON" value="GABON">GABON</option>
                                            <option title="GAMBIA" value="GAMBIA">GAMBIA</option>
                                            <option title="GEORGIA" value="GEORGIA">GEORGIA</option>
                                            <option title="GERMANY" value="GERMANY">GERMANY</option>
                                            <option title="GHANA" value="GHANA">GHANA</option>
                                            <option title="GIBRALTAR" value="GIBRALTAR">GIBRALTAR</option>
                                            <option title="GREECE" value="GREECE">GREECE</option>
                                            <option title="GREENLAND" value="GREENLAND">GREENLAND</option>
                                            <option title="GRENADA" value="GRENADA">GRENADA</option>
                                            <option title="GUADELOUPE" value="GUADELOUPE">GUADELOUPE</option>
                                            <option title="GUAM" value="GUAM">GUAM</option>
                                            <option title="GUATEMALA" value="GUATEMALA">GUATEMALA</option>
                                            <option title="GUINEA" value="GUINEA">GUINEA</option>
                                            <option title="GUINEA-BISSAU" value="GUINEA-BISSAU">GUINEA-BISSAU</option>
                                            <option title="GUYANA" value="GUYANA">GUYANA</option>
                                            <option title="HAITI" value="HAITI">HAITI</option>
                                            <option title="HEARD ISLAND AND MCDONALD ISLANDS" value="HEARD ISLAND AND MCDONALD ISLANDS">HEARD ISLAND AND MCDONALD
                                                ISLANDS</option>
                                            <option title="HOLY SEE (VATICAN CITY STATE)" value="HOLY SEE (VATICAN CITY STATE)">HOLY SEE (VATICAN CITY STATE)
                                            </option>
                                            <option title="HONDURAS" value="HONDURAS">HONDURAS</option>
                                            <option title="HONG KONG" value="HONG KONG">HONG KONG</option>
                                            <option title="HUNGARY" value="HUNGARY">HUNGARY</option>
                                            <option title="ICELAND" value="ICELAND">ICELAND</option>
                                            <option title="INDIA" value="INDIA">INDIA</option>
                                            <option title="Indiana" value="Indiana">Indiana</option>
                                            <option title="INDONESIA" value="INDONESIA">INDONESIA</option>
                                            <option title="IRAN" value="IRAN">IRAN</option>
                                            <option title="IRAQ" value="IRAQ">IRAQ</option>
                                            <option title="IRELAND" value="IRELAND">IRELAND</option>
                                            <option title="ISRAEL" value="ISRAEL">ISRAEL</option>
                                            <option title="ITALY" value="ITALY">ITALY</option>
                                            <option title="JAMAICA" value="JAMAICA">JAMAICA</option>
                                            <option title="JAPAN" value="JAPAN">JAPAN</option>
                                            <option title="JORDAN" value="JORDAN">JORDAN</option>
                                            <option title="KAZAKHSTAN" value="KAZAKHSTAN">KAZAKHSTAN</option>
                                            <option title="KENYA" value="KENYA">KENYA</option>
                                            <option title="KIRIBATI" value="KIRIBATI">KIRIBATI</option>
                                            <option title="KOREA" value="KOREA">KOREA</option>
                                            <option title="KOREA, DEMOCRATIC PEOPLES REPUBLIC OF" value="KOREA, DEMOCRATIC PEOPLES REPUBLIC OF">KOREA, DEMOCRATIC PEOPLES
                                                REPUBLIC OF</option>
                                            <option title="Kosova" value="Kosova">Kosova</option>
                                            <option title="KUWAIT" value="KUWAIT">KUWAIT</option>
                                            <option title="KYRGYZSTAN" value="KYRGYZSTAN">KYRGYZSTAN</option>
                                            <option title="LAO PEOPLE'S DEMOCRATIC REPUBLIC" value="LAO PEOPLE'S DEMOCRATIC REPUBLIC">LAO PEOPLE'S DEMOCRATIC
                                                REPUBLIC</option>
                                            <option title="LATVIA" value="LATVIA">LATVIA</option>
                                            <option title="LEBANON" value="LEBANON">LEBANON</option>
                                            <option title="LESOTHO" value="LESOTHO">LESOTHO</option>
                                            <option title="LIBERIA" value="LIBERIA">LIBERIA</option>
                                            <option title="LIBYA" value="LIBYA">LIBYA</option>
                                            <option title="LIECHTENSTEIN" value="LIECHTENSTEIN">LIECHTENSTEIN</option>
                                            <option title="LITHUANIA" value="LITHUANIA">LITHUANIA</option>
                                            <option title="LUXEMBOURG" value="LUXEMBOURG">LUXEMBOURG</option>
                                            <option title="MACAO" value="MACAO">MACAO</option>
                                            <option title="MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF" value="MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF">MACEDONIA, THE FORMER
                                                YUGOSLAV REPUBLIC OF</option>
                                            <option title="MADAGASCAR" value="MADAGASCAR">MADAGASCAR</option>
                                            <option title="MALAWI" value="MALAWI">MALAWI</option>
                                            <option title="MALAYSIA" value="MALAYSIA">MALAYSIA</option>
                                            <option title="MALDIVES" value="MALDIVES">MALDIVES</option>
                                            <option title="MALI" value="MALI">MALI</option>
                                            <option title="MALTA" value="MALTA">MALTA</option>
                                            <option title="MARSHALL ISLANDS" value="MARSHALL ISLANDS">MARSHALL ISLANDS
                                            </option>
                                            <option title="MARTINIQUE" value="MARTINIQUE">MARTINIQUE</option>
                                            <option title="MAURITANIA" value="MAURITANIA">MAURITANIA</option>
                                            <option title="MAURITIUS" value="MAURITIUS">MAURITIUS</option>
                                            <option title="MAYOTTE" value="MAYOTTE">MAYOTTE</option>
                                            <option title="MEXICO" value="MEXICO">MEXICO</option>
                                            <option title="MICRONESIA, FEDERATED STATES OF" value="MICRONESIA, FEDERATED STATES OF">MICRONESIA, FEDERATED STATES OF
                                            </option>
                                            <option title="MOLDOVA, REPUBLIC OF" value="MOLDOVA, REPUBLIC OF">MOLDOVA,
                                                REPUBLIC OF</option>
                                            <option title="MONACO" value="MONACO">MONACO</option>
                                            <option title="MONGOLIA" value="MONGOLIA">MONGOLIA</option>
                                            <option title="MONTENEGRO" value="MONTENEGRO">MONTENEGRO</option>
                                            <option title="MONTSERRAT" value="MONTSERRAT">MONTSERRAT</option>
                                            <option title="MOROCCO" value="MOROCCO">MOROCCO</option>
                                            <option title="MOZAMBIQUE" value="MOZAMBIQUE">MOZAMBIQUE</option>
                                            <option title="MYANMAR" value="MYANMAR">MYANMAR</option>
                                            <option title="NAMIBIA" value="NAMIBIA">NAMIBIA</option>
                                            <option title="NAURU" value="NAURU">NAURU</option>
                                            <option title="NEPAL" value="NEPAL">NEPAL</option>
                                            <option title="NETHERLANDS" value="NETHERLANDS">NETHERLANDS</option>
                                            <option title="NETHERLANDS ANTILLES" value="NETHERLANDS ANTILLES">
                                                NETHERLANDS ANTILLES</option>
                                            <option title="NEW CALEDONIA" value="NEW CALEDONIA">NEW CALEDONIA</option>
                                            <option title="NEW ZEALAND" value="NEW ZEALAND">NEW ZEALAND</option>
                                            <option title="NICARAGUA" value="NICARAGUA">NICARAGUA</option>
                                            <option title="NIGER" value="NIGER">NIGER</option>
                                            <option title="NIGERIA" value="NIGERIA">NIGERIA</option>
                                            <option title="NIUE" value="NIUE">NIUE</option>
                                            <option title="NORFOLK ISLAND" value="NORFOLK ISLAND">NORFOLK ISLAND
                                            </option>
                                            <option title="NORTHERN MARIANA ISLANDS" value="NORTHERN MARIANA ISLANDS">
                                                NORTHERN MARIANA ISLANDS</option>
                                            <option title="NORWAY" value="NORWAY">NORWAY</option>
                                            <option title="OMAN" value="OMAN">OMAN</option>
                                            <option title="PAKISTAN" value="PAKISTAN">PAKISTAN</option>
                                            <option title="PALAU" value="PALAU">PALAU</option>
                                            <option title="PALESTINIAN TERRITORY, OCCUPIED" value="PALESTINIAN TERRITORY, OCCUPIED">PALESTINIAN TERRITORY, OCCUPIED
                                            </option>
                                            <option title="PANAMA" value="PANAMA">PANAMA</option>
                                            <option title="PAPUA NEW GUINEA" value="PAPUA NEW GUINEA">PAPUA NEW GUINEA
                                            </option>
                                            <option title="PARAGUAY" value="PARAGUAY">PARAGUAY</option>
                                            <option title="PERU" value="PERU">PERU</option>
                                            <option title="PHILIPPINES" value="PHILIPPINES">PHILIPPINES</option>
                                            <option title="PITCAIRN" value="PITCAIRN">PITCAIRN</option>
                                            <option title="POLAND" value="POLAND">POLAND</option>
                                            <option title="PORTUGAL" value="PORTUGAL">PORTUGAL</option>
                                            <option title="PUERTO RICO" value="PUERTO RICO">PUERTO RICO</option>
                                            <option title="QATAR" value="QATAR">QATAR</option>
                                            <option title="REUNION" value="REUNION">REUNION</option>
                                            <option title="ROMANIA" value="ROMANIA">ROMANIA</option>
                                            <option title="RUSSIAN FEDERATION" value="RUSSIAN FEDERATION">RUSSIAN
                                                FEDERATION</option>
                                            <option title="RWANDA" value="RWANDA">RWANDA</option>
                                            <option title="SAINT HELENA" value="SAINT HELENA">SAINT HELENA</option>
                                            <option title="SAINT KITTS AND NEVIS" value="SAINT KITTS AND NEVIS">SAINT
                                                KITTS AND NEVIS</option>
                                            <option title="SAINT LUCIA" value="SAINT LUCIA">SAINT LUCIA</option>
                                            <option title="SAINT PIERRE AND MIQUELON" value="SAINT PIERRE AND MIQUELON">
                                                SAINT PIERRE AND MIQUELON</option>
                                            <option title="SAINT VINCENT AND THE GRENADINES" value="SAINT VINCENT AND THE GRENADINES">SAINT VINCENT AND THE
                                                GRENADINES</option>
                                            <option title="SAMOA" value="SAMOA">SAMOA</option>
                                            <option title="SAN MARINO" value="SAN MARINO">SAN MARINO</option>
                                            <option title="SAO TOME AND PRINCIPE" value="SAO TOME AND PRINCIPE">SAO TOME
                                                AND PRINCIPE</option>
                                            <option title="SAUDI ARABIA" value="SAUDI ARABIA">SAUDI ARABIA</option>
                                            <option title="Scotland" value="Scotland">Scotland</option>
                                            <option title="SENEGAL" value="SENEGAL">SENEGAL</option>
                                            <option title="SERBIA" value="SERBIA">SERBIA</option>
                                            <option title="SEYCHELLES" value="SEYCHELLES">SEYCHELLES</option>
                                            <option title="SIERRA LEONE" value="SIERRA LEONE">SIERRA LEONE</option>
                                            <option title="SINGAPORE" value="SINGAPORE">SINGAPORE</option>
                                            <option title="SLOVAKIA" value="SLOVAKIA">SLOVAKIA</option>
                                            <option title="SLOVENIA" value="SLOVENIA">SLOVENIA</option>
                                            <option title="SOLOMON ISLANDS" value="SOLOMON ISLANDS">SOLOMON ISLANDS
                                            </option>
                                            <option title="SOMALIA" value="SOMALIA">SOMALIA</option>
                                            <option title="SOUTH AFRICA" value="SOUTH AFRICA">SOUTH AFRICA</option>
                                            <option title="SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS" value="SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS">SOUTH GEORGIA AND
                                                THE SOUTH SANDWICH ISLANDS</option>
                                            <option title="SOUTH KOREA" value="SOUTH KOREA">SOUTH KOREA</option>
                                            <option title="SPAIN" value="SPAIN">SPAIN</option>
                                            <option title="SRI LANKA" value="SRI LANKA">SRI LANKA</option>
                                            <option title="SUDAN" value="SUDAN">SUDAN</option>
                                            <option title="SURINAME" value="SURINAME">SURINAME</option>
                                            <option title="SVALBARD AND JAN MAYEN" value="SVALBARD AND JAN MAYEN">
                                                SVALBARD AND JAN MAYEN</option>
                                            <option title="SWAZILAND" value="SWAZILAND">SWAZILAND</option>
                                            <option title="SWEDEN" value="SWEDEN">SWEDEN</option>
                                            <option title="SWITZERLAND" value="SWITZERLAND">SWITZERLAND</option>
                                            <option title="SYRIAN ARAB REPUBLIC" value="SYRIAN ARAB REPUBLIC">SYRIAN
                                                ARAB REPUBLIC</option>
                                            <option title="TAIWAN" value="TAIWAN">TAIWAN</option>
                                            <option title="TAJIKISTAN" value="TAJIKISTAN">TAJIKISTAN</option>
                                            <option title="TANZANIA, UNITED REPUBLIC OF" value="TANZANIA, UNITED REPUBLIC OF">TANZANIA, UNITED REPUBLIC OF
                                            </option>
                                            <option title="THAILAND" value="THAILAND">THAILAND</option>
                                            <option title="TIMOR-LESTE" value="TIMOR-LESTE">TIMOR-LESTE</option>
                                            <option title="TOGO" value="TOGO">TOGO</option>
                                            <option title="TOKELAU" value="TOKELAU">TOKELAU</option>
                                            <option title="TONGA" value="TONGA">TONGA</option>
                                            <option title="TRINIDAD AND TOBAGO" value="TRINIDAD AND TOBAGO">TRINIDAD AND
                                                TOBAGO</option>
                                            <option title="TRISTA DA CUHNA" value="TRISTA DA CUHNA">TRISTA DA CUHNA
                                            </option>
                                            <option title="TUNISIA" value="TUNISIA">TUNISIA</option>
                                            <option title="TURKEY" value="TURKEY">TURKEY</option>
                                            <option title="TURKMENISTAN" value="TURKMENISTAN">TURKMENISTAN</option>
                                            <option title="TURKS AND CAICOS ISLANDS" value="TURKS AND CAICOS ISLANDS">
                                                TURKS AND CAICOS ISLANDS</option>
                                            <option title="TUVALU" value="TUVALU">TUVALU</option>
                                            <option title="UGANDA" value="UGANDA">UGANDA</option>
                                            <option title="UKRAINE" value="UKRAINE">UKRAINE</option>
                                            <option title="UNITED ARAB EMIRATES" value="UNITED ARAB EMIRATES">UNITED
                                                ARAB EMIRATES</option>
                                            <option title="UNITED KINGDOM" value="UNITED KINGDOM">UNITED KINGDOM
                                            </option>
                                            <option title="UNITED STATES" value="UNITED STATES">UNITED STATES</option>
                                            <option title="UNITED STATES MINOR OUTLYING ISLANDS" value="UNITED STATES MINOR OUTLYING ISLANDS">UNITED STATES MINOR
                                                OUTLYING ISLANDS</option>
                                            <option title="URUGUAY" value="URUGUAY">URUGUAY</option>
                                            <option title="UZBEKISTAN" value="UZBEKISTAN">UZBEKISTAN</option>
                                            <option title="VANUATU" value="VANUATU">VANUATU</option>
                                            <option title="VENEZUELA" value="VENEZUELA">VENEZUELA</option>
                                            <option title="VIETNAM" value="VIETNAM">VIETNAM</option>
                                            <option title="VIRGIN ISLANDS, BRITISH" value="VIRGIN ISLANDS, BRITISH">
                                                VIRGIN ISLANDS, BRITISH</option>
                                            <option title="VIRGIN ISLANDS, U.S." value="VIRGIN ISLANDS, U.S.">VIRGIN
                                                ISLANDS, U.S.</option>
                                            <option title="WALLIS AND FUTUNA" value="WALLIS AND FUTUNA">WALLIS AND
                                                FUTUNA</option>
                                            <option title="West Indies" value="West Indies">West Indies</option>
                                            <option title="WESTERN SAHARA" value="WESTERN SAHARA">WESTERN SAHARA
                                            </option>
                                            <option title="YEMEN" value="YEMEN">YEMEN</option>
                                            <option title="ZAMBIA" value="ZAMBIA">ZAMBIA</option>
                                            <option title="ZIMBABWE" value="ZIMBABWE">ZIMBABWE</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td><label for="org_name">Comments / Query: </label></td>
                                    <td><input type="text" maxlength="200" name="comment" id="comment" size="60" value="" class="form-text required form-control" required="required"></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <br><input type="Checkbox" name="librarian_check" id="librarian_check"> Bentham
                                        Science can contact the Librarian / Head of Institution or Society for
                                        Institutional Membership.
                                    </td>
                                </tr>
                                <tr>
                                    <td><br></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <script src="https://www.google.com/recaptcha/api.js"></script>
                                        <div class="g-recaptcha" data-sitekey="6LfDYREUAAAAAIUtXoEpc3cnJthUyBvK-TbqXdEC"></div>
                                        <noscript>
                                            <div>
                                                <div style="width: 302px; height: 422px; position: relative;">
                                                    <div style="width: 302px; height: 422px; position: absolute;">
                                                        <iframe src="https://www.google.com/recaptcha/api/fallback?k=6LfDYREUAAAAAIUtXoEpc3cnJthUyBvK-TbqXdEC" frameborder="0" scrolling="no" style="width: 302px; height:422px; border-style: none;"></iframe>
                                                    </div>
                                                </div>
                                                <div style="width: 300px; height: 60px; border-style: none;                                                    bottom: 12px; left: 25px; margin: 0px; padding: 0px; right: 25px;                                                    background: #f9f9f9; border: 1px solid #c1c1c1; border-radius: 3px;">
                                                    <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid #c1c1c1;                                                           margin: 10px 25px; padding: 0px; resize: none;"></textarea>
                                                </div>
                                            </div>
                                        </noscript>
                                        <br><input type="hidden" name="reg_type" id="edit-reg-type" value="eabm"><button type="submit" name="attac" class="form-submit btn btn-sm btn-default">Submit</button>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>

                <div id="four" class="tabcontent" style="padding:20px;">
                    <span class="tl-lowest-section">
                        <h4>Benefits for Partners</h4>
                    </span>
                    <p style="font-size:17px;text-align: justify;">Registration for the Bentham Science Institutional
                        Membership Program is <b>Free-of-charge</b>. As a Member the institutions will be entitled to
                        avail the following benefits:</p>
                    <p style="font-size:17px;text-align: justify;"><b>Discounts on Journal Subscriptions for University
                            / Library / Organization / Society:</b></p>
                    <p style="font-size:17px;text-align: justify;"><b>Discounts</b> will be offered on the
                        <b>Institutional Subscription</b>, for any Bentham Science journal. The subscription is offered
                        for a time period of one year and can be renewed every year depending on the interest. Through
                        the subscription the researchers, faculty and students from the institution will be able to get
                        access to the Full-text articles, published in Bentham journals.
                    </p>
                    <br>
                    <p style="font-size:17px;text-align: justify;"><b>Discount on Open Access Article Publishing for
                            Researchers:</b></p>
                    <p style="font-size:17px;text-align: justify;">The researchers and authors from the member
                        institution will be able to publish their articles, in any or selected, Bentham Science journal,
                        as Open Access at a <b>significant discount</b>.</p>
                    <p style="font-size:17px;text-align: justify;">Articles are licensed under the terms of the Creative
                        Commons Attribution 4.0 International Public License (CC-BY 4.0) (<a target="xrefwindow" href="https://creativecommons.org/licenses/by/4.0/legalcode">https://creativecommons.org/licenses/by/4.0/legalcode</a>),
                        which permits unrestricted, distribution and reproduction in any medium, ensuring that the work
                        is properly cited.</p>
                    <br>
                    <p style="font-size:17px;text-align: justify;"><b>Prioritized Peer-review and Publishing for
                            Researchers:</b></p>
                    <p style="font-size:17px;text-align: justify;">The authors associated with the institution can avail
                        a prioritized peer-review process, to publish their research. The articles will be published at
                        priority, online, and in the next upcoming issues of the journal.</p>
                    <br>
                    <p style="font-size:17px;text-align: justify;"><b>Promotion as a Member Institution on Bentham
                            Science Website:</b></p>
                    <p style="font-size:17px;text-align: justify;">The institution will be promoted as a Bentham Science
                        Member, with the institution’s logo, linked to their official website, showcased on the Bentham
                        Science Membership webpage. We will promote the partnership through social and digital media as
                        well.</p>
                    <br>
                    <p style="font-size:17px;text-align: justify;"><b>Free News Media Promotions:</b></p>
                    <p style="font-size:17px;text-align: justify;">The Member institutions and societies can promote
                        their recent achievements in research and development through popular news platforms, including
                        the “EurekAlert!” and other news websites.</p>
                    <br>
                    <p style="font-size:17px;text-align: justify;"><b>Free Webinars For Members:</b></p>
                    <p style="font-size:17px;text-align: justify;">Bentham Science organizes webinars for researchers,
                        around the world, related to research, writing and publishing. We would welcome researchers and
                        others, affiliated with your institution, to register for free and attend these live webinar
                        sessions. They will get the chance to gain knowledge and skills required for conducting
                        research, presenting, writing and publishing their work in established journals.</p>
                </div>
                <div id="five" class="tabcontent" style="padding:20px;">
                    <span class="tl-lowest-section">
                        <h4>News Room</h4>
                    </span>
                    <p style="font-size:17px;text-align: justify;">
                    <table width="100%" class="bm">
                        <tr>
                            <td valign="top" style="">
                                <h3 style="margin-top:0px;margin-bottom:0px;">
                                    Çukorova University Tropical Diseases Research and Application Center</h3>
                                <i style="margin-bottom:10px;">Institutional Member</i><br>
                                <p style="font-size:17px;text-align: justify;">Press Release:<br>
                                    <a target="xrefwindow" href="https://www.eurekalert.org/pub_releases/2021-01/bsp-u011521.php">Çukurova
                                        University (TDRAC) joins Bentham Science as institutional member</a>
                                </p>
                            </td>
                            <td valign="top" style="padding:10px;text-align:center;">
                                <img src="https://benthamscience.com/journal-images/institutional-members/cukorova.jpg">
                            </td>
                        </tr>

                    </table>
                    </p>
                </div>
                <div id="six" class="tabcontent" style="padding:20px;">
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <!-- <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="tab" aria-expanded="true"
                                        href="#collapse2">Affiliated Societies</a></h4>
                            </div> -->
                            <div id="collapse2" class="panel-collapse tab" style="background-color: #ffffff;">
                                <div class="panel-body">
                                    <table width="100%" class="bm">
                                        <tr>
                                            <td valign="top" style="padding:10px;text-align:center;">
                                                <img src="https://benthamscience.com/journal-images/institutional-members/american_society.jpg">

                                            </td>

                                            <td valign="top" style="">
                                                <h3 style="margin-top:0px;margin-bottom:0px;">The American Society for
                                                    Adolescent Psychiatry (ASAP)</h3>
                                                <p style="font-size:17px;text-align: justify;"><i style="margin-bottom:10px;">Affiliated Journal: <b><a target="xrefwindow" href="https://benthamscience.com/journals/adolescent-psychiatry/">Adolescent
                                                                Psychiatry</a></b></i></p>
                                                <p style="font-size:17px;text-align: justify;">The <b><a target="xrefwindow" href="https://www.adolescentpsychiatry.org/asap-mission">American
                                                            Society for Adolescent Psychiatry</a></b> is dedicated to
                                                    the prevention and treatment of mental health disorders of
                                                    adolescents and young adults and to the provision of optimal health
                                                    care of patients. To achieve these goals, ASAP provides continuing
                                                    medical education (CME) program for physicians, primarily
                                                    psychiatrists, and other mental health professionals. CME programs
                                                    must meet the standards of the Accreditation Council for Continuing
                                                    Medical Education, improve the ability of psychiatrists and other
                                                    physicians to recognize, diagnose and manage psychiatric conditions
                                                    in adolescents and young adults, and disseminate new scientific
                                                    knowledge and innovative clinical techniques and programs.</p>
                                                <br>
                                                <a href='https://bentham.manuscriptpoint.com/' class='btn btn-primary' target='_blank'>Submit Manuscript</a>";
                                                <br>
                                                <br>
                                            </td>
                                        </tr>
                                        <br>

                                        
                                        <tr>

                                            <td valign="top" style="padding:10px;text-align:center;">
                                                <img src="https://benthamscience.com/journal-images/institutional-members/associazione_medici.jpg">
                                            </td>
                                            <td valign="top" style="">
                                                <h3 style="margin-top:0px;margin-bottom:0px;">Associazione Medici
                                                    Endocrinologi</h3>
                                                <p style="font-size:17px;text-align: justify;"><i style="margin-bottom:10px;">Affiliated Journal: <b><a target="xrefwindow" href="https://benthamscience.com/journals/endocrine-metabolic-and-immune-disorders-drug-targets/">Endocrine,
                                                                Metabolic &amp; Immune Disorders - Drug
                                                                Targets</a></b></i></p>
                                                <p style="font-size:17px;text-align: justify;">The <b><a target="xrefwindow" href="https://www.associazionemediciendocrinologi.it/index.php">AME
                                                            Associazione Medici Endocrinologi</a></b> stems from the
                                                    need to aggregate those who work daily in the Clinical Endocrinology
                                                    sector in our country and promotes initiatives aimed at a constant
                                                    growth of the same having as main objectives the improvement of
                                                    assistance and the defense of Endocrinology as a discipline.</p>
                                                <br>
                                                <a href='https://bentham.manuscriptpoint.com/' class='btn btn-primary' target='_blank'>Submit Manuscript</a>";
                                                <br>
                                                <br>
                                            </td>
                                        </tr>

                                        

                                        <tr>
                                            <td valign="top" style="padding:10px;text-align:center;">
                                                <img src="https://benthamscience.com/journal-images/institutional-members/Xenobiotics.jpg">
                                            </td>
                                            <td valign="top" style="">
                                                <h3 style="margin-top:0px;margin-bottom:0px;">International Society for
                                                    the Study of Xenobiotics</h3>
                                                <p style="font-size:17px;text-align: justify;"><i style="margin-bottom:10px;">Affiliated Journal: <b><a target="xrefwindow" href="https://benthamscience.com/journals/current-drug-metabolism/">Current
                                                                Drug Metabolism</a></b></i></p>
                                                <p style="font-size:17px;text-align: justify;">The <b><a target="xrefwindow" href="https://www.issx.org/">International Society for the
                                                            Study of Xenobiotics (ISSX)</a></b> is the premier
                                                    scientific organization for researchers interested in the metabolism
                                                    and disposition of xenobiotics. ISSX was formed in 1981 when a small
                                                    group of scientists, brought together during the 1970's under the
                                                    aegis of the Gordon Research Conferences on Drug Metabolism, created
                                                    an international society to promote the interaction of scientists
                                                    dedicated to the study of xenobiotics in living systems.</p>
                                                <br>
                                                <a href='https://bentham.manuscriptpoint.com/' class='btn btn-primary' target='_blank'>Submit Manuscript</a>";
                                                <br>
                                                <br>
                                            </td>
                                        </tr>

                                       


                                        <tr>
                                            <td valign="top" style="padding:10px;text-align:center;">
                                                <img src="https://benthamscience.com/journal-images/institutional-members/latin_american.jpg">
                                                <img src="https://benthamscience.com/journal-images/institutional-members/latin_american_1.gif">
                                            </td>
                                            <td valign="top" style="">
                                                <h3 style="margin-top:0px;margin-bottom:0px;">Latin American Association
                                                    of Physiological Sciences (ALACF) and Sociedad Chilena de Ciencias
                                                    Fisiológicas (SCHCF)</h3>
                                                <p style="font-size:17px;text-align: justify;"><i style="margin-bottom:10px;">Affiliated Journal: <b><a target="xrefwindow" href="https://benthamscience.com/journals/current-vascular-pharmacology/">Current
                                                                Vascular Pharmacology</a></b></i></p>
                                                <p style="font-size:17px;text-align: justify;"><b><a target="xrefwindow" href="https://www.cienciasfisiologicas.cl/">SCHCF</a></b> is
                                                    a member of <b><a target="xrefwindow" href="https://www.cienciasfisiologicas.cl/schcf-is-member-of-alacf/">ALACF</a></b>
                                                    In 1920 Dr. Bernardo Houssay created the Society for Biology. In
                                                    1950 he began the publication of the Acta Physiologica
                                                    Latinoamericana and in 1956 created the Latin American Association
                                                    of Physiological Sciences (ALACF). ALACF functioned as such for many
                                                    years, bringing together Latin American physiologists in Latin
                                                    American Congresses. In 2006, the Ibero-American Congress of
                                                    Physiological Sciences and the XXII ALACF Congress were held in
                                                    Buenos Aires. In this framework, the ALACF Assemblies was held. The
                                                    Minutes that we were able to recover from the ALACF meeting that
                                                    took place in that Congress are in the full text in Mattiazzi
                                                    (2020).
                                                </p>
                                                <br>
                                                <a href='https://bentham.manuscriptpoint.com/' class='btn btn-primary' target='_blank'>Submit Manuscript</a>";
                                                <br>
                                                <br>
                                            </td>
                                        </tr>

                                        <?php 
                                        $im_id = 'ALACF';
                                        $im_logo = 'Emirates.png';
                                        //$img2= '<img src="https://benthamscience.com/journal-images/institutional-members/latin_american_1.gif">';
                                        $im_title = 'Emirates Medical
                                        Association (EMA)';
                                        $web_link = 'https://www.ema.ae/index_v2.php?pages=Home';
                                        $im_type = '<i style="margin-bottom:10px;">Affiliated Journal: <b><a target="xrefwindow" href="https://benthamscience.com/journal/ema.php?journalID=nemj">New
                                        Emirates Medical Journal</a></b></i>';
                                        $im_description = '<p style="text-align: justify;">In 1981, <b><a target="xrefwindow" href="https://www.ema.ae/index_v2.php?pages=Home">Emirates
                                                            Medical Association (EMA)</a></b> was established as a
                                                    non-profit organization composed of health practitioners that are
                                                    members of the EMA as defined by its bylaws. EMA is responsible for
                                                    supervising and conducting scientific training, events and
                                                    conferences as well as collaborating with health organizations. EMA
                                                    launched its work through its competent supervisory, executive and
                                                    specialist boards and committees. EMA is a scientific organization
                                                    which has legal personality, and it’s Headquarter in Dubai.</p>
                                                            <br>';
                                        ?>
                                        <tr>
                                            <td valign="top" style="padding:10px;text-align:center;">
                                                <img src="https://benthamscience.com/journal-images/institutional-members/Emirates.png">
                                            </td>
                                            <td valign="top" style="">
                                                <h3 style="margin-top:0px;margin-bottom:0px;">Emirates Medical
                                                    Association (EMA)</h3>
                                                <p style="font-size:17px;text-align: justify;"><i style="margin-bottom:10px;">Affiliated Journal: <b><a target="xrefwindow" href="https://benthamscience.com/journal/ema.php?journalID=nemj">New
                                                                Emirates Medical Journal</a></b></i></p>
                                                <p style="font-size:17px;text-align: justify;">In 1981, <b><a target="xrefwindow" href="https://www.ema.ae/index_v2.php?pages=Home">Emirates
                                                            Medical Association (EMA)</a></b> was established as a
                                                    non-profit organization composed of health practitioners that are
                                                    members of the EMA as defined by its bylaws. EMA is responsible for
                                                    supervising and conducting scientific training, events and
                                                    conferences as well as collaborating with health organizations. EMA
                                                    launched its work through its competent supervisory, executive and
                                                    specialist boards and committees. EMA is a scientific organization
                                                    which has legal personality, and it’s Headquarter in Dubai.</p>
                                                <br>
                                                <a href='https://bentham.manuscriptpoint.com/' class='btn btn-primary' target='_blank'>Submit Manuscript</a>";
                                                <br>
                                                <br>
                                            </td>
                                        </tr>

                                       

                                        <tr>
                                            <td valign="top" style="padding:10px;text-align:center;">
                                                <img src="https://benthamscience.com/journal-images/institutional-members/logo-socesfar.png">
                                            </td>
                                            <td valign="top" style="">
                                                <h3 style="margin-top:0px;margin-bottom:0px;">Spanish Society of
                                                    Pharmacology (SEF)</h3>
                                                <br>
                                                <p style="font-size:17px;text-align: justify;">The <b><a target="xrefwindow" href="https://www.socesfar.es/">Spanish
                                                            Society of Pharmacology (SEF)</a></b> was founded in 1972 to
                                                    bring together all Spanish pharmacologists, in order to facilitate
                                                    organizing scientific meetings (an annual meeting at the national
                                                    level) with the aim of promoting scientific and social exchange
                                                    among Spanish pharmacologists as well as joint meetings with other
                                                    Pharmacology Societies within the framework of the International
                                                    Pharmacology Association and the European Pharmacology Association
                                                    (IUPHAR and EPHAR). The Society represents researchers in national
                                                    and international organizations, helps networking at scientific and
                                                    technical meetings, awards scholarships and prizes to stimulate
                                                    pharmacological research in Spain. In addition, it manages the
                                                    operation of different working committees reviewing specific issues
                                                    in pharmacology and allied research.</p>
                                                <br>
                                                <a href='https://bentham.manuscriptpoint.com/' class='btn btn-primary' target='_blank'>Submit Manuscript</a>";
                                                <br>
                                                <br>
                                            </td>
                                        </tr>


                                       
                                        <tr>
                                            <td valign="top" style="padding:10px;text-align:center;">
                                                <img src="https://benthamscience.com/journal-images/institutional-members/UTIAI_logo.gif">
                                            </td>
                                            <td valign="top" style="">
                                                <h3 style="margin-top:0px;margin-bottom:0px;">Ukrainian Society of
                                                    Specialists for Immunology, Allergology and Immunorehabilitation
                                                </h3>
                                                <p style="font-size:17px;text-align: justify;"><i style="margin-bottom:10px;">Affiliated Journal: Endocrine,
                                                        Metabolic &amp; Immune Disorders - Drug Targets</i><br>
                                                </p>
                                                <p style="font-size:17px;text-align: justify;"><b><a target="xrefwindow" href="http://utiai.org.ua/statut"> Ukrainian Society of
                                                        Specialists for Immunology, Allergology and Immunorehabilitation
                                                        (UTIAI)</a> </b> is an association of clinicians, scientists and
                                                    health professionals, which was founded to improve the health of
                                                    people suffering from allergies and immune disorders. The history of
                                                    the Society dates back to 1987, which heralded the new era of
                                                    clinical immunology as a new medical specialty in Ukraine. At
                                                    present, UTIAI is a member of the European Academy of Allergy and
                                                    Clinical Immunology (EAACI), American College of Allergy Asthma and
                                                    Immunology (ACAAI), Federation of Clinical Immunology Societies
                                                    (FOCIS) and other renowned international organizations. Enrolling
                                                    almost 600 professionals from all regions of Ukraine, the Society is
                                                    the main source of expertise for all aspects of allergies and
                                                    diseases of the immune system. The Society’s members are engaged in
                                                    developing and updating standards and guidelines for the care of
                                                    patients with allergies and immune system disorders.</p>
                                                <br>
                                                <a href='https://bentham.manuscriptpoint.com/' class='btn btn-primary' target='_blank'>Submit Manuscript</a>";
                                                <br>
                                                <br>
                                            </td>
                                        </tr>

                                        <?php 
                                        $im_id = 'cyprus';
                                        $im_logo = 'cyprus-biological-society.jpg';
                                        
                                        $im_title = 'Cyprus Biological Society';
                                        $web_link = 'https://www.cbs.cy/';
                                         $im_type = '<i style="margin-bottom:10px;">Affiliated Journal: Current
                                         Medicinal Chemistry</i>';
                                        $im_description = '      <p style=" text-align: justify;"><a target="xrefwindow" href="https://www.cbs.cy/">CBS </a> is the Cyprus Biological
                                            Society and its history goes back a long way, a history of forty
                                            (40) years. It was set up in 1978 which makes it one of the oldest
                                            science societies in Cyprus. Over the years CBS has been run by more
                                            than 20 Governing Bodies. CBS represents all Biologists in Cyprus.
                                            CBS represents Cyprus Biologists in scientific networks abroad.</p>
                                        <p style=" text-align: justify;">Distinguished and
                                            prominent members of the social, scientific and financial life of
                                            Cyprus have served CBS.</p>
                                        <p style=" text-align: justify;">These people served the
                                            country from top state positions, as Ministers, Members of
                                            Parliament, Commissioners, Members of the Education Services
                                            Committee, Department Directors of various Ministries, Directors of
                                            Research Organization, Institute Directors, Presidents of Community
                                            Councils, Directors of Environment Centers for Education and
                                            Research and other important positions.</p>
                                        <p style=" text-align: justify;">For better and more
                                            efficient work in the various fields of biological applications, the
                                            Biological Society of Cyprus (CBS) has decided to establish and
                                            activate the following Working Groups – CBS Committees:</p>
                                        <p style=" text-align: justify;"><b>(a)</b> Health
                                            Committee</p>
                                        <p style=" text-align: justify;"><b>(b)</b> Environment
                                            Committee</p>
                                        <p style=" text-align: justify;"><b>(c)</b> Committee for
                                            Tertiary Education and Research</p>
                                        <p style=" text-align: justify;"><b>(d)</b> Committee for
                                            Secondary Education and Olympiads</p>
                                        <p style=" text-align: justify;">CBS’s mission and vision
                                            are to support and promote the science of Biology in Cyprus.</p>
                                        <p style=" text-align: justify;">Specifically, it aims at
                                            the following:</p>


                                        <ul style="font-size:16px;">

                                            <li> Support of research, teaching and learning in all aspects of
                                            </li>

                                            <li> The science of Biology in Cyprus, like
                                            </li>

                                            <li> Creation and support of professional contacts and information
                                                exchanges, including the organisation of scientific meetings,
                                                workshops and seminars, between biologists in Cyprus as well as
                                                biologists outside Cyprus
                                            </li>

                                            <li> Provision for assistance and support as well as rewards for
                                                Cypriot scientists, lecturers and students in Cyprus and Cypriot
                                                biologists abroad
                                            </li>

                                            <li> Broadening the interaction and networking between scientific
                                                events in Cyprus in all aspects of biology and their application
                                                in health, medicine, environment and industry
                                            </li>

                                            <li>Participation of CBS in economic and social aspects relating to
                                                biological sciences.
                                            </li>

                                        </ul>
                                                            <br>';
                                        ?>

                                        <tr>
                                            <td valign="top" style="padding:10px;text-align:center;">
                                                <img src="https://benthamscience.com/journal-images/institutional-members/cyprus-biological-society.jpg">
                                            </td>
                                            <td valign="top" style="">
                                                <h3 style="margin-top:0px;margin-bottom:0px;">Cyprus Biological Society
                                                </h3>
                                                <p style="font-size:17px;text-align: justify;"><i style="margin-bottom:10px;">Affiliated Journal: Current
                                                        Medicinal Chemistry</i></p>
                                                <p style="font-size:17px;text-align: justify;"><a target="xrefwindow" href="https://www.cbs.cy/">CBS </a> is the Cyprus Biological
                                                    Society and its history goes back a long way, a history of forty
                                                    (40) years. It was set up in 1978 which makes it one of the oldest
                                                    science societies in Cyprus. Over the years CBS has been run by more
                                                    than 20 Governing Bodies. CBS represents all Biologists in Cyprus.
                                                    CBS represents Cyprus Biologists in scientific networks abroad.</p>
                                                <p style="font-size:17px;text-align: justify;">Distinguished and
                                                    prominent members of the social, scientific and financial life of
                                                    Cyprus have served CBS.</p>
                                                <p style="font-size:17px;text-align: justify;">These people served the
                                                    country from top state positions, as Ministers, Members of
                                                    Parliament, Commissioners, Members of the Education Services
                                                    Committee, Department Directors of various Ministries, Directors of
                                                    Research Organization, Institute Directors, Presidents of Community
                                                    Councils, Directors of Environment Centers for Education and
                                                    Research and other important positions.</p>
                                                <p style="font-size:17px;text-align: justify;">For better and more
                                                    efficient work in the various fields of biological applications, the
                                                    Biological Society of Cyprus (CBS) has decided to establish and
                                                    activate the following Working Groups – CBS Committees:</p>
                                                <p style="font-size:17px;text-align: justify;"><b>(a)</b> Health
                                                    Committee</p>
                                                <p style="font-size:17px;text-align: justify;"><b>(b)</b> Environment
                                                    Committee</p>
                                                <p style="font-size:17px;text-align: justify;"><b>(c)</b> Committee for
                                                    Tertiary Education and Research</p>
                                                <p style="font-size:17px;text-align: justify;"><b>(d)</b> Committee for
                                                    Secondary Education and Olympiads</p>
                                                <p style="font-size:17px;text-align: justify;">CBS’s mission and vision
                                                    are to support and promote the science of Biology in Cyprus.</p>
                                                <p style="font-size:17px;text-align: justify;">Specifically, it aims at
                                                    the following:</p>


                                                <ul style="font-size:16px;">

                                                    <li> Support of research, teaching and learning in all aspects of
                                                    </li>

                                                    <li> The science of Biology in Cyprus, like
                                                    </li>

                                                    <li> Creation and support of professional contacts and information
                                                        exchanges, including the organisation of scientific meetings,
                                                        workshops and seminars, between biologists in Cyprus as well as
                                                        biologists outside Cyprus
                                                    </li>

                                                    <li> Provision for assistance and support as well as rewards for
                                                        Cypriot scientists, lecturers and students in Cyprus and Cypriot
                                                        biologists abroad
                                                    </li>

                                                    <li> Broadening the interaction and networking between scientific
                                                        events in Cyprus in all aspects of biology and their application
                                                        in health, medicine, environment and industry
                                                    </li>

                                                    <li>Participation of CBS in economic and social aspects relating to
                                                        biological sciences.
                                                    </li>

                                                </ul>
                                                <br>
                                                <a href='https://bentham.manuscriptpoint.com/' class='btn btn-primary' target='_blank'>Submit Manuscript</a>";
                                                <br>
                                                <br>
                                            </td>
                                        </tr>

                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="seven" class="tabcontent" style="padding:20px;">
                    <div class="modal-header">
                        <h4 class="modal-title">Partner With Us</h4>
                    </div>
                    <div class="modal-body">
                        <p>We invite your institution and scientific society to partner with Bentham Science to avail a
                            host of benefits. Please fill the following form to let us contact your institution /
                            society for collaboration.</p>
                        <form enctype="multipart/form-data" method="post" action="https://benthamscience.com/../../scripts/email-script-contributions-societies-members.php" id="rlForm" name="rlForm">
                            <table width="100%" style="border-spacing:0 15px;">
                                <tr>
                                    <td><label for="title">Title: <span class="form-required" title="This field is required.">*</span></label></td>
                                    <td>
                                        <input name="title" type="hidden" id="title" value="Mr."><select name="salutation" id="salutation" onChange="document.rlForm.title.value = this.value">
                                            <option value="Mr.">Mr. </option>
                                            <option value="Mrs.">Mrs.</option>
                                            <option value="Ms">Ms</option>
                                            <option value="Prof.">Prof.</option>
                                            <option value="Dr.">Dr.</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="edit-first-name">Full Name: <span class="form-required" title="This field is required.">*</span></label></td>
                                    <td><input type="text" maxlength="50" name="full_name" id="edit-first-name" size="60" value="" class="form-text required form-control" required="required"></td>
                                </tr>
                                <tr>
                                    <td><label for="edit-email">Email Address (Institutional): <span class="form-required" title="This field is required.">*</span></label>
                                    </td>
                                    <td><input type="text" maxlength="100" name="email" id="email" size="60" value="" class="form-text required form-control" required="required"></td>
                                </tr>
                                <tr>
                                    <td><label for="edit-email">Name of Institution / Organization / Society: <span class="form-required" title="This field is required.">*</span></label>
                                    </td>
                                    <td><input type="text" maxlength="100" name="institution" id="institution" size="60" value="" class="form-text required form-control" required="required"></td>
                                </tr>
                                <tr>
                                    <td><label for="edit-email">Website of Institution / Organization / Society: <span class="form-required" title="This field is required.">*</span></label>
                                    </td>
                                    <td><input type="text" maxlength="100" name="web_institution" id="web_institution" size="60" value="" class="form-text required form-control" required="required"></td>
                                </tr>
                                <tr>
                                    <td><label for="edit-email">Field of Expertise: <span class="form-required" title="This field is required.">*</span></label></td>
                                    <td><input type="text" maxlength="100" name="field_expertise" id="field_expertise" size="60" value="" class="form-text required form-control" required="required"></td>
                                </tr>
                                <tr>
                                    <td><label for="edit-email">Name of Librarian / Head of Institution or Society:
                                            <span class="form-required" title="This field is required.">*</span></label>
                                    </td>
                                    <td><input type="text" maxlength="100" name="name_librarian" id="name_librarian" size="60" value="" class="form-text required form-control" required="required"></td>
                                </tr>
                                <tr>
                                    <td><label for="edit-email">Email Address of Librarian / Head of Institution or
                                            Society: <span class="form-required" title="This field is required.">*</span></label></td>
                                    <td><input type="text" maxlength="100" name="email_librarian" id="email_librarian" size="60" value="" class="form-text required form-control" required="required"></td>
                                </tr>
                                <tr>
                                    <td><label for="edit-city">City: <span class="form-required" title="This field is required.">*</span></label></td>
                                    <td><input type="text" maxlength="50" name="city" id="city" size="60" value="" class="form-text required form-control" required="required"></td>
                                </tr>
                                <tr>
                                    <td><label for="edit-country">Country: <span class="form-required" title="This field is required.">*</span></label></td>
                                    <td><select name="country" class="form-select required form-control select2" id="edit-country" required="required">
                                            <option title="Select country" value="0">Select country</option>
                                            <option title="AFGHANISTAN" value="AFGHANISTAN">AFGHANISTAN</option>
                                            <option title="ALBANIA" value="ALBANIA">ALBANIA</option>
                                            <option title="ALGERIA" value="ALGERIA">ALGERIA</option>
                                            <option title="AMERICAN SAMOA" value="AMERICAN SAMOA">AMERICAN SAMOA
                                            </option>
                                            <option title="ANDORRA" value="ANDORRA">ANDORRA</option>
                                            <option title="ANGOLA" value="ANGOLA">ANGOLA</option>
                                            <option title="ANGUILLA" value="ANGUILLA">ANGUILLA</option>
                                            <option title="ANTARCTICA" value="ANTARCTICA">ANTARCTICA</option>
                                            <option title="ANTIGUA AND BARBUDA" value="ANTIGUA AND BARBUDA">ANTIGUA AND
                                                BARBUDA</option>
                                            <option title="ARGENTINA" value="ARGENTINA">ARGENTINA</option>
                                            <option title="ARMENIA" value="ARMENIA">ARMENIA</option>
                                            <option title="ARUBA" value="ARUBA">ARUBA</option>
                                            <option title="ASCENSION" value="ASCENSION">ASCENSION</option>
                                            <option title="AUSTRALIA" value="AUSTRALIA">AUSTRALIA</option>
                                            <option title="AUSTRIA" value="AUSTRIA">AUSTRIA</option>
                                            <option title="AZERBAIJAN" value="AZERBAIJAN">AZERBAIJAN</option>
                                            <option title="BAHAMAS" value="BAHAMAS">BAHAMAS</option>
                                            <option title="BAHRAIN" value="BAHRAIN">BAHRAIN</option>
                                            <option title="BANGLADESH" value="BANGLADESH">BANGLADESH</option>
                                            <option title="BARBADOS" value="BARBADOS">BARBADOS</option>
                                            <option title="BELARUS" value="BELARUS">BELARUS</option>
                                            <option title="BELGIUM" value="BELGIUM">BELGIUM</option>
                                            <option title="BELIZE" value="BELIZE">BELIZE</option>
                                            <option title="BENIN" value="BENIN">BENIN</option>
                                            <option title="BERMUDA" value="BERMUDA">BERMUDA</option>
                                            <option title="BHUTAN" value="BHUTAN">BHUTAN</option>
                                            <option title="BOLIVIA" value="BOLIVIA">BOLIVIA</option>
                                            <option title="BOSNIA AND HERZEGOVINA" value="BOSNIA AND HERZEGOVINA">BOSNIA
                                                AND HERZEGOVINA</option>
                                            <option title="BOTSWANA" value="BOTSWANA">BOTSWANA</option>
                                            <option title="BOUVET ISLAND" value="BOUVET ISLAND">BOUVET ISLAND</option>
                                            <option title="BRAZIL" value="BRAZIL">BRAZIL</option>
                                            <option title="BRITISH INDIAN OCEAN TERRITORY" value="BRITISH INDIAN OCEAN TERRITORY">BRITISH INDIAN OCEAN TERRITORY
                                            </option>
                                            <option title="BRUNEI DARUSSALAM" value="BRUNEI DARUSSALAM">BRUNEI
                                                DARUSSALAM</option>
                                            <option title="BULGARIA" value="BULGARIA">BULGARIA</option>
                                            <option title="BURKINA FASO" value="BURKINA FASO">BURKINA FASO</option>
                                            <option title="BURUNDI" value="BURUNDI">BURUNDI</option>
                                            <option title="CAMBODIA" value="CAMBODIA">CAMBODIA</option>
                                            <option title="CAMEROON" value="CAMEROON">CAMEROON</option>
                                            <option title="CANADA" value="CANADA">CANADA</option>
                                            <option title="CAPE VERDE" value="CAPE VERDE">CAPE VERDE</option>
                                            <option title="CAYMAN ISLANDS" value="CAYMAN ISLANDS">CAYMAN ISLANDS
                                            </option>
                                            <option title="CENTRAL AFRICAN REPUBLIC" value="CENTRAL AFRICAN REPUBLIC">
                                                CENTRAL AFRICAN REPUBLIC</option>
                                            <option title="CHAD" value="CHAD">CHAD</option>
                                            <option title="CHILE" value="CHILE">CHILE</option>
                                            <option title="CHINA" value="CHINA">CHINA</option>
                                            <option title="CHRISTMAS ISLAND" value="CHRISTMAS ISLAND">CHRISTMAS ISLAND
                                            </option>
                                            <option title="COCOS (KEELING) ISLANDS" value="COCOS (KEELING) ISLANDS">
                                                COCOS (KEELING) ISLANDS</option>
                                            <option title="COLOMBIA" value="COLOMBIA">COLOMBIA</option>
                                            <option title="COMOROS" value="COMOROS">COMOROS</option>
                                            <option title="CONGO" value="CONGO">CONGO</option>
                                            <option title="CONGO, THE DEMOCRATIC REPUBLIC OF THE" value="CONGO, THE DEMOCRATIC REPUBLIC OF THE">CONGO, THE DEMOCRATIC
                                                REPUBLIC OF THE</option>
                                            <option title="COOK ISLANDS" value="COOK ISLANDS">COOK ISLANDS</option>
                                            <option title="COSTA RICA" value="COSTA RICA">COSTA RICA</option>
                                            <option title="COTE D IVOIRE" value="COTE D IVOIRE">COTE D IVOIRE</option>
                                            <option title="CROATIA" value="CROATIA">CROATIA</option>
                                            <option title="CUBA" value="CUBA">CUBA</option>
                                            <option title="CYPRUS" value="CYPRUS">CYPRUS</option>
                                            <option title="CZECH REPUBLIC" value="CZECH REPUBLIC">CZECH REPUBLIC
                                            </option>
                                            <option title="DENMARK" value="DENMARK">DENMARK</option>
                                            <option title="DJIBOUTI" value="DJIBOUTI">DJIBOUTI</option>
                                            <option title="DOMINICA" value="DOMINICA">DOMINICA</option>
                                            <option title="DOMINICAN REPUBLIC" value="DOMINICAN REPUBLIC">DOMINICAN
                                                REPUBLIC</option>
                                            <option title="ECUADOR" value="ECUADOR">ECUADOR</option>
                                            <option title="EGYPT" value="EGYPT">EGYPT</option>
                                            <option title="EL SALVADOR" value="EL SALVADOR">EL SALVADOR</option>
                                            <option title="EQUATORIAL GUINEA" value="EQUATORIAL GUINEA">EQUATORIAL
                                                GUINEA</option>
                                            <option title="ERITREA" value="ERITREA">ERITREA</option>
                                            <option title="ESTONIA" value="ESTONIA">ESTONIA</option>
                                            <option title="ETHIOPIA" value="ETHIOPIA">ETHIOPIA</option>
                                            <option title="FALKLAND ISLANDS (MALVINAS)" value="FALKLAND ISLANDS (MALVINAS)">FALKLAND ISLANDS (MALVINAS)</option>
                                            <option title="FAROE ISLANDS" value="FAROE ISLANDS">FAROE ISLANDS</option>
                                            <option title="FIJI" value="FIJI">FIJI</option>
                                            <option title="FINLAND" value="FINLAND">FINLAND</option>
                                            <option title="FRANCE" value="FRANCE">FRANCE</option>
                                            <option title="FRENCH GUIANA" value="FRENCH GUIANA">FRENCH GUIANA</option>
                                            <option title="FRENCH POLYNESIA" value="FRENCH POLYNESIA">FRENCH POLYNESIA
                                            </option>
                                            <option title="FRENCH SOUTHERN TERRITORIES" value="FRENCH SOUTHERN TERRITORIES">FRENCH SOUTHERN TERRITORIES</option>
                                            <option title="GABON" value="GABON">GABON</option>
                                            <option title="GAMBIA" value="GAMBIA">GAMBIA</option>
                                            <option title="GEORGIA" value="GEORGIA">GEORGIA</option>
                                            <option title="GERMANY" value="GERMANY">GERMANY</option>
                                            <option title="GHANA" value="GHANA">GHANA</option>
                                            <option title="GIBRALTAR" value="GIBRALTAR">GIBRALTAR</option>
                                            <option title="GREECE" value="GREECE">GREECE</option>
                                            <option title="GREENLAND" value="GREENLAND">GREENLAND</option>
                                            <option title="GRENADA" value="GRENADA">GRENADA</option>
                                            <option title="GUADELOUPE" value="GUADELOUPE">GUADELOUPE</option>
                                            <option title="GUAM" value="GUAM">GUAM</option>
                                            <option title="GUATEMALA" value="GUATEMALA">GUATEMALA</option>
                                            <option title="GUINEA" value="GUINEA">GUINEA</option>
                                            <option title="GUINEA-BISSAU" value="GUINEA-BISSAU">GUINEA-BISSAU</option>
                                            <option title="GUYANA" value="GUYANA">GUYANA</option>
                                            <option title="HAITI" value="HAITI">HAITI</option>
                                            <option title="HEARD ISLAND AND MCDONALD ISLANDS" value="HEARD ISLAND AND MCDONALD ISLANDS">HEARD ISLAND AND MCDONALD
                                                ISLANDS</option>
                                            <option title="HOLY SEE (VATICAN CITY STATE)" value="HOLY SEE (VATICAN CITY STATE)">HOLY SEE (VATICAN CITY STATE)
                                            </option>
                                            <option title="HONDURAS" value="HONDURAS">HONDURAS</option>
                                            <option title="HONG KONG" value="HONG KONG">HONG KONG</option>
                                            <option title="HUNGARY" value="HUNGARY">HUNGARY</option>
                                            <option title="ICELAND" value="ICELAND">ICELAND</option>
                                            <option title="INDIA" value="INDIA">INDIA</option>
                                            <option title="Indiana" value="Indiana">Indiana</option>
                                            <option title="INDONESIA" value="INDONESIA">INDONESIA</option>
                                            <option title="IRAN" value="IRAN">IRAN</option>
                                            <option title="IRAQ" value="IRAQ">IRAQ</option>
                                            <option title="IRELAND" value="IRELAND">IRELAND</option>
                                            <option title="ISRAEL" value="ISRAEL">ISRAEL</option>
                                            <option title="ITALY" value="ITALY">ITALY</option>
                                            <option title="JAMAICA" value="JAMAICA">JAMAICA</option>
                                            <option title="JAPAN" value="JAPAN">JAPAN</option>
                                            <option title="JORDAN" value="JORDAN">JORDAN</option>
                                            <option title="KAZAKHSTAN" value="KAZAKHSTAN">KAZAKHSTAN</option>
                                            <option title="KENYA" value="KENYA">KENYA</option>
                                            <option title="KIRIBATI" value="KIRIBATI">KIRIBATI</option>
                                            <option title="KOREA" value="KOREA">KOREA</option>
                                            <option title="KOREA, DEMOCRATIC PEOPLES REPUBLIC OF" value="KOREA, DEMOCRATIC PEOPLES REPUBLIC OF">KOREA, DEMOCRATIC PEOPLES
                                                REPUBLIC OF</option>
                                            <option title="Kosova" value="Kosova">Kosova</option>
                                            <option title="KUWAIT" value="KUWAIT">KUWAIT</option>
                                            <option title="KYRGYZSTAN" value="KYRGYZSTAN">KYRGYZSTAN</option>
                                            <option title="LAO PEOPLE'S DEMOCRATIC REPUBLIC" value="LAO PEOPLE'S DEMOCRATIC REPUBLIC">LAO PEOPLE'S DEMOCRATIC
                                                REPUBLIC</option>
                                            <option title="LATVIA" value="LATVIA">LATVIA</option>
                                            <option title="LEBANON" value="LEBANON">LEBANON</option>
                                            <option title="LESOTHO" value="LESOTHO">LESOTHO</option>
                                            <option title="LIBERIA" value="LIBERIA">LIBERIA</option>
                                            <option title="LIBYA" value="LIBYA">LIBYA</option>
                                            <option title="LIECHTENSTEIN" value="LIECHTENSTEIN">LIECHTENSTEIN</option>
                                            <option title="LITHUANIA" value="LITHUANIA">LITHUANIA</option>
                                            <option title="LUXEMBOURG" value="LUXEMBOURG">LUXEMBOURG</option>
                                            <option title="MACAO" value="MACAO">MACAO</option>
                                            <option title="MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF" value="MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF">MACEDONIA, THE FORMER
                                                YUGOSLAV REPUBLIC OF</option>
                                            <option title="MADAGASCAR" value="MADAGASCAR">MADAGASCAR</option>
                                            <option title="MALAWI" value="MALAWI">MALAWI</option>
                                            <option title="MALAYSIA" value="MALAYSIA">MALAYSIA</option>
                                            <option title="MALDIVES" value="MALDIVES">MALDIVES</option>
                                            <option title="MALI" value="MALI">MALI</option>
                                            <option title="MALTA" value="MALTA">MALTA</option>
                                            <option title="MARSHALL ISLANDS" value="MARSHALL ISLANDS">MARSHALL ISLANDS
                                            </option>
                                            <option title="MARTINIQUE" value="MARTINIQUE">MARTINIQUE</option>
                                            <option title="MAURITANIA" value="MAURITANIA">MAURITANIA</option>
                                            <option title="MAURITIUS" value="MAURITIUS">MAURITIUS</option>
                                            <option title="MAYOTTE" value="MAYOTTE">MAYOTTE</option>
                                            <option title="MEXICO" value="MEXICO">MEXICO</option>
                                            <option title="MICRONESIA, FEDERATED STATES OF" value="MICRONESIA, FEDERATED STATES OF">MICRONESIA, FEDERATED STATES OF
                                            </option>
                                            <option title="MOLDOVA, REPUBLIC OF" value="MOLDOVA, REPUBLIC OF">MOLDOVA,
                                                REPUBLIC OF</option>
                                            <option title="MONACO" value="MONACO">MONACO</option>
                                            <option title="MONGOLIA" value="MONGOLIA">MONGOLIA</option>
                                            <option title="MONTENEGRO" value="MONTENEGRO">MONTENEGRO</option>
                                            <option title="MONTSERRAT" value="MONTSERRAT">MONTSERRAT</option>
                                            <option title="MOROCCO" value="MOROCCO">MOROCCO</option>
                                            <option title="MOZAMBIQUE" value="MOZAMBIQUE">MOZAMBIQUE</option>
                                            <option title="MYANMAR" value="MYANMAR">MYANMAR</option>
                                            <option title="NAMIBIA" value="NAMIBIA">NAMIBIA</option>
                                            <option title="NAURU" value="NAURU">NAURU</option>
                                            <option title="NEPAL" value="NEPAL">NEPAL</option>
                                            <option title="NETHERLANDS" value="NETHERLANDS">NETHERLANDS</option>
                                            <option title="NETHERLANDS ANTILLES" value="NETHERLANDS ANTILLES">
                                                NETHERLANDS ANTILLES</option>
                                            <option title="NEW CALEDONIA" value="NEW CALEDONIA">NEW CALEDONIA</option>
                                            <option title="NEW ZEALAND" value="NEW ZEALAND">NEW ZEALAND</option>
                                            <option title="NICARAGUA" value="NICARAGUA">NICARAGUA</option>
                                            <option title="NIGER" value="NIGER">NIGER</option>
                                            <option title="NIGERIA" value="NIGERIA">NIGERIA</option>
                                            <option title="NIUE" value="NIUE">NIUE</option>
                                            <option title="NORFOLK ISLAND" value="NORFOLK ISLAND">NORFOLK ISLAND
                                            </option>
                                            <option title="NORTHERN MARIANA ISLANDS" value="NORTHERN MARIANA ISLANDS">
                                                NORTHERN MARIANA ISLANDS</option>
                                            <option title="NORWAY" value="NORWAY">NORWAY</option>
                                            <option title="OMAN" value="OMAN">OMAN</option>
                                            <option title="PAKISTAN" value="PAKISTAN">PAKISTAN</option>
                                            <option title="PALAU" value="PALAU">PALAU</option>
                                            <option title="PALESTINIAN TERRITORY, OCCUPIED" value="PALESTINIAN TERRITORY, OCCUPIED">PALESTINIAN TERRITORY, OCCUPIED
                                            </option>
                                            <option title="PANAMA" value="PANAMA">PANAMA</option>
                                            <option title="PAPUA NEW GUINEA" value="PAPUA NEW GUINEA">PAPUA NEW GUINEA
                                            </option>
                                            <option title="PARAGUAY" value="PARAGUAY">PARAGUAY</option>
                                            <option title="PERU" value="PERU">PERU</option>
                                            <option title="PHILIPPINES" value="PHILIPPINES">PHILIPPINES</option>
                                            <option title="PITCAIRN" value="PITCAIRN">PITCAIRN</option>
                                            <option title="POLAND" value="POLAND">POLAND</option>
                                            <option title="PORTUGAL" value="PORTUGAL">PORTUGAL</option>
                                            <option title="PUERTO RICO" value="PUERTO RICO">PUERTO RICO</option>
                                            <option title="QATAR" value="QATAR">QATAR</option>
                                            <option title="REUNION" value="REUNION">REUNION</option>
                                            <option title="ROMANIA" value="ROMANIA">ROMANIA</option>
                                            <option title="RUSSIAN FEDERATION" value="RUSSIAN FEDERATION">RUSSIAN
                                                FEDERATION</option>
                                            <option title="RWANDA" value="RWANDA">RWANDA</option>
                                            <option title="SAINT HELENA" value="SAINT HELENA">SAINT HELENA</option>
                                            <option title="SAINT KITTS AND NEVIS" value="SAINT KITTS AND NEVIS">SAINT
                                                KITTS AND NEVIS</option>
                                            <option title="SAINT LUCIA" value="SAINT LUCIA">SAINT LUCIA</option>
                                            <option title="SAINT PIERRE AND MIQUELON" value="SAINT PIERRE AND MIQUELON">
                                                SAINT PIERRE AND MIQUELON</option>
                                            <option title="SAINT VINCENT AND THE GRENADINES" value="SAINT VINCENT AND THE GRENADINES">SAINT VINCENT AND THE
                                                GRENADINES</option>
                                            <option title="SAMOA" value="SAMOA">SAMOA</option>
                                            <option title="SAN MARINO" value="SAN MARINO">SAN MARINO</option>
                                            <option title="SAO TOME AND PRINCIPE" value="SAO TOME AND PRINCIPE">SAO TOME
                                                AND PRINCIPE</option>
                                            <option title="SAUDI ARABIA" value="SAUDI ARABIA">SAUDI ARABIA</option>
                                            <option title="Scotland" value="Scotland">Scotland</option>
                                            <option title="SENEGAL" value="SENEGAL">SENEGAL</option>
                                            <option title="SERBIA" value="SERBIA">SERBIA</option>
                                            <option title="SEYCHELLES" value="SEYCHELLES">SEYCHELLES</option>
                                            <option title="SIERRA LEONE" value="SIERRA LEONE">SIERRA LEONE</option>
                                            <option title="SINGAPORE" value="SINGAPORE">SINGAPORE</option>
                                            <option title="SLOVAKIA" value="SLOVAKIA">SLOVAKIA</option>
                                            <option title="SLOVENIA" value="SLOVENIA">SLOVENIA</option>
                                            <option title="SOLOMON ISLANDS" value="SOLOMON ISLANDS">SOLOMON ISLANDS
                                            </option>
                                            <option title="SOMALIA" value="SOMALIA">SOMALIA</option>
                                            <option title="SOUTH AFRICA" value="SOUTH AFRICA">SOUTH AFRICA</option>
                                            <option title="SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS" value="SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS">SOUTH GEORGIA AND
                                                THE SOUTH SANDWICH ISLANDS</option>
                                            <option title="SOUTH KOREA" value="SOUTH KOREA">SOUTH KOREA</option>
                                            <option title="SPAIN" value="SPAIN">SPAIN</option>
                                            <option title="SRI LANKA" value="SRI LANKA">SRI LANKA</option>
                                            <option title="SUDAN" value="SUDAN">SUDAN</option>
                                            <option title="SURINAME" value="SURINAME">SURINAME</option>
                                            <option title="SVALBARD AND JAN MAYEN" value="SVALBARD AND JAN MAYEN">
                                                SVALBARD AND JAN MAYEN</option>
                                            <option title="SWAZILAND" value="SWAZILAND">SWAZILAND</option>
                                            <option title="SWEDEN" value="SWEDEN">SWEDEN</option>
                                            <option title="SWITZERLAND" value="SWITZERLAND">SWITZERLAND</option>
                                            <option title="SYRIAN ARAB REPUBLIC" value="SYRIAN ARAB REPUBLIC">SYRIAN
                                                ARAB REPUBLIC</option>
                                            <option title="TAIWAN" value="TAIWAN">TAIWAN</option>
                                            <option title="TAJIKISTAN" value="TAJIKISTAN">TAJIKISTAN</option>
                                            <option title="TANZANIA, UNITED REPUBLIC OF" value="TANZANIA, UNITED REPUBLIC OF">TANZANIA, UNITED REPUBLIC OF
                                            </option>
                                            <option title="THAILAND" value="THAILAND">THAILAND</option>
                                            <option title="TIMOR-LESTE" value="TIMOR-LESTE">TIMOR-LESTE</option>
                                            <option title="TOGO" value="TOGO">TOGO</option>
                                            <option title="TOKELAU" value="TOKELAU">TOKELAU</option>
                                            <option title="TONGA" value="TONGA">TONGA</option>
                                            <option title="TRINIDAD AND TOBAGO" value="TRINIDAD AND TOBAGO">TRINIDAD AND
                                                TOBAGO</option>
                                            <option title="TRISTA DA CUHNA" value="TRISTA DA CUHNA">TRISTA DA CUHNA
                                            </option>
                                            <option title="TUNISIA" value="TUNISIA">TUNISIA</option>
                                            <option title="TURKEY" value="TURKEY">TURKEY</option>
                                            <option title="TURKMENISTAN" value="TURKMENISTAN">TURKMENISTAN</option>
                                            <option title="TURKS AND CAICOS ISLANDS" value="TURKS AND CAICOS ISLANDS">
                                                TURKS AND CAICOS ISLANDS</option>
                                            <option title="TUVALU" value="TUVALU">TUVALU</option>
                                            <option title="UGANDA" value="UGANDA">UGANDA</option>
                                            <option title="UKRAINE" value="UKRAINE">UKRAINE</option>
                                            <option title="UNITED ARAB EMIRATES" value="UNITED ARAB EMIRATES">UNITED
                                                ARAB EMIRATES</option>
                                            <option title="UNITED KINGDOM" value="UNITED KINGDOM">UNITED KINGDOM
                                            </option>
                                            <option title="UNITED STATES" value="UNITED STATES">UNITED STATES</option>
                                            <option title="UNITED STATES MINOR OUTLYING ISLANDS" value="UNITED STATES MINOR OUTLYING ISLANDS">UNITED STATES MINOR
                                                OUTLYING ISLANDS</option>
                                            <option title="URUGUAY" value="URUGUAY">URUGUAY</option>
                                            <option title="UZBEKISTAN" value="UZBEKISTAN">UZBEKISTAN</option>
                                            <option title="VANUATU" value="VANUATU">VANUATU</option>
                                            <option title="VENEZUELA" value="VENEZUELA">VENEZUELA</option>
                                            <option title="VIETNAM" value="VIETNAM">VIETNAM</option>
                                            <option title="VIRGIN ISLANDS, BRITISH" value="VIRGIN ISLANDS, BRITISH">
                                                VIRGIN ISLANDS, BRITISH</option>
                                            <option title="VIRGIN ISLANDS, U.S." value="VIRGIN ISLANDS, U.S.">VIRGIN
                                                ISLANDS, U.S.</option>
                                            <option title="WALLIS AND FUTUNA" value="WALLIS AND FUTUNA">WALLIS AND
                                                FUTUNA</option>
                                            <option title="West Indies" value="West Indies">West Indies</option>
                                            <option title="WESTERN SAHARA" value="WESTERN SAHARA">WESTERN SAHARA
                                            </option>
                                            <option title="YEMEN" value="YEMEN">YEMEN</option>
                                            <option title="ZAMBIA" value="ZAMBIA">ZAMBIA</option>
                                            <option title="ZIMBABWE" value="ZIMBABWE">ZIMBABWE</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td><label for="org_name">Comments / Query: </label></td>
                                    <td><input type="text" maxlength="200" name="comment" id="comment" size="60" value="" class="form-text required form-control" required="required"></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <br><input type="Checkbox" name="librarian_check" id="librarian_check"> Bentham
                                        Science can contact the Librarian, Head of Institution or Society for
                                        collaboration.
                                    </td>
                                </tr>
                                <tr>
                                    <td><br></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <script src="https://www.google.com/recaptcha/api.js"></script>
                                        <div class="g-recaptcha" data-sitekey="6LfDYREUAAAAAIUtXoEpc3cnJthUyBvK-TbqXdEC"></div>
                                        <noscript>
                                            <div>
                                                <div style="width: 302px; height: 422px; position: relative;">
                                                    <div style="width: 302px; height: 422px; position: absolute;">
                                                        <iframe src="https://www.google.com/recaptcha/api/fallback?k=6LfDYREUAAAAAIUtXoEpc3cnJthUyBvK-TbqXdEC" frameborder="0" scrolling="no" style="width: 302px; height:422px; border-style: none;"></iframe>
                                                    </div>
                                                </div>
                                                <div style="width: 300px; height: 60px; border-style: none;                                                    bottom: 12px; left: 25px; margin: 0px; padding: 0px; right: 25px;                                                    background: #f9f9f9; border: 1px solid #c1c1c1; border-radius: 3px;">
                                                    <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid #c1c1c1;                                                           margin: 10px 25px; padding: 0px; resize: none;"></textarea>
                                                </div>
                                            </div>
                                        </noscript>
                                        <br><input type="hidden" name="reg_type" id="edit-reg-type" value="eabm"><button type="submit" name="attac" class="form-submit btn btn-sm btn-default">Submit</button>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12" style="border: solid; border-color: #CCC; border-width:thin; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px;box-shadow: 0px 2px 10px #cccccc; padding:5px;">
            <div style="float:left; padding:5px; width:48%;">Webmaster Contact: <a href="mailto:info@benthamscience.net">info@benthamscience.net</a>
            </div>
            <div align="right" style="float:left; padding:5px; width:50%;"><a href="terms-conditions.php">Copyright ©
                    2022 Bentham Science</a></div>
        </div>
    </div>
    <script>
        $(function() {
            $('div.product-chooser').not('.disabled').find('div.product-chooser-item').on('click', function() {
                $(this).parent().parent().find('div.product-chooser-item').removeClass('selected');
                $(this).addClass('selected');
                $(this).find('input[type="radio"]').prop("checked", true);

            });
        });
    </script>
    <script src="https://benthamscience.com/../../../../scripts/js/bootstrap.min.js"></script>
    <script language="Javascript" type="text/javascript" src="../googleanalytics.js"></script>
</body>

</html>
<script>
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>