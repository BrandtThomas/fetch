//GET
fetch('http/get.php')
.then(res => {
    if (!res.ok) {
        throw new Error('Une erreur s\'est produite.');
    }
    return res.json();
})
.then(data => console.log(data))
.catch(error => console.error(error));

let form = document.getElementById('form');
let submit = document.getElementById('submit');

form.addEventListener('submit', (e) => {
    e.preventDefault();

    const formData = new FormData(form);
    console.log(formData)

    postData(formData)
})

async function postData(formData){

    const res = await fetch('http/post.php', {
        method: 'POST',
        body: formData
    })
    if (res.ok){
        res.text();
    }

}

