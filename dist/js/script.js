let seeMoreButton = document.querySelector('.seemore');

let seeTable = document.querySelector('.see-table');

let seeLessButton = document.querySelector('.seeless');

let editBtn = document.querySelector(".edit-button");




//ADD CLICK EVENT ON SEE MORE BUTTON
seeMoreButton.addEventListener('click', ()=>{
//FUNCTIONALITY OF THE EVENT
    
    seeTable.style.visibility = 'visible';
    seeMoreButton.style.visibility = 'hidden';
    seeLessButton.style.visibility = 'visible';

});
//ADD CLICK EVENT ON SEE MORE BUTTON
seeLessButton.addEventListener('click', ()=>{
    //FUNCTIONALITY OF THE EVENT
        
        seeTable.style.visibility = 'hidden';
        seeMoreButton.style.visibility = 'visible';
        seeLessButton.style.visibility = 'hidden';
        
});