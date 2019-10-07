<section class="gallery_section" id="accessories">
    <div class="section_header">{{ __('onyx.accessoriesTitle') }}</div>
    <div class="section_body clearfix">
        <accessories-section :accessories-to-load="[56, 59, 51, 58, 57]"
                             :open-cart-data="info.openCartData"
                             :more-info="'{{__('leo.moreInfo')}}'"
                             :add-to-cart="'{{__('leo.addToCart')}}'"
        ></accessories-section>
    </div>
</section>
