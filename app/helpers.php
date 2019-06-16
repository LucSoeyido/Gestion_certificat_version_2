<?php
if (!function_exists('flash'))
{
function flash($message, $type ='success'){
   
   return  session()->flash('message',$message);
   return session()->flash('notif', $type);

}







}


?>