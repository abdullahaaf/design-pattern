<?php

class CustomerBuilder
{
    private $name;
    private $address;
    private $age;

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }

    public function build(): Customer
    {
        return new Customer(
            $this->name,
            $this->address,
            $this->age
        );
    }
}
