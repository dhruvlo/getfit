@extends('backend.layouts.app')

@section('title')
User's - Dashboard
@endsection

@section('page_name')
Payment
@stop

@section('content')
<div class="card shadow mb-4">
    <div class="card-body">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="card ">
                        <div class="card-header">
                            <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                                <!-- Credit card form tabs -->
                                <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                                    <li class="nav-item"> <a data-toggle="pill" href="#credit-card" class="nav-link active "> <i class="fas fa-credit-card mr-2"></i> Credit Card </a> </li>
                                    <li class="nav-item"> <a data-toggle="pill" href="#paypal" class="nav-link "> <i class="fab fa-paypal mr-2"></i> Paypal </a> </li>
                                    <li class="nav-item"> <a data-toggle="pill" href="#net-banking" class="nav-link "> <i class="fas fa-mobile-alt mr-2"></i> Net Banking </a> </li>
                                </ul>
                            </div> <!-- End -->
                            <!-- Credit card form content -->
                            <div class="tab-content">
                                <!-- credit card info-->
                                <div class="input-group mt-4"> <input type="text" name="cardNumber" placeholder="Enter Amount" class="form-control " required>
                                    <div class="input-group-append"> 
                                        <span class="input-group-text text-muted"> <i class="fas fa-rupee-sign mx-1"></i>
                                        </span>
                                    </div>
                                </div>
                                <div id="credit-card" class="tab-pane fade show active pt-3">
                                    <form role="form" onsubmit="event.preventDefault()">
                                        <div class="form-group"> <label for="username">
                                                <h6>Card Owner</h6>
                                            </label> <input type="text" name="username" placeholder="Card Owner Name" required class="form-control "> </div>
                                        <div class="form-group"> <label for="cardNumber">
                                                <h6>Card number</h6>
                                            </label>
                                            <div class="input-group"> <input type="text" name="cardNumber" placeholder="Valid card number" class="form-control " required>
                                                <div class="input-group-append"> <span class="input-group-text text-muted"> <i class="fab fa-cc-visa mx-1"></i> <i class="fab fa-cc-mastercard mx-1"></i> <i class="fab fa-cc-amex mx-1"></i> </span> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="form-group"> <label><span class="hidden-xs">
                                                            <h6>Expiration Date</h6>
                                                        </span></label>
                                                    <div class="input-group"> <input type="number" placeholder="MM" name="" class="form-control" required> <input type="number" placeholder="YY" name="" class="form-control" required> </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group mb-4"> <label data-toggle="tooltip" title="Three digit CV code on the back of your card">
                                                        <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                                    </label> <input type="text" required class="form-control"> </div>
                                            </div>
                                        </div>
                                        <div class="card-footer p-0"> <button type="button" class="subscribe btn btn-primary btn-block shadow-sm" data-toggle="modal" data-target="#payment_complete"> Confirm Payment </button>
                                    </form>
                                </div>
                            </div> <!-- End -->
                            <!-- Paypal info -->
                            <div id="paypal" class="tab-pane fade pt-3">
                                <h6 class="pb-2">Select your paypal account type</h6>
                                <div class="form-group "> 
                                    <label class="radio-inline"> 
                                        <input type="radio" name="optradio" checked>
                                         Domestic
                                    </label>
                                    <label class="radio-inline"> 
                                        <input type="radio" name="optradio" class="ml-5">
                                        International 
                                    </label>
                                </div>
                                <div class="input-group"> <input type="text" name="cardNumber" placeholder="Enter Amount" class="form-control " required>
                                    <div class="input-group-append"> 
                                        <span class="input-group-text text-muted"> <i class="fas fa-rupee-sign mx-1"></i>
                                        </span>
                                    </div>
                                </div>
                                <p> <button type="button" class="btn btn-primary mt-3 w-100" data-toggle="modal" data-target="#payment_complete"><i class="fab fa-paypal mr-2"></i>Pay Now</button> </p>
                                <p class="text-muted"> Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order. </p>
                            </div> <!-- End -->
                            <!-- bank transfer info --> 
                            <div id="net-banking" class="tab-pane fade pt-3">
                                <div class="form-group ">
                                    <label for="Select Your Bank">
                                    <h6>Select your Bank</h6>
                                    </label> <select class="form-control" id="ccmonth">
                                        <option value="" selected disabled>Please select your Bank</option>
                                        <option>State Bank of India</option>
                                        <option>Axis Bank</option>
                                        <option>Kotak Mahindra Bank</option>
                                        <option>HDFC Bank</option>
                                        <option>Punjab National Bank</option>
                                        <option>Central Bank of India</option>
                                        <option>Bank of Baroda</option>
                                        <option>ICICI Bank</option>
                                        <option>Karur Vysya Bank</option>
                                        <option>RBL Bank</option>
                                    </select> 
                                </div>
                                <div class="input-group mb-3"> <input type="text" name="cardNumber" placeholder="Enter Amount" class="form-control " required>
                                    <div class="input-group-append"> 
                                        <span class="input-group-text text-muted"> <i class="fas fa-rupee-sign mx-1"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <p> <button type="button" class="btn btn-primary w-100" data-toggle="modal" data-target="#payment_complete"><i class="fas fa-mobile-alt mr-2"></i> Proceed Payment</button> </p>
                                </div>
                                <p class="text-muted">Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order. </p>
                            </div> <!-- End -->
                            <!-- End -->
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection


@section('modals')
  <!-- Modal -->
  <div class="modal fade" id="payment_complete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content  bg-success">
        <div class="modal-body p-5">
            <div class="text-center">
                <h1 class="text-light ">Payment Completed</h1>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection