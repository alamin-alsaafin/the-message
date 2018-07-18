
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
    <script src="js/masonry.pkgd.min.js"></script>
    
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
    
</body>
</html>