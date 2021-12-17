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

		function markBeforeCS($token)
		{
			$sql="update token set beforecs = 1 where token = :token";
			$db = config::getConnexion();
			try{
				$req=$db->prepare($sql);
				$req->bindValue(':token',$token);
				$req->execute();
	           
	        }
	        catch (Exception $e){
	            echo 'Erreur: '.$e->getMessage();
	        }
		}

		function markAfterCS($token)
		{
			$sql="update token set aftercs = 1 where token = :token";
			$db = config::getConnexion();
			try{
				$req=$db->prepare($sql);
				$req->bindValue(':token',$token);
				$req->execute();
	           
	        }
	        catch (Exception $e){
	            echo 'Erreur: '.$e->getMessage();
	        }
		}

		function markBeforeC($token)
		{
			$sql="update token set beforec = 1 where token = :token";
			$db = config::getConnexion();
			try{
				$req=$db->prepare($sql);
				$req->bindValue(':token',$token);
				$req->execute();
	           
	        }
	        catch (Exception $e){
	            echo 'Erreur: '.$e->getMessage();
	        }
		}

		function markAfterC($token)
		{
			$sql="update token set afterc = 1 where token = :token";
			$db = config::getConnexion();
			try{
				$req=$db->prepare($sql);
				$req->bindValue(':token',$token);
				$req->execute();
	           
	        }
	        catch (Exception $e){
	            echo 'Erreur: '.$e->getMessage();
	        }
		}

		function markBeforeS($token)
		{
			$sql="update token set befores = 1 where token = :token";
			$db = config::getConnexion();
			try{
				$req=$db->prepare($sql);
				$req->bindValue(':token',$token);
				$req->execute();
	           
	        }
	        catch (Exception $e){
	            echo 'Erreur: '.$e->getMessage();
	        }
		}
	

	}
?>