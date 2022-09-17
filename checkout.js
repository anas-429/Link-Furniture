// VARIABLES

var finalCartIcon = document.querySelector('.final-icon'); 
var closeModal = document.querySelector('.modal-exit'); 

// EVENT LISTENERS

finalCartIcon.addEventListener("click", function() {
    shoppingCartDialog.style.display = "flex"; 
    shoppingCartDialog.style.justifyContent = "center"; 
    shoppingCartDialog.style.alignItems = "center";
})

closeModal.addEventListener("click", function() {
    shoppingCartDialog.style.display = "none"; 
})
// FUNCTIONS

function retrieveValues() {

    let cartLS = localStorage.getItem('cart');
    let total = localStorage.getItem('total');
    cartLS = JSON.parse(cartLS);
    total = JSON.parse(total);

    formatCart = [];

    for (const item in cartLS) {
        formatCart.push({
            [cartLS[item].name]: ' Quantity: ' + cartLS[item].quantity + ' Subtotal: $' + cartLS[item].quantity * cartLS[item].price + ' CAD'
        })
    }

    formatCart = JSON.stringify(formatCart);
    hiddenProducts.setAttribute("value", formatCart);
    hiddenTotal.setAttribute("value", total); 

}

retrieveValues();

function finalCart() {

    let cartItems = localStorage.getItem('cart');
    cartItems = JSON.parse(cartItems);
    let total = localStorage.getItem("total");
    total = parseInt(total);

    if(cartItems && finalized) {
        finalized.innerHTML = '';
        Object.values(cartItems).map( (item, index) => {
            finalized.innerHTML += 
            `<div class="final-product fade-right">
                <div class="final-product-thumb">
                    <img src="thumbnails/${item.image}" alt="${item.image}">
                </div>
                <div class="final-product-info flex-center-start flex-column margins-light">
                    <p class="product-name tiny bold">${item.name}</p>
                    <p class="product-subtotal tiny"><span class="bold">Subtotal:</span> $${item.quantity * item.price}</p>
                    <p class="product-quantity tiny"><span class="bold">Quantity:</span> ${item.quantity}</p>
                </div>
            </div>`;
        });
        finalizedTotal.innerHTML = `$${total} CAD`;
    }

}

finalCart();


