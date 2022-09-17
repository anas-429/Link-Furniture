<?php
	$page = "Link Furniture - Contact";
	include('includes/header.php');
    session_start();
    $_SESSION['page'] = 'contact.php';
?>
<?php
			
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        print '<dialog id="formDialog" class="black-bg-05 flex-center fullheight-vertical fullwidth position-fixed-left" open>
            <div class="white-bg w-500 h-500 padding fade-scale">
                <h2 class="titillium small platinum-underline flex-center flex-between margin-bottom fade-right">Form Submitted!<span class="modal-exit red-hover pointer margin-none">&#10006;</span></h2>
                <p class="margin-none">Someone from customer service will reach out to you as soon as possible. We are open to resolving any customer concerns.</p>
            </div>
        </dialog>';
        
    }
        
?>
	<main id="contact" class="fullwidth w-1000 margin-center padding">
        <article class="margin-bottom">
            <h2 class="titillium medium platinum-underline margin-bottom-light">Contact</h2>
            <p class="margin-bottom">If you want to know the status of your order, please fill out the form. Make sure you include your name and contact information.</p>
            <p class="italic platinum-underline">All fields are required.</p>
        </article>
        <form method="post" action="contact.php" class="double-margins">

			<input type="text" name="first-name" placeholder="First Name"
			id="first-name" class="fullwidth padding" required>

			<input type="text" name="last-name" placeholder="Last Name"
			id="last-name" class="fullwidth padding" required>

			<input type="text" name="email" placeholder="E-Mail"
			id="email" class="fullwidth padding" required>

			<input type="text" name="subject" placeholder="Subject"
			id="subject" class="fullwidth padding" required>

			<textarea name="message" placeholder="Message" id="message" rows="5" cols="80" class="fullwidth padding fade-in">
			</textarea>
                    
			<input type="submit" value="Submit"
			class="titillium bold button pointer green-bg orange-bg-hover fullwidth padding margin-none fade-in">
		</form>
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