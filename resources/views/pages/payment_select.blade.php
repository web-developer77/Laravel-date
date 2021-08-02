@extends('layouts.payment')

@section('content')

<!-- display success message -->
@if (Session::has('message'))
<div class="alert alert-success">{{ Session::get('message') }}</div>
@endif

<body>
    <div class="container3">
        <div class="wrap">
            <div class="l-page-layout l-page-layout--checkout">
                <div class="l-center l-center--checkout">


                    <div class="l-cols l-cols--checkout">


                        <div class="l-col l-col--main">
                            <div class="box checkout">
                                <div class="box__head box__head--medium">
                                    <div class="checkout__title">Secure checkout</div>
                                </div>
                                <div class="box__content">
                                    <Form class="form" action="/payment_select1" method="POST">
                                        {{ csrf_field() }}
                                        <div class="box__group js-checkout-tabs-wrap">
                                            <div class="h2">Payment method</div>
                                            <div class="input-label input-label--offset">
                                                <i class="fa fa-lock" aria-hidden="true"></i>
                                                <span data-nsfw-filter-status="swf">It’s safe to pay on Preply. All transactions are protected by SSL encryption.</span>
                                            </div>
                                            <div class="row row--middle">
                                                <div class="col col--xs-12">
                                                    <label class="radio radio--image">
                                                        <div class="form-check check_pay">
                                                            <input type="radio" id="select_pay" name="select_pay" value="0">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                        
                                                            </label>
                                                        </div>
                                                        <span class="radio__label" data-nsfw-filter-status="swf">
                                                            <img src="https://static.preply.com/images/new/visa.svg" width="40" height="11" alt="Visa" title="Visa">
                                                            <img src="https://static.preply.com/images/new/mastercard.svg" width="26" height="22" alt="Mastercard" title="Mastercard">
                                                            <img src="https://static.preply.com/images/new/amex.png" width="30" height="20" alt="American express" title="American express">
                                                            <img src="https://static.preply.com/images/new/discover.svg" width="30" height="18" alt="Discover" title="Discover">
                                                        </span>
                                                        <span class="radio__frame" data-nsfw-filter-status="swf"></span>
                                                        <span class="radio__icon" data-nsfw-filter-status="swf">
                                                            <span class="hint-wrap" data-nsfw-filter-status="swf">
                                                                <i class="fa fa-lock"></i>
                                                                <span class="hint hint--wide" data-nsfw-filter-status="swf">
                                                                    Payments are encrypted and securely processed by our provider – Braintree, a PayPal Service. We don’t store any sensitive data on our servers.
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </label>

                                                    <label class="radio radio--image radio--paypal">
                                                        <div class="form-check check_pay">
                                                            <input type="radio" id="select_pay" name="select_pay" value="1" checked>
                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                
                                                            </label>
                                                        </div>
                                                        <span class="radio__label" data-nsfw-filter-status="swf">

                                                            <img src="https://static.preply.com/images/new/paypal-2.71132a8d1312.svg" width="78" height="19" alt="paypal" title="Paypal">

                                                        </span>
                                                        <span class="radio__frame" data-nsfw-filter-status="swf"></span>
                                                        <span class="radio__icon" data-nsfw-filter-status="swf">
                                                            <span class="hint-wrap" data-nsfw-filter-status="swf">
                                                                <i class="fa fa-lock"></i>
                                                                <span class="hint" data-nsfw-filter-status="swf">
                                                                    Secure payments by PayPal
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="js-bill-buttons form-group">

                                                <div class="tab-content tab-content--no-animation js-switcher-content active" data-name="braintree">

                                                    <button type="submit" class="btn btn--success btn--l js-submit-braintree js-ga-send" data-pay="Pay" data-ga-action="Checkout" data-ga-label="submitApplePayButtonCheckout" data-qa-id="submit-braintree-checkout-btn">
                                                        <span data-nsfw-filter-status="swf">Continue</span>
                                                    </button>
                                                </div>
                                            </div>

                                        </div>

                                    </Form>
                                </div>
                                <div id="js-checkout-bottom-block-mount" class="checkout__bottom-block">
                                    <div class="ProtectMessageWrap-k4f2ts-2 iqwxKx">
                                        <div class="Message-k4f2ts-3 gHkmhF">
                                            <div class="ImgWrap-k4f2ts-4 fZPZZD"></div>
                                            <div><i class="fa fa-balance-scale" aria-hidden="true"></i>
                                                <span class="Title-k4f2ts-6 gmZyZZ"><span data-nsfw-filter-status="swf">Learn with 100% satisfaction guarantee</span></span>
                                                <span class="Description-k4f2ts-7 cPqsAT"><span data-nsfw-filter-status="swf">If your lesson does not take place, or you are not satisfied with the tutor, we will provide you with a free replacement to another tutor of your choice or offer you a full refund.</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="l-col l-col--sidebar">
                            <div class="box">

                                <div class="box__content">

                                    <div id="js-bill" class="react-bill react-bill--trial">
                                        <div class="sc-cSHVUG jtmyZG">
                                            <div class="sc-VigVT FMGNq">
                                                <div class="sc-fjdhpX cNjroL">
                                                    <div class="MuiAvatar-root Avatar_avatar__20Ocl Avatar_m__1jv1v"><img src="https://avatars.preply.com/i/logos/i/logos/avatar_0jbfkk039wzg.jpg" class="MuiAvatar-img"></div>
                                                    <div class="sc-jzJRlG eRLuDC">
                                                        <div class="sc-jTzLTM cNPMrv"><svg height="11" viewBox="0 0 24 23" width="11" xmlns="http://www.w3.org/2000/svg" fill="#fdc425">
                                                                <path d="M23.97 8.721a.597.597 0 0 0-.507-.413l-7.744-.822-3.172-7.16c-.192-.435-.903-.435-1.095 0l-3.17 7.16-7.745.822a.601.601 0 0 0-.508.413.606.606 0 0 0 .17.635l5.785 5.248-1.616 7.667a.605.605 0 0 0 .586.729.595.595 0 0 0 .3-.081L12 19.003l6.747 3.916c.204.119.46.105.652-.035a.606.606 0 0 0 .234-.613l-1.616-7.668 5.786-5.248a.606.606 0 0 0 .168-.634z"></path>
                                                            </svg></div>5
                                                    </div>
                                                </div>
                                                <div class="sc-gqjmRU MnifU">
                                                    <div class="sc-iwsKbI exZsDe"><span class="sc-EHOje llWuUc" data-nsfw-filter-status="swf">Anastasia A.</span><img alt="United States of America" src="https://static.preply.com/images/new/flags-svg/4x3/us.svg" width="16" height="12" class="sc-dnqmqq hHaWTk"><svg width="13" height="15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.521 0a9.062 9.062 0 002.041 1.432A9.292 9.292 0 0013 2.414c0 1.376-.042 2.503-.089 3.303a12.989 12.989 0 01-.145 1.544 11.096 11.096 0 01-.77 2.54 10.186 10.186 0 01-3.027 3.744A11.16 11.16 0 016.507 15a11.157 11.157 0 01-2.457-1.432 10.187 10.187 0 01-3.027-3.743 11.097 11.097 0 01-.79-2.55A13.004 13.004 0 01.09 5.731C.042 4.931 0 3.804 0 2.428a9.293 9.293 0 004.466-.996A9.062 9.062 0 006.52 0zm-.294 10.42L7.352 9.3l3.186-3.19L9.408 5 6.227 8.189 4.26 6.199 3.144 7.318 5.11 9.3l1.117 1.118z" fill="#3BB3BD"></path>
                                                        </svg></div>
                                                    <div class="sc-htoDjs gHLRAX">
                                                        <div class="sc-gzVnrw kaIsEa"><i class="sc-bZQynM fEylkr"></i></div>English language
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sc-chPdSV gVINSj">
                                                <div class="sc-kAzzGY eLeeeF">
                                                    <div class="sc-kgoBCf fMigAD">Date and time</div>
                                                </div>
                                                <div class="sc-kAzzGY eLeeeF">
                                                    <div class="sc-dxgOiQ eBKHHY">Saturday, June 12, 1:30 PM</div>
                                                </div>
                                                <div class="sc-kAzzGY eLeeeF">
                                                    <div class="sc-kgoBCf fMigAD">GMT -3:00</div>
                                                </div>
                                            </div>
                                            <div class="sc-chPdSV gVINSj">
                                                <div class="sc-kAzzGY eLeeeF">
                                                    <div class="sc-kgoBCf fMigAD">Service details</div>
                                                    <div class="sc-kgoBCf fMigAD">Price per hour</div>
                                                </div>
                                                <div class="sc-kAzzGY eLeeeF">
                                                    <div class="sc-jKJlTe eHJfsY">1 hour lesson<svg width="14" height="14" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="#aeb5bc" class="sc-ckVGcZ fqMIIN">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2 10c0-4.415 3.585-8 8-8s8 3.585 8 8-3.585 8-8 8-8-3.585-8-8zm8-10C4.48 0 0 4.48 0 10s4.48 10 10 10 10-4.48 10-10S15.52 0 10 0zm.578 11.148c-.11.49-.396.776-.916.776-.622 0-.989-.425-.989-1.026v-.102c0-.864.447-1.436 1.311-1.941.945-.564 1.23-.93 1.23-1.604 0-.718-.556-1.216-1.361-1.216-.718 0-1.202.352-1.436 1.004-.183.468-.513.673-.96.673-.578 0-.937-.358-.937-.915 0-.315.073-.593.22-.872.468-.966 1.64-1.59 3.215-1.59 2.08 0 3.48 1.144 3.48 2.85 0 1.106-.536 1.86-1.568 2.468-.974.564-1.194.88-1.29 1.495zm.3 2.885c0 .645-.535 1.15-1.201 1.15-.66 0-1.194-.505-1.194-1.15 0-.644.535-1.15 1.194-1.15.666 0 1.2.506 1.2 1.15z"></path>
                                                        </svg></div>
                                                    <div class="sc-jKJlTe eKUzsH">€20.50</div>
                                                </div>
                                                <div class="sc-kAzzGY eLeeeF">
                                                    <div class="sc-jKJlTe eHJfsY">Transaction fee<svg width="14" height="14" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="#aeb5bc" class="sc-ckVGcZ fqMIIN">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2 10c0-4.415 3.585-8 8-8s8 3.585 8 8-3.585 8-8 8-8-3.585-8-8zm8-10C4.48 0 0 4.48 0 10s4.48 10 10 10 10-4.48 10-10S15.52 0 10 0zm.578 11.148c-.11.49-.396.776-.916.776-.622 0-.989-.425-.989-1.026v-.102c0-.864.447-1.436 1.311-1.941.945-.564 1.23-.93 1.23-1.604 0-.718-.556-1.216-1.361-1.216-.718 0-1.202.352-1.436 1.004-.183.468-.513.673-.96.673-.578 0-.937-.358-.937-.915 0-.315.073-.593.22-.872.468-.966 1.64-1.59 3.215-1.59 2.08 0 3.48 1.144 3.48 2.85 0 1.106-.536 1.86-1.568 2.468-.974.564-1.194.88-1.29 1.495zm.3 2.885c0 .645-.535 1.15-1.201 1.15-.66 0-1.194-.505-1.194-1.15 0-.644.535-1.15 1.194-1.15.666 0 1.2.506 1.2 1.15z"></path>
                                                        </svg></div>
                                                    <div class="sc-jKJlTe eKUzsH">€0.25</div>
                                                </div>
                                                <div class="sc-kAzzGY eLeeeF">
                                                    <div class="sc-jKJlTe eHJfsY">Lesson cancellation<svg width="14" height="14" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="#aeb5bc" class="sc-ckVGcZ fqMIIN">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2 10c0-4.415 3.585-8 8-8s8 3.585 8 8-3.585 8-8 8-8-3.585-8-8zm8-10C4.48 0 0 4.48 0 10s4.48 10 10 10 10-4.48 10-10S15.52 0 10 0zm.578 11.148c-.11.49-.396.776-.916.776-.622 0-.989-.425-.989-1.026v-.102c0-.864.447-1.436 1.311-1.941.945-.564 1.23-.93 1.23-1.604 0-.718-.556-1.216-1.361-1.216-.718 0-1.202.352-1.436 1.004-.183.468-.513.673-.96.673-.578 0-.937-.358-.937-.915 0-.315.073-.593.22-.872.468-.966 1.64-1.59 3.215-1.59 2.08 0 3.48 1.144 3.48 2.85 0 1.106-.536 1.86-1.568 2.468-.974.564-1.194.88-1.29 1.495zm.3 2.885c0 .645-.535 1.15-1.201 1.15-.66 0-1.194-.505-1.194-1.15 0-.644.535-1.15 1.194-1.15.666 0 1.2.506 1.2 1.15z"></path>
                                                        </svg></div>
                                                    <div class="sc-jKJlTe bvaKGx">Free</div>
                                                </div>
                                            </div>
                                            <div class="sc-hMqMXs bYrtVz">
                                                <div class="sc-kAzzGY eLeeeF">Total<div>€20.75</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>




                            <div id="js-top-review-mount">
                                <div class="RatingWrap-vsprn6-0 jKAflC">
                                    <div data-qa-id="review-multiple-wrap" class="RatingMultiHeader-vsprn6-2 iwMTwe">
                                        <div class="LeftBar-vsprn6-3 kQGdny">
                                            <div class="UserRating-vsprn6-14 eTxFEu"><svg height="23" viewBox="0 0 24 23" width="24" xmlns="http://www.w3.org/2000/svg" class="StarIcon-vsprn6-15 iFjMYF">
                                                    <path d="M23.97 8.721a.597.597 0 0 0-.507-.413l-7.744-.822-3.172-7.16c-.192-.435-.903-.435-1.095 0l-3.17 7.16-7.745.822a.601.601 0 0 0-.508.413.606.606 0 0 0 .17.635l5.785 5.248-1.616 7.667a.605.605 0 0 0 .586.729.595.595 0 0 0 .3-.081L12 19.003l6.747 3.916c.204.119.46.105.652-.035a.606.606 0 0 0 .234-.613l-1.616-7.668 5.786-5.248a.606.606 0 0 0 .168-.634z"></path>
                                                </svg>5.0</div>
                                            <div class="ReviewsCount-vsprn6-7 iSgsdz"><span data-nsfw-filter-status="swf">9 reviews</span></div>
                                        </div>
                                        <div class="ButtonWrap-vsprn6-4 gKDMgj"><button data-qa-id="review-multiple-btn-prev" class="Button-vsprn6-5 kINvaZ"><svg height="12" viewBox="0 0 8 12" width="8" xmlns="http://www.w3.org/2000/svg" class="ArrowLeft-vsprn6-17 dEMrzb">
                                                    <path d="M3.268 5.854l4.293 4.292-1.415 1.415L.44 5.854 6.146.146l1.415 1.415z"></path>
                                                </svg></button><button data-qa-id="review-multiple-btn-next" class="Button-vsprn6-5 kINvaZ"><svg height="12" viewBox="0 0 8 12" width="8" xmlns="http://www.w3.org/2000/svg" class="ArrowRight-vsprn6-18 fmdkGu">
                                                    <path d="M4.732 5.854L.44 1.56 1.854.146 7.56 5.854 1.854 11.56.439 10.146z"></path>
                                                </svg></button></div>
                                    </div>
                                    <div class="SubHeader-vsprn6-6 kXfGCJ">
                                        <div class="UserInfo-vsprn6-9 eJtnpL">
                                            <div class="MuiAvatar-root Avatar-vsprn6-13 PYdeu"><img src="https://avatars.preply.com/i/logos/i/logos/256972.744aa51b8a.jpg" class="MuiAvatar-img"></div>
                                            <div class="UserName-vsprn6-10 jWiPhe">Anton</div>
                                        </div>
                                    </div>
                                    <div data-qa-id="review-multiple-description" class="DescriptionWrap-vsprn6-11 hDDkBm">The class is intense, everything is structured and based on the current level. Not just an conversationalist like most of mentors here, but a teacher and tutor with hight quality education.
                                        Highly recommend!</div><button class="ExpandButtonS-vsprn6-12 hXoAbN"><span data-nsfw-filter-status="swf">Read more</span></button>
                                </div>
                            </div>

                        </div>



                    </div>


                </div>
                <div class="loader js-loader is-hidden"></div>



            </div>


        </div>
    </div>
</body>

</html>

@push('scripts')



<script type="text/javascript">
    // for bootstrap file input
    $(function() {
        $("input.fileinput").fileinput({
            allowedFileExtensions: ["jpg", "jpeg"], // set allowed file format
            maxFileSize: 3000, //set file size limit, 1000 = 1MB
        });
    });
</script>
@endpush

@stop