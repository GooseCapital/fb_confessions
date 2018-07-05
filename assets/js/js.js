$(document).ready(function() {
    $('#upload').on('click', function() {
        total = $('input:checkbox:checked').length;
        $('.card input:checkbox').each(function() {
            var sThisVal;
            var mess;
            if (this.checked) {
                sThisVal = $(this).val();
                mess = $('input#' + sThisVal + '.form-control').val();
                $.ajax({
                    url: '/admin/upload',
                    type: 'POST',
                    dataType: 'text',
                    data: {
                        id: sThisVal,
                        mess: mess

                    },
                })

            }
            $('div#' + sThisVal + '.card').remove();
            console.log(total);
            console.log(sThisVal);
        })

        $.ajax({
            url: '/admin/upstt',
            type: 'POST',
            dataType: 'text',
            data: {
                total: total,

            },
        })

    });
    $('#delete').on('click', function() {
        $('.card input:checkbox').each(function() {
            var sThisVal;
            if (this.checked) {
                sThisVal = $(this).val();
                $.ajax({
                    url: '/admin/del_cfs',
                    type: 'POST',
                    dataType: 'text',
                    data: {
                        id: sThisVal
                    },
                })
            }
            $('div#' + sThisVal + '.card').remove();

        });
    });
    $('button.btn.btn-primary').on('click', function() {
        mess = $('textarea#comment.form-control').val();
        $.ajax({
            url: '/trangchu',
            type: 'POST',
            dataType: 'text',
            data: {
                mess: mess

            },

        })
    });
    $('#email').change(function() {
        var email = $('#email').val();
        if (email != '') {
            $.ajax({
                url: '/admin/check_email_avalibility',
                type: 'POST',
                dataType: 'text',
                data: {
                    email: email
                },
                success: function(data) {
                    $('#email_result').html(data);
                    console.log(data);
                }
            });
        }
    });
    $('button#add_admin.btn.btn-primary').on('click', function() {
        name = $('input#ten.form-control').val();
        email = $('input#email.form-control').val();
        nickname = $('input#nickname.form-control').val();
         $.ajax({
            url: '/admin/add_new',
            type: 'POST',
            dataType: 'text',
            data:{
                name:name,
                email:email,
                nickname:nickname
            },
            
         });
    });
});
