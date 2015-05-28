    // bootstrap carousel 
    $(document).ready(function(){
        $('.carousel').each(function(){
            $(this).carousel({
                interval: false
            });
        });
    });
      


    // owl carousel 
    $(document).ready(function(){
                $('.owl-carousel, .admin-carousel').owlCarousel({
                margin:10,
                merge:true,
                nav:true, 
                navText:['&nbsp;','&nbsp;'],
                responsive:{
                    0:{
                        items:1,
                    },
                    600:{
                        items:3,
                    },
                    1000:{
                        items:5,
                        loop:true
                }
            }
        });
    });




   // jqueryui tabs   
    $(document).ready(function(){
        //browse page tabs  
		$( "#filterTabs" ).tabs();
		$( "#placeTabs,#peopleTabs,#birdTabs,#genreTabs,#formatTabs,#themeTabs" ).tabs({show: 'fade', hide: 'fade'});

        // place tabs
		$( "#placecountry,#placelocation,#placemythical" ).tabs({show: 'fade', hide: 'fade'});
          
        // people tabs  
		$( "#peoplelanguage,#peopleculture,#peoplecontributor" ).tabs({show: 'fade', hide: 'fade'});

        // bird tabs
 		$( "#birdcmn,#birdcmn-az,#birdsci,#birdsci-az,#birdfolk-az" ).tabs({show: 'fade', hide: 'fade'});     
          
        // results tabs  
		$( "#resultsTabs" ).tabs({show: 'fade', hide: 'fade'});
          
        // entry page tabs  
		$( "#assetTabs" ).tabs({show: 'fade', hide: 'fade'});
		$( "#metaiconTabs" ).tabs({show: 'fade', hide: 'fade'});
 
        //user admin page tabs  
		$( "#userTabs, #groupTabs" ).tabs();
	  });



    // jqueryui accordion 
    $(document).ready(function(){
        $( "#accordion, #subaccordion" ).accordion({
          active: false,  // set to true to collapse all sections on page load
          collapsible: false,  // set to true to allow all sections to be closed
          heightStyle: "content"
            });
    });

    // search filters

    $(document).ready(function(){
        $('.ui-accordion-header').on('click', function() {
            $('#searchFilters').animate({'width':'+800'}); //open the panel
            $('.closePanel').show(); //show the close text
        });
        $('.btn, .closePanel').on('click', function() {
            $('#searchFilters').animate({'width':'190'}); //close the panel
            $('.closePanel').hide(); //hide the close text
            $('#accordion, #subaccordion').accordion({ active: false, collapsible: true }); //collapse open panels
        });
    });



   // jqueryui datepicker  
    $(document).ready(function(){
        $( ".datepicker" ).datepicker();
    });
  


