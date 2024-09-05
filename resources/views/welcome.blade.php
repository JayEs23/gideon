@extends('layouts.app')

@section('title', 'Gideon Ihuarulam Platform')

@section('content')
<section class="my-1">
    <!-- Container  -->
    <div class="container">
        <div style="background: url(../../assets/images/landing-immigration/map.svg); background-repeat: no-repeat; background-size: auto; background-position: right">
            <div class="row py-1 align-items-center gy-2">
                <div class="col-xl-5 col-lg-5">
                    <div>
                        <!-- Welcome Text -->
                        <span class="text-primary mb-5 fw-semibold">Welcome to Gideon Ihuarulam's Domain</span>
                        <h1 class="display-4 my-3 mb-5">Empowering Your Path to Success</h1>
                        <p class="mb-5 fs-4">
                            As a results-driven professional, I am dedicated to helping clients achieve their goals with tailored strategies and expert guidance.
                            My commitment is to empower you with the tools and knowledge necessary for success.
                            <!-- Whether you are navigating career transitions, -->
                            <!-- pursuing educational opportunities, or seeking personal growth, my goal is to support you every step of the way. -->
                        </p>
                        <!-- <p class="mb-5 fs-4">
                            With a profound understanding of various industries and a passion for fostering growth, I offer personalized solutions designed to meet your unique needs.
                            Let’s work together to unlock your full potential and transform your aspirations into tangible achievements. Reach out today to start your journey towards success.
                        </p> -->
                        <a href="#" class="btn btn-warning btn-lg">Services</a>
                        <a href="#" class="btn btn-primary btn-lg">Get in Touch</a>

                    </div>
                </div>
                <div class="offset-xl-1 col-xl-6 col-lg-7 d-flex justify-content-center py-6">
                    <div class="text-center position-relative">
                        <div class="position-relative">
                            <img src="../../assets/images/landing-immigration/circle.png" alt="" class="position-relative img-fluid bg-invert" />

                            <div class="position-absolute top-25 mt-4 z-1 ms-xl-n8 d-none d-md-block">
                                <div class="bg-white border rounded-pill px-3 py-2 d-inline-block fw-medium shadow-lg">Data Analytics</div>
                            </div>
                            <div class="position-absolute top-50 z-1 ms-n5 ms-xl-n8 mt-n4 d-none d-md-block">
                                <div class="bg-white border rounded-pill px-3 py-2 d-inline-block fw-medium shadow-lg">Investment Guidance</div>
                            </div>
                            <div class="position-absolute top-60 z-1 mt-2 ms-xl-n8 d-none d-md-block">
                                <div class="bg-white border rounded-pill px-3 py-2 d-inline-block fw-medium shadow-lg">Personal Finance coach</div>
                            </div>
                            <div class="position-absolute top-50 start-50 translate-middle">
                                <svg width="315" height="315" viewBox="0 0 315 315" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="3.06323" y="2.99145" width="308.4" height="308.4" rx="154.2" fill="red" />
                                    <rect x="3.06323" y="2.99145" width="308.4" height="308.4" rx="154.2" fill="#f4c237" />
                                    <rect x="3.06323" y="2.99145" width="308.4" height="308.4" rx="154.2" stroke="var(--gk-gray-200)" stroke-width="5.81886" />
                                </svg>
                                <div class="position-absolute start-50 translate-middle" style="top: 5% !important">
                                    <img src="{{ asset("assets/img/gideon.png")}}" alt="" />
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10">
            <div class="bg-white shadow rounded-3 mt-n8 border">
                <div class="row justify-content-around py-5 gy-4 gy-lg-0">
                    <div class="col-xl-2 col-md-4 text-center px-4">
                        <div class="h1 mb-0">25+</div>
                        <span>Years of Experience</span>
                    </div>
                    <div class="col-xl-2 col-md-4 text-center px-4">
                        <div class="h1 mb-0">450</div>
                        <span>Top University Partner</span>
                    </div>
                    <div class="col-xl-2 col-md-4 text-center px-4">
                        <div class="h1 mb-0">99%</div>
                        <span>Successful Visa Process Rate</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="py-lg-8 py-5">
    <div class="container px-lg-6 my-lg-8">
        <div class="row align-items-center gy-4 gy-lg-0">
            <div class="col-lg-5">
                <div class="row align-items-end g-3 mb-3">
                    <div class="col-6">
                        <img src="../../assets/images/landing-immigration/about-img-1.jpg" alt="" class="img-fluid rounded-3 w-100" />
                    </div>
                    <div class="col-6">
                        <img src="../../assets/images/landing-immigration/about-img-2.png" alt="" class="img-fluid rounded-3 w-100" />
                    </div>
                </div>
                <img src="../../assets/images/landing-immigration/about-img-3.jpg" alt="" class="img-fluid rounded-3 w-100" />
            </div>
            <div class="col-lg-6 col-12 ms-lg-8">
                <div class="mb-5">
                    <span class="fw-semibold text-primary">About - Your Trusted Partner</span>
                    <h2 class="h1 my-3">Achieving Academic Excellence Study Abroad</h2>
                    <p class="mb-0">
                        At
                        <span class="text-primary">[Your Company Name]</span>
                        , we are dedicated to empowering students to achieve their academic dreams abroad. Join us and embark on your journey to academic excellence. With expert resources and personalized
                        support.
                    </p>
                </div>
                <div class="mb-3">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                opacity="0.2"
                                d="M16.5 12.3037C16.5 13.1937 16.2361 14.0638 15.7416 14.8038C15.2471 15.5438 14.5443 16.1206 13.7221 16.4612C12.8998 16.8018 11.995 16.8909 11.1221 16.7172C10.2492 16.5436 9.44736 16.115 8.81802 15.4857C8.18869 14.8564 7.7601 14.0545 7.58647 13.1816C7.41283 12.3087 7.50195 11.4039 7.84254 10.5816C8.18314 9.75937 8.75991 9.05656 9.49994 8.5621C10.24 8.06763 11.11 7.80371 12 7.80371C13.1935 7.80371 14.3381 8.27782 15.182 9.12173C16.0259 9.96564 16.5 11.1102 16.5 12.3037Z"
                                fill="#754FFE" />
                            <path
                                d="M20.8004 8.09997C21.8412 10.2767 22.0387 12.7617 21.355 15.0755C20.6713 17.3893 19.1547 19.3678 17.098 20.6292C15.0413 21.8906 12.5902 22.3454 10.2179 21.9059C7.84557 21.4664 5.72013 20.1637 4.25179 18.2492C2.78344 16.3348 2.0763 13.9443 2.26682 11.5391C2.45735 9.13396 3.53204 6.88461 5.28348 5.22522C7.03492 3.56583 9.33895 2.61402 11.7509 2.55349C14.1628 2.49296 16.5117 3.32801 18.3442 4.89747L20.4695 2.77122C20.6102 2.63049 20.8011 2.55143 21.0001 2.55143C21.1991 2.55143 21.39 2.63049 21.5307 2.77122C21.6715 2.91195 21.7505 3.10282 21.7505 3.30184C21.7505 3.50087 21.6715 3.69174 21.5307 3.83247L12.5307 12.8325C12.39 12.9732 12.1991 13.0523 12.0001 13.0523C11.8011 13.0523 11.6102 12.9732 11.4695 12.8325C11.3288 12.6917 11.2497 12.5009 11.2497 12.3018C11.2497 12.1028 11.3288 11.9119 11.4695 11.7712L14.0682 9.17247C13.3639 8.70668 12.5231 8.49221 11.6817 8.56379C10.8404 8.63538 10.0478 8.98881 9.43231 9.56689C8.81683 10.145 8.41446 10.9139 8.29034 11.7491C8.16622 12.5843 8.32762 13.437 8.7484 14.169C9.16919 14.9011 9.82473 15.4697 10.6089 15.7829C11.3931 16.096 12.26 16.1354 13.0693 15.8945C13.8786 15.6536 14.5829 15.1467 15.0683 14.4557C15.5536 13.7647 15.7915 12.9302 15.7435 12.0872C15.738 11.9887 15.7519 11.89 15.7845 11.7969C15.8171 11.7038 15.8677 11.618 15.9334 11.5445C15.9991 11.4709 16.0787 11.411 16.1676 11.3682C16.2564 11.3254 16.3529 11.3005 16.4514 11.295C16.6503 11.2838 16.8455 11.3521 16.994 11.4848C17.0676 11.5505 17.1275 11.6301 17.1703 11.719C17.2131 11.8079 17.238 11.9043 17.2435 12.0028C17.3119 13.196 16.9711 14.3769 16.2774 15.3501C15.5838 16.3234 14.5788 17.0309 13.4285 17.3556C12.2783 17.6804 11.0517 17.6029 9.95148 17.1361C8.85123 16.6692 7.94322 15.8409 7.3775 14.7881C6.81178 13.7353 6.62223 12.521 6.84017 11.3458C7.05811 10.1707 7.67049 9.10504 8.57611 8.32509C9.48173 7.54514 10.6264 7.09753 11.8208 7.05626C13.0153 7.01499 14.1881 7.38251 15.1454 8.09809L17.2782 5.96528C15.7152 4.66759 13.7279 3.99312 11.6979 4.07141C9.66793 4.14971 7.73844 4.97524 6.28003 6.38947C4.82163 7.80369 3.93715 9.70688 3.79646 11.7335C3.65578 13.7601 4.26881 15.7673 5.51782 17.3694C6.76683 18.9716 8.56375 20.0558 10.5634 20.4138C12.5631 20.7719 14.6246 20.3785 16.3519 19.3092C18.0792 18.2399 19.3506 16.5701 19.9218 14.6206C20.493 12.6711 20.3238 10.5792 19.4467 8.74684C19.3609 8.56733 19.3499 8.36108 19.4162 8.17349C19.4825 7.98589 19.6206 7.83231 19.8001 7.74653C19.9796 7.66075 20.1859 7.6498 20.3735 7.71608C20.5611 7.78236 20.7146 7.92045 20.8004 8.09997Z"
                                fill="#754FFE" />
                        </svg>

                        <h3 class="mb-0">Our Mission</h3>
                    </div>
                    <p class="mb-0">
                        At
                        <span class="text-dark">[Your Company Name]</span>
                        , our mission is to empower students to reach their full potential by providing comprehensive resources and personalized support for their study abroad journey.
                    </p>
                </div>
                <div class="mb-3">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                opacity="0.2"
                                d="M12 5.55371C4.5 5.55371 1.5 12.3037 1.5 12.3037C1.5 12.3037 4.5 19.0537 12 19.0537C19.5 19.0537 22.5 12.3037 22.5 12.3037C22.5 12.3037 19.5 5.55371 12 5.55371ZM12 16.0537C11.2583 16.0537 10.5333 15.8338 9.91661 15.4217C9.29993 15.0097 8.81928 14.424 8.53545 13.7388C8.25162 13.0536 8.17736 12.2996 8.32205 11.5721C8.46675 10.8447 8.8239 10.1765 9.34835 9.65206C9.8728 9.12761 10.541 8.77046 11.2684 8.62577C11.9958 8.48107 12.7498 8.55533 13.4351 8.83916C14.1203 9.12299 14.706 9.60364 15.118 10.2203C15.5301 10.837 15.75 11.562 15.75 12.3037C15.75 13.2983 15.3549 14.2521 14.6517 14.9554C13.9484 15.6586 12.9946 16.0537 12 16.0537Z"
                                fill="#754FFE" />
                            <path
                                d="M23.1853 12C23.1525 11.9259 22.3584 10.1643 20.5931 8.39902C18.2409 6.04684 15.27 4.80371 12 4.80371C8.72999 4.80371 5.75905 6.04684 3.40687 8.39902C1.64155 10.1643 0.843741 11.9287 0.814679 12C0.772035 12.0959 0.75 12.1997 0.75 12.3046C0.75 12.4096 0.772035 12.5134 0.814679 12.6093C0.847491 12.6834 1.64155 14.444 3.40687 16.2093C5.75905 18.5606 8.72999 19.8037 12 19.8037C15.27 19.8037 18.2409 18.5606 20.5931 16.2093C22.3584 14.444 23.1525 12.6834 23.1853 12.6093C23.2279 12.5134 23.25 12.4096 23.25 12.3046C23.25 12.1997 23.2279 12.0959 23.1853 12ZM12 18.3037C9.11437 18.3037 6.59343 17.2546 4.50655 15.1865C3.65028 14.335 2.92179 13.364 2.34374 12.3037C2.92164 11.2433 3.65014 10.2723 4.50655 9.4209C6.59343 7.35277 9.11437 6.30371 12 6.30371C14.8856 6.30371 17.4066 7.35277 19.4934 9.4209C20.3514 10.2721 21.0815 11.2431 21.6609 12.3037C20.985 13.5656 18.0403 18.3037 12 18.3037ZM12 7.80371C11.11 7.80371 10.2399 8.06763 9.49993 8.5621C8.7599 9.05656 8.18313 9.75937 7.84253 10.5816C7.50194 11.4039 7.41282 12.3087 7.58646 13.1816C7.76009 14.0545 8.18867 14.8564 8.81801 15.4857C9.44735 16.115 10.2492 16.5436 11.1221 16.7172C11.995 16.8909 12.8998 16.8018 13.7221 16.4612C14.5443 16.1206 15.2471 15.5438 15.7416 14.8038C16.2361 14.0638 16.5 13.1937 16.5 12.3037C16.4988 11.1106 16.0242 9.96675 15.1806 9.1231C14.337 8.27946 13.1931 7.80495 12 7.80371ZM12 15.3037C11.4066 15.3037 10.8266 15.1278 10.3333 14.7981C9.83993 14.4685 9.45542 13.9999 9.22835 13.4518C9.00129 12.9036 8.94188 12.3004 9.05764 11.7184C9.17339 11.1365 9.45911 10.6019 9.87867 10.1824C10.2982 9.76283 10.8328 9.47711 11.4147 9.36135C11.9967 9.2456 12.5999 9.30501 13.148 9.53207C13.6962 9.75913 14.1648 10.1437 14.4944 10.637C14.824 11.1303 15 11.7104 15 12.3037C15 13.0994 14.6839 13.8624 14.1213 14.425C13.5587 14.9876 12.7956 15.3037 12 15.3037Z"
                                fill="#754FFE" />
                        </svg>

                        <h3 class="mb-0">Our Vision</h3>
                    </div>

                    <p class="mb-0">
                        At
                        <span class="text-dark">[Your Company Name]</span>
                        , our vision is to create a world where every student has the opportunity to pursue their academic aspirations abroad, regardless of their background or circumstances.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    // Custom JavaScript for this view
    console.log('Dashboard page scripts loaded');
</script>
@endpush