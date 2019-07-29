const createForm = document.getElementById('form');
const contentContainer = document.getElementById('content');
const titleContainer = document.getElementById('title');
// const imageContainer = document.getElementById('image');

titleContainer.addEventListener('keyup', function (e) {
    let title = document.getElementById('titleOutput');
    title.textContent = e.target.value;
});

contentContainer.addEventListener('keyup', function (e) {
    let content = e.target.value;

    var converter = new showdown.Converter(),
        text = content,
        html = converter.makeHtml(text);

    document.getElementById('output').innerHTML = html;
});
createForm.addEventListener("submit", postData);

function postData(e) {
    let xml = new XMLHttpRequest();
    xml.open("POST", "includes/handlers/create-handler.php", true);
    xml.onload = () => {
        let response = xml.responseText;

        if (response == "success") {
            outputMsg("Success", "success")
        } else {
            outputMsg(response, "error")
        }
    }
    const data = new FormData(createForm);

    xml.send(data)
    e.preventDefault();
}

function outputMsg(msg, type) {
    let msgBox = document.getElementById('message');
    if (type == "success") {
        msgBox.innerHTML =
            `<div class='alert alert-primary' role='alert'> 
            ${msg}
        </div > `;
    } else {
        msgBox.innerHTML =
            `<div class='alert alert-danger' role='alert'> 
            ${msg}
        </div > `;
    }
    // body
}