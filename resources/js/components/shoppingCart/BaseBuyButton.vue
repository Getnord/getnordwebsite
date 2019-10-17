<template>

    <a href="https://www.trendmarq.com/c-4123311/getnord-shop/" target="_blank" v-if="isDutchLang" class="button button_yellow"
       >
        <slot></slot>
    </a>
    <button v-else class="button button_yellow" @click="clicked">
        <slot></slot>
    </button>
</template>
<script>


    export default {
        data() {
            return{
                isDutchLang: false
            };
        },
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

        methods: {
            clicked() {
                console.log(this.productId)
                this.$emit('buy-btn-clicked', this.productId, this.productHasOptions);
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
        }, mounted() {
            this.isDutch()
        }

    };
</script>

