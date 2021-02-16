<div class="agileits-services bg-dark" id="services">
    <div class="container">
        <h2 class="heading text-capitalize text-white"> Services </h2>
        <p class="subs mt-4">Proin ac fermentum est. Cras mi ipsum, consectetur.</p>
        <div class="agileits-services-row row pt-md-5 pb-5  text-center">
            @foreach($services as $service)
            <div class="col-lg-4 bg-dark">
                <div class="agileits-services-grids bg-secondary mt-lg-0 mt-md-0 mt-5">
                    <img src="{{asset($service->service_image)}}" alt="news image" class="img-fluid" height="90" width="90">
                    <h4 class="mt-4 mb-4">{{$service->service_name}}</h4>
                    <p class="text-light">{{$service->service_description}}</p>

                </div>
            </div>

            @endforeach
        </div>
        <p class="subs mb-4">Proin ac fermentum est. Cras mi ipsum, consectetur?</p>
        <a href="#work" class="banner-button btn">My recent work</a>
    </div>
</div>
{{--@foreach($services as $service)--}}
{{--<div class="box">--}}
{{--    <img src="{{asset($service->service_image)}}" alt="news image" class="img-fluid">--}}
{{--    <h4 class="mt-4 mb-4">{{$service->service_name}}</h4>--}}
{{--    <p class="text-light">{{$service->service_description}}</p>--}}
{{--    <a href="javascript:void();" class="readmore-btn">Read More</a>--}}

{{--</div>--}}
{{--@endforeach--}}

<!-- Services-->
{{--<section class="page-section pb-5" id="services">--}}
{{--    <div class="container pt-5">--}}
{{--        <div class="text-center">--}}
{{--            <h2 class="section-heading text-uppercase">Services</h2>--}}
{{--            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>--}}
{{--        </div>--}}
{{--        <div class="row text-center mt-lg-0 mt-5">--}}
{{--            @foreach($services as $service)--}}
{{--            <div class="col-md-4 pb-5">--}}
{{--                        <span class="fa-stack fa-4x">--}}
{{--                            <i class="fas fa-circle fa-stack-2x text-primary"></i>--}}
{{--                            <img src="{{asset($service->service_image)}}" alt="news image" class="img-fluid">--}}
{{--                        </span>--}}
{{--                <h4 class="my-3">{{$service->service_name}}</h4>--}}
{{--                <p class="text-muted">{{$service->service_description}}</p>--}}
{{--            </div>--}}
{{--            @endforeach--}}

{{--        </div>--}}
{{--        <div class="text-center">--}}
{{--            <p class="subs mb-4 text-center">Proin ac fermentum est. Cras mi ipsum, consectetur?</p>--}}
{{--            <a href="#work" class="banner-button btn">My recent work</a>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--</section>--}}
