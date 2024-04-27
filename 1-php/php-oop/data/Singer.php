<?php
class Singer
{
    protected string $name;
    private int $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function getAge(): int
    {
        return $this->age;
    }
}

class Kpop extends Singer
{
    public function info()
    {
        echo "Nama Penyanyi :  $this->name, Umur : dirahasiakan";
        // echo "Age : $this->age <br>"; // error karena age private
    }
}
