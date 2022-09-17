// VARIABLES

var radioFilter = document.querySelectorAll('input[type="radio"]');
var productLinks = productGrid.querySelectorAll('a');

// EVENT LISTENERS

for(let i = 0; i < radioFilter.length; i++) {
    radioFilter[i].addEventListener('click', filterPosts.bind(this, radioFilter[i]));
}

// FUNCTIONS

function filterPosts(e) {

    for(let i = 0; i < productLinks.length; i++){
        if(productLinks[i].classList.contains(e.value)){
            productLinks[i].style.display = "block";
        } else {
            productLinks[i].style.display = "none";
        }
    }

}