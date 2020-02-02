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
                    <a href="#"><h2>PCC Food Pantry</h2></a>
                </div><!--#page-title-->
            </div><!--end .row-->
        </header>


        <!--CONTENT-->
        <div id="content" aria-label="Page content">
            <div class="row">
                <div class="small-12 medium-8 columns">
                    <nav id="breadcrumbs" aria-label="Breadcrumbs"><a href="#">Food Pantry Notification Management</a> / <a href="notifications.html">Send Notifications</a> / </nav>	<a name="pagecontent" id="pagecontent"></a>


                    <h3>Prepare Notification</h3>
                    <form method="post" name="send_notification" action="assets/actions/do_send_notification.php">
                        <label for="subject">Notification Subject:</label>
                        <input id="subject" name="subject" style="width: 100%;">
                        <label for="notification_body">Notification Body:</label>
                        <textarea style="height: 200px;" id="notification_body" name="notification_body"></textarea>

                        <label for="students">Choose Recipients</label>
                        <select id="students" name="students" value="Select Recipients" disabled>
                            <option value="1">All Students</option>
                            <option value="2">All Administrators</option>
                            <option value="3">Specific Group One</option>
                            <option value="4">Specific Group Two</option>
                        </select>

                        <button style="height:38px;" disabled>Schedule Sending</button> &nbsp;

                        <input type="submit" value="Send Now">
                        <button style="height:38px;">Clear</button>
                        <p>The "Select Recipients" and "Schedule Sending" features are currently disabled.</p>
                    </form>

                </div> <!--end content-->

                <?php require_once ("admin_page_sidebar_menu.php");?>

                <!-- END WP PAGE -->

                <!-- BEGIN WP FOOTER -->

            </div><!--end .row-->
        </div><!--end #content-->
    </main><!--end main-->



<?php require_once ("admin_page_sidebar_menu.php");?>
