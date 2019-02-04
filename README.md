# laravel-email-send
send email in laravel framework

#### How to use it?
1. copy Email.php file to app\Helpers.
2. in your controller use this class *(use Helpers\Email)*
3. define $data variable and set email datas like below :
```
$data = [
  'view'=>'email view blade',
  'content'=>$datas,
  'title'=>'email title',
  'subject'=>'email subject,
  'to'=>email address
];
```

> Note : 
> don't forget change email datas in .env file

4. and you can use it
```
Email::send($data);
```
