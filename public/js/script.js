function addToCart() {
    document.getElementById('notification').style.display = 'block';
  }
  
  document.getElementById('sizeSelect').addEventListener('change', function() {
    var selectedSize = this.value;
    var productName = document.querySelector('.product h3').innerText;
    var productPrice = document.querySelector('.product p').innerText;
    var notification = document.getElementById('notification');
    var cartItem = document.createElement('div');
    cartItem.innerHTML = '<h4>' + productName + '</h4>' +
                         '<p>' + productPrice + '</p>' +
                         '<p>Ukuran: ' + selectedSize + '</p>';
    notification.parentNode.insertBefore(cartItem, notification.nextSibling);
  });

function goToCart() {
    // Simulasi pengalihan ke halaman keranjang belanja
    window.location.href = "/cart";
}
  