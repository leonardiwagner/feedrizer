<?php

include_once "../Repository/Tag.php";

$tagRepository = new \Repository\Tag();
$tagList = $tagRepository->getTop(0,500);

$jsonReturn = "[";

for($i = 0; $i < sizeof($tagList); $i++){
	$jsonReturn .= "\"". $tagList[$i]->getName() ."\"";
	
	if($i < (sizeof($tagList) - 1))
	{
		$jsonReturn .= ",";
	}
}

$jsonReturn .= "]";

echo $jsonReturn;

?>