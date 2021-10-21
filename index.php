
<html>
<head>
	<title>Zambia Police</title>
	<link rel = "stylesheet" href="includes/css/home_page_toos.css">
	<link rel = "stylesheet" href="includes/css/home_page_basic.css">
	
</head>
<body>

<div class="container" style="height: 100%;">
	<div class="" style="">

<ul style="text-transform: uppercase;">
	<li>
		<a>Admin</a>
	<ul>
		<li><a href = "">Add system user</a></li>
		<li><a href = "">Reset Password</a></li>
		<li> <a href = "">LOGOUT</a></li>
	</ul>

	</li>

		<li>
		<a>Systems</a>

		<ul>
			
			<li><a href ="new_formation?Page1=p2">Email System</a></li>
			<li><a href = "">Accounts</a></li>

		</ul>
	</li>
</ul>





	<div style="margin-top: 30%; display: flex; flex-wrap: wrap; justify-content: center; padding: ">
	

	<h3 style=" text-transform: uppercase; background-color: black; color: white; opacity: .7;">
				<?php

				$current_time = date("h:i:sa");
				
				$date1 = DateTime::createFromFormat('H:i a', $current_time);
				
				if ($date1 >= DateTime::createFromFormat('H:i a', "00:00 am")
					&& 
					$date1 <= DateTime::createFromFormat('H:i a', "11:59 am"))
				{
				   echo " Good Morning ";
				}
				elseif ($date1 >= DateTime::createFromFormat('H:i a', "00:00 pm")
					&& 
					$date1 <= DateTime::createFromFormat('H:i a', "05:00 pm"))
				{
				   echo " Good Afternoon ";
				}
				elseif ($date1 >= DateTime::createFromFormat('H:i a', "05:00 pm")
					&& 
					$date1 <= DateTime::createFromFormat('H:i a', "08:00 pm"))
				{
				   echo " Good Evening ";
				}
				else {echo " Hi ";
				}

				
				?>
					
			</h3>
			
		</div>
	

	</div>
</div>

</body>
</html>