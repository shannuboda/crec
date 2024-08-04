<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<?php
// Get the script name, which includes the path and file name
$scriptName = $_SERVER['SCRIPT_NAME'];

// Extract the file name from the script name
$fileName = basename($scriptName);

function isActive($pageName) {
    global $fileName;
    return $fileName === $pageName ? 'active' : '';
}
?>

<style>
.main-heading:hover,
.dropdown-toggle:hover,
.dropdown-menu li>a:hover {
    background: #ff5421 !important;
    color: white !important;
}

.banner-8 {
    min-height: 500px;
}

.d-none {
    display: none;
}

.float-right-2 {
    background: #710071;
    text-align: center;
    color: #fff;
    font-size: 18px;
    padding: 15px 0px;
}

.float-right-2 a {
    padding: 5px 0px;
}

@media (min-width: 770px) {
    .banner-8 {
        background: url(../image/banner-9.jpg) no-repeat;
        background-size: cover;
        background-position: center;
    }

    .float-right-2 {
        float: right;
        right: 5px;
        position: fixed;
        bottom: 80px;
        padding: 20px;
    }

    .drop-sub {
        display: none;
    }

    .drop-top:hover .drop-sub {
        display: inline-block !important;
        position: absolute;
        top: 35px;
        left: 25px;
        border-radius: 0 0 0 29px;
        background: #f9c926;
    }

    .drop-sub:hover {
        display: inline-block !important;
        position: absolute;
        top: 35px;
        left: 25px;
        border-radius: 0 0 0 29px;
        background: #f9c926;
    }

    .drop-sub li {
        display: block;
        padding: 5px;
    }
}

@media (max-width: 770px) {
    .banner-8 {
        background: url(../image/banner-9-m.jpg) no-repeat;
        background-size: cover;
        background-position: center;
    }

    .float-right-2 {
        position: fixed;
        bottom: 70px !important;
        text-align: center;
        width: 100%;
    }
}

ol>li {
    margin-bottom: 0.50rem;
}

.main-top-header {
    width: 100% !important;
}

@media (max-width: 1200px) {
    .navbar-header {
        float: none;
        display: flex !important;
        background: orange
    }
    .logo{
        height: 6rem;
    width: inherit;
    margin-left: -4rem;
    }
    #myNavbar{
        float:inline-start!important;
        width: -webkit-fill-available!important;
    }
}


</style>

<div class="container-fluid topbar">

</div>
<div class="container main-top-header">
    <div class="col-md-12 col-xs-9 logo-section">
        <div class="col-md-3 col-xs-9" style="z-index:9;">
            <a href="index.php">
                <img src="./image/CREC-Logo2.jpg" alt="Chadalawada Ramanamma Engineering College, Tirupathi" class="logo" title="" />
            </a>

        </div>

        <span class="top-bar-menu">
            <ul>
                <li style="padding-left:15px;"></li>
                <li class="drop-top"><a href="#" target="_blank">Admissions</a>
                    <ul class="drop-sub">
                        <li><a href="https://www.rajalakshmi.org/2024/organic" target="_blank">UG Admissions</a></li>
                        <li><a href="https://www.rajalakshmi.org/pg-admissions-2023/" target="_blank">PG Admissions</a>
                        </li>
                    </ul></a>
                </li> | <li class="drop-top"><a href="#" target="_blank">Fee Link</a>
                    <ul class="drop-sub">
                        <li><a href="https://www.rajalakshmi.org/onlinefeepayment.php" target="_blank">College Fee</a>
                        </li>
                        <li><a href="https://eazypay.icicibank.com/eazypayLink?P1=ZNP2cDbiITjEN7JeCPQX2Q=="
                                target="_blank">Exam Fee</a></li>
                    </ul></a>
                </li> | <li><a href="contact-us.php">Contact Us</a></li> | <li><a
                        href="https://www.rajalakshmi.org/downloads/TNCOGN13234-RajalakshmiEngineeringCollege-AQAR-17-18.pdf"
                        target="_blank">AQAR</a></li>
            </ul>
        </span>
    </div>
    <div class="col-md-12" style="border-top:1px solid #CCCCCC;"></div>
    <!--<li><a href="downloads/NIRF_2021_WEBSITE_UPLOAD_REC.pdf" target="_blank">NIRF</a> | -->
    <!--
<li><a href="https://online.anyflip.com/swuz/fbxy" target="_blank">Revista'19</a></li></ul>
-->

    <!--
<li><a href="https://www.rajalakshmi.org/engineering-admissions-2019/?utm_source=Website&utm_medium=Website&utm_campaign=Website&utm_term=Website&utm_content=Website" target="_blank">Admissions</a><li> | <li><a href="downloads/NIRF_2019_WEBSITE_UPLOAD_REC.pdf" target="_blank">NIRF</a> | <li><a href="contact-us.php">Contact Us</a></li> | <li><a href="https://www.rajalakshmi.org/graduation-day-2019.php" target="_blank">Graduation Day</a></li></ul> </span> </div><div class="col-md-12" style="border-top:1px solid #CCCCCC;"></div>
-->

    <!--
<li><a href="recinnews.php">In the Media</a>
-->
    <div class="col-md-12 no-padding header-im-design">

        <nav class="navbar">
            <style>
            .customdesign {
                margin-left: 38px;
                padding: 0px;
            }

            .customdesign a {
                text-decoration: none;
                color: #333;
            }

            .customdesign a:hover {
                text-decoration: none;
                color: #333 !important;
                background-color: #fff !important;
            }

            #myNavbar {
                background: #f5b800;
                display: flex;
                align-items: center;

            }

            @media (max-width: 769px) {
                .logo-section img.logo {
                    width: 148%;
                }
            }
            </style>

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span
                        class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="dropdown <?php echo isActive('profile-message.php'); ?>">
                        <a class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"
                            href="http://www.rajalakshmi.org/#">About </a>
                        <ul class="dropdown-menu">
                            <li><a href="profile-message.php#correspondent">Correspondent's message</a></li>
                            <li><a href="profile-message.php#principal">Principal</a></li>
                            <li><a href="profile-message.php#college">About the college</a></li>
                            <li><a href="profile-message.php#tab-accreditations">About the Trust</a></li>
                            <li><a href="profile-message.php#governing">Governing Body</a></li>
                            <li><a href="profile-message.php#academic_council">Academic Council</a></li>
                            <li><a href="profile-message.php#disclosure">Board of Studies</a></li>
                            <!--
            <li><a href="http://www.rajalakshmi.org/profile-statutory.php">Statutory Bodies and Committees</a></li>
            <li><a href="http://www.rajalakshmi.org/profile-nonstatutory.php">Non Statutory Bodies and Committees</a></li>
            -->
                        </ul>
                    </li>


                    <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                            href="http://www.rajalakshmi.org/#">Department </a>
                        <ul role="menu" class="dropdown-menu">
                            <li><a href="dept-civil-intro.php">Civil Engineering</a></li>


                            <li><a href="dept-cse-intro.php">Computer Science &amp; Engineering</a>

                            </li>


                            <li><a href="dept-eee-intro.php">Electrical &amp; Electronics Engineering</a></li>
                            <li><a href="dept-ece-intro.php">Electronics &amp; Communication Engineering</a></li>
                            <li><a href="dept-mechanical-intro.php">Mechanical Engineering</a></li>
                            <li><a href="dept-humanity-sciences-intro.php">Humanities &amp; Sciences</a></li>
                            <li><a href="dept-mba-intro.php">Management Studies</a></li>
                            <li><a href="dept-mca-intro.php">MCA (CAD) </a></li>
                            <li><a href="dept-polytechnic-intro.php">Polytechnic Course</a></li>


                        </ul>
                    </li>
                    <li class="dropdown <?php echo isActive('admission-courses.php'); ?>">
                        <a class="dropdown-toggle" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"
                            href="#">Admissions</a>
                        <ul class="dropdown-menu">

                            <li><a href="./downloads/admission/applicationform.pdf" target="_blank">Application
                                    Forms</a></li>
                        </ul>
                    </li>
                    <li class="dropdown main-heading <?php echo isActive('coe.php'); ?>"> <a class="dropdown-toggle"
                            href="coe.php">COE</a></li>
                    <li class="dropdown <?php echo isActive('library.php'); ?>"> <a class="dropdown-toggle"
                            href="library.php">Library</a></li>
                    <li class="dropdown <?php echo isActive('placement.php'); ?>"><a class="dropdown-toggle"
                            class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"
                            href="http://www.rajalakshmi.org/#">Placements</a>
                        <ul class="dropdown-menu">
                            <li><a href="placement.php#placement-cell">Placement Cell</a></li>
                            <li><a href="placement.php#placement-training-activities">Placement Training/ Activities</a>
                            </li>
                            <li><a href="placement.php#placement-achievements">Placement Achievements</a></li>
                            <li><a href="placement.php#recruiting-companies">Recruiting Companies</a></li>
                        </ul>
                    </li>
                    <li class="dropdown <?php echo isActive('research.php'); ?>"><a class="dropdown-toggle"
                            class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"
                            href="http://www.rajalakshmi.org/#">Research</a>
                        <ul class="dropdown-menu">
                            <li><a href="research.php#research-centre">Research Centre</a></li>
                            <li><a href="research.php#research-objectives">Research Objectives</a></li>
                        </ul>
                    </li>

                    <li class="dropdown <?php echo isActive('iqac-coordinator.php'); ?>"><a class="dropdown-toggle"
                            class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"
                            href="http://www.rajalakshmi.org/#">IQAC</a>
                        <ul class="dropdown-menu">
                            <li><a href="iqac-coordinator.php#iqac-intro">Coordinator's Message</a></li>
                            <li><a href="iqac-members.php#members">Members</a></li>
                            <li><a href="iqac-members.php#benifits">Benifits</a></li>

                        </ul>
                    </li>

                    <li class="dropdown <?php echo isActive('facilities-admin.php'); ?>"><a class="dropdown-toggle"
                            class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"
                            href="http://www.rajalakshmi.org/#">Facilities</a>
                        <ul class="dropdown-menu">
                            <li><a href="facilities-admin.php#facilities">Hospital</a></li>
                            <li><a href="facilities-admin.php#library">Library</a></li>
                            <li><a href="facilities-admin.php#canteen">Sports</a></li>
                            <li><a href="facilities-admin.php#hostel">Hostel</a></li>
                            <li><a href="facilities-admin.php#transport">Transportation</a></li>
                            <li><a href="facilities-admin.php#it-infrastructure">Anti Ragging</a></li>

                        </ul>

                    </li>

                    <li class="dropdown <?php echo isActive('icc.php'); ?>"> <a class="dropdown-toggle"
                            href="icc.php">Institution Videos</a></li>
                    <li class="dropdown <?php echo isActive('nisp.php'); ?>"> <a class="dropdown-toggle"
                            href="nisp.php">NIRF</a></li>

                    <li class="dropdown <?php echo isActive('naac.php'); ?>">
                        <a class="dropdown-toggle" href="naac.php">NAAC</a>
                    </li>

                    <li class="dropdown <?php echo isActive('feedback.php'); ?>">
                        <a class="dropdown-toggle" href="#">Feedback Cell</a>
                        <ul class="dropdown-menu">
                            <li><a href="https://www.aicte-india.org/feedback/faculty.php" target="_blank">AICTE Faculty
                                    Feedback</a></li>
                            <li><a href="https://www.aicte-india.org/feedback/students.php" target="_blank">AICTE
                                    Student Feedback</a></li>

                        </ul>
                    </li>

                    <li class="dropdown <?php echo isActive(''); ?>">
                        <a class="dropdown-toggle"
                            href="https://docs.google.com/forms/d/e/1FAIpQLSfu-KANyMVzrVmKP2x9uHH4vlpB2WOsvSXc1umO3Yd0i06N-A/viewform"
                            target="_blank">Grevience Cell</a>
                    </li>


                </ul>
            </div>
        </nav>
    </div>
</div>
<script type="text/javascript">
/* $("#myModal").modal("show"); */
</script>