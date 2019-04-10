<template>
    <div class="card">
        <div class="card__hide" @click="hideMessageCard">
			<i class="fa fa-times"></i>
		</div>
        <p class="danger">
            <slot></slot>
        </p>
    </div>
</template>

<script>
export default {
    methods: {
        hideMessageCard() {
            this.$emit('hide-message-card');
        }
    },
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

    &__hide
        position: absolute
        top: 10px
        right: 10px
        cursor: pointer
        text-align: center
        transition: 0.2s all ease-in
        font-size: 20px
        transform: rotate(0deg)

        &:hover
            transform: rotate(180deg)
    p 
        padding: 20px

</style>
