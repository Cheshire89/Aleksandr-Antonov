<?php
function connect(){
	try{
		$db = new PDO('mysql:host=68.178.143.46; dbname=Cheshire','Cheshire','Ivashok1989!1');
		$db -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}catch(Exception $e) {
		echo $e->getMessage();
		die();
	}

	return $db;
}

function selectParamQuery($sqlStr){
	$db = connect();	

	$numOfParam = substr_count($sqlStr, '?');
	$artistId = getArtistId();
	$workId = getWorkId();
	
	try{
    $results = $db -> prepare($sqlStr);
    if( intval($workId)){
    $results -> bindParam(1,$workId);
    } elseif (intval($artistId)) {
    $results -> bindParam(1,$artistId);  	
    } 
    $results -> execute();
    
    } catch (Exception $e){
    
    echo $e->getMessage();
    die();
    }

    $artist = $results -> fetchAll(PDO::FETCH_ASSOC);
    
    if($artist == FALSE){
      echo "Our Appologies No Artist was Found with the Provided Id";
    }

return $artist;
}

function selectQuery($sqlStr){
	$db = connect();
	
	try{
	$results = $db -> query($sqlStr);
	} catch(Exception $e){
	echo $e -> getMessage();
	die();
	}

$artists = $results -> fetchAll(PDO::FETCH_ASSOC);

return $artists;
}

?>
