<?php
class Person{
    public $age;
   public function __construct($initialAge){
          // Add some more code to run some checks on initialAge
    if ($initialAge<0) {
        # code...
        $this->age=0;
        printf('Age is not valid, setting age to 0.\n');
    }else {
        $this->age=$initialAge;
    }
    }
   public  function amIOld(){
            // Do some computations in here and print out the correct statement to the console 
           if ($this->age<13) {
               printf('You are young.\n');
           }elseif ( $this->age<18) {
            printf('You are teenager.\n');

           }else{
            printf('You are old.\n');

           }

    }
   public  function yearPasses(){
          // Increment the age of the person in here
$this->age++;
    }
   
      
}
$p=new Person(13);
echo $p;
$T = intval(fgets(STDIN));