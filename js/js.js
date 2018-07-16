<script>

        $(document).ready(function () {


            $("#block-girardperregaux-menu-link").click(function (e) {

                if ($(this).hasClass("open")) {

                    $("#bgtrans").animate({ "opacity": '0' }, 800);


                   // document.getElementById("bgtrans").style.visibility = "hidden";



                    $("#block-system-main-menu").animate({ "left": '-530px' }, 1000, function () {
                        document.getElementById("block-system-main-menu").classList.remove("m-0");

                    });



                    $("#block-girardperregaux-menu-link").removeClass("open");

                    $("#block-girardperregaux-menu-link").addClass("close");
                    $("#block-girardperregaux-menu-link").animate({ "left": '0px' }, 1000);

                }
                else if ($(this).hasClass("close")) {
                    
                    document.getElementById("bgtrans").classList.add("menu-bg");
                    

                    document.getElementById("block-system-main-menu").classList.add("m-0");

                    $("#block-system-main-menu").animate({ "left": '-10px' }, 1000);
                    $("#bgtrans").animate({ "opacity": '0.4' }, 800);

                    

                    $("#block-girardperregaux-menu-link").removeClass("close");

                    $("#block-girardperregaux-menu-link").addClass("open");
                    $("#block-girardperregaux-menu-link").animate({ "left": '90px' }, 1000);




                }
            })

        })
    </script>