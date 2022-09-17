<?php
	$page = "Link Furniture - Description";
	include('includes/header.php');

    if(isset($_GET['id'])) {
        session_start();
        $_SESSION['page'] = "description.php?id=".$_GET['id']."";
    }

?>
<?php
    $id = $_GET['id'];
    $query = "SELECT * FROM products WHERE id=$id";	
?>
    <main id="description" class="w-1500 fullwidth margin-center">

        <div class="double-layout-gap padding">
        <?php
            $sql = mysqli_query($connection, $query);	
            $row = mysqli_fetch_array($sql);

            print '<div id="productImgContainer" class="double-half margins fade-in">';
                print '<img src="thumbnails/'.$row['image'].'" alt="'.$row['product'].'" class="product-img margin-none">';
            print '</div>';

            print '<div id="productContent" class="double-half fullwidth margin-center margins fade-in" data-id="'.$row['id'].'" data-name="'.$row['product'].'" data-image="'.$row['image'].'" data-price="'.$row['price'].'">';

            print '<div class="platinum-underline">';
            print '<div class="double">';
                print '<h2 class="titillium margin-none">'.$row['product'].'</h2>';
                print '<input type="submit" value="Add To Cart" id="'.$row['id'].'" class="purchase-button button green-bg orange-bg-hover bold pointer fullwidth padding-light margin-none">';
            print '</div>';
            print '</div>';

            print '<table id="basic" class="titillium x-small fullwidth">';
            print '<tbody class="margin-none">';
                print '<tr class="properties platinum-bg fullwidth padding margin-none">';
                    print '<td>Price</td>';
                    print '<td class="margin-none">Category</td>';
                print '</tr>';
                print '<tr class="values fullwidth padding margin-none">';
                    print '<td class="green">$'.$row['price'].' CAD</td>';
                    print '<td class="margin-none">'.$row['category'].'</td>';
                print '</tr>';
            print '</tbody>';
            print '</table>';
            
            print '<h3 class="titillium platinum-underline">Specifications</h3>';

            print '<table id="specs" class="titillium x-small fullwidth">';
                print '<tbody class="margin-none">';
                print '<tr class="properties green-bg fullwidth padding margin-none">';
                    print $row['table_properties'];
                print '</tr>';
                print '<tr class="values fullwidth padding margin-none">';
                print $row['table_values'];
                print '</tr>';
                print '</tbody>';
            print '</table>';

            ?>

            <p class="margin-none"><a href="products.php" class="red-hover margin-none">&#8592; Click here to return to products.</a></p>

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
    <script src="application.js"></script>
</body>
</html>

