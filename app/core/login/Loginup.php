<?php
//в логине пассворде и др полях должна быть проверка на символы

class Loginup
{

    public function get_data($login, $password)
    {
        try {
            $db = Database::getInstance();
            Database::setCharsetEncoding();

            $sql = ("SELECT `login` FROM `users` WHERE `login` = '$login ' AND `password` = '$password'");
            $stm = $db->query($sql);
            $result = $stm->fetchAll(PDO::FETCH_ASSOC);
            if (!$stm->rowCount()) {
                foreach ($result as $row) {
                    $_SESSION['name'] = $row['login'];
                }
                
            } else {
                echo "login accepted";
            }
        } catch (Exception $e) {
            print $e->getMessage();
        }
    }
}
