<?php
try {

 $objDb = new PDO('mysql:host=localhost;dbname=DD', 'root', 'nitish123');
 $objDb->exec('SET CHARACTER SET utf8');

 $sql = "SELECT DISTINCT state 
  FROM `Regions`";
 $statement = $objDb->query($sql);
 $list = $statement->fetchAll(PDO::FETCH_ASSOC);

 } 
 catch(PDOException $e) {
 echo 'There was a problem';
 }

 ?> 	

<!DOCTYPE HTML>
<html>
	<head>
	<title>MEDI-FRIEND</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700" rel="stylesheet" />
		<script src="js/jquery.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
			<link rel="stylesheet" href="css/bootstrap-responsive.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/style-ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->

</head>
	<body>
		<!-- Header -->

			<div id="header-wrapper">
				<header class="container-fluid" id="site-header">
					<div class="row">
						<div class="12u">
							<div id="logo">
				<h1>MEDI-FRIEND</h1>
							</div>
							<nav id="nav">
								<ul>
									<li class="current_page_item"><a href="index.html">HOMEPAGE</a></li>
									<li><a href="bloodbank.html">BLOOD BANK</a></li>
									<li><a href="healthtips.html">HEALTH TIPS</a></li>
									<li><a href="about.html">ABOUT</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</header>
			</div>
			<!-- Header -->


		<!-- Main -->

			<div id="main-wrapper">
				<div class="container-fluid">
					
					<!-- Banner -->

						<div class="row">
							<div class="12u">
              <form id="form_659611" method="post" action="">
					<div class="form_description">
			<h2>Register Yourself For Blood Donation</h2>
		</div>						
			<ul >
			
					<li id="li_1" >
		<span>
        First Name:<input id="element_1_1" name= "element_1_1" class="element text" maxlength="255" size="8" value="" />
			
		</span><br>
		<span>
		Last Name:<input id="element_1_2" name= "element_1_2" class="element text" maxlength="255" size="8" value=""/>
			
		</span> 
		</li>		<li id="li_3" >
		<div>
			Age:<input id="element_3" name="element_3" class="element text" size="8" type="text" maxlength="255" value="" /> 
 </div>
		</li>		<li id_="li_4">
		<div class="right">
		<label class="description" for="element_4">Enter Your Blood Group:</label>
			<select class="element select medium" id="element_4" name="element_4"> 
			<option value="" selected="selected"></option>
<option value="A+" >A+</option>
<option value="A-" >A-</option>
<option value="B+" >B+</option>
<option value="B-" >B-</option>
<option value="AB+" >AB+</option>
<option value="AB-" >AB-</option>
<option value="O+" >O+</option>
<option value="O-" >O-</option>
			</select>
	</div> 
		</li>		<li id="li_5" >
		<div>
			Contact No:<input id="element_5" name="element_5" class="element text medium" type="text" maxlength="255" value=""  size="8"/> 
		</div> 
		</li>		<li id="li_6" >
		<label class="description" for="element_6">Address: </label>
		
		<div>
			Street Address:<input id="element_6_1" name="element_6_1" class="element text large" value="" type="text">
		</div>
	
		<div class="left">
			City:<input id="element_6_3" name="element_6_3" class="element text" value="" type="text" size="8">
		</div>
	
		<div class="left">
			Postal / Zip Code:<input id="element_6_5" name="element_6_5" class="element text medium" maxlength="15" value="" type="text" size="8">
		</div>
	<li>
		<div class="left">
			State:<select name="state" id="state" class="update">
        <option value="">Select State</option>
        <?php if (!empty($list)) { ?>
            <?php foreach($list as $row) { ?>
                <option value="<?php echo $row['state']; ?>">
                    <?php echo $row['state']; ?>
                </option>
            <?php } ?>
        <?php } ?>
    </select>	
	</div> 
		</li>
		<li>
		<div class="right">
	 District:	<select name="district" id="district" class="update">
	   <option value="">Select District</option>
	 </select>
	 <script src="js/jquery-1.9.1.js"></script>	
  <script src="ajax.js" type="text/javascript"></script>
  <div>
</li>
          <li class="buttons">
			    <input type="hidden" name="form_id" value="659611" />
			 	<input id="saveForm"  class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
			
		</form>
	        </div>
								   </div>
							       </div>
																</div>
          </body>
</html>
