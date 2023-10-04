document.addEventListener('DOMContentLoaded', function () {
    // DOM-elementen ophalen
    // const totalAmount = document.getElementById('totalAmount')

    const maaltijdToggleButton = document.getElementById('maaltijdToggleButton')
    const maaltijdPlusIcon = document.getElementById('maaltijdPlusIcon')
    const maaltijdCheckIcon = document.getElementById('maaltijdCheckIcon')

    const TussendoorToggleButton = document.getElementById('TussendoorToggleButton')
    const TussendoorPlusIcon = document.getElementById('TussendoorPlusIcon')
    const TussendoorCheckIcon = document.getElementById('TussendoorCheckIcon')

    const warmToggleButton = document.getElementById('warmToggleButton')
    const warmPlusIcon = document.getElementById('warmPlusIcon')
    const warmCheckIcon = document.getElementById('warmCheckIcon')

    const filterButtons = document.querySelectorAll('.filter-button')
    const maaltijdImage = document.getElementById('maaltijdImage')
    const TussendoorImage = document.getElementById('TussendoorImage')
    const warmImage = document.getElementById('warmImage')

    let isMaaltijdPlus = true
    let isTussendoorPlus = true
    let isWarmPlus = true
    // let totalPrice = 0;

    // Functie om het icoon en de totale prijs bij te werken
    function updateIconAndTotal (button, plusIcon, checkIcon, isPlus, price) {
        plusIcon.style.display = isPlus ? 'none' : 'inline-block'
        checkIcon.style.display = isPlus ? 'inline-block' : 'none'
    }

    // Event listener voor maaltijd toggle-knop
    maaltijdToggleButton.addEventListener('click', () => {
        updateIconAndTotal(
            maaltijdToggleButton,
            maaltijdPlusIcon,
            maaltijdCheckIcon,
            isMaaltijdPlus,
            2
        )
        isMaaltijdPlus = !isMaaltijdPlus // Wissel de status
    })

    // Event listener voor Tussendoor toggle-knop
    TussendoorToggleButton.addEventListener('click', () => {
        updateIconAndTotal(
            TussendoorToggleButton,
            TussendoorPlusIcon,
            TussendoorCheckIcon,
            isTussendoorPlus,
            1
        )
        isTussendoorPlus = !isTussendoorPlus // Wissel de status
    })

    // Event listener voor warme maaltijd toggle-knop
    warmToggleButton.addEventListener('click', () => {
        updateIconAndTotal(
            warmToggleButton,
            warmPlusIcon,
            warmCheckIcon,
            isWarmPlus,
            5
        )
        isWarmPlus = !isWarmPlus
    })

    // Event listeners voor filterknoppen
    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            const filterValue = button.getAttribute('data-filter')
            maaltijdImage.style.display =
                filterValue === 'maaltijd' ? 'block' : 'none'
            TussendoorImage.style.display =
                filterValue === 'Tussendoor' ? 'block' : 'none'
            warmImage.style.display = filterValue === 'warm' ? 'block' : 'none'
        })
    })
})
document.querySelectorAll('.filter-button').forEach(function (button) {
    button.addEventListener('click', function () {
        // Verwijder eerst alle groene randen van de items
        document.querySelectorAll('.toggle-button').forEach(function (item) {
            item.style.border = 'none';
        });

        // Voeg een groene rand toe aan het geselecteerde item
        var targetId = this.getAttribute('data-filter');
        var targetElement = document.getElementById(targetId);
        if (targetElement) {
            targetElement.style.border = '2px solid #00FF7F';
        }
    });
});