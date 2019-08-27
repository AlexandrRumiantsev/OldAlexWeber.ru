function download(addr){
    console.log(addr);
        var link = document.createElement('a');
            link.setAttribute('href',addr);
            link.setAttribute('download',addr);
            link.click();  
}    
$( ".screen" ).click(function() {
    var link = $(this).data('id');
    //console.log(link);
    download(link);
});