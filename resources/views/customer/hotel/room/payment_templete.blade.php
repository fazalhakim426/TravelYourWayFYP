
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table" >
                    <div class="row display-tr" >
                        <h3 class="panel-title display-td" >Payment Details</h3>
                        <div class="display-td" >                            
                            <x-slot name="logo">
                                <a href="/">
                                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                                </a>
                            </x-slot>
                    
                            <img class="img-responsive pull-right" src="{{asset('/logo.png')}}" >
                        </div>
                    </div>                    
                </div>
                <div class="panel-body">
  
                    @if (Session::has('success'))
                        <div class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <p>{{ Session::get('success') }}</p>
                        </div>
                    @endif
  
                    <form role="form" action="{{ route('stripe.post') }}" method="post" class="require-validation"
                                                     data-cc-on-file="false"
                                                    data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                                                    id="payment-form">
                        @csrf
  
                        <div class='form-row row'>
                            <div class='col-xs-12 form-group required'>
                                <label class='control-label'>Name on Card</label> <input
                                    class='form-control' value='test' size='4' type='text'>
                            </div>
                        </div>
  
                        <div class='form-row row'>
                            <div class='col-xs-12 form-group card required'>
                                <label class='control-label'>Card Number</label> <input
                                    autocomplete='off' value='4242424242424242' class='form-control card-number' size='20'
                                    type='text'>
                            </div>
                        </div>
  
                        <div class='form-row row'>
                            <div class='col-xs-12 col-md-4 form-group cvc required'>
                                <label class='control-label'>CVC</label> <input value='123' autocomplete='off'
                                    class='form-control card-cvc' placeholder='ex. 311' size='4'
                                    type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Month</label> <input
                                    class='form-control card-expiry-month' placeholder='MM' value="12" size='2'
                                    type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Year</label> <input
                                    class='form-control card-expiry-year' placeholder='YYYY' value='2024'size='4'
                                    type='text'>
                            </div>
                        </div>
  
                        <div class='form-row row'>
                            <div class='col-md-12 error form-group hide'>
                                <div class='alert-danger alert'>Please correct the errors and try
                                    again.</div>
                            </div>
                        </div>
                        @foreach($room_ids as $id)
                        <input  name='room_id[]' value='{{$id}}'>
                        @endforeach
                        <input type="number" name='total_charges' value='{{$total_charges}}'>
                        <input type="date" name='to' value='{{$from}}'>
                        <input type="date" name='from' value='{{$to}}'>
                        <input  name='hotel_id' value='{{$hotel_id}}'>
                      
                        <div class="row">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now ({{$total_charges}})</button>
                            </div>
                        </div>
                          
                    </form>
<br>
                  
                    <form method="POST" action="{{route('/room/payment/byhand')}}">
                        @csrf
                        @foreach($room_ids as $id)
                        <input name='room_id[]' value='{{$id}}'>
                        @endforeach
                        <input type="number" name='total_charges' value='{{$total_charges}}'>
                        <input type="date" name='to' value='{{$from}}'>
                        <input type="date" name='from' value='{{$to}}'>
                        <input  name='hotel_id' value='{{$hotel_id}}'>
                            <div class="row">
                                <div class="col-xs-12">
                                    <button class="btn btn-primary btn-lg btn-block" type="submit">Payment By Hand ({{$total_charges}})</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>        
        </div>