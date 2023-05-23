<?php
	$page = "Link Furniture - Homepage";
	include('includes/header.php');
	session_start();
	$_SESSION['page'] = 'index.php';
?>
	<main id="home" class="w-2000 fullwidth margin-center">
		<div id="introductionSection">
			<div class="double-layout-gap">
				<div id="homeBgCover" class="double-half bg-cover fullwidth">
				<div id="banner" class="black-bg-05 fullwidth fullheight flex-center">
					<div class="margin-center padding">
						<h2 class="titillium platinum-underline small white margin-bottom-light">Welcome Homeowner!</h2>
						<a href="products.php" class="button">Explore Products</a>
					</div>
				</div>
				</div>
				<div class="double-half margin-center-vertical flex-center-left flex-column">
				<article>
					<h2 class="titillium platinum-underline medium margin-bottom-light">Welcome</h2>
					<p>You are probably looking at your room and thinking, “What I can do to improve the appearance of my home?”. The Link Furniture eCommerce store has the perfect answer to this question. With our collection of furniture and decorative products, you can really bring life into your home.</p>
				</article>
				</div>
			</div>
		</div>
		<section id="contentSection" class="padding margin-center">
		<h2 class="titillium small margin-bottom-light fade-in">Featured Products</h2>
		<div id="productGrid">
            <?php

                $query = "SELECT * FROM products LIMIT 4";
                
				//Send a query to the MySQL, allows you to select certain information from the database.
				$sql = mysqli_query($connection, $query);
		
				//Takes all the information gathered and converts it into an array.
				while($row = mysqli_fetch_array($sql)) {

                print "<a href=\"description.php?id=".$row['id']."\" class=\"All ".$row['category']."\" data-price=\"".$row['price']."\">";	
                    print '<figure class="product platinum-outline padding-light">';
                    print '<img src="thumbnails/'.$row['image'].'" alt="'.$row['product'].'">';
                    print '<figcaption class="titillium flex-center-start flex-column margins-light">';
				    print '<span class="product-name bold">'.$row['product'].'</span>';
                    print '<span class="product-category tiny">'.$row['category'].'</span>';
                    print '<span class="product-price tiny green">$'.$row['price'].' CAD</span>';
                    print '</figcaption>';
                    print '</figure>';
                print '</a>';
                    
                }
            
            ?>
		</div>
		</section>
	</main>
	<footer class="metal-bg padding">
        <ul class="white no-list-style margin-bottom margins-light">
            <li><a href="index.php">Home</a>
            <li><a href="about.php">About</a>
            <li><a href="products.php">Products</a>
            <li class="margin-none"><a href="contact.php">Contact</a>
        </ul>
		<p>© Copyright <?php print date('Y'); ?> Link Furniture. All Rights Reserved.</p>
    </footer>
	<script src="application.js"></script>
</body>
</html>