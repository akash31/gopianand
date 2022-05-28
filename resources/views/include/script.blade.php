<!-- jQuery Min JS -->
<script src="{{url('/')}}/public/assets/js/jquery.min.js"></script>
<!-- Popper Min JS -->
<script src="{{url('/')}}/public/assets/js/popper.min.js"></script>
<!-- Bootstrap Min JS -->
<script src="{{url('/')}}/public/assets/js/bootstrap.min.js"></script>
<!-- Parallax Min JS -->
<script src="{{url('/')}}/public/assets/js/parallax.min.js"></script>
<!-- Owl Carousel Min JS -->
<script src="{{url('/')}}/public/assets/js/owl.carousel.min.js"></script>
<!-- Slick Min JS -->
<script src="{{url('/')}}/public/assets/js/slick.min.js"></script>
<!-- MeanMenu JS -->
<script src="{{url('/')}}/public/assets/js/jquery.meanmenu.js"></script>
<!-- Appear Min JS -->
<script src="{{url('/')}}/public/assets/js/jquery.appear.min.js"></script>
<!-- Odometer Min JS -->
<script src="{{url('/')}}/public/assets/js/odometer.min.js"></script>
<!-- Nice Select Min JS -->
<script src="{{url('/')}}/public/assets/js/jquery.nice-select.min.js"></script>
<!-- Magnific Popup Min JS -->
<script src="{{url('/')}}/public/assets/js/jquery.magnific-popup.min.js"></script>
<!-- WOW Min JS -->
<script src="{{url('/')}}/public/assets/js/wow.min.js"></script>
<!-- AjaxChimp Min JS -->
<script src="{{url('/')}}/public/assets/js/jquery.ajaxchimp.min.js"></script>
<!-- Form Validator Min JS -->
<script src="{{url('/')}}/public/assets/js/form-validator.min.js"></script>
<!-- Contact Form Min JS -->
<script src="{{url('/')}}/public/assets/js/contact-form-script.js"></script>
<!-- Main JS -->
<script src="{{url('/')}}/public/assets/js/main.js"></script>
<script>
    //change_language
    jQuery(document).on('change', '.change_language', function(e) {
        var language_id = jQuery('#language_id').val();
        jQuery.ajax({
            url: '{{ URL::to("/change_language")}}',
            type: "POST",
            data: '&selected_language=' + language_id + '&_token={{ csrf_token() }}',
            success: function(res) {
                location.reload();
            },
        });
    });

    $(".sub_send").on('click', function() {
        var has_error = false;
        var email = $(".email_sub").val();
        var regexEmail = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (email == "") {
            $(".email_sub").addClass('errorClass1');
            var has_error = true;
        } else if (!regexEmail.test($('#email').val())) {
            $(".email_sub").addClass('errorClass1');
            var has_error = true;
        } else {
            $(".email_sub").removeClass('errorClass1');
        }
        if (has_error == true) {
            return false;
        }

        $.ajax({
            type: 'POST',
            url: '{{ URL::to("/subscribe")}}',
            data: {
                "_token": "{{ csrf_token() }}",
                "email": email,
            },
            dataType: "json",
            success: function(result) {
                $(".email_sub").val("");
                var x = document.getElementById("snackbar");
                // Add the "show" class to DIV
                x.innerHTML = result.message;
                x.className = "show";
                // After 3 seconds, remove the show class from DIV
                setTimeout(function() {
                    x.className = x.className.replace("show", "");
                }, 3000);

            }
        });
    });
    $("#contactForm").submit(function(event) {
        var has_error = false;
        var email = $(".email").val();
        var regexEmail = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if ($("#name").val() == "") {
            $("#name").addClass('errorClass');
            var has_error = true;
        } else {
            $("#name").removeClass('errorClass');
        }
        if (email == "") {
            $(".email").addClass('errorClass');
            var has_error = true;
        } else if (!regexEmail.test($('.email').val())) {
            $(".email").addClass('errorClass');
            var has_error = true;
        } else {
            $(".email").removeClass('errorClass');
        }
        if ($("#message").val() == "") {
            $("#message").addClass('errorClass');
            var has_error = true;
        } else {
            $("#message").removeClass('errorClass');
        }

        if (has_error == true) {
            return false;
        }
        $('form#contactForm').submit();
        return true;
    });
</script>