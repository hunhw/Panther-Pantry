<?php
/**
 * Created by PhpStorm.
 * User: Ashley Neal and Hansan Hung
 * Date: 12/6/2019
 */

if ( isset( $_GET[ 'signup-error' ] ) ) {

    if( $_GET[ 'signup-error' ] == "EditEmail" ) {
        echo '    <head><script>alert(\'Error: Email already exists!\')</script></head>';
    }
    if( $_GET[ 'signup-error' ] == "EmptyFields" ) {

        echo '    <head><script>alert(\'Error: All fields must be filled out!\')</script></head>';

    }else if ($_GET['signup-error'] == "EmptyPassword") {

        echo '    <head><script>alert(\'Error: Please enter a password!\')</script></head>';

    }else if ($_GET['signup-error'] == "PasswordNotStrongEnough") {

        echo '    <head><script>alert(\'Error: Password is too weak!\')</script></head>';

    } else if ($_GET['signup-error'] == "UserTaken") {

        echo '    <head><script>alert(\'Error: Email already exists!\')</script></head>';

    }else if ($_GET['signup-error'] == "PasswordCheck") {

        echo '    <head><script>alert(\' Error: Passwords do not match!\')</script></head>';

    }else if ($_GET['signup-error'] == "WrongDomain") {

        echo '    <head><script>alert(\' Error: Please enter an @pcc.edu email address!\')</script></head>';

    }

}else if(isset($_GET['login-error'])) {

    if ($_GET['login-error'] == "EmptyFields") {

        echo '    <head><script>alert(\'Error: All fields must be filled out!\')</script></head>';

    } else if ($_GET['login-error'] == "EmptyMail") {

        echo '    <head><script>alert(\'Error: Please enter your email address!\')</script></head>';

    } else if ( $_GET[ 'login-error' ] == "WrongPassword" ) {

        echo '    <head><script>alert(\'Error: Password is incorrect!\')</script></head>';

    } else if ($_GET['login-error'] == "EmptyPassword") {

        echo '    <head><script>alert(\'Error: Please enter your password!\')</script></head>';

    }if ( $_GET[ 'login-error' ] == "NoEmail" ) {

        echo '    <head><script>alert(\'Error: Email does not exist!\')</script></head>';
    }

}else if(isset($_GET['change-error'])) {
    if ($_GET['change-error'] == "EmptyFields") {

        echo '    <head><script>alert(\'Error: All fields must be filled out!\')</script></head>';

    }else if ($_GET['change-error'] == "PasswordNotStrongEnough") {

        echo '    <head><script>alert(\'Error: Password is too weak!\')</script></head>';

    }if ($_GET['change'] == "successful") {
        echo '    <head><script>alert(\'Success: Your password has been changed! Logging out now. Please Log in again with your new password.\')</script></head>';
    }
}
