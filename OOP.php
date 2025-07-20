<?php

abstract class Customer
{
    // setting up the properties with their access modifiers
    protected $one; //can be accessed from another class that extends this class but not from outside the parent and child class
    public $two; // can be accessed outside of the class
    private $three; // can be accessed only in this class

    public $id;
    public $name;
    protected $email;
    public $location;
    public $balance;


    // creating a constructor
    public function __construct($id, $name, $email, $location, $balance)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->location = $location;
        $this->balance = $balance;
    }

    // Magic Methods
    // public function __construct()
    // {
    //     echo "Construtor ran...";
    // }

    // public function __destruct()
    // {
    //     echo "Destructor ran";
    // }

    // setting up the methods
    // access modifiers can also be used for methods

    public function getCustomer()
    {
        // $this refers to the current object instance you are working with
        return $this->id;
    }

    public function getUser()
    {
        return $this->name;
    }

    abstract public function getEmail();
}


// $customer = new Customer(1, "John Doe", "johnny@gmail.com", "Toronto", 3500);

// echo $customer->id;
// echo $customer->getCustomer(1);
// echo $customer->getUser();


// Inheritance
class Subscriber extends Customer
{
    public $plan;

    public function __construct($id, $name, $email, $location, $balance, $plan)
    {
        parent::__construct($id, $name, $email, $location, $balance);
        $this->plan =  $plan;
    }

    public function getEmail()
    {
        return $this->email;
    }
}

$subscriber = new Subscriber(1, "John Doe", "johnny@gmail.com", "Toronto", 3500, "pro");

// echo $subscriber->name;
echo $subscriber->getEmail();

// Static Classes

class User
{
    public $username;
    public $password;
    public static $passwordLength = 5;

    public static function getPasswordLength()
    {
        // you dont use $ this->
        return self::$passwordLength;
    }
}

echo User::$passwordLength;
