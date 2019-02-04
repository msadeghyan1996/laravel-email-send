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
      $mail->from('set you email address', $data['title'])
      ->to($data['to'])->subject($data['subject']);
    });
  }
}
