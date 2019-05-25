<template>
    <div class="row">
        <slot></slot>
    </div>
</template>
<script>
export default {
    name: 'accessories-row'
}
</script>
<style lang="sass" scoped>
.row
    display: flex
    flex-direction: row
    justify-content: space-around
    padding: 8px

    @media(max-width: 480px)
        flex-direction: column
        
</style>

