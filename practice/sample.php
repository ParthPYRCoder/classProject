<?php
// using class
class car
{
        private $maruti = "Alto";
        public $honda = "City";
        protected $toyota = "Innova";

        public function display()
        {
                echo '<b>Class called</b><br>';
                echo  $this->maruti . "<br>";
                echo  $this->honda . "<br>";
                echo $this->toyota . "<br>";
                echo '<br>';
        }
}

class truck
{
        public $tata = "Tata";
        protected $eicher = "Eicher";
        private $renault = "Renault";

        public function getData()
        {
                echo '<b>Class called</b><br>';
                echo $this->tata . '<br>';
                echo $this->eicher . '<br>';
                echo $this->renault . '<br>';
                echo '<br>';
        }
}
$car = new car();
$truck = new truck();
$car->display();
$truck->getData();


// using constructor
class cars
{

        public function __construct($maruti, $honda, $toyota)
        {
                echo "<b>Constructor called</b> <br>";
                $this->maruti = $maruti;
                $this->honda = $honda;
                $this->toyota = $toyota;
        }

        public function display()
        {
                echo  $this->maruti . "<br>";
                echo  $this->honda . "<br>";
                echo $this->toyota . "<br>";
                echo '<br>';
        }
}

$car = new cars("Alto", "City", "Innova");
$car->display();

// using constructor and destructor

class fruit
{


        public function __construct($banana, $apple, $mango)
        {
                echo "<b>Constructor called</b> <br>";
                $this->banana = $banana;
                $this->apple = $apple;
                $this->mango = $mango;
        }

        public function __destruct()
        {
                echo "<b>Destructor called</b> <br>";
        }

        public function display()
        {
                echo  $this->apple . "<br>";
                echo  $this->mango . "<br>";
                echo $this->banana . "<br>";
        }
}


$fruit = new fruit("Banana", "Apple", "Mango");

$fruit->display();
