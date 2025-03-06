@include('include.css')
@include('include.header')

<section class="besic-info-bg w-100 d-block float-left py-md-5 py-3 tp-mt">
    <div class="container">
        <div class="row d-flex flex-wrap justify-content-center">
            <div class="col-md-9 col-sm-9">
                <div class="basic-fild-bg float-left w-100 d-block py-5">
                    <h2 class="w-100 d-block text-center pb-4">Basic Information</h2>
                    <form class="w-100 d-block" action="{{ url('/list-your-business') }}"
                    method="POST">
                        @csrf
                        <ul class="float-left w-100 d-block pl-0">
                            <li class="pb-md-3">
                                <label for="business_name" class="pt-2 mr-3">Name of Business</label>
                                <input type="text" class="form-control basic-form-filed" name="business_name" placeholder="Company or Organization name" required>
                            </li>
                            <li class="pb-md-3">
                                <label for="business_website" class="pt-2 mr-3">Business Website</label>
                                <input type="url" class="form-control basic-form-filed" name="business_website" placeholder="Company or Organization Website">
                            </li>
                            <li class="pb-md-3">
                                <label for="bank" class="pt-2 mr-3">Who do you Bank with</label>
                                <select class="custom-select basic-form-filed" name="bank" required>
                                    <option selected>Choose your Bank</option>
                                    <option value="State Bank of India">State Bank of India</option>
                                    <option value="HDFC Bank">HDFC Bank</option>
                                    <option value="ICICI Bank">ICICI Bank</option>
                                    <option value="Axis Bank">Axis Bank</option>
                                    <option value="Kotak Mahindra Bank">Kotak Mahindra Bank</option>
                                </select>
                            </li>
                            <li class="pb-md-3">
                                <label for="city" class="pt-2 mr-3">Location (City)</label>
                                <select class="custom-select basic-form-filed" name="city" required>
                                    <option selected>Choose your City</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Mumbai">Mumbai</option>
                                    <option value="Bangalore">Bangalore</option>
                                    <option value="Kolkata">Kolkata</option>
                                    <option value="Chennai">Chennai</option>
                                </select>
                            </li>
                                <li class="pb-md-3">
                                    <label for="business_category" class="pt-2 mr-3">Category of Business</label>
                                    <select id="business_category" name="business_category" class="form-control select2" required>
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </li>
                                

                                
                                
                           
                            <li class="pb-md-3">
                                <label for="sale_type" class="pt-2 mr-3">Wish to Sale</label>
                                <select class="custom-select basic-form-filed" name="sale_type">
                                    <option value="Full Sale">Full Sale</option>
                                    <option value="Assets Sale">Assets Sale</option>
                                </select>
                            </li>
                            <li class="pb-md-3">
                                <label for="year_established" class="pt-2 mr-3">Year Established</label>
                                <input type="text" class="form-control basic-form-filed" name="year_established" placeholder="e.g. 1998" required>
                            </li>
                            <li class="pb-3">
                                <label for="entity_type" class="pt-2 mr-3">Type of Entity</label>
                                <select class="custom-select basic-form-filed" name="entity_type">
                                    <option value="Sole Proprietorship">Sole Proprietorship</option>
                                    <option value="Partnership">Partnership</option>
                                    <option value="Limited Liability Partnership">Limited Liability Partnership</option>
                                    <option value="Private Limited">Private Limited</option>
                                    <option value="Public Limited">Public Limited</option>
                                </select>
                            </li>
                            <li>
                                <label class="mr-3">Operational Status</label>
                                <div class="form-check float-left ml-1 mb-0">
                                    <input type="radio" class="form-check-input" name="operational_status" value="Running" required> Running
                                </div>
                                <div class="form-check float-left ml-5 mb-0">
                                    <input type="radio" class="form-check-input" name="operational_status" value="Dormant"> Dormant
                                </div>
                            </li>
                            <li class="pb-3">
                                <label for="num_employees" class="pt-2 mr-3">Number of Employees</label>
                                <input type="number" class="form-control basic-form-filed" name="num_employees" placeholder="e.g. 25" required>
                            </li>
                            <li class="d-block text-center">
                                <button type="submit" class="btn basic-form-Btn">Save and Next &nbsp<i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('#business_category').select2({
                placeholder: "Select Category",
                allowClear: true
            });
        });
    </script>
    
</section>
@include('include.footer') 