<?php
	$page = "Link Furniture - Checkout";
	include('includes/noheader.php');
    session_start();
?>
    <dialog id="shoppingCartDialog" class="dialog black-bg-05 fullwidth fullheight-vertical position-fixed-left">
        <div class="scrollable white-bg fullwidth fullheight-vertical w-500 h-500 padding margin-none fade-scale">
            <h2 class="titillium platinum-underline flex-between margin-bottom fade-right">Shopping Cart<span class="modal-exit pointer margin-none">&#10006;</span> </h2>
            <div id="finalized" class="margin-none">
            </div>
            <div id="finalizedTab" class="flex-end">
                <p class="fade-right tiny"><span class="bold">Total Cost: <span id="finalizedTotal" class="green"></span></span></p>
            </div>
        </div>
    </dialog>
	<main id="checkout" class="w-1000 double-half margin-center padding">
        <article class="margin-bottom">
			<h2 class="titillium platinum-underline medium margin-bottom-light">Checkout</h2>
            <p class="titillium bold platinum-underline margin-bottom flex-between">Shipping Info <i class="foundicon-cart final-icon margin-none pointer"></i></p>
			<p>Before you can fill out your payment information, you will need to provide your mailing address and contact information. We want to make sure that you can keep track of your shipment.</p>
		</article>
        <form action="checkout.php" method="post" class="margins margin-bottom"> 
            <div class="double">
            <div class="form-element">
				<input type="text" name="firstname" 
				id="firstname" class="fullwidth padding-light margin-none" placeholder="First Name" required>
            </div>
            <div class="form-element">
				<input type="text" name="lastname" 
				id="lastname" class="fullwidth padding-light margin-none" placeholder="Last Name" required>
            </div>
            </div>

            <div class="double">
            <div class="form-element">
				<input type="text" name="residence" 
				id="residence" class="fullwidth padding-light margin-none" placeholder="Residence" required>
            </div>
            <div class="form-element">
				<input type="text" name="email" 
				id="email" class="fullwidth padding-light margin-none" placeholder="email" required>
            </div>
            </div>
            
            <div class="double">
            <div class="form-element">
                <select name="province" id="province" class="fullwidth padding-light margin-none">
	                <option value="AB">Alberta
	                <option value="BC">British Columbia
                    <option value="MB">Manitoba
                    <option value="NB">New Brunswick
                    <option value="NL">Newfoundland and Labrador
                    <option value="NT">Northwest Territories
                    <option value="NS">Nova Scotia
                    <option value="NU">Nunavut
                    <option value="ON">Ontario
                    <option value="PE">Prince Edward Island
                    <option value="QC">Quebec
                    <option value="SK">Saskatchewan
                    <option value="YT">Yukon
                </select>
            </div>

            <div class="form-element">
				<input type="text" name="city" 
				id="city" class="fullwidth padding-light margin-none" placeholder="City" required>
            </div>
            </div>

            <div class="double margin-none">
                <div class="form-element">
				    <input type="text" name="postalcode" id="postalcode" 
                        class="fullwidth padding-light margin-none" placeholder="Postal Code" required>
                </div>
			    <input type="submit" id="completeButton" name="submit" value="Checkout" class="bold pointer green-bg orange-bg-hover fullwidth padding-light margin-none">
            </div>

            <input type="hidden" name="hiddenProducts" 
            id="hiddenProducts" value="">

            <input type="hidden" name="hiddenTotal" 
            id="hiddenTotal" value="">

		</form>

        <a href="<?php if(isset($_SESSION['page'])) {print $_SESSION['page']; } else {print 'index.php';}?>">&#8592; Click here to return to the previous page.</a>

	</main>
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $connection = mysqli_connect('localhost', 'root','', 'linkfurniture');

    if(!$connection) {
        die(mysqli_connect_error());
    }

    if(isset($_POST['firstname'])) {

        $fullname = mysqli_real_escape_string($connection, $_POST['firstname']." ".$_POST['lastname']);
        $residence = mysqli_real_escape_string($connection, $_POST['residence']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $city = mysqli_real_escape_string($connection, $_POST['city']." ".$_POST['province']);
        $postalCode = mysqli_real_escape_string($connection, $_POST['postalcode']);
        $products = mysqli_real_escape_string($connection, $_POST['hiddenProducts']);
        $total = mysqli_real_escape_string($connection, $_POST['hiddenTotal']);
        
        $query = "INSERT INTO orders (customer,residence,email,city,postalcode,products,total) VALUES
        ('$fullname','$residence','$email','$city','$postalCode','$products','$total')";

        if (mysqli_query($connection, $query)) {

        print '<dialog id="paymentCompleteDialog" class="dialog black-bg-05 flex-center fullheight-vertical fullwidth position-fixed-left" open>
            <div class="white-bg w-500 h-500 margins padding fade-scale">
                <h2 class="titillium platinum-underline flex-between fade-right">Payment Complete!</h2>
                <p>You should receive an email confirming the details of your order. All you have to do is wait for the order to arrive at your residence.</p>
                <button class="titillium green-bg orange-bg-hover margin-none padding-light fullwidth pointer"><a href="index.php" class="margin-none white">Return to Homepage</a></button>
            </div>
        </dialog>';

        print '<script src="complete.js"></script>';

        } 

    }

    }

    ?>
    <script src="checkout.js"></script>
</body>
</html>