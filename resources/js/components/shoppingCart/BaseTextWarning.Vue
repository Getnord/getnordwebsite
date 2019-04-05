<template>
    <div class="wrapper">
        <p class="danger">
            {{ trans('shoppingCart.product_not_available') }}
        </p>
    </div>
</template>

<script>
export default {
    
}
</script>

<style scoped lang="sass">
.wrapper
    height: 40px
    max-width: 400px
    background-color: #FFFBFB
    border-raduis: 4px
    border: 1px solid #FF3333
    color: #150000
    font-size: 16px
    text-align: center
</style>
