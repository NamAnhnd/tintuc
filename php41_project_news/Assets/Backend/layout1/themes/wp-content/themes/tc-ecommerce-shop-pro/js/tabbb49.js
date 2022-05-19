jQuery(document).ready(function(){
    jQuery(".nav-tabs a").click(function(){
        jQuery(this).tab('show');
    });
    jQuery('.nav-tabs a').on('shown.bs.tab', function(event){
        var x = jQuery(event.target).text();         // active tab
        var y = jQuery(event.relatedTarget).text();  // previous tab
        jQuery(".act span").text(x);
        jQuery(".prev span").text(y);
    });
});