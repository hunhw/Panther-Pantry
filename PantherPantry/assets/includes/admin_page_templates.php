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
                <nav id="breadcrumbs" aria-label="Breadcrumbs"><a href="admin.html">Food Pantry Notification Management</a> / <a href="templates.html">Create/Edit Templates</a> / </nav>	<a name="pagecontent" id="pagecontent"></a>

                <h3>Create or Modify Templates</h3>
                <form>
                    <p>Create a new name for your template or select one from the list to modify.</p>

                    <label>New Template Name: </label>
                    <input type="text">


                    <label>Modify Existing Template:</label>
                    <select name="students" value="Select Recipients">
                        <option value="1">Test</option>
                        <option value="2">Food Notification</option>
                        <option value="3">Announcement</option>
                        <option value="4">Template 2</option>
                    </select>

                    <label>Edit Template Here:</label>
                    <textarea style="height: 500px;"></textarea>

                    <input type="submit" value="Save Template">
                    <button style="height:38px;">Clear</button>

                </form>
            </div> <!--end content-->

            <?php require_once ("admin_page_sidebar_menu.php");?>

            <!-- END WP PAGE -->

            <!-- BEGIN WP FOOTER -->

        </div><!--end .row-->
    </div><!--end #content-->
</main><!--end main-->



