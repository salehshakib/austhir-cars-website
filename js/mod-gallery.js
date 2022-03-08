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
const lightBrands = document.getElementsByClassName('light-brand');
const lightPrices = document.getElementsByClassName('light-price');
const tintCards = document.getElementsByClassName('tint-card');
const tintTypes = document.getElementsByClassName('tint-type');
const tintPrices = document.getElementsByClassName('tint-price');
let selectedGenre = '';

//cart variables
const cartBadge = document.getElementById('cart-badge');
let isCartBtnClickedOnce = false;

//modal table
const modalTableBody = document.getElementById('modal-table-body');
const productIDs = document.getElementsByClassName('prod-id');
const modalTableRows = document.getElementsByClassName('table-row');
const minusBtns = document.getElementsByClassName('quantity-minus-btn');
const plusBtns = document.getElementsByClassName('quantity-plus-btn');
const quantities = document.getElementsByClassName('quantity');

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
const cardsEventHandler = (cards, prodID, prices, types = [], brands = [], sizes = []) => {

    for (let i = 0; i < cards.length; i++) {

        cards[i].addEventListener('click', () => {

            if (cards[i].classList.contains('selected')) {
                cards[i].classList.remove('selected');

                //removing table row
                for (let j = 0; j < cards.length; j++) {

                    if (productIDs[j].innerText === prodID + i) {

                        modalTableRows[j].remove();
                        break;
                    }
                }

                cartBadge.innerText = parseInt(cartBadge.innerText) - 1;
            }
            else {

                for (let j = 0; j < cards.length; j++) {

                    if (cards[j].classList.contains('selected')) {

                        //removing table row
                        for (let k = 0; k < productIDs.length; k++) {

                            if (productIDs[k].innerText === prodID + j) {

                                modalTableRows[k].remove();
                            }
                        }

                        cards[j].classList.remove('selected');
                        cartBadge.innerText = parseInt(cartBadge.innerText) - 1;
                    }
                }

                cards[i].classList.add('selected');
                cartBadge.innerText = parseInt(cartBadge.innerText) + 1;

                const tr = document.createElement('tr');
                const td1 = document.createElement('td');

                tr.classList.add('table-row');

                tr.innerHTML = `
                    <th scope="row">${cartBadge.innerText}</th>
                    <td class="prod-id">${prodID + i}</td>
                    <td>${brands[i] ? brands[i].innerText + ' ' + cards[i].classList[0].split('-')[0].charAt(0).toUpperCase() + cards[i].classList[0].split('-')[0].slice(1) : types[i].innerText + ' ' + cards[i].classList[0].split('-')[0].charAt(0).toUpperCase() + cards[i].classList[0].split('-')[0].slice(1)}</td>
                    <td>${cards[i].classList[0].split('-')[0].charAt(0).toUpperCase() + cards[i].classList[0].split('-')[0].slice(1)}</td>
                    <td>${brands[i] ? brands[i].innerText : '-'}</td>
                    <td>${sizes[i] ? sizes[i].innerText : '-'}</td>
                    <td class="unit-price">${prices[i].innerText}</td>
                `;

                if (cards[i].classList[0].split('-')[0].charAt(0).toUpperCase() + cards[i].classList[0].split('-')[0].slice(1) === 'Color' || cards[i].classList[0].split('-')[0].charAt(0).toUpperCase() + cards[i].classList[0].split('-')[0].slice(1) === 'Tint') {

                    td1.innerHTML = `-`;
                } else {

                    td1.innerHTML = `
                        <span class="quantity-btn quantity-minus-btn">-</span> 
                        <span class="quantity">1</span>  
                        <span class="quantity-btn quantity-plus-btn">+</span>
                    `;
                }

                const td2 = document.createElement('td');

                td2.innerHTML = `
                    <td class="product-price">${prices[i].innerText}</td>
                `;

                tr.appendChild(td1);
                tr.appendChild(td2);
                modalTableBody.appendChild(tr);
            }
        });
    }
}

//calling card event handler function
cardsEventHandler(colorCards, 'M-101', colorPrices, colorTypes);
cardsEventHandler(tyreCards, 'M-202', tyrePrices, [], tyreBrands);
cardsEventHandler(rimCards, 'M-303', rimPrices, [], rimBrands, rimSizes);
cardsEventHandler(lightCards, 'M-404', lightPrices, lightTypes, lightBrands);
cardsEventHandler(tintCards, 'M-505', tintPrices, tintTypes);

document.getElementById('cart-btn').addEventListener('click', () => {

    for (let i = 0; i < minusBtns.length; i++) {

        minusBtns[i].addEventListener('click', () => {

            if (quantities[i].innerText !== '0') {

                quantities[i].innerText = parseInt(quantities[i].innerText) - 1;
            }
        });

    }

    for (let i = 0; i < plusBtns.length; i++) {

        plusBtns[i].addEventListener('click', () => {

            if (quantities[i].innerText !== '5') {

                quantities[i].innerText = parseInt(quantities[i].innerText) + 1;
            }
        });

    }

});