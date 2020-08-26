<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
       
       <title>{{ config('app.name', 'Laravel') }}</title>
       
           @include('layouts.head')
       </head>
<body>
    <div id="app">
    @include('layouts.header')
           
        <main class="py-4">
           @include('includes.messages')
            @yield('content')
        </main>
    </div>

    @include('layouts.footer')    
    @include('layouts.footer-script') 

    @yield('script')

       <script type="text/javascript">
         $(".like").click(function(){
        var id = this.id;   // Getting Button id
         var split_id = id.split("_");

        var text = split_id[0];
        var pid = split_id[1];  // postid
        var h=text+"_"+pid;
         var type = 0;
        // if(text == "like0"){
        //     type = 0;
        // }
        if (text == "like1") {
            type=1;
        }else{
            type=2;
        }
       
// alert(text)


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
        var id = this.id;   // Getting Button id
         var split_id = id.split("_");

        var text = split_id[0];
        var pid = split_id[1];  // postid
        var h=text+"_"+pid;
         var status = 0;
        // if(text == "like0"){
        //     type = 0;
        // }
        if (text == "fav1") {
            status=1;
        }else{
            status=2;
        }
       
// alert(status)


 $.ajax({
        type:'get',
        url:'{{URL::to('/add-favour')}}',
       data: {id:pid},
            dataType: 'json',
        success:function(response){
            console.log(response);
            console.log(status)
            // $("#"+h).text(response); 
            // alert(status);
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
