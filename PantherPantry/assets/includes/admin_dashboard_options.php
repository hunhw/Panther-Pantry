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
                    <nav id="breadcrumbs" aria-label="Breadcrumbs"><a href="admin_dashboard.php">Food Pantry Notification User Dashboard</a> /  </nav>	<a name="pagecontent" id="pagecontent"></a>


                    <h4>Welcome to the Admin Dashboard, <?php echo $_SESSION[Database::USERS_FIRST_NAME_KEY]; ?>!</h4>
                    <br>
                    <p>Here you have options from the sidebar on the right to:
                    <ul>
                        <li>Send Notifications</li>
                        <li>Edit Templates</li>
                        <li>Review Notification Logs</li>
                        <li>Change Your Password</li>
                        <li>Unsubscribe and Delete Your Account</li>
                        <li>Logout</li>
                    </ul>
                    </p>

                </div> <!--end content-->

                <?php require_once ("admin_page_sidebar_menu.php");?>

                <!-- END WP PAGE -->

                <!-- BEGIN WP FOOTER -->

            </div><!--end .row-->
        </div><!--end #content-->
    </main><!--end main-->



<?php require_once ("admin_page_sidebar_menu.php");?>