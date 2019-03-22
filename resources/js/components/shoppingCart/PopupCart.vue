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
                    <tr>
                        <td class="cart_item_img"><img src="http://placehold.it/50x50" /></td>
                        <td>Getnord Onyx</td>
                        <td class="cart_item_qty">
							<a class="num_minus" href="#" @click.prevent="">-</a>
                        	<input type="text" />
                       		<a class="num_plus" href="#" @click.prevent="">+</a>
						</td>
                        <td class="cart_item_price">$299</td>
                        <td class="cart_item_tprice">$299</td>
                        <td><a class="list_item_del" href="#" @click.prevent=""><i class="fa fa-trash-o"></i></a></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4">Total</td>
                        <td class="cart_item_tprice">$299</td>
                        <td>&nbsp;</td>
                    </tr>

                </tfoot>
            </table>
            <p class="page-btn"><a class="btn" href="#" onclick="return false;">Checkout</a><button class="btn btn-primary btn-sm"><i class="fa fa-refresh"></i></button></p>
        </div>
    </div>
</template>

<script>
export default {
	props: {
        productsInCart: {
            type: Array,
        },
    },
    data() {
		return {
			//
		}
	},
	computed: {
		total() {
			//
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

