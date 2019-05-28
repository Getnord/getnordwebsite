<template>
    <div>
        <accessories-row>
            <base-accessorie-card v-for="accessorie in accessoriesToLoad" :id="accessorie.id" @open-details-window="openDetailsWindow"></base-accessorie-card>
        </accessories-row>
        <details-window v-if="isDetailsWindowOpen" :active-accessorie="activeAccessorie" >
        </details-window>

    </div>
</template>

<script>
import BaseAccessorieCard from './BaseAccessorieCard.vue';
import DetailsWindow from './DetailsWindow.vue';
import { accessoriesData, accessoriesIds } from './accessoriesData.js';
import AccessoriesRow from './accessoriesRow.vue';

export default {
    name: 'AccessoriesSection',

    components: {
        'base-accessorie-card': BaseAccessorieCard,
        'details-window': DetailsWindow,
        'accessories-row': AccessoriesRow
    },

    props: {
        accessoriesToLoad: {
            type: Array,
            required: true
        },
        openCartData: {
            type: Array,
            required: true
        }
    },

    computed: {
        validAccessories() {
            return _.intersection(this.accessoriesIds, this.accessoriesToLoad);
        },

    },

    data() {
        return {
            accessoriesData,
            accessoriesIds,
            activeAccessorie: {},
            isDetailsWindowOpen: false
        }
    },

    methods: {
        openDetailsWindow(id) {
            console.log(id);
            /**
             * we have to find the accessorie data form the accessories data
             */
            this.activeAccessorie = _.find(this.accessoriesData, (o) => o.id == id);
            const accessorieOpenCartInfo = _.find(this.openCartData, (o) => o.id == o.id );
            this.activeAccessorie.price = accessorieOpenCartInfo.price;
            if(!_.isEmpty(this.activeAccessorie)) {
                this.isDetailsWindowOpen = true;   
            }
        }
    },

}
</script>

<style>

</style>
