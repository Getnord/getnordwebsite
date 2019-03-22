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
            this.$emit('buybtnblicked', this.productId);
        }
    },

};
</script>

<style lang="sass" scoped>

</style>

