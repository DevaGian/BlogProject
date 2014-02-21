<?php		
	$pos = trova_mysql($_SESSION['username'], "Username", "utente");	
	$row=getInfo($pos, 'utente', 'ID');
	$user=$row['Username'];
	$psw=$row['Password'];
	$access=$row['UltimoAccesso'];
	
	
	//verifica admin
	$admin=$row['Admin'];
		
	$info=getInfo($pos, 'informazioniu', 'Utente');	
	$nome=$info['Nome'];
	$cognome=$info['Cognome'];
	$informazioni=$info['Informazioni'];
	$imm=$info['Immagine'];
	$born=$info['Nascita'];
	$reg=$info['registerdate'];
	//var_dump($info);exit;
?>
<div class="row" id="sotto">
	<?php include "menu.php"; ?>
       <div class="col-sm-9 col-md-10">
       <table align="center">
       <tr><td colspan="2" align="center"><img src="<?=$imm?>" alt="Avatar di <?=$user?>" width="200" height="200" /></td></tr>
       	<tr>
        	<td>
            	<ul class="list-group">                           
                	<li class="list-group-item list-group-item-info">Username</li>
                    <li class="list-group-item list-group-item-info">Nome</li>
                    <li class="list-group-item list-group-item-info">Cognome</li>
                    <li class="list-group-item list-group-item-info">Informazioni</li>
                    <li class="list-group-item list-group-item-info">Data di nascita</li>
                    <li class="list-group-item list-group-item-info">Ultima visita</li>    
                    <li class="list-group-item list-group-item-info">Data di registrazione</li>                
        		</ul>
            </td>
            <td>
            	<ul class="list-group">                 	          
                	<li class="list-group-item"><?php echo($user); ?></li>                    
                    <li class="list-group-item"><?php echo($nome); ?></li>   
                    <li class="list-group-item"><?php echo($cognome); ?></li>
                    <li class="list-group-item"><?php echo($informazioni); ?></li>  
                    <li class="list-group-item"><?php echo($born); ?></li> 
                    <li class="list-group-item"><?php echo($access); ?></li> 
                    <li class="list-group-item"><?php echo($reg); ?></li>                  
        		</ul>
            </td>
        </tr>
       </table>
       </div>
</div>