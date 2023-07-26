let navmbl = document.querySelector('.navmobile');
let ullist = document.querySelector('.navbar')



navmbl.addEventListener('click', function(){
    navmbl.classList.toggle('active')
    ullist.classList.toggle('show')
    console.log(ullist);
    console.log(navmbl);
})