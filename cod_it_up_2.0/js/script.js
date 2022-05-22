const login = selectItem('#loginNav');
login.addEventListener('click', () => unhide('.login'));

const sign = selectItem('#signNav');
sign.addEventListener('click', () => unhide('.signin'));

function modal(){
    const modals = selectItems('.modal-container');
    const [log, sign] = modals;
    const sign_up=selectItem('.create');

    sign_up.addEventListener('click', (event) => {
        event.stopPropagation();
        (unhide('.signin'), hide('.login'))

    } );

    log.addEventListener('click', (event) => {
        const eventTarget = event.target;
        if(eventTarget === log)
            hide('.login');
    })

    selectItems('.close').forEach(element => {
        element.addEventListener('click', () => (hide('.login'), hide('.signin')));
    });

}

function password(){
    const pswd = selectItem('#pass');
    const eye = selectItem('.eye');
    const eyeOff = selectItem('.eyeOff');

    eye.addEventListener('click', () => {
        pswd.type = 'password';
        hide('.eye');
        unhide('.eyeOff');
    });

    eyeOff.addEventListener('click', () => {
        pswd.type = 'text'; 
        hide('.eyeOff');
        unhide('.eye');
    })
}

function showLinks(arg){
    const links = {
        about: '.aboutUs',
        //event: '',
        //article: '',
        contact: '.contactUs'
    }

    for(let link in links){
        console.log(link);
        for(let link in links){
            if(arg === link){
                unhide(links[link])
            }else{
                hide(links[link])
            }
        }
    }
}


function warning(){
    let arrOfInput = selectItems('.signin input');
    let warningImages = selectItems(".signin img");

    arrOfInput.forEach((element, index) => {
        element.addEventListener('blur', () => {
            if(element.value === ''){
                element.style = 'border-color: red';
                warningImages[index].classList.remove('hidden');
            }
            else{
                element.style = 'border-color: rgba(0 0 0 /60%)';
                warningImages[index].classList.add('hidden');
            }
        })
    });
}

modal();
password();
warning();