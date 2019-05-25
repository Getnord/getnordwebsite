<template>
    <div class="modal">
        <div class="modal__cols">
            <div class="modal__cols__left" :style="{ backgroundImage: 'url(' + currentImageUrl + ')' }">
                <ul class="modal__cols__left__imgs">
                    <li v-for="(imgUrl, index) in imagesList" :key="index" @click="switchCurrentImage(imgUrl)">
                        <img :src="imgUrl" alt="" class="modal__cols__left__imgs__img">
                    </li>
                </ul>
            </div>
            <div class="modal__cols__right">
                <h1 class="modal__cols__right__name">Ttest {{ activeAccessorie.id }}</h1>
                <div class="modal__cols__right__imgs">
                    <img src="" alt="">
                    <img src="" alt="">
                </div>
                <p class="madal__cols__right__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi labore fugit officia doloremque, totam pariatur dolore voluptate. Adipisci natus, aut suscipit eos placeat, nihil quisquam quos delectus expedita rerum culpa.</p>
                <h2 class="price"></h2>
                <button class="modal__cols__right__btn" @click="addToCart">Add To Cart</button>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: 'details-window',

    props: {
        activeAccessorie: {
            type: Object,
            required: true
        }
    },

    computed: {
        imagesList: function() {
            return this.activeAccessorie.images.filter((imgUrl, index) => {
                return imgUrl != this.currentImageUrl;
            });
        },

    },

    data() {
        return {
            currentImageUrl: this.activeAccessorie.images[0],
        }
    },

    methods: {
        switchCurrentImage(imgUrl){
            this.currentImageUrl = imgUrl;
        },

        addToCart() {
            Event.$emit('add-accessorie-to-cart', this.activeAccessorie.id);
        }
    }


}
</script>
<style lang="sass" scoped>
.modal
    width: 100%
    background: #fff
    min-height: 600px

    &__cols
        display: flex
        flex-direction: row
        align-items: stretch
        

        &__right 
            width: 28.4%
            padding-top: 100px
            padding-left: 60px 
            padding-right: 60px
            
            &__name 
                padding: 0px
                margin-left: 0px
                font-size: 55px
                line-height: 60px
                font-weight: bold
                text-transform: uppercase
                text-align: left

            &__description 
                font-size: 1.250em

            &__btn
                margin-top: 70px
                margin-right: auto
                margin-left: auto
                display: inline-block
                padding: 17px 60px
                height: 70px
                font-size: 18px
                line-height: 30px
                font-weight: bold
                text-align: center
                text-decoration: none
                text-transform: uppercase
                cursor: pointer
                background-color: #ffe401
                color: #272727
                border-width: 0px
                height: 66px

        &__left
            width: 71.6%
            background: black
            background-size: cover
            background-position: center
                

            &__imgs 
                display: flex 
                flex-direction: column
                margin-left: 20px
                margin-top: 20px
                list-style: none
                

                &__img
                    width: 100px
                    margin-bottom: 20px
                    cursor: pointer


        
</style>


