// const openPopUp = document.getElementById('open_pop_up');
// const popUpClose = document.getElementById('pop_up_close');
// const popUp = document.getElementById('pop_up');

// openPopUp.addEventListener('click', function(e){
//     e.preventDefault();
//     popUp.classList.add('active');
// });

// popUpClose.addEventListener('click', () => {
//     popUp.classList.remove('active');
// });

       // Функция для открытия модального окна
       function openModal() {
        document.getElementById("myModal").style.display = "block";
    }

         // Функция для закрытия модального окна
         function closeModal() {
            document.getElementById("myModal").style.display = "none";
        }