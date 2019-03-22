@extends('layouts.test')

@section('content')
<buy-btn product-id="2" @buybtnblicked="showOptionsPopUp">
    yes babes
</buy-btn>
{{-- we use v-if because we want the component to rerender --}}
<options-popup v-if="isOptionsPopupOpen" @closeoptionspopup="closeOptionsPopup" v-on:add-to-cart="addToCart" :product="currentProduct">
</options-popup>

<shopping-cart v-if="isShoppingCartOpen" :products-in-cart="cart"></shopping-cart>
@endsection