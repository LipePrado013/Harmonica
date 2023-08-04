// menu-lateral
const openMenuLateral = document.querySelector('#openMenuLateral');
const closeMenuLateral = document.querySelector('#closeMenuLateral');
const fundoMenuLateral = document.querySelector('#fundoMenuLateral');
const menuLateral = document.querySelector('#menuLateral');

const toggleMenuLateral = () => {
    fundoMenuLateral.classList.toggle('menuHide');
    menuLateral.classList.toggle('menuHide');
}

[openMenuLateral, closeMenuLateral].forEach((el) => {
    el.addEventListener('click', () => toggleMenuLateral())
})


// menu-lateral fim

// script whats
const closeWhats = document.querySelector('#close-whats');
const chatWhats = document.querySelector('#chat-whats');
const openWhats = document.querySelector('#open-whats');

[closeWhats, openWhats].forEach((el) => {
    el.addEventListener("click", () => {
        chatWhats.classList.toggle('hide');
        // var num = 0;
        // for (num = 0; num <= 1; num++) {
        //     console.log(num);
        // }
    })


});
// script whats fim
D
