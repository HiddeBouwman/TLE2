window.addEventListener("load", init())


function init() {
    let info = document.getElementById('info')
    let facts = document.getElementById('fact')
    let image = document.getElementById('fact-image')

    info.addEventListener("click", () => swap(facts, image))

    facts.addEventListener("click", () => hideFact(facts, image))
    image.addEventListener("click", () => hideImage(facts, image))

}

function hideFact(facts, image) {
    facts.classList.add('hidden')
    image.classList.remove('hidden')
}

function hideImage(facts, image) {
    image.classList.add('hidden')
    facts.classList.remove('hidden')
}

function swap(facts, image) {
    if (facts.classList.contains('hidden')) {
        hideImage(facts, image)
    } else {
        hideFact(facts, image)
    }

}
