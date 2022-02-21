const scriptURL = 'https://docs.google.com/forms/u/0/d/e/1FAIpQLScrEQXO1rWCuqbrRABdYjROCwKl3lQ0yyPW0fohy0rqPDSAYA/formResponse'
const form = document.forms['google-sheet']




form.addEventListener('submit', e => {
    e.preventDefault()
    fetch(scriptURL, {
            method: 'POST',
            body: new FormData(form)
        })
        .then(
            // alert("Data Inserted")
            // document.location = "index2.html"
            form.reset(),
            document.getElementById("mess").innerHTML = "Thank you for the form submition. We will contact you soon"
        )
        .catch(error => console.error('Error!', error.message))

})