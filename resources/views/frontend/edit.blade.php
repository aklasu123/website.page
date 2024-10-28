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
          Interact
        </h2>
      </div>
      <div class="">
        <div class="row">
          <div class="col-md-7 mx-auto">
            <div>
              @if($errors->any())
              <ul> 
               @foreach ($errors->all() as $error)
                 <li>{{$error}}</li>
               @endforeach


              </ul>



              @endif
            </div>
            <form method="POST" action="{{route('frontend.update', $contact->id)}}">
            
                
              @csrf
              @method('PUT')
              <div class="contact_form-container">
                <div>
                  <div>
                    <input name="fullname" type="text" placeholder="Full Name" value="{{$contact->fullname}}"/>
                  </div>
                  <div>
                    <input name="email" type="email" placeholder="Email " value="{{$contact->email}}"/>
                  </div>
                  <div>
                    <input name="phonenumber" type="tel" placeholder="Phone Number" value="{{$contact->phonenumber}}"/>
                  </div>
                  <div class="">
                    <input name="message" type="text" placeholder="Message" class="message_input" value="{{$contact->message}}"/>
                  </div>
                  <div class="btn-box ">
                    <button type="submit">
                      update
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

