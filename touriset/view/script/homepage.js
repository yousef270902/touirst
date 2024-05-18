function askQuestion() {
    var userQuestion = document.getElementById("userQuestion").value;
    var answersDiv = document.getElementById("answers");
    var answerText = "";

    if (userQuestion.trim() === "") {
        alert("Please enter a valid question.");
        return;
    }

    switch (userQuestion.toLowerCase()) {
        case "how many city supported?":
            answerText = "27.";
            break;
        case "what is categories?":
            answerText = "There are many catgorizes such as food , hill , Religious and medcine";
            break;
        case "what are cities?":
            answerText = "cairo , ELGouna and Hurghada";
            break;
        default:
            answerText = "Unfortunately, we don't have an answer for that question at the moment.";
            break;
    }

    answersDiv.innerHTML = "<p><strong>Your question:</strong> " + userQuestion + "</p>" +
        "<p><strong>Answer:</strong> " + answerText + "</p>";
}
function addd()
{
    let x = document.getElementById("add");
    let y = document.getElementById("update");
    let z = document.getElementById("delete");
    if(x.style.display==="none")
    {
        x.style.display="block";
        y.style.display="none";
        z.style.display="none";
    }

}
function updatee()
{
    let x = document.getElementById("add");
    let y = document.getElementById("update");
    let z = document.getElementById("delete");
    if(y.style.display==="none")
    {
        y.style.display="block";
        x.style.display="none";
        z.style.display="none";
    }

}
function deletee()
{
    let x = document.getElementById("add");
    let y = document.getElementById("update");
    let z = document.getElementById("delete");
    if(z.style.display==="none")
    {
        z.style.display="block";
        x.style.display="none";
        y.style.display="none";
    }

}
function place()
{
    let x = document.getElementById("city");
    let y = document.getElementById("place");
    let z = document.getElementById("catgory");
    let c = document.getElementById("viewbycity");
    let p = document.getElementById("viewbyplace");
    let d = document.getElementById("viewbycatgory");
    if(y.style.display==="none"&&p.style.display==="none")
    {
        y.style.display="block";
        p.style.display="block";
        x.style.display="none";
        z.style.display="none";
        d.style.display="none";
        c.style.display="none";
    }

}
function city()
{
    let x = document.getElementById("place");
    let y = document.getElementById("city");
    let z = document.getElementById("catgory");
    let c = document.getElementById("viewbycity");
    let p = document.getElementById("viewbyplace");
    let d = document.getElementById("viewbycatgory");
    if(y.style.display==="none"&&c.style.display==="none")
    {
        y.style.display="block";
        c.style.display="block";
        x.style.display="none";
        z.style.display="none";
        p.style.display="none";
        d.style.display="none";
    }

}
function catgory()
{
    let x = document.getElementById("place");
    let y = document.getElementById("catgory");
    let z = document.getElementById("city");
    let c = document.getElementById("viewbycity");
    let p = document.getElementById("viewbyplace");
    let d = document.getElementById("viewbycatgory");
    if(y.style.display==="none"&&d.style.display==="none")
    {
        y.style.display="block";
        d.style.display="block";
        x.style.display="none";
        z.style.display="none";
        p.style.display="none";
        c.style.display="none";
    }

}
function sign()
{
    let x = document.getElementById("sign");
    let y = document.getElementById("login");
    if(x.style.display==="none")
    {
        x.style.display="block";
        y.style.display="none";
    } 
}

function login()
{
    let x = document.getElementById("sign");
    let y = document.getElementById("login");
    if(y.style.display==="none")
    {
        y.style.display="block";
        x.style.display="none";
    } 
}
function close()
{
    let x = document.getElementById("sign");
    x.style.display="none";  
}
function closee()
{
    let x = document.getElementById("login");
    x.style.display="none";  
}