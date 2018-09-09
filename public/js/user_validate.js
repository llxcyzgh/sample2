jQuery(function () {
    // 注册/登陆 表单验证js

    // 聚焦用户名时提示
    jQuery("#name").focus(function () {
        jQuery(this).siblings("span").remove();
        jQuery(this).before("<span class='text-success pull-right'>名称由字母和数字组成(长度在6至50之间),且只能以字母开头</span>");
    });

    // 聚焦邮箱时提示
    jQuery("#email").focus(function () {
        jQuery(this).siblings("span").remove();
        jQuery(this).before("<span class='text-success pull-right'>请输入正确格式的邮箱</span>");
    });

    // 聚焦密码时提示
    jQuery("#password").focus(function () {
        jQuery(this).siblings("span").remove();
        jQuery(this).before("<span class='text-success pull-right'>请输入至少8位字符的密码</span>");
    });

    // 聚焦重复密码框时提示
    jQuery("#password_confirmation").focus(function () {
        jQuery(this).siblings("span").remove();
        jQuery(this).before("<span class='text-success pull-right'>请再次输入密码</span>");
    });


    // 用户名失焦时验证
    jQuery("#name").blur(function () {
        jQuery(this).siblings("span").remove();
        $val = $(this).val();
        $reg = /^[a-zA-Z][a-zA-Z0-9]{5,49}$/;
        if ($reg.test($val)) {
            // 通过验证
            jQuery(this).before("<span class='text-success pull-right glyphicon glyphicon-ok'></span>");
        } else {
            // 未通过验证
            jQuery(this).before("<span class='bg-danger pull-right'>名称由字母和数字组成(长度在6至50之间),且只能以字母开头</span>");
        }
    });

    // 邮箱失焦时验证
    jQuery("#email").blur(function () {
        jQuery(this).siblings("span").remove();
        $val = $(this).val();
        $reg = /^\w+@\w+\.\w+$/;
        if ($reg.test($val)) {
            // 通过验证
            jQuery(this).before("<span class='text-success pull-right glyphicon glyphicon-ok'></span>");
        } else {
            // 未通过验证
            jQuery(this).before("<span class='bg-danger pull-right'>邮箱格式不正确</span>");
        }
    });

    // 密码失焦时验证
    jQuery("#password").blur(function () {
        jQuery(this).siblings("span").remove();
        $val = $(this).val();
        $reg = /^[\w\W]{8,50}$/;
        if ($reg.test($val)) {
            // 通过验证
            jQuery(this).before("<span class='text-success pull-right glyphicon glyphicon-ok'></span>");
        } else {
            // 未通过验证
            jQuery(this).before("<span class='bg-danger pull-right'>密码长度不能小于8位</span>");
        }
    });

    // 重复密码框失焦时验证
    jQuery("#password_confirmation").blur(function () {
        jQuery(this).siblings("span").remove();
        $val = $("#password").val();
        $val2 = $(this).val();
        if ($val) {
            if ($val === $val2) {
                // 通过验证
                jQuery(this).before("<span class='text-success pull-right glyphicon glyphicon-ok'></span>");
            } else {
                // 未通过验证
                jQuery(this).before("<span class='bg-danger pull-right'>两次密码不一致</span>");
            }
        }
    });


    // 点击注册页面提交按钮时,进行全部验证
    $("form.form-signup").submit(function () {
        // return false;
        $('#name').blur();
        $('#email').blur();
        $('#password').blur();
        $('#password_confirmation').blur();
        if ($("form div.form-group span").hasClass("bg-danger")) {
            return false;
        } else {
            return true;
        }

    });

    // 点击登陆页面提交按钮时,进行邮箱和密码验证
    $("form.form-login").submit(function () {
        // return false;
        $('#email').blur();
        $('#password').blur();
        if ($("form div.form-group span").hasClass("bg-danger")) {
            return false;
        } else {
            return true;
        }

    });


});

