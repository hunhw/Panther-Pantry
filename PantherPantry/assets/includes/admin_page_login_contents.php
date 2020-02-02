<?php
/**
 * Created by PhpStorm.
 * User: Ashley Neal and Hansan Hung
 * Date: 12/6/2019
 */
?>

        <form style="margin-left: auto; margin-right: auto" action="assets/actions/do_admin_login.php" method="post">
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
                        <a href="#" id="signlink2" style=" cursor: pointer; ">Forgot your password?</a>
                    </td>
                    <td>
                        <div style=" font-size:85%">
                            <button type="submit" class="btn btn-primary" name="login-submit" style=" margin-bottom:1em; ">Submit</button>
                        </div>
                    </td>
                </tr>
            </table>
        </form>