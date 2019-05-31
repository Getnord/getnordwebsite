<template>
    <div>
        <accessories-row>
            <base-accessorie-card v-for="(accessorie, index) in validAccessories" :id="accessorie.id" :main-img="accessorie.mainImg" :key="index" @open-details-window="openDetailsWindow"></base-accessorie-card>
        </accessories-row>
        <details-window v-if="isDetailsWindowOpen" :active-accessorie="activeAccessorie" >
        </details-window>
        <accessories-row v-if="isTwoRowsOfAccessories" :class="{ 'center-elts': isTwoRowsOfAccessories }">

        </accessories-row>
        
    </div>
</template>

<script>
import BaseAccessorieCard from './BaseAccessorieCard.vue';
import DetailsWindow from './DetailsWindow.vue';
import { accessoriesData, allAccessoriesIds } from './accessoriesData.js';
import AccessoriesRow from './accessoriesRow.vue';
import he from 'he';

/**
 *  How it works
 * ----------------------
 *  we specify an array containing ids for each accessory.
 *  Fitler the existing ones by comparing the previous array and the array of all the products we get from OpenCart.
 *  
 */
export default {
    name: 'AccessoriesSection',

    components: {
        'base-accessorie-card': BaseAccessorieCard,
        'details-window': DetailsWindow,
        'accessories-row': AccessoriesRow
    },

    props: {
        // array of ids
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
        // Fitler the elements in the accessoriesToLoad array
        validAccessories() {
            const filteredAccessories =  _.intersection(this.allAccessoriesIds, this.accessoriesToLoad);
            let result = [];
            filteredAccessories.forEach((elt) => {
                this.accessoriesData.forEach((obj) => {
                    if( obj.id == elt ) {
                        result.push(obj);
                    }
                })
            });
            // add the name and description from OC
            result.forEach((elt, index) => {
                const accessorieDataOC = _.find(this.openCartData, (o) => o.product_id == elt.id);
                if( typeof accessorieDataOC != 'undefined') {
                    elt.description = he.decode(accessorieDataOC.description);
                    elt.name = he.decode(accessorieDataOC.name);
                } else {
                    result.splice(index, 1);
                };
            });
            return result;
        },
        isTwoRowsOfAccessories() {
            // if the length of the following array is more equal or greater than 3
            // we show two rows of accessories
            // else we show only one
            return this.validAccessories.length > 3;
        },

    },

    data() {
        return {
            accessoriesData,
            allAccessoriesIds,
            activeAccessorie: {},
            isDetailsWindowOpen: false,

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
