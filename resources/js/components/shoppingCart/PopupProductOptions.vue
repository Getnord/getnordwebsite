<template>
    <div class="wrapper wrapper--dark">
        <div class="card">
            <h1 class="card__title">
                {{ trans('shoppingCart.options_popup_title') }}
            </h1>
            <div class="card__hide" @click="close">

            </div>
            <div class="card__validation" v-show="showValidationErreur">
                <p>Please select an option</p>
            </div>
            <div class="card__option">
                <h3 class="card__option__title">
                    Version <span>*</span>
                </h3>
                <select name="provider" v-model="selectedProvider" class="card__option__select" required>
                    <option value="17"> AT&T </option>
                    <option value="18"> Verizon </option>
                </select>
            </div>
            <div class="card__option">
                <h3 class="card__option__title">
                    color <span>*</span>
                </h3>
                <select name="provider" v-model="selectedColor" class="card__option__select" required>
                    <option value="20"> Black </option>
                    <option value="18"> Red and black </option>
                </select>
            </div>
            <div class="card__option">
                <h3 class="card__option__title">
                    quantity <span>*</span>
                </h3>
                <input class="card__option__input" type="number" v-model="quantity" min="1" max="5">
            </div>
            <button class="card__btn cart__bt--blue" @click="addToCart">
                ADD TO CART
            </button>
        </div>
    </div>
</template>
<script>

export default {
    props: {
        product: {
            type: Object,
            required: true
        },
    },

    data() {
        return {
            selectedProvider: '',
            selectedColor: '',
            quantity: 1,
            showValidationErreur: false
        }
    },

    watch: {
        selectedProvider() { 
            return this.showValidationErreur = false 
        },
        selectedColor() { 
            return this.showValidationErreur = false 
        }
    },

    mounted() {
       
    },
    
    computed: {
        providers() {
            return []
        },
        colors() {
            return []
        }
    },

    methods: {
        close() {
            this.$emit('closeoptionspopup');
        },

        addToCart() {
            if( this.selectedProvider == '' || this.selectedColor == '') {
                this.showValidationErreur = true;
            } else {
                // provider
                this.product.options[222] = this.selectedProvider;
                // color
                this.product.options[223] = this.selectedColor;
                // we add the product to the cart
                this.$emit('add-to-cart', this.product);
            }
        },

    },
}
</script>

<style lang="sass" scoped>

.wrapper
    position: fixed
    left: 0
    right: 0
    top: 0
    bottom: 0
    background-color: rgba(0,0,0,0.4)
    display: flex
    justify-content: center
    align-items: center

.card 
    width: 300px
    height: fit-content
    padding: 1em
    background-color: #fff
    box-shadow: 0px 2px 10px rgba(0,0,0,0.1)
    border-radius: 6px
    position: relative

    &__hide
        height: 25px
        width: 25px
        position: absolute
        top: 10px
        right: 10px
        background-color: #0080ff
        cursor: pointer

        &:hover
            background-color: darken(#0080ff,5%)
    
    &__title
        margin-left: 0px

    &__option
        margin-top: 10px

        &__title
            font-size: 18px
            margin-bottom: 4px

            span
                color: red

        &__input,&__select
            width: 98%
            max-width: 100%
            height: 36px
            border: 1px solid rgba(0,0,0,0.2)
            padding: 0px 0px 4px
            border-radius: 4px
            font-size: 18px
            padding: 0px 0px 3px 2px
            background-color: #fff

    &__btn
        height: auto
        width: 100%
        text-tranform: uppercase
        background-color: #0080ff
        color: #fff
        font-size: 16px
        font-weight: 700
        margin-top: 14px
        padding: 10px
        border-radius: 4px
        cursor: pointer

        &:hover 
            background-color: darken(#0080ff, 5%)
    
    &__validation
        p 
            font-size: 0.6em
            color: #E71D36

</style>
