<div>
    <base-card-message @hide-message-card="hideMessageCard" v-if="isMessageCardOpen">
        {{ trans('shoppingCart.product_not_available') }}
    </base-card-message>

    <options-popup v-if="isOptionsPopupOpen" @close-options-popup="closeOptionsPopup" v-on:add-to-cart="addToCart" :product="currentProduct">
    </options-popup>

    <shopping-cart v-show="isShoppingCartOpen" :products-in-cart="cart" :locale-lang="lang" @checkout="checkout" @hide-cart="hideCart"></shopping-cart>

    <checkout-page v-if="isCheckoutPageOpen" :order-url="orderUrl" @hide-checkout="hideCheckout"></checkout-page>
</div>
