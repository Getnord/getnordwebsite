require('./bootstrap');
require('./vendor/svgxuse/svgxuse.min.js');
require('./vendor/bullseye/jquery.bullseye-1.0-min.js');

window.Vue = require('vue');
window.Event = new Vue();

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

import NavInit from './components/global/header';
import contactForm from './components/contactForm/form';
import startAnimations from './components/global/animations';
import specsDropDownToggle from './components/homePage/specsSection';

$(document).ready(function() {
    $('.btn-buy-product').on('click', function() {
        $('section#buy-product').addClass('active');
    });
    
});

$(document).ready(function() {
        
    NavInit();
    startAnimations();
    specsDropDownToggle();
    contactForm();
    
});

// We use another vue instance to pass data between components and not
// between the child and the parent component
// shopping cart
import buyBtn from './components/shoppingCart/BaseBuyButton.vue';
import optionsPopup from './components/shoppingCart/PopupProductOptions.vue';
import shoppingCart from './components/shoppingCart/PopupCart.vue';
import shoppingCartIcon from './components/shoppingCart/ShoppingCartIcon.vue';

// the following is used to be able to use laravel lang resources in JS
Vue.prototype.trans = string => _.get(window.i18n, string);

const app = new Vue({

    el:'#app',

    components: {
        buyBtn,
        optionsPopup,
        shoppingCart,
        shoppingCartIcon,
    },

    data: {
        info: {
            products: [
                {
                    productId: 50,
                    options: {
                        // color
                        227: 17,
                        // provider
                        228: 20,
                    },
                    name: 'Getnord Lynx',
                    price: {
                        us: 299
                    },
                    quantity: 1
                },
                {
                    productId: 2,
                    options: {
                        // color
                        222: 0,
                        // provider
                        223: 0,
                    },
                    name: 'Getnord Onyx',
                    price: {
                        us: 299
                    },
                    quantity: 1
                },
                {
                    productId: 3,
                    name: 'Getnord Walrus',
                    price: {
                        us: 99
                    },
                    quantity: 1
                },
            ]
        },
        isOptionsPopupOpen: false,
        isShoppingCartOpen: false,
        options: false,
        cart: [],
        currentProduct: {}
    },

    methods: {
        buybtnclicked(productId, productHasOptions) {
            if( productHasOptions == true) {
                // we want to open the options popup
                this.info.products.forEach(product => {
                    if( product.productId ==  productId ) {
                        this.currentProduct = product;
                    }
                });
                this.isOptionsPopupOpen = true;
            } else {
                // we add the product directlyl to the cart
                this.info.products.forEach(product => {
                    // first we validate that the product exists 
                    if( product.productId ==  productId && this.cart.length != 0 ) {
                        // we need to iterate over the cart to see if the product exists in the cart
                        let isInCart = false;
                        let i = 0;
                        for( i ; i < this.cart.length; i++ )  {
                            if( this.cart[i].productId == productId ) {
                                isInCart = true;
                                console.log( 'found' , i);
                                break;
                            };
                        };
                        console.log(i, isInCart);
                        if( isInCart ) {
                            // we found it so lets increase the quantity
                            const quantity = parseInt(this.cart[i].quantity);
                            this.cart[i].quantity = quantity + 1;
                        } else {
                            // add the item to the cart
                            this.cart.push(product);
                        };
                    // if cart is empty, we can't iterate over it
                    } else if( product.productId ==  productId && this.cart.length == 0) {
                        this.cart.push(product);
                    }
                });
            }   
        },
        
        closeOptionsPopup() {
            this.isOptionsPopupOpen = false;
        },

        addToCart(product) {
            // We add the product to the cart 
            // after selecting options
            this.cart.push(product);
            // Destroy the options popup
            this.isOptionsPopupOpen = false;
        },

        openShoppingCart() {
            this.isShoppingCartOpen = true;
        }
    },

});