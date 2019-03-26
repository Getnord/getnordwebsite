<template>
    <button class="button button_blue_solid" @click="clicked">
        <slot></slot>
    </button>
</template>
<script>
export default {

    props: {
        productId: {
            type: String,
            required: true
        },
        // Will be used to skip opening the options pop up
        // and directly add the product to the cart
        productHasOptions: {
            type: Boolean,
            required: true
        }
    },

    data() {
        return {
            
        }
    },

    mounted() {
        
    }, 

    methods: {
        clicked() {
                this.$emit('buy-btn-clicked', this.productId, this.productHasOptions);
        }
    },

};
</script>

<style lang="sass" scoped>

</style>

