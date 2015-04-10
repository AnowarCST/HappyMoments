<!DOCTYPE html> 
<html  lang="en">


<head>

    <style>
        /* Loading Spinner */
        .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
    </style>
    <style type="text/css">
    .bg-gradient-9 {
/*background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodâ€¦IgaGVpZ2h0PSIxIiBmaWxsPSJ1cmwoI2dyYWQtdWNnZy1nZW5lcmF0ZWQpIiAvPgo8L3N2Zz4=);*/
background: -moz-linear-gradient(-65deg,#3498db 0,#3498db 100%);
background: -webkit-gradient(linear,left top,right bottom,color-stop(0%,#3498db),color-stop(100%,#3498db));
background: -webkit-linear-gradient(-65deg,#3498db 0,#3498db 100%);
background: -o-linear-gradient(-65deg,#3498db 0,#3498db 100%);
background: -ms-linear-gradient(-65deg,#3498db 0,#3498db 100%);
background: linear-gradient(154deg,#3498db 0,#3498db 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#3498db', endColorstr='#3498db', GradientType=1);
}
</style>


    <meta charset="UTF-8">
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<title> Admin Section </title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Favicons -->

<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/icons/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/icons/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/icons/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/icons/apple-touch-icon-57-precomposed.png">
<link rel="stylesheet" type="text/css" href="http:///cdn.datatables.net/1.10.5/css/jquery.dataTables.min.css">
<link rel="shortcut icon" href="assets/images/icons/favicon.png">

{{ HTML::style('assets/admin-all-demo.css') }}
 
    <!-- JS Core -->
{{ HTML::script('assets/js-core.js') }}
    





    <script type="text/javascript">
        $(window).load(function(){
            setTimeout(function() {
                $('#loading').fadeOut( 400, "linear" );
            }, 300);
        });

    </script>



</head>
