@extends('layouts.app')

@section('meta-description','Taylor Properties offers residential and commercial Real Estate services throughout Maryland, DC and Virginia. As one of the fastest growing Brokerages we have agents to cover any of you home buying needs from foreclosures to water front.')
@section('meta-keywords','Taylor Properties, Real Estate, Real Estate Agents, Real Estate Listings, real estate agents maryland, best real estate agency maryland, best real estate broker md')
@section('title', 'Taylor Properties | Real Estate and Homes for Sale')

@section('content')
    <div class="view jarallax" data-jarallax='{"speed": 0.6}' id="index-parallax1">
        <div class="full-bg-img">
            <div class="mask rgba-white-light">
                <div class="mt-100 d-none d-sm-block d-xl-none"></div>
                <div class="mt-150 d-none d-xl-block"></div>
                <div class="container-fluid text-center">
                    <div class="row mx-2">
                        <div class="col-12 wow fadeIn mb-3">
                            <!-- Grid row -->
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="index-h2 animated fadeIn">Home Search</h2>
                                </div>
                            </div>
                            <!-- Grid row -->
                            <div class="search-container animated fadeIn">
                                <div class="search-div">
                                    <!-- Grid row -->
                                    <div class="row">
                                        <!-- Grid column -->
                                        <div class="col-12 col-sm-5 col-md-4 mt-3">
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-primary active" for="buy_option">
                                                    <input type="radio" name="buyrent" id="buy_option" autocomplete="off" value="buy" checked>For Sale
                                                </label>
                                                <label class="btn btn-primary" for="rent_option">
                                                    <input type="radio" name="buyrent" id="rent_option" autocomplete="off" value="rent">For Rent
                                                </label>
                                            </div>
                                        </div>
                                        <!-- Grid column -->

                                        <!-- Grid column -->
                                        <div class="col-12 col-sm-7 col-md-8">
                                            <div class="md-form search-input-div">
                                                <input type="text" class="form-control d-inline" id="search" autocomplete="off">
                                                <label for="search">MLS, City, Zipcode or Address</label>
                                                <a href="javascript: void(0)" id="search_link"><i class="fas fa-2x fa-search white-text"></i></a>
                                            </div>
                                        </div>
                                        <!-- Grid column -->
                                    </div>
                                    <!-- Grid row -->

                                    <!-- Grid row -->
                                    <div class="row">
                                        <!-- Grid column -->
                                        <div class="col-12">
                                            <div class="search-results-container w-100">
                                                <div class="search-results-div w-100">

                                                </div>
                                            </div>
                                        </div>
                                        <!-- Grid column -->
                                    </div>
                                    <!-- Grid row -->

                                    <!-- Grid row -->
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-sm-center justify-content-md-end search-select-div mt-3">

                                            <div class="dropdown">
                                                <a class="btn btn-primary dropdown-toggle btn-search-option" href="#" role="button" id="price_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Any Price</a>


                                                <div class="dropdown-menu search-dropdown-price">
                                                    <div class="form-group mb-0">
                                                        <div class="row mt-3">
                                                            <div class="col-6">
                                                                <select class="mdb-select colorful-select dropdown-primary price-select" id="min_price">
                                                                    <option value="0">No Min.</option>
                                                                    <?php for($p=50000;$p<=1000000;$p+=50000) { ?>
                                                                    <option value="<?php echo $p; ?>">$<?php echo number_format($p, '0', '.', ','); ?></option>
                                                                    <?php } ?>
                                                                    <?php for($p=1000000;$p<=10000000;$p+=1000000) { ?>
                                                                    <option value="<?php echo $p; ?>">$<?php echo number_format($p, '0', '.', ','); ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                                <label>Min. Price</label>
                                                            </div>

                                                            <div class="col-6">
                                                                <select class="mdb-select colorful-select dropdown-primary price-select" id="max_price">
                                                                    <option value="">No Max.</option>
                                                                    <?php for($p=50000;$p<=1000000;$p+=50000) { ?>
                                                                    <option value="<?php echo $p; ?>">$<?php echo number_format($p, '0', '.', ','); ?></option>
                                                                    <?php } ?>
                                                                    <?php for($p=1000000;$p<=10000000;$p+=1000000) { ?>
                                                                    <option value="<?php echo $p; ?>">$<?php echo number_format($p, '0', '.', ','); ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                                <label>Max. Price</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="dropdown">
                                                <a class="btn btn-primary dropdown-toggle btn-search-option" href="#" role="button" id="beds_baths_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Any Beds/Baths</a>


                                                <div class="dropdown-menu search-dropdown-beds-baths">
                                                    <div class="form-group mb-0">
                                                        <div class="row mt-3">
                                                            <div class="col-6">
                                                                <select class="mdb-select colorful-select dropdown-primary price-select" id="beds">
                                                                    <option value="" selected>Any</option>
                                                                    <option value="1">1+</option>
                                                                    <option value="2">2+</option>
                                                                    <option value="3">3+</option>
                                                                    <option value="4">4+</option>
                                                                    <option value="5">5+</option>
                                                                </select>
                                                                <label>Beds</label>
                                                            </div>

                                                            <div class="col-6">
                                                                <select class="mdb-select colorful-select dropdown-primary price-select" id="baths">
                                                                    <option value="" selected>Any</option>
                                                                    <option value="1">1+</option>
                                                                    <option value="2">2+</option>
                                                                    <option value="3">3+</option>
                                                                    <option value="4">4+</option>
                                                                    <option value="5">5+</option>
                                                                </select>
                                                                <label>Baths</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <!-- Grid row -->
                                </div>

                            </div> <!-- end .search-container -->

                        </div>
                    </div>
                    <!-- Grid row -->
                </div>
                <!-- container-fluid -->
            </div>
        </div>
    </div>

    <div class="container-full featured-props-container px-5 d-none d-md-block">

        <!-- Grid row -->
        <div class="row featured_props_row">
            <div class="col-12">
                <div id="featured_props_div">
                    @yield('featured_listings')
                </div>
            </div>
        </div>
        <!-- Grid row -->

    </div>

    <div class="container-full featured-props-container-mobile px-5 d-block d-md-none">

        <!-- Grid row -->
        <div class="row featured_props_row">
            <div class="col-12">
                <div id="featured_props_div_mobile"></div>
            </div>
        </div>
        <!-- Grid row -->

    </div>

    <div class="view jarallax" id="index-parallax2" data-jarallax='{"speed": 0.5}'>
        <div class="full-bg-img">
            <div class="mask rgba-blue-light"></div>


            <div class="container">

                <div class="row">
                    <div class="col-12">
                        <div class="p-2 my-4 rgba-white-strong text-center">
                            <h1 class="h1-responsive red-text my-4">Mortgage and Title Services Offered</h1>
                            <h4 class="h4-responsive red-text mb-4">Get the best deals possible when you choose Heritage Financial and Title</h4>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-12 col-sm-5 mt-2 mb-2">

                        <!-- Card Wider -->
                        <div class="card card-cascade wider">

                            <!-- Card image -->
                            <div class="view view-cascade overlay">
                                <img class="card-img-top mortgage-title" src="/img/mortgage-600x600.png" alt="Heritage Financial">
                                <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!-- Card content -->
                            <div class="card-body card-body-cascade text-center">

                                <!-- Title -->
                                <h4 class="card-title"><strong>Heritage Financial</strong></h4>
                                <!-- Subtitle -->
                                <h5 class="blue-text pb-2"><strong>Mortgage Services</strong></h5>
                                <!-- Text -->
                                <p class="card-text">Heritage Financial offers a $500 Best Rate Guarantee! They will beat any Lender's rate or give you $500! *</p>

                                <a class="btn btn-default" href="/mortgage-information.html">View Details</a>

                            </div>

                        </div>
                        <!-- Card Wider -->

                    </div>

                    <div class="col-2 d-none d-sm-block"></div>

                    <div class="col-12 col-sm-5  mt-2 mb-4">

                        <!-- Card Wider -->
                        <div class="card card-cascade wider">

                            <!-- Card image -->
                            <div class="view view-cascade overlay">
                                <img class="card-img-top mortgage-title" src="/img/title-600x600.png" alt="Heritage Title, LTD">
                                <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!-- Card content -->
                            <div class="card-body card-body-cascade text-center">

                                <!-- Title -->
                                <h4 class="card-title"><strong>Heritage Title, LTD</strong></h4>
                                <!-- Subtitle -->
                                <h5 class="blue-text pb-2"><strong>Title Services</strong></h5>
                                <!-- Text -->
                                <p class="card-text">$695 flat fee to Heritage Title, LTD for all of our services. We will beat any competitors' pricing by $100. **</p>

                                <a class="btn btn-default" href="/title-information.html">View Details</a>

                            </div>

                        </div>
                        <!-- Card Wider -->

                    </div>

                </div>

            </div>



        </div>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="disclaimer">* You must provide a Loan Estimate dated the same day as our rate quote. We will beat the other lender's rate/origination fee/points total or pay you $500 at closing with that lender upon verification of Note and Closing Disclosure. The above reimbursements will be made at time of settlement only with heritage Title, LTD. IT will be reflected as a credit towards closing costs on your Closing Disclosure. This offer is subject to lender approval. <br>
                ** $695 does not include title insurance and 3rd party fees. No other discounts or coupons may be applied to this price. This guarantee/discount does not apply to title insurance or 3rd party fees.</div>
            </div>
        </div>
    </div>
@endsection