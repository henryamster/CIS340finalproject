var search = document.getElementById('search');
search.focus();
search.addEventListener('keyup', passSearch);

function passSearch(){
    var query =document.getElementById('search').value;
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange= function(){
        if (this.readyState == 4 && this.status == 200){
            document.getElementById('results').innerHTML = this.response;
        }
    };
    xhr.open('GET', 'search.php?q=' + query, true);
    xhr.send();
}