<template>
    <div class="card">
        <img class="card__img" :src="mainImg" alt="">
        <div>
            <h1 class="card__title">holla</h1>
            <button class="card__btn" @click="openDetailsWindow">More info</button>
        </div>
    </div>
</template>
<script>
export default {
    name: 'base-accessorie-card',

    props: {
        id: {
            type: Number,
            required: true
        },
        mainImg: {
            type: String,
            required: true
        }
    },

    methods: {
        openDetailsWindow() {
            this.$emit('open-details-window', this.id)
        }
    }

}
</script>
<style lang="sass" scoped>
.card 
    background: #ffffff
    display: flex
    flex-direction: column
    justify-content: space-between
    align-items: center
    max-width: 500px
    padding: 20px 40px
    width: 32%
    margin: 4px
    height: 33em
    
    @media( max-width: 480px)
        width: 50%

    &__img
        display: block
        margin: 10px auto 2em auto
        max-height: 68%

    &__title
        font-size: 24px
        font-weight: 700
        text-transform: uppercase
        text-align: center
        margin-bottom: 20px
        margin-left: 0

    &__btn
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

</style>
