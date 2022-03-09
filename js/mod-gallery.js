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
const unitPrices = document.getElementsByClassName('unit-price');
const productPrices = document.getElementsByClassName('product-price');
const totalPrice = document.getElementById('total-price');
let productTableNames = [];
let productTableTypes = [];
let productTableBrands = [];
let productTableSizes = [];
let productTableUnitPrices = [];

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

                productTableNames[parseInt(cartBadge.innerText) - 1] = brands[i] ? brands[i].innerText + ' ' + cards[i].classList[0].split('-')[0].charAt(0).toUpperCase() + cards[i].classList[0].split('-')[0].slice(1) : types[i].innerText + ' ' + cards[i].classList[0].split('-')[0].charAt(0).toUpperCase() + cards[i].classList[0].split('-')[0].slice(1);
                productTableTypes[parseInt(cartBadge.innerText) - 1] = cards[i].classList[0].split('-')[0].charAt(0).toUpperCase() + cards[i].classList[0].split('-')[0].slice(1);
                productTableBrands[parseInt(cartBadge.innerText) - 1] = brands[i] ? brands[i].innerText : '-';
                productTableSizes[parseInt(cartBadge.innerText) - 1] = sizes[i] ? sizes[i].innerText : '-';
                productTableUnitPrices[parseInt(cartBadge.innerText) - 1] = prices[i].innerText;

                if (cards[i].classList[0].split('-')[0].charAt(0).toUpperCase() + cards[i].classList[0].split('-')[0].slice(1) === 'Color' || cards[i].classList[0].split('-')[0].charAt(0).toUpperCase() + cards[i].classList[0].split('-')[0].slice(1) === 'Tint') {

                    td1.innerHTML = `
                        <span class="quantity-btn quantity-minus-btn visually-hidden">-</span> 
                        <span class="quantity">-</span>  
                        <span class="quantity-btn quantity-plus-btn visually-hidden">+</span>
                    `;
                } else {

                    td1.innerHTML = `
                        <span class="quantity-btn quantity-minus-btn">-</span> 
                        <span class="quantity">1</span>  
                        <span class="quantity-btn quantity-plus-btn">+</span>
                    `;
                }

                const td2 = document.createElement('td');
                td2.classList.add('product-price');

                td2.innerHTML = `${prices[i].innerText}`;

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

    //adding event listners to minus btn
    for (let i = 0; i < minusBtns.length; i++) {

        minusBtns[i].addEventListener('click', () => {

            if (quantities[i].innerText !== '0') {

                quantities[i].innerText = parseInt(quantities[i].innerText) - 1;
                productPrices[i].innerHTML = `৳${parseInt(productPrices[i].innerText.slice(1)) - parseInt(unitPrices[i].innerText.slice(1))}`;
                document.getElementById(`row-${i + 1}-prod-price`).value = productPrices[i].innerText;
                document.getElementById(`row-${i + 1}-quantity`).value = quantities[i].innerText;
                updateTotalPrice('sub', unitPrices[i].innerText.slice(1));
            }
        });

    }

    //adding event listners to plus btn
    for (let i = 0; i < plusBtns.length; i++) {

        plusBtns[i].addEventListener('click', () => {

            if (quantities[i].innerText !== '5') {

                quantities[i].innerText = parseInt(quantities[i].innerText) + 1;
                productPrices[i].innerHTML = `৳${parseInt(unitPrices[i].innerText.slice(1)) * parseInt(quantities[i].innerText)}`;
                document.getElementById(`row-${i + 1}-prod-price`).value = productPrices[i].innerText;
                document.getElementById(`row-${i + 1}-quantity`).value = quantities[i].innerText;
                updateTotalPrice('add', unitPrices[i].innerText.slice(1));
            }
        });

    }

    document.getElementById('row-1-prod-id').value = productIDs[0] ? productIDs[0].innerText : '';
    document.getElementById('row-1-name').value = productTableNames[0] ? productTableNames[0] : '';
    document.getElementById('row-1-type').value = productTableTypes[0] ? productTableTypes[0] : '';
    document.getElementById('row-1-brand').value = productTableBrands[0] ? productTableBrands[0] : '';
    document.getElementById('row-1-size').value = productTableSizes[0] ? productTableSizes[0] : '';
    document.getElementById('row-1-unit-price').value = productTableUnitPrices[0] ? productTableUnitPrices[0] : '';
    document.getElementById('row-1-quantity').value = '1';
    document.getElementById('row-1-prod-price').value = productPrices[0] ? productPrices[0].innerText : '';

    document.getElementById('row-2-prod-id').value = productIDs[1] ? productIDs[1].innerText : '';
    document.getElementById('row-2-name').value = productTableNames[1] ? productTableNames[1] : '';
    document.getElementById('row-2-type').value = productTableTypes[1] ? productTableTypes[1] : '';
    document.getElementById('row-2-brand').value = productTableBrands[1] ? productTableBrands[1] : '';
    document.getElementById('row-2-size').value = productTableSizes[1] ? productTableSizes[1] : '';
    document.getElementById('row-2-unit-price').value = productTableUnitPrices[1] ? productTableUnitPrices[1] : '';
    document.getElementById('row-2-quantity').value = '1';
    document.getElementById('row-2-prod-price').value = productPrices[1] ? productPrices[1].innerText : '';

    document.getElementById('row-3-prod-id').value = productIDs[2] ? productIDs[2].innerText : '';
    document.getElementById('row-3-name').value = productTableNames[2] ? productTableNames[2] : '';
    document.getElementById('row-3-type').value = productTableTypes[2] ? productTableTypes[2] : '';
    document.getElementById('row-3-brand').value = productTableBrands[2] ? productTableBrands[2] : '';
    document.getElementById('row-3-size').value = productTableSizes[2] ? productTableSizes[2] : '';
    document.getElementById('row-3-unit-price').value = productTableUnitPrices[2] ? productTableUnitPrices[2] : '';
    document.getElementById('row-3-quantity').value = '1';
    document.getElementById('row-3-prod-price').value = productPrices[2] ? productPrices[2].innerText : '';

    document.getElementById('row-4-prod-id').value = productIDs[3] ? productIDs[3].innerText : '';
    document.getElementById('row-4-name').value = productTableNames[3] ? productTableNames[3] : '';
    document.getElementById('row-4-type').value = productTableTypes[3] ? productTableTypes[3] : '';
    document.getElementById('row-4-brand').value = productTableBrands[3] ? productTableBrands[3] : '';
    document.getElementById('row-4-size').value = productTableSizes[3] ? productTableSizes[3] : '';
    document.getElementById('row-4-unit-price').value = productTableUnitPrices[3] ? productTableUnitPrices[3] : '';
    document.getElementById('row-4-quantity').value = '1';
    document.getElementById('row-4-prod-price').value = productPrices[3] ? productPrices[3].innerText : '';

    document.getElementById('row-5-prod-id').value = productIDs[4] ? productIDs[4].innerText : '';
    document.getElementById('row-5-name').value = productTableNames[4] ? productTableNames[4] : '';
    document.getElementById('row-5-type').value = productTableTypes[4] ? productTableTypes[4] : '';
    document.getElementById('row-5-brand').value = productTableBrands[4] ? productTableBrands[4] : '';
    document.getElementById('row-5-size').value = productTableSizes[4] ? productTableSizes[4] : '';
    document.getElementById('row-5-unit-price').value = productTableUnitPrices[4] ? productTableUnitPrices[4] : '';
    document.getElementById('row-5-quantity').value = '1';
    document.getElementById('row-5-prod-price').value = productPrices[4] ? productPrices[4].innerText : '';

    initTotalPrice();
});

const initTotalPrice = () => {

    totalPrice.innerText = '৳00';

    for (const productPrice of productPrices) {

        totalPrice.innerText = `৳${parseInt(totalPrice.innerText.slice(1)) + parseInt(productPrice.innerText.slice(1))}`;
        document.getElementById('row-total-price').value = totalPrice.innerText;

    }
}

const updateTotalPrice = (addOrSub, amount) => {

    if (addOrSub === 'add') {

        totalPrice.innerText = `৳${parseInt(totalPrice.innerText.slice(1)) + parseInt(amount)}`;
        document.getElementById('row-total-price').value = totalPrice.innerText;
    }

    else {
        totalPrice.innerText = `৳${parseInt(totalPrice.innerText.slice(1)) - parseInt(amount)}`;
        document.getElementById('row-total-price').value = totalPrice.innerText;
    }
}
