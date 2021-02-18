let filters = document.getElementsByClassName('filter');

let filtersLA = document.getElementsByClassName('filterLA');
let filtersRA = document.getElementsByClassName('filterRA');

for(let i = 0; i < filters.length; i++){
    filters[i].addEventListener('click',()=>{

        for(let q = 0; q < filters.length; q++){
            if(q !== i){
                filtersLA[q].style.transform = '';
                filtersRA[q].style.transform = '';
            }
        }

        if(filtersLA[i].style.transform === ''){
            filtersLA[i].style.transform = 'rotate(45deg) translateX(1px)';
            filtersRA[i].style.transform = 'rotate(-45deg) translateX(-1px)';
        }
        else if(filtersLA[i].style.transform === 'rotate(45deg) translateX(1px)'){
            filtersLA[i].style.transform = 'rotate(-45deg) translateX(1px)';
            filtersRA[i].style.transform = 'rotate(45deg) translateX(-1px)';
        }else{
            filtersLA[i].style.transform = '';
            filtersRA[i].style.transform = '';
        }
    })
}