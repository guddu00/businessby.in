@include('include.css')
@include('include.header')

<section class="besic-info-bg w-100 d-block float-left py-md-5 py-3 tp-mt">
  <div class="container">
    <div class="row d-flex flex-wrap justify-content-center">
      <div class="col-md-9 col-sm-9">
        <div class="basic-fild-bg float-left w-100 d-block py-md-5 py-3">
          <h2 class="w-100 d-block text-center pb-md-4">Business Photographs and Documents</h2>

          <form class="w-100 d-block" method="POST" action="{{ url('/business-photograph') }}" enctype="multipart/form-data">
            @csrf
            <ul class="float-left w-100 d-block pl-0">
              
              <!-- Business Photographs -->
              <li class="pb-md-4 pb-2">
                <input type="file" name="img[]" class="file d-none" accept="image/*">
                <div class="input-group">
                  <input type="text" class="form-control file-fild pl-0" disabled placeholder="No file chosen">
                  <div class="input-group-append">
                    <button type="button" class="browse btn uplod-Btn">Add Photo</button>
                  </div>
                </div>
              </li>

              <!-- Business Documents Info -->
              <li class="pb-md-4">
                <strong class="w-100 d-block pb-1">
                  <a tabindex="0" role="button" data-trigger="focus" data-container="body" data-toggle="popover" data-placement="right" 
                     data-content="Upload documents like PAN card, Address proof, Financials, GST proof, Certificates, Agreements, Trade Licenses, Business Plan, etc.">
                    Business Documents <i class="fa fa-info-circle" aria-hidden="true"></i>
                  </a>
                </strong>
              </li>

              <!-- Attach Proof of Company -->
              <li>
                <p class="pb-1">Attach proof of company (Incorporation certificate, GST certificate, Company PAN card, etc.)</p>
              </li>
              <li class="pb-2 upld-docmnt">
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input file" id="fileInput1" name="company_documents[]" accept=".pdf,.jpg,.png">
                    <label class="custom-file-label file-fild" for="fileInput1">Choose file</label>
                  </div>
                </div>
              </li>

              <!-- Attach Proof of Financials -->
              <li class="pt-md-4 pt-2 mt-2">
                <p class="pb-1">Attach proof of financials (Balance sheet, P&L, Audited financials, Income tax certificate for the last 2 years, etc.)</p>
              </li>
              <li class="pb-2 upld-docmnt">
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input file" id="fileInput2" name="financial_documents[]" accept=".pdf,.jpg,.png">
                    <label class="custom-file-label file-fild" for="fileInput2">Choose file</label>
                  </div>
                </div>
              </li>

              <!-- Attach Proof of Licenses -->
              <li class="pt-md-4 pt-2 mt-2">
                <p class="pb-1">Attach proof of licenses, agreements & certifications (e.g. lease copy, trade licenses, franchise agreement, ISO certificates, etc.)</p>
              </li>
              <li class="pb-5 upld-docmnt">
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input file" id="fileInput3" name="license_documents[]" accept=".pdf,.jpg,.png">
                    <label class="custom-file-label file-fild" for="fileInput3">Choose file</label>
                  </div>
                </div>
              </li>

              <!-- Submit Button -->
              <li class="d-block text-center">
                <button type="submit" class="btn basic-form-Btn">Submit</button>
              </li>
            </ul>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

@include('include.footer')

<!-- jQuery (Ensure it is included) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).on("click", ".browse", function() {
  var fileInput = $(this).closest("li").find("input[type='file']");
  fileInput.trigger("click");
});

$('input[type="file"]').change(function(e) {
  var fileName = e.target.files.length > 0 ? e.target.files[0].name : "No file chosen";
  $(this).closest("li").find(".file-fild").val(fileName).text(fileName);
});

// Enable Bootstrap popovers
$(function () {
  $('[data-toggle="popover"]').popover();
});
</script>

</body>
</html>
