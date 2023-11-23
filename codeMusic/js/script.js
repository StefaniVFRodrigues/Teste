const btnPlay = document.querySelector('#play');

btnPlay.addEventListener('click', function(){
    alert("fail")
    $.ajax({url:"http://localhost:8888/codeMusic/echo.php", success:function(result){
        alert(result);}
    })

});