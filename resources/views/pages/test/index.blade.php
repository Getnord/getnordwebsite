@extends('layouts.app')

@section('content')

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
                        <small>{{__('cupon.smallText')}}</small>
                    </form>


                </div>
            </div>
        </div>

    </div>
</div>

@endsection
