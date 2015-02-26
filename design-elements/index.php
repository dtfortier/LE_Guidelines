<html>
    <head>
        <?php require 'head.php'; ?>
    </head>
    
    <body>
       <?php require 'header.php'; ?>
        <div id="wrapper" class="">
             
            <?php require 'nav-design.php'; ?>
            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <section>
                                <div id="frame"></div>
                            </section>
                            <div><a href="#menu-toggle" class="btn btn-default pull-right" id="menu-toggle">Toggle Menu</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->

        </div>
        <!-- /#wrapper -->
        
        <!-- Side Nav Accordion Script -->
        <script>
            $(function() {
                
                function getContent(page) {
                    if(page) {
                        var url = '/LE_Guidelines/sections/' + page;
                        $.get(url, function(result) {
                            $("#frame").html(result); 
                        });
                    }
                }
                
                $(".nav-item").click(function() {
                    var url = $(this).data('url');
                    
                    $(".nav-item").removeClass('active');
                    $(this).addClass('active');
                    
                    getContent(url)
                });
                
                var hash = window.location.hash;
                
                if(!hash || hash === "#") {
                    hash = "#intro"
                }
                
                var current = $("[href=" + hash + "]").data('url');
                getContent(current);
            });
        </script>
    </body>
</html>

