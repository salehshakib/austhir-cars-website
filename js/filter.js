const filterBtn = document.getElementById('filter-btn');
const filterForm = document.getElementById('filter-form');

filterBtn.onclick = function () {

    filterForm.classList.toggle('d-none');
    filterForm.classList.toggle('d-block');
}