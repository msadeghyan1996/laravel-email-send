<?php

namespace App\Helpers;
use Mail;
/**
 *
 */
class Email
{
  public static function send($data)
  {
    Mail::send($data['view'], ['data'=>$data['content']], function ($mail) use ($data){
      $mail->from('support@rondteam.com', $data['title'])
      ->to($data['to'])->subject($data['subject']);
    });
  }
}
