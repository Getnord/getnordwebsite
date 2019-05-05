<template>
    <div>
        <h1 class="button" v-text="BtnText"></h1>
    </div>
</template>
<script>
export default {
    props: {
        name: 'base-button',
        BtnText: {
            type: String,
            required: true,
        }
    }
}
</script>
<style lang="sass" scoped>
.button
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


