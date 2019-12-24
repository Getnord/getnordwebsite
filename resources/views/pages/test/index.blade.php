@extends('layouts.app')

@section('content')
<style>
    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 99999999; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0, 0, 0); /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #ffffff;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 20px 20px 30px;
        border: 1px solid #888;
        max-width: 450px;
        width: 100%; /* Could be more or less, depending on screen size */
    }

    /* The Close Button */
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        line-height: 1;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    .header__text {
        margin-top: 10px;
        font-size: 28px;
        font-weight: bold;
        text-align: center;
    }

    .modal-body {
        margin-top: 40px;
    }

    .modal-raw {
        display: flex;
        justify-content: space-between;

    }

    .modal-text p {
        font-size: 14px;
        font-weight: 400;
        margin-top: 25px;
        line-height: 20px;
    }

    .modal-text {
        display: flex;
        justify-items: center;
        width: 45%;
    }

    .modal-image {
        width: 40%;
    }

    .modal-form {
        margin: 30px 0 10px;
    }

    .modal-form input {
        width: 100%;
        margin: 0 0 10px;
        height: 50px;
        font-size: 14px;
        padding-left: 10px;
        border: 1px solid #898989;
    }

    .modal-form input::-webkit-input-placeholder {
        color: #898989;
    }

    .modal-form input:-ms-input-placeholder {
        color: #898989;
    }

    .modal-form input::placeholder {
        color: #898989;
    }

    .modal-form button {
        text-transform: uppercase;
        background-color: #ffe401;
        color: #272727;
        padding: 17px 0;
        display: block;
        width: 103%;
        text-align: center;
        border: none;
        outline: none;
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 15px;
        cursor: pointer;
    }

    .modal-form small {
        font-size: 10px;
        width: 80%;
        margin: 0 auto;
        display: block;
    }

    .message span {
        display: block;
    }

    .message-error input {
        border-color: red;
    }

    .message-success input {
        border-color: green;
    }

    .message-error span {
        color: red;
        text-align: center;
        margin-bottom: 10px;
    }

    .message-success span {
        color: green;
        text-align: center;
        margin-bottom: 10px;
    }
</style>
<div>

    <button id="myBtn">Open Modal</button>

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
<script>
    // Get the modal
    let modal = document.getElementById("myModal");
    let url = '{{url('/').'/'.app()->getLocale()}}';
    // Get the button that opens the modal
    let btn = document.getElementById("myBtn");
    let inputEmail = document.querySelector(".coupon-email");

    // Get the <span> element that closes the modal
    let span = document.getElementsByClassName("close")[0];
    let submitBtn = document.getElementById("formSubmit");

    // When the user clicks on the button, open the modal
    btn.onclick = function () {
        modal.style.display = "block";
    };
    function removeMessage(){

        document.querySelector('.message').classList.remove('message-success');
        document.querySelector('.message').classList.remove('message-error');
        document.querySelector('.message-text').innerHTML = ''
    }
    inputEmail.addEventListener("input", function(){
        removeMessage()
    });
    function validateEmail(email) {
        var re = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

        return re.test(String(email).toLowerCase());
    }

    submitBtn.onclick = function (event) {
        let couponEmail = document.querySelector('.coupon-email').value;
        event.preventDefault();
        console.log(couponEmail)


        axios
            .post(url + "/coupon", {email: couponEmail})
            .then(response => {
                console.log(response.data)
                if (response.data.errors) {
                    document.querySelector('.message').classList.add('message-error');
                    document.querySelector('.message-text').innerHTML = response.data.errors.email[0]
                }else if(response.data.success){
                    document.querySelector('.message').classList.add('message-success');
                    document.querySelector('.message-text').innerHTML = response.data.success
                    setTimeout(function(){
                        removeMessage()
                        span.click()
                    }, 3000);
                }

            })
            .catch(function (error) {
                console.log(error);
            });


    };
    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
@endsection
