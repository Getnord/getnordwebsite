@extends('layouts.test')

@section('content')
<base-card-message @hide-message-card="hideMessageCard" v-if="isMessageCardOpen">
{{ trans('shoppingCart.product_not_available') }}
</base-card-message>
<buy-btn product-id="2" @buy-btn-clicked="buybtnclicked" :product-has-options="false">
    Onyx
</buy-btn>
<buy-btn product-id="50" @buy-btn-clicked="buybtnclicked" :product-has-options="true">
    Lynx
</buy-btn>
<buy-btn product-id="30" @buy-btn-clicked="buybtnclicked" :product-has-options="true">
    id 30
</buy-btn>
<buy-btn product-id="40" @buy-btn-clicked="buybtnclicked" :product-has-options="false">
    id 40
</buy-btn>

<shopping-cart-icon :all-products-in-cart-quantity="cart.length" @open-shopping-cart="openShoppingCart"></shopping-cart-icon>
{{-- we use v-if because we want the component to rerender --}}
<options-popup v-if="isOptionsPopupOpen" @close-options-popup="closeOptionsPopup" v-on:add-to-cart="addToCart" :product="currentProduct">
</options-popup>

<shopping-cart v-show="isShoppingCartOpen" :products-in-cart="cart" @checkout="checkout" @hide-cart="hideCart"></shopping-cart>
<checkout-page v-if="isCheckoutPageOpen" :order-url="orderUrl" @hide-checkout="hideCheckout"></checkout-page>
@endsection