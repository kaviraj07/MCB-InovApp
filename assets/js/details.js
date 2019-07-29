let id = window.location.href.replace("http://localhost/Inovapp/details.php?id=", "");

document.getElementById('videotitle').style.display = "none";

let xml = new XMLHttpRequest();
xml.open("GET", "includes/handlers/details-handler.php?id=" + id, true);

xml.onload = () => {
    let response = JSON.parse(xml.responseText);

    document.getElementById('title').innerHTML = response.title + " (" + response.titleincreole + ")";

    let imageLink = "assets/images/" + response.imagename;

    document.getElementById('image').setAttribute("src", imageLink);

    if (response.hasvideo == "1") {
        let videoLink = "assets/videos/" + response.videoname;

        document.getElementById('videotitle').style.display = "block";

        let video = `<video width="100%" height="340" controls>
        <source type="video/mp4" src="${videoLink}">
    </video>`

        document.getElementById('videocontainer').innerHTML = video;

    }

    var converter = new showdown.Converter(),
        text = response.content,
        html = converter.makeHtml(text);

    document.getElementById('content').innerHTML = html;

}

xml.send()