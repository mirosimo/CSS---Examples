<!DOCTYPE html>
<html lang="en">
    <head>
        <title>DIV CSS Table</title>
        <link rel="stylesheet" href="style.css?<?php echo time(); ?>" />            
    </head>
    <body>        
            <div class="title_part">		
		<h1>Seznam zákazníků</h1>
            </div>
            
            <div class="table_part">			  			    	
	    	<table cellspacing="0" cellpadding="0">
                    <tr class="row_head">
	      		<th>Jméno</th> 
                        <th>Příjmení</th> 
                        <th>Město</th>
                    </tr>
                        <tr class="row_body"> <td>Karel</td> <td>Vosáhlo</td> <td>Praha</td> </tr>	      		
                        <tr class="row_body"> <td>Aleš</td> <td>Petrásek</td> <td>Beroun</td> </tr>                                                     	      		
                        <tr class="row_body"> <td>Ladislav</td> <td>Procházka</td> <td>Lanškroun</td> </tr>	      		
                        <tr class="row_body"> <td>Václav</td> <td>Veselovský</td> <td>Příbram</td> </tr>
                        <tr class="row_body"> <td>Zdeněk</td> <td>Novák</td> <td>Praha</td> </tr>
                        <tr class="row_body"> <td>Petr</td> <td>Kmeťovský</td> <td>Slaný</td> </tr>
                        <tr class="row_body"> <td>Pavel</td> <td>Žák</td> <td>Kolín</td> </tr>                    

	      	</table>
            </div>
        
            <div class="buttons_part">		
		<a href="#">Přidej záznam</a>
            </div>
    </body>
</html>
