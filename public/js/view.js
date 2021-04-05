export default class View {

    constructor () {

        const iSesion = document.querySelectorAll('.i-sesion');
        console.log(iSesion);
        iSesion.forEach( element => element.onclick = () => {
            if(element.lastElementChild.classList.value === 'd-none') {
                console.log(element.lastElementChild.classList);
                iSesion.forEach(element => element.lastElementChild.classList.add('d-none'))
                element.lastElementChild.classList.remove('d-none');
                
            }
            else {
                element.lastElementChild.classList.add('d-none');
                console.log(element.lastElementChild.classList.value);
            }
        } )

        const footerLink = document.querySelectorAll('.footerLinks');
        footerLink.forEach( element => element.onclick = () => {
            element.children[2].classList.toggle('fdropdownnone');
        });

        const menuIcon = document.getElementById('menuicon');
        menuIcon.onclick = () => {
            menuIcon.lastElementChild.classList.toggle('d-none');
        };
    }

    setModel (model) {
        this.model = model;
    };

};