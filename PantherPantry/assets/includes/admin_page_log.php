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
                    <nav id="breadcrumbs" aria-label="Breadcrumbs"><a href="admin.html">Food Pantry Notification Management</a> / <a href="log.html">Notification Log</a> / </nav>	<a name="pagecontent" id="pagecontent"></a>


                    <h3>Review Notifications</h3>
                    <p>Displayed below are the most current notifications. Use the search options to search for specific notifications.</p>
                    <form>
                        <table>
                            <tr>
                                <td><label>Search for notifications sent between:</label>
                                    <input type="date"> <input type="date"></td>

                            </tr>

                            <tr>
                                <td><label>Search for notifications sent by:</label>
                                    <select name="students" value="Select Recipients">
                                        <option value="1">Joe Smith</option>
                                        <option value="2">Eric Johnson</option>
                                        <option value="3">Jennifer Jackson</option>
                                        <option value="4">Hannah Williams</option>
                                    </select>

                                </td>
                            </tr>

                            <tr>
                                <td><label>Search for notifications containing:</label>
                                    <input type="text">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <input type="submit" value="Send Now">
                                    <button style="height:38px;">Clear</button>
                                </td>
                            </tr>

                        </table>
                    </form>
                    <h5>Most Recent Notifications</h5>
                    <blockquote style="background-color: #e8e8e8;">
                        <p><strong>Date Sent: </strong>10/2/2019</p>
                        <p><strong>Sent By: </strong>Joe Smith</p>
                        <p><strong>Sent To: </strong>All Students, All Administrators</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vehicula nisi ac consectetur pretium. Curabitur lacinia velit tempus, ornare justo tempus, malesuada tellus. Aenean consectetur porttitor sem, ac convallis velit iaculis non. Aliquam in turpis scelerisque neque sodales interdum non id dui. Ut ullamcorper accumsan justo vitae pulvinar. Nulla maximus elit luctus dolor sodales, ut rutrum turpis sodales. Nunc porta sodales nibh, tempor euismod ipsum sodales vel. Nam elementum convallis dui, in tristique lacus posuere ac. </p>
                        <p>
                            Nunc nisi massa, iaculis et posuere vel, bibendum sit amet augue. Donec auctor ullamcorper feugiat. Nullam id justo efficitur felis ultrices malesuada. Vivamus ac justo ornare, porta justo at, molestie ligula. Etiam aliquam sapien quis nisi cursus, sit amet luctus nibh feugiat. Morbi tristique justo eu mauris gravida imperdiet. Maecenas ac erat nec nunc mattis pellentesque efficitur et dolor. Aliquam a ante ac orci faucibus tincidunt.</p>
                    </blockquote>

                    <blockquote style="background-color: #e8e8e8;">
                        <p><strong>Date Sent: </strong>10/2/2019</p>
                        <p><strong>Sent By: </strong>Joe Smith</p>
                        <p><strong>Sent To: </strong>All Students, All Administrators</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vehicula nisi ac consectetur pretium. Curabitur lacinia velit tempus, ornare justo tempus, malesuada tellus. Aenean consectetur porttitor sem, ac convallis velit iaculis non. Aliquam in turpis scelerisque neque sodales interdum non id dui. Ut ullamcorper accumsan justo vitae pulvinar. Nulla maximus elit luctus dolor sodales, ut rutrum turpis sodales. Nunc porta sodales nibh, tempor euismod ipsum sodales vel. Nam elementum convallis dui, in tristique lacus posuere ac. </p>
                        <p>
                            Nunc nisi massa, iaculis et posuere vel, bibendum sit amet augue. Donec auctor ullamcorper feugiat. Nullam id justo efficitur felis ultrices malesuada. Vivamus ac justo ornare, porta justo at, molestie ligula. Etiam aliquam sapien quis nisi cursus, sit amet luctus nibh feugiat. Morbi tristique justo eu mauris gravida imperdiet. Maecenas ac erat nec nunc mattis pellentesque efficitur et dolor. Aliquam a ante ac orci faucibus tincidunt.</p>
                    </blockquote>

                </div> <!--end content-->

                <?php require_once ("admin_page_sidebar_menu.php");?>

                <!-- END WP PAGE -->

                <!-- BEGIN WP FOOTER -->

            </div><!--end .row-->
        </div><!--end #content-->
    </main><!--end main-->


