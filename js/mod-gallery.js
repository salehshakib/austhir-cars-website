//variables 
const genreBtns = document.getElementsByClassName('car-type-button');

//for selecting a genre
for (const genreBtn of genreBtns) {
    genreBtn.addEventListener('click', () => {

        console.log(genreBtn.innerText);
        for (const btns of genreBtns) {
            btns.classList.remove('selected');
        }

        genreBtn.classList.add('selected');
    });
}