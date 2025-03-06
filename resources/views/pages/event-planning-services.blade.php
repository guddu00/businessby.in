<!DOCTYPE html>
<html lang="en">
<head>
<title>Business Buy</title>
@include('include.css')
</head>
<body>                        
<!-------Start header section------->  
@include('include.header')
<!-------Emd header section------->

<div class="container bnr-mt py-md-3">
	 <div class="row px-md-0 px-3">
	 	   <ul class="breadcrumb mb-0 pl-0">
	           <li><a href="Index.php">Home</a></li>
	           <li><a href="new-listing.php">New Listing</a></li>		 
	           <li>Event Planning Services</li>       
		   </ul>
	 </div>
</div>
<section class="prod-dtls-bg w-100 d-block py-md-5 py-3">
     <div class="container">
     	  <div class="row px-md-0 px-3">
 	   	        <div class="col-md-8 col-sm-8">
 	   	      	  <div class="row">
 	   	      	       <h2 class="w-100 d-block text-md-left text-center">Event Planning Services 
 	   	      	       </h2>
 	   	      	  </div>
 	   	      	  <div class="row py-3">
 	   	      	  	   <div class="list-id mb-md-0 mb-2">Listing ID: BB012015</div>
 	   	      	  	   <div class="asking">Asking Price:</div>
 	   	      	  	   <div class="price2"><i class="fa fa-inr" aria-hidden="true"></i> 2,48.000 INR</div>
 	   	      	  	   <a href="bid-now.php" class="bid-now mt-md-0 mt-2">Bid Now</a>
 	   	      	  </div>
 	   	      	  <div class="row bid-slider">
					    <div class="col-md-12 px-0">
					      <div id="custCarousel" class="carousel slide" data-ride="carousel" align="center">
					        <!-- slides -->
					        <div class="carousel-inner">
					          <div class="carousel-item active">
					            <img src="https://i.imgur.com/weXVL8M.jpg" alt="Hills">
					          </div>

					          <div class="carousel-item">
					            <img src="https://i.imgur.com/Rpxx6wU.jpg" alt="Hills">
					          </div>

					          <div class="carousel-item">
					            <img src="https://i.imgur.com/83fandJ.jpg" alt="Hills">
					          </div>

					          <div class="carousel-item">
					            <img src="https://i.imgur.com/JiQ9Ppv.jpg" alt="Hills">
					          </div>

					          <div class="carousel-item">
					            <img src="https://i.imgur.com/Rpxx6wU.jpg" alt="Hills">
					          </div>
					        </div>

					        <!-- Left right -->
					        <a class="carousel-control-prev" href="#custCarousel" data-slide="prev">
					          <span class="carousel-control-prev-icon"></span>
					        </a>
					        <a class="carousel-control-next" href="#custCarousel" data-slide="next">
					          <span class="carousel-control-next-icon"></span>
					        </a>

					        <!-- Thumbnails -->
					        <ol class="carousel-indicators list-inline">
					          <li class="list-inline-item active">
					            <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#custCarousel">
					              <img src="https://i.imgur.com/weXVL8M.jpg" class="img-fluid">
					            </a>
					          </li>

					          <li class="list-inline-item">
					            <a id="carousel-selector-1" data-slide-to="1" data-target="#custCarousel">
					              <img src="https://i.imgur.com/Rpxx6wU.jpg" class="img-fluid">
					            </a>
					          </li>

					          <li class="list-inline-item">
					            <a id="carousel-selector-2" data-slide-to="2" data-target="#custCarousel">
					              <img src="https://i.imgur.com/83fandJ.jpg"  class="img-fluid">
					            </a>
					          </li>

					           <li class="list-inline-item">
					            <a id="carousel-selector-2" data-slide-to="3" data-target="#custCarousel">
					              <img src="https://i.imgur.com/JiQ9Ppv.jpg"  class="img-fluid">
					            </a>
					          </li>
					          <li class="list-inline-item">
					            <a id="carousel-selector-1" data-slide-to="1" data-target="#custCarousel">
					              <img src="https://i.imgur.com/Rpxx6wU.jpg" class="img-fluid">
					            </a>
					          </li>
					         </ol>
					      </div>
					    </div>
                  </div>
 	   	        </div>
 	   	        <div class="col-md-4 col-sm-4 pl-md-5 px-0 pt-md-0 pt-3">
                      <div class="row pr-3">
 	   	      	  	        <div class="indus-bg w-100 d-block p-3">
                             	  <div class="table-responsive">
                             	  <table class="table table-bordered mb-0">
									<thead>
									    <tr>
										    <th width="50%" class="px-2 pb-2">
										    	<ul class="pl-0 pt-md-3">
										    		<li>
										    			<i><i class="fa fa-industry" aria-hidden="true"></i></i>
										    		    <strong class="d-block text-center">Category of Business</strong>
										    		    <p class="d-block text-center">Event Planning Service</p>
										    		</li>
										    	</ul>
										    </th>
										    <th width="50%" class="px-2 pb-2">
										    	<ul class="pl-0 pt-md-3">
										    		<li>
										    			<i><i class="fa fa-map-marker" aria-hidden="true"></i></i>
										    		    <strong class="d-block text-center">Location</strong>
										    		    <p class="d-block text-center">Kolkata</p>
										    		</li>
										    	</ul>
										    </th>
									    </tr>
									 </thead>
									 <tbody>
									    <tr> 
									    	<td class="px-2 pb-2">
										    	<ul class="pl-0 pt-md-3">
										    		<li>
										    			<i><i class="fa fa-money" aria-hidden="true"></i></i>
										    		    <strong class="d-block text-center">Asking Price</strong>
										    		    <p class="d-block text-center">INR 4.00 Crore</p>
										    		</li>
										    	</ul>
										    </td>
									    	<td class="px-2 pb-2">
										    	<ul class="pl-0 pt-md-3">
										    		<li>
										    			<i><i class="fa fa-shopping-bag" aria-hidden="true"></i></i>
										    		    <strong class="d-block text-center">Entity Type</strong>
										    		    <p class="d-block text-center">Private Limited</p>
										    		</li>
										    	</ul>
										    </td>
									    </tr>
									 </tbody>
									 <tbody>
									 	  <tr>
									 	  	  <td class="px-2 pb-2">
										    	  <ul class="pl-0 pt-md-3">
										    		<li>
										    			<i><i class="fa fa-power-off" aria-hidden="true"></i></i>
										    		    <strong class="d-block text-center">Started In</strong>
										    		    <p class="d-block text-center">2020</p>
										    		</li>
										    	  </ul>
										      </td>
										      <td class="px-2 pb-2">
										    	   <ul class="pl-0 pt-md-3">
										    		<li>
										    			<i><i class="fa fa-percent" aria-hidden="true"></i></i>
										    		    <strong class="d-block text-center">Interested In</strong>
										    		    <p class="d-block text-center">Raise Funds (via equity)</p>
										    		</li>
										    	   </ul>
										      </td>
									 	  </tr>
									 </tbody>
									 <tbody>
									 	  <tr>
									 	  	  <td class="px-2 pb-2">
										    	  <ul class="pl-0 pt-md-3">
										    		<li>
										    			<i><i class="fa fa-inr" aria-hidden="true"></i></i>
										    		    <strong class="d-block text-center">Last Year's Turnover</strong>
										    		    <p class="d-block text-center">Available on request</p>
										    		</li>
										    	  </ul>
										      </td>
										      <td class="px-2 pb-2">
										    	  <ul class="pl-0 pt-md-3">
										    		<li>
										    			<i><i class="fa fa-user" aria-hidden="true"></i></i>
										    		    <strong class="d-block text-center">Employees</strong>
										    		    <p class="d-block text-center">100</p>
										    		</li>
										    	  </ul>
										      </td>
									 	  </tr>
									 </tbody>
									 <tbody>
									 	  <tr>
										      <td class="px-2 pb-2">
										    	  <ul class="pl-0 pt-md-3">
										    		<li>
										    			<i><i class="fa fa-dropbox" aria-hidden="true"></i></i>
										    		    <strong class="d-block text-center">EBITDA</strong>
										    		    <p class="d-block text-center">Available on request</p>
										    		</li>
										    	  </ul>
										      </td>
									 	  	  <td class="px-2 pb-2">
										    	  <ul class="pl-0 pt-md-3">
										    		<li>
										    			<i><i class="fa fa-gg" aria-hidden="true"></i></i>
										    		    <strong class="d-block text-center">Operational Status</strong>
										    		    <p class="d-block text-center">Running</p>
										    		</li>
										    	  </ul>
										      </td>
									 	  </tr>
									 </tbody>
								  </table>
						      </div>
                            </div>
 	   	      	      </div>
 	   	        </div>
     	  </div>
     	     <div class="row pt-3">
                   <div id="tabs" class="md-elevation-4dp bg-theme-primary">
					    <ul class="nav nav-tabs w-100 d-block" role="tablist">
						      <li class="nav-item">
						        <a class="nav-link" data-index="1" data-toggle="tab" href="#tab-1" role="tab">Product/Services</a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link" data-index="2" data-toggle="tab" href="#tab-2" role="tab">Premises</a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link" data-index="3" data-toggle="tab" href="#tab-3" role="tab">Price Includes</a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link" data-index="4" data-toggle="tab" href="#tab-4" role="tab">Season of Sale</a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link" data-index="5" data-toggle="tab" href="#tab-5" role="tab">Other Details</a>
						      </li>
					    </ul>
			      </div>
				 <div class="tab-content w-100 d-block">
				        <div class="tab-pane fade active show" id="tab-1" role="tabpanel">
				             <ul class="faq w-100 d-block pl-0">
				    	  	      <li class="px-md-4 px-2 pt-md-3 pt-2 mb-3">
				    	  	   	       <strong class="w-100 d-block pb-1">Products/Service</strong>
							           <p>Super specialty hospital</p>
							           <p>The Hospital will have cardiology, gastroenterology, neurology, neurosurgery, ENT, etc. along with all secondary care departments.<br/>
							           The hospital will have all facilities under one roof including pathology, high-end imaging, dialysis, etc.</p>
				                  </li>
				     	      </ul>
				        </div> 
				        <div class="tab-pane fade show" id="tab-2" role="tabpanel">
				             <ul class="faq w-100 d-block pl-0">
				                  <li class="px-md-4 px-2 pt-md-3 pt-2 mb-3">
				    	  	   	       <strong class="w-100 d-block pb-1"><a id="tab-2" role="tabpanel">Premises</a></strong>
							           <p><b>LEASED</b></p>
							           <p>Lease per month (in INR): 550000</p>
							           <p>Security Deposit (in INR): 1650000</p>
							           <p>Carpet Area: 9000 SQ Ft</p>
							           <p>The total leased area is 1000 Sq yard (9000 Sq Ft) out of which 4000 sq ft is built up area.</p>
				                  </li>
				    	      </ul>
				        </div> 
				        <div class="tab-pane fade show" id="tab-3" role="tabpanel">
				             <ul class="faq w-100 d-block pl-0">
				                  <li class="px-md-4 px-2 pt-md-3 pt-2 mb-3">
				    	  	   	        <strong class="w-100 d-block pb-1"><a id="tab-3" role="tabpanel">Price Includes</a></strong>
				                        <p>We are offering company stake at this point</p>
				    	  	      </li>
				    	      </ul>
				        </div>
				        <div class="tab-pane fade show" id="tab-4" role="tabpanel">
				             <ul class="faq w-100 d-block pl-0">
				    	  	      <li class="px-md-4 px-2 pt-md-3 pt-2 mb-3">
				    	  	   	        <strong class="w-100 d-block pb-1"><a id="tab-4" role="tabpanel">Reason of Sale</a></strong>
				                        <p>We are raising funds for the expansion of the business and to streamline the business operations</p>
				    	  	      </li>
				    	      </ul>
				        </div>
				        <div class="tab-pane fade show" id="tab-5" role="tabpanel">
				             <ul class="faq w-100 d-block pl-0">
				     	  	      <li class="px-md-4 px-2 pt-md-3 pt-2 mb-3">
				    	  	   	         <strong class="d-block pb-1"><a id="tab-5" role="tabpanel">Other Details</a></strong>
							             <p>It is a 120-bedded superspeciality hospital planned to be operational in the Summer of 2022. It is located in heart of the city - Palwal, Haryana on NH-2, Mathura Road.</p>
							             <p>The Hospital will have cardiology, gastroenterology, neurology, neurosurgery, ENT, etc. along with all secondary care departments.<br/>
										The hospital will have all facilities under one roof including pathology, high-end imaging, dialysis, etc.
										The hospital will have 4 modular OTs, 1 Cath Lab, and 24 ICU beds.
										Tula Hospital is funded and promoted by a well-establshed group
										Going ahead we look forward to bringing more hospitals in tier II and tier III cities/towns of northern India with super specialty services.</p>
				    	  	       </li>
				    	      </ul>
				        </div>
				 </div>
             </div>
     </div>
</section>

<!--------Start footer section--------->
@include('include.footer')
<!--------End footer section--------->
                           
@include('include.js')
</body>
</html>