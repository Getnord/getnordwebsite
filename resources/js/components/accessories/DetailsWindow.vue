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
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi labore fugit officia doloremque, totam pariatur dolore voluptate. Adipisci natus, aut suscipit eos placeat, nihil quisquam quos delectus expedita rerum culpa.</p>
                <h2 class="price"></h2>
                <slot></slot>
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
        }
    }


}
</script>
<style lang="sass" scoped>
.modal
    width: 100%
    background: #fff
    min-height: 600px
    margin-top: 100px

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


