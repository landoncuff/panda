<?php
class DisappointmentPanda {

   public $advice;


   public function __construct(){
       $this->advice = array();
       $this->advice[] = 'Pain, in all of its form, is our body\'s most effective means of spurring action. It helps show us what\'s good for us versus what\'s bad for us.';
       $this->advice[] = 'Life is essentially an endless series of problems. The solution to one problem is merely the creation of the next one. Don\'t hope for a life without problems. Instead, hope for a life full of good problems.';
       $this->advice[] = 'Problems never stop, they merely get exchanged and/or upgraded.';
       $this->advice[] = 'Happiness comes from solving problems. True happiness occurs only when you find the problems you enjoy having and enjoy solving.';
       $this->advice[] = 'Happiness requires struggle. It grows from problems.';
   }

   public function getAdvice(){
       $random = random_int(0, count($this->advice)-1);
       return $this->advice[$random];
   }

   public function addAdvice($comment){
       $this->advice[] = $comment;
   }
}
