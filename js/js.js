const cl = c => console.log(c);
const elA = e => document.querySelectorAll(e);
const el = e => document.querySelector(e);
const on = (event, callback, el = document) => el.addEventListener(event,callback);

elA('.btn-nav').forEach(e => {
    on('click', ()=>{

        if(el('.btns-navigator .active')) el('.btns-navigator .active').classList.remove('active');
        e.classList.add('active')

        fetch(`http://localhost/abudhabiterhal/api.php?p=${e.innerHTML}`,{
            method: 'GET',
        }).then(async r => {
            let JSON = await r.json();
            let html = '';
            JSON.forEach(e => {
                html += `<section class="panel">
                    <img src="${e.picture}" alt="${e.title}" class="panel-img">
                    <article class="panel-body">
                        <a href="http://localhost/abudhabiterhal/place.php?id=${e.id}">
                            <h2 class="panel-title">${e.title}</h2>
                        </a>
                        <p class="panel-description">${e.description.substr(0, 120)}.....</p>
                    </article>
                </section>`
            })

            el('#panel').innerHTML = html;
        }).catch(err => {
            cl(err)
        })
    }, e)
})

elA('.gallery .panel-img').forEach(e => {
    on('click', ()=>{
        el('body').style.overflow = 'hidden';
        el('.modal-dialog').style.display = 'block';
        el('.modal-dialog').style.top = `${window.scrollY}px`;
        el('#img-modal').setAttribute('src', e.getAttribute('src'));
        el('#title-modal').innerHTML = e.getAttribute('alt');

        on('click', (e)=>{
            e.preventDefault();
            el('body').style.overflow = 'auto';
            el('.modal-dialog').style.top = `0px`;
            el('.modal-dialog').style.display = 'none';

        }, el('#close'));

    }, e);
})


if(el('#search-form')){

on('submit', (e)=>{
    e.preventDefault();

    let form = new FormData(el('#search-form'));
    if(! el('#search').value) alert("Defina el valor a buscar");

    fetch('http://localhost/abudhabiterhal/api.php?search=true',{
        method: "POST",
        body: form
    }).then(async r => {
        let JSON = await r.json();
        if(el('#panel')){
            let html = '';
            JSON.forEach(e =>{
                html += `<section class="panel">
                                    <img src="${e.picture}" alt="${e.title}" class="panel-img">
                                    <article class="panel-body">
                                        <a href="http://localhost/abudhabiterhal/place.php?id=${e.id}">
                                            <h2 class="panel-title">${e.title}</h2>
                                        </a>
                                        <p class="panel-description">${e.description.substr(0, 120)}....</p>
                                    </article>
                                </section>`;

            });
            el('#panel').innerHTML = html;
            el('.btns-navigator').style.display = 'none';
        }else{
            location.href = `attractions.php?search=${form.get('search')}`;

        }
    }).catch(err =>{
        cl(err);
    })

}, el('#search-form'));

}
if(el('#form-contact')){
    on('submit', (e) => {
        e.preventDefault();
        let form = new FormData(el('#form-contact'));

        fetch('http://localhost/abudhabiterhal/api.php?contact=true',{
            method: 'POST',
            body: form
        }).then(async r => {
            let json = await r.json();
            cl(json);
            if(json){
                el('body').style.overflow = 'hidden';
                el('.modal-dialog').style.display = 'flex';
                el('.modal-dialog').style.top = `${window.scrollY}px`;
                el('.modal-dialog .modal p span').innerHTML = form.get('name');
                el('#form-contact').reset();
                on('click', (e)=>{
                    e.preventDefault();
                    el('body').style.overflow = 'auto';
                    el('.modal-dialog').style.top = `0px`;
                    el('.modal-dialog').style.display = 'none';
                }, el('#close'));
            }
        });
    }, el('#form-contact'));
}

if(el('#form-login')){
    on('submit', (e)=> {
            e.preventDefault();
            let form = new FormData(el('.form-login') );
            fetch('http://localhost/abudhabiterhal/api.php?login=true',{
                method: 'POST',
                body: form
            }).then(async r => {
                let json = await r.json();

                if(json == true){
                    location.href = 'places-index.php';
                }else{
                    alert('Datos de acceso incorrectos.');
                }
            })
    },el('#form-login') )
}