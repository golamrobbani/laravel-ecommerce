angular.module('myApp', []);

angular.module('myApp')
.controller('myController', function ($scope, $http) {

    $scope.cartModal = false;
    $scope.qty = 1;

    var BASE_URL = window.location.origin+"/";

    if(localStorage.getItem('cart') != undefined)
    {
        $scope.cart = JSON.parse(localStorage.getItem('cart'));
    }else
    {
        $scope.cart = [];
    }

    if(localStorage.getItem('wishlist') != undefined)
    {
        $scope.wishlist = JSON.parse(localStorage.getItem('wishlist'));
    }else
    {
        $scope.wishlist = [];
    }


  var findItemById = function(items, id) {
    var obj = items.filter(function(item) {
        return item.id==id;
    });
    return obj;
  };

  $scope.getCost = function(item) {
    return item.qty * item.price;
  };

  $scope.updateCart = function() {
    localStorage.setItem('cart', JSON.stringify($scope.cart))
  };

  $scope.addToCart = function(itemToAdd, qty) {
    var found = findItemById($scope.cart, itemToAdd.id);
    if (found.length > 0) {
      found[0].qty += qty;
    }
    else {
        var item = angular.copy(itemToAdd);
        item.qty = 1;
        $scope.cart.push(item);
    }
    $scope.updateCart();

    $scope.cartModal = true;

  };

  $scope.addToWishlist = function(itemToAdd) {
    var found = findItemById($scope.wishlist, itemToAdd.id);
    if (found.length == 0) {
        $scope.wishlist.push(angular.copy(itemToAdd));
    }
     localStorage.setItem('wishlist', JSON.stringify($scope.wishlist));
  };

  $scope.getTotal = function() {
    var total = 0;
    for(var i = 0; i < $scope.cart.length; i++){
        var item = $scope.cart[i];
        total += $scope.getCost(item);
    }
    return total;

  };

  $scope.clearCart = function() {
    $scope.cart = [];
    $scope.updateCart();
  };

  $scope.removeItem = function(item) {
    var index = $scope.cart.indexOf(item);
    $scope.cart.splice(index, 1);
    $scope.updateCart();
  };

  $scope.removeWishlist = function(item) {
    var index = $scope.wishlist.indexOf(item);
    $scope.wishlist.splice(index, 1);
    localStorage.setItem('wishlist', JSON.stringify($scope.wishlist))
  };

  $scope.singleImage = function(images){
      image = JSON.parse(images);
        return image[0]
  };


  // checkout page script script
  $scope.offer = {};
  $scope.checkout_option = 'area';
  $scope.payment_number = '';
  $scope.payment_method = 'cashondelivery';
  $scope.order = {};
  $scope.delivery_area = 'Inside Dhaka';
  $scope.delivery_charge = 70;


  $scope.changePaymentMethod = function(option){
       $scope.payment_method = option;
  };

  $scope.changeDeliveryArea = function(option){
         $scope.delivery_area = option;
         if(option == 'Inside Dhaka'){
            $scope.delivery_charge = 60;
         }else{
              $scope.delivery_charge = 100;
         }
  };

  $scope.changeOption = function(option){
       $scope.checkout_option = option;
  };

  $scope.check_coupon = function (coupon) {
    var total = $scope.getTotal();

      $http.get(BASE_URL+'check_coupon/'+coupon+'/'+total).then(function(r){
          $scope.offer = r.data;
          if($scope.offer.status == 'login'){
              if (confirm($scope.offer.msg)) {
                window.location.href = BASE_URL+'login/?redirect=checkout';
              }
          }else if($scope.offer.status == 'failed'){
              alert($scope.offer.msg);
          }else if($scope.offer.status == 'success'){
              alert($scope.offer.msg);
          }

      });

  };

  $scope.validDeliveryAddress = function () {
      if(
          $scope.order.delivery_phone != '' &&
          $scope.order.delivery_phone != undefined &&
          $scope.order.delivery_city != '' &&
          $scope.order.delivery_city != undefined &&
          $scope.order.delivery_postcode != '' &&
          $scope.order.delivery_postcode != undefined &&
          $scope.order.delivery_address != '' &&
          $scope.order.delivery_address != undefined   ){
          return false;
      }else{
          return true;
      }
  };

  $scope.validPhoneNumber = function (number) {

      $scope.payment_number = number;
      if( number != undefined &&  number != ''){
          return false;
      }else{
          return true;
      }
  };


  $scope.subscribe = function(){
      var data = { 'email': $scope.email };
      $http.post(BASE_URL+'subscribe',data).then(function(r) {

          var data = r.data;
          if(data.status == 'success'){
              alert(data.msg);
          }else{
              alert("Enter valid email address to subscribe!");
          }
      });
  };

  $scope.submitReview = function(product_id = null){ 
      $scope.review.product_id = product_id;
      $http.post(BASE_URL+'review',$scope.review).then(function(r) {
          var data = r.data;
          if(data.status == 'success'){
              alert(data.msg);
          }else{
              alert("Please enter valid information and try again!");
          }
      });
  };

  $scope.button_disabled = false;

  $scope.submitOrder = function () {
      $scope.button_disabled = true;
      $scope.order.payment_number = $scope.payment_number;
      $scope.order.payment_method = $scope.payment_method;
      $scope.order.delivery_area = $scope.delivery_area;
      $scope.order.delivery_charge = $scope.delivery_charge;
      $scope.order.payment_method = $scope.payment_method;
      $scope.order.offer_status = 'no';

      if($scope.offer.status == 'success'){
          $scope.order.offer_status = 'yes';
          $scope.order.offer_amount = $scope.offer.amount;
          $scope.order.offer = $scope.offer.data;
      }

      if($scope.cart.length > 0){
          $scope.order.products = $scope.cart;

          $http.post(BASE_URL+'order',$scope.order).then(function(r){

               $scope.data = r.data;
              if($scope.data.status == 'login'){
                  if (confirm($scope.data.msg)) {
                      window.location.href = BASE_URL+'login/?redirect=checkout';
                  }
              }else if($scope.data.status == 'failed'){
                  $scope.button_disabled = false;
                  alert($scope.data.msg);
              }else if($scope.data.status == 'success'){
                  $scope.button_disabled = false;
                  $scope.order = {};
                  $scope.offer = {};
                  $scope.cart = [];
                  localStorage.setItem('cart', JSON.stringify($scope.cart));
                   alert($scope.data.msg);
                  window.location.href = BASE_URL+"myaccount/order/"+$scope.data.order_id;

              }else{
                  alert("Your order submit failed. Please try again or call to your help center. Thanks!");
                  $scope.button_disabled = false;
              }

          });

      }else{
          alert("Please add some product to your cart to submit order!");
          $scope.button_disabled = false;
      }



  }


});
