<?php
/**
 * Created by PhpStorm.
 * User: Ashley Neal and Hansan Hung
 * Date: 12/6/2019
 */

class Database
{
    const DB_SERVER = "sqlsrv:Server=cisdbss.pcc.edu;Database=234a_ATWATP";
    const DB_USER = "234a_ATWATP";
    const DB_PASSWORD = "Any=Thing";


    const USERS_TABLE = 'Users';
    const NOTIFICATION_TABLE = 'Notifications';

    const ACCOUNT_USERNAME_FIELD = 0;
    const ACCOUNT_PASSWORD_HASH_FIELD = 1;
    const ACCOUNT_ROLE_FIELD = 2;

    const USERS_FIRST_NAME_KEY = 'FirstName';
    const USERS_LAST_NAME_KEY = 'LastName';
    const USERS_PASSWORD_HASH_KEY = 'PasswordHash';
    const USERS_EMAIL_KEY = 'UserEmail';
    const USERS_ROLE_KEY = 'UserRole';
    const USERS_CASCADE = 'PCCCascade';
    const USERS_ROCK_CREEK = 'PCCRockCreek';
    const USERS_SOUTH_EAST = 'PCCSoutheast';
    const USERS_SYLVANIA = 'PCCSylvania';

    //Notifications Table Constants
    const NOTIFICATIONS_CREATION_DATE_KEY = 'CreateDate';
    const NOTIFICATIONS_SEND_DATE_KEY = 'SendDate';
    const NOTIFICATIONS_BODY_KEY = 'NotificationBody';
    const NOTIFICATIONS_SENT_NUMBER_KEY = 'SentNumber';


    private static $conn = NULL;

    private static function connect()
    {
        if (empty(Database::$conn)) {
            Database::$conn = new PDO(
                Database::DB_SERVER,
                Database::DB_USER,
                Database::DB_PASSWORD
            );
        }
        return Database::$conn;
    }


    public function __destruct()
    {
//        if (!empty(Database::$conn)) {
//            Database::$conn->close();
//            Database::$conn = NULL;
//        }
    }


    public function insert_notification($body)
    {
        $uid = 1;
        $cdate = "10/23/2019";
        $sdate = "10/23/2019";
        $snum = 30;

        $query = 'INSERT INTO Notifications (UserID, CreateDate, SendDate, NotificationBody, SentNumber) VALUES (:uid, :cdate, :sdate, :body, :snum);';


        $conn = Database::connect();

        $stmt = $conn->prepare($query);
        $stmt->execute([
            ':uid' => $uid,
            ':cdate' => $cdate,
            ':sdate' => $sdate,
            ':body' => $body,
            ':snum' => $snum]);
        $id = json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
        return $id;


    }

    function lookup_user($email)
    {
        $conn = Database::connect();

        $query = "SELECT * FROM " . Database::USERS_TABLE . " WHERE " . Database::USERS_EMAIL_KEY . " = '$email';"; // vulnerable to SQL injection attacks
        $result = $conn->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }


    public function addUser($name, $lname, $email, $password, $cas, $rock, $south, $syl)
    {
        $conn = Database::connect();
        $safe_email = $conn->quote($email);
        $safe_name = $conn->quote($name);
        $safe_lname = $conn->quote($lname);
        $cas_bool = ($cas == "on") ? 1 : 0;
        $rock_bool = ($rock == "on") ? 1 : 0;
        $south_bool = ($south == "on") ? 1 : 0;
        $syl_bool = ($syl == "on") ? 1 : 0;

        $role = "user";


        $query = 'INSERT INTO [Users]   
                                   (FirstName, LastName, PasswordHash, UserEmail, UserRole, PCCCascade, PCCRockCreek, PCCSoutheast, PCCSylvania)  
                      VALUES   (' . $safe_name . "," . $safe_lname . ",'" . $password . "'," . $safe_email . ",'" . $role . "'," . $cas_bool . ", " . $rock_bool . ", " . $south_bool . ", " . $syl_bool . ");";

        $statement = $conn->prepare($query);
        $statement->execute(array($safe_name, $role, $safe_email, $password));

        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function reset_password($newPassword, $email) {
        $conn = Database::connect();
        $query = "UPDATE [Users] SET PasswordHash = '$newPassword' WHERE UserEmail = '$email'";
        $statement = $conn->prepare($query);


        $statement->execute();
    }

    public function DeleteUser($email) {
        $conn = Database::connect();
        $safe_delete = $conn->quote($email);
        $query = ('DELETE FROM [Users] WHERE UserEmail =' . $safe_delete .'
                                        DELETE FROM [Users] WHERE UserEmail =' . $safe_delete);
        $statement = $conn->prepare($query);
        $statement->execute(array($safe_delete));
    }



    public function updatesubscription($email, $cas, $rock, $south, $syl) {


        $cas_bool = ($cas == "on") ? 1 : 0;
        $rock_bool = ($rock == "on") ? 1 : 0;
        $south_bool = ($south == "on") ? 1 : 0;
        $syl_bool = ($syl == "on") ? 1 : 0;

        $conn = Database::connect();
        $query = "UPDATE [Users] SET PCCCascade = ". $cas_bool . ", PCCRockCreek = " . $rock_bool .", PCCSoutheast = " . $south_bool .", PCCSylvania = " . $syl_bool . " WHERE UserEmail = '$email'";
        $statement = $conn->prepare($query);


        $statement->execute();
    }

    public function set_user($user)
    {
        $_SESSION[self::USERS_FIRST_NAME_KEY] = $user[self::USERS_FIRST_NAME_KEY];
        $_SESSION[self::USERS_LAST_NAME_KEY] = $user[self::USERS_LAST_NAME_KEY];
        $_SESSION[self::USERS_EMAIL_KEY] = $user[self::USERS_EMAIL_KEY];
        $_SESSION[self::USERS_PASSWORD_HASH_KEY] = $user[self::USERS_PASSWORD_HASH_KEY];
        $_SESSION[self::USERS_ROLE_KEY] = $user[self::USERS_ROLE_KEY];
        $_SESSION[self::USERS_CASCADE] = $user[self::USERS_CASCADE];
        $_SESSION[self::USERS_ROCK_CREEK] = $user[self::USERS_ROCK_CREEK];
        $_SESSION[self::USERS_SOUTH_EAST] = $user[self::USERS_SOUTH_EAST];
        $_SESSION[self::USERS_SYLVANIA] = $user[self::USERS_SYLVANIA];
    }

}
