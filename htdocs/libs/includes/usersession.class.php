<?php
class usersession
{
    public static $uid=null;
    //allows the user to enter
    public function authentiaction($username, $pass)
    {
        try{
        $user = user::login($username, $pass);
        $uid = new user($user);
        if ($user) {
            $conn = database::pdo_getconnection();
            $ip = $_SERVER['REMOTE_ADDR'];
            $agent = $_SERVER['HTTP_USER_AGENT'];
            $token = md5(rand(0, 999999) . $ip . $agent . time());
            $stmt = $conn->prepare("INSERT INTO `usersession` (`uid`, `token`, `login_time`, `ip`, `user_agent`, `active`)
        VALUES ($uid, $token, now(),$ip,$agent, '1')");
            if ($conn->execute($stmt)) {
                session::set('session_token', $token);
                return $token;
            } else {
                return false;
            }
        } else {
            return false;
        }}catch(Exception $e){
            echo "<br>" . $e->getMessage();
        }
    }
    public function __construct($id){
        $conn=database::pdo_getconnection();
        $stmt=$conn->prepare("select *from usersession where id=$id");
        $stmt->execute();
        $result=$stmt->fetchAll();
        if(count($result)==1){
            $uid=$result[0]['uid'];
        }else{
            throw new Exception("session invalid");
        }


    }
}
