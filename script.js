let navmbl = document.querySelector('.navmobile');
let ullist = document.querySelector('.navbar')
const hero = document.querySelector('.Hero')
const imglayout = document.querySelector('.imglayout')
const about = document.querySelector('.Abouttext')
const language = document.querySelector('.Language')
const project = document.getElementById('Project')
const myproject = document.querySelector('.myproject')


const titlelayout = document.querySelector('.titlelayout')
console.log(titlelayout.classList);
navmbl.addEventListener('click', function(){
    navmbl.classList.toggle('active')
    ullist.classList.toggle('show')
   
})


const observhero = new IntersectionObserver(entries =>{
    entries.forEach(entry =>{

            titlelayout.classList.toggle('show', entry.isIntersecting)
      

        console.log(entry);
       about.classList.toggle('show' , !entry.isIntersecting)
       imglayout.classList.toggle('show', entry.isIntersecting)


    })
}
,{
    threshold: 0.1
}
)
const observeskills = new IntersectionObserver(entries =>{
    entries.forEach(entry =>{
        language.classList.toggle('show' , !entry.isIntersecting)
    })
})

const observeproject = new IntersectionObserver(entries =>{
    entries.forEach(entry =>{
        myproject.classList.toggle('show' , entry.isIntersecting)
    })
},{
    threshold: 0.1
}

)

observeproject.observe(project)
observeskills.observe(about)
observhero.observe(hero)

