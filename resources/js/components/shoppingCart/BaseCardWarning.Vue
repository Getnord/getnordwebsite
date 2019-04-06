<template>
    <div class="card">
        <p class="danger">
            <slot></slot>
        </p>
    </div>
</template>

<script>
export default {
    
}
</script>

<style scoped lang="sass">
.card
    position: fixed
    bottom: 40px 
    right: 40px
    height: fit-content
    min-height: 120px
    width: 250px
    background-color: #fff
    box-shadow: 0px 2px 20px darken(#fff,10%)

    p 
        padding: 20px

</style>
