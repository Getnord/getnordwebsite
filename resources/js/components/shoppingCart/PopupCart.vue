<template>
    <div class="cart">
        <h2>Cart</h2>
        <div class="cart__table">
            <table class="table">
                <thead>
                    <th colspan="2">Product</th>
                    <th class="cart_item_qty">Quantity</th>
                    <th class="cart_item_price">Unit price</th>
                    <th class="cart_item_tprice">Subtotal</th>
                    <th>&nbsp;</th>
                </thead>
                <tbody>
                    <tr v-for="(product, index) in productsInCart" :key="product.productId">
                        <td class="cart_item_img"><img src="http://placehold.it/50x50" /></td>
                        <td>{{ product.name }}</td>
                        <td class="cart_item_qty">
							<a class="num_minus" href="#" @click.prevent="countQty(index, -1)">-</a>
                        	<input type="number" v-model="product.quantity" min="1"/>
                       		<a class="num_plus" href="#" @click.prevent="countQty(index, 1)">+</a>
						</td>
                        <td class="cart_item_price">${{ product.price.us }}</td>
                        <td class="cart_item_tprice">${{ product.quantity * product.price.us }}</td>
                        <td><a class="list_item_del" href="#" @click.prevent=""><i class="fa fa-trash-o"></i></a></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4">Total</td>
                        <td class="cart_item_tprice">${{ total }}</td>
                        <td>&nbsp;</td>
                    </tr>

                </tfoot>
            </table>
            <p class="page-btn"><a class="btn" href="#" @click="checkout">Checkout</a><button class="btn btn-primary btn-sm"><i class="fa fa-refresh"></i></button></p>
        </div>
    </div>
</template>

<script>
require('locutus/php/url/http_build_query')
import http_build_query from 'locutus/php/url/http_build_query';

export default {
	props: {
        productsInCart: {
			type: Array,
			required: true
        },
    },
    data() {
		return {
			//
		}
	},
	computed: {
		total() {
			let accum = 0;
			this.productsInCart.forEach(product => {
				accum = product.price.us * product.quantity + accum;
			});
			return accum;
		}
	},

	methods: {
		countQty(index, qtyNum) {
			if( qtyNum == 1 ) {
				this.productsInCart[index].quantity += 1; 
			} else if( qtyNum == -1 && this.productsInCart[index].quantity > 0) {
				this.productsInCart[index].quantity += -1; 
			};
		},

		checkout() {
			console.log(http_build_query(this.productsInCart));
		}
	},
}
</script>

<style lang="sass" scoped>
.cart
	letter-spacing: .05em
	color: darken(#abc, 80%)
	font-family: sans-serif
	width: 600px
	padding: 15px
	margin: 0 auto
	margin-top: 15px
	background: #fcfcfc
	box-shadow: 1px 2px 3px #ccc, 1px 2px 25px #ddd
	transition-duration: .3s
	font-size: 16px
	text-align: left
.table
	width: 100%
	th, td
		padding: .5em
	thead
		th
			border-bottom: 2px solid #abc
	td
		border-bottom: 1px solid #abc
	tbody
		tr:last-of-type td
			border-bottom-width: 2px
	.cart_item_img
		width: 80px
	.cart_item_qty
		text-align: center
		min-width: 140px
		width: 140px
		&::after
			content: ""
			display: block
			clear: both
		a, input
			float: left
			height: 27px
		a	
			min-width: 27px
			border: 1px solid #ccc
			text-align: center
			border-radius: 3px
			padding-left: 3px
			background: #fafafa
			text-decoration: none
			transition-duration: .3s
			&:hover
				box-shadow: 1px 2px 3px #ccc
		input
			width: calc( 100% - 54px - 35px)
			text-align: center
			margin-left: 5px
			margin-right: 5px
			border-radius: 3px
			border: 1px solid #ccc
			box-shadow: 0 1px 3px #ddd
	.cart_item_price, .cart_item_tprice
		text-align: right
.page-btn
	padding-top: 15px
	padding-bottom: 15px
	margin: 0
	text-align: right
	.btn:focus
		box-shadow: none

</style>

