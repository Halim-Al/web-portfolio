let navmbl = document.querySelector('.navmobile');
let ullist = document.querySelector('.navbar')
const hero = document.querySelector('.Hero')
const imglayout = document.querySelector('.imglayout')
const abouttext = document.querySelector('.Abouttext')
const about = document.querySelector('.About')
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
      

       
      
       imglayout.classList.toggle('show', entry.isIntersecting)


    })
} 

)
const observeskills = new IntersectionObserver(entries =>{
    entries.forEach(entry =>{
        language.classList.toggle('show' , entry.intersectionRatio = 0.9)
        abouttext.classList.toggle('show' , entry.isIntersecting)
        abouttext.firstElementChild.classList.toggle('line', entry.isIntersecting)
        console.log(entry);

        
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

