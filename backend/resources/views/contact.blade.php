@extends('layout')

@section('title')
    <title>
        EASY WORK | Contact us
    </title>
@endsection

@section('style')
<link rel="stylesheet" href="{{url('assets/css/contact.css')}}">
@endsection

@section('content')
    <main id="up-page">
        <div class="banner-up">
            <div class="banner-img">
            </div>
            <div class="banner-content">
                <h1>CONTACT US</h1>
            </div>
        </div>

        <div class="address">
            <div class="message">
                <h3>Get in touch with us !</h3>
            </div>

            <div class="adrress-list">
                <div class="row">
                    <div class="col-sm-4 list-item">
                        <ti class="ti-mobile"></ti>
                        <h4>PHONE</h4>
                        <p>Phone +09xx xxx xxx</p>
                        <p>Phone +09xx xxx xxx</p>
                    </div>

                    <div class="col-sm-4 list-item border-left">
                        <ti class="ti-location-pin"></ti>
                        <h4>ADDRESS</h4>
                        <p>1st Dai Co Viet, Hai Ba Trung street, Ha Noi, Viet Nam</p>
                    </div>

                    <div class="col-sm-4 list-item border-left">
                        <ti class="ti-email"></ti>
                        <h4>EMAIL</h4>
                        <p>easywork@gmail.com</p>
                        <p>easyworkapp@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="form">
            <div class="form-message">
                <h4>IF YOU GOT ANY QUESTIONS <br>
                    PLEASE DO NOT HESITATE TO SEND US A MESSAGE.
                </h4>
            </div>

            <div class="form-content">
                <div class="row">
                    <div class="col">
                        <label for="first-name" class="form-label">First name</label>
                        <input type="text" class="form-control" placeholder="First name" aria-label="First name" id="first-name">
                    </div>
                    <div class="col">
                        <label for="last-name" class="form-label">Last name</label>
                    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" id="last-name">
                    </div>
                </div>
                <div class="form-email">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="example@gmail.com" id="inputEmail4">
                </div>
                <div class="form-subject">
                    <label for="exampleFormControlTextarea1" class="form-label">Subject</label>
                    <textarea class="form-control form-text" placeholder="The problem that you want to talk about..." id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>

            <div class="send-message">
                <button type="button" class="btn-send">SEND MESSAGE</button>
            </div>
        </div>

        <div class="message">
            <h3>Connect with us !</h3>
        </div>

        <div class="socials">
            <ul class="list-socials">
                <li class="socials-item">
                    <a href="" class="ti-facebook"></a>
                </li>

                <li class="socials-item">
                    <a href="" class="ti-twitter-alt"></a>
                </li>

                <li class="socials-item">
                    <a href="" class="ti-instagram"></a>
                </li>

                <li class="socials-item">
                    <a href="" class="ti-pinterest"></a>
                </li>

                <li class="socials-item">
                    <a href="" class="ti-linkedin"></a>
                </li>
            </ul>
        </div>
    </main>
@endsection