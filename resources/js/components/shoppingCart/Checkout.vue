<template>
    <div class="checkout">
        <div class="checkout__hide" @click="hideCheckout">
            <i class="fa fa-times"></i>
        </div>
        <iframe :src="orderUrl" frameborder="0"></iframe>    
    </div>
</template>

<script>
export default {
    props: {
        orderUrl: {
            type: String,
            required: true
        }
    },

    methods: {
        hideCheckout() {
            this.$emit('hide-checkout');
        }
    },
}
</script>

<style scoped lang="sass">
.checkout
    display: block
    position: fixed
    top: 0
    left: 0
    right: 0
    bottom: 0
    z-index: 100
    background-color: lighten(#000, 40%)

    &__hide
        font-size: 26px
        position: absolute
        top: 20px 
        right: 20px
        color: #fff
        cursor: pointer
        transition: all 0.2s ease-in
        text-align: center
        transform: rotate(0deg)

        &:hover
            transform: rotate(180deg)

    iframe
        height: 90%
        width: 90%
        position: absolute
        left: 50%
        top: 50%
        transform: translate(-50%, -50%)
</style>
