let show_pop = document.getElementById('Pop-event-TwoW');
let btn_show_opup = document.getElementById('btn_show_opup');
let btn_show_opup2 = document.getElementById('btn_show_opup2');
let clouse_popup = document.getElementById('clouse');


// the function show sign in popup
function show_the_pop(){
    show_pop.style.display='flex';
   
}
//  and this will hide it
function hide_the_pop(){
    show_pop.style.display='none';
    
}
btn_show_opup.addEventListener('click', show_the_pop);
btn_show_opup2.addEventListener('click', show_the_pop);
clouse_popup.addEventListener('click', hide_the_pop);