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
<style type="text/css">
    .coupon-overlay {
        top: 0;
        position: fixed;
        right: -100vw;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
        overflow-y: scroll;
        z-index: 9999999999999999999999;
        background: rgba(0, 0, 0, 0.4);
        transition: all ease .3s;
        opacity: 0;
    }

    .coupon-overlay.active {

        right: 0;
        transition: all ease .3s;
        opacity: 1;
    }

    .coupon-form {
        padding: 20px;
        background: #231f20;
        color: #fff;
        max-width: 500px;
        width: 95%;
    }

    .body--text h4 {
        color: #fff;
        text-transform: uppercase;
        font-size: 1.5rem;
        text-align: center;
        line-height: 1.7rem;
    }

    .body--text {
        margin-bottom: 20px;
    }

    .form--button button {
        background: transparent;
        border: none;
        color: #fff;
        text-transform: uppercase;
        font-size: .9rem;
        text-align: center;
        margin: 0 auto 10px;
        display: block;
        padding: 15px 0;
        width: 100%;
        border: 1px solid transparent;
        transition: all ease .3s;
    }

    .form--button button:hover {
        border: 1px solid #fff;
        transition: all ease .3s;
    }
    #myModal .btn-close{
        background: #c8232c;
        color: #FFFFFF;
    }
    @media ( max-width: 480px ){
        .coupon-form {
            max-width: 300px;
        }
    }
</style>
@endsection

