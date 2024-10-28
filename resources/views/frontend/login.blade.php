@extends('templates.master')


@section('body')

    <body class="sub_page">
        <div class="hero_area">
            <!-- header section strats -->
            <div class="hero_bg_box">
                <div class="img-box">
                    <img src="images/my image.jpg" alt="">
                </div>
            </div>

            <!-- end header section -->
        </div>

        <!-- contact section -->

        <section class="contact_section layout_padding">
            <div class="contact_bg_box">
                <div class="img-box">
                    <img src="images/contact us.jpg" alt="">
                </div>
            </div>
            <div class="container">
                <div class="heading_container heading_center">
                    <h2>
                        Login
                    </h2>
                </div>
                <div class="">
                    <div class="row">
                        <div class="col-md-7 mx-auto">
                            <div>
                            </div>
                            <form method="post" action="{{ route('admin.login') }}">
                                @csrf
                                @method('post')
                                <div class="contact_form-container">
                                    @if ($errors->any())
                                        <h4>{{ $errors->first() }}</h4>
                                    @endif
                                    <div>
                                        <div>
                                            <input name="email" type="email" placeholder="Email " />
                                        </div>
                                        <div>
                                            <input name="password" type="password" placeholder="password" />
                                        </div>
                                        <div class="btn-box ">
                                            <button type="submit">
                                                login
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
    <!-- end contact section -->

    <!-- info section -->
@endsection
