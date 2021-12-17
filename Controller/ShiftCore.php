<?php 

    class ShiftCore
    {
        function startShift($numshift)
		{
			$sql="INSERT INTO shift VALUES (null,:num,CURRENT_TIMESTAMP,null,1)";
			$db = config::getConnexion();
			try{
	        $req=$db->prepare($sql);
	        $req->bindValue(':num',$numshift);
	            $req->execute();
	           
	        }
	        catch (Exception $e){
	            echo 'Erreur: '.$e->getMessage();
	        }

		}

		function getAllShifts(){
			$sql="SELECT * from shift";
			$db = config::getConnexion();
			try{
				$liste=$db->query($sql);
				return $liste->fetchAll(PDO::FETCH_OBJ);
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function getCurrentShift(){
			$sql="SELECT * from shift where isCurrent=1";
			$db = config::getConnexion();
			try{
				$liste=$db->query($sql);
				return $liste->fetchAll(PDO::FETCH_OBJ);
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

        function markFinShift()
		{
			$sql="UPDATE shift SET date_fin=CURRENT_TIMESTAMP,isCurrent=0 WHERE isCurrent=1";
			$db = config::getConnexion();
			try{
				$req=$db->prepare($sql);
				$req->execute();
	           
	        }
	        catch (Exception $e){
	            echo 'Erreur: '.$e->getMessage();
	        }
		}



    }



?>