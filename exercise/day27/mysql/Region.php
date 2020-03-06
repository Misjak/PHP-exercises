<?php


// Declare a new class Region and give it the same properties as are the columns in the table region.

// In this class declare a method insert()

// This method should try to insert the current object into the database.

// Be mindful not to insert the id column.

// Then try it like this:

// $region = new Region;
// $region->name = 'Central Africa';
// $region->insert();


class Region {
  public $name = null;
  public $slug = null;

  function insert() {
    
    $query = " 
    INSERT 
    INTO `region`
    (`name`, `slug`)
    VALUES
    (?, ?)";

    insert($query, [$this->name, $this->slug]);
  
    $this->id = last_insert_id();
  }

  public function update(){

    if (!$this->id) {
      return false;
    }
    $query = "
    UPDATE `region` 
    SET `name` = ?,
        `slug` = ?
    WHERE `id` = ? 
     ";
  

  update($query, [$this->name, $this->slug, $this->id]);
   } 
  

   public function save() {
     if ($this->id) {
       $this->update();
     } else {
       $this->insert();
     }
   }


   public function delete() {
    if (!$this->id) {
      return false;
    }

    $query = "
    DELETE 
    FROM `region` 
    WHERE `id` = ? 
     ";

     delete($query, [$this->id]);
   }

}