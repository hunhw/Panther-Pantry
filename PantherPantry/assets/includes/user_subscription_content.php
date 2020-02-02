<?php
/**
 * Created by PhpStorm.
 * User: Ashley Neal and Hansan Hung
 * Date: 12/6/2019
 */

require('Database.php');
session_start();
if(isset($_SESSION[Database::USERS_CASCADE]) && $_SESSION[Database::USERS_CASCADE] =="1")
    $cas = true;
else
    $cas = false;

if(isset($_SESSION[Database::USERS_ROCK_CREEK]) && $_SESSION[Database::USERS_ROCK_CREEK] =="1")
    $rock = true;
else
    $rock = false;

if(isset($_SESSION[Database::USERS_SOUTH_EAST]) && $_SESSION[Database::USERS_SOUTH_EAST] =="1")
    $south = true;
else
    $south = false;

if(isset($_SESSION[Database::USERS_SYLVANIA]) && $_SESSION[Database::USERS_SYLVANIA] =="1")
    $syl = true;
else
    $syl = false;
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
                <nav id="breadcrumbs" aria-label="Breadcrumbs"><a href="user_dashboard.php">Food Pantry User Dashboard</a> / <a href="subscription_list_options.php">Subscription List Options</a> / </nav>	<a name="pagecontent" id="pagecontent"></a>
                <h3>Subscription List Options</h3>
                <p>
                    </p>
                <p>Here you can change which campuses you will receive notifications from.</p>
                <p><?php
                    if ($_SESSION[Database::USERS_CASCADE] || $_SESSION[Database::USERS_ROCK_CREEK] || $_SESSION[Database::USERS_SOUTH_EAST] || $_SESSION[Database::USERS_SYLVANIA] == "1") {
                        echo "You are currently subscribed to:";
                    }
                    ?>
                    <br>
                    <?php
                    if ($_SESSION[Database::USERS_CASCADE] == "1") {
                        echo "[Cascade] \n";
                    }
                    ?>
                    <?php
                    if ($_SESSION[Database::USERS_ROCK_CREEK] == "1") {
                        echo ("[Rock Creek] \n");
                    }
                    ?>
                    <?php
                    if ($_SESSION[Database::USERS_SOUTH_EAST] == "1") {
                        echo "[Southeast] \n";
                    }
                    ?>
                    <?php
                    if ($_SESSION[Database::USERS_SYLVANIA] == "1") {
                        echo "[Sylvania] \n ";
                    }
                    ?>
                </p>

                <form action="assets/actions/do_user_subscription_list.php" method="post">
                    <h5>Please Choose Where to Receive Notifications From</h5>
                    <table>
                        <tr>
                            <td>
                                <label for="pcc_cas">Cascade Campus</label>
                            </td>
                            <td><input type="hidden" id="pcc_cas" name="pcc_cas" value="off">
                                <input type="checkbox" id="pcc_cas" name="pcc_cas" value="on" <?php echo $cas ? "checked" : ""; ?>></td>
                        </tr>
                        <tr>
                            <td>
                                <label for="pcc_rock">Rock Creek Campus</label>
                            </td>
                            <td><input type="hidden" id="pcc_rock" name="pcc_rock" value="off">
                                <input type="checkbox" id="pcc_rock" name="pcc_rock" value ="on" <?php echo $rock ? "checked" : ""; ?>></td>
                        </tr>
                        <tr>
                            <td>
                                <label for="pcc_south">Southeast Campus</label>
                            </td>
                            <td><input type="hidden" id="pcc_syl" name="pcc_syl" value="off">
                                <input type="checkbox" id="pcc_south" name="pcc_south" <?php echo $south ? "checked" : ""; ?>></td>
                        </tr>
                        <tr>
                            <td>
                                <label for="pcc_syl">Sylvania Campus</label>
                            </td>
                            <td><input type="hidden" id="pcc_syl" name="pcc_syl" value="off">
                                <input type="checkbox" id="pcc_syl" name="pcc_syl" value ="on" <?php echo $syl ? "checked" : ""; ?>></td>
                        </tr>
                        <tr>
                            <td>
                                <button type="submit" id="btn-subscription"  name="subscription-submit" class="btn btn-primary">Submit</button>
                            </td>
                            <td>

                            </td>
                        </tr>

                    </table>
                </form>

            </div> <!--end content-->

            <?php require_once ("user_page_sidebar_menu.php");?>

            <!-- END WP PAGE -->

            <!-- BEGIN WP FOOTER -->

        </div><!--end .row-->
    </div><!--end #content-->
</main><!--end main-->

