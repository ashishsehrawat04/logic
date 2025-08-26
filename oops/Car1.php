    <?php
    class Calculation{
    
        public $a,$b,$c;

        function sum(){
            $this->c = $this->a+$this->b;
            return $this->c;
        }

        function sub(){
            $this->c = $this->a-$this->b;
            return $this->c;
        }

    
    }

       $obj = new Calculation();
        $obj->a = 23;
        $obj->b = 21;
        echo $obj->sum();




    ?>