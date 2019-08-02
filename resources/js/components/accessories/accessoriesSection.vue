<template>
    <div>
        <div v-if="isCarouselActive">
            <carousel
                :perPageCustom="[[0, 1], [560, 2]]"
                paginationPosition="top"
                paginationColor="#a2aaaa"
                >
                <slide v-for="(accessorie, index) in validAccessories" :key="index">
                    <base-accessorie-card
                        :id="accessorie.id"
                        :name="accessorie.name"
                        :main-img="accessorie.mainImg"
                        @open-details-window="openDetailsWindow">
                    </base-accessorie-card>
                </slide>
            </carousel>
            <details-window v-if="isDetailsWindowOpen" :active-accessorie="activeAccessorie" >
            </details-window>
        </div>
        <div v-else>
            <div v-if="isMoreThanOneRowsOfAccessories">
                <accessories-row>
                    <base-accessorie-card
                        v-for="(accessorie, index) in splitedArray[0]"
                        :id="accessorie.id" :main-img="accessorie.mainImg"
                        :name="accessorie.name"
                        :key="index"
                        @open-details-window="openDetailsWindow"></base-accessorie-card>
                </accessories-row>
                <details-window v-if="isDetailsWindowOpen" :active-accessorie="activeAccessorie" >
                </details-window>
                <accessories-row :class="{'center-elts': isMoreThanOneRowsOfAccessories}">
                    <base-accessorie-card
                        v-for="(accessorie, index) in splitedArray[1]"
                        :id="accessorie.id"
                        :main-img="accessorie.mainImg"
                        :key="index"
                        :name="accessorie.name"
                        @open-details-window="openDetailsWindow"></base-accessorie-card>
                </accessories-row>
                <!-- three rows -->
                <accessories-row :class="{'center-elts': isMoreThanOneRowsOfAccessories}" v-if=" typeof splitedArray[2] != undefined">
                    <base-accessorie-card
                        v-for="(accessorie, index) in splitedArray[2]"
                        :id="accessorie.id"
                        :main-img="accessorie.mainImg"
                        :key="index"
                        :name="accessorie.name"
                        @open-details-window="openDetailsWindow"></base-accessorie-card>
                </accessories-row>
            </div>

            <div v-else>
                <accessories-row>
                    <base-accessorie-card
                        v-for="(accessorie, index) in validAccessories"
                        :id="accessorie.id"
                        :main-img="accessorie.mainImg"
                        :key="index"
                        @open-details-window="openDetailsWindow"
                        :name="accessorie.name"
                    >
                    </base-accessorie-card>
                </accessories-row>
                <details-window v-if="isDetailsWindowOpen" :active-accessorie="activeAccessorie" >
                </details-window>
            </div>
        </div>
    </div>
</template>

<script>
import BaseAccessorieCard from './BaseAccessorieCard.vue';
import DetailsWindow from './DetailsWindow.vue';
import { accessoriesData, allAccessoriesIds } from './accessoriesData.js';
import AccessoriesRow from './accessoriesRow.vue';
import { Carousel, Slide } from 'vue-carousel';
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
        BaseAccessorieCard,
        DetailsWindow,
        AccessoriesRow,
        Carousel,
        Slide
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
            // Validate the ids
            const filteredAccessories =  _.intersection(this.allAccessoriesIds, this.accessoriesToLoad);
            let result = [];
            filteredAccessories.forEach((elt) => {
                this.accessoriesData.forEach((obj) => {
                    if( obj.id == elt ) {
                        result.push(obj);
                    }
                })
            });
            // add the name, price and description from OC
            result.forEach((elt, index) => {
                const accessorieDataOC = _.find(this.openCartData, (o) => o.product_id == elt.id);
                if( typeof accessorieDataOC != 'undefined') {
                    elt.description = he.decode(accessorieDataOC.description);
                    elt.name = he.decode(accessorieDataOC.name);
                    elt.price = he.decode(accessorieDataOC.price);
                } else {
                    result.splice(index, 1);
                };
            });
            return result;
        },

        // if we have more than 3 accessories to show
        isMoreThanOneRowsOfAccessories() {
            // if the length of the following array is more equal or greater than 3
            // we show two rows of accessories
            // else we show only one
            return this.validAccessories.length > 3;
        },

        splitedArray() {
            if(this.validAccessories.length > 3) {
                return _.chunk(this.validAccessories, 3);
            }
        },

    },

    data() {
        return {
            accessoriesData,
            allAccessoriesIds,
            activeAccessorie: {},
            isDetailsWindowOpen: false,
            isCarouselActive: false,

        }
    },

    created() {
        window.addEventListener('resize', this.handleResize);
        this.handleResize();
    },

    destroyed() {
        window.removeEventListener('resize', this.handleResize);
    },

    methods: {
        openDetailsWindow(id) {
            /**
             * we have to find the accessorie data form the accessories data
             */
            this.activeAccessorie = _.find(this.accessoriesData, (o) => o.id == id);

            /**
             * some validation that the accessorie exist
             */
            if(!_.isEmpty(this.activeAccessorie)) {
                this.isDetailsWindowOpen = true;
            } else {
                console.log('the accessorie could not be found on our db');
            }
        },

        handleResize() {
            if(window.innerWidth <= 850 ) {
                this.isCarouselActive =  true;
            } else {
                this.isCarouselActive =  false;
            }
        }
    },

}
</script>

<style lang="sass" scoped>

</style>
