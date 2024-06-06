document.addEventListener('DOMContentLoaded', function() {
    let cartCount = 0;
    const addToCartButton = document.querySelector('.add-to-cart');
    const cartCountElement = document.querySelector('.cart-count');

    addToCartButton.addEventListener('click', function() {
        cartCount++;
        cartCountElement.textContent = cartCount;
    });
});