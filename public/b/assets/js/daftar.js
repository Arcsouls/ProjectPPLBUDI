document.getElementById('button').addEventListener('click', function() {
    document.querySelector('.bg-remember').style.display = 'flex';
});

document.querySelector('.close').addEventListener('click', function(){
    document.querySelector('.bg-remember').style.display = 'none';
});