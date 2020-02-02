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

                <h3>Sign up to Receive Notifications from the Food Pantry</h3>
                <br>
                <p>Fill out the following form in order to receive notifications about pantry news and activities and about when food is available for pickup.</p>
                <h5>Notification Form</h5>

                    <div class="shadow-lg">
                        <form class="form-horizontal" role="form" style="margin:2em;" action="assets/actions/do_create_user.php" method="post">
                            <table>
                                <tr>
                                    <td>
                                        <label>*Student First Name:</label>
                                    </td>
                                    <td>
                                        <input type="text"  class="form-control" name="name" placeholder="First Name">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>*Student Last Name:</label>
                                    </td>
                                    <td>
                                        <input type="text"  class="form-control" name="lname" placeholder="Last Name">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>*PCC Email Address:</label>
                                    </td>
                                    <td>
                                        <input type="text"  class="form-control" name="mail" placeholder="Email Address">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>*Password:</label>
                                        <p>Must contain 1 upper case, 1 lower case, 1 number, min 8 characters.</p>
                                    </td>
                                    <td>
                                        <input type="password"  class="form-control" name="pwd" placeholder="Password">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>*Confirm Password:</label>
                                    </td>
                                    <td>
                                        <input  type="password"  class="form-control" name="pwd-repeat" placeholder="Confirm Password">
                                    </td>
                                </tr>

                                <tr><td colspan="2"> <h5>Choose Which Campuses You Would Like Notifications From.</h5></td></tr>

                                    <tr>
                                        <td>
                                            <label for="pcc_cas">Cascade Campus</label>
                                        </td>
                                        <td><input type="checkbox" id="pcc_cas" name="pcc_cas" checked></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="pcc_rock">Rock Creek Campus</label>
                                        </td>
                                        <td><input type="checkbox" id="pcc_rock" name="pcc_rock" checked></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="pcc_south">Southeast Campus</label>
                                        </td>
                                        <td><input type="checkbox" id="pcc_south" name="pcc_south" checked></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="pcc_syl">Sylvania Campus</label>
                                        </td>
                                        <td><input type="checkbox" id="pcc_syl" name="pcc_syl" checked></td>
                                    </tr>
                                <tr>
                                    <td>
                                        <button type="submit" id="btn-signup"  name="signup-submit" class="btn btn-primary">*Register</button>
                                    </td>
                                    <td>
                                        <a href="login.php">Click Here to Login
                                            <img style="margin-left: 90%; height: 20px; width: 20px;" src="assets/images/settings.png"></a>
                                        </p>
                                    </td>
                                </tr>

                        </form>
                        </table>
                        <p>Fields marked with * are required</p>
            </div>
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