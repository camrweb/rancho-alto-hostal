const rooms_menu=document.getElementById ('rooms-menu');
console.log('error')

rooms_menu.addEventListener('click',()=>{
    let submenu=document.getElementById('rooms-submenu')
    if (submenu.classList.contains('hidden')) {
        submenu.classList.remove('hidden')
    }
    else{
        submenu.classList.add('hidden')
    }
})