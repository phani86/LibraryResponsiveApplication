<!-- 
      itemClass.php
    Item class that initialises the item object attributes through getters and setters.
    

      Revision History

            Srinivasa Phanindra Valluri, Puneet Kalva, Nirmal Ignacy 2014.07.13: Created
    
 -->
<?php

class Item
{
	private $itemTypeId;
	private $isbn;
    private $issn;
    private $itemCategoryId;
	private $title;
	private $author;
	private $publisher;
	private $pubDate;
	private $copies;
	private $availabilityStatus;
	private $image;
    public $ItemTypeId;
    public $ISBN;
    public $ISSN;
    public $ItemCategoryId;
    public $Title;
    public $Author;
    public $Publisher;
    public $PubDate;
    public $Copies;
function get_itemTypeId()
{

    return $this->itemTypeId;
}
function set_itemTypeId($ItemTypeId)
{

    $this->itemTypeId =$ItemTypeId;
}
function get_isbn()
{

    return $this->isbn;
}
function set_isbn($ISBN)
{

    $this->isbn =$ISBN;
}
function get_issn()
{

    return $this->issn;
}
function set_issn($ISSN)
{

    $this->issn =$ISSN;
}

function get_itemCategoryId()
{

    return $this->itemCategoryId;
}
function set_itemCategoryId($ItemCategoryId)
{

    $this->itemCategoryId =$ItemCategoryId;
}
function get_title()
{

    return $this->title;
}
function set_title($Title)
{

    $this->title=$Title;
}

function get_author()
{

    return $this->author;
}
function set_author($Author)
{

    $this->author =$Author;
}

function get_publisher()
{

    return $this->publisher;
}
function set_publisher($Publisher)
{

    $this->publisher=$Publisher;
}
function get_publishedDate()
{

    return $this->pubDate;
}
function set_publishedDate($PubDate)
{

    $this->pubDate=$PubDate;
}

function get_copies()
{

    return $this->copies;
}
function set_copies($Copies)
{

    $this->copies=$Copies;
}
function get_availabilityStatus()
{

    return $this->availabilityStatus;
}
function set_availabilitystatus($AvailabilityStatus)
{

    $this->availabilityStatus=$AvailabilityStatus;
}
function get_image()
{

    return $this->image;
}
function set_image($Image)
{

    $this->image=$Image;
}


	public function __construct($itemTypeId,$isbn,$issn,$itemCategoryId,$title,$author,$publisher,$pubDate,$copies,
	$availabilityStatus,$image)
	{
	$this->ItemTypeId=$itemTypeId;
    $this->ISBN=$isbn;
    $this->ISSN=$issn;
	$this->ItemCategoryId=$itemCategoryId;
	$this->Title=$title;
	$this->Author=$author;
	$this->Publisher=$publisher;
	$this->PubDate=$pubDate;
	$this->Copies=$copies;
	$this->AvailabilityStatus=$availabilityStatus;
	$this->Image=$image;
	
	}
}
class itemType extends Item
{
private $id;
private $typeName;

public $Id;
public $TypeName;
function get_item_type_Id()
{

    return $this->id;
}
function set_itemTypeId($Id)
{

    $this->id =$Id;
}

function get_item_type_Name()
{

    return $this->typeName;
}
function set_item_type_Name($TypeName)
{

    $this->typeName =$TypeName;
}

public function __construct($id,$typeName)
{
	$this->Id=$id;
	$this->TypeName=$typeName;
	
}
}


	
?>
