<template>
    <div class="wrapper wrapper--dark">
        <div class="card">
            <h1 class="card__title">
                Available Options
            </h1>
            <div class="card__hide" @click="close">

            </div>
            <div class="card__option">
                <h3 class="card__option__title">
                    Version <span>*</span>
                </h3>
                <v-select :options="providerOptions" v-model="selectedProvider" :searchable="false"></v-select>
                {{ selectedProvider }}
            </div>
            <div class="card__option">
                <h3 class="card__option__title">
                    color <span>*</span>
                </h3>
                <v-select :options="colorOptions" v-model="selectedColor" :searchable="false"></v-select>
                {{ selectedColor }}
            </div>
            <div class="card__option">
                <h3 class="card__option__title">
                    quantity <span>*</span>
                </h3>
                <input class="card__option__input" type="number" v-model="quantity">
            </div>
            <button class="card__btn cart__bt--blue">
                ADD TO CART
            </button>
        </div>
    </div>
</template>
<script>
import vSelect from 'vue-select';

export default {
    props: {
        product: {
            type: Object,
            required: true
        }
    },

    components: {
        vSelect,
    },

    data() {
        return {
            selectedProvider: '',
            selectedColor: '',
            quantity: 0,

        }
    },
    mounted() {
        for (const key in this.product.option[0]) {
                if (this.product.option[0].hasOwnProperty(key)) {
                    const element = this.product.option[0][key];
                    
                }
                console.log(key)
        }
    },
    computed: {
        providerOptions() {
            // for (const key in this.product.option) {
            //     if (object.hasOwnProperty(key)) {
            //         const element = object[key];
                    
            //     }
            // }
        },
        colorOptions() {

        }
    },

    methods: {
        close() {
            console.log('clicked');
            this.$emit('closeoptionspopup');
        }
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

        &__input
            width: 98%
            max-width: 100%
            display: block
            height: 36px
            border: 1px solid rgba(0,0,0,0.2)
            padding: 0px 0px 4px
            border-radius: 4px
            font-size: 18px
            padding: 0px 0px 3px 2px

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

</style>
