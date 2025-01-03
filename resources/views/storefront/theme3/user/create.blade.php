@extends('storefront.layout.theme3')
@section('page-title')
    {{__('Register')}}
@endsection
@php
if (!empty(session()->get('lang'))) {
    $currantLang = session()->get('lang');
} else {
    $currantLang = $store->lang;
}
\App::setLocale($currantLang);
@endphp
@push('css-page')

@endpush
@section('content')
<div class="wrapper">
    <section class="login-section padding-bottom padding-top">
        <div class="bg-image bg-image-2">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1506.3 578.7">
                <path d="M 147.269 295.566 C 147.914 293.9 149.399 292.705 151.164 292.431 L 167.694 289.863 C 169.459 289.588 171.236 290.277 172.356 291.668 L 182.845 304.699 C 183.965 306.091 184.258 307.974 183.613 309.64 L 177.572 325.239 C 176.927 326.905 175.442 328.1 173.677 328.375 L 157.147 330.943 C 155.382 331.217 153.605 330.529 152.485 329.137 L 141.996 316.106 C 140.876 314.714 140.583 312.831 141.228 311.165 L 147.269 295.566 Z" fill="#510fa8"></path>
                <path d="M 92.927 474.881 C 93.309 473.896 94.187 473.19 95.23 473.028 L 105.002 471.51 C 106.045 471.347 107.096 471.754 107.758 472.577 L 113.959 480.28 C 114.621 481.103 114.794 482.216 114.413 483.201 L 110.841 492.423 C 110.46 493.408 109.582 494.114 108.539 494.277 L 98.767 495.795 C 97.723 495.957 96.673 495.55 96.011 494.727 L 89.81 487.024 C 89.148 486.201 88.975 485.088 89.356 484.103 L 92.927 474.881 Z" fill="#36b37e"></path>
                <path d="M 34.176 36.897 C 34.821 35.231 36.306 34.036 38.071 33.762 L 54.601 31.194 C 56.366 30.919 58.143 31.608 59.263 32.999 L 69.752 46.03 C 70.872 47.422 71.165 49.305 70.52 50.971 L 64.479 66.57 C 63.834 68.236 62.349 69.431 60.584 69.706 L 44.054 72.274 C 42.289 72.548 40.512 71.86 39.392 70.468 L 28.903 57.437 C 27.783 56.045 27.49 54.162 28.135 52.496 L 34.176 36.897 Z" fill="#00b8d9"></path>
                <path d="M 975.636 9.762 C 976.101 8.561 977.171 7.7 978.443 7.502 L 990.354 5.652 C 991.626 5.454 992.907 5.95 993.714 6.953 L 1001.272 16.343 C 1002.079 17.346 1002.29 18.703 1001.826 19.903 L 997.472 31.144 C 997.008 32.344 995.938 33.205 994.666 33.403 L 982.754 35.254 C 981.483 35.451 980.202 34.956 979.395 33.953 L 971.837 24.563 C 971.03 23.559 970.818 22.203 971.283 21.002 L 975.636 9.762 Z" fill="#2684ff"></path>
                <path d="M 1417.759 409.863 C 1418.404 408.197 1419.889 407.002 1421.654 406.728 L 1438.184 404.16 C 1439.949 403.885 1441.726 404.574 1442.846 405.965 L 1453.335 418.996 C 1454.455 420.388 1454.748 422.271 1454.103 423.937 L 1448.062 439.536 C 1447.417 441.202 1445.932 442.397 1444.167 442.672 L 1427.637 445.24 C 1425.872 445.514 1424.095 444.826 1422.975 443.434 L 1412.486 430.403 C 1411.366 429.011 1411.073 427.128 1411.718 425.462 L 1417.759 409.863 Z" fill="#3c4858"></path>
                <path d="M 1313.903 202.809 C 1314.266 201.873 1315.1 201.201 1316.092 201.047 L 1325.381 199.604 C 1326.373 199.449 1327.372 199.837 1328.001 200.618 L 1333.895 207.941 C 1334.525 208.723 1334.689 209.782 1334.327 210.718 L 1330.932 219.484 C 1330.57 220.42 1329.735 221.092 1328.743 221.246 L 1319.454 222.689 C 1318.462 222.843 1317.464 222.457 1316.834 221.674 L 1310.94 214.351 C 1310.31 213.569 1310.146 212.511 1310.508 211.575 L 1313.903 202.809 Z" fill="#ffab00"></path>
                <path d="M 1084.395 506.137 C 1084.908 504.812 1086.09 503.861 1087.494 503.643 L 1100.645 501.6 C 1102.049 501.381 1103.463 501.929 1104.354 503.036 L 1112.699 513.403 C 1113.59 514.51 1113.823 516.009 1113.31 517.334 L 1108.504 529.744 C 1107.99 531.07 1106.809 532.02 1105.405 532.239 L 1092.254 534.282 C 1090.85 534.5 1089.436 533.953 1088.545 532.845 L 1080.2 522.478 C 1079.309 521.371 1079.076 519.873 1079.589 518.547 L 1084.395 506.137 Z" fill="#ff5630"></path>
            </svg>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-12 col-12">
                    <div class="login-form">
                        <h3>{{__('Customer Register')}}</h3>
                        {!! Form::open(array('route' => array('store.userstore', $slug)), ['method' => 'post']) !!}
                        <div class="form-group">
                            <label for="exampleInputEmail1">{{__('Full Name')}}</label><x-required></x-required>
                            <input name="name" class="form-control" type="text" placeholder="{{__('Full Name *')}}" required="required">
                        </div>
                        @error('name')
                            <span class="error invalid-email text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="form-group">
                            <label for="exampleInputEmail1">{{__('Email')}}</label><x-required></x-required>
                            <input name="email" class="form-control" type="email" placeholder="{{__('Email *')}}" required="required">
                        </div>
                        @error('email')
                            <span class="error invalid-email text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="form-group">
                            {{-- <label for="exampleInputEmail1">{{__('Number')}}</label>
                            <input name="phone_number" class="form-control" type="text" placeholder="{{__('Number *')}}" required="required"> --}}
                            <x-mobile divClass="form-group" class="form-control" name="phone_number" label="{{__('Number')}}" placeholder="{{__('Number *')}}" required="true"></x-mobile>
                        </div>
                        @error('number')
                            <span class="error invalid-email text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="form-group">
                            <label for="exampleInputEmail1">{{__('Password')}}</label><x-required></x-required>
                            <input name="password" class="form-control" type="password" placeholder="{{__('Password *')}}" required="required">
                        </div>
                        @error('password')
                            <span class="error invalid-email text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="form-group">
                            <label for="exampleInputEmail1">{{__('Confirm Password')}}</label><x-required></x-required>
                            <input name="password_confirmation" class="form-control" type="password" placeholder="{{__('Confirm Password *')}}" required="required">
                        </div>
                        @error('password_confirmation')
                            <span class="error invalid-email text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="last-btns">
                            <button type="submit" class="login-btn-2 btn btn-primary">{{__('Register')}}</button>
                            <p>{{ __('By using the system, you accept the')}} 
                                <a href="">  {{__('Privacy Policy')}}</a> {{ __('and') }} <a href=""> {{ __('System Regulations.') }} </a>
                            </p>
                        </div>
                        <p class="register-btn">{{__('Already registered ?')}}<a href="{{route('customer.loginform',$slug)}}">{{__('Login')}}</a></p>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@push('script-page')
@endpush
