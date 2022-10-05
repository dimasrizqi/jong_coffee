<!-- 
    Programmer Name: Ms. Lim Jia Yong, Project Manager
    Description: Home / landing page for customers or unregistered user 
    Edited on: 28 February 2022
 -->

@extends('layouts.app')

@section('links')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection

@section('bodyID')
{{ 'home' }}@endsection

@section('navTheme')
{{ 'dark' }}@endsection

@section('logoFileName')
{{ URL::asset('/images/White Logo.png') }}@endsection


@section('content')
<section class="banner">
    <div class="container">
        <div class="col-md-10 col-lg-8 details">
            <h3>FRESHEST COFFE IN TOWN</h3>
            <h1>Experience a taste of coffee as if your favorite</h1>
            <a href="{{ route('menu') }}" class="btn primary-btn" style="width:250px;">Discover menu</a>
        </div>
    </div>
</section>

<section class="chefs">
    <div class="container">
        <h2 class="title flex-center">Meet our chefs</h2>
        <div class="row justify-content-evenly align-items-center chefs-wrapper">
            <div class="card col-lg-3 col-md-8 col-10 mt-5">
                <div class="chef-img d-flex align-items-center justify-content-center">
                    <img src="./images/chef1.jpg" alt="">
                </div>
                <div class="chef-desc d-flex flex-column align-items-center justify-content-start">
                    <p class="chef-name">Hadi</p>
                    <p class="chef-position">Barista</p>
                </div>
            </div>
            <div class="card col-lg-3 col-md-8 col-10 mt-5">
                <div class="chef-img d-flex align-items-center justify-content-center">
                    <img src="./images/chef2.jpg" alt="">
                </div>
                <div class="chef-desc d-flex flex-column align-items-center justify-content-start">
                    <p class="chef-name">Erick</p>
                    <p class="chef-position">Barista</p>
                </div>
            </div>
            <div class="card col-lg-3 col-md-8 col-10 mt-5">
                <div class="chef-img d-flex align-items-center justify-content-center">
                    <img src="./images/chef3.jpg" alt="">
                </div>
                <div class="chef-desc d-flex flex-column align-items-center justify-content-start">
                    <p class="chef-name">Dinal</p>
                    <p class="chef-position">Barista</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact">
    <div class="container">
        <h2 class="title flex-center">Contact Us</h2>
        <div class="flex-center contact-wrapper">
        <div class="form-wrapper flex-center">
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" style="height: 100px"></textarea>
                </div>
                <div class="w-100 flex-center">
                <a href="https://wa.me/+628989541406" class="primary-btn msg-btn w-100 px-3 py-2 text-center rounded">
                    Send Message
                </a>
                </div>
            </form>
        </div>

        <div class="gmap flex-center">
<<<<<<< HEAD
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.2434723379197!2d106.808544!3d-6.740126999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69cc7066d5ce73%3A0xcf489e876c7bc208!2sJong%20Cigombong%20Koffie!5e0!3m2!1sen!2sid!4v1664943037607!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>"></iframe>
=======
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15848.973889351679!2d106.808544!3d-6.740127!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcf489e876c7bc208!2sJong%20Cigombong%20Koffie!5e0!3m2!1sen!2sid!4v1663772940191!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" class="rounded"></iframe>
                
>>>>>>> main
        </div>

        </div>
    </div>
</section>
@endsection