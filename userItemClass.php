<!--userItemClass.php
    User Item class that initialises the User Item object attributes through getters and setters.
    
Revision History

            Srinivasa Phanindra Valluri, Puneet Kalva, Nirmal Ignacy 2014.07.23: Created
  


 -->
<?php
 //phpinfo();

class UserItem
{
	private $userId;
	private $itemId;
	private $issuedDate;
	private $dueDateNew;
	public $UserId;
	public $ItemId;
	public $IssuedDate;
	public $DueDateNew;

function get_userId()
{

    return $this->userId;
}
function set_userId($UserId)
{

    $this->userId =$UserId;
}
function get_item_id()
{

    return $this->itemId;
}
function set_forename($ItemId)
{

    $this->itemId =$ItemId;
}
function get_issued_date()
{

    return $this->issuedDate;
}
function set_surname($IssuedDate)
{

    $this->issuedDate =$IssuedDate;
}

function get_duedate()
{

    return $this->dueDateNew;
}
function set_duedate($DueDateNew)
{

    $this->dueDateNew =$DueDateNew;
}

function __construct($userId,$itemId,$issuedDate,$dueDateNew) 
    { 
        $this->UserId =$userId; 
        $this->ItemId = $itemId;
        $this ->IssuedDate = $issuedDate;
        $this->DueDateNew=$dueDateNew;
        
    } 
}
