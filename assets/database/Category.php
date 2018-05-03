<?php 
include_once 'Model.php';  
	/**
	* Service class
	*/
	class Category extends Model{
		public $cat_id;
		public $name;
		public $description;
		
		public static $table_name = 'category';
		public static $primary_key = 'cat_id';
		public static $class_name = 'Category';
		public static $table_fields = array ('cat_id','name','description');


		function __construct(){
			parent::__construct();
		}

		public  function getCategoryId(){
			return $this->cat_id;
		}

		public function setCategoryId($cat_id){
			return $this->cat_id = $cat_id;
		}
		public static function getDropDown(){
			$categories = static::all();
			$dropdown = "<select class ='form-control' name ='cat_id'>
							<option  value = ''>select category</option>";
			foreach ($categories as $category) {
				$dropdown .= "<option value='{$category->getCategoryId()}'>{$category->name}</option>";
				}	
				$dropdown .= "</select>";
				return $dropdown;
		}

	

	public function setNewCatId(){//try to understand this algorithm completely later
      if($lastCategory = static::last()){
        $lastId = explode ('/',$lastCategory->cat_id );
        if (strlen(++$lastId[1])<3) {
          $this->cat_id = 'cat/'.str_repeat('0',3-strlen($lastId[1])).$lastId[1];
        }else{
          $this->cat_id = 'cat/'.$lastId[1];
        } 
      }else{
        $this->cat_id = 'cat/001';
      }      
    }

	
	}

	
 ?>



	
	