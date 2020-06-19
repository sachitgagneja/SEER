function searchResult(methodology){
    var xhr = new XMLHttpRequest;

    if(xhr){
        var place = document.getElementById('result');
        xhr.open("GET", "searchprocess.php?methodology="+methodology, true);

        xhr.onreadystatechange = function(){
            if(xhr.readyState == 4  && xhr.status == 200){
                place.innerHTML = xhr.responseText;
            }
        }
        xhr.send(null);
    }
}