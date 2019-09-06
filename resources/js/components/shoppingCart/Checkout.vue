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
        mounted() {
            setTimeout(function () {

                    $('#top')[0].remove()
                    $('.checkout header').remove()
                console.log('done')

            },2000)
        }
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
        background-color: #fff
        z-index: 10000

        &__hide
            font-size: 26px
            position: absolute
            top: 20px
            right: 20px
            color: #000
            cursor: pointer
            transition: all 0.2s ease-in
            text-align: center
            transform: rotate(0deg)
            z-index: 1

            &:hover
                transform: rotate(180deg)

        iframe
            height: 100%
            width: 100%
            position: absolute
            left: 50%
            top: 56%
            transform: translate(-50%, -50%)
</style>
