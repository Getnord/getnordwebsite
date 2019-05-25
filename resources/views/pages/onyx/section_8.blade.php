<section class="gallery_section" id="accessories">
    <div class="section_header">{{ __('onyx.accessoriesTitle') }}</div>
    <div class="section_body clearfix">
        <accessories-row>
            <base-accessorie-card :id="20" :img-url="/img/onyx/" @open-details-window="openDetailsWindow"></base-accessorie-card>
            <base-accessorie-card :id="30" @open-details-window="openDetailsWindow"></base-accessorie-card>
            <base-accessorie-card :id="40" @open-details-window="openDetailsWindow"></base-accessorie-card>
        </accessories-row>
        <details-window v-if="isDetailsWindowOpen" :active-accessorie="activeAccessorie">
        </details-window>
    </div>
</section>