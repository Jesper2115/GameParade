window.onload = function(){
    try {
        if(localStorage.getItem("cookie-enable")!="1"){
            document.getElementById("cookie-bar").style.display="block";
        }
        document.getElementById("save-cookie-example").addEventListener( "click", function() {
            localStorage.setItem("cookie-enable", "1");
            document.getElementById("cookie-bar").style.display="none";
        } );
    } catch( e ) {
        return false;
    }
}