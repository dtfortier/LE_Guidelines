<html>
    <head>
        <?php require 'header.php'; ?>
    </head>
    
    <body data-spy="scroll" data-target=".sidebar-nav">
        <div id="wrapper" class="">

            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand">
                        <a href="#">
                           Localedge Style Guidelines
                        </a>
                    </li>
                    <li>
                        <a href="#colors">Colors</a>
                    </li>
                    <li>
                        <a href="#fonts">Fonts and Headings</a>
                    </li>
                    <li>
                        <a href="#buttons">Buttons</a>
                    </li>
                    <li>
                        <a href="#icons">Icons</a>
                    </li>
                    <li>
                        <a href="#tables">Tables</a>
                    </li>
                    <li>
                        <a href="#modals">Modals</a>
                    </li>
                    <li>
                        <a href="#notifications">Notifications</a>
                    </li>
                    <li>
                        <a href="#grids">Grids</a>
                    </li>
                    <li>
                        <a href="#paging">Paging</a>
                    </li>
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                           
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
    </body>
</html>

