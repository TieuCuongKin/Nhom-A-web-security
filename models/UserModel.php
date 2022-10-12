<?php

require_once 'BaseModel.php';

class UserModel extends BaseModel {
    /**
     * Insert user
     * @param $input
     * @return mixed
     */
    public function insertSession($session) {
        $sql = "INSERT INTO `session`(`user_session`) VALUES (" .
            "'" . $session."')";
        $user = $this->insert($sql);

        return $user;
    }
}