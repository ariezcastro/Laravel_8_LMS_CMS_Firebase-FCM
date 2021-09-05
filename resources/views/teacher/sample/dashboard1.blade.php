@if(session()->has('id_number'))
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900' rel='stylesheet' type='text/css'>

    <!-- Page title -->
    <title>Mauaque Resettlement HighSchool Master Admin</title>

    <!-- Vendor styles -->
    <link rel="stylesheet" href="{{asset('vendor/fontawesome/css/font-awesome.css')}}"/>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('vendor/animate.css/animate.css')}}"/>
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.css')}}"/>
    <link rel="stylesheet" href="{{asset('vendor/toastr/toastr.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('vendor/datatables/datatables.min.css')}}"/>

    <!-- App styles -->
    <link rel="stylesheet" href="{{asset('styles/pe-icons/pe-icon-7-stroke.css')}}"/>
    <link rel="stylesheet" href="{{asset('styles/pe-icons/helper.css')}}"/>
    <link rel="stylesheet" href="{{asset('styles/stroke-icons/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('styles/style.css')}}">
    <style type="text/css">
        /*body.nav-toggle .navigation{
            
        }
        body{
            background: none;
            background-attachment: none;
            background-repeat: none;
        }
        .content:before{
            background-image: -webkit-radial-gradient(top, circle cover, #ffffff 0%, #ffffff 70%);
        }
        .content{
            margin-left: 0 !important;
        }
        .navbar-default{
            border-bottom:1px solid #dce6f9;
        }
        .navbar-default .navbar-brand, .navbar-default .navbar-brand:focus{
            background:#4c84ff;
        }
        .view-header .header-icon{
            color:#4c84ff ;
        }
        h3{
            color:#4c84ff ;
        }*/
        .btn:active,
.btn.active {
  box-shadow: none;
}
.btn {
  color: inherit;
  background-color: transparent;
}
.buttons-margin .btn {
  margin-bottom: 5px;
}
.btn-default {
  border-color: #585d6e;
}
.btn.btn-w-sm {
  min-width: 80px;
}
.btn.btn-w-md {
  min-width: 120px;
}
.btn.btn-w-lg {
  min-width: 160px;
}
.btn.btn-rounded {
  border-radius: 50px;
}
.btn.btn-squared {
  border-radius: 0;
}
.btn-accent {
  color: #949ba2;
  background-color: transparent;
  border-color: #f6a821;
}
.btn-accent:focus,
.btn-accent.focus {
  color: #ffffff;
  background-color: rgba(246, 168, 33, 0.1);
  border-color: #f6a821;
  outline: 0;
  box-shadow: none;
}
.btn-accent:hover {
  color: #ffffff;
  background-color: rgba(246, 168, 33, 0.1);
  border-color: #f6a821;
}
.btn-accent:active,
.btn-accent.active,
.open > .dropdown-toggle.btn-accent {
  color: #ffffff;
  background-color: rgba(246, 168, 33, 0.1);
  border-color: #f6a821;
}
.btn-accent:active:hover,
.btn-accent.active:hover,
.open > .dropdown-toggle.btn-accent:hover,
.btn-accent:active:focus,
.btn-accent.active:focus,
.open > .dropdown-toggle.btn-accent:focus,
.btn-accent:active.focus,
.btn-accent.active.focus,
.open > .dropdown-toggle.btn-accent.focus {
  color: #ffffff;
  background-color: rgba(246, 168, 33, 0.1);
  border-color: #f8bb52;
  outline: 0;
  box-shadow: none;
}
.btn-accent:active,
.btn-accent.active,
.open > .dropdown-toggle.btn-accent {
  background-image: none;
}
.btn-accent.disabled:hover,
.btn-accent[disabled]:hover,
fieldset[disabled] .btn-accent:hover,
.btn-accent.disabled:focus,
.btn-accent[disabled]:focus,
fieldset[disabled] .btn-accent:focus,
.btn-accent.disabled.focus,
.btn-accent[disabled].focus,
fieldset[disabled] .btn-accent.focus {
  background-color: rgba(246, 168, 33, 0.1);
  border-color: #f6a821;
}
.btn-accent .badge {
  color: transparent;
  background-color: #949ba2;
}
.btn-default {
  color: #949ba2;
  background-color: transparent;
  border-color: #616779;
}
.btn-default:focus,
.btn-default.focus {
  color: #ffffff;
  background-color: rgba(97, 103, 121, 0.1);
  border-color: #616779;
  outline: 0;
  box-shadow: none;
}
.btn-default:hover {
  color: #ffffff;
  background-color: rgba(97, 103, 121, 0.1);
  border-color: #616779;
}
.btn-default:active,
.btn-default.active,
.open > .dropdown-toggle.btn-default {
  color: #ffffff;
  background-color: rgba(97, 103, 121, 0.1);
  border-color: #616779;
}
.btn-default:active:hover,
.btn-default.active:hover,
.open > .dropdown-toggle.btn-default:hover,
.btn-default:active:focus,
.btn-default.active:focus,
.open > .dropdown-toggle.btn-default:focus,
.btn-default:active.focus,
.btn-default.active.focus,
.open > .dropdown-toggle.btn-default.focus {
  color: #ffffff;
  background-color: rgba(97, 103, 121, 0.1);
  border-color: #798094;
  outline: 0;
  box-shadow: none;
}
.btn-default:active,
.btn-default.active,
.open > .dropdown-toggle.btn-default {
  background-image: none;
}
.btn-default.disabled:hover,
.btn-default[disabled]:hover,
fieldset[disabled] .btn-default:hover,
.btn-default.disabled:focus,
.btn-default[disabled]:focus,
fieldset[disabled] .btn-default:focus,
.btn-default.disabled.focus,
.btn-default[disabled].focus,
fieldset[disabled] .btn-default.focus {
  background-color: rgba(97, 103, 121, 0.1);
  border-color: #616779;
}
.btn-default .badge {
  color: transparent;
  background-color: #949ba2;
}
.btn-primary {
  color: #949ba2;
  background-color: transparent;
  border-color: #0f83c9;
}
.btn-primary:focus,
.btn-primary.focus {
  color: #ffffff;
  background-color: rgba(15, 131, 201, 0.1);
  border-color: #0f83c9;
  outline: 0;
  box-shadow: none;
}
.btn-primary:hover {
  color: #ffffff;
  background-color: rgba(15, 131, 201, 0.1);
  border-color: #0f83c9;
}
.btn-primary:active,
.btn-primary.active,
.open > .dropdown-toggle.btn-primary {
  color: #ffffff;
  background-color: rgba(15, 131, 201, 0.1);
  border-color: #0f83c9;
}
.btn-primary:active:hover,
.btn-primary.active:hover,
.open > .dropdown-toggle.btn-primary:hover,
.btn-primary:active:focus,
.btn-primary.active:focus,
.open > .dropdown-toggle.btn-primary:focus,
.btn-primary:active.focus,
.btn-primary.active.focus,
.open > .dropdown-toggle.btn-primary.focus {
  color: #ffffff;
  background-color: rgba(15, 131, 201, 0.1);
  border-color: #1d9fee;
  outline: 0;
  box-shadow: none;
}
.btn-primary:active,
.btn-primary.active,
.open > .dropdown-toggle.btn-primary {
  background-image: none;
}
.btn-primary.disabled:hover,
.btn-primary[disabled]:hover,
fieldset[disabled] .btn-primary:hover,
.btn-primary.disabled:focus,
.btn-primary[disabled]:focus,
fieldset[disabled] .btn-primary:focus,
.btn-primary.disabled.focus,
.btn-primary[disabled].focus,
fieldset[disabled] .btn-primary.focus {
  background-color: rgba(15, 131, 201, 0.1);
  border-color: #0f83c9;
}
.btn-primary .badge {
  color: transparent;
  background-color: #949ba2;
}
.btn-success {
  color: #949ba2;
  background-color: transparent;
  border-color: #1bbf89;
}
.btn-success:focus,
.btn-success.focus {
  color: #ffffff;
  background-color: rgba(27, 191, 137, 0.1);
  border-color: #1bbf89;
  outline: 0;
  box-shadow: none;
}
.btn-success:hover {
  color: #ffffff;
  background-color: rgba(27, 191, 137, 0.1);
  border-color: #1bbf89;
}
.btn-success:active,
.btn-success.active,
.open > .dropdown-toggle.btn-success {
  color: #ffffff;
  background-color: rgba(27, 191, 137, 0.1);
  border-color: #1bbf89;
}
.btn-success:active:hover,
.btn-success.active:hover,
.open > .dropdown-toggle.btn-success:hover,
.btn-success:active:focus,
.btn-success.active:focus,
.open > .dropdown-toggle.btn-success:focus,
.btn-success:active.focus,
.btn-success.active.focus,
.open > .dropdown-toggle.btn-success.focus {
  color: #ffffff;
  background-color: rgba(27, 191, 137, 0.1);
  border-color: #2ce1a5;
  outline: 0;
  box-shadow: none;
}
.btn-success:active,
.btn-success.active,
.open > .dropdown-toggle.btn-success {
  background-image: none;
}
.btn-success.disabled:hover,
.btn-success[disabled]:hover,
fieldset[disabled] .btn-success:hover,
.btn-success.disabled:focus,
.btn-success[disabled]:focus,
fieldset[disabled] .btn-success:focus,
.btn-success.disabled.focus,
.btn-success[disabled].focus,
fieldset[disabled] .btn-success.focus {
  background-color: rgba(27, 191, 137, 0.1);
  border-color: #1bbf89;
}
.btn-success .badge {
  color: transparent;
  background-color: #949ba2;
}
.btn-info {
  color: #949ba2;
  background-color: transparent;
  border-color: #56c0e0;
}
.btn-info:focus,
.btn-info.focus {
  color: #ffffff;
  background-color: rgba(86, 192, 224, 0.1);
  border-color: #56c0e0;
  outline: 0;
  box-shadow: none;
}
.btn-info:hover {
  color: #ffffff;
  background-color: rgba(86, 192, 224, 0.1);
  border-color: #56c0e0;
}
.btn-info:active,
.btn-info.active,
.open > .dropdown-toggle.btn-info {
  color: #ffffff;
  background-color: rgba(86, 192, 224, 0.1);
  border-color: #56c0e0;
}
.btn-info:active:hover,
.btn-info.active:hover,
.open > .dropdown-toggle.btn-info:hover,
.btn-info:active:focus,
.btn-info.active:focus,
.open > .dropdown-toggle.btn-info:focus,
.btn-info:active.focus,
.btn-info.active.focus,
.open > .dropdown-toggle.btn-info.focus {
  color: #ffffff;
  background-color: rgba(86, 192, 224, 0.1);
  border-color: #81d0e8;
  outline: 0;
  box-shadow: none;
}
.btn-info:active,
.btn-info.active,
.open > .dropdown-toggle.btn-info {
  background-image: none;
}
.btn-info.disabled:hover,
.btn-info[disabled]:hover,
fieldset[disabled] .btn-info:hover,
.btn-info.disabled:focus,
.btn-info[disabled]:focus,
fieldset[disabled] .btn-info:focus,
.btn-info.disabled.focus,
.btn-info[disabled].focus,
fieldset[disabled] .btn-info.focus {
  background-color: rgba(86, 192, 224, 0.1);
  border-color: #56c0e0;
}
.btn-info .badge {
  color: transparent;
  background-color: #949ba2;
}
.btn-warning {
  color: #949ba2;
  background-color: transparent;
  border-color: #f7af3e;
}
.btn-warning:focus,
.btn-warning.focus {
  color: #ffffff;
  background-color: rgba(247, 175, 62, 0.1);
  border-color: #f7af3e;
  outline: 0;
  box-shadow: none;
}
.btn-warning:hover {
  color: #ffffff;
  background-color: rgba(247, 175, 62, 0.1);
  border-color: #f7af3e;
}
.btn-warning:active,
.btn-warning.active,
.open > .dropdown-toggle.btn-warning {
  color: #ffffff;
  background-color: rgba(247, 175, 62, 0.1);
  border-color: #f7af3e;
}
.btn-warning:active:hover,
.btn-warning.active:hover,
.open > .dropdown-toggle.btn-warning:hover,
.btn-warning:active:focus,
.btn-warning.active:focus,
.open > .dropdown-toggle.btn-warning:focus,
.btn-warning:active.focus,
.btn-warning.active.focus,
.open > .dropdown-toggle.btn-warning.focus {
  color: #ffffff;
  background-color: rgba(247, 175, 62, 0.1);
  border-color: #f9c36f;
  outline: 0;
  box-shadow: none;
}
.btn-warning:active,
.btn-warning.active,
.open > .dropdown-toggle.btn-warning {
  background-image: none;
}
.btn-warning.disabled:hover,
.btn-warning[disabled]:hover,
fieldset[disabled] .btn-warning:hover,
.btn-warning.disabled:focus,
.btn-warning[disabled]:focus,
fieldset[disabled] .btn-warning:focus,
.btn-warning.disabled.focus,
.btn-warning[disabled].focus,
fieldset[disabled] .btn-warning.focus {
  background-color: rgba(247, 175, 62, 0.1);
  border-color: #f7af3e;
}
.btn-warning .badge {
  color: transparent;
  background-color: #949ba2;
}
.btn-danger {
  color: #949ba2;
  background-color: transparent;
  border-color: #db524b;
}
.btn-danger:focus,
.btn-danger.focus {
  color: #ffffff;
  background-color: rgba(219, 82, 75, 0.1);
  border-color: #db524b;
  outline: 0;
  box-shadow: none;
}
.btn-danger:hover {
  color: #ffffff;
  background-color: rgba(219, 82, 75, 0.1);
  border-color: #db524b;
}
.btn-danger:active,
.btn-danger.active,
.open > .dropdown-toggle.btn-danger {
  color: #ffffff;
  background-color: rgba(219, 82, 75, 0.1);
  border-color: #db524b;
}
.btn-danger:active:hover,
.btn-danger.active:hover,
.open > .dropdown-toggle.btn-danger:hover,
.btn-danger:active:focus,
.btn-danger.active:focus,
.open > .dropdown-toggle.btn-danger:focus,
.btn-danger:active.focus,
.btn-danger.active.focus,
.open > .dropdown-toggle.btn-danger.focus {
  color: #ffffff;
  background-color: rgba(219, 82, 75, 0.1);
  border-color: #e47b75;
  outline: 0;
  box-shadow: none;
}
.btn-danger:active,
.btn-danger.active,
.open > .dropdown-toggle.btn-danger {
  background-image: none;
}
.btn-danger.disabled:hover,
.btn-danger[disabled]:hover,
fieldset[disabled] .btn-danger:hover,
.btn-danger.disabled:focus,
.btn-danger[disabled]:focus,
fieldset[disabled] .btn-danger:focus,
.btn-danger.disabled.focus,
.btn-danger[disabled].focus,
fieldset[disabled] .btn-danger.focus {
  background-color: rgba(219, 82, 75, 0.1);
  border-color: #db524b;
}
.btn-danger .badge {
  color: transparent;
  background-color: #949ba2;
}
.btn-default:hover,
.btn-default:active,
.btn-default:active:focus,
.btn-default:focus,
.btn-default.active {
  background-color: #3d404c;
}
.btn-link:hover,
.btn-link:active,
.btn-link:active:focus,
.btn-link:focus,
.btn-link.active {
  color: #f6a821;
  text-decoration: none;
}
.dropdown-menu > .active > a,
.dropdown-menu > .active > a:hover,
.dropdown-menu > .active > a:focus {
  color: #262626;
  text-decoration: none;
  background-color: #f5f5f5;
  outline: 0;
}
.typeahead.dropdown-menu li.active a strong {
  color: #f6a821;
}
.content > div {
  opacity: 0;
}
.pace {
  -webkit-pointer-events: none;
  pointer-events: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
  z-index: 2000;
  position: fixed;
  margin: auto;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  height: 5px;
  width: 200px;
  background: #fff;
  overflow: hidden;
}
.pace .pace-progress {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -ms-box-sizing: border-box;
  -o-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
  -ms-transform: translate3d(0, 0, 0);
  -o-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
  max-width: 200px;
  z-index: 2000;
  display: block;
  position: absolute;
  top: 0;
  right: 100%;
  height: 100%;
  width: 100%;
  background: #f6a821;
}
.pace.pace-inactive {
  display: none;
}
.pace-done .content > div {
  opacity: 1;
}
.text-muted {
  color: #868e96;
}
.text-accent {
  color: #f6a821;
}
.text-primary {
  color: #0f83c9;
}
.text-success {
  color: #1bbf89;
}
.text-info {
  color: #56c0e0;
}
.text-warning {
  color: #f7af3e;
}
.text-danger {
  color: #db524b;
}
/* MARGINS & PADDINGS */
.p-xxs {
  padding: 5px !important;
}
.p-xs {
  padding: 10px !important;
}
.p-sm {
  padding: 15px !important;
}
.p-m {
  padding: 20px !important;
}
.p-md {
  padding: 25px !important;
}
.p-lg {
  padding: 30px !important;
}
.p-xl {
  padding: 40px !important;
}
.m-xxs {
  margin: 2px 4px;
}
.m-xs {
  margin: 5px;
}
.m-sm {
  margin: 10px;
}
.m {
  margin: 15px;
}
.m-md {
  margin: 20px;
}
.m-lg {
  margin: 30px;
}
.m-xl {
  margin: 50px;
}
.m-n {
  margin: 0 !important;
}
.m-l-none {
  margin-left: 0 !important;
}
.m-l-xs {
  margin-left: 5px;
}
.m-l-sm {
  margin-left: 10px;
}
.m-l {
  margin-left: 15px;
}
.m-l-md {
  margin-left: 20px;
}
.m-l-lg {
  margin-left: 30px;
}
.m-l-xl {
  margin-left: 40px;
}
.m-l-n-xxs {
  margin-left: -1px;
}
.m-l-n-xs {
  margin-left: -5px;
}
.m-l-n-sm {
  margin-left: -10px;
}
.m-l-n {
  margin-left: -15px;
}
.m-l-n-md {
  margin-left: -20px;
}
.m-l-n-lg {
  margin-left: -30px;
}
.m-l-n-xl {
  margin-left: -40px;
}
.m-t-none {
  margin-top: 0 !important;
}
.m-t-xxs {
  margin-top: 1px;
}
.m-t-xs {
  margin-top: 5px;
}
.m-t-sm {
  margin-top: 10px;
}
.m-t {
  margin-top: 15px;
}
.m-t-md {
  margin-top: 20px;
}
.m-t-lg {
  margin-top: 30px;
}
.m-t-xl {
  margin-top: 40px;
}
.m-t-xxl {
  margin-top: 50px;
}
.m-t-xxxl {
  margin-top: 60px;
}
.m-t-n-xxs {
  margin-top: -1px;
}
.m-t-n-xs {
  margin-top: -5px;
}
.m-t-n-sm {
  margin-top: -10px;
}
.m-t-n {
  margin-top: -15px;
}
.m-t-n-md {
  margin-top: -20px;
}
.m-t-n-lg {
  margin-top: -30px;
}
.m-t-n-xl {
  margin-top: -40px;
}
.m-r-none {
  margin-right: 0 !important;
}
.m-r-xxs {
  margin-right: 1px;
}
.m-r-xs {
  margin-right: 5px;
}
.m-r-sm {
  margin-right: 10px;
}
.m-r {
  margin-right: 15px;
}
.m-r-md {
  margin-right: 20px;
}
.m-r-lg {
  margin-right: 30px;
}
.m-r-xl {
  margin-right: 40px;
}
.m-r-n-xxs {
  margin-right: -1px;
}
.m-r-n-xs {
  margin-right: -5px;
}
.m-r-n-sm {
  margin-right: -10px;
}
.m-r-n {
  margin-right: -15px;
}
.m-r-n-md {
  margin-right: -20px;
}
.m-r-n-lg {
  margin-right: -30px;
}
.m-r-n-xl {
  margin-right: -40px;
}
.m-b-none {
  margin-bottom: 0 !important;
}
.m-b-xxs {
  margin-bottom: 1px;
}
.m-b-xs {
  margin-bottom: 5px;
}
.m-b-sm {
  margin-bottom: 10px;
}
.m-b {
  margin-bottom: 15px;
}
.m-b-md {
  margin-bottom: 20px;
}
.m-b-lg {
  margin-bottom: 30px;
}
.m-b-xl {
  margin-bottom: 40px;
}
.m-b-n-xxs {
  margin-bottom: -1px;
}
.m-b-n-xs {
  margin-bottom: -5px;
}
.m-b-n-sm {
  margin-bottom: -10px;
}
.m-b-n {
  margin-bottom: -15px;
}
.m-b-n-md {
  margin-bottom: -20px;
}
.m-b-n-lg {
  margin-bottom: -30px;
}
.m-b-n-xl {
  margin-bottom: -40px;
}
.space-15 {
  margin: 15px 0;
}
.space-20 {
  margin: 20px 0;
}
.space-25 {
  margin: 25px 0;
}
.space-30 {
  margin: 30px 0;
}
.label-accent {
  background-color: #f6a821;
}
body {
  background: #2f323b;
  font-family: 'Roboto', sans-serif;
  color: #949ba2;
}
.content {
  margin-top: 60px;
  margin-left: 200px;
  position: relative;
  padding: 30px;
  transition: margin-left 0.3s ease-out;
  -webkit-transition: margin-left 0.3s ease-out;
}
.content:before {
  content: '';
  position: fixed;
  top: 0;
  bottom: 0;
  z-index: -2;
  left: 0;
  right: 0;
  background-image: -webkit-radial-gradient(top, circle cover, #393b45 0%, #2d3038 70%);
  background-image: -moz-radial-gradient(center, circle cover, #393b45 0%, #2d3038 70%);
  background-image: -o-radial-gradient(center, circle cover, #393b45 0%, #2d3038 70%);
  background-image: radial-gradient(center, circle cover, #393b45 0%, #2d3038 70%);
  background-position: 50%, 50%;
}
.navigation {
  margin-top: 60px;
  background-color: #24262d;
  width: 200px;
  position: absolute;
  left: 0;
  bottom: 0;
  top: 0;
  transition: left 0.3s ease-out;
  -webkit-transition: left 0.3s ease-out;
}
.navigation nav {
  background-color: #2a2d35;
}
.navigation:before {
  transition: left 0.3s ease-out;
  -webkit-transition: left 0.3s ease-out;
  content: '';
  position: fixed;
  top: 0;
  bottom: 0;
  z-index: -1;
  left: 0;
  background-color: #24262d;
  width: 200px;
}
body.nav-toggle .content {
  margin-left: 0;
}
body.nav-toggle .navigation {
  left: -200px;
}
body.nav-toggle .navigation:before {
  left: -200px;
}
@media (max-width: 767px) {
  .content {
    margin-left: 0;
    padding: 30px 0 10px 0;
  }
  .navigation {
    left: -200px;
    z-index: 10;
  }
  .navigation:before {
    left: -200px;
  }
  body.nav-toggle .content {
    margin-left: 0;
  }
  body.nav-toggle .navigation {
    left: 0;
    z-index: 10;
  }
  body.nav-toggle .navigation:before {
    left: 0;
  }
}
body.blank .content {
  margin: 0;
}
.container-center {
  max-width: 400px;
  margin: 10% auto 0;
  padding: 20px;
}
.container-center.sm {
  max-width: 200px;
}
.container-center.md {
  max-width: 600px;
}
.container-center.lg {
  max-width: 800px;
}
/* Various */
a {
  color: #f6a821;
  text-decoration: none;
}
a:hover,
a:focus {
  color: #f8bb52;
  outline: none;
}
hr {
  margin-top: 20px;
  margin-bottom: 20px;
  border: 0;
  border-top: 1px solid #3d404c;
}
code {
  padding: 2px 4px;
  font-size: 90%;
  color: #f6a821;
  background-color: #24262d;
  border-radius: 3px;
}
pre {
  font-size: 90%;
  color: #949ba2;
  background-color: #24262d;
  border-radius: 3px;
  border: none;
}
mark {
  background-color: #e9e599;
  border-radius: 2px;
  padding: .1em .4em;
}
label {
  color: #ffffff;
  font-weight: 500;
}
sup {
  font-size: 12px;
  top: -0.8em;
}
.help-block {
  color: #6d757d;
}
.bs-example {
  background-color: #2f323b;
  padding: 10px;
  border-radius: 3px;
}
.show-grid [class^="col-"] {
  background-color: #2f323b !important;
  border: 1px solid #3d404c;
  padding-bottom: 10px;
  padding-top: 10px;
}
.slight {
  font-size: 11px;
  font-weight: 300;
}
.show-grid {
  margin: 10px 0 !important;
}
.row {
  margin-left: -10px;
  margin-right: -10px;
}
.col-xs-1,
.col-sm-1,
.col-md-1,
.col-lg-1,
.col-xs-2,
.col-sm-2,
.col-md-2,
.col-lg-2,
.col-xs-3,
.col-sm-3,
.col-md-3,
.col-lg-3,
.col-xs-4,
.col-sm-4,
.col-md-4,
.col-lg-4,
.col-xs-5,
.col-sm-5,
.col-md-5,
.col-lg-5,
.col-xs-6,
.col-sm-6,
.col-md-6,
.col-lg-6,
.col-xs-7,
.col-sm-7,
.col-md-7,
.col-lg-7,
.col-xs-8,
.col-sm-8,
.col-md-8,
.col-lg-8,
.col-xs-9,
.col-sm-9,
.col-md-9,
.col-lg-9,
.col-xs-10,
.col-sm-10,
.col-md-10,
.col-lg-10,
.col-xs-11,
.col-sm-11,
.col-md-11,
.col-lg-11,
.col-xs-12,
.col-sm-12,
.col-md-12,
.col-lg-12 {
  padding-left: 10px;
  padding-right: 10px;
}
/* Icons */
.font-example-box:hover {
  color: #ffffff;
}
.font-example-box {
  text-align: center;
  min-height: 90px;
  margin: 10px 0;
  font-size: 42px;
}
.font-example-box i {
  font-size: 22px;
}
.icon-example-name {
  display: block;
  font-size: 11px;
}
.back-link {
  float: left;
  width: 100%;
  margin: 10px;
}
/* Images */
img.image-xs {
  width: 16px;
  height: 16px;
}
img.image-md {
  width: 32px;
  height: 32px;
}
img.image-lg {
  width: 64px;
  height: 64px;
}
img.image-xl {
  width: 128px;
  height: 128px;
}
/* UI Sortable */
.ui-sortable .panel-body {
  cursor: move;
}
.ui-sortable-placeholder {
  border: 1px dashed #535868 !important;
  visibility: visible !important;
}
.navbar {
  min-height: 60px;
}
.navbar-default .navbar-brand,
.navbar-default .navbar-brand:focus {
  width: 200px;
  background-color: #f6a821;
  height: 60px;
  padding: 20px 25px;
  font-weight: 400;
  letter-spacing: 10px;
  color: #FFFFFF;
}
.navbar-default .navbar-brand {
  color: #FFFFFF;
}
.navbar-default .navbar-brand:hover {
  color: #FFFFFF;
  background-color: #f5a212;
}
.navbar-brand span {
  letter-spacing: normal;
  float: right;
  font-size: 12px;
  margin-left: -15px;
  color: #fce2b4;
}
.navbar-default {
  border-bottom: none;
  background-color: #FFFFFF;
  box-shadow: 0px 0px 21px #161616;
}
.left-nav-toggle {
  float: left;
  padding: 9px 10px 8px 25px;
}
.left-nav-toggle:hover a {
  color: #f6a821;
}
.left-nav-toggle a {
  font-size: 30px;
  color: #949ba2;
}
.navbar-default .navbar-nav > li > a {
  color: #6a727a;
}
.left-nav-toggle a:hover,
.left-nav-toggle a:focus {
  text-decoration: none;
}
.navbar-form {
  margin-top: 11px;
  padding: 0;
}
.navbar-form input.form-control {
  border: none;
  box-shadow: none;
  color: #949ba2;
}
.navbar-form input.form-control::-webkit-input-placeholder {
  color: #6f7780;
}
.navbar-form input.form-control:-moz-placeholder {
  color: #6f7780;
}
.navbar-form input.form-control::-moz-placeholder {
  color: #6f7780;
}
.navbar-form input.form-control:-ms-input-placeholder {
  color: #6f7780;
}
.navbar-nav > li > a {
  padding: 20px 15px;
  text-transform: uppercase;
  font-weight: 500;
}
.navbar-nav > li:first-child > a {
  padding-left: 0;
}
.navbar-nav > li:last-child > a {
  padding: 10px 25px 10px 15px;
}
.navbar-nav.navbar-right a .label {
  margin: -5px 0 0 5px;
}
.profil-link img {
  height: 40px;
  margin-left: 10px;
}
.profil-link .profile-address {
  text-transform: lowercase;
}
#mobile-menu {
  display: none;
}
@media (max-width: 767px) {
  #mobile-menu {
    display: block;
  }
}
#mobile-menu {
  float: right;
}
#mobile-menu .left-nav-toggle {
  padding-right: 25px;
}
.luna-nav.nav {
  padding-top: 15px;
}
.luna-nav.nav li > a,
.luna-nav.nav .nav-category {
  padding: 8px 15px 8px 25px;
  margin: 0 0;
}
.luna-nav.nav .nav-info {
  margin-top: 50px;
  padding: 20px 25px 25px 25px;
  font-size: 12px;
  background-color: #24262d;
}
.luna-nav.nav .nav-info i {
  font-size: 34px;
}
.luna-nav.nav .nav-second li > a {
  padding-left: 40px;
}
.luna-nav.nav li.active .nav-second li > a {
  padding-left: 40px;
  border-left: none;
  color: #848c94;
}
.luna-nav.nav li.active .nav-second li.active a {
  padding-left: 34px;
  border-left: 6px solid #c37e08;
  color: #c0c4c8;
}
.luna-nav.nav li.active .nav-second li a:hover {
  color: #c0c4c8;
}
.luna-nav.nav li > a {
  color: #848c94;
}
.luna-nav.nav li.active a {
  border-left: 6px solid #f6a821;
  padding-left: 19px;
  color: #c0c4c8;
}
.luna-nav.nav li a:hover,
.luna-nav.nav li a:focus {
  color: #c0c4c8;
  background: inherit;
}
.luna-nav.nav .nav-category {
  color: #FFFFFF;
  margin-top: 10px;
}
.luna-nav.nav .sub-nav-icon {
  float: right;
  transform: rotate(90deg);
  -webkit-transform: rotate(90deg);
  -moz-transform: rotate(90deg);
  -o-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
}
.panel {
  background-color: transparent;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  color: #949ba2;
  border-radius: 3px;
}
.panel .panel-body {
  padding: 5px 15px 15px 15px;
}
.panel.panel-filled .panel-body {
  padding-top: 10px;
}
.panel .panel-footer {
  background-color: transparent;
  border: none;
}
.panel > .panel-heading {
  color: #ffffff;
}
.panel-tools {
  display: inline-block;
  float: right;
  margin-top: 0;
  padding: 0;
  position: relative;
}
.panel-tools a {
  margin-left: 2px;
  color: #949ba2;
  cursor: pointer;
}
.panel-tools a:hover {
  color: #ffffff;
}
.panel.panel-c-white {
  border-left: 3px solid #949ba2;
}
.panel.panel-c-accent {
  border-left: 3px solid #f6a821;
}
.panel.panel-c-primary {
  border-left: 3px solid #0f83c9;
}
.panel.panel-c-warning {
  border-left: 3px solid #f7af3e;
}
.panel.panel-c-info {
  border-left: 3px solid #56c0e0;
}
.panel.panel-c-success {
  border-left: 3px solid #1bbf89;
}
.panel.panel-c-danger {
  border-left: 3px solid #db524b;
}
.panel.panel-b-accent {
  background-color: #f6a821;
  color: #ffffff;
}
.panel.panel-b-white {
  background-color: white;
  color: #61686f;
}
.panel.panel-b-white .panel-heading {
  color: #61686f;
}
.panel.panel-b-white .panel-footer {
  color: #61686f;
}
.panel.panel-filled {
  background-color: rgba(68, 70, 79, 0.5);
}
.view-header {
  margin: 20px 0;
  min-height: 50px;
  padding: 0 15px;
}
.view-header .header-icon {
  font-size: 60px;
  color: #f6a821;
  width: 68px;
  float: left;
  margin-top: -8px;
  line-height: 0;
}
.view-header .header-title {
  margin-left: 68px;
}
.view-header .header-title h3 {
  margin-bottom: 2px;
}
.panel.collapsed .panel-body,
.panel.collapsed .panel-footer {
  display: none;
}
.panel.collapsed .fa.fa-chevron-up:before {
  content: "\f078";
}
.panel.collapsed .fa.fa-chevron-down:before {
  content: "\f077";
}
.checkbox {
  padding-left: 20px;
}
.checkbox label {
  display: inline-block;
  vertical-align: middle;
  position: relative;
  padding-left: 5px;
}
.checkbox label::before {
  content: "";
  display: inline-block;
  position: absolute;
  width: 17px;
  height: 17px;
  left: 0;
  margin-left: -20px;
  border: 1px solid #cccccc;
  border-radius: 3px;
  background-color: #fff;
  -webkit-transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
  -o-transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
  transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
}
.checkbox label::after {
  display: inline-block;
  position: absolute;
  width: 16px;
  height: 16px;
  left: 0;
  top: 0;
  margin-left: -20px;
  padding-left: 3px;
  padding-top: 1px;
  font-size: 11px;
  color: #555555;
}
.checkbox input[type="checkbox"],
.checkbox input[type="radio"] {
  opacity: 0;
  z-index: 1;
  cursor: pointer;
}
.checkbox input[type="checkbox"]:focus + label::before,
.checkbox input[type="radio"]:focus + label::before {
  outline: thin dotted;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
.checkbox input[type="checkbox"]:checked + label::after,
.checkbox input[type="radio"]:checked + label::after {
  font-family: "FontAwesome";
  content: "\f00c";
}
.checkbox input[type="checkbox"]:indeterminate + label::after,
.checkbox input[type="radio"]:indeterminate + label::after {
  display: block;
  content: "";
  width: 10px;
  height: 3px;
  background-color: #555555;
  border-radius: 2px;
  margin-left: -16.5px;
  margin-top: 7px;
}
.checkbox input[type="checkbox"]:disabled,
.checkbox input[type="radio"]:disabled {
  cursor: not-allowed;
}
.checkbox input[type="checkbox"]:disabled + label,
.checkbox input[type="radio"]:disabled + label {
  opacity: 0.65;
}
.checkbox input[type="checkbox"]:disabled + label::before,
.checkbox input[type="radio"]:disabled + label::before {
  background-color: #eeeeee;
  cursor: not-allowed;
}
.checkbox.checkbox-circle label::before {
  border-radius: 50%;
}
.checkbox.checkbox-inline {
  margin-top: 0;
}
.checkbox-primary input[type="checkbox"]:checked + label::before,
.checkbox-primary input[type="radio"]:checked + label::before {
  background-color: #0f83c9;
  border-color: #0f83c9;
}
.checkbox-primary input[type="checkbox"]:checked + label::after,
.checkbox-primary input[type="radio"]:checked + label::after {
  color: #fff;
}
.checkbox-danger input[type="checkbox"]:checked + label::before,
.checkbox-danger input[type="radio"]:checked + label::before {
  background-color: #db524b;
  border-color: #db524b;
}
.checkbox-danger input[type="checkbox"]:checked + label::after,
.checkbox-danger input[type="radio"]:checked + label::after {
  color: #fff;
}
.checkbox-info input[type="checkbox"]:checked + label::before,
.checkbox-info input[type="radio"]:checked + label::before {
  background-color: #56c0e0;
  border-color: #56c0e0;
}
.checkbox-info input[type="checkbox"]:checked + label::after,
.checkbox-info input[type="radio"]:checked + label::after {
  color: #fff;
}
.checkbox-warning input[type="checkbox"]:checked + label::before,
.checkbox-warning input[type="radio"]:checked + label::before {
  background-color: #f7af3e;
  border-color: #f7af3e;
}
.checkbox-warning input[type="checkbox"]:checked + label::after,
.checkbox-warning input[type="radio"]:checked + label::after {
  color: #fff;
}
.checkbox-success input[type="checkbox"]:checked + label::before,
.checkbox-success input[type="radio"]:checked + label::before {
  background-color: #1bbf89;
  border-color: #1bbf89;
}
.checkbox-success input[type="checkbox"]:checked + label::after,
.checkbox-success input[type="radio"]:checked + label::after {
  color: #fff;
}
.checkbox-primary input[type="checkbox"]:indeterminate + label::before,
.checkbox-primary input[type="radio"]:indeterminate + label::before {
  background-color: #0f83c9;
  border-color: #0f83c9;
}
.checkbox-primary input[type="checkbox"]:indeterminate + label::after,
.checkbox-primary input[type="radio"]:indeterminate + label::after {
  background-color: #fff;
}
.checkbox-danger input[type="checkbox"]:indeterminate + label::before,
.checkbox-danger input[type="radio"]:indeterminate + label::before {
  background-color: #db524b;
  border-color: #db524b;
}
.checkbox-danger input[type="checkbox"]:indeterminate + label::after,
.checkbox-danger input[type="radio"]:indeterminate + label::after {
  background-color: #fff;
}
.checkbox-info input[type="checkbox"]:indeterminate + label::before,
.checkbox-info input[type="radio"]:indeterminate + label::before {
  background-color: #56c0e0;
  border-color: #56c0e0;
}
.checkbox-info input[type="checkbox"]:indeterminate + label::after,
.checkbox-info input[type="radio"]:indeterminate + label::after {
  background-color: #fff;
}
.checkbox-warning input[type="checkbox"]:indeterminate + label::before,
.checkbox-warning input[type="radio"]:indeterminate + label::before {
  background-color: #f7af3e;
  border-color: #f7af3e;
}
.checkbox-warning input[type="checkbox"]:indeterminate + label::after,
.checkbox-warning input[type="radio"]:indeterminate + label::after {
  background-color: #fff;
}
.checkbox-success input[type="checkbox"]:indeterminate + label::before,
.checkbox-success input[type="radio"]:indeterminate + label::before {
  background-color: #1bbf89;
  border-color: #1bbf89;
}
.checkbox-success input[type="checkbox"]:indeterminate + label::after,
.checkbox-success input[type="radio"]:indeterminate + label::after {
  background-color: #fff;
}
.radio {
  padding-left: 20px;
}
.radio label {
  display: inline-block;
  vertical-align: middle;
  position: relative;
  padding-left: 5px;
}
.radio label::before {
  content: "";
  display: inline-block;
  position: absolute;
  width: 17px;
  height: 17px;
  left: 0;
  margin-left: -20px;
  border: 1px solid #cccccc;
  border-radius: 50%;
  background-color: #fff;
  -webkit-transition: border 0.15s ease-in-out;
  -o-transition: border 0.15s ease-in-out;
  transition: border 0.15s ease-in-out;
}
.radio label::after {
  display: inline-block;
  position: absolute;
  content: " ";
  width: 11px;
  height: 11px;
  left: 3px;
  top: 3px;
  margin-left: -20px;
  border-radius: 50%;
  background-color: #555555;
  -webkit-transform: scale(0, 0);
  -ms-transform: scale(0, 0);
  -o-transform: scale(0, 0);
  transform: scale(0, 0);
  -webkit-transition: -webkit-transform 0.1s cubic-bezier(0.8, -0.33, 0.2, 1.33);
  -moz-transition: -moz-transform 0.1s cubic-bezier(0.8, -0.33, 0.2, 1.33);
  -o-transition: -o-transform 0.1s cubic-bezier(0.8, -0.33, 0.2, 1.33);
  transition: transform 0.1s cubic-bezier(0.8, -0.33, 0.2, 1.33);
}
.radio input[type="radio"] {
  opacity: 0;
  z-index: 1;
  cursor: pointer;
}
.radio input[type="radio"]:focus + label::before {
  outline: thin dotted;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
.radio input[type="radio"]:checked + label::after {
  -webkit-transform: scale(1, 1);
  -ms-transform: scale(1, 1);
  -o-transform: scale(1, 1);
  transform: scale(1, 1);
}
.radio input[type="radio"]:disabled {
  cursor: not-allowed;
}
.radio input[type="radio"]:disabled + label {
  opacity: 0.65;
}
.radio input[type="radio"]:disabled + label::before {
  cursor: not-allowed;
}
.radio.radio-inline {
  margin-top: 0;
}
.radio-primary input[type="radio"] + label::after {
  background-color: #0f83c9;
}
.radio-primary input[type="radio"]:checked + label::before {
  border-color: #0f83c9;
}
.radio-primary input[type="radio"]:checked + label::after {
  background-color: #0f83c9;
}
.radio-danger input[type="radio"] + label::after {
  background-color: #db524b;
}
.radio-danger input[type="radio"]:checked + label::before {
  border-color: #db524b;
}
.radio-danger input[type="radio"]:checked + label::after {
  background-color: #db524b;
}
.radio-info input[type="radio"] + label::after {
  background-color: #56c0e0;
}
.radio-info input[type="radio"]:checked + label::before {
  border-color: #56c0e0;
}
.radio-info input[type="radio"]:checked + label::after {
  background-color: #56c0e0;
}
.radio-warning input[type="radio"] + label::after {
  background-color: #f7af3e;
}
.radio-warning input[type="radio"]:checked + label::before {
  border-color: #f7af3e;
}
.radio-warning input[type="radio"]:checked + label::after {
  background-color: #f7af3e;
}
.radio-success input[type="radio"] + label::after {
  background-color: #1bbf89;
}
.radio-success input[type="radio"]:checked + label::before {
  border-color: #1bbf89;
}
.radio-success input[type="radio"]:checked + label::after {
  background-color: #1bbf89;
}
input[type="checkbox"].styled:checked + label:after,
input[type="radio"].styled:checked + label:after {
  font-family: 'FontAwesome';
  content: "\f00c";
}
input[type="checkbox"] .styled:checked + label::before,
input[type="radio"] .styled:checked + label::before {
  color: #fff;
}
input[type="checkbox"] .styled:checked + label::after,
input[type="radio"] .styled:checked + label::after {
  color: #fff;
}
.pagination > li > a,
.pagination > li > span {
  color: #949ba2;
  background-color: transparent;
  border: 1px solid #585d6e;
}
.pagination > li > a:hover,
.pagination > li > span:hover,
.pagination > li > a:focus,
.pagination > li > span:focus {
  color: #ffffff;
  background-color: rgba(97, 103, 121, 0.1);
  border-color: #616779;
}
.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus {
  color: #ffffff;
  background-color: rgba(97, 103, 121, 0.1);
  border-color: #616779;
}
.pagination > .disabled > span,
.pagination > .disabled > span:hover,
.pagination > .disabled > span:focus,
.pagination > .disabled > a,
.pagination > .disabled > a:hover,
.pagination > .disabled > a:focus {
  color: #949ba2;
  background-color: transparent;
  border-color: #4a4f5d;
}
/* Progress bar */
.progress {
  border-radius: 2px;
  margin-bottom: 10px;
}
.progress-bar {
  background-color: #2f323b;
  text-align: right;
  padding-right: 10px;
  color: #949ba2;
}
.progress-small,
.progress-small .progress-bar {
  height: 10px;
}
.progress-bar-primary {
  border-right: 4px solid #0d74b1;
}
.progress-bar-success {
  border-right: 4px solid #18a979;
}
.progress-bar-info {
  border-right: 4px solid #0d74b1;
}
.progress-bar-warning {
  border-right: 4px solid #f6a526;
}
.progress-bar-danger {
  border-right: 4px solid #d73e36;
}
.full .progress-bar-success {
  background-color: #1bbf89;
  border-right: 4px solid #18a979;
}
.full .progress-bar-info {
  background-color: #0f83c9;
  border-right: 4px solid #0d74b1;
}
.full .progress-bar-warning {
  background-color: #f7af3e;
  border-right: 4px solid #f6a526;
}
.full .progress-bar-danger {
  background-color: #db524b;
  border-right: 4px solid #d73e36;
}
.full .progress-bar-primary {
  background-color: #0f83c9;
  border-right: 4px solid #0d74b1;
}
.full .progress-bar {
  color: #ffffff;
}
.modal-content {
  background-color: #21242a;
}
.modal-content .modal-title {
  font-size: 22px;
}
.modal-content .modal-header {
  border-color: #3d404c;
  background-color: #1d1f24;
  padding: 40px 20px;
}
.modal-content .modal-header .close {
  color: #ffffff;
  text-shadow: none;
  filter: alpha(opacity=20);
  opacity: .2;
}
.modal-content .modal-body {
  padding: 40px;
}
.modal-content .modal-footer {
  border-color: #3d404c;
  background-color: #1d1f24;
  padding: 20px;
}
.modal-backdrop.in {
  filter: alpha(opacity=10);
  opacity: .1;
}
h1,
h2,
h3,
h4,
h5,
h6 {
  color: #FFFFFF;
}
h1,
.h1,
h2,
.h2,
h3,
.h3 {
  margin-top: 10px;
}
.c-accent {
  color: #f6a821;
}
.c-white {
  color: #FFFFFF;
}
.c-text {
  color: #949ba2;
}
.font-light {
  font-weight: 300;
}
.font-normal {
  font-weight: 400;
}
.font-bold {
  font-weight: 600;
}
.font-extra-bold {
  font-weight: 700;
}
h1 small,
h2 small,
h3 small,
h4 small,
h5 small,
h6 small,
.h1 small,
.h2 small,
.h3 small,
.h4 small,
.h5 small,
.h6 small,
h1 .small,
h2 .small,
h3 .small,
h4 .small,
h5 .small,
h6 .small,
.h1 .small,
.h2 .small,
.h3 .small,
.h4 .small,
.h5 .small,
.h6 .small {
  color: #a4aab0;
}
.label-default {
  background-color: #44464f;
}
.label-primary {
  background-color: #0f83c9;
}
.label-success {
  background-color: #1bbf89;
}
.label-info {
  background-color: #56c0e0;
}
.label-warning {
  background-color: #f7af3e;
}
.label-danger {
  background-color: #db524b;
}
.badge {
  background-color: transparent;
  border: 1px solid #44464f;
  font-weight: 300;
  color: #aaacb5;
}
.vertical-container {
  /* this class is used to give a max-width to the element it is applied to, and center it horizontally when it reaches that max-width */
  width: 98%;
  margin: 0 auto;
}
.vertical-container::after {
  /* clearfix */
  content: '';
  display: table;
  clear: both;
}
.v-timeline {
  position: relative;
  padding: 0;
  margin-top: 2em;
  margin-bottom: 2em;
}
.v-timeline::before {
  content: '';
  position: absolute;
  top: 0;
  left: 18px;
  height: 100%;
  width: 4px;
  background: #3d404c;
}
.vertical-timeline-content .btn {
  float: right;
}
.vertical-timeline-block {
  position: relative;
  margin: 2em 0;
}
.vertical-timeline-block:after {
  content: "";
  display: table;
  clear: both;
}
.vertical-timeline-block:first-child {
  margin-top: 0;
}
.vertical-timeline-block:last-child {
  margin-bottom: 0;
}
.vertical-timeline-icon {
  position: absolute;
  top: 0;
  left: 0;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  font-size: 16px;
  border: 1px solid #3d404c;
  text-align: center;
  background: #2f323b;
  color: #ffffff;
}
.vertical-timeline-icon i {
  display: block;
  width: 24px;
  height: 24px;
  position: relative;
  left: 50%;
  top: 50%;
  margin-left: -12px;
  margin-top: -9px;
}
.vertical-timeline-content {
  position: relative;
  margin-left: 60px;
  background-color: rgba(68, 70, 79, 0.5);
  border-radius: 0.25em;
  border: 1px solid #3d404c;
}
.vertical-timeline-content:after {
  content: "";
  display: table;
  clear: both;
}
.vertical-timeline-content h2 {
  font-weight: 400;
  margin-top: 4px;
}
.vertical-timeline-content p {
  margin: 1em 0 0 0;
  line-height: 1.6;
}
.vertical-timeline-content .vertical-date {
  font-weight: 500;
  text-align: right;
}
.vertical-date small {
  color: #ffffff;
  font-weight: 400;
}
.vertical-timeline-content:after,
.vertical-timeline-content:before {
  right: 100%;
  top: 20px;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}
.vertical-timeline-content:after {
  border-color: transparent;
  border-right-color: #3d404c;
  border-width: 10px;
  margin-top: -10px;
}
.vertical-timeline-content:before {
  border-color: transparent;
  border-right-color: #3d404c;
  border-width: 11px;
  margin-top: -11px;
}
.vertical-timeline-content h2 {
  font-size: 16px;
}
/* Nestable list */
.dd {
  position: relative;
  display: block;
  margin: 0;
  padding: 0;
  list-style: none;
  line-height: 20px;
}
.dd-list {
  display: block;
  position: relative;
  margin: 0;
  padding: 0;
  list-style: none;
}
.dd-list .dd-list {
  padding-left: 30px;
}
.dd-collapsed .dd-list {
  display: none;
}
.dd-item,
.dd-empty,
.dd-placeholder {
  display: block;
  position: relative;
  margin: 0;
  padding: 0;
  min-height: 20px;
  line-height: 20px;
}
.dd-handle {
  display: block;
  margin: 5px 0;
  padding: 10px 10px;
  color: #949ba2;
  text-decoration: none;
  border: 1px solid #3d404c;
  background-color: rgba(68, 70, 79, 0.5);
  -webkit-border-radius: 3px;
  border-radius: 3px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}
.dd-handle span {
  font-weight: bold;
}
.dd-handle:hover {
  background-color: rgba(68, 70, 79, 0.8);
  cursor: pointer;
}
.dd-item > button {
  display: block;
  position: relative;
  cursor: pointer;
  float: left;
  width: 25px;
  height: 20px;
  margin: 10px 0;
  padding: 0;
  text-indent: 100%;
  white-space: nowrap;
  overflow: hidden;
  border: 0;
  background: transparent;
  font-size: 12px;
  line-height: 1;
  text-align: center;
  font-weight: bold;
}
.dd-item > button:before {
  content: '+';
  display: block;
  position: absolute;
  width: 100%;
  text-align: center;
  text-indent: 0;
}
.dd-item > button[data-action="collapse"]:before {
  content: '-';
}
.dd-placeholder,
.dd-empty {
  margin: 5px 0;
  padding: 0;
  min-height: 30px;
  background: transparent;
  border: 1px dashed #535868;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}
.dd-empty {
  border: 1px dashed #3d404c;
  min-height: 100px;
  background-color: transparent;
  background-size: 60px 60px;
  background-position: 0 0, 30px 30px;
}
.dd-dragel {
  position: absolute;
  z-index: 9999;
  pointer-events: none;
}
.dd-dragel > .dd-item .dd-handle {
  margin-top: 0;
}
.dd-dragel .dd-handle {
  -webkit-box-shadow: 2px 4px 6px 0 rgba(0, 0, 0, 0.1);
  box-shadow: 2px 4px 6px 0 rgba(0, 0, 0, 0.1);
}
/**
* Nestable Extras
*/
.nestable-lists {
  display: block;
  clear: both;
  padding: 30px 0;
  width: 100%;
  border: 0;
  border-top: 2px solid #e4e5e7;
  border-bottom: 2px solid #e4e5e7;
}
#nestable-menu {
  padding: 0;
  margin: 10px 0 20px 0;
}
#nestable-output {
  width: 100%;
  font-size: 0.75em;
  line-height: 1.333333em;
  font-family: open sans, lucida grande, lucida sans unicode, helvetica, arial, sans-serif;
  padding: 5px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}
#nestable-output {
  font-size: 14px;
  padding: 25px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}
.nav-tabs {
  border: none;
}
.nav-tabs > li.active > a,
.nav-tabs > li.active > a:hover,
.nav-tabs > li.active > a:focus {
  background-color: rgba(68, 70, 79, 0.5);
  color: #ffffff;
  border-width: 0 0 1px 0;
}
.tab-pane .panel-body {
  border-top: none;
  background-color: rgba(68, 70, 79, 0.5);
  margin-bottom: 20px;
}
.nav-tabs > li a:hover {
  background: transparent;
  border-color: transparent;
}
.nav-tabs > li > a {
  color: #949ba2;
}
.tabs-below > .nav-tabs,
.tabs-right > .nav-tabs,
.tabs-left > .nav-tabs {
  border-bottom: 0;
}
.tabs-left .panel-body {
  position: static;
}
.tabs-left > .nav-tabs,
.tabs-right > .nav-tabs {
  width: 20%;
}
.tabs-left .panel-body {
  width: 80%;
  margin-left: 20%;
}
.tabs-right .panel-body {
  width: 80%;
  margin-right: 20%;
}
.tab-content > .tab-pane,
.pill-content > .pill-pane {
  display: none;
}
.tab-content > .active,
.pill-content > .active {
  display: block;
}
.tabs-below > .nav-tabs > li {
  margin-bottom: 0;
}
.tabs-below > .nav-tabs > li > a {
  -webkit-border-radius: 0 0 4px 4px;
  -moz-border-radius: 0 0 4px 4px;
  border-radius: 0 0 4px 4px;
}
.tabs-left > .nav-tabs > li,
.tabs-right > .nav-tabs > li {
  float: none;
}
.tabs-left > .nav-tabs > li > a,
.tabs-right > .nav-tabs > li > a {
  margin-right: 0;
  margin-bottom: 3px;
}
.tabs-left > .nav-tabs {
  float: left;
  margin-right: 19px;
}
.tabs-left > .nav-tabs > li > a {
  -webkit-border-radius: 4px 0 0 4px;
  -moz-border-radius: 4px 0 0 4px;
  border-radius: 4px 0 0 4px;
}
.tabs-right > .nav-tabs {
  float: right;
  margin-left: 19px;
}
.tabs-right > .nav-tabs > li > a {
  -webkit-border-radius: 0 4px 4px 0;
  -moz-border-radius: 0 4px 4px 0;
  border-radius: 0 4px 4px 0;
}
.table > thead > tr > th,
.table > tbody > tr > th,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > tbody > tr > td,
.table > tfoot > tr > td {
  border-top: 1px solid #3d404c;
}
.table > thead > tr > th {
  border-bottom: none;
}
.table-striped > tbody > tr:nth-of-type(odd) {
  background-color: rgba(68, 70, 79, 0.5);
}
.table > thead > tr > td.active,
.table > tbody > tr > td.active,
.table > tfoot > tr > td.active,
.table > thead > tr > th.active,
.table > tbody > tr > th.active,
.table > tfoot > tr > th.active,
.table > thead > tr.active > td,
.table > tbody > tr.active > td,
.table > tfoot > tr.active > td,
.table > thead > tr.active > th,
.table > tbody > tr.active > th,
.table > tfoot > tr.active > th {
  background-color: #494b54;
}
.table-hover > tbody > tr:hover {
  background-color: #494b54;
}
.table-bordered,
.table-bordered > thead > tr > th,
.table-bordered > tbody > tr > th,
.table-bordered > tfoot > tr > th,
.table-bordered > thead > tr > td,
.table-bordered > tbody > tr > td,
.table-bordered > tfoot > tr > td {
  border-color: #3d404c;
}
.panel-filled .table > thead > tr > th,
.panel-filled .table > tbody > tr > th,
.panel-filled .table > tfoot > tr > th,
.panel-filled .table > thead > tr > td,
.panel-filled .table > tbody > tr > td,
.panel-filled .table > tfoot > tr > td {
  border-color: #484c5a;
}
.panel-filled .table-bordered,
.panel-filled .table-bordered > thead > tr > th,
.panel-filled .table-bordered > tbody > tr > th,
.panel-filled .table-bordered > tfoot > tr > th,
.panel-filled .table-bordered > thead > tr > td,
.panel-filled .table-bordered > tbody > tr > td,
.panel-filled .table-bordered > tfoot > tr > td {
  border-color: #484c5a;
}
.panel-filled .table-striped > tbody > tr:nth-of-type(odd) {
  background-color: #44464f;
}
.panel-filled .table-hover > tbody > tr:hover {
  background-color: #494b54;
}
th {
  color: #ffffff;
}
.table > thead > tr > td.success,
.table > tbody > tr > td.success,
.table > tfoot > tr > td.success,
.table > thead > tr > th.success,
.table > tbody > tr > th.success,
.table > tfoot > tr > th.success,
.table > thead > tr.success > td,
.table > tbody > tr.success > td,
.table > tfoot > tr.success > td,
.table > thead > tr.success > th,
.table > tbody > tr.success > th,
.table > tfoot > tr.success > th {
  background-color: rgba(27, 191, 137, 0.2);
  border: none;
}
.table-hover > tbody > tr > td.success:hover,
.table-hover > tbody > tr > th.success:hover,
.table-hover > tbody > tr.success:hover > td,
.table-hover > tbody > tr:hover > .success,
.table-hover > tbody > tr.success:hover > th {
  background-color: #18a979;
}
.table > thead > tr > td.info,
.table > tbody > tr > td.info,
.table > tfoot > tr > td.info,
.table > thead > tr > th.info,
.table > tbody > tr > th.info,
.table > tfoot > tr > th.info,
.table > thead > tr.info > td,
.table > tbody > tr.info > td,
.table > tfoot > tr.info > td,
.table > thead > tr.info > th,
.table > tbody > tr.info > th,
.table > tfoot > tr.info > th {
  background-color: rgba(86, 192, 224, 0.2);
  border: none;
}
.table-hover > tbody > tr > td.info:hover,
.table-hover > tbody > tr > th.info:hover,
.table-hover > tbody > tr.info:hover > td,
.table-hover > tbody > tr:hover > .info,
.table-hover > tbody > tr.info:hover > th {
  background-color: #40b8dc;
}
.table > thead > tr > td.warning,
.table > tbody > tr > td.warning,
.table > tfoot > tr > td.warning,
.table > thead > tr > th.warning,
.table > tbody > tr > th.warning,
.table > tfoot > tr > th.warning,
.table > thead > tr.warning > td,
.table > tbody > tr.warning > td,
.table > tfoot > tr.warning > td,
.table > thead > tr.warning > th,
.table > tbody > tr.warning > th,
.table > tfoot > tr.warning > th {
  background-color: rgba(247, 175, 62, 0.2);
  border: none;
}
.table-hover > tbody > tr > td.warning:hover,
.table-hover > tbody > tr > th.warning:hover,
.table-hover > tbody > tr.warning:hover > td,
.table-hover > tbody > tr:hover > .warning,
.table-hover > tbody > tr.warning:hover > th {
  background-color: #f6a526;
}
.table > thead > tr > td.danger,
.table > tbody > tr > td.danger,
.table > tfoot > tr > td.danger,
.table > thead > tr > th.danger,
.table > tbody > tr > th.danger,
.table > tfoot > tr > th.danger,
.table > thead > tr.danger > td,
.table > tbody > tr.danger > td,
.table > tfoot > tr.danger > td,
.table > thead > tr.danger > th,
.table > tbody > tr.danger > th,
.table > tfoot > tr.danger > th {
  background-color: rgba(219, 82, 75, 0.2);
  border: none;
}
.table-hover > tbody > tr > td.danger:hover,
.table-hover > tbody > tr > th.danger:hover,
.table-hover > tbody > tr.danger:hover > td,
.table-hover > tbody > tr:hover > .danger,
.table-hover > tbody > tr.danger:hover > th {
  background-color: #d73e36;
}
div.dt-button-info {
  background-color: #21242a;
  border-radius: 6px;
  border: none;
}
div.dt-button-info h2 {
  background-color: transparent;
  border-color: #3d404c;
}
.table-responsive {
  border-color: #484c5a !important;
}
.table.table-vertical-align-top tbody > tr > td {
  vertical-align: top;
}
.table.table-vertical-align-middle tbody > tr > td {
  vertical-align: middle;
}
.table.table-vertical-align-bottom tbody > tr > td {
  vertical-align: bottom;
}
.alert-success {
  color: #ffffff;
  border-color: #1bbf89;
  background-color: #1bbf89;
}
.alert-success .alert-link {
  color: #1bbf89;
}
.alert-warning {
  color: #ffffff;
  border-color: #f7af3e;
  background-color: #f7af3e;
}
.alert-warning .alert-link {
  color: #f7af3e;
}
.alert-info {
  color: #ffffff;
  border-color: #56c0e0;
  background-color: #56c0e0;
}
.alert-info .alert-link {
  color: #56c0e0;
}
.alert-danger {
  color: #ffffff;
  border-color: #db524b;
  background-color: #db524b;
}
.alert-danger .alert-link {
  color: #db524b;
}
.toast-success {
  color: #ffffff;
  border-color: #1bbf89;
  background-color: #1bbf89;
}
.toast-warning {
  color: #ffffff;
  border-color: #f7af3e;
  background-color: #f7af3e;
}
.toast-info {
  color: #ffffff;
  border-color: #56c0e0;
  background-color: #56c0e0;
}
.toast-error {
  color: #ffffff;
  border-color: #db524b;
  background-color: #db524b;
}
#toast-container > div {
  opacity: 1;
  margin-top: 20px;
  border-radius: 4px;
  padding: 20px 20px 20px 50px;
  -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
  -moz-box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
}
#toast-container > div:hover {
  -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, 0.7);
  -moz-box-shadow: 0 5px 15px rgba(0, 0, 0, 0.7);
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.7);
}
#toast-container.toast-top-right > div {
  margin-top: 60px;
}
.form-control {
  color: #949ba2;
  border: none;
  border-radius: 4px;
  -webkit-box-shadow: none;
  box-shadow: none;
  -webkit-transition: none;
  -o-transition: none;
  transition: none;
  background-color: #494b54;
}
.form-control:focus {
  -webkit-box-shadow: none;
  box-shadow: none;
}
.form-control[disabled],
.form-control[readonly],
fieldset[disabled] .form-control {
  background-color: #2c2e34;
  opacity: 1;
}
.navbar-form .form-control {
  background-color: #ffffff;
}
.has-success .checkbox,
.has-success .checkbox-inline,
.has-success .control-label,
.has-success .help-block,
.has-success .radio,
.has-success .radio-inline,
.has-success.checkbox label,
.has-success.checkbox-inline label,
.has-success.radio label,
.has-success.radio-inline label {
  color: #159269;
}
.has-warning .checkbox,
.has-warning .checkbox-inline,
.has-warning .control-label,
.has-warning .help-block,
.has-warning .radio,
.has-warning .radio-inline,
.has-warning.checkbox label,
.has-warning.checkbox-inline label,
.has-warning.radio label,
.has-warning.radio-inline label {
  color: #f59b0d;
}
.has-error .checkbox,
.has-error .checkbox-inline,
.has-error .control-label,
.has-error .help-block,
.has-error .radio,
.has-error .radio-inline,
.has-error.checkbox label,
.has-error.checkbox-inline label,
.has-error.radio label,
.has-error.radio-inline label {
  color: #cb3029;
}
.has-success .form-control {
  border-color: #159269;
  border-style: solid;
  border-width: 1px;
  -webkit-box-shadow: none !important;
  box-shadow: none !important;
}
.has-warning .form-control {
  border-color: #f59b0d;
  border-style: solid;
  border-width: 1px;
  -webkit-box-shadow: none !important;
  box-shadow: none !important;
}
.has-error .form-control {
  border-color: #cb3029;
  border-style: solid;
  border-width: 1px;
  -webkit-box-shadow: none !important;
  box-shadow: none !important;
}
.input-group .form-control:last-child,
.input-group-addon:last-child,
.input-group-btn:last-child > .btn,
.input-group-btn:last-child > .btn-group > .btn,
.input-group-btn:last-child > .dropdown-toggle,
.input-group-btn:first-child > .btn:not(:first-child),
.input-group-btn:first-child > .btn-group:not(:first-child) > .btn {
  border-color: transparent;
  background-color: #52555f;
}
.support-question a {
  color: #949ba2;
}
.support-question a:hover {
  text-decoration: none;
}
.support-question a:focus {
  text-decoration: none;
}
.support-question:hover {
  background-color: rgba(68, 70, 79, 0.7);
}
.support-question.active {
  border-left: 3px solid #f6a821;
}
.support-question.active .panel-body {
  padding-left: 13px;
}
/* Charts */
.flot-chart {
  display: block;
  height: 300px;
  position: relative;
  color: #545454;
}
.flot-chart-analytics {
  margin-top: 10px;
  margin-bottom: 10px;
  display: block;
  height: 150px;
  position: relative;
}
.flot-chart-content {
  width: 100%;
  height: 100%;
  color: #545454;
}
.flot-text {
  color: #949ba2 !important;
}
.note-editor.panel-default .panel-heading {
  background-color: transparent;
  border: none;
}
.note-editor.panel-default .note-editing-area .note-editable {
  background-color: transparent;
  color: #949ba2;
}
.note-editor.panel-default.note-frame {
  border: none;
}
.note-editor.panel-default.note-frame .note-statusbar {
  background-color: #2f323b;
}
.note-editor.panel-default.fullscreen {
  background-color: #2f323b;
}
.note-editor.panel-default.fullscreen .panel-heading {
  background-color: #2f323b;
}
.note-editor.panel-default .dropdown-menu.dropdown-style h1,
.note-editor.panel-default .dropdown-menu.dropdown-style h2,
.note-editor.panel-default .dropdown-menu.dropdown-style h3,
.note-editor.panel-default .dropdown-menu.dropdown-style h4,
.note-editor.panel-default .dropdown-menu.dropdown-style h5,
.note-editor.panel-default .dropdown-menu.dropdown-style h6 {
  color: #949ba2;
}
/* Select2 custom styles */
.select2-container .select2-selection--single {
  height: 35px;
}
.select2-container--default .select2-selection--single,
.select2-container--default .select2-selection--multiple {
  color: #949ba2;
  border-color: #3d404c;
  background-color: #494b54;
}
.select2-container--default .select2-selection--single .select2-selection__rendered {
  color: #949ba2;
}
.select2-container--default .select2-selection--multiple .select2-selection__choice {
  background-color: #494b54;
  border-color: #616779;
}
.select2-container--default .select2-selection--multiple .select2-selection__choice:hover {
  background-color: #52555f;
}
.select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
  color: #ffffff;
}
.select2-container .select2-selection--single .select2-selection__rendered {
  padding-top: 2px;
  padding-left: 10px;
}
.select2-container--default .select2-selection--single .select2-selection__arrow {
  height: 35px;
}
.select2-container--default.select2-container--focus .select2-selection--single,
.select2-container--default.select2-container--focus .select2-selection--multiple {
  border-color: #f6a821;
}
.select2-container--default .select2-results__option--highlighted[aria-selected] {
  background-color: #f6a821;
}
.select2-container--default .select2-search--dropdown .select2-search__field {
  border-color: #3d404c;
}
.select2-container--default .select2-results__option[aria-selected=true] {
  background-color: #606370;
}
.select2-dropdown {
  border-color: #3d404c;
  background-color: #494b54;
}
.select2-dropdown input:focus {
  outline: none;
}
.select2-selection {
  outline: none;
}
.ui-select-container.ui-select-bootstrap .ui-select-choices-row.active > a {
  background-color: #f6a821;
}
.ld-loading .panel-body {
  position: relative;
}
.ld-loading .panel-body > * {
  transition: opacity 0.3s;
  opacity: 0.2;
}
.ld-loading .panel-body:before {
  display: block;
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 50;
}
.ld-loading .loader {
  display: block;
}
.loader {
  display: none;
  position: absolute;
  top: 45%;
  left: 0;
  right: 0;
  z-index: 100;
}
.loader-bar,
.loader-bar:before,
.loader-bar:after {
  background: #f6a821;
  -webkit-animation: load-bar-an 1s infinite ease-in-out;
  animation: load-bar-an 1s infinite ease-in-out;
  width: 0.66em;
  height: 0.66em;
}
.loader-bar {
  color: #f6a821;
  text-indent: -9999em;
  margin: auto auto;
  position: relative;
  font-size: 11px;
  -webkit-transform: translateZ(0);
  -ms-transform: translateZ(0);
  transform: translateZ(0);
  -webkit-animation-delay: -0.16s;
  animation-delay: -0.16s;
}
.loader-bar:before,
.loader-bar:after {
  position: absolute;
  top: 0;
  content: '';
}
.loader-bar:before {
  left: -1em;
  -webkit-animation-delay: -0.32s;
  animation-delay: -0.32s;
}
.loader-bar:after {
  left: 1em;
}
@-webkit-keyframes load-bar-an {
  0%,
  80%,
  100% {
    box-shadow: 0 0;
    height: 2em;
  }
  40% {
    box-shadow: 0 -1em;
    height: 2.6em;
  }
}
@keyframes load-bar-an {
  0%,
  80%,
  100% {
    box-shadow: 0 0;
    height: 2em;
  }
  40% {
    box-shadow: 0 -1em;
    height: 2.6em;
  }
}
.loader-spin,
.loader-spin:after {
  border-radius: 50%;
  width: 3em;
  height: 3em;
}
.loader-spin {
  margin: auto auto;
  font-size: 10px;
  position: relative;
  text-indent: -9999em;
  border-top: 0.8em solid rgba(246, 168, 33, 0.2);
  border-right: 0.8em solid rgba(246, 168, 33, 0.2);
  border-bottom: 0.8em solid rgba(246, 168, 33, 0.2);
  border-left: 0.8em solid #f6a821;
  -webkit-transform: translateZ(0);
  -ms-transform: translateZ(0);
  transform: translateZ(0);
  -webkit-animation: load-spin-an 1.1s infinite linear;
  animation: load-spin-an 1.1s infinite linear;
}
@-webkit-keyframes load-spin-an {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes load-spin-an {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
.loader-dots,
.loader-dots:before,
.loader-dots:after {
  border-radius: 30%;
  width: 1.2em;
  height: 1.2em;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  -webkit-animation: load-dots-an 1.8s infinite ease-in-out;
  animation: load-dots-an 1.8s infinite ease-in-out;
}
.loader-dots {
  color: #f6a821;
  font-size: 10px;
  margin: auto auto;
  position: relative;
  text-indent: -9999em;
  -webkit-transform: translateZ(0);
  -ms-transform: translateZ(0);
  transform: translateZ(0);
  -webkit-animation-delay: -0.16s;
  animation-delay: -0.16s;
}
.loader-dots:before,
.loader-dots:after {
  content: '';
  position: absolute;
  top: 0;
}
.loader-dots:before {
  left: -2em;
  -webkit-animation-delay: -0.32s;
  animation-delay: -0.32s;
}
.loader-dots:after {
  left: 2em;
}
@-webkit-keyframes load-dots-an {
  0%,
  80%,
  100% {
    box-shadow: 0 2em 0 -1.3em;
  }
  50% {
    box-shadow: 0 2em 0 0;
  }
}
@keyframes load-dots-an {
  0%,
  80%,
  100% {
    box-shadow: 0 2em 0 -1.3em;
  }
  50% {
    box-shadow: 0 2em 0 0;
  }
}
.loader-example {
  padding: 40px 0;
  height: 120px;
}
.jqstooltip {
  padding: 5px !important;
  border: none !important;
  border-radius: 10px;
  background-color: #f6a821 !important;
  width: auto !important;
  height: auto !important;
}
.hoverinfo {
  background-color: #f6a821 !important;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5) !important;
  -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5) !important;
  border: none !important;
  border-radius: 4px !important;
  color: #ffffff !important;
  padding: 6px 12px !important;
}
    </style>
</head>
<body>

<!-- Wrapper-->
<div class="wrapper">

    <!-- Header-->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <div id="mobile-menu">
                    <div class="left-nav-toggle">
                        <a href="#">
                            <i class="stroke-hamburgermenu"></i>
                        </a>
                    </div>
                </div>
                <a class="navbar-brand" href="/">
                    MRHS
                    <span>v.1.0</span>
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <div class="left-nav-toggle">
                    <a href="">
                        <i class="stroke-hamburgermenu"></i>
                    </a>
                </div>
                <form class="navbar-form navbar-left">
                    <input type="text" class="form-control" placeholder="Search data for analysis" style="width: 175px">
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li class=" profil-link">
                        <a href="login.html" data-toggle="dropdown">
                            <span class="profile-address"><!-- mark --></span>
                            <img src="mark" class="img-circle" alt="">
                        </a>
                        <ul class="dropdown-menu">
                                    <li><a href="/admin/account/profile">Profile</a></li>
                                    <li><a href="#">Messages</a></li>
                                    <li><a href="#">Notifications</a></li>
                                    <li class="divider"></li>
                                    <li class="li-logout"><a class="logout" href="logout">Logout</a></li>
                                </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-default navbar-fixed-bottom">
        <div class="container-fluid">
            <div class="navbar-header">
                <div id="mobile-menu">
                    <div class="left-nav-toggle">
                        <a href="#">
                            <i class="stroke-hamburgermenu"></i>
                        </a>
                    </div>
                </div>
                <a class="navbar-brand" href="/">
                    MRHS
                    <span>v.1.0</span>
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                
                <ul class="nav navbar-nav navbar-right">
                    <li class="profil-link">
                        <a href="login.html" data-toggle="dropdown">
                            <span class="profile-address"><!-- mark --></span>
                            <img src="mark" class="img-circle" alt="">
                        </a>
                        <ul class="dropdown-menu">
                                    <li><a href="/admin/account/profile">Profile</a></li>
                                    <li><a href="#">Messages</a></li>
                                    <li><a href="#">Notifications</a></li>
                                    <li class="divider"></li>
                                    <li class="li-logout"><a class="logout" href="logout">Logout</a></li>
                                </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End header-->

    <!-- Navigation-->
    <!-- <aside class="navigation">
        <nav>
            <ul class="nav luna-nav">
                <li class="nav-category">
                    General
                </li>
                <li>
                    <a href="/admin"><span class="pe pe-7s-home icons"></span>Dashboard</a>
                </li>
                <li>
                    <a href="/admin/message"><span class="pe pe-7s-chat icons"></span>Message</a>
                </li>
                <li>
                    <a href="#notification" data-toggle="collapse" aria-expanded="false">
                        <span class="pe pe-7s-bell icons"></span>Notification<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                        <span class="badge pull-right">2</span>
                    </a>
                    <ul id="notification" class="nav nav-second collapse">
                        <li><a href="/admin/notification">Notification <span class="badge pull-right">2</span></a></li>
                        <li><a href="/admin/notification-settings">Setting</a></li>
                    </ul>
                </li>
                <li class="nav-category">
                   Academics
                </li>
                <li>
                    <a href="#users" data-toggle="collapse" aria-expanded="false">
                        <span class="pe pe-7s-users icons"></span>
                        Users<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="users" class="nav nav-second collapse">
                        <li><a href="/admin/users">Users</a></li>
                        <li><a href="/admin/users/admin">Admin</a></li>
                        <li><a href="/admin/users/students">Student</a></li>
                        <li><a href="/admin/users/teachers">Teacher</a></li>
                        <li><a href="/admin/users/teachers">Parent</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#taskmanager" data-toggle="collapse" aria-expanded="false">
                        <span class="pe pe-7s-graph1 icons"></span>
                        Task Manager<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="taskmanager" class="nav nav-second collapse">
                        <li><a href="/admin/taskmanager/account">Account</a></li>
                    </ul>
                </li>
                <li  class="active">
                    <a href="#subject" data-toggle="collapse" aria-haspopup="true" aria-expanded="true">
                        <span class="pe pe-7s-notebook icons"></span>
                        Subject<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="subject" class="nav nav-second collapse in">
                        <li><a href="/admin/subject/section">Section</a></li>
                        <li><a href="/admin/subject/class">Class</a></li>
                        <li><a href="/admin/subject/schedule">Schedule</a></li>
                        <li  class="active"><a href="/admin/subject">Subject</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#grades" data-toggle="collapse" aria-expanded="false">
                        <span class="pe pe-7s-bookmarks icons"></span>
                        Grades<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="grades" class="nav nav-second collapse">
                        <li><a href="admin/grades">Grades</a></li>
                        <li><a href="/admin/grades/grading-system">Grading System</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#account" data-toggle="collapse" aria-expanded="false">
                        <span class="pe pe-7s-config icons"></span>
                        Account<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="account" class="nav nav-second collapse">
                        <li><a href="/admin/account/profile">Profile</a></li>
                        <li><a href="/admin/account/account-settings">Account Settings</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#pages" data-toggle="collapse" aria-expanded="false">
                        <span class="pe pe-7s-copy-file icons"></span>
                        Pages <span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="pages" class="nav nav-second collapse">
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">List</a></li>
                        <li><a href="#">Timeline</a></li>

                    </ul>
                </li>
                <li>
                    <a href="#agenda" data-toggle="collapse" aria-expanded="false">
                        <span class="fa fa-calendar-check-o icons"></span>
                        Agenda <span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="agenda" class="nav nav-second collapse">
                        <li><a href="/admin/agenda/events">Events</a></li>
                        <li><a href="/admin/agenda/program">Program</a></li>
                        <li><a href="/admin/agenda/news">News</a></li>
                        <li><a href="/admin/agenda/announcement">Announcement</a></li>
                    </ul>
                </li>
                <li class="nav-info">
                    <i class="pe pe-7s-science text-accent"></i>
                    <div class="m-t-xs">
                        <span class="c-white">Wekonek</span> "WE" as a family connecting to become one and to make your life easier with <strong>wekonek</strong>.
                    </div>
                </li>
            </ul>
        </nav>
    </aside> -->
    <!-- End navigation-->


    <!-- Main content-->
    <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="view-header">
                            <div class="pull-right text-right" style="line-height: 14px">
                            <small>Academics<br><span class="c-white">Subject</span></small>
                            </div>
                            <div class="header-icon">
                                <i class="pe page-header-icon pe-7s-notebook"></i>
                            </div>
                            <div class="header-title">
                                <h3 class="m-b-xs">Subject</h3>
                                <small>
                                    “A performance dashboard is a practical tool to improve management effectiveness and efficiency,<br/> not just a pretty retrospective picture in an annual report.” 
                                </small>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>

     
       
                
               
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                                <table cellpadding="1" cellspacing="1" class="table table-bordered">
                                    
                                </table>
                            </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- End main content-->
</div>

<!-- End wrapper-->

<!-- Vendor scripts -->
<script src="{{asset('vendor/pacejs/pace.min.js')}}"></script>
<script src="{{asset('vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('vendor/toastr/toastr.min.js')}}"></script>
<script src="{{asset('vendor/sparkline/index.js')}}"></script>
<script src="{{asset('vendor/flot/jquery.flot.min.js')}}"></script>
<script src="{{asset('vendor/flot/jquery.flot.resize.min.js')}}"></script>
<script src="{{asset('vendor/flot/jquery.flot.spline.js')}}"></script>
<script src="{{asset('vendor/animateNumber/jquery.animateNumber.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
<script src="{{asset('vendor/datatables/datatables.min.js')}}"></script>

<!-- App scripts -->
<script src="{{asset('scripts/luna.js')}}"></script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#profile-img").change(function(){
        readURL(this);
    });
    $(document).ready(function () {
        $('.navigation').css(['display': 'none']);
        // $('.createSubject').click(function() {
        //     $(this).attr('disabled','disabled');
        //     $(this).text("Creating...");
        // });
        $('#delete').on('click', function () {
                var $btn = $(this).button('loading')
                // business logic...
                $btn.button('reset')
              })
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        });
        toastr.options = {
            "debug": false,
            "newestOnTop": false,
            "positionClass": "toast-bottom-right",
            "closeButton": true,
            "progressBar": true
        };
        @if(session()->has('error'))
        toastr.error('{{session()->get('error')}}');
        @endif
        @if(session()->has('success'))
        toastr.success('{{session()->get('success')}}');
        @endif


    });
    
    $('#teacherslist').DataTable({
            dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
            "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
            buttons: [
                
            ]
        });
    $('#adminslist').DataTable({
            dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
            "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
            buttons: [
                
            ]
        });

</script>
</body>

</html>
@else
  <script>window.location = "/";</script>
@endif