console.log(document.getElementById("test").innerText);

tags = document.querySelector(".nav-links").children;
for (let i = 0; i < tags.length; i++) {
    tags[i].addEventListener('click', function (event) {
        alert(event.target.innerText);
    });
}

document.querySelectorAll(".title").forEach((abc) => {
    abc.onclick = function () {
        this.innerHTML = `
        <h3>
            <a href="#"> This is by js</a>
            <p> this is assisgned dynamically</p>
        <\h3>
        this.style.color = "yellow";
        this.style.backgroundColor = "#000000";
        this.style.borderRadius = "10px";
        this.style.padding = "20px";

        `;
        
    };
});

