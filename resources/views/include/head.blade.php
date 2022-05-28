<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;600;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
<!-- Bootstrap Min CSS -->
<link rel="stylesheet" href="{{url('/')}}/public/assets/css/bootstrap.min.css">
<!-- Animate Min CSS -->
<link rel="stylesheet" href="{{url('/')}}/public/assets/css/animate.min.css">
<!-- FontAwesome Min CSS -->
<link rel="stylesheet" href="{{url('/')}}/public/assets/css/fontawesome.min.css">
<!-- FlatIcon CSS -->
<link rel="stylesheet" href="{{url('/')}}/public/assets/css/flaticon.css">
<!-- Owl Carousel Min CSS -->
<link rel="stylesheet" href="{{url('/')}}/public/assets/css/owl.carousel.min.css">
<!-- Slick Min CSS -->
<link rel="stylesheet" href="{{url('/')}}/public/assets/css/slick.min.css">
<!-- MeanMenu CSS -->
<link rel="stylesheet" href="{{url('/')}}/public/assets/css/meanmenu.css">
<!-- Magnific Popup Min CSS -->
<link rel="stylesheet" href="{{url('/')}}/public/assets/css/magnific-popup.min.css">
<!-- Odometer Min CSS -->
<link rel="stylesheet" href="{{url('/')}}/public/assets/css/odometer.min.css">
<!-- Nice Select Min CSS -->
<link rel="stylesheet" href="{{url('/')}}/public/assets/css/nice-select.min.css">
<!-- Style CSS -->
<link rel="stylesheet" href="{{url('/')}}/public/assets/css/style.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="{{url('/')}}/public/assets/css/responsive.css">
<style>
.errorClass { border:  1px solid red !important; }
.errorClass1 { border:  2px solid red !important; }
.alert.alert-block {
    padding: 10px 19px;
    margin: 7px 0;
    border-radius: 10px;
}

.alert.alert-danger {
    background-color: rgba(189, 9, 9, .7);
    color: #fff;
}

.alert.alert-block strong {
    font-weight: 500;
    font-size: 15px;
}

.alert.alert-success {
    background-color: rgba(0, 128, 0, .7);
    color: #fff;
}
/* The snackbar - position it at the bottom and in the middle of the screen */
#snackbar {
  visibility: hidden; /* Hidden by default. Visible on click */
  min-width: 250px; /* Set a default minimum width */
  margin-left: -125px; /* Divide value of min-width by 2 */
  background-color: #00856E; /* Black background color #333 */
  color: #fff; /* White text color #fff*/
  text-align: center; /* Centered text */
  border-radius: 2px; /* Rounded borders */
  padding: 16px; /* Padding */
  position: fixed; /* Sit on top of the screen */
  z-index: 1; /* Add a z-index if needed */
  left: 50%; /* Center the snackbar */
  bottom: 30px; /* 30px from the bottom */
}

/* Show the snackbar when clicking on a button (class added with JavaScript) */
#snackbar.show {
  visibility: visible; /* Show the snackbar */
  /* Add animation: Take 0.5 seconds to fade in and out the snackbar.
  However, delay the fade out process for 2.5 seconds */
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

/* Animations to fade the snackbar in and out */
@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
</style>
<div id="snackbar"></div>