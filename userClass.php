<!--userClass.php
    User class that initialises the user object attributes through getters and setters.
    
Revision History

            Srinivasa Phanindra Valluri, Puneet Kalva, Nirmal Ignacy 2014.06.14: Created
  


 -->

<?php

class User
{
	private $userId;
	private $forename;
	private $surname;
	private $emailId;
	private $password;
	private $userTypeId;
	public $UserId;
	public $Forename;
	public $Surname;
	public $EmailId;
	public $Password;
	public $UserTypeId;
function get_userId()
{

    return $this->userId;
}
function set_userId($UserId)
{

    $this->UserId =$userId;
}
function get_forename()
{

    return $this->forename;
}
function set_forename($Forename)
{

    $this->forename =$Forename;
}
function get_surname()
{

    return $this->surname;
}
function set_surname($Surname)
{

    $this->surname =$Surname;
}

function get_emailId()
{

    return $this->emailId;
}
function set_emailId($EmailId)
{

    $this->emailId =$EmailId;
}
function get_password()
{

    return $this->emailId;
}
function set_password($Password)
{

    $this->password =$Password;
}

function get_userTypeId()
{

    return $this->userTypeId;
}
function set_userTypeId($UserTypeId)
{

    $this->userTypeId =$UserTypeId;
}

// function get_resItemId()
// {

//     return $this->resItemId;
// }
// function set_resItemId($ResItemId)
// {

//     $this->resItemId =$ResItemId;
// }

function __construct($userId,$forename,$surname,$emailId,$password,$userTypeId) 
    { 
        $this->UserId =$userId; 
        $this->Forename = $forename;
        $this ->Surname = $surname;
        $this->EmailId=$emailId;
        $this->Password=$password;
        $this->UserTypeId=$userTypeId;
        //$this->ResItemId=$resItemId;

    } 
}
class userType extends User
{
private $typeId;
private $type;

public $TypeId;
public $Type;
function get_user_type_Id()
{

    return $this->typeId;
}
function set_user_Type_Id($TypeId)
{

    $this->typeId =$TypeId;
}

function get_user_type()
{

    return $this->type;
}
function set_item_type($Type)
{

    $this->type =$Type;
}

public function __construct($typeId,$type)
{
    $this->Type=$typeId;
    $this->$Type=$type;
    
}
}

    
?>