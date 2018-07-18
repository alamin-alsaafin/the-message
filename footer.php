
    <footer>
        <img src="img/logofooter.png" width="150" class="footer-logo"/>
        <h2>Published by</h2>
        <p>
            Copyright © Osoul Global Center, All rights reserved.
        </p>
    </footer>

    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/demo.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/2.1.3/parallax.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TweenMax.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script type="text/javascript">
        $('.dropdown-toggle').dropdown();
    </script>
     <script>
       $(document).ready(function () {



           $('.nav-inner ._nav-item').each(function () {
               var submenu = $('div.inner-menu', this).detach().appendTo('.submenu .inside');
               var id = $(this).attr('id');
               $('.inner-menu.main_page').fadeIn();

               $('a', this).hover(function () {
                   $('.nav-inner ._nav-item').removeClass('active');
                   $(this).parent().addClass('active');
                   $('.submenu .inner-menu').hide();
                   $('div.inner-menu.' + id).show();
               });
           });

       })
       wow = new WOW(
           {
               animateClass: 'animated',
               mobile: false,
               offset: 50
           }
       );
       wow.init();
   </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/2.1.3/parallax.min.js"></script>

<script>
    new WOW().init();
    $(document).ready(function() {
            // Check window size
            if($(window).width() > 769) {
                const parent = document.getElementById('header-key');
                const parallax = new Parallax(parent, {
                    invertX: true,
                    invertY: true,
                    limitX: 15,
                    limitY: 15
                });
            }
    });

    $(document).ready(function() {

    });
</script>
</body>
</html>