function showtitle() {
    console.log("about me");
}
function showtitle1() {
    console.log("home");
}

// nav = document.getElementsByClassName("navbar");
// for (i=0; i< nav[0].children.length; i++)
// {
//     nav[0].children[i].addEventListener('click',(e)=>{
//         console.log(e.target.innerText);
//     })
// }
document.querySelectorAll("button").forEach((element) => {
    element.onclick = function () {
        document.querySelector(".changed").innerHTML = `
        <p> hello this is an inner html</p>`;
        document.querySelector("img").src =
            "https://static.vecteezy.com/system/resources/thumbnails/036/324/708/small/ai-generated-picture-of-a-tiger-walking-in-the-forest-photo.jpg";
    };
});
