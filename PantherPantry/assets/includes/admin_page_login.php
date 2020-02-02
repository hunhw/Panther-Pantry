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
                    <nav id="breadcrumbs" aria-label="Breadcrumbs"> <a href="#">Food Pantry Notification Management</a> / </nav>	<a name="pagecontent" id="pagecontent"></a>

                    <h3>Food Pantry Notification Management</h3>
                    <p>Please log in to the system in order to access the administrator tools </p>

                    <?php require_once ("admin_page_login_contents.php");?>

                </div> <!--end content-->

            <!-- END WP PAGE -->

            <!-- BEGIN WP FOOTER -->

        </div><!--end .row-->
    </div><!--end #content-->
</main><!--end main-->
