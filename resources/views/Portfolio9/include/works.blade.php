{{--<section class="news text-center" id="work">--}}
{{--    <div class="container">--}}
{{--        <h3 class="heading text-capitalize"> My works </h3>--}}
{{--        <p class="subs mt-4">Proin ac fermentum est. Cras mi ipsum, consectetur.</p>--}}
{{--        <div class="row news-grids mt-5">--}}
{{--            @foreach($projects as $project)--}}
{{--            <div class="col-lg-3 col-md-6 card-group newsgrid1">--}}

{{--                <div class="newsgrid_tp new_grd">--}}
{{--                    <img src="{{asset($project->project_image)}}" alt="news image" class="img-fluid">--}}
{{--                    <div class="news_bt">--}}
{{--                        <h4>{{$project->project_name}}</h4>--}}
{{--                        <p class="mt-4">{{$project->project_description}}</p>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--            @endforeach--}}

{{--            <div class="col-lg-4 col-md-6  newsgrid2">--}}
{{--                <div class="newsgrid_tp new_grd1">--}}
{{--                    <img src="{{asset('Portfolio9')}}/images/g2.jpg" alt="news image" class="img-fluid">--}}
{{--                    <div class="news_bt">--}}
{{--                        <h4>Dolor sit</h4>--}}
{{--                        <p class="mt-4">  Nulla pellentesque mi non </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-md-6  newsgrid5">--}}
{{--                <div class="newsgrid_tp new_grd1">--}}
{{--                    <img src="{{asset('Portfolio9')}}/images/g3.jpg" alt="news image" class="img-fluid">--}}
{{--                    <div class="news_bt">--}}
{{--                        <h4>Adipisicing</h4>--}}
{{--                        <p class="mt-4">  Nulla pellentesque mi non </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-lg-4 col-md-6 mt-md-5 mt-5 newsgrid1">--}}
{{--                <div class="newsgrid_tp new_grd">--}}
{{--                    <img src="{{asset('Portfolio9')}}/images/g4.jpg" alt="news image" class="img-fluid">--}}
{{--                    <div class="news_bt">--}}
{{--                        <h4>Eius eum </h4>--}}
{{--                        <p class="mt-4">  Nulla pellentesque mi non </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-md-6 mt-md-5 mt-5 newsgrid2">--}}
{{--                <div class="newsgrid_tp new_grd1">--}}
{{--                    <img src="{{asset('Portfolio9')}}/images/g5.jpg" alt="news image" class="img-fluid">--}}
{{--                    <div class="news_bt">--}}
{{--                        <h4>Consectetur</h4>--}}
{{--                        <p class="mt-4">  Nulla pellentesque mi non </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-md-6 mt-md-5 mt-5 newsgrid2">--}}
{{--                <div class="newsgrid_tp new_grd1">--}}
{{--                    <img src="{{asset('Portfolio9')}}/images/g6.jpg" alt="news image" class="img-fluid">--}}
{{--                    <div class="news_bt">--}}
{{--                        <h4>Pellentesque</h4>--}}
{{--                        <p class="mt-4">  Nulla pellentesque mi non </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


{{--    <div class="container">--}}
{{--        <h3 class="heading text-capitalize"> My works </h3>--}}
{{--        <p class="subs mt-4">Proin ac fermentum est. Cras mi ipsum, consectetur.</p>--}}


{{--        <div class="">--}}
{{--            @foreach($projects as $project)--}}
{{--            <div class="card">--}}
{{--                <img class="card-img-top" src="{{asset($project->project_image)}}" alt="Card image cap">--}}
{{--                <div class="card-body">--}}
{{--                    <h5 class="card-title">{{$project->project_name}}</h5>--}}
{{--                    <p class="card-text">{{$project->project_description}}</p>--}}
{{--                </div>--}}
{{--                <div class="card-footer">--}}
{{--                    <small class="text-muted">Last updated 3 mins ago</small>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}


{{--    </div>--}}




{{--</section>--}}


<section class="page-section pt-5 bg-dark" id="works">
    <div class="container text-center pb-5">

            <div class="pb-5 pt-5">
                <h2 class="heading text-capitalize text-white"> My works </h2>
                <p class="subs mt-4">Proin ac fermentum est. Cras mi ipsum, consectetur.</p>
            </div>
        <div class="row text-center">
            @foreach($projects as $project)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top pt-3" height="225" width="200" src="{{asset($project->project_image)}}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">{{$project->project_name}}</h4>
                        <p class="card-text">{{$project->project_description}}</p>
                    </div>
                    <div class="card-footer">
                        <a href="https://hpfdesigns.com" class="btn btn-primary" target="_blank">Find Out More!</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>






<!-- Portfolio Grid-->
{{--<section class="page-section bg-light" id="works">--}}
{{--    <div class="container">--}}
{{--        <div class="text-center">--}}
{{--            <h2 class="section-heading text-uppercase">Works</h2>--}}
{{--            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-4 col-sm-6 mb-4">--}}
{{--                <div class="works-item">--}}
{{--                    <a class="works-link" data-toggle="modal" href="#worksModal1">--}}
{{--                        <div class="works-hover">--}}
{{--                            <div class="works-hover-content"><i class="fas fa-plus fa-3x"></i></div>--}}
{{--                        </div>--}}
{{--                        <img class="img-fluid" src="{{asset($project->project_image)}}" alt="" />--}}
{{--                    </a>--}}
{{--                    <div class="works-caption">--}}
{{--                        <div class="works-caption-heading">Threads</div>--}}
{{--                        <div class="works-caption-subheading text-muted">Illustration</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
