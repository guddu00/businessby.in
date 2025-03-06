@include('include.css')
@include('include.header')

<section class="besic-info-bg w-100 d-block float-left py-md-5 py-3 tp-mt">
    <div class="container">
        <div class="row d-flex flex-wrap justify-content-center">
            <div class="col-md-9 col-sm-9">
                <div class="basic-fild-bg float-left w-100 d-block py-md-5 py-3">
                    <h2 class="w-100 d-block text-center pb-md-4 pb-3">Business Highlights</h2>
                    
                    <form class="w-100 d-block" method="POST" action="{{ url('/business-heighlights') }}">

                        @csrf
                        <ul class="float-left w-100 d-block pl-0">
                            <li class="pb-md-0 pb-3">
                                <label for="products" class="mr-3">Products / Services<span class="d-block">List the products or services you provide (no brand names)</span></label>
                                <input type="text" class="form-control basic-form-filed" id="products" name="products" required>
                            </li>
                            <li class="pb-md-2 pb-3">
                                <label for="premises" class="mr-3">Premises</label>
                                <div class="form-check float-left mb-0">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="premises" value="Owned" required>Owned
                                    </label>
                                </div>
                                <div class="form-check float-left ml-5 mb-0">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="premises" value="Leased">Leased
                                    </label>
                                </div>
                                <div class="form-check float-left ml-5 mb-0">
                                    <label class="form-check-label w-100" style="font-size: 12px;">
                                        <input type="radio" class="form-check-input" name="premises" value="Not applicable">Not applicable
                                    </label>
                                </div>
                            </li>
                            <li class="pb-md-0 pb-3">
                                <label for="other_premises" class="mr-3">Other Premises Information<span class="d-block">List details of Land, Building, Office Premises Area, Owned/Leased, Age, Security deposit, Locality, Capacity</span></label>
                                <input type="text" class="form-control basic-form-filed" id="other_premises" name="other_premises">
                            </li>
                            <li class="pb-md-0 pb-3">
                                <label for="clientele" class="mr-3">Clientele<span class="d-block">List type of clients and industries you serve</span></label>
                                <input type="text" class="form-control basic-form-filed" id="clientele" name="clientele">
                            </li>
                            <li class="pb-md-0 pb-3">
                                <label for="details" class="mr-3">More details<span class="d-block">Provide details about your business like capacity, future scope, team & management, inventory, awards & achievements etc</span></label>
                                <input type="text" class="form-control basic-form-filed" id="details" name="details">
                            </li>
                            <li class="d-block text-center">
                                <button type="submit" class="btn basic-form-Btn">Save and next &nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@include('include.footer')
