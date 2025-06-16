import { singInLogin } from "./auth/login.js";

document.addEventListener('DOMContentLoaded', () =>{
    if(document.getElementById('loginForm')){
        singInLogin();
    }
});

console.log("Ha cargado el script");