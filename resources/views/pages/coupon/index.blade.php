@extends('layouts.app')

@section('content')<!--Start pop-op for coupon-->
<div class="coupon-overlay">
    <div class="coupon-form">
        <div class="coupon-form-body">
            <div class="body--text">
                <h4>
                    extra 20% off
                </h4>
                <h4>
                    one week only
                </h4>
            </div>
            <div class="form--button">
                <button class="btn-send">send me my discount code</button>
                <button class="btn-cancel">No thanks, I prefer to pay full price for GETNORD phone</button>
            </div>
        </div>
    </div>
</div>
<div>
    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <!-- Modal header -->
            <span class="close">&times;</span>
            <div class="modal-header">
                <h2 class="header__text">{{__('cupon.title')}}</h2>
            </div>
            <div class="modal-body">
                <div class="modal-raw">
                    <div class="modal-text">
                        <p>{{__('cupon.text')}}</p>
                    </div>
                    <div class="modal-image">
                        <img src="{{asset('img/getnord-sale-cupon.png')}}" alt="">
                    </div>
                </div>
                <div class="modal-form">
                    <form action="{{route('coupon',['locale' =>app()->getLocale()])}}" method="POST" id="couponForm">
                        @csrf
                        <div class="message">
                            <span class="message-text"></span>
                            <input type="email" placeholder="@lang('cupon.placeholder')" required class="coupon-email"
                                   name="email">
                        </div>
                        <button id="formSubmit">{{__('cupon.buttonText')}}</button>
                        <button  class="btn-close" type="button">No thanks, I prefer to pay full price for GETNORD phone</button>
                        <small>{{__('cupon.smallText')}}</small>
                    </form>


                </div>
            </div>
        </div>

    </div>
</div>

@endsection

