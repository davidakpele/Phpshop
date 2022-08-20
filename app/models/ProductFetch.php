<?php 
Class ProductFetch {

	// =====================================================================
	// ALL VALIDATIONS PASS THROUGH HERE. READ, WRITE, POST, DELETE & UPDATA
	// =====================================================================

	/**
	 * Define my access to my database function
	 * Assigning $DB as the Default access to my database each time i need to read,write,post,delete data from the database
	 */

	private $DB;
	public function __construct(){
		$this->DB = new Database;

	}

    // fetching categories
    public function SqlFetchCat(){
        $this->DB->query('SELECT * FROM categories');
        $stmt = $this->DB->resultSet();
		if (!empty($stmt)){
			return $stmt;
		}else {
			return false;
		}
    }


	 // fetching products
    public function SqlFetchProd(){
        $this->DB->query('SELECT * FROM products');
        $sql = $this->DB->resultSet();
		if (!empty($sql)){
			return $sql;
		}else {
			return false;
		}
    }
    
}