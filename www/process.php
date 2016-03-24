<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Ping Pong table Reservation System</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="css/default.css"/>
    </head>
    <body>    
        <form action="" class="register">
            <h1>Online Reservation</h1>
			<?php if(isset($_POST)==true && empty($_POST)==false): 
			    
				$chkbox = $_POST['chk'];
				
				$day = $_POST['day'];
				$month = $_POST['month'];
				$mob = $_POST['mob'];
				$hall = $_POST['hall'];
				$from = $_POST['from'];
				$to=$_POST['to'];
				$table=$_POST['table'];
				$BX_NAME=$_POST['BX_NAME'];
				$BX_age=$_POST['BX_age'];			
				$BX_gender=$_POST['BX_gender'];
				$BX_racket=$_POST['BX_racket'];	
			    	
							    
				$logged_in_users=array("admin" => "password");
				if (isset($_POST['login_name'])==true && isset($_POST['password'])==true):
				{
					
					$name = $_POST['login_name'];
					$password = $_POST['password'];
					$logged_in_users[$name] = [$password];
				}
				else:
				{
					$name = $_POST['name'];
					
				}
				endif;
									
				if (array_key_exists($name, $logged_in_users) )
				{
					
				}
				else
				{
					header("Location: fail.html");
				}
			?>
			<fieldset class="row1">
                <legend>Booking Information</legend>
				<p>
                    <label>Booking Name 
                    </label>
                    <input name="name" type="text" readonly="readonly" value="<?php echo $name ?>"/>
                    <label>Date of reservation
                    </label>
					<input type="text" readonly="readonly" class="small" value="<?php echo $day ?>"/>
					<input type="text" readonly="readonly" class="small" value="<?php echo $month ?>"/>
					<input type="text" readonly="readonly" class="small" value="2013"/>
					<label>Sport hall  
                    </label>
                    <input  type="text" readonly="readonly" value="<?php echo $hall ?>"/>
					
                </p>
                <p>
					<label>Playing From
                    </label>
                    <input name="from" type="text" readonly="readonly" value="<?php echo $from ?>"/>
					<label>To
                    </label>
					<input name="to" type="text" readonly="readonly" value="<?php echo $to ?>"/>
					<label>Table
                    </label>
					<input  type="text" readonly="readonly" value="<?php echo $table ?>"/>
					 
                </p>
                <p>
                    <label>Mobile
                    </label>
                    <input name="mob" type="text" readonly="readonly" value="<?php echo $mob ?>"/>
                    <label >(Please come 5 minutes before booked time) 
                    </label>
					
					
                </p>
				
				<div class="clear"></div>
            </fieldset>
            <fieldset class="row2">
                <legend>Player Details
                </legend>				
                <table id="dataTable" class="form" border="1">
					<tbody>
					<?php foreach($BX_NAME as $a => $b){ ?>
						<tr>
							<p>
								<td >
									<?php echo $a+1; ?>
								</td>
								<td>
									<label>Name</label>
									<input type="text" readonly="readonly" name="BX_NAME[$a]" value="<?php echo $BX_NAME[$a]; ?>">
								</td>
								<td>
									<label for="BX_age">Age</label>
									<input type="text" readonly="readonly" class="small"  name="BX_age[]" value="<?php echo $BX_age[$a]; ?>">
								</td>
								<td>
									<label for="BX_gender">Gender</label>
									<input type="text" readonly="readonly" name="BX_gender[]" value="<?php echo $BX_gender[$a]; ?>">
								</td>
								<td>
									<label for="BX_birth">Needs racket</label>
									<input type="text" readonly="readonly" name="BX_birth[]" value="<?php echo $BX_racket[$a]; ?>">
								</td>
							</p>
						</tr>
					<?php } ?>
					</tbody>
                </table>
				<div class="clear"></div>
            </fieldset>
            <fieldset class="row3">
                <legend>Further Information</legend>                  
                    <p>The identification details are required before you can play. </p>
				<div class="clear"></div>
            </fieldset>
            <fieldset class="row5">
                <legend>Terms and Condition</legend>
                <p>
					<input class="submit" type="button" value="Make Payment &raquo;" />
					<a class="submit" href="index.html" type="button"> Back To Booking page <a/>
					
                </p>
				<div class="clear"></div>
            </fieldset>
		<?php else: ?>
		<fieldset class="row1">
			<legend>Sorry</legend>
			 <p>Some things went wrong please try again.</p>
		</fieldset>
		<?php endif; ?>
			<div class="clear"></div>
        </form>
    </body>
	
</html>





