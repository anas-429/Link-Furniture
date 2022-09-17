<?php
	$page = "Link Furniture - Products";
	include('includes/header.php');
    session_start();
    $_SESSION['page'] = 'products.php';
?>
<?php
    $query = "SELECT * FROM products";
?>
    <main id="products">
        <div class="w-1500 margin-center padding">
        <div id="categoryFilter" class="margin-bottom">
            <h3 class="titillium flex-between margin-none">Filter By:<img src="images/filter.svg" alt="Filter" 
            class="filter-icon open-categories pointer margin-none"></h3>
        </div>

        <dialog id="categoryDialog" class="dialog black-bg-05 fullwidth fullheight-vertical position-fixed-left">
            <div class="scrollable white-bg w-500 h-500 fullwidth fullheight padding margin-none fade-scale">
            <h3 class="titillium platinum-underline flex-between margin-bottom">Select Category <span class="exit-categories pointer margin-none">&#10006;</span></h3>
            <ul class="list margins-light no-list-style">
                <li><input type="radio" name="option" value="All" id="all" checked><label for="all">All</label>
                <li><input type="radio" name="option" value="Living" id="Living"><label for="Living">Living</label>
                <li><input type="radio" name="option" value="Office" id="Office"><label for="Office">Office</label>
                <li><input type="radio" name="option" value="Bedroom" id="Bedroom"><label for="Bedroom">Bedroom</label>
                <li><input type="radio" name="option" value="Kitchen" id="Kitchen"><label for="Kitchen">Kitchen</label>
            </ul>
            </div>
        </dialog>

        <div id="productGrid" class="fade-in">
            <?php
                
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
        </div>
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
    <script src="filter.js"></script>
    <script src="application.js"></script>
</body>
</html>
