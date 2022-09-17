<?php
	$page = "Link Furniture - About";
	include('includes/header.php');
    session_start();
    $_SESSION['page'] = 'about.php';
?>
	<main id="about" class="w-1000 fullwidth margin-center padding">
        <div id="aboutSection" class="margins">
        <img src="images/chair.jpg" alt="Yellow chair in the living room" class="fade-in">
        <article>
            <h2 class="titillium small platinum-underline">About</h2>
            <p>Link furniture primarily specializes in interior living. We offer a range of products and accessories which serve the purpose of improving the aesthetic design of your home. All our products are hand-crafted out of sustainable materials resulting in inexpensive products.</p>
        </article>
        <article>
            <h2 class="titillium small platinum-underline">Mission</h2>
            <p>Our mission is to improve the quality of life through minimalism and make your life at home more enjoyable. We believe that good home decoration improves your sense of well-being and increases your productivity.</p>
        </article>
        <img src="images/living-room.jpg" alt="Living room" class="margin-none fade-in">
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