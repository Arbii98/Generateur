<?php

	class TokenCore
	{
		function addToken($token,$shift)
		{
			$sql="insert into token (id,token,beforecs,aftercs,beforec,afterc,befores,shift) values (null,:token,0,0,0,0,0,:shift)";
			$db = config::getConnexion();
			try{
	        $req=$db->prepare($sql);
	        $req->bindValue(':token',$token);
			$req->bindValue(':shift',$shift);
	            $req->execute();
	           
	        }
	        catch (Exception $e){
	            echo 'Erreur: '.$e->getMessage();
	        }

		}

		function getAllTokens(){
		$sql="SELECT * from token";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste->fetchAll(PDO::FETCH_OBJ);
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
		
	}

	}
?>