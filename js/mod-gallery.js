//variables 
const genreBtns = document.getElementsByClassName('car-type-button');
const modSectionTitle = document.getElementsByClassName('mods-section-title');
const colorCards = document.getElementsByClassName('color-card');
const colorTypes = document.getElementsByClassName('color-type');
const colorPrices = document.getElementsByClassName('color-price');
const tyreCards = document.getElementsByClassName('tyre-card');
const tyreBrands = document.getElementsByClassName('tyre-brand');
const tyrePrices = document.getElementsByClassName('tyre-price');
const rimCards = document.getElementsByClassName('rim-card');
const rimSizes = document.getElementsByClassName('rim-size');
const rimBrands = document.getElementsByClassName('rim-brand');
const rimPrices = document.getElementsByClassName('rim-price');
const lightCards = document.getElementsByClassName('light-card');
const lightTypes = document.getElementsByClassName('light-type');
const lightBrands = document.getElementsByClassName('light-Brand');
const lightPrices = document.getElementsByClassName('light-Price');
const tintCards = document.getElementsByClassName('tint-card');
const tintTypes = document.getElementsByClassName('tint-type');
const tintPrices = document.getElementsByClassName('tint-price');
let selectedGenre = '';

//for selecting a genre
for (const genreBtn of genreBtns) {
    genreBtn.addEventListener('click', () => {

        for (const btns of genreBtns) {
            btns.classList.remove('selected');
        }

        genreBtn.classList.add('selected');
        selectedGenre = genreBtn.innerText;
    });
}

//serching for mods when clicked on the search mods button
document.getElementById('mods-search-btn').addEventListener('click', () => {

    if (selectedGenre === '') {
        document.getElementById('Not-found-msg-container').classList.remove('d-none');
    }

    else {


        for (const title of modSectionTitle) {

            const titleArr = title.innerText.split(" ");
            title.innerText = `${titleArr[0]} ${titleArr[1]} For ${selectedGenre}`;
        }

        document.getElementById('Not-found-msg-container').classList.add('d-none');
        document.getElementById('mods-section').classList.remove('d-none');
    }
});

//handling click events on mod selection
const cardsEventHandler = (cards, prices, types = [], brands = [], sizes = []) => {

    for (let i = 0; i < cards.length; i++) {

        cards[i].addEventListener('click', () => {

            if (cards[i].classList.contains('selected')) {
                cards[i].classList.remove('selected');
            }
            else {

                for (let j = 0; j < cards.length; j++) {
                    cards[j].classList.remove('selected');
                }

                cards[i].classList.add('selected');
                if (prices[i]) {
                    console.log('price: ', prices[i].innerText);
                }
                if (types[i]) {
                    console.log('Type: ', types[i].innerText);
                }
                if (brands[i]) {
                    console.log('brand: ', brands[i].innerText);
                }
                if (sizes[i]) {
                    console.log('size: ', sizes[i].innerText);
                }
            }
        });
    }
}

cardsEventHandler(colorCards, colorPrices, colorTypes);
cardsEventHandler(tyreCards, tyrePrices, [], tyreBrands);
cardsEventHandler(rimCards, rimPrices, [], rimBrands, rimSizes);
cardsEventHandler(lightCards, lightPrices, lightTypes, lightBrands);
cardsEventHandler(tintCards, tintPrices, tintTypes);