<template>
    <div v-if="!isDutchLang" class="cart__icon" @click="openShoppingCart">
        <img src="/img/shopping-cart.png" alt="">
        <p class="cart__icon__num" v-show="allProductsInCartQuantity > 0">
            {{ allProductsInCartQuantity }}
        </p>
    </div>
    <div v-else class="cart__icon cart__icon--disabled">
        <img src="/img/shopping-cart.png" alt="">
        <p class="cart__icon__num" v-show="allProductsInCartQuantity > 0">
            {{ allProductsInCartQuantity }}
        </p>
    </div>
</template>
<script>
    export default {
        props: {
            allProductsInCartQuantity: {
                type: Number,
                required: true
            }
        },
        data() {
            return {
                isDutchLang: false
            }
        },
        methods: {
            openShoppingCart() {
                this.$emit('open-shopping-cart');
            },
            isDutch() {
                let currentLang = document.getElementsByTagName('html')[0].getAttribute('lang');
                console.log(currentLang)
                if (currentLang === 'nl') {
                    this.isDutchLang = true
                } else {
                    return false
                }
            }
        },
        mounted() {
            this.isDutch()
        }
    }
</script>

<style lang="sass" scoped>
    .cart__icon
        height: 35px
        width: 35px
        position: relative
        text-align: center
        cursor: pointer
        &--disabled
            cursor: no-drop
            opacity: .5
        img
            width: 100%

        &__num
            font-weight: 700
            font-size: 16px
            padding: 4px
            position: absolute
            top: -10px
            right: -16px
            background: #0080ff
            color: darken(#fff, 3%)
            height: 22px
            width: 22px
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.2)
            border-radius: 22px
</style>
