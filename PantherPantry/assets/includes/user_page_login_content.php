<?php
/**
 * Created by PhpStorm.
 * User: Ashley Neal and Hansan Hung
 * Date: 12/6/2019
 */
?>

<main id="main">
    <!--SECONDARY HEADER-->
    <header id="secondary-header" aria-label="Page title">
        <div class="row">
            <div id="page-title">
                <a href="index.php"><h2>Food Pantry Mailing List</h2></a>
            </div><!--#page-title-->
        </div><!--end .row-->
    </header>

    <!--CONTENT-->
    <div id="content" aria-label="Page content">
        <div class="row">
            <div class="small-12 medium-8 columns">
                <nav id="breadcrumbs" aria-label="Breadcrumbs"><a href="https://www.pcc.edu/">PCC</a> / <a href="https://www.pcc.edu/student-leadership/">Student Leadership Programs</a> / <a href="https://www.pcc.edu/student-leadership/services/">Services</a> / <a href="index.php">Food Pantry Mailing List</a> /</nav>	<a name="pagecontent" id="pagecontent"></a>

                <h3>Panther Pantry Login</h3>
                <h5>Please Sign In</h5>

                <div class="shadow-lg">
                </div>
                <form class="form-horizontal" role="form" action="assets/actions/do_login.php" method="post">
                    <table>
                        <tr>
                            <td>
                                <label>Email Address:</label>
                            </td>
                            <td>
                                <input id="email" type="text" class="form-control" name="mail" placeholder="Email">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Password:</label>
                            </td>
                            <td>
                                <input id="password" type="password" class="form-control" name="pwd" placeholder="Please Enter Password">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="index.php" id="signlink2" style=" cursor: pointer; ">Click Here to Sign Up</a>
                            </td>
                            <td>
                                <div style=" font-size:85%">
                                    <button type="submit" class="btn btn-primary" name="login-submit" style=" margin-bottom:1em; ">Submit</button>
                                </div>
                            </td>
                        </tr>
                </form>
            </div>
            </div>
                </table>

    </div><!--end content-->

    <!--SIDEBAR-->
    <div id="sidenav" class="small-12 medium-4 columns">

        <!-- BEGIN WP PAGE SIDEBAR -->

        <div id="snav" role="navigation" aria-label="Sub-page sidebar navigation"><h3><a href="https://www.pcc.edu/student-leadership/services/" title="Services">Services</a></h3><ul class="side-nav"><li><a href="https://www.pcc.edu/student-leadership/services/advertising/" title="Advertising">Advertising</a></li><li><a href="https://www.pcc.edu/student-leadership/services/bike-rentals/" title="Bike Rentals">Bike Rentals</a></li><li><a href="https://www.pcc.edu/student-leadership/services/free-resources/" class="current" title="Free Resources">Free Resources</a></li>
                <li style="background-color: #f5f5f5; font-family: open_sansregular,Helvetica,Arial,sans-serif; font-size: .9285714286em;"><a href="#" class="current"><span style="padding-left: 20px">Food Pantry Mailing List</span></a></li>


                <li><a href="https://www.pcc.edu/student-leadership/services/grants/" title="Grants">Grants</a></li><li><a href="https://www.pcc.edu/student-leadership/services/panther-picks/" title="Panther Picks">Panther Picks</a></li><li><a href="https://www.pcc.edu/student-leadership/services/voter-registration/" title="Voter registration">Voter registration</a></li></ul></div>
        <!-- callouts -->


        <!-- more snav -->
    </div> <!--#snav-->

    <!-- END WP PAGE -->

    <!-- BEGIN WP FOOTER -->

    </div><!--end .row-->
    </div><!--end #content-->
</main><!--end main-->
