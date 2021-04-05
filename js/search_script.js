function replaceNavBar() 
{
    //masquer la bare de recherche dans la nav bar pc et rajouter un titre à la place
    deletingNavBar = document.getElementById("pc-search-bar");
    deletingNavBar.style.display = "none";
    deletingNavBar.classList.remove("d-flex");
   
    titleAdvancedSearch = document.getElementById("logo-home");
    titleAdvancedSearch.insertAdjacentHTML('afterend', '<h1>Advanced search</h1>');
    
}

//changer les types de champs en fonction du select des options avancées

function replaceInputs(value) 
{
    
    alert(value);
    switch (value) {
        case "name":
            replacingInput = document.getElementById("search-input-container");
            replacingInput.innerHTML="";
            replacingInput.insertAdjacentHTML("afterbegin","<input id='search-input' type='text' class='form-control' aria-label='Text input with segmented dropdown button' name='search'>");
            break;

        case "year":
            replacingInput = document.getElementById("search-input-container");
            replacingInput.innerHTML="";
            replacingInput.insertAdjacentHTML("afterbegin","between <input id='beginning' type='number' class='form-control col-12 col-md-4' name='begnning'> and <input id='ending' type='number' class='form-control col-12 col-md-4' name='ending'> ");
            break;
    
        case "category":
            replacingInput = document.getElementById("search-input-container");
            replacingInput.innerHTML="";
            replacingInput.insertAdjacentHTML("afterbegin","<select class='form-select'></select>");
            break;
        
        case "language":
            replacingInput = document.getElementById("search-input-container");
            replacingInput.innerHTML="";
            replacingInput.insertAdjacentHTML("afterbegin","<select class='form-select'></select>");
            break;
        default:
            break;
    }
    
}