$(document).ready(function () {
    $(".hide").css({
        opacity: 0,
    });
    $(".menu-mobile").click(function () {
        if ($("header").hasClass("open"))
            $("header").removeClass("open");
        else
            $("header").addClass("open");
    });

    $(window).bind("mousewheel", function (e) {
        if (e.originalEvent.wheelDelta >= 0) {
            $(".main-content ul li:not(.disable)").each(function (index) {
                var that = index;
                var me = this;
                if ($(this).hasClass("selected")) {
                    $(this).addClass("disable");
                    if (that == 0)
                        that = 3;
                    changeMenu();
                    setTimeout(function () {
                        $(document).mousemove(function (e) {
                            $(".selected .main-right-img img").parallax(-50, e);
                        });
                        $(".selected .main-background").css("opacity", "");
                        $(".selected .main-right").css("opacity", "");
                        $(".selected").removeClass("selected");
                        if (that == 1)
                            $(".logo").addClass("selected");
                        else
                            $(".menu ul li").eq(that - 2).addClass("selected");
                        $(".main-content ul li").eq(that - 1).addClass("selected");
                        $(".main-content ul li").eq(that - 1).addClass("disable");
                        setTimeout(function () {
                            $(".main-content ul li").eq(that - 1).removeClass("disable");
                        }, 1000);
                        $(".hide").css("transform", "");
                        $(".left-content").css("pointer-events", "");
                        $(".selected .title-letter span").css("transform", "translate(0, 0)");
                        $(".selected .line").css("transform", "translate(0, 0)");
                        $(".selected .title-text div").each(function (index) {
                            var that = this;
                            setTimeout(function () {
                                $(that).css({
                                    transform: "translate(0, 0)",
                                    opacity: 1
                                });
                            }, 150 * index);
                        });
                        $(".selected .projects-icons img").each(function (index) {
                            var that = this;
                            setTimeout(function () {
                                $(that).css({
                                    opacity: 1,
                                    transform: "translateX(0)"
                                });
                            }, 150 * index);
                        });
                        $(".selected .main-background").css("opacity", 1);
                        $(".selected .main-right").css("opacity", 1);
                        $(".selected .main-right-img").css("opacity", 1);
                        $(".selected .main-right-img img").css({
                            transform: "translateX(0)"
                        });
                        $(".projects-modal").css({
                            display: "",
                            transform: "",
                            "pointer-events": ""
                        });
                        $(".projects-el").css("opacity", 1);
                        $(".projects-el-wrapper").css("transform", "");
                        $(".projects-modal-wrapper").css("opacity", "");
                        $(".hide").css("opacity", 0);
                        $(me).removeClass("disable");
                    }, 1000);
                }
            });
        }
        else {
            $(".main-content ul li:not(.disable)").each(function (index) {
                var that = index;
                var me = this;
                if ($(this).hasClass("selected")) {
                    $(this).addClass("disable");
                    if (that == 2)
                        that = -1;
                    changeMenu();
                    setTimeout(function (e) {
                        $(document).mousemove(function (e) {
                            $(".selected .main-right-img img").parallax(-50, e);
                        });
                        $(".selected .main-background").css("opacity", "");
                        $(".selected .main-right").css("opacity", "");
                        $(".selected").removeClass("selected");
                        if (that == -1)
                            $(".logo").addClass("selected");
                        else
                            $(".menu ul li").eq(that).addClass("selected");
                        $(".main-content ul li").eq(that + 1).addClass("selected");
                        $(".main-content ul li").eq(that + 1).addClass("disable");
                        setTimeout(function () {
                            $(".main-content ul li").eq(that + 1).removeClass("disable");
                        }, 1000);
                        $(".hide").css("transform", "");
                        $(".left-content").css("pointer-events", "");
                        $(".selected .title-letter span").css("transform", "translate(0, 0)");
                        $(".selected .line").css("transform", "translate(0, 0)");
                        $(".selected .title-text div").each(function (index) {
                            var that = this;
                            setTimeout(function () {
                                $(that).css({
                                    transform: "translate(0, 0)",
                                    opacity: 1
                                });
                            }, 150 * index);
                        });
                        $(".selected .projects-icons img").each(function (index) {
                            var that = this;
                            setTimeout(function () {
                                $(that).css({
                                    opacity: 1,
                                    transform: "translateX(0)"
                                });
                            }, 150 * index);
                        });
                        $(".selected .main-background").css("opacity", 1);
                        $(".selected .main-right").css("opacity", 1);
                        $(".selected .main-right-img").css("opacity", 1);
                        $(".selected .main-right-img img").css({
                            transform: "translateX(0)"
                        });
                        $(".projects-modal").css({
                            display: "",
                            transform: "",
                            "pointer-events": ""
                        });
                        $(".projects-el").css("opacity", 1);
                        $(".projects-el-wrapper").css("transform", "");
                        $(".projects-modal-wrapper").css("opacity", "");
                        $(".hide").css("opacity", 0);
                        $(me).removeClass("disable");
                    }, 1000);
                }
            })
        }
    });

    $(".logo").click(function () {
        if ($(".logo").hasClass("selected"))
            return;

        changeMenu();
        setTimeout(function () {
            $(document).mousemove(function (e) {
                $(".selected .main-right-img img").parallax(-50, e);
            });
            $(".selected .main-background").css("opacity", "");
            $(".selected .main-right").css("opacity", "");
            $(".selected").removeClass("selected");
            $(".logo").eq(0).addClass("selected");
            $(".main-content ul li").eq(0).addClass("selected");
            $(".hide").css("transform", "");
            $(".left-content").css("pointer-events", "");
            $(".selected .title-letter span").css("transform", "translate(0, 0)");
            $(".selected .line").css("transform", "translate(0, 0)");
            $(".selected .title-text div").each(function (index) {
                var that = this;
                setTimeout(function () {
                    $(that).css({
                        transform: "translate(0, 0)",
                        opacity: 1
                    });
                }, 150 * index);
            });
            $(".selected .main-background").css("opacity", 1);
            $(".selected .main-right").css("opacity", 1);
            $(".selected .main-right-img").css("opacity", 1);
            $(".selected .main-right-img img").css({
                transform: "translateX(0)"
            });
            $(".projects-modal").css({
                display: "",
                transform: "",
                "pointer-events": ""
            });
            $(".projects-el").css("opacity", 1);
            $(".projects-el-wrapper").css("transform", "");
            $(".projects-modal-wrapper").css("opacity", "");
            $(".hide").css("opacity", 0);
        }, 1000);
    });

    $(".main-content ul li").eq(0).find(".arrowLink").click(function () {
        changeMenu();
        setTimeout(function () {
            $(".selected .main-background").css("opacity", "");
            $(".selected .main-right").css("opacity", "");
            $(".selected").removeClass("selected");
            $(".menu ul li").eq(0).addClass("selected");
            $(".main-content ul li").eq(1).addClass("selected");

            $(".selected .title-letter span").css("transform", "translate(0, 0)");
            $(".selected .line").css("transform", "translate(0, 0)");
            $(".selected .title-text div").each(function (index) {
                var that = this;
                setTimeout(function () {
                    $(that).css({
                        transform: "translate(0, 0)",
                        opacity: 1
                    });
                }, 150 * index);
            });
            $(".selected .main-background").css("opacity", 1);
            $(".selected .main-right").css("opacity", 1);
            $(".selected .main-right-img").css("opacity", 1);
            $(".projects-modal").css({
                display: "",
                transform: "",
                "pointer-events": ""
            });
            $(".projects-modal-wrapper").css("opacity", "");
        }, 1000);
    });

    $(".projects-icons").each(function (index) {
        $(this).click(function () {
            $(".hide").css({
                opacity: 1,
                "transform": "scaleX(1)"
            });
            setTimeout(function () {
                if (index == 0)
                    location.href = "pages/jsp_addrbook.html";
                else if (index == 1)
                    location.href = "pages/mqtt.html";
                else if (index == 2)
                    location.href = "pages/java_chat.html";
                else if (index == 3)
                    location.href = "pages/database.html";
                else if (index == 4)
                    location.href = "pages/mobile.html";
            }, 300);
        });
    });

    $(".main-content ul li").eq(2).find(".part").click(function () {
        $(".hide").css({
            opacity: 1,
            "transform": "scaleX(1)"
        });
        setTimeout(function () {
            location.href = "pages/about.html";
        }, 300);
    });

    $(".main-content ul li").eq(2).find(".arrowLink").click(function () {
        $(".hide").css({
            opacity: 1,
            "transform": "scaleX(1)"
        });
        setTimeout(function () {
            location.href = "pages/about.html";
        }, 300);
    });

    $(".menu li").each(function (index) {
        var that = index;
        $(this).click(function () {
            if ($(this).hasClass("selected"))
                return;

            changeMenu();
            setTimeout(function () {
                $(document).mousemove(function (e) {
                    $(".selected .main-right-img img").parallax(-50, e);
                });
                $(".selected .main-background").css("opacity", "");
                $(".selected .main-right").css("opacity", "");
                $(".selected").removeClass("selected");
                $(".hide").css("transform", "");
                $(".left-content").css("pointer-events", "");
                $(".menu ul li").eq(that).addClass("selected");
                $(".main-content ul li").eq(that + 1).addClass("selected");
                $(".selected .title-letter span").css("transform", "translate(0, 0)");
                $(".selected .line").css("transform", "translate(0, 0)");
                $(".selected .title-text div").each(function (index) {
                    var that = this;
                    setTimeout(function () {
                        $(that).css({
                            transform: "translate(0, 0)",
                            opacity: 1
                        });
                    }, 150 * index);
                });
                $(".selected .main-background").css("opacity", 1);
                $(".selected .main-right").css("opacity", 1);
                $(".selected .main-right-img").css("opacity", 1);
                $(".selected .main-right-img img").css({
                    transform: "translateX(0)"
                });
                $(".selected .projects-icons img").each(function (index) {
                    var that = this;
                    setTimeout(function () {
                        $(that).css({
                            opacity: 1,
                            transform: "translateX(0)"
                        });
                    }, 150 * index);
                });
                $(".projects-modal").css({
                    display: "",
                    transform: "",
                    "pointer-events": ""
                });
                $(".projects-el").css("opacity", 1);
                $(".projects-el-wrapper").css("transform", "");
                $(".projects-modal-wrapper").css("opacity", "");
                $(".hide").css("opacity", 0);
            }, 1000);
        });
    });

    $(".selected .title-letter span").css("transform", "translate(0, 0)");
    $(".selected .line").css("transform", "translate(0, 0)");
    $(".selected .title-text div").each(function (index) {
        var that = this;
        setTimeout(function () {
            $(that).css({
                transform: "translate(0, 0)",
                opacity: 1
            });
        }, 150 * index);
    });

    $(".selected .main-background").css("opacity", 1);
    $(".selected .main-right").css("opacity", 1);
    $(".selected .main-right-img").css("opacity", 1);
    $(".selected .main-right-img img").css({
        transform: "translateX(0)"
    });

    $(".selected .projects-icons img").each(function (index) {
        var that = this;
        setTimeout(function () {
            $(that).css({
                opacity: 1,
                transform: "translateX(0)"
            });
        }, 150 * index);
    });
    
    $(".projects-el").each(function (index) {
        var that = index;
        $(this).click(function () {
            $(".projects-modal").eq(that).css({
                display: "block",
                transform: "scaleX(1)",
                "pointer-events": "all"
            });

            setTimeout(function () {
                $(".projects-modal-wrapper").eq(that).css("opacity", 1);
                $(".projects-el").css("opacity", 0);
            }, 300);
        });
    });

    $(".projects-modal-header-close").click(function () {
        $(".projects-modal-wrapper").css("opacity", "");
        $(".projects-el").css("opacity", "");

        setTimeout(function () {
            $(".projects-modal").css({
                display: "",
                transform: "",
                "pointer-events": ""
            });
        }, 500);
    });
    
    $(".mobile-click").each(function (index) {
        var that = index;
        $(this).click(function () {
            if (that == 1)
                that = 2;
            $(".main-background").eq(that).css("transform", "scaleX(0)");
            setTimeout(function () {
                $(".main-background").eq(that).css("transform", "scaleX(1)");
            }, 500);
            setTimeout(function () {
                $(".main-background").eq(that).css("transform", "");
                if (that == 2)
                    location.href = "../about.html";
                else if (that == 3) {
                    $(".mobile-contact").css({
                        opacity: 1,
                        transform: "none",
                        "pointer-events" : "all"
                    });
                }
            }, 1000);
        });
    });

    $(".mobile-contact-close").click(function () {
        $(".mobile-contact").css({
            opacity: "",
            transform: "",
            "pointer-events" : ""
        });
    });

    $(document).mousemove(function (e) {
        $(".selected .main-right-img img").parallax(-50, e);
    });

    /*validate function*/
    $("#contactForm").validate({
        rules: {
            name: "required",
            email: {
                required: true,
                email: true
            },
            message: {
                required: true,
                minlength: 5
            }
        }
    });
});

function changeMenu() {
    $(document).off("mousemove");
    $(".selected .title-letter span").css("transform", "");
    $(".selected .line").css("transform", "");
    $(".projects").css("pointer-events", "");
    $(".selected .title-text div").each(function (index) {
        var that = this;
        setTimeout(function () {
            $(that).css({
                transform: "",
                opacity: ""
            });
        }, 50 * (3 - index));
    });
    setTimeout(function () {
        $(".selected .main-right-img").css({
            opacity: ""
        });
        $(".selected .main-right-img img").css({
            transform: ""
        });
    }, 275);
    if ($(".main-content ul li").eq(2).hasClass("selected"))
        $(".hide").css("transform", "scaleX(1)");
    $(".selected .projects-icons img").each(function (index) {
        var that = this;
        setTimeout(function () {
            $(that).css({
                opacity: "",
                transform: ""
            });
        }, 50 * index);
    });
}