<template>
    <div class="modal____accessories">
        <div class="modal____accessories__cols">
            <div class="modal____accessories__cols__left" :style="{ backgroundImage: 'url(' + currentImageUrl + ')' }">
                <ul class="modal____accessories__cols__left__imgs">
                    <li
                        v-for="(imgUrl, index) in imagesList"
                        :key="index"
                        @click="switchCurrentImage(imgUrl)"
                    >
                        <img :src="imgUrl" alt class="modal____accessories__cols__left__imgs__img">
                    </li>
                </ul>
            </div>
            <div class="modal____accessories__cols__right">
                <h1 class="modal____accessories__cols__right__name">{{ activeAccessorie.name }}</h1>
                <div class="modal____accessories__cols__right__imgs">
                    <img
                        v-for="(icon, index ) in activeAccessorie.icons"
                        :src="icon"
                        alt
                        :key="index"
                        class="modal____accessories__cols__right__imgs__icon"
                    >
                </div>
                <div
                    class="madal__cols__right__description"
                    v-html="activeAccessorie.description"
                ></div>
                <h2 class="modal____accessories__cols__right__price">{{ activeAccessorie.price }}</h2>
                <a href="https://www.trendmarq.com/c-4123311/getnord-shop/" target="_blank" v-if="isDutchLang" class="button button_yellow"
                   >
                    {{addToCartText}}
                </a>
                <button v-else class="modal____accessories__cols__right__btn" @click="addToCart">{{addToCartText}}</button>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        name: "details-window",

        props: {
            activeAccessorie: {
                type: Object,
                required: true
            },
            addToCartText: {
                type: String,
                required: true
            }
        },
        mounted() {
            this.isDutch()
        },
        watch: {
            activeAccessorie() {
                this.currentImageUrl = this.activeAccessorie.images[0];
            }
        },

        computed: {
            imagesList() {
                return this.activeAccessorie.images.filter((imgUrl, index) => {
                    return imgUrl != this.currentImageUrl;
                });
            }
            // currentImageUrl() {
            //     return this.activeAccessorie.images[0]
            // }
        },

        data() {
            return {
                currentImageUrl: this.activeAccessorie.images[0],
                isDutchLang: false
            };
        },

        methods: {
            switchCurrentImage(imgUrl) {
                this.currentImageUrl = imgUrl;
            },

            addToCart() {
                Event.$emit("add-accessorie-to-cart", this.activeAccessorie.id);
            },
            isDutch() {
                let currentLang = document.getElementsByTagName('html')[0].getAttribute('lang');
                if (currentLang === 'nl') {
                    this.isDutchLang = true
                } else {
                    return false
                }

            }
        }
    };

</script>
<style lang="sass" scoped>
    .modal____accessories
        width: 100%
        background: #fff
        padding: 16px 0

        @media(max-width: 768px)
            min-height: none

        &__cols
            display: flex
            flex-direction: row
            align-items: stretch

            @media(max-width: 768px)
                flex-direction: column

            &__right
                width: 28.4%
                padding-top: 100px
                padding-left: 60px
                padding-right: 60px

                @media(max-width: 768px)
                    background-color: #f2f3f3
                    max-width: 100%
                    padding-top: 10px
                    padding-left: 10px
                    padding-right: 10px
                    width: auto

                &__name
                    padding: 0px
                    margin-left: 0px
                    font-size: 55px
                    line-height: 60px
                    font-weight: bold
                    text-transform: uppercase
                    text-align: left

                    @media(max-width: 768px)
                        font-size: 24px
                        padding: 0 10px 0 10px
                        text-align: left

                    @media(max-width: 480px)
                        text-align: center

                &__imgs
                    margin: 2em 0 2em 0

                    @media(max-width: 480px)
                        display: flex
                        flex-direction: column
                        justify-content: center

                    &__icon
                        margin-right: 2em
                        @media(max-width: 480px)
                            margin-right: 0

                &__description
                    font-size: 1.250em !important
                    line-height: 1.5em !important

                    @media(max-width: 468px)
                        text-align: center
                        font-size: 1em
                        padding: 0 16px

                &__price
                    font-size: 1.500em
                    font-weight: 700
                    margin: 1em 0 0 0
                    text-align: left
                    color: #272727
                    @media(max-width: 480px)
                        text-align: center

                &__btn
                    margin-top: 3em
                    margin-right: auto
                    margin-left: auto
                    display: inline-block
                    padding: 17px 10px
                    //width: 200px
                    width: auto
                    //height: 70px
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
                    //height: 66px
                    height: auto
                    margin-bottom: 4em

                    @media(max-width: 480px)
                        display: block
                        margin: 1em auto

            &__left
                width: 50%
                height: 70vh
                margin-top: 100px
                background: white
                background-size: contain
                background-position: center
                background-repeat: no-repeat

                @media(max-width: 768px)
                    width: 100%
                    height: 640px

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

                        @media(max-width: 768px)
                            width: 80px

                        @media(max-width: 480px)
                            width: 50px

</style>


