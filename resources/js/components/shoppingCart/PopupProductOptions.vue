<template>
    <div class="wrapper wrapper--dark">
        <div class="card">
            <h1 class="card__title">
                {{ trans('shoppingCart.options_popup_title') }}
            </h1>
            <div class="card__hide" @click="close">
                <i class="fas fa-times"></i>
            </div>
            <div class="card__validation" v-show="showValidationError">
                <p>Please select an option</p>
            </div>
            <div class="card__option">
                <h3 class="card__option__title">
                    Version <span>*</span>
                </h3>
                <select name="provider" v-model="selectedProvider" class="card__option__select" required>
                    <option value="17"> AT&T </option>
                    <option value="18"> T-Mobile </option>
                </select>
            </div>
            <div class="card__option">
                <h3 class="card__option__title">
                    color <span>*</span>
                </h3>
                <select name="provider" v-model="selectedColor" class="card__option__select" required>
                    <option value="15"> Black </option>
                    <option value="16"> Black/red </option>
                </select>
            </div>
            <div class="card__option">
                <h3 class="card__option__title">
                    quantity <span>*</span>
                </h3>
                <input class="card__option__input" type="number" v-model="selectedQuantity" min="1" max="5">
            </div>
            <div class="card__validation" v-show="showQuantityError">
                <p>Please enter a valid quantity</p>
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
            selectedQuantity: 1,
            showValidationError: false,
            showQuantityError: false,
        }
    },

    watch: {
        selectedProvider() { 
            return this.showValidationError = false; 
        },
        selectedColor() { 
            return this.showValidationError = false;
        },
        selectedQuantity() {
            return this.showQuantityError = false;
        }
    },

    methods: {
        close() {
            this.$emit('close-options-popup');
        },

        addToCart() {
            // if no options is selected
            if( this.selectedProvider == '' || this.selectedColor == '') {
                this.showValidationError = true;
            };
            // if quantity is negative
            if ( parseInt(this.selectedQuantity) < 0 ) {
                this.showQuantityError = true;
            };
            // if no errors exists
            if( this.selectedQuantity > 0 && !( this.selectedProvider == '' || this.selectedColor == '')) {
                // adding the option property to the product object
                this.product.option = {
                    226: 95,
                }
                // provider
                this.product.option[226] = parseInt(this.selectedProvider);
                // color
                // this.product.option[228] = parseInt(this.selectedColor);
                // quantity
                this.product.quantity = parseInt(this.selectedQuantity);
                // we add the product to the cart
                this.$emit('add-to-cart');
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
        font-size: 20px
        cursor: pointer
        transform: rotate(0deg)
        transition: 0.2s all ease-in
        text-align: center

        &:hover
            transform: rotate(180deg)
    
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
