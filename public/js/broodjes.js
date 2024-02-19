document.addEventListener('DOMContentLoaded', function () {
    const maaltijdToggleButton = document.getElementById('baguettesToggleButton');
    const TussendoorToggleButton = document.getElementById('LuxerybunsToggleButton');
    const snacksToggleButton = document.getElementById('bakeryhotToggleButton');

    const filterButtons = document.querySelectorAll('.filter-btn');
    const maaltijdImage = document.getElementById('baguettes'); // Aangepast naar de juiste ID
    const TussendoorImage = document.getElementById('luxurybuns'); // Aangepast naar de juiste ID
    const snacksImage = document.getElementById('bakeryhot'); // Aangepast naar de juiste ID

    let isMaaltijdPlus = true;
    let isTussendoorPlus = true;
    let isSnacksPlus = true;
    let totalPrice = 0;
    const totalPriceElement = document.getElementById('totalPrice'); // Voeg de juiste ID toe

    // Functie om het icoon en de totale prijs bij te werken
    function updateIconAndTotal(button, plusIcon, checkIcon, isPlus, price) {
        plusIcon.style.display = isPlus ? 'none' : 'inline-block';
        checkIcon.style.display = isPlus ? 'inline-block' : 'none';
        if (isPlus) {
            totalPrice += price;
        }
        totalPriceElement.textContent = `€ ${totalPrice.toFixed(2)}`;
    }


  

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            const filterValue = button.getAttribute('data-filter');
            maaltijdImage.style.display = filterValue === 'baguettes' ? 'block' : 'none';
            TussendoorImage.style.display = filterValue === 'luxurybuns' ? 'block' : 'none';
            snacksImage.style.display = filterValue === 'bakeryhot' ? 'block' : 'none';
        });
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const broodjeContainers = document.querySelectorAll('.maaltijd');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            const filterValue = button.getAttribute('data-filter');

            // Verberg eerst alle broodjeContainers
            broodjeContainers.forEach(container => {
                container.style.display = 'none';
            });

            // Toon alleen de broodjes die overeenkomen met de geselecteerde categorie
            broodjeContainers.forEach(container => {
                if (container.getAttribute('data-category') === filterValue) {
                    container.style.display = 'block';
                }
            });
        });
    });
});document.addEventListener('DOMContentLoaded', function () {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const broodjeContainers = document.querySelectorAll('.maaltijd');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            const filterValue = button.getAttribute('data-filter');

            // Verberg eerst alle broodjeContainers
            broodjeContainers.forEach(container => {
                container.style.display = 'none';
            });

            // Toon alleen de broodjes die overeenkomen met de geselecteerde categorie
            broodjeContainers.forEach(container => {
                if (container.getAttribute('data-category') === filterValue) {
                    container.style.display = 'block';
                }
            });
        });
    });
});
