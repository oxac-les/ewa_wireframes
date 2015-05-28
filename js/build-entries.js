
   
    $(document).ready(function(){	


    // build thumb views from json test data in ext file
        
    var thmbbrowseHTML='';
    var thmbsearchHTML='';
        
    //loop through data
        $.each(data,function(entry, entryHTML){     
        //thumb view browse
        thmbbrowseHTML+='<div class="col-md-3 col-sm-4 col-xs-6 thumb-view"><a href="entry.php?id='
        + entryHTML.id + '"><img src="' 
        + entryHTML.imgSrc + '" alt="" /></a><div class="thumb-view-ovly"><p>'
        + entryHTML.entryTitle + '</p><span class="glyphicon ' 
        + entryHTML.icon +'" aria-hidden="true"></span></div></div>';
        //thumb view search
        thmbsearchHTML+='<div class="col-sm-4 col-xs-6 thumb-view"><a href="entry.php?id='
        + entryHTML.id + '"><img src="' 
        + entryHTML.imgSrc + '" alt="" /></a><div class="thumb-view-ovly"><p>' 
        + entryHTML.entryTitle + '</p><span class="glyphicon ' 
        + entryHTML.icon +'" aria-hidden="true"></span></div></div>';
            
        });
        
    // write to page
        $('#thmb-browse').html(thmbbrowseHTML);
        $('#thmb-search').html(thmbsearchHTML);  
        
        
    // build list views from json test data in ext file
        
    var listbrowseHTML='';
    var listsearchHTML='';
        
    //loop through data
        $.each(data,function(entry, entryHTML){     
        //list view browse
        listbrowseHTML+='<div class="col-md-3 col-xs-4 list-view"><a href="entry.php?id='
        + entryHTML.id + '"><img src="' 
        + entryHTML.imgSrc + '" alt="" /></a></div><div class="col-md-9 col-xs-8"><h3>' 
        + entryHTML.entryTitle + '</h3><p>' 
        + entryHTML.entryDesc + '</p><span class="glyphicon '
        + entryHTML.icon +'" aria-hidden="true"></span></div>';
        //list view search
        listsearchHTML+='<div class="col-md-3 col-xs-4 list-view"><a href="entry.php?id='
        + entryHTML.id + '"><img src="' 
        + entryHTML.imgSrc + '" alt="" /></div></a><div class="col-md-6 col-xs-5 "><h3>' 
        + entryHTML.entryTitle + '</h3><p>' 
        + entryHTML.entryDesc + '</p><span class="glyphicon '
        + entryHTML.icon +'" aria-hidden="true"></span></div>';
            
        });
    
    // write to page
        $('#list-browse').html(listbrowseHTML);
        $('#list-search').html(listsearchHTML);          
        
        
    // build related entries from json test data in ext file
        
    var relatedentriesHTML='';
        
    //loop through data
        $.each(data,function(entry, entryHTML){     
        //list view browse
        relatedentriesHTML+='<a href="entry.php?id='
        + entryHTML.id + '"><div class="thumb-view"><img src="' 
        + entryHTML.imgSrc + '" alt="" width=""/><div class="thumb-view-ovly"><p>' 
        + entryHTML.entryTitle + '</p><span class="glyphicon '
        + entryHTML.icon +'" aria-hidden="true"></span></div></div></a>';
    
        });
    
    // write to page
        $('#related-entries').html(relatedentriesHTML);
        
    });
