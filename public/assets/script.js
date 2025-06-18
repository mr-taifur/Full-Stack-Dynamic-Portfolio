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
        `;
        this.classList.add("card");

        avatar = document.getElementById("avatar");
        avatar.src = "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.thebullvine.com%2Fmanagement%2Fai-changes-from-artificial-insemination-to-artificial-intelligence-on-the-dairy-farm%2F&psig=AOvVaw3WIuT5dzTv3Pq3d_bf2mRx&ust=1750314416015000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCMi1hLqr-o0DFQAAAAAdAAAAABAE"
        avatar.classList.add("card");
    };
});

