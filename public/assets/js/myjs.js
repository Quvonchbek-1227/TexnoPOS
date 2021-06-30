$(document).ready(function() {

    if ($('#contact-form').length) {

        $('#submit').on("click", function() {

            var o = new Object();
            var message = $('#msg').val();
            var form = '#contact-form';
            var name = $('#contact-form .name').val();
            var email = $('#contact-form .email').val();
            // tekseriw
            if (name == '' || email == '' || message == '') {
                var email = $('#email').val();

                $('#contact-form .response').html('<div class="failed">Iltimas mag`luwmatlarin`izdi toliq kiritin`.</div>');

                return false;

            } else {
                $('#contact-form .response').html('<div class="text-info"><img src="assets/img/preloader.gif" alt="Loading..."> Loading...</div>');
                $('#submit').attr('type', 'submit');
            }

        });

    }

    // $('#phone').usPhoneFormat({
    //     format: '(+998) 99-999-99-99',
    // });

    // $(document).ready(function() {

    //     $('#phone').inputmask('(+998) 99-999-99-99');

    // });


    // $('#submit').click(function() {

    //     var name = $('#name');
    //     var phone = $('#phone');
    //     var message = $('#message');
    //     var course = $('#course');

    //     alert($('#phone').val());

    //     if (name.val().length == 0 || $('#phone').val() == '(+998) __-___-__-__') {
    //         alert('pustoy');
    //     } else {
    //         alert('normal');
    //     }

    // });

});