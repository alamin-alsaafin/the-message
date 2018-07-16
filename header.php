<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title></title>
        <link rel="shortcut icon" href="img/fav-icon.ico" type="image/x-icon" />
        <link href="css/other/bootstrap.min.css" rel="stylesheet">
      
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/animate.css">

        <link rel="stylesheet" type="text/css" href="css/other/slick.css"/>
        <link rel="stylesheet" href="css/font-awesome-4.6.3/css/font-awesome.min.css">
        <link href="css/other/style.css" rel="stylesheet">
</head>
<style type="text/css">
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
  .header-menu
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
  .header-menu > ul > li > a
  {
      font-size: 16px;
      /*font-weight: bold;*/
    /* -webkit-transform: perspective(1px) translateZ(0);
      transform: perspective(1px) translateZ(0);
      box-shadow: 0 0 1px transparent;
      position: relative;
      overflow: hidden;*/
      
  }
  /*.header-menu > ul > li > a:before {
  content: "";
  position: absolute;
  z-index: -1;
  left: 50%;
  right: 50%;
  bottom: 0;
  background: #fff;
  height: 1px;
  -webkit-transition-property: left, right;
  transition-property: left, right;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
}*/
/*.header-menu > ul > li >a:hover:before, .header-menu > ul > li> a:focus:before, .header-menu > ul > li >a:active:before {
  left: 0;
  right: 0;
}*/

  .header-menu  a:hover,
  .header-menu  a:focus
  {
    color: #fff;
  }
  .header-menu ul li a i
  {
    margin-right: 10px;
  }
  .header-menu > ul > li > ul 
  {
        text-align: left;
        margin-left: 40px;
  }
  .header-menu > ul > li > ul > li
  {
    margin-bottom: -13px;
  }
  .header-menu > ul > li > ul > li > a
  {
    -webkit-transform: perspective(1px) translateZ(0);
    transform: perspective(1px) translateZ(0);
    box-shadow: 0 0 1px transparent;
    position: relative;
    -webkit-transition-property: color;
    transition-property: color;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    padding: 5px 2px ;
  }
  .header-menu > ul > li > ul > li > a:hover
  {
    color: #000 !important;
  }
  .header-menu > ul > li > ul > li >a:before {
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
  -webkit-transform-origin: 0 20%;
  transform-origin: 0 20%;
  -webkit-transition-property: transform;
  transition-property: transform;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
}
.header-menu > ul > li > ul > li>a:hover, .header-menu > ul > li > ul > li>a:focus,
.header-menu > ul > li > ul > li>a:active {
  color: white;
}
.header-menu > ul > li > ul > li>a:hover:before, .header-menu > ul > li > ul > li>a:focus:before, 
.header-menu > ul > li > ul > li>a:active:before {
  -webkit-transform: scaleX(1);
  transform: scaleX(1);
}

  /*.header-menu > ul > li > ul > li::before
  {
    content: "-";
    color: #fff;
    font-size: 15px;
    margin-right: 5px;
  }*/
  .header-menu > ul > li > ul > li > a
  {
    font-size: 16px;
  }
  .header-menu > ul > li > ul > li > ul
  {
    position: absolute;
    margin-left: 62%;
    text-align: left;
    font-size: 14px;
    top: 28.5%;
    display: none;
  }
  .header-menu > ul > li > ul > li:hover > ul
  {
    display: block;
  }
  .header-menu > ul > li > ul > li > ul > li > a
  {
    font-size: 14px;
  }
  .header-menu .line
  {
    background: #fff;
    color: #fff;
    width: 25%;
    border-bottom: 1px #fff solid;
    transform: rotate(90deg);
    bottom: 48%;
    position: absolute;
    right: 36%;
  }
  /******************/
</style>