<!DOCTYPE html>
<head>
<title>Laravel 5 Employee Records</title>
<style type="text/css">

body{
background-color:#fff;
margin:40px;
font:16px/24px normal Oxygen,sans-serif;
color:#4F5155
}

a{
color:#039;
background-color:transparent;
font-weight:400
}


h1{
color:#444;
background-color:transparent;
border-bottom:1px solid #D0D0D0;
font-size:19px;
font-weight:400;
margin:0 0 14px;
padding:14px 15px 10px
}

code{
font-family:Consolas,Monaco,Courier New,Courier,monospace;
font-size:12px;
background-color:#f9f9f9;
border:1px solid #D0D0D0;
color:#002166;
display:block;
margin:14px 0;
padding:12px 10px
}

#body{
margin:0 15px
}
p.footer{
text-align:right;
font-size:11px;
border-top:1px solid #D0D0D0;
line-height:32px;
padding:0 10px;
margin:20px 0 0
}

#container{
margin:10px;
border:1px solid #D0D0D0;
box-shadow:0 0 8px #D0D0D0
}

</style>
</head>
<body>
<div id="container">

<h1>My Laravel 5 practice</h1>

<br /><br /><center>
@include('activity2/register')
<br /><br /></center>

<div id="body">
@yield('body')
</div>

<p class="footer">
<a href="#">Visit my page</a>
</p>

</div>
</body>
</html>
