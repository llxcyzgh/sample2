$(function () {
    // var $interval = setInterval("clock()",3000); // jq 中这种方式不正确
    var $interval = setInterval(clock, 2000);
    var $index;

    // 清除img和li全部的显示效果
    function removeShow() {
        $(".figure ol li").removeClass("figure_li_hove");
        $(".figure img").removeClass("nothide");
    }

    // 给指定index的img和li增加显示效果
    function addShow($index) {
        $(".figure ol li").eq($index).addClass("figure_li_hove");
        // $(".figure img").eq($index).addClass("nohide");
        $(".figure img:nth-child(" + ($index + 1) + ")").addClass("nothide");
    }

    // 定时器函数(轮播)
    function clock() {
        // 找出当前显示在前的图片的下标 $index
        for (var $i = 0; $i < 4; $i++) {
            if ($(".figure ol li").eq($i).hasClass("figure_li_hove")) {
                console.log($i);
                $index = $i;
                break;
                // $(".figure ol li").eq($i).css("backgroundColor", "blue");
            }
        }

        // 当前图片和li图标失去显示(去掉类)
        // $(".figure ol li").eq($index).removeClass("figure_li_hove");
        // $(".figure img:nth-child(" + ($index + 1) + ")").removeClass("nothide");
        removeShow();

        // 下标+1
        $index++;
        $index = $index === 4 ? 0 : $index;

        // 新下标的图片和图标显示(增加类)
        // $(".figure ol li").eq($index).addClass("figure_li_hove");
        // $(".figure img:nth-child(" + ($index + 1) + ")").addClass("nothide");
        addShow($index);
    }

    // 鼠标移入图片时,取消定时器
    $(".figure img").mouseover(function () {
        // console.log($interval);
        $interval = clearInterval($interval);
        // console.log($interval);
    });

    // 鼠标移出图片时,重启定时器
    $(".figure img").mouseout(function () {
        // console.log(0);
        $interval = clearInterval($interval);
        $interval = setInterval(clock, 1000);
    });

    // 鼠标移入li图标时,跳转到指定index的图片
    $(".figure ol li").mouseover(function () {
        clearInterval($interval);
        $index = $(this).index();
        // console.log($index);
        // $(".figure ol li").removeClass("figure_li_hove");
        // $(".figure img").removeClass("nothide");
        removeShow();

        // 新下标的图片和图标显示(增加类)
        // $(".figure ol li").eq($index).addClass("figure_li_hove");
        // $(".figure img:nth-child(" + ($index + 1) + ")").addClass("nothide");
        addShow($index);

    });


});