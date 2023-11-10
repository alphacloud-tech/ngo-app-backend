@extends('frontend.layouts.siteLayout')
@section('pageTitle')
    Paulsabinna Foundation - Donation
@endsection
@section('setHomeActive')
    active
@endsection


@section('content')
    <section class="breadcrumbs-page-wrap">
        <div class="bg-fixed pos-rel breadcrumbs-page">
            <div class="container">
                <h1>Donation</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Donation</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>


    <section class="wide-tb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <h1 class="heading-main">
                        <small>Donation</small>
                        Don't Let Poverty Destroy Someone's Dreams
                    </h1>
                    <p>The secret to happiness lies in helping others. Never underestimate the difference YOU
                        can make in the lives of the poor, the abused and the helpless. Spread sunshine in their
                        lives no matter what the weather may be.</p>

                    <div class="donation-wrap">
                        <h3 class="h3-sm fw-5 txt-blue mb-3">Select Your Donation Amount</h3>
                        <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal"
                            role="form">

                            <div class="row" style="margin-bottom:40px;">
                                <div class="col-md-8 col-md-offset-2">
                                    {{-- <p>
                                            <div>
                                                Lagos Eyo Print Tee Shirt
                                                ₦ 2,950
                                            </div>
                                        </p> --}}
                                    {{-- <input type="hidden" name="email" value="otemuyiwa@gmail.com"> required --}}
                                    {{-- <input type="hidden" name="orderID" value="345"> --}}
                                    {{-- <input type="hidden" name="amount" value="5000"> --}}
                                    {{-- <input type="hidden" name="quantity" value="3"> --}}
                                    <input type="hidden" name="currency" value="NGN">
                                    <input type="hidden" name="metadata"
                                        value="{{ json_encode($array = ['key_name' => 'value']) }}"> {{-- For other necessary things you want to add to your payload. it is optional though --}}
                                    <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
                                    {{-- required --}}

                                    {{-- <input type="hidden" name="split_code" value="SPL_EgunGUnBeCareful"> to support transaction split. more details https://paystack.com/docs/payments/multi-split-payments/#using-transaction-splits-with-payments --}}
                                    {{-- <input type="hidden" name="split" value="{{ json_encode($split) }}"> to support dynamic transaction split. More details https://paystack.com/docs/payments/multi-split-payments/#dynamic-splits --}}
                                    {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

                                    <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}

                                    {{-- <p>
                                            <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                                                <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                                            </button>
                                        </p> --}}
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input form-light" type="radio" name="Amount"
                                                id="amount1" value="5000">
                                            <label class="form-check-label label-dark" for="amount1">5,000</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input form-light" type="radio" name="Amount"
                                                id="amount2" value="10000">
                                            <label class="form-check-label label-dark" for="amount2">10,000</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input form-light" type="radio" name="Amount"
                                                id="amount3" value="20000">
                                            <label class="form-check-label label-dark" for="amount3">20,000</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input form-light" type="radio" name="Amount"
                                                id="amount4" value="30000">
                                            <label class="form-check-label label-dark" for="amount4">30,000</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input form-light" type="radio" name="Amount"
                                                id="amount5" value="40000">
                                            <label class="form-check-label label-dark" for="amount5">40,000</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input form-light" type="radio" name="Amount"
                                                id="amount6" value="50000">
                                            <label class="form-check-label label-dark" for="amount6">50,000</label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="mb-3"><strong>Donate Using</strong></div>
                                        <a href="#"><img src="{{ asset('frontend/assets/images/dd.png') }}"
                                                alt></a>
                                    </div>
                                </div> --}}
                                <div class="mt-12">
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="custom"
                                            placeholder="Custom Amount" name="custom" step="0.01">
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <select class="theme-combo donation-select" style="" name="cause"
                                            id="cause">
                                            <option>Select Cause</option>
                                            @foreach ($causes as $item)
                                                <option value="{{ $item->id }}">{{ $item->title }} -
                                                    {{ $item->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name"
                                            placeholder="First Name" name="fname">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="last_name"
                                            placeholder="Last Name" name="lname">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email"
                                            placeholder="Your Email" name="email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="phone"
                                            placeholder="Phone Number" name="phone">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <select class="theme-combo donation-select" style="height: 400px" name="country"
                                            id="countrySelect">
                                            <option>Select Country</option>
                                            <option value="Afganistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bonaire">Bonaire</option>
                                            <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Ter">British Indian Ocean Ter
                                            </option>
                                            <option value="Brunei">Brunei</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Canary Islands">Canary Islands</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic
                                            </option>
                                            <option value="Chad">Chad</option>
                                            <option value="Channel Islands">Channel Islands</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos Island">Cocos Island</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote DIvoire">Cote DIvoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Curaco">Curacao</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="East Timor">East Timor</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands">Falkland Islands</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Ter">French Southern Ter</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Great Britain">Great Britain</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Hawaii">Hawaii</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="India">India</option>
                                            <option value="Iran">Iran</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Isle of Man">Isle of Man</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea North">Korea North</option>
                                            <option value="Korea Sout">Korea South</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Laos">Laos</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libya">Libya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macau">Macau</option>
                                            <option value="Macedonia">Macedonia</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Midway Islands">Midway Islands</option>
                                            <option value="Moldova">Moldova</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Nambia">Nambia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherland Antilles">Netherland Antilles</option>
                                            <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                            <option value="Nevis">Nevis</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau Island">Palau Island</option>
                                            <option value="Palestine">Palestine</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Phillipines">Philippines</option>
                                            <option value="Pitcairn Island">Pitcairn Island</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Republic of Montenegro">Republic of Montenegro</option>
                                            <option value="Republic of Serbia">Republic of Serbia</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russia">Russia</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="St Barthelemy">St Barthelemy</option>
                                            <option value="St Eustatius">St Eustatius</option>
                                            <option value="St Helena">St Helena</option>
                                            <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                            <option value="St Lucia">St Lucia</option>
                                            <option value="St Maarten">St Maarten</option>
                                            <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                            <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                            <option value="Saipan">Saipan</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="Samoa American">Samoa American</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syria">Syria</option>
                                            <option value="Tahiti">Tahiti</option>
                                            <option value="Taiwan">Taiwan</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania">Tanzania</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Erimates">United Arab Emirates</option>
                                            <option value="United States of America">United States of America
                                            </option>
                                            <option value="Uraguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Vatican City State">Vatican City State</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Vietnam">Vietnam</option>
                                            <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                            <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                            <option value="Wake Island">Wake Island</option>
                                            <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zaire">Zaire</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-default"><i data-feather="heart"></i> Donate Now</button>
                            </div>

                        </form>
                    </div>

                    {{-- <div class="donation-wrap">

                        <div class="row mt-5">
                            <div class="col-sm-6 col-md-6 col-lg-12" style="padding-bottom: 10px">

                                <div class="card" style="border: 1px solid #D59B2D">

                                    <div class="card-header"
                                        style="background-color: #D59B2D; color: #fff; font-weight: 900">
                                        BANK PAYMENT
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">ACCOUNT NAME: PAULSABINNA FOUNDATION FOR THE NEEDY
                                        </li>
                                        <li class="list-group-item">ACCOUNT NUMBER: 1026603899</li>
                                        <li class="list-group-item">CURRENCY: NGN</li>
                                        <li class="list-group-item">BANK NAME: UNITED BANK FOR AFRICA.</li>
                                        <li class="list-group-item"> BANK ADDRESS: 74 IKOTUN IDIMU ROAD IKOTUN LAGOS
                                            NIGERIA.</li>
                                    </ul>
                                </div>

                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-12" style="padding-bottom: 10px">

                                <div class="card" style="border: 1px solid #D59B2D">
                                    <div class="card-header"
                                        style="background-color: #D59B2D; color: #fff; font-weight: 900">
                                        BANK PAYMENT
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">ACCOUNT NAME: PAULSABINNA FOUNDATION FOR THE NEEDY</li>
                                        <li class="list-group-item">ACCOUNT NUMBER: 3004226269</li>
                                        <li class="list-group-item">CURRENCY: USD</li>
                                        <li class="list-group-item">SORT CODE: 033153322 </li>
                                        <li class="list-group-item">SWIFT CODE: UNAFNGLA</li>
                                        <li class="list-group-item">BANK NAME: UNITED BANK FOR AFRICA.</li>
                                        <li class="list-group-item"> BANK ADDRESS: 74 IKOTUN IDIMU ROAD IKOTUN LAGOS
                                            NIGERIA.</li>
                                    </ul>
                                </div>

                            </div>

                            <div class="w-100 d-none d-sm-none d-md-block d-lg-none spacer-30"></div>

                            <div class="col-sm-6 col-md-6 col-lg-12" style="padding-bottom: 10px;">

                                <div class="card" style="border: 1px solid #D59B2D">
                                    <div class="card-header"
                                        style="background-color: #D59B2D; color: #fff; font-weight: 900">
                                        BANK PAYMENT
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">ACCOUNT NAME: PAULSABINNA FOUNDATION FOR THE NEEDY</li>
                                        <li class="list-group-item">ACCOUNT NUMBER: 3004226276</li>
                                        <li class="list-group-item">CURRENCY: EUR</li>
                                        <li class="list-group-item">SORT CODE: 033153322 </li>
                                        <li class="list-group-item">SWIFT CODE: UNAFNGLA</li>
                                        <li class="list-group-item">BANK NAME: UNITED BANK FOR AFRICA.</li>
                                        <li class="list-group-item"> BANK ADDRESS: 74 IKOTUN IDIMU ROAD IKOTUN LAGOS
                                            NIGERIA.</li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                    </div> --}}
                </div>

                <div class="col-lg-6 col-md-12">

                    <div class="donation-wrap">

                        <div class="row mt-5">
                            <div class="col-sm-6 col-md-6 col-lg-12" style="padding-bottom: 10px">

                                <div class="card" style="border: 1px solid #D59B2D">

                                    <div class="card-header"
                                        style="background-color: #D59B2D; color: #fff; font-weight: 900">
                                        BANK PAYMENT
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">ACCOUNT NAME: PAULSABINNA FOUNDATION FOR THE NEEDY
                                        </li>
                                        <li class="list-group-item">ACCOUNT NUMBER: 1026603899</li>
                                        <li class="list-group-item">CURRENCY: NGN</li>
                                        <li class="list-group-item">BANK NAME: UNITED BANK FOR AFRICA.</li>
                                        <li class="list-group-item"> BANK ADDRESS: 74 IKOTUN IDIMU ROAD IKOTUN LAGOS
                                            NIGERIA.</li>
                                    </ul>
                                </div>

                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-12" style="padding-bottom: 10px">

                                <div class="card" style="border: 1px solid #D59B2D">
                                    <div class="card-header"
                                        style="background-color: #D59B2D; color: #fff; font-weight: 900">
                                        BANK PAYMENT
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">ACCOUNT NAME: PAULSABINNA FOUNDATION FOR THE NEEDY</li>
                                        <li class="list-group-item">ACCOUNT NUMBER: 3004226269</li>
                                        <li class="list-group-item">CURRENCY: USD</li>
                                        <li class="list-group-item">SORT CODE: 033153322 </li>
                                        <li class="list-group-item">SWIFT CODE: UNAFNGLA</li>
                                        <li class="list-group-item">BANK NAME: UNITED BANK FOR AFRICA.</li>
                                        <li class="list-group-item"> BANK ADDRESS: 74 IKOTUN IDIMU ROAD IKOTUN LAGOS
                                            NIGERIA.</li>
                                    </ul>
                                </div>

                            </div>

                            <div class="w-100 d-none d-sm-none d-md-block d-lg-none spacer-30"></div>

                            <div class="col-sm-6 col-md-6 col-lg-12" style="padding-bottom: 10px;">

                                <div class="card" style="border: 1px solid #D59B2D">
                                    <div class="card-header"
                                        style="background-color: #D59B2D; color: #fff; font-weight: 900">
                                        BANK PAYMENT
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">ACCOUNT NAME: PAULSABINNA FOUNDATION FOR THE NEEDY</li>
                                        <li class="list-group-item">ACCOUNT NUMBER: 3004226276</li>
                                        <li class="list-group-item">CURRENCY: EUR</li>
                                        <li class="list-group-item">SORT CODE: 033153322 </li>
                                        <li class="list-group-item">SWIFT CODE: UNAFNGLA</li>
                                        <li class="list-group-item">BANK NAME: UNITED BANK FOR AFRICA.</li>
                                        <li class="list-group-item"> BANK ADDRESS: 74 IKOTUN IDIMU ROAD IKOTUN LAGOS
                                            NIGERIA.</li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="wide-tb-150 bg-scroll bg-img-6 pos-rel callout-style-1">
        <div class="bg-overlay blue opacity-80"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h1 class="heading-main light-mode">
                        <small>Help Other People</small>
                        We Dream to Create A Bright Future Of The Underprivileged Children
                    </h1>
                </div>
                <div class="col-sm-12 text-md-end">
                    <a href="donation-page.html" class="btn btn-default">Donate Now</a>
                </div>
            </div>
        </div>
    </section>


    @include('frontend.pages.common.partner')
@endsection


@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet"> --}}
@endsection


@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var form = document.getElementById('faq_form');

            form.addEventListener('submit', function(event) {
                event.preventDefault();

                // Validate form fields
                var name = document.getElementById('name').value;
                var email = document.getElementById('email').value;
                var message = document.getElementById('message').value;

                if (!name || !email || !message) {
                    // Show a toast indicating that some fields are empty
                    toastr.error('Please fill in all required fields');
                    return; // Exit the function, preventing the form submission
                }

                var formData = new FormData(form);

                axios.post('{{ url('/faq') }}', formData, {
                        headers: {
                            'Content-Type': 'multipart/form-data', // Important for FormData
                        }
                    })
                    .then(function(response) {
                        // Handle success, e.g., show a success message or redirect
                        if (response.data.success) {
                            // form.reset();
                            document.getElementById('name').value = '';
                            document.getElementById('email').value = '';
                            document.getElementById('message').value = '';

                            toastr.success(response.data.message);
                        }
                    })
                    .catch(function(error) {
                        // // Handle errors, e.g., show an error message
                        // alert('Image upload failed: ' + error.response.data.error);
                        console.log('====================================');
                        console.log("faile request", error);
                        console.log('====================================');
                    });
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#countrySelect').select2({
                placeholder: 'Search for a country', // Replace with your desired placeholder text
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            // Function to handle changes in the radio buttons
            $('input[type=radio][name=Amount]').change(function() {
                var selectedAmount = $(this).val() + ".00";
                // $('#amountDisplay').text(selectedAmount);
                // $('#custom').val(""); // Clear the custom amount input
                $('#custom').val(selectedAmount);
            });

            // Function to handle changes in the custom amount input
            $('#custom').on('input', function() {
                var customAmount = $(this).val();
                $('#amountDisplay').text(customAmount);
            });
        });
    </script>
@endsection
