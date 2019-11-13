function calTotal(price){
    qty =document.querySelector('#qty').value;
    total = qty * price;

    document.querySelector('#total').innerHTML='₦'+total;

};



var shoppingCart = (function() {
  // =============================
  // Private methods and propeties
  // =============================
  cart = [];
  
  // Constructor
  function Item(id, name, price, count, max) {
    this.id = id;
    this.name = name;
    this.price = price;
    this.count = count;
    this.max = max;
  }
  
  // Save cart
  function saveCart() {
    sessionStorage.setItem('shoppingCart', JSON.stringify(cart));
  }
  
    // Load cart
  function loadCart() {
    cart = JSON.parse(sessionStorage.getItem('shoppingCart'));
  }
  if (sessionStorage.getItem("shoppingCart") != null) {
    loadCart();
  }
  

  // =============================
  // Public methods and propeties
  // =============================
  var obj = {};
  
  // Add to cart
  obj.addItemToCart = function(id, name, price, count, max) {
    for(var item in cart) {
      if(cart[item].id === id) {
        if(cart[item].count <= cart[item].max-1){
          console.log(cart[item].max);
        cart[item].count ++;
        };
        saveCart();
        return;
      }
    }
    var item = new Item(id, name, price, count, max);
    cart.push(item);
    saveCart();
  }
  // Set count from item
  obj.setCountForItem = function(id, count) {
    for(var i in cart) {
      if (cart[i].id === id) {
        cart[i].count = count;
        break;
      }
    }
  };
  // Remove item from cart
  obj.removeItemFromCart = function(id) {
      for(var item in cart) {
        if(cart[item].id === id) {
          cart[item].count --;
          if(cart[item].count == 0) {
            cart.splice(item, 1);
          }
          break;
        }
    }
    saveCart();
  }

  // Remove all items from cart
  obj.removeItemFromCartAll = function(id) {
    for(var item in cart) {
      if(cart[item].id === id) {
        cart.splice(item, 1);
        break;
      }
    }
    saveCart();
  }

  // Clear cart
  obj.clearCart = function() {
    cart = [];
    saveCart();
  }

  // Count cart 
  obj.totalCount = function() {
    var totalCount = 0;
    for(var item in cart) {
      totalCount += cart[item].count;
    }
    return totalCount;
  }

  // Total cart
  obj.totalCart = function() {
    var totalCart = 0;
    for(var item in cart) {
      totalCart += cart[item].price * cart[item].count;
    }
    return Number(totalCart.toFixed(2));
  }

  // List cart
  obj.listCart = function() {
    var cartCopy = [];
    for(i in cart) {
      item = cart[i];
      itemCopy = {};
      for(p in item) {
        itemCopy[p] = item[p];

      }
      itemCopy.total = Number(item.price * item.count).toFixed(2);
      cartCopy.push(itemCopy)
    }
    return cartCopy;
  }

  // cart : Array
  // Item : Object/Class
  // addItemToCart : Function
  // removeItemFromCart : Function
  // removeItemFromCartAll : Function
  // clearCart : Function
  // countCart : Function
  // totalCart : Function
  // listCart : Function
  // saveCart : Function
  // loadCart : Function
  return obj;
})();


// *****************************************
// Triggers / Events
// ***************************************** 
// Add item
$('.add-to-cart').click(function(event) {
  event.preventDefault();
  var id = $(this).data('id');
  var name = $(this).data('name');
  var price = Number($(this).data('price'));
  var max = Number($(this).data('max'));
  shoppingCart.addItemToCart(id, name, price, 1, max);
  displayCart();
});

// Clear items
$('.clear-cart').click(function() {
  shoppingCart.clearCart();
  displayCart();
});


function displayCart() {
  var cartArray = shoppingCart.listCart();
  if(cartArray.length < 1){
    var checkout = document.querySelector('#checkout');
    checkout.setAttribute('class', 'hidden');
  }
  var output = "";
  for(var i in cartArray) {
    output += "<tr>"
      + "<td>" + cartArray[i].name + "</td>" 
      + "<td>(" + cartArray[i].price + ")</td>"
      + "<td><div class='input-group'><button  style='height:30px; width:30px' class='minus-item input-group-addon btn btn-primary' data-id="+ cartArray[i].id +" data-name="+ cartArray[i].name +">-</button>"
      + "<input type='number' class='input-text item-count form-control' min='0' max="+ cartArray[i].max +" data-id="+ cartArray[i].id +" data-name='" + cartArray[i].name + "' value='" + cartArray[i].count + "'>"
      + "<button style='height:30px; width:30px' class='plus-item btn-sm btn-primary input-group-addon' data-id="+ cartArray[i].id +" data-name=" + cartArray[i].name + ">+</button></div></td>"
      + "<td><button  style='height:30px; width:30px' class='delete-item btn-sm btn-danger' data-id="+ cartArray[i].id +" data-name=" + cartArray[i].name + ">X</button></td>"
      + " = " 
      + "<td>" + cartArray[i].total + "</td>" 
      +  "</tr>";
  };

console.log(cartArray.length);

 let orders = document.querySelector('#orders');

if(orders !== null){

  cartArray.forEach(e =>{
      
            
            tRow = document.createElement('tr');
            tRow.setAttribute('class', 'cart-item');
            let tdRemove = document.createElement('td');
            tdRemove.setAttribute('class', 'product-remove hidden-xs');
            let aRemove = document.createElement('button');
            aRemove.setAttribute('class', 'delete-item')
            aRemove.setAttribute('data-id', e.id);
            aRemove.setAttribute('data-name', e.name);
            aRemove.setAttribute('title', 'Remove this item');
            aRemove.innerHTML='&times';
            tdRemove.append(aRemove);

            tRow.append(tdRemove);

            let tProduct = document.createElement('td');
            tProduct.setAttribute('class', 'product-name');
            let aName = document.createElement('a');
            aName.textContent=e.name;
            tProduct.append(aName);
            let dlVariation = document.createElement('dl');
            dlVariation.setAttribute('class', 'variation');
            let dtVariation = document.createElement('dt');
            dtVariation.innerHTML="Style";
            dlVariation.append(dtVariation);
            let ddVariation = document.createElement('dd');
            ddVariation.setAttribute('class', 'variation');
            let pDD = document.createElement('p');
            pDD.innerHTML='Ceremonial';
            ddVariation.append(pDD);
            let dtFabric = document.createElement('dt');
            dtFabric.setAttribute('class', 'variation');
            dtFabric.innerHTML="Fabric";
            let ddFabric = document.createElement('dd');
            ddFabric.setAttribute('class', 'variation');
            let pFabric = document.createElement('p');
            pFabric.innerHTML='Adire';
            ddFabric.append(pFabric);
            
            let dtSize = document.createElement('dt');
            dtSize.setAttribute('class', 'variation');
            dtSize.innerHTML="Size";
            let ddSize = document.createElement('dd');
            ddSize.setAttribute('class', 'variation');
            let pSize = document.createElement('p');
            pSize.innerHTML='XL';
            ddSize.append(pSize);

            dlVariation.append(dtFabric);
            dlVariation.append(dtSize);

            tProduct.append(dlVariation);

            tRow.append(tProduct);

            let tdPrice = document.createElement('td');
            tdPrice.setAttribute('class', 'product-price text-center');
            let spanAmount = document.createElement('span');
            spanAmount.innerHTML='₦'+e.price;
            tdPrice.append(spanAmount);

            tRow.append(tdPrice);

            let tdQty = document.createElement('td');
            tdQty.setAttribute('class', 'product-quantity text-center');
            let divQty = document.createElement('div');
            divQty.setAttribute('class', 'quantity');
                          
            divQty.innerHTML= e.count;


            tdQty.append(divQty);

            tRow.append(tdQty);

            let tdSub = document.createElement('td');
            tdSub.setAttribute('class', 'product-subtotal hidden-xs text-center');
            let spanSub = document.createElement('span');
            spanSub.setAttribute('class', 'amount');
            spanSub.textContent='₦'+ e.total;
            
            tdSub.append(spanSub);

            tRow.append(tdSub);

            orders.append(tRow);
  });
};

  $('.show-cart').html(output);
  $('.total-cart').html(shoppingCart.totalCart());
  $('.total-count').html(shoppingCart.totalCount());
}

// Delete item button

$('.show-cart').on("click", ".delete-item", function(event) {
  var id = $(this).data('id')
  shoppingCart.removeItemFromCartAll(id);
  displayCart();
})


// -1
$('.show-cart').on("click", ".minus-item", function(event) {
  var id = $(this).data('id')
  shoppingCart.removeItemFromCart(id);
  displayCart();
})
// +1
$('.show-cart').on("click", ".plus-item", function(event) {
  var id = $(this).data('id')
  shoppingCart.addItemToCart(id);
  displayCart();
})

// Item count input
$('.show-cart').on("change", ".item-count", function(event) {
   var id = $(this).data('id');
   var count = Number($(this).val());
  shoppingCart.setCountForItem(id, count);
  displayCart();
});

displayCart();
