let xml = new XMLHttpRequest();
xml.open("GET", "includes/handlers/fetch-all-posts.php", true);

xml.onload = () => {
    let response = xml.responseText;
    let posts = JSON.parse(response);

    posts.forEach(function (post) {

        let output = `
        <!-- Card 1 -->
        <div class="col-sm mb-5">
            <div class="card" style="width: 100%;">
                <img src="assets/images/${post.imagename}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p>${post.description}</p>
                    <a href="details.php?id=${post.id}" class="card-link">Learn more</a>
                </div>
            </div>
        </div>`;

        document.getElementById(`${post.category}`).innerHTML += output;
    });
}

xml.send()