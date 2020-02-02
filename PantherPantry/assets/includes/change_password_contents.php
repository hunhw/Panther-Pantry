<?php
/**
 * Created by PhpStorm.
 * User: Ashley Neal and Hansan Hung
 * Date: 12/6/2019
 */

require('Database.php');
session_start();
?>

<main id="main">
    <!--SECONDARY HEADER-->
    <header id="secondary-header" aria-label="Page title">
        <div class="row">
            <div id="page-title">
                <a href="#"><h2>PCC Food Pantry</h2></a>
            </div><!--#page-title-->
        </div><!--end .row-->
    </header>


    <!--CONTENT-->
    <div id="content" aria-label="Page content">
        <div class="row">
            <div class="small-12 medium-8 columns">
                <nav id="breadcrumbs" aria-label="Breadcrumbs"><a href="user_dashboard.php">Food Pantry User Dashboard</a> / <a href="change_password.php">Change Password</a> / </nav>	<a name="pagecontent" id="pagecontent"></a>


                <h3>Password Change</h3>
                <p>Here you can change the password should you wish to have a different password associated with your account.</p>
                <form style="margin-left: auto; margin-right: auto" action="assets/actions/do_change_password.php" method="post">
                    <table>
                        <tr>
                            <td>
                                <label>New Password:</label>
                            </td>
                            <td>
                                <input type="password"  name="pwd" placeholder="Enter New Password">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Confirm Password:</label>
                            </td>
                            <td>
                                <input  type="password"  name="pwd-repeat" placeholder="Confirm Password">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div style=" font-size:85%">
                                    <button type="submit" class="btn btn-primary" name="change-submit">Submit</button>
                                </div>
                            </td>
                            <td>
                            </td>
                        </tr>
                    </table>
                </form>

            </div> <!--end content-->

            <?php
            if ($_SESSION[Database::USERS_ROLE_KEY] == 'admin     ') {
                    require_once ("admin_page_sidebar_menu.php");
                    exit();
                } else {
                    require_once("user_page_sidebar_menu.php");
                }
                ?>

            <!-- END WP PAGE -->

            <!-- BEGIN WP FOOTER -->

        </div><!--end .row-->
    </div><!--end #content-->
</main><!--end main-->


