@extends('app')

@section('content')
<div class="container">
<center>
<h1>
We keep your URL simple
</h1>
<h5>
Drive engagement, boost clicks and discover your brand with bae.url
</h5>
</center>
</div>

           <section style="padding-top:3ch">
                <div class="container-fluid d-flex align-items-center justify-content-center h-100">
                        <form class="form" method="post" action="{{URL::to('/create')}}">
                        <input name="_token" type="hidden" value="{{csrf_token()}}">
                        <div class="form-row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control form-control-lg text-color input" type="text" name="long_url" placeholder="paste or type in url" autofocus autocomplete="off">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                    <input class="form-control form-control-lg text-color input" type="text" name="custom_url" placeholder="Customise URL(optional)">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 align-items-center justify-content-center">
                                    <button type="submit" class="btn btn-lg btn-primary">CUSTOMIZE NOW</button>
                                </div>
                            </div>
                        </form>
        
                    </div>
           </section>

            <!--Section: Best Features-->
            <section id="best-features" class="text-center">

                <!-- Heading -->
                <h2 class="mb-3" style="padding-top: 50px">Best Features</h2>

                <!--Grid row-->
                <div class="row d-flex justify-content-center mb-4">

                    <!--Grid column-->
                    <div class="col-md-8">

                        <!-- Description -->
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi voluptate hic provident nulla repellat
                            facere esse molestiae ipsa labore porro minima quam quaerat rem, natus repudiandae debitis est
                            sit pariatur.</p>

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-4 mb-1">
                        <i class="fa fa-line-chart fa-4x blue-text"></i>
                        <h4 class="my-2">Analytics</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima
                            assumenda deleniti hic.</p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4 mb-1">
                        <i class="fa fa-link fa-4x blue-text"></i>
                        <h4 class="my-2">Customised links</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima
                            assumenda deleniti hic.</p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4 mb-1">
                        <i class="fa fa-mobile fa-4x blue-text"></i>
                        <h4 class="my-2">Mobile friendly</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima
                            assumenda deleniti hic.</p>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!--Section: Best Features-->

            <hr class="my-4">
            @stop