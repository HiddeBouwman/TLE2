window.addEventListener("load", init())


function init() {
    let info = document.getElementById('info')
    let facts = document.getElementById('fact')
    let image = document.getElementById('fact-image')
    let button = document.getElementById('button')
    let text = document.getElementById('text')
    let factDiv = document.querySelector('#fact .btn-quaternary') // dit moest ik toevoegen anders kon je bij het feitje nogsteeds ernaast klikken

    info.addEventListener("click", () => swapHidden(facts, image, button, text))
    factDiv.addEventListener("click", () => hideFact(facts, image, button, text)) // veranderd van facts naar factdiv ivm wat hierboven staat
    image.addEventListener("click", () => hideImage(facts, image, button, text))

}

function hideFact(facts, image, button, text) {
    button.classList.add("hidden")
    text.classList.remove("hidden")

    facts.classList.add("hidden")
    image.classList.remove("hidden")

}

function hideImage(facts, image, button, text) {
    button.classList.remove("hidden")
    text.classList.add("hidden")

    image.classList.add("hidden")
    facts.classList.remove("hidden")
}

function swapHidden(facts, image, button, text) {
    if (facts.classList.contains("hidden")) {
        hideImage(facts, image, button, text)
    } else {
        hideFact(facts, image, button, text)
    }

}
