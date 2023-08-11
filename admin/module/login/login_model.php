<?php if($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage");

class login_model extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function getLogin() {
        $data = json_decode(file_get_contents('php://input'), true);

        if(isset($data['user_id']) && isset($data['password'])) {
            $sth = $this->db->prepare(
                "SELECT 
                    COUNT(1) exist,
                    id_user,
                    user_type,
                    username
                FROM 
                    user
                WHERE
                    `username`=:user_id
                AND
                    `password`=:pass");
            $sth->execute(array(
                ":user_id" => $data['user_id'],
                ":pass" => sha1($data['password'])
                ));
            $o = $sth->fetch(PDO::FETCH_ASSOC);
            if($o['exist'] == 1) {
                $output = array("exist" => 1, "msg" => "Login success");
                $this->createUserSession($o);
            } else {
                $output = array("exist" => 0, "msg" => "Wrong user id or password!");
            }
            return $output;
        }
    }

    // calling this function from getLogin
    public function createUserSession($o) {
        Session::set("username", $o['username']);
        Session::set("id_user", $o['id_user']);
        Session::set("user_type", $o['user_type']);
    }
}