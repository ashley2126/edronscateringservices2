   <div class="box">
        <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">
                <strong>Packages</strong>
            </h2>
            <hr>
        </div>

        @foreach($packages->chunk(3) as $items)
               <div class="row"> 
               @foreach($items as $item )
                     <div class="col-sm-4 text-center">
                        <img class="img-responsive" src="css/img/simple.jpg" alt="">
                        <h3>{{ $item->name }}
                        <br>
                            <small>3 Main course + one Pasta or Pansit and One Vegetables + Desert tle</small>
                        </h3>
                        <u><a href="#">See More..</a></u>
                    </div>
               @endforeach 
               </div>
        @endforeach

       
        <div class="clearfix"></div>
    </div>