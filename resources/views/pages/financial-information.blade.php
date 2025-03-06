@include('include.css')
@include('include.header')

<section class="besic-info-bg w-100 d-block float-left py-md-5 py-3 tp-mt">
    <div class="container">
        <div class="row d-flex flex-wrap justify-content-center">
            <div class="col-md-9 col-sm-9">
                <div class="basic-fild-bg float-left w-100 d-block py-md-5 py-3">
                    <h2 class="w-100 d-block text-center pb-4">Financials & Deal Information</h2>
                    
                    <form class="w-100 d-block" action="{{ url('/financial-information') }}" method="POST">
                        @csrf
                        <ul class="float-left w-100 d-block pl-0">
                            <li class="pb-3">
                                <label for="turnover" class="mr-3">Last year’s turnover (Sales)</label>
                                <div class="input-group float-left inr-fld">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">INR</span>
                                    </div>
                                    <input type="text" class="form-control basic-form-filed" name="turnover" placeholder="e.g. 10000000" required>
                                </div>
                            </li>
                            <li class="pb-3">
                                <label for="ebitda" class="mr-3">EBITDA Margin %<span class="d-block">(Operating Profit margin %)</span></label>
                                <input type="text" class="form-control basic-form-filed" name="ebitda" placeholder="Last financial Year EBITDA Marg" required>
                            </li>
                            <li class="pb-3">
                                <label for="transaction_type" class="mr-3 pt-2">Transaction Deal type</label>
                                <input type="text" class="form-control basic-form-filed" name="transaction_type" placeholder="You can select multiple transaction types" required>
                            </li>    
                            <li class="pb-md-3 pb-4">
                                <label for="deal_size" class="mr-3">Deal Size / Price<span class="d-block">Estimated selling price of business, Investment required, Franchise fees or Lease amount</span></label>
                                <div class="input-group float-left inr-fld">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">INR</span>
                                    </div>
                                    <input type="text" class="form-control basic-form-filed" name="deal_size" placeholder="e.g. 5000000" required>
                                </div>
                            </li>
                            <li class="pb-md-3 pb-4">
                                <label for="deal_inclusions" class="mr-3">What is included in the deal price<span class="d-block">Provide details about land, deposit, machineries, % stake offered/ % interest, etc</span></label>
                                <input type="text" class="form-control basic-form-filed" name="deal_inclusions" required>
                            </li>
                            <li class="pb-md-3 pb-4 position-relative">
                                <figcaption>(Max <b>140</b> characters remaining for your input.)</figcaption>
                                <label for="deal_rationale" class="mr-3">Deal rationale<span class="d-block">Provide your reason for this business transaction</span></label>
                                <input type="text" class="form-control basic-form-filed" name="deal_rationale" required>
                            </li>
                            <li class="pb-md-3 pb-5 position-relative">
                                <figcaption>(Max <b>60</b> characters)</figcaption>
                                <label for="deal_title" class="mr-3">Write a Deal Title for your Business<a href="#" class="itemOne"> &nbsp(see example)</a></label>
                                <div class="card item1" style="width:12rem;">
                                    <div class="card-body item1">
                                        <h5 class="w-100 d-block">Example</h5>
                                        <ul class="pl-0 px-2 pt-2">
                                            <li>Established Pharma Packaging Company Available for Takeover</li>
                                            <li>Chain of 18 Franchisees for Skin Treatment Looking to Sell-out</li>
                                            <li>Online Pharmacy Startup is Looking to Raise Investments</li>
                                        </ul>
                                    </div>
                                </div>
                                <input type="text" class="form-control basic-form-filed" name="deal_title" placeholder="e.g. AI startup business with 70 clients looking to raise funds" required>
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
