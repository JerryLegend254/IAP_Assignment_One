<?php
class auth{

    public function bind_to_template($replacements, $template){
        return preg_replace_callback('/{{(.+?)}}/', function($matches) use ($replacements){
            return $replacements[$matches[1]];
        }, $template);
    }

    public function receive_sign_up($MYSQL, $OBJ_SendMail, $conf, $lang){
        if(isset($_POST["signup"])){
            $email_address = addslashes($_POST["email_address"]);
            // added variables to easen the process of identification during a sign up process
            $username = $_POST['username'];
            $fullname = $_POST['fullname'];
            $pass = $_POST['password'];
            $confPass = $_POST['confPassword'];

            // validate the email is of the right format
            if (!filter_var($email_address, FILTER_VALIDATE_EMAIL)) {
                die("Invalid email format");
            }
            // if the password are not equal stop execution
            else if(!strcmp($pass, $confPass) == 0){
                die("Error: passwords do not match");
            }
            else{

                $token = md5(time());
                $token_expire = date("Y-m-d H:i:s", strtotime("+ 2hours"));
                
                $data = array("email_address" => $email_address, 'username' => $username, 'token' => $token, 'token_expire' => $token_expire, 'password' => password_hash($confPass, PASSWORD_DEFAULT));
                $table = "users";
                $MYSQL->insert($table, $data);
                
                // added token to the replacement array since it is used in template
                $replacements = array('fullname' => $fullname, 'site_name' => $conf["site_name"], 'token' => $token);
                $OBJ_SendMail->SendeMail([
                    'sendToEmail' => $email_address,
                    'sendToName' => $replacements["fullname"],
                    'emailSubjectLine' => $conf["site_name"] ." - ". $lang["subject_sign_up_verify"],
                    'emailMessage' => $this->bind_to_template($replacements, $lang["sign_up_verify"])
                ], $conf);
            }
        }
    }
}