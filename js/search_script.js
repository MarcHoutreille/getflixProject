function replaceNavBar() 
{
    //masquer la bare de recherche dans la nav bar pc et rajouter un titre à la place
    deletingNavBar = document.getElementById("pc-search-bar");
    deletingNavBar.style.display = "none";
    deletingNavBar.classList.remove("d-flex");
   
    titleAdvancedSearch = document.getElementById("logo-home");
    titleAdvancedSearch.insertAdjacentHTML("afterend", "<h1 class='fs-2'>Let's find good stuff to watch!</h1>");
    
}

//Masquer les inputs de bases pour que seul celui de la recherche par nom se fasse
//est-ce mis a jour ? compter 30 min... 
function displayOnlyNameSearch()
{
    // deleteSearchByname = document.getElementById("search_by_name");
    // deleteSearchByname.style.display = "none";
    deleteSearchBydates = document.getElementById("search_by_dates");
    deleteSearchBydates.style.display = "none";
    deleteSearchBycategory = document.getElementById("search_by_category");
    deleteSearchBycategory.style.display = "none";
    deleteSearchBylanguage = document.getElementById("search_by_language");
    deleteSearchBylanguage.style.display = "none";

}
//changer les types de champs en fonction du select des options avancées

function replaceInputs(value) 
{
    
    // alert(value);
    switch (value) 
   
    {
        case "name":
            //Supprimer les autres barres de recherches
            deleteSearchByDates = document.getElementById("search_by_dates");
            deleteSearchByDates.style.display = "none";

            deleteSearchByCategory = document.getElementById("search_by_category");
            deleteSearchByCategory.style.display = "none";
            
            deleteSearchByLanguage = document.getElementById("search_by_language");
            deleteSearchByLanguage.style.display = "none";
            
            //Afficher la recherche par nom
            searchByName = document.getElementById("input_search_by_name")
            searchByName.style.display ="block";
            searchByName.placeholder="Type the name of the moovie you are looking for...";

            break;

        case "dates":
            //Supprimer les autres barres de recherches
            deleteSearchByName = document.getElementById("search_by_name");
            deleteSearchByName.style.display = "none";

            deleteSearchByCategory = document.getElementById("search_by_category");
            deleteSearchByCategory.style.display = "none";

            deleteSearchByLanguage = document.getElementById("search_by_language");
            deleteSearchByLanguage.style.display = "none";
            
            //Afficher la recherche par dates
            searchByDates = document.getElementById("search_by_dates")
            searchByDates.style.display ="grid";

            break;
    
        case "category":
            //Supprimer les autres barres de recherches
            deleteSearchByName = document.getElementById("search_by_name");
            deleteSearchByName.style.display = "none";

            deleteSearchByDates = document.getElementById("search_by_dates");
            deleteSearchByDates.style.display = "none";

            deleteSearchByLanguage = document.getElementById("search_by_language");
            deleteSearchByLanguage.style.display = "none";
            
            //Afficher la recherche par genre
            searchByCategory = document.getElementById("search_by_category")
            searchByCategory.style.display ="block";

            break;
        
        case "language":
            //Supprimer les autres barres de recherches
            deleteSearchByName = document.getElementById("search_by_name");
            deleteSearchByName.style.display = "none";

            deleteSearchByDates = document.getElementById("search_by_dates");
            deleteSearchByDates.style.display = "none";

            deleteSearchByCategory = document.getElementById("search_by_category");
            deleteSearchByCategory.style.display = "none";
            
            //Afficher la recherche par langue
            searchByLanguage = document.getElementById("search_by_language")
            searchByLanguage.style.display ="block";

            break;
        default:
            break;
    }
    
}

function ifNoResultByName()
{
    resultSeachByName = "";
    resultSeachByName = document.getElementById("search-by-name-container");

    if (resultSeachByName == null)
    {
        noResultByNameText = document.getElementById("search-by-name-title");
        if(noResultByNameText != null)
        {
            noResultByNameText.insertAdjacentHTML("afterend","<p class='text-center fs-4 mt-3'>Sorry... Unfortunately we have no movie corresponding to your research. <i class='fas fa-sad-tear'></i></p>");
        }
        
    }

}

function ifNoResultByDates()
{
    resultSeachByDates = "";
    resultSeachByDates = document.getElementById("search-by-dates-container");
    if(resultSeachByDates == null)
    {
        noResultByDatesText = document.getElementById("search-by-dates-title");
        if(noResultByDatesText != null)
        {
            noResultByDatesText.insertAdjacentHTML("afterend","<p class='text-center fs-4 mt-3'>Sorry... Unfortunately we have no movie corresponding to your research. <i class='fas fa-sad-tear'></i></p>");
        }
        
    }
}

// BACKUPS
 // {
    //     case "name":
    //         replacingInput = document.getElementById("search-input-container");
    //         replacingInput.innerHTML="";
    //         replacingInput.insertAdjacentHTML("afterbegin","<input id='search-input' type='text' class='form-control' aria-label='Text input with segmented dropdown button' name='search'>");
    //         break;

    //     case "year":
    //         replacingInput = document.getElementById("search-input-container");
    //         replacingInput.innerHTML="";
    //         replacingInput.insertAdjacentHTML("afterbegin","between <input id='beginning' type='number' class='form-control col-12 col-md-4' name='begnning'> and <input id='ending' type='number' class='form-control col-12 col-md-4' name='ending'> ");
    //         break;
    
    //     case "category":
    //         replacingInput = document.getElementById("search-input-container");
    //         replacingInput.innerHTML="";
    //         replacingInput.insertAdjacentHTML("afterbegin","<select class='form-select'></select>");
    //         break;
        
    //     case "language":
    //         replacingInput = document.getElementById("search-input-container");
    //         replacingInput.innerHTML="";
    //         replacingInput.insertAdjacentHTML("afterbegin","<select class='form-select'></select>");
    //         break;
    //     default:
    //         break;
    // }