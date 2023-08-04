<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>PayRoll</title>
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
       <link rel="stylesheet" type="text/css" href="https://unpkg.com/lightpick@latest/css/lightpick.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
     <script type="module">
      $('#select2').select2();
        $('.input-details').css("display","none");
        $('.view-details').css("display","none");
        $('#btn-check').click(function() {
         //$("#btn-apps").is(':checked')
         $('.view-details').css("display","none");
           if ($(this).is(':checked')) {
             $('.view-list-details').css({opacity: 1.0,display:"none"}).animate({opacity: 0})
             $('.input-details').css({opacity: 0.0, display: "block"}).animate({opacity: 1}, 1000);
           }else{
              ($("#btn-apps").is(':checked')===true) ? $('.view-details').css({opacity: 0.0, display: "block"}).animate({opacity: 1}, 500) : $('.view-list-details').css({opacity: 0.0, display: "block"}).animate({opacity: 1}, 1000);
             $('.input-details').css({opacity: 1.0,display:"none"}).animate({opacity: 0})
           }
         });

        $("#btn-apps").click(function() {
         $('.input-details').css("display","none");
           if ($(this).is(':checked')) {
             $('.view-list-details').css({opacity: 1.0,display:"none"}).animate({opacity: 0})
             $('.view-details').css({opacity: 0.0, display: "block"}).animate({opacity: 1}, 500);
           }else{
             $('.view-list-details').css({opacity: 0.0, display: "block"}).animate({opacity: 1}, 500);
             $('.view-details').css({opacity: 1.0,display:"none"}).animate({opacity: 0})      
           }
         });

         $("#btn-menu").click(function() {
            $('.input-details').css("display","none");
           if ($(this).is(':checked')) {
            $('.view-list-details').css({opacity: 0.0, display: "block"}).animate({opacity: 1}, 500);
             $('.view-details').css({opacity: 1.0,display:"none"}).animate({opacity: 0}) 
           }else{
             $('.view-list-details').css({opacity: 1.0,display:"none"}).animate({opacity: 0})
             $('.view-details').css({opacity: 0.0, display: "block"}).animate({opacity: 1}, 500);     
           }
         });
         
         /**
          * Show spinner
          * NOTE: css is defined in resources/sass
          * This file is compiled via webmix
          */
         // $(window).on('beforeunload', function(){
             
         //         $('#pageLoader').show();
             
         //     });
             
         //     $(function () {
             
         //         $('#pageLoader').hide();
         //     });

         $(window).on('beforeunload', function(){
                   @if(isset($loader))
                     $('#pageLoader').show();
         @endif
                 
                 });
                 
                 $(function () {
                 
                     $('#pageLoader').hide();
                 })

     </script>
   </head>
   <body>
      <div>

         @include('layouts.sidebar.sidebar')
         <div>
         @include('layouts.navbar.header')
         @include('layouts.container.content')

         </div>
       </div>
          <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/lightpick@latest/lightpick.js"></script>
    <script>
    var picker = new Lightpick({ field: document.getElementById('datepicker') });
</script>
   </body>
</html>