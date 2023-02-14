<!DOCTYPE html>
<html lang="en">
<?php

interface TranspInterface {
    public function move(); //способность двигаться
    public function cleanGlass(); //способность включать дворники
    public function honk(); //способность сигналить
    public function activateSuper(); //активировать специальные возможности
  };


class Transp implements TranspInterface 
{
    public function move(){
        echo 'I am mooving ';
    }
    public function cleanGlass(){
        echo 'Glass cleaning ';
    }
    
    public function honk(){
        echo $this->honkSound;
    }
    public function activateSuper(){
        echo $this->superPower;
    }

    //индивидуальность в виде номера
    public function setNumber($number){
        $this->numberPlate = $number;
    }

    //функция вывода номера
    public function getNumber()
    {
        return $this->numberPlate;
    }
        
}

class CivilCar extends Transp 
{
    protected $superPower = 'NOS ';
    protected $honkSound = 'Bip-bip ';
    protected $numberPlate = '000';

    
}

class Digger extends Transp
{
    protected $superPower = 'Move bucket ';  
    protected $honkSound = 'Choo-choo ';
    protected $numberPlate = '000';
    
}

//полиморфная функция вызова движения и активирования специальных возможностей
function activateSuperPower(TranspInterface $curCar){

    $curCar->move();
    $curCar->activateSuper();
}


//проверка
$myCar = new CivilCar();
$myCar->setNumber('Н557КТ154');

activateSuperPower($myCar);

echo $myCar->getNumber();




?>
</html>