<?
	$pages = array(
		
		'home'=> array(
			'url' => 'index.php',
			'section' => 'home',
			'title' => 'Home'
		),
		
		'links'=> array(
			'url' =>'links.php',
			'section' => 'links',
			'title' => 'Links'
		),
			
		'contact'=> array(
			'url' =>'contact.php',
			'section' => 'contact',
			'title' => 'Contact'
		),
		
		'about'=> array(
			'url' =>'about.php',
			'section' => 'about',
			'title' => 'About Me'
		)
	);
			
?>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    	
    	<div class="container">

   			 
   			 <div class="navbar-header">
				<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".nav-c">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Home</a>
				
			</div>
				
			<div class="collapse navbar-collapse nav-c">
				
				<ul class="nav navbar-nav">
				
					<!-- Get each key and value pair in the $pages array , dynamically generates a list of links-->
					<? foreach($pages as $name => $data): ?>
							
						<li class=" <?=$data['section']?> "> 
							
							<a href=" <?=$data['url']?> "> 
								<?=$data['title'] ?> 
							</a>
						</li>
						
					<? endforeach; ?>
					
					
					<li class="dropdown">
		      			  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other<b class="caret"></b></a>
		      			  <ul class="dropdown-menu">
		      			  	
								
		        		</ul>
		      		</li>
				</ul>
				
			</div>
   			 
		</div>
		
	</div>
	<!-- End navbar-->
	

