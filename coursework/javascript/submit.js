let submit = document.getElementById("submitButton");
let preview = document.getElementById("previewButton");
let titleS = document.getElementById("titleInput");
let contentS = document.getElementById("blogContent");

function submitPost(e)
{
    if(titleS.value.trim() == "" || contentS.value.trim() == "")
    {
        e.preventDefault();

        if(titleS.value.trim() == "")
        {
            titleS.classList.add("highlight");
        }
        else{
            titleS.classList.remove("highlight");
        }

        if(contentS.value.trim() == "")
        {
            contentS.classList.add("highlight");
        }
        else{
            contentS.classList.remove("highlight");
        }

        alert("One or both of the field(s) are empty!")

        return;
    }
}

submit.addEventListener("click", submitPost);
preview.addEventListener("click", submitPost);



