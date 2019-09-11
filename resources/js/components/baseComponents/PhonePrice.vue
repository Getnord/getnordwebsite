<template>
    <strong>
        {{this.price}}
    </strong>
</template>
<script>
    export default {
        name: "price",
        props: {
            productId: {
                required: true
            }
        },
        data() {
            return {
                price: ''
            }
        },
        mounted() {
            this.lang = document
                .getElementsByTagName("html")[0]
                .getAttribute("lang");
            const form = new FormData();
            // the array contains the product ids
            // form.append("products", "[ 30, 40, 50 ]");
            form.append(
                "products",
                `[${this.productId}]`
            );
            form.append("currency", this.$root.$data.info.currencies[this.lang]);
            form.append("lang", this.lang);
            axios
                .post("/api/product", form)
                .then(response => {
                    console.log('api', response)
                    // product detials from OpenCart
                    this.price = response.data.products[0].price;
                })
                .catch(function (error) {
                    console.log(error);
                });

        }

    }
</script>

