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
                    <nav id="breadcrumbs" aria-label="Breadcrumbs"><a href="user_dashboard.php">Food Pantry User Dashboard</a> / <a href="delete_account_page.php">Account Deletion</a> / </nav>	<a name="pagecontent" id="pagecontent"></a>


                    <h3>Account Deletion</h3>
                    <p>Here you can unsubscribe from the mailing list and remove your account from our database</p>
                    <p><?php echo $_SESSION[Database::USERS_EMAIL_KEY]; ?></p>
                    <form id="deleteAccount" action="assets/actions/do_delete_user.php" method="POST">
                        <div>Account will be deleted. Do you want to continue?</div>
                        <div>
                            <br>
                            <button type="submit" name="delete-submit" class="btn btn-primary">Unsubscribe me and Delete Account</button>
                        </div>
                    </form>

                </div> <!--end content-->

                <?php  if ($_SESSION[Database::USERS_ROLE_KEY] == 'admin     ') {
                    require_once ("admin_page_sidebar_menu.php");

                } else {
                    require_once("user_page_sidebar_menu.php");
                } ?>

                <!-- END WP PAGE -->

                <!-- BEGIN WP FOOTER -->

            </div><!--end .row-->
        </div><!--end #content-->
    </main><!--end main-->