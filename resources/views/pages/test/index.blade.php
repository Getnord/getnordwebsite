@extends('layouts.test')

@section('content')
    <div id="shop">
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

        <options-popup v-if="isOptionsPopupOpen" @close-options-popup="closeOptionsPopup" v-on:add-to-cart="addToCart" :product="currentProduct">
        </options-popup>
        
        <shopping-cart v-show="isShoppingCartOpen" :products-in-cart="cart" @checkout="checkout" @hide-cart="hideCart"></shopping-cart>
        <checkout-page v-if="isCheckoutPageOpen" :order-url="orderUrl" @hide-checkout="hideCheckout"></checkout-page>
    </div>

    <div id="accessories" style="margin-top: 100px; background-color: #dddddd">
        <accessories-row>
            <base-accessorie-card :id="20" @open-details-window="openDetailsWindow"></base-accessorie-card>
            <base-accessorie-card :id="30" @open-details-window="openDetailsWindow"></base-accessorie-card>
            <base-accessorie-card :id="40" @open-details-window="openDetailsWindow"></base-accessorie-card>
        </accessories-row>
        <details-window v-if="isDetailsWindowOpen" :active-accessorie="activeAccessorie">
        </details-window>
    </div>

@endsection