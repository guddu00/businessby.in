<!DOCTYPE html>
<html lang="en">
<head>
<title>Business Buy</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="favicon-32x32.png">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.css">
<link rel="stylesheet" href="css/mega-menu.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/filter.css">
</head>
<body>                        
<!-------Start header section------->  
@include('include.header')
<!-------Emd header section------->

<section class="buy-busi-bg bnr-mt w-100 d-block pt-2"> 
<div class="container">
	 <div class="row">
	 	   <ul class="breadcrumb mb-0">
		          <li><a href="Index.php">Home</a></li>
		          <li>Buy Business</li>		          
		      </ul>
	 </div>
</div>  
<div class="container busi-filter">
    <div class="bg-white rounded d-flex align-items-center justify-content-between pl-3" id="header"> 
    	<button class="btn btn-hide text-uppercase" type="button" data-toggle="collapse" data-target="#filterbar" aria-expanded="false" aria-controls="filterbar" id="filter-btn" onclick="changeBtnTxt()"> < <span id="btn-txt">Business Search</span> </button>
        <nav class="navbar navbar-expand-lg navbar-light pl-lg-0 pl-auto"> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynav" aria-controls="mynav" aria-expanded="false" aria-label="Toggle navigation" onclick="chnageIcon()" id="icon"> <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="mynav">
                <ul class="navbar-nav d-lg-flex align-items-lg-center">
                    <li class="nav-item active w-50"> 
                    	<select name="sort" id="sort" class="sort-by w-100">
                            <option value="" hidden selected>Sort by popularity</option>
                            <option value="sort by average rating">Sort by average rating</option>
                            <option value="sort by latest">Sort by latest</option>
                            <option value="sort by price: low to high">Sort by price: low to high</option>
                            <option value="Sort by price: high to low">Sort by price: high to low</option>
                        </select> 
                    </li>
                    <li class="nav-item d-inline-flex align-items-center justify-content-between mb-lg-0 mb-3">
                        <div class="d-inline-flex align-items-center mx-lg-2" id="select2">
                            <div class="pl-2">Products:</div> <select name="pro" id="pro">
                                <option value="1">1</option>
                                <option value="4">4</option>
                                <option value="8">8</option>
                            </select>
                        </div>
                        <div class="result">1 from 8</div>
                    </li>
                    <li class="nav-item d-lg-none d-inline-flex"> </li>
                </ul>
            </div>
        </nav>	
        <div class="ml-auto mt-3 mr-2">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"> <a class="page-link" href="#" aria-label="Previous"> <span aria-hidden="true" class="font-weight-bold">&lt;</span> <span class="sr-only">Previous</span> </a> </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">..</a></li>
                    <li class="page-item"><a class="page-link" href="#">8</a></li>
                    <li class="page-item"> <a class="page-link" href="#" aria-label="Next"> <span aria-hidden="true" class="font-weight-bold">&gt;</span> <span class="sr-only">Next</span> </a> </li>
                </ul>
            </nav>
        </div>
    </div>
    <div id="content" class="mt-2">
        <div id="filterbar" class="collapse">
            <div class="box border-bottom">
                <div class="form-group text-center">
                    <div class="btn-group" data-toggle="buttons"> <label class="btn btn-success form-check-label"> <input class="form-check-input" type="radio"> Reset </label> <label class="btn btn-success form-check-label active"> <input class="form-check-input" type="radio" checked> Apply </label> </div>
                </div>
            </div>
            <div class="box border-bottom">
                <div class="box-label text-uppercase d-flex align-items-center">Business Category <button class="btn ml-auto" type="button" data-toggle="collapse" data-target="#inner-box" aria-expanded="false" aria-controls="inner-box" id="out" onclick="outerFilter()"> <i class="fa fa-plus" aria-hidden="true"></i> </button> </div>
                <div id="inner-box" class="collapse mt-2">
                    <div class="my-1"> <label class="tick">Bakery Shop <input type="checkbox"> <span class="check"></span> </label> </div>
                    <div class="my-1"> <label class="tick">Digital Marketing Consultancy <input type="checkbox"> <span class="check"></span> </label> </div>
                    <div class="my-1"> <label class="tick">Industrial Unit <input type="checkbox"> <span class="check"></span> </label> </div>
                    <div class="my-1"> <label class="tick">IT Office <input type="checkbox"> <span class="check"></span> </label> </div>
                    <div class="my-1"> <label class="tick">Pharmaceutical Industry <input type="checkbox"> <span class="check"></span> </label> </div>
                    <div class="my-1"> <label class="tick">Medical Plants <input type="checkbox"> <span class="check"></span> </label> </div>
                    <div class="my-1"> <label class="tick">Event Planner <input type="checkbox"> <span class="check"></span> </label> </div>                   
                </div>
            </div>
            <div class="box">
                <div class="box-label text-uppercase d-flex align-items-center">price <button class="btn ml-auto" type="button" data-toggle="collapse" data-target="#price" aria-expanded="false" aria-controls="price"><i class="fa fa-plus" aria-hidden="true"></i></button> </div>
                <div class="collapse" id="price">
                    <div class="middle">
                        <div class="multi-range-slider"> <input type="range" id="input-left" min="0" max="100" value="10"> <input type="range" id="input-right" min="0" max="100" value="50">
                            <div class="slider">
                                <div class="track"></div>
                                <div class="range"></div>
                                <div class="thumb left"></div>
                                <div class="thumb right"></div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-2">
                        <div> <span id="amount-left"></span> <i class="fa fa-inr" aria-hidden="true"></i> </div>
                        <div> <span id="amount-right"></span> <i class="fa fa-inr" aria-hidden="true"></i> </div>
                    </div>
                </div>
            </div>           
        </div>
        <div id="products">
            <div class="row mx-0">
	                <div class="col-md-4 col-sm-6 mb-4">
	                	 <a href="bakery-shop-sell.php">
		                    <div class="card d-flex flex-column align-items-center">                       
		                        <div class="card-img"><img src="images/product/product-01.jpg" alt=""></div>
		                        <div class="card-body">
		                        	<div class="product-name pt-3">Bakery Shop Sell</div>
		                            <div class="text-muted text-center mt-auto pt-2">Bakery Shop</div>
		                            <div class="d-flex align-items-center price pt-2">
		                                <div class="mr-2"><span class="price"><i class="fa fa-inr" aria-hidden="true"></i> 1,800,000.00</span></div>
		                            </div>
		                        </div>
		                    </div>
	                     </a>
	                </div>
	                <div class="col-md-4 col-sm-6 mb-4">
	                	 <a href="bakery-shop-sell.php">
		                    <div class="card d-flex flex-column align-items-center">                       
		                        <div class="card-img"><img src="images/product/product-02.jpg" alt=""></div>
		                        <div class="card-body">
		                        	<div class="product-name pt-3 w-100 text-center">Digital Marketing</div>
		                            <div class="text-muted text-center mt-auto pt-2 w-100">Digital Marketing Consultancy</div>
		                            <div class="d-flex align-items-center pt-2">
		                                <div class="mr-2 text-center w-100"><span class="price"><i class="fa fa-inr" aria-hidden="true"></i> 1,800,000.00</span></div>
		                            </div>
		                        </div>
		                    </div>
	                     </a>
	                </div>
	                <div class="col-md-4 col-sm-6 mb-4">
	                	 <a href="bakery-shop-sell.php">
		                    <div class="card d-flex flex-column align-items-center">                       
		                        <div class="card-img"><img src="images/product/product-03.jpg" alt=""></div>
		                        <div class="card-body">
		                        	<div class="product-name pt-3 w-100 text-center">Manufacturing Company</div>
		                            <div class="text-muted text-center mt-auto pt-2 w-100">Industrial Unit</div>
		                            <div class="d-flex align-items-center pt-2">
		                                <div class="mr-2 w-100 text-center"><span class="price"><i class="fa fa-inr" aria-hidden="true"></i> 1,800,000.00</span></div>
		                            </div>
		                        </div>
		                    </div>
	                     </a>
	                </div>
	                <div class="col-md-4 col-sm-6 mb-4">
	                	 <a href="bakery-shop-sell.php">
		                    <div class="card d-flex flex-column align-items-center">                       
		                        <div class="card-img"><img src="images/product/product-04.jpg" alt=""></div>
		                        <div class="card-body">
		                        	<div class="product-name pt-3 w-100 text-center">Engineering Consultancy</div>
		                            <div class="text-muted text-center mt-auto pt-2 w-100">IT Office</div>
		                            <div class="d-flex align-items-center pt-2">
		                                <div class="mr-2 w-100 text-center"><span class="price"><i class="fa fa-inr" aria-hidden="true"></i> 1,700,000.00</span></div>
		                            </div>
		                        </div>
		                    </div>
	                     </a>
	                </div>
	                <div class="col-md-4 col-sm-6 mb-4">
	                	 <a href="bakery-shop-sell.php">
		                    <div class="card d-flex flex-column align-items-center">                       
		                        <div class="card-img"><img src="images/product/product-05.jpg" alt=""></div>
		                        <div class="card-body">
		                        	<div class="product-name pt-3 w-100 text-center">Pharmaceutical Plants</div>
		                            <div class="text-muted text-center mt-auto pt-2 w-100">Medical Plants</div>
		                            <div class="d-flex align-items-center pt-2">
		                                <div class="mr-2 w-100 text-center"><span class="price"><i class="fa fa-inr" aria-hidden="true"></i> 3,000,000.00</span></div>
		                            </div>
		                        </div>
		                    </div>
	                     </a>
	                </div>
	                <div class="col-md-4 col-sm-6 mb-4">
	                	 <a href="bakery-shop-sell.php">
		                    <div class="card d-flex flex-column align-items-center">                       
		                        <div class="card-img"><img src="images/product/product-06.jpg" alt=""></div>
		                        <div class="card-body">
		                        	<div class="product-name pt-3">IT Sector Company</div>
		                            <div class="text-muted text-center mt-auto pt-2">IT Office</div>
		                            <div class="d-flex align-items-center price pt-2">
		                                <div class="mr-2"><span class="price"><i class="fa fa-inr" aria-hidden="true"></i> 2,500,000.00</span></div>
		                            </div>
		                        </div>
		                    </div>
	                     </a>
	                </div>
	                <div class="col-md-4 col-sm-6 mb-4">
	                	 <a href="bakery-shop-sell.php">
		                    <div class="card d-flex flex-column align-items-center">                       
		                        <div class="card-img"><img src="images/product/product-07.jpg" alt=""></div>
		                        <div class="card-body">
		                        	<div class="product-name pt-3">Manufacturing Unit</div>
		                            <div class="text-muted text-center mt-auto pt-2">Industrial Unit</div>
		                            <div class="d-flex align-items-center price pt-2">
		                                <div class="mr-2"><span class="price"><i class="fa fa-inr" aria-hidden="true"></i> 1,800,000.00</span></div>
		                            </div>
		                        </div>
		                    </div>
	                     </a>
	                </div>
	                <div class="col-md-4 col-sm-6 mb-4">
	                	 <a href="bakery-shop-sell.php">
		                    <div class="card d-flex flex-column align-items-center">                       
		                        <div class="card-img"><img src="images/product/product-08.jpg" alt=""></div>
		                        <div class="card-body">
		                        	<div class="product-name pt-3">Event Planning Services</div>
		                            <div class="text-muted text-center mt-auto pt-2">Event Planner</div>
		                            <div class="d-flex align-items-center price pt-2">
		                                <div class="mr-2"><span class="price"><i class="fa fa-inr" aria-hidden="true"></i> 3,000,000.00</span></div>
		                            </div>
		                        </div>
		                    </div>
	                     </a>
	                </div>
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