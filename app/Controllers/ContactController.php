<?php

namespace App\Controllers;



class ContactController extends BaseController
{

   public function sendEmail(){

   $email=  $this->request->getVar('email');
   $phone=  $this->request->getVar('phone');
   $name=  $this->request->getVar('name');
   $message=  $this->request->getVar('message');
   //echo $email;
   $data["mensaje"] = $message;
        $data["correo"] = $email;
        $data["tel"] = $phone;

        //var_dump($data);
        $email = \Config\Services::email();

        $email->setFrom('atencionaclientes@radalogistics.com', 'ATENCIÓN CLIENTES RADA');
       //$this->email->from('noreply@indebc.gob.mx', 'NOTIFICACIONES RADA');
        //if($fecha < date('2020-12-12')){
        //$this->email->to('arenassapien@outlook.com');
        //}else{
        //$this->email->to("soporte@indebc.gob.mx");

        //$email->setTo('info@radalogistics.com');
        //$email->setTo('arenas.jorge@uabc.edu.mx');
        $email->setTo('jorgearenas.19@gmail.com');
        
        $email->setSubject('CORREO CONTACTO - SITIO WEB RADA');
       // $this->email->subject('CORREO CONTACTO - SITIO WEB RADA');


        $mesg =  view('contact/email_template', $data);
        $email->setMessage($mesg);

        if ($email->send()) {

            echo json_encode(["resp"=> TRUE,"msj"=> "mensaje enviado éxitosamente","msg"=> "Your message was sent it succesfully"]);
        }else{
            echo json_encode(["resp"=> FALSE,"msj"=> "Ocurrió un error, intente de nuevo ","msg"=> "An error ocurred, please retry"]);
        }
   }


}
