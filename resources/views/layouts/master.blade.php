<!DOCTYPE html>
<html class="no-js">
    <head>

    <title>{{ config('app.name', 'FOB') }}</title>

        @include('layouts.head')
    </head>
    <style type="text/css">

    </style>
    <body>
        <div class="preloader">
            <div class="preloader_image"></div>
        </div>

        <!-- search modal -->
        <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">
                    <i class="rt-icon2-cross2"></i>
                </span>
            </button>
            <div class="widget widget_search">
                <form method="get" class="searchform search-form form-inline" action="./">
                    <div class="form-group">
                        <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
                    </div>
                    <button type="submit" class="theme_button">Search</button>
                </form>
            </div>
        </div>

        <!-- Unyson messages modal -->
        <div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
            <div class="fw-messages-wrap ls with_padding">
                <!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
                <!--
            <ul class="list-unstyled">
                <li>Message To User</li>
            </ul>
            -->

            </div>
        </div>
        <!-- eof .modal -->

                <!-- wrappers for visual page editor and boxed version of template -->
                <div id="canvas">
                    <div id="box_wrapper">


                        @include('layouts.header')

                        <section class="intro_section page_mainslider ds">

                        </section>

                        @yield('content')

                    </div>
                </div>

                    @include('layouts.footer')
                    @include('layouts.footer-script')

    <script type="text/javascript">
         $(".like").click(function(){
        var id = this.id;
         var split_id = id.split("_");

        var text = split_id[0];
        var pid = split_id[1];
        var h=text+"_"+pid;
         var type = 0;

        if (text == "like1") {
            type=1;
        }else{
            type=2;
        }
 $.ajax({
        type:'get',
        url:'{{URL::to('/add-like')}}',
       data: {id:pid},
            dataType: 'json',
        success:function(response){
            console.log(response);
            console.log(type)
            $("#"+h).text(response);

             if (type==1) {
                 $("#like1_"+pid).css({"background-color": "#1a75ff","color": "white"});
                        $("#like1_"+pid).attr("id", "like2_"+pid);
            }
            if (type==2) {
                 $("#like2_"+pid).css({"background-color": "#d9d9d9"});
                       $("#like2_"+pid).attr("id", "like1_"+pid);

            }



           }
        });
        });
    </script>

     <script type="text/javascript">
         $(".fav").click(function(){
        var id = this.id;
         var split_id = id.split("_");

        var text = split_id[0];
        var pid = split_id[1];
        var h=text+"_"+pid;
         var status = 0;

        if (text == "fav1") {
            status=1;
        }else{
            status=2;
        }


 $.ajax({
        type:'get',
        url:'{{URL::to('/add-favour')}}',
       data: {id:pid},
            dataType: 'json',
        success:function(response){
            console.log(response);
            console.log(status)

             if (status==1) {
                 $("#fav1_"+pid).css({"background-color": "#1a75ff","color": "white"});
                        $("#fav1_"+pid).attr("id", "fav2_"+pid);
            }
            if (status==2) {
                 $("#fav2_"+pid).css({"background-color": "#d9d9d9","color": "black"});
                       $("#fav2_"+pid).attr("id", "fav1_"+pid);

            }



           }
        });
        });
    </script>
    </body>
</html>
