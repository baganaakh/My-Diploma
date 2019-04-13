$(document).ready(function(){
ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
        } );
    });
$('#selectAllBoxes').click(function(){
    if(this.checked){
        $('.checkBox').each(function(){
            this.checked=true;
        });
    }else {
         $('.checkBox').each(function(){
            this.checked=false;
        });
    }
    });