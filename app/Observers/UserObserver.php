<?php

namespace App\Observers;
use App\User;
use Mail;

class UserObserver
{
   public function creating(User $user)
   {
   
   }
   public function created(User $user)
   {
    //   $data = array('name'=>$user->name);  
    //  // $email = $user->email;

    //    Mail::send('mail', $data, function($message) use($user) {
    //       $message->to($user->email, 'Testing basic email')->subject
    //          ('Laravel demo account created successfully.!');
    //       $message->from('riddhi.logistic19@gmail.com','Riddhi Rathod');
    //    });  
   }

   public function updated(User $user)
   {
       //
   }


   public function deleted(User $user)
   {
       //dd($user);
       $data = array('name'=>$user->name);    
       Mail::send('mail', $data, function($message) use($user) {
          $message->to($user->email, 'Testing basic email')->subject
             ('Demo account deleted'); 
          $message->from('riddhi.logistic19@gmail.com','Riddhi Rathod');      
       });                  
   }
}