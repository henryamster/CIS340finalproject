confirmSubmission();

function confirmSubmission(){
    var con = confirm("Please only use this utility for legitimate purposes." + "\n" + "Any illegal activities will reported to the proper authorities");
    if (con)
    {
    return true;
    }
    else
    {
    window.location.replace("https://fbi.gov");
    return false;
    
    }
    }

