<?php if($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage");

class changePassword_model extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function change() {
        $id_user = Session::get('id_user');
        return $this->db->update("", "user", 
            array("password" => sha1($_POST['password'])), 
            "`id_user`='{$id_user}'");
    }
}