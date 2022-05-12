const achors = document.querySelectorAll('a[href*="#"]')

for (let achor of achors) {
    achor.addEventListener("click", function(event){
        event.preventDefault();
        const blockID = achor.getAttribute('href')
        document.querySelector('' + blockID).scrollIntoView({
            behavior: "smooth",
            block: "start"
        })
    })
}
