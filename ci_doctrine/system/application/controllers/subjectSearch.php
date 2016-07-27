<?php

class subjectSearch extends Controller {
	
	public function __construct() 
	{
		parent::Controller();
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		$this->form_validation->set_message('exact_length', 'Subject ID Must be Six Integers');
		$this->load->helper('url');
	}
	
	public function index() 
	{
		$this->load->view('vsubject_search');
	}
	
	public function search() 
	{
		if(($_POST["subjectid"] == "") && ($_POST["fname"] == "") && ($_POST["lname"] == ""))
		{
		 	//echo $_POST["gender"]. "\r";
		 	
		 	$searchkeyGender = $_POST["gender"];
		 	$searchkeyHandedness = $_POST["handedness"];
		 	$searchkeySkinColor = $_POST["skincolor"];
		 	$searchkeyEyeColor = $_POST["eyecolor"];
		 	$searchkeyHeight = $_POST["height"];
		 	$searchkeyWeight = $_POST["weight"];
		 	$searchkeyBloodType = $_POST["bloodtype"];
		 	$searchkeyLanguages = $_POST["languagesspoken"];
		 	$searchkeyDegree = $_POST["degree"];
		 	$searchkeyHeart = $_POST["heart"];
		 	$searchkeyStroke = $_POST["stroke"];
		 	$searchkeyDiabetes = $_POST["diabetes"];
		 	$searchkeyInfections = $_POST["infections"];
		 	$searchkeyAlcoholism = $_POST["alcoholism"];
		 	$searchkeyDementia = $_POST["dementia"];
		 	$searchkeySmoking = $_POST["smoking"];
		 	$searchkeyDepression = $_POST["depression"];
		 	$searchkeyCancer = $_POST["cancer"];
		 	//$searchKeyArray = array($searchkeyGender,$searchkeyHandedness,$searchkeySkinColor,$searchkeyEyeColor,$searchkeyHeight,$searchkeyWeight,$searchkeyBloodType,$searchkeyLanguages,$searchkeyDegree, $searchkeyHeart, $searchkeyStroke, $searchkeyDiabetes, $searchkeyInfections,  $searchkeyAlcoholism, $searchkeyDementia, $searchkeySmoking, $searchkeyDepression, $searchkeyCancer);
		 	$searchKeyArray = array($searchkeyGender,$searchkeyHandedness,$searchkeySkinColor,$searchkeyEyeColor,$searchkeyHeight,$searchkeyWeight,$searchkeyBloodType,$searchkeyLanguages,$searchkeyDegree);
		 	$searchKeyArray2 = array($searchkeyHeart, $searchkeyStroke, $searchkeyDiabetes, $searchkeyInfections,  $searchkeyAlcoholism, $searchkeyDementia, $searchkeySmoking, $searchkeyDepression, $searchkeyCancer);
		 	$dbIdentifier = array('gender','handedness','skin_color', 'eye_color', 'height', 'weight', 'blood_type', 'number_languages', 'degree', 'hist_heart_dis', 'hist_stroke', 'hist_diabetes', 'hist_infectious_dis', 'hist_alcoholism', 'hist_dementia', 'hist_smoking', 'hist_depression', 'hist_cancer');
		 	$dbIdentifier2 = array('hist_heart_dis', 'hist_stroke', 'hist_diabetes', 'hist_infectious_dis', 'hist_alcoholism', 'hist_dementia', 'hist_smoking', 'hist_depression', 'hist_cancer');

			$query = "SELECT subject_id FROM data where ";
			$z=1;
			for($r=0;$r<sizeof($searchKeyArray);$r++)
			{
				
				if(($searchKeyArray[$r] != 'none') && ($z==1))
				{
					$query = $query . $dbIdentifier[$r] . "= '" . $searchKeyArray[$r] ."'";
					$z = $z + 1;
				}
				else if ($searchKeyArray[$r] != 'none')
				{
					$query = $query . " and " . $dbIdentifier[$r] . "= '" . $searchKeyArray[$r] ."'";
				}
			}
			
			for($r=0;$r<sizeof($searchKeyArray2);$r++)
			{
				if(($searchKeyArray2[$r] != '0') && ($z==1))
				{
					//$query = $query . " and (" . $dbIdentifier2[$r] . "= '" . $searchKeyArray2[$r] ."'";
					//$query = $query . "  (" . $dbIdentifier2[$r] . "= '" . $searchKeyArray2[$r] ."'";
					$query = $query . $dbIdentifier2[$r] . "= '" . $searchKeyArray2[$r] ."'";
					$z = $z + 1;
				}
				else if ($searchKeyArray2[$r] != '0')
				{
					$query = $query . " and " . $dbIdentifier2[$r] . "= '" . $searchKeyArray2[$r] ."'";
				}
			}
			//$query = $query . ")";
			//echo $query . "<br>";

			$q = Doctrine_Manager::getInstance()->getCurrentConnection();
			$results = $q->execute($query);
			$subjectID = $results->fetchAll(); 
			//echo sizeof($subjectID);
			//echo $subjectID[0]['subject_id'];
			//echo $subjectID[1]['subject_id'];
			
			
			if(sizeof($subjectID) != 0)
			{
				for($i=0;$i<sizeof($subjectID);$i++)
				{
					$temp[$i] = $subjectID[$i]['subject_id'];
				}
				for($j=0;$j<sizeof($temp);$j++)
				{
					
    				$u = Doctrine::getTable('Subject')->findOneBySubject_id($temp[$j]);
			 		$searchresults = $u->fname . ' ' . $u->lname . ' ' . $u->subject_id . ' ' . $u->email . "<br>";
			 		$searchsubjectID = $u->subject_id;
					$searchResultsArray[$j] = $searchresults;
					$subjectIDArray[$j] = $searchsubjectID;
				}
				//echo $subjectIDArray[0];
				$dataResults['results'] =$searchResultsArray;
				$dataResults['subjectID'] = $subjectIDArray;
				$this->load->view('vsubject_results', $dataResults);
			}
			else
			{
				echo 'Results Not Found';
			}
	 	}
	 	else
	 	{
	 	    if($_POST["radioTextFields"] == "subject_id")
	 	    {
		 		if ($this->_submit_validate_subjectid() === FALSE)
		 	    {
            		$this->index();
            		return;
        		}
	       		$u = Doctrine::getTable('Subject')->findOneBySubject_id($_POST["subjectid"]);
			 	$listSize = sizeof($u);
			 	if($listSize == 1)
		 		{
			 		echo "Results Not Found";
		 		}
		 		else
		 		{
			 			/*echo $u->fname;
			 			echo ' ';
			 			echo $u->lname;
			 			echo ' ';
			 			echo $u->subject_id;
			 			echo "<br>";*/
			 			//$this->load->view('mikes profile view', $u);
			 			$searchresults = $u->fname . ' ' . $u->lname . ' ' . $u->subject_id . ' ' . $u->email . "<br>";
			 			$searchsubjectID = $u->subject_id;
			 			$searchResultsArray[0] = $searchresults;
			 			$subjectIDArray[0] = $searchsubjectID;
			 			$dataResults['results'] =$searchResultsArray;
			 			$dataResults['subjectID'] = $subjectIDArray;
						$this->load->view('vsubject_results', $dataResults);
	 			}

	 		}
	 		elseif($_POST["radioTextFields"] == "fname")
	 		{
		 		$u = Doctrine::getTable('Subject')->findByFname($_POST["fname"]);
		 		$listSize = sizeof($u);
		 		if($listSize == 0)
		 		{
			 		echo "Results Not Found";
		 		}
		 		else
		 		{
		 			for($i=0; $i<$listSize; $i++)
		 			{
			 			$searchresults = $u[$i]->fname . ' ' . $u[$i]->lname . ' ' . $u[$i]->subject_id . ' ' . $u[$i]->email . "<br>";
						$searchsubjectID = $u[$i]->subject_id;
			 			$searchResultsArray[$i] = $searchresults;
			 			$subjectIDArray[$i] = $searchsubjectID;
		 			}
		 				$dataResults['results'] =$searchResultsArray;
		 				$dataResults['subjectID'] = $subjectIDArray;
						$this->load->view('vsubject_results', $dataResults);
	 			}
	 		}
	 		elseif($_POST["radioTextFields"] == "lname")
	 		{
		 		$u = Doctrine::getTable('Subject')->findByLname($_POST["lname"]);
		 		$listSize = sizeof($u);
			 	if($listSize == 0)
		 		{
			 		echo "Results Not Found";
		 		}
		 		else
		 		{
		 			for($i=0; $i<=$listSize; $i++)
		 			{
			 			/*echo $u[$i]->fname;
			 			echo ' ';
			 			echo $u[$i]->lname;
			 			echo ' ';
			 			echo $u[$i]->subject_id;
			 			echo "<br>";*/
			 			$searchresults = $u[$i]->fname . ' ' . $u[$i]->lname . ' ' . $u[$i]->subject_id . ' ' . $u[$i]->email . "<br>";
			 			$searchsubjectID = $u[$i]->subject_id;
						$searchResultsArray[$i] = $searchresults;
						$subjectIDArray[$i] = $searchsubjectID;
		 			}
		 				$dataResults['results'] =$searchResultsArray;
		 				$dataResults['subjectID'] = $subjectIDArray;
						$this->load->view('vsubject_results', $dataResults);

	 			}

	 		}

	 	}
	}
	private function _submit_validate_subjectid() {

        // validation rules
        $this->form_validation->set_rules('subjectid', 'Subject ID', 'required|exact_length[5]');
        return $this->form_validation->run();
    }

}

	 		/*
		 	$this->load->database();
		 	$query="select * from subject";
			$result=mysql_query($query);
			$num=mysql_numrows($result);
			echo $num;
			$i=0;
			while ($i < $num) 
			{

				//CODE
				$first=mysql_result($result,$i,"fname");
				echo $first;
				$i++;
			}*/