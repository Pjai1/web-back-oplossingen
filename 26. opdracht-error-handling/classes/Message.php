<?php

    class Message
    {
        public function __construct()
        {

        }

        public function getMessage($message)
        {
            $_SESSION['message']['type'] = $message['type'];
            $_SESSION['message']['message'] = $message['text'];
        }

        public function setMessage()
        {
            if(isset($_SESSION['message']))
            {
                $type = $_SESSION["message"]["type"];
                $message = $_SESSION["message"]["message"];
                unset($_SESSION['message']);

                return $type.": ".$message;
            }
            else
            {
                return false;
            }     
        }
    }

?>
