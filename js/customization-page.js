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
cartBadge.innerText = '6';
//let isCartBtnClickedOnce = false;

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
const colorRow = document.getElementById('color-row');
const tyreRow = document.getElementById('tyre-row');
const rimRow = document.getElementById('rim-row');
const lightRow = document.getElementById('light-row');
const tintRow = document.getElementById('tint-row');
let productTableNames = [];
let productTableTypes = [];
let productTableBrands = [];
let productTableSizes = [];
let productTableUnitPrices = [];
let productTableQuantities = [];

//payment information
const totalAmount = document.getElementById('total-amount');
const downAmount = document.getElementById('down-amount');
const installAmount = document.getElementById('install-amount');

productTableNames[1] = 'Stock Red Color';
productTableTypes[1] = 'color';
productTableBrands[1] = '-';
productTableSizes[1] = '-';
productTableQuantities[1] = '-';
productTableUnitPrices[1] = '৳00';

productTableNames[2] = 'Stock Tyre';
productTableTypes[2] = 'tyre';
productTableBrands[2] = 'Stock Tyre';
productTableSizes[2] = '-';
productTableQuantities[2] = '4';
productTableUnitPrices[2] = '৳00';

productTableNames[3] = 'Stock Rim';
productTableTypes[3] = 'rim';
productTableBrands[3] = 'Stock Rim';
productTableSizes[3] = '-';
productTableQuantities[3] = '4';
productTableUnitPrices[3] = '৳00';

productTableNames[4] = 'LED Stock Light';
productTableTypes[4] = 'light';
productTableBrands[4] = 'Stock Light';
productTableSizes[4] = '-';
productTableQuantities[4] = '2';
productTableUnitPrices[4] = '৳00';

productTableNames[5] = 'Stock Window Tint';
productTableTypes[5] = 'tint';
productTableBrands[5] = '-';
productTableSizes[5] = '-';
productTableQuantities[5] = '-';
productTableUnitPrices[5] = '৳00';

//handling click events on mod selection
const cardsEventHandler = (cards, prodID, prices, prodType, types = [], brands = [], sizes = []) => {

    for (let i = 0; i < cards.length; i++) {

        cards[i].addEventListener('click', () => {

            for (let j = 0; j < cards.length; j++) {

                if (cards[j].classList.contains('selected')) {

                    cards[j].classList.remove('selected');

                }
            }

            cards[i].classList.add('selected');

            if (prodType === 'color') {

                colorRow.innerHTML = `
                    <th scope="row">2</th>
                    <td class="prod-id">${prodID + i}</td>
                    <td>${brands[i] ? brands[i].innerText + ' ' + cards[i].classList[0].split('-')[0].charAt(0).toUpperCase() + cards[i].classList[0].split('-')[0].slice(1) : types[i].innerText + ' ' + cards[i].classList[0].split('-')[0].charAt(0).toUpperCase() + cards[i].classList[0].split('-')[0].slice(1)}</td>
                    <td>${cards[i].classList[0].split('-')[0].charAt(0).toUpperCase() + cards[i].classList[0].split('-')[0].slice(1)}</td>
                    <td>${brands[i] ? brands[i].innerText : '-'}</td>
                    <td>${sizes[i] ? sizes[i].innerText : '-'}</td>
                    <td class="unit-price">${prices[i].innerText}</td>
                    <td>
                        <span class="quantity-btn quantity-minus-btn visually-hidden">-</span> 
                        <span class="quantity">-</span>  
                        <span class="quantity-btn quantity-plus-btn visually-hidden">+</span>
                    </td>
                    <td class="product-price">${prices[i].innerText}</td>

                `;

                productTableNames[1] = brands[i] ? brands[i].innerText + ' ' + cards[i].classList[0].split('-')[0].charAt(0).toUpperCase() + cards[i].classList[0].split('-')[0].slice(1) : types[i].innerText + ' ' + cards[i].classList[0].split('-')[0].charAt(0).toUpperCase() + cards[i].classList[0].split('-')[0].slice(1);
                productTableTypes[1] = cards[i].classList[0].split('-')[0].charAt(0).toUpperCase() + cards[i].classList[0].split('-')[0].slice(1);
                productTableBrands[1] = brands[i] ? brands[i].innerText : '-';
                productTableSizes[1] = sizes[i] ? sizes[i].innerText : '-';
                productTableUnitPrices[1] = prices[i].innerText;
                productTableQuantities[1] = '-';
            }

            else if (prodType === 'tyre') {

                if (prices[i].innerText === '৳00') {

                    tyreRow.innerHTML = `
                        <th scope="row">3</th>
                        <td class="prod-id">${prodID + i}</td>
                        <td>${brands[i].innerText}</td>
                        <td>${cards[i].classList[0].split('-')[0].charAt(0).toUpperCase() + cards[i].classList[0].split('-')[0].slice(1)}</td>
                        <td>${brands[i] ? brands[i].innerText : '-'}</td>
                        <td>${sizes[i] ? sizes[i].innerText : '-'}</td>
                        <td class="unit-price">${prices[i].innerText}</td>
                        <td>
                            <span class="quantity-btn quantity-minus-btn visually-hidden">-</span> 
                            <span class="quantity">4</span>  
                            <span class="quantity-btn quantity-plus-btn visually-hidden">+</span>
                        </td>
                        <td class="product-price">${prices[i].innerText}</td>
                    `;

                    productTableQuantities[2] = '4';
                }

                else {

                    tyreRow.innerHTML = `
                        <th scope="row">3</th>
                        <td class="prod-id">${prodID + i}</td>
                        <td>${brands[i].innerText}</td>
                        <td>${cards[i].classList[0].split('-')[0].charAt(0).toUpperCase() + cards[i].classList[0].split('-')[0].slice(1)}</td>
                        <td>${brands[i] ? brands[i].innerText : '-'}</td>
                        <td>${sizes[i] ? sizes[i].innerText : '-'}</td>
                        <td class="unit-price">${prices[i].innerText}</td>
                        <td>
                        <span class="quantity-btn quantity-minus-btn">-</span>
                        <span class="quantity">1</span>
                        <span class="quantity-btn quantity-plus-btn">+</span>
                        </td>
                        <td class="product-price">${prices[i].innerText}</td>
                    `;

                    productTableQuantities[2] = '1';
                }

                productTableNames[2] = brands[i] ? brands[i].innerText + ' ' + cards[i].classList[0].split('-')[0].charAt(0).toUpperCase() + cards[i].classList[0].split('-')[0].slice(1) : types[i].innerText + ' ' + cards[i].classList[0].split('-')[0].charAt(0).toUpperCase() + cards[i].classList[0].split('-')[0].slice(1);
                productTableTypes[2] = cards[i].classList[0].split('-')[0].charAt(0).toUpperCase() + cards[i].classList[0].split('-')[0].slice(1);
                productTableBrands[2] = brands[i] ? brands[i].innerText : '-';
                productTableSizes[2] = sizes[i] ? sizes[i].innerText : '-';
                productTableUnitPrices[2] = prices[i].innerText;
            }

            else if (prodType === 'rim') {

                if (prices[i].innerText === '৳00') {

                    rimRow.innerHTML = `
                        <th scope="row">4</th>
                        <td class="prod-id">${prodID + i}</td>
                        <td>${brands[i].innerText}</td>
                        <td>${cards[i].classList[0].split('-')[0].charAt(0).toUpperCase() + cards[i].classList[0].split('-')[0].slice(1)}</td>
                        <td>${brands[i] ? brands[i].innerText : '-'}</td>
                        <td>${sizes[i] ? sizes[i].innerText : '-'}</td>
                        <td class="unit-price">${prices[i].innerText}</td>
                        <td>
                            <span class="quantity-btn quantity-minus-btn visually-hidden">-</span> 
                            <span class="quantity">4</span>  
                            <span class="quantity-btn quantity-plus-btn visually-hidden">+</span>
                        </td>
                        <td class="product-price">${prices[i].innerText}</td>
                    `;

                    productTableQuantities[3] = '4';
                }

                else {

                    rimRow.innerHTML = `
                        <th scope="row">4</th>
                        <td class="prod-id">${prodID + i}</td>
                        <td>${brands[i].innerText}</td>
                        <td>${cards[i].classList[0].split('-')[0].charAt(0).toUpperCase() + cards[i].classList[0].split('-')[0].slice(1)}</td>
                        <td>${brands[i] ? brands[i].innerText : '-'}</td>
                        <td>${sizes[i] ? sizes[i].innerText : '-'}</td>
                        <td class="unit-price">${prices[i].innerText}</td>
                        <td>
                        <span class="quantity-btn quantity-minus-btn">-</span>
                        <span class="quantity">1</span>
                        <span class="quantity-btn quantity-plus-btn">+</span>
                        </td>
                        <td class="product-price">${prices[i].innerText}</td>
                    `;

                    productTableQuantities[3] = '1';
                }

                productTableNames[3] = brands[i] ? brands[i].innerText + ' ' + cards[i].classList[0].split('-')[0].charAt(0).toUpperCase() + cards[i].classList[0].split('-')[0].slice(1) : types[i].innerText + ' ' + cards[i].classList[0].split('-')[0].charAt(0).toUpperCase() + cards[i].classList[0].split('-')[0].slice(1);
                productTableTypes[3] = cards[i].classList[0].split('-')[0].charAt(0).toUpperCase() + cards[i].classList[0].split('-')[0].slice(1);
                productTableBrands[3] = brands[i] ? brands[i].innerText : '-';
                productTableSizes[3] = sizes[i] ? sizes[i].innerText : '-';
                productTableUnitPrices[3] = prices[i].innerText;
            }

            else if (prodType === 'light') {

                if (prices[i].innerText === '৳00') {

                    lightRow.innerHTML = `
                        <th scope="row">5</th>
                        <td class="prod-id">${prodID + i}</td>
                        <td>${brands[i].innerText}</td>
                        <td>${cards[i].classList[0].split('-')[0].charAt(0).toUpperCase() + cards[i].classList[0].split('-')[0].slice(1)}</td>
                        <td>${brands[i] ? brands[i].innerText : '-'}</td>
                        <td>${sizes[i] ? sizes[i].innerText : '-'}</td>
                        <td class="unit-price">${prices[i].innerText}</td>
                        <td>
                            <span class="quantity-btn quantity-minus-btn visually-hidden">-</span> 
                            <span class="quantity">2</span>  
                            <span class="quantity-btn quantity-plus-btn visually-hidden">+</span>
                        </td>
                        <td class="product-price">${prices[i].innerText}</td>
                    `;

                    productTableQuantities[4] = '2';
                }

                else {

                    lightRow.innerHTML = `
                        <th scope="row">5</th>
                        <td class="prod-id">${prodID + i}</td>
                        <td>${brands[i].innerText}</td>
                        <td>${cards[i].classList[0].split('-')[0].charAt(0).toUpperCase() + cards[i].classList[0].split('-')[0].slice(1)}</td>
                        <td>${brands[i] ? brands[i].innerText : '-'}</td>
                        <td>${sizes[i] ? sizes[i].innerText : '-'}</td>
                        <td class="unit-price">${prices[i].innerText}</td>
                        <td>
                        <span class="quantity-btn quantity-minus-btn">-</span>
                        <span class="quantity">1</span>
                        <span class="quantity-btn quantity-plus-btn">+</span>
                        </td>
                        <td class="product-price">${prices[i].innerText}</td>
                    `;

                    productTableQuantities[4] = '1';
                }

                productTableNames[4] = brands[i] ? brands[i].innerText + ' ' + cards[i].classList[0].split('-')[0].charAt(0).toUpperCase() + cards[i].classList[0].split('-')[0].slice(1) : types[i].innerText + ' ' + cards[i].classList[0].split('-')[0].charAt(0).toUpperCase() + cards[i].classList[0].split('-')[0].slice(1);
                productTableTypes[4] = cards[i].classList[0].split('-')[0].charAt(0).toUpperCase() + cards[i].classList[0].split('-')[0].slice(1);
                productTableBrands[4] = brands[i] ? brands[i].innerText : '-';
                productTableSizes[4] = sizes[i] ? sizes[i].innerText : '-';
                productTableUnitPrices[4] = prices[i].innerText;
            }

            else {

                tintRow.innerHTML = `
                    <th scope="row">6</th>
                    <td class="prod-id">${prodID + i}</td>
                    <td>${brands[i] ? brands[i].innerText + ' ' + cards[i].classList[0].split('-')[0].charAt(0).toUpperCase() + cards[i].classList[0].split('-')[0].slice(1) : types[i].innerText + ' ' + cards[i].classList[0].split('-')[0].charAt(0).toUpperCase() + cards[i].classList[0].split('-')[0].slice(1)}</td>
                    <td>${cards[i].classList[0].split('-')[0].charAt(0).toUpperCase() + cards[i].classList[0].split('-')[0].slice(1)}</td>
                    <td>${brands[i] ? brands[i].innerText : '-'}</td>
                    <td>${sizes[i] ? sizes[i].innerText : '-'}</td>
                    <td class="unit-price">${prices[i].innerText}</td>
                    <td>
                        <span class="quantity-btn quantity-minus-btn visually-hidden">-</span> 
                        <span class="quantity">-</span>  
                        <span class="quantity-btn quantity-plus-btn visually-hidden">+</span>
                    </td>
                    <td class="product-price">${prices[i].innerText}</td>

                `;

                productTableNames[5] = brands[i] ? brands[i].innerText + ' ' + cards[i].classList[0].split('-')[0].charAt(0).toUpperCase() + cards[i].classList[0].split('-')[0].slice(1) : types[i].innerText + ' ' + cards[i].classList[0].split('-')[0].charAt(0).toUpperCase() + cards[i].classList[0].split('-')[0].slice(1);
                productTableTypes[5] = cards[i].classList[0].split('-')[0].charAt(0).toUpperCase() + cards[i].classList[0].split('-')[0].slice(1);
                productTableBrands[5] = brands[i] ? brands[i].innerText : '-';
                productTableSizes[5] = sizes[i] ? sizes[i].innerText : '-';
                productTableUnitPrices[5] = prices[i].innerText;
                productTableQuantities[5] = '-';
            }

        });
    }
}

//calling card event handler function
cardsEventHandler(colorCards, 'M-101', colorPrices, 'color', colorTypes);
cardsEventHandler(tyreCards, 'M-202', tyrePrices, 'tyre', [], tyreBrands);
cardsEventHandler(rimCards, 'M-303', rimPrices, 'rim', [], rimBrands, rimSizes);
cardsEventHandler(lightCards, 'M-404', lightPrices, 'light', lightTypes, lightBrands);
cardsEventHandler(tintCards, 'M-505', tintPrices, 'tint', tintTypes);

document.getElementById('cart-btn').addEventListener('click', () => {

    productTableNames[0] = document.getElementById('car-name').innerText;
    productTableTypes[0] = 'car';
    productTableBrands[0] = document.getElementById('car-brand').innerText;
    productTableSizes[0] = '-';
    productTableQuantities[0] = '-';
    productTableUnitPrices[0] = document.getElementById('car-unit-price').innerText;

    //adding event listners to minus btn
    for (let i = 0; i < minusBtns.length; i++) {

        minusBtns[i].addEventListener('click', () => {

            if (quantities[i].innerText !== '0') {

                quantities[i].innerText = parseInt(quantities[i].innerText) - 1;
                productPrices[i].innerHTML = `৳${parseInt(productPrices[i].innerText.slice(1)) - parseInt(unitPrices[i].innerText.slice(1))}`;
                document.getElementById(`row-${i}-prod-price`).value = productPrices[i].innerText;
                document.getElementById(`row-${i}-quantity`).value = quantities[i].innerText;
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
                document.getElementById(`row-${i}-prod-price`).value = productPrices[i].innerText;
                document.getElementById(`row-${i}-quantity`).value = quantities[i].innerText;
                updateTotalPrice('add', unitPrices[i].innerText.slice(1));
            }
        });

    }

    document.getElementById('row-0-prod-id').value = productIDs[0].innerText;
    document.getElementById('row-0-name').value = productTableNames[0];
    document.getElementById('row-0-type').value = productTableTypes[0];
    document.getElementById('row-0-brand').value = productTableBrands[0];
    document.getElementById('row-0-size').value = productTableSizes[0];
    document.getElementById('row-0-unit-price').value = productTableUnitPrices[0];
    document.getElementById('row-0-quantity').value = productTableQuantities[0];
    document.getElementById('row-0-prod-price').value = productPrices[0].innerText;

    document.getElementById('row-1-prod-id').value = productIDs[1].innerText;
    document.getElementById('row-1-name').value = productTableNames[1];
    document.getElementById('row-1-type').value = productTableTypes[1];
    document.getElementById('row-1-brand').value = productTableBrands[1];
    document.getElementById('row-1-size').value = productTableSizes[1];
    document.getElementById('row-1-unit-price').value = productTableUnitPrices[1];
    document.getElementById('row-1-quantity').value = productTableQuantities[1];
    document.getElementById('row-1-prod-price').value = productPrices[1].innerText;

    document.getElementById('row-2-prod-id').value = productIDs[2].innerText;
    document.getElementById('row-2-name').value = productTableNames[2];
    document.getElementById('row-2-type').value = productTableTypes[2];
    document.getElementById('row-2-brand').value = productTableBrands[2];
    document.getElementById('row-2-size').value = productTableSizes[2];
    document.getElementById('row-2-unit-price').value = productTableUnitPrices[2];
    document.getElementById('row-2-quantity').value = productTableQuantities[2];
    document.getElementById('row-2-prod-price').value = productPrices[2].innerText;

    document.getElementById('row-3-prod-id').value = productIDs[3].innerText;
    document.getElementById('row-3-name').value = productTableNames[3];
    document.getElementById('row-3-type').value = productTableTypes[3];
    document.getElementById('row-3-brand').value = productTableBrands[3];
    document.getElementById('row-3-size').value = productTableSizes[3];
    document.getElementById('row-3-unit-price').value = productTableUnitPrices[3];
    document.getElementById('row-3-quantity').value = productTableQuantities[3];
    document.getElementById('row-3-prod-price').value = productPrices[3].innerText;

    document.getElementById('row-4-prod-id').value = productIDs[4].innerText;
    document.getElementById('row-4-name').value = productTableNames[4];
    document.getElementById('row-4-type').value = productTableTypes[4];
    document.getElementById('row-4-brand').value = productTableBrands[4];
    document.getElementById('row-4-size').value = productTableSizes[4];
    document.getElementById('row-4-unit-price').value = productTableUnitPrices[4];
    document.getElementById('row-4-quantity').value = '1';
    document.getElementById('row-4-prod-price').value = productPrices[4].innerText;

    document.getElementById('row-5-prod-id').value = productIDs[5].innerText;
    document.getElementById('row-5-name').value = productTableNames[5];
    document.getElementById('row-5-type').value = productTableTypes[5];
    document.getElementById('row-5-brand').value = productTableBrands[5];
    document.getElementById('row-5-size').value = productTableSizes[5];
    document.getElementById('row-5-unit-price').value = productTableUnitPrices[5];
    document.getElementById('row-5-quantity').value = '-';
    document.getElementById('row-5-prod-price').value = productPrices[5].innerText;

    initTotalPrice();
});

const initTotalPrice = () => {

    totalPrice.innerText = '৳00';

    for (const productPrice of productPrices) {

        totalPrice.innerText = `৳${parseInt(totalPrice.innerText.slice(1)) + parseInt(productPrice.innerText.slice(1))}`;
        document.getElementById('row-total-price').value = totalPrice.innerText.slice(1);
        totalAmount.innerHTML = `<strong>${totalPrice.innerText}</strong>`;
        downAmount.innerHTML = `<strong>৳${Math.round(parseInt(totalPrice.innerText.slice(1)) * 0.4)}</strong>`;
        installAmount.innerHTML = `<strong>৳${parseInt(totalPrice.innerText.slice(1) - downAmount.innerText.slice(1))}</strong>`;
        document.getElementById('row-down-payment').value = downAmount.innerText.slice(1);
        document.getElementById('row-left').value = installAmount.innerText;
    }
}

const updateTotalPrice = (addOrSub, amount) => {

    if (addOrSub === 'add') {

        totalPrice.innerText = `৳${parseInt(totalPrice.innerText.slice(1)) + parseInt(amount)}`;
        document.getElementById('row-total-price').value = totalPrice.innerText.slice(1);
        totalAmount.innerHTML = `<strong>${totalPrice.innerText}</strong>`;
        downAmount.innerHTML = `<strong>৳${Math.round(parseInt(totalPrice.innerText.slice(1)) * 0.4)}</strong>`;
        installAmount.innerHTML = `<strong>৳${parseInt(totalPrice.innerText.slice(1) - downAmount.innerText.slice(1))}</strong>`;
        document.getElementById('row-down-payment').value = downAmount.innerText.slice(1);
        document.getElementById('row-left').value = installAmount.innerText;
    
    }

    else {
        totalPrice.innerText = `৳${parseInt(totalPrice.innerText.slice(1)) - parseInt(amount)}`;
        document.getElementById('row-total-price').value = totalPrice.innerText.slice(1);
        totalAmount.innerHTML = `<strong>${totalPrice.innerText}</strong>`;
        downAmount.innerHTML = `<strong>৳${Math.round(parseInt(totalPrice.innerText.slice(1)) * 0.4)}</strong>`;
        installAmount.innerHTML = `<strong>৳${parseInt(totalPrice.innerText.slice(1) - downAmount.innerText.slice(1))}</strong>`;
        document.getElementById('row-down-payment').value = downAmount.innerText.slice(1);
        document.getElementById('row-left').value = installAmount.innerText;
    
    }
}

document.getElementById('cash').addEventListener('click', () => {

    document.getElementById('emi-info').classList.add('d-none');
});

document.getElementById('emi').addEventListener('click', () => {

    document.getElementById('emi-info').classList.remove('d-none');
});