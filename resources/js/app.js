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
// There is a bug in animations that keeps fucking everything up,
// that bitch needs to be fixed asap
import startAnimations from './components/global/animations';
import specsDropDownToggle from './components/homePage/specsSection';
import videosControllers from './components/homePage/videos.js';

// $(document).ready(function() {
//     $('.btn-buy-product').on('click', function() {
//         $('section#buy-product').addClass('active');
//     });
    
// });

$(document).ready(function() {
        
    NavInit();
    startAnimations();
    specsDropDownToggle();
    contactForm();
    videosControllers();
    
});

// We use another vue instance to pass data between components and not
// between the child and the parent component
// shopping cart
import buyBtn from './components/shoppingCart/BaseBuyButton.vue';
import optionsPopup from './components/shoppingCart/PopupProductOptions.vue';
import shoppingCart from './components/shoppingCart/PopupCart.vue';
import shoppingCartIcon from './components/shoppingCart/ShoppingCartIcon.vue';
import checkoutPage from './components/shoppingCart/Checkout.vue';
import products from './components/shoppingCart/products';

import http_build_query from 'locutus/php/url/http_build_query';
import Axios from 'axios';

// the following is used to be able to use laravel lang resources in JS
// it will be used to have a funcional localization in this app 
Vue.prototype.trans = string => _.get(window.i18n, string);

const app = new Vue({

    el:'#app',

    components: {
        buyBtn,
        optionsPopup,
        shoppingCart,
        shoppingCartIcon,
        checkoutPage,
    },

    data: {
        info: {
            products: [
                {
                    product_id: 50,
                    option: {
                        // provider
                        227: 17,
                        // color
                        228: 20,
                    },
                    name: 'Getnord Lynx',
                    price: {
                        us: 299,
                        ca: 299,
                        uk: 299,
                        fr: 299,
                        it: 299,
                        nl: 299,
                        pl: 1299,
                        lt: 299,
                        es: 299,
                        de: 299
                    },
                    quantity: 1
                },
                {
                    product_id: 2,
                    option: {
                        // provider
                        227: 0,
                        // color
                        228: 0,
                    },
                    name: 'Getnord Onyx',
                    price: {
                        us: 299,
                        ca: 299,
                        uk: 299,
                        fr: 299,
                        it: 299,
                        nl: 299,
                        pl: 1299,
                        lt: 299,
                        es: 299,
                        de: 299
                    },
                    quantity: 1
                },
                {
                    product_id: 3,
                    name: 'Getnord Walrus',
                    price: {
                        us: 299,
                        ca: 299,
                        uk: 299,
                        fr: 299,
                        it: 299,
                        nl: 299,
                        pl: 1299,
                        lt: 299,
                        es: 299,
                        de: 299
                    },
                    quantity: 1
                },
            ]
        },
        isOptionsPopupOpen: false,
        isShoppingCartOpen: false,
        isCheckoutPageOpen: false,
        lang: '',
        currency: '',
        options: false,
        orderUrl: '',
        cart: [],
        currentProduct: {}
    },
    watch: {
        cart() {
            localStorage.cartData = JSON.stringify(this.cart);
        }
    },
    mounted() {
        // we want to set the lang
        this.lang = document.getElementsByTagName('html')[0].getAttribute('lang');
        // we also want to check if any cart data exists 
        if(localStorage.cartData) {
            this.cart = JSON.parse(localStorage.cartData);
        };
        // Check if the products are available in stock
        const form = new FormData();
        form.append("product_id", "40");

        axios.post('http://opencart.info/index.php?route=product/product/stock',form)
            .then(function (response) {
                console.log(response);
            })
            .catch(function (error) {
                console.log(error);
            });
    },
    methods: {
        buybtnclicked(product_id, productHasOptions) {
            if( productHasOptions == true) {
                // we want to open the options popup
                this.info.products.forEach(product => {
                    if( product.product_id ==  product_id ) {
                        this.currentProduct = product;
                    }
                });
                this.openOptionsPopup();
            } else {
                // we add the product directlyl to the cart
                this.info.products.forEach(product => {
                    // first we validate that the product exists 
                    if( product.product_id ==  product_id && this.cart.length != 0 ) {
                        // we need to iterate over the cart to see if the product exists in the cart
                        let isInCart = false;
                        let i = 0;
                        for( i ; i < this.cart.length; i++ )  {
                            if( this.cart[i].product_id == product_id ) {
                                isInCart = true;
                                break;
                            };
                        };
                        if( isInCart ) {
                            // we found it so lets increase the quantity
                            const quantity = parseInt(this.cart[i].quantity);
                            this.cart[i].quantity = quantity + 1;
                        } else {
                            // add the item to the cart
                            this.cart.push(product);
                        };
                    // if cart is empty, we can't iterate over it
                    } else if( product.product_id ==  product_id && this.cart.length == 0) {
                        this.cart.push(product);
                    }
                });
            }   
        },
        openOptionsPopup() {
            this.isShoppingCartOpen = false;
            this.isOptionsPopupOpen = true;
        },
        
        closeOptionsPopup() {
            this.isOptionsPopupOpen = false;
        },

        addToCart(product) {
            // We add the product to the cart 
            // after selecting options
            const target = this.jsonCopy(this.currentProduct);
            this.cart.push(target);
            // Destroy the options popup
            this.isOptionsPopupOpen = false;
        },

        openShoppingCart() {
            this.isShoppingCartOpen = true;
        },

        hideCart() {
            this.isShoppingCartOpen = false;
        },

        checkout() {
            // we are using OpenCart as a platform handling the e-commerce part
            // we add the products to the cart using an external link that contains
            // an array called products

            /**
             * Check if cart is empty
             */
            if( this.cart.length === 0 ) {
                // do someting like maybe show cart empty
                console.log('empty');
            } else {
                // we don't need all the data we have in the cart
                let cartSlim = [];
                this.cart.forEach(element => {
                    cartSlim.push({
                        product_id: element.product_id,
                        option: element.option,
                        quantity: element.quantity
                    });
                });
                const cartUrl = http_build_query({products: cartSlim, lang: this.lang, currency: this.currency});
                this.isCheckoutPageOpen = true;
                this.orderUrl = `http://store.getnord.live/index.php?route=checkout/cart/addToCart&${cartUrl}`;
            }

        },
        hideCheckout() {
            this.isCheckoutPageOpen = false;
        },
        // The need for the following function comes from a bug that appeared when adding the same product but with different
        // options to the cart. The bug basically resulted in altering the same product to have the same options.
        // The fix was basically just cloning the object, so we are not refrencing the same root object.
        // Kind off this is confusing, but it works.
        jsonCopy(src) {
            return JSON.parse(JSON.stringify(src));
        }
    },

});