<html>
    <head>
        <?php require 'head.php'; ?>
    </head>
    
    <body data-spy="scroll" data-target=".sidebar-nav">
       <?php require 'header.php'; ?>
        <div id="wrapper" class="">
             
                <?php require 'nav.php'; ?>
            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                           
                            <?php require 'sections/intro.php'; ?>
                            <?php require 'sections/colors.php'; ?>
                            <?php require 'sections/fonts.php'; ?>
                            <?php require 'sections/buttons.php'; ?>
                            <?php require 'sections/icons.php'; ?>
                            <?php require 'sections/tables.php'; ?>
                            <?php require 'sections/modals.php'; ?>
                            <?php require 'sections/notifications.php'; ?>
                            <?php require 'sections/grids.php'; ?>
                            <?php require 'sections/paging.php'; ?>
                            
                            
                             <div><a href="#menu-toggle" class="btn btn-default pull-right" id="menu-toggle">Toggle Menu</a></div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->

        </div>
        <!-- /#wrapper -->
        
        <!-- Side Nav Accordian Script -->
        <script> 
            $('#nav1').click(function(){ 
                var $target = $($(this).data('target')); 
                if(!$target.hasClass('in'))
                  $('.collapse .in').removeClass('in').height(0);    
              });
            $('#nav2').click(function(){ 
                var $target = $($(this).data('target')); 
                if(!$target.hasClass('in'))
                  $('.collapse .in').removeClass('in').height(0);    
              });
            $('#nav3').click(function(){ 
                var $target = $($(this).data('target')); 
                if(!$target.hasClass('in'))
                  $('.collapse .in').removeClass('in').height(0);    
              });
            $('#nav4').click(function(){ 
                var $target = $($(this).data('target')); 
                if(!$target.hasClass('in'))
                  $('.collapse .in').removeClass('in').height(0);    
              });
        </script>
    </body>
</html>

