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

const app = new Vue({

    el:'#app',
    components: {
        buyBtn,
        optionsPopup,
        shoppingCart,
    },

    data: {
        info: {
            products: [
                {
                    productId: 1,
                    option: [
                        {
                            222: 13,
                            999: 22,
                        },
                    ],
                    name: 'Getnord Lynx',
                    price: '499 usd'
                },
                {
                    productId: 2,
                    option: [
                        {
                            222: 13,
                            999: 22,
                        },
                    ],
                    name: 'Getnord Onyx',
                    price: '499 usd'
                },
                {
                    productId: 3,
                    name: 'Getnord Walrus',
                    price: '99 usd'
                },
            ]
        },
        isOptionsPopupOpen: false,
        cart: []
    },

    methods: {
        showOptionsPopUp(productId) {
            console.log(productId);
            // we want to open the options popup
            this.info.products.forEach(product => {
                if( product.productId ==  productId ) {
                    this.currentProduct = product;
                }
            });
            this.isOptionsPopupOpen = true;
        },
        closeOptionsPopup() {
            this.isOptionsPopupOpen = false;
        }
    },

});