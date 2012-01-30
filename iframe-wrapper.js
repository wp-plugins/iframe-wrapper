jQuery(document).ready(function() {
    jQuery('.iframe-wrapper').load(function() {
       jQuery(this).height(jQuery(this).contents().find('html')[0].scrollHeight + 25); 
    });
});