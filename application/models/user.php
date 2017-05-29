<?php

/*
 * User model
 */
class User extends CI_Model{

    //Construct
    public function __construct() {
        parent::__construct();
        $db = $this->load->database('default', TRUE);//load database segun archivo config.
        if(!$db){
            $this->load->db("default");
        }
    }

    //Logueo usuario
        public function login($user,$pass)
        {
            $respuesta= FALSE;
        /*    try {

                $sql=  $this->db->query("select * from user where username='".$user."'  and password='".$pass."'");

                if(!$sql){
                    throw new Exception ("Errors: ".$this->db->_error_message());
                    return FALSE;
                }else{
                    $count=  $sql->num_rows();

                    if($count == 1)//
                    {
                        $respuesta= TRUE;
                    }
                    else
                    {
                       $respuesta= FALSE;//Invalid
                    }
                }
            } catch (Exception $exc) {
                $respuesta= $exc->getMessage();
            }
*/
            return $respuesta;


        }//end function





}
?>
