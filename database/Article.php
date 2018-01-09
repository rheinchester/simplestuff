<?php
//show articles
//show subscribers
// Add article 
include_once 'Model.php';
	
	class Article extends Model{
		protected $article_id;
		public $cat_id;
		public $headline;
		public $readers;
		public $subscribers;
		public $topic;
		public $image;


		public static $class_name = 'Article';
		public static $table_name = 'articles';
		public static $primary_key = 'article_id';
		public static $table_fields = array('headline','subscribers','readers','article_id','cat_id','topic','image');

		
		
		public function __construct(){
			parent::__construct();
		}

		public function getArticleId(){
			return $this->article_id;
		}

		public static function getDropDown(){
			$articles = static::all();
			$dropdown = "<select class ='form-control' name ='article_id'>
							<option  value = ' '>select article</option>";
			foreach ($articles as $article) {
				$dropdown .= "<option value='{$article->article_id}'>{$article->topic}</option>";
				}	
				$dropdown .= "</select>";
				return $dropdown;
		}
		
		protected $upload_errors = array(
		 UPLOAD_ERR_OK => "No errors" ,
		 UPLOAD_ERR_INI_SIZE => "Larger than upload_max_filesize" ,
		 UPLOAD_ERR_FORM_SIZE => "Larger than form max filesize" ,
		 UPLOAD_ERR_PARTIAL => "Partial upload" ,
		 UPLOAD_ERR_NO_FILE => "No file" ,
		 UPLOAD_ERR_NO_TMP_DIR => "No temporary directory" ,
		 UPLOAD_ERR_CANT_WRITE => "Cant write to disk" , 
		 UPLOAD_ERR_EXTENSION => "File upload stopped by extension"
	);

		//SUPERGLOBALS ARE NORMALLY ARRAYS

	public  function attach_file($file){
		if (!$file || empty($file) || !is_array($file)) {
		$this->errors[] = "No file was uploaded";
		return false;
		}elseif ($file['error'] != 0) {
			$this->errors[] = $this->upload_errors[$file['error']];
			return false;
			}else{
				if (!isset($this->article_id)) {
					$this->article_id = self::nextId();
					$this->temp_path = $file['tmp_name'];
					$this->image = str_replace("/", "_", $this->article_id).".".basename($file["type"]);
					$this->type = $file["type"];
					$this->size = $file["size"];
					return true;
				}
			}
		}
	public  function save_with_file(){
		//house cleaning
		if (!empty($this->errors)) {return false; }
		if (empty($this->image) || empty($this->temp_path)) {
			$this->errors[] = "The file localtion was not available";
			return false;
		}
		$target_path = "../images/articles/".$this->image;
		//attempt to move the file
		if (move_uploaded_file($this->temp_path, $target_path)) {
		 	//save to db
		 	$this->create();
		 	unset($this->temp_path);
		 	return true;	
		 }else{
		 	$this->errors[] = "The file upload failed, possible due to incorrect permissions on the upload folder";
		 		return false;
		 }
	}


	public function nextId(){
		if ($lastarticle = static::last()) {
		$lastId = $lastarticle->article_id;
		}else{
			$lastId = 0;
		}
		return ++$lastId;
		}
	public function delete(){
	      $sql = " DELETE FROM ".self::$table_name;
	      $sql.= " WHERE article_id = '{$this->article_id}'";
	      // echo $sql;
	      return static::findBySql($sql);
	}
}
 
	
 ?>
