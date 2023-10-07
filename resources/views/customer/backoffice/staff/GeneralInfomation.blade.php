@extends('layouts.customer.main')
 
@section('head')
@section('title', 'General Information')

    <link rel="stylesheet" href="{{ URL::asset('/css/general-info/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/general-info/responsive.css') }}">
@endsection

@section('content')

<div id="page-form" class="general_infomation">
<h1>
General Infomation
</h1>
        <div class="page-form__wrapper">

            <!-- TABS START -->
            <div class="page-form__tabs-wrapper">
                <div class="page-form__tabs">
                    <div class="page-form__tab active" data-unique-id="16884325735786">
                        <span>Head office</span>
                        <div class="page-form__cross-wrapper" data-unique-id="16884325735786" style="display: none;">
                            <div style="position: relative;">
                                <div class="page-form__cross-icon one"></div>
                                <div class="page-form__cross-icon two"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-form__tab-add">
                    <div class="page-form__add-wrapper tab">
                        <div class="page-form__add-icon one"></div>
                        <div class="page-form__add-icon two"></div>
                    </div>
                </div>
            </div>
            <!-- TABS END -->

            <!-- BUTTONS START -->
            <div class="page-form__buttons-wrapper">
                <button type="button" class="page-form__button">Cancel</button>
                <button type="button" class="page-form__button teal">Save</button>
            </div>
            <!-- BUTTONS START -->

            <!-- FORM START -->
            <div class="page-form__form-wrapper">
                <form action="" class="page-form__form form-popup" data-unique-id="16884325735786">
                    <div class="left">
                        <div class="page-form__form-title">
                            <span class="page-form__form-title-txt">
                                Brand Logo
                            </span>
                            <div class="page-form__form-title-line"></div>
                        </div>

                        <!-- Logo input field start -->
                        <div class="page-form__input-field">
                            <div class="page-form__logo-placeholder">
                                <img src="#" alt="" class="page-form__img-preview" style="display: none;">
                                <label for="42542767667" class="logo-inp-label">
                                    <div class="page-form__add-wrapper add-logo">
                                        <div class="page-form__add-icon one"></div>
                                        <div class="page-form__add-icon two"></div>
                                    </div>
                                </label>
                            </div>
                            <input id="42542767667" class="brandLogo" type="file" style="display: none;" name="logo">
                        </div>
                        <!-- Logo input field end -->


                        <!-- title start -->
                        <div class="page-form__form-title">
                            <span class="page-form__form-title-txt">
                                Branch Information
                            </span>
                            <div class="page-form__form-title-line"></div>
                        </div>
                        <!-- title start -->

                        <!-- Business type start -->
                        <div class="page-form__input-field required">
                            <div class="page-form__input-label">
                                Business Type
                            </div>
                            <select class="page-form__input" name="business_type">
                                <option value="retails">Retails</option>
                                <!-- other option here -->
                            </select>
                        </div>
                        <!-- Business type end -->


                        <!-- Company name start -->
                        <div class="page-form__input-field required">
                            <div class="page-form__input-label">
                                Company name
                            </div>
                            <input type="text" class="page-form__input" name="company_name">
                        </div>
                        <!-- Company name end -->

                        <!-- Branch location start -->
                        <div class="page-form__input-field required">
                            <div class="page-form__input-label">
                                Branch location
                            </div>
                            <input type="text" class="page-form__input" name="branch_location">
                        </div>
                        <!-- Branch location end -->


                        <!-- Branch code start -->
                        <div class="page-form__input-field required">
                            <div class="page-form__input-label">
                                Branch code
                            </div>
                            <input type="text" class="page-form__input" name="branch_code">
                        </div>
                        <!-- Branch code end -->

                        <!-- Tax ID start -->
                        <div class="page-form__input-field required">
                            <div class="page-form__input-label">
                                Tax ID
                            </div>
                            <input type="number" class="page-form__input"
                                onkeydown="javascript: return event.keyCode == 69 ? false : true" name="tax_id">
                        </div>
                        <!-- Tax ID end -->


                        <!-- Address start -->
                        <div class="page-form__input-field required" style="margin-top: 40px;">
                            <div class="page-form__input-label" style="margin-top: -40px;">
                                Address
                            </div>
                            <textarea class="page-form__input" style="resize: none;height: 75px;"
                                name="address"></textarea>
                        </div>
                        <!-- Address end -->

                        <!-- country start -->
                        <div class="page-form__input-field required">
                            <div class="page-form__input-label">
                                Country
                            </div>
                            <input type="text" class="page-form__input" name="country">
                        </div>
                        <!-- country end -->

                        <!-- Province start -->
                        <div class="page-form__input-field required">
                            <div class="page-form__input-label">
                                Province
                            </div>
                            <input type="text" class="page-form__input" name="province">
                        </div>
                        <!-- Province end -->

                        <!-- City start -->
                        <div class="page-form__input-field required">
                            <div class="page-form__input-label">
                                City
                            </div>
                            <input type="text" class="page-form__input" name="city">
                        </div>
                        <!-- city end -->

                        <!-- zip code start -->
                        <div class="page-form__input-field required">
                            <div class="page-form__input-label">
                                Zipcode
                            </div>
                            <input type="number" class="page-form__input"
                                onkeydown="javascript: return event.keyCode == 69 ? false : true" name="zip_code">
                        </div>
                        <!-- zip code end -->
                    </div>

                    <div class="right">
                        <!-- title start -->
                        <div class="page-form__form-title">
                            <span class="page-form__form-title-txt">
                                Contact Information
                            </span>
                            <div class="page-form__form-title-line"></div>
                        </div>
                        <!-- title end -->

                        <!-- email start start -->
                        <div class="page-form__input-field">
                            <div class="page-form__input-label">
                                Email
                            </div>
                            <input type="email" class="page-form__input" name="email">
                        </div>
                        <!-- email start end -->


                        <!-- phone number start -->
                        <div class="page-form__input-field">
                            <div class="page-form__input-label">
                                Phone Number
                            </div>
                            <div class="page-form__phone-input-wrapper">
                                <select class="page-form__input country-code" style="width: 90px;margin-right: 10px;"
                                    name="country_code">
                                </select>
                                <input type="number" class="page-form__input" style="flex: 1;"
                                    onkeydown="javascript: return event.keyCode == 69 ? false : true"
                                    name="phone_number">
                            </div>
                        </div>
                        <!-- phone number end -->

                        <!-- fax number start -->
                        <div class="page-form__input-field">
                            <div class="page-form__input-label">
                                Fax Number
                            </div>
                            <input type="number" class="page-form__input"
                                onkeydown="javascript: return event.keyCode == 69 ? false : true" name="fax_number">
                        </div>
                        <!-- fax number end -->


                        <!-- title start -->
                        <div class="page-form__form-title" style="margin-top: 25px;">
                            <span class="page-form__form-title-txt">
                                Footer information
                            </span>
                            <div class="page-form__form-title-line"></div>
                        </div>
                        <!-- title end -->

                        <!-- general footer start -->
                        <div class="page-form__input-field">
                            <div class="page-form__input-label" style="margin-top: -20px;">
                                General Footer
                            </div>
                            <textarea name="general_footer" style="resize: none;height: 50px;"
                                class="page-form__input"></textarea>
                        </div>
                        <!-- general footer end -->

                        <!-- certificate footer start -->
                        <div class="page-form__input-field" style="margin-top: 25px;">
                            <div class="page-form__input-label" style="margin-top: -20px;">
                                Certificate Footer
                            </div>
                            <textarea name="certificate_footer" style="resize: none;height: 50px;"
                                class="page-form__input"></textarea>
                        </div>
                        <!-- certificate footer start -->


                    </div>
                </form>
            </div>
            <!-- FORM END -->

            <div></div>
            <div></div>
        </div>
    </div>
    
@endsection
@section('footer_script')

@component('components.modal.ConfirmModal',[
        "data"=> [

            "messageConfirm"=>[
        "heading"=>"Create",
        "message"=>"Do you want to Cutting Master ?",
        "image"=> URL::asset('/images/icons/question.png')
        ],
            "messageDone"=>[
                "heading"=>"Successful",
                "message"=>"Save Cutting Master Successful",
                "image"=>URL::asset('/images/icons/checked.png') 
                ],
            "validateUrl"=>"api/master-stroage-validate",
            "requestUrl"=>"api/master-stroage"
        
            ]



    ]
    

        )

 
@endcomponent
<script src="{{ URL::asset('/js/general_info.js') }}"></script>
@endsection

