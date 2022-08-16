<?php 

	class list_school { 
      
	    var $name; 
	    var $year_in; 
	    var $year_out; 
	    var $major; 
	    var $major2; 
	      
	    function __construct( $name, $year_in, $year_out, $major )  
	    { 
	        $this->name = $name; 
	        $this->year_in = $year_in; 
	        $this->year_out = $year_out; 
	        $this->major = $major; 
	    } 
	} 

	/**
	 *tambah
	 */
	class skills{
		var $skill_name;
		var $level;
		function __construct($skill_name, $level)
		{
			$this->skill_name = $skill_name; 
			$this->level = $level; 
		}
	}

	function myBiodata()
	{
		$biodata = array(
			'name' => 'Muhammad Sani',
			'age' => 24,
			'address' => 'Dusun Sentosa',
			'hobbies' => ['olahraga', 'musik', 'coding'],
			'is_married' => false ,
			'list_school' => [new list_school('SD Tanjong Meulaboh','2000','2006',''),new list_school('MTsN Peureumeu','2006','2009',''),new list_school('SMA 2 Negeri Meulaboh','2009','2012',''),new list_school('Universitas Syiah Kuala','2012','2016','Informatika')],
			'skills' => [new skills('Code Igniter', 'advanced'), new skills('Laravel', 'beginner'), new skills('Arcgis', 'advanced'), new skills('Premiere Pro', 'expert'), new skills('Photoshop', 'advanced'), new skills('C Programming Language', 'advanced') ],
			'interest_in_coding' => true
		);
		return json_encode($biodata);
	}

	echo myBiodata();
 ?>