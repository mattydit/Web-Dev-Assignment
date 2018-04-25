var modal = document.getElementById('form_modal');

//Button which opens the modal
var button = document.getElementById("createbutton");

//span which closes the modal
var span = document.getElementsByClassName("close")[0];

//Open modal when button is clicked
button.onclick = function()
{
    modal.style.display = "block";
}

//close when x is clicked
span.onclick = function()
{
    modal.style.display = "none";
}

window.onclick = function(event)
{
    if (event.target == modal)
        {
            modal.style.display = "none";
        }
}