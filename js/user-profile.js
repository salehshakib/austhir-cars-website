//variables 
const tableBtns = document.getElementsByClassName('table-btn');
const instalmentIDs = document.getElementsByClassName('install-id');
const transactionIDs = document.getElementsByClassName('transac-id');
const paidInstalments = document.getElementsByClassName('paid-install');
const nextInstalmentDates = document.getElementsByClassName('next-ins-date');

//this function is toggling edit info form
const toggleUserInfoEditForm = () => {

    document.getElementById('user-edit-form').classList.toggle('d-none');
    document.getElementById('user-info-table').classList.toggle('d-none');
}

for (let i = 0; i < tableBtns.length; i++) {

    tableBtns[i].addEventListener('click', () => {

        document.getElementById('emi-id').value = instalmentIDs[i].innerText;
        document.getElementById('tran-id').value = transactionIDs[i].innerText;
        document.getElementById('ins-num').value = parseInt(paidInstalments[i].innerText) + 1;
        document.getElementById('ins-date').value = parseNextEMIDate(nextInstalmentDates[i].innerText);
    });
}

//this function is calculating the next installment date
const parseNextEMIDate = date => {

    const d = date.split('-');
    const nextEMIDate = new Date(d[2], d[1] - 1, d[0]);
    nextEMIDate.setMonth(nextEMIDate.getMonth() + 1);
    return ('0' + nextEMIDate.getDate()).slice(-2) + '-' + ('0' + (nextEMIDate.getMonth() + 1)).slice(-2) + '-' + nextEMIDate.getFullYear();
}