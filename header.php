<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title></title>
        <link href="css/nav.css" rel="stylesheet" />
        <link rel="shortcut icon" href="img/fav-icon.ico" type="image/x-icon" />
        <link href="css/other/bootstrap.min.css" rel="stylesheet">
      
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/animate.css">

        <link rel="stylesheet" type="text/css" href="css/other/slick.css"/>
        <link rel="stylesheet" href="css/font-awesome-4.6.3/css/font-awesome.min.css">
        <link href="css/other/style.css" rel="stylesheet">
</head>
<style type="text/css">

.header-menu  .panel-body ul > li > a
   {
    font-size: 17px !important;
    height: 20px !important;
    line-height: 20px !important;
   }
   .header-menu a:hover
   {
    color: #000 !important;
   }

   /* Sweep To Right */
.hvr-sweep-to-right {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  box-shadow: 0 0 1px transparent;
  position: relative;
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
}
.hvr-sweep-to-right:before {
  content: "";
  position: absolute;
  z-index: -1;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: #fff;
  -webkit-transform: scaleX(0);
  transform: scaleX(0);
  -webkit-transform-origin: 0 50%;
  transform-origin: 0 50%;
  -webkit-transition-property: transform;
  transition-property: transform;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
}
.hvr-sweep-to-right:hover, .hvr-sweep-to-right:focus, .hvr-sweep-to-right:active {
  color: white;
}
.hvr-sweep-to-right:hover:before, .hvr-sweep-to-right:focus:before, .hvr-sweep-to-right:active:before {
  -webkit-transform: scaleX(1);
  transform: scaleX(1);
}
.Self-Pride 
{
    background-color: #fff !important;
    color: #989898 !important;
    /*padding: 10px;*/
}
.slider
{
    background-repeat: no-repeat !important;
    background-attachment: fixed !important;
    background-position: center top !important;
    min-height: 671px !important;
}
.footer-logo
{
  width: 7% !important;
}
footer h2
{
  font-size: 23px !important;
}
.search-input
{
      background: #fff !important;
      border: 2px #665300 solid !important;
      border-bottom: 4px #665300 solid !important;
}
.search-input:focus
{
  outline: none !important;
}
.modal-open .modal
{
  background: #000 !important;
}
.search-btnbtn
{
    position: fixed !important;
    line-height: 39px !important;
   /* top: 3.2% !important;*/
}
  @media (max-width: 1199px)
  {
      .search-btnbtn
     {
      top: 1.5% !important;
      right: 6% !important;
      } 
     .search-input
      {
         
      width: 161% !important;
      margin-left: -32% !important;
      }
  }
  @media (max-width: 991px)
  {
    .search-btnbtn {
        top: 2% !important;
        right: 8% !important;
    }
    .search-input {
        width: 148% !important;
        margin-left: -24% !important;
    }
    .search-icon-icon
    {
        right:-22% !important;
    }
  }
  @media (max-width: 767px)
  {
    .search-btnbtn {
    top: 10% !important;
    right: 5.4% !important;
    }
    .search-input {
    width: 90% !important;
    margin-left: 5% !important;
    margin-top: 55% !important;
    }
    .search-icon-icon
    {
      margin-top: 62% !important;
      right: 8% !important;
    }
  }
  /*New Menu css code*/
  /*.header-menu
  {
    background: rgba(0,0,0,0.97) !important;
  }
  .header-menu > ul
  {
    margin-top: -5%;
  }
  .header-menu > ul > li
  {
      text-align: left !important;
      /*text-decoration: underline !important;*/
  }

.navigation .nav-inner > ul li a 
{
    color: #002 !important;
}
.navigation .submenu a, .navigation .submenu h1, .navigation .submenu h2, .navigation .submenu h3, .navigation .submenu p
{
  color: #002 !important;
}
.innerUL
{
  text-align: left !important;
}
.innerUL li
{
  font-size: 18px !important;
}
.navigation .nav-inner > ul > li a .menu__item-name
{
  font-weight: normal !important;
  
}
</style>