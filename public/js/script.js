;(function(so) {
  'use strict';
    var $flash = $('.flash-msg');
    var $html = $(`<div class="alert alert-dismissible" style="cursor:pointer" role="alert" data-dismiss="alert">
        <span class="msg">Better check yourself, you're not looking too good.<span>
      </div>`);

    so.flash = function (type,msg){
        switch (type) {
            case 'success':
                $html.addClass('alert-success');
                break;
            case 'error':
                $html.addClass('alert-error');
                break;
            case 'warning':
                $html.addClass('alert-warining');
                break;
            case 'info':
                $html.addClass('alert-info');
                break;
        }
        $html.html(msg);
        $flash.append($html);
    };

    so.render = {
        doctorSelectOption : function (arr) {
            var html = "";
            for (var str in arr) {
                html += '<option value="'+arr[str].id+'">'+arr[str].name+'</option>';
            }
            return html;
        }
    }; 
})(window.so = window.so || {});

(function ($) {
    var $registerForm = $(document.forms['patient-register']);
    var $loginForm = $(document.forms['patient-login']);
    var $editProfileForm = $(document.forms['edit-profile']);
    var $bookAppForm = $(document.forms['book-appointment']);
    
    if($registerForm) {
        $registerForm.validate({
            rules: {
                password: {
                    minlength: 5
                },
                confirm_password: {
                    minlength: 5,
                    equalTo: "#password"
                }
            }
        });
    }
    if($editProfileForm) {
        $editProfileForm.validate({
            rules: {
                password: {
                    minlength: 5
                },
                confirm_password: {
                    minlength: 5,
                    equalTo: "#password"
                }
            }
        });
    }
    if ($loginForm) {
        $loginForm.validate();
    }
    if($bookAppForm) {
        $bookAppForm.validate({
            rules : {
                appointment_hour: {
                    min: 1,
                    max: 4
                }
            }
        });
    }

    console.log('script running');

    $('.newletter form').submit(function(e){
        e.stopPropagation();
        var $this = $(e.currentTarget);

        $.ajax({
            url: ASSET_ROOT+'/subscriber/add',
            type: 'POST',
            data: {
                email : $this.find('input[name=email]').val()
            }
        }).success(function(s){
            var s = JSON.parse(s);
            $statusMsg = $('#status-msg');
            $statusMsg.find('.modal-title').html(s.status);
            $statusMsg.find('.modal-body').html(s.message);
            $statusMsg.modal();
        });
        
        return false;
    });

    // loading ajax
    $('#loading-image').bind('ajaxStart', function(){
        $(this).show();
    }).bind('ajaxStop', function(){
        $(this).hide();
    });

    /* book an appointment form name=book-appointment */
    if(document.forms['book-appointment']) {
        $(document.forms['book-appointment']['expertise_id']).change(function(e){
            var $this = $(e.currentTarget);
            $.ajax({
                url: ASSET_ROOT+'/patient/drexpertise',
                type: 'POST',
                data: {
                    id : $this.val()
                }
            }).success(function(s){
                s = JSON.parse(s);
                if(s.id) {
                    $(document.forms['book-appointment']).find('#dr-exp-desc').html(s.description);
                    $.ajax({
                        url: ASSET_ROOT+'/patient/drbyexpertise',
                        type: "POST",
                        data: {
                            expertise_id:$this.val()
                        }
                    }).success(function(s){
                        $.ajax({
                            url: ASSET_ROOT+'/doctor/expertiseidjson/'+$this.val(),
                            type: "POST",
                        }).success(function(s){
                            s = JSON.parse(s);
                            $docSelect = $(document.forms['book-appointment']['doctor_id']);
                            $docSelect.not(':first').remove();
                            $docSelect.append(so.render.doctorSelectOption(s));
                            $docSelect.val(window.appointment.doctor_id).change();
                        });
                    });
                }
            });
            return false;
        });
        if(window.appointment) {
            $(document.forms['book-appointment']['appointment_type']).val(window.appointment.appointment_type).change();
            $(document.forms['book-appointment']['expertise_id']).val(window.appointment.expertise_id).change();
        }
    }
})(jQuery);

