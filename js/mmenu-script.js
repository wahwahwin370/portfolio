

    (function($){


// ------------for menu----------
         $(document).ready(function(){


            var $menu = $("#navbarNavDropdown").mmenu({
               navbar:{ title:"" },
               wrappers : ["bootstrap4"],
               extensions: ["border-full"],


               navbars: [
                  {
                    position: "top",
                    height : 2,
                    content: [
                     '<center><a href="/"><img src="/images/logo.png" class="img-fluid mm-navbar-img"></a></center>',
                     
                    ]
                  }
                 ]   


            },{
               // configuration
               classNames: {
                 fixedElements: {
                    fixed: "fix",
                    sticky: "stick"
                  }
               }
            }
            );

            var $icon = $("#my-icon");
            var API = $menu.data( "mmenu" );

            $icon.on( "click", function() {
               API.open();
            });

            API.bind( "open:finish", function() {
               setTimeout(function() {
                  $icon.addClass( "is-active" );
               }, 100);
            });

            API.bind( "close:finish", function() {
               setTimeout(function() {
                  $icon.removeClass( "is-active" );
               }, 100);
            });
// -----------end for menu-----------

         })
 })(jQuery);