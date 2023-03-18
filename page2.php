<section id="cart">
  <h2>Mon panier</h2>
  <form id="cart-form" action="#" method="post">
    <ul id="cart-list">
      <!-- Ici, on ajoute dynamiquement les articles sélectionnés -->
    </ul>
    <div id="total">
      <span>Total: </span>
      <span id="total-amount">$0.00</span>
    </div>
    <div id="submit-container">
      <input type="submit" value="Valider la commande">
    </div>
  </form>
</section>

<script>
  function submitForm() {
    const checkboxes = document.querySelectorAll('.product-checkbox:checked');
    const cartList = document.querySelector('#cart-list');

    // On vide la liste du panier
    cartList.innerHTML = '';

    let total = 0;

    // Pour chaque case cochée, on ajoute l'article correspondant au panier
    checkboxes.forEach(checkbox => {
      const product = checkbox.getAttribute('data-name');
      const price = parseFloat(checkbox.getAttribute('data-price'));
      const listItem = document.createElement('li');
      listItem.innerHTML = `${product}: $${price.toFixed(2)}`;
      cartList.appendChild(listItem);
      total += price;
    });

    // On met à jour le total du panier
    const totalAmount = document.querySelector('#total-amount');
    totalAmount.innerHTML = `$${total.toFixed(2)}`;
  }

  const cartForm = document.querySelector('#cart-form');
  cartForm.addEventListener('submit', function(event) {
    event.preventDefault();
    const total = parseFloat(document.querySelector('#total-amount').innerHTML.slice(1));
    const message = `Merci d'avoir commandé pour un total de $${total.toFixed(2)}!`;
    alert(message);
  });
</script>
