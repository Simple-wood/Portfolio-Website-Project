let clear = document.getElementById("clearButton");
let titleC = document.getElementById("titleInput");
let contentC = document.getElementById("blogContent");

function clearCheck(e)
{
    if(titleC.value.trim() == "" && contentC.value.trim() == "")
    {
        alert("There is nothing to clear!")
        e.preventDefault();
        return;
    }

    const isSure = window.confirm("Are you sure you would like to clear your blog post?");

    if(! isSure)
    {
        e.preventDefault();
    }
    else{
        titleC.classList.remove("highlight");
        contentC.classList.remove("highlight");
    }
}

clear.addEventListener("click", clearCheck);