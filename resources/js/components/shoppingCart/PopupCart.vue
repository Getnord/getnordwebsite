<template>
    <div class="cart">
        <h2>Cart</h2>
		<div class="cart__hide" @click="hideCart">
			<i class="fa fa-times"></i>
		</div>
        <div class="cart__table" v-if="productsInCart.length !== 0">
            <table class="table">
                <thead>
                    <th colspan="2">Product</th>
                    <th class="cart_item_qty">Quantity</th>
                    <th class="cart_item_price">Unit price</th>
                    <th class="cart_item_tprice">Subtotal</th>
                    <th>&nbsp;</th>
                </thead>
                <tbody>
                    <tr v-for="(product, index) in productsInCart" :key="index">
                        <td class="cart_item_img"><img :src="product.img" /></td>
                        <td>{{ product.name }}</td>
                        <td class="cart_item_qty">
							<a class="num_minus" href="" @click.prevent="countQty(index, -1)">-</a>
                        	<input type="number" v-model="product.quantity" min="1"/>
                       		<a class="num_plus" href="" @click.prevent="countQty(index, 1)">+</a>
						</td>
                        <td class="cart_item_price">{{ currentCurrencySymbole }}{{ parseFloat(product.price)  }}</td>
                        <td class="cart_item_tprice">{{ currentCurrencySymbole }}{{  product.quantity * product.price }}</td>
                        <td><a class="list_item_del" href="" @click.prevent="delCartItem($event.currentTarget, index)"><i class="fa fa-trash"></i></a></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4">Total</td>
                        <td class="cart_item_tprice">{{ currentCurrencySymbole }}{{ total.toFixed(2) }}</td>
                        <td>&nbsp;</td>
                    </tr>

                </tfoot>
            </table>
            <p class="page-btn"><a class="btn" href="#" @click.prevent="checkout">Checkout</a></p>
        </div>
		<div v-else class="cart__empty">
			<p>Your cart is empty</p>
		</div>
    </div>
</template>

<script>


export default {
	props: {
        productsInCart: {
			type: Array,
			required: true
        },
	},

    data() {
		return {
			currencySymbols: {
				us: '$',
                ca: 'C$',
                uk: '£',
                fr: '€',
                it: '€',
                nl: '€',
                pl: 'zł',
                lt: '€',
                es: '€',
                de: '€'
			}
		}
	},

	computed: {
		total() {
			let accum = 0;
			this.productsInCart.forEach(product => {
				accum = product.price * product.quantity + accum;
			});
			return accum;
		},
		currentCurrencySymbole() {
			return this.currencySymbols[document.getElementsByTagName('html')[0].getAttribute('lang')];
		}
	},

	methods: {
		countQty(index, qtyNum) {
			if( qtyNum == 1 ) {
				this.productsInCart[index].quantity += 1;
			} else if( qtyNum == -1 && this.productsInCart[index].quantity > 0) {
				this.productsInCart[index].quantity += -1;
			};
            localStorage.cartData = JSON.stringify(this.productsInCart);
		},

		checkout() {
			this.$emit('checkout');
		},

		delCartItem(target, index) {
			this.productsInCart.splice(index, 1);
            localStorage.cartData = JSON.stringify(this.productsInCart);
		},

		hideCart() {
			this.$emit('hide-cart');
		}
	},
}
</script>

<style lang="sass" scoped>
.cart
	letter-spacing: .05em
	color: darken(#abc, 80%)
	max-width: 600px
	width: 100%
	padding: 15px
	margin: 0 auto
	margin-top: 15px
	background: #ffffff
	border-radius: 4px
	box-shadow: 1px 2px 25px rgba(0, 0, 0, 0.1)
	transition-duration: .3s
	font-size: 16px
	text-align: left
	position: fixed
	top: 50%
	left: 50%
	transform: translate(-50%,-50%)
	z-index: 20

	&__hide
		font-size: 20px
		position: absolute
		top: 10px
		right: 10px
		cursor: pointer
		transition: 0.2s all ease-in
		text-align: center
		transform: rotate(0deg)


		&:hover
			transform: rotate(180deg)
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
			padding-top: 1px
			padding-bottom: 1px
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

			&::-webkit-outer-spin-button, &::-webkit-inner-spin-button
				-webkit-appearance: none
				margin: 0

			&[type=number]
				-moz-appearance: textfield

	.cart_item_price, .cart_item_tprice
		text-align: right
.page-btn
	padding-top: 15px
	padding-bottom: 15px
	margin: 0
	text-align: right
	.btn:focus
		box-shadow: none

.cart__empty
	width: 100%
	text-align: center
</style>

